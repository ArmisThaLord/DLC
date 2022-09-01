<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://who.is/whois/arminaszinkevicius.xyz");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$html = curl_exec($ch);

$dom = new DOMDocument();
@ $dom -> loadHTML($html);
/*
$h2s = $dom ->getElementsByTagName('h2');

$h2_arr =array();

foreach($h2s as $h2){
    $title_text = $h2 -> textContent;
    $h2_arr[] = $title_text;
    echo $title_text . '</br>';
}
*/
$info =$dom->getElementsByTagName('container');

$informacija = $info->item(0);

$duom = $informacija -> getElementsByTagName('col-md-8 queryResponseBodyValue');

foreach($duom as $d){
    echo $d->textContent.' TEST ' . $d->getAttribute('') . '</br';
}
?>