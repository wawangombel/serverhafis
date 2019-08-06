<?php include './configasalam.php'?>
<?php
$handle = fopen("DaftarSiswaAbsensiAssalaam.csv", "r");

    $first_row = true;
    $final_ata = array();
    $headers = array();
    $i=1;
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {           
        if($first_row) {
            $headers = $data;
            $first_row = false;
        } else {
            $final_ata[] = array_values($data);
           //  $noinduk=$final_ata[$i][0];
           //  $nama=$final_ata[$i][1];
           //  $kelas=$final_ata[$i][2];
           // mysqli_query($conn,"insert into siswa values('$noinduk','123456','$nama','','$kelas')");
           // $i++;
        }
    }

    echo '<pre>';
    print_r($final_ata[1][2]);die;
 ?>