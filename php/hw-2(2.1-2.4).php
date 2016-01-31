<?php

#2.2

$fairy = 62;
$tarelka = 118;
while ($fairy > 0 && $tarelka > 0) {
    $tarelka--;
    $fairy -= 0.5;
    echo  $tarelka . '  тарелок' . ' и ' . $fairy . '   фери' . "<br>";
}
if ($tarelka == 0) {
    echo "Посуда закончилась";
} 
else if ($cleaner == 0) {
    echo "Фери закончился";
}


#2.3

$arr = [1,2,3,8,14,89,45];
$len = count($arr) - 1;
for ($i = 0; $i <= $len/2; $i++) {
	$arr[$i] = $arr[$i] + $arr[$len-$i];
	$arr[$len-$i] = $arr[$i] - $arr[$len-$i];
	$arr[$i] = $arr[$i] - $arr[$len-$i];
}

print_r($arr);


#2.4 


$data = [
    [
        'id'=>1,
        'title'=>'PHP: Hypertext Preprocessor',
        'description'=>'Автор: Rasmus Lerdorf',
        'date'=> date('Y-m-d H:i'),
        'preview'=>'http://file2.answcdn.com/answ-cld/image/upload/h_320,c_fill,g_face:center,q_60,f_jpg/v1401537994/fr9lwnwgzrykh3igbbpn.jpg',
    ],
    [
        'id'=>2,
        'title'=>'Последняя версия PHP',
        'description'=>'5.6.17 (7.01.2016) и 7.0.2 (7.01.2016)',
        'date'=> date('Y-m-d H:i'),
        'preview'=>'http://intelligence-web.com/wp-content/uploads/2013/11/php.jpg',
    ],
    [
        'id'=>3,
        'title'=>'Сайт: http://php.net',
        'description'=>'Hello World!',
        'date'=> date('Y-m-d H:i'),
        'preview'=>'http://anti-doska.ru/images/items/583.jpg',
    ],
];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
	<?php foreach ($data as $post): ?>
		<section>
		    <a href="post.php?id=$post['id']"><h1>Новость  <?= $post['id'] ?></h1></a>
		    <h2><?= $post ['title']?></h2>
		    <img src="<?= $post['preview'] ?>">
		    <p class = "description"><?= $post['description']?></p>
		    <p class= "date"> <?= $post['date']?></p>
		</section>
	<?php endforeach; ?>
</body>
</html>



<!-- 2.5 -->

<?php
$vk = array(
	'user_id'=>'53083705',
    'fields'=>'nickname, bdate',
    'order'=>'random',
);

http_build_query($vk);
$req = "https://api.vk.com/method/friends.get?" . http_build_query($vk);
$content = file_get_contents($req);
$resp = json_decode($content, true);
$friends = $resp['response'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php foreach ($friends as $post): ?>
        <div class="post">
            <h1><?= $post['first_name'] . " " . $post['last_name'] ?></h1>
            <p class="bdate"><?= "День рождения: " . $post['bdate']?></p>
    	</div>
	<?php endforeach; ?>
</body>
</html>

