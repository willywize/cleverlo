<?php include "planner-header.php"; ?>


	<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Check Out</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>Check Out</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">

				<div id="add-listing" class="separated-form">

					<!-- Section -->
					<div class="add-listing-section">

						<!-- Headline -->
						<div class="add-listing-headline">
						</div>
						
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

			<h3 class="margin-top-0 margin-bottom-30">Personal Details</h3>

			<div class="row">

				<div class="col-md-6">
					<label>First Name</label>
					<input type="text" value="Willy Wize">
				</div>

				<div class="col-md-6">
					<label>Last Name</label>
					<input type="text" value="Ananda Zen">
				</div>

				<div class="col-md-12">
					<div class="input-with-icon medium-icons">
						<label>Address</label>
						<textarea>Jl. Medan Merdeka Barat No.9, Jakarta Pusat</textarea>
						<i class="im im-icon-Home"></i>
					</div>
				</div>

				<div class="col-md-6 margin-bottom-25">

				<label>Province</label>

					<select data-placeholder="Select Item" class="chosen-select">
						<option>DKI Jakarta</option>
						<option>Jawa Barat</option>
						<option>DI Yogyakarta</option>
						<option>Jawa Tengah</option>
						<option>Sumatera Barat</option>
					</select>
				</div>


				<div class="col-md-6 margin-bottom-25">

					<label>City</label>

					<select data-placeholder="Select Items" class="chosen-select" >
						<option>Jakarta Pusat</option>
						<option>Jakarta Selatan</option>
						<option>Jakarta Barat</option>
						<option>Jakarta Timur</option>
					</select>

				</div>

				<div class="col-md-6">
					<div class="input-with-icon medium-icons">
						<label>E-Mail Address</label>
						<input type="text" value="email@email.com">
						<i class="im im-icon-Mail"></i>
					</div>
				</div>

				<div class="col-md-6">
					<div class="input-with-icon medium-icons">
						<label>Phone</label>
						<input type="text" value="081272362822">
						<i class="im im-icon-Phone-2"></i>
					</div>
				</div>



			<!-- Payment Methods Accordion -->
			<div class="col-lg-8 col-md-8">
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



			<?php include "planner-footer.php"; ?>