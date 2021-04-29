<x-jet-dialog-modal wire:model="isOpen">
    <x-slot name="title">Office</x-slot>
    <x-slot name="content">
        <div class="space-y-32">
            <div>

                <div class="mb-4">
                    <label for="name"
                           class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                    <input type="text"
                           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           id="name" wire:model="name">
                    @error('name') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>

            </div>
        </div>
    </x-slot>

    <x-slot name="footer">


        <x-jet-button class="bg-blue-500 text-white" wire:click="store()" wire:keydown.enter="store()" wire:loading.attr="enable">
            Submit
        </x-jet-button>


        <x-jet-secondary-button wire:click="closeModal()" wire:loading.attr="enable">Close
        </x-jet-secondary-button>
    </x-slot>
</x-jet-dialog-modal>
