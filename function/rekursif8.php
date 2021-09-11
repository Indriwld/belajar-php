<?php

function tampilkanMenuBertingkat (array $menu) {
  echo "<ul>";
  foreach ($menu as $key => $item) {
    echo "<li>{$item['nama']}</li>";

    # periksa apakah ia memiliki atribut subMenu
    # dan apakah attribut tersebut memiliki isi
    if ($item['subMenu'] && count($item['subMenu'])) {
      # jika ia panggil diri sendiri
      tampilkanMenuBertingkat($item['subMenu']);
    }
  }