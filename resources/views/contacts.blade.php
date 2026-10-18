@extends ('app')

@section ('title', 'Контакты')

@section ('content')
    <h1>Наши контакты</h1>
    <p>Свяжитесь с нами любым удобным для вас способом:</p>

    <ul>
        @foreach ($contacts as $key => $value)
            <li><strong>{{ $key }}:</strong> {{ $value }}</li>
        @endforeach
    </ul>
@endsection
