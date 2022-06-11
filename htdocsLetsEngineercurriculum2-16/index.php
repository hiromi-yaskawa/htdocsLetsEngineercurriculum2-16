<?php
//index.php
$testFile ="test.txt";
$contents="今日も一日頑張りましょう！";

if(is_writable($testFile)){
//書き込み可能なとき処理
//とりあえず、確認のため、echoで表示だけさせる
echo "あいうえお。";

} else {
//書き込み不可のときの処理
echo "Merci beaucoup!";
exit;
}
?>

<br>
<?php
$test_file ="test2.txt";

if(is_readable($test_file)){
//読み込み不可のときの処理
//対象のファイルを開く
$fp =fopen($test_file,"r");
//開いたファイルから１行ずつ読み込み
while ($line =fgets($fp)){
//改行コード込みで１行ずつ出力
echo $line.'<br>';
}
//ファイルを閉じる
fclose($fp);
} else {
//読み込み不可のときの処理
echo "Rectangle";
exit;
}
?>
