@extends('layout.erp.master')

@section('style')

@endsection


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
                                                        <h4 class="color-primary" >Manage Employee</h4>
                                                        <input type="text" class="form-control" placeholder="Searche" id="serch" style="height: 40px;width: 30%;" onkeyup="search()">
                                                        <a href="{{url('/employees/create')}}" class="btn btn rounded" style="background-color:#9370DB;color:azure"><i class="fas fa-plus-circle mr-1"></i> Create new</a>
                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table table-striped" id="table">
                                                        <thead class="border-bottom">
                                                            <tr>
                                                                <th>Id</th>
                                                                <th>Name</th>
                                                                <th>Mobile</th>
                                                                <th>Email</th>
                                                                <th>Address</th>
                                                                <th>Salary</th>
                                                                <th>Account</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($employees as $employee)
                                                            <tr>
                                                                <td>{{$employee->id}}</td>
                                                                <td>{{$employee->name}}</td>
                                                                <td>{{$employee->mobile}}</td>
                                                                <td>{{$employee->email}}</td>
                                                                <td>{{$employee->address}}</td>
                                                                <td>{{$employee->salary}}</td>
                                                                <td>{{$employee->account_no}}</td>
                                                                
                                                                <td>
                                                                <form action="{{route('employees.destroy',$employee->id)}}" method="post">
                                                                    <div class="btn-group" role="group">
                                                                        <a href="{{route('employees.edit',$employee->id)}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-original-title="Edit" class="btn btn-light " style="color: green;"><i class="fas fa-edit"></i></a><a>
                                                                        </a><a href="{{route('employees.show',$employee->id)}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Show" data-original-title="Details" class="btn btn-light text-info"><i class="fas fa-search-plus"></i></a><a>
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
                                                                <th class="row">
                                                                {{$employees->links()}}
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
</div>




         @endsection