
<?php
function ubah_huruf($string){
    $alphabet = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    $hasil = [];
    for ($i=0; $i < strlen($string); $i++) { 
        for ($j=0; $j < count($alphabet); $j++) { 
            if (strtoupper($string[$i]) == $alphabet[$j]) {
                // $hasil[]=;
                array_push($hasil,$j+1);
            }
        }
    }
    echo strtoupper($string)." : ";
    for ($i=0; $i < count($hasil); $i++) { 
        for ($k=0; $k < count($alphabet); $k++) { 
            if($hasil[$i] == $k){
                echo $alphabet[$k];
            }
        }
    }
    echo"<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>