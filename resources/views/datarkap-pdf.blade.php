<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Data RKAP</h1>

<table id="customers">
  <tr>
    <th>No</th>
                        <th>Kegiatan</th>
                        <th>Uraian</th>
                        <th>Rkap</th>
                        <th>Januari</th>
                        <th>Febuari</th>
                        <th>Maret</th>
                        <th>April</th>
                        <th>Mei</th>
                        <th>Juni</th>
                        <th>Juli</th>
                        <th>Agustus</th>
                        <th>September</th>
                        <th>Oktober</th>
                        <th>November</th>
                        <th>Desember</th>
  </tr>
   @foreach ($data as $d)
                       <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$d->Kegiatan}}</td>
                        <td>{{$d->Uraian}}</td>
                        <td>{{$d->RKAP}}</td>
                        <td>{{$d->Januari}}</td>
                        <td>{{$d->Febuari}}</td>
                        <td>{{$d->Maret}}</td>
                        <td>{{$d->April}}</td>
                        <td>{{$d->Mei}}</td>
                        <td>{{$d->Juni}}</td>
                        <td>{{$d->Juli}}</td>
                        <td>{{$d->Agustus}}</td>
                        <td>{{$d->September}}</td>
                        <td>{{$d->Oktober}}</td>
                        <td>{{$d->November}}</td>
                        <td>{{$d->Desember}}</td>
                       </tr>
                     @endforeach
</table>

</body>
</html>


