<?php
function cmp($a, $b) {
    return strcmp($a->SORT_ORDER, $b->SORT_ORDER);
}


function getFirstImage($data, $type = null){
  if (count($data) < 1) return '';
  usort($data, "cmp");

  foreach($data as $attachement){
    if ($attachement->TYPE === "1") {
      if (!empty($type) && $type == 1) {
        return '<img class="img-fluid" src="' . $attachement->VALUE . '" alt="">';
        return '<div class="imageBG" style="background-image: url(' . $attachement->VALUE . ')"></div>';
      } else {
        return $attachement->VALUE;
      }
    }
  }
  return '';
}

function getMsgAttachements($data) {
    if (count($data) < 1) return '';
    usort($data, "cmp");
    $att = [];
    $attachements = '';
    $gallerieitems = [];
    $imgAmount = 0;
    $imgGallerie = '';
    $firstImage = true;

    foreach ($data as $k=>$v) {
      switch ($v->TYPE) {
        case '1':
          if ($firstImage == true) {
            $att['ogImage'] = $v->VALUE;
            $firstImage = false;
          }

          $thumb = '';

          if ($imgAmount > 0) {

            if ($imgAmount > 0) {
              $thumb = ' class="thumbnail"';
            }
            $imgGallerie .= '<a href="'.$v->VALUE.'"><img data-src="'.$v->VALUE.'" class="lazy"></a>';
          }
          
          $imgAmount++;
          break;
        case '2':
          $attachements .= '<video src="' .$v->VALUE. '" poster="img/VideoPreview.png" controls preload="none"></video>';
          break;

        case '3':
          $gallerieitems[]=array('src'=>$v->VALUE,'w'=>1200,'h'=>600);
          break;

        case '4':
          //continue;
          $attachements .= '<div class="card-block"><a href="' .$v->VALUE. '" target="_blank" class="btn btn-primary btn-block"><i class="fa fa-newspaper-o"></i> Artikel lesen</a></div>';
          break;

        default:
          $attachements .= '<div class="card-block"><a href="' .$v->VALUE. '" target="_blank" class="btn btn-secondary btn-block"><i class="fa fa-paperclip"></i> Anhang herunterladen</a></div>';
          break;
      }
    }

    if ($imgGallerie !== '') {
      $imgGallerie = '<div id="a'.time().'" class="imgGallerie">' . $imgGallerie . '</div>';
    }
    $att['content'] = $imgGallerie.$attachements;
    return $att;
  }

  function getMsgQuestionnaires($data) {
    
    if (empty($data) || count($data) < 1) return '';
    $questionnaires = '';

    // foreach ($data in $k=>$v) {
    //   if (!isset($data->PUSH_APP_MESSAGE_ANSWER) || count($data->PUSH_APP_MESSAGE_ANSWER) < 1) {
    //     continue;
    //   }

    //   $questionnaires .= '<div class="list-group-item" data-questionid="' . $data->ID . '"><center>' . $data->QUESTION . '</center><br />';
    //   $ratingStyle = '';

    //   if (questionsAnswered.indexOf(data.ID) < 0) {
    //     ratingStyle = 'style="display:none"';
    //     questionnaires += '<div class="answerDIV">';
    //     questionnaires += '<button class="questionAnswer" data-answerid="' + data.PUSH_APP_MESSAGE_ANSWER[4].ID + '"><i class="icon-emo-laugh col-xs-1"></i></button><button class="questionAnswer" data-answerid="' + data.PUSH_APP_MESSAGE_ANSWER[3].ID + '"><i class="icon-emo-happy col-xs-1"></i></button><button class="questionAnswer" data-answerid="' + data.PUSH_APP_MESSAGE_ANSWER[2].ID + '"><i class="icon-emo-sleep col-xs-1"></i></button><button class="questionAnswer" data-answerid="' + data.PUSH_APP_MESSAGE_ANSWER[1].ID + '"><i class="icon-emo-unhappy col-xs-1"></i></button><button class="questionAnswer" data-answerid="' + data.PUSH_APP_MESSAGE_ANSWER[0].ID + '"><i class="icon-emo-cry col-xs-1"></i></button><br />';
    //     questionnaires += '</div>';
    //   }

    //   var answer = 0;
    //   var type = null;

    //   for (var idx2 in data.PUSH_APP_MESSAGE_ANSWER) {
    //     var rate = parseInt(data.PUSH_APP_MESSAGE_ANSWER[idx2].ANSWER);

    //     if (rate >= answer) {
    //       answer = rate;
    //       type = data.PUSH_APP_MESSAGE_ANSWER[idx2].TYPE;
    //     }
    //   }

    //   switch (type) {
    //     case '1':
    //       answer = '<i class="icon-emo-cry"></i>';
    //       break;

    //     case '2':
    //       answer = '<i class="icon-emo-unhappy"></i>';
    //       break;

    //     case '3':
    //       answer = '<i class="icon-emo-sleep"></i>';
    //       break;

    //     case '4':
    //       answer = '<i class="icon-emo-happy"></i>';
    //       break;

    //     case '5':
    //       answer = '<i class="icon-emo-laugh"></i>';
    //       break;

    //     default:
    //       answer = null;
    //       break;
    //   }

    //   questionnaires += '<div class="ratingDIV" ' + ratingStyle + '>';

    //   if (answer) {
    //     questionnaires += '<center><i>Die durchschnittliche Antwort:</i><br>' + answer + '</center>';
    //   }

    //   questionnaires += '</div></div>';
    // }

    return $questionnaires;
  }
?>