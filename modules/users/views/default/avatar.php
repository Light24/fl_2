<?= HTML::script('/assets/default/js/ajax_load.js');?>
<?= HTML::script('/assets/default/js/jquery.tooltip.js');?>

<div class="right-element">
    <div class="center-block">
        <div class="add-photo-block">
            <?
            if ($uid == $user['id']) {
                ?>
                <p class="add-photo-head">Добавьте Ваше фото</p>
                <img id="image_preview" class="avatar img-circle" alt="avatar" 
                     <? if ($user['photo'] != '') { ?> src="/assets/default/avatar/<?= $user['photo'] ?>"<? } else { ?>    
                         src="/assets/default/img/Avatar.png" <? } ?> />


                <form style="height:auto" id="photoPhorm" method="post" name="photoPhorm" action="/user/photos/">
                    <input style="display:none" type="file" id="avatarLoad" name="avatarLoad" >
                    <input type="hidden" name="avatar" id="avatar">
                    <button id="preloadAvatar" class="add-ava" type="button">Загрузить с компьютера</button>
                    <div class="button-group-adp">
                        <!-- <a href="/cabinet" class="skip-step">Отменить</a>-->
                        <button class="ready btn">готово</button>
                    </div>
                </form>
            <? } ?>
            <h3>Фото альбом</h3>
            <ul class="showPhoto"> 
                <?
                $countF = 0;

                $deleted = DB::select('photo')->from('deletePhoto')->where("userId", '=', $uid)->execute()->as_array();
                $itemDel=array();
               
                
                foreach ($deleted as $dl){
                    foreach($dl as $item){
                         array_push($itemDel, $item);
                    }
                }
                
                foreach ($album as $item) {

                    $photos = json_decode($item['photos']);

                    if (!empty($photos)) {
                        foreach ($photos as $photo) {

                            if (!(in_array($photo, $itemDel))) {

                                $countF++;
                            }
                        }
                    }
                }
                $i = 0;
                foreach ($album as $item) {

                    $photos = json_decode($item['photos']);


                    if (!empty($photos)) {
                        ?>

                        <? foreach ($photos as $photo) { ?>

                            <? if (!(in_array($photo, $itemDel))) { ?>
                                <? $i++; ?>


                                <li><a class="fancyImg" title="фото №<?= $i ?> из <?= $countF ?>"  href="/assets/default/photosQ/original/<?= $photo ?>" rel="group">


                                        <img src="/assets/default/photosQ/middle/<?= $photo ?>" width="100" height="100" class = "album-photo" alt="Фото"/>
                                    </a> 
                                    <?
                                    if ($uid == $user['id']) {
                                        ?>
                                        <button data-id="<?= $photo ?>" class="delete_photo">×</button>
                                    <? } ?>
                                </li>
                            <? }
                        } ?>

                        <?
                    }
                    else //{
                        
                        ?>
                    <!--<li>Альбом пуст</li>-->
                    <?
                    //}
                }
                ?>
            </ul>
            <!--<div style="float:left" class="social-block">
                <p>или загрузите фото из других аккаунтов</p>
                <ul class="sc">
                    <li>
                        <a href="#">
                            <img class="soc-icons img-circle" alt="VK" src="/assets/default/img/vk.png">Вконтакте</a>
                    </li>
                    <li>
                        <a href="#">
                            <img class="soc-icons img-circle" alt="FB" src="/assets/default/img/fb.png">Facebook</a>
                    </li>
                    <li>
                        <a href="#">
                            <img class="soc-icons img-circle" alt="TW" src="/assets/default/img/tw.png">Twitter</a>
                    </li>
                    <li>
                        <a href="#">
                            <img class="soc-icons img-circle" alt="IN" src="/assets/default/img/inst.png">Instagram</a>
                    </li>
                </ul>


            </div>-->

        </div>


    </div>
</div>

    <script>
      $(document).ready(function()
      {
        $(function() {

            $(".delete_photo").click(function() {
                if (confirm("Вы действительно хотите удалить фото?")) {

                    var id = $(this).attr("data-id");
                    $.ajax({
                        type: 'POST',
                        url: "/module_users/delete_photo_ajax",
                        dataType: "json",
                        data: {
                            idUser: <?= $uid ?>,
                            photoId: id,
                        },
                        success: function(data) {

                            if (data.success === true) {
                                window.location.reload();
                            }
                            else {
                                alert(data.message)
                            }
                        }
                    });
                }

            })



            var btnUpload = $('#preloadAvatar');

            new AjaxUpload(btnUpload, {
                action: '/module_users/upload_avatar',
//Имя файлового поля ввода
                name: 'avatarLoad',
                onSubmit: function(file, ext) {
                    $("#image_preview").attr('src', '/assets/default/img/712.GIF');
                    if (!(ext && /^(jpg|png|jpeg|gif)$/.test(ext))) {
// Валидация расширений файлов
                        $("#image_preview").attr('src', '/assets/default/img/Avatar.png');
                        alert('Только JPG, PNG, GIF файлы');
                        return false;

                    }

                },
                onComplete: function(file, response) {
//Очищаем текст статуса

//Добавляем загруженные файлы в лист
                    if (response !== "error") {
                        $("#avatar").val(response);
                        $("#image_preview").attr('src', '/assets/default/avatar/' + response);
                    } else {
                        $("#image_preview").attr('src', '/assets/onecard/SVG/man2.svg');
                        alert('Error image verification. Please try again later ')
                    }
                }
            });
        });
    });

    </script>
