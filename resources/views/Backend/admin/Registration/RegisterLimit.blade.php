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
                        </div>
                        <form class="new-added-form" action="{{url('Registrations/insert')}}" method="Post" enctype="multipart/form-data">
                           @csrf
                            <div class="row">

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Session</label>
                                    <select name="session_id" class="select2">
                                        <option value="">Please Select Course</option>
                                      @foreach ($session as $session)
                                      <option value={{$session->id}}> {{$session->session_name}},{{$education->education_year}}</option>
                                      @endforeach
                                    </select>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Time Limitation</label>
                                    <select name="time_setup_type" class="select2">
                                        <option value="">Select type</option>
                                        <option value="Addmission">Addmission</option>
                                        <option value="Registration">Registration</option>
                                        <option value="Registration_Download">Registration Download</option>
                                        <option value="Student_List">Student List</option>
                                    </select>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Starting Date</label>
                                    <input name="starting_date" type="text" placeholder="dd/mm/yyyy" class="form-control air-datepicker" data-position="bottom right">
                                    <i class="far fa-calendar-alt"></i>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Ending Date</label>
                                    <input name="ending_date" type="text" placeholder="dd/mm/yyyy" class="form-control air-datepicker" data-position="bottom right">
                                    <i class="far fa-calendar-alt"></i>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Status</label>
                                    <select name="status" class="select2">
                                        <option value="">Please Select</option>
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


                <div class="card height-auto">
                  <div class="card-header">
                    <h3>Registration List</h3>
                  </div>
                    <div class="card-body">

                            <table class="table">
                                <thead>
                                    <tr>
                                      <th scope="col">Serial No</th>
                                      <th scope="col">Session Name</th>
                                      <th scope="col">Session Type</th>
                                      <th scope="col">Starting Date</th>
                                      <th scope="col">Ending Date</th>

                                      <th scope="col">Status</th>
                                      <th scope="col">Acction</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($dataRegistration as  $dataReg)

                                    <tr>
                                     <td>{{$loop->iteration}}</td>
                                     <td>{{$dataReg->session->session_name??'no Choosen'}},
                                        {{$education->education_year??'no Choosen'}}</td>
                                     <td>{{$dataReg->time_setup_type??'no Choosen'}}</td>
                                     <td>{{$dataReg->start_date??'no Choosen'}}</td>
                                     <td>{{$dataReg->ending_date??'no Choosen'}}</td>
                                     <td>{{$dataReg->status??'no Choosen'}}</td>



                                     <td class="d-flex">
                                         <a href="{{url('Registrations/edit',$dataReg->id)}}" class="btn btn-info btn-lg"><i class="fa fa-edit" aria-hidden="true""></i></a>
                                         <form action="{{url('Registrations/delete',$dataReg->id)}}" style="margin-left:4%" method="post">
                                            @csrf
                                         <button type="submit" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure to delete this item?')"><i class="fas fa-trash"></i></button>
                                     </form>


                                        </td>
                                    </tr>

                                    @endforeach


                                   </tbody>
                              </table>

                              {{ $dataRegistration->links() }}

                    </div>
                </div>
            </div>

        </div>
        <!-- Social Media End Here -->


    @endsection


