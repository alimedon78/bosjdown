@extends("layouts.base")
		
		@section("content")
	
	 
    <!-- Page Title -->
    <section class="page-title" style="background-image:url(assets/images/background/1.jpg)">
    	<div class="auto-container">
			<h1> Contact Us</h1>
			<ul class="page-breadcrumb">
				<li><a href="index.html">home</a></li>
				<li>Contact Us</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
  
    <section class="chooseus-section alternet-2">
        <div class="auto-container">
             <div class="col-xl-6 mx-auto">
 
    <div class="alert alert-success border-0 bg-success alert-dismissible fade show success-alert py-2">
    <div class="d-flex align-items-center">
        <div class="h2 mx-3  text-white"><i class="icon flaticon-checked"></i>
        </div>
        <div class="ms-2">
            <h4 class="mb-0 text-white">{{ $title }}</h4>
            <div class="text-white"><p>{{ $details }}</p></div>
        </div>
    </div>
        </div>

 </div>

            
        </div>
    </section>
    
	@endsection
	