<x-layout>
    <x-slot name="title">Data Pasien</x-slot>
    <x-slot name="card_title">Daftar Pasien Aktif</x-slot>
    <table class="table table-sm">
        <thead>
            <tr><th>No</th><th>Kode Pasien</th><th>Nama Pasien</th>
            <th>Tgl Lahir</th><th>Action</th></tr>
        </thead>
        <tbody>
            @foreach($list)
