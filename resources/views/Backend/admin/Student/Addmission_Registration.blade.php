@extends('Backend.admin.include.master')

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>ADDMISSION FORM</h3>
           
        </div>
        <div>
            <div class="container col-lg-12">

                 <div class="row">



                    {{-- <div class="col-md-4">
                        <div class="card">
                            <div class="card-header text-center" style="background-color:rgb(6, 95, 95);color:white">
                                <i class="fa fa-cloud" style="padding:20px;font-size:50px"></i>
                            </div>

                            <div class="card-body text-center">
                              <a href="{{url('Registration/add/fund')}}" class="text-center" style="color:black">Fund Management</a>
                            </div>
                          </div>
                          </div> --}}

                           <div class="col-md-4">
                            <div class="card">
                                <div class="card-header text-center card_color">
                                    <i class="fa fa-cloud" style="padding:20px;font-size:50px"></i>
                                </div>

                                <div class="card-body text-center">
                                  <a href="{{url('Student/all')}}" class="text-center" style="color:black">Addmission</a>
                                </div>
                              </div>
                              </div>

                              <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header text-center card_color" >
                                        <i class="fa fa-cloud" style="padding:20px;font-size:50px"></i>
                                    </div>

                                    <div class="card-body text-center">
                                      <a href="{{url('Student/new/register')}}" class="text-center" style="color:black">Registration</a>
                                    </div>
                                  </div>
                              </div>

                              <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header text-center card_color" >
                                        <i class="fa fa-cloud" style="padding:20px;font-size:50px"></i>
                                    </div>

                                    <div class="card-body text-center">
                                      <a href="" class="text-center" style="color:black">Download</a>
                                    </div>
                                  </div>
                              </div>

                    <!-- Breadcubs Area End Here -->
                    <!-- Admit Form Area Start Here -->


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
