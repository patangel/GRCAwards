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

    {{-- <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">{{$category->name}}</h4>
                  <h6 class="card-subtitle mb-2 text-muted"></h6>
                  <p class="card-text">{{$category->description}}</p>
                </div>
              </div>
        </div>
    </div> --}}

    <div class="card">
        <div class="card-header">
          <h4>Nominees for {{$award->name}} Award</h4>
          <h6 class="card-subtitle mb-2 text-muted">{{$award->criteria}}</h6>
        </div>
        
        <div class="card-body">
            <table class="table">
               
                    @if (count($nominees) < 1)
                    <div class="text-center">
                        <p>Nothing Found</p>
                        <a href="{{url()->previous()}}" class="btn btn-sm btn-danger">Go Back</a>
                    </div>
                    @else
                    <thead>
                        <tr>
                          <th scope="col">S/N</th>
                          <th scope="col">Nominee</th>
                          <th scope="col">No. of Votes</th>
                          @foreach ($judgingcriteria as $criteria)
                            <th scope="col">{{Str::title($criteria->criteria_title)}}</th>
                          @endforeach
                          <th scope="col">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($nominees as $nominee)
                            @php
                                $award->hashid = Hashids::connection('award')->encode($award->id);
                                $nominee->hashid = Hashids::connection('nominee')->encode($nominee->id);
                            @endphp
                          <tr>
                              <th scope="row">{{$loop->iteration}}</th>
                              <td>{{$nominee->name}}</td>
                              <td><span class="badge bg-info px-2 py-1">{{$nominee->novotes}}</span></td>
                              @for ($i = 0; $i < count($judgingcriteria); $i++)
                              <td> {{ $i }} </td>
                              @endfor
                              <td> <a href="{{route('admin.castvote', [request()->segment(3), $nominee->hashid, $award->hashid])}}" class="btn btn-primary btn-sm">Set Score</a> </td>
                            </tr>
                          @endforeach
                    </tbody>
                    @endif
              </table>
        </div>
      
    </div>

    
    
</div>
@endsection

@section('scripts')
<!-- demo app -->
<script src="assets/js/pages/demo.dashboard-analytics.js"></script>
<!-- end demo js-->

<script src="{{asset('public/assets/js/pages/sector.js')}}"></script>

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