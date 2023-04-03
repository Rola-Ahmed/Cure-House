{{-- @extends('dashboard') --}}
{{-- "{{asset('css/appointments/semantic.min.css')}}" --}}

@extends('dashboard')

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}" />


  <link href="fullcalendar/packages/core/main.css" rel="stylesheet" />
  <link href="fullcalendar/packages/daygrid/main.css" rel="stylesheet" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />

  <!-- Style -->
  <link rel="stylesheet" href="css/appointments/style.css" />

  {{-- <title>Calendar #10</title> --}}
  @section('title')Calendar @endsection
</head>

{{--

<body> --}}
  @section('content')
  <div class="header-appointment rounded h-100 m-2" id="calendar-container">
    <div id="calendar"></div>
  </div>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <script src="fullcalendar/packages/core/main.js"></script>
  <script src="fullcalendar/packages/interaction/main.js"></script>
  <script src="fullcalendar/packages/daygrid/main.js"></script>
  <script src="fullcalendar/packages/timegrid/main.js"></script>
  <script src="fullcalendar/packages/list/main.js"></script>

  <!--      YEAR , MONTH , DAY-->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
        var calendarEl = document.getElementById("calendar");

        var calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: ["interaction", "dayGrid", "timeGrid", "list"],
          height: "parent",
          header: {
            left: "prev,next",
            center: "title",
            // fc-button-primary class name css
            right: "dayGridMonth,timeGridWeek,timeGridDay,listWeek",
          },
//          defaultView: "dayGridMonth",
////  defaultDate: "2020-02-12",
// //         defaultDate: new Date().getFullYear()+'-'+new Date().getMonth()+'-'+new Date().getUTCDate(), ,
//          navLinks: true, // can click day/week names to navigate views
//          editable: true,
//          eventLimit: true, // allow "more" link when too many events
          events: [
            {
              title: "All Day Event",
              start: "2022-02-01",
            },
            {
              title: "Long Event",
              start: "2020-02-07",
              end: "2020-02-10",
            },
            {
              groupId: 999,
              title: "Repeating Event",
              start: "2020-02-09T16:00:00",
            },
            {
              groupId: 999,
              title: "Repeating Event",
              start: "2020-02-16T16:00:00",
            },
            {
              title: "Conference",
              start: "2020-02-11",
              end: "2020-02-13",
            },
            {
              title: "Meeting",
              start: "2020-02-12T10:30:00",
              end: "2020-02-12T12:30:00",
            },
            {
              title: "Lunch",
              start: "2020-02-12T12:00:00",
            },
            {
              title: "Meeting",
              start: "2020-02-12T14:30:00",
            },
            {
              title: "Happy Hour",
              start: "2020-02-12T17:30:00",
            },
            {
              title:new Date().getMonth(),
              start: "2020-02-12T20:00:00",
            },
            {
              title: new Date().getDay(),
              start: "2020-02-13T07:00:00",
            },
            {
              title: new Date().getFullYear(),
              url: "http://google.com/",
              start: "2020-02-28",
            },
               {
              title: new Date().getMonth(),
              start: "2020-02-28",
            }
              ,
               {
              title: new Date().getDay(),
              start: "2023-04-02",
            },
              {
              title: new Date().getUTCDate(),
              start: "2023-04-02",
            },
          ],
        });

        calendar.render();
      });
  </script>

  <!-- <script src="js/main.js"></script> -->
  {{--
</body> --}}
@endsection