<x-guest-layout>
    <div class="flex flex-col items-center justify-center space-y-2 gap-x-6">
        <img src="https://wallpaperaccess.com/full/7137675.jpg" alt="Logo">
        <div class="px-10 pt-5 pb-10 mx-1 bg-blue-700 rounded-md gap-x-5">
            <h2 class="py-6 text-2xl text-left text-gray-800 dark:text-white">Student Management App</h2>
            <h3 class="text-justify text-gray-800 dark:text-white">Lorem ipsum odor amet, consectetuer adipiscing elit. Condimentum vel ad interdum id cursus. Ante consectetur malesuada suscipit curabitur himenaeos massa velit ligula. Lacus sollicitudin senectus eleifend erat mauris; vehicula montes. Justo lobortis augue, eleifend elementum felis duis lorem morbi. Quam morbi maximus tempus aenean ullamcorper tellus libero. Cursus semper malesuada natoque magna cursus imperdiet vitae. Accumsan sagittis arcu natoque ante et eleifend.</h3>
        </div>
        @if (Route::has('login'))
            <nav class="flex justify-end flex-1 -mx-3 space-x-10">
                @auth
                    <a
                        href="{{ url('/dashboard') }}"
                        class="rounded-md px-3 py-2 bg-blue-600 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        Dashboard
                    </a>
                @else
                    <a
                        href="{{ route('login') }}"
                        class="rounded-md px-10 py-2 space-y-4 bg-blue-500 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="rounded-md px-10 py-2 bg-blue-500 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
            @endif
    </div>
    
</x-guest-layout>