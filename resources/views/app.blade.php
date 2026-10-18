<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield ('title', 'Laravel APP')</title>
</head>
<body>
    <header>
        <nav>
            <a href="/">Главная</a>
            <a href="/about">О нас</a>
            <a href="/contacts">Контакты</a>
        </nav>
    </header>
    <main>
        @yield ('content')
    </main>
    <footer>
        <h2>Якунин Егор Андреевич 251-321</h2>
    </footer>
</body>
</html>
