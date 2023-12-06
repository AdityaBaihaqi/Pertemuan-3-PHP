<?php
    // Membuat Indexed Array
    $kendaraan = ["Mobil", "Sepeda", "Truk", "Motor", "Bus"];
    // Menampilkan Output
    echo "Nama-nama Alat Transportasi: </br>";
    echo $kendaraan[0],"</br>";
    echo $kendaraan[1],"</br>";
    echo $kendaraan[2],"</br>";
    echo $kendaraan[3],"</br>";
    echo $kendaraan[4],"</br></br>";

    // Quiz
    $hewan = ["Kucing", "Kelinci", "Kambing", "Sapi", "Keledai", "Banteng", "Iguana", "Buaya", "Kancil", "Kadal"];
    echo "Nama-nama Hewan: </br>";
    echo $hewan[3],"</br></br>";

    $_fruits = ["Pepaya", "Mangga", "Pisang", "Jambu"];
    $jml_data = count($_fruits);

    for($i = 0; $i<$jml_data; $i++){
        echo "Buah Index - "."adalah ".$_fruits[$i];
        echo "</br>";
    }
?>