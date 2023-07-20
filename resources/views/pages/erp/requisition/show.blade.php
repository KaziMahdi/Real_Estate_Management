@extends('layout.erp.master')
@section('style')
<style>
    body {

        color: #484b51;
    }

    .text-secondary-d1 {
        color: #728299 !important;
    }

    .page-header {
        margin: 0 0 1rem;
        padding-bottom: 1rem;
        padding-top: .5rem;
        border-bottom: 1px dotted #e2e2e2;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -ms-flex-align: center;
        align-items: center;
    }

    .page-title {
        padding: 0;
        margin: 0;
        font-size: 1.75rem;
        font-weight: 300;
    }

    .brc-default-l1 {
        border-color: #dce9f0 !important;
    }

    .ml-n1,
    .mx-n1 {
        margin-left: .25rem !important;
    }

    .mr-n1,
    .mx-n1 {
        margin-right: -.25rem !important;
    }

    .mb-4,
    .my-4 {
        margin-bottom: 1.5rem !important;
    }

    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, .1);
    }

    .text-grey-m2 {
        color: #888a8d !important;
    }

    .text-success-m2 {
        color: #86bd68 !important;
    }

    .font-bolder,
    .text-600 {
        font-weight: 600 !important;
    }

    .text-110 {
        font-size: 110% !important;
    }

    .text-blue {
        color: #478fcc !important;
    }

    .pb-25,
    .py-25 {
        padding-bottom: .75rem !important;
    }

    .pt-25,
    .py-25 {
        padding-top: .75rem !important;
    }

    .bgc-default-tp1 {
        background-color: #9370DB !important;
    }

    .bgc-default-l4,
    .bgc-h-default-l4:hover {
        background-color: #f3f8fa !important;
    }

    .page-header .page-tools {
        -ms-flex-item-align: end;
        align-self: flex-end;
    }

    .btn-light {
        color: #757984;
        background-color: #f5f6f9;
        border-color: #dddfe4;
    }

    .w-2 {
        width: 1rem;
    }

    .text-120 {
        font-size: 120% !important;
    }

    .text-primary-m1 {
        color: #4087d4 !important;
    }

    .text-danger-m1 {
        color: #dd4949 !important;
    }

    .text-blue-m2 {
        color: #68a3d5 !important;
    }

    .text-150 {
        font-size: 150% !important;
    }

    .text-60 {
        font-size: 60% !important;
    }

    .text-grey-m1 {
        color: #7b7d81 !important;
    }

    .align-bottom {
        vertical-align: bottom !important;
    }
    #pur{
        background-color:#348CD4;
        
        -webkit-transition: background-color 2s ease-out;
  -moz-transition: background-color 2s ease-out;
  -o-transition: background-color 2s ease-out;
  transition: background-color 2s ease-out;
}

#pur:hover {
  background-color: green;
  cursor: pointer;
}
    
</style>
@endsection


@section('content')


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<div class="page-content container">
    <div class="page-header text-blue-d2" style="margin: 100px 0 0 20%;">
        <h1 class="page-title text-secondary-d1">
            Requisition
            <small class="page-info" style="font-size: large;">
                <i class="fa fa-angle-double-right text-80"></i>
                ID: {{$requisition->id}}
            </small>
        </h1>

        <div class="page-tools">
            <div class="action-buttons">
                <a class="btn bg-white btn-light mx-1px text-95" href="javascript:window.print()" data-title="Print">

                    <i class="mr-1 fa fa-print text-primary-m1 text-120 w-2"></i>
                    Print

                </a>
                <a class="btn bg-white btn-light mx-1px text-95" id="generatePDF" href="#" data-title="PDF">
                    <i class="mr-1 fa fa-file-pdf-o text-danger-m1 text-120 w-2"></i>
                    Export
                </a>
            </div>
        </div>
    </div>

    <div class="container px-0">
        <div class="row mt-4" style="margin-left:20%;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border:1px solid #348CD4 ">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center text-150">
                            <i class="fa fa-book fa-2x text-success-m2 mr-1"></i>
                            <span class="text-default-d3">Kazi Real Estate</span>
                        </div>
                    </div>
                </div>
                <!-- .row -->

                <hr class="row brc-default-l1 mx-n1 mb-4" />

                <div class="row" style="font-size:medium">
                    <div class="col-sm-6">
                        <div>
                            <span class="text-sm text-grey-m2 align-middle">Requestor:</span>
                            <span class="text-600 text-110 text-blue align-middle">{{$employee->name}}</span>
                        </div>
                        <div class="text-grey-m2">
                            <div class="my-1">
                                Address: {{$employee->address}}
                            </div>
                            
                            <div class="my-1"><i class="fa fa-phone fa-flip-horizontal text-secondary"></i> <b class="text-600">{{$employee->mobile}}</b></div>
                        </div>
                    </div>
                    <!-- /.col -->

                    <div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                        <hr class="d-sm-none" />
                        <div class="text-grey-m2">
                            <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">
                                Invoice
                            </div>

                            <div class="my-2"><i class="fa fa-circle  text-xs mr-1" style="color:#348CD4"></i> <span class="text-600 text-90">ID:</span> {{$requisition->id}}</div>

                            <div class="my-2"><i class="fa fa-circle  text-xs mr-1" style="color:#348CD4"></i> <span class="text-600 text-90">Date:</span> {{$requisition->requisition_date }}</div>

                            <div class="my-2"><i class="fa fa-circle  text-xs mr-1" style="color:#348CD4"></i> <span class="text-600 text-90">Status:</span>{{$requisition->status}}</div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>

                

                    <div class="row border-b-2 brc-default-l2"></div>

                    <!-- or use a table instead -->
                    
            <div class="table-responsive">
                <table class="table table-striped table-borderless border-0 border-b-2 brc-default-l1">
                    <thead class="bg-none bgc-default-tp1">
                        <tr class="text-white">
                            <th class="opacity-2">ID</th>
                            <th>Project</th>
                            <th>ProjectTask</th>
                            <th>Material</th>
                            <th>Qty</th>
                            <th width="140">UoM</th>
                        </tr>
                    </thead>

                    <tbody class="text-95 text-secondary-d3">
                            @php
                            $sn=0
                            @endphp
                        @foreach($detailrequs as $detailrequ)
                        <tr>
                            <td>{{++$sn}}</td>
                            <td>{{$detailrequ->pname}}</td>
                            <td>{{$detailrequ->tname}}</td>
                            <td>{{$detailrequ->mname}}</td>
                            <td class="text-95">{{$detailrequ->qty}}</td>
                            <td class="text-secondary-d2">{{$detailrequ->uname}}</td>
                        </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
            

                    <div class="row mt-3">
                        <div class="col-12 col-sm-7 text-grey-d2 text-95 mt-2 mt-lg-0">

                        </div>

                        <div class="col-12 col-sm-5 text-grey text-90 order-first order-sm-last" style="font-size:medium">
                            <div class="row my-2">
                                
                            </div>

                            <!-- <div class="row my-2">
                                <div class="col-7 text-right">
                                    Tax (10%)
                                </div>
                                <div class="col-5">
                                    <span class="text-110 text-secondary-d1">$225</span>
                                </div>
                            </div> -->

                            <div class="row my-2 ">
                                
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div style="padding-bottom: 100px;display:flex;justify-content:space-between">
                    
                    <div>
                        <span class="text-secondary-d1 text-105">Thank you for your business</span>
                    </div>

                        <div class="col-xl-2" id="pur"> 
                            <a href="{{url('/purchases/create')}}"><button type="button" class="btn btn text-capitalize"  style="color:#f3f8fa">Purchase Now</button></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection