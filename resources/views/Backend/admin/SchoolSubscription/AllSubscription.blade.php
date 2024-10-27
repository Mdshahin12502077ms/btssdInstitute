@extends('Backend.admin.include.master')

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>All SUBSCRIPTION</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>All Subscription</li>
            </ul>
        </div>
        <div>
            <div class="container col-lg-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                    All Subscription
                                <div>

                                <form action="{{url('School/subscription/list/all')}}" method="GET" align="right">
                                    <div class="row">
                                        <div class="col-md-8"></div>
                                        <div class="searchInput col-md-4 d-flex form-group">
                                                <input type="search" name="search_subscription" id="form1" class="form-control" style="font-size:20px" placeholder="Enter Institute Name"/>
                                            <button type="submit" style="font-size:20px" class="btn btn-primary" data-mdb-ripple-init>
                                                <i class="fas fa-search"></i>
                                              </button>
                                        </div>
                                    </div>
                                </form>
                                </div>

                            </div>
                            <div class="card-body">
                                <div class="card ui-tab-card">
                                    <div class="card-body">

                                        <div class="border-nav-tab">
                                            <ul class="nav " role="tablist">
                                                <li class="nav-item" style="margin-right:2%">
                                                    <a class="nav-link active btn-fill-sm text-dodger-blue border-dodger-blue pb-0 text-center pt-0" data-toggle="tab" href="#tab7" style="" role="tab" aria-selected="true" >All</a>
                                                </li>
                                                <li class="nav-item" style="margin-right:2%">
                                                    <a class="nav-link btn-fill-sm text-dark-pastel-green border-dark-pastel-green pb-0 text-center pt-0" data-toggle="tab" href="#tab8" role="tab" aria-selected="false" >Approved</a>
                                                </li>
                                                <li class="nav-item" style="margin-right:2%">
                                                    <a class="nav-link btn-fill-sm text-orange-peel border-orange-peel pb-0 text-center pt-0" data-toggle="tab" href="#tab9" role="tab" aria-selected="false" >Pending</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="btn-fill-sm text-red border-red pb-0 text-center pt-0" data-toggle="tab" href="#tab10" role="tab" aria-selected="false">Expired</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="tab7" role="tabpanel">



                                                          <div class="table-responsive">
                                                            <table class="table display data-table text-nowrap">
                                                                <thead>
                                                                    <tr>

                                                                        <th>Sl No</th>
                                                                        <th>Institute Name</th>
                                                                        <th>Plan Name</th>
                                                                        <th >Price</th>
                                                                        {{-- <th >Email</th>
                                                                        <th >Mobile No</th> --}}
                                                                        <th colspan="3">Date</th>
                                                                        <th >Status</th>
                                                                        <th >Action</th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>

                                                                        @foreach ($Allsubscription as $subscription)
                                                                        @php
                                                                        $branchdtls=App\Models\BranchDetails::where('branch_id',$subscription->branch_id)->first();
                                                                        @endphp

                                                                        <tr>

                                                                            <td>{{$loop->iteration}}</td>
                                                                            <td>{{$subscription->branch->institute_name}}</td>
                                                                            <td>{{($subscription->plan->name) }}</td>
                                                                             <td>{{$subscription->plan->price}}</td>
                                                                             {{-- <td>{{$branchdtls->e_mail}}</td>
                                                                             <td>{{$branchdtls->mobile_number}}</td> --}}
                                                                             <td colspan="3">Starting Date: <b>{{$subscription->starting_date}}<br></b> Expired Date: <b>{{$subscription->expired_date}}</b></td>
                                                                            <td><button type="button" class="btn btn-outline-success disabled" style="width: 100%;font-size:15px">{{$subscription->status}}</button></td>
                                                                            <td style="display: flex">

                                                                                   {{-- <a href="{{url('Branch/info',$subscription->id)}}" class="btn btn-info btn-lg" style="font-size:15px; margin-right:4%;height:100%"><i class="fa fa-eye" aria-hidden="true"></i></a> --}}
                                                                                   <a href="{{url('School/subscription/subscription/edit',$subscription->id)}}" class="btn btn-info btn-lg" style="font-size:15px;margin-right:4%;height:100%"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                                                   <form action="{{url('School/subscription/subscription/delete',$subscription->id)}}"  method="post"  style="margin-left:4%">
                                                                                       @csrf
                                                                                    <button type="submit" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure to delete this item?')" style="font-size:15px"><i class="fas fa-trash"></i></button>
                                                                                </form>


                                                                             </td>
                                                                          </tr>
                                                                        @endforeach
                                                                    </tr>



                                                                </tbody>
                                                            </table>
                                                            {{$Allsubscription->links()}}
                                                        </div>




                                                </div>
                                                <div class="tab-pane fade" id="tab8" role="tabpanel">

                                                    <div class="table-responsive">
                                                        <table class="table display data-table text-nowrap">
                                                            <thead>
                                                                <tr>

                                                                    <th>Sl No</th>
                                                                    <th>Institute Name</th>
                                                                    <th>Plan Name</th>
                                                                    <th >Price</th>
                                                                    {{-- <th >Email</th>
                                                                    <th >Mobile No</th> --}}
                                                                    <th colspan="3">Date</th>
                                                                    <th >Status</th>
                                                                    <th >Action</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>

                                                                    @foreach ($Approvedsubscription as $subscription)
                                                                    @php
                                                                    $branchdtls=App\Models\BranchDetails::where('branch_id',$subscription->branch_id)->first();
                                                                   @endphp

                                                                    <tr>

                                                                        <td>{{$loop->iteration}}</td>
                                                                        <td>{{$subscription->branch->institute_name}}</td>
                                                                        <td>{{$subscription->plan->name}}</td>
                                                                         <td>{{$subscription->plan->price}}</td>
                                                                         {{-- <td>{{$branchdtls->e_mail}}</td>
                                                                         <td>{{$branchdtls->mobile_number}}</td> --}}
                                                                         <td colspan="3">Starting Date: <b>{{$subscription->starting_date}}<br></b> Expired Date: <b>{{$subscription->expired_date}}</b></td>
                                                                        <td><button type="button" class="btn btn-outline-success disabled" style="width: 100%;font-size:15px">{{$subscription->status}}</button></td>
                                                                        <td style="display: flex">

                                                                            {{-- <a href="{{url('Branch/info',$subscription->id)}}" class="btn btn-info btn-lg" style="font-size:15px; margin-right:4%;height:100%"><i class="fa fa-eye" aria-hidden="true"></i></a> --}}
                                                                            <a href="{{url('School/subscription/subscription/edit',$subscription->id)}}" class="btn btn-info btn-lg" style="font-size:15px;margin-right:4%;height:100%"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                                            <form action="{{url('School/subscription/subscription/delete',$subscription->id)}}"  method="post"  style="margin-left:4%">
                                                                                @csrf
                                                                             <button type="submit" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure to delete this item?')" style="font-size:15px"><i class="fas fa-trash"></i></button>
                                                                         </form>


                                                                      </td>
                                                                      </tr>
                                                                    @endforeach
                                                                </tr>



                                                            </tbody>
                                                        </table>
                                                        {{$Approvedsubscription->links()}}
                                                    </div>

                                                </div>
                                                <div class="tab-pane fade" id="tab9" role="tabpanel">
                                                    <div class="table-responsive">
                                                        <table class="table display data-table text-nowrap">
                                                            <thead>
                                                                <tr>

                                                                    <th>Sl No</th>
                                                                    <th>Institute Name</th>
                                                                    <th>Plan Name</th>
                                                                    <th >Price</th>
                                                                    {{-- <th >Email</th>
                                                                    <th >Mobile No</th> --}}
                                                                    <th colspan="3">Date</th>
                                                                    <th >Status</th>
                                                                    <th >Action</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>

                                                                    @foreach ($Pendingsubscription as $subscription)
                                                                    @php
                                                                    $branchdtls=App\Models\BranchDetails::where('branch_id',$subscription->branch_id)->first();
                                                                   @endphp

                                                                    <tr>

                                                                        <td>{{$loop->iteration}}</td>
                                                                        <td>{{$subscription->branch->institute_name}}</td>
                                                                        <td>{{$subscription->plan->name}}</td>
                                                                         <td>{{$subscription->plan->price}}</td>
                                                                         {{-- <td>{{$branchdtls->e_mail}}</td>
                                                                         <td>{{$branchdtls->mobile_number}}</td> --}}
                                                                         <td colspan="3">Starting Date: <b>{{$subscription->starting_date}}<br></b> Expired Date: <b>{{$subscription->expired_date}}</b></td>
                                                                        <td><button type="button" class="btn btn-outline-success disabled" style="width: 100%;font-size:15px">{{$subscription->status}}</button></td>
                                                                        <td style="display: flex">

                                                                            {{-- <a href="{{url('Branch/info',$subscription->id)}}" class="btn btn-info btn-lg" style="font-size:15px; margin-right:4%;height:100%"><i class="fa fa-eye" aria-hidden="true"></i></a> --}}
                                                                            <a href="{{url('School/subscription/subscription/edit',$subscription->id)}}" class="btn btn-info btn-lg" style="font-size:15px;margin-right:4%;height:100%"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                                            <form action="{{url('School/subscription/subscription/delete',$subscription->id)}}"  method="post"  style="margin-left:4%">
                                                                                @csrf
                                                                             <button type="submit" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure to delete this item?')" style="font-size:15px"><i class="fas fa-trash"></i></button>
                                                                         </form>


                                                                      </td>
                                                                      </tr>
                                                                    @endforeach
                                                                </tr>



                                                            </tbody>
                                                        </table>
                                                        {{$Pendingsubscription->links()}}
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab10" role="tabpanel">
                                                    <div class="table-responsive">
                                                        <table class="table display data-table text-nowrap">
                                                            <thead>
                                                                <tr>

                                                                    <th>Sl No</th>
                                                                    <th>Institute Name</th>
                                                                    <th>Plan Name</th>
                                                                    <th >Price</th>
                                                                    {{-- <th >Email</th>
                                                                    <th >Mobile No</th> --}}
                                                                    <th colspan="3">Date</th>
                                                                    <th >Status</th>
                                                                    <th >Action</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>

                                                                    @foreach ($Expiredsubscription as $subscription)
                                                                    @php
                                                                    $branchdtls=App\Models\BranchDetails::where('branch_id',$subscription->branch_id)->first();
                                                                   @endphp

                                                                    <tr>

                                                                        <td>{{$loop->iteration}}</td>
                                                                        <td>{{$subscription->branch->institute_name}}</td>
                                                                        <td>{{$subscription->plan->name}}</td>
                                                                         <td>{{$subscription->plan->price}}</td>
                                                                         {{-- <td>{{$branchdtls->e_mail}}</td>
                                                                         <td>{{$branchdtls->mobile_number}}</td> --}}
                                                                         <td colspan="3">Starting Date: <b>{{$subscription->starting_date}}<br></b> Expired Date: <b>{{$subscription->expired_date}}</b></td>
                                                                        <td><button type="button" class="btn btn-outline-success disabled" style="width: 100%;font-size:15px">{{$subscription->status}}</button></td>
                                                                        <td style="display: flex">

                                                                            {{-- <a href="{{url('Branch/info',$subscription->branch_id)}}" class="btn btn-info btn-lg" style="font-size:15px; margin-right:4%;height:100%"><i class="fa fa-eye" aria-hidden="true"></i></a> --}}
                                                                            <a href="{{url('School/subscription/subscription/edit',$subscription->id)}}" class="btn btn-info btn-lg" style="font-size:15px;margin-right:4%;height:100%"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                                            <form action="{{url('School/subscription/subscription/delete',$subscription->id)}}"  method="post"  style="margin-left:4%">
                                                                                @csrf
                                                                             <button type="submit" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure to delete this item?')" style="font-size:15px"><i class="fas fa-trash"></i></button>
                                                                         </form>


                                                                      </td>
                                                                      </tr>
                                                                    @endforeach
                                                                </tr>



                                                            </tbody>
                                                        </table>
                                                        {{$Expiredsubscription->links()}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
        <!-- Social Media End Here -->
    @endsection
<script>

</script>

