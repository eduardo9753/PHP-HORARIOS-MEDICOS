window.addEventListener('DOMContentLoaded', () => {


    
    /*APROBACION DE HORARIOS PERFIL ADMINISTRADOR*/
    $('#btn-aprobar-evento-medico-mes').click(function () {
        let datos = $('#frmAjaxAprobarEventoMedicoMes').serialize();
        console.log(datos);
        $.ajax({
            type: 'POST',
            url: 'updateEventoMedicoMesAprovado',
            data: datos,
            
            success: function (r) {
                if (r == 1) {
                    console.log('Numero de Retorno : ' + r);
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Aprobado Correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "Aprobados"; 
                    });
                } else if(r == 2) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Datos No Actualizados Correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "Registrados";
                    });
                } else if(r == 3){
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Aprobado Correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "AprobadosMesSiguiente";
                    });
                } else if(r == 4){
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Datos No Actualizados Correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "RegistradosMesSiguiente";
                    });
                }
            }
        })
        return false;

    });

    
    //ELIMINACION"RECHAZO" DE HORARIOS PERIL ADMINISTRADOR
    $('#btn-rechazar-evento-medico-mes').click(function () {
        let datos = $('#frmAjaxRechazarEventoMedicoMes').serialize();
        console.log('Datos Login:'+ datos);
        $.ajax({
            type: 'POST',
            url: 'updateEventoMedicoMesRechazado',
            data: datos,
            success: function (r) {
                if (r == 1) {
                    console.log('Numero de Retorno : ' + r);
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'ACTUALIZADO CORRECTAMENTE',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "Rechazados"; 
                    });
                } else if(r == 2){
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Datos No Actualizados Correctamente!!!!',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "Rechazados";
                    });
                } else if(r == 3){
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'ACTUALIZADO CORRECTAMENTE!!!!',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "RechazadosMesSiguiente";
                    });
                } else if(r == 4){
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Datos No Actualizados Correctamente!!!!',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "RechazadosMesSiguiente";
                    });
                }
            }
        })
        return false;
    });
    

    /*ELIMINAR DATOS DEL EVENTO POR ID */
    $('#btn-eliminar-evento-medico-mes').click(function () {
        let datos = $('#frmAjaxEliminarEventoMedicoMes').serialize();
        console.log(datos);
        $.ajax({
            type: 'POST',
            url: 'EliminarEventoMedicoMes',
            data: datos,
            
            success: function (r) {
                if (r == 1) {
                    console.log('Numero de Retorno : ' + r);
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Eliminados Correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "Registrados"; 
                    });
                } else if(r == 0){
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Datos No Eliminados Correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "Registrados";
                    });
                } else if(r == 2){
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Eliminados Correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "RegistradosMesSiguiente";
                    });
                } else if(r == 4){
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Datos No Eliminados Correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "RegistradosMesSiguiente";
                    });
                }
            }
        })
        return false;
    });


    //ELIMINAR UN DATO DEL EVENTO POR ID PERIL ADMINISTRADOR
    $('#btn-eliminar-adm').click(function () {
        let datos = $('#frmAjaxEliminarEventoADM').serialize();
        console.log(datos);
        $.ajax({
            type: 'POST',
            url: 'EliminarEventoADM',
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
                        window.location = "Registrados"; 
                    });
                } else if(r == 0) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Datos No Eliminado Correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "Registrados";
                    });
                }
            }
        })
        return false;
    });

    //

});