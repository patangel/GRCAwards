@extends('layouts.admin.master')

@section('title', 'Sectors')


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
        <div class="col-xl-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-4">Add Sector</h4>
                    <form class="needs-validation" method="POST" action="{{route('admin.create_sector', $award_program)}}" name="add-sector-form" id="add-sector-form">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">Categories</label>
                                    @if ($categories->isEmpty())
                                    <p class="text-muted font-14">
                                        No Categories have been added yet!
                                    </p>
                                    <p class="text-muted font-14">
                                        <a href="{{route('admin.show_categories', $award_program)}}">Click here</a> to add the categeries for this award year
                                    </p>
                                    @else
                                    <select class="form-select @error('category_name') is-invalid @enderror" name="category_name" id="category_name">
                                    <option value="#">Please Select...</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->hashid}}">{{$category->name}}</option>
                                    @endforeach
                                    </select>
                                    @endif
                                </div>
                            </div>
                            <!-- <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">Sector Name</label>
                                    <select class="form-select @error('sector_name') is-invalid @enderror" name="sector_name" id="sector_name">
                                        <option value="#">Please Select...</option>
                                        <option value="Commercial Banks">Commercial Banks</option>
                                        <option value="Insurance">Insurance</option>
                                        <option value="Fintech">Fintech</option>
                                        <option value="Microfinance Banks">Microfinance Banks</option>
                                        <option value="Asset management">Asset management</option>
                                        <option value="Pension Fund Operators">Pension Fund Operators</option>
                                        <option value="Media">Media</option>
                                        <option value="Providers">Providers</option>
                                        <option value="Governors">Governors</option>                                        
                                    </select>
                                    @error('sector_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div> -->
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">Sectors</label>
                                    <div class="col-sm-12 mb-2 mb-sm-2">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="CB" name="selected_sectors[]" value="Commercial Banks">
                                            <label class="form-check-label text-muted" for="CB" >
                                            Commercial Banks
                                            </label>
                                        </div> <!-- end checkbox -->
                                    </div> <!-- end col -->
                                    <div class="col-sm-12 mb-2 mb-sm-2">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="IN" name="selected_sectors[]" value="Insurance">
                                            <label class="form-check-label text-muted" for="IN" >
                                            Insurance
                                            </label>
                                        </div> <!-- end checkbox -->
                                    </div> <!-- end col -->
                                    <div class="col-sm-12 mb-2 mb-sm-2">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="FT" name="selected_sectors[]" value="Fintech">
                                            <label class="form-check-label text-muted" for="FT" >
                                            Fintech
                                            </label>
                                        </div> <!-- end checkbox -->
                                    </div> <!-- end col -->
                                    <div class="col-sm-12 mb-2 mb-sm-2">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="MB" name="selected_sectors[]" value="Microfinance Banks">
                                            <label class="form-check-label text-muted" for="MB" >
                                            Microfinance Banks
                                            </label>
                                        </div> <!-- end checkbox -->
                                    </div> <!-- end col -->
                                    <div class="col-sm-12 mb-2 mb-sm-2">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="AM" name="selected_sectors[]" value="Asset Management">
                                            <label class="form-check-label text-muted" for="AM" >
                                            Asset Management
                                            </label>
                                        </div> <!-- end checkbox -->
                                    </div> <!-- end col -->
                                    <div class="col-sm-12 mb-2 mb-sm-2">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="PFO" name="selected_sectors[]" value="Pension Fund Operators">
                                            <label class="form-check-label text-muted" for="PFO" >
                                            Pension Fund Operators
                                            </label>
                                        </div> <!-- end checkbox -->
                                    </div> <!-- end col -->
                                    <div class="col-sm-12 mb-2 mb-sm-2">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="ME" name="selected_sectors[]" value="Media">
                                            <label class="form-check-label text-muted" for="ME" >
                                            Media
                                            </label>
                                        </div> <!-- end checkbox -->
                                    </div> <!-- end col -->
                                    <div class="col-sm-12 mb-2 mb-sm-2">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="PR" name="selected_sectors[]" value="Providers">
                                            <label class="form-check-label text-muted" for="PR" >
                                            Providers
                                            </label>
                                        </div> <!-- end checkbox -->
                                    </div> <!-- end col -->
                                    <div class="col-sm-12 mb-2 mb-sm-2">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="GO" name="selected_sectors[]" value="Governors">
                                            <label class="form-check-label text-muted" for="GO" >
                                            Governors
                                            </label>
                                        </div> <!-- end checkbox -->
                                    </div> <!-- end col -->
                                    @error('selected_sectors')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6"></div>
                            <div class="col-6 text-end">
                                <button type="submit" class="btn btn-success" id="btn-save-category">Create</button>
                            </div>
                        </div>
                    </form>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-7">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-4">Sectors</h4>
                    <ul class="nav nav-tabs nav-bordered mb-3">
                        @foreach($categories as $category)
                        <li class="nav-item">
                            @if($loop->iteration ==1)
                            <a href="#{{$category->hashid}}2" data-bs-toggle="tab" aria-expanded="false" class="nav-link active" aria-labelledby="{{$category->hashid}}2">
                            @else
                            <a href="#{{$category->hashid}}2" data-bs-toggle="tab" aria-expanded="false" class="nav-link" aria-labelledby="{{$category->hashid}}2">
                            @endif
                                {{$category->name}}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    <div class="tab-content">
                        @foreach($categories as $category)
                        @if($loop->iteration == 1)
                        <div class="tab-pane show active" id="{{$category->hashid}}2" >
                        @else
                        <div class="tab-pane" id="{{$category->hashid}}2">
                        @endif
                            @if($category->sectors->isEmpty())
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class=" text-center">
                                        <img class="img-fluid not-found-img" src="{{asset('assets/images/no-result.svg')}}"  alt="no-result-found-image">
                                        <h4 class="text-uppercase text-primary mt-4">No Sectors found</h4>
                                    </div> <!-- end /.text-center-->
                                </div> <!-- end col-->
                            </div>
                            @else
                            @foreach($category->sectors as $sector)
                            <div class="card mb-2 shadow-none border">
                                <div class="p-1">
                                    <div class="row align-items-center">
                                        <div class="col-auto"></div>
                                        <div class="col ps-0">
                                            <a href="javascript:void(0);" class="text-muted fw-bold">
                                                {{$sector->name}}
                                            </a>
                                        </div>
                                        <div class="col-auto" id="tooltip-container9">
                                            <!-- Button -->
                                            <a href="{{route('admin.show_sectors', $award_program)}}" class="btn btn-link btn-lg" data-action="delete" data-id="{{$sector->hashid}}" data-bs-toggle="modal" data-bs-target="#delete-alert-modal" data-bs-container="#tooltip-container9" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                                <i class="mdi mdi-delete"></i>
                                            </a>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                        @endforeach
                    </div>
                </div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>

<div id="delete-alert-modal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-3 pt-4">
                <div class="text-center">
                    <form class="needs-validation" method="POST" action="" name="delete-sector-form" id="delete-sector-form">
                        @csrf
                        @method('DELETE')
                        <i class="dripicons-warning h1 text-danger" style="font-size: xxx-large;"></i>
                        <h4 class="mt-2">Are you sure?</h4>
                        <p class="mt-3">You won't be able to recover this data once deleted.</p>
                        <div style="display: flex;justify-content:space-between;flex-direction: row;">
                            <button type="button" class="btn btn-light my-2" data-close data-bs-dismiss="modal">No, cancel it!</button>
                            <button class="btn btn-danger my-2" data-submit data-bs-dismiss="modal">Yes, delete it!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
@endsection

@section('scripts')
<script src="{{asset('assets/js/pages/category.js')}}"></script>

@if(Session::has('success'))
<script>
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "preventDuplicates": true,
        "preventOpenDuplicates": true
    }
    toastr.success("{{ session('success') }}");
</script>
@endif

@if(Session::has('danger'))
<script>
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "preventDuplicates": true,
        "preventOpenDuplicates": true
    }
    toastr.error("{{ session('danger') }}");
</script>
@endif
@endsection