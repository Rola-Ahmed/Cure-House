@extends('dashboard')
{{-- @extends('App\Models\User') --}}

<head>

    <link href="{{asset('css/patientrecords.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('webfonts/')}}" rel="stylesheet">

    @section('title') Paitent Records @endsection
    <!-- {{-- <title>View Paitent Records</title> --}} -->
</head>


@section('content')
<div class="tableFixHead">
    {{-- class="scroll-container" --}}
    {{-- <table class="table">
        <thead>
            <tr class='fixed'>
                <th scope="col">first_name</th>
                <th scope="col">Last_name</th>
                <th scope="col">phone_number</th>
                <th scope="col">doctor</th>
                <th scope="col">admin</th>

            </tr>
        </thead>
    </table> --}}
    <table class="table table-striped">

        <thead>
            <tr class='fixed'>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Doctor</th>
                <th scope="col">Admin</th>
            </tr>
        </thead>

        <tbody>


            @foreach ($patientRecords as $patient )

            <tr>
                <th scope="row">{{ $patient->first_name }}</th>
                <td>{{ $patient->Last_name}}</td>
                <td>{{ $patient->phone_number}}</td>
                {{-- <td>patient->{{ $patient->admin_id->first_name}}</td> --}}

                {{-- @foreach (Auth::user()->$patientRecords as $p) --}}
                {{-- $user = auth()->user(); --}}

                {{-- $profile = $user->profile; --}}
                {{-- $name = $user->profile->display_name --}}
                {{-- @foreach($patientRecords as $patient=> $inquiryValue) --}}
                <td>{{$patient->user->first_name}}</td>
                <td>{{$patient->user2->first_name}}</td>
                {{-- <td>{{ User()->find(doctor_id)->first_name }}</td> --}}

                {{-- <td>{{ \Auth::user::find($id)->first_name}}</td> --}}

                {{-- <td>{{ $inquiryValue->admin_id }}</td> --}}
                {{-- @endforeach --}}

            </tr>

            @endforeach
        </tbody>

    </table>


    {{-- <table class="fixed_header">
        <thead>
            <tr>
                {{-- <th scope="col">#</th> -- }}
                <th scope="col">first_name</th>
                <th scope="col">Last_name</th>
                <th scope="col">phone_number</th>
                <th scope="col">doctor</th>
                <th scope="col">admin</th>
            </tr>
        </thead>
        @foreach ( $patientRecords as $patient )
        <tbody>
            <tr>
                <th scope="row">{{ $patient->first_name }}</th>
                <td>{{ $patient->Last_name}}</td>
                <td>{{ $patient->phone_number}}</td>
                {{-- <td>patient->{{ $patient->admin_id->first_name}}</td> -- }}
                <td>{{ $patient->doctor_id }}</td>
                <td>{{ $patient->admin_id }}</td>
            </tr>


        </tbody>
        @endforeach
    </table> --}}
</div>
@endsection