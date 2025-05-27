<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Vit Admin') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full">
    <div class="min-h-screen">
        <!-- Sidebar -->
        <div class="fixed inset-y-0 left-0 z-50 w-64 bg-gray-900 overflow-y-auto">
            <div class="flex h-16 shrink-0 items-center px-6">
                <a href="{{ route('dashboard') }}" class="text-2xl font-bold text-white">
                    {{ config('app.name', 'Vit Admin') }}
                </a>
            </div>
            <nav class="mt-6 px-3">
                <div class="space-y-1">
                    <a href="{{ route('dashboard') }}" class="flex items-center px-2 py-2 text-base font-medium rounded-md text-white hover:bg-gray-800">
                        Dashboard
                    </a>
                    <a href="{{ route('users.index') }}" class="flex items-center px-2 py-2 text-base font-medium rounded-md text-gray-300 hover:bg-gray-800 hover:text-white">
                        Users
                    </a>
                    <a href="{{ route('vehicle-incomes.index') }}" class="flex items-center px-2 py-2 text-base font-medium rounded-md text-gray-300 hover:bg-gray-800 hover:text-white">
                        Vehicle Incomes
                    </a>
                </div>
            </nav>
        </div>

        <!-- Main content -->
        <div class="pl-64">
            <!-- Top header -->
            <div class="sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-4 border-b border-gray-200 bg-white px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8">
                <div class="flex flex-1 gap-x-4 self-stretch lg:gap-x-6">
                    <div class="flex items-center gap-x-4 lg:gap-x-6">
                        <!-- Profile dropdown -->
                        <div class="relative">
                            <button type="button" class="flex items-center gap-x-4 text-sm font-medium leading-6 text-gray-900">
                                <span>{{ Auth::user()->name }}</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <main class="py-10">
                <div class="px-4 sm:px-6 lg:px-8">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>
</body>
</html> 