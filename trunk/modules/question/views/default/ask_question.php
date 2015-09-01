
    <div class="center-block">
        <p class="head-center-block">Создание вопроса:</p>
        <div class="ask-q">
            <form enctype="multipart/form-data" class="fixed" id="qaForm" name="qaForm" method="post" action="/question/ask">
                <fieldset>
                    <div class="formstatusQ"></div>
                    <div id="showSuccsQ" class="alert success"><i class=""></i>
                    </div>
                    <div id="showErrQ" class="alert error"><i class=""></i>
                    </div>
                    <div class="txt-area-bl">
                        <div class="col-z"><span id="currCountLet">0</span>/140</div>
                        <textarea class="textareaask" id="textareaask" name="textareaask" rows="" cols="" placeholder="Напишите свой вопрос..."><?= $question ?></textarea>
                    </div>


                    <input id="btn-addPhotos" type="file" name="photos[]" multiple="true">

                    <div class="select-block">
                        <select id="catId" name="catId" value="" placeholder="">
                            <option value="">Выберите категорию</option>
                            <? foreach ($category as $item) { ?>
                                <option value="<?= $item['id'] ?>"><?= $item['category'] ?></option>
                            <? } ?>
                        </select>
                    </div>


                </fieldset>

            <div class="end-ask">
                <input type="submit" class="btn btn-submit" value="Задать вопрос" id="submitQ">
            </div>
            </form>
           


        </div>
    </div>

    <script>
    $(document).ready(function() {

     $("#currCountLet").text( $('#textareaask').val().length);
     })
     </script>