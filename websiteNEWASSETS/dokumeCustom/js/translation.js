'use strict';

(function() {
  //init();

  function init() {
    $(".language_select li").on("click", function () {
      var lang = $(this).attr('data-lang');
        localStorage.setItem("language", lang);
        loadLocales();
        $('.language_select li span').removeClass('active');
        $(this).find('span').addClass('active');
        $('.display-lang').html($(this).find('span').html());
    });
    loadLocales();
  }


function loadLocales(url, options, callback, data) {
    var lng = localStorage.getItem("language");
    var lngLabel = "";
    switch (localStorage.getItem("language")) {
    case "de":
    case 'DE':
        lng = "DE";
        lngLabel = "Deutsch";
        break;
    case "en":
    case 'EN':
        lng = "EN";
        lngLabel = "English";
        break;
    case "pl":
    case 'PL':
        lng = "PL";
        lngLabel = "Polski";
        break;
    case "el":
    case 'EL':
        lng = "EL";
        lngLabel = "Greece";
        break;
    case "es":
    case 'ES':
        lng = "ES";
        lngLabel = "Espagnol";
        break;
    case "fr":
    case 'FR':
        lng = "FR";
        lngLabel = "Francaise";
        break;
    case "jp":
    case 'JP':
        lng = "JP";
        lngLabel = "Japanese";
        break;
    default:
        var language = window.navigator.userLanguage || window.navigator.language;
        if(language.includes("de")) {
          lng = "DE";
          lngLabel = "Deutsch";
        } else {
          lng = "EN";
          lngLabel = "English";
        }
        break;
    }
    if (!lng) {
        lng = "de";
        lngLabel = "Deutsch";
    }
    console.log(lng);
    lng = 'en'
    $.ajax({
        url: 'https://dokume.net/backend/src/functions.php/translation/group/13291/' + lng + '?include_data=true',
        async: false
    }).done(function (locale) {
      console.log(locale);
        i18next.init({
            lng: 'en',
            whitelist: ['en', 'de'],
            /*backend: {
                loadPath: 'locales/{{lng}}/translation.json',
                //parse: function(data) { return data.replace(/a/g, '');console.log("hi"); },
                //ajax: loadLocales
            },*/
            resources: {
                en: {
                    translation: locale
                }
            }
        }, function (err, t) {
          jqueryI18next.init(i18next, $,{
              handleName: 'i18n'
          });
            $('body').i18n();
            $(".lang-label").text(lngLabel);
        });
    });
    if (lng === 'EN') {
        $('#four').hide();
    } else {
        $('#four').show();
    }
}
})();
