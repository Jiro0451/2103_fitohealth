//Check all radio buttons 
function validateRadio(radio){
    for (i = 0; i < radio.length; i++){
        if((radio[0].checked) || (radio[1].checked)){
            return true;
        }
        return false;
    }
}

function validateRegister() {
        var fname = document.forms["myForm"]["fname"].value;
        var lname = document.forms["myForm"]["lname"].value;
        var username = document.forms["myForm"]["username"].value;
        var email = document.forms["myForm"]["email"].value;
        var role = document.forms["myForm"]["role"];
        var password = document.forms["myForm"]["password"].value;
        var passwordc = document.forms["myForm"]["passwordc"].value;
        
        //Regex for name
        var reg1 = /^[a-zA-Z ]*$/;
        
        //Regex for email
        var reg = /^[-a-z0-9~!$%^&*=+}{\'?]+(\.[-a-z0-9~!$%^&*=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i;
        
        //Regex for password (At least - 1 Upper, 1 lower, 1 number, 8characters)
        var re = /^(?=.*[A-Z])(?=.*[0-9])(?=.*[a-z]).{8,}$/;
        
        //Regex for username
        var re1 = /^[a-zA-Z0-9]+([a-zA-Z0-9](_|-)[a-zA-Z0-9])*[a-zA-Z0-9]+$/;
        
        message = [];

           

        if (fname === null || fname === "")
        {
            message.push("First Name must be filled out\n");
        }
            
        else if (reg1.test(fname)===false) 
        {
            message.push("First name can only contain letters.\n");

        }
            
        if (lname === null || lname === "")
        {
            message.push("Last Name must be filled out\n");

        }
            
        else if (reg1.test(lname)===false) 
        {
            message.push("Last name can only contain letters.\n");
  
        }  
        
            
        if (email === null || email === "")
        {
            message.push("Email must be filled out\n");

        }
            
        else if (reg.test(email)===false) 
        {
            message.push("Invalid Email format\n");
 
        }            
            
        if (username === null || username === "")
        {
            message.push("Username must be filled out\n");
  
        }
            
        else if (re1.test(username)===false)
        {
            message.push("Username cannot start or end with a hypen or underscore\n");
   
        }
        
        if (!validateRadio(role))
        {
            message.push("Please choose one option(role)\n");
        }
        
        if (password === null || password === "")
        {
            message.push("Password must be filled out\n");

        }
            
        else if (re.test(password)===false) 
        {
            message.push("Password Format (At least): 1 upper, 1 lower, 1 number, 8 characters\n");
     
        }            
            
        if (passwordc === null || passwordc === "")
        {
            message.push("Confirm password must be filled out\n");
    
        }

        else if (password !== passwordc) {
            message.push("Password does not match\n");
   
        }
            
        if (myForm.checked.checked === false)
        {
            message.push("Please agree email verification\n");
      
        }
            
        if (myForm.check.checked === false)
        {
            message.push("Please agree with the agreement\n");
   
        }
            
        if(message.length > 0)
        {
            alert(message.join('\n'));
            return false;
        }
        else
        {
            return true;
        }
    }

