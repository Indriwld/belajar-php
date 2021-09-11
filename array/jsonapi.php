<?php

$url = "https://api.kawalcorona.com/";
//persiapkan curl / init curl
$ch = curl_init();
//set url
curl_setopt($ch, CURLOPT_URL, $url);
//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//$output contains the output string
$datacovid = curl_exec($ch);
//tutup output
curl_close($ch);
//menampilkan hasil curl
?>
<html>
    <body>
        <center>
            <nav>
                <a href = "/json-api2.php/">Data Covid</a> |
                <a href = "json-indonesia.php">Data Indonesia</a>|
                <a href = "/json-provinsi.php/">Data Covid Provinsi</a>|
            </nav>
        </center>
        <fieldset>
            <legend>Data Covid</legend>
            <table border = 1>
                <tr>
                    <th>NO</th>
                    <th>Negara</th>
                    <th>Positiv</th>
                    <th>Meninggal</th>
                    <th>Sembuh</th>
                </tr>
                <?php
                $no = 1;
                    $data = json_decode($datacovid);
                    foreach ($data as $covid){
                ?>
                <tr>
                    <td><?php echo $no++?></td>
                    <td><?php echo $covid->attributes->Country_Region;?></td>
                    <td><?php echo $covid->attributes->Confirmed;?></td>
                    <td><?php echo $covid->attributes->Deaths;?></td>
                    <td><?php echo $covid->attributes->Recovered;?></td>
                </tr>
                <?php }?>
            </table>
        </fieldset>
    </body>
</html>