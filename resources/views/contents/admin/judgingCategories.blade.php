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
                
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row-->

    <div class="row">
        @foreach ($categories as $category)
        <div class="col-3">
            <div class="card" style="width: 20rem;">
                <div class="card-body">
                  <h5 class="card-title">{{$category->name}}</h5>
                  <p class="card-text">{{substr($category->description,0,100).'...'}}</p>
                  @php
                      $category->hashid = Hashids::connection('category')->encode($category->id);
                  @endphp
                  <a href="{{route('admin.load_judging_category_sector_page', [request()->segment(3), $category->hashid])}}" class="btn btn-primary">Cast Vote</a>
                </div>
              </div>
        </div>    
        @endforeach
    </div>

    
    
</div>
@endsection

@section('scripts')
<!-- demo app -->
<script src="assets/js/pages/demo.dashboard-analytics.js"></script>
<!-- end demo js-->
@endsection