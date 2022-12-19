var captcha;
function generate()
{
    document.getElementById("submit").value = "";

    captcha = document.getElementById("image");
    var uniquechar = "";

    const randomchar =
        "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";


    for (let i = 1; i < 5; i++)
    {
        uniquechar += randomchar.charAt(
            Math.random() * randomchar.length)
    }

    captcha.innerHTML = uniquechar;
}

function printmsg()
{
    let c = document.getElementById('submit').value;
    if (c == captcha.innerHTML) {
         document.getElementById("data").removeAttribute('disabled');
    }
    else
    {
        document.getElementById("data").setAttribute('disabled', 'disabled');

    }
}
