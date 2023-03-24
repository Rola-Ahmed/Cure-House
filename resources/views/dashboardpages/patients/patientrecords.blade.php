@extends('dashboard')

<head>
    <link href="{{asset('css/patientrecords.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('webfonts/')}}" rel="stylesheet">

    @section('Profile') Paitent Records @endsection
    <!-- {{-- <title>View Paitent Records</title> --}} -->
</head>


@section('content')
<div class="scroll-container">
    <table class="table">
        <thead>
            <tr class='fixed'>
                {{-- <th scope="col">#</th> --}}
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
                {{-- <td>patient->{{ $patient->admin_id->first_name}}</td> --}}
                <td>{{ $patient->doctor_id }}</td>
                <td>{{ $patient->admin_id }}</td>
            </tr>


        </tbody>
        @endforeach
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