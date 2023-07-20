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


                <!-- end row -->
                
                           
                
                                <section class="section">
                                    <div class="section-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card" style="margin-top: 20px;">
                                                    <div class="card-header bg-light" style="height: 70px;">
                                                        <div class="w-100 d-flex justify-content-between align-items-end">
                                                            <h4 class="color-primary">Edit Timesheets</h4>
                                                            <a href="{{'/timesheets'}}" class="btn btn rounded" style="background-color:#9370DB;color:azure"><i class="fas fa-wrench mr-1"></i> Manage Timesheet</a>
                                                        </div>
                                                    </div>

                                                    <form action="{{route('timesheets.update',$timesheet)}}" method="POST" >
                                                        @method('PUT')
                                                        @csrf
                                                        
                                                <div class="card-body">


                                                <div class="form-group row" style="padding-bottom: 10px;"><label class="col-sm-2 col-form-label">Project</label>
                                                         
                                                         <div class="col-sm-10">
                                                                                                                                              
                                                              <select name="project_id" id="cmbCountryId" class="form-control" style="height:50px">
                                                              @foreach($projects as $project)
                                                                  @if($project->id==$timesheet->project_id)
                                                                  <option value="{{$project->id}}" selected>
                                                                   {{$project->name}}
                                                                  </option>
                                                                  @else
                                                                  <option value="{{$project->id}}">
                                                                   {{$project->name}}
                                                                  </option>
                                                                  @endif                                                     
                                                                  @endforeach
                                                              </select>
                                                          
                                                         </div>
                                                          
                                                 </div>



                                                    <div class="form-group row" style="padding-bottom: 10px;"><label class="col-sm-2 col-form-label">Project Task</label>
                                                         
                                                        <div class="col-sm-10">
                                                                                                                                            
                                                            <select name="project_task_id" id="cmbCountryId" class="form-control" style="height:50px">
                                                            @foreach($project_tasks as $project_task)
                                                                @if($project_task->id==$timesheet->project_task_id)
                                                                <option value="{{$project_task->id}}" selected>
                                                                 {{$project_task->name}}
                                                                </option>
                                                                @else
                                                                <option value="{{$project_task->id}}">
                                                                 {{$project_task->name}}
                                                                </option>
                                                                @endif                                                     
                                                                @endforeach
                                                            </select>
                                                        
                                                        </div>
                                                        
                                                    </div>

                                                    <div class="form-group row" style="padding-bottom: 10px;"><label class="col-sm-2 col-form-label">Department</label>
                                                         
                                                        <div class="col-sm-10">
                                                                                                                                            
                                                            <select name="department_id" id="cmbCountryId" class="form-control" style="height:50px">
                                                            @foreach($departments as $department)
                                                                @if($department->id==$timesheet->department_id)
                                                                <option value="{{$department->id}}" selected>
                                                                 {{$department->name}}
                                                                </option>
                                                                @else
                                                                <option value="{{$department->id}}">
                                                                 {{$department->name}}
                                                                </option>
                                                                @endif                                                      
                                                                @endforeach
                                                            </select>
                                                        
                                                        </div>
                                                        
                                                    </div>
                                                    

                                                    <div class="form-group row" style="padding-bottom: 10px;"><label class="col-sm-2 col-form-label">Client</label>
                                                         
                                                        <div class="col-sm-10">
                                                                                                                                             
                                                             <select name="client_id" id="cmbCountryId" class="form-control" style="height:50px">
                                                            
                                                             @foreach($clients as $client)
                                                                 @if($client->id==$timesheet->client_id)
                                                                 <option value="{{$client->id}}" selected>
                                                                  {{$client->name}}
                                                                 </option>
                                                                 @else
                                                                 <option value="{{$client->id}}">
                                                                  {{$client->name}}
                                                                 </option>
                                                                 @endif                                                   
                                                                 @endforeach

                                                             </select>
                                                         
                                                        </div>
                                                         
                                                    </div>



                                                    <div class="form-group row" style="padding-bottom: 10px;"><label class="col-sm-2 col-form-label">Employee</label>
                                                         
                                                        <div class="col-sm-10">
                                                                                                                                             
                                                             <select name="employee_id" id="cmbCountryId" class="form-control" style="height:50px">
                                                             @foreach($employees as $employee)
                                                                 @if($employee->id==$timesheet->employee_id)
                                                                 <option value="{{$employee->id}}" selected>
                                                                  {{$employee->name}}
                                                                 </option>
                                                                 @else
                                                                 <option value="{{$employee->id}}">
                                                                  {{$employee->name}}
                                                                 </option>
                                                                 @endif                                                     
                                                                 @endforeach
                                                             </select>
                                                         
                                                        </div>
                                                         
                                                    </div>                                                  
                                                                        
                                                        
                            
                                                <div class="form-group row " style="padding-bottom: 10px;"><label for="txtPhone" class="col-sm-2 col-form-label">Start Time</label>
                                                    <div class="col-sm-10"><input type="text" class="form-control" name="start_times" id="txtPhone" value="{{$timesheet->start_times}}" placeholder="" style="height:50px"></div>
                                                </div>

                                                        
                                                <div class="form-group row " style="padding-bottom: 10px;"><label for="txtEmail" class="col-sm-2 col-form-label">End Time</label>
                                                    <div class="col-sm-10"><input type="text" class="form-control" name="end_times" id="txtEmail" value="{{$timesheet->end_times}}" placeholder="" style="height:50px"></div>
                                                </div>

                                                <div class="form-group row " style="padding-bottom: 10px;"><label for="txtAddress" class="col-sm-2 col-form-label">Break hour</label>
                                                    <div class="col-sm-10"><input type="text" class="form-control" name="break_hours" id="txtAddress" value="{{$timesheet->break_hours}}" placeholder="" style="height:50px"></div>
                                                </div>

                                                <div class="form-group row " style="padding-bottom: 10px;"><label for="txtAddress" class="col-sm-2 col-form-label">Regular Hour</label>
                                                    <div class="col-sm-10"><input type="text" class="form-control" name="regular_hours" id="txtAddress" value="{{$timesheet->regular_hours}}" placeholder="" style="height:50px"></div>
                                                </div>

                                                <div class="form-group row " style="padding-bottom: 10px;"><label for="txtAddress" class="col-sm-2 col-form-label">Overtime Hour</label>
                                                    <div class="col-sm-10"><input type="text" class="form-control" name="overtime_hours" id="txtAddress" value="{{$timesheet->overtime_hours}}" placeholder="" style="height:50px"></div>
                                                </div>

                                                <div class="form-group row " style="padding-bottom: 10px;"><label for="txtAddress" class="col-sm-2 col-form-label">Sick Day</label>
                                                    <div class="col-sm-10"><input type="checkbox" class="form-check-input" name="txtsickdays" id="" value="1" placeholder="" style="height:30px;width:30px;"></div>
                                                </div>

                                                <div class="form-group row " style="padding-bottom: 10px;"><label for="txtAddress" class="col-sm-2 col-form-label">IsPresent</label>
                                                    <div class="col-sm-10"><input type="checkbox" class="form-check-input" name="txtPresent" id="" value="1" placeholder="" style="height:30px;width:30px;"></div>
                                                </div>
                                                <div class="form-group row " style="padding-bottom: 10px;"><label for="txtAddress" class="col-sm-2 col-form-label">Date</label>
                                                    <div class="col-sm-10"><input type="date" class="form-control" name="txtDate" id="" value="" placeholder="" style="height:50px"></div>
                                                </div>

                                                </div>
                                                        <div class="card-footer border-top">
                                                            <input type="submit" value="Update" name="btnCreate" id="btnCreate" class="btn btn" style="background-color:#9370DB;color:azure">
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                           

@endsection