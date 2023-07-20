@extends('layout.erp.master')
@section('style')

@endsection
@section('content')

<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Digital Invoico</title>
    <link href="../must/images/logo/Fevicon.ico" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('must/css/custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('must/css/media-query.css')}}">
</head>
<body>
	<!--Invoice Wrap Start here -->
	<div class="invoice_wrap">
		<div class="invoice-container">
			<div class="invoice-content-wrap" id="download_section">
				<!--Header Start Here -->
				<header class="invoice-header back-img-invoice content-min-width" id="invo_header">
					<div class="invoice-logo-content">
						<div class="invoice-logo">
							<a href="restaurant_bill.html" class="logo"><img src="{{asset('must/images/logo/logo.png')}}" alt="this is a invoice logo"></a>
						</div>
						<div class="invo-head-content">
							<div class="invo-head-wrap">
								<div class="invo-num-title invo-no inter-700">Invoice No:</div>
								<div class="invo-num inter-400">#DI56789</div>
							</div>
							<div class="invo-head-wrap invoi-date-wrap">
								<div class="invo-num-title invo-date inter-700">Invoice Date:</div>
								<div class="invo-num inter-400">30/11/2022</div>
							</div>
						</div>
					</div>
					<div class="invoice-header-contact">
						<div class="invo-cont-wrap invo-contact-wrap">
							<div class="invo-social-icon">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_6_94)"><path d="M5 4H9L11 9L8.5 10.5C9.57096 12.6715 11.3285 14.429 13.5 15.5L15 13L20 15V19C20 19.5304 19.7893 20.0391 19.4142 20.4142C19.0391 20.7893 18.5304 21 18 21C14.0993 20.763 10.4202 19.1065 7.65683 16.3432C4.8935 13.5798 3.23705 9.90074 3 6C3 5.46957 3.21071 4.96086 3.58579 4.58579C3.96086 4.21071 4.46957 4 5 4" stroke="#00BAFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M15 7C15.5304 7 16.0391 7.21071 16.4142 7.58579C16.7893 7.96086 17 8.46957 17 9" stroke="#00BAFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M15 3C16.5913 3 18.1174 3.63214 19.2426 4.75736C20.3679 5.88258 21 7.4087 21 9" stroke="#00BAFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_6_94"><rect width="24" height="24" fill="white"/></clipPath></defs></svg>
							</div>
							<div class="invo-social-name">
								<a href="tel:+12345678899" class="invo-hedaer-contact inter-400">+1 234 567 8899</a>
							</div>
						</div>
						<div class="invo-cont-wrap">
							<div class="invo-social-icon">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_6_108)"><path d="M19 5H5C3.89543 5 3 5.89543 3 7V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V7C21 5.89543 20.1046 5 19 5Z" stroke="#00BAFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M3 7L12 13L21 7" stroke="#00BAFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_6_108"><rect width="24" height="24" fill="white"/></clipPath></defs></svg>
							</div>
							<div class="invo-social-name">
								<a href="mailto:contact@invoice.com" class="invo-hedaer-mail inter-400">contact@invoice.com</a>
							</div>
						</div>
					</div>
				</header>
				<!--Header End Here -->
				<!--Invoice content start here -->
				<section class="agency-service-content restaurant-invoice-content" id="restaurant_bill">
					<div class="container">
						<!--invoice owner name content -->
						<div class="invoice-owner-conte-wrap">
							<div class="invo-to-wrap">
								<div class="invoice-to-content">
									<p class="invo-to inter-700 medium-font mtb-0">Invoice To:</p>
									<h1 class="invo-to-owner inter-700 md-lg-font">Jordon Smith</h1>
									<p class="invo-owner-address medium-font inter-400 mtb-0">Phone: +1 562 563 8899 <br> Email: jordon123@mail.com</p>
								</div>
							</div>
							<div class="invo-pay-to-wrap">
								<div class="invoice-pay-content">
									<p class="invo-to inter-700 medium-font mtb-0">Pay To:</p>
									<h2 class="invo-to-owner inter-700 md-lg-font">Digital Invoico Restaurant</h2>
									<p class="invo-owner-address medium-font inter-400 mtb-0">4510 E Dolphine St, IN 3526<br> Hills Road, New York, USA</p>
								</div>
							</div>
						</div>
						<!--invoice owner name end here -->

						<!--Invoice Table Data Start here -->
						<div class="table-wrapper">
							<table class="invoice-table">
								<thead>
									<tr class="invo-tb-header">
										<th class="invo-table-title sno-wid inter-700 medium-font">S. No.</th>
										<th class="invo-table-title re-desc-wid inter-700 medium-font">Description</th>
										<th class="invo-table-title re-price-wid rate-title inter-700 medium-font">Price</th>
										<th class="invo-table-title re-qty-wid rate-title inter-700 medium-font">Qty</th>
										<th class="invo-table-title tota-wid inter-700 medium-font total-head">Total</th>
									</tr>
								</thead>
								<tbody class="invo-tb-body">
									<tr class="invo-tb-row">
										<td class="invo-tb-data">1</td>
										<td class="invo-tb-data">Easy Chicken Masala</td>
										<td class="invo-tb-data rate-data">$120</td>
										<td class="invo-tb-data rate-data">2</td>
										<td class="invo-tb-data total-data">$900.00</td>
									</tr>
									<tr class="invo-tb-row">
										<td class="invo-tb-data">2</td>
										<td class="invo-tb-data">Boiled Egg</td>
										<td class="invo-tb-data rate-data">$40</td>
										<td class="invo-tb-data rate-data">2</td>
										<td class="invo-tb-data total-data">$80.00</td>
									</tr>
									<tr class="invo-tb-row">
										<td class="invo-tb-data">3</td>
										<td class="invo-tb-data">Stuffed Strawberry</td>
										<td class="invo-tb-data rate-data">$80</td>
										<td class="invo-tb-data rate-data">1</td>
										<td class="invo-tb-data total-data">$80.00</td>
									</tr>
									<tr class="invo-tb-row">
										<td class="invo-tb-data">4</td>
										<td class="invo-tb-data">Paneer Tikka</td>
										<td class="invo-tb-data rate-data">$250</td>
										<td class="invo-tb-data rate-data">1</td>
										<td class="invo-tb-data total-data">$250.00</td>
									</tr>
									<tr class="invo-tb-row">
										<td class="invo-tb-data">5</td>
										<td class="invo-tb-data">Onion Pizza</td>
										<td class="invo-tb-data rate-data">$160</td>
										<td class="invo-tb-data rate-data">2</td>
										<td class="invo-tb-data total-data">$320.00</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!--Invoice Table Data End here -->

						<!--Invoice additional info start here -->
						<div class="invo-addition-wrap">
							<div class="invo-add-info-content">
								<h3 class="addi-info-title inter-700 medium-font">Additional Information:</h3>
								<p class="add-info-desc inter-400 mtb-0">A ut vitae nullam risus at. Justo enim nisi elementum ac. Massa molestie metus vitae ornare turpis donec odio sollicitudin. Ac ut tellus eu donec dictum risus blandit. Quam diam dictum amet.</p>
							</div>
							<div class="invo-bill-total">
								<table class="invo-total-table">
									<tbody>
										<tr>
											<td class="inter-700 medium-font b-text hotel-sub">Sub Total:</td>
											<td class="invo-total-data inter-400 medium-font second-color">$970.00</td>
										</tr>
										<tr class="tax-row">
											<td class="inter-700 medium-font b-text hotel-sub">Tax <span class="invo-total-data inter-700 medium-font second-color">(18%)</span></td>
											<td class="invo-total-data inter-400 medium-font second-color">$174.60</td>
										</tr>
										<tr class="disc-row bottom-border">
											<td class="inter-700 medium-font b-text hotel-sub">Discount</td>
											<td class="invo-total-data inter-400 medium-font discount-price">- $50.00</td>
										</tr>
										<tr class="invo-grand-total">
											<td class="inter-700 sm-text primary-color hotel-sub">Grand Total:</td>
											<td class="sm-text b-text invo-total-price">$1094.60</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!--Invoice additional info end here -->

						<!--Payment detail table start here -->
						<div class="rest-payment-bill">
							<div class="payment-wrap">
								<table class="res-pay-table">
								    <tbody>
								      <tr class="pay-data">
								        <td class="pay-type inter-700 medium-font b-text">Payment Details:</td>
								        <td class="refund-days inter-400 second-color">Credit Card **928</td>
								      </tr>
								      <tr class="pay-data">
								        <td class="pay-type inter-700 medium-font b-text">Date:</td>
								        <td class="refund-days inter-400 second-color">30/11/2022</td>
								      </tr>
								      <tr class="pay-data">
								        <td class="pay-type inter-700 medium-font b-text">Transaction ID:</td>
								        <td class="refund-days inter-400 second-color">TD23651456</td>
								      </tr>
								      <tr class="pay-data">
								        <td class="pay-type inter-700 medium-font b-text">Amount:</td>
								        <td class="refund-days inter-400 second-color">$1094.60</td>
								      </tr>
								    </tbody>
  								</table>
							</div>
							<div class="signature-wrap">
								<div class="sign-img">
									<img src="{{asset('must/images/signature/sign.svg')}}" alt="this is signature image">
								</div>
								<p class="mtb-0 manager-name second-color">Alex Morris</p>
								<h3 class="mtb-0 res-manager inter-400 medium-font b-text">Restaurant Manager</h3>
							</div>
						</div>
						<!--Payment detail table end here -->

						<p class="mtb-0 thank-you-content inter-400 b-text">Thank you for choosing to dine with us. See you soon 🙂</p>
					</div>
				</section>
				<!--Invoice content end here -->
			</div>
			
			<!--bottom content start here -->
			<section class="agency-bottom-content d-print-none" id="agency_bottom">
				<div class="container">
					<!--print-download content start here -->
					<div class="invo-buttons-wrap">
						<div class="invo-print-btn invo-btns">
							<a href="javascript:window.print()" class="print-btn">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_5_313)">
									<path d="M14 3V7C14 7.26522 14.1054 7.51957 14.2929 7.70711C14.4804 7.89464 14.7348 8 15 8H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M17 21H7C6.46957 21 5.96086 20.7893 5.58579 20.4142C5.21071 20.0391 5 19.5304 5 19V5C5 4.46957 5.21071 3.96086 5.58579 3.58579C5.96086 3.21071 6.46957 3 7 3H14L19 8V19C19 19.5304 18.7893 20.0391 18.4142 20.4142C18.0391 20.7893 17.5304 21 17 21Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 7H10" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 13H15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M13 17H15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_5_313"><rect width="24" height="24" fill="white"/>
									</clipPath></defs></svg>
								<span class="inter-700 medium-font">Print</span>
							</a>
						</div>
						<div class="invo-down-btn invo-btns">
							<a class="download-btn" id="generatePDF">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_5_246)">
									<path d="M4 17V19C4 19.5304 4.21071 20.0391 4.58579 20.4142C4.96086 20.7893 5.46957 21 6 21H18C18.5304 21 19.0391 20.7893 19.4142 20.4142C19.7893 20.0391 20 19.5304 20 19V17" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M7 11L12 16L17 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 4V16" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_5_246"><rect width="24" height="24" fill="white"/></clipPath></defs></svg>
								<span class="inter-700 medium-font">Download</span>
							</a>
						</div>
					</div>
					<!--print-download content end here -->
					<!--Note content -->
					<div class="invo-note-wrap">
						<div class="note-title">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_8_240)"><path d="M14 3V7C14 7.26522 14.1054 7.51957 14.2929 7.70711C14.4804 7.89464 14.7348 8 15 8H19" stroke="#00BAFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M17 21H7C6.46957 21 5.96086 20.7893 5.58579 20.4142C5.21071 20.0391 5 19.5304 5 19V5C5 4.46957 5.21071 3.96086 5.58579 3.58579C5.96086 3.21071 6.46957 3 7 3H14L19 8V19C19 19.5304 18.7893 20.0391 18.4142 20.4142C18.0391 20.7893 17.5304 21 17 21Z" stroke="#00BAFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 7H10" stroke="#00BAFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 13H15" stroke="#00BAFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M13 17H15" stroke="#00BAFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_8_240"><rect width="24" height="24" fill="white"/>
							</clipPath></defs></svg>
							<span class="inter-700 medium-font">Note:</span>
						</div>
						<h3 class="inter-400 medium-font second-color note-desc mtb-0">This is computer generated receipt and does not require physical signature.</h3>
					</div>
				</div>
			</section> 
			<!--bottom content end here -->
		</div>
	</div>
<!--Invoice Wrap End here -->
<script src="{{asset('must/js/jquery.min.js')}}"></script>
<script src="{{asset('must/js/jspdf.min.js')}}"></script>
<script src="{{asset('must/js/html2canvas.min.js')}}"></script>
<script src="{{asset('must/js/custom.js')}}"></script>
</body>
</html>	
@endsection