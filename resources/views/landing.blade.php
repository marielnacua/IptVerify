@extends('base')
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="font-weight: bold;">Online Book Club</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/landing')}}">Dashboard</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/login')}}">Logout</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
@section('content')
<br><br>
<div class="container">
    <div class="row">
        <div class="col md-4">
        <div class="card">
            <div class="card-header">
                Welcome!!!
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                <p> “Don't be pushed around by the fears in your mind. Be led by the dreams in your heart.”</p>
                <footer class="blockquote-footer">Mariel Nacua</cite></footer>
                </blockquote>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection