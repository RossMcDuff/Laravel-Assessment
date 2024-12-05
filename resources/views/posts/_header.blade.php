<!-- <section class="bg-center bg-no-repeat bg-[url('https://www.pexels.com/photo/brown-hut-island-gazebo-38238')] bg-gray-700 bg-blend-multiply">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="text-4xl">
            Test <span class="text-blue-500">Test</span> Test
        </h1>


        <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
            <div class="relative lg:inline-flex bg-gray-100 rounded-xl">

                <x-category-dropdown />

            </div>

            <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
                <form method="GET" action="#">

                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif

                    <input 
                    type="text" 
                    name="search" 
                    placeholder="Find something"
                    class="bg-transparent placeholder-black font-semibold text-sm"
                    value="{{ request('search') }}"
                    >
                </form>
            </div>
        </div>
    </div>
</section> -->

<section class="bg-white dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Find Your <span class="text-blue-500">Dream</span> Holiday</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Have a look at our customers holiday locations and have your say.</p>
            <div class="inline-flex items-center justify-center px-5 py-1 mr-3 text-base font-medium text-center text-black rounded-lg focus:ring-4 focus:bg-blue-600 dark:focus:bg-blue-600 bg-blue-500 text-xs rounded-2xl hover:bg-blue-600">
                <x-category-dropdown />
            </div>
                <form method="GET" action="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">

                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                <input 
                type="text" 
                name="search" 
                placeholder="Find something"
                class="bg-transparent placeholder-black font-semibold text-sm"
                value="{{ request('search') }}"
                >
                </form>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img class="rounded-xl" src="./images/home-page.jpg" alt="mockup">
        </div>                
    </div>
</section>