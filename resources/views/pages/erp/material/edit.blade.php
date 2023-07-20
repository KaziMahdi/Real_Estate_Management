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
                                        <h4 class="color-primary">Edit Material</h4>
                                        <a href="{{'/materials'}}" class="btn btn rounded" style="background-color:#9370DB;color:azure"><i class="fas fa-wrench mr-1"></i> Manage Employee</a>
                                    </div>
                                </div>

                                <form action="{{route('materials.update',$material)}}" method="POST">
                                    
                                    @method('PUT')
                                    @csrf

                                    <div class="card-body">
                                        <div class="form-group row " style="padding-bottom: 10px;"><label for="txtOrganization" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" name="name" id="txtOrganization" value="{{$material->name}}" placeholder="" style="height:50px"></div>
                                        </div>

                                        <div class="form-group row" style="padding-bottom: 10px;"><label class="col-sm-2 col-form-label">Price</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" name="price" id="txtOrganization" value="{{$material->price}}" placeholder="" style="height:50px"></div>

                                        </div>

                                        <div class="form-group row" style="padding-bottom: 10px;"><label class="col-sm-2 col-form-label">Category</label>

                                            <div class="col-sm-10">

                                                <select name="category_id" id="cmbCountryId" class="form-control" style="height:50px">
                                                    @foreach($categories as $categorie)
                                                    @if($categorie->id==$material->category_id)
                                                    <option value="{{$categorie->id}}" selected>
                                                        {{$categorie->name}}
                                                    </option>
                                                    @else
                                                    <option value="{{$categorie->id}}">
                                                        {{$categorie->name}}
                                                    </option>
                                                    @endif
                                                    @endforeach
                                                </select>

                                            </div>

                                        </div>

                                        <div class="form-group row " style="padding-bottom: 10px;"><label for="txtPhone" class="col-sm-2 col-form-label">Brand</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" name="is_brand" id="txtPhone" value="{{$material->is_brand}}" placeholder="" style="height:50px"></div>
                                        </div>

                                        <div class="form-group row"><label class="col-sm-2 col-form-label">Uom</label>

                                            <div class="col-sm-10">

                                                <select name="uom_id" id="cmbCountryId" class="form-control" style="height:50px">
                                                    @foreach($uom as $row)
                                                    @if($row->id==$material->uom_id)
                                                    <option value="{{$row->id}}" selected>
                                                        {{$row->name}}
                                                    </option>
                                                    @else
                                                    <option value="{{$row->id}}">
                                                        {{$row->name}}
                                                    </option>
                                                    @endif
                                                    @endforeach
                                                </select>

                                            </div>

                                        </div>

                                        <!-- <div class="form-group row " style="padding-bottom: 10px;"><label for="txtEmail" class="col-sm-2 col-form-label">Email</label>
                                                                <div class="col-sm-10"><input type="text" class="form-control" name="txtEmail" id="txtEmail" value="" placeholder="" style="height:50px"></div>
                                                            </div>

                                                            <div class="form-group row " style="padding-bottom: 10px;"><label for="txtAddress" class="col-sm-2 col-form-label">Address</label>
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



            @endsection