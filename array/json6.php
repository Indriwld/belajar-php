<?php
$movie = '{
    "Instructions": "delete everything in this object and make your own JSON object using different data.",
    "Title": "The Graduate",
    "Year": "1967",
    "Rated": "Approved",
    "Released": "22 Dec 1967",
    "Runtime": "106 min",
    "Genre": [
      "Comedy",
      "Drama",
      "Romance"
    ],
    "Director": "Mike Nichols",
    "Writers": [
      "Calder Willingham (screenplay)",
      "Buck Henry (screenplay)",
      "Charles Webb (based on the novel by)"
    ],
    "Actors": [
      "Anne Bancroft",
      "Dustin Hoffman",
      "Katharine Ross",
      "William Daniels"
    ],
    "Plot": "Ben has recently graduated college, with his parents now expecting great things from him. At his \"Homecoming\" party, Mrs. Robinson, the wife of his fathers business partner, has Ben drive her home, which leads to an affair between the two. The affair eventually ends, but comes back to haunt him when he finds himself falling for Elaine, Mrs. Robinsons daughter.",
    "Language": "English",
    "Country": "USA",
    "Awards": "Won 1 Oscar. Another 22 wins & 13 nominations.",
    "poster":"https://timlo.net/wp-content/uploads/2020/10/spider-verse.jpg",
    "imdbRating": "8.1",
    "imdbVotes": "183,131",
    "imdbID": "tt0061722"
  }';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Spiderman</title>
    <style type="text/css">
  
</style>
</head>
<body>
    <?php $data = json_decode($movie);?>
    <b><center>Data film</center></b><br>
    <center><?php echo $data->Title . "<br>";?></center> 
    <center><img src="https://timlo.net/wp-content/uploads/2020/10/spider-verse.jpg" width="200" height="300"></center>
  <p class="justify"><?php echo $data->Plot . "<br>";?><p>
   <tr>
   <td><b>Tahun Rilis</b></td>
   <td>: </td> 
    <td><?php echo $data->Year ?></td></tr><br>
   
    <tr>
   <td><b>Tanggal Rilis</b></td>
   <td>: </td> 
    <td> <?php echo $data->Released;?></td></tr><br>

    <tr>
   <td><b>durasi film</b></td>
   <td>: </td> 
    <td> <?php echo $data->Runtime;?></td></tr><br>


    <?php echo "<b>Durasi FIlm</b> :" . $data->Runtime . "<br>";?>
    <?php echo "<b>Genre</b> : " . implode(" , ", $data->Genre) . "<br>";?>
    <?php echo "<b>Directur</b> :" . $data->Director . "<br>";?>
    <?php echo "<b>Writers</b> : " . implode(" , ", $data->Writers) . "<br>";?>
    <?php echo "<b>Actors</b> : " . implode(" , ", $data->Actors) . "<br>";?>
    <?php echo "<b>Laguage</b> :" . $data->Language . "<br>";?>
    <?php echo "<b>Awards </b> :" . $data->Awards . "<br>";?>
    <?php echo "<b>imdbVotes</b> :" . $data->imdbVotes. "<br>";?>
    <?php echo "<b>imbID </b> :" . $data->imdbID . "<br>";?>
   
</body>
</html>