//slide start//
const signUpBtn = document.getElementById("signUp");
const signInBtn = document.getElementById("signIn");
const container = document.querySelector(".container");

signUpBtn.addEventListener("click", () => {
    container.classList.add("right-panel-active");
});
signInBtn.addEventListener("click", () => {
    container.classList.remove("right-panel-active")
});
//slide end//
//validation start//
function validateEmail(email) {
    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (email.match(validRegex)) {
        return true; 
     }
    else{
        return false;
    }
}
function validation_on_signin() {
    console.log("hello ");
    
    var email =document.getElementById("login_email").value;
    
    var password = document.getElementById("sin_password").value;
    console.log(email);
    var a=0;
    document.getElementById("Rsin_email_icon").style.visibility = "hidden";
    document.getElementById("Wsin_email_icon").style.visibility = "hidden";
    if (email == null || email == "") {
        document.getElementById("Wsin_email_icon").style.visibility = "visible";
        document.getElementById("sin_err_email").innerHTML = "Please enter email";
        a = 1;
    } else {
        if (validateEmail(email)) {
            document.getElementById("Rsin_email_icon").style.visibility = "visible";
            document.getElementById("sin_err_email").innerHTML = "";
        } else {
            document.getElementById("Wsin_email_icon").style.visibility = "visible";
            document.getElementById("sin_err_email").innerHTML = "Please enter valid email";
            a = 1;
        }
    }
    document.getElementById("Rsin_pass_icon").style.visibility = "hidden";
    document.getElementById("Wsin_pass_icon").style.visibility = "hidden";
    if (password == null || password == "") {
        document.getElementById("Wsin_pass_icon").style.visibility = "visible";
        document.getElementById("sin_err_pass").innerHTML = "Please enter password";
        a = 1;
    }
    else {
        if (password.length < 8) {
            document.getElementById("Wsin_pass_icon").style.visibility = "visible";
            document.getElementById("sin_err_pass").innerHTML = "Password should have atleast 8 characters";
            a = 1;
        }
        else{
            document.getElementById("sin_err_pass").innerHTML = "";
            document.getElementById("Rsin_pass_icon").style.visibility = "visible";
        }
    }
    if (a == 1) {
        return false;
    }
       
}
function validateForm() {
    // console.log("hello");
    var name =document.getElementById("name").value;
    var email =document.getElementById("email").value;
    var password = document.getElementById("reg_password").value;
    var repassword = document.getElementById("reg_rep_password").value;
    console.log(name);
    var a = 0;
    document.getElementById("Rnameicon").style.visibility = "hidden";
    document.getElementById("Wnameicon").style.visibility = "hidden";

   if (name == null || name == "") {
       document.getElementById("Wnameicon").style.visibility = "visible";
       document.getElementById("err_name").innerHTML = "Please enter name";
        a = 1;
    }
    else {
        document.getElementById("Rnameicon").style.visibility = "visible";
        document.getElementById("err_name").innerHTML = "";
    }
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    document.getElementById("Wemailicon").style.visibility = "hidden";
    document.getElementById("Remailicon").style.visibility = "hidden";

    if (email == null || email == "") {
        document.getElementById("Wemailicon").style.visibility = "visible";
        document.getElementById("err_email").innerHTML = "Please enter email";
        a = 1;
    } else {
        if (validateEmail(email)) {
            document.getElementById("Remailicon").style.visibility = "visible";
            document.getElementById("err_email").innerHTML = "";
        } else {
            document.getElementById("Wemailicon").style.visibility = "visible";
            document.getElementById("err_email").innerHTML = "Please enter valid email";
            a = 1;
        }
        document.getElementById("Wpassicon").style.visibility = "hidden";
        document.getElementById("Rpassicon").style.visibility = "hidden";
    }
    let flag=0;
    if (password == null || password == "") {
        document.getElementById("Wpassicon").style.visibility = "visible";
        document.getElementById("err_password").innerHTML = "Please enter password";
        a = 1;
    }
    else {
        if (password.length < 8) {
            document.getElementById("Wpassicon").style.visibility = "visible";
            document.getElementById("err_password").innerHTML = "Password should have atleast 8 characters";
            a = 1;
        }
        else {
            flag=1;
            document.getElementById("Rpassicon").style.visibility = "visible";
            document.getElementById("err_password").innerHTML = "";
        }
    }
    document.getElementById("Rrpassicon").style.visibility = "hidden";
    document.getElementById("Wrpassicon").style.visibility = "hidden";
    if(flag==1)
    {
        if (repassword == null || repassword == "") {
            document.getElementById("Wrpassicon").style.visibility = "visible";
            document.getElementById("err_rpassword").innerHTML = "Please Re-enter the password";
            a = 1;
        }
        else{
            if(password!=repassword)
            {
                document.getElementById("Wrpassicon").style.visibility = "visible";
                document.getElementById("err_rpassword").innerHTML = "Password Missmatch";
                a=1;
            }
            else{
                document.getElementById("Rrpassicon").style.visibility = "visible";
                document.getElementById("err_rpassword").innerHTML = "";
            
            }
        }
    }
    else{
        document.getElementById("Wrpassicon").style.visibility = "visible";
    }
    if (a == 1) {
       return false;
      }

     

}

//validtions end//