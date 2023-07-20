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
                                        <button type="button" class="btn btn mt-1" style="background-color: #00a7c7;color:aliceblue">Expenses</button><br>


                                    </h2>
                                    <small class="float-right">Date: <?php echo date("d M Y") ?></small>
                                </div>
                                <hr style="border: 5px; color:#00a7c7">
                                <!-- /.col -->
                            </div>

                            <!-- info row -->
                            <div class="row invoice-info" style="font-size:16px;">
                                <div class="col-sm-4 invoice-col">
                                    From
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
                                    Maneger
                                    <address>
                                        <select id="cmbEmployee" name="employee_id">
                                            @foreach($employees as $employee)
                                            <option value="{{$employee->id}}">{{$employee->name}}</option>
                                            @endforeach
                                        </select>

                                        <div id="employee-mobile"></div>

                                    </address>

                                </div>
                                <!-- /.col -->
                                <!-- /.col -->

                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">

                                    <table>
                                        <!-- <tr>
                                            <td><b><i class="fa fa-circle  text-xs mr-1" style="color:#00a7c7"></i> Expense ID:</b></td>
                                            <td><input type="text" style="width:60px" value="" readonly /></td>
                                        </tr> -->
                                        <tr>
                                            <td><b><i class="fa fa-circle  text-xs mr-1" style="color:#00a7c7"></i> Expense D:</b></td>
                                            <td><input type="text" style="width:150px" id="txtExpenseDate" value=<?php echo date("d-m-Y"); ?> /></td>
                                        </tr>
                                        <tr>
                                            <!-- <td><b><i class="fa fa-circle  text-xs mr-1" style="color:#00a7c7"></i> Delivery D:</b></td>
                      <td><input type="text" style="width:150px" id="txtDueDate" value=<?php echo date("d-m-Y"); ?> /></td> -->
                                        </tr>
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
                                                <th>Project</th>
                                                <th>Project Task</th>
                                                <th>Material</th>
                                                <th>Qty</th>
                                                <th>Uom</th>




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

                                                <th>
                                                    <select id="cmbProjectTask" name="project_task_id" style="width: 150px;">
                                                        @foreach($projectTasks as $projectTask)
                                                        <option value="{{$projectTask->id}}">{{$projectTask->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </th>
                                                <th>
                                                    <select id="cmbMaterial" name="Material_id" style="width: 150px;">
                                                        @foreach($materials as $material)
                                                        <option value="{{$material->id}}">{{$material->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </th>
                                                <th><input type="text" id="txtQty" style="width: 150px;" /></th>
                                                <th><input type="text" id="txtUom" style="width: 150px;" /></th>


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

                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- this row will not appear when printing -->
                            <div class="row no-print" style="font-size: medium;margin-top:20px">
                                <div class="col-12">
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



                $("#btnProcessOrder").on("click", function() {
                    let employee_id = $("#cmbEmployee").val();
                    let expense_date = $("#txtExpenseDate").val();
                    let remark = $("#txtRemark").val();
                    var token = $("input[name='_token']").val();

                    var method = $("input[name='_method']").val();

                    let expenseDetails=JSON.parse(localStorage.getItem("cart"));

                    $.ajax({

                        url:"{{url('expenses')}}",
                        type:"POST",
                        data:{
                        _token:token,
                        _method:method,
                        'textemployee':employee_id,
                        'txtexpensedate':expense_date,
                        'txtramark':remark,
                        'detailse':expenseDetails
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
                            $("#employee-mobile").html("<b>Mobile:</b>" + employee.mobile)
                        }


                    });
                });

                $("#cmbMaterial").on("change", function() {
                    $.ajax({
                        url: "<?php echo url("getmaterial") ?>",
                        type: "GET",
                        data: {
                            "id": $(this).val()
                        },
                        success: function(res) {
                            let material = JSON.parse(res)
                            $("#txtUom").val(material.uom_id)
                        }
                    });
                });


                $("#btnAddToCart").on("click", function() {

                    AddtoCart();
                })

                $("body").on("click", ".delete", function() {
                    let id = $(this).data("id");
                    delItem(id);
                    printCart();

                })

                $("#clearAll").on("click", function() {
                    clearCart();
                    printCart();
                })


                function AddtoCart() {

                    let item_id = $("#cmbProject").val();
                    let name = $("#cmbProject option:selected").text();
                    let project_task_id = $("#cmbProjectTask").val();
                    let pname = $("#cmbProjectTask option:selected").text();
                    let material_id = $("#cmbMaterial").val();
                    let mname = $("#cmbMaterial option:selected").text();
                    let qty = $("#txtQty").val();
                    let uom_id = $("#txtUom").val();


                    let item = {
                        'item_id': item_id,
                        'name': name,
                        'pt_id': project_task_id,
                        'pname': pname,
                        'm_id': material_id,
                        'mname': mname,
                        'qty': parseFloat(qty),
                        'u_id': uom_id
                    }

                    save(item);
                    printCart();

                }

                function printCart() {

                    let cart = getCart();
                    let sn = 1;
                    let $bill = "";

                    $.each(cart, function(i, item) {
                        //console.log(item.name);

                        let $html = "<tr>";
                        $html += "<td>";
                        $html += sn;
                        $html += "</td>";
                        $html += "<td>";
                        $html += item.name;
                        $html += "</td>";
                        $html += "<td data-field='pname'>";
                        $html += item.pname;
                        $html += "</td>";
                        $html += "<td data-field='mname'>";
                        $html += item.mname;
                        $html += "</td>";
                        $html += "<td data-field='qty'>";
                        $html += item.qty;
                        $html += "</td>";
                        $html += "<td data-field='uom_id'>";
                        $html += item.u_id;
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