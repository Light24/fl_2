                    <div class="center-block">
                        <p class="add-photo-head">Добро пожаловать!</p>

                        <form class="fixed form-reg" id="register" name="register" method="POST"  action="#">
                            <fieldset>
                                <div class="form-el">
                                    <p class="formh">Ваше имя:</p>
                                    <input value="<?=$userData['fio']?>" class="styler" type="text" name="regFio" id="regFio" />
                                    <div class="ok hide message-form"></div>
                                    <div class="errorm hide message-form"></div>
                                </div>

                                <div class="form-el">
                                    <p class="formh">Ваш логин:</p>
                                    <input class="styler" type="text" name="regLogin" id="regLogin" />
                                    <div class="ok hide message-form"></div>
                                    <div class="errorm hide message-form"></div>
                                </div>

                                <div class="form-el">
                                    <p class="formh">Дата рождения:</p>
                                    <?php $year = getdate();   ?>
                                    <select name="regBirthDay" id="regBirthDay" class="sel-reg">
                                        <option value="">число</option>
                                        <?
                                        for($i=1; $i<=31; $i++){?>
                                        <option value="<?=$i;?>"><?=$i;?></option>    
                                       <? }   ?>
                                    </select>

                                    <select name="regBirthMonth" id="regBirthMonth" class="sel-reg">
                                        <option value="">месяц</option>
                                        <option value="01">январь</option>
                                        <option value="02">февраль</option>
                                        <option value="03">март</option>
                                        <option value="04">апрель</option>
                                        <option value="05">май</option>
                                        <option value="06">июнь</option>
                                        <option value="07">июль</option>
                                        <option value="08">август</option>
                                        <option value="09">сентябрь</option>
                                        <option value="10">октябрь</option>
                                        <option value="11">ноябрь</option>
                                        <option value="12">декабрь</option>
                                    </select>

                                    <select name="regBirthYear" id="regBirthYear" class="sel-reg">
                                        <option value="">год</option>
                                        <?
                                        for($i=1940; $i<=$year['year']; $i++)
                                        {
                                        ?>
                                          <option value="<?= $i; ?>"> <?= $i; ?> </option>
                                        <?
                                        }
                                        ?>
                                    </select>

                                    <div class="ok message-form hide"></div>
                                    <div class="errorm hide message-form hide"></div>
                                </div>

                                <div class="form-el">
                                    <p class="formh">Город:</p>
                                    <input class="styler" type="text" name="regCity" id="regCity" />
                                    <div class="ok message-form hide"></div>
                                    <div class="errorm hide message-form"></div>
                                </div>

                                <div class="form-el">
                                    <p class="formh">Пол:</p>
                                    <div class="check-box">
                                        <input type="radio" name="regSex" id="man-check" value="1" checked>
                                        <label class="radio-inline" for="man-check">
                                            Мужской
                                        </label>

                                        <input type="radio" name="regSex" id="woman-check" value="2">
                                        <label class="radio-inline woman-ch" for="woman-check">
                                            Женский
                                        </label>
                                    </div>
                                </div>

                                <div class="form-el">
                                    <p class="formh">E-mail:</p>
                                    <input value="<?=$userData['email']?>" class="styler" type="text" name="regEmail" id="regEmail" />
                                    <div class="ok hide message-form"></div>
                                    <div class="errorm message-form hide"></div>
                                </div>

                                <div class="form-el">
                                    <p class="formh">Пароль:</p>
                                    <input class="styler" type="password" name="regPsw" id="regPsw" />
                                    <div class="ok hide message-form"></div>
                                    <div class="errorm message-form hide"></div>
                                </div>

                                <div class="formstatus"></div>
                                <div style="z-index: 150; position: relative; float:left; " id="showSuccsReg" class="alert success"><i class=""></i>
                                </div>
                                <div style="z-index: 150; position: relative; float:left;" id="showErrReg" class="alert error"><i class=""></i>
                                </div>

                                <input value="<?/*=$userData['photo']*/?>" class="styler" type="hidden" name="regPhoto" id="regPhoto" />
                                <input value="<?/*=$userData['uid_vk']*/?>" class="styler" type="hidden" name="uid_vk" id="uid_vk" />
                                <input value="<?/*=$userData['uid_fb']*/?>" class="styler" type="hidden" name="uid_fb" id="uid_fb" />
                                <input value="<?/*=$userData['uid_tw']*/?>" class="styler" type="hidden" name="uid_tw" id="uid_tw" />
                                <input class="styler" type="hidden" name="provider_tw" id="provider_tw" />
                            </fieldset>
                        </form>
                        <a style="line-height:2" class="btn btn-reg" id="reg_submit">Регистрация</a>

                        <div class="social-block">
                            <p>или войдите через один из Ваших аккаунтов:</p>
                            <ul class="sc">
                                <li>
                                    
                                    <a href='/registration/vk'">
                                        <img class="soc-icons img-circle" alt="VK" src="/assets/default/img/vk.png">Вконтакте</a>
                                </li>
                                <li>
                                    <a href='/registration/fb'>
                                        <img class="soc-icons img-circle" alt="FB" src="/assets/default/img/fb.png">Facebook</a>
                                </li>
                                <li>
                                    <a href='/registration/tw'>
                                        <img class="soc-icons img-circle" alt="TW" src="/assets/default/img/tw.png">Twitter</a>
                                </li>
                                <li>
                                    <a href='/registration/in'>
                                        <img class="soc-icons img-circle" alt="IN" src="/assets/default/img/inst.png">Instagram</a>
                                </li>
                            </ul>
                        </div>
                    </div>

