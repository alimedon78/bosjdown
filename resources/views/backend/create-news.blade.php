<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create News') }}
        </h2>
    </x-slot>
    <x-auth-card >
        <x-slot name="logo">
            
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('create-news') }}" enctype="multipart/form-data" files="true" >
            @csrf

            <!-- title -->
            <div>
                <x-label for="title" :value="__('Title')" />

                <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
            </div>

             <!-- content -->
            <div>
                <x-label for="content" :value="__('Content')" />

                <textarea id="content" class="block mt-1 w-full" style="height: 315px;"  name="content" :value="old('content')" required autofocus >{{old('content')}}</textarea>
            </div>

             <!-- image -->
            <div>
                <x-label for="image" :value="__('Image')" />

                <x-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')" required autofocus />
            </div>

             <!-- date -->
            <div>
                <x-label for="date" :value="__('Date')" />

                <x-input id="date" class="block mt-1 w-full" type="date" name="date" :value="old('date')" required autofocus />
            </div>

            <div>
                <x-label for="status" :value="__('Status')" />
                <select class="form-select mb-3" name="status" aria-label="Default select example">
                                        <option selected>Select Status</option>
                                        <option value="1">Publish</option>
                                        <option value="0">Unpublish</option>
                                         
                                    </select></div>

            
             

             

            <div class="flex items-center justify-end mt-4">
                 
                <x-button class="ml-4">
                    {{ __('Post') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-app-layout>

