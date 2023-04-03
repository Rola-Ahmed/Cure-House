@extends('dashboard')

<head>


    {{--
    <link href="{{asset('css/main.css')}}" rel="stylesheet"> --}}

    <link href="{{asset('css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('webfonts/')}}" rel="stylesheet">


    <link href="{{asset('css/viewaddAdmin.css')}}" rel="stylesheet">

    {{-- @section('title')Admin @endsection --}}
</head>
@section('content')

<div class="TitleAdmin   d-block">
    <h1 class=" p-2">Doctor</h1>

</div>

<section class="container-admin   m-1 ">
    <div class="container-addBtn d-flex justify-content-between align-items-center  p-2 ">
        <h5>Doctor List</h5>
        <div class="d-flex justify-content-between  w-25 p-1 ">
            {{-- <input type="search" class="form-control rounded" placeholder="Search" /> --}}
            <input type="text" placeholder="Search.." class="p-1 rounded-2">

            <button onclick="location.href='{{ url('registerForm') }}'"
                class=" btn button-edit d-flex justify-content-between align-items-center p-1"><i
                    class="fa-solid fa-plus"></i>Add Doctor</button>

        </div>
    </div>




    <div class=' position-relative w-100 h-100'>

        <table class="table align-middle mb-0 ">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Contact</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody class=" table-scolling-admin">
                @foreach ($doctors as $admin )
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('/uploads/'.$admin->profile_image) }}" alt=""
                                style="width: 45px; height: 45px" class="rounded-circle" />
                            <div class="ms-3 mr-5 bg-banger">
                                <p class="fw-bold mb-1">Dr.{{ $admin->first_name }} {{ $admin->last_name}}</p>
                                <p class="text-muted mb-0">{{ $admin->email }}</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">{{ $admin->age }}</p>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">{{ $admin->gender }}</p>
                    </td>
                    <td>{{ $admin->phone_number }}</td>
                    <td class="ms-3">



                        <button type="button" class="btn px-1 py-1 button-edit"><i
                                class="fa-solid fa-pen-to-square"></i></button>

                        <button type="button" class="btn px-1 py-1 button-edit"><i
                                class="fa-solid fa-trash"></i></button>


                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>

    </div>
</section>
@endsection