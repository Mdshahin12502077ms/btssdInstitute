@extends('Backend.admin.include.master')

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>ADD DISTRICT</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>District</li>
            </ul>
        </div>
<div>
    <div class="container col-lg-12">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                <div class="card-header">
                    Add District
                </div>
                <div class="card-body">
                    <form class="mb-5" action="{{ url('add_district/insert') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3 col-md-12 mt-3 form-group" style="font-size: 25px">
                            <label for="exampleInputEmail1" class="form-label">বিভাগের নাম (Division
                                Name):*</label>
                            <select name="division_id" class="form-control col-md-12" id="division"
                                style="font-size:20px;">
                                <option class="p-4"value="">Select Division</option>
                                @foreach ($get_division as $division)
                                    <option value="{{ $division->id }}">{{ $division->name }}</option>
                                @endforeach
                            </select>
                        </div>



                        <div class="mb-3 form-group" style="font-size:25px">
                          <label for="exampleInputEmail1" class="form-label"> District Name</label>
                          <input type="text" name="district_name"class="form-control" placeholder="Enter sub District Name">
                        </div>

                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                        </div>
                      </form>
                </div>
              </div>
            </div>

            <div class="col-md-6">
                <div class="card">
               <table class="table">
                <thead>
                    <th>Serial No</th>
                    <th>Division Name</th>
                    <th>District Name</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($get_all as $district)
                     <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $district->division->name }}</td>
                        <td>{{ $district->district_name}}</td>
                        <td>
                            <a href="{{ url('edit/district',$district->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ url('district/delete',$district->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                     </tr>
                    @endforeach
                </tbody>
               </table>
              </div>
            </div>
        </div>
    </div>

</div>
        <!-- Social Media End Here -->
    @endsection
