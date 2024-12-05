<!doctype html>

<title>DreamHolidays</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center text-xl p-6">
            <div>
                <!-- <a href="/">
                    <img src="#" alt="Logo" width="165" height="16">
                </a> -->
                <a href="/">
                    <h1>DreamHolidays.com</h1>
                </a>
            </div>

            <div class="mt-8 md:mt-0 flex items-center">
                @auth

                    <x-dropdown>
                        <x-slot name="trigger">
                            <button class="text-sm font-bold uppercase">Welcome, {{ auth()->user()->name }}!</button>
                        </x-slot>

                        <x-dropdown-item href="/admin/posts" :active="request()->is('admin/posts')">Dashboard</x-dropdown-item>
                        <x-dropdown-item href="/admin/posts/create" :active="request()->is('admin/posts/create')">New Post</x-dropdown-item>

                        <x-dropdown-item href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">Log Out</x-dropdown-item>

                        <form id="logout-form" method="POST" action="/logout" class="hidden">
                        @csrf

                        <button type="submit">Log Out</button>

                    </form>

                    </x-dropdown>
                    

                @else
                    <a href="/register" class="text-sm font-bold uppercase">Register</a>
                    <a href="/login" class="ml-6 text-sm font-bold uppercase">Log In</a>
                @endauth
                

                <a href="#" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    #
                </a>
            </div>
        </nav>

        {{ $slot }}

        <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="#" alt="" class="mx-auto -mb-6" style="width: 145px;">
            <h5 class="text-3xl">Sign up to share your experience</h5>
            <p class="text-sm mt-3">Or review your favourite places</p>

            <div class="mt-10">
                <a href="/register">
                <x-form.button>Sign Up</x-form.button>
                </a>
            </div>

            </div>
        </footer>
    </section>

    <x-flash />

</body>
