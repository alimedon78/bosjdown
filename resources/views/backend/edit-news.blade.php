@extends("layouts.backapp")
  
@section("content")

 
<div class="row clearfix">
			
    <!-- Info Block -->
    <div class="info-block col-lg-4 mx-auto col-md-6  col-sm-12">
        <div class="inner-box mt-4">
            <div class="contact-form">    


        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="/edit-news/{{ $news->id }}" enctype="multipart/form-data" files="true" >
            @csrf
            @method('PATCH')
            <!-- title -->
            <div class="form-group">
                
                <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title', $news->title)" required autofocus />
            </div>

             <!-- content -->
            <div class="form-group">
                
                <textarea id="content" class="block mt-1 w-full" style="height: 315px;"  name="content"   required autofocus >{{old('content', $news->content)}}</textarea>
            </div>

             <!-- image -->
            <div class="form-group">
             <div class="mr-2">
                            <img class="w-12 h-12 py-4 rounded-full" src="{{ asset('storage/news/'.$news->image) }}"/>
                        </div>
                <x-label for="image" :value="__('Image')" />

                <x-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image', $news->image)" autofocus />
            </div>

             <!-- date -->
            <div class="form-group">
                 

                <x-input id="date" class="block mt-1 w-full" type="date" name="date" :value="old('date', $news->date)" required autofocus />
            </div>

            <div class="form-group">
                <x-label for="status" :value="__('Status')" />
                <select class="form-select mb-3" name="status" aria-label="Default select example">
                                        <option :value="old('date', $news->date)">{{ $news->status }}</option>
                                        <option value="1">Publish</option>
                                        <option value="0">Unpublish</option>
                                         
                                    </select></div>

            
             

             

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

