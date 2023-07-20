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
                                                        <h4 class="color-primary" >Stock Report</h4>
                                                        <a href="{{route('stocks.index')}}" class="btn btn rounded" style="background-color:#9370DB;color:azure"><i class="fas fa-plus-circle mr-1"></i> Manage Stock</a> 
                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <thead class="border-bottom">
                                                            <tr>
                                                                                                                                
                                                                <th>SN</th>
                                                                <th>Material</th>
                                                                <th>Qty</th>                                                                                                   
                                                                                                                                                                  
                                                                                                                                                         
                                       
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php
                                                            
                                                            $sn=0;

                                                            @endphp
                                                            @foreach($products as $product)
                                                            <tr>
                                                                                                                                
                                                                <td>{{++$sn}}</td>
                                                                <td>{{$product->name}}</td>
                                                                <td>{{$product->total_qty}}</td>
                       

                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th colspan="8">
                                                                
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