  
<! DOCTYPE html >
< html  lang = " en " >
< kepala >
    < meta  charset = " UTF-8 " >
    < meta  http-equiv = " X-UA-Compatible " content = " IE = edge " >
    < meta  name = " viewport " content = " width = device-width, initial-scale = 1.0 " >
    < judul > Penggunaan IF Statement </ title >
</ head >
< body >
    < formulir >
        Besar Pembelian:
        < Masukan  jenis = " text " nama =" total_beli " > < br >
        < input  type = " submit " value = " Tentukan Diskon " >
    </ formulir >
    <? php 
        if ( isset ( $ total_beli )) {
            $ total_beli = intval ( $ total_beli );
            $ discon = 0 ;
            if ( $ total_beli > = 200000 ) {
                $ discon = 0,1 ;
            } elseif ( $ total_beli > = 100000 ) {
                $ discon = 0,05 ;
            } lain {
                $ discon = 0,01 ;
            }
            $ DISCON = $ DISCON * intval ( $ total_beli );
            printf ( "Diskon =% s \ n" , $ discon );
            printf ( "Pembayaran =% s \ n" , $ total_beli - $ discon );
        }
    ?>
</ body >
</ html >