<?php
$produk = array( 'kelompok'=>array('1','2'),
                 'Nama'=>array('Kripik','Minuman'),
                 'Harga'=>array('5K','10K')

); 
           echo $produk['Nama'][1];                         
$people = array("kode_barang"=>["kode","A001","B002"],
                "nama_barang"=>["nama","kripik","minuman"],
                "Harga"=>["harga",3000,5000]);
    for ($i=0; $i < count($people["kode_barang"]); $i++) { 
        echo "|".$people["kode_barang"][$i];
        for ($j=$i; $j < count($people["nama_barang"]); $j+=3) { 
        echo "|".$people["nama_barang"][$j];
        for ($k=$j; $k < count($people["Harga"]); $k+=3) { 
            echo "|".$people["Harga"][$k];
            echo "\n";
            }
        }
    }
?>