function validate() {
    var email = document.forms["form"]["email"].value;
        if(email.endsWith(".co")){
            document.getElementById("p").innerHTML = "We are not accepting subscriptions from Colombia emails";
            return false;
            }
            if(email==""){
                 document.getElementById("p").innerHTML="Email address is required";
                return false;
                    }else{
                    var re = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
                    var x=re.test(email);
                      if(x){
                          return true;
                     }else{
                        document.getElementById("p").innerHTML="Please provide a valid e-mail address";
                        return false;
                      } 
                    }
        }

function checked(){
    var check = document.getElementById("check").checked;
        if(check==false){
            document.getElementById("p").innerHTML="You must accept the terms and conditions";
             return false;
                }else{             
                return true;
                }
        } 
