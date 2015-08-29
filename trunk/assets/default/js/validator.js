/**
 * Валидация форм личных кабинетов
 * @author Vergilis Kostiantyn
 * @version 1.0
 *
 */
$(document).ready(function() {


    var loginForm = $("#login_form");



    /*login*/
    var loginValidator = {
        'formId': 'login_form',
        'fields': {
            emailLogin: {
                required: true,
                email: true
            },
            passwordLogin: {
                psw: true,
                required: true,
                minlength: 6
            },
        },
        'messages': {
            emailLogin: {
                required: "Укажите Ваш e-mail адрес",
                email: "Укажите корректный e-mail"
            },
            passwordLogin: {
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

            loginForm.submit(function(event) {


                if (_this.validate()) {

                    event.preventDefault();

                    $.ajax({
                        url: "/module_users/login/",
                        data: $('#login_form').serialize(),
                        type: "POST",
                        dataType: "json",
                        beforeSend: function() {

                            $("#showSuccsLogin").html("");
                            $("#showSuccsLogin").hide();
                            $("#showErrLogin").html("");
                            $("#showErrLogin").hide();

                        }
                    }).complete(function(json) {

                    }).done(function(json) {

                        if (json.success === true) {
                            window.location.href = "/user/profile";
                        }
                        else {
                            $("#showErrLogin").show();
                            $("#showErrLogin").text(json.message);

                        }
                    }).error(function() {
                        $("#showErrLogin").show();
                        $("#showErrLogin").text('Ошибка! Попробуйте позже.');


                    });
                    //return _this.onsubmit();
                } else {
                    event.preventDefault();

                }
            });
            loginForm.find('input, textarea, select').change(function() {

                var name = $(this).attr('name');
                _this.validate(name);
            });
            loginForm.find('input, textarea').keydown(function() {
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

    //инициализация валидатора
    loginValidator.init();
});