<!DOCTYPE html>
<html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>

    <table width="1250">
        <tr>
            <td><a href="{{url('/tampil0008')}}"> Kembali </a></td>
        </tr>
        <tr align="Top">
            <td bgcolor="#FFFFFF" width ="250"><b>Menu</b> <br/>
            </td>
            <td width="1000" bgcolor="#FFFFFF">
                 <form action="/store" method="post">
            {{csrf_field()}}
                 id<input type="text" name="id"><br/>
                 Judul<input type="text" name="judul"><br/>
                 Tahun Terbit<input type="text" name="tahun_terbit"><br/>
                 <input type="submit" value="Simpan Data ">
                 </form>
            </td>
        </tr>

    </table>

</body>
</html>
