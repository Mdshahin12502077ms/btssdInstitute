@extends('Backend.admin.include.master')

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div>
            <div class="container col-lg-12">


                <div class="dashboard-content-one">
                    <!-- Breadcubs Area Start Here -->
                    <div class="breadcrumbs-area">
                        <h3>Students</h3>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>Institute Settings</li>
                        </ul>
                    </div>
                    <!-- Breadcubs Area End Here -->
                    <!-- Admit Form Area Start Here -->

                    <div class="card height-auto">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>Institute Information Update</h3>
                                </div>
                            </div>
                            <form class="new-added-form" action="{{url('SystemSettings/logo/update',$logo->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-12 form-group ">
                                        <h4><b>Logo</b></h4>
                                        <hr>
                                       <div class="row">
                                        <div class="col-lg-6 col-12 form-group ">
                                            <div class="mt-5">
                                                <img src="{{asset($logo->logo)}}" alt="" >
                                            </div>
                                            <label class="text-dark-medium">Site Logo:<span style="color: rgb(98, 150, 248)"> Resolution Height- 70 PX,Width- 416PX</span> </label>
                                            <input type="file" name="logo" value="{{$logo->logo}}" class="form-control">


                                        </div>
                                        <div class="col-lg-6 col-12 form-group ">
                                            <div class="mt-5">
                                                <img src="{{asset($logo->favicon)}}" alt="" style="height: 64px;width:64px">
                                            </div>
                                            <label class="text-dark-medium">Site Favicon:<span style="color: rgb(98, 150, 248)"> Best Resolution Height- 64 PX, Width- 64 PX</span></label>
                                            <input type="file" name="favicon" value="{{$logo->favicon}}" class="form-control">
                                        </div>

                                       </div>
                                    </div>




                                    <div class="col-12 form-group mg-t-8">
                                        <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Update</button>
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


    @endsection
