<x-jet-dialog-modal wire:model="isOpenEdit">
    <x-slot name="title">Service</x-slot>
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
                    <label for="servicetype_id"
                           class="block text-gray-700 text-sm font-bold mb-2">Service Type:</label>
                    <select
                           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           id="servicetype_id" wire:model="servicetype_id">
                        <option value="">Select...</option>
                        @foreach($servicetypes as $servicetype)
                            <option value="{{$servicetype->id}}">{{$servicetype->name}}</option>
                            @endforeach
                    </select>
                    @error('servicetype_id') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>

                <div class="mb-4">
                    <label for="window"
                           class="block text-gray-700 text-sm font-bold mb-2">Window:</label>
                    <input type="text"
                           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           id="window" wire:model="window">
                    @error('window') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>

                <div class="mb-4">
                    @if($imagefilename!=NULL)
                        <img src="{{asset('storage/images/'.$imagefilename)}}"/>
                        @endif
                </div>

                <div class="mb-4">
                    <label for="image"
                           class="block text-gray-700 text-sm font-bold mb-2">Image:</label>
                    <input type="file"
                           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           id="image" wire:model="image">
                    @error('image') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>

            </div>
        </div>
    </x-slot>

    <x-slot name="footer">

        <x-jet-button class="bg-blue-500 text-white" wire:click="update()" wire:keydown.enter="store()" wire:loading.attr="enable">
            Submit
        </x-jet-button>

        <x-jet-secondary-button wire:click="closeEditModal()" wire:loading.attr="enable">Close
        </x-jet-secondary-button>
    </x-slot>
</x-jet-dialog-modal>
