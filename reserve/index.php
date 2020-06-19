<!-- 今週のスケジュール表(view) -> 2.予約画面(form) -> 3.確認画面(重複チェック:validation) -> 4.ユーザー・担当者へ確認メール送信(mb_send_mail)　-> 5.管理者画面で予約を一覧表示 -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css">
<b>予約フォーム</b><br>
<form method="GET" action="confirm.php">
1.お名前(必須)<br>
<input class="form1" type="text" name="name" placeholder="　お名前"/><br><br>
2.メールアドレス(必須)<br>
<input class="form1" t  ype="text" name="mail" placeholder="　〇〇@gmail.com"/><br><br>
3.カレンダーから日付を選択してください<br>
<input type="text" id="date_val"　placeholder="　2020年〇月〇日" >
<div id="datepicker"></div><br>
4.時間を選択してください<br>
	<select name="stime">
	<option value=""> 選択してください</option>
	<option value="">9:00～</option>
	<option value="">10:00～</option>
	<option value="">11:00～</option>
	<option value="">13:00～</option>
	<option value="">14:00～</option>
	<option value="">15:00～</option>
	<option value="">16:00～</option>
	<option value="">17:00～</option>
	</select>

	<select name="etime">
	<option value="">30分</option>
	<option value=""　selected>60分</option>
	<option value="">90分</option>
	<option value="">120分</option>
	</select>

	<br><br>
5.ご希望されるチューターを選択してください<br>
	<select name="lawyer">
	<option value=""> 選択してください</option>
	<option value="lawyer">松島</option>
	<option value="lawyer">小野</option>
	<option value="name">草野</option>
	</select>
	<br><br>
	<input type="submit" value="予約する" class="submit">
</form>
 

<script>
$(function() {
	var dateFormat = 'yy年mm月dd日';
    $("#datepicker").datepicker({

    	lang:'ja',
        dateFormat: dateFormat,
        minDate: 0,
        onSelect: function(dateText, inst) {
            $("#date_val").val(dateText);
                if(today == dateText){
                    for(var i = 0; i < timelist.length; i++){
                    	if(timelist[i] < time + 60){
                    		document.getElementById(timelist[i]).style.display = "none";
                    		}
                    	}	
                } else{
                    for(var i = 0; i < timelist.length; i++){
                    		document.getElementById(timelist[i]).style.display = "";
                    	}
                    }              
        }
    }
        
    );
    $( "#datepicker" ).datepicker('option','beforeShowDay',function(date){
	    var ret = [(date.getDay() != 0)];
	    return ret;
	});
    

    var dt = new Date();
    var y = dt.getFullYear();
    var m = ("00" + (dt.getMonth()+1)).slice(-2);
    var d = ("00" + dt.getDate()).slice(-2);
    var today = y + "年"　+ m + "月" + d + "日";
    console.log(today);

 

});

</script>
