@extends('layout')

@section('content')
<h2>Form Peminjaman Buku</h2>

<form id="borrowForm" class="borrow-form">
    <label>Nama:</label><br>
    <input type="text" id="nama" required><br>

    <label>NIM:</label><br>
    <input type="text" id="nim" required><br>

    <label>Judul Buku:</label><br>
    <input type="text" id="judul" required><br>

    <button type="submit">Pinjam</button>
</form>

<h3>Daftar Peminjaman</h3>
<ul id="loanList" class="loan-list">
    @if(count($loans) > 0)
        @foreach($loans as $loan)
            <li>
                <strong>{{ $loan->judul }}</strong> — {{ $loan->nama }} ({{ $loan->nim }})
                <button data-id="{{ $loan->id }}" class="return-btn">Return</button>
            </li>
        @endforeach
    @else
        <li>Tidak ada peminjaman.</li>
    @endif
</ul>

<button id="clearLoans" class="danger">Return (Hapus Semua)</button>

<script>
// Pass loans data to JavaScript
window.loansData = @json($loans);
</script>
@endsection
