<!-- resources/views/regions/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create Region</h1>

    <form method="POST" action="{{ route('regions.store') }}">
        @csrf

        <div class="form-group">
            <label for="region_name">Region Name</label>
            <input type="text" name="region_name" id="region_name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="crop_id">Crop</label>
            <select name="crop_id" id="crop_id" class="form-control" required>
                <option value="">Select a crop</option>
                @foreach($crops as $crop)
                    <option value="{{ $crop->id }}">{{ $crop->crop_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="region_conditions">Region Conditions</label>
            <textarea name="region_conditions" id="region_conditions" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
