@extends ('app')

@section ('title', 'Галерея')

@section ('content')
    <img
        style="display: block; margin: 0 auto; width: 800px"
        src="{{  asset("images/" . $image_name) }}"
    />
@endsection
