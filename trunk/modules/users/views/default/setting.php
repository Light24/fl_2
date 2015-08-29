<div class="right-element">
  <div class="center-block">
    <p class="add-photo-head">Изменить профиль.</p>

    <form class = "fixed form-reg" id = "editForm" name = "editForm" method = "POST" action = "#">
      <fieldset>
        <div class="form-el">
          <p class="formh">Ваше имя:</p>
          <input class="styler" type="text" placeholder="Ваше имя" name="editFio" value="<?=$user['fio']?>" id="editFio" />
        </div>

        <div class="form-el">
          <p class="formh">Ваш логин:</p>
          <?
          if ($user['login'] == '')
          {?>
            <input class="styler" type="text" placeholder="Ваше имя" name="regLogin" value="<?=$user['login']?>" id="regLogin" />
          <?
          }
          else
          {?>
            <span style="line-height: 3">  <?=$user['login']?></span>
          <?}?>
        </div>

        <div class="form-el">
          <p class="formh">Дата рождения:</p>
          <?
          $date_b=Arr::get($user, 'date_birth');
          $date_b=  explode('-', $date_b);
          ?>
          <?php $year = getdate();   ?>
          <select name="editBirthDay" id="editBirthDay" class="sel-reg">
          <option value="">число</option>
          <?
          for($i=1; $i<=31; $i++){?>
          <option <? if($date_b[2]==$i){ ?>selected<?}?> value="<?=$i;?>"><?=$i;?></option>    
          <?
          }
          ?>
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
          for($i=1940; $i<=$year['year']; $i++)
          {
          ?>
            <option <? if($date_b[0]==$i){ ?>selected<?}?> value="<?=$i;?>"><?=$i;?></option>
          <?
          }
          ?>
          </select>

          <div class="ok message-form hide"></div>
          <div class="errorm hide message-form hide"></div>

        </div>

        <div class="form-el">
        <p class="formh">Город:</p>
        <input class="styler" type="text"  name="editCity" placeholder="" value="<?=$user['city']?>" id="editCity" />
        </div>

        <div class="form-el">
            <p class="formh">Пол:</p>
            <div class="check-box">
                <input type="radio" name="editSex" id="man-check" value="1" <?if($user['sex']=='мужской'){?>checked<?}?>>
                <label class="radio-inline" for="man-check">
                    Мужской
                </label>

                <input type="radio" name="editSex" id="woman-check" value="2" <?if($user['sex']=='женский'){?>checked<?}?>>
                <label class="radio-inline woman-ch" for="woman-check">
                    Женский
                </label>
            </div>
        </div>

        <div class="form-el">
            <p class="formh">E-mail:</p>
            <input class="styler" type="text" placeholder="Email" name="regEmail" value="<?=$user['email']?>" id="regEmail" />
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
        <div style="z-index: 150; position: relative; float:left; " id="showSuccsEdit" class="alert success"><i class=""></i></div>
        <div style="z-index: 150; position: relative; float:left;" id="showErrEdit" class="alert error"><i class=""></i></div>
    </fieldset>
    </form>
    <a style="line-height: 2" href="#" class="btn btn-reg" id="submitEdit">Изменить</a>
  </div>
</div>

<!-- Вадация формы -->
<script>
  $(document).ready(function()
  {
    /*обновление*/
    var editValidator = {
        'formId': 'editForm',
        'fields':
        {
            editFio: {
                required: true,
                fio: true,
                minlength: 2
            },
            editCity: {
                required: true,
                fio: true,
                minlength: 2
            },
            regEmail: {
                required: true,
                email: true
            },
            editPsw: {
                psw: true,
            },
            editPsw_t: {
                psw: true,
            },
        },
        'messages':
        {
            editFio:
            {
                required: "Укажите Ваш e-mail адрес",
                email: "Укажите корректный e-mail"
            },
            editCity:
            {
                required: "Укажите Ваш город",
                fio: "Город должен содержать только кириллические символы",
                minlength: "Город не может быть короче 2 символов"
            },
            regEmail:
            {
                required: "Укажите Ваш e-mail адрес",
                email: "Укажите корректный e-mail"
            },
            editBirthDay:
            {
                required: "Укажите день рождения"
            },
            editBirthMonth:
            {
                required: "Укажите месяц рождения"
            },
            editBirthYear:
            {
                required: "Укажите год рождения"
            },
            editPsw:
            {
                required: "Укажите пароль",
                minlength: "Минимальная длина пароля - 6 символов",
                psw: "Пароль может содержать только латинские буквы и цифры"
            },
            editPsw_t:
            {
                required: "Укажите пароль",
                minlength: "Минимальная длина пароля - 6 символов",
                equalTo: "Введенные пароли не совпадают",
                psw: "Пароль может содержать только латинские буквы и цифры"
            }


        },
        'methods':
        {
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

        'onsubmit': function()
        {
            //loginByEmail.submit();
        },

        'init': function()
        {
            var _this = this;
            $('#submitEdit').click(function(event)
            {
                event.preventDefault()
                $("#editForm").submit();
            })

            editForm.submit(function(event)
            {
                alert(_this.validate());
                if (true)//_this.validate())
                {
                    event.preventDefault();

                    $.ajax(
                    {
                        url: "/module_users/ajax_setting_edit",
                        data: $('#editForm').serialize(),
                        type: "POST",
                        dataType: "json",
                        beforeSend: function() {
                            $("#showSuccsEdit").html("");
                            $("#showSuccsEdit").hide();
                            $("#showErrEdit").html("");
                            $("#showErrEdit").hide();
                        }
                    }).complete(function(json){ }).done(function(json)
                    {
                        if (json.success === true)
                        {
                            window.location.href = "/user/profile/";
                        }
                        else
                        {
                            $("#showErrEdit").show();
                            $("#showErrEdit").text(json.message);
                        }
                    }).error(function()
                    {
                        $("#showErrEdit").show();
                        $("#showErrEdit").text('Ошибка! Попробуйте позже.');
                    });
                    //return _this.onsubmit();
                }
                else
                {
                    event.preventDefault();
                }
            });

            editForm.find('input, textarea, select').change(function()
            {
              var name = $(this).attr('name');
              _this.validate(name);
            });

            editForm.find('input, textarea').keydown(function()
            {
              var name = $(this).attr('name');
              setTimeout(function()
              {
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

    var editForm = $("#editForm");
    editValidator.init();

  });
</script>