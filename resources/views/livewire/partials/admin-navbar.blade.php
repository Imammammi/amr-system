<!-- Desktop sidebar -->
<aside class="scrollbar z-20 md:hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 flex-shrink-0">
    <div class="py-4 text-white dark:text-gray-400">
        {{-- <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
            <div class="flex items-center space-x-1 ml-2">
                <img src="{{ asset('img/kssqaa-logo.jpg') }}" width="40" class="rounded-full" alt="">
                <div>KSSQAA</div>
            </div>
        </a> --}}
        <ul class="mt-6">
            <li class="relative px-6 py-3">
                <!-- Active items have the snippet below -->
                <span class="absolute inset-y-0 left-0 w-1 bg-white rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"></span>

                <!-- Add this classes to an active anchor (a tag) -->
                <a class="inline-flex items-center w-full text-sm text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 font-semibold transition-colors duration-150"
                    href="{{ url('/') }}">
                    <i class="fa-solid fa-house text-lg"></i>
                    <span class="ml-4">Dashboard</span>
                </a>
            </li>
        </ul>
        <ul>
            <li x-data="{ open: @entangle('toggleCustomer').defer }" class="relative px-6 py-3">
                <!-- Active items have the snippet below -->
                @if (Route::is(['lecturetypes*']))
                    <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg"
                        aria-hidden="true"></span>
                @endif

                <button
                    class="inline-flex items-center justify-between w-full text-sm text-gray-400 font-semibold transition-colors duration-150 dark:hover:text-gray-200"
                    @click="open = !open">
                    <span class="inline-flex items-center">
                        <i class="fa-solid fa-calculator text-lg"></i>
                        <span class="ml-6">Devices</span>
                    </span>
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div style="display: none" 
                    x-show="open" 
                    x-transition:enter="transition-all ease-in-out duration-500"
                    x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl"
                    x-transition:leave="transition-all ease-in duration-300">
                    <ul class="p-2 pl-8 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                        aria-label="submenu">
                        <li
                            class="px-2 py-1 hover:text-gray-800 dark:hover:text-gray-200">
                            <a class="w-full" href="{{ url('add-device') }}">Add Device</a>
                        </li>
                        <li
                            class="px-2 py-1 hover:text-gray-800 dark:hover:text-gray-200">
                            <a class="w-full" href="{{ url('devices') }}">Devices</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li x-data="{ open: @entangle('toggleCustomer').defer }" class="relative px-6 py-3">
                <!-- Active items have the snippet below -->
                @if (Route::is(['lecturetypes*']))
                    <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg"
                        aria-hidden="true"></span>
                @endif

                <button
                    class="inline-flex items-center justify-between w-full text-sm text-gray-400 font-semibold transition-colors duration-150 dark:hover:text-gray-200"
                    @click="open = !open">
                    <span class="inline-flex items-center">
                        <i class="fa-solid fa-cubes text-lg"></i>
                        <span class="ml-4">Device Templates</span>
                    </span>
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div style="display: none" 
                    x-show="open" 
                    x-transition:enter="transition-all ease-in-out duration-500"
                    x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl"
                    x-transition:leave="transition-all ease-in duration-300">
                    <ul class="p-2 pl-8 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                        aria-label="submenu">
                        <li
                            class="px-2 py-1 hover:text-gray-800 dark:hover:text-gray-200">
                            <a class="w-full" href="{{ url('add-device-template') }}">Add Device Template</a>
                        </li>
                        <li
                            class="px-2 py-1 hover:text-gray-800 dark:hover:text-gray-200">
                            <a class="w-full" href="{{ url('device-templates') }}">Device Templates</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="relative px-6 py-3">
                <!-- Active items have the snippet below -->
                @if (Route::is(['lecturetypes*']))
                    <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg"
                        aria-hidden="true"></span>
                @endif

                <!-- Add this classes to an active anchor (a tag) -->
                <!-- text-gray-800 dark:text-gray-100 -->
                <a class="inline-flex items-center w-full text-sm text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 font-semibold transition-colors duration-150"
                    href="{{ url('users') }}">
                    <i class="fa-solid fa-users text-lg"></i>
                    <span class="ml-5">User Management</span>
                </a>
            </li>

            <li class="relative px-6 py-3">
                <!-- Active items have the snippet below -->
                @if (Route::is(['lecturetypes*']))
                    <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg"
                        aria-hidden="true"></span>
                @endif

                <!-- Add this classes to an active anchor (a tag) -->
                <!-- text-gray-800 dark:text-gray-100 -->
                <a class="inline-flex items-center w-full text-sm text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 font-semibold transition-colors duration-150"
                    href="{{ url('/#') }}">
                    <i class="fa-solid fa-clock text-lg"></i>
                    <span class="ml-5">Schedules</span>
                </a>
            </li>

            <li x-data="{ open: @entangle('toggleCustomer').defer }" class="relative px-6 py-3">
                <!-- Active items have the snippet below -->
                @if (Route::is(['lecturetypes*']))
                    <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg"
                        aria-hidden="true"></span>
                @endif

                <button
                    class="inline-flex items-center justify-between w-full text-sm text-gray-400 font-semibold transition-colors duration-150 dark:hover:text-gray-200"
                    @click="open = !open">
                    <span class="inline-flex items-center">
                        <i class="fa-solid fa-circle-nodes text-lg"></i>
                        <span class="ml-5">Agents</span>
                    </span>
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div style="display: none" 
                    x-show="open" 
                    x-transition:enter="transition-all ease-in-out duration-500"
                    x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl"
                    x-transition:leave="transition-all ease-in duration-300">
                    <ul class="p-2 pl-8 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                        aria-label="submenu">
                        <li
                            class="px-2 py-1 hover:text-gray-800 dark:hover:text-gray-200">
                            <a class="w-full" href="{{ url('/#') }}">Add Agent</a>
                        </li>
                        <li
                            class="px-2 py-1 hover:text-gray-800 dark:hover:text-gray-200">
                            <a class="w-full" href="{{ url('/#') }}">Agents</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="relative px-6 py-3">
                <!-- Active items have the snippet below -->
                @if (Route::is(['lecturetypes*']))
                    <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg"
                        aria-hidden="true"></span>
                @endif

                <!-- Add this classes to an active anchor (a tag) -->
                <!-- text-gray-800 dark:text-gray-100 -->
                <a class="inline-flex items-center w-full text-sm text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 font-semibold transition-colors duration-150"
                    href="{{ url('/#') }}">
                    <i class="fa-solid fa-folder-closed text-lg"></i>
                    <span class="ml-6">Logs</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <!-- Active items have the snippet below -->
                @if (Route::is(['lecturetypes*']))
                    <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg"
                        aria-hidden="true"></span>
                @endif

                <!-- Add this classes to an active anchor (a tag) -->
                <!-- text-gray-800 dark:text-gray-100 -->
                <a class="inline-flex items-center w-full text-sm text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 font-semibold transition-colors duration-150"
                    href="{{ url('/#') }}">
                    <i class="fa-solid fa-gear text-lg"></i>
                    <span class="ml-6">Configuration</span>
                </a>
            </li>
        </ul>
        {{-- <div class="px-6 my-6">
            <button class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Create account
                <span class="ml-2" aria-hidden="true">+</span>
            </button>
        </div> --}}
    </div>
