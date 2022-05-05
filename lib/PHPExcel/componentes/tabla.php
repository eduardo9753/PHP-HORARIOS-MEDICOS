
<?php

	require_once "../php/conexion.php";
	$conexion=conexion();

 ?>
<div class="row">
	<div class="col-sm-12">
	<h2>Bitacora de Exportacion Amazon</h2>
		<table class="table table-hover table-condensed table-bordered">

		<caption>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Buscar Datos
				<span class="glyphicon glyphicon-search"></span>
		</caption>
			<tr style="text-align:center;">
<!--1-->					<td>PO#</td>
<!--2-->          <td>SO#</td>
<!--3-->          <td>Ship-Date</td>
<!--4-->          <td>Scanlist-Date</td>
<!--5-->          <td>Part#</td>
<!--6-->          <td>Part-Desc</td>
<!--7-->          <td>Part-Type</td>
<!--8-->          <td>Qty</td>
<!--9-->          <td>Unite-Price</td>
<!--10-->         <td>Total-Price</td>
<!--11-->         <td>Case#</td>
<!--12-->         <td>Dim/Peso</td>
<!--13-->         <td>COO</td>
<!--14-->         <td>Invoice#</td>
<!--15-->         <td>Carrier</td>
<!--16-->         <td>TrackID</td>
<!--17-->         <td>Man/Way</td>
<!--18-->         <td>ShipTo</td>
<!--19-->         <td>CountryTo</td>
<!--20-->         <td>MOT</td>
<!--21-->         <td>Ship-Address</td>
<!--22-->         <td>Ship-Time</td>
<!--23-->         <td>Scanlist-Time</td>
<!--24-->         <td>Seal</td>
<!--25-->         <td>Scanlist</td>
<!--26-->         <td>Scanlist-Transmitted</td>
<!--27-->         <td>Service-Level</td>
<!--28-->         <td>Sap-Inovice</td>
<!--29-->         <td>UserID</td>
<!--30-->         <td>AssetID</td>
<!--31-->         <td>Unit-Serial</td>
<!--32-->         <td>Eco-Remolque</td>
<!--33-->         <td>Eta-Comitted</td>
<!--34-->         <td>Arrival-Date</td>
<!--35-->         <td>Est-Delivery</td>
<!--36-->         <td>Re-Program</td>
<!--37-->         <td>Uncreate</td>
<!--38-->         <td>Delivery-Date</td>
<!--39-->         <td>Signed-By</td>
<!--40-->         <td>Pod-File</td>
<!--41-->         <td>Is-Order</td>
<!--42-->         <td>DCO</td>
<!--43-->         <td>Accidente-Imputable/(No pagar flete)</td>
<!--44-->         <td>Real-Delivery</td>
<!--45-->         <td>Factura-Pagada</td>
<!--46-->         <td>Invoice-Sumary</td>
<!--47-->         <td>Fecha-Resumen</td>
<!--48-->         <td>Costo</td>
<!--49-->         <td>Comentarios</td>
<!--50-->					<td>Crear Cartas</td>
<!--51-->         <td>Editar</td>
<!--52-->				  <td>Eliminar</td>
			</tr>

			<?php



			mysqli_set_charset($conexion, "utf8");
						$sql= "SELECT id,po,so,shipdate,scanlistDate,part,partDesc,partType,qty,unitPrice,
						totalPrice,caseNum,dimepeso,coo,invoice,carrier,trackID,manway,shipto,countryto,
						mot,shipAddress,shipTime,scanlistime,seal,scanlist,transmitted,servicelevel,sapinvoice,
						userID,assetID,unitserial,eco,eta,arrival,est,reprogram,uncreate,delivery,signed,pod,isorder,
						dco,accidente,realDelivery,factura,invoiceSumari,fecha,costo,comentarios from t_persona ";
				$result=mysqli_query($conexion,$sql) or die (mysqli_error($conexion));
				while($ver=mysqli_fetch_row($result)){

					$datos=$ver[0]."||". $ver[1]."||". $ver[2]."||". $ver[3]."||". $ver[4]."||". $ver[5]."||". $ver[6]."||". $ver[7]."||". $ver[8]."||". $ver[9]."||". $ver[10]."||". $ver[11]."||". $ver[12]."||". $ver[13]."||". $ver[14]."||". $ver[15]."||". $ver[16]."||". $ver[17]."||". $ver[18]."||". $ver[19]."||". $ver[20]."||". $ver[21]."||". $ver[22]."||". $ver[23]."||". $ver[23]."||". $ver[25]."||". $ver[26]."||". $ver[27]."||". $ver[28]."||". $ver[29]."||". $ver[30]."||". $ver[31]."||". $ver[32]."||". $ver[33]."||".$ver[34]."||". $ver[35]."||". $ver[36]."||". $ver[37]."||". $ver[38]."||". $ver[39]."||". $ver[40]."||".$ver[41]."||". $ver[42]."||". $ver[43]."||". $ver[44]."||". $ver[45]."||". $ver[46]."||". $ver[47]."||". $ver[48]."||".  $ver[49];

			 ?>

			<tr>
<!--1-->					<td><?php echo $ver[1]?></td>
<!--2-->					<td><?php echo $ver[2]?></td>
<!--3-->					<td><?php echo $ver[3]?></td>
<!--4-->					<td><?php echo $ver[4]?></td>
<!--5-->				  <td><?php echo $ver[5]?></td>
<!--6-->					<td><?php echo $ver[6]?></td>
<!--7-->					<td><?php echo $ver[7]?></td>
<!--8-->					<td><?php echo $ver[8]?></td>
<!--9-->				  <td><?php echo $ver[9]?></td>
<!--10-->				  <td><?php echo $ver[10]?></td>
<!--11-->				  <td><?php echo $ver[11]?></td>
<!--12-->					<td><?php echo $ver[12]?></td>
<!--13-->					<td><?php echo $ver[13]?></td>
<!--14-->					<td><?php echo $ver[14]?></td>
<!--15-->					<td><?php echo $ver[15]?></td>
<!--16-->				  <td><?php echo $ver[16]?></td>
<!--17-->				  <td><?php echo $ver[17]?></td>
<!--18-->					<td><?php echo $ver[18]?></td>
<!--19-->					<td><?php echo $ver[19]?></td>
<!--20-->					<td><?php echo $ver[20]?></td>
<!--21-->				  <td><?php echo $ver[21]?></td>
<!--22-->					<td><?php echo $ver[22]?></td>
<!--23-->					<td><?php echo $ver[23]?></td>
<!--24-->					<td><?php echo $ver[24]?></td>
<!--25-->					<td><?php echo $ver[25]?></td>
<!--26-->					<td><?php echo $ver[26]?></td>
<!--27-->					<td><?php echo $ver[27]?></td>
<!--28-->					<td><?php echo $ver[28]?></td>
<!--29-->					<td><?php echo $ver[29]?></td>
<!--30-->					<td><?php echo $ver[30]?></td>
<!--31-->					<td><?php echo $ver[31]?></td>
<!--32-->					<td><?php echo $ver[32]?></td>
<!--33-->					<td><?php echo $ver[33]?></td>
<!--34-->					<td><?php echo $ver[34]?></td>
<!--35-->					<td><?php echo $ver[35]?></td>
<!--36-->					<td><?php echo $ver[36]?></td>
<!--37-->					<td><?php echo $ver[37]?></td>
<!--38-->					<td><?php echo $ver[38]?></td>
<!--39-->					<td><?php echo $ver[39]?></td>
<!--40-->					<td><?php echo $ver[40]?></td>
<!--41-->				  <td><?php echo $ver[41]?></td>
<!--42-->				  <td><?php echo $ver[42]?></td>
<!--43-->				  <td><?php echo $ver[43]?></td>
<!--44-->				  <td><?php echo $ver[44]?></td>
<!--45-->				  <td><?php echo $ver[45]?></td>
<!--46-->				  <td><?php echo $ver[46]?></td>
<!--47-->				  <td><?php echo $ver[47]?></td>
<!--48-->				  <td><?php echo $ver[48]?></td>
<!--49-->			   	<td><?php echo $ver[49]?></td>

<td>
<button class="btn btn-info" data-toggle="modal" data-target="#modalDesc" onclick="deascarga('<?php echo $datos ?>')">
Descargar <span class="glyphicon glyphicon-download"></span>
</button>
</td>
<td>
<button class="btn btn-success" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">
Editar <span class="glyphicon glyphicon-refresh"></span>
</button>
</td>
<td>
<button class="btn btn-danger glyphicon glyphicon-trash" onclick="preguntarSiNo('<?php echo $ver[0] ?>')"></button>
</td>
</tr>
		<?php
		}
			?>
		</table>
	</div>
</div>
