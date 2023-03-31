<head>

    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('webfonts/')}}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>





    <title>@yield('title')</title>
</head>


<nav class="navbar navbar-inverse navbar-global navbar-fixed-top pb-5 ">
    {{-- <div class="container-fluid">
        <div class="title-nav d-flex align-items-end">
            <img class='img' src="{{ asset('/imges/3d_icon.png') }}" alt="icon" />
            <p class='paraghraph'>
                <span class='textLogoColor'>Cure Den</span>tal House
            </p>
        </div>

    </div> --}}
    <div class="title-nav d-flex align-items-end">
        <img class='img' src="{{ asset('/imges/3d_icon.png') }}" alt="icon" />
        <p class='paraghraph'>
            <span class='textLogoColor'>Cure Den</span>tal House
        </p>
    </div>
</nav>

{{-- <nav class="navbar-primary">
    <a href="#" class="btn-expand-collapse"><span class="glyphicon glyphicon-menu-left"></span></a>
    <ul class="navbar-primary-menu">
        <li>
            <a href="#"><span class="glyphicon glyphicon-list-alt"></span><span class="nav-label">Dashboard</span></a>
            <a href="#"><span class="glyphicon glyphicon-envelope"></span><span class="nav-label">Profile</span></a>
            <a href="#"><span class="glyphicon glyphicon-cog"></span><span class="nav-label">Settings</span></a>
            <a href="#"><span class="glyphicon glyphicon-film"></span><span class="nav-label">Notification</span></a>
            <a href="#"><span class="glyphicon glyphicon-calendar"></span><span class="nav-label">Monitor</span></a>
        </li>
    </ul>
</nav> --}}

<div class="sidebar pb-2 pr-2 pt-1">
    {{-- <a id="eefe" href="#home">DashBoard</a> --}}

    {{-- class="active" --}}
    {{-- <i class="fa-solid fa-gauge-simple"></i> --}}
    <div class="d-flex justify-content-around align-items-center   fw-bold ">
        <a class="button-dash-board" href="{{ url("registerForm") }}"><i class="fa-solid fa-user-doctor"></i>Add
            User</a>
    </div>

    <div class="d-flex justify-content-around align-items-center   fw-bold ">
        <a class="button-dash-board" href="{{ url("") }}"><i class="fa-solid fa-user-clock"></i>Admin</a>
    </div>


    <div class="d-flex justify-content-around align-items-center   fw-bold pl-1 ">
        <button id='new-patient-dropDown-Btn' class="button-dash-board"><span><i
                    class="fa-solid fa-hospital-user"></i></span>Add
            Patient <i id='caret-down' class="fa-solid fa-caret-down "></i>
            <i id='caret-up' class="fa-solid fa-caret-up d-none"></i> </button>
    </div>
    <div id='drop-down-menu-list' class="d-none">
        <a class='ml-3' href="{{ url("add/new/patient") }}">Add new Record </a>
        <a class='ml-3' href="#">Add Medical History </a>
        {{-- <a class='ml-3' href="#">Add emergency Contact</i> </a> --}}


    </div>

    <div class="d-flex justify-content-around align-items-center   fw-bold ">
        <a class="button-dash-board" href="{{ url("patient/records") }}"><i
                class="fa-solid fa-book-medical"></i>Patient
            records</a>
    </div>

    <div class="d-flex justify-content-around align-items-center   fw-bold ">
        <a class="button-dash-board" href="#"><i class="fa-solid fa-capsules"></i>Add prescription</a>
    </div>


    <div class="d-flex justify-content-around align-items-center   fw-bold ">
        <a class="button-dash-board" href="#"><i class="fa-solid fa-file-invoice-dollar"></i>income</a>

    </div>

    <div class="d-flex justify-content-around align-items-center   fw-bold ">
        <a class="button-dash-board" href="#"><i class="fa-solid fa-wallet"></i>add Invokes</a>

    </div>

    <div class="d-flex justify-content-around align-items-center   fw-bold ">
        <a class="button-dash-board" href="#"><i class="fa-solid fa-truck-medical"></i>Emergency
        </a>

    </div>


    <div class="d-flex justify-content-around align-items-center   fw-bold ">
        <a class="button-dash-board" href="{{ url("profile") }}"><i class="fa-solid fa-user"></i>Profile</a>

    </div>
    <div class="d-flex justify-content-around align-items-center   fw-bold ">
        <a class="button-dash-board" href="{{ url("logout") }}"><i
                class="fa-solid fa-arrow-right-from-bracket"></i>Exit</a>

    </div>













</div>



<div class="main-content">
    @yield('content')

    {{-- <table border="1">
        <tr>
            <td>Id</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>City Name</td>
            <td>Email</td>
        </tr>

    </table> --}}
    {{-- <div class='profle-card'>
        <img src="/imges/home_background/background_section2.jpg" class="rounded" alt="Cinque Terre">
    </div>
    <div class='content-card'></div>
    --}}


    {{-- <table border="1">
        <tr>
            <td>Id</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>City Name</td>
            <td>Email</td>
        </tr> --}}
        {{-- @foreach ($user as $u)
        <tr>
            <td>{{ $u->id }}</td>
            <td>{{ $u->first_name }}</td>
            <td>{{ $u->last_name }}</td>
            <td>{{ $u->role }}</td>
            <td>{{ $u->email }}</td>
            <td>{{ $u->phone_number }}</td>
        </tr>
        @endforeach --}}
        {{-- @extends('dashboardpages.profile') --}}



</div>
<script src="{{asset('js/dashboard.js')}}"></script>