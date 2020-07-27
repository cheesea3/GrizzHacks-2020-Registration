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

//password validation

    var myInput = document.getElementById("pswd");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");

    // When the user clicks on the password field, show the message box
    myInput.onfocus = function() {
        document.getElementById("message").style.display = "block";
    }

    // When the user clicks outside of the password field, hide the message box
    myInput.onblur = function() {
        document.getElementById("message").style.display = "none";
    }

    // When the user starts to type something inside the password field
    myInput.onkeyup = function() {
            // Validate lowercase letters
            var lowerCaseLetters = /[a-z]/g;
            if(myInput.value.match(lowerCaseLetters)) {
                letter.classList.remove("invalid");
                letter.classList.add("valid");
            } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
            }

            // Validate capital letters
            var upperCaseLetters = /[A-Z]/g;
            if(myInput.value.match(upperCaseLetters)) {
                capital.classList.remove("invalid");
                capital.classList.add("valid");
            } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
            }

            // Validate numbers
            var numbers = /[0-9]/g;
            if(myInput.value.match(numbers)) {
                number.classList.remove("invalid");
                number.classList.add("valid");
            } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
            }

            // Validate length
            if(myInput.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
            } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
            }
        }

        //prevent resubmit on refresh and back button
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }


});
