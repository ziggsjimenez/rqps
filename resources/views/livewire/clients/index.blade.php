<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @include('livewire.includes.messages')

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

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <button wire:click="$set('isOpen', true)" class="px-3 py-2 rounded bg-gray-700 hover:bg-gray-800 text-white font-bold"> <i class="fas fa-plus"> </i>  Add </button>

                <x-jet-input class="w-80" type="text" wire:model="searchToken" placeholder="Type here to search refnum or name ..." autofocus></x-jet-input>

                <span wire:loading><i class="fas fa-spinner"></i> </span>

                @include('livewire.clients.table.clients')

            </div>

            @include('livewire.clients.create')


        </div>
    </div>
</div>
