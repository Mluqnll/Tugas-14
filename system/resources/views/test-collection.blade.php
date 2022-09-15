<table>
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Harga</th>
    </thead>
    <tbody>
        @foreach ($list_produk->sortByDesc('harga')->take(3) as $produk)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$produk->nama_produk}}</td>
                <td>{{$produk->harga}}</td>
            </tr>
        @endforeach
    </tbody>
</table>