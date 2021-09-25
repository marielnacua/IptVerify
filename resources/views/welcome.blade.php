@extends('base')
<nav class="navbar navbar-expand-lg navbar-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="font-weight: bold;">IPT Security System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/landing')}}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/register')}}">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/login')}}">Login</a>
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
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <h1>Welcome to IPT Security System</h1>
                        </div>
                        <div class="carousel-item">
                        <h1>Developer: Mariel Nacua</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection