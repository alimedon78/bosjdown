<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Messages List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-x-auto relative">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                        <tbody>
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
</x-app-layout>
