
{{-- //import styleHome from "./Home.module.css";
//import styleDepartment from "../DepartmentTrail/DepartmentTrail.module.css"; --}}
{{-- @extends('landingpage') --}}
<head>
  {{-- <link href="{{asset('../../../public/css/home.css')}}" rel="stylesheet"  >
<link href="{{asset('../../../public/css/main.css')}}" rel="stylesheet"  > --}}


<link href="{{asset('css/home.css')}}" rel="stylesheet"  >
<link href="{{asset('css/main.css')}}" rel="stylesheet"  >


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </head>

  @section('title')Home @endsection
  {{-- @section('content') --}}
  <header>
    <div
      class='d-flex justify-content-center  banner' 

    >
    {{-- vh-100 --}}
      <div class='w-100 vh-100  overlay'>
        <section id="home">
          <div class='p-3 text-left  container1'>
            <div class="title-description">
              <p class='fw-bold  welcomingDesc'>
                WELCOME TO CURE DETNAL HOUSE
              </p>
              <h1 class='h1'>We are here for your care</h1>
              <p class='fw-bold  PDesc'>
                Transform your teeth into a new, stunning grin that
                accentuates your profile. You can now smile with assurance.
              </p>
              <button
                class='btn px-5 py-3 fw-bold  button'
              >
                Make an Appointment
              </button>
            </div>
          </div>
        </section>
      </div>
    </div>
  </header>

  {{-- @endsection --}}

      {{-- <About />

      <Department />
      {/* <DentalAesthetics /> */}
      {/* <DentalTreatments /> */}

      <Doctors />
      <Service />

      {/* <DepartmentTrail /> */} --}}
 
