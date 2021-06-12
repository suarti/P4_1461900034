<!DOCTYPE html>
<html>
<head>
<title>Buku</title>
</head>
<body>
    <h2>Suarti 1461900034</h2>
    <h3>Buku</h3>
    <a href="/export"> Export Excel </a>
    <p>Cari Buku :</p>
        <form action="/buku/cari" method="GET">
        <input type="text" name="lihat" placeholder="Masukan disini .." value="{{ old('cari') }}">
        <input type="submit" value="CARI">
        </form>
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
<th>Id Buku</th>
<th>Judul Buku</th>
<th>Tahun Terbit</th>
</tr>
</thead>
@foreach($buku as $p)
    <tr>
    <td>{{ $p->id }}</td>
    <td>{{ $p->judul }}</td>
    <td>{{ $p->tahun_terbit}}</td>
    </tr>
@endforeach
</table>
</body>
</html>
