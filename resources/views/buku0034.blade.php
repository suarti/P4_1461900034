<body>
<table border="3">
        <style>
            table {
            border-collapse: collapse;
            border-spacing: 3;
            width: 50%;
            border: 3px solid #000000;
            background-color: #C0C0C0;
            }
        </style>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Judul Buku</th>
                    <th>Jenis</th>
                    <th>Tahun Terbit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($buku as $b)
                <tr>
                    <td>{{$b->id}}</td>
                    <td>{{$b->judul}}</td>
                    <td>{{$b->jenis}}</td>
                    <td>{{$b->tahun_terbit}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>