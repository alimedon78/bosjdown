@extends("layouts.backapp")
  
@section("content")

 
<div class="row clearfix">
			
    <!-- Info Block -->
    <div class="info-block col-lg-10 mx-auto col-md-6  col-sm-12">
        <div class="inner-box mt-4">
            
            <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <thead class="text-xs uppercase bg-gray-50 ">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    Names
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Email
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Phone
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Subject
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Message
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    File
                                </th>
                            </tr>
                        </thead>
                       
                            @forelse ($messages as $message)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                   {{ $message->name }}
                                </th>
                                <td class="py-4 px-6">
                                    {{ $message->email }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $message->phone }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $message->type }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ Str::limit($message->message, 40) }}
                                </td>
                                <td class="py-4 px-6">
                                    <a href="{{ route('file.download', $message->file) }}" >{{ $message->file }}</a>
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
