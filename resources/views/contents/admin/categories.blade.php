@extends('layouts.admin.master')

@section('title', 'Categories')


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
                    <h4 class="header-title mb-4">Add Category</h4>
                    <form class="needs-validation" method="POST" action="{{route('admin.create_category', $award_program)}}" name="add-category-form" id="add-category-form">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">Category Name</label>
                                    <input class="form-control @error('category_name') is-invalid @enderror" placeholder="e.g. Excellence Awards" type="text" name="category_name" id="category_name" required autocomplete="off" />
                                    @error('category_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">Description</label>
                                    <textarea class="form-control @error('category_description') is-invalid @enderror" placeholder="Short description of this category" name="category_description" id="category_description" required style="min-height: 100px;"></textarea>
                                    @error('category_description')
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
                    <h4 class="header-title mb-4">Categories</h4>

                    <div class="table-responsive">
                        <table class="table table-centered w-100 dt-responsive nowrap" id="categories-datatable">
                            <thead class="table-light">
                                <tr>
                                    <th>S/N</th>
                                    <th class="all">Name</th>
                                    <th class="all">Description</th>
                                    <th style="width: 85px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>
                                        {{$loop->iteration}}
                                    </td>
                                    <td>
                                        {{$category->name}}
                                    </td>
                                    <td>
                                        {{$category->description}}
                                    </td>
                                    <!-- <td>
                                        <span class="badge bg-success">Active</span>
                                    </td> -->

                                    <td class="table-action">
                                        <a href="{{route('admin.show_categories', $award_program)}}" class="action-icon" data-action="edit" data-id="{{$category->hashid}}" data-name="{{$category->name}}" data-desc="{{$category->description}}" data-bs-toggle="modal" data-bs-target="#edit-category-modal"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="{{route('admin.show_categories', $award_program)}}" class="action-icon" data-action="delete" data-id="{{$category->hashid}}" data-bs-toggle="modal" data-bs-target="#delete-alert-modal"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @if($categories->isEmpty())
                        <div class="row justify-content-center">
                            <div class="ml-auto mr-auto">
                                <div class="text-center">
                                    <img class="not-found-img" src="{{asset('assets/images/no-result.svg')}}" alt="no-result-found-image">
                                    <h3 class="text-uppercase text-primary mt-4">No results found</h3>
                                </div> <!-- end /.text-center-->
                            </div> <!-- end col-->
                        </div>
                        @endif
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
        <!-- Update Sector MODAL -->
        <div class="modal fade" id="edit-category-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form class="needs-validation" method="POST" action="" name="edit-category-form" id="edit-category-form">
                        @csrf
                        <div class="modal-header py-3 px-4 border-bottom-0">
                            <h5 class="modal-title" id="modal-title">Edit Category</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body px-4 pb-4 pt-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="control-label form-label">Category Name</label>
                                        <input class="form-control @error('category_name') is-invalid @enderror" placeholder="e.g. Excellence Awards" type="text" name="category_name" id="category-name" value required autocomplete="off" />
                                        @error('category_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="control-label form-label">Description</label>
                                        <textarea class="form-control @error('category_description') is-invalid @enderror" placeholder="Short description of this category" name="category_description" id="category-description" required style="min-height: 100px;"></textarea>
                                        @error('category_description')
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
                                    <button type="button" class="btn btn-light me-1" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success" id="btn-save-category">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="delete-alert-modal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body p-3 pt-4">
                        <div class="text-center">
                            <form class="needs-validation" method="POST" action="" name="delete-category-form" id="delete-category-form">
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
    <script src="{{asset('assets/js/pages/sector.js')}}"></script>

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