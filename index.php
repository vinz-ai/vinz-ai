
<form action="" method="post">
    <input type="text" name="pertanyaan" placeholder="Pertanyaan">
    <input type="submit" value="Kirim">
</form>
<?php
$pertanyaan = "Haii";
$pertanyaan = $_POST['pertanyaan'];
$get = "https://api.simsimi.net/v2/?text=$pertanyaan&lc=id";
$data = file_get_contents($get);
$json = json_decode($data, true);
$response = $json['success'];
echo "Pertanyaan : <b>$pertanyaan </b><br> Jawaban : <b>$response</b><br><br>(C)2022 Vinzz";
?>
