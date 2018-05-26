<?php include "member-header.php"; ?>


	<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Cart</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>Cart</li>
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
						
						<table  class="basic-table">
    				<thead>
						<tr class="tb-bill">
							<th style="width:30%">Item</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:10%">Subtotal</th>
							<th style="width:8%"></th>
						</tr>
					</thead>
					<tbody>
						<tr style="margin-bottom:40px">
							<td data-th="Product" class="ct-vl">
								<div class="row">
									<div class="col-sm-10">
										<p>Workshop Pouch Drawing with @idekuhandmade</p>
									</div>
								</div>
							</td>
							<td data-th="Price" class="tb-price ct-vl">Rp. 375.000</td>
							<td data-th="Quantity">
								<input type="number" class="form-control text-center" value="1">
							</td>
							<td data-th="Subtotal" class="tb-price ct-vl">Rp. 375.000</td>
							<td class="actions" data-th="">
								<a href="#"><p class="text-center del-ct"><i class="fa fa-close"></i></p></a>
							</td>
						</tr>
					<tr style="margin-bottom:40px">
							<td data-th="Product" class="ct-vl">
								<div class="row">
									<div class="col-sm-10">
											<p>Workshop Smartphone Photography</p>
									</div>
								</div>
							</td>
							<td data-th="Price" class="tb-price ct-vl">Rp. 375.000</td>
							<td data-th="Quantity">
								<input type="number" class="form-control text-center" value="1">
							</td>
							<td data-th="Subtotal" class="tb-price ct-vl">Rp. 375.000</td>
							<td class="actions" data-th="">
								<a href="#"><p class="del-ct text-center"><i class="fa fa-close"></i></p></a>
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr style="font-size:16px">
							<td><a href="#" class="btn btn-warning ct-bill hidden-xs"> Grand Total</a></td>
							<td colspan="2" class=""></td>
							<td class="ct-bill">Rp. 750.000</td>
							<td  class="text-center tb-price ct-vl"><a href="pl-dashboard-check-out.php" class="button text-center" style="width:125px; margin: 0px auto !important">Check Out</a></td>
						</tr>
					</tfoot>

				</table>

				</div>
							<!-- Row / End -->

				</div>
			</div>



			<?php include "member-footer.php"; ?>