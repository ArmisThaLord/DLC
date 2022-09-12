
<?php
$name = $_POST['domain'] ?? '';
$tld =  "https://who.is/whois/".$name;
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $tld);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$html = curl_exec($ch);

$dom = new DOMDocument();
@ $dom -> loadHTML($html);

$h2s = $dom ->getElementsByTagName('h2');

$finder = new DOMXPath($dom);

$classname = 'col-md-8 queryResponseBodyValue';
$nodes = $finder->query("//*[contains(@class, '$classname')]");
$node_arr = array();

foreach($nodes as $node){
    //$dom->appendChild($dom->importNode($node,true));
    $txt = $node-> textContent;
    $node_arr[]=$txt;
    echo $txt . '<br>';
}
$h2_arr =array();

foreach($h2s as $h2){
    $title_text = $h2 -> textContent;
    $h2_arr[] = $title_text;
    echo $title_text . '</br>';
} ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CHECK</title>
</head>
<body>
<div class="domain"><?php echo $node_arr[8];?></div>
<div class="bar"><table>
    <tr>
        <th>Availability</th>
        <th class="green">Active</th>//1yr
        <th class="yellow">Expired</th>//0-45d
        <th class="blue">Grace</th>//0-30d
        <th class="red">Delete</th>//5d
    </tr>
    <tr>
        <td></td>
        <td class="green"><?php echo($txt)?></td>  
        <td class="yellow"><?php echo $node_arr[8];?></td>
        <td class="blue"><?php echo $node_arr[8];?></td>
        <td class="red"><?php echo $node_arr[8];?></td>
    </tr>
</table></div>
<div class="center"><?php echo ($tld);?>
</div>

</body>
</html>

