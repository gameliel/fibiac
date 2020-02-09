@extends('layouts.base')

@section('content')
    <!-- ============================ Page Title Start================================== -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <h2 class="ipt-title">Submit Property</h2>
                    <span class="ipn-subtitle">Just Submit Your Property</span>

                </div>
            </div>
        </div>
    </div>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ Submit Property Start ================================== -->
    <section>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <form action="{{ route('listings.store') }}" method="POST">
                        @csrf

                        <div class="alert alert-info" role="alert">
                            <p>If you don't have an account you can create one by <a href="#">Click Here</a></p>
                        </div>

                </div>

                <!-- Submit Form -->
                <div class="col-lg-12 col-md-12">

                    <div class="submit-page">

                        <!-- Basic Information -->
                        <div class="form-submit">
                            <h3>Basic Information</h3>

                            <div class="submit-section">
                                <div class="form-row">

                                    <div class="form-group col-md-12">
                                        <label>Property Title<a href="#" class="tip-topdata" data-tip="Property Title"><i class="ti-help"></i></a></label>
                                        <input type="text" name="title" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Status</label>
                                        <select id="status" name="status" class="form-control">
                                            <option value="">&nbsp;</option>
                                            <option value="For rent" name="For rent">For Rent</option>
                                            <option value="For sale" name="For sale">For Sale</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Property Type</label>
                                        <select id="ptypes" name="type" class="form-control">
                                            <option value="">&nbsp;</option>
                                            <option value="Houses" name="Houses">Houses</option>
                                            <option value="Apartment" name="Apartment">Apartment</option>
                                            <option value="Villas" name="Villas">Villas</option>
                                            <option value="Commercial" name="Commercial">Commercial</option>
                                            <option value="Offices" name="Offices">Offices</option>
                                            <option value="Garage" name="Garage">Garage</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Price</label>
                                        <input type="text" name="price" class="form-control" placeholder="USD">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Area</label>
                                        <input type="text" name="area" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Bedrooms</label>
                                        <select id="bedrooms" name="bedroom" class="form-control">
                                            <option value="">&nbsp;</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Bathrooms</label>
                                        <select id="bathrooms" name="bathroom" class="form-control">
                                            <option value="">&nbsp;</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Gallery -->
                        <div class="form-submit">
                            <h3>Gallery</h3>
                            <div class="submit-section">
                                <div class="form-row">

                                    <div class="form-group col-md-12">
                                        <label>Upload Gallery</label>
                                        <input type="file" name="gallery" class="form-control">
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="form-submit">
                            <h3>Location</h3>
                            <div class="submit-section">
                                <div class="form-row">

                                    <div class="form-group col-md-6">
                                        <label>Address</label>
                                        <input type="text" name="address" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>City</label>
                                        <input type="text" name="city" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>State</label>
                                        <input type="text" name="state" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Zip Code</label>
                                        <input type="text" name="zip_code" class="form-control">
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Detailed Information -->
                        <div class="form-submit">
                            <h3>Detailed Information</h3>
                            <div class="submit-section">
                                <div class="form-row">

                                    <div class="form-group col-md-12">
                                        <label>Description</label>
                                        <textarea class="form-control h-120" name="description"></textarea>
                                    </div>

                        <div class="form-group col-lg-12 col-md-12">
                            <button class="btn btn-theme" type="submit">Submit</button>
                        </div>

                    </div>
                    </form>
                </div>

            </div>
        </div>

    </section>
    <!-- ============================ Submit Property End ================================== -->

    <!-- ============================ Footer Start ================================== -->
  @endsection
