@extends('layout')

@section('content')
<h2>Daftar Barang</h2>

<form method="GET" action="{{ route('home') }}" class="search-form">
    <input type="text" name="search" placeholder="Cari barang (nama atau id)..." value="{{ $query ?? '' }}">
    <button type="submit">Search</button>
</form>

<table class="equipments">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Spesifikasi</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
    @forelse($equipments as $equipment)
        <tr>
            <td>{{ $equipment['ID'] }}</td>
            <td>{{ $equipment['Nama'] }}</td>
            <td>{{ $equipment['Spesifikasi'] }}</td>
            <td>{{ $equipment['Status'] }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="4">Tidak ada buku ditemukan.</td>
        </tr>
    @endforelse
    </tbody>
</table>
@endsection
