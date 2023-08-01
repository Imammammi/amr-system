<div class="pt-10">
    <div class="w-2/5 lg:w-2/3 shadow-lg sm:w-full px-6 sm:px-2 sm:m-0 overflow-hidden bg-white rounded-lg dark:bg-gray-800 sm:rounded-lg sm:max-w-xl">
        <!-- Modal body -->
        <div class="mt-4 w-full">
            <!-- Modal description -->
            <form wire:submit.prevent="saveDeviceTemplate">
                <h3 class="text-gray-600 dark:text-gray-200 font-semibold text-center py-1 mb-4">
                    <span class="border-b-2 pb-1">Add Device Template</span>
                </h3>
                <div class="bg-white rounded-lg dark:bg-transparent">
                    <!-- Enter Article -->
                    <div class="mt-2">
                        <label class="text-sm">
                            <span class="text-gray-600 dark:text-gray-200">Name</span>
                            <input wire:model.defer="name" type="text"
                                class="block w-full rounded-md text-sm text-gray-600 dark:text-gray-300 bg-gray-50 dark:bg-gray-700 border-gray-200 dark:border-gray-600 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:focus:shadow-outline-gray form-input"
                                placeholder="name">
                            <x-input-error for="name"></x-input-error>
                        </label>
                    </div>
                    <!-- Enter Article -->
                    <div class="mt-2">
                        <label class="text-sm">
                            <span class="text-gray-600 dark:text-gray-200">Wait time</span>
                            <input wire:model.defer="wait_time" type="number"
                                class="block w-full rounded-md text-sm text-gray-600 dark:text-gray-300 bg-gray-50 dark:bg-gray-700 border-gray-200 dark:border-gray-600 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:focus:shadow-outline-gray form-input"
                                placeholder="5">
                            <x-input-error for="wait_time"></x-input-error>
                        </label>
                    </div>
                    <!-- Enter Article -->
                    <div class="mt-2">
                        <label class="text-sm">
                            <span class="text-gray-600 dark:text-gray-200">Resend count</span>
                            <input wire:model.defer="resend_count" type="number"
                                class="block w-full rounded-md text-sm text-gray-600 dark:text-gray-300 bg-gray-50 dark:bg-gray-700 border-gray-200 dark:border-gray-600 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:focus:shadow-outline-gray form-input"
                                placeholder="3">
                            <x-input-error for="resend_count"></x-input-error>
                        </label>
                    </div>
                </div>
            </form>
        </div>
        <!-- Modal body Ends -->

        <footer
            class="flex flex-col items-center justify-start px-6 py-3 -mx-6 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800">
            <button wire:loading.remove wire:click="saveDeviceTemplate"
                class="w-full py-2 px-5 text-sm hover:bg-blue-700 cursor-pointer font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-blue-600 focus:outline-none focus:shadow-outline-blue">
                Add
            </button>

            <button wire:loading wire:target="saveDeviceTemplate"
                class="w-full py-2 px-5 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                Adding <i class="fas fa-spinner fa-spin"></i>
            </button>
        </footer>
    </div>
</div>
