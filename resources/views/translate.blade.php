<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="translate" method="POST">
        @csrf
        <input type="text" name="english" placeholder="Nhập english vào đây" value="<?php echo $en ?? ""?>">
        <input type="text" value="<?php echo $vn ?? "" ?>">
        <button>Dịch</button>
    </form>
</body>

</html>
