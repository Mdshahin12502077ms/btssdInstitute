@extends('Backend.admin.include.master')

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>ADD Notice</h3>
            {{-- <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Course</li>
            </ul> --}}
        </div>
        <div>
            <div class="container">


                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New Notice</h3>
                            </div>
                           {{-- <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div> --}}
                        </div>
                        <form class="new-added-form" action="{{url('notice/update/'.$notice->id)}}" method="Post" enctype="multipart/form-data">
                           @csrf
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-12 form-group">
                                    <label>Notice Title *</label>
                                    <input type="text" name="title" value="{{ $notice->title }}" class="form-control">
                                </div>

                                <div class="col-xl-12 col-lg-12 col-12 form-group">
                                    <label>Image *</label>
                                    <input type="file" name="image"  class="form-control">

                                    <div><img src="{{asset($notice->image)}}" alt="" style="width: 100px;height: 100px"></div>
                                </div>
                                
                                <div class="col-xl-12 col-lg-12 col-12 form-group">
                                    <label>Status</label>
                                    <select name="status" class="select2">
                                        <option value="{{ $notice->status }}">{{ $notice->status }}</option>
                                        <option value="Active">Active</option>
                                        <option value="Deactive">Deactive</option>

                                    </select>
                                </div>

                                <div class="container mt-5">
                                    <h2>Description</h2>
                                    <textarea id="summernote" rows="10" cols="80" name="description">{!! $notice->description !!}</textarea>
                                </div>
                                  
                             



                                <div class="col-md-6 form-group"></div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- Social Media End Here -->





        <div id=""></div>
    









    
        <script>
            $('#summernote').summernote({
              placeholder: 'Hello stand alone ui',
              tabsize: 2,
              height: 300,
              toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
              ]
            });
          </script>
    @endsection


@section('script')


@endsection