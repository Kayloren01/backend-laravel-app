@extends ('app')

@section ('title', 'Форма регистрации')

@section ('content')
    <form
        action="/signin"
        method="POST"
        style="
            display: flex;
            flex-direction: column;
            gap: 10px;
            max-width: 200px;
            background-color: whitesmoke;
            border-radius: 15px;
            color: rgb(0, 0, 0);
            margin: 0 auto;
            padding: 20px;
        "
    >
        @csrf
        <label for="name">Имя</label>
        <input type="name" id="name" placeholder="Введите имя" name="name" />

        <label for="email">Email</label>
        <input
            type="email"
            id="email"
            placeholder="Введите email"
            name="email"
        />

        <label for="password">Пароль</label>
        <input
            type="password"
            id="password"
            placeholder="Введите пароль"
            name="password"
        />

        <button type="submit">Отправить</button>
    </form>
@endsection
