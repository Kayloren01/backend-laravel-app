<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield ('title', 'Laravel APP')</title>
</head>
<body>
    <header style="margin-bottom: 50px">
        <nav style="display: flex; justify-content: center; gap: 10px">
            <a href="/">Главная</a>
            <a href="/about">О нас</a>
            <a href="/contacts">Контакты</a>
            <a href="/signin">Регистрация</a>
        </nav>
    </header>
    <main>
        @yield ('content')
    </main>
    <footer style="margin-top: 50px">
        <h2 style="text-align: center">Якунин Егор Андреевич 251-321</h2>
    </footer>
</body>
</html>
