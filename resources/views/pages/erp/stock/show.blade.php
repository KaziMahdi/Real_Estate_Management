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
                                                        <h4 class="color-primary" >Details Stock</h4>
                                                        <a href="{{route('stocks.index')}}" class="btn btn rounded" style="background-color:#9370DB;color:azure"><i class="fas fa-wrench mr-1"></i> Manage Stock</a>
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
                                                                                                                   
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            
                                                        @foreach($stock_details as $stock_detail)
                                                            <tr>
                                                                <td>{{$stock_detail->id}}</td>
                                                                <td>{{$stock_detail->material_name}}</td>
                                                                <td>{{$stock_detail->qty}}</td>  
                                                                <td>{{$stock_detail->uom_name}}</td>
                                                                <td>
                                                                <a href="{{route('report')}}"data-bs-toggle="tooltip" data-bs-placement="top" title="Report" class="btn btn-light text-info"><i class="fas fa-search-plus"></i></a>

</a>
                                                                </td>
                                                                                                                         
                                                            </tr>
                                                        @endforeach    
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