<html>
<head>
<title>ajar Pengondisian</title>
<body background="sgb-ungu.png" text="white">
<h3>Sekarang adalah Hari:</h3>
<?php
$nama_hari=date("I");
if($nama_hari=="Sunday") echo"Minggu";
elseif($nama_hari=="Monday") echo"Senin<br>";
elseif($nama_hari=="Tuesday") echo"selasa<br>";
elseif($nama_hari=="Wednesday") echo"Rabu<br>";
elseif($nama_hari=="Thusrday") echo"Kamis<br";
elseif($nama_hari=="Friday") echo"Jumat<br>";
else 
echo"<h3><font color='yellow'>Minggu</font></h3><br>";
echo"Dan sekarang tanggal ", date("d F Y");
echo"<br>";
echo"Waktu menunjukan pukul ", date("H:i:s");
echo"WIB";
?>
</body>
</head>
</html>