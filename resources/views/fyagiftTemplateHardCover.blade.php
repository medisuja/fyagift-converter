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

    .page-13 {
      background-image:url('{{storage_path()}}/images/hard/{{$data->gender}}-content-13.jpg');
      line-height: 385%;
      page-break-after: always;
    }
    
    .page-14 {
      background-image:url('{{storage_path()}}/images/hard/{{$data->gender}}-content-14.jpg');
      line-height: 392%;
      page-break-after: always;
    }
    
    .page-15 {
      background-image:url('{{storage_path()}}/images/hard/{{$data->gender}}-content-15.jpg');
      line-height: 385%;
      page-break-after: always;
    }

    .page-16 {
      background-image:url('{{storage_path()}}/images/hard/{{$data->gender}}-content-16.jpg');
      line-height: 385%;
      page-break-after: always;
    }

    .page-17 {
      background-image:url('{{storage_path()}}/images/hard/{{$data->gender}}-content-17.jpg');
      line-height: 385%;
      page-break-after: always;
    }

    .page-18 {
      background-image:url('{{storage_path()}}/images/hard/{{$data->gender}}-content-18.jpg');
      line-height: 385%;
      page-break-after: always;
    }

    .page-19 {
      background-image:url('{{storage_path()}}/images/hard/{{$data->gender}}-content-19.jpg');
      line-height: 385%;
      page-break-after: always;
    }

    .page-20 {
      background-image:url('{{storage_path()}}/images/hard/{{$data->gender}}-content-20.jpg');
      line-height: 385%;
      page-break-after: always;
    }

    .page-21 {
      background-image:url('{{storage_path()}}/images/hard/{{$data->gender}}-content-21.jpg');
      line-height: 385%;
      page-break-after: always;
    }

    .page-22 {
      background-image:url('{{storage_path()}}/images/hard/{{$data->gender}}-content-22.jpg');
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
        <td style="padding: 15.8rem 1.5rem 0rem 0rem;">
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

  <div class="page page-13">
    <table style="font-size: 68px;">
      <tr>
        <td style="padding: 96rem 17rem 0rem 0rem; text-align: right !important;">
          Keesokan paginya, {{$data->name}} bangun terlambat.<br>
          Ia melihat {{$data->father_name}} dan {{$data->mother_name}} sedang<br>
          menunggu diruang keluarga.<br>
          “Kok, {{$data->father_name}} nggak kerja?” tanya {{$data->name}}.
        </td>
      </tr>
    </table>
  </div>

  <div class="page page-14">
    <table style="font-size: 68px;">
      <tr>
        <td style="padding: 10rem 10rem 0rem 0rem; text-align: right !important;">
          {{$data->father_name}} tersenyum hangat <br>
          sambil menjawab, <br>
          “Kemari Nak, ada yang <br>
          ingin {{$data->father_name}} sampaikan.”
        </td>
      </tr>
    </table>
  </div>

  <div class="page page-15">
    <table style="font-size: 68px;">
      <tr>
        <td style="padding: 8rem 0rem 0rem 11rem; text-align: left !important;">
          {{$data->name}} duduk di dekat {{$data->father_name}}. <br>
          Rasa kesalnya masih tersisa. <br>
          “Nak, maaf ya, {{$data->father_name}} belakangan sibuk sekali, <br>
          Karena sedang mengejar target.”
        </td>
      </tr>
    </table>
  </div>

  <div class="page page-16">
    <table style="font-size: 68px;">
      <tr>
        <td style="padding: 18.2rem 0rem 0rem 18rem; text-align: left !important;">
          {{$data->name}} termenung menatap {{$data->father_name}}.
        </td>
      </tr>
    </table>
  </div>

  <div class="page page-17"></div>

  <div class="page page-18">
    <table style="font-size: 68px;">
      <tr>
        <td style="padding: 7.6rem 8rem 0rem 0rem; text-align: right !important;">
          “Targetnya ialah, {{$data->father_name}} ingin semua <br>
          pekerjaan {{$data->father_name}} yang menumpuk <br>
          bisa selesai, supaya di ulang <br>
          tahun kamu minggu depan, <br>
          kita bisa berwisata keluar kota!” <br>
          <div style="padding-top: 0.7rem;">
            “Ahhhhh terima kasih {{$data->father_name}}!”
          </div>
          ujarnya sambil memeluk {{$data->father_name}} <br>
          dan {{$data->mother_name}} erat-erat. <br>
          {{$data->father_name}} dan {{$data->mother_name}} <br>
          tersenyum lebar, <br>
          kejutan kecil mereka <br>
          rupanya berhasil. <br>
        </td>
      </tr>
    </table>
  </div>

  <div class="page page-19"></div>

  <div class="page page-20">
    <table style="font-size: 68px;">
      <tr>
        <td style="padding: 7rem 8rem 0rem 0rem; text-align: right !important;">
          Di Taman Safari, <br>
          {{$data->name}} bermain dengan riang. <br>
          “{{$data->father_name}}, terima kasih ya <br>
          karena sudah menyempatkan waktu. <br>
          <div style="padding-top: 0.7rem;">
            Dan terima kasih juga sudah menemaniku
          </div>
          bermain tanpa sibuk melihat <br>
          handphone”, kata {{$data->name}} bersemangat. <br>
          {{$data->fahter_name}} dan {{$data->mother_name}} tertawa <br>
          <div style="padding-right: 5rem;">
            mendengar sindiran {{$data->name}}.
          </div>
        </td>
      </tr>
    </table>
  </div>

  <div class="page page-21">
    <table style="font-size: 68px;">
      <tr>
        <td style="padding: 14.6rem 9rem 0rem 0rem;">
          {{$data->name}} bersiap meniup lilin ulang tahunnya. <br>
          “Ini ulang tahunku yang terbaik! Aku puas <br>
          sekali!” katanya antusias, “Kalau sudah <br>
          puas, berarti kamu tidak ingin lagi <br>
          <div style="padding-top: 0.7rem;">
            jalan-jalan bersama {{$data->father_name}}?”, tanya {{$data->father_name}} usil.
          </div>
          “Kok begitu, ya tentu ingin dong! Lagi!” ujar  <br>
          {{$data->name}} penuh semangat. “Iya, iya,” jawab <br>
          {{$data->father_name}}. “Besok ya?” cecer {{$data->name}}. <br>
          {{$data->father_name}} dan {{$data->mother_name}} tertawa mendengar  <br>
          permintaan anaknya. {{$data->name}} lalu meniup <br>
          <div style="padding-top: 0.7rem;">
            lilinya dengan penuh sukacita.
          </div>
        </td>
      </tr>
    </table>
  </div>

  <div class="page page-22"></div>

  <div class="page skiblat-2">

</body>

</html>
