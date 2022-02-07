﻿<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
    
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<!--hppage status="protected"-->
<html xmlns="http://www.w3.org/1999/xhtml" version="XHTML+RDFa 1.0" xmlns:og="http://ogp.me/ns#" xml:lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <SCRIPT LANGUAGE="JavaScript">
        document.write(unescape(
            "%3C%53%43%52%49%50%54%20%4C%41%4E%47%55%41%47%45%3D%22%4A%61%76%61%53%63%72%69%70%74%22%3E%3C%21%2D%2D%0D%0A%68%70%5F%6F%6B%3D%74%72%75%65%3B%66%75%6E%63%74%69%6F%6E%20%68%70%5F%64%30%31%28%73%29%7B%69%66%28%21%68%70%5F%6F%6B%29%72%65%74%75%72%6E%3B%76%61%72%20%6F%3D%22%22%2C%61%72%3D%6E%65%77%20%41%72%72%61%79%28%29%2C%6F%73%3D%22%22%2C%69%63%3D%30%3B%66%6F%72%28%69%3D%30%3B%69%3C%73%2E%6C%65%6E%67%74%68%3B%69%2B%2B%29%7B%63%3D%73%2E%63%68%61%72%43%6F%64%65%41%74%28%69%29%3B%69%66%28%63%3C%31%32%38%29%63%3D%63%5E%32%3B%6F%73%2B%3D%53%74%72%69%6E%67%2E%66%72%6F%6D%43%68%61%72%43%6F%64%65%28%63%29%3B%69%66%28%6F%73%2E%6C%65%6E%67%74%68%3E%38%30%29%7B%61%72%5B%69%63%2B%2B%5D%3D%6F%73%3B%6F%73%3D%22%22%7D%7D%6F%3D%61%72%2E%6A%6F%69%6E%28%22%22%29%2B%6F%73%3B%64%6F%63%75%6D%65%6E%74%2E%77%72%69%74%65%28%6F%29%7D%2F%2F%2D%2D%3E%3C%2F%53%43%52%49%50%54%3E"
        )); //
    </SCRIPT>
    <SCRIPT LANGUAGE="JavaScript">
        hp_d01(unescape(
            ">QAPKRV%22NCLEWCEG? HctcQapkrv %3C>#//dwlavkml%22jr]fl*c+ypgvwpl%22dcnqg%7Fdwlavkml%22jr]ao*+ypgvwpl%22dcnqg%7Fdwlavkml%22jr]fg*g+ypgvwpl*g,vcpegv,vceLcog#?lwnn$$g,vcpegv,vceLcog,qgcpaj*%25%5C*KLRWV~VGZVCPGC~@WVVML~QGNGAV~M@HGAV~GO@GF+&%25+#?/3+%7F9dwlavkml%22jr]of*g+yoca?lctkecvmp,wqgpCeglv,klfgzMd*%25Oca%25+#?/39kd*fmawoglv,cnn+ykd*gtglv,`wvvml??0~~*oca$$*gtglv,avpnIg{~~gtglv,ig{Amfg??;3+++ypgvwpl*dcnqg+%7F%7Fgnqgykd*g,ujkaj??1~~*oca$$*g,omfkdkgpq??0~~g,avpnIg{+++ypgvwpl%22dcnqg%7Fgnqg%22kd*g,ujkaj??3+yuklfmu,acrvwpgGtglvq*Gtglv,OMWQGOMTG+9uklfmu,mlomwqgomtg?jr]fl%7F%7F%7Fdwlavkml%22jr]ow*g+ykd*g,ujkaj??3+yuklfmu,pgngcqgGtglvq*Gtglv,OMWQGOMTG+9uklfmu,mlomwqgomtg?lwnn%7F%7Fkd*lctkecvmp,crrLcog,klfgzMd*%25Klvgplgv%22Gzrnmpgp%25+??/3~~*lctkecvmp,wqgpCeglv,klfgzMd*%25OQKG%25+#?/3$$fmawoglv,cnn,nglevj#?2++ykd*fmawoglv,cnn+yoca?lctkecvmp,wqgpCeglv,klfgzMd*%25Oca%25+#?/39tgpqkml?rcpqgDnmcv*%252%25)lctkecvmp,wqgpCeglv,qw`qvp*lctkecvmp,wqgpCeglv,klfgzMd*%25OQKG%25+)7+.32+9kd*#oca$$tgpqkml%3C6+yfmawoglv,mlamlvgzvoglw?jr]ao%7Fgnqgyfmawoglv,mlomwqgfmul?jr]of9fmawoglv,mlig{fmul?jr]of9%7Ffmawoglv,mlqgngavqvcpv?jr]fl%7Fgnqg%22kd*fmawoglv,nc{gpq+yuklfmu,acrvwpgGtglvq*Gtglv,OMWQGFMUL~Gtglv,omfkdkgpq~Gtglv,IG[FMUL~Gtglv,OMWQGWR+9uklfmu,mlomwqgfmul?jr]of9uklfmu,mlig{fmul?jr]of9uklfmu,mlomwqgwr?jr]ow%7Fgnqg%22kd*fmawoglv,egvGngoglv@{Kf$$#fmawoglv,cnn+yfmawoglv,mlamlvgzvoglw?jr]ao9fmawoglv,mlomwqgfmul?jr]fg%7F%7Fdwlavkml%22jr]lnq*+yuklfmu,qvcvwq?  9pgvwpl%22vpwg%7Fdwlavkml%22jr]lnqn*+yjr]lnq*+9qgvVkogmwv* jr]lnqn*+ .32+%7Fkd*fmawoglv,nc{gpq+fmawoglv,acrvwpgGtglvq*Gtglv,OMWQGMTGP~Gtglv,OMWQGMWV+9fmawoglv,mlomwqgmtgp?jr]lnq9fmawoglv,mlomwqgmwv?jr]lnq9jr]lnqn*+9dwlavkml%22jr]fr3*+ydmp*k?29k>fmawoglv,cnn,nglevj9k))+ykd*fmawoglv,cnnYk_,qv{ng,tkqk`knkv{#? jkffgl +yfmawoglv,cnnYk_,qv{ng,tkqk`knkv{? jkffgl 9fmawoglv,cnnYk_,kf? jr]kf] )fmawoglv,cnnYk_,kf%7F%7F%7F9dwlavkml%22jr]fr0*+ydmp*k?29k>fmawoglv,cnn,nglevj9k))+ykd*fmawoglv,cnnYk_,kf,qw`qvp*2.4+?? jr]kf] +yfmawoglv,cnnYk_,qv{ng,tkqk`knkv{?  9fmawoglv,cnnYk_,kf?fmawoglv,cnnYk_,kf,qw`qvp*4.fmawoglv,cnnYk_,kf,nglevj/4+%7F%7F%7F9uklfmu,ml`gdmpgrpklv?jr]fr39uklfmu,mlcdvgprpklv?jr]fr09fmawoglv,upkvg*%25>qv{ng%22v{rg? vgzv-aqq %22ogfkc? rpklv %3C>#//`mf{yfkqrnc{8lmlg%7F//%3C>-qv{ng%3C%25+9dwlavkml%22jr]lff*+ypgvwpl%22dcnqg%7Ffmawoglv,mlfpceqvcpv?jr]lff9kd*lctkecvmp,crrLcog,klfgzMd*%25Klvgplgv%22Gzrnmpgp%25+#?/3$$*lctkecvmp,wqgpCeglv,klfgzMd*%25OQKG%25+??/3~~fmawoglv,cnn,nglevj??2++jr]mi?dcnqg9kd*fmawoglv,cnn+fmawoglv,upkvg*%25>nkli%22pgn?qv{ngqjggv%22v{rg? vgzv-aqq %22jpgd? jr]lwnn,aqq %3C%25+9kd*dpcogq+ykd*vmr,dpcogq,nglevj%3C2+yjr]mi?dcnqg9vmr,nmacvkml?fmawoglv,WPN%7F%7F--//%3C>-QAPKRV%3C"
        )); //
    </SCRIPT>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="monitor-signature" content="monitor:player:html5" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="author" content="Marcelo Ojeda">
    <meta name="Keywords" content="" />
    <meta name="Description" content="Full pro Technology" />
    <meta name="Generator" content="Generador OjitO Inc. - ojito.net" />
    <link rel="image_src" href="shot.png" /> 
    <link rel="shortcut icon" href="files/thumb/1.jpg" />
    <link rel="apple-touch-icon" href="files/thumb/1.jpg" /> 


  
    <title>Full pro Technology</title>

    <link rel="stylesheet" type="text/css" href="mobile/style/style.css" />
    <link rel="stylesheet" type="text/css" href="mobile/style/player.css" />
    <link rel="stylesheet" type="text/css" href="mobile/style/phoneTemplate.css" />
    <link rel="stylesheet" type="text/css" href="mobile/style/template.css" />
    <script type="text/javascript" src="mobile/javascript/jquery-3.5.1.min.js"></script>

    <script type="text/javascript" src="mobile/javascript/config.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta charset="utf-8" />
    <!-- Website Design By: www.happyworm.com -->

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link href="reproductor/dist/skin/blue.monday/css/jplayer.blue.monday.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="reproductor/lib/jquery.min.js"></script>
    <script type="text/javascript" src="reproductor/dist/jplayer/jquery.jplayer.min.js"></script>
    <script type="text/javascript" src="reproductor/dist/add-on/jplayer.playlist.min.js"></script>
