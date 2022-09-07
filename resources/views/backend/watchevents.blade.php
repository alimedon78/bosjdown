@extends("layouts.backapp")
  
@section("content")

 
<div class="row clearfix">
			
    <!-- Info Block -->
    <div class="info-block col-lg-4 mx-auto col-md-6  col-sm-12">
        <div class="inner-box mt-4">
            <div class="contact-form">    

            
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
            
                    <form method="POST" action="/post-watchevent"  >
                        @csrf
                         
                        <!-- title -->
                        <div class="form-group">
                            
                            <x-input id="title" class="block mt-1 w-full" type="text" name="title" value="{{ $news->title ?? '' }}" required autofocus placeholder="Title"/>
                        </div>
            
                         <!-- desc -->
                         <div class="form-group">
                            
                            <x-input id="description" class="block mt-1 w-full" type="text" name="description" value="{{ $news->description ?? ''  }}"  autofocus />
                        </div>

                         <!-- link -->
                        <div class="form-group">
                            
            
                            <textarea id="link" class="block mt-1 w-full" style="height: 315px;"  name="link"   required autofocus >{{ $news->link ?? ''  }}</textarea>
                        </div>
                        
                       
                        
                         <!-- date -->
                        <div class="form-group">
                            
            
                            <x-input id="date" class="block mt-1 w-full" type="date" name="date" value="{{ $news->date ?? ''  }}" autofocus placeholder="Date"/>
                        </div>
            
                        
            
                        <div class="flex items-center justify-end mt-4">
                             
                            <x-button class="ml-4 theme-btn btn-style-two">
                                {{ __('Update') }}
                            </x-button>
                        </div>
                    </form>
                 
</div>
</div>
</div>
</div>

	@endsection