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
                                                        <h4 class="color-primary" >Manage Payrol</h4>
                                                        <a href="{{url('/payrols/create')}}" class="btn btn rounded" style="background-color:#9370DB;color:azure"><i class="fas fa-plus-circle mr-1"></i> Create new</a>
                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <thead class="border-bottom">
                                                            <tr>
                                                                <th>Id</th>
                                                                <th>Employee</th>
                                                                <th>Designation</th>
                                                                <th>Department</th>
                                                                <th>Pay Date</th>                                    
                                                                <th>Account No</th>
                                                                <th>Basic Salary</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($payrols as $payrol)
                                                            <tr>
                                                                <td>{{$payrol->id}}</td>
                                                                <td>{{$payrol->ename}}</td>
                                                                <td>{{$payrol->dname}}</td>
                                                                <td>{{$payrol->sname}}</td>
                                                                <td>{{$payrol->pay_date}}</td>
                                                                <td>{{$payrol->account_no}}</td>
                                                                <td>{{$payrol->basic_salary}}</td>
                                                                
                                                                <td>
                                                                <form action="{{route('payrols.destroy',$payrol->id)}}" method="post">
                                                                    <div class="btn-group" role="group">
                                                                        <a href="{{route('payrols.edit',$payrol->id)}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" class="btn btn-light " style="color: green;"><i class="fas fa-edit"></i></a><a>
                                                                        </a><a href="{{route('payrols.show',$payrol->id)}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Details" class="btn btn-light text-info"><i class="fas fa-search-plus"></i></a><a>
                                                                            @method('DELETE')
                                                                            @csrf
                                                                                <button type="submit" name="delete" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" class="btn btn-light" style="color: red;"> <i class="fas fa-trash-alt"></i></button>

                                                                            </form>
                                                                        </a>
                                                                    </div><a>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th colspan="8">
                                                                    {{$payrols->links()}}
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