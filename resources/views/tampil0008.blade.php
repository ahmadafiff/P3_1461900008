<!DOCTYPE html>
<html>
<head>

</head>
<body>

    <table width="1250">
        <tr>
            <td><a href="{{url('tambah0008')}}"> Tambah Data Buku</a></td>
        </tr>
        <tr align="Top">
            <td bgcolor="#FFFFFF" width ="250"><b>Menu</b> <br/>
            </td>

            <td width="1000" bgcolor="#FFFFFF">
                 <table border="1">
                    <tr>
                        <th> ID </th>
                        <th> Judul </th>
                        <th> Tahun Terbit </th>
                        <th> Jenis Buku</th>
                        <th> Option </th>

                    </tr>
                    @foreach($buku as $b)
                    <tr>
                        <td>{{ $b->id}}</td>
                        <td>{{ $b->judul}}</td>
                        <td>{{ $b->tahun_terbit}}</td>
                        <td>{{$b->jenis}}</td>
                        <td> <a href="{{url('update')}}">Edit</a>| <a href="">Hapus</a></td>
                    </tr>
                    @endforeach
                 </table>
            </td>
        </tr>

    </table>

</body>
</html>
