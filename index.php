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
    <form action="POST">
        <input type="text">
        <input type="button" value="Press">
    </form>
    <div class="domain"><?php echo($domain)?></div>
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
            <td class="green"></td>  
            <td class="yellow"></td>
            <td class="blue"></td>
            <td class="red"></td>
        </tr>
    </table></div>
</body>
</html>