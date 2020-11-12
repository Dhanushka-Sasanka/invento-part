alert("Hello ");

$('#register').click(function () {
    let formData = $('#registerfromdata').serialize();
    $.ajax({
        url: baseURL + "jayePHP/api/service/UserManage.php",
        method: "POST",
        async: true,
        data: formData + "&operation=add"
    }).done(function (resp) {


        if (resp == 1) {
            Swal.fire(
                'Good job!',
                'You added a new Product!',
                'success'
             )
        } else {
            Swal.fire(
                'Bad job!',
                'Please check your input values..!',
                'error'
            );
        }


    });
});