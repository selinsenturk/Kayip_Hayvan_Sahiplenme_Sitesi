<?php
include 'baglan.php';

$maxBoyut = 5000000000;
$dosyaUzantisi = substr($_FILES["dosya"]["name"],-4,4);
$dosyaAdi = rand(0,99999999) .$dosyaUzantisi;
$dosyaYolu = "img/" . $dosyaAdi;


if ($_FILES["dosya"]["size"] > $maxBoyut) {
    echo "Dosya boyutu en fazla <b>500kb</b> olabilir.";
} else {
    $sql = "INSERT INTO ilanlar (cins, nerede_kayboldugu, yara_izi, tasma, yas, resim_ismi, lutfen_arayiniz)
    VALUES ('" . $_POST["cins"]. "','" . $_POST["konum"]. "','" . $_POST["yara_iz"]. "','" . $_POST["tasma"]. "','" . $_POST["yas"]. "','" . $dosyaAdi. "','".$_POST["lutfen_arayiniz"]."')";
    
    if ($db->query($sql) === TRUE) {
      echo "Kayıt başarıyla eklendi. Anasayfaya yönlendiriliyorsunuz..";
    } else {
      echo "Error: " . $sql . "<br>" . $db->error;
    }
    
    $db->close();
    $d = $_FILES["dosya"]["type"];

    if ($d == "image/jpeg" || $d == "image/png" || $d == "image/gif") {
        if (move_uploaded_file($_FILES['dosya']['tmp_name'], $dosyaYolu)) {
            echo "<br/><img src='http://localhost/proje/".$dosyaYolu."' alt'' />";
        }else {
        echo "Dosya taşınırken bir sorun oluştu!!";
        }
    }else {
        echo"Dosya formatı <b>GİF,PNG ya da JPG</b> formatında olmalıdır!!";
    }

    header("refresh: 3; url=index.php");
}
?>