@extends("layouts.backapp")
  
@section("content")

 
<div class="row clearfix">
			
    <!-- Info Block -->
    <div class="info-block col-lg-4 mx-auto col-md-6  col-sm-12">
        <div class="inner-box mt-4">
            <div class="contact-form">    

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        @isset($denied)
        <x-auth-validation-errors class="mb-4" :errors="$denied" />

        <p>{{ $denied }}</p>
            @endisset
 
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="form-group">
               

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus  placeholder="Names"/>

            </div>

            <!-- Email Address -->
            <div class="mt-4 form-group">
                

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required placeholder="User Email"/>
            </div>

            <!-- Password -->
            <div class="mt-4 form-group">
                

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" 
                                placeholder="Your Password"/>
                                
            </div>

            <!-- Confirm Password -->
            <div class="mt-4 form-group">
                

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required 
                                placeholder="Confirm Password"/>
                                
            </div>

            <div class="form-group">
                

                <x-input id="passsecret"  class="block mt-1 w-full" 
                                type="password" 
                                name="passsecret"   required autofocus 
                                placeholder="Your Passsecret"/>
                                
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4 theme-btn btn-style-two">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </div>
</div>
</div>
</div>

	@endsection