</aside>

<!-- Mobile sidebar -->
<!-- Backdrop -->
<div x-cloak x-show="openSideMenu" x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
<aside class="scrollbar fixed inset-y-0 z-40 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-blue-500 dark:bg-gray-800"
    x-cloak x-show="openSideMenu" x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
    @keydown.escape="closeSideMenu">
    <div class="py-4 text-white dark:text-gray-400">
        {{-- <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
            KSSQAA
        </a> --}}
        <ul class="mt-6">
            <li class="relative px-6 py-3">
                <!-- Active items have the snippet below -->
                <span class="absolute inset-y-0 left-0 w-1 bg-white rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"></span>

                <!-- Add this classes to an active anchor (a tag) -->
                <!-- text-gray-800 dark:text-gray-100 -->
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 dark:hover:text-gray-200"
                    href="{{ url('/') }}">
                    <i class="fa-solid fa-house text-lg"></i>
                    <span class="ml-4">Dashboard</span>
                </a>
            </li>
        </ul>
        <ul>
            {{-- <li class="relative px-6 py-3">
                <!-- Active items have the snippet below -->
                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"></span>

                <!-- Add this classes to an active anchor (a tag) -->
                <!-- text-gray-800 dark:text-gray-100 -->
                <a href="{{ url('schools') }}"
                    class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 dark:hover:text-gray-200">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    <span class="ml-4">Schools</span>
                </a>
            </li> --}}

            <li x-data="{ open: @entangle('toggle').defer }" class="relative px-6 py-3">
                <button
                    class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 dark:hover:text-gray-200"
                    @click="open = !open" aria-haspopup="true">
                    <span class="inline-flex items-center">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                        <span class="ml-4">Schools</span>
                    </span>
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <template x-if="open">
                    <ul x-transition:enter="transition-all ease-in-out duration-300"
                        x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl"
                        x-transition:leave="transition-all ease-in-out duration-300"
                        x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0"
                        class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                        aria-label="submenu">
                        <li
                            class="px-2 py-1 transition-colors duration-150 dark:hover:text-gray-200">
                            <a class="w-full" href="{{ url('add-school') }}">New School</a>
                        </li>
                        <li
                            class="px-2 py-1 transition-colors duration-150 dark:hover:text-gray-200">
                            <a class="w-full" href="{{ url('schools') }}">Parameters</a>
                        </li>
                    </ul>
                </template>
            </li>
        </ul>
        {{-- <div class="px-6 my-6">
            <button
                class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Create account
                <span class="ml-2" aria-hidden="true">+</span>
            </button>
        </div> --}}
    </div>
</aside>
