<?php include"main-header.php"; ?>


<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Check Out</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Workshop & Classes</a></li>
						<li>Check Out</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->

<!-- Container -->
<div class="container">
	<div class="row">


		<div class="col-md-12" style="margin-top:-60px">

			<h4 class="headline ">Booking Detail</h4>
			<table class="basic-table margin-bottom-60">
				<tr>
					<th>Item</th>
					<th>Quantity</th>
					<th>Total</th>
				</tr>

				<tr style="font-size:16px">
					<td>Workshop Smartphone Photography</td>
					<td data-label="Quantity">1 Ticket(s)</td>
					<td data-label="Price">Rp. 275.000</td>
				</tr>

				<tr style="font-size:16px">
					<td colspan="2"><strong class="ct-bill">Sub Total</strong></td>
					<td><strong>Rp. 275.000</strong></td>
				</tr>

				<tr style="font-size:16px">
					<td colspan="2"><strong class="ct-bill">Grand Total</strong></td>
					<td><strong class="ct-gt">Rp. 275.000</strong></td>
				</tr>
			</table>
		</div>



		<!-- Content
		================================================== -->
		<div class="col-lg-12 col-md-12 padding-right-30">

			<h3 class="margin-top-0 margin-bottom-30">Personal Details</h3>

			<div class="row">

				<div class="col-md-6">
					<label>First Name</label>
					<input type="text" value="">
				</div>

				<div class="col-md-6">
					<label>Last Name</label>
					<input type="text" value="">
				</div>

				<div class="col-md-12">
					<div class="input-with-icon medium-icons">
						<label>Address</label>
						<textarea></textarea>
						<i class="im im-icon-Home"></i>
					</div>
				</div>

				<div class="col-md-6 margin-bottom-25">

				<label>Province</label>

					<select data-placeholder="Select Item" class="chosen-select">
						<option label="blank"></option>
						<option>Item 1</option>
						<option>Item 2</option>
						<option>Item 3</option>
						<option>Item 4</option>
					</select>
				</div>


				<div class="col-md-6 margin-bottom-25">

					<label>City</label>

					<select data-placeholder="Select Multiple Items" class="chosen-select" multiple>
						<option>Item 1</option>
						<option>Item 2</option>
						<option>Item 3</option>
						<option>Item 4</option>
					</select>

				</div>

				<div class="col-md-6">
					<div class="input-with-icon medium-icons">
						<label>E-Mail Address</label>
						<input type="text" value="">
						<i class="im im-icon-Mail"></i>
					</div>
				</div>

				<div class="col-md-6">
					<div class="input-with-icon medium-icons">
						<label>Phone</label>
						<input type="text" value="">
						<i class="im im-icon-Phone-2"></i>
					</div>
				</div>

			</div>




			<!-- Payment Methods Accordion -->
			<div class="col-lg-8 col-md-8" style="margin-left:-15px">
					<h3 class="margin-top-55 margin-bottom-30">Payment Method</h3>
			<div class="payment">

				<div class="payment-tab payment-tab-active">
					<div class="payment-tab-trigger">
						<input checked id="paypal" name="cardType" type="radio" value="paypal">
						<label for="paypal">PayPal</label>
						<img class="payment-logo paypal" src="https://i.imgur.com/ApBxkXU.png" alt="">
					</div>

					<div class="payment-tab-content">
						<p>You will be redirected to PayPal to complete payment.</p>
					</div>
				</div>


				<div class="payment-tab">
					<div class="payment-tab-trigger">
						<input type="radio" name="cardType" id="creditCart" value="creditCard">
						<label for="creditCart">Credit / Debit Card</label>
						<img class="payment-logo" src="https://i.imgur.com/IHEKLgm.png" alt="">
					</div>

					<div class="payment-tab-content">
						<div class="row">

							<div class="col-md-6">
								<div class="card-label">
									<label for="nameOnCard">Name on Card</label>
									<input id="nameOnCard" name="nameOnCard" required type="text">
								</div>
							</div>

							<div class="col-md-6">
								<div class="card-label">
									<label for="cardNumber">Card Number</label>
									<input id="cardNumber" name="cardNumber" placeholder="1234  5678  9876  5432" required type="text">
								</div>
							</div>

							<div class="col-md-4">
								<div class="card-label">
									<label for="expirynDate">Expiry Month</label>
									<input id="expiryDate" placeholder="MM" required type="text">
								</div>
							</div>

							<div class="col-md-4">
								<div class="card-label">
									<label for="expiryDate">Expiry Year</label>
									<input id="expirynDate" placeholder="YY" required type="text">
								</div>
							</div>

							<div class="col-md-4">
								<div class="card-label">
									<label for="cvv">CVV</label>
									<input id="cvv" required type="text">
								</div>
							</div>

						</div>
					</div>
				</div>


			</div>
			<!-- Payment Methods Accordion / End -->

			<a href="pages-booking-confirmation.html" class="button booking-confirmation-btn margin-top-40 margin-bottom-65">Confirm and Pay</a>
		</div>

</div>

		</div>

	</div>
</div>
<!-- Container / End -->



<?php include"main-footer.php"; ?>