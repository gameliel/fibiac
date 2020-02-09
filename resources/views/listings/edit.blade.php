@extends('layouts.base')

@section('content')

    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <h2 class="ipt-title">Edit Property listing</h2>
                    <span class="ipn-subtitle">Feel free to make an edit</span>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('listing.index') }}">Back</a>
                </div>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ Edit Property Start ================================== -->
    <section>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <form action="{{ route('listing.update',$listing->id) }}" method="POST">
                        @csrf
                        @method('PUT')

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
                                        <input type="text" name="title" value="{{ $listing->title }}" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Status</label>
                                        <select id="status" name="status" value="{{ $listing->status }}" class="form-control">
                                            <option value="">&nbsp;</option>
                                            <option value="1">For Rent</option>
                                            <option value="2">For Sale</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Property Type</label>
                                        <select id="ptypes" name="type" value="{{ $listing->type }}" class="form-control">
                                            <option value="">&nbsp;</option>
                                            <option value="1">Houses</option>
                                            <option value="2">Apartment</option>
                                            <option value="3">Villas</option>
                                            <option value="4">Commercial</option>
                                            <option value="5">Offices</option>
                                            <option value="6">Garage</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Price</label>
                                        <input type="text" name="price" value="{{ $listing->price }}" class="form-control" placeholder="USD">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Area</label>
                                        <input type="text" name="area" value="{{ $listing->area }}" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Bedrooms</label>
                                        <select id="bedrooms" name="bedroom" value="{{ $listing->bedroom }}" class="form-control">
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
                                        <select id="bathrooms" name="bathroom" value="{{ $listing->bathroom }}" class="form-control">
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
                                        <input type="file" name="gallery" value="{{ $listing->gallery }}" class="form-control">
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
                                        <input type="text" name="address" value="{{ $listing->address }}" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>City</label>
                                        <input type="text" name="city" value="{{ $listing->city }}" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>State</label>
                                        <input type="text" name="state" value="{{ $listing->state }}" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Zip Code</label>
                                        <input type="text" name="zip_code" value="{{ $listing->zip_code }}" class="form-control">
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
                                        <textarea class="form-control h-120" name="description" placeholder="description">{{ $listing->description }}</textarea>
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
