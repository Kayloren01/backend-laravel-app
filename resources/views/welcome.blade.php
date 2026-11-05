@extends ('app')

@section ('title', 'Главная страница')

@section ('content')
    <table border="1">
        @foreach ($data as $articles)
            <tr>
                <td>{{$articles['date']}}</td>
                <td>{{$articles['name']}}</td>
                <td>
                    <a href="/galery/{{ $articles['full_image'] }}">
                        <img
                            width="200px"
                            src="{{ asset('images/' . $articles['preview_image']) }}"
                        />
                    </a>
                </td>
                <td>{{$articles['shortDesc']  ?? '-'}}</td>
                <td>{{$articles['desc']}}</td>
            </tr>
        @endforeach
    </table>
@endsection
