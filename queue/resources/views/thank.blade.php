<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark">
    <div class="bg-dark text-secondary text-center mx-5  ">
        <div class="col-lg-10 mx-auto my-4">
            <div class="h-25 w-25 mx-auto d-block">
                <img src="{{ asset('./img/success.png')  }}" class="img-fluid ">
            </div>
            <h1 class="display-1 fw-bold text-white">Регистрация прошла успешно</h1>
                <p class="fs-4 mt-3 mb-4">Вы записаны на </p>
                <p class="fs-4 mt-3 mb-4">Ваш индивидуальный номер {{}} <br>Сохраните его</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center ">
                        <button type="button" class="btn btn-outline-warning btn-lg px-4 me-sm-3 fw-bold mt-3"><a href="/" class="nav-link px-2">В начало</a></button>
                </div>
            </div>
    </div>
</body>
</html>
