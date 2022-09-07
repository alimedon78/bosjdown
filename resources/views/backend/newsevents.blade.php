@extends("layouts.backapp")
  
@section("content")

 
<div class="row clearfix">
			
    <!-- Info Block -->
    <div class="info-block col-lg-10 mx-auto col-md-6  col-sm-12">
        <div class="inner-box mt-4">
             
     
                <a href="/post-news"><x-button class="ml-3 my-3 mx-6 theme-btn btn-style-two">
                    {{ __('Create') }}
                </x-button></a>

                <div class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
    <tbody>
        <thead class="text-xs uppercase bg-gray-50 ">
            <tr>
                <th scope="col" class="py-3 px-6">
                   Title 
                </th>
                <th scope="col" class="py-3 px-6">
                    Body
                </th>
                <th scope="col" class="py-3 px-6">
                    Date
                </th>
                 <th scope="col" class="py-3 px-6">
                    User
                </th>
                <th scope="col" class="py-3 px-6">
                    Status
                </th>
                 <th scope="col" class="py-3 px-6">
                    Updated at
                </th>
                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
        </thead>
       
            @forelse ($events as $event)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="py-4 px-6">
                    <div class="flex items-center">
                        <div class="mr-2">
                            <img class="w-6 h-6 rounded-full" src="{{ asset('storage/news/'.$event->image) }}"/>
                        </div>
                        <span>{{ $event->title}}</span>
                    </div>
                </td>
                <td class="py-4 px-6">
                    {{ Str::limit($event->content, 40) }}
                </td>
                <td class="py-4 px-6">
                    {{ $event->date }}
                </td>
                <td class="py-4 px-6">
                    {{ $event->user->name }}
                </td>
                <td class="py-4 px-6">
                    {{ $event->status }}
                </td>
                <td class="py-4 px-6">
                    {{ $event->updated_at }}
                </td>
                <td class="py-4 px-6">
                    <div class="flex item-center justify-center">
                                                     
                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                            <a href="/edit-news/{{ $event->id }}/edit" ><svg  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg></a>
                        </div>
                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                            
                             <form method="POST" action="/edit-news/{{ $event->id }}" enctype="multipart/form-data" files="true" >
                                @csrf
                                @method('DELETE')

                            <button><svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>  </button>
                            </form>
                        </div>
                    </div>
            </td>

            </tr>
            @empty
                            <tr>
                                <td colspan="4" class='text-center'>Data not Found</td>
                            </tr>
                            @endforelse
            
        </tbody>
    </table>
</div>
 
</div>
</div>
</div>

	@endsection