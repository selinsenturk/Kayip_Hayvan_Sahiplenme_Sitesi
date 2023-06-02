<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8">        
        <meta http-equiv="refresh" content="kayiphayvanilani.php">
        <link rel="stylesheet" href="kayiphayvanilani.css">
    </head>
<body>
    <div class="kayiphayvanilani">
        <form action="dosya.php" method="post" enctype="multipart/form-data">
            <h1>Kayıp Hayvan İlanı</h1>
            <input name="cins" type="text" placeholder="Cins" class="txt">
            <input name="konum" type="text" placeholder="Nerede Kaybolduğu"class="txt">
            <input name="yara_iz" type="text" placeholder="Yara İzi"class="txt">
            <input name="tasma" type="text" placeholder="Tasma"class="txt">
            <input name="yas" type="text" placeholder="Yaş" class="txt">
            <input name="lutfen_arayiniz" type="text" placeholder="Lütfen Arayınız" class="txt">
            <br>
            <br>
            <input name="dosya" id="dosya" value="Gözat" type="file">
            <input type="submit" value="EKLE" name="submit">
        </form>
    </div>
</body>
</html>