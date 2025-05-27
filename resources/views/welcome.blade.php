<x-layouts.app>
    <div class="relative isolate px-6 pt-14 lg:px-8">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-primary-200 to-primary-600 opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"></div>
        </div>
        
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
            <div class="text-center">
                <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                    Welcome to Vit Admin
                </h1>
                <p class="mt-6 text-lg leading-8 text-gray-600">
                    A modern admin dashboard built with Laravel, Vite, and Tailwind CSS
                </p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    @auth
                        <a href="{{ route('dashboard') }}" class="btn btn-primary">Go to Dashboard</a>
                    @else
                        <a href="{{ route('register') }}" class="btn btn-primary">Get Started</a>
                        <a href="{{ route('login') }}" class="btn btn-secondary">Sign In</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
