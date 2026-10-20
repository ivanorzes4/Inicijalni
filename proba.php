<?php
echo "Dobro došli na stranicu.";
?>

<h1>Novosti</h1>
<?php echo "<p>Zadnja izmjena: 29. 9. 2026.</p>"; ?>

<?php
$nazivTvrtke = "CYBERGUARD d.o.o";
$godinaOsnutka = 2026;
$cijenaPaketa = 199.99;
$radiDanas = true;

echo $nazivTvrtke;
echo "<p>Osnovani $godinaOsnutka.</p>";
echo "<p>Paket: " . $cijenaPaketa . " €.</p>";
?>