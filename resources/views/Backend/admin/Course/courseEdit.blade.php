@extends('Backend.admin.include.master')

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>ADD COURSE</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Course</li>
            </ul>
        </div>
        <div>
            <div class="container">


                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Edit Course</h3>
                            </div>
                           <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <form class="new-added-form" action="{{url('course/update',$course->id)}}" method="Post" enctype="multipart/form-data">
                           @csrf
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Course Name *</label>
                                    <input type="text" name="course_name" value="{{$course->course_name}}" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Course Code</label>
                                    <input type="text" name="course_code" value="{{$course->course_code}}" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Course Duration</label>
                                    <input type="text" name="course_duration" value="{{$course->course_duration}}" class="form-control">
                                </div>


                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Course Amount</label>
                                    <input type="text" name="course_amount" value="{{$course->course_amount}}" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Status</label>
                                    <select name="status" class="select2">
                                        <option value="{{$course->status}}">{{$course->status}}</option>
                                        <option value="Active">Active</option>
                                        <option value="Deactive">Deactive</option>

                                    </select>
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
            </div>

        </div>
        <!-- Social Media End Here -->
    @endsection


