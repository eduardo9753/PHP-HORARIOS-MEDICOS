window.addEventListener('DOMContentLoaded', () => {

    /*GUARDAR MEDICO */
    $('#btn-registrar-medico').click(function () {
        let datos = $('#frmAjaxRegistrarMedico').serialize();
        $.ajax({
            type: 'POST',
            url: 'RegistrarMedico',
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
                        window.location = "Medico"; //CAMBIAR POR "PROFILE"
                    });
                } else if(r == 0) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Datos No Guardados Correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "Medico";
                    });
                }
            }
        })
        return false;
    });


    
    /*GUARDAR CONSULTORIO*/
    $('#btn-registrar-consultorio').click(function () {
        let datos = $('#frmAjaxRegistrarConsultorio').serialize();
        $.ajax({
            type: 'POST',
            url: 'registrarConsultorio',
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
                        window.location = "Consultorios"; //CAMBIAR POR "PROFILE"
                    });
                } else if(r == 0) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Datos No Guardados Correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "Consultorios";
                    });
                }
            }
        })
        return false;
    });

    /*GUARDAR COMPANIA*/
    $('#btn-registrar-compania').click(function () {
        let datos = $('#frmAjaxRegistrarCompania').serialize();
        $.ajax({
            type: 'POST',
            url: 'registrarCompania',
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
                        window.location = "Companias"; //CAMBIAR POR "PROFILE"
                    });
                } else if(r == 0) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Datos No Guardados Correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "Companias";
                    });
                }
            }
        })
        return false;
    });

    /*GUARDAR ESPECIALIDAD*/
    $('#btn-registrar-especialidad').click(function () {
        let datos = $('#frmAjaxRegistrarEspecialidad').serialize();
        $.ajax({
            type: 'POST',
            url: 'registrarEspecialidad',
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
                        window.location = "Especialidades"; //CAMBIAR POR "PROFILE"
                    });
                } else if(r == 0) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Datos No Guardados Correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "Especialidades";
                    });
                }
            }
        })
        return false;
    });
    


});