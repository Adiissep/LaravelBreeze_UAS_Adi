<x-app-layout>

    <x-slot name="pageTitle">
        Company List
    </x-slot>

    @if (session('success'))
        <div class="max-w-4xl mx-auto mt-8 bg-green-700 text-white p-3 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto max-w-7xl mx-auto my-10 relative shadow-md sm:rounded-lg bg-white">
        <div class="p-5 bg-white flex items-center justify-between">
            <form action="{{ route('companies.index') }}" method="GET">
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative mt-1">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input name="query" value="{{ request('query') }}" type="text" id="table-search"
                        class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                        placeholder="Search for items">
                </div>
            </form>

                <a href="{{ route('companies.create') }}">
                <x-primary-button class="ml-3"> {{ __('Create Company') }} </x-primary-button></a>
                
            </div>
        <table class="w-full text-sm text-left text-gray-500 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        No.
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Image
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($companies as $key1=>$company)
                    <tr class="bg-white border-b  hover:bg-gray-50 ">
                        <td class="py-4 px-6 ">
                            {{ $key1 + 1 }}
                        </td>
                        <td class="py-4 px-6 ">
                            {{ $company->name }}
                        </td>
                        <td class="py-4 px-6">
                            <a href="{{ asset('storage/media/companies/' . $company->company_image) }}" target="blank">
                                <img src="{{ asset('storage/media/companies/' . $company->company_image) }}"
                                    alt="image" class="w-20 rounded">
                            </a>
                        </td>               
                        <td class="py-4 px-6 flex items-center gap-x-2.5">
                            <a href="{{ route('companies.edit', $company->id) }}"
                                class="font-medium text-blue-600  hover:underline">
                                Edit
                            </a>

                            {{-- Delete companies --}}
                            <form action="{{ route('companies.destroy', $company->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="font-medium text-red-600  hover:underline">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <h3 class="text-2xl text-center font-bold p-5">There is no companies found</h3>
                @endforelse
            </tbody>
        </table>

        {{-- Pagination --}}
        <div class="p-4">
            {{ $companies->links() }}
        </div>
    </div>


</x-app-layout>
