
@extends('Backend.admin.include.master')

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div>
            <div class="container col-lg-12">


                <div class="dashboard-content-one">
                    <!-- Breadcubs Area Start Here -->
                    <div class="breadcrumbs-area">
                        <h3>Bkash Api</h3>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>Bkash Api Settings</li>
                        </ul>
                    </div>
                    <!-- Breadcubs Area End Here -->
                    <!-- Admit Form Area Start Here -->

                    <div class="card height-auto">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>Edit bKash (API)</h3>
                                </div>
                            </div>
                           <div class="card">
                            <form action="{{url('SystemSettings/BkashGateway/update',$getbkashPayment->id)}}" method="post" enctype="multipart/form-data">
                               @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{$getbkashPayment->name}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="transactionFee">Transaction Fee (%)</label>
                                        <input type="text" class="form-control" name="transactionFee" value="{{$getbkashPayment->transactionFee}}">
                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="accountType">Account Type</label>
                                        <select id="accountType" name="accountType" class="form-control">
                                            <option selected value="Tokenized API">{{$getbkashPayment->accountType}}</option>
                                            <option  value="Tokenized API">Tokenized API</option>
                                            <option  value="Checkeout Api">Checkout API</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="sandbox">Sandbox</label>
                                        <select name="sandbox" id="sandbox" class="form-control">
                                            <option selected value="Tokenized API">{{$getbkashPayment->sandbox}}</option>
                                            <option value="true">On</option>
                                            <option value="false">Off</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" name="username" value="{{$getbkashPayment->username}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" value="{{$getbkashPayment->password}}" >
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="appKey">App Key</label>
                                        <input type="text" class="form-control" name="appKey"value="{{$getbkashPayment->appKey}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="appSecret">App Secret</label>
                                        <input type="text" class="form-control" name="appSecret"value="{{$getbkashPayment->appSecret}}" >
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="mt-5">
                                            <img src="{{asset($getbkashPayment->logo)}}" alt="" style="height: 64px;width:64px">
                                        </div>
                                        <label class="text-dark-medium">Logo</label>
                                        <input type="file" name="logo" value="" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="sandbox">Status</label>
                                        <select name="status" class="form-control">
                                            <option selected>{{$getbkashPayment->status}}</option>
                                            <option value="Active">Active</option>
                                            <option value="Deactive">Deactive</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Update</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </form>
                           </div>
                        </div>
                    </div>

            </div>

        </div>
        <!-- Social Media End Here -->
    @endsection


