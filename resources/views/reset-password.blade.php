
<!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, material pro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, material design, material dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Material Pro is powerful and clean admin dashboard template"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Material Pro Template by WrapPixel</title>
    <link
      rel="canonical"
      href="https://www.wrappixel.com/templates/materialpro/"
    />
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../../assets/images/favicon.png"
    />
    <!-- Custom CSS -->
    <link href="../../dist/css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="main-wrapper">
      <!-- -------------------------------------------------------------- -->
      <!-- Preloader - style you can find in spinners.css -->
      <!-- -------------------------------------------------------------- -->
      <div class="preloader">
        <svg
          class="tea lds-ripple"
          width="37"
          height="48"
          viewbox="0 0 37 48"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M27.0819 17H3.02508C1.91076 17 1.01376 17.9059 1.0485 19.0197C1.15761 22.5177 1.49703 29.7374 2.5 34C4.07125 40.6778 7.18553 44.8868 8.44856 46.3845C8.79051 46.79 9.29799 47 9.82843 47H20.0218C20.639 47 21.2193 46.7159 21.5659 46.2052C22.6765 44.5687 25.2312 40.4282 27.5 34C28.9757 29.8188 29.084 22.4043 29.0441 18.9156C29.0319 17.8436 28.1539 17 27.0819 17Z"
            stroke="#1e88e5"
            stroke-width="2"
          ></path>
          <path
            d="M29 23.5C29 23.5 34.5 20.5 35.5 25.4999C36.0986 28.4926 34.2033 31.5383 32 32.8713C29.4555 34.4108 28 34 28 34"
            stroke="#1e88e5"
            stroke-width="2"
          ></path>
          <path
            id="teabag"
            fill="#1e88e5"
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M16 25V17H14V25H12C10.3431 25 9 26.3431 9 28V34C9 35.6569 10.3431 37 12 37H18C19.6569 37 21 35.6569 21 34V28C21 26.3431 19.6569 25 18 25H16ZM11 28C11 27.4477 11.4477 27 12 27H18C18.5523 27 19 27.4477 19 28V34C19 34.5523 18.5523 35 18 35H12C11.4477 35 11 34.5523 11 34V28Z"
          ></path>
          <path
            id="steamL"
            d="M17 1C17 1 17 4.5 14 6.5C11 8.5 11 12 11 12"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke="#1e88e5"
          ></path>
          <path
            id="steamR"
            d="M21 6C21 6 21 8.22727 19 9.5C17 10.7727 17 13 17 13"
            stroke="#1e88e5"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          ></path>
        </svg>
      </div>
      <!-- -------------------------------------------------------------- -->
      <!-- Preloader - style you can find in spinners.css -->
      <!-- -------------------------------------------------------------- -->
      <!-- -------------------------------------------------------------- -->
      <!-- Login box.scss -->
      <!-- -------------------------------------------------------------- -->
      <div
        class="
          auth-wrapper
          d-flex
          no-block
          justify-content-center
          align-items-center
        "
        style="
          background: url("../../assets/images/big/auth-bg.jpg) no-repeat center
            center;
        "
      >
        <div class="auth-box p-4 bg-white rounded">
          <div>
            <div class="logo text-center">
              <span class="db"
                ><img src="../../assets/images/logo-icon.png" alt="logo"
              /></span>
              <h5 class="font-weight-medium mb-3 mt-1">Recover Password</h5>
            </div>
            <!-- Form -->
            <div class="row">
              <div class="col-12">

                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if (\Session::has('error'))
                <div class="alert alert-danger">
                    {{ \Session::get('error') }}
                </div>
                @endif

                 <form action="{{ route('processResetPassword') }}" method="POST">
                            @csrf
                            <input type="hidden" name="token" value="{{$token}}">
                            <div class="form-group">
                                <label for="new_password">Password</label>
                                <input type="new_password" class="form-control" id="new_password" name="new_password"  placeholder="Enter  New Password">

                                @error('new_password')
                                <p class="invalid-feedback">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">Confirm Password</label>
                                <input type="confirm_password" class="form-control" id="confirm_password" name="confirm_password"  placeholder="Enter  Confirm Password">
                                @error('new_password')
                                <p class="invalid-feedback">{{$message}}</p>
                                @enderror
                            </div>
                  <div class="text-center">
                    <div class="col-xs-12">
                    

                      <button type="submit" class="btn d-block w-100 btn-info" value="Update Password">Reset Password</button>
                    </div>
                  </div>
                </form>
                <div class="text-center small"><a href="{{route('userLogin')}}">Click Here to Login</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- -------------------------------------------------------------- -->
      <!-- Login box.scss -->
      <!-- -------------------------------------------------------------- -->
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- All Required js -->
    <!-- -------------------------------------------------------------- -->
    <script src="../../dist/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- -------------------------------------------------------------- -->
    <!-- This page plugin js -->
    <!-- -------------------------------------------------------------- -->
    <script>
      // $('[data-bs-toggle="tooltip"]').tooltip();
      $(".preloader").fadeOut();
    </script>
  </body>
</html>