@extends('layouts.base')

@section('content')
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->

			<!-- ============================ Hero Banner  Start================================== -->

			<!-- ============================ Hero Banner End ================================== -->
			<div class="search-header-banner">
				<div class="container">
					<div class="full-search-2 transparent">
						<div class="hero-search">
							<h1>Search Your Dream</h1>
						</div>
						<div class="hero-search-content">

							<div class="row">

								<div class="col-lg-4 col-md-4 col-sm-12">
									<div class="form-group">
										<div class="input-with-icon">
											<input type="text" class="form-control" placeholder="Neighborhood">
											<i class="ti-search"></i>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-4 col-sm-12">
									<div class="form-group">
										<div class="input-with-icon">
											<select id="cities" class="form-control">
												<option value="">&nbsp;</option>
												<option value="1">Los Angeles, CA</option>
												<option value="2">New York City, NY</option>
												<option value="3">Chicago, IL</option>
												<option value="4">Houston, TX</option>
												<option value="5">Philadelphia, PA</option>
												<option value="6">San Antonio, TX</option>
												<option value="7">San Jose, CA</option>
											</select>
											<i class="ti-briefcase"></i>
										</div>
									</div>
								</div>

								<div class="col-lg-2 col-md-2 col-sm-6">
									<div class="form-group">
										<div class="input-with-icon">
											<input type="text" class="form-control" placeholder="Minimum">
											<i class="ti-money"></i>
										</div>
									</div>
								</div>

								<div class="col-lg-2 col-md-2 col-sm-6">
									<div class="form-group">
										<div class="input-with-icon">
											<input type="text" class="form-control" placeholder="Maximum">
											<i class="ti-money"></i>
										</div>
									</div>
								</div>

							</div>

							<div class="collapse" id="advance-search" aria-expanded="false" role="banner">

								<!-- row -->
								<div class="row">

									<div class="col-lg-4 col-md-4 col-sm-12">
										<div class="form-group">
											<div class="input-with-icon">
												<select id="ptypes" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">Any Type</option>
													<option value="2">For Rental</option>
													<option value="3">For Sale</option>
												</select>
												<i class="ti-briefcase"></i>
											</div>
										</div>
									</div>

									<div class="col-lg-4 col-md-4 col-sm-12">
										<div class="form-group">
											<div class="input-with-icon">
												<select id="bedrooms" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
												<i class="fas fa-bed"></i>
											</div>
										</div>
									</div>

									<div class="col-lg-4 col-md-4 col-sm-12">
										<div class="form-group">
											<div class="input-with-icon">
												<select id="bathrooms" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
												<i class="fas fa-bath"></i>
											</div>
										</div>
									</div>

								</div>
								<!-- /row -->

								<!-- row -->
								<div class="row">

									<div class="col-lg-12 col-md-12 col-sm-12">
										<h4>Amenities & Features</h4>
										<ul class="no-ul-list third-row">
											<li>
												<input id="a-1" class="checkbox-custom" name="a-1" type="checkbox">
												<label for="a-1" class="checkbox-custom-label">Air Condition</label>
											</li>
											<li>
												<input id="a-2" class="checkbox-custom" name="a-2" type="checkbox">
												<label for="a-2" class="checkbox-custom-label">Bedding</label>
											</li>
											<li>
												<input id="a-3" class="checkbox-custom" name="a-3" type="checkbox">
												<label for="a-3" class="checkbox-custom-label">Heating</label>
											</li>
											<li>
												<input id="a-4" class="checkbox-custom" name="a-4" type="checkbox">
												<label for="a-4" class="checkbox-custom-label">Internet</label>
											</li>
											<li>
												<input id="a-5" class="checkbox-custom" name="a-5" type="checkbox">
												<label for="a-5" class="checkbox-custom-label">Microwave</label>
											</li>
											<li>
												<input id="a-6" class="checkbox-custom" name="a-6" type="checkbox">
												<label for="a-6" class="checkbox-custom-label">Smoking Allow</label>
											</li>
											<li>
												<input id="a-7" class="checkbox-custom" name="a-7" type="checkbox">
												<label for="a-7" class="checkbox-custom-label">Terrace</label>
											</li>
											<li>
												<input id="a-8" class="checkbox-custom" name="a-8" type="checkbox">
												<label for="a-8" class="checkbox-custom-label">Balcony</label>
											</li>
											<li>
												<input id="a-9" class="checkbox-custom" name="a-9" type="checkbox">
												<label for="a-9" class="checkbox-custom-label">Icon</label>
											</li>
											<li>
												<input id="a-10" class="checkbox-custom" name="a-10" type="checkbox">
												<label for="a-10" class="checkbox-custom-label">Wi-Fi</label>
											</li>
											<li>
												<input id="a-11" class="checkbox-custom" name="a-11" type="checkbox">
												<label for="a-11" class="checkbox-custom-label">Beach</label>
											</li>
											<li>
												<input id="a-12" class="checkbox-custom" name="a-12" type="checkbox">
												<label for="a-12" class="checkbox-custom-label">Parking</label>
											</li>
										</ul>
									</div>

								</div>
								<!-- /row -->

							</div>

							<div class="row">

								<div class="col-lg-4 col-md-4 col-sm-12">
									<div class="form-group" id="module">
										<a role="button" class="collapsed" data-toggle="collapse" href="#advance-search" aria-expanded="false" aria-controls="advance-search"></a>
									</div>
								</div>

								<div class="col-lg-4 col-md-4 col-sm-12">
									<div class="form-group">
										<div class="form-group">
											<a href="#" class="btn reset-btn-outline">Search Reset</a>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-4 col-sm-12">
									<div class="form-group">
										<a href="#" class="btn search-btn-outline">Search Result</a>
									</div>
								</div>

							</div>

						</div>
					</div>
				</div>
			</div>
			<!-- =========================== All Property =============================== -->
			<section>

				<div class="container">

					<!-- <div class="row">
						<div class="col-md-12 col-sm-12">
							<h4>Total Property Find is: <span class="theme-cl">207</span></h4>
						</div>
					</div> -->

					<div class="row">

						<!-- Single Property Start -->
						<div class="col-lg-4 col-md-6">
							<div class="property_item classical-list">
								<div class="image">
									<a href="#">
										<img src="assets/img/real.jpg" alt="latest property" class="img-fluid">
									</a>
									<div class="sb-date">
										<span class="tag"><i></i>APPROVED</span>
									</div>
									<span class="tag_t">For Sale</span>
								</div>
								<div class="proerty_content">
									<div class="proerty_text">
									  <h3 class="captlize"><a href="#">Twin</a></h3>
									  <p class="proerty_price">100 million</p>
									</div>
									<p class="property_add">Okuru new layout of odili rd</p>
									<div class="property_meta">
									  <div class="list-fx-features">
											<div class="listing-card-info-icon">
												<span class="inc-fleat inc-bed">4 Beds</span>
											</div>
											<div class="listing-card-info-icon">
												<span class="inc-fleat inc-type">Corporate</span>
											</div>
											<div class="listing-card-info-icon">
												<span class="inc-fleat inc-area">1,580 sqft</span>
											</div>
											<div class="listing-card-info-icon">
												<span class="inc-fleat inc-bath">4 Bath</span>
											</div>
										</div>
									</div>
									<div class="property_links">
										<a href="tel:09026190497" class="btn btn-theme" data-tracked-action="call-us">Call Now</a>
										<a href="mailto:info@fibiac.com" data-tracked-action="mail-us" class="btn btn-theme-light">Mail now</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Property End -->

						<!-- Single Property Start -->
						<div class="col-lg-4 col-md-6">
							<div class="property_item classical-list">
								<div class="image">
									<a href="#">
										<img src="assets/img/2.jpg" alt="latest property" style="height: 278px;" class="img-fluid">
									</a>
									<div class="sb-date">
										<span class="tag"><i></i>APPROVED</span>
									</div>
									<span class="tag_t">For sale</span>
								</div>
								<div class="proerty_content">
									<div class="proerty_text">
									  <h3 class="captlize"><a href="#">Deed of Conveyance</a></h3>
									  <p class="proerty_price">23 million</p>
									</div>
									<p class="property_add">Eliowhani</p>
									<div class="property_meta">
									  <div class="list-fx-features">
											<div class="listing-card-info-icon">
												<span class="inc-fleat inc-bed">4 Beds</span>
											</div>
											<div class="listing-card-info-icon">
												<span class="inc-fleat inc-type">Houses</span>
											</div>
											<div class="listing-card-info-icon">
												<span class="inc-fleat inc-area">1,180 sqft</span>
											</div>
											<div class="listing-card-info-icon">
												<span class="inc-fleat inc-bath">4 Bath</span>
											</div>
										</div>
									</div>
									<div class="property_links">
										<a href="tel:09026190497" class="btn btn-theme" data-tracked-action="call-us">Call Now</a>
										<a href="mailto:info@fibiac.com" data-tracked-action="mail-us" class="btn btn-theme-light">Mail now</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Property End -->

						<!-- Single Property Start -->
						<div class="col-lg-4 col-md-6">
							<div class="property_item classical-list">
								<div class="image">
									<a href="#">
										<img src="assets/img/3.jpg" style="height:278px;" alt="latest property" class="img-fluid">
									</a>
									<div class="sb-date">
										<span class="tag"><i></i>APPROVED</span>
									</div>
									<span class="tag_t">For Sale</span>
								</div>
								<div class="proerty_content">
									<div class="proerty_text">
									  <h3 class="captlize"><a href="#">Owl Lio Apartment</a></h3>
									  <p class="proerty_price">50 million</p>
									</div>
									<p class="property_add">Odili Road</p>
									<div class="property_meta">
									  <div class="list-fx-features">
											<div class="listing-card-info-icon">
												<span class="inc-fleat inc-bed">4 Beds</span>
											</div>
											<div class="listing-card-info-icon">
												<span class="inc-fleat inc-type">Corporate</span>
											</div>
											<div class="listing-card-info-icon">
												<span class="inc-fleat inc-area">1,580 sqft</span>
											</div>
											<div class="listing-card-info-icon">
												<span class="inc-fleat inc-bath">4 Bath</span>
											</div>
										</div>
									</div>
									<div class="property_links">
										<a href="tel:09026190497" class="btn btn-theme" data-tracked-action="call-us">Call Now</a>
										<a href="mailto:info@fibiac.com" data-tracked-action="mail-us" class="btn btn-theme-light">Mail now</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Property End -->

						<!-- Single Property Start -->
						<div class="col-lg-4 col-md-6">
							<div class="property_item classical-list">
								<div class="image">
									<a href="#">
										<img src="assets/img/1.jpg" alt="latest property" style="height: 278px;" class="img-fluid">
									</a>
									<div class="sb-date">
										<span class="tag"><i></i>APPROVED</span>
									</div>
									<span class="tag_t">For sale</span>
								</div>
								<div class="proerty_content">
									<div class="proerty_text">
										<h3 class="captlize"><a href="#">Gam opportunity</a></h3>
										<p class="proerty_price">10.5 million</p>
									</div>
									<p class="property_add">Ozuguru</p>
									<div class="property_meta">
										<div class="list-fx-features">
											<div class="listing-card-info-icon">
												<span class="inc-fleat inc-bed">3 Beds</span>
											</div>
											<div class="listing-card-info-icon">
												<span class="inc-fleat inc-type">Houses</span>
											</div>
											<div class="listing-card-info-icon">
												<span class="inc-fleat inc-area">1,120 sqft</span>
											</div>
											<div class="listing-card-info-icon">
												<span class="inc-fleat inc-bath">3 Bath</span>
											</div>
										</div>
									</div>
									<div class="property_links">
										<a href="tel:09026190497" class="btn btn-theme" data-tracked-action="call-us">Call Now</a>
										<a href="mailto:info@fibiac.com" data-tracked-action="mail-us" class="btn btn-theme-light">Mail now</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Property End -->

				</div>

			</section>
			<!-- =========================== All Property =============================== -->

			<!-- ============================ Footer Start ================================== -->
@endsection
