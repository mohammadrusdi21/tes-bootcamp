<html>
<body>
<form method= "post" action="gaji.php">
nama: <select name="nama">
<option value="andi">Andi</option>
</select>
<br><br>
<input type="submit" name="hitung" value="HITUNG">
</form>
<?php
$nama = $_POST["nama"];
//Filter Gaji Pokok menggunakan switch case
switch ($nama)
{
case andi: $gapok = 1500000; break;

	default;
}
//Filter Tunjangan menggunakan if 
if ($nama == andi)
	$tunjangan = 500000;

//Filter bpjs menggunakan if
if ($nama == andi)
	$BPJS = $gapok * 0.03;
//
if ($nama == andi)
	$pajak = $gapok * 0.05;

//ngitung gaji menggunakan switch case
switch ($nama)
{
case andi: $hitung=$gapok + $tunjangan + $BPJS + $pajak; break;

}
echo "Gaji Pokok : $gapok <br>
Tunjangan : $tunjangan <br>
BPJS : $BPJS <br>
pajak : $pajak <br>
Total Gaji : $hitung ";
//yang bikin saya bingung, variable potongan tapi rumusnya malah nambahun gaji
?>

</body>
</html>