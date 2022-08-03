'use strict';

(function() {
  var auth = new DokuMe_Auth('https://dokume.net/platform/');

  $("#loginFORM").submit(login);

  function login(e) {
    e.preventDefault();

    auth.login(document.getElementById('email').value, document.getElementById('pass').value, function(data) {
      if (data !== false) {
        if (data.access_token) {
          window.location = "https://dokume.net/platform/" + window.location.hash;
        } else {
          document.getElementById('errorMsg').style.display = 'block';
          document.getElementById('loginDIV').classList.add('shake');
          document.getElementById('loginDIV').addEventListener('animationend', function() {
            document.getElementById('loginDIV').classList.remove('shake');
          });
        }
      } else {
        alert('Verbindung zu DokuMe nicht möglich. Bitte prüfen Sie Ihre Internetverbindung.');
      }
    });

  }

})();
