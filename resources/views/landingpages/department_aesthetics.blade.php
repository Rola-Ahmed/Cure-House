<head>
    <link href="{{asset('css/department_aesthetics.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    @section('title')Dental Aesthetics @endsection

    {{--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script> --}}

</head>

<body id="dental-aesthetics">
    <section>
        <div class="container4">
            <div class="aboutTitle">
                <h1 class="aboutTitleH1">Dental Aesthetics</h1>
                <p class="departmentIconP  pharag">
                    Boost your charm with a new dazzling smile
                </p>
            </div>
        </div>
    </section>

    <section>
        {{-- {/* vh-50 */} --}}
        <div class="container">
            <div class="row">
                {{-- {/* colum-1 */} --}}
                <div class="col-md-6">
                    <div class="py-5 px-3 mb-2 text-center department-icon">
                        <div class="image-container">
                            <img class="img-aesthetics"
                                src="{{ asset('/imges/Dental_Aesthetics_icons/TeethWhitening.png') }}"
                                alt="Teeth Whitening" />
                        </div>
                        <p class=" departmentIconP">Dental Aesthetics</p>
                        <h5 class=" pharag">
                            If your yellow teeth annoy you? Then we have you covered. In
                            just one visit to ders dental you’ll be able to walk out with
                            whiter and brighter shinning looking teeth.
                        </h5>
                    </div>

                    {{-- {/* colum-2*/} --}}

                    <div class="py-5 px-3 mb-2 text-center department-icon">
                        <div class="image-container">
                            <img class="img-aesthetics"
                                src="{{ asset('/imges/Dental_Aesthetics_icons//hoolywoodSmile.png') }}"
                                alt="hoolywood Smile" />
                        </div>
                        <p class=" departmentIconP">hoolywood Smile</p>
                        <h5 class="pharag">
                            Have an event and need a quick solution to transform your
                            charming smile?
                        </h5>
                    </div>
                </div>

                {{-- {/* cooooooooooooooooool2222222222222 */} --}}

                <div class="col-md-6">
                    <div class="py-5 px-3 mb-2 text-center  department-icon">
                        <div class="image-container">
                            <img class="img-aesthetics"
                                src="{{ asset('/imges/Dental_Aesthetics_icons/Orthodontics.png') }}"
                                alt="Orthodontics" />
                        </div>
                        <p class=" departmentIconP">Orthodontics</p>
                        <h5 class=" pharag">
                            Your teeth are maligned or have an unerupted tooth.
                            Orthodontics would be your solution to make it right!
                        </h5>
                    </div>

                    {{-- {/* colum-2*/} --}}

                    <div class="py-5 px-3 mb-2 text-center department-icon">
                        <div class="image-container">
                            <img class="img-aesthetics" src="{{ asset('/imges/Dental_Aesthetics_icons/Veneers.png') }}"
                                alt="Veneers" />
                        </div>
                        <p class="stylechild.departmentIconP">Veneers</p>
                        <h5 class="stylechild.pharag">
                            Now you will be able to wear the smile you have always dreamt
                            of! Transform your teeth color, shape, and alignment with
                            dental veneers into a celebrity’s smile! Installment’s payment
                            available for this service.
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>