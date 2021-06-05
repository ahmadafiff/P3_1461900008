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
            <a href="">Cari </a></br>
            <a href="{{url('tampil0008')}}">Tampilkan Data </a></br>
            </td>

            <td width="1000" bgcolor="#FFFFFF">
                 <table border="1">
                    <tr>
                        @foreach ($buku as $b)
                            <form action="update" method="post">
                            {{scrf_field()}}
                            <input type="hidden" name="id" value="{{$b->pegawai_id}}"><br/>
                            Judul <input type="text" required="required" name="judul" value="{{}$b->judul}"><br/>
                            Tahun <input type="text" required="required" name="tahun_terbit" value="{{}$b->tahun_terbit}"><br/>
                            <input type="submit" value="Simpan Data">
                            </form>
                        @endforeach
                    </tr>

                 </table>
            </td>
        </tr>

    </table>
</body>
</html>
