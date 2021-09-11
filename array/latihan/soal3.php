<?php
    $data = [
        [
            "dosen" => "Aceng Fikri", 
            "submenu" => [
            [ 
                "nama" => "Abdul",
                "mapel" => [
                    ["mapel" => "Matematika"],
                    ["mapel" => "IPA"],
                    ["mapel" => "IPS"]
            ],
                "hobi" => [
                    ["hobi" => "Main Bola"],
                    ["hobi" => "Main Basket"]
                ]
            ],

            [
                 "nama" => "Asep",
                "mapel" => [
                    ["mapel" => "PPKN"],
                    ["mapel" => "Sejarah"],
                    ["mapel" => "KWU"]
            ],
                "hobi" => [
                    ["hobi" => "Main Golf"],
                    ["hobi" => "Main Tenis"]
                ]
            ],

            [ 
                "nama" => "Agus",
                "mapel" => [
                    ["mapel" => "RPL"],
                    ["mapel" => "Manajemen"],
                    ["mapel" => "Administrasi"]
            ],
                "hobi" => [
                    ["hobi" => "menari"],
                    ["hobi" => "menyanyi"]
                ]
            ],
        ]
        ],

        [
            "dosen" => "Ujang Betok", 
            "submenu" => [
            [ 
                "nama" => "alex",
                "mapel" => [
                    ["mapel" => "Matematika"],
                    ["mapel" => "IPA"],
                    ["mapel" => "IPS"]
            ],
                "hobi" => [
                    ["hobi" => "memancing"],
                    ["hobi" => "main paralayang"]
                ]
            ],

            [ 
                "nama" => "christian",
                "mapel" => [
                    ["mapel" => "PPKN"],
                    ["mapel" => "Sejarah"],
                    ["mapel" => "KWU"]
            ],
                "hobi" => [
                    ["hobi" => "mengedit foto"],
                    ["hobi" => "ngoding"]
                ]
            ],

            [ 
                "nama" => "charles",
                "mapel" => [
                    ["mapel" => "RPL"],
                    ["mapel" => "Manajemen"],
                    ["mapel" => "Administrasi"]
            ],
                "hobi" => [
                    ["hobi" => "menulis"],
                    ["hobi" => "berpuisi"]
                ]
            ],
        ]
        ],
    ];

    
    $no = 1;
    foreach($data as $key => $val) {
        echo "<hr>";
        echo "Nama Wali Dosen  : ". $val['dosen']. "<br>";
        echo "Daftar Mahasiswa :";
        echo "<ul>";

        foreach($val['submenu'] as $menu) {
            echo "<li>Data Ke-". $no++. "</li>";
            echo "Nama Mahasiswa : ". $menu['nama'];
            echo "<br>Daftar Mata Kuliah :";
            echo "<ol>";

            foreach($menu['mapel'] as $sub) {
                echo "<li>". $sub['mapel']. "</li>";
            }
            echo "</ol>";
        } 
            echo "Daftar Hobi : ";
            echo "<ol>";
        foreach($menu['hobi'] as $hobi) {
            echo "<li>". $hobi['hobi']. "</li>";
        }
        echo "</ol>";
        echo "</ul>";
    }
?>