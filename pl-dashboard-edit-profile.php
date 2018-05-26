<?php include"planner-header.php"; ?>

	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Company Profile</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>Company Profile</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">

			<!-- Profile -->
			<div class="col-lg-6 col-md-6">
				<div class="dashboard-list-box margin-top-0 margin-bottom-60">
					<h4 class="gray">Company Profile</h4>
					<div class="dashboard-list-box-static">

						<!-- Avatar -->
						<div class="edit-profile-photo">
							<img src="images/planner.jpg" alt="">
							<div class="change-photo-btn">
								<div class="photoUpload">
								    <span><i class="fa fa-upload"></i> Upload Company Logo</span>
								    <input type="file" class="upload" />
								</div>
							</div>
						</div>

						<!-- Details -->
						<div class="my-profile">

							<label>Company Name</label>
							<input value="" type="text">


							<label>Company Type</lebel>
								<select class="chosen-select-no-single" >
									<option label="blank">Select Company Type</option>
									<option>Private</option>
									<option>NGO</option>
									<option>Community</option>
										<option>Government</option>
								</select>


								<label>Company Size</lebel>
									<select class="chosen-select-no-single" >
										<option label="blank">Select Company Size</option>
										<option>1 - 10 Employees</option>
										<option>10 - 20 Employees</option>
										<option>20 - 30 Employees</option>
											<option>> 30 Employees</option>
									</select>



							<label>Address</lebel>
						  <textarea class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true"></textarea>

							<label>Province</lebel>
								<select class="chosen-select-no-single" >
									<option label="blank">Select Province</option>
									<option>DKI Jakarta</option>
									<option>Jawa Barat</option>
									<option>Jawa Timur</option>
								</select>

								<label>City</lebel>
									<select class="chosen-select-no-single" >
										<option label="blank">Select City</option>
										<option>Jakarta</option>
										<option>Bandung</option>
										<option>Surabaya</option>
									</select>

							<label>Phone</label>
							<input value="" type="text">

							<label>Email</label>
							<input value="" type="text">

							<label>Company Description</label>
							<textarea name="notes" id="notes" cols="30" rows="10"></textarea>

							<label><i class="sl sl-icon-compass"></i> Company Website</label>
							<input placeholder="www.site.com" type="text">

							<label><i class="fa fa-facebook-square"></i> Facebook</label>
							<input placeholder="https://www.facebook.com/" type="text">

							<label><i class="fa fa-instagram"></i> Instagram</label>
							<input placeholder="https://www.google.com/" type="text">

							<label><i class="fa fa-twitter"></i> Twitter</label>
							<input placeholder="https://www.facebook.com/" type="text">

							<label>Bank</label>
							<input value="" type="text">

							<label>Account Name</label>
							<input value="" type="text">

							<label>No. Rekening</label>
							<input value="" type="text">

							<label>Company Profile Cover</label>
							<input type="file"  class="form-control" placeholder="">
						</div>



						<button class="button margin-top-15">Save Changes</button>

					</div>
				</div>
			</div>

			<!-- Change Password -->
			<div class="col-lg-6 col-md-6">
				<div class="dashboard-list-box margin-top-0">
					<h4 class="gray">Change Password</h4>
					<div class="dashboard-list-box-static">

						<!-- Change Password -->
						<div class="my-profile">
							<label class="margin-top-0">Username</label>
							<input type="text">

							<label class="margin-top-0">Current Password</label>
							<input type="password">

							<label>New Password</label>
							<input type="password">

							<label>Confirm New Password</label>
							<input type="password">

							<button class="button margin-top-15">Change Password</button>
						</div>

					</div>
				</div>
			</div>


<?php include"planner-footer.php"; ?>
