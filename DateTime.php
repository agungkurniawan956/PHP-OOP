<?php

$datetime = new DateTime();
$datetime->setDate(1998, 8, 6);
$datetime->setTime(12, 12, 12, 0);

$datetime->add(new DateInterval("P1Y"));

$minusmonth = new DateInterval("P1M");
$minusmonth->invert = true;
$datetime->add($minusmonth);

var_dump($datetime);

$timewita = new DateTime();
$timewita->setTimezone(new DateTimeZone("Asia/Makassar"));
$wita = $timewita->format("Y-m-d H:i:s");
echo "Waktu saat ini indonesia bagian Tenggara : $wita" . PHP_EOL;

$wit = new DateTime();
$wit->setTimezone(new DateTimeZone("Asia/Jayapura"));
$timewit = $wit->format("Y-m-d H:i:s");
echo "Waktu saat Indonesia Bagian Timur : $timewit" . PHP_EOL;

$wib = new DateTime();
$wib->setTimezone(new DateTimeZone("Asia/Jakarta"));
$timewib = $wib->format("Y-m-d H:i:s");
echo "Waktu saat ini Indonesia Bagian Barat : $timewib" . PHP_EOL;

$time = DateTime::createFromFormat("Y-m-d H:i:s", "2010-10-10 10:10:10", new DateTimeZone("Asia/Jakarta"));
var_dump($time);
if ($time) {
  var_dump($time);
} else {
  echo "Format Salah" . PHP_EOL;
}
