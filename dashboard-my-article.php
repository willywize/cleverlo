<?php include"member-header.php"; ?>


	<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>My Articles</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>My Articles</li>
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
								<option>Pending</option>
								<option>Rejected</option>
							</select>
						</div>
					</div>


					<h4><a href="dashboard-add-article.php" class="rate-review margin-top-5 margin-bottom-20" style="padding:15px;"><i class="sl sl-icon-note"></i> Create New Article</a></h4>
					<ul style="margin-top:-15px">

						<li>
							<div class="list-box-listing">
								<div class="list-box-listing-img"><a href="dashboard-detail-article.php"><img src="images/listing-item-01.jpg" alt=""></a></div>
								<div class="list-box-listing-content">
									<div class="inner">
										<h3><a href="dashboard-detail-article.php">Learn To Create Your Own Teddy Bear Watercolor</a></h3>
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
								<div class="list-box-listing-img"><a href="dashboard-detail-article.php"><img src="images/listing-item-01.jpg" alt=""></a></div>
								<div class="list-box-listing-content">
									<div class="inner">
										<h3><a href="dashboard-detail-article.php">Learn To Create Your Own Teddy Bear Watercolor</a></h3>
										<span>
										<i class="sl sl-icon-clock"></i> Submitted : 10 Januari 2018 |
										<i class="sl sl-icon-layers"></i> Craft & Handmade | 
										<i class="sl sl-icon-eye"></i> 150 Views | 
										<i class="sl sl-icon-heart"></i> 2 Likes | 
										<i class="sl sl-icon-badge"></i> 150 Bookmarked | 
										<span style="color:#14ad8b">Published</span>
										</span>
									</div>
								</div>
							</div>
						</li>

						<li>
							<div class="list-box-listing">
								<div class="list-box-listing-img"><a href="dashboard-detail-article.php"><img src="images/listing-item-01.jpg" alt=""></a></div>
								<div class="list-box-listing-content">
									<div class="inner">
										<h3><a href="dashboard-detail-article.php">Learn To Create Your Own Teddy Bear Watercolor</a></h3>
										<span>
										<i class="sl sl-icon-clock"></i> Submitted : 10 Januari 2018 |
										<i class="sl sl-icon-layers"></i> Craft & Handmade |  
										<span style="color:#ee3535">Rejected</span>
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


<?php include"member-footer.php"; ?>