<?php
	$brg1 = "Buku";  
	$brg2 = "Mouse";  
	$brg3 = "FlashDisk";  
	$brg4 = "Pulpen"; 
	$harga1 = 17500;  
	$harga2 = 30000;
	$harga3 = 70000;  
	$harga4 = 22300;  
	$jmlbrg1 = 2;  
	$jmlbrg2 = 5;  
	$jmlbrg3 = 1;  
	$jmlbrg4 = 3;
	$th1 = $jmlbrg1 * $harga1;  
	$th2 = $jmlbrg2 * $harga2;  
	$th3 = $jmlbrg3 * $harga3;  
	$th4 = $jmlbrg4 * $harga4;
	$tharga = $th1 + $th2+ $th3 + $th4;
	$diskon = 5;
	$tdiskon = ($diskon * $tharga)/100; 
	$tdibayar = $tharga - $tdiskon; 
?>  

<! DOCTYPE html >
< html  lang = " en " >
< kepala >
    < meta  charset = " UTF-8 " >
    < meta  http-equiv = " X-UA-Compatible " content = " IE = edge " >
    < meta  name = " viewport " content = " width = device-width, initial-scale = 1.0 " >
    < judul > Daftar Peralatan yang dibeli </ title >
</ head >
< style  type = " text / css " >
    tubuh {
        ukuran font :  14 pt ;
    }
    tabel {
        ukuran font :  25 pt ;
    }
</ style >
< body >
    < tengah >
        < font  face = " comic sans serif " size = 5  color = " blue " > Contoh Perhitungan dengan PHP </ font >
        < table  border = " 1 " cellspacing = " 0 " cellpadding = " 3 " >
        < tr >
            < td  colspan = " 4 " align = " center " valign = " middle " >
                < b > Daftar Pemesanan Peralatan Kantor </ b >
            </ td >
        </ tr >
        < tr >
            < td > < b > Nama Peralatan </ b > </ td >
            < td > < b > Jumlah </ b > </ td >
            < td > < b > Harga Satuan </ b > </ td >
            < td > < b > Jumlah Harga </ b > </ td >
        </ tr >

        <? php
            // Mulai untuk mengisi tabel daftar dengan data yang ada
        ?>
        < tr >
            < td  align = " left " > <? php  echo  $ brg1 ; ?> </ td >
            < td  align = " left " > <? php  echo  $ jmlbrg1 ; ?> </ td >
            < td  align = " left " > <? php  echo  $ hrg1 ; ?> </ td >
            < td  align = " left " > <? php  echo  $ th1 ; ?> </ td >
        </ tr >
        < tr >
            < td  align = " left " > <? php  echo  $ brg2 ; ?> </ td >
            < td  align = " left " > <? php  echo  $ jmlbrg2 ; ?> </ td >
            < td  align = " left " > <? php  echo  $ hrg2 ; ?> </ td >
            < td  align = " left " > <? php  echo  $ th2 ; ?> </ td >
        </ tr >
        < tr >
            < td  align = " left " > <? php  echo  $ brg3 ; ?> </ td >
            < td  align = " left " > <? php  echo  $ jmlbrg3 ; ?> </ td >
            < td  align = " left " > <? php  echo  $ hrg3 ; ?> </ td >
            < td  align = " left " > <? php  echo  $ th3 ; ?> </ td >
        </ tr >
        < tr >
            < td  align = " left " > <? php  echo  $ brg4 ; ?> </ td >
            < td  align = " left " > <? php  echo  $ jmlbrg4 ; ?> </ td >
            < td  align = " left " > <? php  echo  $ hrg4 ; ?> </ td >
            < td  align = " left " > <? php  echo  $ th4 ; ?> </ td >
        </ tr >
        < tr >
            < td  colspan = " 3 " align = " right " > Harga Total </ td >
            < td  align = " right " > <? php  echo  $ thrg ; ?> </ td >
        </ tr >
        < tr >
            < td  colspan = " 3 " align = " right " > Diskon <? php  echo  "($ disc%)" ; ?> </ td >
            < td  align = " right " > <? php  echo  $ tdisc ; ?> </ td >
        </ tr >
        < td  colspan = " 3 " align = " right " > Jumlah harus dibayar </ td >
        < td  align = " right " > <? php  echo  $ tbyr ; ?> </ td >
        </ table >
    </ center >
</ body >
</ html >