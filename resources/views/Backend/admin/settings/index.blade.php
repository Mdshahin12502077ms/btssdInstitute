@extends('Backend.admin.include.master')

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>System Settings</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>System Settings</li>
            </ul>
        </div>
        <div>
            <div class="container col-lg-12">



                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <a href="{{url('SystemSettings/Backend/Settings')}}">
                                                    <div class="row">
                                                        <div class="col-md-2 text-white text-center system-settings"><i class="fa fa-cog"></i></div>
                                                         <div class="col-md-10" style="">
                                                             <h4 class="mt-3 contolmargin"><b >General Settings</b></h4>
                                                               <p style="font-size: 14px">Configure the foundamental information of the site.</p>
                                                         </div>
                                                     </div>
                                                </a>


                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <a href="{{url('SystemSettings/Backend/Settings/logo')}}">
                                                    <div class="row">
                                                        <div class="col-md-2 text-white text-center system-settings"><i class="fa fa-cog"></i></div>
                                                         <div class="col-md-10" style="">
                                                             <h4 class="mt-3 contolmargin"><b >Logo & Favicon</b></h4>
                                                               <p style="font-size: 14px">Upload your logo & favicon</p>
                                                         </div>
                                                     </div>
                                                </a>


                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <a href="">
                                                    <div class="row">
                                                        <div class="col-md-2 text-white text-center system-settings"><i class="fa fa-cog"></i></div>
                                                         <div class="col-md-10" style="">
                                                             <h4 class="mt-3 contolmargin"><b >System configuration</b></h4>
                                                               <p style="font-size: 14px">Controll All of the basic modules of the system</p>
                                                         </div>
                                                     </div>
                                                </a>


                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <a href="{{url('smtp/setting')}}">
                                                    <div class="row">
                                                        <div class="col-md-2 text-white text-center system-settings"><i class="fa fa-cog"></i></div>
                                                         <div class="col-md-10" style="">
                                                             <h4 class="mt-3 contolmargin"><b >SMTP Settings</b></h4>
                                                               <p style="font-size: 14px">SMTP setting of the site</p>
                                                         </div>
                                                     </div>
                                                </a>


                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <a href="">
                                                    <div class="row">
                                                        <div class="col-md-2 text-white text-center system-settings"><i class="fa fa-cog"></i></div>
                                                         <div class="col-md-10" style="">
                                                             <h4 class="mt-3 contolmargin"><b >Notification Settings</b></h4>
                                                               <p style="font-size: 14px">Controll and Configure overall notification elements of the system.</p>
                                                         </div>
                                                     </div>
                                                </a>


                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <a href="{{url('SystemSettings/Backend/Settings/paymentGateway')}}">
                                                    <div class="row">
                                                        <div class="col-md-2 text-white text-center system-settings"><i class="fa fa-cog"></i></div>
                                                         <div class="col-md-10" style="">
                                                             <h4 class="mt-3 contolmargin"><b >Payments Gateway</b></h4>
                                                               <p style="font-size: 14px">
                                                                Configure automatic or manual payment gateways to accept payment from users.
                                                                </p>
                                                         </div>
                                                     </div>
                                                </a>


                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <a href="{{url('SystemSettings/Backend/Settings/seo')}}">
                                                    <div class="row">
                                                        <div class="col-md-2 text-white text-center system-settings"><i class="fa fa-cog"></i></div>
                                                         <div class="col-md-10" style="">
                                                             <h4 class="mt-3 contolmargin"><b >SEO Configuration</b></h4>
                                                               <p style="font-size: 14px">Configure proper meta title, meta description, meta keywords, etc to make the system SEO-friendly.</p>
                                                         </div>
                                                     </div>
                                                </a>


                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <a href="">
                                                    <div class="row">
                                                        <div class="col-md-2 text-white text-center system-settings"><i class="fa fa-cog"></i></div>
                                                         <div class="col-md-10" style="">
                                                             <h4 class="mt-3 contolmargin"><b >Manage Frontend</b></h4>
                                                               <p style="font-size: 14px">Control all of the frontend contents of the system.</p>
                                                         </div>
                                                     </div>
                                                </a>


                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <a href="">
                                                    <div class="row">
                                                        <div class="col-md-2 text-white text-center system-settings"><i class="fa fa-cog"></i></div>
                                                         <div class="col-md-10" style="">
                                                             <h4 class="mt-3 contolmargin"><b >Manage Pages</b></h4>
                                                               <p style="font-size: 14px">Controll Dynamic and Static Pages of the site .</p>
                                                         </div>
                                                     </div>
                                                </a>


                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <a href="">
                                                    <div class="row">
                                                        <div class="col-md-2 text-white text-center system-settings"><i class="fa fa-cog"></i></div>
                                                         <div class="col-md-10" style="">
                                                             <h4 class="mt-3 contolmargin"><b >Language</b></h4>
                                                               <p style="font-size: 14px">Configured your required language and keywords to localize the site.</p>
                                                         </div>
                                                     </div>
                                                </a>


                                            </div>
                                        </div>
                                    </div>




                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <a href="{{ url('add_division') }}">
                                                    <div class="row">
                                                        <div class="col-md-2 text-white text-center system-settings"><i class="fa fa-cog"></i></div>
                                                         <div class="col-md-10" style="">
                                                             <h4 class="mt-3 contolmargin"><b >Division Settings</b></h4>
                                                               <p style="font-size: 14px">Configure the Division information of the site.</p>
                                                         </div>
                                                     </div>
                                                </a>


                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <a href="{{ url('add_district') }}">
                                                    <div class="row">
                                                        <div class="col-md-2 text-white text-center system-settings"><i class="fa fa-cog"></i></div>
                                                         <div class="col-md-10" style="">
                                                             <h4 class="mt-3 contolmargin"><b >District Settings</b></h4>
                                                               <p style="font-size: 14px">Configure the District information of the site.</p>
                                                         </div>
                                                     </div>
                                                </a>


                                            </div>
                                        </div>
                                    </div>




                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <a href="{{url('education_year/add')}}">
                                                    <div class="row">
                                                        <div class="col-md-2 text-white text-center system-settings"><i class="fa fa-cog"></i></div>
                                                         <div class="col-md-10" style="">
                                                             <h4 class="mt-3 contolmargin"><b >Education Year Settings</b></h4>
                                                               <p style="font-size: 14px">Configure the running education yeae of the institute.</p>
                                                         </div>
                                                     </div>
                                                </a>


                                            </div>
                                        </div>
                                    </div>






                                </div>





        </div>
        <!-- Social Media End Here -->


    @endsection


