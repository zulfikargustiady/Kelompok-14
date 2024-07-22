@extends('layouts.admin.app')

@section('title', 'Tentang Kami')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10 col-sm-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Tentang Kami</h3>
                </div>
                <div class="card-body">
                    <h4>Kontak Kami</h4>
                    <ul>
                        <li>Email: metdi@gmail.com</li>
                        <li>Instagram: metdiuhuy</li>
                        <li>WhatsApp: +62 123 456 789</li>
                    </ul>
                    <h4>Visi kami
                        tujuan kami adalah mkmknajdjAGDHGHJFHFGH
                    </h4>
                    <ul>
                        @foreach($visions as $vision)
                            <li>{{ $vision }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
