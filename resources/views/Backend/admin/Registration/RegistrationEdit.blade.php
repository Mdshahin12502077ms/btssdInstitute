@extends('Backend.admin.include.master')

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>ADD COURSE</h3>
           
        </div>
        <div>
            <div class="container col-lg-12">


                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New Course</h3>
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
                        <form class="new-added-form" action="{{url('Registrations/Update',$registration->id)}}" method="Post" enctype="multipart/form-data">
                           @csrf
                            <div class="row">

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Session</label>
                                    <select name="session_id" class="select2">
                                        <option value="">Please Select Course</option>
                                      @foreach ($session as $session)
                                      <option {{($registration->session_id==$session->id)?'selected':''}} value={{$session->id}}>{{$session->session_name}},{{$education->education_year}}</option>
                                      @endforeach
                                    </select>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Time Limitation</label>
                                    <select name="time_setup_type" class="select2">
                                        <option value="{{$registration->time_setup_type}}">{{$registration->time_setup_type}}</option>
                                        <option value="Addmission">Addmission</option>
                                        <option value="Registration">Registration</option>
                                        <option value="Registration_Download">Registration Download</option>
                                        <option value="Student_List">Student List</option>
                                    </select>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Starting Date</label>
                                    <input name="starting_date" type="text"value="{{$registration->start_date}}"  class="form-control air-datepicker" data-position="bottom right">
                                    <i class="far fa-calendar-alt"></i>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Ending Date</label>
                                    <input name="ending_date" type="text" value="{{$registration->ending_date}}" class="form-control air-datepicker" data-position="bottom right">
                                    <i class="far fa-calendar-alt"></i>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Status</label>
                                    <select name="status" class="select2">
                                        <option value="{{$registration->status}}">{{$registration->status}}</option>
                                        <option value="Active">Active</option>
                                        <option value="Deactive">Deactive</option>

                                    </select>
                                </div>
                                <div class="col-md-6 form-group"></div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Update</button>
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


