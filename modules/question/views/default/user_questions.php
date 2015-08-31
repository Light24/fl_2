<!-- TABS -->
<div class = "center-block">
<div class="tabs-block">
    <ul class="nav nav-tabs">
        <li <? if ($getBest != 1) { ?>class="active"<? } ?>>
          <a href="#quest" data-toggle="tab" <? if ($getBest != 1) { ?> class="active"<? } ?>>Вопросы <span><?= count($questions) ?></span></a>
        </li>
        <li>
          <a id="myansw" href="#answer" data-toggle="tab">Ответы <span></span></a>
        </li>
        <? if ($user !== NULL)
        {
        ?>
          <li <? if ($getBest == 1){ ?>class="active"<? } ?>><a href="#answers" <? if ($getBest == 1) { ?> class="active"<? } ?> data-toggle="tab">Отвечают <span></span></a></li>
        <?
        }
        ?>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane <? if ($getBest != 1) { ?> active<? } ?>" id="quest">
          <? require_once('questions.php'); ?>
        </div>

        <div class="tab-pane" id="answer">
          <? require_once('answers.php'); ?>
        </div>

                    <div class="tab-pane <? if ($getBest == 1) { ?> active<? } ?>" id="answers">

                        <div style="min-height:350px" class="quest">
                            <a href="#">
                                <div class="left-block-q">


                                </div>
                            </a>
                            <div class="right-block-q">
                                <p style="text-align:center; margin-top:25px;" class="login-name">Сходство ответов: <?/*= $countAsk * 100*/ ?>%</p> 

                            </div>

                        </div>
                    </div>

                </div>
            </div>
</div>
<script>
        $(document).ready(function() {
            $("#myansw span").text(<?= count($answers) ?>)
        })

</script>
