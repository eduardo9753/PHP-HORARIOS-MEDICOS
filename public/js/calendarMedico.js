document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          locale : 'es',
          headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,listWeek'
          },
          /* will produce something like "Tuesday, September 18, 2018"
          titleFormat: { 
            month: 'long',
            year: 'numeric',
            day: 'numeric',
            weekday: 'long'
          },*/
          editable: true,    //para que aparacezca la mano en el cintillo
          selectable: true,
        
          
          
          //MOSTRANDO EL MODAL PARA REGISTRAR UN EVENTO
          dateClick: function(info) {
            //alert('Clicked on: ' + info.dateStr);
          
            //alert('Fecha: ' + info.dateStr+'T'+'00:00:00');
            //$('#txt_fecha_inicio').val(info.event);
            //$('#txt_fecha_fin').val(info.dateStr+'P'+'00:00:00');
            $('#registrarEvento').modal('show');
          },

          /*MOVER UN EVENTO A OTRA CASILLA Y ACTUALIZAR LA FECHA (*RECOMENDABLE SIN HORA)
          eventDrop: function(info) {
             eventCalendar = info.event;  
             eventComun = info.event.extendedProps; //CAMPOS EN ESPAÑOL
             txt_id = eventCalendar.id;
             txt_titulo = eventCalendar.title;
             txt_descripcion = eventComun.descripcion;
             txt_id_medico = eventComun.id_medico;
             txt_color = eventCalendar.backgroundColor;
             txt_color_texto = eventCalendar.textColor;
             txt_fecha_inicio = moment(eventCalendar.start).format('YYYY-MM-DD HH:mm:ss a');
             txt_fecha_fin = moment(eventCalendar.end).format('YYYY-MM-DD HH:mm:ss a');

             datos = "txt_id="+txt_id+"&txt_titulo="+txt_titulo+"&txt_descripcion="+txt_descripcion+
                     "&txt_id_medico="+txt_id_medico+"&txt_color="+txt_color+
                     "&txt_color_texto="+txt_color_texto+"&txt_fecha_inicio="+txt_fecha_inicio+"&txt_fecha_fin="+txt_fecha_fin;
            
            console.log("Datos: "+datos);
            console.log("ID MEDICO: "+txt_id);
            console.log("txt_fecha_inicio: "+txt_fecha_inicio);
            console.log("txt_fecha_fin: "+txt_fecha_fin);
            $.ajax({
              type: 'POST',
              url: 'moverEvento',
              data: datos,
              success: function (r) {
                  if (r == 1) {
                      console.log('Numero de Retorno : ' + r);
                      Swal.fire({
                          position: 'top-end',
                          icon: 'success',
                          title: 'Evento Actualizado',
                          showConfirmButton: false,
                          timer: 1500
                      }).then(function () {
                          //window.location = "dashboard"; //CAMBIAR POR "PROFILE"
                      });
                  } else {
                      console.log('Numero de Retorno : ' + r);
                      Swal.fire({
                          position: 'top-end',
                          icon: 'error',
                          title: 'Evento no Actualizado!!!!',
                          showConfirmButton: false,
                          timer: 1500
                      }).then(function () {
                          window.location = "dashboardMedico";
                      });
                  }
              }
          })
          return false;
          },*/


          //URL DE EVENTOS REGISTRADOS EN LA BD
          events: "http://172.16.126.79/sishorarios/getAllEventIDMedico",


          //MOSTRANDO EL MODAL CON LOS DATOS DE LA BD PARA LA ACTUALIZACION
          eventClick: function (info) {
            let eventCalendar = info.event;            //CAMPOS EN INGLES
            let eventComun = info.event.extendedProps; //CAMPOS EN ESPAÑOL
            let fechaStart = moment(eventCalendar.start).format("YYYY-MM-DD HH:mm:ss");
            let nuevaFechaStart = fechaStart.replace(" ", "T") //DAR EL FORMATO DE FECHA DATETIME
            let fechaEnd = moment(eventCalendar.end).format("YYYY-MM-DD HH:mm:ss");
            let nuevaFechaEnd = fechaEnd.replace(" ", "T") //DAR EL FORMATO DE FECHA DATETIME
            $('#txt_id').val(eventCalendar.id);
            $('#txt_id_eliminar_evento').val(eventCalendar.id);
            $('#txt_titulo').val(eventCalendar.title);
            $('#txt_descripcion').val(eventComun.descripcion);
            $('#txt_id_medico').val(eventComun.id_medico);
            $('#txt_medico').val(eventComun.medico);
            $('#txt_color').val(eventCalendar.backgroundColor);
            $('#txt_color_texto').val(eventCalendar.textColor);
            $('#txt_fecha_inicio').val(nuevaFechaStart);
            $('#txt_fecha_fin').val(nuevaFechaEnd);
            $('#modalEvento').modal('show');
            console.log('id:'+eventCalendar.id);
            console.log('titulo:'+eventCalendar.title);
            console.log('descripcion:'+eventComun.descripcion);
            console.log('id medico:'+eventComun.id_medico);
            console.log('color:'+eventCalendar.backgroundColor);
            console.log('color texto:'+eventCalendar.textColor);
            console.log('fecha start:'+moment(eventCalendar.start).format("DD/MM/YYYY HH:mm:ss"));
            console.log('fecha fin:'+moment(eventCalendar.end).format("DD/MM/YYYY HH:mm:ss"));
            console.log('fecha inicio:'+nuevaFechaStart);
          }


        });
        calendar.render();

});