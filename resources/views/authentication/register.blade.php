<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>


  <link href="{{asset('css/main.css')}}" rel="stylesheet">
  <link href="{{asset('css/register.css')}}" rel="stylesheet">
  <link href="{{asset('css/all.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('webfonts/')}}" rel="stylesheet">

  {{-- <title>@yield('title')</title> --}}

</head>
{{-- style="background-color: #eee; --}}
<section class=" section vh-100 ">
  <div class="container h-100">
    <div class="row  justify-content-center align-items-center h-100">
      {{-- row d-flex --}}
      <div class="col-lg-12 col-xl-11">
        <div class="container-card card text-black">
          <div class=" card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <h1 class="title text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Register</h1>

                <form class="mx-1 mx-md-4" action="{{ url("registerHandler") }}" method="POST"
                  enctype="multipart/form-data">
                  @csrf
                  {{-- First Name --}}

                  <div class="mb-3">
                    <div class="mt-2">
                      @error('first_name')
                      <h6 class="text-center alert-danger">{{ $message }}</h6>
                      @enderror
                    </div>
                    <div class="input-group flex-nowrap ">
                      <span class="input-group-text bg-transparent" id="addon-wrapping"><i
                          class="fa-solid fa-user fa-lg me-2"></i></span>
                      <input type="text" class="form-control" name="first_name" id='first-name'
                        placeholder="First Name">
                    </div>

                  </div>


                  {{-- Last Name --}}
                  <div class="mb-3">
                    <div class="mt-2">
                      @error('last_name')
                      <h6 class="text-center alert-danger">{{ $message }}</h6>
                      @enderror
                    </div>

                    <div class="input-group flex-nowrap">
                      <span class="input-group-text bg-transparent" id="addon-wrapping"> <i
                          class="fas fa-user fa-lg me-2 "></i></span>
                      <input type="text" class="form-control" name="last_name" id='last-name' placeholder="Last Name">
                    </div>


                  </div>
                  {{-- phone Number --}}
                  <div class="mb-3">
                    <div class="mt-2">
                      @error('phone_number')
                      <h6 class="text-center alert-danger">{{ $message }}</h6>
                      @enderror
                    </div>
                    <div class="input-group flex-nowrap">
                      <span class="input-group-text bg-transparent" id="addon-wrapping"> <i
                          class="fa-solid fa-phone fa-lg me-2 "></i></span>
                      <input type="text" class="form-control" name="phone_number" id='phone_number'
                        placeholder="Phone Number">
                    </div>



                  </div>
                  {{-- email --}}

                  <div class="mb-3">
                    <div class="mt-2">
                      @error('email')
                      <h6 class="text-center alert-danger">{{ $message }}</h6>
                      @enderror
                    </div>
                    <div class="input-group flex-nowrap ">
                      <span class="input-group-text bg-transparent" id="addon-wrapping"> <i
                          class="fa-solid fa-envelope  fa-lg me-2"></i></span>
                      <input type="text" class="form-control" name="email" id='email' placeholder="Email">
                    </div>


                  </div>

                  {{-- password --}}
                  <div class="mb-3">
                    <div class="mt-2">
                      @error('password')
                      <h6 class="text-center alert-danger">{{ $message }}</h6>
                      @enderror
                    </div>
                    <div class="input-group flex-nowrap ">
                      <span class="input-group-text bg-transparent" id="addon-wrapping"><i
                          class="fa-solid fa-key  fa-lg me-2"></i></span>
                      <input type="text" class="form-control" name='password' id='password' placeholder="Password">
                    </div>

                  </div>

                  {{-- repeat-password --}}
                  {{-- <div class="mb-3">
                    <div class="mt-2">
                      @error('validation_password')
                      <h6 class="text-center alert-danger">{{ $message }}</h6>
                      @enderror
                    </div>
                    <div class="input-group flex-nowrap ">
                      <span class="input-group-text bg-transparent" id="addon-wrapping"> <i
                          class="fa-solid fa-key  fa-lg me-2"></i></span>
                      <input type="text" class="form-control" name='validation_password'
                        placeholder="Repeat your Password" id='repeat-password'>
                    </div>


                  </div> --}}
                  {{-- select user type --}}
                  <select name='role' class="d-flex flex-row align-items-center mb-4 w-100 p-1">
                    <option value="User Role">User Role</option>
                    <option value="admin">Admin</option>
                    <option value="doctor">Doctor</option>
                  </select>


                  {{-- image upload --}}
                  <div class="mb-3">
                    {{-- <label for="formFile" class="form-label">Default file input example</label> --}}
                    <input class="form-control" type="file" id="uploaded_profile_image" name="uploaded_profile_image">
                  </div>




                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn px-5 py-3 fw-bold  button btn-lg">Register</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="{{ asset('/imges/3d_icon.png') }}" class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>