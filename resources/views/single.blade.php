@extends('layouts.base')

@section('content')
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->


			<!-- ============================ Hero Banner  Start================================== -->
			<div class="featured-slick">
				<div class="featured-slick-slide">
					<div><a href="assets/img/p-1.jpg" class="mfp-gallery"><img src="assets/img/p-1.jpg" class="img-fluid mx-auto" alt="" /></a></div>
					<div><a href="assets/img/p-2.jpg" class="mfp-gallery"><img src="assets/img/p-2.jpg" class="img-fluid mx-auto" alt="" /></a></div>
					<div><a href="assets/img/p-3.jpg" class="mfp-gallery"><img src="assets/img/p-3.jpg" class="img-fluid mx-auto" alt="" /></a></div>
					<div><a href="assets/img/p-4.jpg" class="mfp-gallery"><img src="assets/img/p-4.jpg" class="img-fluid mx-auto" alt="" /></a></div>
				</div>
			</div>

			<section class="spd-wrap">
				<div class="container">
					<div class="row">

						<div class="col-lg-12 col-md-12">

							<div class="slide-property-detail">

								<div class="slide-property-first">
									<div class="pr-price-into">
										<h2>$1700 <i>/ monthly</i> <span class="prt-type rent">For Rental</span></h2>
										<span><i class="lni-map-marker"></i> 778 Country St. Panama City, FL</span>
									</div>
								</div>

								<div class="slide-property-sec">
									<div class="pr-all-info">

										<div class="pr-single-info">
											<div class="share-opt-wrap">
												<button type="button" class="btn-share" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-original-title="Share this">
													<i class="lni-share"></i>
												</button>
												<div class="dropdown-menu animated flipInX">
													<a href="#" class="cl-facebook"><i class="lni-facebook"></i></a>
													<a href="#" class="cl-twitter"><i class="lni-twitter"></i></a>
													<a href="#" class="cl-gplus"><i class="lni-google-plus"></i></a>
													<a href="#" class="cl-instagram"><i class="lni-instagram"></i></a>
												</div>
											</div>

										</div>

										<div class="pr-single-info">
											<a href="JavaScript:Void(0);" data-toggle="tooltip" data-original-title="Get Print"><i class="ti-printer"></i></a>
										</div>

										<div class="pr-single-info">
											<a href="JavaScript:Void(0);" class="compare-button" data-toggle="tooltip" data-original-title="Compare"><i class="ti-control-shuffle"></i></a>
										</div>

										<div class="pr-single-info">
											<a href="JavaScript:Void(0);" class="like-bitt add-to-favorite" data-toggle="tooltip" data-original-title="Add To Favorites"><i class="lni-heart-filled"></i></a>
										</div>

									</div>
								</div>

							</div>

						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Hero Banner End ================================== -->

			<!-- ============================ Property Detail Start ================================== -->
			<section class="gray">
				<div class="container">
					<div class="row">

						<!-- property main detail -->
						<div class="col-lg-8 col-md-12 col-sm-12">

							<!-- Single Block Wrap -->
							<div class="block-wrap">

								<div class="block-header">
									<h4 class="block-title">Property Info</h4>
								</div>

								<div class="block-body">
									<ul class="dw-proprty-info">
										<li><strong>Bedrooms</strong>2</li>
										<li><strong>Bathrooms</strong>2</li>
										<li><strong>Garage</strong>Yes</li>
										<li><strong>Area</strong>570 sq ft</li>
										<li><strong>Type</strong>Apartment</li>
										<li><strong>Price</strong>$53264</li>
										<li><strong>City</strong>New York</li>
										<li><strong>Build On</strong>2007</li>
									</ul>
								</div>

							</div>

							<!-- Single Block Wrap -->
							<div class="block-wrap">

								<div class="block-header">
									<h4 class="block-title">Description</h4>
								</div>

								<div class="block-body">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
								</div>

							</div>

							<!-- Single Block Wrap -->
							<div class="block-wrap">

								<div class="block-header">
									<h4 class="block-title">Ameneties</h4>
								</div>

								<div class="block-body">
									<ul class="avl-features third">
										<li>Air Conditioning</li>
										<li>Swimming Pool</li>
										<li>Central Heating</li>
										<li>Laundry Room</li>
										<li>Gym</li>
										<li>Alarm</li>
										<li>Window Covering</li>
										<li>Internet</li>
										<li>Pets Allow</li>
										<li>Free WiFi</li>
										<li>Car Parking</li>
										<li>Spa & Massage</li>
									</ul>
								</div>

							</div>

							<!-- Single Block Wrap -->
							<div class="block-wrap">

								<div class="block-header">
									<h4 class="block-title">Floor Plan</h4>
								</div>

								<div class="block-body">
									<div class="accordion" id="floor-option">
										<div class="card">
											<div class="card-header" id="firstFloor">
												<h2 class="mb-0">
													<button type="button" class="btn btn-link" data-toggle="collapse" data-target="#firstfloor">First Floor<span>740 sq ft</span></button>
												</h2>
											</div>
											<div id="firstfloor" class="collapse" aria-labelledby="firstFloor" data-parent="#floor-option">
												<div class="card-body">
													<img src="assets/img/floor.jpg" class="img-fluid" alt="" />
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header" id="seconfFloor">
												<h2 class="mb-0">
													<button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#secondfloor">Second Floor<span>710 sq ft</span></button>
												</h2>
											</div>
											<div id="secondfloor" class="collapse" aria-labelledby="seconfFloor" data-parent="#floor-option">
												<div class="card-body">
													<img src="assets/img/floor.jpg" class="img-fluid" alt="" />
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header" id="third-garage">
												<h2 class="mb-0">
													<button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#garages">Garage<span>520 sq ft</span></button>
												</h2>
											</div>
											<div id="garages" class="collapse" aria-labelledby="third-garage" data-parent="#floor-option">
												<div class="card-body">
													<img src="assets/img/floor.jpg" class="img-fluid" alt="" />
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>

							<!-- Single Block Wrap -->
							<div class="block-wrap">

								<div class="block-header">
									<h4 class="block-title">Location</h4>
								</div>

								<div class="block-body">
									<div class="map-container">
										<div id="singleMap" data-latitude="40.7427837" data-longitude="-73.11445617675781" data-mapTitle="Our Location"></div>
									</div>

								</div>

							</div>



						</div>

						<!-- property Sidebar -->
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="page-sidebar">

								<!-- Agent Detail -->
								<div class="agent-widget">
									<div class="agent-title">
										<div class="agent-photo"><img src="assets/img/user-6.jpg" alt=""></div>
										<div class="agent-details">
											<h4><a href="#">Shivangi Preet</a></h4>
											<span><i class="lni-phone-handset"></i>(91) 123 456 7895</span>
										</div>
										<div class="clearfix"></div>
									</div>

									<div class="form-group">
										<input type="text" class="form-control" placeholder="Your Email">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Your Phone">
									</div>
									<div class="form-group">
										<textarea class="form-control">I'm interested in this property.</textarea>
									</div>
									<button class="btn btn-theme full-width">Send Message</button>
								</div>

								<!-- Mortgage Calculator -->
								<div class="sidebar-widgets">

									<h4>Mortgage Calculator</h4>

									<div class="form-group">
										<div class="input-with-icon">
											<input type="text" class="form-control" placeholder="Sale Price">
											<i class="ti-money"></i>
										</div>
									</div>

									<div class="form-group">
										<div class="input-with-icon">
											<input type="text" class="form-control" placeholder="Down Payment">
											<i class="ti-money"></i>
										</div>
									</div>

									<div class="form-group">
										<div class="input-with-icon">
											<input type="text" class="form-control" placeholder="Loan Term (Years)">
											<i class="ti-calendar"></i>
										</div>
									</div>

									<div class="form-group">
										<div class="input-with-icon">
											<input type="text" class="form-control" placeholder="Interest Rate">
											<i class="fa fa-percent"></i>
										</div>
									</div>

									<button class="btn btn-theme full-width">Calculate</button>

								</div>

								<!-- Featured Property -->
								<div class="sidebar-widgets">

									<h4>Featured Property</h4>

									<div class="sidebar-property-slide">

										<!-- Single Property -->
										<div class="single-items">
											<div class="property-listing property-1">

												<div class="listing-img-wrapper">
													<a href="single-property-2.html">
														<img src="assets/img/p-1.jpg" class="img-fluid mx-auto" alt="" />
													</a>
													<div class="listing-like-top">
														<i class="ti-heart"></i>
													</div>
													<div class="listing-rating">
														<i class="ti-star filled"></i>
														<i class="ti-star filled"></i>
														<i class="ti-star filled"></i>
														<i class="ti-star filled"></i>
														<i class="ti-star"></i>
													</div>
													<span class="property-type">For Sale</span>
												</div>

												<div class="listing-content">

													<div class="listing-detail-wrapper">
														<div class="listing-short-detail">
															<h4 class="listing-name"><a href="single-property-2.html">Resort Valley Ocs</a></h4>
															<span class="listing-location"><i class="ti-location-pin"></i>3848 Swick Hill, New Orleans</span>
														</div>
														<div class="list-author">
															<a href="#"><img src="assets/img/add-user.png" class="img-fluid img-circle avater-30" alt=""></a>
														</div>
													</div>

													<div class="listing-features-info">
														<ul>
															<li><strong>Bed:</strong>2</li>
															<li><strong>Bath:</strong>1</li>
															<li><strong>Sqft:</strong>3,700</li>
														</ul>
													</div>

													<div class="listing-footer-wrapper">
														<div class="listing-price">
															<h4 class="list-pr">$632,580</h4>
														</div>
														<div class="listing-detail-btn">
															<a href="single-property-2.html" class="more-btn">More Info</a>
														</div>
													</div>

												</div>

											</div>
										</div>

										<!-- Single Property -->
										<div class="single-items">
											<div class="property-listing property-1">

												<div class="listing-img-wrapper">
													<a href="single-property-2.html">
														<img src="assets/img/p-2.jpg" class="img-fluid mx-auto" alt="" />
													</a>
													<div class="listing-like-top">
														<i class="ti-heart"></i>
													</div>
													<div class="listing-rating">
														<i class="ti-star filled"></i>
														<i class="ti-star filled"></i>
														<i class="ti-star filled"></i>
														<i class="ti-star filled"></i>
														<i class="ti-star"></i>
													</div>
													<span class="property-type">For Rent</span>
												</div>

												<div class="listing-content">

													<div class="listing-detail-wrapper">
														<div class="listing-short-detail">
															<h4 class="listing-name"><a href="single-property-2.html">New Clue Apartment</a></h4>
															<span class="listing-location"><i class="ti-location-pin"></i>127, Quice Market, New York</span>
														</div>
														<div class="list-author">
															<a href="#"><img src="assets/img/add-user.png" class="img-fluid img-circle avater-30" alt=""></a>
														</div>
													</div>

													<div class="listing-features-info">
														<ul>
															<li><strong>Bed:</strong>2</li>
															<li><strong>Bath:</strong>2</li>
															<li><strong>Sqft:</strong>2,900</li>
														</ul>
													</div>

													<div class="listing-footer-wrapper">
														<div class="listing-price">
															<h4 class="list-pr">$3,570</h4>
														</div>
														<div class="listing-detail-btn">
															<a href="single-property-2.html" class="more-btn">More Info</a>
														</div>
													</div>

												</div>

											</div>
										</div>

										<!-- Single Property -->
										<div class="single-items">
											<div class="property-listing property-1">

												<div class="listing-img-wrapper">
													<a href="single-property-2.html">
														<img src="assets/img/p-3.jpg" class="img-fluid mx-auto" alt="" />
													</a>
													<div class="listing-like-top">
														<i class="ti-heart"></i>
													</div>
													<div class="listing-rating">
														<i class="ti-star filled"></i>
														<i class="ti-star filled"></i>
														<i class="ti-star filled"></i>
														<i class="ti-star filled"></i>
														<i class="ti-star"></i>
													</div>
													<span class="property-type">For Sale</span>
												</div>

												<div class="listing-content">

													<div class="listing-detail-wrapper">
														<div class="listing-short-detail">
															<h4 class="listing-name"><a href="single-property-2.html">Luxury Home in Manhattan</a></h4>
															<span class="listing-location"><i class="ti-location-pin"></i>588 Oakmound Road, Chicago</span>
														</div>
														<div class="list-author">
															<a href="#"><img src="assets/img/add-user.png" class="img-fluid img-circle avater-30" alt=""></a>
														</div>
													</div>

													<div class="listing-features-info">
														<ul>
															<li><strong>Bed:</strong>3</li>
															<li><strong>Bath:</strong>2</li>
															<li><strong>Sqft:</strong>2,400</li>
														</ul>
													</div>

													<div class="listing-footer-wrapper">
														<div class="listing-price">
															<h4 class="list-pr">$182,880</h4>
														</div>
														<div class="listing-detail-btn">
															<a href="single-property-2.html" class="more-btn">More Info</a>
														</div>
													</div>

												</div>

											</div>
										</div>

									</div>

								</div>

							</div>
						</div>

					</div>
				</div>
			</section>
			<!-- ============================ Property Detail End ================================== -->

			<!-- ============================ Footer Start ================================== -->
	@endsection
