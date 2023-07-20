@extends('layout.erp.master')

@section('style')

@endsection


@section('content')

<form action="/orders" method="post">
  @method('POST')
  @csrf

  <div style="margin:8% 0 10% 20%;border:2px solid #00a7c7;box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;">


    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">



            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h2 style="text-align: center;">
                    <i class="fas fa-globe"></i> Kazi-Real Estate<br>
                    <button type="button" class="btn btn mt-1" style="background-color: #00a7c7;color:aliceblue">Project Plan</button><br>

                  </h2>
                  <small class="float-right">Date: <?php echo date("d M Y") ?></small>
                </div>

                <hr style="border: 5px; color:#00a7c7">
                <!-- /.col -->
              </div>

              <!-- info row -->
              <div class="row invoice-info" style="font-size:16px;">
                <div class="col-sm-6 invoice-col">
                  <table>
                    <tr>
                      <td><b><i class="fa fa-circle  text-xs mr-1" style="color:#00a7c7"></i> Project Name:</b></td>
                      <td>
                        <select id="cmbProject" name="project_id" style="width: 150px;">
                          @foreach($projects as $project)
                          <option value="{{$project->id}}">{{$project->name}}</option>
                          @endforeach
                        </select>
                      </td>

                    </tr>
                    

                    <!-- <tr>
                  <td><b><i class="fa fa-circle  text-xs mr-1" style="color:#9370DB"></i> Due Date:</b></td>
                  <td><input type="text" style="width:150px" id="txtDueDate" value=<?php echo date("d-m-Y"); ?> /></td>
                </tr> -->
                  </table>

                  <div id="project-information" style="color:#00a7c7" class="fa fa-circle  text-xs mr-1">

                  </div>
                  

                </div>
                <!-- /.col -->
                <!-- <div class="col-sm-4 invoice-col">
                  Manager
                  <address>
                    <select id="cmbEmployee" name="employee_id">
                      @foreach($employees as $employee)
                      <option value="{{$employee->id}}">{{$employee->name}}</option>
                      @endforeach
                    </select>

                    <div id="employee-mobile"></div>

                  </address>

                </div> -->
                <!-- /.col -->
                <div class="col-sm-6 invoice-col">

                  <table style="float: right;">
                    <tr>
                      <td><b><i class="fa fa-circle  text-xs mr-1" style="color:#00a7c7"></i> Start Time:</b></td>
                      <td><input type="date" id="txtStartTime" style="width:150px" value="" /></td>
                    </tr>
                    <tr>
                      <td><b><i class="fa fa-circle  text-xs mr-1" style="color:#00a7c7"></i> End Time:</b></td>
                      <td><input type="date" style="width:150px" id="txtEndTime" value="" /></td>
                    </tr>
                    <!-- <tr>
                  <td><b><i class="fa fa-circle  text-xs mr-1" style="color:#9370DB"></i> Due Date:</b></td>
                  <td><input type="text" style="width:150px" id="txtDueDate" value=<?php echo date("d-m-Y"); ?> /></td>
                </tr> -->
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row" style="font-size:medium;margin-top:30px;background-color:#00a7c7;">
                <div class="col-12 table-responsive">
                  <table class="table table-striped" style="color:aliceblue">
                    <thead>
                      <tr>
                        <th>SN</th>
                        <th>Employee</th>
                        <th>Designation</th>
                        <th>Task Name</th>
                        <th>Material</th>
                        <th>Brand</th>
                       





                        <th><input type="button" id="clearAll" value="Clear" /></th>
                      </tr>
                      <tr>
                        <th></th>
                        <th>
                          <select id="cmbEmployee" name="employee_id" style="width: 150px;">
                            @foreach($employees as $employee)
                            <option value="{{$employee->id}}">{{$employee->name}}</option>
                            @endforeach
                          </select>
                        </th>
                        <th><input type="text" id="txtDesigantion" style="width: 150px;" /></th>
                        <th>
                          <select id="cmbTask" name="task_id" style="width: 150px;">
                            @foreach($tasks as $task)
                            <option value="{{$task->id}}">{{$task->name}}</option>
                            @endforeach
                          </select>

                        </th>
                        <th>
                        <select id="cmbMaterial" name="material_id" style="width: 150px;">
                            @foreach($materials as $material)
                            <option value="{{$material->id}}">{{$material->name}}</option>
                            @endforeach
                          </select>

                        </th>
                        
                        <th><input type="text" id="txtbrand" style="width: 150px;" /></th>  
                        <th><input type="button" id="btnAddToCart" value=" + " /></th>
                      </tr>
                    </thead>
                    <tbody id="items">

                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row" style="margin-top: 30px;font-size:medium">
                <!-- accepted payments column -->
                <div class="col-6">

                </div>
                <!-- /.col -->
                <div class="col-6">


                  <div class="table-responsive">
                    <table class="table">
                      <tbody>




                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print" style="font-size: medium;margin-top:20px">
                <div class="col-12">
                  <!-- <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-success"><i class="fas fa-print"></i> Print</a> -->
                  <div style="float: right;">
                    <button type="button" id="btnProcessOrder" class="btn btn float-right" style="background-color:#00a7c7;color:aliceblue"><i class="far fa-credit-card"></i> Save </button>

                  </div>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <script>

      $(function() {


        printCart();


        $("#btnProcessOrder").on("click",function(e){
            e.preventDefault();

          let project_id=$("#cmbProject").val();

          var token = $("input[name='_token']").val();
          
          var method = $("input[name='_method']").val();

          let start=$("#txtStartTime").val();
          

          let end=$("#txtEndTime").val();
          
          let plans = JSON.parse(localStorage.getItem("cart"));
          console.log(plans);
          $.ajax({
            url:"{{url('projectplans')}}",
            type:'POST',
            data:{
              _token:token,
              _method:method,
              "cmbProject":project_id,
              "txtStartTime":start,
              "txtEndTime":end,
              "txtplans":plans
            },
            success:function(res){
              clearCart();
              $("#items").html("");
            }
          });

        });

        $("#cmbEmployee").on("change", function() {

          $.ajax({
            url: "<?php echo url("getemployee") ?>",
            type: 'GET',
            data: {
              "id": $(this).val()
            },
            success: function(res) {
              let employee = JSON.parse(res);
              // console.log(employee);
              $("#txtDesigantion").val(employee.designation_id);
            }


          });

        });
      
        $("#cmbProject").on("change", function() {

          $.ajax({
            url: "<?= url("getproject") ?>",
            type: "GET",
            data: {
              "id": $(this).val()
            },
            success: function(res) {
              let project = JSON.parse(res)
              $("#project-information").html("<b>Location:</b>" + project.location);
            }
          });
        });


        $("#cmbMaterial").on("change", function() {

          $.ajax({
            url: "<?= url("getmaterial") ?>",
            type: "GET",
            data: {
              "id": $(this).val()
            },
            success: function(res) {
              let material = JSON.parse(res)
              $("#txtbrand").val(material.is_brand);
            }
          });
        });
      

        $("#btnAddToCart").on("click",function(){

          Addtocart();

        })

        $("body").on("click",".delete", function(){
          let id=$(this).data("id");
          delItem(id)
          printCart();
        });

        $("#clearAll").on("click",function(){
          clearCart();
          printCart();
        })


        function Addtocart(){

          let item_id= $("#cmbEmployee").val();
          let name=$("#cmbEmployee option:selected").text();
          let designation=$("#txtDesigantion").val();
          let task_id=$("#cmbTask").val();
          let tname=$("#cmbTask option:selected").text();
          let material_id=$("#cmbMaterial").val();
          let mname=$("#cmbMaterial option:selected").text();
          let brand=$("#txtbrand").val();

          let item={
            'item_id':item_id,
            'name':name,
            'designation':designation,
            't_id':task_id,
            'tname':tname,
            'm_id':material_id,
            'mname':mname,
            'brand':brand
          }

          save(item)
          printCart();


        }

        function printCart(){
          let cart = getCart();
          let sn = 1;
          let $bill = "";
          $.each(cart, function(i, item) {


            let $html = "<tr>";
            $html += "<td>";
            $html += sn;
            $html += "</td>";
            $html += "<td>";
            $html += item.name;
            $html += "</td>";
            $html += "<td data-field='designation'>";
            $html += item.designation;
            $html += "</td>";
            $html += "<td data-field='task'>";
            $html += item.tname;
            $html += "</td>";
            $html += "<td data-field='material'>";
            $html += item.mname;
            $html += "</td>";
            $html += "<td data-field='brand'>";
            $html += item.brand;
            $html += "</td>";

            $html += "<td>";
            $html += "<input type='button' class='delete' data-id='" + item.item_id + "' value='-'/>";
            $html += "</td>";
            $html += "</tr>";
            $bill += $html;
            sn++;
          });

          $("#items").html($bill);
        }
     

        

      
    });
    </script>

</form>
</div>
@endsection