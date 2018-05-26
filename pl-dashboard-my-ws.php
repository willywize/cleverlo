<?php include"planner-header.php"; ?>


	<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>My Workshops</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>My Workshops</li>
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
					<div class="sort-by to-left hidden-xs">
						<div class="sort-by-select margin-top-20">
							<select data-placeholder="Default order" class="chosen-select-no-single">
								<option>Any Status</option>
								<option>Published</option>
								<option>Past Workshop</option>
								<option>Pending</option>
								<option>Rejected</option>
							</select>
						</div>
					</div>


					<h4><a href="pl-dashboard-add-ws.php" class="rate-review margin-top-5 margin-bottom-20" style="padding:15px;"><i class="sl sl-icon-note"></i> Create New Workshop</a></h4>
					<ul style="margin-top:-15px">

						<li>
							<div class="list-box-listing">
								<div class="list-box-listing-img"><a href="pl-dashboard-detail-ws.php"><img src="images/listing-item-01.jpg" alt=""></a></div>
								<div class="list-box-listing-content">
									<div class="inner">
										<h3><a href="pl-dashboard-detail-ws.php">Portrait Watercolor Painting Workshop</a></h3>
										<span>
										<i class="sl sl-icon-clock"></i> Submitted : 10 Januari 2018 |
										<i class="sl sl-icon-layers"></i> Craft & Handmade | 
										<span style="color:#f7ab48">Pending</span>
										</span>
									</div>
								</div>
							</div>
						</li>

						<li>
							<div class="list-box-listing">
								<div class="list-box-listing-img"><a href="pl-dashboard-detail-ws.php"><img src="images/listing-item-01.jpg" alt=""></a></div>
								<div class="list-box-listing-content">
									<div class="inner">
										<h3><a href="pl-dashboard-detail-ws.php">Beauty Class with Wardah Cosmetic</a></h3>
										<span>
										    <i class="sl sl-icon-clock"></i> Submitted : 10 Januari 2018 |
											<i class="sl sl-icon-layers"></i> Craft & Handmade | 
											<i class="sl sl-icon-eye"></i> 1500 views | 
											<i class="sl sl-icon-people"></i> 150 Partcipants |
											<span style="color:#14ad8b">Published</span>
											</span>
									</div>
								</div>
							</div>
						</li>
						
						
						<li>
							<div class="list-box-listing">
								<div class="list-box-listing-img"><a href="pl-dashboard-detail-ws.php"><img src="images/listing-item-01.jpg" alt=""></a></div>
								<div class="list-box-listing-content">
									<div class="inner">
										<h3><a href="pl-dashboard-detail-ws.php">Smartphone Photography Workshop</a></h3>
										<span>
										    <i class="sl sl-icon-clock"></i> Submitted : 10 Januari 2018 |
											<i class="sl sl-icon-layers"></i> Craft & Handmade | 
											<i class="sl sl-icon-eye"></i> 1500 views | 
											<i class="sl sl-icon-people"></i> 150 Partcipants |
											<span style="color:#0baee4">Past Workshop</span>
											</span>
									</div>
								</div>
							</div>
						</li>

						<li>
							<div class="list-box-listing">
								<div class="list-box-listing-img"><a href="pl-dashboard-detail-ws.php"><img src="images/listing-item-01.jpg" alt=""></a></div>
								<div class="list-box-listing-content">
									<div class="inner">
										<h3><a href="pl-dashboard-detail-ws.php">Pouch Drawing Workshop with @idekuhandmade</a></h3>
										<span>
										<i class="sl sl-icon-clock"></i> Submitted : 10 Januari 2018 |
										<i class="sl sl-icon-layers"></i> Craft & Handmade |  
										<i class="sl sl-icon-docs"></i> <span style="color:#ee3535">Rejected</span>
										</span>
									</div>
								</div>
							</div>
							<div class="buttons-to-right">
								<a href="#" class="button gray"><i class="sl sl-icon-note"></i> Edit</a>
								<a href="#" class="button gray"><i class="sl sl-icon-close"></i> Delete</a>
							</div>
						</li>
					</ul>
					</div>
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


<?php include"planner-footer.php"; ?>