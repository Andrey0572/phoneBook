<?php
$phone = file_get_contents(__DIR__."/phoneBook.json");
$data = json_decode($phone,true);
//var_dump($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="phone">
    <table>
        <tr>
            <td>Имя</td>
            <td>Фамилия</td>
            <td>Адрес проживания</td>
            <td>телефоны</td>
        </tr>
        <?php foreach($data as $dates):?>
        <tr>
            <td><?php echo $dates["firstName"] ?></td>
            <td><?php echo $dates["lastName"] ?></td>
            <td><?php echo $dates["address"] ?></td>
            <td><?php 
            foreach($dates["phoneNumber"] as $dates["items"])
                echo "\n " . $dates["items"]. "\n"
             ?></td>
        </tr>
        <?php endforeach ?>
    </table>

    </div>
    
</body>
</html>