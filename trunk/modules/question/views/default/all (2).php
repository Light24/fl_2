<?= HTML::style('default/css/questions.css');?>

<script>

$(document).ready(function()
{
//  question[0]['sd'] = 'sadsadsad';
  questions      = <?=json_encode($questions);?>;
  questionsCount = <?=$questionsCount?>;

  questions.forEach(function(item_aq, index)
  {
    alert(index);
  });
  alert(questionsCount);
});

</script>

<div class="right-element">
    <div class="center-block">
        <p class="head-center-block">Вопросы участников:</p>
        <?php
        $qIndex=0;
        foreach ($questions as $item_aq)
        {
            ++$qIndex;
        ?>
            <div class="quest">
                <a href="/user?id=<?= $item_aq['user_id'] ?>">
                    <div class="left-block-q">
                        <?
                        $avatarImg='';
                        $avatar=$item_aq['photo'];
                        $avatarPath = 'assets/default/avatar/' . $item_aq['photo'];
                        if ($avatar != '' && file_exists($avatarPath))
                          $avatarImg = $avatarPath;
                        else
                          $avatarImg = '/assets/default/img/base-img.png';
                        ?>
                        <img class="base-circle-img-center img-circle" alt="<?= $item_aq['login'] ?>" src="<?=$avatarImg?>" />
                        <p class="login-name"><?= strip_tags($item_aq['login']); ?></p>

                    </div>
                </a>
                <!-- Текст сообщения -->
                <div class="right-block-q">
                    <p><?= strip_tags($item_aq['text_q']); ?></p>
                    <?php
                    $photos = json_decode($item_aq['photos']);
                    if (!empty($photos)) 
                    {?>
                      <ul class="showPhoto"> 
                        <?php
                        $photoIndex = 0;
                        foreach ($photos as $photo)
                        {
                          if (count($photos) == 1)
                          {
                            $width  = 350;
                            $height = 350;
                          }
                          else if (count($photos) == 2)
                          {
                            $width  = 250;
                            $height = 200;
                          }
                          else if (count($photos) == 3 || count($photos) == 4)
                          {
                            $width  = ($photoIndex == 0) ? 350 : 160;
                            $height = ($photoIndex == 0) ? 300 : 93;
                          }
                          else
                          {
                            $width  = 100;
                            $height = 100;
                          }
                          ?>
                          <li>
                            <a rel="group<?=$qIndex?>" class="fancyImg" href="/assets/default/photosQ/original/<?=$photo?>">
                              <img src="/assets/default/photosQ/middle/<?=$photo?>" width="<?=$width?>" height="<?=$height?>" alt="<?= strip_tags($item_aq['login']); ?>"/>
                            </a>
                          </li>
                          <?php
                          ++$photoIndex;
                        }?>
                      </ul>
                    <?
                    }
                    ?>
                </div>
                    <div class="end-quest-block">
                        <p class="category-txt"><?= strip_tags($item_aq['category']); ?></p>
                        <p class="time-q"><?= Controller_Contest::friendlyDate($item_aq['date_post']) ?></p>

                        <div class="button-rait">
                            <button <?if($item_aq['user_id']!= $_SESSION['id']){?> data-id="<?= $item_aq['uidQuest'] ?>" <?}?> class="no-btn btn <?if($item_aq['user_id']== $_SESSION['id']){?> disabled <?}else{?> doNo<?}?>" type="button">Нет(<span class="n"><?= ($item_aq['liken'] != '') ? $item_aq['liken'] : "0"; ?></span>)</button>
                            <button <?if($item_aq['user_id']!= $_SESSION['id']){?> data-id="<?= $item_aq['uidQuest'] ?>" <?}?> class="yes-btn btn <?if($item_aq['user_id']== $_SESSION['id']){?> disabled <?}else{?> doYes<?}?>"  type="button">Да(<span class="y"><?= ($item_aq['likey'] != '') ? $item_aq['likey'] : "0"; ?></span>)</button>
                        </div>

                        <div class="rait-bl">
                            <button class="rait cross  btn" type="button">
                                <img class="plusminus" src="/assets/default/img/cross.png"><span>Пожаловаться</span>
                            </button>
                            <button <?if($item_aq['user_id']!= $_SESSION['id']){?> data-id="<?= $item_aq['uidQuest'] ?>" <?}?> class="rait btn plus-rait <?if($item_aq['user_id']== $_SESSION['id']){?> disabled <?}else{?> doLike <?}?>" type="button">
                                <img class="plusminus" src="/assets/default/img/rait-plus.png"><span><?= ($item_aq['likes'] != '') ? $item_aq['likes'] : "0"; ?></span></button>
                        </div>
                    </div>
            </div>
        <?
        }
        ?>

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
        data: "catID=<?=$catID?>&fromQuestion=<?=$questionsCount?>",
        success: function(responce)
        {
          alert(responce);
          $('#load-questions-ajax').removeAttr('disabled');
        }
      });
    });
  });
</script>
