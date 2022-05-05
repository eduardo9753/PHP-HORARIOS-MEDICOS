<?php
require_once "conexion.php";
$conexion=conexion();

        $po=$_GET['po'];
        $shipdate=$_GET['ship'];
        $scanlistDate=$_GET['scan'];
        $partDesc=$_GET['part'];
        $assetID=$_GET['asset'];
        $unitserial=$_GET['unit'];
        $trackID=$_GET['track'];
        $shipAddress=$_GET['address'];
        $transmitted=$_GET['kf'];
        $countryto=$_GET['ef'];
        $carrier=$_GET['lp'];
        $partType=$_GET['af'];

        mysqli_set_charset($conexion, "utf8");
            $sql= "SELECT id,po,so,shipdate,scanlistDate,part,partDesc,partType,qty,unitPrice, totalPrice,caseNum,dimepeso,coo,invoice,carrier,trackID,manway,shipto,countryto,          mot,shipAddress,shipTime,scanlistime,seal,scanlist,transmitted,servicelevel,sapinvoice,          userID,assetID,unitserial,eco,eta,arrival,est,reprogram,uncreate,delivery,signed,pod,isorder,
          dco,accidente,realDelivery,factura,invoiceSumari,fecha,costo,comentarios from t_persona where	po  like '%$po%'
					and shipdate  like '%$shipdate%'
					and scanlistDate like '%$scanlistDate%'
					and part like '%$partDesc%'
					and partType like '%$partType%'
					and carrier like '%$carrier%'
					and trackID like '%$trackID%'
					and countryto like '%$countryto%'
					and shipAddress like '%$shipAddress%'
					and transmitted like '%$transmitted%'
					and assetID like '%$assetID%'
					and unitserial like '%$unitserial%'";
							$result=mysqli_query($conexion,$sql);

 ?>
