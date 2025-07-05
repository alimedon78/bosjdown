@extends("layouts.base")
		
		@section("content")
	
	 
    <!-- Page Title -->
    <section class="page-title" style="background-image:url(/assets/images/background/1.jpg)">
    	<div class="auto-container">
			<h1> News And Events</h1>
			<ul class="page-breadcrumb">
				<li><a href="index.html">home</a></li>
				<li>News </li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
    <section >
        <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
				
				<!-- Content Side -->
                <div class="content-side col-lg-7 col-md-12 col-sm-12">
                	<!-- Block Detail -->

					@isset($snf)
						<p>{{ $snf }}</p>
					@endisset
					<div class="blog-detail">
						<div class="inner-box">
							@if (isset($latest))
								 <div class="image"> 
										<img src="{{ asset('storage/news/'.$latest->image ) }}" alt="" />
										<div class="category">Event</div>
										<ul class="post-meta">
											<li><span class="icon flaticon-timetable"></span>{{ $latest->date}}</li>
											<li><span class="icon flaticon-user-2"></span>{{ $latest->user->name }}</li>
										</ul>
									</div>
									<div class="lower-content">
										<h3>{{ $latest->title }}</h3>
									<p style="text-align:justify;" >	{!! $latest->content !!} </p>
									</div>
									 
								@elseif (isset($search))
									@foreach ($search as $result)
									@if ($loop->first)
									<div class="image"> 
										<img src="{{ asset('storage/news/'.$result->image ) }}" alt="" />
										<div class="category">Event</div>
										<ul class="post-meta">
											<li><span class="icon flaticon-timetable"></span>{{ $result->date}}</li>
											<li><span class="icon flaticon-user-2"></span>{{ $result->user->name }}</li>
										</ul>
									</div>
									<div class="lower-content">
										<h3>{{ $result->title }}</h3>
										{!! $result->content !!}
									</div>
									@endif
								@endforeach
							@elseif(! request('search') == null)
							@foreach ($search as $result)
								@if ($loop->first)
							<div class="image"> 
								<img src="{{ asset('storage/news/'.$result->image ) }}" alt="" />
								<div class="category">Event</div>
								<ul class="post-meta">
									<li><span class="icon flaticon-timetable"></span>{{ $result->date}}</li>
									<li><span class="icon flaticon-user-2"></span>{{ $result->user->name }}</li>
								</ul>
							</div>
							<div class="lower-content">
								<h3>{{ $result->title }}</h3>
								{!! $result->content !!}
							</div>

								@elseif ($loop->remaining)
							<div class="image"> 
								<img src="{{ asset('storage/news/'.$result->image ) }}" alt="" />
								<div class="category">Event</div>
								<ul class="post-meta">
									<li><span class="icon flaticon-timetable"></span>{{ $result->date}}</li>
									<li><span class="icon flaticon-user-2"></span>{{ $result->user->name }}</li>
								</ul>
							</div>
							<div class="lower-content">
								<h3>{{ $result->title }}</h3>
								{!! $result->content !!}
							</div>
							
								@endif
							@endforeach
							 
							@endif
							 
							 
						</div>
						 
					</div>
				</div>
				
				<!-- Sidebar Side -->
                <div class="sidebar-side col-lg-5 col-md-12 col-sm-12">
                	<aside class="sidebar sticky-top">
						<div class="sidebar-inner">
						
							<!-- Search -->
							<div class="sidebar-widget search-box">
								<form method="get" action="/news-and-events">
									<div class="form-group">
										<input type="search" name="search" value="{{ request('search') }}" placeholder="Search ....." required>
										<button type="submit"><span class="icon fa fa-search"></span></button>
									</div>
								</form>
							</div>
							 
							<!-- Popular Post Widget -->
							<div class="sidebar-widget popular-posts">
								<div class="widget-content">
									<div class="sidebar-title">
										<h5>latest News and Events</h5>
									</div>
									@forelse ($events as $event)
									<article class="post">
										<figure class="post-thumb"><img src="{{ asset('storage/news/'.$event->image) }}" alt=""><a href="blog-detail.html" class="overlay-box"></a></figure>
										<div class="text"><a href="/news-and-events/{{ $event->slug}}">{{ $event->title }}</a></div>
										<div class="post-info">{{ $event->date }}</div>
									</article>
									
									@empty
									<article class="post">
										<div class="text"><a href="#">Not Found</a></div>

									</article>
									@endforelse
								</div>
							</div>
							
							 
						</div>
					</aside>
				</div>
				
			</div>
		</div>
	</div>
	
    </section>
    
	@endsection
	
