<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Bitacora de Expotacion Amazon</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">

	<script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="js/funciones.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
</head>
<body>
<?php session_start(); ?>
	<div class="container">
		<div id="tabla"></div>
	</div>

	<!-- Modal para registros nuevos -->


  <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style=" text-align:center;" id="myModalLabel">Buscar Datos en Bitacora</h4>
      </div>
      <div class="modal-body">

				<label> Ship-Date: </label>
				 <input type="date" name="" id="ship" class="form-control input-sm">

				 <label> Scanlist - Date: </label>
				 <input type="date" name="" id="scan"  class="form-control input-sm">

				 <label> PO: </label>
				 <input type="text" placeholder="PO" name="" id="po" class="form-control input-sm">

				 <label> Part Desc: </label>
				 <input type="text" placeholder="Part Desc" name="" id="part" class="form-control input-sm">

				 <label> Asset ID: </label>
				 <input type="text" placeholder="Asset ID" name="" id="asset" class="form-control input-sm">

				 <label> Unit Serial: </label>
				 <input type="text" placeholder="Unit Serial" name="" id="unit" class="form-control input-sm">

				 <label> TrackID#: </label>
				 <input type="text" placeholder="TrackID#" name="" id="track" class="form-control input-sm">

				 <label> Ship Address: </label>
				 <input type="text" placeholder="Ship Adress" name="" id="address" class="form-control input-sm">


				<label>Scanlist:
							 <select class="form-control input-sm" name="" id="kf">
								 <option value=""></option>
								 <option value="NO">NO</option>
								 <option value="YES">YES</option>
							 </select>
				</label>

				<label>Country-To:
					  <select  class="form-control input-sm" name="" id="ef">
							 <option value=""></option>
							 <option value="US">US</option>
							 <option value="AU">AU</option>
							 <option value="CA">CA</option>
							 <option value="BR">BR</option>
					  </select>
				</label>

				<label>Part Type:
							 <select  class="form-control input-sm" name="" id="af">
								 <option value=""></option>
								 <option value="L012">L012</option>
								 <option value="SPAR">SPAR</option>
							 </select>
					</label>
					<label>Carrier:
							 <select  class="form-control input-sm" name="" id="lp">
								 <option value=""></option>
								 <option value="AFDX">AFDX</option>
								 <option value="SCHA">SCHA</option>
								 <option value="SCHG">SCHG</option>
								 <option value="SCHK">SCHK</option>
							 </select>
					</label>
      </div>
      <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" data-dismiss="modal" id="buscarnuevo">
        Buscar
        </button>
      </div>
    </div>
  </div>
</div>



<!-- Modal para edicion de datos -->

<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style=" text-align:center;" id="myModalLabel">Actualizar datos</h4>
      </div>
      <div class="modal-body col-xs-12 col-sm-12">
				<div class="col-xs-12 col-sm-6">
					<input type="text" hidden="" id="idpersona" name="">

					<label>ECO Remolque/Reparacion Menor: </label>
					<input class="form-control" type="text" id="Eco" name="" placeholder="ECO Remolque" >

					<label>Eta Comitted: </label>
					<input class="form-control" type="date" id="Eta" name="" >

					<label>Arrival Date "Real": </label>
					<input class="form-control" type="date" id="Arrival" name="">

					<label>Est Delivery Date: </label>
					<input class="form-control" type="date" id="EstDelivery" name="" >

					<label>Re-Programacion: </label>
					<input class="form-control" type="date" id="Programacion" name="" >

					<label>Uncreate Tracking: </label>
					<input class="form-control" type="date" id="Uncreate" name="">

					<label>Delivery Date: </label>
					<input class="form-control" type="date" id="Delivery" name="">

					<label>Signed By: </label>
					<input class="form-control" type="text" id="Signed" name="" placeholder="Signed By" >

					<label>POD File: </label>
					<input class="form-control" type="text" id="pod" name="" placeholder="POD File">

					<label>IS Order: </label>
					<input class="form-control" type="text" id="isOR" name="" placeholder="IS Order" >

          </div>
				  <div class="col-xs-12 col-sm-6">
					<label>IS Order: </label>
					<input class="form-control" type="text" id="isOR" name="" placeholder="IS Order" >

					<label>DCO: </label>
					<input class="form-control" type="text" id="dco" name="" placeholder="DCO" >

					<label>Accidente Imputable/(No pagar flete): </label>
					<input class="form-control" type="text" id="Accidente" name="" placeholder="Accidente Imputable" >

					<label>Real Delivery Date: </label>
					<input class="form-control" type="date" id="realD" name="">

					<label>Factura Pagada: </label>
					<input class="form-control" type="text" id="factura" name="" placeholder="Factura Pagada" >

					<label>Invoice Sumary: </label>
					<input class="form-control" type="text" id="Invoice" name="" placeholder="Invoice Sumary" >

					<label>Fecha Resumen Factura: </label>
					<input class="form-control" type="date" id="FechaRes" name="">

					<label>Costo Factura: </label>
					<input class="form-control" type="text" id="Costo" name="" placeholder="Costo Factura" >

					<label>Comentarios: </label>
					<textarea class="form-control" id="Comentarios" placeholder="Comentarios" name=""></textarea><br>

        </div>
			</div>
      <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="actualizadatos" data-dismiss="modal">Actualizar</button>

      </div>
    </div>
  </div>
