function checkpassword() {
	
    
    var password = document.getElementById("password").value;
   

    if (password.length <=5) {

        document.getElementById("check_password").innerText = "Enter more than 5 digits";
        document.getElementById("signup").disabled = true;
       
    } 

    else {
        document.getElementById("check_password").innerText = "";
        document.getElementById("signup").disabled = false;
    }
}

function checkcpassword() {
		  
    
    var password = document.getElementById("password").value;
    var cpassword = document.getElementById("cpassword").value;
   

    if (password != cpassword) {

        document.getElementById("check_cpassword").innerText = "passwords are miss match";
        document.getElementById("signup").disabled = true;
       
    } 

    else {
        document.getElementById("check_cpassword").innerText = "";
        document.getElementById("signup").disabled = false;
    }
}


function checkEmail(){
		  
    jQuery.ajax({
        url:"./jquery/check_email.php",
        data:'email='+$("#mail").val(),
        type:"POST",
        beforSend:function()
             {
                 $('#signup').attr('disabled','disabled');
             },
        success:function(data){
            $("#check_email").html(data);
        },
        error:function (){}
    });
}