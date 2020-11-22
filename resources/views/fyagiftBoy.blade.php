<!DOCTYPE html>
<html>
<head>
  <style>
    @font-face {
      font-family: 'Itim';
      src: url({{storage_path('/fonts/Itim.ttf')}});
    }

    @page { margin: 0px; }

    body {
      /* background-image:url('{{storage_path()}}/images/{{$data->gender}}-page-1.jpg'); */
      padding: 0px;
      background-repeat: no-repeat;
      background-size: 100% auto;
      font-family: 'Itim', cursive;
      font-size: 22px;
      color: white;
    }

    table {
      text-align: center;
    }

    td {
      width: 50%;
    }

    td:first-child {
      padding: 6.9rem;
    }

    .bgimg-1 {
      background-repeat: no-repeat;
      background-size: 100% auto;
      background-image:url('{{storage_path()}}/images/{{$data->gender}}-page-1.jpg');
    }

    .bgimg-2 {
      background-repeat: no-repeat;
      background-size: 100% auto;
      background-image:url('{{storage_path()}}/images/{{$data->gender}}-page-2.jpg');
    }

    .page-1-break {
        page-break-after: always;
    }

    .page-2-break {
        page-break-after: always;
    }
  </style>
</head>

<body>
  <div class="page-1-break bgimg-1">
    <table>
      <tr>
        <td>
          {{$data->name}} dan {{$data->mother_name}}<br>
          sedang bersiap tidur.<br>
          {{$data->mother_name}} baru saja selesai membacakan buku cerita.
        </td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td style="padding-left: 50px;">
          “Aku kangen dibacain {{$data->father_name}},” Kata {{$data->name}}.<br>
          “Sabar ya Dek, {{$data->father_name}} kan sedang sibuk bekerja…”,<br>
          ucap {{$data->mother_name}} menjelaskan dengan lembut.
        </td>
      </tr>
    </table>
  </div>

  <div class="bgimg-2">
    <table>
      <tr>
        <td>
          “Memangnya<br>
          kalau {{$data->mother_name}} yang cerita<br>
          kurang seru ya?”
          tanya {{$data->mother_name}}
        </td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td style="padding-left: 50px;">
          {{$data->name}} hanya menghela nafas<br>
          dengan wajah kecewa.
        </td>
      </tr>
    </table>
  </div>
</body>
</html>