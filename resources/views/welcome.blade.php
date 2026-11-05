@extends ('app')

@section ('title', 'Главная страница')

@section ('content')
    <table border='1'>
        @foreach ($data as $articles)
            <tr>
                <td>{{$articles['date']}}</td>
                <td>{{$articles['name']}}</td>
                <td>{{$articles['preview_image']}}</td>
                <td>{{$articles['full_image']}}</td>
                <td>{{$articles['shortDesc']  ?? 'нифига'}}</td>
                <td>{{$articles['desc']}}</td>
                
            </tr>
        @endforeach
    </table>
@endsection
