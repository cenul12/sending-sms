<?php

if(isset($_POST['kirim']))
{
    $tujuan = $_POST['tujuan'];
    $pesan = $_POST['isi'];
    $userkey = '3ld9mz';
    $passkey = '23rf0nxb2o';

    function kirim ($tujuan,$pesan,$userkey,$passkey)
    {
        $isi = urlencode($pesan);
        $hp = str_replace('+62','0',$tujuan);
        $ho = trim($hp);
        $url = "https://reguler.zenziva.net/apps/smsapi.php?userkey=$userkey&passkey=$passkey&nohp=$hp&pesan=$isi";
        $data = file_get_contents($url);
        if(preg_match('/success/i', $data)){
            $value='1';
        }else{
            $value='0';
        }
        return $value;
    }

    $kirim = kirim($tujuan,$pesan,$userkey,$passkey);
    if($kirim=="1"){
        echo "<script type='text/javascript'>alert('SMS Terkirim');
        window.location='index.php';
        </script>";
    }else{
        echo "<script type='text/javascript'>alert('SMS Tidak Terkirim');
        window.location='index.php';
        </script>";
    }
    
}

?>