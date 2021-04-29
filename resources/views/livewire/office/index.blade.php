<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Office') }} - {{$office->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @include('livewire.includes.messages')

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <button wire:click="$set('isOpen', true)" class="px-3 py-2 rounded bg-gray-700 hover:bg-gray-800 text-white font-bold"> <i class="fas fa-plus"> </i>  Add Services</button>

                @include('livewire.office.table.services')

            </div>

            @include('livewire.office.createservice')
            @include('livewire.office.editservice')

        </div>
    </div>
</div>
