<!-- resources/views/crops/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Crops</h1>

    <a href="{{ route('crops.create') }}" class="btn btn-primary">Create Crop</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Crop Name</th>
                <th>Region</th>
                <th>Crop Conditions</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($crops as $crop)
                <tr>
                    <td>{{ $crop->id }}</td>
                    <td>{{ $crop->crop_name }}</td>
                    <td>{{ $crop->region->name }}</td>
                    <td>{{ $crop->crop_conditions }}</td>
                    <td>
                        <a href="#">Edit</a> |
                        <a href="#">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No crops available</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
