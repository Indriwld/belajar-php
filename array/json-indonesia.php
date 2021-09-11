<?php

$url = "https://api.kawalcorona.com/indonesia/";
//persiapan curl / init curl
$ch = curl_init();
//set url
curl_setopt($ch, CURLOPT_URL, $url);
//eturn the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// $output contains the output string
$dataCovid = curl_exec($ch);
//tutup curl
curl_close($ch);
//menampilkan hasil curl
//echo $output;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <nav>
        <a href="json-indonesia.php">Data Indonesia</a>|
        <a href="json-provinsi.php">Data Covid Provinsi</a>|
        <a href="json-global-positif.php">Data Global Positif</a>|
        <a href="json-mati.php">Data Meninggal</a>|
    </nav>
    </center>
    <fieldset>
        <legend>Data Indonesia</legend>
        <table border=1 width="100%">
            <tr>
                <th>No</th>
                <th>Negara</th>
                <th>Positif</th>
                <th>Meninggal</th>
                <th>Sembuh</th>
            </tr>
            <?php
            $no = 1;
            $data = json_decode($dataCovid);
            foreach ($data as $covid) {
                ?>
            <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $covid->name; ?></td>
                <td><?php echo $covid->positif;?></td>
                <td><?php echo $covid->meninggal;?></td>
                <td><?php echo $covid->sembuh;?></td>
            </tr>
            <?php }?>
        </table>
    </fieldset>
</body>
</html>