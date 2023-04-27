@extends('layouts.admin.master')

@section('title', 'Admin Dashboard')
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box" style="margin-top: 20px; margin-bottom: 20px;">

                <div class="page-title">
                    <div style="width: 55px;float: left;height: 55px;background: turquoise;margin-right: 15px;">
                    </div>
                    <h4 style="display: block;">Award Year 2021</h4>
                    <h4 style="display: block;" class=" text-muted fw-normal mt-0 mb-0">sdfondsfjvnfv
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">set-up progress</h4>

                    <div class="progress" style="height: 2rem;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"><strong>75%</strong></div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-lg-6">
                            <h5 class="mb-4 font-16">What to do next?</h5>
                            <div class="row align-items-center mb-2">
                                <div class="col-auto">
                                    <div class="avatar-sm" style="height: 1.5rem;width:1.5rem;">
                                        <span class="avatar-title rounded">
                                            1
                                        </span>
                                    </div>
                                </div>
                                <div class="col ps-0">
                                    <a href="javascript:void(0);" class="text-muted fw-bold">Create Voting Categories </a>
                                </div>
                            </div>

                            <div class="row align-items-center mb-2">
                                <div class="col-auto">
                                    <div class="avatar-sm" style="height: 1.5rem;width:1.5rem;">
                                        <span class="avatar-title rounded">
                                            2
                                        </span>
                                    </div>
                                </div>
                                <div class="col ps-0">
                                    <a href="javascript:void(0);" class="text-muted fw-bold">Create Voting Sectors </a>
                                </div>
                            </div>

                            <div class="row align-items-center mb-2">
                                <div class="col-auto">
                                    <div class="avatar-sm" style="height: 1.5rem;width:1.5rem;">
                                        <span class="avatar-title rounded">
                                            3
                                        </span>
                                    </div>
                                </div>
                                <div class="col ps-0">
                                    <a href="javascript:void(0);" class="text-muted fw-bold">Create nominees profile</a>
                                </div>
                            </div>
                            <div class="row align-items-center mb-2">
                                <div class="col-auto">
                                    <div class="avatar-sm" style="height: 1.5rem;width:1.5rem;">
                                        <span class="avatar-title rounded">
                                            4
                                        </span>
                                    </div>
                                </div>
                                <div class="col ps-0">
                                    <a href="javascript:void(0);" class="text-muted fw-bold">Create Judges profile </a>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row-->

    <div class="row">
        <div class="col-xl-3 col-lg-4">
            <div class="card tilebox-one">
                <div class="card-body">
                    <i class='uil uil-users-alt float-end'></i>
                    <h6 class="text-uppercase mt-0">Voters</h6>
                    <h2 class="my-2" id="active-users-count">121</h2>
                    <p class="mb-0 text-muted">
                        <span class="text-success me-2"><span class="mdi mdi-arrow-up-bold"></span>
                            5.27%</span>
                        <span class="text-nowrap">Since last month</span>
                    </p>
                </div> <!-- end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->

        <div class="col-xl-3 col-lg-4">
            <div class="card tilebox-one">
                <div class="card-body">
                    <i class='mdi mdi-vote-outline float-end'></i>
                    <h6 class="text-uppercase mt-0">Votes</h6>
                    <h2 class="my-2" id="active-users-count">121</h2>
                    <p class="mb-0 text-muted">
                        <span class="text-success me-2"><span class="mdi mdi-arrow-up-bold"></span>
                            5.27%</span>
                        <span class="text-nowrap">Since last month</span>
                    </p>
                </div> <!-- end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->

        <div class="col-xl-3 col-lg-4">
            <div class="card tilebox-one">
                <div class="card-body">
                    <i class='uil uil-users-alt float-end'></i>
                    <h6 class="text-uppercase mt-0">Categories</h6>
                    <h2 class="my-2" id="active-users-count">121</h2>
                    <div class="row">
                        <p class="mb-0 text-muted col-sm-6">
                            <span class="badge badge-danger-lighten me-1">
                                5</span>
                            <span class="text-nowrap">Inactive</span>
                        </p>
                        <p class="mb-0 text-muted col-sm-6">
                            <span class="badge badge-success-lighten me-1">
                                5</span>
                            <span class="text-nowrap">Active</span>
                        </p>
                    </div>
                </div> <!-- end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->
        <div class="col-xl-3 col-lg-4">
            <div class="card tilebox-one">
                <div class="card-body">
                    <i class='uil uil-users-alt float-end'></i>
                    <h6 class="text-uppercase mt-0">Sectors</h6>
                    <h2 class="my-2" id="active-users-count">121</h2>
                    <div class="row">
                        <p class="mb-0 text-muted col-sm-6">
                            <span class="badge badge-danger-lighten me-1">
                                5</span>
                            <span class="text-nowrap">Inactive</span>
                        </p>
                        <p class="mb-0 text-muted col-sm-6">
                            <span class="badge badge-success-lighten me-1">
                                5</span>
                            <span class="text-nowrap">Active</span>
                        </p>
                    </div>
                </div> <!-- end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->
        <div class="col-xl-3 col-lg-4">
            <div class="card tilebox-one">
                <div class="card-body">
                    <i class='uil uil-users-alt float-end'></i>
                    <h6 class="text-uppercase mt-0">Awards</h6>
                    <h2 class="my-2" id="active-users-count">121</h2>
                    <div class="row">
                        <p class="mb-0 text-muted col-sm-6">
                            <span class="badge badge-danger-lighten me-1">
                                5</span>
                            <span class="text-nowrap">Inactive</span>
                        </p>
                        <p class="mb-0 text-muted col-sm-6">
                            <span class="badge badge-success-lighten me-1">
                                5</span>
                            <span class="text-nowrap">Active</span>
                        </p>
                    </div>
                </div> <!-- end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->

        <div class="col-xl-3 col-lg-4">
            <div class="card tilebox-one">
                <div class="card-body">
                    <i class='uil uil-users-alt float-end'></i>
                    <h6 class="text-uppercase mt-0">Nominees</h6>
                    <h2 class="my-2" id="active-users-count">121</h2>
                    <div class="row">
                        <p class="mb-0 text-muted">
                            <span class="badge badge-success-lighten me-1">
                                5</span>
                            <span class="text-nowrap">Shortlisted</span>
                        </p>

                    </div>
                </div> <!-- end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->
    </div>
    <div class="row">
        <div class="col-xl-6 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <a href="#" class="p-0 float-end">Export <i class="mdi mdi-download ms-1"></i></a>
                    <h4 class="header-title mt-1 mb-3">Activity Logs</h4>

                    <div class="table-responsive">
                        <table class="table table-sm table-centered mb-0 font-14">
                            <thead class="table-light">
                                <tr>
                                    <th>Activity</th>
                                    <th>initiated by</th>
                                    <th> Role</th>
                                    <th>initiated on</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Shorlisted a Nominee</td>
                                    <td>Chukwudi Ezeh</td>
                                    <td>Super admin</td>
                                    <td>19th-september-2021</td>
                                </tr>
                                <tr>
                                    <td>Shorlisted a Nominee</td>
                                    <td>Chukwudi Ezeh</td>
                                    <td>Super admin</td>
                                    <td>19th-september-2021</td>
                                </tr>
                                <tr>
                                    <td>Shorlisted a Nominee</td>
                                    <td>Chukwudi Ezeh</td>
                                    <td>Super admin</td>
                                    <td>19th-september-2021</td>
                                </tr>
                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div>

        <div class="col-xl-6 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <a href="#" class="p-0 float-end">Export <i class="mdi mdi-download ms-1"></i></a>
                    <h4 class="header-title mt-1 mb-3">Recent votes</h4>

                    <div class="table-responsive">
                        <table class="table table-sm table-centered mb-0 font-14">
                            <thead class="table-light">
                                <tr>
                                    <th>Voter</th>
                                    <th>Nominee</th>
                                    <th>Category</th>
                                    <th>Sector</th>
                                    <th>Address</th>
                                    <th>Location</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ezeh@yahoo.com</td>
                                    <td>GTBank</td>
                                    <td>Excellence Awards</td>
                                    <td>Banks</td>
                                    <td>192.123.334.0</td>
                                    <td>Lagos, Nigeria</td>
                                </tr>
                                <tr>
                                    <td>ezeh@yahoo.com</td>
                                    <td>GTBank</td>
                                    <td>Excellence Awards</td>
                                    <td>Banks</td>
                                    <td>192.123.334.0</td>
                                    <td>Lagos, Nigeria</td>
                                </tr>
                                <tr>
                                    <td>ezeh@yahoo.com</td>
                                    <td>GTBank</td>
                                    <td>Excellence Awards</td>
                                    <td>Banks</td>
                                    <td>192.123.334.0</td>
                                    <td>Lagos, Nigeria</td>
                                </tr>
                                <tr>
                                    <td>ezeh@yahoo.com</td>
                                    <td>GTBank</td>
                                    <td>Excellence Awards</td>
                                    <td>Banks</td>
                                    <td>192.123.334.0</td>
                                    <td>Lagos, Nigeria</td>
                                </tr>
                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- demo app -->
<script src="assets/js/pages/demo.dashboard-analytics.js"></script>
<!-- end demo js-->
@endsection