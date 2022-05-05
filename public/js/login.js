window.addEventListener('DOMContentLoaded', () => {


    
    //LOGEO DE USUARIO VIA AJAX
    $('#btn-login').click(function () {
        let datos = $('#frmAjaxLogin').serialize();
        console.log('Datos Login:'+ datos);
        $.ajax({
            type: 'POST',
            url: 'Login',
            data: datos,
            success: function (r) {
                if (r == 1) {
                    console.log('Numero de Retorno : ' + r);
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'BIENVENID@',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "dashboardADM"; 
                    });
                } else if(r == 2){
                    console.log('Numero de Retorno : ' + r);
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'BIENVENID@',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "dashboardMedico"; 
                    });
                } else if(r == 0) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Sus credenciales estan incorrectas!!!!',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "index";
                    });
                } else if(r == 3) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'SU CUENTA ESTA DESACTIVADA - COMUNIQUESE CON DIRECCION MEDICA!!!!',
                        showConfirmButton: false,
                        timer: 6500
                    }).then(function () {
                        window.location = "index";
                    });
                } 
            }
        })
        return false;
    });

});