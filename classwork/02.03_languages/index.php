<?php
/**
 * Created by PhpStorm.
 * User: st
 * Date: 02.03.2017
 * Time: 19:25
 */
$content = [
    'ru' => [
        'h1' => 'Э́ми Да́дли'
        , 'description' => 'Эми Робсарт была единственной дочерью богатого норфолкского землевладельца. В восемнадцать лет она вышла замуж за Роберта Дадли, сына Джона Дадли, 1-го герцога Нортумберленда.'
    ],
    'en' => [
        'h1' => 'Amy Dudley'
        , 'description' => 'Amy Dudley lived with friends in different parts of the country, having her own household and hardly ever seeing her husband. In the morning of 8 September 1560, at Cumnor Place near Oxford, she insisted on sending away her servants and later was found dead at the foot of a flight of stairs with a broken neck and two wounds on her head.'
    ],
    'de' => [
        'h1' => 'Amy Robsart'
        , 'description' => 'Die Verbindung zwischen Robert Dudley und Amy wurde von den Eltern vereinbart, nachdem sich die beiden wohl 1549 kennengelernt hatten. Es wird von einer Liebesheirat ausgegangen, da Roberts Vater, der Herzog von Northumberland, anderenfalls nach einer besseren Partie gestrebt hätte.'
    ]
];
$currentLanguage = 'ru';
if (isset($_COOKIE['lang'])
    && isset($content[$_COOKIE['lang']])
){
    $currentLanguage = $_COOKIE['lang'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .active{
            color: red;
        }
    </style>
</head>
<body>
<header>
    <?php
        foreach ($content as $key => $c){
            $activeLinkClass = (($currentLanguage == $key) ? ' class="active" ' : '' );
            print '<a href="changeLanguage.php?lang='.$key.'"
            '.$activeLinkClass.'>'.$key.'</a> ';
        }
    ?>
</header>
<h1><?php echo $content[$currentLanguage]['h1'] ?></h1>
<p><?php echo $content[$currentLanguage]['description']; ?></p>
</body>
</html>
