'use strict';

(function () {

  const PROFILE_ID = 42097;
  const API_KEY = 'rRN2ittVk6L1k6tgdz4ZnB8swVTTBXPcFEgRv8eAVMcetoLWdV1HzWxlQ0Ah6D9b';

  init();

  function init() {
    $('.imgGallerie').lightGallery({
      thumbnail: true,
      download: false
    });
    var myLazyLoad = new LazyLoad({
      elements_selector: ".lazy"
    });
    bindEvents();
  }

  function bindEvents() {
    $('#articleDIV').on('click', '[data-counterid]', function () {
      var btn = this;
      var amount = parseInt(this.dataset.counteramount) + 1;
      $(btn).append(' - wird gespeichert...');
      likeMsg(this.dataset.counterid, function (data) {
        if (data.SUCCESS !== true) return false;
        btn.classList.add('thumb__button--float');
        setTimeout(function () {
          return btn.classList.remove('thumb__button--float');
        }, 2500);
        btn.dataset.counteramount = amount;
        $(btn).html(amount + ' Gefällt mir <i class="fa fa-thumbs-up"></i>');
      });
    });
  }

  function likeMsg(pushAppMessageId, callback) {
    $.ajax({
      url: 'https://api.dokume.net/functions.php/pushapp/vote/' + pushAppMessageId,
      type: 'POST',
      headers: {
        'X-DOKUME-API-KEY': API_KEY,
        'X-DOKUME-PROFILEID': PROFILE_ID
      }
    }).done(callback);
  }

})();