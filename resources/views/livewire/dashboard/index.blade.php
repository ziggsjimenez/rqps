
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex justify-center">
                <x-jet-input class="text-center" type="text" wire:model="searchToken" wire:keyup="searchClient" autofocus></x-jet-input>
                    <button wire:click="clearSearch" class="px-4 bg-red-300 rounded hover:bg-red-600">CLEAR</button>
                </div>

                @include('livewire.dashboard.table.client')

                @if($showServices)
                    @foreach($services as $service)
                        <div class="flex border border-black rounded p-4 bg-green-300 m-3">
                            <button wire:click="printModal({{$service->id}})">{{$service->name}}</button>
                        </div>
                    @endforeach
                @endif

                @if($showPrintModal)
                    @include('livewire.dashboard.modal.printmodal')
                    @endif

            </div>
        </div>
    </div>


