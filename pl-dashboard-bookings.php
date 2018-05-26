<?php include "planner-header.php"; ?>


	<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Bookings</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>Bookings</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">

			<!-- Listings -->
			<div class="col-lg-12 col-md-12">
				<div class="dashboard-list-box margin-top-0">

					<!-- Sort by -->
					<div class="sort-by">
						<div class="sort-by-select">
							<select data-placeholder="Default order" class="chosen-select-no-single">
								<option>Any Status</option>
								<option>Paid</option>
								<option>Waiting Payment</option>
								<option>Canceled</option>
							</select>
						</div>
					</div>


					<!-- Reply to review popup -->
					<div id="small-dialog" class="zoom-anim-dialog mfp-hide">
						<div class="small-dialog-header">
							<h3>Confirm Payment</h3>
						</div>
						<div class="message-reply margin-top-0">
							<div class="col-md-12">
								<h5>Order Number <i class="tip" data-tip-content="Order number ex:CL021212"></i></h5>
								<input type="text" placeholder="">
							</div>
							<div class="col-md-12">
								<h5>Bank <i class="tip" data-tip-content="Bank"></i></h5>
								<input type="text" placeholder="">
							</div>
							<div class="col-md-12">
								<h5>Account Name <i class="tip" data-tip-content="Account Name"></i></h5>
								<input type="text" placeholder="">
							</div>
							<div class="col-md-12">
									<label>No. Rekening <i class="tip" data-tip-content="Scan of transfer recipt"></i></label>
									<input type="text" placeholder="">
							</div>
							<div class="col-md-12">
								<h5>Transfer Recipt <i class="tip" data-tip-content="Scan of transfer recipt"></i></h5>
								<input type="file"  class="form-control" placeholder="">
							</div>
							<button class="button" style="margin-left:15px">Send</button>
						</div>
					</div>


					<h4>Bookings List</h4>
					<ul>

						<li class="pending-booking">
							<div class="list-box-listing bookings">
								<div class="list-box-listing-content">
									<div class="inner">
										<h3>Pouch Drawing Workshop with @idekuhandmade <span class="booking-status">Waiting for Payment</span></h3>

										<div class="inner-booking-list">
											<h5>Booking Order:</h5>
											<ul class="booking-list">
												<li>CL0200101</li>
											</ul>
										</div>

										<div class="inner-booking-list">
											<h5>Amount:</h5>
											<ul class="booking-list">
												<li>2 Tickets</li>
												<li>Rp. 550.000</li>
											</ul>
										</div>

										<div class="inner-booking-list">
											<h5>Booking Date:</h5>
											<ul class="booking-list">
												<li>2 May 2018 at 15:30 P.M</li>
											</ul>
										</div>


										<div class="inner-booking-list">
											<h5>Planner:</h5>
											<ul class="booking-list">
												<li>Pranata Adicara</li>
												<li>8 May 2018</li>
												<li>123-456-789</li>
											</ul>
										</div>
										<a href="#small-dialog" class="rate-review popup-with-zoom-anim"><i class="sl sl-icon-cursor"></i> Confirm Payment</a>

									</div>
								</div>
							</div>
							<div class="buttons-to-right">
								<a href="#" class="button gray reject"><i class="sl sl-icon-close"></i> Cancel</a>
							</div>
						</li>

						<li class="approved-booking">
							<div class="list-box-listing bookings">
								<div class="list-box-listing-content">
									<div class="inner">
										<h3>Workshop Smartphone Photography <span class="booking-status">Paid at 5 Mey 2018</span></h3>

										<div class="inner-booking-list">
											<h5>Booking Order:</h5>
											<ul class="booking-list">
												<li>CL0200101</li>
											</ul>
										</div>

										<div class="inner-booking-list">
											<h5>Amount:</h5>
											<ul class="booking-list">
												<li>2 Tickets</li>
												<li>Rp. 550.000</li>
											</ul>
										</div>

										<div class="inner-booking-list">
											<h5>Booking Date:</h5>
											<ul class="booking-list">
												<li>2 May 2018 at 15:30 P.M</li>
											</ul>
										</div>


										<div class="inner-booking-list">
											<h5>Planner:</h5>
											<ul class="booking-list">
												<li>Pranata Adicara</li>
												<li>8 May 2018</li>
												<li>123-456-789</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>

					</ul>
				</div>
			</div>

			<!-- Pagination -->
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12">
					<!-- Pagination -->
					<div class="pagination-container margin-top-20 margin-bottom-40">
						<nav class="pagination">
							<ul>
								<li><a href="#" class="current-page">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- Pagination / End -->

<?php include "planner-footer.php"; ?>
