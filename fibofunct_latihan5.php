<?php 
function fibo()
{
    //get input from user
    $jumlah = $_POST['jumlah'];
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    //simpan string angka awal
    $hasil = "$angka1 $angka2";
 
  //looping
  for ($i=0; $i<$jumlah-2; $i++)
  {
    // hitung angka fibonacci
    $output = $angka2 + $angka1;
    // hasilnya ditambahkan ke string $hasil
    $hasil = $hasil." $output";
  
    //siapkan angka untuk perhitungan berikutnya
    $angka1 = $angka2;
    $angka2 = $output;
  }
  return $hasil;
}

function find_fibonacci($urutan)
{
  //get input from user
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
  for ($i=0; $i<$urutan-1; $i++)
  {
    // hitung angka fibonacci
    $output = $angka2 + $angka1;
  
    //siapkan angka untuk perhitungan berikutnya
    $angka1 = $angka2;
    $angka2 = $output;
  }
  return $output;
}
//output yang akan ditampilkan
echo "Deret Fibonacci dari input sebelumnya adalah:";
echo "<br>";
echo fibo();
echo "<br>";
echo "Nilai ke-10 Deret Fibonacci dari input sebelumnya adalah:";
echo "<br>";
//output yang akan ditampilkan berupa pencarian deret ke-10 pada deret yang digenerate
echo find_fibonacci(9); 
?>