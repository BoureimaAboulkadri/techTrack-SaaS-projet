<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TechTrack 360')</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('css/fontawesome-all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet"> <!-- Si vous avez des styles personnalisés -->
    <!-- Autres liens CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body class="bg-gradient-primary">
<nav class="navbar align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0 navbar-dark">
    <div class="container-fluid d-flex flex-column p-0">
        <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="{{ url('/') }}">
            <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laptop-medical"></i></div>
            <div class="sidebar-brand-text mx-3"><span><strong>TechTrack 360</strong></span></div>
        </a>
        <hr class="sidebar-divider my-0" />
        <ul id="accordionSidebar" class="navbar-nav text-light">
            <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i><span>Tableau de bord</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('profile') }}"><i class="fas fa-user"></i><span>Profil</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('inventory') }}"><i class="fas fa-table"></i><span>Inventaire</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}"><i class="far fa-user-circle"></i><span>Connexion</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-circle"></i><span>Inscription</span></a></li>
        </ul>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            @yield('content')
        </main>
    </div>
</div>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script> <!-- Si vous avez des scripts personnalisés -->
</body>
</html>
