@extends('Backend.admin.include.master')

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Add Education Year</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Education Year</li>
            </ul>
        </div>
        <div>
            <div class="container col-lg-12">

          <div class="row"><div class="card height-auto col-md-6">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Add New Education Year</h3>
                    </div>
                </div>
                <form class="new-added-form" action="{{url('education_year/insert')}}" method="Post" enctype="multipart/form-data">
                   @csrf
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-12 form-group">
                            <label>Educational YEAR *</label>
                            <input type="text" name="education_year" placeholder="Enter education Year" class="form-control">
                        </div>

                        <div class="col-md-6 form-group"></div>
                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div class="card height-auto mt-2 col-md-6">

            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>All Education Year</h3>
                    </div>

                </div>
                <form class="mg-b-20" action="{{url('course/search')}}" method="get">
                    @csrf
                    <div class="row gutters-8">

                        <div class="col-3-xxxl col-xl-4 col-lg-3 col-12 form-group">
                            <input type="text" name="course_code" placeholder="Search by Course Code ..." class="form-control">
                        </div>
                        <div class="col-4-xxxl col-xl-3 col-lg-4 col-12 form-group">
                            <input type="text" name="course_name" placeholder="Search by Course ..." class="form-control">
                        </div>
                        <div class="col-2-xxxl col-xl-2 col-lg-3 col-12 form-group">
                            <button type="submit" class="fw-btn-fill btn-gradient-yellow" >SEARCH</button>
                        </div>
                    </div>
                </form>

                <div class="table-responsive table table-bordered">
                    <table class="table display data-table text-nowrap font_style table_style">
                        <thead >
                            <tr>
                                <th class="table_cell" style="color:black;font-size:15px">
                                    <b>Sl</b>
                                </th>
                                <th class="table_cell" style="color:black;font-size:15px">
                                    <b>Education Year</b>
                                </th>
                                <th class="table_cell" style="color:black;font-size:15px">
                                    <b>Status</b>
                                </th>
                                <th class="table_cell" style="color:black;font-size:15px">
                                    <b>Current</b>
                                </th>
                                <th class="table_cell" style="color:black;font-size:15px">
                                    <b>Created Date</b>
                                </th>
                                <th class="table_cell" style="color:black;font-size:15px">
                                    <b>Action</b>
                                </th>
                            </tr>
                        </thead>
                        <tbody style="color:black;font-size:13px">

                              @foreach ($eduYear as $eduYear)
                                 <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$eduYear->education_year}}</td>
                                    <td>{{$eduYear->status}}</td>
                                    <td>
                                        @if ($eduYear->current==0)
                                        <p class="text-danger">Disable</p>
                                        @else
                                        <p class="text-success">Enable</p>
                                        @endif
                                    </td>
                                    <td>{{$eduYear->created_at}}</td>
                                    <td style="display: flex">

                                        <form action="{{url('education_year/update',$eduYear->id)}}" method="post" style="margin-right:4%">
                                            @csrf

                                            <button type="submit" class="mt-2 btn btn-info btn-lg font_icon" {{($eduYear->status=="Deactive")?'style="color:red"':''}}><i class="fas fa-exchange-alt"></i></button>
                                        </form>

                                        <form action="{{url('education_year/current/change',$eduYear->id)}}"  method="post" class="mt-2 mr-2">
                                            @csrf
                                         <button type="submit" class="btn btn-warning btn-lg font_icon" onclick="return confirm('Are you sure to change this item?')" style="font-size:15px"><i class="fas fa-check"></i></button>
                                        </form>

                                        <form action="{{url('education_year/delete',$eduYear->id)}}"  method="post" class="mt-2 ">
                                            @csrf
                                         <button type="submit" class="btn btn-danger btn-lg font_icon" onclick="return confirm('Are you sure to delete this item?')" style="font-size:15px"><i class="fas fa-trash"></i></button>
                                        </form>
                                  </td>
                                 </tr>
                              @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div></div>

            </div>

        </div>
        <!-- Social Media End Here -->
    @endsection


