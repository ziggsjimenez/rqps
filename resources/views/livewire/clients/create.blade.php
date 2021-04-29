<x-jet-dialog-modal wire:model="isOpen">
    <x-slot name="title">Client</x-slot>
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

                <div class="mb-4">
                    <label for="age"
                           class="block text-gray-700 text-sm font-bold mb-2">Age:</label>
                    <input type="number"
                           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           id="age" wire:model="age">
                    @error('age') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>

                <div class="mb-4">
                    <label for="bday"
                           class="block text-gray-700 text-sm font-bold mb-2">Birthday:</label>
                    <input type="date"
                           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           id="bday" wire:model="bday">
                    @error('bday') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>

                <div class="mb-4">
                    <label for="barangay_id"
                           class="block text-gray-700 text-sm font-bold mb-2">Barangay:</label>
                    <select
                           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           id="barangay_id" wire:model="barangay_id">
                        <option value="">Select...</option>
                        @foreach($barangays as $barangay)
                            <option value="{{$barangay->id}}">{{$barangay->name}}</option>
                            @endforeach
                    </select>
                    @error('barangay_id') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>

                <div class="mb-4">
                    <label for="zone_id"
                           class="block text-gray-700 text-sm font-bold mb-2">Zone: <span wire:loading><i class="fas fa-spinner"></i></span></label>
                    <select
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="zone_id" wire:model="zone_id">
                        <option value="">
                            Select...</option>
                        @foreach($zones as $zone)
                            <option value="{{$zone->id}}">{{$zone->name}}</option>
                        @endforeach
                    </select>
                    @error('zone_id') <span class="text-red-500">{{ $message }}</span>@enderror
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
