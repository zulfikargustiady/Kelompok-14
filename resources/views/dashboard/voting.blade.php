@extends('layouts.admin.app')

@section('title', 'Voting Page')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title">Vote for Your Favorite Option</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('vote.submit') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="question">What is your choice?</label>
                                <select name="vote_option" id="vote_option" name="vote_option" class="form-control" required>
                                    <option value="">-- Select an Option --</option>
                                    @foreach ($options as $option)
                                        <option value="{{ $option->id }}">
                                            {{ $option->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @foreach ($options as $option)
                                <div class="option-image">
                                    <img src="{{ asset('storage/images/' . $option->image) }}" alt="{{ $option->name }}"
                                        class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endforeach
                            <button type="submit" class="btn btn-primary">Submit Vote</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
