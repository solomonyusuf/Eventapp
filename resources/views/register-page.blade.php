
<div>
    <style>
        select{
            padding:30px;
            background:#f4f4fe;
            width:100%;
            border:0;
        }
        </style>
               <!-- breadcrumb-area -->
        <section id="parallax" class="slider-area breadcrumb-area d-flex align-items-center justify-content-center fix" style="background-image: url(&quot;img/innerpage_bg_img.jpg&quot;); transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden;">
			<div class="slider-shape ss-one layer" data-depth="0.10" style="transform: translate3d(1.26983px, -2.14904px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"><img src="img/doddle_6.png" alt="shape"></div>
			 <div class="slider-shape ss-three layer" data-depth="0.40" style="transform: translate3d(5.07931px, -8.59617px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><img src="img/doddle_9.png" alt="shape"></div>
			 <div class="slider-shape ss-four layer" data-depth="0.60" style="transform: translate3d(7.61896px, -12.8942px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><img src="img/doddle_7.png" alt="shape"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                            <div class="breadcrumb-wrap text-center">
                                <div class="breadcrumb-title mb-30">
                                    <h2>Register Now</h2>                                   
                                </div>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Register Now</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
            <!-- contact-area start -->
            <section id="contact" class="pt-120 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                            <div class="section-title text-center mb-80">
                                <span>Kindly fill in the correct details</span>
                                <h2>Register Now</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row justify-content-center" x-data="{ showConfirm: @entangle('showConfirmModal') }">

                    
                            @if (session()->has('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            <div class="contact-wrapper">
                                @if (!session()->has('success'))
                                <!-- FORM -->
                                <form x-show="!showConfirm" wire:submit.prevent="openConfirmModal" id="contact-form">
                                    <div class="row">

                                        <!-- Full Name * -->
                                        <div class="col-lg-6 mb-30">
                                            <div class="contact-name">
                                                <input type="text" wire:model="full_name" placeholder="Full Name *">
                                                @error('full_name') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>

                                        <!-- Occupation * -->
                                        <div class="col-lg-6 mb-30">
                                            <div class="contact-occupation">
                                                <input type="text" wire:model="occupation" placeholder="Occupation *">
                                                @error('occupation') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>

                                        <!-- Phone No (Whatsapp) -->
                                        <div class="col-lg-6 mb-30">
                                            <div class="contact-phone">
                                                <input type="text" wire:model="phone" placeholder="Phone No (Whatsapp)">
                                                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>

                                        <!-- Where do you stay? * -->
                                        <div class="col-lg-6 mb-30">
                                            <div class="contact-location">
                                                <input type="text" wire:model="location" placeholder="Where do you stay? *">
                                                @error('location') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>

                                        <!-- Ever been Married? * -->
                                        <div class="col-lg-6 mb-30">
                                            <div class="contact-location">
                                                <select wire:model="married">
                                                    <option value="">Ever been Married? *</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                                @error('married') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>

                                        <!-- Do you have children? * -->
                                        <div class="col-lg-6 mb-30">
                                            <div class="contact-children">
                                                <select wire:model="have_children">
                                                    <option value="">Do you have Child(ren)? *</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                                @error('have_children') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>

                                        <!-- If yes, how many? -->
                                        <div class="col-lg-6 mb-30">
                                            <div class="contact-children-count">
                                                <input type="number" wire:model="children_count" placeholder="If yes, how many?" min="0">
                                                @error('children_count') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>

                                        <!-- Current Relationship Status -->
                                        <div class="col-lg-6 mb-30">
                                            <div class="contact-status">
                                                <select wire:model="relationship_status">
                                                    <option value="">Current Relationship Status *</option>
                                                    <option value="single">Single</option>
                                                    <option value="married">Married</option>
                                                    <option value="divorced">Divorced</option>
                                                </select>
                                                @error('relationship_status') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 mb-30">
                                            <div class="contact-status">
                                                <label>Kindly Upload Your International Passport</label>
                                                <input type="file" wire:model="passport" class="mt-2" style="padding-top:20px;" accept="image">
                                               
                                                @error('passport') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                          <p class="mb-6 text-danger">
                                                    Ensure that only an international passport has been uploaded. Submissions with other documents will be rejected.
                                                </p>
                                        <!-- Submit Button -->
                                        <div class="col-lg-12">
                                            <div class="contact-butoon text-center mt-20">
                                                <button class="btn" type="submit">Submit</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                                @endif
                            </div>

                            <!-- CONFIRMATION MODAL -->
                            <div
                                x-show="showConfirm"
                                class="col-8 fixed inset-0 flex items-center justify-center bg-black bg-opacity-50"
                                style="display: none;"
                            >
                                <div class="bg-white rounded-lg px-4">
                                    <h2 class="text-xl font-bold mb-4">Confirm Submission</h2>
                                    <p class="mb-6">
                                        Ensure all details provided are correct before submitting. Continue?
                                    </p>

                                    <div class="flex justify-end space-x-2">
                                        <button class="btn btn-secondary" @click="showConfirm = false">Cancel</button>

                                        <button class="btn btn-primary"
                                                wire:click="submit"
                                                @click="showConfirm = false">
                                            Yes, Submit
                                        </button>
                                    </div>
                                </div>
                            </div>

</div>


                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area end -->
			
			
</div>
{{-- <section id="parallax" class="slider-area slider-bg second-slider-bg slider-bg3 d-flex align-items-center justify-content-center fix" style="background-image: url(&quot;img/slider_3_bg_img.jpg&quot;); transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden;">
                <div class="slider-shape ss-one layer" data-depth="0.10" style="transform: translate3d(2.25939px, -4.8411px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"><img src="img/doddle_6.png" alt="shape"></div>
                <div class="slider-shape ss-three layer" data-depth="0.40" style="transform: translate3d(9.03755px, -19.3644px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><img src="img/doddle_9.png" alt="shape"></div>
                <div class="slider-shape ss-four layer" data-depth="0.60" style="transform: translate3d(13.5563px, -29.0466px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><img src="img/doddle_7.png" alt="shape"></div>
				<div class="slider-active slick-initialized slick-slider">
                    <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 1200px;"><div class="single-slider slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 1200px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;" tabindex="0">
                        <div class="container">
                            <div class="row">
                               
								<div class="col-lg-8 col-sm-12">
									<div class="booking-form mt-50 align-items-center justify-content-center wow" style="padding:20px;" data-animation="fadeInLeft" data-delay=".2s" style="animation-delay: 0.2s; visibility: visible; animation-name: fadeInLeft;">
										<div x-data="{ showConfirm: @entangle('showConfirmModal') }">
                                                <h2 x-show="!showConfirm">Register Right Now!</h2>
										
                                            @if (session()->has('success'))
                                                <div class="alert alert-success">{{ session('success') }}</div>
                                            @endif

                                            <form x-show="!showConfirm" wire:submit.prevent="openConfirmModal">

                                                <div class="form-outer">
                                                    <div class="icon"><i class="fal fa-user"></i></div>
                                                    <input type="text" wire:model="full_name" placeholder="Enter your full name">
                                                    @error('full_name') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>

                                                <div class="form-outer">
                                                    <div class="icon"><i class="fal fa-envelope"></i></div>
                                                    <input type="email" wire:model="email" placeholder="Enter your email">
                                                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>

                                                <div class="form-outer">
                                                    <div class="icon"><i class="far fa-phone"></i></div>
                                                    <input type="text" wire:model="phone" placeholder="Enter your phone">
                                                    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>

                                                <div class="form-outer">
                                                    <label>Upload international passport image only</label>
                                                    <div class="icon"><i class="fal fa-list"></i></div>
                                                    <input type="file" wire:model="passport">
                                                    @error('passport') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>

                                                <div class="text-danger mt-1 mb-4">
                                                    <strong>Warning:</strong> The only valid means of identification is an international passport, or else registration will be denied.
                                                </div>

                                                <div class="text-center">
                                                    <button class="btn btn-primary" type="submit">
                                                        <i class="far fa-ticket-alt"></i> Submit
                                                    </button>
                                                </div>
                                            </form>

                                            <!-- Confirmation Modal -->
                                            <div
                                                x-show="showConfirm"
                                                class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50"
                                                style="display: none;"
                                            >
                                                <div class="bg-white rounded-lg p-6 w-96">
                                                    <h2 class="text-xl font-bold mb-4">Confirm Submission</h2>
                                                    <p class="mb-6">
                                                        Ensure that only an international passport has been uploaded. Submissions with other documents will be rejected. Continue?
                                                    </p>

                                                    <div class="flex justify-end space-x-2">
                                                        <button
                                                            class="btn btn-secondary"
                                                            @click="showConfirm = false"
                                                        >Cancel</button>

                                                        <button
                                                            class="btn btn-primary"
                                                            wire:click="submit"
                                                            @click="showConfirm = false"
                                                        >Yes, Submit</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                      
									</div>
								</div>
                            </div>
                        </div>
                    </div></div></div>
                </div>
               
            </section> --}}