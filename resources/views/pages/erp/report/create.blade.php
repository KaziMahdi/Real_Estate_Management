@extends('layout.erp.master')

@section('style')

@endsection


@section('content')

<form action="/orders" method="post">
  @method('POST')
  @csrf

  <div style="margin:8% 0 10% 20%;border:2px solid #348CD4;box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;">


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

                    <button class="btn btn-primary mt-1">Progress Sheet</button>
                  </h2>
                  <small class="float-right">Date: <?php

                                                    use App\Models\Report;

                                                    echo date("d M Y") ?></small>
                </div>
                <hr style="border: 5px; color:#348CD4">
                <!-- /.col -->
              </div>

              <!-- info row -->
              <div class="row invoice-info" style="font-size:16px;">
                <div class="col-sm-4 invoice-col">

                  <address>
                    <strong>KAZI, Inc.</strong><br>
                    House:12, Road:1<br>
                    Block:E<br>
                    Mobile: 01518389862<br>
                    Email: mdkazimahdi@gmail.com
                  </address>
                </div>
                <!-- /.col -->

                <div class="col-sm-4 invoice-col">
                  <strong>From</strong><br>
                  Manager
                  <address>
                    <select id="cmbEmployee" name="cmbEmployee">
                      @foreach($employees as $employee)
                      <option value="{{$employee->id}}">{{$employee->name}}</option>
                      @endforeach
                    </select>

                    <div class="employee-mobile"></div>

                  </address>

                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">

                  <table>
                    <!-- <tr>
                      <td><b><i class="fa fa-circle  text-xs mr-1" style="color:#348CD4"></i> Report ID:</b></td>
                      <td><input type="text" style="width:60px" value="" readonly /></td>
                    </tr> -->
                    <tr>
                      <td><b><i class="fa fa-circle  text-xs mr-1" style="color:#348CD4"></i> Report Date:</b></td>
                      <td><input type="text" style="width:150px" id="txtReoportDate" value=<?php echo date("d-m-Y"); ?> /></td>
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
              <div class="row" style="font-size:medium;margin-top:30px;background-color:#348CD4;">
                <div class="col-12 table-responsive">
                  <table class="table table-striped" style="color:aliceblue">
                    <thead>
                      <tr>
                        <th>SN</th>
                        <th>Project</th>
                        <th>Location</th>
                        <th>Completed Work</th>
                        <th>Remaining Work</th>

                        <th><input type="button" id="clearAll" value="Clear" /></th>
                      </tr>
                      <tr>
                        <th></th>
                        <th>
                          <select id="cmbProject" name="project_id" style="width: 150px;">
                            @foreach($projects as $project)
                            <option value="{{$project->id}}">{{$project->name}}</option>
                            @endforeach
                          </select>
                        </th>
                        <th><input type="text" id="txtLocation" style="width: 150px;" /></th>
                        <th><input type="text" id="txtCompleted" style="width: 150px;" /></th>
                        <th><input type="text" id="txtremaining" style="width: 150px;" /></th>

                        <th></th>
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
                  <strong>Remark</strong><br>
                  <textarea id="txtRemark" style="width: 150px;height:50px"></textarea>
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

                  <div style="float: right;">
                    <button type="button" id="btnProcessOrder" class="btn btn float-right" style="background-color:#348CD4;color:aliceblue"><i class="far fa-credit-card"></i>Save</button>

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

        //  $("#txtReoportDate").datepicker({dateFormat: 'dd-mm-yy'});


        printCart();


        $("#btnProcessOrder").on("click", function(e) {

          e.preventDefault();

          let employee_id = $("#cmbEmployee").val();
              // console.log(employee_id);
          var token = $("input[name='_token']").val();
          
          var method = $("input[name='_method']").val();
          let report_date = $("#txtReoportDate").val();
          // console.log(report_date);
          let remark = $("#txtRemark").val();
          // console.log(remark);
          let reports = JSON.parse(localStorage.getItem("cart"));

          // console.log(reports);

          $.ajax({
            url:"{{route('reports.store')}}",
            type:'POST',
            data:{
              _token:token,
              _method:method,
              "cmbEmployee":employee_id,
              "txtReoportDate":report_date,
              "txtRemark":remark,
              "txtReports":reports
            },
            success:function(res) {              
              // console.log(res);              
              clearCart();
              $("#items").html("");
            }
            
          });
        });

        // for employee 
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
              $(".employee-mobile").html("Mobile:" + employee.mobile);
            }



          });

        });

        // for project

        $("#cmbProject").on("change", function() {

          $.ajax({
            url: "<?php echo url("getproject") ?>",
            type: "GET",
            data: {
              "id": $(this).val()
            },
            success: function(res) {
              let project = JSON.parse(res);
              // console.log(project);
              $("#txtLocation").val(project.location);
            }
          });

        });

        // for Add to cart

        $("#btnAddToCart").on("click", function() {

          Addtocart();

        })

        $("body").on("click", ".delete", function() {
          let id = $(this).data("id");
          delItem(id)
          printCart();
        });

        $("#clearAll").on("click", function() {
          clearCart();
          printCart();
        });

        function Addtocart() {

          let item_id = $('#cmbProject').val();
          let name = $('#cmbProject option:selected').text();
          let location = $('#txtLocation').val();
          let completed = $('#txtCompleted').val();
          let remaining = $('#txtremaining').val();

          let item = {

            'item_id': item_id,
            'name': name,
            'location': location,
            'completed': completed,
            'remaining': remaining

          };

          // console.log(item);
          save(item);
          printCart();

        }


        function printCart() {
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
            $html += "<td data-field='location'>";
            $html += item.location;
            $html += "</td>";
            $html += "<td data-field='completed'>";
            $html += item.completed;
            $html += "</td>";
            $html += "<td data-field='remaining'>";
            $html += item.remaining;
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