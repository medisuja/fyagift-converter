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

    .font-white {
      color: #FEFEFE;
    }

    .font-black {
      color: #000000;
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
      line-height: 350%;
      page-break-after: always;
    }

    .page-2 {
      background-image:url('{{storage_path()}}/images/{{$data->gender}}-page-2.jpg');
      line-height: 400%;
      page-break-after: always;
    }

    .page-3 {
      background-image:url('{{storage_path()}}/images/{{$data->gender}}-page-3.jpg');
      line-height: 330%;
      page-break-after: always;
    }

    .page-4 {
      background-image:url('{{storage_path()}}/images/{{$data->gender}}-page-4.jpg');
      line-height: 250%;
      page-break-after: always;
    }

    .page-5 {
      background-image:url('{{storage_path()}}/images/{{$data->gender}}-page-5.jpg');
      line-height: 300%;
      page-break-after: always;
    }
  </style>
</head>

<body>
  <div class="page page-1 font-white">
    <table style="font-size: 56px;">
      <tr>
        <td style="padding: 22rem 12rem 0rem 0rem; vertical-align: top important!;">
          {{$data->name}} dan {{$data->mother_name}}<br>
          sedang bersiap tidur.<br>
          {{$data->mother_name}} baru saja selesai<br>
          membacakan buku cerita.
        </td>
        <td style="padding: 62rem 2rem 0rem 0rem;">
          "Aku kangen dibacain {{$data->father_name}}," kata {{$data->name}}.<br>
          “Sabar ya Dek, {{$data->father_name}} kan sedang sibuk bekerja…”,<br>
          ucap {{$data->mother_name}} menjelaskan dengan lembut.
        </td>
      </tr>
    </table>
  </div>

  <div class="page page-2 font-white">
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

  <div class="page page-3 font-white">
    <table style="font-size: 58px;">
      <tr>
        <td style="padding: 7rem 0rem 0rem 2rem; vertical-align: top important!;">
          Mama mengecup kening {{$data->name}},<br>
          lalu beranjak pergi.<br>
          “Kenapa ya orang dewasa itu harus kerja?<br>
          Sungguh melelahkan
        </td>
        <td style="padding: 27rem 6rem 0rem 2rem;">
          Aku tidak ingin menjadi orang dewasa,”<br>
          pikir {{$data->name}} dalam hati.<br>
          Pikirannya menerawang hingga<br>
          akhirnya ia pun terlelap.
        </td>
      </tr>
    </table>
  </div>

  <div class="page page-4 font-black">
    <table style="font-size: 49px;">
      <tr>
        <td style="padding: 74rem 0rem 0rem 4rem; text-align: left !important;">
          Keesokan harinya, mereka sedang sarapan bersama.<br>
          “{{$data->father_name}} nanti kerja sampai malam lagi?” tanya {{$data->name}}<br>
          sambil berharap ayahnya akan menggeleng.
        </td>
        <td style="padding: 74rem 3rem 0rem 0rem; text-align: right !important;">
          “Iya Dek, maaf ya.<br>
          {{$data->father_name}} sedang mengejar target nih,” jawab {{$data->father_name}}.
        </td>
      </tr>
    </table>
  </div>

  <div class="page page-5 font-black">
    <table style="font-size: 54px;">
      <tr>
        <td style="padding: 68rem 0rem 0rem 4rem;">
          {{$data->father_name}} pun kembali bersiap<br>
          masuk ke ruangan kerjanya.<br>
          “Doakan pekerjaan {{$data->father_name}}” lancar ya, ucap {{$data->father_name}}<br>
          sambil menutup pintu.
        </td>
        <td style="padding: 74rem 3rem 0rem 0rem;">
          {{$data->name}} cemberut di kursinya.
        </td>
      </tr>
    </table>
  </div>
</body>
</html>