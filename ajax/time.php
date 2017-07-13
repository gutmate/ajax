<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
</head>
<body>
    <?php
        $d1 = new DateTime;
        $d1->setTimezone(new DateTimezone("asia/seoul"));
        echo $d1->format('H:i:s');
    ?>
</body>
</html>