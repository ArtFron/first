<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">
<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 bg-dark text-white border-bottom shadow-sm">
      <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
        <span class="fs-4 text-white">Главная</span>
      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 link-body-emphasis text-decoration-none text-white" href="/">Главная</a>
        <a class="me-3 py-2 link-body-emphasis text-decoration-none text-white" href="/about">О нас</a>
        <a class="me-3 py-2 link-body-emphasis text-decoration-none text-white" href="/help">Помощь</a>
      </nav>
      <a href="/review" class="btn btn-warning text-white">Отзывы</a>
    </div>

<div class="container">
@yield('main_content')
</div>
</body>


</html>
