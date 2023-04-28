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
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">{{$category->name}}</h4>
                  <h6 class="card-subtitle mb-2 text-muted"></h6>
                  <p class="card-text">{{$category->description}}</p>
                </div>
              </div>
        </div>
    </div>

    <div class="row">
        @foreach ($sectors as $sector)
        <div class="col-3">
            <div class="card" style="width: 20rem;">
                <div class="card-body">
                  <h3 class="card-title">
                    {{-- <a href="#sectors" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sectors" onclick="getSectorData({{$sector->id}})">
                        {{$sector->name}}
                      </a>
                       --}}
                       @php
                      $sector->hashid = Hashids::connection('sector')->encode($sector->id);
                      $category->hashid = Hashids::connection('category')->encode($category->id);
                        @endphp
                       <a href="{{route('admin.load_judging_awards', [request()->segment(3), $category->hashid, $sector->hashid])}}" >
                        {{$sector->name}}
                      </a>

                       <p class="sectorid" hidden>{{$sector->id}}</p>
                  </h3>
                </div>
              </div>
        </div>    
        @endforeach
    </div>


    <div class="collapse show">
        <div class="card card-body" id="sectorsfromajax">
          @if (isset($awards))

            @php
            $sector = Hashids::connection('sector')->decode(request()->segment(7));
            $sector_name = DB::table('sectors')->find($sector[0])->name;
            @endphp

            <div class="row">
                <h3> {{$sector_name}} </h3>
            </div>

          <table class="table table-responsive table-striped">
            <thead>
              <tr>
                <th scope="col" style="width: 5%">S/N</th>
                <th scope="col" style="width: 20%">Award Name</th>
                <th scope="col" style="width: 25%">Description</th>
                <th scope="col" style="width: 35%">Criteria</th>
                <th scope="col" style="width: 15%">Vote</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($awards as $award)
                <tr>
                  @php
                      $award->hashid = Hashids::connection('award')->encode($award->id);
                  @endphp
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$award->name}}</td>
                    <td>{{$award->description}}</td>
                    <td>{{$award->criteria}}</td>
                    <td><a href="{{route('admin.load_judging_award_nominees', [request()->segment(3), request()->segment(7), $award->hashid])}}" class="btn btn-sm btn-success">Vote</a></td>
                </tr>  
                  <br>
              @endforeach
            </tbody>
          </table>
        @else
        <div class="d-flex justify-content-center">
            <div class="alert alert-danger text-center" role="alert" style="width:25%;">
                <p>Please Select a Sector above to load awards.</p>
              </div>
        </div>
        @endif
        </div>
      </div>

    
    
</div>
@endsection

@section('scripts')
<!-- demo app -->
<script src="assets/js/pages/demo.dashboard-analytics.js"></script>
<!-- end demo js-->
@endsection