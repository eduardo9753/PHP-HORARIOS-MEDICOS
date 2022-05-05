window.addEventListener('DOMContentLoaded', () => {

    
     //CUANDO SE PRESIONE EN LA CLASE "edit-compania" SE DISPARA EL SIGUIENTE CODIGO
     $(document).on('click','.edit-compania',function(e){ 
        e.preventDefault(); 
        let datos = $('#frmAjaxEditarCompanias').serialize();
        let id_compania = $(this).attr("id"); //lee lo que hay en el id del elemento html
        console.log(id_compania);

        $("#frmAjaxEditarCompanias").each(function(){
            let datos = $('#frmAjaxEditarCompanias').serialize();
            console.log('Datos Recorrido:' + datos);
        });
        /*$.ajax({
         type: 'POST',
         url: 'ActualizarCompanias',
         data: { 
            txt_id_compania:id_compania,
            txt_nombre_compania:txt_nombre_compania,
            txt_estado_compania:txt_estado_compania
          },
         
         success: function (r) {
             if (r == 1) {
                 console.log('Numero de Retorno : ' + r);
                 Swal.fire({
                     position: 'top-end',
                     icon: 'success',
                     title: 'Actualizado Correctamente',
                     showConfirmButton: false,
                     timer: 1500
                 }).then(function () {
                     window.location = "Companias"; 
                 });
             } else {
                 Swal.fire({
                     position: 'top-end',
                     icon: 'error',
                     title: 'Datos No Actualizados Correctamente',
                     showConfirmButton: false,
                     timer: 1500
                 }).then(function () {
                     window.location = "Companias";
                 });
             }
         }
     })
     return false;*/
     });
 


});