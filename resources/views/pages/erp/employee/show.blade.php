@extends('layout.erp.master')


@section('content')

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->

            <!-- end page title -->
                            <section class="section">
                                <div class="section-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card" style="margin-top: 20px;" >
                                                <div class="card-header bg-light " style="height: 70px;">
                                                    <div class="w-100 d-flex justify-content-between align-items-end">
                                                        <h4 class="color-primary" >Details Employee</h4>
                                                        <a href="{{'/employees'}}" class="btn btn rounded" style="background-color:#9370DB;color:azure"><i class="fas fa-wrench mr-1"></i> Manage Employee</a>
                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <thead class="border-bottom">
                                                            <tr>
                                                                <th>Id</th>
                                                                <th>Name</th>
                                                                <th>Mobile</th>
                                                                <th>Email</th>
                                                                <th>Address</th>
                                                                <th>Designation</th>
                                                                <th>Department</th>
                                                                <th>House Rent</th>
                                                                <th>Medicale</th>
                                                                <th>Transport</th>
                                                                <th>Provident Fund</th>
                                                                <th>Income Tax</th>
                                                                <th>Insurance</th>
                                                                <th>Created_at</th>
                                                                <th>Updated_at</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            
                                                            <tr>
                                                                <td>{{$employee->id}}</td>
                                                                <td>{{$employee->name}}</td>
                                                                <td>{{$employee->mobile}}</td>
                                                                <td>{{$employee->email}}</td>
                                                                <td>{{$employee->address}}</td>
                                                                <td>{{$employee->desig}}</td>
                                                                <td>{{$employee->department}}</td>
                                                                <td>{{$employee->house_rent}}</td>
                                                                <td>{{$employee->medicale_allowance}}</td>
                                                                <td>{{$employee->transport_allowance}}</td>
                                                                <td>{{$employee->provident_fund}}</td>
                                                                <td>{{$employee->income_tax}}</td>
                                                                <td>{{$employee->insurance}}</td>
                                                                <td>{{$employee->created_at}}</td>
                                                                <td>{{$employee->updated_at}}</td>
                                                                
                                                               
                                                            </tr>
                                                            
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th colspan="8">
                                                                    <nav>
                                                                        <ul class="pagination">

                                                                            <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                                                                                <span class="page-link" aria-hidden="true">‹</span>
                                                                            </li>





                                                                            <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                                                            <li class="page-item"><a class="page-link" href="">2</a></li>


                                                                            <li class="page-item">
                                                                                <a class="page-link" href="" rel="next" aria-label="Next »">›</a>
                                                                            </li>
                                                                        </ul>
                                                                    </nav>
                                                                </th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
        </div>  <!-- end row-->
    </div>
</div>
         @endsection