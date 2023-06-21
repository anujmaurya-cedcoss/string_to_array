<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result</title>
</head>
<body>
    <?php
        // getting and showing the value on second page
        $str = $_POST['string'];
        $arr = explode('/', $str);
        print_r($arr);
    ?>
</body>
</html>