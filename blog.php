<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<form action="#" method="post">
    <div class="content">
        <h1>Tu dien anh - viet</h1>
        <input type="text" name="search" placeholder="Nhap tu can tim">
        <input type="button" value="Tim">
    </div>
</form>
<?php
$dictionary = array(
    "hello" => "xin chao",
    "anh huy" => "beo",
    "anh trung"=> "beo u",
    "chi nga"=> "dang yeu",
    "anh thang"=>"xau xi",
    "anh noi"=>"kho tinh"

);
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $searchword = $_POST["search"];
    $flag = 0;
    foreach ($dictionary as $word => $description){
        if($word == $searchword){
            echo "tu: ".$word. ".<br/> nghia cua tu: ".$description;
            echo "<br/>";
            $flag=1;
        }
    }
    if ($flag=0){
        echo"nguoi tot";
    }

}
?>
</body>
</html>