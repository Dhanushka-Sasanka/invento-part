

// $('#btnProductAdd').click(function () {
//     let formData = $('#productFromdata').serialize();
//     $.ajax({
//         url: baseURL + "jayePHP/api/service/ProductManage.php",
//         method: "POST",
//         async: true,
//         data: formData
//     }).done(function (resp) {
//         alert(resp);
//         // if (resp ==1) {
//         //     alert("Member Added Succsess..!");
//         // } else {
//         //     alert("Member Added Failed..!");
//         //     alert(resp);
//         // }
//
//
//     });
// });

$(document).ready(function (e) {
    $("#productFromdata").on('submit',(function(e) {
        e.preventDefault();
        let formData = new FormData(this);
        formData.append("operation","add");

        $.ajax({
            url: baseURL + "jayePHP/api/service/ProductManage.php",
            type: "POST",
            data:  formData ,
            contentType: false,
            cache: false,
            processData:false,
            beforeSend : function()
            {
                //$("#preview").fadeOut();
                $("#err").fadeOut();
            },
            success: function(data)
            {
                if(data=='invalid')
                {
                    Swal.fire(
                        'Bad job!',
                        'Please check your input values..!',
                        'error'
                    );
                    // invalid file format.
                    $("#err").html("Invalid File !").fadeIn();
                }
                else
                {
                    Swal.fire(
                        'Good job!',
                        'You added a new Product!',
                        'success'
                    );
                    $("#productFromdata")[0].reset();
                }
            },
            error: function(e)
            {
                $("#err").html(e).fadeIn();
            }
        });
    }));
});