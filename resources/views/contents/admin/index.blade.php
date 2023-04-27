<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.admin.head')

    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> -->

    <style>
        .dropdown-menu-animated.show {
            top: 70% !important;
        }

        .dropdown-menu {
            min-width: 0;
        }
    </style>
</head>

<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- Start Page Content here -->
        <div class="content-page" style="margin-left:0;">
            <div class="leftside-menu" style="left:0; bottom: auto;">

                <!-- LOGO -->
                <a href="index.html" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="assets/images/logo.png" alt="" height="16">
                    </span>
                    <span class="logo-sm">
                        <img src="assets/images/logo_sm.png" alt="" height="16">
                    </span>
                </a>
            </div>
            <div class="content container">
                <!-- Topbar Start -->
                @include('partials.admin.topbar')
                <!-- end Topbar -->

                <!-- Start Content-->
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
                    <div class="row mb-2">
                        <div class="col-sm-8">
                            <a href="{{route('award.program.create')}}" data-action="create" class="btn btn-success mb-2" style="margin-right: .75rem;" data-bs-toggle="modal" data-bs-target="#award-modal">
                                <i class="mdi mdi-plus-thick me-1"></i>
                                Create Award Year
                            </a>
                            <a href="" class="btn btn-secondary mb-2" style="margin-right: .75rem;">
                                <i class="mdi mdi-close-thick me-1"></i>
                                Delete
                            </a>
                        </div>
                    </div>
                    @if($awps->isEmpty())
                    <div class="row justify-content-center">
                        <div class="col-lg-4">
                            <div class="text-center">
                                <img src="{{asset('public/assets/images/no-result.svg')}}" height="300" alt="no-result-found-image">
                                <!-- <h1 class="text-error mt-4">404</h1> -->
                                <h3 class="text-uppercase text-primary mt-4">No results found</h3>
                            </div> <!-- end /.text-center-->
                        </div> <!-- end col-->
                    </div>
                    @else
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive-sm">
                                    <table class="table table-hover table-sm table-centered mb-0">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck1">
                                                    </div>
                                                </th>
                                                <th>AWard Name</th>
                                                <th>Award Year</th>
                                                <th>Created on</th>
                                                <th>Created by</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($awps as $awp)
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                                    </div>
                                                </td>
                                                <td><a href="{{route('award.program', $awp->hashid)}}">{{$awp->name}}</a></td>
                                                <td>{{$awp->year}}</td>
                                                <td>{{$awp->created_at}}</td>
                                                <td>{{$awp->admin->fullname}}</td>
                                                <td><span class="badge {{$awp->status == 1 ? 'badge-success-lighten' : 'badge-danger-lighten'}}">{{$awp->status == 1 ? 'Active' : 'Inactive'}}</span></td>
                                                <td class="table-action dropdown">
                                                    <a href="#" class="action-icon dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-dots-vertical"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-animated">
                                                        <a class="dropdown-item" href="{{$awp->status == 1 ? route('award.program.deactivate', $awp->hashid) : route('award.program.activate', $awp->hashid) }}">{{$awp->status == 1 ? 'Deactivate' : 'Activate' }}</a>
                                                        <a class="dropdown-item" data-action="edit" data-id="{{$awp->hashid}}" data-year="{{$awp->year}}" data-name="{{$awp->name}}" data-loc="{{$awp->location}}" href="{{route('award.program.update',$awp->hashid)}}" data-bs-toggle="modal" data-bs-target="#award-modal">Edit</a>
                                                        <a class="dropdown-item" href="{{route('award.program.delete',$awp->hashid)}}">Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div>
                    @endif
                </div>
                <!-- container -->
                <!-- Add New Event MODAL -->
                <div class="modal fade" id="award-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form method="POST" action="" class="needs-validation" name="award-form" id="form-award">
                                @csrf
                                <div class="modal-header py-3 px-4 border-bottom-0">
                                    <h5 class="modal-title" id="modal-title"></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body px-4 pb-4 pt-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="control-label form-label">Program Name</label>
                                                <input class="form-control @error('award_name') is-invalid @enderror" placeholder="e.g. GRCFinCrimeAwardsNigeria" type="text" name="award_name" id="award_name" value required autocomplete="off" />
                                                @error('award_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="control-label form-label">Program Year</label>
                                                <select class="form-select @error('award_year') is-invalid @enderror" name="award_year" id="award_year" required>
                                                    <option id="init" value="#">Please select...</option>
                                                </select>
                                                @error('award_year')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong> select a valid event category</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="control-label form-label">Program Location</label>
                                                <input class="form-control @error('award_location') is-invalid @enderror" placeholder="e.g. Nigeria" type="text" name="award_location" id="award_location" required autocomplete="off" />
                                                @error('award_location')
                                                <span class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6"></div>
                                        <div class="col-6 text-end">
                                            <button type="button" class="btn btn-light me-1" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success" id="btn-save"></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div> <!-- end modal-content-->
                    </div> <!-- end modal dialog-->
                </div>
                <!-- end modal-->                
            </div>
            <!-- content -->

            <!-- Footer Start -->
            @include('partials.admin.footer')
            <!-- end Footer -->

        </div>
        <!-- End Page content -->
    </div>
    <!-- END wrapper -->

    <!-- scripts -->
    @include('partials.admin.scripts')
    <script src="{{asset('public/assets/js/pages/index-page.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    @if(Session::has('success'))
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success("{{ session('success') }}");
    </script>
    @endif

    @if(Session::has('danger'))
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.error("{{ session('danger') }}");
    </script>
    @endif

</body>

</html>