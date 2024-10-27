@extends('Backend.admin.include.master')

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>All SESSION</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>All Session</li>
            </ul>
        </div>
        <div>
            <div class="container col-lg-12">
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
                                <h3>All Session</h3>
                            </div>

                        </div>
                        <form class="mg-b-20">
                            <div class="row gutters-8">
                                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by ID ..." class="form-control">
                                </div>
                                <div class="col-3-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Name ..." class="form-control">
                                </div>
                                <div class="col-4-xxxl col-xl-3 col-lg-4 col-12 form-group">
                                    <input type="text" placeholder="Search by Class ..." class="form-control">
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
                                                <label class="form-check-label">SI NO</label>
                                            </div>
                                        </th>
                                        <th>Session Name</th>
                                        <th>Course Name</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sessions as $session)
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">{{$loop->iteration}}</label>
                                            </div>
                                        </td>

                                        <td>{{$session->session_name}}</td>
                                        <td>
                                            @if($session->course_names->isNotEmpty())
                                                {{ implode(', ', $session->course_names->toArray()) }}
                                            @else
                                                No course selected
                                            @endif
                                        </td>

                                        <td><button type="button" class="btn btn-outline-success disabled" style="width: 100%;font-size:15px">{{$session->status}}</button></td>

                                        <td style="display: flex">


                                            <a href="{{url('Session/edit',$session->id)}}" class="btn btn-info btn-lg" style="font-size:15px;margin-right:4%;height:100%"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                            <form action="{{url('Session/delete',$session->id)}}"  method="post"  style="margin-left:4%">
                                                @csrf
                                             <button type="submit" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure to delete this item?')" style="font-size:15px"><i class="fas fa-trash"></i></button>
                                         </form>








                                      </td>
                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
                            {{ $sessions->links() }}
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

