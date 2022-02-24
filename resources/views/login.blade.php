<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<h1>Đăng nhập</h1>
<form action="login" method="post">
    @csrf
    <p>
        <input type="text" name="mota" placeholder="Mô tả sản phẩm">
    </p>
    <p>
        <input type="number" name="gia" placeholder="Giá niêm yết">
    </p>
    <p>
        <input type="number" name="phantram" placeholder="Tỷ lệ chiết khấu (phần trăm)">
    </p>
    <p>
        <button type="submit">Đăng nhập</button>
    </p>
</form>
</body>
</html>
