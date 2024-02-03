function validateBook(){
    var Emri=document.getElementById('name').value;
    var EmriRegex=/^[A-Z]{1}[a-z]{3,15} $/

    var lastName=document.getElementById('lastname').value;
    var lastNameRegex=/^[A-Z]{1}[a-z]{3,15} $/
    
    var PhoneRegex=/^\s*(?:\+?(\d{1,3}))?([-. (]*(\d{3})[-. )]*)?((\d{3})[-. ]*(\d{2,4})(?:[-.x ]*(\d+))?)\s*$/
    var Phone=document.getElementById('phone').value;

    var AlphaNumRegex=/^[\w\d\s ]{1,20}$/
    var AlphaNum=document.getElementById('alphanum').value;


    var EmailRegex=/^[A-Za-z0-9_!#$%&'*+\/=?`{|}~^.-]+@[A-Za-z0-9.-]+$/
    var Email=document.getElementById('email').value;


	var NumberRegex=/[1-9]*$/
    var Number=document.getElementById('num').value;
	

    if(EmriRegex.test(Emri)){
        alert("Name is valid!");
    }else{
        alert("Name is not valid!");
    }

    if(lastNameRegex.test(lastName)){
        alert("Last Name is valid!");
    }else{
        alert("Last Name is not valid!");
    }

    if(PhoneRegex.test(Phone)){
		alert("Number is valid!");
     }else{
		alert("Number is not valid!");
     }

     if(AlphaNumRegex.test(AlphaNum)){
		alert("Address is valid!");
		}else{
		alert("Address is not valid!");
		}


	if(EmailRegex.test(Email)){
        alert("Email is valid!");
    }else{
        alert("Email is not valid!");
    }

	if(NumberRegex.test(Number)){
		alert("Value is valid!");
		}else{
		console.log("Value is not valid!");
		}

}