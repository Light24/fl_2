<div class="right-element">
   
<div class="center-block">
                        <p class="add-photo-head">Изменить профиль.</p>


                        <form class="fixed form-reg" id="editForm" name="editForm" method="POST" action="#">

                            <fieldset>
                                <div class="form-el">
                                    <p class="formh">Ваше имя:</p>
                                    <input class="styler" type="text" placeholder="Ваше имя" name="editFio" value="<?=$_SESSION['fio']?>" id="editFio" />
                                    

                                </div>
                                <div class="form-el">
                                    <p class="formh">Ваш логин:</p>
                                   <span style="line-height: 3">  <?=$_SESSION['login']?></span>

                                </div>

                                <div class="form-el">
                                    <p class="formh">Дата рождения:</p>
                                    
                                    <?
                                    $date_b=Arr::get($_SESSION, 'date_birth');
                                    $date_b=  explode('-', $date_b);
                                    ?>
                                    <?php $year = getdate();   ?>
                                    <select name="editBirthDay" id="editBirthDay" class="sel-reg">
                                        <option value="">число</option>
                                        <?
                                        for($i=1; $i<=31; $i++){?>
                                        <option <? if($date_b[2]==$i){ ?>selected<?}?> value="<?=$i;?>"><?=$i;?></option>    
                                       <? }   ?>
                                        
                                        

                                    </select>

                                    <select name="editBirthMonth" id="editBirthMonth" class="sel-reg">
                                        <option value="">месяц</option>
                                        <option <?if($date_b[1]=='01'){?>selected<?}?> value="01">январь</option>
                                        <option <?if($date_b[1]=='02'){?>selected<?}?> value="02">февраль</option>
                                        <option <?if($date_b[1]=='03'){?>selected<?}?> value="03">март</option>
                                        <option <?if($date_b[1]=='04'){?>selected<?}?> value="04">апрель</option>
                                        <option <?if($date_b[1]=='05'){?>selected<?}?> value="05">май</option>
                                        <option <?if($date_b[1]=='06'){?>selected<?}?> value="06">июнь</option>
                                        <option <?if($date_b[1]=='07'){?>selected<?}?> value="07">июль</option>
                                        <option <?if($date_b[1]=='08'){?>selected<?}?> value="08">август</option>
                                        <option <?if($date_b[1]=='09'){?>selected<?}?> value="09">сентябрь</option>
                                        <option <?if($date_b[1]=='10'){?>selected<?}?> value="10">октябрь</option>
                                        <option <?if($date_b[1]=='11'){?>selected<?}?> value="11">ноябрь</option>
                                        <option <?if($date_b[1]=='12'){?>selected<?}?> value="12">декабрь</option>
                                    </select>

                                    <select name="editBirthYear" id="editBirthYear" class="sel-reg">
                                        <option value="">год</option>
                                         <?
                                        for($i=1940; $i<=$year['year']; $i++){?>
                                        <option <? if($date_b[0]==$i){ ?>selected<?}?> value="<?=$i;?>"><?=$i;?></option>    
                                       <? }   ?>
                                    </select>

                                    <div class="ok message-form hide"></div>
                                    <div class="errorm hide message-form hide"></div>

                                </div>

                                <div class="form-el">
                                    <p class="formh">Город:

                                    </p>
                                    <input class="styler" type="text"  name="editCity" placeholder="" value="<?=$_SESSION['city']?>" id="editCity" />
                                    

                                </div>

                                <div class="form-el">
                                    <p class="formh">Пол:</p>
                                    <div class="check-box">
                                        <input type="radio" name="editSex" id="man-check" value="1" <?if($_SESSION['sex']=='мужской'){?>checked<?}?>>
                                        <label class="radio-inline" for="man-check">
                                            Мужской
                                        </label>

                                        <input type="radio" name="editSex" id="woman-check" value="2" <?if($_SESSION['sex']=='женский'){?>checked<?}?>>
                                        <label class="radio-inline woman-ch" for="woman-check">
                                            Женский
                                        </label>
                                    </div>
                                </div>



                                <div class="form-el">
                                    <p class="formh">E-mail:</p>
                                    
                                    <input class="styler" type="text" placeholder="Email" name="regEmail" value="<?=$_SESSION['email']?>" id="regEmail" />
                                    

                                </div>
                                
                                <div class="form-el">
                                    <p class="formh">Введите новый пароль:</p>
                                    
                                    <input class="styler" type="password" name="editPsw" value="" id="editPsw" />
                                    

                                </div>
                                <div class="form-el">
                                    <p class="formh">Подтвердите пароль:</p>
                                    
                                    <input class="styler" type="password" name="editPsw_t" value="" id="editPsw_t" />
                                    

                                </div>


                                <div class="formstatus"></div>
                                <div style="z-index: 150; position: relative; float:left; " id="showSuccsEdit" class="alert success"><i class=""></i>
                                </div>
                                <div style="z-index: 150; position: relative; float:left;" id="showErrEdit" class="alert error"><i class=""></i>
                                </div>


                            </fieldset>


                        
                        </form>
                        <a style="line-height: 2" href="#" class="btn btn-reg" id="submitEdit">Изменить</a>
                    </div>
    



