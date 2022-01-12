<?php
     // set beberapa variabel untuk mengakses basis data MySQL.
     
     // nama server basis data MySQL
     $server = "localhost";

     // nama pengguna basis data
     $namauser = "adhie"; // misalkan user adalah 'test'

     // password pengguna basis data
     $passuser = "green1981"; // misalkan password adalah 'test'

     // nama basis data
     $db = "tour";

     // membuka koneksi PHP ke basis data MySQL
     $koneksi = mysql_connect($server, $namauser, $passuser);

   ?>
