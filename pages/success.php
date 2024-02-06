<?php
if (isset($_POST['ajax'])) {
$to = $_POST['to'];
$subject = $_POST['sub'];
$msg = $_POST['msg'];
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: ".$_POST['from'].">";

$send = mail($to,$subject,$msg,$headers);

exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CryptoMaster Academy</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" href="../image/Crypto.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <nav class="navbar navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="../index.html"><img src="../image/Vector.png" alt="image"> CryptoMaster
                Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link link2"
                            style="color: black !important; border-bottom: 3px solid black;padding-bottom: 0px;"
                            href="/index.html">о
                            нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link2" href="./platforma.html">платформа</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link2" href="./kurs.html">курсы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link2" href="./carousel.html">отзывы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link2" href="./index.html#contact">соцсети </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link2" href="./xarita.html">контакты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> <i class='bx bxs-phone'></i>+7 (495) 185-58-52</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class='bx bx-envelope'></i> cryptomasteracadem@gmail.com</a>
                    </li>
                </ul>
                <a href="./kurs.html" style="color: black !important; ">
                    <form class="d-flex" role="search">
                        <button class="btn navbar_btn" type="button">записаться на курс</button>
                    </form>
                </a>
            </div>
        </div>
    </nav>
    <div class="navbar2">
        <ul>
            <li><a style="color: black !important; border-bottom: 3px solid black;padding-bottom: 0px;"
                    href="./index.html">о
                    нас</a></li>
            <li>
                <a href="./platforma.html">платформа</a>
            </li>
            <li>
                <a href="./kurs.html">курсы</a>
            </li>
            <li>
                <a href="./carousel.html">отзывы</a>
            </li>
            <li>
                <a href="#contact">соцсети</a>
            </li>
            <li><a href="./xarita.html">контакты</a></li>
        </ul>
    </div>

    <main style="margin-top: 100px;
  margin-bottom: 100px;">
        <div style="    max-width: 1000px;
        background: #FFA30B6B;
        display: flex;
        margin: auto;
        padding: 25px;
        border-radius: 200px;
        text-align: center;
        font-size: 30px;
        color: #fff;">
            <p style="
        text-align: center;
        font-size: 30px;
        color: #fff;">
                Оплата прошла успешно! <br>
                Все инструкции и материалы будут отправлены на указанную почту
            </p>

        </div>
        <div style="display: flex;
    justify-content: center;
    margin-top: 30px;">
            <a href="../index.html" style="color: #000 !important;"><button class="button-worring"
                    style="color: #000 !important;">на главную</button></a>
        </div>
    </main>

    <footer>
        <ul class="footer_page">
            <li>Контакты:</li>
            <li><a href="#">Почта: cryptomasteracadem@gmail.com</a></li>
            <li><a href="#">+7 (495) 185-58-52</a></li>
            <li><a href="#">Юридический адрес:</a></li>
            <li><a href="#">111399, город Москва, Мартеновская ул, д. 7, помещ./офис 45/13а</a></li>
        </ul>
        <ul class="footer_link footer_link1">
            <li><a href="Политика конфедициальности.docx">Политика конфиденциальности</a></li>
            <li><a href="Пользовательское соглашение.docx">Пользовательское соглашение </a></li>
            <li><a href="Безопасность платежей.pdf">Безопастность платежей</a></li>
            <li><a href="Договор оферты.docx">Договор публичной оферты</a></li>
        </ul>
        <ul style="text-align: center;" class="footer_page2">
            <li>ООО “Авокадо”</li>
            <li>ИНН 7720885046
            </li>
            <li>КПП 772001001</li>
            <li>ОГРН 1237700003474 </li>
        </ul>
        <ul class="footer_link footer_link2">
            <li><a href="Политика конфедициальности.docx">Политика конфиденциальности</a></li>
            <li><a href="Пользовательское соглашение.docx">Пользовательское соглашение </a></li>
            <li><a href="Безопасность платежей.pdf">Безопастность платежей</a></li>
            <li><a href="Договор оферты.docx">Договор публичной оферты</a></li>
        </ul>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="//code.jivo.ru/widget/Wmv2irdD2e" async></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            function send() {
                const orderId = localStorage.getItem("orderId");
                const email = localStorage.getItem("crypto-email");
                const description = localStorage.getItem("desc");
                console.log(email);

                if (email.length > 0) {
                        var from = email;
                        var sub = "Покупка курса";
                        var msg = `${description}. Номер заказа: ${orderId}`;
                        var to = "cryptoacadem@yandex.ru";
                        var data = "ajax=1&from=" + from + "&sub=" + sub + "&msg=" + msg + "&to=" + to;
                        if (from.length > 5) {
                            $.ajax({
                                type: 'POST',
                                data: data,
                                success: function (data) {
                                    localStorage.removeItem("orderId");
                                    localStorage.removeItem("crypto-email");
                                    localStorage.removeItem("description");
                                }
                            });
                        }
                    
                }
            }

            send();
        });
    </script>
</body>

</html>