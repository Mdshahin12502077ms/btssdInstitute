@extends('Backend.admin.include.master')

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Edit Package</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Edit Package</li>
            </ul>
        </div>
        <div>
            <div class="container col-lg-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header d-flex" >
                                 <h5 style="color:rgb(126, 131, 134);">Edit Package/</h5>
                               <a href="{{url('School/subscription/Package/all')}}" style="color:rgb(126, 131, 134);margin-left:3%"><i class="fas fa-tasks">All Package</i></a>

                            </div>
                            <div class="card-body">
                                <form class="mb-5" action="{{url('School/subscription/Package/update',$getPlan->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="mb-3 col-md-12 mt-3">
                                            <label for="exampleInputEmail1" class="form-label">Plan Name:<span style="color:red;font-size:20px">*</span></label>
                                            <input type="text" name="name" class="form-control"
                                           value="{{$getPlan->name}}" style="font-size:15px">
                                        </div>

                                        <div class="mb-3 col-md-12 mt-3">
                                            <label for="exampleInputEmail1" class="form-label">Price:<span style="color:red;font-size:20px">*</span></label>
                                            <input type="text" name="price" class="form-control"
                                            value="{{$getPlan->price}}"style="font-size:15px">
                                        </div>

                                       <div class="mb-3 col-md-12 mt-3">
                                            <label for="exampleInputEmail1" class="form-label">Discount Price:</label>
                                            <input type="text" name="discount_price" class="form-control"
                                            value="{{$getPlan->discount_price}}"style="font-size:15px">
                                        </div>

                                        <div class="mb-3 col-md-12 mt-3">
                                            <label for="exampleInputEmail1" class="form-label">Sunscription Period:<span style="color:red;font-size:20px">*</span></label>
                                          <select name="subscription_period" class="form-control" style="font-size:15px;">
                                            <option value="{{$getPlan->subscription_period}}">{{$getPlan->subscription_period}}</option>
                                            <option value="Days">Days</option>
                                            <option value="Monthly">Monthly</option>
                                            <option value="Yearly">Yearly</option>
                                            <option value="Lifetime">Lifetime</option>
                                          </select>
                                        </div>

                                        <div class="mb-3 col-md-12 mt-3">
                                            <label for="exampleInputEmail1" class="form-label">Date:<span style="color:red;font-size:20px">*</span></label>
                                            <input type="text" name="date" class="form-control"
                                            value="{{$getPlan->date}}"style="font-size:15px">
                                        </div>
                                        <div class="mb-3 col-md-12 mt-3">
                                            <label for="exampleInputEmail1" class="form-label">Status<span style="color:red;font-size:20px">*</span></label>
                                            <select name="status" class="form-control" style="font-size:15px;">
                                                <option value="{{$getPlan->status}}">{{$getPlan->status}}</option>
                                                <option value="Active">Active</option>
                                                <option value="Deactive">Deactive</option>

                                              </select>
                                        </div>
                                        <div class="col-md-12"> <button type="submit"
                                                class="btn btn-primary btn-lg" style="font-size:18px;color:white">Update</button></div>

                            </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
        <!-- Social Media End Here -->
    @endsection


