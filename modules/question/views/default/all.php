<script>
function strip_tags(input, allowed)
{
  if (input == null)
    return;

  allowed = (((allowed || '') + '')
      .toLowerCase()
      .match(/<[a-z][a-z0-9]*>/g) || [])
    .join(''); // making sure the allowed arg is a string containing only tags in lowercase (<a><b><c>)
  var tags = /<\/?([a-z][a-z0-9]*)\b[^>]*>/gi,
    commentsAndPhpTags = /<!--[\s\S]*?-->|<\?(?:php)?[\s\S]*?\?>/gi;
  return input.replace(commentsAndPhpTags, '')
    .replace(tags, function($0, $1) {
      return allowed.indexOf('<' + $1.toLowerCase() + '>') > -1 ? $0 : '';
    });
}
</script>
<?= HTML::style('default/css/questions.css');?>

<script>

$(document).ready(function()
{
  questions      = <?=json_encode($questions);?>;
  questionsCount = <?=$questionsCount?>;

  questions.forEach(addQuestion);


});

  function addQuestion(item_aq, qIndex)
  {
           avatarImg='';
           avatar = item_aq['photo'];
           avatarPath = '/assets/default/avatar/' + item_aq['photo'];
           if (avatar != '')
             avatarImg = avatarPath;
           else
             avatarImg = '/assets/default/img/base-img.png';

           item_aq['login'] = strip_tags(item_aq['login']);
           item_aq['text_q'] = strip_tags(item_aq['text_q']);
           photos = $.parseJSON(item_aq['photos']);

           //********* Зафигачим правый блок -**********//
           rightBlock = '<div class="right-block-q"> \
                           <p>' + item_aq['text_q'] + '</p>';


           //item_aq['date_post'] = < ? php Controller_Contest::friendlyDate($item_aq['date_post']) ?>


           if (photos.length != 0)
           {
             rightBlock += '<ul class="showPhoto">';

             photos.forEach (function(photo, photoIndex)
             {
                 if (photos.length == 1)
                 {
                   width  = 350;
                   height = 350;
                 }
                 else if (photos.length == 2)
                 {
                   width  = 250;
                   height = 200;
                 }
                 else if (photos.length == 3 || photos.length == 4)
                 {
                   width  = (photoIndex == 0) ? 350 : 160;
                   height = (photoIndex == 0) ? 300 : 93;
                 }
                 else
                 {
                   $width  = 100;
                   $height = 100;
                 }
                 
                 rightBlock += '<li>\
                   <a rel="group' + qIndex + '" class="fancyImg" href="/assets/default/photosQ/original/' + photo + '">\
                     <img src="/assets/default/photosQ/middle/' + photo + '" width="' + width + '" height="' + height + '" alt="' + strip_tags(item_aq['login']) + '"/>\
                   </a>\
                 </li>';
             });
             rightBlock += '</ul>';
           }
           rightBlock += '</div>';

           tag_data_id    = (item_aq['user_id'] != <?=intval($user['id'])?>) ? ('data-id = "' + item_aq['uidQuest'] + '"') : '';

           class_do_no    = (item_aq['user_id'] == <?=intval($user['id'])?>) ? 'disabled' : 'doNo';
           class_do_yes   = (item_aq['user_id'] == <?=intval($user['id'])?>) ? 'disabled' : 'doYes';
           class_do_like  = (item_aq['user_id'] == <?=intval($user['id'])?>) ? 'disabled' : 'doLike';

           liken = (item_aq['liken'] != null) ? item_aq['liken'] : "0"; 
           likey = (item_aq['likey'] != null) ? item_aq['likey'] : "0";
           likes = (item_aq['likes'] != null) ? item_aq['likes'] : "0";

            $('#questions').append($('<div class="quest">\
                <a href="/user?id=' + item_aq['user_id'] + '">\
                    <div class="left-block-q">\
                        <img class="base-circle-img-center img-circle" alt="' + item_aq['login'] + '" src="' + avatarImg + '" />\
                        <p class="login-name">' + item_aq['login'] + '</p>\
                    </div>\
                </a>' + rightBlock + '\
                    <div class="end-quest-block">\
                        <p class="category-txt">' + strip_tags(item_aq['category']) + '</p>\
                        <p class="time-q">' + item_aq['date_post'] + '</p>\
                        <div class="button-rait">\
                            <button ' + tag_data_id + ' class="no-btn btn  ' + class_do_no +  '" type="button">Нет(<span class="n">' + liken + '</span>)</button>\
                            <button ' + tag_data_id + ' class="yes-btn btn ' + class_do_yes + '" type="button">Да(<span class="y">'  + likey + '</span>)</button>\
                        </div>\
                        <div class="rait-bl">\
                            <button class="rait cross  btn" type="button">\
                                <img class="plusminus" src="/assets/default/img/cross.png"><span>Пожаловаться</span>\
                            </button>\
                            <button ' + tag_data_id + ' class="rait btn plus-rait ' + class_do_like + '" type="button">\
                                <img class="plusminus" src="/assets/default/img/rait-plus.png"><span>' + likes + '</span>\
                            </button>\
                        </div>\
                    </div>\
            </div>'));
  }

