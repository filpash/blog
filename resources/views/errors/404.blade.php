@extends ('layouts.layout', ['title' => "404 error! Enter correct address."])

@section('content')
    <div class="card">
        <h2 class="card-header">Come back in your district! 404 Error!</h2>
        <img src="{{asset('img/404.jpg')}}" width="1108" height="700" alt="404">
    </div>

    <a href="/" class="btn btn-outline-primary">Quickly come back on the main page</a>
@endsection
