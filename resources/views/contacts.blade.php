@extends ('app')

@section ('title', 'Контакты')

@section ('content')
    <h1>Контакты</h1>
    <p>Свяжитесь с нами любым удобным для вас способом:</p>

    <ul>
        @foreach ($contacts as $key => $value)
            <li><span>{{ $key }}:</span> {{ $value }}</li>
        @endforeach
    </ul>
@endsection
