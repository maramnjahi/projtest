/*function onlyLetters(str) {
    return /^[A-Za-z\s]*$/.test(str);
}
function onlyNumbers(str) {
    return /^[0-9]+$/.test(str);
}
function Validate() {
    
    //Name
    var name_error = " Le nom doit compter au minimum 3 caractères.";
    const name = document.getElementById("numlivraison").value;
    var result = name_error.fontcolor("red");
    
    if ((name.length < 3 || onlyNumbers(name)) && !document.getElementById("nliv").innerHTML.includes(result)) {
        document.getElementById("nliv").innerHTML = result;
        setTimeout(function() {
            document.getElementById("nliv").innerHTML = 'Numlivraison:';
        }, 2000);
        return false;
    } else if (name.length >= 3 && onlyNumbers(name)) {
        document.getElementById("nliv").innerHTML = 'Numlivraison:';
    }
    
    
    var validRegex = /[A-Za-z0-9]+@[A-Za-z0-9]+\.[A-Za-z0-9]+/;
    var email_error = " Adresse mail invalid! ";
    const email = document.getElementById("mailll").value;
    result = email_error.fontcolor("red");
    if (!email.match(validRegex) && !document.getElementById("mail").innerHTML.includes(result))
        {document.getElementById("mail").innerHTML = result;
        setTimeout(function() {
            document.getElementById("mail").innerHTML = 'Email:';
        }, 2000);
        return false;}
    else if (email.match(validRegex) )
        document.getElementById("mail").innerHTML ='Email:';

  }
*/