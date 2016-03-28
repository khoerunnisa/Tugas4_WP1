<!DOCTYPE html>
<html>
<head>
<title>Faktorial dengan Do_While</title>
<style>
body{
color:#000;
background:-webkit-linear-gradient(top,gold,goldenrod,khaki,Lightcyan);
background:-moz-linear-gradient(top,gold,goldenrod,khaki,Lightcyan);
background:-o-linear-gradient(top,gold,goldenrod,khaki,Lightcyan);
background-attachment:fixed;
font-size:18px;
font-family: Ravie;
margin:0;
padding:18px;
}
h1 {
	text-align:center;
}
</style>
</head>
<body>
<h1>Faktorial dengan Do_While</h1> 
</head>
<body>
<form name="frm01" method="post">
<table>
<tr>
<td>Masukkan Angka</td>
<td><input type="text" name="txtAngka" size="5"/></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="hasil" value="Hasil"/></td>
</tr>
</table>
<?php
error_reporting(0);
if($_POST['hasil']!=''){
            $angka=$_POST['txtAngka'];

            function faktorial($angka){
            if($angka<=1){
                        $hasil=1;
                        return $hasil;
            }elseif($angka>1){
                        $i=1;
                        do
                        {
                             $hasil=$angka * faktorial($angka-1);
                             $i=$i+1;
                        }while($i<=5);
                        return $hasil;
            }
}
         echo "Angka :".$angka."<br>";
   echo "Faktorial dari "." ".$angka." "."adalah :"." ".faktorial($angka);
}
?>
</form>
</body>
</html>
