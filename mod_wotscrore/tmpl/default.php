<div class="wotscore" class="<?php echo $moduleclass_sfx ?>">

<?php
$apikey = $params['apikey'];
  echo "<!--noindex-->";
if ($params['apikey'] !='') {
$get_wot = file_get_contents("http://api.mywot.com/0.4/public_link_json2?hosts=".$_SERVER['HTTP_HOST']."/&key=$apikey");

$wotdec = json_decode($get_wot, true);

 // echo "<pre>";
 // var_dump($wotdec);
 // echo "</pre>";

$wotcount = $wotdec[$_SERVER['HTTP_HOST']][0][0];
$childcount = $wotdec[$_SERVER['HTTP_HOST']][4][0];
// $catwot = $wotdec[$_SERVER['HTTP_HOST']]['categories'];

echo "<p align='center' class='bigwot wotcount'>Рейтинг сайта ".$_SERVER['HTTP_HOST']." по <a rel='nofollow' target='_blank' href='https://www.mywot.com/ru/scorecard/antifashist.com'><b>WOT</b></a>: <span class='wotcounts'> ". $wotcount. "</span></p>";

if ($wotcount >= '60') {
  echo "<p align='center' class='success'><img src='https://www.mywot.com/w/images/0/0e/16_good.png'> Сайт хороший</p>";
  echo "<p class='childcount' align='center'>Рейтинг безопасности для детей: <b>".$childcount."</b></p>" ;
}

if ($wotcount >= '40' && $wotcount <= '59') {
  echo "<p align='center' class='danger wotcount'><img src='https://www.mywot.com/w/images/d/dc/16_unsatisfactory.png'> Сайт не хороший, т.к. рейтинг его меньше 60 баллов.</p>";
  echo "<p class='childcount' align='center'>Рейтинг безопасности для детей: <b>".$childcount."</b></p>" ;
}

if ($wotcount >= '20' && $wotcount <= '39') {
  echo "<p align='center' class='danger wotcount'><img src='https://www.mywot.com/w/images/3/3e/16_poor.png'> Сайт опасный, т.к. рейтинг его меньше 20 баллов.</p>";
  echo "<p class='childcount' align='center'>Рейтинг безопасности для детей: <b>".$childcount."</b></p>" ;
}

echo "<!--/noindex-->";

}

?>
</div>