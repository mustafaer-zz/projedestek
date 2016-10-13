<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link href="css/loa.css" rel="stylesheet" type="text/css"/>
    <title> Proje Destek</title>
</head>
<body>
        
        <div id="container" >
            <div class="head">
                <label style="text-height: 30%;">Welcome to <b>PROJE DESTEK</b></label>
                <label style="float: right;">
                    <?php
 
                        $oku = file_get_contents('sayac.txt');
                            # Ana Dizinde Sayac.Txt Dosyam Oluşsun.
                        $oku = $oku+1;
                           # Görüntülendiğinde +1 Artsın.
                        echo "$oku people view.   ";
                           # Ekrana Basalım.
                        file_put_contents('sayac.txt',$oku);
                           # Dosyamıza Kaydedelim.


                        if(!isset($_COOKIE["Say"])){
 
                            $rd = file_get_contents('ziyaret.txt');
                            $rd = $rd+1;
                            echo "   $rd people visited.";
                            file_put_contents('ziyaret.txt',$rd);
                            # 24 Saat Cookie Ataması.Değerler Saniye Cinsinden.
                            setcookie("Say","1234",time()+60*60*24);

                            }else{
                            $rd = file_get_contents('ziyaret.txt');
                            echo "$rd people visited.";
                            file_put_contents('ziyaret.txt',$rd);
                        }
                            
                            date_default_timezone_set('Europe/Istanbul');
                            $dt = date('H:i:s');
                            
                            if ($dt == "00:00:00") {
                                setcookie ("Say","1234",time() - 60-60*24);
                            }

                        ?>
                </label>
            </div>
            <div class="us">
                <div class="dn"></div>
                <center><h3 class="bs">We will help to you for your project.</h3></center>
                
                <center><label class="or">But we need a more time for better service.</label></center>
                <div class="dn"></div>
                <h1 class="sn">The Last :</h1>
            </div>
            <div class="ort">
                <div class="dn"></div>
                <center><div id="gerisayim">
                <span id="spn" class="gun">00</span><label> Day</label>
                <span id="spn" class="saat">00</span><label> Hour</label>
                <span id="spn" class="dakika">00</span><label> Minutes</label>
                <span id="spn" class="saniye">00</span><label> Sec</label>

                </div></center>
                
                <script type="text/javascript" src="jquery-1.7.2.js"></script>
                 <script type="text/javascript" src="jquery.bvalidator.js"></script>
                 <script>



                 $(document).ready(function() {


                         $('#gerisayim').gerisayim({date: '1 january 2017 00:00:00'}); // geri sayım ayarlanıyor. ay ingilizcce olmalı.
                 });
                 </script>
                 <script type="text/javascript" src="geri_sayim.js"></script>
            </div>
            <div class="alt">
                <div class="dn"></div>
                <b><center>PROJE DESTEK ~ <a style="text-decoration: none; color: #333333; float: bottom;" href="http://saueem.com" target="_blank">SAUEEM.COM</a></center></b>
            </div>
        </div>
</body>
</html>
