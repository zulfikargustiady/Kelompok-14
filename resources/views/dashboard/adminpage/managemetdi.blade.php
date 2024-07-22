@extends('layouts.admin.app')

@section('title', 'Manage Candidates')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10 col-sm-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Manage Candidates</h3>
                    <a href="{{ route('admin.create_candidate') }}" class="btn btn-success float-right">Add Candidate</a>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Visi</th>
                                <th>Misi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($options as $option)
                                <tr>
                                    <td>{{ $option->name }}</td>
                                    <td>
                                        @if($option->image)
                                            <img src="{{ asset('storage/images/' . $option->image) }}" alt="{{ $option->name }}" class="img-thumbnail" style="max-width: 100px;">
                                        @else
                                            No Image
                                        @endif
                                    </td>
                                    <td>{{ $option->visi }}</td>
                                    <td>{{ $option->misi }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
