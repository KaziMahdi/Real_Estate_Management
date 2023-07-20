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
                                        <h4 class="color-primary">Create Project</h4>
                                        <a href="{{'/projects'}}" class="btn btn rounded" style="background-color:#9370DB;color:azure"><i class="fas fa-wrench mr-1"></i> Manage Project</a>
                                    </div>
                                </div>

                                <form action="{{route('projects.store')}}" method="POST" enctype="multipart/form-data">

                                    @csrf

                                    <div class="card-body">
                                        <div class="form-group row " style="padding-bottom: 10px;"><label for="txtOrganization" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" name="name" id="txtOrganization" value="" placeholder="" style="height:50px"></div>
                                        </div>

                                        <div class="form-group row" style="padding-bottom: 10px;"><label class="col-sm-2 col-form-label">Department</label>
                                                         
                                                        <div class="col-sm-10">
                                                                                                                                            
                                                            <select name="department_id" id="cmbCountryId" class="form-control" style="height:50px">
                                                            <option selected disabled>--Select--</option>
                                                            @foreach($departments as $department)
                                                                
                                                                <option value="{{$department->id}}">
                                                                 {{$department->name}}
                                                                </option>                                                      
                                                                @endforeach
                                                            </select>
                                                        
                                                        </div>
                                                        
                                                    </div>

                                        <div class="form-group row" style="padding-bottom: 10px;"><label class="col-sm-2 col-form-label">Status</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" name="status" id="txtOrganization" value="" placeholder="" style="height:50px"></div>

                                        </div>
                                        <div class="form-group row" style="padding-bottom: 10px;"><label class="col-sm-2 col-form-label">Owner</label>
                                                         
                                                <div class="col-sm-10">
                                                                                                                                            
                                                            <select name="owner_id" id="cmbCountryId" class="form-control" style="height:50px">
                                                            <option selected disabled>--Select--</option>
                                                            @foreach($owners as $owner)
                                                                
                                                                <option value="{{$owner->id}}">
                                                                 {{$owner->name}}
                                                                </option>                                                      
                                                                @endforeach
                                                            </select>
                                                        
                                                </div>
                                                        
                                                    </div>

                                        <div class="form-group row " style="padding-bottom: 10px;"><label for="txtPhone" class="col-sm-2 col-form-label">Layout</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" name="layout" id="txtPhone" value="" placeholder="" style="height:50px"></div>
                                        </div>

                                        <div class="form-group row " style="padding-bottom: 10px;"><label for="txtEmail" class="col-sm-2 col-form-label">Photo</label>
                                            <div class="col-sm-10"><input type="file" class="form-control" name="photo" id="txtEmail" value="" placeholder="" style="height:50px"></div>
                                        </div>

                                        <div class="form-group row " style="padding-bottom: 10px;"><label for="txtAddress" class="col-sm-2 col-form-label">Location</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" name="location" id="txtAddress" value="" placeholder="" style="height:50px"></div>
                                        </div>
                                    </div>
                                    <div class="card-footer border-top">
                                        <input type="submit" value="Create" name="btnCreate" id="btnCreate" class="btn btn" style="background-color:#9370DB;color:azure">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            @endsection