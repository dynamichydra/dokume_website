function showNews(data) {
  var html = '';
  var html2 = '';

  for (var idx in data) {

    var categories = '';

    for (var idx2 in data[idx].PUSH_APP_MESSAGE_CATEGORY) {
      if (idx2 > 0) {
        categories += ', ';
      }
      categories += data[idx].PUSH_APP_MESSAGE_CATEGORY[idx2].CATEGORY_ID.NAME;
    }

    if (data[idx].TYPE == 1) {
      var img = data[idx].PUSH_APP_MESSAGE_ATTACHEMENT ? getFirstImage(data[idx].PUSH_APP_MESSAGE_ATTACHEMENT, 1) : '';
      html2 += `
      <div class="media post_item">
        ${img !== '' ? img : '<img src="https://api.dokume.net/functions.php/storage/avatar/42097">'}
        <div class="media-body">
          <a href="blog-detail.php?id=${data[idx].ID}"">
            <h3 class="f_size_16 f_p f_400">${data[idx].TITLE}</h3>
          </a>
        </div>
      </div>`
    }

    html += `
    <div class="blog_list_item mb_50">
      ${data[idx].PUSH_APP_MESSAGE_ATTACHEMENT ? getFirstImage(data[idx].PUSH_APP_MESSAGE_ATTACHEMENT, 1) : ''}
      <div class="blog_content">
        <a href="blog-detail.php?id=${data[idx].ID}">
          <h5 class="f_p f_size_20 f_500 t_color mb_20">${data[idx].TITLE}</h5>
        </a>
        <small>${categories} - ${moment(data[idx].PUBLISH).format("DD.MM.YYYY HH:mm")}</small>
        <p class="f_400 mb_20">${data[idx].MESSAGE}</p>

        ${data[idx].MESSAGE_MORE ? `<a href="blog-detail.php?id=${data[idx].ID}" class="read-more-animation" style="text-decoration: none;">Weiterlesen</a>` : ''}

      </div>
    </div>`
  }

  $(".dm-pushapp-widget").html(html);
  $("#pinnedArticles").html(html2);
}

function getFirstImage(data, type) {
  if (data.length < 1) return '';

  data = data.sort(function (a, b) {
    return a.SORT_ORDER - b.SORT_ORDER;
  });

  for (var idx in data) {
    if (idx === 'find') continue;

    if (data[idx].TYPE === "1") {
      if (type == 1) {
        return `<img class="img-fluid" src="${data[idx].VALUE}" alt="">`;
      } else {
        return data[idx].VALUE;
      }
    }
  }
}