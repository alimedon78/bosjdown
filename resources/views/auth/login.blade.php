@extends("layouts.backapp")
  
@section("content")

 
<div class="row clearfix">
			
    <!-- Info Block -->
    <div class="info-block col-lg-4 mx-auto col-md-6  col-sm-12">
        <div class="inner-box mt-4">
            <div class="contact-form">    
       
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            
            <!-- Email Address -->
            
            <div class="mt-4 form-group">
                

                <x-input id="email" class="form-group" type="email" name="email" :value="old('email')" placeholder="Your Email" required autofocus />
            </div>
            

            <!-- Password -->
            <div class="mt-4 form-group">
                

                <x-input id="password" class="block mt-1 w-full form-group"
                                type="password"
                                name="password"
                                required autocomplete="current-password" 
                                placeholder="Your Password"/>
            </div>

            
            <a class="underline text-sm text-gray-600 hover:text-gray-900 my-2" href="{{ route('register') }}">
                {{ __('Register new User') }}
            </a>

            <div class="flex items-center justify-end mt-4">
              
                <x-button class="ml-3 theme-btn btn-style-two">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </div>
</div>
</div>
</div>

	@endsection
