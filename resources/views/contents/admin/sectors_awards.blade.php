
@extends('layouts.admin.master')

@section('title', 'Sectors & Awards')


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
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <h4 class="header-title mb-3">{{$category->name}}</h4>
                <p>{{$category->description}}</p>
                    <!-- Checkout Steps -->
                    <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                        @foreach($sectors as $sector)
                    
                        <li class="nav-item">
                            <a href="#sector{{$sector->hashid}}" data-bs-toggle="tab" aria-expanded="{{$loop->iteration==1?'true':'false'}}" class="nav-link rounded-0 {{$loop->iteration==1?'active':''}}">
                                <i class="mdi mdi-account-circle font-18"></i>
                                <span class="d-none d-lg-block">{{$sector->name}}</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    <!-- Steps Information -->
                    <div class="tab-content">
                        @foreach($sectors as $sector)
                        <div class="tab-pane show {{$loop->iteration==1 ?'active' : ''}}" id="sector{{$sector->hashid}}">
                            <div class="row">
                                @foreach($sector->awards as $award)
                                <div class="col-lg-6">
                                    <div class="border p-3 mt-4 mt-lg-0 rounded">
                                        <h4 class="header-title mb-3">{{$award->name}}</h4>
                                        <h5>Description:</h5>
                                        <p>{{$award->description}}</p>

                                        <h5>Criteria:</h5>
                                        <p>{{$award->criteria}}</p>

                                        
                                        <div class="table-responsive">
                                        <h5>Nominees</h5>
                                            <table class="table table-centered mb-0">
                                                <tbody>
                                                    @foreach($nominees as $nominee)
                                                    @if (in_array($award->id, json_decode($nominee->award_ids)) && $award->sector_id == $nominee->sector_id)
                                                    <tr>
                                                        <td>
                                                            <p class="m-0 d-inline-block align-middle">
                                                                <a href="#" class="text-body fw-semibold">{{$nominee->name}}</a>
                                                                @for($i=1; $i<= count($big_votes);$i++)
                                                                @if(array_key_exists($nominee->id,$big_votes))
                                                                <span class="badge badge-outline-success ms-1" style="padding:3px; font-size:14px;">
                                                                    {{$big_votes[$i][$award->id]}} Votes
                                                                </span>
                                                                @else
                                                                <span class="badge badge-outline-success ms-1" style="padding:3px; font-size:14px;">
                                                                    0 Votes
                                                                </span>
                                                                @endif
                                                               @endfor

                                                            </p>
                                                        </td>
                                                        <td class="text-end">
                                                        <a href="javascript:void(0);" data-bs-container="#tooltip-container9" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download" class="btn btn-link text-muted btn-lg p-0">
                                                                    <i class="uil uil-cloud-download"></i>
                                                                </a>
                                                        </td>
                                                    </tr>
                                                    @endif
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                    </div> <!-- end .border-->

                                </div> <!-- end col -->
                                @endforeach
                                
                            </div> <!-- end row-->
                        </div>
                        @endforeach
                        <!-- End Billing Information Content-->
                    </div> <!-- end tab content-->
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
</div>
@endsection