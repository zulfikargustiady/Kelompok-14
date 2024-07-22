@extends('layouts.admin.app')

@section('title', 'Catatan Kandidat')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10 col-sm-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Catatan Kandidat</h3>
                </div>
                <div class="card-body">
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
                            @foreach($candidates as $candidate)
                                <tr>
                                    <td>{{ $candidate->name }}</td>
                                    <td>
                                        @if($candidate->image)
                                            <img src="{{ asset('storage/images/' . $candidate->image) }}" alt="{{ $candidate->name }}" class="img-thumbnail" style="max-width: 100px;">
                                        @else
                                            No Image
                                        @endif
                                    </td>
                                    <td>{{ $candidate->visi }}</td>
                                    <td>{{ $candidate->misi }}</td>
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
