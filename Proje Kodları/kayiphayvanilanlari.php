<?php
    include 'baglan.php';
?>

<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8">        
        <meta http-equiv="refresh" content="sahiplen.php">
        <link rel="stylesheet" href="kayiphayvanilanlari.css">
        <style>
            table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

            td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            }

            tr:nth-child(even) {
            background-color: #dddddd;
            }
        </style>
    </head>
<body>
    <h1>Kayıp Hayvan İlanları</h1>
    <div class="kayip-ilan">
        <a href="index.php">Anasayfa</a>
        <br>
        <br>
        <table>
            <tr>
                <th>ID</th>
                <th>Cinsi</th>
                <th>Nerede Kaybolduğu</th>
                <th>Yara İzi</th>
                <th>Tasma</th>
                <th>Yaş</th>
                <th>Lütfen Arayınız</th>
                <th>Resmi(Resme Tıklayınız)</th>
            </tr>
            <?php 
            
                $sorgu = $db->query("SELECT * FROM ilanlar");

                if ($db->errno > 0) {
                    die("<b>Sorgu Hatası:</b> " . $db->error);
                }

                while ($cikti = $sorgu->fetch_array()) {
                    echo "<tr>
                                <td>".$cikti["id"]."</td>
                                <td>".$cikti["cins"]."</td>
                                <td>".$cikti["nerede_kayboldugu"]."</td>
                                <td>".$cikti["yara_izi"]."</td>
                                <td>".$cikti["tasma"]."</td>
                                <td>".$cikti["yas"]."</td>
                                <td>".$cikti["lutfen_arayiniz"]."</td>
                                <td><a target='_blank' href='http://localhost/proje/img/".$cikti["resim_ismi"]."'> <img style='height:50px;width:50px;' src='http://localhost/proje/img/".$cikti["resim_ismi"]."' alt'' /></a></td>
                        </tr>";
                }

                $sorgu->close();
                $db->close();
            
            ?>
        </table>
    </div>
</body>
</html>