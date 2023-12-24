<?php

use App\Livewire\Actions\Logout;

$logout = function (Logout $logout) {
    $logout();

    $this->redirect('/', navigate: true);
};

?>

<<<<<<< Updated upstream
<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
=======
<nav x-data="{ open: false }" class=" border-b border-gray-100">
>>>>>>> Stashed changes
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" wire:navigate>
<<<<<<< Updated upstream
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
=======
                        <x-application-logo class="block h-9 w-auto fill-current " />
>>>>>>> Stashed changes
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
<<<<<<< Updated upstream
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
=======
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name"
                                x-on:profile-updated.window="name = $event.detail.name"></div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
>>>>>>> Stashed changes
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
<<<<<<< Updated upstream
                        <x-dropdown-link :href="route('profile')" wire:navigate>
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <button wire:click="logout" class="w-full text-start">
                            <x-dropdown-link>
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </button>
                    </x-slot>
=======
                        <a class="btn btn-sm btn-block btn-ghost justify-start hover:bg-secondary"
                            href="{{ route('profile') }}" wire:navigate>
                            {{ __('Profile') }}
                        </a>
                        <a class="btn btn-sm btn-block btn-ghost justify-start hover:bg-secondary"
                            href="{{ route('profile') }}" wire:navigate>
                            {{ __('Log Out') }}
                        </a>
                    </x-slot>
                </x-dropdown>
                {{-- Theme Controller --}}
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button tabindex="0"
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md focus:outline-none transition ease-in-out duration-150">
                            {{ __('Theme') }}

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <input type="radio" name="theme-dropdown"
                            class="theme-controller btn btn-sm btn-block btn-ghost justify-start hover:bg-secondary" aria-label="Default"
                            value="default" />
                        <input type="radio" name="theme-dropdown"
                            class="theme-controller btn btn-sm btn-block btn-ghost justify-start hover:bg-secondary" aria-label="Retro"
                            value="retro" />
                        <input type="radio" name="theme-dropdown"
                            class="theme-controller btn btn-sm btn-block btn-ghost justify-start hover:bg-secondary" aria-label="Cyberpunk"
                            value="cyberpunk" />
                        <input type="radio" name="theme-dropdown"
                            class="theme-controller btn btn-sm btn-block btn-ghost justify-start hover:bg-secondary" aria-label="Valentine"
                            value="valentine" />
                        <input type="radio" name="theme-dropdown"
                            class="theme-controller btn btn-sm btn-block btn-ghost justify-start hover:bg-secondary" aria-label="Aqua"
                            value="aqua" />
                    </x-slot>
>>>>>>> Stashed changes
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
<<<<<<< Updated upstream
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
=======
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
>>>>>>> Stashed changes
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
<<<<<<< Updated upstream
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
=======
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
>>>>>>> Stashed changes
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
<<<<<<< Updated upstream
                <div class="font-medium text-base text-gray-800" x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>
=======
                <div class="font-medium text-base text-gray-800" x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name"
                    x-on:profile-updated.window="name = $event.detail.name"></div>
>>>>>>> Stashed changes
                <div class="font-medium text-sm text-gray-500">{{ auth()->user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile')" wire:navigate>
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <button wire:click="logout" class="w-full text-start">
                    <x-responsive-nav-link>
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </button>
            </div>
        </div>
    </div>
</nav>
