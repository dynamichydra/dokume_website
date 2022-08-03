'use strict';

(function() {

  init();

  function init() {
    getCategories();
    bindEvents();
  }

  function bindEvents() {
    document.getElementById('signupFORM').addEventListener('submit', signup);
  }

  function getCategories() {

    $.get('https://dokume.net/backend/src/functions.php/registration/categories?include_data=true', function(data) {

      data = data.MESSAGE.sort(function(a, b) {
        if (a.CATEGORY > b.CATEGORY) {
          return 1;
        } else if (a.CATEGORY < b.CATEGORY) {
          return -1;
        } else {
          return 0;
        }
      });

      for (var idx in data) {
        document.getElementById('category').innerHTML += `<option value='${data[idx].ID}'>${data[idx].CATEGORY}</option>`;
      }
    });

  }

  function signup(e) {
    e.preventDefault();

    $.ajax({
      url: 'https://dokume.net/backend/src/functions.php/registration',
      type: 'POST',
      data: JSON.stringify({
        CATEGORY: document.getElementById('category').value,
        firstname: document.getElementById('firstname').value,
        lastname: document.getElementById('lastname').value,
        email: document.getElementById('email').value
      })
    }).done(function(data) {
      if (data.SUCCESS !== true) {
        /*new PNotify({
          text: i18next.t(data.MESSAGE),
          type: 'error'
        });*/
        if (data.MESSAGE === 'notification.duplicate_mail') {
          alert('Für die eingegebene Email Adresse ist bereits ein Konto vorhanden. Klicke auf Anmelden, um dich mit deinem Konto einzuloggen.');
        } else {
          alert(data.MESSAGE);
        }

        return false;
      }

      localStorage.removeItem('authConfig');
      window.location = 'https://dokume.net/signup/setpassword.html?key=' + data.MESSAGE.KEY;

    });
  }

  function resetAllLogins(data) {

    localStorage.removeItem('authConfig');
    window.location = 'setpassword.html#' + data.MESSAGE.KEY


    if (authConfig.token && authConfig.refresh) {
      $.post('../platform/class/rest.php/settings/logout', {
        token: authConfig.token,
        refresh: authConfig.refresh
      }, function(data) {

        localStorage.removeItem('authConfig');

        //window.location = 'setpassword.html#' + data.MESSAGE.KEY;
      }).fail(function() {
        //window.location = 'setpassword.html#' + data.MESSAGE.KEY;
      });

    } else {
      //window.location = 'setpassword.html#' + data.MESSAGE.KEY;
    }
  }
})();
