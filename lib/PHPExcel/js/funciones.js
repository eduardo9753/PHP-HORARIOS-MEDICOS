
function   buscardatos(ship,scan,po,part, asset, unit, track, address, kf, ef, af, lp){
	cadena="po=" + po +
			"&ship=" + ship +
			"&scan=" + scan +
			"&part=" + part +
			"&asset=" + asset +
			"&unit=" + unit +
			"&track=" + track +
			"&address=" + address +
			"&kf=" + kf +
			"&ef=" + ef +
			"&af=" + af +
			"&lp=" + lp ;

			$.ajax({
				type:"GET",
				url:"php/buscarDatos.php",
				data:cadena,
				success:function(r){
					if(r==1){
						$('#tabla').load('componentes/tabla.php');
						alertify.success("Busqueda Exitosa");

					}else{
						alertify.error("No se Encontro Ningun Resultado");
					}
				}
			});

}




function agregardatos(po,ship,scan,part, asset, unit, track, address, kf, ef, af, lp, Eco, Eta, Arrival, EstDelivery, Programacion, Uncreate, Delivery, Signed, pod, isOR, dco, Accidente, realD, factura, Invoice, FechaRes, Costo, Comentarios){

	cadena="po=" + po +
			"&ship=" + ship +
			"&scan=" + scan +
			"&part=" + part +
			"&asset=" + asset +
			"&unit=" + unit +
			"&track=" + track +
			"&address=" + address +
			"&kf=" + kf +
			"&ef=" + ef +
			"&af=" + af +
			"&lp=" + lp +
			"&Eco=" + Eco +
			"&Eta=" + Eta +
			"&Arrival=" + Arrival +
			"&EstDelivery=" + EstDelivery +
			"&Programacion=" + Programacion +
			"&Uncreate=" + Uncreate +
			"&Delivery=" + Delivery +
			"&Signed=" + Signed +
			"&pod=" + pod +
			"&isOR=" + isOR +
			"&dco=" + dco +
			"&Accidente=" + Accidente +
			"&realD=" + realD +
			"&factura=" + factura +
			"&Invoice=" + Invoice +
			"&FechaRes=" + FechaRes +
			"&Costo=" + Costo +
			"&Comentarios=" + Comentarios;

	$.ajax({
		type:"POST",
		url:"php/agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				alertify.error("Los Datos No Fueron Agregados");
			}else{
				$('#tabla').load('componentes/tabla.php');
				alertify.success("Los Datos Fueron Agregados Con Exito");
			}
		}
	});

}

function agregaform(datos){

	d=datos.split('||');

	$('#idpersona').val(d[0]);
  $('#Eco').val(d[32]);
	$('#Eta').val(d[33]);
	$('#Arrival').val(d[34]);
	$('#EstDelivery').val(d[35]);
	$('#Programacion').val(d[36]);
	$('#Uncreate').val(d[37]);
	$('#Delivery').val(d[38]);
	$('#Signed').val(d[39]);
	$('#pod').val(d[40]);
	$('#isOR').val(d[41]);
	$('#dco').val(d[42]);
	$('#Accidente').val(d[43]);
	$('#realD').val(d[44]);
	$('#factura').val(d[45]);
	$('#Invoice').val(d[46]);
	$('#FechaRes').val(d[47]);
	$('#Costo').val(d[48]);
	$('#Comentarios').val(d[49]);

}
function deascarga(datos){

	d=datos.split('||');

	$('#idpersona').val(d[0]);
	$('#fechaF').val(d[3]);
  $('#direccion').val(d[21]);
	$('#AWB').val(d[16]);
	$('#carrier').val(d[15]);
	$('#orden').val(d[1]);
	$('#descripcion').val(d[6]);
	$('#parte').val(d[5]);
	$('#cantidad').val(d[8]);
	$('#precio').val(d[9]);
	$('#vfact').val(d[10]);
	$('#peso').val(d[12]);
	$('#facturaIn').val(d[14]);

}


function actualizaDatos(){

	id=$('#idpersona').val();
	Eco=$('#Eco').val();
	Eta=$('#Eta').val();
	Arrival=$('#Arrival').val();
	EstDelivery=$('#EstDelivery').val();
	Programacion=$('#Programacion').val();
	Uncreate=$('#Uncreate').val();
	Delivery=$('#Delivery').val();
	Signed=$('#Signed').val();
	pod=$('#pod').val();
	isOR=$('#isOR').val();
	dco=$('#dco').val();
	Accidente=$('#Accidente').val();
	realD=$('#realD').val();
	factura=$('#factura').val();
	Invoice=$('#Invoice').val();
	FechaRes=$('#FechaRes').val();
	Costo=$('#Costo').val();
	Comentarios=$('#Comentarios').val();

	cadena= "id=" + id +
			"&Eco=" + Eco +
			"&Eta=" + Eta +
			"&Arrival=" + Arrival +
			"&EstDelivery=" + EstDelivery +
			"&Programacion=" + Programacion +
			"&Uncreate=" + Uncreate +
			"&Delivery=" + Delivery +
			"&Signed=" + Signed +
			"&pod=" + pod +
			"&isOR=" + isOR +
			"&dco=" + dco +
			"&Accidente=" + Accidente +
			"&realD=" + realD +
			"&factura=" + factura +
			"&Invoice=" + Invoice +
			"&FechaRes=" + FechaRes +
			"&Costo=" + Costo +
			"&Comentarios=" + Comentarios;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos.php",
		data:cadena,
		success:function(r){

			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				alertify.success("Se Actualizo con Exito...");

			}else{
				alertify.error("No se Actualizaron los Datos...");

			}
		}
	});

}

function preguntarSiNo(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?',
					function(){ eliminarDatos(id) }
          , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(id){

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"php/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('componentes/tabla.php');
					alertify.success("Datos Eliminados con exito!");
				}else{
					alertify.error("No se Elimino Fallo el servidor");
				}
			}
		});
}
