<?php
$zip=$_GET["zip"];
//nullチェック
if(!isset($zip))
{
    echo "郵便番号を入力してください";
    exit;
}else{
    $flag=preg_match("/\A\d{7}\z/u",$zip);
}

//7桁で入力してないかもなので分岐させる
if(!$flag)
{
    echo "郵便番号はハイフン無しの7桁で入力してください。";
    exit;
}

$url="https://zipcloud.ibsnet.co.jp/api/search?zipcode=".(int)$_GET["zip"];
//apiレクエスト
$response=file_get_contents($url);
//JsonデータをPHPで使えるように平文化
$response=json_decode($response,true);

echo "入力された郵便番号は";
echo $response["results"][0]["address1"];
echo $response["results"][0]["address2"];
echo $response["results"][0]["address3"];
echo "の郵便番号です。";
