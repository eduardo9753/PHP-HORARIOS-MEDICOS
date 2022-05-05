window.addEventListener('DOMContentLoaded', () => {


    //GUARDAR VIA AJAX  SUGERENCIAS
    $('#btn_sugerencia').click(function () {
        let datos = $('#frmAjaxSugerencia').serialize();
        $.ajax({
            type: 'POST',
            url: 'saveEmailSugerencia',
            data: datos,
            success: function (r) {
                if (r == 1) {
                    console.log('Numero de Retorno : ' + r);
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Gracias Por Registrar tu Sugerencia',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "index";
                    });
                } else if(r == 0){
                    console.log('Numero de Restorno : ' + r);
                    Swal.fire({
                        position: 'top-end',
                        icon: 'fail',
                        title: 'No se Registro tu Sugerencia',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "index";
                    });
                }
            }
        })
        return false;
    });


     //GUARDAR VIA AJAX  QUEJAS
     $('#btn_queja').click(function () {
        let datos = $('#frmAjaxQuejas').serialize();
        $.ajax({
            type: 'POST',
            url: 'saveEmailSugerencia',
            data: datos,
            success: function (r) {
                if (r == 1) {
                    console.log('Numero de Retorno : ' + r);
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Gracias Por Registrar su Queja',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "index";
                    });
                } else if(r == 0){
                    console.log('Numero de Restorno : ' + r);
                    Swal.fire({
                        position: 'top-end',
                        icon: 'fail',
                        title: 'No se Registro su Queja',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "index";
                    });
                }
            }
        })
        return false;
    });

    
});