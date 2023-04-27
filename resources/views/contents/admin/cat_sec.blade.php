@extends('layouts.admin.master')

@section('title', 'categories & Sectors')


@section('content')
<div class="container">
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
        <!-- <div class="col-12"> -->
            @foreach($categories as $category)
        <div class="col-lg-4">
            <div class="card">
                <a href="{{route('admin.get_sectors_awards', ['award_program'=>$award_program, 'category'=>$category->hashid])}}">
                <div class="card-body">
                    <h6 class="header-title mb-3 text-start" style="color:#6c757d">Category Information</h6>
                    <div class="text-start">
                        <h4><b>{{$category->name}}</b></h4>
                        <p style="color: #6c757d;">{{$category->description}}</p>
                        <p class="mb-1" style="color: #6c757d;"><b>Sectors :</b> {{$category->sectors()->count()}}</p>
                    </div>
                </div>
                </a>
            </div>
        </div>
        @endforeach
        <div class="col-lg-12">
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
        <!-- </div> end col -->
    </div>
</div>
@endsection