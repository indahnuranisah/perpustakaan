<h1>Hasil Praktikum: Sistem Manajemen Buku</h1>
<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Kategori</th>
            <th>Stok</th>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $b)
        <tr>
            <td>{{ $b->judul }}</td>
            <td>{{ $b->penulis }}</td>
            <td>{{ $b->category->nama_kategori }}</td>
            <td>{{ $b->stok }}</td>
        </tr>
        @endforeach
    </tbody>
</table>