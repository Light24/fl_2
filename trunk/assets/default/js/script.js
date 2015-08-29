$(document).ready(function() {


    $('#textareaask, #message').keyup(function() {
        var maxLength = 170;
        var curLength = $(this).val().length;

        $(this).val($(this).val().substr(0, maxLength));

        $("#currCountLet").text(curLength);
        if (curLength >= 170) {
            this.value = this.value.substr(0, 170);
        }

    });


    $(".fancyImg").fancybox({
  
    prevEffect  : 'none',
    nextEffect  : 'none',
    helpers : {
                    
      title : {
        type: 'inside'
      },
      thumbs  : {
         
        width : 50,
        height  : 50
      }
    }
  });


    $("#reg_submit").click(function() {

        $("#register").submit();
    })

    $("#btn-login").click(function() {

        $("#login_form").submit();
    })


    $(".close, .modal-backdrop").click(function() {
        $(".tlpAll").remove();
    })


    $("#login_form input").keyup(function(e) {
        e = e || window.event;

        if (e.keyCode === 13) {
            $("#login_form").submit();
        }
    })
})

