<div>
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Dashboard
    </h2>
    <!-- Cards -->
    <div class="grid grid-cols-3 lg:grid-cols-2 xs:grid-cols-1 gap-6 mb-8">
        <!-- Card -->
        <a href="{{ url('admin/lectures') }}">
            <div class="flex items-center p-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <div
                    class="px-3 py-2 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                    <i class="fa-solid fa-bolt"></i>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Parameter 1
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        22 {{-- {{ number_format($lectures_count) }} --}}
                    </p>
                </div>
            </div>
        </a>
        <!-- Card -->

        <a href="{{ url('admin/shuyukh') }}">
            <div class="flex items-center p-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <div
                    class="px-3 py-2 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                    <i class="fa-solid fa-tower-broadcast"></i>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Parameter 2
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        22 {{-- {{ number_format($scholars_count) }} --}}
                    </p>
                </div>
            </div>
            <!-- Card -->
        </a>

        <a href="{{ url('admin/books') }}">
            <div class="flex items-center p-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <div class="px-3 py-2 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Parameter 4
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        22 {{-- {{ number_format($books_count) }} --}}
                    </p>
                </div>
            </div>
        </a>

    </div>

    <h2 class="mt-6 mb-2 text-lg font-semibold text-gray-700 dark:text-gray-200">
        Meter Readings
    </h2>
    <!-- Cards -->
    <div class="grid grid-cols-3 lg:grid-cols-2 xs:grid-cols-1 gap-6 mb-8">
        <!-- Card -->
        <a href="{{ url('admin/lectures') }}">
            <div class="flex items-center p-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <div
                    class="px-3 py-2 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                    <i class="fa-solid fa-bolt"></i>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Total Energy
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        22 {{-- {{ number_format($lecture_downloads) }} --}}
                    </p>
                </div>
            </div>
        </a>
        <!-- Card -->

        <a href="{{ url('admin/shuyukh') }}">
            <div class="flex items-center p-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <div
                    class="px-3 py-2 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                    <i class="fa-solid fa-tower-broadcast"></i>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Total KwH
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        22 {{-- {{ number_format($lecture_plays) }} --}}
                    </p>
                </div>
            </div>
            <!-- Card -->
        </a>

        <a href="{{ url('admin/lecture-types') }}">
            <div class="flex items-center p-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <div class="px-3 py-2 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Total Time Spent
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        22 {{-- {{ number_format($book_downloads) }} --}}
                    </p>
                </div>
            </div>
            <!-- Card -->
        </a>
    </div>

    <!-- Charts -->
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Charts
    </h2>
    <div class="grid grid-cols-2 xs:grid-cols-1 gap-6 mb-8">
        <div class="min-w-0 p-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                Energy
            </h4>
            <canvas id="pie"></canvas>
            <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
                <!-- Chart legend -->
                <div class="flex items-center">
                    <span class="inline-block w-3 h-3 mr-1 bg-blue-500 rounded-full"></span>
                    <span>KwH</span>
                </div>
                <div class="flex items-center">
                    <span class="inline-block w-3 h-3 mr-1 bg-teal-600 rounded-full"></span>
                    <span>Induction</span>
                </div>
                <div class="flex items-center">
                    <span class="inline-block w-3 h-3 mr-1 bg-blue-600 rounded-full"></span>
                    <span>Resistance</span>
                </div>
            </div>
        </div>
        <div class="min-w-0 p-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                Power
            </h4>
            <canvas id="line"></canvas>
            <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
                <!-- Chart legend -->
                <div class="flex items-center">
                    <span class="inline-block w-3 h-3 mr-1 bg-teal-600 rounded-full"></span>
                    <span>Reactive</span>
                </div>
                <div class="flex items-center">
                    <span class="inline-block w-3 h-3 mr-1 bg-blue-600 rounded-full"></span>
                    <span>Active</span>
                </div>
            </div>
        </div>
    </div>
</div>
