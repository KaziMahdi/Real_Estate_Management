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
                                                            <h4 class="color-primary">Create Employee</h4>
                                                            <a href="{{'/employees'}}" class="btn btn rounded" style="background-color:#9370DB;color:azure"><i class="fas fa-wrench mr-1"></i> Manage Employee</a>
                                                        </div>
                                                    </div>

                                                    <form action="{{route('employees.store')}}" method="POST" >
                                                        
                                                        @csrf
                                                        
                                                        <div class="card-body">
                                                        <div class="form-group row " style="padding-bottom: 10px;"><label for="txtOrganization" class="col-sm-2 col-form-label" >Name</label>
                                                                <div class="col-sm-10" ><input type="text" class="form-control" name="name" id="txtOrganization" value="" placeholder="" style="height:50px"></div>
                                                            </div>

                                                            <div class="form-group row" style="padding-bottom: 10px;"><label class="col-sm-2 col-form-label">Mobile</label>
                                                            <div class="col-sm-10" ><input type="text" class="form-control" name="mobile" id="txtOrganization" value="" placeholder="" style="height:50px"></div>
                                                                        
                                                            </div>
                                                            <div class="form-group row " style="padding-bottom: 10px;"><label for="txtContactPerson" class="col-sm-2 col-form-label">Email</label>
                                                                <div class="col-sm-10"><input type="text" class="form-control" name="email" id="txtContactPerson" value="" placeholder="" style="height:50px"></div>
                                                            </div>

                                                            <div class="form-group row " style="padding-bottom: 10px;"><label for="txtPhone" class="col-sm-2 col-form-label">Address</label>
                                                                <div class="col-sm-10"><input type="text" class="form-control" name="address" id="txtPhone" value="" placeholder="" style="height:50px"></div>
                                                            </div>

                                                            <div class="form-group row " style="padding-bottom: 10px;"><label for="txtPhone" class="col-sm-2 col-form-label">Salary</label>
                                                                <div class="col-sm-10"><input type="text" class="form-control" name="salary" id="txtPhone" value="" placeholder="" style="height:50px"></div>
                                                            </div>

                                                            <div class="form-group row " style="padding-bottom: 10px;"><label for="txtPhone" class="col-sm-2 col-form-label">Account</label>
                                                                <div class="col-sm-10"><input type="text" class="form-control" name="account" id="txtPhone" value="" placeholder="" style="height:50px"></div>
                                                            </div>

                                                        <div class="form-group row" style="padding-bottom: 10px;"><label class="col-sm-2 col-form-label">Designation</label>
                                                         
                                                        <div class="col-sm-10">
                                                                                                                                            
                                                            <select name="designation_id" id="cmbCountryId" class="form-control" style="height:50px">
                                                            
                                                            <option selected disabled>--Select--</option>
                                                            @foreach($designations as $designation)
                                                                 
                                                                <option value="{{$designation->id}}">
                                                                 {{$designation->name}}
                                                                </option>                                                      
                                                                @endforeach
                                                            </select>
                                                        
                                                        </div>
                                                        
                                                        </div>

                                                        <div class="form-group row"><label class="col-sm-2 col-form-label">Department</label>
                                                         
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

                                                            <div class="form-group row " style="padding-bottom: 10px;"><label for="txtEmail" class="col-sm-2 col-form-label">House Rent</label>
                                                                <div class="col-sm-10"><input type="text" class="form-control" name="txHouserent" id="txtEmail" value="" placeholder="" style="height:50px"></div>
                                                            </div>

                                                            <div class="form-group row " style="padding-bottom: 10px;"><label for="txtAddress" class="col-sm-2 col-form-label">Medicale Allowance</label>
                                                                <div class="col-sm-10"><input type="text" class="form-control" name="txtMedicale" id="txtAddress" value="" placeholder="" style="height:50px"></div>
                                                            </div>
                                                            <div class="form-group row " style="padding-bottom: 10px;"><label for="txtAddress" class="col-sm-2 col-form-label">Transport Allowance</label>
                                                                <div class="col-sm-10"><input type="text" class="form-control" name="txtTransport" id="txtAddress" value="" placeholder="" style="height:50px"></div>
                                                            </div>
                                                            <div class="form-group row " style="padding-bottom: 10px;"><label for="txtAddress" class="col-sm-2 col-form-label">Provident Fund</label>
                                                                <div class="col-sm-10"><input type="text" class="form-control" name="txtProvident" id="txtAddress" value="" placeholder="" style="height:50px"></div>
                                                            </div>
                                                            <div class="form-group row " style="padding-bottom: 10px;"><label for="txtAddress" class="col-sm-2 col-form-label">Income Tax</label>
                                                                <div class="col-sm-10"><input type="text" class="form-control" name="txtIncome" id="txtAddress" value="" placeholder="" style="height:50px"></div>
                                                            </div>
                                                            <div class="form-group row " style="padding-bottom: 10px;"><label for="txtAddress" class="col-sm-2 col-form-label">Insurance</label>
                                                                <div class="col-sm-10"><input type="text" class="form-control" name="txtInsurance" id="txtAddress" value="" placeholder="" style="height:50px"></div>
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