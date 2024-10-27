@extends('Backend.admin.include.master')

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>All COURSE</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>All Course</li>
            </ul>
        </div>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                          <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->

                <!-- Breadcubs Area End Here -->
                <!-- Class Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>All Course</h3>
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
                        <div class="table-responsive">
                            <table class="table display data-table text-nowrap">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input checkAll">
                                                <label class="form-check-label">Sl</label>
                                            </div>
                                        </th>
                                        <th>Course Name</th>
                                        <th>Course Code</th>
                                        <th>Course Duration</th>
                                        <th>Course Amount</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($course as $courses)
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">{{$loop->iteration}}</label>
                                            </div>
                                        </td>

                                        <td>{{$courses->course_name}}</td>
                                        <td>{{ $courses->course_code}}</td>
                                        <td>{{$courses->course_duration}}</td>
                                        <td>{{$courses->course_amount}}</td>
                                        <td><button type="button" class="btn btn-outline-success disabled" style="width: 100%;font-size:15px">{{$courses->status}}</button></td>

                                        <td style="display: flex">


                                            <a href="{{url('course/edit',$courses->id)}}" class="btn btn-info btn-lg" style="font-size:15px;margin-right:4%;height:100%"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                            <form action="{{url('course/delete',$courses->id)}}"  method="post"  style="margin-left:4%">
                                                @csrf
                                             <button type="submit" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure to delete this item?')" style="font-size:15px"><i class="fas fa-trash"></i></button>
                                         </form>








                                      </td>
                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
                            {{$course->links()}}
                        </div>
                    </div>
                </div>
                <!-- Class Table Area End Here -->

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

