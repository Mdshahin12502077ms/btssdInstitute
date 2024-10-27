@extends('Backend.admin.include.master')

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>ADD DIVISION</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Division</li>
            </ul>
        </div>
<div>
    <div class="container col-lg-12">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                <div class="card-header" style="font-size: 25px">
                    Add District
                </div>
                <div class="card-body">
                    <form class="mb-5" action="{{ url('add_division/insert') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 form-group" style="font-size: 25px">
                          <label for="exampleInputEmail1" class="form-label">Division Name</label>
                          <input type="text" name="name"class="form-control" placeholder="Enter District Name">
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
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($get_division as $division)
                     <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $division->name }}</td>
                        <td>
                            <a href="{{ url('edit/division',$division->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ url('division/delete',$division->id) }}"  class="btn btn-danger">Delete</a>
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
