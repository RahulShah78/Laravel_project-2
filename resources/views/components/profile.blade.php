@extends('home')

@section('content')
<div class="page-wrapper">
    <div class="row page-tides">
        <div class="col-md-5 col-12 align-self-center">
            <h3 class="text-themecolor mb-0">Profile Page</h3>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Profile Page</li>
            </ol>
        </div>
        <div class="col-md-7 col-12 align-self-center d-none d-md-block">
            <div class="d-flex mt-2 justify-content-end">
                <div class="d-flex me-3 ms-2">
                    <div class="chart-text me-2">
                        <h6 class="mb-0"><small>THIS MONTH</small></h6>
                        <h4 class="mt-0 text-info">$58,356</h4>
                    </div>
                    <div class="spark-chart">
                        <div id="monthchart"></div>
                    </div>
                </div>
                <div class="d-flex ms-2">
                    <div class="chart-text me-2">
                        <h6 class="mb-0"><small>LAST MONTH</small></h6>
                        <h4 class="mt-0 text-primary">$48,356</h4>
                    </div>
                    <div class="spark-chart">
                        <div id="lastmonthchart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <center class="mt-4">
                            <img src="{{ asset('storage/' . Auth::user()->profile_image) }}" class="rounded-circle" width="183px" height="183px" />
                            <h4 class="card-title mt-2">{{ Auth::user()->name }}</h4>
                            <h6 class="card-subtitle">{{ Auth::user()->Role }}</h6>
                            <div class="row text-center justify-content-md-center">
                                <div class="col-4">
                                    <a href="javascript:void(0)" class="link"><i class="icon-people"></i><font class="font-weight-medium">254</font></a>
                                </div>
                                <div class="col-4">
                                    <a href="javascript:void(0)" class="link"><i class="icon-picture"></i><font class="font-weight-medium">54</font></a>
                                </div>
                            </div>
                        </center>
                    </div>
                    <div>
                        <hr />
                    </div>
                    <div class="card-body">
                        <small class="text-muted">Email address </small>
                        <h6>{{ Auth::user()->email }}</h6>
                        <small class="text-muted pt-4 db">Phone</small>
                        <h6>+91-{{ Auth::user()->number }}</h6>
                        <small class="text-muted pt-4 db">Address</small>
                        <h6>{{ Auth::user()->address }}</h6>
                        <div class="map-box">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7008.21144413189!2d77.3358772411248!3d28.56658787556377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5b7d4af0dc1%3A0xc370dee296269b66!2sArun%20Vihar%2C%20Sector%2037%2C%20Noida%2C%20Uttar%20Pradesh%20201303!5e0!3m2!1sen!2sin!4v1720529207402!5m2!1sen!2sin" width="100%" height="150" frameborder="0" style="border: 0" allowfullscreen></iframe>
                        </div>
                        <small class="text-muted pt-4 db">Social Profile</small>
                        <br />
                        <button class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i></button>
                        <button class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></button>
                        <button class="btn btn-circle btn-secondary"><i class="fab fa-youtube"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#last-month" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="current-month" role="tabpanel" aria-labelledby="pills-timeline-tab">
                        </div>
                        <div class="tab-content" id="last-month" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 b-r">
                                        <strong>Full Name</strong>
                                        <br />
                                        <p class="text-muted">{{ Auth::user()->name }}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r">
                                        <strong>Mobile</strong>
                                        <br />
                                        <p class="text-muted">{{ Auth::user()->number }}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r">
                                        <strong>Email</strong>
                                        <br />
                                        <p class="text-muted">{{ Auth::user()->email }}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6">
                                        <strong>Location</strong>
                                        <br />
                                        <p class="text-muted">{{ Auth::user()->address }}</p>
                                    </div>
                                </div>
                                <hr />
                                <p class="mt-4">
                                    Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                                </p>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
                                </p>
                                <p>
                                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                </p>
                                <h4 class="font-weight-medium mt-4">Skill Set</h4>
                                <hr />
                                <h5 class="mt-4">Wordpress <span class="pull-right">80%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%; height: 6px">
                                        <span class="sr-only">50% Complete</span>
                                    </div>
                                </div>
                                <h5 class="mt-4">HTML 5 <span class="pull-right">90%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%; height: 6px">
                                        <span class="sr-only">50% Complete</span>
                                    </div>
                                </div>
                                <h5 class="mt-4">jQuery <span class="pull-right">50%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%; height: 6px">
                                        <span class="sr-only">50% Complete</span>
                                    </div>
                                </div>
                                <h5 class="mt-4">Photoshop <span class="pull-right">70%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%; height: 6px">
                                        <span class="sr-only">50% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
