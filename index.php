<?php include 'scraper.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domain life cycle</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="scraper.php" method="POST">
        <input type="text" name="tld">
        <input type="button" value="Press" name="btn">
    </form>
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
</body>
</html>