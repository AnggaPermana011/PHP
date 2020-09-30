<?php function arit(){
      //get input from user
         $baris = $_POST['baris'];
         $ar1 = $_POST['ar1'];
         $selisih = $_POST['selisih'];
         
         echo $ar1.' ';
        //looping
         for ($i=0; $i < $baris-1; $i++) {
            $hasil = $ar1 + $selisih;
            $ar1 = $hasil;
            //output
            echo $hasil.'  ';
         }
    }
    //get input from user berupa variabel baris untuk menampilkan jumlah baris
    $baris = $_POST['baris'];
    //output yang ditampilkan
    echo "Barisan aritmatika dengan jumlah ",$baris," baris adalah:";
    echo "<br>";
    echo "<br>";
    echo arit();
   ?>