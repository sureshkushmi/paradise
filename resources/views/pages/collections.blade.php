@include('partials.header')
@include('partials.spinner')
<!-- Spinner End -->

<!-- Topbar Start -->
@include('partials.topbar')
<!-- Topbar End -->

<!-- Navbar Start -->
@include('partials.navbar')
<!-- Navbar End -->

<!-- collections Start -->
<div class="container-xxl py-5">
    <div class="container">
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="feature-img">
                    <img class="img-fluid" src="{{ asset('img/about-2.jpg') }}" alt="">
                    <img class="img-fluid" src="{{ asset('img/about-1.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-12">
                    <div class="d-flex align-items-start">
                        <h5>SKU :</h5>
                        <p class="mb-0"> 5700-23</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex align-items-start">
                        <h5>Availability :</h5>
                        <p class="mb-0"> Many in stock</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex align-items-start">
                        <h5>Yellow Shade of Brown :</h5>
                        <p class="mb-0"> $299.00</p>
                    </div>
                </div>

                <h3 class="mb-0">Design Your Suit</h3>
                <form action="{{ route('submit-form') }}" method="POST">
                    @csrf

                    <!-- Suit Style -->
                    <div class="col-12 mb-3">
                        <div class="row">
                            <h5 class="mb-0">Suit Style * Single Breasted</h5>
                            <div class="col-md-4">
                                <label for="suit-style-1" class="radio-img-label">
                                    <input type="radio" name="suit_style" id="suit-style-1" value="1button2" class="d-none">
                                    <img class="img-fluid" src="{{ asset('img/icons-shirts/1button2.png') }}" alt="">
                                </label>
                            </div>
                            <div class="col-md-4">
                                <label for="suit-style-2" class="radio-img-label">
                                    <input type="radio" name="suit_style" id="suit-style-2" value="4button" class="d-none">
                                    <img class="img-fluid" src="{{ asset('img/icons-shirts/4button.png') }}" alt="">
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Buttons * Triple Button ---------- -->
                    <div class="col-12 mb-3">
                        <div class="row">
                            <h5 class="mb-0">Buttons * Triple Button</h5>
                            <div class="col-md-4">
                                <label for="button-1" class="radio-img-label">
                                    <input type="radio" name="button-t" id="button-1" value="button-1" class="d-none">
                                    <img class="img-fluid" src="{{ asset('img/icons-shirts/1button1.png') }}" alt="">
                                </label>
                            </div>
                            <div class="col-md-4">
                                <label for="button-2" class="radio-img-label">
                                    <input type="radio" name="button-t" id="button-2" value="button-2" class="d-none">
                                    <img class="img-fluid" src="{{ asset('img/icons-shirts/1button2.png') }}" alt="">
                                </label>
                            </div>
                            <div class="col-md-4">
                                <label for="button-3" class="radio-img-label">
                                    <input type="radio" name="button-t" id="button-3" value="button-3" class="d-none">
                                    <img class="img-fluid" src="{{ asset('img/icons-shirts/3button.png') }}" alt="">
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- Lapel -->
                    <div class="col-12 mb-3">
                        <div class="row">
                            <h5 class="mb-0">Lapel * Skinny</h5>
                            <div class="col-md-4">
                                <label for="lapel-1" class="radio-img-label">
                                    <input type="radio" name="lapel" id="lapel-1" value="lapel-1" class="d-none">
                                    <img class="img-fluid" src="{{ asset('img/icons-shirts/lapelbutton.png') }}" alt="">
                                </label>
                            </div>
                            <div class="col-md-4">
                                <label for="lapel-2" class="radio-img-label">
                                    <input type="radio" name="lapel" id="lapel-2" value="lapel-2" class="d-none">
                                    <img class="img-fluid" src="{{ asset('img/icons-shirts/lapelregular.png') }}" alt="">
                                </label>
                            </div>
                            <div class="col-md-4">
                                <label for="lapel-3" class="radio-img-label">
                                    <input type="radio" name="lapel" id="lapel-3" value="lapel-3" class="d-none">
                                    <img class="img-fluid" src="{{ asset('img/icons-shirts/lapelregular3.png') }}" alt="">
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Pockets * Flap -->
                    <div class="col-12 mb-3">
                        <div class="row">
                            <h5 class="mb-0">Pockets * Flap</h5>
                            <div class="col-md-4">
                                <label for="pocketsflap-1" class="radio-img-label">
                                    <input type="radio" name="pocketsflap" id="pocketsflap-1" value="pocketsflap-1" class="d-none">
                                    <img class="img-fluid" src="{{ asset('img/icons-shirts/2straightnoflappocket2.png') }}" alt="">
                                </label>
                            </div>
                            <div class="col-md-4">
                                <label for="pocketsflap-2" class="radio-img-label">
                                    <input type="radio" name="pocketsflap" id="pocketsflap-2" value="pocketsflap-2" class="d-none">
                                    <img class="img-fluid" src="{{ asset('img/icons-shirts/2lapelregular3.png') }}" alt="">
                                </label>
                            </div>
                        </div>
                    </div>

                     <!-- Pockets Flap * Two Packet -->
                     <div class="col-12 mb-3">
                        <div class="row">
                            <h5 class="mb-0">Pockets Flap * Two Packet </h5>
                            <div class="col-md-4">
                                <label for="pocketsflaptwopackt-1" class="radio-img-label">
                                    <input type="radio" name="pocketsflaptwopackt" id="pocketsflaptwopackt-1" value="pocketsflaptwopackt-1" class="d-none">
                                    <img class="img-fluid" src="{{ asset('img/icons-shirts/2straightnoflappocket2.png') }}" alt="">
                                </label>
                            </div>
                            <div class="col-md-4">
                                <label for="pocketsflaptwopackt-2" class="radio-img-label">
                                    <input type="radio" name="pocketsflaptwopackt" id="pocketsflaptwopackt-2" value="pocketsflaptwopackt-2" class="d-none">
                                    <img class="img-fluid" src="{{ asset('img/icons-shirts/2straightnoflap3.png') }}" alt="">
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Vents * Center Vent -->
                    <div class="col-12 mb-3">
                        <div class="row">
                            <h5 class="mb-0">Vents * Center Vent</h5>
                            <div class="col-md-4">
                                <label for="vents-center-vent-1" class="radio-img-label">
                                    <input type="radio" name="vents-center-vent" id="vents-center-vent-1" value="vents-center-vent-1" class="d-none">
                                    <img class="img-fluid" src="{{ asset('img/icons-shirts/Vents1.png') }}" alt="">
                                </label>
                            </div>
                            <div class="col-md-4">
                                <label for="vents-center-vent-2" class="radio-img-label">
                                    <input type="radio" name="vents-center-vent" id="vents-center-vent-2" value="vents-center-vent-2" class="d-none">
                                    <img class="img-fluid" src="{{ asset('img/icons-shirts/Vents2.png') }}" alt="">
                                </label>
                            </div>
                            <div class="col-md-4">
                                <label for="vents-center-vent-3" class="radio-img-label">
                                    <input type="radio" name="vents-center-vent" id="vents-center-vent-3" value="vents-center-vent-3" class="d-none">
                                    <img class="img-fluid" src="{{ asset('img/icons-shirts/Vents3.png') }}" alt="">
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Pant Style * Normal -->
                    <div class="col-12 mb-3">
                        <div class="row">
                            <h5 class="mb-0">Pant Style * Normal</h5>
                            <div class="col-md-4">
                                <label for="pant-style-normal-1" class="radio-img-label">
                                    <input type="radio" name="pant-style-normal" id="pant-style-normal-1" value="pant-style-normal-1" class="d-none">
                                    <img class="img-fluid" src="{{ asset('img/icons-shirts/pants1.png') }}" alt="">
                                </label>
                            </div>
                            <div class="col-md-4">
                                <label for="pant-style-normal-2" class="radio-img-label">
                                    <input type="radio" name="pant-style-normal" id="pant-style-normal-2" value="pant-style-normal-2" class="d-none">
                                    <img class="img-fluid" src="{{ asset('img/icons-shirts/pants2.png') }}" alt="">
                                </label>
                            </div>
                            <div class="col-md-4">
                                <label for="pant-style-normal-3" class="radio-img-label">
                                    <input type="radio" name="pant-style-normal" id="pant-style-normal-3" value="pant-style-normal-3" class="d-none">
                                    <img class="img-fluid" src="{{ asset('img/icons-shirts/pants3.png') }}" alt="">
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Back Pocket Single Opening -->
                    <div class="col-12 mb-3">
                        <div class="row">
                            <h5 class="mb-0">Back Pocket * Single Opening</h5>
                            <div class="col-md-4">
                                <label for="back-pocket-single-opening-1" class="radio-img-label">
                                    <input type="radio" name="back-pocket-single-opening" id="back-pocket-single-opening-1" value="pant-style-normal-1" class="d-none">
                                    <img class="img-fluid" src="{{ asset('img/icons-shirts/Back Pocket1.png') }}" alt="">
                                </label>
                            </div>
                            <div class="col-md-4">
                                <label for="back-pocket-single-opening-2" class="radio-img-label">
                                    <input type="radio" name="back-pocket-single-opening" id="back-pocket-single-opening-2" value="back-pocket-single-opening-2" class="d-none">
                                    <img class="img-fluid" src="{{ asset('img/icons-shirts/Back Pocket2.png') }}" alt="">
                                </label>
                            </div>
                            <div class="col-md-4">
                                <label for="back-pocket-single-opening-3" class="radio-img-label">
                                    <input type="radio" name="back-pocket-single-opening" id="back-pocket-single-opening-3" value="back-pocket-single-opening-3" class="d-none">
                                    <img class="img-fluid" src="{{ asset('img/icons-shirts/Back Pocket3.png') }}" alt="">
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Jacket Measurements (Inch) -->
                    <div class="col-12 mb-3">
                        <div class="row">
                            <h5 class="mb-0">Jacket Measurements (Inch)</h5>
                            <div class="col-md-6">
                                <label for="chest">Chest</label>
                                <input type="text" class="form-control" id="chest" placeholder="" name="chest">
                            </div>
                            <div class="col-md-6">
                                <label for="email">Stomach</label>
                                <input type="text" class="form-control" id="Stomach" name="stomach" placeholder="">
                            </div>

                            <div class="col-md-6">
                                    <label for="email">Wrist</label>
                                    <input type="text" class="form-control" id="wrist" name="wrist" placeholder="">
                            </div>
                            <div class="col-md-6">
                                    <label for="email">Biceps</label>
                                    <input type="text" class="form-control" id="biceps" name="biceps" placeholder="">
                            </div>
                            <div class="col-md-6">
                                    <label for="email">Shoulder</label>
                                    <input type="text" class="form-control" id="shoulder" name="shoulder" placeholder="">
                            </div>

                            <div class="col-md-6">
                                    <label for="email">Sleeve</label>
                                    <input type="text" class="form-control" id="sleeve" name="sleeve" placeholder="">
                            </div>
                            <div class="col-md-6">
                                    <label for="email">Jacket Length</label>
                                    <input type="text" class="form-control" id="jacketlenght" name="jacketlenght" placeholder="">
                            </div>

                            <div class="col-md-6">
                                    <label for="email">Neck</label>
                                    <input type="text" class="form-control" id="neck" name="neck" placeholder="">
                            </div>
                        </div>
                    </div>

                    <!-- Pant Measurements (Inch) -->
                    <div class="col-12 mb-3">
                        <div class="row">
                            <h5 class="mb-0">Pant Measurements (Inch)</h5>
                            <div class="col-md-6">
                                    <label for="waist">Waist</label>
                                    <input type="text" class="form-control" id="waist" name="waist" placeholder="">
                            </div>
                            <div class="col-md-6">
                                    <label for="waist">Hip</label>
                                    <input type="text" class="form-control" id="hip" name="Hip" placeholder="">
                            </div>

                            <div class="col-md-6">
                                    <label for="waist">Crotch</label>
                                    <input type="text" class="form-control" id="crotch" name="crotch" placeholder="">
                            </div>
                            <div class="col-md-6">
                                    <label for="waist">Thigh</label>
                                    <input type="text" class="form-control" id="thigh" name="thigh" placeholder="">
                            </div>
                            <div class="col-md-6">
                                    <label for="waist">Length (Outseam)</label>
                                    <input type="text" class="form-control" id="length-Outseam" name="length-Outseam" placeholder="">
                            </div>

                            <div class="col-md-6">
                                    <label for="waist">Inseam</label>
                                    <input type="text" class="form-control" id="inseam" name="inseam" placeholder="">
                            </div>
                            <div class="col-md-6">
                            <label for="waist">Pant Cuff</label>
                            <input type="text" class="form-control" id="pant-cuff" name="pant-cuff" placeholder="">
                            </div>

                            <div class="col-md-6">
                                    <label for="email">Neck</label>
                                    <input type="text" class="form-control" id="neck" name="neck" placeholder="">
                            </div>
                        </div>
                    </div>

                    <!-- Body Measurements -->
                    <div class="col-12 mb-3">
                        <div class="row">
                            <h5 class="mb-0">Body Measurements</h5>
                            <div class="col-md-4">
                                <h5 class="mb-0">Pant Cuff * 5ft</h5>
                              
                                    <select name="heightft">
                                        <option>4ft</option>
                                        <option>5ft</option>
                                        <option>6ft</option>
                                        <option>7ft</option>
                                    </select>
                               
                            </div>
                            <div class="col-md-4">
                                <h5 class="mb-0">Height (in) * 7 inch</h5>
                              
                                    <select name="heightft">
                                        <option>1ft</option>
                                        <option>2ft</option>
                                        <option>3ft</option>
                                        <option>4ft</option>
                                        <option>5ft</option>
                                        <option>6ft</option>
                                        <option>7ft</option>
                                        <option>8ft</option>
                                        <option>9ft</option>
                                        <option>10ft</option>
                                        <option>11ft</option>
                                    </select>
                                
                            </div>
                            <div class="col-md-4">
                                <h5 class="mb-0">Weight (lb)</h5>
                                <input type="text" class="form-control" id="weight_lb" name="weight_lb" placeholder="inch">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Additional sections here... -->

                    <div class="col-12">
                        <button class="btn btn-primary w-100 py-3" type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- collections End -->

<!-- Footer Start -->
@include('partials.footer')
<!-- Footer End -->

<!-- Footer Main Start -->
@include('partials.mainfooter')
<!-- Footer Main End -->
