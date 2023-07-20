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
                    <button type="button" class="btn btn mt-1" style="background-color: #00a7c7;color:aliceblue">Purchase</button><br>


                  </h2>
                  <small class="float-right">Date: <?php echo date("d M Y") ?></small>
                </div>
                <hr style="border: 5px; color:#00a7c7">
                <!-- /.col -->
              </div>

              <!-- info row -->
              <div class="row invoice-info" style="font-size:16px;">
                <div class="col-sm-3 invoice-col">
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
                <div class="col-sm-3 invoice-col">
                  Supplier
                  <address>
                    <select id="cmbSupplier" name="supplier_id">
                      @foreach($suppliers as $supplier)
                      <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                      @endforeach
                    </select>

                    <div id="supplier-mobile"></div>

                  </address>

                  <div>
                    <label for="example-textarea" class="form-label">Shipping Address</label>
                    <textarea class="form-control" id="example-textarea" rows="5" style="height:80px;"></textarea>
                  </div>

                </div>
                <!-- /.col -->
                <!-- /.col -->
                <div class="col-sm-2 invoice-col">
                  Warehouse
                  <address>
                    <select id="cmbWarehouse" name="warehouse_id">
                      @foreach($warehouses as $warehouse)
                      <option value="{{$warehouse->id}}">{{$warehouse->name}}</option>
                      @endforeach
                    </select>

                    <div id="warehouse-mobile"></div>

                  </address>

                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">

                  <table>
                    <!-- <tr>
                      <td><b><i class="fa fa-circle  text-xs mr-1" style="color:#00a7c7"></i> Purchase ID:</b></td>
                      <td><input type="text" style="width:60px" value="" readonly /></td>
                    </tr> -->
                    <tr>
                      <td><b><i class="fa fa-circle  text-xs mr-1" style="color:#00a7c7"></i> Purchase D:</b></td>
                      <td><input type="text" style="width:150px" id="txtPurchaseDate" value=<?php echo date("d-m-Y"); ?> /></td>
                    </tr>
                    <tr>
                      <td><b><i class="fa fa-circle  text-xs mr-1" style="color:#00a7c7"></i> Delivery D:</b></td>
                      <td><input type="text" style="width:150px" id="txtDeliveryDate" value=<?php echo date("d-m-Y"); ?> /></td>
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
                        <th>Material</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Uom</th>                        
                        <th>Discount</th>
                        <th>Subtotal</th>



                        <th><input type="button" id="clearAll" value="Clear" /></th>
                      </tr>
                      <tr>
                        <th></th>
                        <th>
                          <select id="cmbMaterial" name="material_id" style="width: 150px;">
                            @foreach($materials as $material)
                            <option value="{{$material->id}}">{{$material->name}}</option>
                            @endforeach
                          </select>
                        </th>
                        <th><input type="text" id="txtPrice" style="width: 150px;" /></th>
                        <th><input type="text" id="txtQty" style="width: 150px;" /></th>
                        <th>
                        <select id="cmbUom" name="uom_id" style="width: 150px;">
                            @foreach($uoms as $uom)
                            <option value="{{$uom->id}}">{{$uom->name}}</option>
                            @endforeach
                          </select>

                        </th>
                        
                        <th><input type="text" id="txtDiscount" style="width: 150px;" /></th>

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
                        <tr>
                          <th>Subtotal:</th>
                          <td id="sub-total">0</td>
                        </tr>
                        <tr>
                        <th>Tax (5%)</th>
                        <td id="tax">0</td>
                      </tr>
                        <tr>
                          <th>Total:</th>
                          <td id="net-total">0</td>
                        </tr>

                        <tr>
                        <th>Paid:</th>
                        <td><input type="text" id="txtPaid" style="width: 120px;" /></td>
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
                    <button type="button" id="btnProcessOrder" class="btn btn float-right" style="background-color:#00a7c7;color:aliceblue"><i class="far fa-credit-card"></i>Save</button>

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
      $(function(){

        printCart();

        $("#btnProcessOrder").on("click",function(){

          let supplier_id=$("#cmbSupplier").val();
          console.log(supplier_id);
          var token = $("input[name='_token']").val();
          
          var method = $("input[name='_method']").val(); 
          
          let shipping_address=$("#example-textarea").val();
          
          let purchase_date=$("#txtPurchaseDate").val();
          
          let delivery_date=$("#txtDeliveryDate").val();
          
          let warehouse_id=$("#cmbWarehouse").val();
          
          let purchase_total=$("#net-total").text();
          
          let remark=$("#txtRemark").val();
          
          let paid_amount=$("#txtPaid").val();
          
          
          
          let purchase=JSON.parse(localStorage.getItem("cart"));
          

          $.ajax({
             url:"{{url('purchases')}}",
             type:"POST",
             data:{
              _token:token,
              _method:method,
              'txtsupplier':supplier_id,
              'txtshipping':shipping_address,
              'txtpurchasedate':purchase_date,
              'txtdeliverydate':delivery_date,
              'txtwarehouse':warehouse_id,
              'txtpurchasetotal':purchase_total,
              'txtremark':remark,
              'txtpaidamount':paid_amount,
              
              'textpurchase':purchase
             },
             success:function(res){
              clearCart();
              $("#items").html("");
            }
          });


        });

      
      $("#cmbSupplier").on("change", function() {

        $.ajax({
          url: "<?php echo url("getsupplier")?>",
          type: "GET",
          data: {
            "id": $(this).val()
          },
          success:function(res) {
            console.log(res);
            let supplier = JSON.parse(res);
             
            $("#supplier-mobile").html("<b>Mobile:</b>" + supplier.mobile);
          }
        });

      });


      $("#cmbWarehouse").on("change", function() {

        $.ajax({
          url: "<?php echo url("getwarehouse")?>",
          type: "GET",
          data: {
            "id": $(this).val()
          },
          success:function(res) {
            console.log(res);
            let warehouse = JSON.parse(res);
             
            $("#warehouse-mobile").html("<b>Mobile:</b>" + warehouse.mobile);
          }
        });

      });

      $("#btnAddToCart").on("click",function(){

        AddtoCart();

      })

      $("body").on("click",".delete",function(){
        let id=$(this).data("id");
        delItem(id);
        printCart();

      })

      $("#clearAll").on("click",function(){
        clearCart();
        printCart();
      })


      function AddtoCart(){
        let item_id=$("#cmbMaterial").val();
        let name=$("#cmbMaterial option:selected").text();
        let price=$("#txtPrice").val();
        let qty=$("#txtQty").val();
        let uom_id=$("#cmbUom").val();
        let uname=$("#cmbUom option:selected").text();
        
        let discount=$("#txtDiscount").val();
        let total_discount=discount*qty;
        let subtotal=price*qty-total_discount;

        let item={
            'item_id':item_id,
            'name':name,
            'price':price,
            'qty':parseFloat(qty),
            'uom_id':uom_id,
            'uname':uname,
            "discount":discount,
            'total_discount':total_discount,
            "subtotal":subtotal

        }

        save(item);
        printCart();

      }

      function printCart(){
        
          let cart= getCart();            
           let sn=1;          
           let $bill="";  
           let subtotal=0;
           $.each(cart,function(i,item){
                //console.log(item.name);
             subtotal+=item.price*item.qty-item.discount;
             let $html="<tr>";            
             $html+="<td>";
             $html+=sn;
             $html+="</td>";
             $html+="<td>";
             $html+=item.name;
             $html+="</td>";
             $html+="<td data-field='price'>";
             $html+=item.price;
             $html+="</td>";
             $html+="<td data-field='qty'>";
             $html+=item.qty;
             $html+="</td>";
             $html+="<td data-field='uname'>";
             $html+=item.uname;
             $html+="</td>";
             $html+="<td data-field='discount'>";
             $html+=item.total_discount;
             $html+="</td>";
             $html+="<td data-field='subtotal'>";
             $html+=item.subtotal;
             $html+="</td>";
             $html+="<td>";
             $html+="<input type='button' class='delete' data-id='"+item.item_id+"' value='-'/>";
             $html+="</td>";
             $html+="</tr>";
             $bill+=$html;
             sn++;
           });      
                      
           $("#items").html($bill); 

           //Order Summary
           $("#sub-total").html(subtotal);
           let tax=(subtotal*0.05).toFixed(2);
           $("#tax").html(tax);
           $("#net-total").html(parseFloat(subtotal)+parseFloat(tax));
        }



    });
    </script>

</form>
</div>
@endsection