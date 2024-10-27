@extends('Backend.admin.include.master')

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>ADDMISSION FORM</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>ADDMISSION FORM</li>
            </ul>
        </div>
        <div>
            <div class="container col-lg-12">

                    <!-- Breadcubs Area End Here -->
                    <!-- Admit Form Area Start Here -->

                    <div class="card height-auto">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>Add New Students Entry</h3>
                                </div>
                            </div>
                            <form class="new-added-form" action="{{url('Student/update',$student->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    <div class="col-xl-12 col-lg-12 col-12" style="background-color: rgb(121, 171, 228)">
                                        <h4 class="mt-4">Course Information</h4>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 mt-5 form-group">
                                        <label>Course*</label>
                                        <select name="course_id" class="select2">

                                            @foreach ($course as $course)
                                            <option {{( $course->id==$student->course_id)?'selected':''}} value="{{$course->id}}">{{$course->course_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-12 mt-5 form-group">
                                        <label>Session*</label>
                                        {{-- @dd($session) --}}
                                        <select name="session_id" class="select2">
                                            @foreach ($session as $session)
                                            <option {{($session->id==$student->session_id)?'selected':''}} value="{{$session->id}}">{{$session->session_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="col-xl-12 col-lg-12 col-12" style="background-color: rgb(121, 171, 228)">
                                        <h4 class="mt-4">Educational Qualification</h4>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 mt-5 form-group">
                                        <label>Entry Type*</label>
                                        <select name="edu_qualification" class="select2" id="edu_qualification" onchange="otherQualification()">
                                            <option value="{{$student->edu_qualification}}">{{$student->edu_qualification}}</option>
                                            <option value="JSC">JSC</option>
                                            <option value="SSC">SSC</option>
                                            <option value="HSC">HSC</option>
                                            <option value="others" >Others</option>
                                        </select>
                                        <input name="other"type="text" id="other" placeholder="" class="form-control mt-2" style="display:none">
                                    </div>

                                    <div class="col-xl-6 col-lg-6 mt-5 col-12 form-group">
                                        <label>Reg No: *</label>
                                        <input name="reg_no"type="text" value="{{$student->reg_no}}" class="form-control">
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Result:*</label>
                                        <input name="result"type="text" value=" {{$student->result}}" class="form-control">
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Reg Board:*</label>
                                        <input name="reg_board"type="text"  value="{{$student->reg_board}}" class="form-control">
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Passing Year:*</label>
                                        <input name="passing_year"type="text" value="{{$student->passing_year}}" class="form-control">
                                    </div>

                                    <div class="col-xl-12 col-lg-12 mt-5 col-12" style="background-color: rgb(121, 171, 228)">
                                        <h4 class="mt-4">Student Information</h4>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Student Name *</label>
                                        <input name="st_name"type="text" value="{{$student->st_name}}" class="form-control">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Father's Name *</label>
                                        <input type="text" name="f_name" value="{{$student->f_name}}" class="form-control">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Mothers's Name *</label>
                                        <input type="text" name="m_name" value="{{$student->m_name}}" class="form-control">
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Gender *</label>
                                        <select name="gender" class="select2">
                                            <option value="{{$student->gender}}">{{$student->gender}}</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Others</option>
                                        </select>
                                    </div>



                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Id Type *</label>
                                        <select name="id_type" class="select2">
                                            <option value="{{$student->id_type}}">{{$student->id_type}}</option>
                                            <option value="National Id">National Id</option>
                                            <option value="Date Of Birth">Date Of Birth</option>
                                            <option value="3">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>NID/Birth Certificate Number</label>
                                        <input type="text" name="id_number" value="{{$student->id_number}}" class="form-control">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Date Of Birth *</label>
                                        <input name="Date_of_birth"type="text" value="{{$student->Date_of_birth}}" class="form-control air-datepicker"
                                            data-position='bottom right'>
                                        <i class="far fa-calendar-alt"></i>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Class Roll</label>
                                        <input type="text" name="class_roll" value="{{$student->class_roll}}" class="form-control">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Blood Group *</label>
                                        <select name="blood_group"class="select2">
                                            <option value="{{$student->blood_group}}">{{$student->blood_group}}</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Religion *</label>
                                        <select name="religion"class="select2">
                                            <option value="{{$student->religion}}">{{$student->religion}}</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Christian">Christian</option>
                                            <option value="Buddish">Buddish</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>E-Mail</label>
                                        <input type="email" name="email" value="{{$student->email}}" class="form-control">
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Social Status *</label>
                                        <select name="social_status" class="select2">
                                            <option value="{{$student->social_status}}">{{$student->social_status}}</option>
                                            <option value="general">General</option>

                                        </select>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Mobile Number</label>
                                        <input name="mobile_no"type="text" value="{{$student->mobile_no}}" class="form-control">
                                    </div>
                                    <div class="col-lg-6 col-12 form-group">
                                        <label>Comments</label>
                                        <textarea name="comment" class="textarea form-control" name="message" id="form-message" cols="10"
                                            rows="9">{{$student->comment}}</textarea>
                                    </div>
                                    <div class="col-lg-6 col-12 form-group mg-t-30">
                                        <label class="text-dark-medium">Upload Student Photo (150px X 150px)</label>
                                        <input type="file" name="student_photo" value="{{$student->student_photo}}" class="form-control-file">
                                        <img src="{{asset($student->student_photo)}}" alt="" height="100" width="100">
                                    </div>

                                    <div class="col-lg-6 col-12 form-group mg-t-30">
                                        <label class="text-dark-medium">Natinal Id Card / Birth Certificate </label>
                                        <input type="file" name="id_document" value="{{$student->id_document}}" class="form-control-file">
                                        <img src="{{asset($student->id_document)}}" alt="" height="100" width="100">
                                    </div>
                                    <div class="col-lg-6 col-12 form-group mg-t-30">
                                        <label class="text-dark-medium">Educational Certificate </label>
                                        <input type="file" name="edu_certificate" value="{{$student->edu_certificate}}" class="form-control-file">
                                        <img src="{{asset($student->edu_certificate)}}" alt="" height="100" width="100">
                                    </div>
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

    @section('js')
    <script>
    function otherQualification() {
        var qualification=document.getElementById('edu_qualification').value;
        if( qualification=='others'){
            document.getElementById('other').style.display='block';

        }

        else{
            document.getElementById('other').style.display='none';
        }
    }
    </script>


    @endsection
