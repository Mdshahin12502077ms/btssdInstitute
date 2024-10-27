@extends('Backend.admin.include.master')

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div>
            <div class="container col-lg-12">


                <div class="dashboard-content-one">
                    <!-- Breadcubs Area Start Here -->
                    <div class="breadcrumbs-area">
                        <h3>Payment Gateway</h3>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>Payment Settings</li>
                        </ul>
                    </div>
                    <!-- Breadcubs Area End Here -->
                    <!-- Admit Form Area Start Here -->

                    <div class="card height-auto">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>Payment Gateway</h3>
                                </div>
                            </div>
                           <div class="card">
                            <div class="d-flex">


                                    <a href="{{url('SystemSettings/bkash_custom')}}"type="submit" class="btn btn-outline-secondary pbutton" style="margin-right:2%">
                                     <img src="{{asset('Backend/image/logo/bkash.png')}}" alt="bkash">
                                     {{-- <h4 class="mt-2">BKASH</h4> --}}
                                    </a>




                                    <a href="{{url('SystemSettings/')}}"type="submit" class="btn btn-outline-secondary pbutton" style="margin-right:2%">
                                     <img src="{{asset('Backend/image/logo/Nagad-Logo.wine.png')}}" alt="nagad">
                                     {{-- <h4 class="mt-2">BKASH</h4> --}}
                                    </a>




                                    <a href="{{url('SystemSettings/')}}"type="submit" class="btn btn-outline-secondary pbutton" style="margin-right:2%">
                                     <img src="{{asset('Backend/image/logo/rocket.png')}}" alt="rocket">
                                     {{-- <h4 class="mt-2">BKASH</h4> --}}
                                    </a>


                            </div>
                           </div>
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
