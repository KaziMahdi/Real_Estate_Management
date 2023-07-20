@extends('layout.erp.master')

@section('style')

@endsection


@section('content')

<form action="/payrols" method="post">

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
                                        <button type="button" class="btn btn mt-1" style="background-color: #00a7c7;color:aliceblue">Payrol Form</button><br>
                                    </h2>
                                    <small class="float-right">Date: <?php echo date("d M Y") ?></small>
                                </div>
                                <hr style="border: 5px; color:#00a7c7">
                                <!-- /.col -->
                            </div>

                            <!-- info row -->
                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                    <b>Employee</b>

                                    <select id="cmbEmployee" name="employee_id" style="width:150px;margin-left:15px;margin-bottom:3px;">
                                        @foreach($employees as $employee)
                                        <option value="{{$employee->id}}">{{$employee->name}}</option>
                                        @endforeach
                                    </select><br>
                                    <!-- <div id="employee-mobile"></div> -->
                                    <b>Department</b>
                                    <input type="text" id="txtDepertMent" style="width:150px;margin-bottom:3px" /><br>
                                    <b>Salary</b>
                                    <input type="text" id="txtSalary" style="width:150px; margin-left:38px;" />



                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    <address style="text-align: center;">
                                        <b>Month</b>

                                        <select id="cmbMonth" name="month_id" style="width:150px;margin-left:15px;margin-bottom:3px;">
                                            @foreach($months as $month)
                                            <option value="{{$month->id}}">{{$month->name}}</option>
                                            @endforeach
                                        </select>


                                    </address>

                                </div>
                                <!-- /.col -->
                                <!-- /.col -->

                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">

                                    <table>

                                        <tr>
                                            <td><b><i class="  text-xs mr-1"></i> Pay Date:</b></td>
                                            <td><input type="text" style="width:150px" id="txtPayDate" value=<?php echo date("d-m-Y"); ?> /></td>
                                        </tr>
                                        <tr>
                                            <td><b><i class="  text-xs mr-1"></i>Account No:</b></td>
                                            <td><input type="text" style="width:150px" id="txtAccount" value="" /></td>
                                        </tr>
                                        <tr>
                                            <td><b><i class="  text-xs mr-1"></i>Designation:</b></td>
                                            <td><input type="text" style="width:150px" id="txtDesignation" value="" /></td>
                                        </tr>

                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- Table row -->
                            <div class="row" style="margin-top:30px;">
                                <div class="col-12 table-responsive">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h1 class="header-title text-center">Earnings</h1>


                                                    <div class="mb-3">
                                                        <label class="form-label">House Rent</label>
                                                        <input type="text" id="txtHouserent" class="form-control" placeholder="">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">Medicale Allowance</label>
                                                        <input type="text" id="txtMedical" class="form-control" placeholder="">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">Transport</label>
                                                        <input type="text" id="txtTransport" class="form-control" placeholder="">
                                                    </div>


                                                </div>
                                            </div> <!-- end card-->
                                        </div> <!-- end col -->

                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h1 class="header-title text-center">Deducations</h1>


                                                    <div class="mb-3">
                                                        <label class="form-label">Provident Fund</label>
                                                        <input type="text" id="txtProventfund" class="form-control" placeholder="">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">Income Tax</label>
                                                        <input type="text" id="txtIncome" class="form-control" placeholder="">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">Insurance</label>
                                                        <input type="text" id="txtInsurance" class="form-control" placeholder="">
                                                    </div>

                                                </div>
                                            </div> <!-- end card-->
                                        </div> <!-- end col -->
                                    </div>
                                </div>


                            </div>
                            <button type="button" id="btnAddToCart" class="btn btn-primary float-end">Add</button>

                            <input type="button" id="clearAll" class="btn btn-success" value="Clear" />


                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">



                                            <div class="row">
                                                <table>
                                                    <tr>

                                                        <th>SN</th>
                                                        <th>Basic Salary</th>
                                                        <th>House Rent</th>
                                                        <th>Medical Allowance</th>
                                                        <th>Transport</th>
                                                        <th>Provident Fund</th>
                                                        <th>Income Tax</th>
                                                        <th>Insurance</th>

                                                    </tr>
                                                    <tbody id="items">

                                                    </tbody>
                                                </table>

                                            </div> <!-- end row-->
                                        </div>
                                    </div> <!-- end card-->
                                </div> <!-- end col -->
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
                                                <tr>
                                                    <th>Earning Total:</th>
                                                    <td id="earningtotal">0</td>
                                                </tr>
                                                <tr>
                                                    <th>Deducation Total</th>
                                                    <td id="deducation">0</td>
                                                </tr>
                                                <tr>
                                                    <th>Net Total Salary:</th>
                                                    <td id="net-total">0</td>
                                                </tr>




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



                // printCart();


                $("#btnProcessOrder").on("click", function() {
                    let employee_id = $("#cmbEmployee").val();

                    let department_id = $("#txtDepertMent").val();

                    let remark = $("#txtRemark").val();
                    let month_id=$("#cmbMonth").val();

                    var token = $("input[name='_token']").val();
                    var method = $("input[name='_method']").val();

                    let salary = $("#txtSalary").val();

                    let designation_id = $("#txtDesignation").val();

                    let account_no = $("#txtAccount").val();

                    let pay_date = $("#txtPayDate").val();


                    let payrols_salary = JSON.parse(localStorage.getItem("cart"));

                    console.log(payrols_salary);
                    $.ajax({

                        url: "{{route('payrols.store')}}",
                        type: "POST",
                        data: {
                            _token: token,
                            _method: method,
                            'textemployee': employee_id,
                            'txtDepartment': department_id,
                            'txtmonth':month_id,
                            'txtsalary': salary,
                            'txtdesignation': designation_id,
                            'txtaccount_no': account_no,
                            'txtremark': remark,
                            'txtPaydate': pay_date,

                            'txtpayrols': payrols_salary
                        },
                        success: function(res) {

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
                            $("#txtDepertMent").val(employee.department_id)
                            $("#txtSalary").val(employee.salary)
                            $("#txtAccount").val(employee.account_no)
                            $("#txtDesignation").val(employee.designation_id)
                            $("#txtHouserent").val(employee.salary * employee.house_rent)
                            $("#txtMedical").val(employee.salary * employee.medicale_allowance)
                            $("#txtTransport").val(employee.salary * employee.transport_allowance)
                            $("#txtProventfund").val(employee.salary * employee.provident_fund)
                            $("#txtIncome").val(employee.salary * employee.income_tax)
                            $("#txtInsurance").val(employee.salary * employee.insurance)
                        }


                    });
                });

                // $("#cmbMaterial").on("change", function() {
                //     $.ajax({
                //         url: "<?php echo url("getmaterial") ?>",
                //         type: "GET",
                //         data: {
                //             "id": $(this).val()
                //         },
                //         success: function(res) {
                //             let material = JSON.parse(res)
                //             $("#txtUom").val(material.uom_id)
                //         }
                //     });
                // });


                $("#btnAddToCart").on("click", function() {

                    AddtoCart();
                })

                // $("body").on("click", ".delete", function() {
                //     let id = $(this).data("id");
                //     delItem(id);
                //     printCart();

                // })

                $("#clearAll").on("click", function() {
                    clearCart();
                    printCart();
                })


                function AddtoCart() {

                    let item_id = $("#txtHouserent").val();

                    let basic_salary = $("#txtSalary").val();

                    let medicale = $("#txtMedical").val();
                    let transport = $("#txtTransport").val();
                    let provident = $("#txtProventfund").val();
                    let income = $("#txtIncome").val();
                    let insurance = $("#txtInsurance").val();
                    let earning_total = Number(item_id) + Number(medicale) + Number(transport);
                    let deducation_total = Number(provident) + Number(income) + Number(insurance);


                    let item = {
                        'item_id': item_id,
                        'basic': basic_salary,
                        'medicale': medicale,
                        'transport': transport,
                        'provident': provident,
                        'income': income,
                        'insurance': insurance,
                        'earningtotal': earning_total,
                        'deducation_total': deducation_total

                    }
                    // console.log(item);
                    save(item);
                    printCart();

                }

                function printCart() {

                    let cart = getCart();
                    let sn = 1;
                    let $bill = "";
                    let earningtotal = 0;
                    let deducationtotal = 0;
                    let nettotal = 0;
                    $.each(cart, function(i, item) {
                        //console.log(item.name);
                        earningtotal += Number(item.item_id) + Number(item.medicale) + Number(item.transport);
                        deducationtotal += Number(item.provident) + Number(item.income) + Number(item.insurance);
                        nettotal = item.basic;
                        let $html = "<tr>";
                        $html += "<td>";
                        $html += sn;
                        $html += "</td>";
                        $html += "<td>";
                        $html += item.basic;
                        $html += "</td>";
                        $html += "<td>";
                        $html += item.item_id;
                        $html += "</td>";
                        $html += "<td data-field='medicale'>";
                        $html += item.medicale;
                        $html += "</td>";
                        $html += "<td data-field='transport'>";
                        $html += item.transport;
                        $html += "</td>";
                        $html += "<td data-field='provident'>";
                        $html += item.provident;
                        $html += "</td>";
                        $html += "<td data-field='income'>";
                        $html += item.income;
                        $html += "</td>";
                        $html += "<td data-field='insurance'>";
                        $html += item.insurance;
                        $html += "</td>";
                        $html += "<td>";
                        $html += "<input type='button' class='delete' data-id='" + item.item_id + "' value='-'/>";
                        $html += "</td>";
                        $html += "</tr>";
                        $bill += $html;
                        sn++;
                    });

                    $("#items").html($bill);
                    $("#earningtotal").html(earningtotal);

                    $("#deducation").html(deducationtotal);
                    $("#net-total").html(parseFloat(nettotal) + parseFloat(earningtotal) - parseFloat(deducationtotal));




                }

            });
        </script>

</form>
</div>
@endsection