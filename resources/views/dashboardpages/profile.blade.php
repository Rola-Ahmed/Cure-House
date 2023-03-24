@extends('dashboard')
{{-- use Illuminate\Support\Facades\Auth; --}}


<head>

    {{--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script> --}}
    {{-- <script src="{{asset('js/profile.js')}}"></script> --}}

    <link href="{{asset('css/profile.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    {{--
    <link href="{{asset('css/register.css')}}" rel="stylesheet"> --}}
    <link href="{{asset('css/all.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('webfonts/')}}" rel="stylesheet">

    @section('Profile') Create new Blog @endsection
    <title>Profile</title>
</head>

@section('content')

<body>
    @if( Auth::user())
    {{-- .Auth::user()->id --}}
    {{-- action="{{ url("profileUpdate/".Auth::user()->id) }}" method="POST" --}}
    <form id='formId' class="form" action="{{ url("profileUpdate/".Auth::user()->id) }}" method="POST"
        enctype="multipart/form-data">

        {{-- <form id='formId' class="form" class="mx-1 mx-md-4" enctype="multipart/form-data"> --}}
            @csrf
            <div class='container-profile d-flex'>
                <div class="contanier">
                    <div class="section">
                        <div class="images">
                            <div class='image-container'>
                                {{-- <img
                                    src="{{ asset('/imges/backGroundImages/dental-clinic-icon-logo-vector-Graphics-18765961-1-1-580x386.jpg') }}"
                                    alt=" mas"></img> --}}

                                {{-- /uploads/1679063621_Dental_Flow.jpg --}}

                                <img src="{{ asset('/uploads/'.Auth::user()->profile_image) }}" alt=""></img>
                                {{-- <img src="{{ asset(" uploads/". Auth::user()->profile_image)}}" alt="mas"></img>
                                --}}
                            </div>
                            <i class="fa-solid fa-camera" style="position: relative; ">
                                <input disabled='disabled' class="form-control" type="file" id="uploaded_profile_image"
                                    name="uploaded_profile_image" style="  opacity: 0;  font-size: 10px;  position: absolute;  right: 0;
                                top: 0;" />
                            </i>

                            {{-- <input class="form-control" type="file" id="uploaded_profile_image"
                                name="uploaded_profile_image"> --}}

                        </div>
                        <h1>Dr.{{ Auth::user()->first_name }}</h1>
                        <p>
                            nozha,cario,egypt
                        </p>

                    </div>
                </div>

                <div class="container1">


                    {{-- action="{{ url('/profile/update/'.Auth::user()->id) }}"
                    enctype="multipart/form-data" --}}
                    {{-- @csrf --}}

                    {{-- first name --}}
                    <div class="form-group row">
                        <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-10">
                            <input readonly name='first_name' type="text" class="form-control" id="First-Name"
                                value="{{ Auth::user()->first_name }}">
                        </div>
                    </div>
                    {{-- last name --}}
                    <div class="form-group row">
                        <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-10">
                            <input name='last_name' readonly type="text" class="form-control" id="Last-Name"
                                value="{{ Auth::user()->last_name }}">
                        </div>
                    </div>
                    {{--Phone number--}}
                    <div class="form-group row">
                        <label for="phone_number" class="col-sm-2 col-form-label">Phone Number</label>
                        <div class="col-sm-10">
                            <input name='phone_number' readonly type="text" class="form-control" id=""
                                value=" {{ Auth::user()->phone_number}}">
                        </div>
                    </div>


                    {{-- email--}}
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input name='email' readonly type="text" class="form-control" id="inputEmail"
                                value="{{ Auth::user()->email}}">
                        </div>
                    </div>


                    {{-- <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <button type="submit" class="btn px-5 py-3 fw-bold  button btn-lg">Add User</button>
                    </div> --}}


                    {{-- <div class="form-group row">
                        <div class="col-sm-10">
                            <button id='update_btn' type="submit" class="btn btn-primary d-none">save</button>
                        </div>
                    </div> --}}


                </div>
            </div>

            <div class="form-group column ">
                <div class="col-sm-10">
                    <button id='edit_btn' type="button" class="btn px-5 py-1 button">edit</button>
                    {{-- type="submit" id='edit_btn' --}}
                </div>

                <div class="col-sm-10">
                    <button id='update_btn' type="submit" class="btn
                    px-5 py-1 button d-none " {{-- id='update_btn'
                        onclick="location.href='{{ url('profileUpdate/'.Auth::user()->id) }}'" --}}>
                        save update</button>


                </div>
            </div>
        </form>
        {{-- <div class="form-group row"> --}}
            {{-- <div class="col-sm-10">
                <button id='edit_btn' type="button" class="btn btn-primary">edit</button>
                {{-- type="submit" id='edit_btn' -- }}
            </div> --}}
            {{--
        </div> --}}
        @endif
        <script type="text/javascript" src="{{asset('js/profile.js')}}"></script>
</body>
@endsection

{{-- <table border="1">
    <tr>
        <td>Id</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>City Name</td>
        <td>Email</td>
    </tr>
    @foreach($user as $u)
    <tr>
        <td>{{ $u->id }}</td>
        <td>{{ $u->first_name }}</td>
        <td>{{ $u->last_name }}</td>
        <td>{{ $u->role }}</td>
        <td>{{ $u->email }}</td>
        <td>{{ $u->phone_number }}</td>
    </tr>
    @endforeach
</table> --}}