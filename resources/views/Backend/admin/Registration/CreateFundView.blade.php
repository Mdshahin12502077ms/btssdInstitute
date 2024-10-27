@extends('Backend.admin.include.master')

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->

        <div>
            <div class="container col-lg-12">
                <div class="row">
                    <div class="col-md-12 table_body">
                        <div class="card">
                          <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->

                <!-- Breadcubs Area End Here -->
                <!-- Class Table Area Start Here -->
                <div class="card height-auto mt-2">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Fund Check</h3>
                            </div>

                        </div>
                        {{-- <div class="row">


                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Course*</label>
                                <select name="course_id" class="form-control" id="search_course" >
                                    <option value="">Please Select Course</option>
                                    @foreach ($course as $course)
                                    <option value="{{$course->id}}" data-name="{{$course->course_name}}">{{$course->course_name}}</option>

                                    @endforeach
                                </select>
                                @if($errors->has('course_id'))
                                   <div class="error" style="color:red">{{ $errors->first('course_id') }}</div>
                                @endif
                            </div>



                            <div class="col-xl-4 col-lg-6 col-12  form-group">
                                <label>Session*</label>
                                <select name="session_id"  class="form-control" id="search_session" >
                                    <option value="">Please Select Session</option>
                                    @foreach ($session as $session)
                                    <option value="{{$session->id}}" data-name="{{$session->session_name}}">{{$session->session_name}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('course_id'))
                                <div class="error" style="color:red">{{ $errors->first('course_id') }}</div>
                             @endif
                            </div>
                              <div class="col-xl-4 col-lg-6 col-12  form-group" align="center"  id="Available_blance">

                              </div>


                        </div> --}}
                     <div class="col-md-12">
                        <div class="row">


                            <div class="col-md-12 col-md d-md-flex w-100">
                                <div class="col-md-6 col-sm-12 text-white d-flex text-center" style="line-height:4vh; background-color:green"><span class="mt-2">Institute Payment</span></div>
                                <div class="col-md-4"style="background-color:green"> </div>
                                <div class="col-md-2 col-sm-12" align="right" style="background-color:green">
                                    <a type="button"  href=""
                                    class="btn btn-info btn-lg addFund col-sm-12 col-md-6 mt-2 mb-2" style="font-size:15px;line-height:4vh; "
                                    data-toggle="modal"
                                    {{-- data-course="{{$course->course_name}}"
                                    data-session="{{$session->id}}" --}}
                                    data-target="#standard-modal">
                                      Add Fund
                                   </a>
                                </div>

                            </div>
                        </div>

                     </div>

                        <div class="table-responsive table table-bordered mt-5">
                            <table class="table display data-table text-nowrap font_style table_style" id="students-table">
                                <thead >
                                  <th style="width:10%; vertical-align: middle;color:black;font-size:15px">Sl No</th>
                                  <th style="width:15%; vertical-align: middle;color:black;font-size:15px">Course Name</th>
                                  <th style="width:15%; vertical-align: middle;color:black;font-size:15px">Session Name</th>
                                  <th style="width:10%; vertical-align: middle;color:black;font-size:15px">Pay For</th>
                                  <th style="width:10%; vertical-align: middle;color:black;font-size:15px">Amount</th>
                                  <th style="width:10%; vertical-align: middle;color:black;font-size:15px">Pay Status</th>
                                  <th style="width:10%; vertical-align: middle;color:black;font-size:15px">Pay Online</th>
                                  <th style="width:10%; vertical-align: middle;color:black;font-size:15px">Print Paid Voucher</th>
                                  <th style="width:2%; vertical-align: middle;color:black;font-size:15px">Action</th>
                                </thead>
                                <tbody style="color:black;font-size:13px" id="fund_table_body">

                                </tbody>
                            </table>
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
        @include('Backend.admin.Registration.addFundModal')

        @include('Frontend.Payment.paymentModule')

    @endsection

    @section('js')

 <script>
    $(document).ready(function(){

        // load table
        function loadData(){
            $.ajax({
                url: "{{ route('get.st.reg') }}",
                success: function(data){
                    $('#fund_table_body').html(data);
                }
            });
        }
        loadData();

    });
 </script>


<script>
    $(document).on('change','#course',function(){
        let course_id = $(this).val();
        $.ajax({
            url: "{{ route('get_session_with_course') }}",
            data: {course_id:course_id},
            success: function(data){
                $('#session').empty();
                //$('#session').append('<option value="">Choose One</option>');
                $.each(data,function(key,value){
                    $('#session').append('<option value='+value.id+'>'+value.session_name+'</option>');
                });
            }
        });
    });
</script>

<script>
$(document).on('click', '.Payment', function() {
    var id = $(this).data('id');
    var amount = $(this).data('amount');

    $('#pay_id').val(id);
    $('#pay_amount').val(amount);
    $('#pay_amount1').val('Pay ' + amount + ' BDT');
});
</script>

<script>
    function printVoucher(event) {
        event.preventDefault(); // Prevent the default anchor link behavior

        const pdfUrl = event.currentTarget.href; // Get the URL from the anchor link

        // Open the PDF in a new window
        const printWindow = window.open(pdfUrl, '_blank');

        // Wait until the PDF is fully loaded before triggering the print dialog
        printWindow.onload = function() {
            printWindow.print(); // Trigger the print dialog
                 // Close the print window after printing
        };
    }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection

