<?php
//記得要使用session之前，要先啟用serssion
//啟用輸出緩衝區
???
//啟用session
???
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>session</title>

</head>
<body>
<?php

//=====連資料庫，做測試
try{
	require_once("connectBooks.php");
	$sql = "select * from member where memId = :memId and memPsw = :memPsw";
	$member = $pdo->prepare($sql);
	$member -> bindValue(":memId",$_REQUEST["memId"]);
	$member -> bindValue(":memPsw",$_REQUEST["memPsw"]);
	$member -> execute();

	if( $member->rowCount() !=0 ){
	    $memRow = $member->fetch(PDO::FETCH_ASSOC);
		echo $memRow["memName"] , "您好<br>";
		//登入成功，將登入者資訊寫入session
        ???
        ???
        ???
		echo "<a href='sessionMember.php'>會員專區</a>";
	}else{
		echo "查無此帳密，請重新登入";
	}
}catch(PDOException $ex){
	echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
	echo "行號：",$ex->getLine(),"<br>";
}
?>	

  
</body>
</html>