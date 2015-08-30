<div class=" right-block ">
<?
$req=($_SERVER['REQUEST_URI']);
?>
  <div class="drop-element-block">
      <p class="head-category">
          <a class = "right-top-btn" href = "<?= '/' . $linkPrefix .'/cats/'?><?if (isset($uid)) echo $uid . '/';?>0">Все категории:</a>
      </p>

      <? foreach ($categories as $item_c) { ?>
          <div class="right-drop">
              <a style="line-height:3" href="<?= '/' . $linkPrefix .'/cats/'?><?if (isset($uid)) echo $uid . '/';?><?=$item_c['id']?><? if (isset($_GET['q'])) echo '?q=' . $_GET['q']; ?>" class="btn right-btn dropdown-toggle <?if (isset($uid) && $item_c['id'] == $uid){?>right-bt-active<?}?>" <!--data-toggle="dropdown"-->
              <?= $item_c['category'] ?>
              </a>

              <div class="dropdown-menu">
              Перейти к списку вопросов категории <?=$item_c['category']?>
              </div>
          </div>
      <? } ?>
  </div>
</div>
</div>