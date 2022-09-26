<?php
/*
$_links=array(
        'Google' => 'https://google.com',
        'Yandex' => 'https://yandex.com',
        'Bingo'  => 'https://bingo.com',
);
foreach($links as $name =>$url) {
    echo "<div><a href=\"$url\">$name</a</div>";
}
*/
$links = [
    ['url' => 'https://google.com', 'name' => 'Google'],
    ['url' => 'https://yandex.com', 'name' => 'Yandex'],
    ['url' => 'https://bingo.com', 'name' => 'Bingo']
];
foreach($links as $link) {
    echo "<div><a href=\"$link[url]\"> $link[name] </a</div>";
}
?>
<hr>
<!-- BEGIN -->
<?php foreach ($links as ['url' => $url, 'name' => $name]) : ?>
    <div>
        <a href="<?= $url ?>"><?= $name ?></a>
    </div>
<?php endforeach; ?>
<!-- END -->