<?php include"member-header.php"; ?>


	<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Add New Article</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>My Article</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">

				<div id="add-listing">

					<!-- Section -->
					<div class="add-listing-section">

						<!-- Headline -->
						<div class="add-listing-headline">
						</div>

						<!-- Title -->
						<div class="row with-forms">
							<div class="col-md-12">
								<h5>Article Title <i class="tip" data-tip-content="Name of your business"></i></h5>
								<input class="search-field" type="text" value=""/>
							</div>
						</div>

						<!-- Row -->
						<div class="row with-forms">

							<!-- Status -->
							<div class="col-md-6">
								<h5>Category</h5>
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
								<h5>Keywords <i class="tip" data-tip-content="Maximum of 15 keywords related with your business"></i></h5>
								<input type="text" placeholder="Keywords should be separated by commas">
							</div>


							<!-- Row -->
							<div class="col-md-12">
								<h5>Description</h5>
								<textarea class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
							</div>

							<!-- Dropzone -->
							<div class="col-md-12">
							<div class="submit-section">
								<h5>Cover Image</h5>
								<form action="../../file-upload.html" class="dropzone" ></form>
							</div>
						</div>
						
						<!-- Row -->
							<div class="col-md-12">
								<h5>Credits (for external resources such as Photo, quote, etc)</h5>
								<textarea class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
							</div>

						<div class="col-md-12">
						<a href="#" class="button preview to-right">Submit <i class="fa fa-arrow-circle-right"></i></a>
					</div>


						</div>



						</div>
						<!-- Row / End -->
					</div>
					<!-- Section / End -->
				</div>
			</div>

<?php include"member-footer.php"; ?>