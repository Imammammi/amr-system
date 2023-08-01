<div class="pt-10">
    <div class="w-full sm:w-full shadow-lg px-6 sm:px-2 sm:m-0 overflow-hidden bg-white rounded-lg dark:bg-gray-800 sm:rounded-lg sm:max-w-xl">
        <!-- Modal body -->
        <div class="mt-4 w-full">
            <!-- Modal description -->
            <form wire:submit.prevent="saveDevice">
                <h3 class="text-gray-600 dark:text-gray-200 font-semibold text-center py-1 mb-4">
                    <span class="border-b-2 pb-1">Add Device</span>
                </h3>
                <div class="grid grid-cols-2 space-x-2 bg-white rounded-lg dark:bg-transparent">
                    <!-- Enter Article -->
                    <div class="mt-2">
                        <label class="text-sm">
                            <span class="text-gray-600 dark:text-gray-200">Type</span>
                            <input wire:model.defer="type" type="text"
                                class="block w-full rounded-md text-sm text-gray-600 dark:text-gray-300 bg-gray-50 dark:bg-gray-700 border-gray-200 dark:border-gray-600 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:focus:shadow-outline-gray form-input"
                                placeholder="type">
                            <x-input-error for="type"></x-input-error>
                        </label>
                    </div>
                    <!-- Enter Article -->
                    <div class="mt-2">
                        <label class="text-sm">
                            <span class="text-gray-600 dark:text-gray-200">Manufacturer</span>
                            <input wire:model.defer="manufacturer" type="text"
                                class="block w-full rounded-md text-sm text-gray-600 dark:text-gray-300 bg-gray-50 dark:bg-gray-700 border-gray-200 dark:border-gray-600 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:focus:shadow-outline-gray form-input"
                                placeholder="manufacturer">
                            <x-input-error for="manufacturer"></x-input-error>
                        </label>
                    </div>
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
                            <span class="text-gray-600 dark:text-gray-200">Interface</span>
                            <input wire:model.defer="interface" type="text"
                                class="block w-full rounded-md text-sm text-gray-600 dark:text-gray-300 bg-gray-50 dark:bg-gray-700 border-gray-200 dark:border-gray-600 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:focus:shadow-outline-gray form-input"
                                placeholder="interface">
                            <x-input-error for="interface"></x-input-error>
                        </label>
                    </div>
                    <!-- Enter Article -->
                    <div class="mt-2">
                        <label class="text-sm">
                            <span class="text-gray-600 dark:text-gray-200">Authentication</span>
                            <input wire:model.defer="authentication" type="text"
                                class="block w-full rounded-md text-sm text-gray-600 dark:text-gray-300 bg-gray-50 dark:bg-gray-700 border-gray-200 dark:border-gray-600 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:focus:shadow-outline-gray form-input"
                                placeholder="authentication">
                            <x-input-error for="authentication"></x-input-error>
                        </label>
                    </div>
                    <!-- Enter Article -->
                    <div class="mt-2">
                        <label class="text-sm">
                            <span class="text-gray-600 dark:text-gray-200">Password</span>
                            <input wire:model.defer="password" type="text"
                                class="block w-full rounded-md text-sm text-gray-600 dark:text-gray-300 bg-gray-50 dark:bg-gray-700 border-gray-200 dark:border-gray-600 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:focus:shadow-outline-gray form-input"
                                placeholder="password">
                            <x-input-error for="password"></x-input-error>
                        </label>
                    </div>
                    <!-- Enter Article -->
                    <div class="mt-2">
                        <label class="text-sm">
                            <span class="text-gray-600 dark:text-gray-200">Media</span>
                            <input wire:model.defer="media" type="text"
                                class="block w-full rounded-md text-sm text-gray-600 dark:text-gray-300 bg-gray-50 dark:bg-gray-700 border-gray-200 dark:border-gray-600 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:focus:shadow-outline-gray form-input"
                                placeholder="media">
                            <x-input-error for="media"></x-input-error>
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
                    <!-- Enter Article -->
                    <div class="mt-2">
                        <label class="text-sm">
                            <span class="text-gray-600 dark:text-gray-200">Trace level</span>
                            <input wire:model.defer="trace_level" type="text"
                                class="block w-full rounded-md text-sm text-gray-600 dark:text-gray-300 bg-gray-50 dark:bg-gray-700 border-gray-200 dark:border-gray-600 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:focus:shadow-outline-gray form-input"
                                placeholder="trace_level">
                            <x-input-error for="trace_level"></x-input-error>
                        </label>
                    </div>
                    <!-- Enter Article -->
                    <div class="mt-2">
                        <label class="text-sm">
                            <span class="text-gray-600 dark:text-gray-200">Host name</span>
                            <input wire:model.defer="host_name" type="text"
                                class="block w-full rounded-md text-sm text-gray-600 dark:text-gray-300 bg-gray-50 dark:bg-gray-700 border-gray-200 dark:border-gray-600 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:focus:shadow-outline-gray form-input"
                                placeholder="host_name">
                            <x-input-error for="host_name"></x-input-error>
                        </label>
                    </div>
                    <!-- Enter Article -->
                    <div class="mt-2">
                        <label class="text-sm">
                            <span class="text-gray-600 dark:text-gray-200">Port</span>
                            <input wire:model.defer="port" type="text"
                                class="block w-full rounded-md text-sm text-gray-600 dark:text-gray-300 bg-gray-50 dark:bg-gray-700 border-gray-200 dark:border-gray-600 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:focus:shadow-outline-gray form-input"
                                placeholder="port">
                            <x-input-error for="port"></x-input-error>
                        </label>
                    </div>
                    <!-- Enter Article -->
                    <div class="mt-2">
                        <label class="text-sm">
                            <span class="text-gray-600 dark:text-gray-200">Protocol</span>
                            <input wire:model.defer="protocol" type="text"
                                class="block w-full rounded-md text-sm text-gray-600 dark:text-gray-300 bg-gray-50 dark:bg-gray-700 border-gray-200 dark:border-gray-600 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:focus:shadow-outline-gray form-input"
                                placeholder="protocol">
                            <x-input-error for="protocol"></x-input-error>
                        </label>
                    </div>
                </div>
            </form>
        </div>
        <!-- Modal body Ends -->

        <footer
            class="flex flex-col items-center justify-start px-6 py-3 -mx-6 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800">
            <button wire:loading.remove wire:click="saveDevice"
                class="w-full py-2 px-5 text-sm hover:bg-blue-700 cursor-pointer font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-blue-600 focus:outline-none focus:shadow-outline-blue">
                Add
            </button>

            <button wire:loading wire:target="saveDevice"
                class="w-full py-2 px-5 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                Adding <i class="fas fa-spinner fa-spin"></i>
            </button>
        </footer>
    </div>
</div>
