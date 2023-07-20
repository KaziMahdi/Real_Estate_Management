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
                            <div class="card" style="margin-top: 20px;">
                                <div class="card-header bg-light " style="height: 70px;">
                                    <div class="w-100 d-flex justify-content-between align-items-end">
                                        <h4 class="color-primary">Manage Designation</h4>
                                        <a href="{{route('designation.create')}}" class="btn btn rounded" style="background-color:#9370DB;color:azure"><i class="fas fa-plus-circle mr-1"></i> Create new</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead class="border-bottom">
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($employeedesignations as $employeedesignation)
                                            <tr>
                                                <td>{{$employeedesignation->id}}</td>
                                                <td>{{$employeedesignation->name}}</td>
                                                <td>
                                                    <form action="{{route('designation.destroy',$employeedesignation->id)}}" method="post">
                                                        <div class="btn-group" role="group">
                                                        <a href="{{url('/designation')}}/{{$employeedesignation->id}}/edit" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" class="btn btn-light " style="color: green;"><i class="fas fa-edit"></i></a><a>
                                                        <a href="{{route('designation.show',$employeedesignation->id)}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Details" class="btn btn-light text-info"><i class="fas fa-search-plus"></i></a><a>
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" name="delete" class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" style="color: red;"> <i class="fas fa-trash-alt"></i></button>
                                                    
                                                </form>
                                                </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="row">
                                            {{$employeedesignations->links()}}
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
    </div> <!-- end row-->
</div>
</div>
@endsection