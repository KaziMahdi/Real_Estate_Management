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
                                                        <h4 class="color-primary" >Manage Expense</h4>
                                                         <a href="{{route('expenses.create')}}" class="btn btn rounded" style="background-color:#9370DB;color:azure"><i class="fas fa-plus-circle mr-1"></i> Create new</a>
                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <thead class="border-bottom">
                                                            <tr>
                                                                <th>Id</th>                                                                
                                                                <th>Maneger</th>
                                                                <th>Expense Date</th>                                                                                                   
                                                                <th>Remark</th>                                                                                                   
                                                                                                                                
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($expenses as $expense)
                                                            <tr>
                                                                <td>{{$expense->id}}</td>                                                                
                                                                <td>{{$expense->name}}</td>
                                                                <td>{{$expense->expenses_date}}</td>
                                                                <td>{{$expense->remark}}</td>
                                                                
                                                               
                                                                
                                                                
                                                                <td>
                                                                <form action="{{route('expenses.destroy',$expense->id)}}" method="post">
                                                                    <div class="btn-group" role="group">
                                                                        </a><a href="{{route('expenses.show',$expense->id)}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Details" class="btn btn-light text-info"><i class="fas fa-search-plus"></i></a><a>
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
                                                                    {{$expenses->links()}}
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