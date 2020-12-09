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
      width: 46.85cm;
      height: 53cm;
      background-repeat: no-repeat;
      background-size: 100% auto;
    }

    .cover {
      background-image:url('{{storage_path()}}/images/hard/hard-cover.jpg');
    }

    .skiblat-1 {
      background-image:url('{{storage_path()}}/images/hard/skiblat-1.jpg');
      page-break-after: always;
    }

    .skiblat-2 {
      background-image:url('{{storage_path()}}/images/hard/skiblat-2.jpg');
      page-break-after: always;
    }

    .page-1 {
      background-image:url('{{storage_path()}}/images/hard/{{$data->gender}}-content-1.jpg');
      line-height: 350%;
      page-break-after: always;
    }

    .page-2 {
      background-image:url('{{storage_path()}}/images/hard/{{$data->gender}}-content-2.jpg');
      line-height: 400%;
      page-break-after: always;
    }

    .page-3 {
      background-image:url('{{storage_path()}}/images/hard/{{$data->gender}}-content-3.jpg');
      line-height: 360%;
      page-break-after: always;
    }

    .page-4 {
      background-image:url('{{storage_path()}}/images/hard/{{$data->gender}}-content-4.jpg');
      line-height: 360%;
      page-break-after: always;
    }

    .page-5 {
      background-image:url('{{storage_path()}}/images/hard/{{$data->gender}}-content-5.jpg');
      line-height: 350%;
      page-break-after: always;
    }

    .page-6 {
      padding: 0;
      background-image:url('{{storage_path()}}/images/hard/{{$data->gender}}-content-6.jpg');
      line-height: 350%;
      page-break-after: always;
    }

    .page-7 {
      background-image:url('{{storage_path()}}/images/hard/{{$data->gender}}-content-7.jpg');
      line-height: 350%;
      page-break-after: always;
    }

    .page-8 {
      background-image:url('{{storage_path()}}/images/hard/{{$data->gender}}-content-8.jpg');
      line-height: 350%;
      page-break-after: always;
    }

    .page-9 {
      background-image:url('{{storage_path()}}/images/hard/{{$data->gender}}-content-9.jpg');
      line-height: 350%;
      page-break-after: always;
    }

    .page-10 {
      background-image:url('{{storage_path()}}/images/hard/{{$data->gender}}-content-10.jpg');
      line-height: 350%;
      page-break-after: always;
    }

    .page-11 {
      background-image:url('{{storage_path()}}/images/hard/{{$data->gender}}-content-11.jpg');
      line-height: 375%;
      page-break-after: always;
    }

    .page-12 {
      background-image:url('{{storage_path()}}/images/hard/{{$data->gender}}-content-12.jpg');
      line-height: 385%;
      page-break-after: always;
    }
  </style>
</head>

