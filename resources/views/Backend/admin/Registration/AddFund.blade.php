@extends('Backend.admin.include.master')

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Fund Management</h3>
           
        </div>
        <div>
            <div class="container col-lg-12">

                 <div class="row">



                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header text-center card_color" >
                                <i class="fa fa-cloud" style="padding:20px;font-size:50px"></i>
                            </div>

                            <div class="card-body text-center">
                              <a href="{{url('Registration/student/all/fund/view')}}" class="text-center" style="color:black">Add Fund</a>
                            </div>
                          </div>
                          </div>

                           {{-- <div class="col-md-4">
                            <div class="card">
                                <div class="card-header text-center" style="background-color:rgb(6, 95, 95);color:white">
                                    <i class="fa fa-cloud" style="padding:20px;font-size:50px"></i>
                                </div>

                                <div class="card-body text-center">
                                  <a href="{{url('Registration/fund/transfer')}}" class="text-center" style="color:black">Fund Transfer</a>
                                </div>
                              </div>
                              </div> --}}


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
