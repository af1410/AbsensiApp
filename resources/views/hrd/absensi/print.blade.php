<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Laporan Data Absensi</title>
    <link rel="icon" href="{{ asset('img/favicon.jpg') }}" type="image/png">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .kop {
            text-align: center;
            margin-bottom: 20px;
        }

        .kop h1,
        .kop h2,
        .kop h3 {
            margin: 0;
        }

        .kop h1 {
            font-size: 40px;
            margin-bottom: 5px;
        }

        .kop h2 {
            font-size: 20px;
            margin-bottom: 5px;
        }

        .kop h3 {
            font-size: 16px;
            margin-bottom: 5px;
        }

        .line {
            border-top: 2px solid black;
            margin-top: 10px;
        }

        .line-thin {
            border-top: 1px solid black;
            margin-top: 2px;
        }
    </style>
</head>

<body>

    <div class="kop">
        <h1 style="margin-top: 20px;"><b>PT Titian Harmoni Rekayasa</b></h1>
        <h2>Komplek Antabaru II, Jln Anta Biru Blok H.21, Arcamanik, Bandung</h2>
        <h3>Telepon: 022-7806710 | Email: pttitianhr@yahoo.com</h3>
    </div>

    <div class="line"></div>
    <div class="line-thin"></div>

    <h2 style="text-align: center; margin-top: 20px;"><b>Laporan Data Absensi</b></h2>
    <br>
    <table class="table table-bordered">
        <thead class="thead text-light" style="background-color: #1e90ff;">
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($absensi as $absen)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $absen->NIK }}</td>
                <td>{{ $absen->name }}</td>
                <td>{{ $absen->jabatan }}</td>
                <td>{{ $absen->tanggal }}</td>
                <td>{{ $absen->jam }}</td>
                <td>{{ $absen->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        window.print();
    </script>

</body>

</html>