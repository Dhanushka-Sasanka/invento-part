

$('#btnLogin').click(function () {

     if($('#username').val() == "" || $('#userpassword').val() == ""){
         alert("FILL USERNAME AND PASSWORD");
     }else{
         let formData = $('#loginFormData').serialize();
         $.ajax({
             url: baseURL + "jayePHP/api/service/auth.php",
             method: "POST",
             async: true,
             data: formData + "&operation=login"
         }).done(function (resp) {
             if(resp == '404'){
                alert("Please type correct details..!");
             }else{
                 location.href = resp;
             }


         });
     }

});