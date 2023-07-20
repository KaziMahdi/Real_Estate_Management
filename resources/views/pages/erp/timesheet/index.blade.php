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
                                                        <h4 class="color-primary" >Manage Timesheets</h4>
                                                        <a href="{{route('timesheets.create')}}" class="btn btn rounded" style="background-color:#9370DB;color:azure"><i class="fas fa-plus-circle mr-1"></i> Create new</a>
                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <thead class="border-bottom">
                                                            <tr>
                                                                <th>Id</th>                                                                
                                                                <th>Project </th>
                                                                <th>Project Task</th>
                                                                <th>Department</th>
                                                                <th>Client</th>                                                                 
                                                                <th>Employee</th>                                    
                                                                <th>Start Time</th>                                    
                                                                <th>End Time</th>                                    
                                                                                                 
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($timesheets as $timesheet)
                                                            <tr>
                                                                <td>{{$timesheet->id}}</td>
                                                                <td>{{$timesheet->pro}}</td>
                                                                <td>{{$timesheet->ptask}}</td>
                                                                <td>{{$timesheet->department}}</td>
                                                                <td>{{$timesheet->clien}}</td>                                                                                                                              
                                                                <td>{{$timesheet->em}}</td>
                                                                <td>{{$timesheet->start_times}}</td>
                                                                <td>{{$timesheet->end_times}}</td>
                                                               

                                                                <td>
                                                                <form action="{{route('timesheets.destroy',$timesheet->id)}}" method="post">
                                                                    <div class="btn-group" role="group">
                                                                        <a href="{{route('timesheets.edit',$timesheet->id)}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" class="btn btn-light " style="color: green;"><i class="fas fa-edit"></i></a><a>
                                                                        </a><a href="{{route('timesheets.show',$timesheet->id)}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Details" class="btn btn-light text-info"><i class="fas fa-search-plus"></i></a><a>
                                                                            @method('DELETE')
                                                                            @csrf
                                                                                <button type="submit"  name="delete" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" class="btn btn-light" style="color: red;"> <i class="fas fa-trash-alt"></i></button>

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
                                                                    {{$timesheets->links()}}
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