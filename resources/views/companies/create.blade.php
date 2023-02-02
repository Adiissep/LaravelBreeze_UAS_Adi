<x-app-layout>

    <x-slot name="pagename">
       Company Article 
    </x-slot>

    <div class="my-12 p-6 max-w-3xl mx-auto shadow bg-white rounded-lg">
        <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">
                    Company
                </label>
                <input value="{{ old('name') }}" name="name" type="text" id="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">

                @error('name')
                    <p class="text-sm text-red-500"> {{ $message }} </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="company_image" class="block mb-2 text-sm font-medium text-gray-900 ">
                    Image
                </label>
                <input name="company_image" type="file" id="company_image"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">

                @error('company_image')
                    <p class="text-sm text-red-500"> {{ $message }} </p>
                @enderror
            </div>

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                Submit</button>
        </form>
    </div>

</x-app-layout>
