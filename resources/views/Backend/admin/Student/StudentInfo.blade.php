@extends('Backend.admin.include.master')

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3> Student Information</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Student Information</li>
            </ul>
        </div>
        <div>

            <div class="container col-lg-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dashboard-content-one">
                            <!-- Breadcubs Area Start Here -->

                            <!-- Breadcubs Area End Here -->
                            <!-- Student Details Area Start Here -->
                            <div class="card height-auto ">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="card-body">
                                            <div class="heading-layout1">
                                                <div class="item-title">
                                                    <h3>Student Details</h3>
                                                </div>
                                            </div>
                                            <div class="single-info-details">

                                                <div class="item-content">
                                                    <div class="header-inline item-header">

                                                        <div class="header-elements">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-edit"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-print"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-download"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                            <table class="table ">

                                                                <tbody>
                                                                  <tr>

                                                                    <td class="mt-5 d-flex justify-content-center" >
                                                                        <img src="{{asset($student->student_photo)}}" alt=""style="border-radius: 20% 20%;height:20vh;width:15vh;margin-right:4%">
                                                                       <div class="" style="margin-top: 7vh">
                                                                        <h3 style="">{{$student->st_name}}</h3>
                                                                        <h4>#{{$student->st_id_number}}</h4>
                                                                       </div>

                                                                    </td>


                                                                  </tr>

                                                                  <tr>
                                                                    <td class="d-flex">
                                                                       <p style="font-size:20px"> <i class="fa fa-envelope" aria-hidden="true" style="margin-right:3%;"></i>Email:</p>
                                                                       <p  style="font-size:20px">{{$student->email}}</p>

                                                                    </td>

                                                                  </tr>

                                                                  <tr>
                                                                    <td class="d-flex">
                                                                       <p style="font-size:20px"> <i class="fa fa-phone" aria-hidden="true" style="margin-right:3%;"></i>Mobile No:</p>
                                                                       <p  style="font-size:20px">{{$student->mobile_no}}</p>

                                                                    </td>

                                                                  </tr>

                                                                  <tr>
                                                                    <td class="d-flex">
                                                                       <p style="font-size:20px"> <i class="fa fa-users" aria-hidden="true" style="margin-right:3%;"></i>Session:</p>
                                                                       <p  style="font-size:20px">{{$student->session->session_name}}</p>

                                                                    </td>

                                                                  </tr>

                                                                  <tr>
                                                                    <td class="d-flex">
                                                                       <p style="font-size:20px"> <i  class="fa fa-graduation-cap" aria-hidden="true" style="margin-right:3%;"></i>Course:</p>
                                                                       <p  style="font-size:20px">{{$student->course->course_name}}</p>

                                                                    </td>

                                                                  </tr>


                                                                  <tr>
                                                                    <td class="d-flex">
                                                                       <p style="font-size:20px"> Addmission Date:</p>
                                                                       <p  style="font-size:20px">{{$student->created_at}}</p>

                                                                    </td>

                                                                  </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>


                                                         {{-- <div class="col-md-1"></div> --}}


                                                    </div>
                                                </div>
                                    </div>


                                    <div class="col-md-7">

                                <div class="card-body ">

                                    <div class="single-info-details">

                                        <div class="item-content">
                                            <div class="header-inline item-header">

                                                <div class="header-elements">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-edit"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-print"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-download"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6 mt-5">
                                                        <h3>Student General Information</h3>
                                                        <table class="table display data-table text-nowrap" style="border:dotted">

                                                            <tbody>
                                                              <tr>
                                                                <th scope="row" style="border:none"> <span style="color:rgb(11, 134, 134)">Father Name: </span>{{$student->f_name}}</th>

                                                              </tr>
                                                              <tr>
                                                                <th scope="row" style="border:none"> <span style="color:rgb(11, 134, 134)">Mother Name: </span>{{$student->m_name}}</th>

                                                              </tr>
                                                              <tr>
                                                                <th scope="row" style="border:none"> <span style="color:rgb(11, 134, 134)">Gender: </span>{{$student->gender}}</th>

                                                              </tr>
                                                              <tr>
                                                                <th scope="row" style="border:none"> <span style="color:rgb(11, 134, 134)">Date Of Birth: </span>{{$student->Date_of_birth}}</th>

                                                              </tr>

                                                              <tr>
                                                                <th scope="row" style="border:none"> <span style="color:rgb(11, 134, 134)">Religion: </span>{{$student->religion}}</th>

                                                              </tr>

                                                              <tr>
                                                                <th scope="row" style="border:none"> <span style="color:rgb(11, 134, 134)">Blood Group: </span>{{$student->blood_group}}</th>

                                                              </tr>

                                                              <tr>
                                                                <th scope="row" style="border:none"> <span style="color:rgb(11, 134, 134)">Id Type: </span>{{$student->id_type}}</th>

                                                              </tr>

                                                              <tr>
                                                                <th scope="row" style="border:none"> <span style="color:rgb(11, 134, 134)">National/Birth Id No: </span>{{$student->id_number}}</th>

                                                              </tr>

                                                              <tr>
                                                                <th scope="row" style="border:none"> <span style="color:rgb(11, 134, 134)">Class Roll: </span>{{$student->class_roll}}</th>

                                                              </tr>


                                                            </tbody>
                                                          </table>
                                                    </div>


                                                    <div class="col-md-6 mt-5">
                                                        <h3>Educational Qualification</h3>
                                                        <table class="table display data-table text-nowrap" style="border:dotted">
                                                        <tbody>

                                                            <tr>
                                                              <th scope="row" style="border:none"> <span style="color:rgb(11, 134, 134)">Certificate Type </span>{{$student->edu_qualification}}<br></th>

                                                            </tr>
                                                            <tr>
                                                              <th scope="row" style="border:none"> <span style="color:rgb(11, 134, 134)">Result: </span>{{$student->result}}<br></th>

                                                            </tr>
                                                            <tr>
                                                              <th scope="row" style="border:none"> <span style="color:rgb(11, 134, 134)">Registration No: </span>{{$student->reg_no}}<br></th>

                                                            </tr>
                                                            <tr>
                                                              <th scope="row" style="border:none"> <span style="color:rgb(11, 134, 134)">Rgistration Board: </span>{{$student->reg_board}}<br></th>

                                                            </tr>

                                                            <tr>
                                                              <th scope="row" style="border:none"> <span style="color:rgb(11, 134, 134)">Passing Year: </span>{{$student->passing_year}}<br></th>

                                                            </tr>




                                                          </tbody>
                                                        </table>
                                                    </div>


                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                </div>






                            </div>


                            <div class="card height-auto ">
                                <div class="card-body">

                                    <div class="border-nav-tab">
                                        <h3>All Document</h3>
                                        <ul class="nav " role="tablist">

                                            <li class="nav-item" style="margin-right:2%">
                                                <a class="nav-link active btn-fill-sm text-dodger-blue border-dodger-blue" data-toggle="tab" href="#tab7" role="tab" aria-selected="true"  style="height"> Photo</a>
                                            </li>
                                            <li class="nav-item" style="margin-right:2%">
                                                <a class="nav-link btn-fill-sm text-dark-pastel-green border-dark-pastel-green" data-toggle="tab" href="#tab8" role="tab" aria-selected="false" >Nid</a>
                                            </li>
                                            <li class="nav-item" style="margin-right:2%">
                                                <a class="nav-link btn-fill-sm text-orange-peel border-orange-peel" data-toggle="tab" href="#tab9" role="tab" aria-selected="false" >Birth Certificate</a>
                                            </li>


                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active mt-5" id="tab7" role="tabpanel">
                                                <div class="mt-5 d-flex " >
                                                    <img src="{{asset($student->student_photo)}}" alt=""style="border-radius: 20% 20%;height:20vh;width:15vh;margin-right:4%">


                                                </div>

                                            </div>
                                            <div class="tab-pane fade mt-5" id="tab8" role="tabpanel">

                                                <img src="{{asset($student->id_document)}}" alt=""style="border-radius: 20% 20%;height:20vh;width:15vh;margin-right:4%">

                                            </div>
                                            <div class="tab-pane fade mt-5" id="tab9" role="tabpanel">

                                                <img src="{{asset($student->edu_certificate)}}" alt=""style="border-radius: 20% 20%;height:20vh;width:15vh;margin-right:4%">

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

