<?php
$DataReceived = ( !empty( $_REQUEST['submitted'])) ? $_REQUEST['submitted'] : ' ';
if (!empty($DataReceived))
{
    $name = trim($_REQUEST['name']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       body{
        text-align: center;
       } 
    </style>
</head>
<body>
    <form>
        <input type="text" name="name" value="<?php echo $_POST['name']?>">
    </form>
</body>
</html>