</div>


<!-- Modal para descargar datos -->

<div class="modal fade" id="modalDesc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style=" text-align:center;">Descargar Carta de Instruccion</h4>
				<p style="background:rgba(241, 46, 45, 0.66); text-align:center;">Favor de Verificar Los Datos que se Van a descargar&hellip;</p>
      </div>

      <div class="modal-body col-xs-12 col-sm-12">
				<div class="col-xs-12 col-sm-6">
					<form class="formDesc" action="archivoDesc.php" method="post">
						<input type="text" hidden="" id="idpersona" name="">
					<label>Factura:</label>
					<input class="form-control" type="text" id="facturaIn" name="facturaIn" placeholder="Numero de Factura">

					<label>Fecha Factura: </label>
					<input class="form-control" type="date" id="fechaF" placeholder="Fecha de Factura" name="fechaF" >

					<label>Direccion: </label>
					<input class="form-control" type="text" id="direccion" name="direccion"placeholder="Direccion a donde se Dirige">

					<label> AWB:</label>
					<input class="form-control" type="text" id="AWB" placeholder="Numero de TrackID" name="AWB">

					<label>Carrier: </label>
					<input class="form-control" type="text" id="carrier" placeholder="Tipo de Carrier" name="carrier">

					<label>Orden: </label>
					<input class="form-control" type="text" id="orden" placeholder="Num de Orden" name="orden">

					<label>Descripcion: </label>
					<input class="form-control" type="text" id="descripcion" placeholder="Descripcion del Material" name="descripcion">

					<label>#Parte: </label>
					<input class="form-control" type="text" id="parte" placeholder="Numnero de Parte" name="parte">

        </div>
				<div class="col-xs-12 col-sm-6">
					<label>Cantidad: </label>
					<input class="form-control" type="text" id="cantidad" placeholder="Cantidad" name="cantidad" >

					<label>Precio unit: </label>
					<input class="form-control" type="text" id="precio" placeholder="Precio Unitario" name="precio">

					<label>V. Factura: </label>
					<input class="form-control" type="text" id="vfact" placeholder="Valor de Factura" name="vfact">

					<label>Peso Neto:</label>
					<input class="form-control" type="text" id="peso" placeholder="Peso Neto" name="peso">

					<label>Nivel de servicio:
						<select  class="form-control input-sm" id="nivel" name="nivel"
							<option value=""></option>
							<option value="zz">ZZ</option>
							<option value="o6">6</option>
						</select>
					</label>

					<label>Destino:
						<select  class="form-control input-sm" id="compaDes" name="compaDes">
							<option value=""></option>
							<option value="PHL">ISH-PHL</option>
							<option value="SFO">ISH-SFO</option>
							<option value="IAD">IAD22</option>
							<option value="SYD">SYD51</option>
							<option value="CMH">CMH52</option>
							<option value="GRU">GRU50</option>
							<option value="YUL">YUL51</option>
						</select>
					</label>

					<label>Para:
						<select  class="form-control input-sm" id="aduana" name="aduana">
							<option value=""></option>
							<option value="Fedex">Elizabeth Montiel</option>
							<option value="Adualink">Eduardo de la Peña</option>
						</select>
					</label>

					<label>Compañia Transportista :
						<select  class="form-control input-sm" id="compTrans" name="compTrans">
							<option value=""></option>
							<option value="Fedex">Fedex</option>
							<option value="Adualink">Adualink</option>
						</select>
					</label>

					<label>Des Español :
						<select  class="form-control input-sm" id="dscrip" name="dscrip">
							<option value=""></option>
							<option value="MEMORIA">UNIDAD DE MEMORIA (DISCO DURO)</option>
							<option value="UNIDAD">UNIDAD DE PROCESAMIENTO DIGITAL</option>
						</select>
					</label>
        </div>
      </div>
      <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary" id="descargar" name="descargar" data-dismiss="modal">Aceptar</button>
				</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tabla.php');
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#buscarnuevo').click(function(){
        buscardatos();

        });

				$('#actualizadatos').click(function(){
					actualizaDatos();
				})

    });
</script>
