<!-- resources/views/crops/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create Crop</h1>

    <form method="POST" action="{{ route('crops.store') }}">
        @csrf

        <div class="form-group">
            <label for="crop_name">Crop Name</label>
            <input type="text" name="crop_name" id="crop_name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="region_id">Region</label>
            <select name="region_id" id="region_id" class="form-control" required>
                <option value="">Select a region</option>
                @foreach($regions as $region)
                    <option value="{{ $region->id }}">{{ $region->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="crop_conditions">Crop Conditions</label>
            <textarea name="crop_conditions" id="crop_conditions" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
