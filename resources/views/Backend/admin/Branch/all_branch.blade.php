@extends('Backend.admin.include.master')

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>All Institute</h3>

        </div>
        <div>
            <div class="container col-lg-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                    <div>
                                        <div class="card height-auto">
                                            <div class="card-body">
                                                <div class="heading-layout1">
                                                    <div class="item-title">
                                                        <h3>Institute Subscription</h3>
                                                    </div>

                                                </div>
                                                <form class="new-added-form" action="{{url('branch/subscription/insert')}}" method="Post" enctype="multipart/form-data">
                                                   @csrf
                                                    <div class="row">

                                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                            <label>Select Institute</label>
                                                            <select name="branch_id" class="select2">
                                                                <option value="">Please Select Institute</option>
                                                                @foreach ($branchSubs as $branchSubs)
                                                                <option value="{{$branchSubs->id}}">{{$branchSubs->institute_name}}</option>
                                                                @endforeach

                                                            </select>
                                                            @if($errors->has('branch_id'))
                                                            <div class="error" style="color:red">{{ $errors->first('branch_id') }}</div>
                                                         @endif
                                                        </div>

                                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                            <label>Select Plan</label>
                                                            <select name="plan_id" class="select2">
                                                                <option value="">Please Select Plan</option>
                                                                @foreach ($plansubs as $planSubs)
                                                                <option value="{{$planSubs->id}}">{{$planSubs->name}}</option>
                                                                @endforeach

                                                            </select>

                                                            @if($errors->has('plan_id'))
                                                            <div class="error" style="color:red">{{ $errors->first('plan_id') }}</div>
                                                         @endif
                                                        </div>

                                                        <div class="col-md-6 mt-5 form-group">
                                                             <div class="col-12 form-group mg-t-8">
                                                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>


                                                        </div>
                                                    </div>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="card-body">
                                  <div>
                                    <div class="row">
                                    <div class="col-md-8"></div>
                                    <div class="searchInput col-md-4 form-group">
                                        <form action="{{url('branch/all')}}" method="GET" class="d-flex" align="right">
                                        <input type="search" name="search_branch" id="form1" class="form-control" style="font-size:20px" placeholder="Enter Institute Name"/>
                                        <button type="submit" style="font-size:20px" class="btn btn-primary" data-mdb-ripple-init>
                                            <i class="fas fa-search"></i>
                                          </button>
                                        </form>
                                    </div>
                                    </div>
                                  </div>
                                <form action="{{url('query/pdf')}}" method="GET" enctype="multipart/form-data">

                                    <button type="submit" class="btn btn-success mb-3"  style="font-size:18px;"><i class="fa fa-file-pdf" aria-hidden="true" style="font-size: 25px;margin-right:1%"></i>Courier Slip</button>


                                <table class="table table-hover table-responsive">
                                    <thead>
                                        <tr>
                                            <th style="width:24px">
                                                <div class="form-check">

                                                    {{--  <input type="checkbox"class="form-check-input checkAll">  --}}

                                                    {{-- <label class="form-check-label"></label> --}}

                                                    <input type="checkbox" class="form-check-input checkAll">
                                                    <label class="form-check-label">All</label>

                                                </div>
                                            </th>
                                          <th scope="col">Sl No</th>
                                          <th scope="col">Branch Name</th>
                                          <th scope="col">Propietor Name</th>
                                          <th scope="col">Mobile Number</th>
                                          <th scope="col">Email</th>
                                          <th scope="col">Address</th>
                                             <th scope="col">Status</th>
                                          <th scope="col">Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                         @if ($branchSearch!==null)
                                         @foreach ($branchSearch as $branches)
                                         @php
                                                $branchdtls=App\Models\BranchDetails::where('branch_id',$branches->id)->first();
                                          @endphp
                                         <tr>


                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="branch[{{$branches->id}}]" value="{{$branches->id}}" class="form-check-input">
                                                    <label class="form-check-label" style="margin-bottom: 10px"></label>
                                                </div>


                                            </td>
                                             <td>{{$loop->iteration}}</td>
                                             <td>{{$branches->institute_name}}</td>
                                             <td>{{$branches->Propietor_Name}}</td>
                                              <td>{{$branches->mobile_number}}</td>
                                              <td>{{$branches->e_mail}}</td>
                                             <td>{{$branches->division->name}},{{$branches->district->district_name}},{{$branches->address}}</td>
                                             <td><button type="button" class="btn btn-outline-success disabled" style="width: 100%;font-size:15px">{{$branches->status}}</button></td>
                                             <td style="display: flex">
                                                <!-- Button trigger modal -->


                                                <a type="button" href=""
                                                     class="btn btn-secondary btn-lg update_institute" style="font-size:15px; margin-right:4%;height:100%"
                                                     data-toggle="modal"
                                                     data-id="{{$branches->id}}"
                                                     data-email="{{$branches->e_mail}}"
                                                      data-password="{{$branches->password}}"
                                                        data-institute_name="{{$branches->institute_name}}"
                                                     data-target="#standard-modal">
                                                     <i class="fa fa-key"aria-hidden="true"></i>

                                                    </a>
                                                    <a href="{{url('Send/mail',$branches->id)}}" class="btn btn-info btn-lg" style="font-size:15px; margin-right:4%;height:100%"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                                                    <a href="{{url('Branch/info',$branches->id)}}" class="btn btn-primary btn-lg" style="font-size:15px; margin-right:4%;height:100%"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    <a href="{{url('Branch/edit',$branches->id)}}" class="btn btn-warning btn-lg" style="font-size:15px;margin-right:4%;height:100%"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                    <form id="deleteBranchForm-{{$branches->id}}" style="margin-left:4%">
                                                        @csrf
                                                        <button type="button" class="btn btn-danger btn-lg delete-branch-btn"
                                                                data-id="{{$branches->id}}"
                                                                onclick="confirmDelete({{$branches->id}})"
                                                                style="font-size:15px">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                              </td>
                                           </tr>
                                         @endforeach



                                         @endif



                                      </tbody>

                            </table>


                         {{ $branchSearch->links() }}

                        </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- Social Media End Here -->

      @include('Backend.admin.Branch.updateModal')
    @endsection
    @section('js')
        <script>

           $(document).on('click','.update_institute',function(){
            var id=$(this).data('id');
            var email=$(this).data('email');
            var password=$(this).data('password');

            var institute_name=$(this).data('institute_name')

            $('#up_id').val(id);
            $('#up_pName').val(institute_name);
            $('#up_email').val(email);
            $('#up_password').val(password);
           });
        </script>

<script>
        // Function to confirm deletion and send AJAX request
function confirmDelete(branchId) {
    if (confirm('Are you sure to delete this item?')) {
        // Prepare the AJAX request
        $.ajax({
            url: '/Branch/delete/' + branchId,  // Construct the URL with the branch ID
            type: 'POST',  // Set the method to POST
            data: {
                _token: $('input[name=_token]').val(),  // Include the CSRF token
            },
            success: function(response) {
                alert('Branch deleted successfully.');
                location.reload();  // Reload the page to see the changes
            },
            error: function(xhr) {
                console.log(xhr.responseText);
                alert('Branch deleted successfully.');
                location.reload();
            }
        });
    }
}
</script>

    @endsection
