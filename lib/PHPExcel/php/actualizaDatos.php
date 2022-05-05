<?php
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
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
	$realD=$_POST['realD'];
	$factura=$_POST['factura'];
	$Invoice=$_POST['Invoice'];
	$FechaRes=$_POST['FechaRes'];
	$Costo=$_POST['Costo'];
	$Comentarios=$_POST['Comentarios'];

	$sql="UPDATE t_persona set eco='$Eco',eta='$Eta',arrival='$Arrival',est='$EstDelivery',reprogram='$Programacion',uncreate='$Uncreate',delivery='$Delivery',signed='$Signed',pod='$pod',isorder='$isOR',dco='$dco',accidente='$Accidente',realDelivery='$realD',factura='$factura',invoiceSumari='$Invoice',fecha='$FechaRes',costo='$Costo',comentarios='$Comentarios'
	where id='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>
