function myfunction(){
    var x =document.getElementById("floatingPassword");

    if(x.type === "floatingPassword"){
        x.type = "text";
    }
    else{
        x.type = "floatingPassword";
    }
}

function validate(){
    var password = document.getElementById("floatingPassword");
    var length = document.getElementById("length");

    if(password.value=="arjun"){
        alert("Login Succesfull");
        window.location.replace("stu.html");
        
        return false;
    }
    else{
        alert("Login Failed");
    }
}





// function lpage(){
//     window.location.replace("Landingpage.html")
// }