<?php
$types = [['label' => 'Chemical', 'value' => 'chemical'], ['label' => 'Googles', 'value' => 'googles'], ['label' => 'Furniture', 'value' => 'furniture'], ['label' => 'Safety', 'value' => 'safety'], ['label' => 'Other', 'value' => 'other']];
$conditions = [['label' => 'Bad', 'value' => 'bad'], ['label' => 'Normal', 'value' => 'normal'], ['label' => 'Good', 'value' => 'good'], ['label' => 'Excellent', 'value' => 'excellent']];
?>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Items') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __('Add Your Items Here') }}
                </div>
            </div>

            <form action="{{ route('store-items') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-bladewind::dropdown name="type" :data="$types" placeholder="Select The Item Type"
                    required="true" />
                <x-bladewind::dropdown name="condition" :data="$conditions" placeholder="Select The Item Condition"
                    required="true" />
                <x-bladewind::input name="description" label="Description" required="true"
                    onfocus="changeCss('.description', '!border-2,!border-red-400')"
                    onblur="changeCss('.description', '!border-2,!border-red-400', 'remove')" />
                <x-bladewind::input name="defects" label="Defects"
                    onfocus="changeCss('.defects', '!border-2,!border-red-400')"
                    onblur="changeCss('.defects', '!border-2,!border-red-400', 'remove')" />
                <x-bladewind::input name="amount" label="Amount" required="true"
                    onfocus="changeCss('.amount', '!border-2,!border-red-400')"
                    onblur="changeCss('.amount', '!border-2,!border-red-400', 'remove')" />
                <x-bladewind::filepicker placeholder="Add Image" name="image" accepted_file_types="image/*" />
                <x-bladewind::button size="small" can_submit="true">Submit</x-bladewind::button>
                {{-- <div class="row mt-5">
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="type">Type:</label>
                            <select name="type" class="form-control">
                                <option value="shirt">Shirt</option>
                                <option value="pants">Pants</option>
                                <option value="jacket">Jacket</option>
                                <option value="shoes">Shoes</option>
                                <option value="cap">Cap</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="condition">Condition:</label>
                            <select name="condition" class="form-control">
                                <option value="bad">Bad</option>
                                <option value="pants">Good</option>
                                <option value="excellent">Excellent</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Description:</strong>
                            <input type="text" name="description" class="form-control" placeholder="Description">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Defects:</strong>
                            <input type="text" name="defects" class="form-control" placeholder="Defects">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Amount:</strong>
                            <input type="numbe" min="1" max="10" name="amount" class="form-control" placeholder="Amount">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Image:</strong>
                            <input type="file" name="image" class="form-control" placeholder="Image">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-success w-100 mt-5">Submit</button>
                    </div>
                </div> --}}
            </form>
        </div>
    </div>
</x-app-layout>
