<html>
    <head>
        <title>Ajar Variable</title>
    </head>
    <body background="sgb-ungu.png" text="orange">
    <?php
echo "<h2>Hallo $_POST[Username] </h2>";
?>
<h2>Terimakasih telah melakukan registrasi, berikut email dan Password anda : </h2>
<?php
echo "Email anda adalah      ";
echo "$_POST[email]<br>";
echo "Password anda adalah   ";
echo "<font color='white'>$_POST[password]</font>";
?>
    </bodybackground>
</html>