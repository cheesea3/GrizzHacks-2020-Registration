$(document).ready(function () {
//HIDE LINK ON AN ELEMENT
    setTimeout(function () {

        $('a[href]#no-link').each(function () {
            var href = this.href;

            $(this).removeAttr('href').css('cursor', 'pointer').click(function () {
                if (href.toLowerCase().indexOf("#") >= 0) {

                } else {
                    window.open(href, '_self');
                }
            });
        });

    }, 500);


//APPLICATION OPEN NOW!
    $(document).on("click",".yes",function(){
        $('#signin-or-up').modal('hide');
        $('#sign-in').modal('show');
    });

    $(document).on("click",".no",function(){
        $('#signin-or-up').modal('hide');
        $('#sign-up').modal('show');
    });

});
