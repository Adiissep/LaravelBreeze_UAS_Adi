<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
            
        {{-- Notifications --}}
        <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification" data-dropdown-placement="bottom" class="inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none dark:hover:text-white dark:text-gray-400" type="button"> 
            <svg class="w-6 h-6 object-center" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
            <div class="relative flex">
              <div class="relative inline-flex w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-2 right-3 dark:border-gray-900"></div>
            </div>
        </button>
        <!-- Dropdown menu -->
        <div id="dropdownNotification" class="z-20 hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-800 dark:divide-gray-700" aria-labelledby="dropdownNotificationButton">
            <div class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50 dark:bg-gray-800 dark:text-white">
              {{ __('Notifications') }}
            </div>

            @foreach ($article as $key=>$post)
            <div class="divide-y divide-gray-100 dark:divide-gray-700">
              <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                <div class="flex-shrink-0">
                  <img class="rounded-full w-11 h-11" src="https://notjustalabel-prod.s3-accelerate.amazonaws.com/s3fs-public/adi%20%20new%20logo%20.jpg" alt="adi">
                  <div class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                    <svg class="w-3 h-3 text-white" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
                  </div>
                </div>
                <div class="w-full pl-3">
                    <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">New Article from <span class="font-semibold text-gray-900 dark:text-white">{{ $post->user->name }}</span>: "{{ $post->title }}"</div>
                    <div class="text-xs text-blue-600 dark:text-blue-500">{{ $post->created_at }}</div>
                </div>
              </a>
            </div>
            @endforeach
            <a href="#" class="block py-2 text-sm font-medium text-center text-gray-900 rounded-b-lg bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">
              <div class="inline-flex items-center ">
                <svg class="w-4 h-4 mr-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
                  View all
              </div>
            </a>
          </div>
        </h2>
    
    </x-slot>

    <div class="py-6 border-b border-gray-200">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-5 text-gray-900 dark:text-gray-100">
                    {{ Auth::user()->name }} {{ (", You're logged in!") }} <br/>                   
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="p-2 text-center text-gray-900 dark:text-gray-100"> 
    {{ ("Below is the article that was created ⬇️") }}
    </div>

    <div class="py-1">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">          
            @foreach ($article as $key=>$post)
             <div class="p-1 bg-white border-b border-gray-200">    
              <h1 class="text-2xl">{{ ("No.") }} {{$key + 1}} {{ ("| Title :") }} {{$post->title}}</h1>
              <p>by {{ $post->user->name }}</p>
             </div>
            @endforeach
          </div>
        </div>
    </div> --}}
    
</x-app-layout>
