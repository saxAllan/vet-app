<!DOCTYPE html>
<html lang="ja">

<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<title>POST結果</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<h1>〜占いっぽいなにか〜</h1><br>
	<?php
	echo '<img src="moon_usagi_kage.png" style="width: 200px">';
	echo '<h2>'.$_POST['name'] . 'さん、こんにちは</h2>';
	$str = mb_strlen($_POST);
	echo '文字数は'.$str.'です';
	
	echo '<p>恋愛運：';
	$rennai=random_int(1,10);
	for ($i = 0; $i < $rennai; $i++) {
		echo '♥';
	}

	echo '<br>金運：';
	$kinn=random_int(1,10);
	for ($i = 0; $i < $kinn; $i++) {
		echo '💰';
	}

	// 健康運🌱、仕事運💻、総合運⭐️ などなど、思いつくものを足してください。

	echo '</p>'; // 運勢の<p>閉じ

	echo '<p>＝＝＝占いのコメント＝＝＝<br>';
	if($rennai<4){
		echo '今日の恋愛運は残念な感じ！余計な期待はしないで、堅実に生きよう👍　';
	}elseif($rennai<8){
		echo '今日の恋愛運は極めてふつー。アプローチは慎重に！　';
	}else{
		echo '今日の恋愛運は絶好調、いいことあるかもね！　';
	}

	if ($kinn < 4) {
		echo 'お金については調子わるいみたい💦 その買い物、本当に必要？　';
	} elseif ($kinn < 8) {
		echo 'お金については平凡な1日が訪れるでしょう。　';
	} else {
		echo 'あと、ここ掘れワンワン🐶飼い犬が10万円見つけた！　';
	}

	// コメントも同じようなロジックで増やしてください。

	echo '</p>'; // 占いのコメント<p>閉じ
	?>
</body>

</html>