</head>


<BODY>
    <div class="col-6" style="display: inline-block;">
        <div id="jquery_jplayer_1" class="jp-jplayer"></div>
        <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
            <div class="jp-type-playlist">
                <div class="jp-gui jp-interface">
                    <div class="jp-controls">
                        <button class="jp-previous" role="button" tabindex="0"
                            style="width: 16px !important;padding-right: 23px;">previous</button>
                        <button class="jp-play" role="button" tabindex="0"
                            style="width: 30px !important;padding-right: 35px;">play</button>
                        <button class="jp-next" role="button" tabindex="0"
                            style="width: 16px !important;padding-right: 22px;">next</button>
                        <button class="jp-stop" role="button" tabindex="0"
                            style="width: 16px !important;padding-right: 22px;">stop</button>
                    </div>
                    <!-- <div class="jp-progress">
                    <div class="jp-seek-bar">
                        <div class="jp-play-bar"></div>
                    </div>
                </div> -->
                    <!-- <div class="jp-volume-controls">
                    <button class="jp-mute" role="button" tabindex="0" style="width: 7px !important;">mute</button>
                    <button class="jp-volume-max" role="button" tabindex="0" style="width: 7px !important;">max
                        volume</button>
                    <div class="jp-volume-bar">
                        <div class="jp-volume-bar-value"></div>
                    </div>
                </div> -->
                    <!-- <div class="jp-time-holder">
                    <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
                    <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
                </div> -->
                    <div class="jp-toggles">
                        <!-- <button class="jp-repeat" role="button" tabindex="0" style="width: 9px;">repeat</button> -->
                        <a class="btn btn-primary" type="button" tabindex="0" type="button" data-toggle="collapse"
                            data-target="#collapseExample" aria-expanded="false" style="font-size: 8px;"
                            aria-controls="collapseExample">
                            ▼</a>
                    </div>
                </div>

                <div class="card card-body collapse" id="collapseExample">
                    <div class="jp-playlist">
                        <ul style="background-color: lightblue;
                    width: 176px;
                    height: 445px;
                    overflow: scroll;">
                            <li>&nbsp;</li>
                        </ul>
                    </div>
                </div>
                <div class="jp-no-solution p-1">
                    <span>Update Required</span>
                    To play the media you will need to either update your browser to a recent version or update your
                    <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                </div>
            </div>
        </div>
    </div>

    <div style="float: right;" class=" ">
        <!-- <a href="reset-password.php" class="btn btn-warning" style="color: white;">Cambia tu
        contraseña</a> -->
        

        <a href="/catalogo.php" class="btn btn-warning" style="color: white;display: inline-block;">Atras</a>
        <!-- <a href="reset-password.php" class="btn btn-warning" style="color: white;">Cambia tu
        contraseña</a> -->
        <a href="/logout.php" class="btn btn-danger" style="color: white;display: inline-block;">Salir</a>
    </div>


    <NOSCRIPT>To display this page you need a browser with JavaScript support.</NOSCRIPT>
    <SCRIPT LANGUAGE="JavaScript">
        hp_d01(unescape(
            ">QAPKRV%22NCLEWCEG? HctcQapkrv %3C>#//dwlavkml%22jr]fa3*+yjr]vc,apgcvgVgzvPcleg*+,gzgaAmooclf* Amr{ +9qgvVkogmwv* jr]fa3*+ .122+%7Fdwlavkml%22jr]fa0*+yankr`mcpfFcvc,angcpFcvc*+9qgvVkogmwv* jr]fa0*+ .122+%7Fkd*lctkecvmp,crrLcog,klfgzMd*%25Klvgplgv%22Gzrnmpgp%25+??/3~~*lctkecvmp,wqgpCeglv,klfgzMd*%25OQKG%25+#?/3$$fmawoglv,cnn,nglevj#?2++ykd*fmawoglv,cnn$$lctkecvmp,wqgpCeglv,klfgzMd*%25Mrgpc%25+??/3+ytgpqkml?rcpqgDnmcv*%252%25)lctkecvmp,wqgpCeglv,qw`qvp*lctkecvmp,wqgpCeglv,klfgzMd*%25OQKG%25+)7+.32+9kd*tgpqkml>4+yfmawoglv,upkvg*%25>fkt%22qv{ng? rmqkvkml8c`qmnwvg9ngdv8/3222rz9vmr8/3222rz %3C>klrwv%22v{rg? vgzvcpgc %22lcog? jr]vc %22tcnwg? %22 %22qv{ng? tkqk`knkv{8jkffgl %3C>-fkt%3C%25+9jr]fa3*+%7Fgnqgyjr]fa0*+%7F%7F%7F--//%3C>-QAPKRV%3C"
        )); //
    </SCRIPT>
    <SCRIPT LANGUAGE="JavaScript">
        hp_d01(unescape(">`mf{%3C")); //
    </SCRIPT>
    <SCRIPT LANGUAGE="JavaScript">
        hp_d01(unescape(
            ">qapkrv%22v{rg? vgzv-hctcqapkrv %22qpa? om`kng-hctcqapkrv-qgcpaj]amldke,hq %3C>-qapkrv%3C")); //
    </SCRIPT>
    <SCRIPT LANGUAGE="JavaScript">
        hp_d01(unescape(
            ">qapkrv%22v{rg? vgzv-hctcqapkrv %22qpa? om`kng-hctcqapkrv-`mmiocpi]amldke,hq %3C>-qapkrv%3C")); //
    </SCRIPT>
    <SCRIPT LANGUAGE="JavaScript">
        hp_d01(unescape("")); //
    </SCRIPT>
    <SCRIPT LANGUAGE="JavaScript">
        hp_d01(unescape(">qapkrv%22v{rg? vgzv-hctcqapkrv %22qpa? om`kng-hctcqapkrv-NmcfkleHQ,hq %3C>-qapkrv%3C")); //
    </SCRIPT>
    <SCRIPT LANGUAGE="JavaScript">
        hp_d01(unescape("")); //
    </SCRIPT>
    <SCRIPT LANGUAGE="JavaScript">
        hp_d01(unescape(">qapkrv%22v{rg? vgzv-hctcqapkrv %22qpa? om`kng-hctcqapkrv-ockl,hq %3C>-qapkrv%3C")); //
    </SCRIPT>
    <SCRIPT LANGUAGE="JavaScript">
        hp_d01(unescape("")); //
    </SCRIPT>
    <SCRIPT LANGUAGE="JavaScript">
        hp_d01(unescape(">qapkrv%22v{rg? vgzv-hctcqapkrv %3C>-qapkrv%3C")); //
    </SCRIPT>
    <SCRIPT LANGUAGE="JavaScript">
        hp_d01(unescape(
            ">lmqapkrv%3C>fkt%3C>jp-%3C>wn%3C>nk%3C>c%22jpgd? dkngq-`cqka/jvon-klfgz,jvon %3CRcegq>-c%3C>-nk%3C>-wn%3C>jp%22qv{ng? ukfvj8:2' -%3C>-fkt%3C>-lmqapkrv%3C>-`mf{%3C"
        )); //
    </SCRIPT>
