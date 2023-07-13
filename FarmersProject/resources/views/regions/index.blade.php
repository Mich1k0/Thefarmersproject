<!-- resources/views/regions/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Regions</h1>

    <a href="{{ route('regions.create') }}" class="btn btn-primary">Create Region</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Region Name</th>
                <th>Crop</th>
                <th>Region Conditions</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($regions as $region)
                <tr>
                    <td>{{ $region->id }}</td>
                    <td>{{ $region->region_name }}</td>
                    <td>{{ $region->crop->crop_name }}</td>
                    <td>{{ $region->region_conditions }}</td>
                    <td>
                        <a href="#">Edit</a> |
                        <a href="#">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No regions available</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
