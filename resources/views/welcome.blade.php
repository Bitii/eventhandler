@extends ('layouts.app')

@section('content')
<div class="container py-5 border rounded shadow">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h1>Üdvözlünk az Eseménykezelő Weboldalon!</h1>
            <p class="lead">Fedezd fel, hozz létre és szerkessz eseményeket könnyedén!</p>
            <p class="lead">Folytatáshoz jelentkezz be vagy regisztrálj!</p>
        </div>
    </div>
    <div class="row justify-content-center ">
        <div class="cold-md-8 text-center">
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg mx-5 rounded shadow">Bejelentkezés</a>
            <a href="{{ route('register') }}" class="btn btn-secondary btn-lg mx-5 rounded shadow">Regisztráció</a>
        </div>
    </div>
</div>
@endsection