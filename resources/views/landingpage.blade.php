<head>
  <link href="{{asset('css/navbar.css')}}" rel="stylesheet">
  <link href="{{asset('css/main.css')}}" rel="stylesheet">
  <link href="{{asset('css/main.css')}}" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
  <title>@yield('title')</title>

</head>

<nav class='align-items-center position-fixed d-flex justify-content-around align-items-center  w-100 navbar'>
  <div class="title-nav d-flex align-items-end">
    <img class='img' src="{{ asset('/imges/3d_icon.png') }}" alt="icon" />
    <p class='paraghraph'>
      <span class='textLogoColor'>Cure Den</span>tal House
    </p>
  </div>

  <div class="nav-list">
    <ul class='d-flex ul'>
      {{-- ul from css --}}
      <li class='list-unstyled li'>
        {{-- li from css --}}

        <a name="home" class='text-decoration-none text-dark listDecoration'>
          Home
          {{-- href="#home" --}}
        </a>
      </li>
      <li class='list-unstyled li'>
        {{-- li from css --}}

        <a class='text-decoration-none text-dark listDecoration' name='about'>
          About
        </a>
      </li>
      <li class='list-unstyled li'>
        <a class='text-decoration-none text-dark listDecoration' name="department">
          Department
        </a>
      </li>
      <li class='list-unstyled li'>
        <a id='hoohoh' class='text-decoration-none text-dark listDecoration' to="doctor">
          Doctors
        </a>
      </li>
      <li class='list-unstyled li'>
        <a class='text-decoration-none text-dark listDecoration' to="service">
          Service
        </a>
      </li>
      <li class='list-unstyled li'>
        <a class='text-decoration-none text-dark listDecoration' to="departmentTrail">
          Contact
        </a>
      </li>
    </ul>
  </div>
  {{-- onclick="{{ url("login") }}" --}}
  <div>
    {{-- onlcik of login done js --}}
    <button type="button" class='btn px-5 py-1 button' onclick="location.href='{{ url('login') }}'">login</button>
    {{-- {{ url("login") }} --}}

  </div>
</nav>

@include('landingpages.home')
@include('landingpages.about')
@include('landingpages.department')
@include('landingpages.department_aesthetics')
@include('landingpages.depatrment_treatments')

<script src="{{asset('js/navbar.js')}}"></script>
{{-- type="text/javascript" --}}

{{-- @include('home') --}}