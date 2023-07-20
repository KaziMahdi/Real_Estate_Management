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
                                                        <h4 class="color-primary" >Manage Stock</h4>
                                                        <!-- <a href="{{route('purchases.create')}}" class="btn btn rounded" style="background-color:#9370DB;color:azure"><i class="fas fa-plus-circle mr-1"></i> Create new</a> -->
                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <thead class="border-bottom">
                                                            <tr>
                                                                <th>Id</th>                                                                
                                                                <th>Material</th>
                                                                <th>Qty</th>                                                                                                   
                                                                <th>Uom</th>                                                                                                   
                                                                <th>Action</th>                                                                                            
                                       
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($stocks as $stock)
                                                            <tr>
                                                                <td>{{$stock->id}}</td>                                                                
                                                                <td>{{$stock->material}}</td>
                                                                <td>{{$stock->qty}}</td>
                                                                <td>{{$stock->uom}}</td>


                                                                <td>
                                                                <a href="{{route('stocks.show',$stock->id)}}"data-bs-toggle="tooltip" data-bs-placement="top" title="Details" class="btn btn-light text-info"><i class="fas fa-search-plus"></i></a>

                                                                </a>

                                                                </td>
                                                                
                                                                
                                                                
                                                                
                                                                
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th colspan="8">
                                                                    {{$stocks->links()}}
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