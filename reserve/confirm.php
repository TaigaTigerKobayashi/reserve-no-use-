<?php
if(!isset($_POST['name'])){ 
	echo "error";	
} else {
	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$day = $_POST['day'];
	$time = $_POST['time'];
	$hour = floor($time / 60);
	$minutes = $time % 60;
	if(!$minutes == NUll ){
			$stime = $hour.":".$minutes;
		}  else {
			$stime = $hour.":00";
		}
	$time =$_POST['time'] + $_POST['course'];
	$hour = floor($time / 60);
	$minutes = $time % 60;
	if(!$minutes == NUll ){
			$etime = $hour.":".$minutes;
		}  else {
			$etime = $hour.":00";
		}
	$course = $_POST['course'];
	$lawyer = $_POST['lawyer'];
}

if(isset($_POST["submit"])){
	mb_language('ja');
	mb_internal_encoding("utf-8");

	$start = $_POST['stime'];
	$end = $_POST['etime'];

	$subject = "[自動送信]お問い合わせありがとうございます";

	$body = <<< EOM

 {$name} 様

この度はご予約ありがとうございます。
以下のご予約内容を承りました。
===================================================
【 お名前 】 
{$name} 様

【 メールアドレス 】 
{$mail}

【 ご予約日時 】 
{$day} {$start} ～ {$end}

【 コース 】
{$course} 分

【 担当弁護士 】 
{$lawyer}
===================================================

内容を確認のうえ、回答させて頂きます。

〇〇弁護士事務所
EOM;
     $fromEmail = "hoge@gmail.com";
     $fromName = "〇〇事務所";
     $header = "From:".mb_encode_mimeheader($fromName)."<$fromEmail>";
     mb_send_mail($mail,$subject,$body,$header);

     header("Location: thanks.php");
     exit;
}
?>
<form action="" method="post">
<input type="hidden" name="name" value="<?php echo $name; ?>">
<input type="hidden" name="mail" value="<?php echo $mail; ?>">
<input type="hidden" name="day" value="<?php echo $day; ?>">
<input type="hidden" name="stime" value="<?php echo $stime; ?>">
<input type="hidden" name="etime" value="<?php echo $etime; ?>">
<input type="hidden" name="course" value="<?php echo $course; ?>">
<input type="hidden" name="lawyer" value="<?php echo $lawyer; ?>">
<h1>お問い合わせ内容の確認</h1>
<p>お問い合わせ内容はこちらで宜しいでしょうか？<br>
よろしければ「送信する」ボタンを押してください。<hr>
<b>お名前</b><br>
<?php echo $name; ?>様<br>
<b>メールアドレス</b><br>
<?php echo $mail; ?><br>
<b>日付</b><br>
<?php echo $day; ?><br>
<b>時間</b><br>
<?php echo $stime; ?>～<?php echo $etime; ?><br>
<b>コース</b><br>
<?php echo $course; ?>分<br>
<b>担当</b><br>
<?php echo $lawyer; ?><br><br>
<input type="button" value="内容を修正する" onclick="history.back(-1)">
<button type="submit" name="submit">送信する</button>
</form>
