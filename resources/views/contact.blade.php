@extends("layouts.base")
		
		@section("content")
	
	 
    <!-- Page Title -->
    <section class="page-title" style="background-image:url(assets/images/background/1.jpg)">
    	<div class="auto-container">
			<h1> Contact Information</h1>
			<ul class="page-breadcrumb">
				<li><a href="index.html">home</a></li>
				<li>Contact</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
    <section class="chooseus-section alternet-2">
        <div class="auto-container">
           
        <div class="row clearfix">
			
            <!-- Info Block -->
            <div class="info-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon flaticon-location-pin"></div>
                    <h5>Location</h5>
                    <div class="text">No.2, Shehu Laminu Way, Maiduguri <br> Borno, Nigeria</div>
                </div>
            </div>
            
            <!-- Info Block -->
            <div class="info-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon flaticon-smartphone"></div>
                    <h5>Phone</h5>
                    <ul class="info-list">
                        <li><a href="tel:+234 8036502128">+234 8036502128</a></li>
                        <li><a href="tel:+234 8036502128">+234 8036502128</a></li>
                    </ul>
                </div>
            </div>
            
            <!-- Info Block -->
            <div class="info-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon flaticon-email-3"></div>
                    <h5>Email</h5>
                    <ul class="info-list">
                        <li><a href="mailto:bornochiefregistar@courts.gov.ng">bornochiefregistar@courts.gov.ng</a></li>
                        <li><a href="mailto:info@bosj.gov.ng">info@bornojudiciary.gov.ng</a></li>
                    </ul>
                </div>
            </div>
        
        </div>


        <section class="contact-form-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>Send your Message</h2>
			</div>
		
	<!-- Contact Form -->
			<div class="contact-form">

				@if (count($errors) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
				
				<!--Contact Form-->
				<form method="post" action="/sendmessage" enctype="multipart/form-data" files="true"  >
                @csrf
					<div class="row clearfix">
					
						<div class="col-lg-6 col-md-6 col-sm-12 form-group">
							<input type="text" value="{{ old('name')}}" name="name" placeholder="Your Full Names" required>
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-12 form-group">
							<input type="email" name="email"  value="{{ old('email')}}" placeholder="Email" required>
						</div>
						
						<div class="col-lg-6 col-md-12 col-sm-12 form-group">
							<input type="text" name="phone"  value="{{ old('phone')}}" placeholder="Phone" required>
						</div>

                         
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
							 <select class="form-select mb-3" name="type" aria-label="Default select example">
                                        <option selected>Select Message Type</option>
                                        <option value="Suggestion">Suggestion</option>
                                        <option value="Complain">Complain</option>
                                        <option value="Petition">Petition</option>
                                    </select>
						</div>
						
						<div class="col-lg-12 col-md-6 col-sm-12 form-group">
							<input class="form-control mb-3" name="attachment" type="file">
						</div>
						
						 
						<div class="col-lg-12 col-md-12 col-sm-12 form-group">
							<textarea name="message" placeholder="Message">{{ old('message')}}</textarea>
						</div>
						
						<div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
							<button class="theme-btn btn-style-two" type="submit" name="submit-form"><span class="txt">Submit now <i class="arrow flaticon-right"></i></span></button>
						</div>
						
					</div>
				</form>
				
				<!--End Contact Form -->
				 
			</div>
		</div>
	</section>
	<!-- End Contact Form Section -->
								
                                <!-- Map Section -->
	<section class="map-section">
    <div class="auto-container">
          
			<div class="inner-container">
				<!-- Map Boxed -->
				<div class="map-boxed">
					<!-- Map Outer -->
					<div class="map-outer">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3904.9915447260473!2d13.146821721704475!3d11.835865493588283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x11049f3f1fc420d9%3A0x95a17a5e3769dac3!2sState%20High%20Court%20of%20Justice!5e0!3m2!1sen!2sng!4v1652455781267!5m2!1sen!2sng" allowfullscreen=""></iframe>
					</div>
				</div>
			</div></div>
            </section>
	<!-- End Map Section -->
        </div>

    </section>
    
	@endsection
	