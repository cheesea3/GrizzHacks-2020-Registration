$(document).ready(function () {

//swup
    const swup = new Swup(); // only this line when included with script tag

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
    $(document).on("click",".application",function(){
        $('#signin-or-up').modal('show');
    });
//IF YES IS CLICKED!
    $(document).on("click",".yes",function(){
        $('#signin-or-up').modal('hide');
        location.href = "users/login";
    });
//IF NO IS CLICKED!
    $(document).on("click",".no",function(){
        $('#signin-or-up').modal('hide');
        location.href = "users/register";
    });


});
