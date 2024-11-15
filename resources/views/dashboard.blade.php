<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto space-y-5 max-w-7xl sm:px-6 lg:px-8">
            <div class="flex overflow-hidden shadow-sm bg-blue-50 dark:bg-blue-900 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Welcome Back!") }}
                </div>
            </div>
            <div class="max-w-xs rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-blue-900">
                 <img
                 src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg"
                 class="rounded-t-lg"
                  alt="..." />
                <div class="p-6">
                 <h5
                        class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                        Activities
                 </h5>
                    <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                    Create activities here for your students!
                 </p>
                    <button type="submit" class="px-4 py-3 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Open Activities
                     </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
