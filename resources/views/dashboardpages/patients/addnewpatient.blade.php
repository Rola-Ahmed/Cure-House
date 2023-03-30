@extends('dashboard')

<head>

    {{--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script> --}}



    <link href="{{asset('css/main.css')}}" rel="stylesheet">

    <link href="{{asset('css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('webfonts/')}}" rel="stylesheet">

    <link href="{{asset('css/addnewpatient.css')}}" rel="stylesheet">

    @section('title')Add new Patient @endsection
</head>
{{-- style="background-color: #eee; --}}
@section('content')
<section class=" sectiond-flex   d-flex  justify-content-center align-items-center w-100 ">
    {{-- bg-dark --}}
    <div class="container  "> {{-- bg-success --}}
        {{-- d-flex justify-content-center align-items-center --}}
        <form id='formId' class="form" action="{{ url("add/new/patientHandler") }}" method="POST">
            @csrf
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif
            <div class="form-row m-0">
                {{-- COLUMN-------1 --}}
                <div class="form-group col-md-6">


                    {{-- First name --}}
                    <div class="form-group row">
                        <div class="mt-2">
                            @error('first_name')
                            <h6 class="text-center alert-danger">{{ $message }}</h6>
                            @enderror
                        </div>
                        <label for="first_name" class="col-sm-2 col-form-label">First name</label>
                        <div class="col-sm-10">
                            <input name='first_name' type="text" placeholder="Enter First Name" class="form-control"
                                id="first-Name">
                        </div>
                    </div>

                    {{--Phone number--}}
                    <div class="form-group row ">
                        <div class="mt-2">
                            @error('phone_number')
                            <h6 class="text-center alert-danger">{{ $message }}</h6>
                            @enderror
                        </div>
                        <label for="phone_number" class="col-sm-2 col-form-label">Phone Number</label>
                        <div class="col-sm-10">
                            <input name='phone_number' placeholder="Enter Phone Number" type="text" class="form-control"
                                id="phone_number">
                        </div>
                    </div>

                    {{--GendeR--}}
                    <div class="form-group row ">
                        <div class="mt-2">
                            @error('gender-role')
                            <h6 class="text-center alert-danger">{{ $message }}</h6>
                            @enderror
                        </div>
                        <label for="gender-role" class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-10">
                            <select name='gender-role' class="d-flex flex-row align-items-center mb-4 w-100 p-1">
                                <option value="">select Gender</option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                            </select>
                        </div>
                    </div>


                    {{--Admin that added the patient--}}
                    <div class="form-group row ">

                        <label for="admin-name" class="col-sm-2 col-form-label">Admin Name</label>
                        <div class="col-sm-10 ">
                            <input readonly name='admin-name' type="text" class="form-control" id="admin-name"
                                value="{{ Auth::user()->first_name }}">
                        </div>
                    </div>



                </div>

                {{-- COLUMN-------2 --}}
                <div class="form-group col-md-6">

                    {{-- last name --}}
                    <div class="form-group row ">
                        <div class="mt-2">
                            @error('last_name')
                            <h6 class="text-center alert-danger">{{ $message }}</h6>
                            @enderror
                        </div>
                        <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-10">
                            <input name='last_name' placeholder="Enter Last Name" type="text" class="form-control"
                                id="Last-Name">
                        </div>
                    </div>

                    {{-- Bith --}}
                    <div class="form-group row   mb-3">
                        <div class="mt-2">
                            @error('birth-date')
                            <h6 class="text-center alert-danger">{{ $message }}</h6>
                            @enderror
                        </div>
                        <label class="col-sm-2 col-form-label" for="Birth-Date">Birth Date</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date" id="Birth-Date" name="birth-date">
                        </div>
                    </div>

                    {{-- Age--}}
                    <div class="form-group row   mb-5 ">
                        <div class="mt-2">
                            @error('age')
                            <h6 class="text-center alert-danger">{{ $message }}</h6>
                            @enderror
                        </div>
                        <label class="col-sm-2 col-form-label" for="age">Age</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="number" placeholder="enter your age" id="age" name="age"
                                min="1" max="120">
                        </div>
                    </div>

                    {{--Docotr that will for on the patient --}}
                    <div class="form-group row">
                        <div class="mt-2">
                            @error('doctor-role')
                            <h6 class="text-center alert-danger">{{ $message }}</h6>
                            @enderror
                        </div>
                        <label for="doctor-role" class="col-sm-2 col-form-label">Doctor</label>
                        <div class="col-sm-10">
                            <select name='doctor-role' class="d-flex flex-row align-items-center mb-4 w-100 p-1">

                                <option value="">select Doctor</option>
                                @foreach ($doctorsRecords as $doctor )

                                <th scope="row">{{ $doctor->first_name }}</th>


                                <option value="{{ $doctor->id }}">{{ $doctor->first_name }}</option>

                                @endforeach

                            </select>
                        </div>
                    </div>




                </div>

                {{-- <div class="form-group column ">
                    <div class="col-sm-10">
                        <button id='update_btn' type="submit" class="btn
                        px-5 py-1 button  ">Add patient </button>
                    </div>

                </div> --}}
                <button id='add_patient_Btn' type="submit" class="btn
                px-5 py-2 button-new-record  ">Add patient </button>

                {{-- <button type="submit" class="btn btn-primary">Sign in</button> --}}
            </div>
        </form>
    </div>
</section>

@endsection