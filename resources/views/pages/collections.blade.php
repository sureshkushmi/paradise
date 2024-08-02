@include('partials.header')
@include('partials.spinner')
@include('partials.topbar')
@include('partials.navbar')

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
                            <h5 class="mb-0" id="suit-style-title">Suit Style * Single Breasted</h5>
                            <div class="col-md-4">
                                <label for="suit-style-1" class="radio-img-label">
                                    <input type="radio" name="suit_style" id="suit-style-1" value="single" class="d-none">
                                    <img class="img-fluid" src="{{ asset('img/icons-shirts/1button2.png') }}" alt="">
                                </label>
                            </div>
                            <div class="col-md-4">
                                <label for="suit-style-2" class="radio-img-label">
                                    <input type="radio" name="suit_style" id="suit-style-2" value="double" class="d-none">
                                    <img class="img-fluid" src="{{ asset('img/icons-shirts/4button.png') }}" alt="">
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Single Breasted Buttons Section -->
                    <div id="single-breasted-section" class="col-12 mb-3">
                        <div class="row">
                            <h5 class="mb-0">Buttons * Single Button</h5>
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

                    <!-- Double Breasted Buttons Section -->
                    <div id="double-breasted-section" class="col-12 mb-3" style="display:none;">
                        <div class="row">
                            <h5 class="mb-0">Buttons DB * Single Button</h5>
                            <div class="col-md-4">
                                <label for="childbutton-doublebreasted-1" class="radio-img-label">
                                    <input type="radio" name="childbutton-doublebreasted" id="childbutton-doublebreasted-1" value="button-1" class="d-none">
                                    <img class="img-fluid" src="{{ asset('img/icons-shirts/doublebreasted_2button.png') }}" alt="">
                                </label>
                            </div>
                            <div class="col-md-4">
                                <label for="childbutton-doublebreasted-2" class="radio-img-label">
                                    <input type="radio" name="childbutton-doublebreasted" id="childbutton-doublebreasted-2" value="childbutton-doublebreasted-2" class="d-none">
                                    <img class="img-fluid" src="{{ asset('img/icons-shirts/doublebreasted_4button.png') }}" alt="">
                                </label>
                            </div>
                            <div class="col-md-4">
                                <label for="childbutton-doublebreasted-3" class="radio-img-label">
                                    <input type="radio" name="childbutton-doublebreasted" id="childbutton-doublebreasted-3" value="childbutton-doublebreasted-3" class="d-none">
                                    <img class="img-fluid" src="{{ asset('img/icons-shirts/doublebreasted_6button.png') }}" alt="">
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
                                    <img class="img-fluid" src="{{ asset('img/icons-shirts/lapelwide.png') }}" alt="">
                                </label>
                            </div>
                        </div>
                    </div>

                     <!-- Pockets * Flap -->
                    <div class="col-12 mb-3">
                        <div class="row">
                            <h5 class="mb-0">Pockets * Slant Pockets</h5>
                            <div class="col-md-4">
                                <label for="pocketsflap-1" class="radio-img-label">
                                    <input type="radio" name="pocketsflap" id="pocketsflap-1" value="pocketsflap-1" class="d-none">
                                    <img class="img-fluid" src="{{ asset('img/icons-shirts/1lapelregular.png') }}" alt="">
                                </label>
                            </div>
                            <div class="col-md-4">
                                <label for="pocketsflap-2" class="radio-img-label">
                                    <input type="radio" name="pocketsflap" id="pocketsflap-2" value="pocketsflap-2" class="d-none">
                                    <img class="img-fluid" src="{{ asset('img/icons-shirts/1lapelwide.png') }}" alt="">
                                </label>
                            </div>
                            <div class="col-md-4">
                                <label for="pocketsflap-3" class="radio-img-label">
                                    <input type="radio" name="pocketsflap" id="pocketsflap-3" value="pocketsflap-3" class="d-none">
                                    <img class="img-fluid" src="{{ asset('img/icons-shirts/2lapelregular2.png') }}" alt="">
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- end Pockets Sections -->
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
                                <label for="chest">Chest * <a href="#"><img src="{{ asset('img/gif/chest.gif') }}" class="trigger-image" data-description="Measure around the fullest part of the chest. Select the desired chest size for your coat. The measuring tape is usually around the nipple level, under the armpits, and over your shoulder blades. Do not overinflate your chest." data-title="Chest Measurement Guide" data-image="{{ asset('img/gif/chest.gif') }}"></a></label>
                                <input type="text" class="form-control" id="chest" placeholder="" name="chest">
                            </div>
                            <div class="col-md-6">
                                <label for="email">Stomach * <a href="#"><img src="{{ asset('img/gif/stomach.gif') }}" class="trigger-image" data-description="Measure around the widest part of your abdomen to the desired coat size around the stomach. Make sure the tape is at the same height at all times. The widest part of the abdomen usually coincides with the belly button. Do not hold your stomach in. The Stomach measurement you provide will be the exact measurement of your coat." data-title="Stomach Measurement Guide" data-image="{{ asset('img/gif/stomach.gif') }}"></a></label>
                                <input type="text" class="form-control" id="Stomach" name="stomach" placeholder="">
                            </div>

                            <div class="col-md-6">
                                    <label for="email">Wrist * <a href="#"><img src="{{ asset('img/gif/wrist.gif') }}" class="trigger-image" data-description="Start by placing a flexible measuring tape around your wrist. Wrap the tape measure around your wrist loosely, so it reflects the desired cuff around the wrist." data-title="Wrist Measurement" data-image="{{ asset('img/gif/wrist.gif') }}"></a></label>
                                    <input type="text" class="form-control" id="wrist" name="wrist" placeholder="">
                            </div>
                            <div class="col-md-6">
                                    <label for="email">Biceps * <a href="#"><img src="{{ asset('img/gif/biceps.gif') }}" class="trigger-image" data-description="Measure the desired bicep size of the coat. This is the measurement that your coat will have around your biceps." data-title="Biceps Measurement" data-image="{{ asset('img/gif/biceps.gif') }}"></a></label>
                                    <input type="text" class="form-control" id="biceps" name="biceps" placeholder="">
                            </div>
                            <div class="col-md-6">
                                    <label for="email">Shoulder * <a href="#"><img src="{{ asset('img/gif/shoulder.gif') }}" class="trigger-image" data-description="Measure across the top of the shoulder from one edge to the other. Ensure you take the curved contour over the top of the shoulders as shown. Wearing your best fitted shirt or suit measure up to the shoulder seams." data-title="Shoulder Measurement" data-image="{{ asset('img/gif/shoulder.gif') }}"></a></label>
                                    <input type="text" class="form-control" id="shoulder" name="shoulder" placeholder="">
                            </div>

                            <div class="col-md-6">
                                    <label for="email">Sleeve * <a href="#"><img src="{{ asset('img/gif/sleeve.gif') }}" class="trigger-image" data-description="Measure the length of the desired coat sleeve. It's done by measuring from the top of the shoulder to the wrist up to the desired coat sleeve length." data-title="Sleeve Length Measurement" data-image="{{ asset('img/gif/sleeve.gif') }}"></a></label>
                                    <input type="text" class="form-control" id="sleeve" name="sleeve" placeholder="">
                            </div>
                            <div class="col-md-6">
                                    <label for="email">Jacket Length * <a href="#"><img src="{{ asset('img/gif/jacketlenght.gif') }}" class="trigger-image" data-description="Measure from the highest part of your shoulder (where shoulder and neck seams meet) all the way down to the desired length, usually around the thumb joint. When measuring, adopt an upright position with both arms on your sides. A shorter, trendier length, looks good when coupled with jeans, but is an acquired taste in a suit." data-title="Jacket Length" data-image="{{ asset('img/gif/jacketlength.gif') }}"></a></label>
                                    <input type="text" class="form-control" id="jacketlenght" name="jacketlenght" placeholder="">
                            </div>

                            <div class="col-md-6">
                                    <label for="email">Neck * <a href="#"><img src="{{ asset('img/gif/neck.gif') }}" class="trigger-image" data-description="Measure your neck upto the desired neck size. " data-title="Neck Length Measurement" data-image="{{ asset('img/gif/neck.gif') }}"></a></label>
                                    <input type="text" class="form-control" id="neck" name="neck" placeholder="">
                            </div>
                        </div>
                    </div>

                    <!-- Pant Measurements (Inch) -->
                    <div class="col-12 mb-3">
                        <div class="row">
                            <h5 class="mb-0">Pant Measurements (Inch)</h5>
                            <div class="col-md-6">
                                    <label for="waist">Waist * <a href="#"><img src="{{ asset('img/gif/waist.gif') }}" class="trigger-image" data-description="Wearing trousers and a shirt put the measuring tape around your waist at the height where you would wear your pants and adjust to your designed snugness with room for a finger. Make sure the tape is snug and does not ride over the waistband but you should be able to put your index finger inside the tape. As a guide, this measurement will be about 2 inches above what you take off the rack as they like to flatter, but unfortunately, we need real measurements." data-title="Waist Measurement Guide" data-image="{{ asset('img/gif/waist.gif') }}"></a></label>
                                    <input type="text" class="form-control" id="waist" name="waist" placeholder="">
                            </div>
                            <div class="col-md-6">
                                    <label for="waist">Hip * <a href="#"><img src="{{ asset('img/gif/hip.gif') }}" class="trigger-image" data-description="Wearing trousers, measure around the fullest part of your hips, placing a finger between your body and the tape. Make sure the tape is straight at all times. Make sure your pockets are empty and the tape is not restrictive. As a guide, you should not make the tape too snug. You only just be able to feel the tape when measuring." data-title="Hip Measurement" data-image="{{ asset('img/gif/hip.gif') }}"></a></label>
                                    <input type="text" class="form-control" id="hip" name="Hip" placeholder="">
                            </div>

                            <div class="col-md-6">
                                    <label for="crotch">Crotch * <a href="#"><img src="{{ asset('img/gif/crotch.gif') }}" class="trigger-image" data-description="Measure from the top middle of the back pants waist all along the crotch seam through your legs until the top of the front waist  Important: If you have any doubt, compare this measure with pants that fit you well." data-title="Crotch Measurement" data-image="{{ asset('img/gif/crotch.gif') }}"></a></label>
                                    <input type="text" class="form-control" id="crotch" name="crotch" placeholder="">
                            </div>
                            <div class="col-md-6">
                                    <label for="thigh">Thigh * <a href="#"><img src="{{ asset('img/gif/thigh.gif') }}" class="trigger-image" data-description="Wearing trousers, empty your pockets then, Start at the top of your inseam, measure around your thigh with room for a finger." data-title="Thigh Measurement" data-image="{{ asset('img/gif/thigh.gif') }}"></a></label>
                                    <input type="text" class="form-control" id="thigh" name="thigh" placeholder="">
                            </div>
                            <div class="col-md-6">
                                    <label for="outseam">Length (Outseam) * <a href="#"><img src="{{ asset('img/gif/outseam.gif') }}" class="trigger-image" data-description="Measure from the top of the pants waist all along the side pant seam until the bottom of your pants or roughly 1 inch from the ground." data-title="Pant Length (Outseam) Measurement" data-image="{{ asset('img/gif/outseam.gif') }}"></a></label>
                                    <input type="text" class="form-control" id="length-Outseam" name="length-Outseam" placeholder="">
                            </div>

                            <div class="col-md-6">
                                    <label for="inseam">Inseam * <a href="#"><img src="{{ asset('img/gif/chest.gif') }}" class="trigger-image" data-description="Measure from the lowest part of your crotch area to the floor. Make sure the tape is tight along the inside of your leg, that you are standing straight, and then measure. No shoes, please!" data-title="Pant Length (Inseam)" data-image="{{ asset('img/gif/inseam.gif') }}"></a></label>
                                    <input type="text" class="form-control" id="inseam" name="inseam" placeholder="">
                            </div>
                            <div class="col-md-6">
                            <label for="pantcuff">Pant Cuff * <a href="#"><img src="{{ asset('img/gif/pantcuff.gif') }}" class="trigger-image" data-description="Measure around the bottom of the pants around the ankle." data-title="Pant Cuff" data-image="{{ asset('img/gif/pantcuff.gif') }}"></a></label>
                            <input type="text" class="form-control" id="pant-cuff" name="pant-cuff" placeholder="">
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

                    <!-- ============  Modal Structure -->
                    <div id="dynamicModal" class="modal">
    <div class="modal-content">
        <span class="close-btn">&times;</span>
        <h2 id="modal-title">Dynamic Title</h2>
        <img id="modal-image" src="" alt="Dynamic Image">
        <p id="modal-description">Dynamic Description</p>
    </div>
