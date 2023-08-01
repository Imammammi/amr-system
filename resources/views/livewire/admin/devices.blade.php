<div>
    <!-- With actions -->
    <div>
        <div class="w-full overflow-hidden rounded-lg shadow-xs mt-6">
            <div class="flex items-center justify-between mb-4">
                <h4 class="text-lg font-semibold text-gray-600 dark:text-gray-300">
                    Devices ({{ number_format(count($devices)) }})
                </h4>
                <div class="flex space-x-2">
                    <!-- Modal wrapper -->
                    <div x-data="{ addModal: @entangle('addModal').defer }" x-init="$watch('addModal', value => Livewire.emit('clicked'))">
                        <button @click="addModal = true" style="float: right"
                            class="w-auto sm:w-auto py-2 px-5 sm:px-4 sm:py-2 ml-2 my-2 text-sm hover:bg-blue-700 cursor-pointer font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border rounded-lg focus:outline-none focus:shadow-outline-blue">
                            <span class="xs:hidden">Add</span>
                            <i class="fa-solid fa-file"></i>
                        </button>

                        <!-- Modal backdrop. This what you want to place close to the closing body tag -->
                        <div x-cloak x-show="addModal"
                            class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
                            <!-- Modal -->
                            <div x-show="addModal" x-transition:enter="transition ease-out duration-150"
                                x-transition:enter-start="opacity-0 transform translate-y-1/2"
                                x-transition:enter-end="opacity-100"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0  transform translate-y-1/2"
                                @click.away="addModal = false" @keydown.escape="addModal = false"
                                class="w-96 mx-auto mb-32 px-6 py-2 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl"
                                role="dialog" id="modal">
                                <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
                                <header class="flex justify-end">
                                    <button
                                        class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700"
                                        aria-label="close" @click="addModal = false">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img"
                                            aria-hidden="true">
                                            <path
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd" fill-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </header>
                                <!-- Modal body -->
                                <div class="w-full">
                                    <!-- Modal description -->
                                    <form wire:submit.prevent="saveDevice">
                                        <h3
                                            class="text-slate-600 dark:text-slate-300 font-semibold text-center py-1 mb-4">
                                            <span class="border-b-2 pb-1">Add Device</span>
                                        </h3>
                                        <div class="bg-white rounded-lg dark:bg-transparent">
                                            <!-- Enter Device -->
                                            <div class="mt-2">
                                                <label class="text-sm">
                                                    <input wire:model.defer="title" type="text"
                                                        class="block w-full rounded-md text-sm text-gray-600 dark:text-gray-300 bg-gray-50 dark:bg-gray-700 border-gray-200 dark:border-gray-600 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:focus:shadow-outline-gray form-input"
                                                        placeholder="Device title">
                                                    <x-input-error for="title"></x-input-error>
                                                </label>
                                            </div>

                                            <!-- Write Device -->
                                            <div class="mt-2">
                                                <label class="text-sm">
                                                    <textarea wire:model.defer="body"
                                                        class="block w-full rounded-md text-sm mt-1  text-gray-600 dark:text-gray-300 bg-gray-50 dark:bg-gray-700 border-gray-200 dark:border-gray-600 form-textarea focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:focus:shadow-outline-gray"
                                                        rows="7" placeholder="Device content"></textarea>
                                                    <x-input-error for="body"></x-input-error>
                                                </label>
                                            </div>
                                        </div>

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
                                    </form>
                                </div>
                                <!-- Modal body Ends -->

                            </div>
                        </div>
                        <!-- End of modal backdrop -->
                    </div>
                    <!-- End of modal wrapper -->

                    <a href="{{ url('admin/devices-trashed') }}">
                        <button style="float: right"
                            class="w-auto py-2 px-5 my-2 text-sm hover:bg-blue-700 cursor-pointer font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border rounded-lg sm:w-auto sm:px-4 sm:py-2 focus:outline-none focus:shadow-outline-blue">
                            <i class="fa-solid fa-file-excel"></i>
                            ({{ count($devices) }})
                        </button>
                    </a>
                </div>
            </div>

            <div class="w-full overflow-x-auto">
                <table id="html5-table" class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Device</th>
                            <th class="px-4 py-3">Type</th>
                            <th class="px-4 py-3">Manufacturer</th>
                            <th class="px-4 py-3">Host name</th>
                            <th class="px-4 py-3">Port</th>
                            <th class="px-4 py-3">Protocol</th>
                            {{-- <th class="px-4 py-3">Added By</th> --}}
                            <th class="px-4 py-3">Date</th>
                            <th class="px-4 py-3 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                        @foreach ($devices as $device)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">
                                    <a href="{{ url('admin/device') }}/{{ $device->slug }}/{{ $device->id }}">
                                        {{ $device->name }}
                                    </a>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $device->type }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $device->manufacturer }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $device->host_name }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $device->port }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $device->protocol }}
                                </td>
                                {{-- <td class="px-4 py-3 text-sm">
                                    Tukur Hamid
                                </td> --}}
                                <td class="px-4 py-3 text-sm">
                                    {{ $device->created_at->format('d-m-Y') ?? '' }}
                                </td>
                                <td class="px-4 py-3 text-sm text-center">
                                    <!-- Delete Modal -->
                                    <!-- Modal wrapper -->
                                    <div x-data="{ open: @entangle('deleteModal').defer }">
                                        <i @click="open = true"
                                            class="fa-solid fa-trash-can p-2 rounded-full bg-red-500 hover:bg-red-700 text-white cursor-pointer"></i>

                                        <!-- Modal backdrop. This what you want to place close to the closing body tag -->
                                        <div x-cloak x-show="open"
                                            class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
                                            <!-- Modal -->
                                            <div x-show="open" x-transition:enter="transition ease-out duration-150"
                                                x-transition:enter-start="opacity-0 transform translate-y-1/2"
                                                x-transition:enter-end="opacity-100"
                                                x-transition:leave="transition ease-in duration-150"
                                                x-transition:leave-start="opacity-100"
                                                x-transition:leave-end="opacity-0  transform translate-y-1/2"
                                                @click.away="open = false" @keydown.escape="open = false"
                                                class="w-96 mx-auto mb-72 px-6 overflow-hidden bg-white rounded-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl"
                                                role="dialog" id="modal">
                                                <!-- Modal body -->
                                                <div class="w-full pb-6">
                                                    <!-- Modal description -->
                                                    <form wire:submit.prevent="deleteDevice({{ $device->id }})">
                                                        <div class="bg-white rounded-lg dark:bg-transparent pt-6">
                                                            <h3 class="text-lg">Trash
                                                                <span class="font-bold">{{ $device->title }}</span>?
                                                            </h3>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- Modal body Ends -->

                                                <footer
                                                    class="flex items-center justify-center px-6 py-3 -mx-6 space-x-2 bg-gray-50 dark:bg-gray-800">
                                                    <button @click="open = false"
                                                        class="w-full py-2 px-5 text-sm text-gray-700 bg-white cursor-pointer font-medium leading-5 transition-colors duration-150 border rounded-lg sm:w-auto sm:px-4 sm:py-2 focus:outline-none focus:shadow-outline-blue">
                                                        No, Cancel
                                                    </button>

                                                    <button wire:loading wire:target="deleteDevice({{ $device->id }})"
                                                        class="w-full py-2 px-5 text-sm text-white bg-red-600 hover:bg-red-700 cursor-pointer font-medium leading-5 transition-colors duration-150 border rounded-lg sm:w-auto sm:px-4 sm:py-2 focus:outline-none focus:shadow-outline-blue">
                                                        Deleting <i class="fas fa-spinner fa-spin"></i>
                                                    </button>

                                                    <button wire:loading.remove
                                                        wire:click="deleteDevice({{ $device->id }})"
                                                        class="w-full py-2 px-5 text-sm text-white bg-red-600 hover:bg-red-700 cursor-pointer font-medium leading-5 transition-colors duration-150 border rounded-lg sm:w-auto sm:px-4 sm:py-2 focus:outline-none focus:shadow-outline-blue">
                                                        Yes
                                                    </button>
                                                </footer>
                                            </div>
                                        </div>
                                        <!-- End of modal backdrop -->
                                    </div>
                                    <!-- End of modal wrapper -->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- End table with action -->
</div>
