<!DOCTYPE html>
<html>
<head>
<title>Praktikum PemWeb dan Mobile I Modul 1</title>
</head>
<body>

<?php
    $keluarga=["Muhamad Yusuf","Nilawati","Hussain Syach Nuralam"]; //Data nama nama anggota keluarga

        foreach($keluarga as $data){ //Perulangan foreach berfungsi untuk membaca tiap data yang terdapat di dalam keluarga
            $teks=str_replace(" ","",$data); //Meniadakan spasi yang terdapat di tengah kata
            echo "<br>Jumlah kata dari nama $data : ". str_word_count($data) ."<br>";
            echo "Jumlah huruf dari nama $data : ". strlen($teks) ."<br>";
        }


        foreach($keluarga as $data){ //Perulangan foreach berfungsi untuk membaca tiap data yang terdapat di dalam keluarga
	        echo "<br>Penulisan nama secara terbalik dari $data adalah :  ". strrev($data) ."<br>";
        }


        function vowel_konsonant($word){
            $word_len = strlen($word)-1;
            $vowel_letters = array("a","e","i","o","u");

            $vowel = 0;
            $consonant = 0;

                for($i = 0; $i <= $word_len; $i++){
                    if(in_array($word[$i], $vowel_letters)){
                    $vowel++;
                }
                    else{
                        $consonant++;
                 }
    }
   	
            echo "<br>Total huruf vokal : ".$vowel;
            echo "<br>Total huruf konsonan : ".$consonant ."<br>";
}

        foreach($keluarga as $data){ //Perulangan foreach berfungsi untuk membaca tiap data yang terdapat di dalam keluarga
	        echo "<br>Menghitung total huruf vokal dan huruf konsonan dari nama $data"; 
	        $teks=str_replace(" ","",$data); //Meniadakan spasi yang terdapat di tengah kata
	        $teks_modif=strtolower($teks); //Mengganti penggunaan huruf kalimat menjadi huruf kecil
    
	        vowel_konsonant($teks_modif);
    }
?>
</body>
</html>