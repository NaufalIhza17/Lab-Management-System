<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List Items') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __('All Items Stored') }}
                </div>
            </div>

            @if ($shops->count() > 0)
            <div class="row">
                @foreach ($shops as $shop)
                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Type</strong>
                        {{ $shop->type }}
                    </div>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Condition</strong>
                        {{ $shop->condition }}
                    </div>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Description</strong>
                        {{ $shop->description }}
                    </div>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Defects</strong>
                        {{ $shop->defects }}
                    </div>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Amount</strong>
                        {{ $shop->amount }}
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <p>No data available.</p>
            @endif
        </div>
    </div>
</x-app-layout>
