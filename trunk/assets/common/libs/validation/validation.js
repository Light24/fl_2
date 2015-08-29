var validator = (function() {
    var rules = {
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
        min: function(parameter, value) {
            return value >= parameter;
        },
        max: function(parameter, value) {
            return value <= parameter;
        },
        regexp: function(parameter, value) {
            return parameter.test(value);
        },
        fio: function(parameter, value) {
            return !parameter || /^([а-яА-Я\-'\"\s])*$/i.test(value);
        }
    };
    return {
        addRule: function(name, handler) {
            rules['name'] = handler();
        },
        createValidator: function(formId, options) {
            var $form = $('#'+formId);
            if ($form.length == 0) return null;
            
            var validator = {
                fields: options['fields'],
                messages: options['messages'],
                onerror: options['onerror'],
                onsuccess: options['onsuccess'],
                onsubmit: options['onsubmit'],
                validate: function(fieldName) {
                    var globalResult = true;
                    var fieldNames = [];
                    if (fieldName) {
                        if (this.fields[fieldName]) {
                            fieldNames[fieldNames.length] = fieldName;
                        }
                    } else {
                        for (fieldName in this.fields) {
                            fieldNames[fieldNames.length] = fieldName;
                        }
                    }
                    for (var fieldIndex in fieldNames) {
                        var fieldResult = true;
                        var fieldMessage = 'Недопустимое значение';
                        fieldName = fieldNames[fieldIndex];
                        var $element;
                        $element = $('#'+formId+' *[name="'+fieldName+'"]');
                        if ($element.length == 0) continue;
                        for (var rule in this.fields[fieldName]) {
                            if (rules[rule]) {
                                var parameter;
                                if (typeof this.fields[fieldName][rule] == 'function') {
                                    try {
                                        parameter = this.fields[fieldName][rule]();
                                    } catch (e) {}
                                } else {
                                    parameter = this.fields[fieldName][rule];
                                }
                                var value;
                                if ($element.is('input[type="checkbox"]')) {
                                    if ($element.is(':checked')) {
                                        value = 'checked';
                                    } else {
                                        value = '';
                                    }
                                } else if ($element.is('input[type="radio"]')) {
                                    value = $('#'+formId+' *[name="'+fieldName+'"]:checked').val();
                                    if (value == null) {
                                        value = '';
                                    }
                                } else {
                                    value = $element.val();
                                }
                                try {
                                    var result = false;
                                    result = rules[rule](parameter, value);
                                } catch (e) {}
                                if (result == false && fieldResult == true) {
                                    fieldMessage = this.messages[fieldName][rule];
                                }
                                globalResult = globalResult && result;
                                fieldResult = fieldResult && result;
                            }
                        }
                        if (fieldResult) {
                            try {
                                this.onsuccess($element);
                            } catch (e) {
                            }
                        } else {
                            try {
                                this.onerror($element, fieldMessage);
                            } catch (e) {
                            }
                        }
                    }
                    return globalResult;
                }
            };

            $form.submit(function() {
                if (validator.validate()) {
                    return validator.onsubmit();
                } else {
                    return false;
                }
            });
            $form.find('input, textarea, select').change(function() {
                var name = $(this).attr('name');
                validator.validate(name);
            });
            $form.find('input, textarea').keydown(function() {
                var name = $(this).attr('name');
                setTimeout(function() {
                    validator.validate(name);
                }, 1);
            });
            return validator;
        }
    }
})();
