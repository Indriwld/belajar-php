<html>
<body>
<fieldset><form ACTION ="latpro04.php" METHOD ="POST">
<tr>nama : <input type ="text" name= "nama"><tr><br>

<tr><td>agama : <select name="agama">
        <option value=" "> </option>
        <option value ="islam"> islam </option>
        <option value ="kristen">kristen </option>
        <option value ="budha"> budha </option>
        <option value ="hindu"> hindu </option>
</select><td><tr>
jenis kelamin:
    <input type ="radio" name= "jk" value= "L">laki-laki
    <input type ="radio" name= "jk" value= "p">perempuan
    <br>
    Golongan:<select name ="golongan" require>
        <option value=" "> </option>
        <option value ="1">golongan 1</option>
        <option value ="2">golongan 2</option>
        <option value ="3">golongan 3  </option>
        <option value ="4">golongan 4</option>
</select>
<br>jumlah jam kerja :<input type ="number format" name="jam">
</fieldset>
<input type ="submit" name ="input" value= "input">
</form>
</body>
</html>
