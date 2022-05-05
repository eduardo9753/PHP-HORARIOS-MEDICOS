window.addEventListener('DOMContentLoaded', () => {

    /*GUARDAR DATOS DEL EVENTO VIA AJAX "MODAL MEDICO" BUCLE*/
    $('#btn-registrar').click(function () {
        let datos = $('#frmAjaxRegistrarEvento').serialize();
        $.ajax({
            type: 'POST',
            url: 'insertEvento',
            data: datos,
            success: function (r) {
                if (r == 1) {
                    console.log('Numero de Retorno : ' + r);
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Datos Guardados Correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "dashboardMedico"; //CAMBIAR POR "PROFILE"
                    });
                } else if(r == 0) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Datos No Guardados Correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "dashboardMedico";
                    });
                }
            }
        })
        return false;
    });
    


    //ACTULIZAR LOS DATOS VIA AJAX 
    $('#btn-actualizar-evento').click(function () {
        let datos = $('#frmAjaxActualizarEvento').serialize();
        $.ajax({
            type: 'POST',
            url: 'actualizarEvento',
            data: datos,
            success: function (r) {
                if (r == 1) {
                    console.log('Numero de Retorno : ' + r);
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Datos Actualizados Correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "dashboardMedico"; //CAMBIAR POR "PROFILE"
                    });
                } else if(r == 0) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Datos No Actualizados Correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "dashboardMedico";
                    });
                }
            }
        })
        return false;
    });



    //ELIMINAR LOS DATOS DEL EVENTO ADMINISTRADOR
    $('#btn-eliminar-evento-medico').click(function () {
        let datos = $('#frmAjaxEliminarEventoMedico').serialize();
        console.log(datos);
        $.ajax({
            type: 'POST',
            url: 'EliminarEventoMedico',
            data: datos,
            
            success: function (r) {
                if (r == 1) {
                    console.log('Numero de Retorno : ' + r);
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Eliminado Correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "dashboardMedico"; //CAMBIAR POR "PROFILE"
                    });
                } else if(r == 0) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Datos No Guardados Correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "dashboardMedico";
                    });
                }
            }
        })
        return false;
    });


});