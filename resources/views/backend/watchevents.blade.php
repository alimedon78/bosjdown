<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Event Streaming Link') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                
                <x-auth-card >
                    <x-slot name="logo">
                        
                    </x-slot>
            
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
            
                    <form method="POST" action="/post-watchevent"  >
                        @csrf
                         
                        <!-- title -->
                        <div>
                            <x-label for="title" :value="__('Title')" />
            
                            <x-input id="title" class="block mt-1 w-full" type="text" name="title" value="{{ $news->title ?? '' }}" required autofocus />
                        </div>
            
                         <!-- desc -->
                         <div>
                            <x-label for="description" :value="__('Description')" />
            
                            <x-input id="description" class="block mt-1 w-full" type="text" name="description" value="{{ $news->description ?? ''  }}"  autofocus />
                        </div>

                         <!-- link -->
                        <div>
                            <x-label for="link" :value="__('Link')" />
            
                            <textarea id="link" class="block mt-1 w-full" style="height: 315px;"  name="link"   required autofocus >{{ $news->link ?? ''  }}</textarea>
                        </div>
                        
                       
                        
                         <!-- date -->
                        <div>
                            <x-label for="date" :value="__('Date')" />
            
                            <x-input id="date" class="block mt-1 w-full" type="date" name="date" value="{{ $news->date ?? ''  }}" autofocus />
                        </div>
            
                        
            
                        <div class="flex items-center justify-end mt-4">
                             
                            <x-button class="ml-4">
                                {{ __('Update') }}
                            </x-button>
                        </div>
                    </form>
                </x-auth-card>

            </div>
        </div>
    </div>
</x-app-layout>
