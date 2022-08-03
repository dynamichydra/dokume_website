'use strict';

(function() {

    var $feedDIV = $('#feedDIV');


    var DM_CONFIG = {
      facebookFeed_URL: 'https://graph.facebook.com/v4.0/dokume.net?fields=posts.limit(20)%7Bfull_picture%2Cmessage%2Cattachments%7Bsubattachments%7D%2Ccreated_time%2Cupdated_time%7D%2Clink&access_token=EAAFHkdZAJWEsBABSNRfpfJ7y0ZAenzwsdZAcsexFWZBiN5TMmHHWdtP7yvh1rfguXFygPQPmBb5mRk7SIIX0LPW34mHH6W6h8qbPZCKC60BNUnJs5flVhqmXcuxghIUVFIdIj47ZCbwZAEnS3oNW836FczrnjKBlxWVbpV2eLQZAtksCEAZBhLzhkULtejtgyRZB4ZD'
    };

    init();

    function init() {

      if (localStorage.getItem('socialmessages')) {
        showSocialMessages(JSON.parse(localStorage.getItem('socialmessages')));
      }

      getFacebook();
    }

    function getFacebook() {

      $.get(DM_CONFIG.facebookFeed_URL, function(data) {

        showSocialMessages(data);
        localStorage.setItem('socialmessages', JSON.stringify(data));
      });
    }

    function showSocialMessages(data) {

      $feedDIV.empty();

      var feed = '';

      for (var idx in data.posts.data) {

        if (idx === 'find') {
          continue;
        }

        var msg = '';

        if (data.posts.data[idx].message) {
          msg = data.posts.data[idx].message.replace("\n", "<br><br>");
        }

        var pic = '';

        if (data.posts.data[idx].full_picture) {
          pic = `<a href="${data.posts.data[idx].full_picture}"></a>`;
        }

        if (data.posts.data[idx].type === 'video') {
          //pic += "<img data-original='" + data.posts.data[idx].full_picture + "'>";
          //pic += '<br><div class="card-block"><a href="' + data.posts.data[idx].link.replace('https', 'http') + '" class="btn btn-secondary btn-block" target="_blank">Video ansehen</a></div>';
        }

        if (data.posts.data[idx].type === 'link' && data.posts.data[idx].link) {
          pic += '<br><div class="card-block"><a href="' + data.posts.data[idx].link.replace('https', 'http') + '" class="btn btn-secondary btn-block" target="_blank">Artikel lesen</a></div>';
        }

        var caroussel = '';
        if (data.posts.data[idx].attachments && data.posts.data[idx].attachments.data[0].subattachments.data) {
          var attachments = data.posts.data[idx].attachments.data[0].subattachments.data;

          for (var idx2 in attachments) {
            if (idx2 === '0') continue;
            if (attachments[idx2].type === 'photo') {
              caroussel = `<a href="${attachments[idx2].media.image.src}"></a>`;
            }
          }
        }
        caroussel += '';

        if (pic !== '') {
          pic = `<div class="fotorama" data-nav="thumbs" data-allowfullscreen="true">${pic}</div>`;
        }
        if (caroussel !== '') {
          caroussel = `<div class="fotorama" data-nav="thumbs" data-allowfullscreen="true">${caroussel}</div>`;
        }

        //feed += '<div class="card"><div class="card-block"><i class="pull-right">' + moment(data.posts.data[idx].updated_time).calendar() + '</i><br /><hr /><p>' + msg + '</p></div>' + pic + caroussel + '</div>';
        var messageSplit = msg.split('\n');
        feed += `
        <div class="col-lg-6 col-sm-6">
          <div class="blog_grid_item mb-30">
            <div class="blog_img">
              ${pic + caroussel}
            </div>
            <div class="blog_content">
              <div class="entry_post_info">
                <a href="#">Facebook</a>
                <a href="#">${moment(data.posts.data[idx].updated_time).calendar()}</a>
              </div>
              <a href="#">
                <h5 class="f_p f_size_20 f_500 t_color mb_20">${messageSplit[0]}</h5>
              </a>
              ${messageSplit[1] ? `<p class="f_400 mb-0">${messageSplit[1]}</p>` : ''}
            </div>
          </div>
        </div>`;
      }

      $feedDIV.html(feed);
      //$feedDIV.linkify();

      $('.fotorama').fotorama();
    }
  })();
