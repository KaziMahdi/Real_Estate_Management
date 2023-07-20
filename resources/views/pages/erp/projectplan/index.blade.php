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
                                                        <h4 class="color-primary" >Manage Project Plan</h4>
                                                        <input type="text" class="form-control" placeholder="Searche" id="serch" style="height: 40px;width: 30%;" onkeyup="search()">

                                                        <a href="{{route('projectplans.create')}}" class="btn btn rounded" style="background-color:#9370DB;color:azure"><i class="fas fa-plus-circle mr-1"></i> Create new</a>
                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table table-striped" id="table">
                                                        <thead class="border-bottom">
                                                            <tr>
                                                                <th>Id</th>                                                                
                                                                <th>Project</th>                                                                                                                                                            
                                                                <th>Start Time</th>                                    
                                                                <th>End Time</th>                                    
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($projectplans as $projectplan)
                                                            <tr>
                                                                <td>{{$projectplan->id}}</td>
                                                                <td>{{$projectplan->pname}}</td>                                                                                                                               
                                                                <td>{{$projectplan->start}}</td>
                                                                <td>{{$projectplan->end}}</td>

                                                                <td>
                                                                <form action="{{route('projectplans.destroy',$projectplan->id)}}" method="post">
                                                                    <div class="btn-group" role="group">
                                                                        <a href="{{route('projectplans.edit',$projectplan->id)}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" class="btn btn-light " style="color: green;"><i class="fas fa-edit"></i></a><a>
                                                                        </a><a href="{{route('projectplans.show',$projectplan->id)}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Details" class="btn btn-light text-info"><i class="fas fa-search-plus"></i></a><a>
                                                                            @method('DELETE')
                                                                            @csrf
                                                                                <button type="submit" name="delete" class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" style="color: red;"> <i class="fas fa-trash-alt"></i></button>

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
                                                                <th colspan="8" class="row">
                                                                    {{$projectplans->links()}}
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

@section('script')
    <script>
        function search(){
            let serch=document.getElementById('serch').value
            console.log(serch)
            let table=document.getElementById('table')
            console.log(serch)
            let tr=table.getElementsByTagName('tr')
            
            for(i=0;i<tr.length;i++){

                let td=tr[i].getElementsByTagName('td')

                for(l=0;l<td.length;l++){
                    let content=td[l].textContent

                    if(content.indexOf(serch) > -1){
                        tr[i].style.display=""
                        tr[i].style.backgroundColor="#f2f2f2"
                        

                        break;
                    }else{
                        tr[i].style.display="none"
                    }
                }
            }
        }
    </script>
@endsection
         @endsection