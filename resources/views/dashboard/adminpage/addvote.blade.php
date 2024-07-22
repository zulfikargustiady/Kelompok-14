@extends('layouts.admin.app')

@section('title', 'Add Vote')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title">Add Vote</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.store_candidate') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Candidate Name</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="image">Candidate Image</label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="visi">Visi</label>
                                <textarea name="visi" id="visi" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="misi">Misi</label>
                                <textarea name="misi" id="misi" class="form-control" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Candidate</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
