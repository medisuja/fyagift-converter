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
      /* width: 33.05cm;
      height: 18.92cm; */
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

    .page-6 {
      padding: 0;
      background-image:url('{{storage_path()}}/images/{{$data->gender}}-page-6.jpg');
      line-height: 300%;
      page-break-after: always;
    }

    .page-7 {
      background-image:url('{{storage_path()}}/images/{{$data->gender}}-page-7.jpg');
      line-height: 300%;
      page-break-after: always;
    }

    .page-8 {
      background-image:url('{{storage_path()}}/images/{{$data->gender}}-page-8.jpg');
      line-height: 300%;
      page-break-after: always;
    }

    .page-9 {
      background-image:url('{{storage_path()}}/images/{{$data->gender}}-page-9.jpg');
      line-height: 300%;
      page-break-after: always;
    }

    .page-10 {
      background-image:url('{{storage_path()}}/images/{{$data->gender}}-page-10.jpg');
      line-height: 320%;
      page-break-after: always;
    }

    .page-11 {
      background-image:url('{{storage_path()}}/images/{{$data->gender}}-page-11.jpg');
      line-height: 310%;
      page-break-after: always;
    }

    .page-12 {
      background-image:url('{{storage_path()}}/images/{{$data->gender}}-page-12.jpg');
      line-height: 300%;
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
          {{$data->mother_name}} mengecup kening {{$data->name}},<br>
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

  <div class="page page-6 font-white">
    <table style="font-size: 54px;">
      <tr>
        <td style="
          padding: 10rem 7rem 0rem 0rem;
          text-align: right;
          vertical-align: top important!;
        ">
          Malam harinya, <br>
          {{$data->mother_name}} bersiap membacakan cerita, <br>
          namum {{$data->name}} menolak. <br>
          “Aku ingin langsung tidur saja, {{$data->mother_name}},” ujarnya
        </td>
        <td style="
          padding: 75rem 0rem 0rem 9rem;
          text-align: left;
        ">
          Sesungguh nya {{$data->name}} belum mengantuk, <br>
          tapi ia ingin sekali dibacakan cerita oleh {{$data->father_name}}.
        </td>
      </tr>
    </table>
  </div>

  <div class="page page-7 font-black">
    <table style="font-size: 54px;">
      <tr>
        <td style="
          padding: 69rem 5rem 0rem 0rem;
          text-align: right;
        ">
          Keesokan paginya, {{$data->name}} bangun terlambat. <br>
          Ia melihat {{$data->father_name}} dan {{$data->mother_name}} sedang menunggu <br>
          di ruang keluarga. <br>
          “Kok, {{$data->father_name}} nggak kerja?” tanya Snow.
        </td>
        <td style="
          padding: 5rem 7rem 0rem 0rem;
          text-align: right;
          vertical-align: top important!;
        ">
          {{$data->father_name}} tersenyum hangat <br>
          sambil menjawab, <br>
          “Kemari Nak, ada yang <br>
          ingin {{$data->father_name}} sampaikan.”
        </td>
      </tr>
    </table>
  </div>

  <div class="page page-8 font-black">
    <table style="font-size: 54px;">
      <tr>
        <td style="
          padding: 3rem 0rem 0rem 3rem;
          text-align: left;
          vertical-align: top important!;
        ">
          {{$data->name}} duduk di dekat {{$data->father_name}}. <br>
          Rasa kesalnya masih tersisa. <br>
          “Nak, maaf ya, {{$data->father_name}} belakangan sibuk sekali, <br>
          Karena sedang mengejar target. Targetnya ialah, <br>
          {{$data->father_name}} ingin semua perkerjaan {{$data->father_name}} yang menumpuk <br>
          bisa selesai,
        </td>
        <td style="
          padding: 3rem 0rem 0rem 3rem;
          text-align: left;
          vertical-align: top important!;
        ">
          supaya di ulang tahun kamu <br>
          minggu depan, <br>
          kita bisa berwisata ke luar kota!” <br>
          Snow termenung menatap <br>
          {{$data->father_name}}nya.
        </td>
      </tr>
    </table>
  </div>

  <div class="page page-9 font-black">
    <table style="font-size: 54px;">
      <tr>
        <td style="
          padding: 0rem 0rem 0rem 0rem;
        ">
        </td>
        <td style="
          padding: 18rem 4rem 0rem 0rem;
          text-align: right;
        ">
          “Ahhhhh terimakasih {{$data->father_name}}!” <br>
          ujarnya sambil memeluk {{$data->father_name}} <br>
          dan {{$data->mother_name}} erat-erat. <br>
          {{$data->father_name}} dan {{$data->mother_name}} <br>
          tersenyum lebar, <br>
          kejutan kecil mereka <br>
          rupanya berhasil.
        </td>
      </tr>
    </table>
  </div>

  <div class="page page-10 font-black">
    <table style="font-size: 54px;">
      <tr>
        <td style="padding: 0rem 0rem 0rem 0rem;">
        </td>
        <td style="
          padding: 2rem 3.5rem 0rem 0rem;
          text-align: right;
        ">
          Di kebun binatang,<br>
          {{$data->name}} bermain dengan riang.<br>
          “{{$data->father_name}}, terimakasih ya<br>
          karna sudah menyempatkan waktu.<br>
          Dan terimakasih juga sudah<br>
          menemaniku bermain tanpa sibuk<br>
          melihat handphone!” kata {{$data->name}} bersemangat.<br>
          <div style="
            padding-right:4rem;
          ">
            {{$data->father_name}} dan {{$data->mother_name}} tertawa<br>
            mendengar sindiran {{$data->name}}.
          </div>
        </td>
      </tr>
    </table>
  </div>

  <div class="page page-11 font-black">
    <table style="font-size: 54px;">
      <tr>
        <td style="
          padding: 9rem 8rem 0rem 0rem;
        ">
          {{$data->name}} bersiap meniup lilin ulang tahunnya. <br>
          “Ini ulang tahunku yang terbaik! Aku puas <br>
          sekali” katanya antusias. “Kalau sudah <br>
          puas, berarti kamu tidak ingin lagi <br>
          jalan-jalan bersama {{$data->father_name}}?” tanya {{$data->father_name}} <br>
          usil. “Kok begitu, ya tentu ingin dong! <br>
          Lagi” ujar {{$data->name}} penuh semangat. “Iya, <br>
          iya, “jawab {{$data->father_name}}. “Besok ya?” cecar {{$data->name}}. <br>
          {{$data->father_name}} dan {{$data->mother_name}} tertawa mendengar <br>
          permintaan anaknya. {{$data->name}} lalu meniup <br>
          lilinnya dengan penuh sukacita.
        </td>
        <td></td>
      </tr>

      <tr>
        <td style="
          padding: 18rem 7rem 0rem 0rem;"
        >
          Tahun depan, <br>
          ada kejutan <br>
          apa lagi ya?
        </td>
        <td></td>
      </tr>
    </table>
  </div>

</body>
</html>
