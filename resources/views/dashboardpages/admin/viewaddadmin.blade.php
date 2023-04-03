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

<div class="TitleAdmin  d-block">
    <h1 class=" p-2">Admin</h1>

</div>

<section class="container-admin  m-1 ">
    <div class="container-addBtn d-flex justify-content-between align-items-center  p-2 ">
        <h5>Admin List</h5>
        <div class="d-flex justify-content-between  w-25 p-1 ">
            {{-- <input type="search" class="form-control rounded" placeholder="Search" /> --}}
            <input type="text" placeholder="Search.." class="p-1 rounded-2">

            <button onclick="location.href='{{ url('registerForm') }}'"
                class=" btn button-edit d-flex justify-content-between align-items-center p-1"><i
                    class="fa-solid fa-plus"></i> Add
                Admin</button>

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

            <tbody class="table-scolling-admin">
                @foreach ($admins as $admin )
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('/uploads/'.$admin->profile_image) }}" alt=""
                                style="width: 45px; height: 45px" class="rounded-circle" />
                            <div class="ms-3">
                                <p class="fw-bold mb-1">{{ $admin->first_name }} {{ $admin->last_name}}</p>
                                <p class="text-muted mb-0">{{ $admin->email }}</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">{{ $admin->age }}</p>
                        {{-- <p class="text-muted mb-0">IT department</p> --}}
                    </td>
                    <td>
                        <p class="fw-normal mb-1">{{ $admin->gender }}</p>
                        {{-- <span class="badge badge-success rounded-pill d-inline">{{ $admin->email }}</span> --}}
                    </td>
                    <td>{{ $admin->phone_number }}</td>
                    {{-- <td>{{ $admin->phone_number }}</td> --}}
                    <td class="ms-3">

                        {{-- <button type="button" class="btn btn-link btn-sm btn-rounded">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button> --}}

                        <button type="button" class="btn px-1 py-1 button-edit"><i
                                class="fa-solid fa-pen-to-square"></i></button>
                        <button onclick='location.href="{{ url("delete/admin/doctor/$admin->id") }}"' type="button"
                            class="btn px-1 py-1 button-edit"><i class="fa-solid fa-trash"></i></button>


                    </td>
                </tr>
                {{-- <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="https://mdbootstrap.com/img/new/avatars/6.jpg" class="rounded-circle" alt=""
                                style="width: 45px; height: 45px" />
                            <div class="ms-3">
                                <p class="fw-bold mb-1">Alex Ray</p>
                                <p class="text-muted mb-0">alex.ray@gmail.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">Consultant</p>
                        <p class="text-muted mb-0">Finance</p>
                    </td>
                    <td>
                        <span class="badge badge-primary rounded-pill d-inline">Onboarding</span>
                    </td>
                    <td>Junior</td>
                    <td>
                        <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold"
                            data-mdb-ripple-color="dark">
                            Edit
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="https://mdbootstrap.com/img/new/avatars/7.jpg" class="rounded-circle" alt=""
                                style="width: 45px; height: 45px" />
                            <div class="ms-3">
                                <p class="fw-bold mb-1">Kate Hunington</p>
                                <p class="text-muted mb-0">kate.hunington@gmail.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">Designer</p>
                        <p class="text-muted mb-0">UI/UX</p>
                    </td>
                    <td>
                        <span class="badge badge-warning rounded-pill d-inline">Awaiting</span>
                    </td>
                    <td>Senior</td>
                    <td>
                        <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold"
                            data-mdb-ripple-color="dark">
                            Edit
                        </button>
                    </td>
                </tr> --}}
                @endforeach
            </tbody>
        </table>

    </div>
</section>
@endsection