<body>

  <div class="page-hard-cover hard-cover">

  <div class="page skiblat-1"></div>

  <div class="page page-1 font-white">
    <table style="font-size: 62px;">
      <tr>
        <td style="padding: 35rem 6rem 0rem 0rem;">
          {{$data->name}} dan {{$data->mother_name}}<br>
          sedang bersiap tidur.<br>
          <div style="padding-top: 1rem;">
            {{$data->mother_name}} baru saja selesai
          <div>
          membacakan buku cerita.
        </td>
      </tr>
    </table>
  </div>

  <div class="page page-2 font-white">
    <table style="font-size: 72px;">
      <tr>
        <td style="padding: 88rem 0rem 0rem 0rem;">
          “Aku kangen dibacain {{$data->father_name}},” kata {{$data->name}}.<br>
          “Sabar ya Nak, {{$data->father_name}} kan sedang sibuk bekerja…”,<br>
          ucap {{$data->mother_name}} menjelaskan dengan lembut.
        </td>
      </tr>
    </table>
  </div>

  <div class="page page-3 font-white">
    <table style="font-size: 64px;">
      <tr>
        <td style="padding: 37rem 4rem 0rem 0rem;">
          “Memangnya<br>
          kalau {{$data->mother_name}} yang cerita,<br>
          <div style="padding-top: 1rem;">kurang seru ya?”</div>
          tanya {{$data->mother_name}}.
        </td>
      </tr>
    </table>
  </div>

  <div class="page page-4 font-white">
    <table style="font-size: 66px;">
      <tr>
        <td style="padding: 104rem 1rem 0rem 4rem;">
          {{$data->name}} hanya menghela nafas<br>
          dengan wajah kecewa.
        </td>
      </tr>
    </table>
  </div>

  <div class="page page-5 font-white">
    <table style="font-size: 66px;">
      <tr>
        <td style="padding: 16rem 1.5rem 0rem 0rem;">
          {{$data->mother_name}} mengecup kening {{$data->name}},<br>
          lalu beranjak pergi.<br>
          <div style="padding-top: 1rem;">
            “Kenapa ya orang dewasa itu harus kerja?
          <div>
          Sungguh melelahkan
        </td>
      </tr>
    </table>
  </div>

  <div class="page page-6 font-white">
    <table style="font-size: 66px;">
      <tr>
        <td style="padding: 39rem 0rem 0rem 4rem;">
          Aku tidak ingin menjadi orang dewasa,”<br>
          pikir {{$data->name}} dalam hati.<br>
          <div style="padding-top: 1.2rem;">Pikirannya menerawang hingga</div>
          akhirnya ia pun terlelap.
        </td>
      </tr>
    </table>
  </div>

  <div class="page page-7 font-black">
    <table style="font-size: 64px;">
      <tr>
        <td style="padding: 101.5rem 0rem 0rem 8rem; text-align: left !important;">
          Keesokan harinya, mereka sedang sarapan bersama.<br>
          <div style="padding-top: 0.5rem;">“{{$data->father_name}} nanti kerja sampai malam lagi?” tanya {{$data->name}}</div>
          <div style="padding-top: 0.5rem;">sambil berharap {{$data->father_name}} akan menggeleng.</div>
        </td>
      </tr>
    </table>
  </div>

  <div class="page page-8 font-black">
    <table style="font-size: 65px;">
      <tr>
        <td style="padding: 107rem 8rem 0rem rem; text-align: right !important;">
          “Iya Nak, maaf ya.<br>
          {{$data->father_name}} sedang mengejar target nih,” jawab {{$data->father_name}}.
        </td>
      </tr>
    </table>
  </div>

  <div class="page page-9 font-black">
    <table style="font-size: 68px;">
      <tr>
        <td style="padding: 95.5rem 1rem 0rem 0rem;">
          {{$data->father_name}} pun kembali bersiap<br>
          masuk ke ruangan kerjanya.<br>
          <div style="padding-top: 0.7rem;">“Doakan pekerjaan {{$data->father_name}}” lancar ya, ucap {{$data->father_name}}</div>
          <div style="padding-top: 0.7rem;">sambil menutup pintu.</div>
        </td>
      </tr>
    </table>
  </div>

  <div class="page page-10 font-black">
    <table style="font-size: 68px;">
      <tr>
        <td style="padding: 111rem 0rem 0rem 0rem;">
          {{$data->name}} cemberut di kursinya.
        </td>
      </tr>
    </table>
  </div>

  <div class="page page-11 font-white">
    <table style="font-size: 68px;">
      <tr>
        <td style="padding: 14.5rem 17rem 0rem 0rem; text-align: right !important;">
          Malam harinya, <br>
          {{$data->mother_name}} bersiap membacakan cerita, <br>
          namum {{$data->name}} menolak. “Aku ingin <br>
          <div style="padding-top: 0.5rem;">langsung tidur saja, {{$data->mother_name}},” ujarnya</div>
        </td>
      </tr>
    </table>
  </div>

  <div class="page page-12 font-white">
    <table style="font-size: 68px;">
      <tr>
        <td style="padding: 99rem 0rem 0rem 27rem; text-align: left !important;">
          Sesungguhnya {{$data->name}} belum mengantuk, <br>
          tapi ia ingin sekali dibacakan cerita <br>
          oleh {{$data->father_name}}.
        </td>
      </tr>
    </table>
  </div>

  <div class="page skiblat-2">

</body>

</html>
