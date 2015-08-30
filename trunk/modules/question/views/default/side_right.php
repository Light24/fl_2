 <div class=" right-block ">
<?
$req=($_SERVER['REQUEST_URI']);
?>
  <div class="drop-element-block">
      <p class="head-category">
          <a class = "right-top-btn" href = "<?= '/' . $linkPrefix .'/cats/'?><?if (isset($uid)) echo $uid . '/';?>0">Все категории:</a>
      </p>
      <?
      $addQ='';
      
      ?>
      <? $ft='';
      if(strpos($req, 'cabinet')){
          $ft='cabinet';
      }elseif(strpos($req, 'user')){
          $ft='user';
      }elseif(strpos($req, 'search')){
          $ft='search';
          $addQ="/".$_GET['q'];
      }else{
          $ft='question';
      }
      ?>
      <? foreach ($categories as $item_c) { ?>
          <div class="right-drop">
              <?
                if (isset($_GET['q']) && $_GET['q'] != '') 
                        {
                          ?>
                          <a style="line-height:3" href="/<?= $ft ?><?= $item_c['id'] ?>&search=<?= $_GET['q'] ?>&tid=<?= $item_c['id'].$addQ ?>" class="btn right-btn dropdown-toggle" <!--data-toggle="dropdown"-->
                          <?= $item_c['category'] ?>
                          </a>
                      <? } else { ?>
                            <a style="line-height:3" href="<?= '/' . $linkPrefix .'/cats/'?><?if (isset($uid)) echo $uid . '/';?><?=$item_c['id']?>/<?= $addQ ?>" class="btn right-btn dropdown-toggle <?if (isset($uid) && $item_c['id'] == $uid){?>right-bt-active<?}?>" <!--data-toggle="dropdown"-->
                          <?= $item_c['category'] ?>
                          </a>
                      <? } ?>
              <div class="dropdown-menu">
              Перейти к списку вопросов категории <?=$item_c['category']?>
              </div>

          </div>
      <? } ?>
  </div>
</div>
</div>