@extends('layout.erp.master')
@section('style')

@endsection
@section('content')



<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->

            <!-- end page title -->


            <!-- end row -->


            <section class="section">
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="margin-top: 20px;">
                                <div class="card-header bg-light" style="height: 70px;">
                                    <div class="w-100 d-flex justify-content-between align-items-end">
                                        <h4 class="color-primary">Edit Categoryes</h4> 
                                        <a href="{{route('categorys.index')}}" class="btn btn rounded" style="background-color:#9370DB;color:azure"><i class="fas fa-wrench mr-1"></i> Manage Designation</a>
                                    </div>
                                </div>

                                <form action="{{route('categorys.update',$category)}}" method="POST" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <!-- <input type="hidden" name="_token" value="o85yU7Z4aO218mZHaufO8KtAqwpwviSNFsCaUeXf"> -->
                                    <div class="card-body">

                                        <div class="form-group row " style="padding-bottom: 10px;"><label for="txtOrganization" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" name="name" id="txtOrganization" value="{{$category->name}}" placeholder="" style="height:50px"></div>
                                        </div>

                                        

                                    </div>

                                    <div class="card-footer border-top">
                                        <input type="submit" value="Update" name="btnCreate" id="btnCreate" class="btn btn" style="background-color:#9370DB;color:azure">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
@endsection