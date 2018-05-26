<?php include "planner-header.php"; ?>


	<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Add New Workshop</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>My Workshop</li>
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
							<h3><i class="sl sl-icon-doc"></i> Basic Informations</h3>
						</div>

						<!-- Title -->
						<div class="row with-forms">
							<div class="col-md-12">
								<h5>Workshop Title <i class="tip" data-tip-content="Workshop Title"></i></h5>
								<input class="search-field" type="text" value=""/>
							</div>
						</div>

						<!-- Row -->
						<!-- Row -->
						<div class="row with-forms">
							<!-- Status -->
							<div class="col-md-6">
								<h5>Category <i class="tip" data-tip-content="Workshop Category"></i></h5>
								<select class="chosen-select-no-single" >
									<option label="blank">Select Category</option>
									<option>Eat & Drink</option>
									<option>Shops</option>
									<option>Hotels</option>
									<option>Restaurants</option>
									<option>Fitness</option>
									<option>Events</option>
								</select>
							</div>

							<!-- Type -->
							<div class="col-md-6">
								<h5>Level <i class="tip" data-tip-content="Minimum skill/level to attend this workshop"></i></h5>
								<select class="chosen-select-no-single" >
									<option label="blank">Select Level</option>
									<option>Beginer</option>
									<option>Intermediate</option>
									<option>Advnce</option>
								</select>
							</div>

							<!-- Row -->
							<div class="col-md-12">
								<h5>Description <i class="tip" data-tip-content="Short description about workshop"></i></h5>
								<textarea class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
							</div>

							<!-- Row -->
							<div class="col-md-12">
								<h5>What participants will learn? <i class="tip" data-tip-content="Workshop Outcome"></i></h5>
								<textarea class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
							</div>


							<!-- Row -->
							<div class="col-md-12">
								<h5>What participants need to bring? <i class="tip" data-tip-content="List of materials or tools for this workshop which isn't provided by planner"></i></h5>
								<input type="text" placeholder="">
							</div>


							<!-- Row -->
							<div class="col-md-12">
								<h5>Facilities <i class="tip" data-tip-content="List of facilities/benefit for participant if joining workshop"></i></h5>
								<input type="text" placeholder="">
							</div>

							<!-- Type -->
							<div class="col-md-12">
								<h5>Venue Name <i class="tip" data-tip-content="Name of Building/Resto/Cafe"></i></h5>
								<input type="text" placeholder="">
							</div>

							<!-- Type -->
							<div class="col-md-12">
								<h5>Venue Address <i class="tip" data-tip-content="Address"></i></h5>
								<input type="text" placeholder="">
							</div>

							<!-- Type -->
							<div class="col-md-12">
								<h5>Maps Link <i class="tip" data-tip-content="You can embbed the map from Google Maps"></i></h5>
								<input type="text" placeholder="">
							</div>

							<!-- Type -->
							<div class="col-md-6">
								<h5>Class Size<i class="tip" data-tip-content="Maximum number of participants"></i></h5>
								<input type="text" placeholder="">
							</div>

							<!-- Type -->
							<div class="col-md-6">
								<h5>Language<i class="tip" data-tip-content="Language for this workshop"></i></h5>
								<input type="text" placeholder="">
							</div>

							<!-- Dropzone -->
							<div class="col-md-12">
							<div class="submit-section">
								<h5>Image</h5>
								<form action="../../file-upload.html" class="dropzone" ></form>
							</div>
						</div>
				</div>
							<!-- Row / End -->


							<!-- Section -->
							<div class="add-listing-section margin-top-45">
								<!-- Headline -->
								<div class="add-listing-headline">
									<h3><i class="sl sl-icon-graduation"></i> Expert(s)</h3>
									<!-- Switcher -->
								</div>
									<div class="row">
										<div class="col-md-12">
											<!-- Type -->
											<div class="col-md-12">
												<h5>Name<i class="tip" data-tip-content="Name of Expert/Teacher/Instructor for this workshop"></i></h5>
												<input type="text" placeholder="">
											</div>

											<!-- Type -->
											<div class="col-md-12">
												<h5>Short Biography<i class="tip" data-tip-content="Short Biography of Expert/Teacher/Instructor"></i></h5>
												<textarea class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
											</div>

											<!-- Type -->
											<div class="col-md-6">
												<h5>Facebook Account<i class="tip" data-tip-content=""></i></h5>
												<input type="text" placeholder="Facebook Account URL">
											</div>

											<!-- Type -->
											<div class="col-md-6">
												<h5>Instagram Account<i class="tip" data-tip-content=""></i></h5>
												<input type="text" placeholder="Instagram Account URL">
											</div>

											<!-- Type -->
											<div class="col-md-6">
												<h5>Twitter Account<i class="tip" data-tip-content="Twitter Account URL"></i></h5>
												<input type="text" placeholder="">
											</div>

											<!-- Type -->
											<div class="col-md-6">
												<h5>Email<i class="tip" data-tip-content="Email"></i></h5>
												<input type="text" placeholder="">
											</div>
											
											<!-- Type -->
											<div class="col-md-12">
												<h5>Photo<i class="tip" data-tip-content=""></i></h5>
												<input type="file" placeholder="Facebook Account URL">
											</div>


											<a href="#" class="button add-pricing-list-item">Add More</a>
										</div>
									</div>
							</div>
							<!-- Section / End -->

					<!-- Section -->
					<div class="add-listing-section margin-top-45">
						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-clock"></i> Schedule</h3>
							<!-- Switcher -->
						</div>
							<div class="row">
								<div class="col-md-12">
										<h5>Workshop Type <i class="tip" data-tip-content="Workshop type"></i></h5>
										<select class="chosen-select-no-single" >
											<option label="blank">Select Workshop Type</option>
											<option>One Day Workshop</option>
											<option>Long Haul (more than 1 day)</option>
										</select><br/>
									<table id="pricing-list-container">
										<tr class="pricing-list-item pattern">
											<td>
												<div class="fm-input pricing-name"><input type="text" placeholder="Start Date"></div>
												<div class="fm-input pricing-ingredients"><input type="text" placeholder="Start Hour" /></div>
												<div class="fm-input pricing-name"><input type="text" placeholder="End Date"></div>
												<div class="fm-input pricing-ingredients"><input type="text" placeholder="End Hour" /></div>
												<div class="fm-close"><a class="delete" href="#"><i class="fa fa-remove"></i></a></div>
											</td>
										</tr>
									</table>
									<a href="#" class="button add-pricing-list-item">Add More</a>
								</div>
							</div>
					</div>
					<!-- Section / End -->



					<!-- Section -->
					<div class="add-listing-section margin-top-45">
						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-wallet"></i> Price</h3>
							<!-- Switcher -->
						</div>
							<div class="row">
								<div class="col-md-12">
									<!-- Type -->
									<div class="col-md-6">
										<h5>Ticket Price<i class="tip" data-tip-content="Ticket price per-Pack"></i></h5>
										<input type="text" placeholder="">
									</div>

									<!-- Type -->
									<div class="col-md-6">
										<h5>Last Registration <i class="tip" data-tip-content="Last regietration"></i></h5>
										<input type="text" placeholder="">
									</div>

									<!-- Type -->
									<div class="col-md-12 margin-bottom-20">
										<h5>Apply Coupon <i class="tip" data-tip-content="Enable coupon to purchase workshop"></i></h5>
										<select class="chosen-select-no-single" >
											<option label="blank">Select</option>
											<option>Yes</option>
											<option>No</option>
										</select>
									</div>

									<!-- Type -->
									<div class="col-md-6">
										<h5>Coupon Code <i class="tip" data-tip-content="Coupon code"></i></h5>
										<input type="text" placeholder="">
									</div>


									<!-- Type -->
									<div class="col-md-6">
										<h5>Discount (Rp.)<i class="tip" data-tip-content="Total discount"></i></h5>
										<input type="text" placeholder="">
									</div>
								</div>
							</div>
					</div>
					<!-- Section / End -->




					<!-- Section -->
					<div class="add-listing-section margin-top-45">
						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-question"></i> FAQ</h3>
							<!-- Switcher -->
						</div>
							<div class="row">
								<div class="col-md-12">
									<!-- Status -->
									<div class="col-md-6 margin-bottom-20">
										<h5>Q :</h5>
										<p>Can I get my refund back if I am not able to make it last minute?</p>
									</div>
									<!-- Type -->
									<div class="col-md-6 margin-bottom-20">
										<h5>A <i class="tip" data-tip-content="Choose your answer"></i></h5>
										<select class="chosen-select-no-single" >
											<option label="blank">Select Category</option>
											<option>Yes</option>
											<option>No</option>
										</select>
									</div>
									<div class="clearfix"></div>
									<!-- Status -->
									<div class="col-md-6 margin-bottom-20">
										<h5>Q :</h5>
										<p>Can I get my friend to take over if I am not able to make it last minute?</p>
									</div>

									<!-- Type -->
									<div class="col-md-6 margin-bottom-20">
										<h5>A <i class="tip" data-tip-content="Choose your answer"></i></h5>
										<select class="chosen-select-no-single" >
											<option label="blank">Select Category</option>
											<option>Yes. However, please kindly inform us for us to make any necessary arrangement.</option>
											<option>No</option>
										</select>
									</div>
								</div>
							</div>
					</div>
					<!-- Section / End -->


					<!-- Section -->
					<div class="add-listing-section margin-top-45">
						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-info"></i> Terms & Conditions</h3>
							<!-- Switcher -->
						</div>
							<div class="row">
								<div class="col-md-12">
									<textarea class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true">All payments are non-refundable and are not transferrable to other workshops but you are allowed to transfer your ticket to other person. Please kindly inform us so that we can make any necessary arrangement. In the event if the class is cancelled due to some unexpected events by the educator, we will refund your payment fully. In the event if the class information such as the price/time/location/learning description is amended by the educator/facilitator, you can have the option to ask for refund.</textarea>
								</div>
							</div>
					</div>
					<!-- Section / End -->



					<a href="#" class="button preview">Preview <i class="fa fa-eye"></i></a>
					<a href="#" class="button preview">Submit <i class="fa fa-arrow-circle-right"></i></a>


				</div>
			</div>
				</div>
			</div>

			<?php include "planner-footer.php"; ?>