</script>

<div class="right-element">
    <div class="center-block">
        <p class="head-center-block">Вопросы участников:</p>
        <span id = 'questions'>
        </span>
        <span style="line-height:2" id ="load-questions-ajax" class = "btn">Больше вопросов</span>
    </div>
</div>

<script>

  $(document).ready(function()
  {
    $('#load-questions-ajax').click(function()
    {
      $('#load-questions-ajax').attr('disabled', 'disabled');

      $.ajax(
      {
        type: "POST",
        dataType: "json",
        url: "/user_question/get_questions_ajax",
        data: "catID=<?=$catID?>&fromQuestion=" + questionsCount,
        success: function(responce)
        {
          questionsCount += responce['data'].length;
          responce['data'].forEach(addQuestion);

          $('#load-questions-ajax').removeAttr('disabled');
          if (responce['isAllElement'])
            $('#load-questions-ajax').css('visibility', 'hidden');
        }
      });
    });

// Функции, реагирующие на нажатие кнопок
    $('body').on('click', '.doNo', function(e) {
        e.preventDefault();
        var obj = this;
        var id_work = ($(this).attr('data-id'));
        var count = $(this).find(".n").text();
        count = +count;
        if (typeof(id_work) != 'undefined') {
            $.ajax({
                type: 'POST',
                url: "/module_question/do_answ_no_ajax",
                dataType: "json",
                data: {
                    idWork: id_work,
                },
                success: function(data) {
                    var d = parseInt(count, 10);
                    d++;
                    if (data.success === true) {
                        $(obj).text('');
                        $(obj).text("Нет(" + d + ")");
                        alert(data.message);

                    }
                    else {
                        alert(data.message)
                    }
                }
            });
            return false;
        }
        else
        {
            return false;
        }
    });


    $('body').on('click', '.doYes', function(e) {
        e.preventDefault();
        var obj = this;
        var id_work = ($(this).attr('data-id'));
        var count = $(this).find(".y").text();
        count = +count;
       
        if (typeof(id_work) != 'undefined') {
            $.ajax({
                type: 'POST',
                url: "/module_question/do_answ_yes_ajax",
                dataType: "json",
                data: {
                    idWork: id_work,
                },
                success: function(data) {
                    var d = parseInt(count, 10);
                    d++;
                    if (data.success === true) {
                        $(obj).text('');
                        $(obj).text("Да(" + d + ")");
                        alert(data.message);
                    }
                    else
                    {
                        alert(data.message)
                    }
                }
            });
            return false;
        }
        else
        {
          return false;
        }


    });


    $('body').on('click', '.doLike', function(e)
    {
        e.preventDefault();
        var obj = this;
        var id_work = ($(this).attr('data-id'));
        var count = $(this).find('span').text();
        count = +count;
        if (typeof(id_work) != 'undefined')
        {
            $.ajax({
                type: 'POST',
                url: "/module_question/do_like_ajax",
                dataType: "json",
                data: {
                    idWork: id_work,
                },
                success: function(data) {

                    if (data.success === true) {
                        $(obj).find('span').text('');
                        $(obj).find('span').text(count + 1);
                        alert(data.message);

                    }
                    else {
                        alert(data.message)
                    }
                }
            });
            return false;
        }
        else {

            return false;
        }
    });

  });
</script>
