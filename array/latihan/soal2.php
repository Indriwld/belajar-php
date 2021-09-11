<?php
    $data = [
        ["dosen" => "Aceng Fikri", "submenu" => [
            [ "nama" => "Ahmad epul",
            "MataKuliah" => [
            ["MataKuliah" => "Matematika"],
            ["MataKuliah" => "Bahasa Indonesia"],
            ["MataKuliah" => "Bahasa Inggris"]],

            "Hobi" => [
            ["Hobi" => "Membaca Buku"],
            ["Hobi" => "Menonton Film"]]],

            [ "nama" =>
             "indri",
            "MataKuliah" => [
            ["MataKuliah" => "RPL"],
            ["MataKuliah" => "kimia"],
            ["MataKuliah" => "fisika"]],
            
            "Hobi" => [
            ["Hobi" => "Menghalu"],
            ["Hobi" => "mengsedih"]]],

            [ "nama" => "wulandari",
            "MataKuliah" => [
            ["MataKuliah" => "Pendidikan Pancasila"],
            ["MataKuliah" => "Bingbingan Konseling"],
            ["MataKuliah" => "Pendidikan Kewarga Negaran"]],

            "Hobi" => [
            ["Hobi" => "mengosting"],
            ["Hobi" => "tiktokan"]]],
        ]
        ],

        ["dosen" => "ujang betok", "submenu" => [
            [ "nama" => "asep silet",
            "MataKuliah" => [
            ["MataKuliah" => "Matematika"],
            ["MataKuliah" => "bahasa sunda"],
            ["MataKuliah" => "Bahasa Inggris"]],

            "Hobi" => [
            ["Hobi" => "Membaca "],
            ["Hobi" => "Menonton Tv"]]],

            [ "nama" =>
             "Agus rante",
            "MataKuliah" => [
            ["MataKuliah" => "ilmu pengetahuan sosial"],
            ["MataKuliah" => "bahasa sunda"],
            ["MataKuliah" => "bahasa inggris"]],
            
            "Hobi" => [
            ["Hobi" => "Memukul"],
            ["Hobi" => "tidur"]]],

            [ "nama" => "ujang bedil",
            "MataKuliah" => [
            ["MataKuliah" => "Pendidikan Pancasila"],
            ["MataKuliah" => "Bingbingan Konseling"],
            ["MataKuliah" => "Pendidikan Kewarga Negaran"]],

            "Hobi" => [
            ["Hobi" => "makan"],
            ["Hobi" => "rebahan"]]],
        ]
        ],
    ];
    $no = 1;
    foreach($data as $key => $val) {
        echo "Nama Wali Dosen : ". $val['dosen']. "<br>";
        echo "Daftar Mahasiswa :";
        echo "<ul>";

        foreach($val['submenu'] as $menu) {
            echo "<li>Data Ke-". $no++. "</li>";
            echo "Nama Mahasiswa : ". $menu['nama'];
            echo "<br>Daftar Mata Kuliah :";
            echo "<ol>";

            foreach($menu['MataKuliah'] as $sub) {
                echo "<li>". $sub['MataKuliah']. "</li>";
            }
            echo "</ol>";
         
            echo "Daftar Hobi : ";
            echo "<ol>";
        foreach($menu['Hobi'] as $hobi) {
            echo "<li>". $hobi['Hobi']. "</li>";
        }
        echo "</ol>";
        echo"<br>";
    }
    echo "</ul>";
    echo"<br>";
    }
?>