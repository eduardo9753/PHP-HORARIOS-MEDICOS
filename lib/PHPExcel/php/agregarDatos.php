<?php

	require_once "conexion.php";
	$conexion=conexion();
	$po=$_POST['po'];
	$ship=$_POST['ship'];
	$scan=$_POST['scan'];
	$part=$_POST['part'];
	$asset=$_POST['asset'];
	$unit=$_POST['unit'];
	$track=$_POST['track'];
	$address=$_POST['address'];
	$kf=$_POST['kf'];
	$ef=$_POST['ef'];
	$af=$_POST['af'];
	$lp=$_POST['lp'];
	$Eco=$_POST['Eco'];
	$Eta=$_POST['Eta'];
	$Arrival=$_POST['Arrival'];
	$EstDelivery=$_POST['EstDelivery'];
	$Programacion=$_POST['Programacion'];
	$Uncreate=$_POST['Uncreate'];
	$Delivery=$_POST['Delivery'];
	$Signed=$_POST['Signed'];
	$pod=$_POST['pod'];
	$isOR=$_POST['isOR'];
	$dco=$_POST['dco'];
	$Accidente=$_POST['Accidente'];
	$realD=$_POST['real'];
	$factura=$_POST['factura'];
	$Invoice=$_POST['Invoice'];
	$FechaRes=$_POST['FechaRes'];
	$Costo=$_POST['Costo'];
	$Comentarios=$_POST['Comentarios'];

		$sql="INSERT into t_persona (id,po,so,shipdate,scanlistDate,part,partDesc,partType,qty,unitPrice,totalPrice,caseNum,dimepeso,coo,invoice,carrier,trackID,manway,shipto,countryto,
			mot,shipAddress,shipTime,scanlistime,seal,scanlist,transmitted,servicelevel,sapinvoice,	userID,assetID,unitserial,eco,eta,arrival,est,reprogram,uncreate,delivery,signed,pod,isorder,dco,accidente,realDelivery,factura,invoiceSumari,fecha,costo,comentarios )
								values ('$po','$ship','$scan','$part', '$asset', '$unit', '$track', '$address', '$kf', '$ef', '$af', '$lp', '$Eco', '$Eta', '$Arrival', '$EstDelivery', '$Programacion', '$Uncreate', '$Delivery',
									      '$Signed', '$pod', '$isOR', '$dco', '$Accidente', '$real', '$factura', '$Invoice', '$FechaRes', '$Costo', '$Comentarios')";
	echo $result=mysqli_query($conexion,$sql);

 ?>
