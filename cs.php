<script>
<button onclick="var jsVar = "<?php 
$nomor = array("0821151665509"); 
$nomor = array("081311742709");
$nohp = $nomor[array_rand($nomor)]; 
$text = "Hi kak saya mau konsultasi atau beli *GOAMI GLUTASKIN* nya, Ready ?";
header("Location: https://api.whatsapp.com/send?phone=$nohp&text=$text"); ?>"">
</script>