<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Biodata</title>
    </head>

    <body>
        <fieldset>
            <legend>
                Biodata
            </legend>
            <table>

                @if ($nama == null)
                Silahkan Isi Biodata Terlebih Dahulu
                @elseif ($nama != null)

                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>{{$nama}}</td>
                </tr>
                @endif

                @if ($alamat != null)
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>{{$alamat}}</td>
                </tr>
                @endif

                @if ($jk != null)
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>{{$jk}}</td>
                </tr>
                @endif

                @if ($tb != null)
                <tr>
                    <td>Tinggi Badan</td>
                    <td>:</td>
                    <td>{{$tb}} cm</td>
                </tr>
                @endif

                @if ($bb != null)
                <tr>
                    <td>Berat Badan</td>
                    <td>:</td>
                    <td>{{$tb}} kg</td>
                </tr>
                @endif

            </table>
        </fieldset>
    </body>
</html>
