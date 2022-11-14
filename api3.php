<?php
//$str="〒100-8974 東京都千代田区霞が関２丁目１−２";
//$str="〒1008974 東京都千代田区霞が関２丁目１−２";
$str="2520241";
//preg_match("/\d{3}-\d{4}/",$str,$match);
$flag=preg_match("/\A\d{7}\z/u",$str,$match);
var_dump($match);
var_dump($flag);
?>
