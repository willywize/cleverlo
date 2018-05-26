<?php include "planner-header.php"; ?>


	<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Balance & Withdraw</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>Balance & Withdraw</li>
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
							<a href="#small-dialog" class="rate-review popup-with-zoom-anim" style="margin-top:5px"><i class="sl sl-icon-present"></i> Request Withdraw</a>
						</div>
					</div>


					<!-- Reply to review popup -->
					<div id="small-dialog" class="zoom-anim-dialog mfp-hide">
						<div class="small-dialog-header">
							<h3>Withdraw</h3>
						</div>
						<div class="message-reply margin-top-0">
							<div class="col-md-12">
								<p>Withdraw process may takes 2-3 of working days</p>
								<h5>Amount <i class="tip" data-tip-content="Order number ex:CL021212"></i></h5>
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
								<h5>No. Rekening <i class="tip" data-tip-content="Account Name"></i></h5>
								<input type="text" placeholder="">
							</div>
							<button class="button" style="margin-left:15px">Request Withdraw</button>
						</div>
					</div>


					<h4><i class="im im-icon-Bar-Chart pt-blc"></i> Total Balance : <span style="color:green">Rp. 2.000.000</span></h4>
					<ul>

						<li class="pending-booking">
							<div class="list-box-listing bookings">
								<div class="list-box-listing-content">
									<div class="inner">
										<h3>Total Withdraw : Rp. 500.000 <span class="booking-status">On Process</span></h3>

										<div class="inner-booking-list">
											<h5>Withdraw ID:</h5>
											<ul class="booking-list">
												<li>CL0200101</li>
											</ul>
										</div>

										<div class="inner-booking-list">
											<h5>Workshop:</h5>
											<ul class="booking-list">
												<li>Pouch Drawing Workshop</li>
											</ul>
										</div>

										<div class="inner-booking-list">
											<h5>Request Date:</h5>
											<ul class="booking-list">
												<li>2 May 2018 at 15:30 P.M</li>
											</ul>
										</div>


										<div class="inner-booking-list">
											<h5>Bank Account:</h5>
											<ul class="booking-list">
												<li>Bank BCA</li>
												<li>Arina Fatharani</li>
												<li>123-456-789</li>
											</ul>
										</div>

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
										<h3>Total Withdraw : Rp. 1.000.000 <span class="booking-status">Paid on 11 May 2018</span></h3>

										<div class="inner-booking-list">
											<h5>Withdraw ID:</h5>
											<ul class="booking-list">
												<li>CL0200101</li>
											</ul>
										</div>

										<div class="inner-booking-list">
											<h5>Workshop:</h5>
											<ul class="booking-list">
												<li>Smartphone Photography</li>
											</ul>
										</div>

										<div class="inner-booking-list">
											<h5>Request Date:</h5>
											<ul class="booking-list">
												<li>2 May 2018 at 15:30 P.M</li>
											</ul>
										</div>


										<div class="inner-booking-list">
											<h5>Bank Account:</h5>
											<ul class="booking-list">
												<li>Bank BCA</li>
												<li>Arina Fatharani</li>
												<li>123-456-789</li>
											</ul>
										</div>

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
