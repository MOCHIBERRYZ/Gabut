<?php

//inisialisasi
$nama = $_POST["nama"];
$usia = $_POST["usia"];
$message;

//fungsi validasi
function cek_kosong($nama,$usia)
{
    $err=0;

    if($nama==""){
        $nama='kosong';
        $err++;
    }

    if($usia==""){
        $usia='kosong';
        $err++;
    }
    return $err;
}
    if($usia<17){
        $message="Maaf Anda Belum Memenuhi Syarat";
        echo $message;
        //err++
    }
    
    if (cek_kosong($nama,$usia)>0) {
        header("location:from_latihan.php?nama="."&usia="."&message="); //code
    }else{
        echo "Nama anda adalah ".$nama ." Umur anda ".$usia ." Tahun";
    }
?>
