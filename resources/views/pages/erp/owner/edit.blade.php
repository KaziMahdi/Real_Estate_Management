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
                                        <h4 class="color-primary">Edit Owner</h4>
                                        <a href="{{url('/owners')}}" class="btn btn rounded" style="background-color:#9370DB;color:azure"><i class="fas fa-wrench mr-1"></i> Manage Owner</a>
                                    </div>
                                </div>

                                <form action="{{route('owners.update',$owner)}}" method="POST" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <!-- <input type="hidden" name="_token" value="o85yU7Z4aO218mZHaufO8KtAqwpwviSNFsCaUeXf"> -->
                                    <div class="card-body">

                                        <div class="form-group row " style="padding-bottom: 10px;"><label for="txtOrganization" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" name="name" id="txtOrganization" value="{{$owner->name}}" placeholder="" style="height:50px"></div>
                                        </div>

                                        <div class="form-group row" style="padding-bottom: 10px;"><label class="col-sm-2 col-form-label">Mobile</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" name="mobile" id="txtOrganization" value="{{$owner->mobile}}" placeholder="" style="height:50px"></div>

                                        </div>
                                        <div class="form-group row " style="padding-bottom: 10px;"><label for="txtContactPerson" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" name="email" id="txtContactPerson" value="{{$owner->email}}" placeholder="" style="height:50px"></div>
                                        </div>

                                        <div class="form-group row " style="padding-bottom: 10px;"><label for="txtPhone" class="col-sm-2 col-form-label">Address</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" name="address" id="txtPhone" value="{{$owner->address}}" placeholder="" style="height:50px"></div>
                                        </div>

                                        
                                        <div class="form-group row " style="padding-bottom: 10px;"><label for="txtEmail" class="col-sm-2 col-form-label">Photo</label>
                                            <div class="col-sm-10"><input type="file" class="form-control" name="photo" id="txtEmail" value="{{$owner->photo}}" placeholder="" style="height:50px"></div>
                                        </div>

                                                            <!-- <div class="form-group row " style="padding-bottom: 10px;"><label for="txtAddress" class="col-sm-2 col-form-label">Address</label>
                                                                <div class="col-sm-10"><input type="text" class="form-control" name="txtAddress" id="txtAddress" value="" placeholder="" style="height:50px"></div>
                                                            </div> -->

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