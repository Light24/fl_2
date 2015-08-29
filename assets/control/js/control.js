var filemanager = {
    field: null,
    window: null,
    processFile: function(file){
        $(filemanager.field).val(file);
        filemanager.window.close();
    }
}
    
$(document).ready(function() {

    var deafultModuleUrl = '/admin/controlcenter';

    $.pnotify.defaults.history = false;

    $(document).ajaxStart(function() {
        $("#cc_main_loader").fadeIn(100);
    });

    $(document).ajaxStop(function() {
        $("#cc_main_loader").fadeOut(100);
    });

    window['navigateNoHistory'] = function (url) {
        var i;
        var modName = url.split('/')[3];
        var $button = $('a[data-goto-module='+modName+']');
        var found = false;
        $('a[data-goto-module]').parent().removeClass('active');
        if ($button.length != 0) {
            $button.parent().addClass('active');
            found = true;
        } else {
            var module = ccModules[modName];
            if (module) {
                $button = $('<li class="active"><button class="close" style="line-height: 40px; margin-right: 4px;">&times;</button><a data-goto-module="'+modName+'" href="'+module.url+'" title="'+module.description+'" style="padding-right: 20px;">'+module.title+'</a></li>');
                $button.find('a').click(function(event) {
                    event.preventDefault();
                    navigate(module.url);
                });
                $('#cc_modules_before').before($button);
            }
        }
        ajax_div('#cc_main_content', url);
    }
    
    window['navigateNoLoad'] = function (url) {
        var search = '/admin/module';
        var replace = '/admin';
        url = url.replace(search, replace);
        if (history.pushState) {
            history.pushState({}, '', url);
        } else {
            document.location.href = url;
        }
    }

    window['navigate'] = function (url) {
        navigateNoHistory(url);
        navigateNoLoad(url);
    };
    
    var firstOnPopState = true;
    window.onpopstate = function (event) {
        if (event && firstOnPopState) {
            firstOnPopState = false;
            return;
        }
        var path = /(.*\w)[^\w]*$/.exec(window.location.pathname)[1];
        if (path == '/admin') {
            path = deafultModuleUrl;
        }
        var search = '/admin';
        var replace = '/admin/module';
        navigateNoHistory(path.replace(search, replace)+window.location.search);
    };
    setTimeout(function () {
        window.onpopstate();
    }, 1)
    
    window['ajax_div'] = function (selector, url, success, error) {
        $.ajax({
            type: 'GET',
            url: url,
            dataType: 'text',
            beforeSend: function () {
                
            },
            complete: function () {
                
            },
            success: function (text) {
                $(selector).html(text);
                if (success) success();
            },
            error: function () {
                $.pnotify({
                    title: 'Ошибка',
                    text: 'Запрос завершился неудачно. Попробуйте позже.',
                    type: 'error'
                });
                if (error) error();
            }
        });
    };
    
    $('a[data-goto-module]').click(function (event) {
        var $target = $(this);
        event.preventDefault();
        if ($target.hasClass('active')) {
            return;
        }
        navigate($target.attr('href'));
    });
    
    $('#cc_main_navbar').on('click', '.close', function (event) {
        var $li = $(event.target).parent();
        $li.css('white-space', 'nowrap');
        $li.css('overflow', 'hidden');
        $li.find('.close').remove();
        $li.animate({width:'0px'}, 200, 'swing', function () {
            $li.remove();
        });
    });
    
});

kendo.culture("ru-RU");