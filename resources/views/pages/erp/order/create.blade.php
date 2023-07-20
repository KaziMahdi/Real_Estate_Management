@extends('layout.erp.master')

@section('style')

@endsection


@section('content')

<form action="/orders" method="post">
@method('POST')
@csrf

<div style="margin:8% 0 10% 20%;border:1px solid #9370DB;box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;">
   

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
                <i class="fas fa-globe"></i> Kazi-SHOP
                <!-- <small class="float-right">Date: <?php echo date("d M Y") ?></small> -->
              </h2>
            </div>
            <hr style="border: 5px; color:#9370DB">
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
              Customer
              <address>
                <input type="text" id="txtPrice" style="width:150px"/>
                 
                <div id="customer-info"></div>

              </address>
              <div>
                Shipping Address:<br>
                <textarea id="txtShippingAddress" style="width:200px;height:50px" ></textarea>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col" >

              <table>
                <tr>
                <td><b><i class="fa fa-circle  text-xs mr-1" style="color:#9370DB"></i> Order ID:</b></td>
                  <td><input type="text" style="width:60px" value="<?php  ?>" readonly /></td>
                </tr>
                <tr>
                  <td><b><i class="fa fa-circle  text-xs mr-1" style="color:#9370DB"></i> Order Date:</b></td>
                  <td><input type="text" style="width:150px" id="txtOrderDate" value=<?php echo date("d-m-Y"); ?> /></td>
                </tr>
                <tr>
                  <td><b><i class="fa fa-circle  text-xs mr-1" style="color:#9370DB"></i> Due Date:</b></td>
                  <td><input type="text" style="width:150px" id="txtDueDate" value=<?php echo date("d-m-Y"); ?> /></td>
                </tr>
              </table>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <!-- Table row -->
          <div class="row" style="font-size:medium;margin-top:30px;background-color:#9370DB;">
            <div class="col-12 table-responsive">
              <table class="table table-striped" style="color:aliceblue">
                <thead>
                  <tr>
                    <th>SN</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Discount</th>
                    <th>Subtotal</th>
                    <th><input type="button" id="clearAll" value="Clear" /></th>
                  </tr>
                  <tr>
                    <th></th>
                    <th>
                    <input type="text" id="txtProduct" style="width: 150px;" />
                    </th>
                    <th><input type="text" id="txtPrice" style="width: 150px;"/></th>
                    <th><input type="text" id="txtQty" style="width: 150px;"/></th>
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
                      <th style="width:50%">Subtotal:</th>
                      <td id="subtotal">0</td>
                    </tr>


                    <tr>
                      <th>Total:</th>
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
            <div class="col-12" >
              <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-primary"><i class="fas fa-print"></i> Print</a>
              <div style="float: right;">
              <button type="button" id="btnProcessOrder" class="btn btn float-right" style="background-color:#9370DB;color:aliceblue"><i class="far fa-credit-card"></i> Process Order </button>
              <button type="button" class="btn btn float-right" style="margin-right: 5px;background-color:#FF9900;color:aliceblue">
                <i class="fas fa-download"></i> Generate PDF
              </button>
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

    const cart = new Cart("order");

    printCart();

    //Show calander in textbox
    $("#txtOrderDate").datepicker({
      dateFormat: 'dd-mm-yy'
    });
    $("#txtDueDate").datepicker({
      dateFormat: 'dd-mm-yy'
    });


    //Save into database table
    $("#btnProcessOrder").on("click", function() {

      let customer_id = $("#cmbCustomer").val();
      let order_date = $("#txtOrderDate").val();
      let due_date = $("#txtDueDate").val();
      let discount = 0;
      let vat = 0;
      let shipping_address = $("#txtShippingAddress").val();
      let remark = $("#txtRemark").val();
      let order_total = $("#net-total").text();

      let products = cart.getCart();

      $.ajax({
        url: 'api/orderapi/save',
        type: 'POST',
        data: {
          "customer_id": customer_id,
          "order_date": order_date,
          "delivery_date": due_date,
          "shipping_address": shipping_address,
          "discount": discount,
          "vat": vat,
          "remark": remark,
          "order_total": order_total,
          "products": products
        },
        success: function(res) {
          console.log(res);
          cart.clearCart();
          $("#items").html("");
        }
      });

    });


    //Show customer other information
    $("#cmbCustomer").on("change", function() {
      $.ajax({
        url: 'api/CustomerApi/find',
        type: 'GET',
        data: {
          "id": $(this).val()
        },
        success: function(res) {
          let data = JSON.parse(res);
         // console.log(data.customer);
          let customer = data.customer;

          $("#customer-info").html(customer.mobile + "<br>" + customer.email);
        }
      });
    }); //    

    //Show customer other information
    $("#cmbProduct").on("change", function() {

      $.ajax({
        url: 'api/productapi/find',
        type: 'GET',
        data: {
          "id": $(this).val()
        },
        success: function() {
          let data = JSON.parse(res);
          let product=data.product;

          $("#txtPrice").val(product.offer_price);
          $("#txtQty").val(1);
        }
      });

    }); //  


    //Add item to bill temporarily       


    $("#btnAddToCart").on("click", function() {

      let item_id = $("#cmbProduct").val();
      let name = $("#cmbProduct option:selected").text();

      let price = $("#txtPrice").val();
      let qty = $("#txtQty").val();
      let discount = $("#txtDiscount").val();

      let total_discount = discount * qty;
      let subtotal = price * qty - total_discount;

      let item = {
        "name": name,
        "item_id": item_id,
        "price": price,
        "qty": parseFloat(qty),
        "discount": discount,
        'total_discount': total_discount,
        "subtotal": subtotal
      };

      cart.save(item);

      printCart();

    });

    $("body").on("click", ".delete", function() {
      let id = $(this).data("id");
      cart.delItem(id)
      printCart();
    });

    $("#clearAll").on("click", function() {
      cart.clearCart();
      printCart();
    });


    //------------------Cart Functions----------//     


    function printCart() {

      let orders = cart.getCart();
      let sn = 1;
      let $bill = "";
      let subtotal = 0;

      if (orders != null) {

        orders.forEach(function(item, i) {
          //console.log(item.name);
          subtotal += item.price * item.qty - item.discount;
          
          let $html = "<tr>";
          $html += "<td>";
          $html += sn;
          $html += "</td>";
          $html += "<td>";
          $html += item.name;
          $html += "</td>";
          $html += "<td data-field='price'>";
          $html += item.price;
          $html += "</td>";
          $html += "<td data-field='qty'>";
          $html += item.qty;
          $html += "</td>";
          $html += "<td data-field='discount'>";
          $html += item.total_discount;
          $html += "</td>";
          $html += "<td data-field='subtotal'>";
          $html += item.subtotal;
          $html += "</td>";
          $html += "<td>";
          $html += "<input type='button' class='delete' data-id='" + item.item_id + "' value='-'/>";
          $html += "</td>";
          $html += "</tr>";
          $bill += $html;
          sn++;
        });
      }

      $("#items").html($bill);

      //Order Summary
      $("#subtotal").html(subtotal);
      let tax = (subtotal * 0.05).toFixed(2);
      $("#tax").html(tax);
      $("#net-total").html(parseFloat(subtotal) + parseFloat(tax));
    }



  });
</script>

</form>
</div>
@endsection