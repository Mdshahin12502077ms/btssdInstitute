@extends('Backend.admin.include.master')

@section('content')

<style>

    .dropdown-menu {
                max-height: 200px;
                width:200px;
                overflow-y: auto;
            }
            .form-check{
                padding: 10px;
                width:200px;
            }
    </style>
    
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>EDIT SESSION</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Edit Session</li>
            </ul>
        </div>
        <div>
            <div class="container col-lg-12">


                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Edit Session</h3>
                            </div>

                        </div>
                        <form class="new-added-form" action="{{url('Session/update',$sessionEdit->id)}}" method="Post" enctype="multipart/form-data">
                           @csrf
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Session Name *</label>
                                    <input type="text" name="session_name" value="{{$sessionEdit->session_name}}" class="form-control"  style="font-size:18px">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label for="courseDropdown">Select Courses:</label>
                                    <div class="dropdown">
                                        <button class="dropdown-toggle form-group mt-3" type="button" id="courseDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding: 7px;border:none;">
                                            Choose courses
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="courseDropdown">
                                            @foreach ($getCourse as $course)
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="course-{{ $course->id }}" name="course_id[]" value="{{ $course->id }}"
                                                    {{-- Check if the course is already selected --}}
                                                    @if(in_array($course->id,$selectedCourses)) checked @endif
                                                    onclick="event.stopPropagation();">
                                                    <label class="form-check-label" for="course-{{ $course->id }}">
                                                        {{ $course->course_name }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Status</label>
                                    <select name="status" class="select2">
                                        <option value="{{$sessionEdit->status}}">{{$sessionEdit->status}}</option>
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
@section('js')
   
@endsection