</div>


<!--  ==========End modal structure========= -->
                    <!-- Additional sections here... -->

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- collections End -->

@include('partials.footer')

<!-- jQuery and Custom Script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   $(document).ready(function() {
    // Function to toggle suit style
    function toggleSuitStyle(style) {
        $('#suit-style-title').text('Suit Style * ' + (style === 'single' ? 'Single Breasted' : 'Double Breasted'));

        if (style === 'single') {
            $('#single-breasted-section').show();
            $('#double-breasted-section').hide();
            $('#suit-image').attr('src', '{{ asset("img/icons-shirts/1button2.png") }}');
        } else if (style === 'double') {
            $('#single-breasted-section').hide();
            $('#double-breasted-section').show();
            $('#suit-image').attr('src', '{{ asset("img/icons-shirts/4button.png") }}');
        }
    }

    // Attach the toggleSuitStyle function to the radio buttons
    $('input[name="suit_style"]').change(function() {
        toggleSuitStyle($(this).val());
    });

    // Modal functionality
    var modal = document.getElementById('dynamicModal');
    var closeBtn = document.querySelector('.close-btn');
    var triggerImages = document.querySelectorAll('.trigger-image');

    triggerImages.forEach(function(image) {
        image.addEventListener('click', function() {
            var title = this.getAttribute('data-title');
            var imgSrc = this.getAttribute('data-image');
            var description = this.getAttribute('data-description');

            document.getElementById('modal-title').textContent = title;
            document.getElementById('modal-image').src = imgSrc;
            document.getElementById('modal-description').textContent = description;

            modal.style.display = 'block';
        });
    });

    closeBtn.addEventListener('click', function() {
        modal.style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });

    // Hide the spinner once the page is fully loaded
    $('#spinner').hide();
});

    
</script>
