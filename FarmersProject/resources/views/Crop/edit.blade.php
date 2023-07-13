<!-- resources/views/crop/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Edit Crop</h1>

    <form action="{{ route('crops.update', $crop->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Input fields for editing crop information -->
        <div>
            <label for="crop_name">Crop Name:</label>
            <input type="text" name="crop_name" id="crop_name" value="{{ $crop->crop_name }}">
        </div>
        
        <div>
            <label for="crop_conditions">Crop Conditions:</label>
            <textarea name="crop_conditions" id="crop_conditions">{{ $crop->crop_conditions }}</textarea>
        </div>

        <!-- Add more input fields as needed -->

        <button type="submit">Update Crop</button>
    </form>
@endsection
