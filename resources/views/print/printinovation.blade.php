<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript" src={{asset('js/jquery.printPage.js')}}></script>
  </head>
  <body>
    <div class="col-12">
        <div class="card">
                    <div class="card-body">
                      <style>.page-break
                      {
                        page-break-after: always;
                      }
                      </style>
                      @foreach($inovasi as $inovasis)
                      <br>
                      <div style="padding:1mm; border:2px solid;" align="center">
                        <h5 style="font-size:24px;">KARYA INOVASI</h5>
                      </div>
                      <h5 style="font-size:24px; text-align:center;" class="card-title m-b-0">{{$inovasis->judul}}</h5>
                      <h5 style="font-size:16px; text-align:center;" class="card-title m-b-0"><i>Dibuat oleh : {{$inovasis->writer}}</i></h5>
                      <br><br>
                      <h5 style="font-size:16px; text-align:center;" class="card-title m-b-0"><b>ABSTRAK</b></h5>
                      <h5 align="justify" style="font-size:16px; text-align:justify; text-justify:inter-word;" class="card-title m-b-0">{{$inovasis->abstract}}</h5>
                      <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Kata Kunci</b></h5>
                      <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0">{{$inovasis->katakunci}}</h5>
                      <br><br>
                      <div class="page-break"></div>
                      <h5 style="font-size:16px; text-align:center;" class="card-title m-b-0"><b>PENDAHULUAN</b></h5>
                      <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Latar Belakang</b></h5>
                      <h5 style="font-size:16px; text-align:justify; text-justify:inter-word;" class="card-title m-b-0">{{$inovasis->latarb}}</h5>
                      <br>
                      <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Maksud dan Tujuan</b></h5>
                      <h5 style="font-size:16px; text-align:justify; text-justify:inter-word;" class="card-title m-b-0">{{$inovasis->maksud}}</h5>
                      <br>
                      <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Ruang Lingkup</b></h5>
                      <h5 style="font-size:16px; text-align:justify; text-justify:inter-word;" class="card-title m-b-0">{{$inovasis->ruanglingkup}}</h5>
                      <br>
                      <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Metodologi</b></h5>
                      <h5 style="font-size:16px; text-align:justify; text-justify:inter-word;" class="card-title m-b-0">{{$inovasis->metodelogi}}</h5>
                      <br>
                      <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Landasan Teori</b></h5>
                      <h5 style="font-size:16px; text-align:justify; text-justify:inter-word;" class="card-title m-b-0">{{$inovasis->landasant}}</h5>
                      <br>
                      <div class="page-break"></div>
                      <h5 style="font-size:16px; text-align:center;" class="card-title m-b-0"><b>PEMBAHASAN</b></h5>
                      <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>RPCS Permasalahan</b></h5>
                      <h5 style="font-size:16px; text-align:justify; text-justify:inter-word;" class="card-title m-b-0">{{$inovasis->rpcs}}</h5>
                      <br>
                      <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Idea Generation</b></h5>
                      <h5 style="font-size:16px; text-align:justify; text-justify:inter-word;" class="card-title m-b-0">{{$inovasis->idea}}</h5>
                      <br>
                      <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Table Idea Generation</b></h5>
                      <img src="{{$inovasis->tidea}}"/>
                      <br>
                      <br>
                      <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Table Prioritas</b></h5>
                      <img src="{{$inovasis->tprio}}"/>
                      <br>
                      <br>
                      <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Matrix Prioritas</b></h5>
                      <img src="{{$inovasis->mprio}}"/>
                      <br>
                      <br>
                      <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Pelaksanaan Project</b></h5>
                      <h5 style="font-size:16px; text-align:justify; text-justify:inter-word;" class="card-title m-b-0">{{$inovasis->pelaksanaan}}</h5>
                      <br>
                      <div class="page-break"></div>
                      <h5 style="font-size:16px; text-align:center;" class="card-title m-b-0"><b>MANFAAT DAN ANALISA RESIKO</b></h5>
                      <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Manfaat Finansial</b></h5>
                      <h5 style="font-size:16px; text-align:justify; text-justify:inter-word;" class="card-title m-b-0">{{$inovasis->manfaatf}}</h5>
                      <br>
                      <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Return of Invesment (ROI)</b></h5>
                      <h5 style="font-size:16px; text-align:justify; text-justify:inter-word;" class="card-title m-b-0">{{$inovasis->roi}}</h5>
                      <br>
                      <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Manfaat Non-Finansial</b></h5>
                      <h5 style="font-size:16px; text-align:justify; text-justify:inter-word;" class="card-title m-b-0">{{$inovasis->manfaatn}}</h5>
                      <br>
                      <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Analisa Resiko</b></h5>
                      <h5 style="font-size:16px; text-align:justify; text-justify:inter-word;" class="card-title m-b-0">{{$inovasis->pelaksanaan}}</h5>
                      <br>
                      <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Matrix Prioritas</b></h5>
                      <img src="{{$inovasis->tprio}}"/>
                      <br>
                      <div class="page-break"></div>
                      <h5 style="font-size:16px; text-align:center;" class="card-title m-b-0"><b>KESIMPULAN DAN SARAN</b></h5>
                      <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Kesimpulan</b></h5>
                      <h5 style="font-size:16px; text-align:justify; text-justify:inter-word;" class="card-title m-b-0">{{$inovasis->kesimpulan}}</h5>
                      <br>
                      <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Saran</b></h5>
                      <h5 style="font-size:16px; text-align:justify; text-justify:inter-word;" class="card-title m-b-0">{{$inovasis->saran}}</h5>
                  </div>
                      @endforeach
                </div>
    </div>
  </body>
</html>