<script>
  /*Рег-ция*/
  $(document).ready(function()
  {
    var register = $("#register");
    var registerValidator = {
        'formId': 'register',
        'fields': {
            regEmail: {
                required: true,
                email: true
            },
            regFio: {
                required: true,
                fio: true,
                minlength: 2
            },
            regLogin: {
                required: true,
                minlength: 2
            },
            regCity: {
                required: true,
                fio: true,
                minlength: 2
            },
            /*regSex: {
             required: true
             },
             regBirthDay: {
             required: true
             },
             regBirthMonth: {
             required: true
             },
             regBirthYear: {
             required: true
             },*/
            regPsw: {
                psw: true,
                required: true,
                minlength: 6
            },
        },
        'messages': {
            regEmail: {
                required: "Укажите Ваш e-mail адрес",
                email: "Укажите корректный e-mail"
            },
            regFio: {
                required: "Укажите Ваши фамилию, имя, отчество",
                fio: "Поле должно содержать только кириллические символы",
                minlength: "Логин не может быть короче 2 символов"
            },
            regLogin: {
                required: "Укажите Ваш логин",
                minlength: "Логин не может быть короче 2 символов"
            },
            regCity: {
                required: "Укажите Ваш город",
                fio: "Город должен содержать только кириллические символы",
                minlength: "Город не может быть короче 2 символов"
            },
            regSex: {
                required: "Укажите Ваш пол",
            },
            regBirthDay: {
                required: "Укажите день рождения"
            },
            regBirthMonth: {
                required: "Укажите месяц рождения"
            },
            regBirthYear: {
                required: "Укажите год рождения"
            },
            regPsw: {
                required: "Укажите пароль",
                minlength: "Минимальная длина пароля - 6 символов",
                psw: "Пароль может содержать только латинские буквы и цифры"
            }


        },
        'methods': {
            required: function(parameter, value) {
                return !parameter || value != '';
            },
            equalTo: function(parameter, value) {
                return $(parameter).val() == value;
            },
            minlength: function(parameter, value) {
                return value.length >= parameter;
            },
            maxlength: function(parameter, value) {
                return value.length <= parameter;
            },
            exaclenght: function(parameter, value) {
                return value.length == parameter;
            },
            psw: function(parameter, value) {
                return !parameter || /^([a-zA-Z0-9])*$/i.test(value);
            },
            min: function(parameter, value) {
                return value >= parameter;
            },
            max: function(parameter, value) {
                return value <= parameter;
            },
            fio: function(parameter, value) {
                return !parameter || /^([а-яА-ЯёЁйЙ ])*$/i.test(value);
            },
            email: function(parameter, value) {
                return !parameter || /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i.test(value);
            }
        },
        'onerror': function(element, error) {
            if (element.length != 1) {
                element = element.first();
            }
            if (element.data('tooltip')) {
                element.tooltip('hide');
                delete element.data()['tooltip'];
            }
            element.tooltip({
                'placement': 'right',
                'title': error,
                'trigger': 'manual'
            }).tooltip('show');
            return false;
        },
        'onsuccess': function(element) {
            if (element.data('tooltip')) {
                element.tooltip('hide');
                delete element.data()['tooltip'];
            }
        },
        'onsubmit': function() {

            //loginByEmail.submit();
        },
        'init': function() {
            var _this = this;

            register.submit(function(event)
            {
                if (_this.validate())
                {
                    event.preventDefault();

                    $.ajax(
                    {
                        url: "/module_users/ajax_registration",
                        data: $('#register').serialize(),
                        type: "POST",
                        dataType: "json",
                        beforeSend: function()
                        {
                            $("#showSuccsReg").html("");
                            $("#showSuccsReg").hide();
                            $("#showErrReg").html("");
                            $("#showErrReg").hide();
                        }
                    })
                    complete(function(json)
                    {

                    })
                    done(function(json)
                    {
                        if (json.success === true) {
                            window.location.href = "/user/registration/success";

                        }
                        else {
                            $("#showErrReg").show();
                            $("#showErrReg").text(json.message);

                        }
                    }).error(function() {
                        $("#showErrReg").show();
                        $("#showErrReg").text('Ошибка! Попробуйте позже.');
                    });
                } else {
                    event.preventDefault();
                }
            });
            register.find('input, textarea, select').focusout(function() {

                var name = $(this).attr('name');
                _this.validate(name);
            });
            register.find('input, textarea').keydown(function() {
                var name = $(this).attr('name');
                setTimeout(function() {
                    _this.validate(name);
                }, 1);
            });
        },
        'hideErrors': function(field) {
            var names = [];
            var i;
            if (field) {
                if (this.fields[field]) {
                    names[names.length] = field;
                }
            } else {
                for (i in this.fields) {
                    names[names.length] = i;
                }
            }
            for (var name in names) {
                var element;
                element = $('#' + this.formId + ' *[name="' + names[name] + '"]');
                try {
                    this.onsuccess(element);
                } catch (e) {
                }
            }
        },
        'validate': function(field) {
            var names = [];
            var i;
            var globalResult = true;
            if (field) {
                if (this.fields[field]) {
                    names[names.length] = field;
                }
            } else {
                for (i in this.fields) {
                    names[names.length] = i;
                }
            }
            for (var name in names) {
                var fieldResult = true;
                var fieldMessage = 'Недопустимое значение';
                name = names[name];
                for (var rule in this.fields[name]) {
                    if (this.methods[rule]) {
                        var parameter;
                        if (typeof this.fields[name][rule] == 'function') {
                            parameter = this.fields[name][rule]();
                        } else {
                            parameter = this.fields[name][rule];
                        }
                        var element;
                        element = $('#' + this.formId + ' *[name="' + name + '"]');
                        var value;
                        if (element.is('input[type="checkbox"]')) {
                            if (element.is(':checked')) {
                                value = 'checked';
                            } else {
                                value = '';
                            }
                        } else if (element.is('input[type="radio"]')) {
                            value = $('#' + this.formId + ' *[name="' + name + '"]:checked').val();
                            if (value == null) {
                                value = '';
                            }
                        } else {
                            value = element.val();
                        }
                        var result = this.methods[rule](parameter, value);
                        if (result == false && fieldResult == true) {
                            fieldMessage = this.messages[name][rule];
                        }
                        globalResult = globalResult && result;
                        fieldResult = fieldResult && result;
                    }
                }
                if (fieldResult) {
                    try {
                        this.onsuccess(element);
                    } catch (e) {
                    }
                } else {
                    try {
                        this.onerror(element, fieldMessage);
                    } catch (e) {
                    }
                }
            }
            return globalResult;
        }
    };
    registerValidator.init();
  });
</script>