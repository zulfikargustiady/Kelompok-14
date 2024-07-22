 @extends('layouts.admin.app')

 @section('title', 'Hasil Voting Metdi')

 @section('content')
     <div class="container mt-4">
         <div class="row justify-content-center">
             <div class="col-lg-10 col-md-12 col-sm-12">
                 <div class="card">
                     <div class="card-header bg-success text-white">
                         <h3 class="card-title">Hasil Voting Metdi</h3>
                     </div>
                     <div class="card-body">
                         <!-- Menampilkan pesan sukses jika ada -->
                         @if (session('success'))
                             <div class="alert alert-success">
                                 {{ session('success') }}
                             </div>
                         @endif

                         <!-- Grafik Hasil Voting -->
                         <div class="mb-4">
                             <canvas id="votingChart"></canvas>
                         </div>

                         <!-- Tabel Hasil Voting -->
                         <table class="table table-striped table-bordered">
                             <thead>
                                 <tr>
                                     <th>#</th>
                                     <th>Nama Pemilih</th>
                                     <th>Kandidat Dipilih</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 @foreach ($hasil as $item)
                                     <tr>
                                         <td>{{ $item->id }}</td>
                                         <td>{{ $item->user->name }} </td>
                                         <td>{{ $item->voteOption->name }} </td>
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
