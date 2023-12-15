<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-hidden overflow-x-auto p-6 bg-white dark:bg-gray-800">
                    <div class="min-w-full align-middle">
                        <table class="min-w-full divide-y divide-gray-200 border">
                            <thead>
                            <tr>
                                <th class="px-6 py-3 dark:bg-gray-800 text-left ">
                                    <span class="text-xs leading-4 font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">Name</span>
                                </th>
                                <th class="px-6 py-3 dark:bg-gray-800 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">Email</span>
                                </th>
                                <th class="px-6 py-3 dark:bg-gray-800 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">Detail</span>
                                </th>
                            </tr>
                            </thead>

                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 divide-solid">
                            @foreach($users as $user)
                                <tr class="bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100">
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900 dark:text-gray-100">
                                        {{ $user->id }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900 dark:text-gray-100">
                                        {{ $user->email }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900 dark:text-gray-100">
                                        {{-- @if(count($user->details))
                                            <a href="{{ route('users.index') }}" class="text-indigo-600 hover:text-indigo-900 bg-white p-2 rounded">View</a>
                                        @endif --}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-2">
                        {{ $users->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
