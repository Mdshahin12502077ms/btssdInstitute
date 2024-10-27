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
                <li>Update Diveision</li>
            </ul>
        </div>
<div>
    <div class="container col-lg-12">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                <div class="card-header">
                    Update Division
                </div>
                <div class="card-body">
                    <form class="mb-5" action="{{ url('division/update',$get_division->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Division Name</label>
                          <input type="text" name="name"class="form-control" value="{{ $get_division->name }}">
                        </div>

                        <button type="Update" class="btn btn-primary btn-lg">Update</button>
                      </form>
                </div>
              </div>
            </div>

        </div>
    </div>

</div>
        <!-- Social Media End Here -->
    @endsection
