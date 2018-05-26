<?php include "member-header.php"; ?>


	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>My Profile</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>My Profile</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">

			<!-- Profile -->
			<div class="col-lg-6 col-md-12">
				<div class="dashboard-list-box margin-top-0">
					<h4 class="gray">Profile Details</h4>
					<div class="dashboard-list-box-static">

						<!-- Avatar -->
						<div class="edit-profile-photo">
							<img src="images/user-avatar.jpg" alt="">
							<div class="change-photo-btn">
								<div class="photoUpload">
								    <span><i class="fa fa-upload"></i> Upload Photo</span>
								    <input type="file" class="upload" />
								</div>
							</div>
						</div>

						<!-- Details -->
						<div class="my-profile">

							<label>Name</label>
							<input value="" type="text">

							<label>Place of Birth</label>
							<input value="" type="text">

							<label>Date of Birth</label>
							<input value="" type="text">

							<label>Sex</lebel>
								<select class="chosen-select-no-single" >
									<option label="blank">Select Category</option>
									<option>Male</option>
									<option>Female</option>
								</select>


								<label>Occupation</lebel>
									<select class="chosen-select-no-single" >
										<option label="blank">Select Category</option>
										<option>Freelance</option>
										<option>Student</option>
										<option>Employee</option>
									</select>



							<label>Address</lebel>
						  <textarea class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true"></textarea>


							<label>Handphone</label>
							<input value="" type="text">

							<label>Email</label>
							<input value="" type="text">

							<label>About You</label>
							<textarea name="notes" id="notes" cols="30" rows="10"></textarea>


							<label>Bank</label>
							<input value="" type="text">

							<label>Account Name</label>
							<input value="" type="text">

							<label>No. Rekening</label>
							<input value="" type="text">

							<label><i class="sl sl-icon-compass"></i> Website/Portfolio Link</label>
							<input placeholder="www.site.com" type="text">

							<label><i class="fa fa-facebook-square"></i> Facebook</label>
							<input placeholder="https://www.facebook.com/" type="text">

							<label><i class="fa fa-instagram"></i> Instagram</label>
							<input placeholder="https://www.google.com/" type="text">

							<label><i class="fa fa-twitter"></i> Twitter</label>
							<input placeholder="https://www.facebook.com/" type="text">
						</div>

						<button class="button margin-top-15">Save Changes</button>

					</div>
				</div>
			</div>

			<!-- Change Password -->
			<div class="col-lg-6 col-md-12">
				<div class="dashboard-list-box margin-top-0">
					<h4 class="gray">Change Password</h4>
					<div class="dashboard-list-box-static">

						<!-- Change Password -->
						<div class="my-profile">
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


	<?php include "member-footer.php"; ?>
