@extends('layouts.admin.master')

@section('title', 'Awards')


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
                    <div class="row">
                        <div class="col-6">
                            <h4 class="header-title mb-4">Add Awards</h4>
                        </div>
                        <div class="col-6 text-end">
                            <button type="button" id="add-field" class="btn btn-success btn-sm">
                                <i class="mdi mdi-plus mdi-24px"></i>
                            </button>
                        </div>
                    </div>
                    <form class="needs-validation" method="POST" action="{{route('admin.create_award', $award_program)}}" name="add-award-form" id="add-award-form">
                        @csrf
                        <div class="row" id="create-form-row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">Category</label>
                                    <select class="form-select @error('category_name') is-invalid @enderror" name="category_name" id="category_name" data-url="{{route('admin.show_categories', $award_program)}}" required>
                                        <option id="init" value="">Please select...</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->hashid}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong> select a valid event category</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">Sector</label>
                                    <select class="form-select @error('sector_name') is-invalid @enderror" name="sector_name" id="sector_name" required disabled>
                                        <option id="init" value="">Select a Category first...</option>

                                    </select>
                                    @error('sector_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong> select a valid event category</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">Award Name</label>
                                    <input class="form-control @error('award_name') is-invalid @enderror" placeholder="Select a Sector first..." type="text" name="award_name" id="award_name" value required autocomplete="off" disabled />
                                    @error('award_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">Award Description</label>
                                    <textarea class="form-control @error('award_description') is-invalid @enderror" placeholder="Select a Sector first..." name="award_description" id="award_description" required style="min-height: 100px;" disabled></textarea>
                                    @error('award_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">Award Criteria</label>
                                    <textarea class="form-control @error('award_criteria') is-invalid @enderror" placeholder="Select a Sector first..." name="award_criteria" id="award_criteria" required style="min-height: 100px;" disabled></textarea>
                                    @error('award_criteria')
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
                                <button type="submit" class="btn btn-success" id="btn-save-award">Create</button>
                            </div>
                        </div>
                    </form>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-7">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-4">Awards</h4>
                    <div class="accordion custom-accordion" id="custom-accordion-one">
                        @foreach($categories as $category)
                        <div class="card mb-0">
                            <div class="card-header" id="heading{{$loop->iteration}}">
                                <h5 class="m-0">
                                    <a class="custom-accordion-title d-block py-1{{$loop->iteration == 1 ? '' : 'collapsed'}}" data-bs-toggle="collapse" href="#collapse{{$category->hashid}}" aria-expanded="{{$loop->iteration == 1 ? 'true' : 'false'}}" aria-controls="collapse{{$category->hashid}}">
                                        {{$category->name}} <i class="mdi mdi-chevron-down accordion-arrow"></i>
                                    </a>
                                </h5>
                            </div>

                            <div id="collapse{{$category->hashid}}" class="collapse {{$loop->iteration == 1 ? 'show' : ''}}" aria-labelledby="heading{{$loop->iteration}}" data-bs-parent="#custom-accordion-one">
                                <div class="card-body">
                                    <ul class="nav nav-tabs nav-bordered mb-3">
                                        @foreach($category->sectors as $sector)
                                        <li class="nav-item">
                                            @if($loop->iteration ==1)
                                            <a href="#sector{{$sector->hashid}}" data-bs-toggle="tab" aria-expanded="false" class="nav-link active" aria-labelledby="sector{{$sector->hashid}}">
                                                @else
                                                <a href="#sector{{$sector->hashid}}" data-bs-toggle="tab" aria-expanded="false" class="nav-link" aria-labelledby="sector{{$sector->hashid}}">
                                                    @endif
                                                    {{$sector->name}}
                                                </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                    <div class="tab-content">
                                        @foreach($category->sectors as $sector)
                                        @if($loop->iteration == 1)
                                        <div class="tab-pane show active" id="sector{{$sector->hashid}}">
                                            @else
                                            <div class="tab-pane" id="sector{{$sector->hashid}}">
                                                @endif
                                                @if($sector->awards->isEmpty())
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-8">
                                                        <div class=" text-center">
                                                            <img class="img-fluid not-found-img" src="{{asset('assets/images/no-result.svg')}}" height="300" alt="no-result-found-image">
                                                            <h4 class="text-uppercase text-primary mt-4">No Awards found</h4>
                                                        </div> <!-- end /.text-center-->
                                                    </div> <!-- end col-->
                                                </div>
                                                @else
                                                @foreach($sector->awards as $award)
                                                <div class="card mb-2 shadow-none border">
                                                    <div class="p-1">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto"></div>
                                                            <div class="col ps-0">
                                                                <a href="javascript:void(0);" class="text-muted fw-bold">
                                                                    {{$award->name}}
                                                                </a>
                                                            </div>
                                                            <div class="col-auto" id="tooltip-container9">
                                                                <!-- Button -->
                                                                <a href="{{route('admin.show_awards', $award_program)}}" class="btn btn-link btn-lg" data-action="delete" data-id="{{$award->hashid}}" data-bs-toggle="modal" data-bs-target="#delete-alert-modal" data-bs-container="#tooltip-container9" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
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
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->

            <!-- Update Sector MODAL -->

            <div id="delete-alert-modal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body p-3 pt-4">
                            <div class="text-center">
                                <form class="needs-validation" method="POST" action="" name="delete-award-form" id="delete-award-form">
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
        <script src="{{asset('assets/js/pages/award.js')}}"></script>

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