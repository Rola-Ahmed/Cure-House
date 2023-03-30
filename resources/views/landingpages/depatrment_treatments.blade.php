{{-- import stylechild from "../Doctors/Doctors.module.css"; --}}
{{-- import styleService from "./Service.module.css"; --}}

<head>



    <link href="{{asset('css/depatrment_treatments.css')}}" rel="stylesheet">

    {{--
    <link href="{{asset('css/department_aesthetics.css')}}" rel="stylesheet"> --}}

    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    @section('title')Dental Treatments @endsection


</head>

<body>
    <section id="dental-treatments" class="background">
        <section>
            <div class="container4">
                <div class="aboutTitle">
                    <h1 class="aboutTitleH1">Dental Treatments</h1>
                    <p class="departmentIconP  pharag">
                        Don’t let the pain control your mood
                    </p>
                </div>
            </div>
        </section>

        <section class="vh-100">
            <div class="position-relative  mx-auto ">
                <div class="row scrolling">
                    {{-- {/* row-A */} --}}
                    <div class="col-md-4">
                        {{-- {/* row-1-col-1 */} --}}
                        <div class="py-5 px-3 mb-2 text-center department-icon departmentIconWidth">
                            <div class="image-container">
                                <img class="img-aesthetics"
                                    src=" {{ asset('/imges/Dental_Treatment_icon/consultation.png')}}"
                                    alt="Consultation" />
                            </div>
                            <p class="departmentIconP">Consultation</p>
                            <h5>
                                Get a non-biased specialist opinion and treatment plan options
                                that accommodate you.
                            </h5>
                        </div>

                        {{-- {/* row-2-col-1 */}--}}
                        <div class="py-5 px-3 mb-2 text-center department-icon departmentIconWidth">
                            <div class="image-container">
                                <img class="img-aesthetics"
                                    src=" {{ asset('/imges/Dental_Treatment_icon/Scaling & Polishing.png')}}"
                                    alt="Scaling & Polishing" />
                            </div>
                            <p class="departmentIconP">
                                Scaling & Polishing
                            </p>
                            <h5 class="pharag">
                                Refresh your breath and keep your gums healthy as well as
                                get rid of stains on your teeth.
                            </h5>
                        </div>

                        {{-- {/* row-3-col-1 */}--}}
                        <div class="py-5 px-3 mb-2 text-center department-icon departmentIconWidth">
                            <div class="image-container">
                                <img class="img-aesthetics" src="/imges/Dental_Treatment_icon/Dental Implants_2.png"
                                    alt="Dental Implants" />
                            </div>
                            <p class="departmentIconP">Dental Implants</p>
                            <h5 class="pharag">
                                If you have a missing tooth/teeth don’t worry, Doctor's ders
                                dental can easily restore it with implants! The best option
                                you can get that mimic natural teeth. Installment’s payment
                                available for this service.
                            </h5>
                        </div>
                    </div>

                    {{-- {/* row-B*/}--}}
                    <div class="col-md-4">
                        {{-- {/* row-1-col-2 */} --}}
                        <div class="py-5 px-3 mb-2 text-center department-icon departmentIconWidth">
                            <div class="image-container">
                                <img class="img-aesthetics" src="/imges/Dental_Treatment_icon/Crowns_Bridges.png"
                                    alt="Crowns and Bridges" />
                            </div>
                            <p class="departmentIconP">
                                Crowns and Bridges
                            </p>
                            <h5 class="pharag">
                                Don’t postpone any more your missing or broken tooth/teeth.
                                Installment’s payment available for this service.
                            </h5>
                        </div>

                        {{-- {/* row-2-col-2 */} --}}
                        <div class="py-5 px-3 mb-2 text-center department-icon departmentIconWidth">
                            <div class="image-container">
                                <img class="img-aesthetics" src="/imges/Dental_Treatment_icon/Dental_Fillings.png"
                                    alt="Dental Fillings" />
                            </div>
                            <p class="departmentIconP">Dental Fillings</p>
                            <h5 class="pharag">
                                Have a chipped tooth? carious tooth? discolored or
                                disfigured tooth? Well, what are you waiting for hurry up
                                before it gets worse!
                            </h5>
                        </div>

                        {{-- {/* row-3-col-3 */} --}}
                        <div class="py-5 px-3 mb-2 text-center department-icon departmentIconWidth">
                            <div class="image-container">
                                <img class="img-aesthetics" src="/imges/Dental_Treatment_icon/Root Treatments.png"
                                    alt="Root Treatments" />
                            </div>
                            <p class="departmentIconP">Root Treatments</p>
                            <h5 class="pharag">
                                We used automated rotary endo system that will shorten your
                                treatment time and relieve the pain.
                            </h5>
                        </div>

                    </div>

                    {{-- {/* row-C*/}--}}
                    <div class="col-md-4">
                        {{-- {/* row-1-col-3 */} --}}
                        <div class="py-5 px-3 mb-2 text-center department-icon departmentIconWidth">
                            <div class="image-container">
                                <img class="img-aesthetics" src="/imges/Dental_Treatment_icon/Gum Treatments.png"
                                    alt="Gum Treatments" />
                            </div>
                            <p class="departmentIconP">Gum Treatments</p>
                            <h5 class="pharag">
                                Whether you suffer from periodontal pockets, receding gums,
                                gummy smile , pigmented gums or gum disease .Don’t worry we
                                are fully equipped for that and most of the procedures are
                                done using laser which have plenty of benefits.
                            </h5>
                        </div>

                        {{-- {/* row-2-col-3 */} --}}

                        <div class="py-5 px-3 mb-2 text-center department-icon departmentIconWidth">
                            <div class="image-container">
                                <img class="img-aesthetics"
                                    src="/imges/Dental_Treatment_icon/Extraction Oral Surgeries.png"
                                    alt="Extraction / Oral Surgeries" />
                            </div>
                            <p class="departmentIconP">
                                Extraction / Oral Surgeries
                            </p>
                            <h5 class="pharag">
                                An impacted tooth or badly decayed tooth is causing your
                                pain or abscess? Don’t keep it anymore
                            </h5>
                        </div>


                        {{-- {/* row-3-col-3 */} --}}

                        <div class="py-5 px-3 mb-2 text-center department-icon departmentIconWidth">
                            <div class="image-container">
                                <img class="img-aesthetics" src="/imges/Dental_Treatment_icon/Removable Prothesis.png"
                                    alt=" Removable Prothesis" />
                            </div>
                            <p class="departmentIconP">

                                Removable Prothesis
                            </p>
                            <h5 class="pharag">
                                Lost most of your teeth or all of them, we have got your
                                covered. We will be able to restore the aesthetics and
                                function back.
                            </h5>
                        </div>

                    </div>
                </div>
            </div>
        </section>
</body>