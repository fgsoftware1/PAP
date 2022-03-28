function validate()
{
    var email = document.getElementById(email).value;
    var pass = document.getElementById(pass).value;

    if(email == "" && pass == "")
    {
        alert("verifique se os campos estão preenchidos");

        email.focus();
    }else if(email == "")
    {
        alert("verifique se o campo email está preenchido");

        email.focus();
    }else if(pass == "")
    {
        alert("verifique se o campo senha está preenchido");

        pass.focus();
    }else
    {
        window.location = "scripts/script_login.php";
    }
}