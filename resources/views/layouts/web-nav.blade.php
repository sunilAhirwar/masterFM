<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">

    <div class="nav-top-con">
        <div class="nav-top-in overflow-auto">
            <div class="mx-auto max-w-7xl py-1 px-4 sm:px-4 lg:px-6">
                <div class="text-white text-xs flex py-1">
                    <span class="flex-none mr-4"><span class="mr-2"><i class="fa-solid fa-phone"></i></span><a href="tel:0123456789">0123456789</a></span>                
                    <span class="flex-none mr-2"><span class="mr-2"><i class="fa-solid fa-envelope"></i></i></span><a href="mail:admin@masterfacilityservices.com.au">admin@masterfacilityservices.com.au</a></span>
                    <span class="flex-1"></span>
                    
                    <span class="flex-none mr-3"><a href=""><i class="fa-brands fa-facebook"></i></a></span>
                    <span class="flex-none mr-3"><a href=""><i class="fa-brands fa-twitter"></i></a></span>
                    <span class="flex-none mr-4 md:mr-0"><a href=""><i class="fa-brands fa-instagram"></i></a></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Drawer -->         
            <div x-show="open" class="drawer fixed top-0 left-0 w-full h-screen bg-grey-500 bg-opacity-50">
                <aside @click.outside="open = false" class="drawer-menu min-h-screen">
                    <div class="mb-6 flex flex-row justify-start">
                        <a class="hidden" href="{{ route('home') }}">
                            <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                        </a>
                        <span class="close-nav" @click="open = false"><i class="fa-solid fa-xmark"></i></span>
                    </div>

                    <span class="hidden w-full h-1 bg-zinc-800 my-4"></span>

                    <a href="{{ route('home') }}">
                        <div class="{{ request()->routeIs('home') ? 'text-indigo-700' : 'text-neutral-200' }} 
                        py-2 mx-2 text-md font-bold border-b-2 border-zinc-800 hover:text-sky-600">
                            Home
                        </div>
                    </a>

                    <a href="{{ route('about') }}">
                        <div class="{{ request()->routeIs('about') ? 'text-indigo-700' : 'text-neutral-200' }} 
                            py-2 mx-2 text-md font-bold border-b-2 border-zinc-800 hover:text-sky-600">
                            About
                        </div>
                    </a>

                    <div x-data="{subMenu: false}" class="{{ Request::is('services/*') ? 'text-indigo-700' : 'text-neutral-200' }} 
                        group relative py-2 mx-2 text-neutral-200 text-md font-bold border-b-2 border-zinc-800 hover:text-sky-600">
                        <button @click="subMenu = !subMenu" @click.outside="subMenu = false" class="flex items-center justify-between" type="button"> 
                            Services
                            <svg x-show="!subMenu" class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                            
                            <svg x-show="subMenu" class="w-2.5 h-2.5 ml-2.5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z"/>
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div x-show="subMenu">
                            <ul>
                                <a href="{{ route('asset') }}">
                                    <div class="{{ request()->routeIs('asset') ? 'text-indigo-700' : 'text-neutral-200' }} 
                                        py-2 mx-2 text-md font-bold border-zinc-800 hover:text-sky-600">
                                        Asset Management
                                    </div>
                                </a>
                                <a href="{{ route('hospitality') }}">
                                    <div class="{{ request()->routeIs('hospitality') ? 'text-indigo-700' : 'text-neutral-200' }} 
                                        py-2 mx-2 text-md font-bold border-zinc-800 hover:text-sky-600">
                                        Commercial hospitality
                                    </div>
                                </a> 
                                <a href="{{ route('electrical') }}">
                                    <div class="{{ request()->routeIs('electrical') ? 'text-indigo-700' : 'text-neutral-200' }} 
                                        py-2 mx-2 text-md font-bold border-zinc-800 hover:text-sky-600">
                                        Electrical Safety Testing
                                    </div>
                                </a> 
                                <a href="{{ route('workspace') }}">
                                    <div class="{{ request()->routeIs('workspace') ? 'text-indigo-700' : 'text-neutral-200' }} 
                                        py-2 mx-2 text-md font-bold border-zinc-800 hover:text-sky-600">
                                        Workspace Management
                                    </div>
                                </a> 
                                <a href="{{ route('security') }}">
                                    <div class="{{ request()->routeIs('security') ? 'text-indigo-700' : 'text-neutral-200' }} 
                                        py-2 mx-2 text-md font-bold border-zinc-800 hover:text-sky-600">
                                        Security Services
                                    </div>
                                </a>
                                <a href="{{ route('operational') }}">
                                    <div class="{{ request()->routeIs('operational') ? 'text-indigo-700' : 'text-neutral-200' }} 
                                        py-2 mx-2 text-md font-bold border-zinc-800 hover:text-sky-600">
                                        Operational services
                                    </div>
                                </a> 
                                <a href="{{ route('infection') }}">
                                    <div class="{{ request()->routeIs('infection') ? 'text-indigo-700' : 'text-neutral-200' }} 
                                        py-2 mx-2 text-md font-bold border-zinc-800 hover:text-sky-600">
                                        Infection Control
                                    </div>
                                </a> 
                                <a href="{{ route('cleaning') }}">
                                    <div class="{{ request()->routeIs('cleaning') ? 'text-indigo-700' : 'text-neutral-200' }} 
                                        py-2 mx-2 text-md font-bold border-zinc-800 hover:text-sky-600">
                                        Commercial Cleaning
                                    </div>
                                </a>                      
                            </ul>
                        </div>
                    </div>        
                    
                    <a href="{{ route('innovation') }}">
                        <div class="{{ request()->routeIs('innovation') ? 'text-indigo-700' : 'text-neutral-200' }} 
                            py-2 mx-2 text-md font-bold border-b-2 border-zinc-800 hover:text-sky-600">
                            Innovation
                        </div>
                    </a>

                    <a href="{{ route('contact') }}">
                        <div class="{{ request()->routeIs('contact') ? 'text-indigo-700' : 'text-neutral-200' }} 
                            py-2 mx-2 text-md font-bold hover:text-sky-600">
                            Contact
                        </div>
                    </a>
                </aside>
            </div>
            
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
                        {{ __('About') }}
                    </x-nav-link>
                   
                    <div x-data="{services: false}" class="{{ Request::is('services/*') ? 'border-b-2 border-indigo-700' : '' }} 
                        group relative h-full mx-4 flex items-center text-neutral-900 text-md font-bold hover:text-sky-600 
                        border-b-2 border-transparent hover:border-b-2 hover:border-sky-600">
                        <button @click="services = !services" @click.outside="services = false" class="flex items-center justify-center mt-1" type="button"> 
                            Services 
                            <svg x-show="!services" class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                            
                            <svg x-show="services" class="w-2.5 h-2.5 ml-2.5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z"/>
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div x-show="services"  class="absolute top-20 left-0 z-50 bg-white divide-y divide-gray-100 rounded-lg shadow w-52 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                                <li>
                                    <a href="{{ route('asset') }}" 
                                        class="{{ request()->routeIs('asset') ? 'text-indigo-700' : '' }} hover:text-sky-600 block px-4 py-2 hover:bg-gray-100">
                                        Asset Management
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('hospitality') }}" 
                                        class="{{ request()->routeIs('hospitality') ? 'text-indigo-700' : '' }} hover:text-sky-600 block px-4 py-2 hover:bg-gray-100">
                                        Commercial hospitality
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('electrical') }}" 
                                        class="{{ request()->routeIs('electrical') ? 'text-indigo-700' : '' }} hover:text-sky-600 block px-4 py-2 hover:bg-gray-100">
                                        Electrical Safety Testing
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('workspace') }}" 
                                        class="{{ request()->routeIs('workspace') ? 'text-indigo-700' : '' }} hover:text-sky-600 block px-4 py-2 hover:bg-gray-100">
                                        Workspace Management
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('security') }}" 
                                        class="{{ request()->routeIs('security') ? 'text-indigo-700' : '' }} hover:text-sky-600 block px-4 py-2 hover:bg-gray-100">
                                        Security Services
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('operational') }}" 
                                        class="{{ request()->routeIs('operational') ? 'text-indigo-700' : '' }} hover:text-sky-600 block px-4 py-2 hover:bg-gray-100">
                                        Operational services
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('infection') }}" 
                                        class="{{ request()->routeIs('infection') ? 'text-indigo-700' : '' }} hover:text-sky-600 block px-4 py-2 hover:bg-gray-100">
                                        Infection Control
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('cleaning') }}" 
                                        class="{{ request()->routeIs('cleaning') ? 'text-indigo-700' : '' }} hover:text-sky-600 block px-4 py-2 hover:bg-gray-100">
                                        Commercial Cleaning
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
        
                    <x-nav-link :href="route('innovation')" :active="request()->routeIs('innovation')">
                        {{ __('Innovation') }}
                    </x-nav-link>
                </div>
            </div>

            <div class="flex items-center sm:ms-6">
                <span></span>
                <a href="{{ route('contact') }}" class="hidden md:block text-white text-sm gradient-1 py-2 px-4 rounded-3xl uppercase font-semibold hover:bg-sky-600">Contact</a>
            </div>
        </div>
    </div>
</nav>
