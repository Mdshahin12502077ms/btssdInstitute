@extends('Backend.admin.include.master')

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>ADDMISSION FORM</h3>

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
                            <form class="new-added-form" action="{{url('Student/insert')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    <div class="col-xl-12 col-lg-12 col-12" style="background-color: rgb(121, 171, 228)">
                                        <h4 class="mt-4">Course Information</h4>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-12 mt-5 form-group">
                                        <label>Course*</label>
                                        <select name="course_id" class="form-control" id="course_id" style="font-size:20px;padding:5px" required>
                                            <option value="">Please Select Course</option>
                                            @foreach ($course as $course)
                                            <option value="{{$course->id}}">{{$course->course_name}}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('course_id'))
                                        <div class="error" style="color:red">{{ $errors->first('course_id') }}</div>
                                        @endif
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-12 mt-5 form-group">
                                        <label>Session*</label>
                                        <select name="session_id" class="form-control"
                                        id="session"style="font-size:20px" required>
                                        <option value="">select Session </option>
                                    </select>
                                        @if($errors->has('session_id'))
                                        <div class="error" style="color:red">{{ $errors->first('session_id') }}</div>
                                     @endif
                                    </div>


                                    <div class="col-xl-12 col-lg-12 col-12" style="background-color: rgb(121, 171, 228)">
                                        <h4 class="mt-4">Educational Qualification</h4>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 mt-5 form-group">
                                        <label>Entry Type*</label>
                                        <select name="edu_qualification" class="select2" id="edu_qualification" onchange="otherQualification()" required>
                                            <option value="">Please Select Qualification *</option>
                                            <option value="JSC">JSC</option>
                                            <option value="SSC">SSC</option>
                                            <option value="HSC">HSC</option>
                                            <option value="others" >Others</option>
                                        </select>
                                        <input name="other"type="text" id="other" placeholder="" class="form-control mt-2" style="display:none">
                                        @if($errors->has('edu_qualification'))
                                        <div class="error" style="color:red">{{ $errors->first('edu_qualification') }}</div>
                                     @endif
                                    </div>
                                    <div class="col-xl-6 col-lg-6 mt-5 col-12 form-group">
                                        <label>Roll No: *</label>
                                        <input name="roll_no" id="other"type="text" placeholder="Roll Number" class="form-control" required>
                                        @if($errors->has('roll_no'))
                                        <div class="error" style="color:red">{{ $errors->first('roll_no') }}</div>
                                     @endif
                                    </div>
                                    <div class="col-xl-6 col-lg-6 mt-5 col-12 form-group">
                                        <label>Reg No: *</label>
                                        <input name="reg_no" id="other"type="text" placeholder="" class="form-control"  required>
                                        @if($errors->has('reg_no'))
                                        <div class="error" style="color:red">{{ $errors->first('reg_no') }}</div>
                                     @endif
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-12 form-group mt-5">
                                        <label>Result:*</label>
                                        <input name="result"type="text" placeholder="" class="form-control" required>
                                        @if($errors->has('result'))
                                        <div class="error" style="color:red">{{ $errors->first('result') }}</div>
                                     @endif
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Reg Board:*</label>
                                        <input name="reg_board"type="text" placeholder="" class="form-control" required>
                                        @if($errors->has('reg_board'))
                                        <div class="error" style="color:red">{{ $errors->first('reg_board') }}</div>
                                     @endif
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Passing Year:*</label>
                                        <input name="passing_year"type="text" placeholder="" class="form-control" required>
                                        @if($errors->has('passing_year'))
                                        <div class="error" style="color:red">{{ $errors->first('passing_year') }}</div>
                                     @endif
                                    </div>

                                    <div class="col-xl-12 col-lg-12 mt-5 col-12" style="background-color: rgb(121, 171, 228)">
                                        <h4 class="mt-4">Student Information</h4>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Student Name *</label>
                                        <input name="st_name"type="text" placeholder="" class="form-control" required>
                                        @if($errors->has('st_name'))
                                        <div class="error" style="color:red">{{ $errors->first('st_name') }}</div>
                                     @endif
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Father's Name *</label>
                                        <input type="text" name="f_name" placeholder="" class="form-control" required>
                                        @if($errors->has('f_name'))
                                        <div class="error" style="color:red">{{ $errors->first('f_name') }}</div>
                                     @endif
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Mothers's Name *</label>
                                        <input type="text" name="m_name" placeholder="" class="form-control" required>
                                        @if($errors->has('m_name'))
                                        <div class="error" style="color:red">{{ $errors->first('m_name') }}</div>
                                     @endif
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Gender *</label>
                                        <select name="gender" class="select2" required>
                                            <option value="">Please Select Gender *</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Others</option>
                                        </select>
                                        @if($errors->has('gender'))
                                        <div class="error" style="color:red">{{ $errors->first('gender') }}</div>
                                     @endif
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Id Type *</label>
                                        <select name="id_type" class="select2" required>
                                            <option value="">Please Select Id *</option>
                                            <option value="National Id">National Id</option>
                                            <option value="Birth Certificate">Birth Certificate</option>
                                            <option value="3">Others</option>
                                        </select>
                                        @if($errors->has('id_type'))
                                        <div class="error" style="color:red">{{ $errors->first('id_type') }}</div>
                                     @endif
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Date Of Birth *</label>
                                        <input name="Date_of_birth"type="text" placeholder="dd/mm/yyyy" class="form-control air-datepicker" data-position='bottom right' required>
                                        <i class="far fa-calendar-alt"></i>
                                        @if($errors->has('Date_of_birth'))
                                        <div class="error" style="color:red">{{ $errors->first('Date_of_birth') }}</div>
                                     @endif
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>NId/Birth Certificate Number</label>
                                        <input type="text" name="id_number" placeholder="" class="form-control" required>
                                        @if($errors->has('id_number'))
                                        <div class="error" style="color:red">{{ $errors->first('id_number') }}</div>
                                     @endif
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Class Roll</label>
                                        <input type="text" name="class_roll" placeholder="" class="form-control" >
                                        @if($errors->has('class_roll'))
                                        <div class="error" style="color:red">{{ $errors->first('class_roll') }}</div>
                                     @endif
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Blood Group *</label>
                                        <select name="blood_group"class="select2" required>
                                            <option value="">Please Select Group *</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                        </select>
                                        @if($errors->has('blood_group'))
                                        <div class="error" style="color:red">{{ $errors->first('blood_group') }}</div>
                                     @endif
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Religion *</label>
                                        <select name="religion"class="select2" required>
                                            <option value="">Please Select Religion *</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Christian">Christian</option>
                                            <option value="Buddish">Buddish</option>
                                            <option value="Others">Others</option>
                                        </select>
                                        @if($errors->has('religion'))
                                        <div class="error" style="color:red">{{ $errors->first('religion') }}</div>
                                     @endif
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>E-Mail</label>
                                        <input type="email" name="email" placeholder="" class="form-control" required>
                                        @if($errors->has('email'))
                                        <div class="error" style="color:red">{{ $errors->first('email') }}</div>
                                     @endif
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Social Status *</label>
                                        <select name="social_status" class="select2" required>
                                            <option value="">Please Select Social Status *</option>
                                            <option value="general">General</option>

                                        </select>
                                        @if($errors->has('social_status'))
                                        <div class="error" style="color:red">{{ $errors->first('social_status') }}</div>
                                     @endif
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Mobile Number</label>
                                        <input name="mobile_no"type="text" placeholder="" class="form-control" required>
                                        @if($errors->has('mobile_no'))
                                        <div class="error" style="color:red">{{ $errors->first('mobile_no') }}</div>
                                     @endif
                                    </div>
                                    <div class="col-lg-6 col-12 form-group">
                                        <label>Comments</label>
                                        <textarea name="comment" class="textarea form-control" name="message" id="form-message" cols="10"
                                            rows="2"></textarea>
                                            @if($errors->has('comment'))
                                            <div class="error" style="color:red">{{ $errors->first('comment') }}</div>
                                         @endif
                                    </div>
                                    <div class="col-lg-6 col-12 form-group mg-t-30">
                                        <label class="text-dark-medium">Upload Student Photo (150px X 150px)</label>
                                        <input type="file" name="student_photo" class="form-control-file" multiple required>
                                        @if($errors->has('student_photo'))
                                        <div class="error" style="color:red">{{ $errors->first('student_photo') }}</div>
                                     @endif
                                    </div>

                                    <div class="col-lg-6 col-12 form-group mg-t-30">
                                        <label class="text-dark-medium">Natinal Id Card / Birth Certificate </label>
                                        <input type="file" name="id_document" class="form-control-file" multiple required>
                                        @if($errors->has('id_document'))
                                        <div class="error" style="color:red">{{ $errors->first('id_document') }}</div>
                                     @endif
                                    </div>
                                    <div class="col-lg-6 col-12 form-group mg-t-30">
                                        <label class="text-dark-medium">Educational Certificate </label>
                                        <input type="file" name="edu_certificate" class="form-control-file" multiple >
                                        @if($errors->has('edu_certificate'))
                                        <div class="error" style="color:red">{{ $errors->first('edu_certificate') }}</div>
                                     @endif
                                    </div>
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

<script>
$(document).ready(function(){

$('#course_id').change(function(){

var course_id=$(this).val();

            $.ajax({
                url:'{{ url('Student/get/session') }}',
                type: 'GET',
                data: {course_id: course_id},
                success: function(response){

                    console.log(response);
                    // alert(response);
                    $('#session').html(response);
                }
            });




});

});
</script>

@endsection
