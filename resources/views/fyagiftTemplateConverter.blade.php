<!DOCTYPE html>
<html>
<head>
  <style>
    @font-face {
      font-family: 'Itim';
      src: url({{storage_path('fonts/Itim.ttf')}});
    }

    @page { margin: 0px;}

    body {
      font-family: 'Itim', cursive;
      color: #FEFEFE;
    }

    table {
      width: 100%;
      height: auto;
      text-align: center;
    }

    td {
      width: 50%;
      /* border: 20px solid #ddd; */
    }

    .page {
      margin: 0px;
      width: 66.20cm;
      height: 37.83cm;
      background-repeat: no-repeat;
      background-size: 100% auto;
    }

    .page-1 {
      background-image:url('{{storage_path()}}/images/{{$data->gender}}-page-1.jpg');
      line-height: 350%
      page-break-after: always;
    }

    .page-2 {
      background-image:url('{{storage_path()}}/images/{{$data->gender}}-page-2.jpg');
      line-height: 400%
      page-break-after: always;
    }
  </style>
</head>

<body>
  <div class="page page-1">
    <table style="font-size: 56px;">
      <tr>
        <td style="padding: 22rem 12rem 0rem 0rem; vertical-align: top important!;">
          {{$data->name}} dan {{$data->mother_name}}<br>
          sedang bersiap tidur.<br>
          {{$data->mother_name}} baru saja selesai<br>
          membacakan buku cerita.
        </td>
        <td style="padding: 62rem 0rem 0rem 2rem;">
          "Aku kangen dibacain {{$data->father_name}}," kata {{$data->name}}.<br>
          “Sabar ya Dek, {{$data->father_name}} kan sedang sibuk bekerja…”,<br>
          ucap {{$data->mother_name}} menjelaskan dengan lembut.
        </td>
      </tr>
    </table>
  </div>

  <div class="page page-2">
    <table style="font-size: 72px;">
      <tr>
        <td style="padding: 26rem 1rem 0rem 0rem; vertical-align: top important!;">
          “Memangnya<br>
          kalau {{$data->mother_name}} yang cerita,<br>
          kurang seru ya?”<br>
          tanya {{$data->mother_name}}.
        </td>
        <td style="padding: 73rem 3rem 0rem 0rem;">
          {{$data->name}} hanya menghela nafas<br>
          dengan wajah kecewa.
        </td>
      </tr>
    </table>
  </div>
</body>
</html>