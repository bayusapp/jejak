<?php

if (!function_exists('greetings')) {
  function greetings()
  {
    date_default_timezone_set('Asia/Jakarta');

    $salam = null;
    $jam = date('H:i');

    if ($jam > '05:30' && $jam < '10:00') {
      $salam = 'Pagi';
    } elseif ($jam >= '10:00' && $jam < '15:00') {
      $salam = 'Siang';
    } elseif ($jam < '18:00') {
      $salam = 'Sore';
    } elseif ($jam >= '18:00' && $jam < '23:59') {
      $salam = 'Malam';
    }

    return $salam;
  }
}
