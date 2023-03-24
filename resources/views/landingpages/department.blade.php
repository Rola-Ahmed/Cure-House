
       <head>
      <link href="{{asset('css/department.css')}}" rel="stylesheet"  >
      <link href="{{asset('css/main.css')}}" rel="stylesheet"  >
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        </head>
     <section id="department" class='department'>
        <div class='container'>
          <div class="row">
            <div class="col-md-6">
              <div
                class=
                  "department-icon py-5 departmentIcon"
              >
                <div class='imageContainer'>
                  <img
                    class='img-icon'
                    src="/imges/icones_department/dental_aesthetic_smile.png"
                    alt="Dental Aesthetics"
                  />
                </div>
                <p class='departmentIconP'>
                  Dental Aesthetics
                </p>
                {{-- {/* class={department-icon p}  */} --}}
           
                <Link to="dentalAesthetics">
                  <button
                    {{-- // class={` btn px-5 py-3  button}`} --}}
                    class='btn px-5 py-1 fw-bold  button'
                  >
                    {{-- {/* btn px-5 py-3 */} --}}
                    learn more
                  </button>
                </Link>
              </div>
            </div>

            <div class="col-md-6">
              <div
                class='department-icon py-5 departmentIcon'
              >
                {{-- {/* departmentIcon::after*/} --}}
                <div class='imageContainer'>
                  <img
                    class='img-icon'
                    src="/imges/icones_department/tooth_health.png"
                    alt="Dental Treatments"
                  />
                </div>
                <p class='departmentIconP'>
                  Dental Treatments
                </p>
                <Link to="dentalTreatments">
                  <button
                    class='btn px-5 py-1 fw-bold  button'
                  >
                    learn more
                  </button>
                </Link>
              </div>
            </div>
          </div>
        </div>
      </section>
  