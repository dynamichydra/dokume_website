'use strict';

(function() {

  init();

  function init() {
    bindEvents();
  }

  function bindEvents() {

    document.getElementById('resetFORM').addEventListener('submit', reset);
    document.getElementById('resendMail').addEventListener('click', resendMail);
  }


  function reset(e) {
    e.preventDefault();

    if (document.getElementById('email').value.trim() === '') {
      return false;
    }

    $.ajax({
      //url: 'https://backend.dokume.us/functions.php/registration/passwordReset',
      url: 'https://dokume.net/backend/src/functions.php/registration/passwordReset',
      type: 'POST',
      data: JSON.stringify({
        email: document.getElementById('email').value.trim()
      })
    }).done(function(data) {
      if (data.SUCCESS !== true) {
        if (data.MESSAGE === 'Can not set Password') {
          if (confirm('Du hast deine Email Adresse noch nicht bestätigt. Sollen wir dir eine neue Email zuschicken?')) {
            resendMail();
          }
        } else if (data.MESSAGE === 'Unknown Email Address') {
          alert('Diese Email Adresse ist uns nicht bekannt.');
        }
        return false;
      }

      document.getElementById('resetDIV').innerHTML = `
      <h2 style='font-size: 35px;'>
        Doku<span style='color: #e35138;'>Me </span><span data-i18n='actionW.passReset'>Passwort zurücksetzen</span>
      </h2>
      <hr>
      <span data-i18n='actionW.sentEmailReset'>Wir haben dir eine Email geschickt. Klicke dort auf den Link, um dein Passwort zurückzusetzen.</span>
      <hr>
      <span data-i18n = 'actionW.ifNoEmailReset'>Falls du keine Email bekommen hast, dann schreibe uns bitte eine Nachricht:</span>
      <br>
      <a href='contact.php'>Zum Kontaktformular</a>`;
    }).fail(function(data) {
      console.log({data});
      if (data.responseJSON.MESSAGE === 'Unknown Email Address') {
        alert('Diese Email Adresse ist uns nicht bekannt.');
      } else {
        alert('Ein Fehler ist aufgetreten. Versuche es bitte nochmal oder kontaktiere den Support.');
      }
    });
  }

  function resendMail(e) {

    $.ajax({
      //url: 'https://backend.dokume.us/functions.php/registration/passwordReset',
      url: 'https://dokume.net/backend/src/functions.php/registration/email/resend',
      type: 'POST',
      data: JSON.stringify({
        email: document.getElementById('email').value.trim()
      })
    }).done(function(data) {
      if (data.SUCCESS !== true) {
        if (data.STATUS == 'completed') {
          alert('Deine Email Adresse wurde bereits erfolgreich bestätigt.');
        } else {
          alert(data.MESSAGE);
        }
        return false;
      }

      document.getElementById('resetDIV').innerHTML = `
      <h2 style='font-size: 35px;'>
        Doku<span style='color: #e35138;'>Me</span>
        <span data-i18n='actionW.passReset'>Email bestätigen</span>
      </h2>
      <hr>
      <span data-i18n='actionW.sentEmailReset'>Wir haben die eine neue Bestätigungsmail zugeschickt.</span>
      <hr>
      <span data-i18n='actionW.ifNoEmailReset'>Falls du keine Email bekommen hast, dann kontaktiere uns bitte:</span>
      <br>
      <a href='mailto:info@dokume.net'>info@dokume.net</a>`;

    });

    /*backend.saveFunction('registration/email/resend', {
      email: email
    }, function(data) {
      if (!util.errorHandler(data)) return false;

      DM_TEMPLATE.showSystemNotification(2, 'Wir haben die eine neue Bestätigungsmail zugeschickt.');
    });*/
  }


  /*function resetDone() {
    $.ajax({
      //url: 'https://dokume.net/backend/src/functions.php/registration/password',
      url: 'https://backend.dokume.us/functions.php/registration/passwordResetDone',
      type: 'POST',
      data: JSON.stringify({
        token: document.getElementById('resetKey').value
      })
    }).done(function(data) {

      if (data.SUCCESS != "true") {
        alert(data.MESSAGE + '\n\nBitte wende dich an das DokuMe Team: info@dokume.net');
        return false;
      }

      var auth = new DokuMe_Auth();

      auth.login(document.getElementById("email").value, document.getElementById("password").value, function(data) {
        if (data !== false) {
          if (data.access_token) {
            window.location = "platform/" + window.location.hash;
          } else if (data == 1) {
            window.location = "platform/" + window.location.hash;
          } else if (data == 2) {
            window.location = "aktivieren.php";
          } else {
            alert(i18next.t('actionW.wrong'));
          }
        } else {
          alert(i18next.t('actionW.wrong'));
        }
      });
    });
  }*/

})();
