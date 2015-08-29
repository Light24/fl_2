<div class="right-element">
    <div class="center-block">
        <p class="head-center-block">Создание вопроса:</p>
        <div class="ask-q">
            <form enctype="multipart/form-data" class="fixed" id="qForm" name="qForm" method="post" action="/doSendQuestion">
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
$(document).ready(function()
{
    $("#currCountLet").text( $('#textareaask').val().length);

    var questionForm = $("#qForm");

    var questionValidator = {
        'formId': 'qForm',
        'fields': {
            textareaask: {
                required: true,
                
            },
            catId: {
                
                required: true,
                
            },
        },
        'messages': {
            textareaask: {
                required: "Введите текст вопроса",
              
            },
            catId: {
                required: "Выберите категорию",
               
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

            alert('1');
            questionForm.click(function(event)
            {
            alert('1');
            });
            questionForm.submit(function(event)
            {
                if (_this.validate()) {

                    event.preventDefault();

                    $.ajax({
                        url: "/doSendQuestion",
                        data: $('#qForm').serialize(),
                        type: "POST",
                        dataType: "json",
                        beforeSend: function() {

                            $("#showSuccsQ").html("");
                            $("#showSuccsQ").hide();
                            $("#showErrQ").html("");
                            $("#showErrQ").hide();

                        }
                    }).complete(function(json) {

                    }).done(function(json) {

                        if (json.success === true) {
                            window.location.href = "/cabinet";
                        }
                        else {
                            $("#showErrQ").show();
                            $("#showErrQ").text(json.message);

                        }
                    }).error(function() {
                        $("#showErrQ").show();
                        $("#showErrQ").text('Ошибка! Попробуйте позже.');


                    });
                    //return _this.onsubmit();
                } else {
                    event.preventDefault();

                }
            });
            questionForm.find('input, textarea, select').change(function() {

                var name = $(this).attr('name');
                _this.validate(name);
            });
            questionForm.find('input, textarea').keydown(function() {
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
    questionValidator.init();
});