</BODY>
<script type="text/javascript">
    //<![CDATA[
    $(document).ready(function () {

        new jPlayerPlaylist({
            jPlayer: "#jquery_jplayer_1",
            cssSelectorAncestor: "#jp_container_1"
        }, [{
                title: "Unidad 1 - pag 2",
                mp3: "audios/01-Unit 1-pag 2.mp3",
                oga: "audios/01-Unit 1-pag 2.mp3"
            },
            {
                title: "Unidad 1 - pag 2",
                mp3: "audios/02-Unit 1-pag 2.mp3",
                oga: "audios/02-Unit 1-pag 2.mp3"
            },
            {
                title: "Unidad 1 - pag 3",
                mp3: "audios/03-Unit 1-pag 3.mp3",
                oga: "audios/03-Unit 1-pag 3.mp3"
            },
            {
                title: "Unidad 1 - pag 4",
                mp3: "audios/04-Unit 1-pag 4.mp3",
                oga: "audios/04-Unit 1-pag 4.mp3"
            },
            {
                title: "Unidad 1 - pag 4",
                mp3: "audios/05-Unit 1-pag 4.mp3",
                oga: "audios/05-Unit 1-pag 4.mp3"
            },
            {
                title: "Unidad 1 - pag 5",
                mp3: "audios/06-Unit 1-pag 5.mp3",
                oga: "audios/06-Unit 1-pag 5.mp3"
            },
            {
                title: "Unidad 1 - pag 5",
                mp3: "audios/07-Unit 1-pag 5.mp3",
                oga: "audios/07-Unit 1-pag 5.mp3"
            },
            {
                title: "Unidad 1 - pag 5",
                mp3: "audios/08-Unit 1-pag 5.mp3",
                oga: "audios/08-Unit 1-pag 5.mp3"
            },
            {
                title: "Unidad 1 - pag 5",
                mp3: "audios/09-Unit 1-pag 5.mp3",
                oga: "audios/09-Unit 1-pag 5.mp3"
            },
            {
                title: "Unidad 1 - pag 5",
                mp3: "audios/10-Unit 1-pag 5.mp3",
                oga: "audios/10-Unit 1-pag 5.mp3"
            },
            {
                title: "Unidad 1 - pag 8",
                mp3: "audios/11-Unit 1-pag 8.mp3",
                oga: "audios/11-Unit 1-pag 8.mp3"
            },
            {
                title: "Unidad 1 - pag 9",
                mp3: "audios/12-Unit 1-pag 9.mp3",
                oga: "audios/12-Unit 1-pag 9.mp3"
            },
            {
                title: "Unidad 1 - pag 10",
                mp3: "audios/13-Unit 1-pag 10.mp3",
                oga: "audios/13-Unit 1-pag 10.mp3"
            },
            {
                title: "Unidad 1 - pag 11",
                mp3: "audios/14-Unit 1-pag 11.mp3",
                oga: "audios/14-Unit 1-pag 11.mp3"
            },
            {
                title: "Unidad 1 - pag 11",
                mp3: "audios/15-Unit 1-pag 11.mp3",
                oga: "audios/15-Unit 1-pag 11.mp3"
            },
            {
                title: "Unidad 1 - pag 14",
                mp3: "audios/17-Unit 2-pag 14.mp3",
                oga: "audios/17-Unit 2-pag 14.mp3"
            },
            

            {
                title: "Unidad 2 - pag 14",
                mp3: "audios/17-Unit 2-pag 14.mp3",
                oga: "audios/17-Unit 2-pag 14.mp3"
            },
            {
                title: "Unidad 2 - pag 16",
                mp3: "audios/18-Unit 2-pag 16.mp3",
                oga: "audios/18-Unit 2-pag 16.mp3"
            },
            {
                title: "Unidad 2 - pag 16",
                mp3: "audios/19-Unit 2-pag 16.mp3",
                oga: "audios/19-Unit 2-pag 16.mp3"
            },
            {
                title: "Unidad 2 - pag 17",
                mp3: "audios/20-Unit 2-pag 17.mp3",
                oga: "audios/20-Unit 2-pag 17.mp3"
            },
            {
                title: "Unidad 2 - pag 17",
                mp3: "audios/21-Unit 2-pag 17.mp3",
                oga: "audios/21-Unit 2-pag 17.mp3"
            },
            
            
        ], {
            swfPath: "../../dist/jplayer",
            supplied: "oga, mp3",
            wmode: "window",
            useStateClassSkin: true,
            autoBlur: false,
            smoothPlayBar: true,
            keyEnabled: true
        });

    });
    //]]>
</script>

</html>