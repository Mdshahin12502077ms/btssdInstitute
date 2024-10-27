@extends('Backend.admin.include.master')

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>All Package</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>All Package</li>
            </ul>
        </div>
        <div>
            <div class="container col-lg-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header d-flex" >
                               <a href="{{url('School/subscription/Package/all')}}" style="color:rgb(126, 131, 134);margin-right:2%"><i class="fas fa-tasks">Package List</i></a>
                                <a href="{{url('School/subscription/Package/add')}}" style="color:rgb(126, 131, 134)"><i class="fas fa-edit">Add Package</i></a>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                          <th scope="col">Serial No</th>
                                          <th scope="col">Name</th>
                                          <th scope="col">Price</th>
                                          <th scope="col">Discount Price</th>
                                          <th scope="col">Period Type</th>
                                          <th scope="col">Period</th>
                                          <th scope="col">Status</th>
                                          <th scope="col">Acction</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                       @foreach ($allPlan as  $package)

                                       <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$package->name}}</td>
                                        <td>{{$package->price}}</td>
                                        <td>{{$package->discount_price}}</td>
                                        <td>{{$package->subscription_period}}</td>
                                        <td>{{$package->period_limit}}</td>
                                        <td align="center"><button type="button" class="btn btn-outline-primary disabled" style="font-size: 15px; width:80%">{{$package->status}}</button></td>

                                        <td class="d-flex">
                                            <a href="{{url('School/subscription/Package/edit',$package->id)}}" class="btn btn-info btn-lg"><i class="fa fa-edit" aria-hidden="true""></i></a>
                                            <form action="{{url('School/subscription/Package/delete',$package->id)}}" style="margin-left:4%" method="post">
                                               @csrf
                                            <button type="submit" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure to delete this item?')"><i class="fas fa-trash"></i></button>
                                        </form>


                                           </td>
                                       </tr>

                                       @endforeach


                                      </tbody>
                                  </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
        <!-- Social Media End Here -->
    @endsection


