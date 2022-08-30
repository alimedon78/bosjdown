@extends("layouts.base")
		
		@section("content")
	
	 
    <!-- Page Title -->
    <section class="page-title" style="background-image:url(assets/images/background/1.jpg)">
    	<div class="auto-container">
			<h1> Online Court Sitting</h1>
			<ul class="page-breadcrumb">
				<li><a href="index.html">home</a></li>
				<li>OCS </li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
     
								
                             <!-- video-section -->
    <section class="video-section">
        <div class="auto-container">
            <div class="video-content mx-auto">
                 
                <div id="image_block_1">
                    <div class="image-box mx-auto">
                        <div class="video-inner" style="background-image: url(assets/images/resource/video-img.jpg);">
                           
                            <div class="mx-auto">
                                <h4>{{ $watch->title }}</h4>
                                {!! $watch->link ?? '<a href="https://www.youtube.com/watch" class="lightbox-image video-btn" data-caption="">
                                    <i class="flaticon-play-arrow"></i>
                                </a>' !!}
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- video-section end -->
         
    
	@endsection
	