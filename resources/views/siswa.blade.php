<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>
<body>

    <h2>Data Siswa</h2>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
        </tr>

        @foreach ($siswa as $index => $s)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $s['nama'] }}</td>
            <td>{{ $s['kelas'] }}</td>
            <td>{{ $s['jurusan'] }}</td>
        </tr>
        @endforeach
        
    </table>

</body>
</html>