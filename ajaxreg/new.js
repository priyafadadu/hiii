
    function validation()
    {
        var formName=document.frm;
        var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;

        var urlExp = /^(((ht|f){1}(tp:[/][/]){1})|((www.){1}))[-a-zA-Z0-9@:%_\+.~#?&//=]+$/;

        if(formName.email.value == "")
        {
            document.getElementById("email_label").innerHTML='Please Enter Email';
            formName.email.focus();
            return false;
        }
        else
        {
            document.getElementById("email_label").innerHTML='';
        }

        if(!(formName.email.value).match(emailExp))
        {
            document.getElementById("email_label").innerHTML='Please Enter Valid Email';
            formName.email.focus()
            return false;
        }
        else
        {
            document.getElementById("email_label").innerHTML='';
        }

        if(formName.password.value == "")
        {
            document.getElementById("password_label").innerHTML='Please Enter Password';
            formName.password.focus();
            return false;
        }
        else
        {
            document.getElementById("password_label").innerHTML='';
        }

        if(formName.cpassword.value == "")
        {
            document.getElementById("cpassword_label").innerHTML='PleaseEnterConfirmPassword';
            formName.cpassword.focus();
            return false;
        }
        else
        {
            document.getElementById("cpassword_label").innerHTML='';
        }

        if(formName.password.value != formName.cpassword.value)
        {
            document.getElementById("cpassword_label").innerHTML='Passwords Missmatch';
            formName.cpassword.focus()
            return false;
        }
        else
        {
            document.getElementById("cpassword_label").innerHTML='';
        }

        if(formName.capcha.value == "")
        {
            document.getElementById("capcha_label").innerHTML='Please Enter Code';
            formName.capcha.focus();
            return false;
        }
        else
        {
            document.getElementById("capcha_label").innerHTML='';
        }

        if($('input:radio[name=gender]:checked').length==0){
            $('#gender_label').html('Please Choose option');
            return false;
        }
        if($('input:radio[name=gender]:checked').val()==1){
            if($('#gender').val()==''){
                $("#gender_label").html('Enter Your gender');
                return false;
            }else{
                $("#gender_label").html('');
            }
        }

    }

    $(function()
    {
        $('input:radio[name=gender]').click(function()
        {

            $('#gender_label').html('');
        });
        $('#gender').click(function()
        {
            $('#gender').val('');
        });
    });

