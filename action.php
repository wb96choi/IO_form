<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>회원로그인</title>
</head>

<body>
    <?php
echo $_GET['id']."님 환영합니다";
echo '<br />';
echo "입력하신 아이디는".$_GET['id']."이고";
echo '<br />';
echo "입력하신 패스워드는".$_GET['pwd']."입니다";
?>
</body>

</html>