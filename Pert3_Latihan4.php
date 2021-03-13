<! DOCTYPE html >
< html  lang = " en " >
< kepala >
    < meta  charset = " UTF-8 " >
    < meta  http-equiv = " X-UA-Compatible " content = " IE = edge " >
    < meta  name = " viewport " content = " width =, initial-scale = 1.0 " >
    < judul > Penggunaan Switch Case </ title >
</ head >
< body >
    Hari ini :
    <? php 
        $ nama_hari = tanggal ( "1" );
        saklar ( $ nama_hari ) {
            kasus  "Minggu" :
                cetak ( "Minggu <br>" );
                cetak "Waktu untuk istirahat" ;
                istirahat ;
            kasus  "Senin" :
                cetak ( "Senin <br>" );
                print "Meeting awal minggu jam 08.00" ;
                istirahat ;
            kasus  "Selasa" :
                cetak ( "Selasa <br>" );
                cetak "Pembukaan Bengkel Diklat" ;
                istirahat ;
            kasus  "Rabu" :
                print ( "Rabu <br>" );
                cetak "Seminar Launching Window Vista di JHCC" ;
                istirahat ;
            kasus  "Kamis" :
                cetak ( "Kamis <br>" );
                cetak "Pertemuan dengan Mahasiswa" ;
                istirahat ;
            kasus  "Jumat" :
                cetak ( "Jumat <br>" );
                cetak "Jogging Bersama" ;
                istirahat ;
            default ;
                cetak ( "Sabtu <br>" );
                cetak "Survei harga ke Dusit, Mangga dua" ;
                istirahat ;
        }
    ?>
</ body >
</ html >