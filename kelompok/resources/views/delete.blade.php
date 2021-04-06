<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
<h1 class="text-center mt-5">Eloquent laravel</h1>

<div class="container">
    <a href="/siswa" class="btn btn-danger mt-4 mb-2">kembali</a>
    <table class="table table-bordered border-dark">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">kelas</th>
                <th scope="col">absen</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $siswas)
                <tr>
                    <td>{{ $siswas->id }}</td>
                    <td>{{ $siswas->nama }}</td>
                    <td>{{ $siswas->kelas }}</td>
                    <td>{{ $siswas->absen }}</td>
                    <td>
                        <form action="/siswa/restore/{{ $siswas->id }}" class="d-inline" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-warning">Restore</button>
                        </form>
                        <form action="/siswa/permanent/{{ $siswas->id }}" class="d-inline" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Permanent Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>
