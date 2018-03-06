<?php
/*
LiveImport (c) MaxD, 2017. Write to liveimport@devs.mx for support and purchase.
*/
 goto a6c0; Fe0f: $E5b = glob("\x74\x72\x61\156\163\154\141\x74\145\57\x2a"); foreach ($E5b as $lang) { if (is_dir($lang)) { goto cfc3; } @unlink($lang); goto E9d2; cfc3: fa1(substr($lang, 10)); @rmdir($lang); E9d2: } ec08: @rmdir("\x74\162\141\x6e\163\x6c\x61\x74\145"); EC(''); goto A41e; bfba: e6($_GET["\160\165\x72\x63\x68\x61\x73\145"]); $a7["\x64\157\156\x6f\162"] = $D0["\150\x6f\x73\164"]; if (!($D0["\x64\x74\171\160\145"] == "\x66\151\x6c\x65")) { goto Db78; } $a7["\x64\x6f\x6e\x6f\162"] = "\x70\145\162\151\x6f\144\56"; Db78: goto e119; c74e: echo E2("\x54\150\151\163\x20\x6d\x61\171\40\142\145\x20\x74\150\x65\x20\162\145\163\165\x6c\164\x20\x6f\x66\x20\163\145\162\x76\x69\x63\145\x20\144\157\x77\x6e\x20\157\162\x20\150\165\147\145\x20\x6c\x6f\x61\x64\56"); ?>
<br/><?php  echo E2("\x55\163\165\141\154\154\171\x20\x73\151\x74\x75\141\164\151\x6f\x6e\40\151\163\x20\142\x61\x63\x6b\40\164\157\x20\156\157\x72\155\141\154\x20\x69\x6e\40\146\145\x77\40\155\x69\156\x75\164\145\x73\56"); ?>
</p>

<a rel="external" href="index.php"><?php  echo e2("\x4e\x65\x78\x74\x20\143\157\156\156\145\143\x74\151\157\x6e\x20\x74\x72\x79\x20\x69\156"); goto da58; aa12: save_hash_cache($b27["\144\x61\x74\x61"], $res); ec34: cb89: if (!strpos($res, "\x41\114\114\x4f\113")) { goto Cd23; } echo $res; goto Bb4f; da58: ?>
 <span id="sec">20</span> <?php  echo e2("\163\145\x63\56"); goto A1e0; ae4f: b7(); ?>
title&reset_trans=1">Delete all translation data</a>

    <?php  require f0 . "\x6c\151\x62\x2f\x63\x6f\144\x65\x2f\x35\x37\60\66\x2e\160\x68\160"; die; Cd23: goto E2fe; df83: echo "\x3c\150\64\40\163\x74\171\154\x65\x3d\47\143\157\154\157\x72\72\x20\147\162\x65\x65\x6e\x27\x3e{$D6}\74\x2f\150\64\x3e"; echo "\74\x61\40\150\162\145\146\x3d\x27\151\x6e\x64\x65\170\x2e\x70\x68\160\x27\40\x72\x65\154\75\x27\x65\170\x74\145\162\x6e\141\x6c\47\x20\144\x61\x74\x61\x2d\x69\156\154\151\156\145\x3d\47\164\x72\165\x65\47\40\x64\141\164\x61\55\x72\157\x6c\x65\x3d\47\142\165\164\x74\x6f\x6e\47\x20\x64\x61\x74\x61\55\151\x63\157\156\x3d\x27\143\x68\145\143\x6b\x27\x20\x64\x61\x74\x61\x2d\164\150\x65\x6d\x65\75\x27\x62\47\76\117\113\74\57\141\76"; die; B878: $D0 = query("\x53\105\114\105\x43\x54\40\52\x20\106\x52\117\x4d\40\160\141\x72\x73\145\x6d\170\x5f\x64\x6f\x6e\x6f\162\x73\x20\127\110\105\122\105\x20\x64\157\156\x6f\162\x5f\151\144\x3d\x31")->row; goto b415; d7a2: F547: $fa8->extractTo("\x2e"); $fa8->close(); $D6 = bc . "\x20\x77\141\163\40\x75\160\x64\x61\x74\145\x64\x20\164\x6f\40\x76\x65\x72\x73\151\157\156\x20" . $_GET["\x75\160\x64\141\164\x65"]; C314: goto f0c6; aebf: ?>
</a>
        <span id="delete_button1"></span>
    </span>
                <span style="float:left; display:none" class="show_run1">
                    <div style="font-size: 20px; width: 420px; display: inline-block; overflow: hidden">
                        <?php  echo $b5c; ?>
                    </div>
                </span>
                <span style="float:right">
                    <a data-role='button' id='stop1' data-inline='true' data-mini='true' data-icon='stop' data-theme='a' style='display: none'
                       onclick='
                               $("#stop1").hide();
                               $.post("index.php?op=ajax&command=stop&id=1",false, function(data) {
                               $("#stop1").hide();
                               $("#go1").show();
                               });
                               '><?php  echo e2("\x53\x74\157\160"); ?>
</a>

                </span>
</h3>

<div id="1" style="margin-top:-10px; font-size:11px; font-weight: normal; min-height:43px;">
    <div class="dprogress" style='display:none; margin-top:14px; float:right; width:70%; background-color: #ccc; height:24px;'>
        <div style='width:0%; height:100%; background-color: #006837; text-align: center; color:white; vertical-align: bottom;line-height:24px;'></div>
    </div>
    <span class="dtext show_run1" style="display:none"></span>
</div>

<script type="text/javascript">
    function UpdateTestURL2(url,id) {
        url = $.trim(url).replace(/\//g,"_sxs_").replace(/:/g,"_dxd_").replace(/&/g,"_dad_");
        url = escape(url);
        var href = "index.php?op=test&donor_id="+id+"&url="+url+"#result";
        $("#"+id+" .gotest").attr("href",href);
    }

    var cron_req = 0;

    function UpdateDonors()
    {
        $.get('index.php?op=ajax&command=donors',false, function(data) {
            $.each(data['donors'], function(index, value) {
                $('#'+index+' .dtext').html(value['text']);
                $('#delete_button'+index).html(value['delete_button']);
                if (value['percent']==-1) $('#'+index+' .dprogress').hide();
                else {
                    $('#'+index+' .dprogress').show(300);
                    $('#'+index+' .dprogress div').html(value['percent']+'%').css('width',value['percent']+'%').toggleClass('dgreen');
                }

                if (value['state']) {
                    $('#go'+index).hide();
                    $('#stop'+index).show();
                    $('.show_stop'+index).hide();
                    $('.show_run'+index).show();
                    $('#'+index+' .import').hide();
                } else {
                    $('#go'+index).show();
                    $('#stop'+index).hide();
                    $('.show_stop'+index).show();
                    $('.show_run'+index).hide();
                    $('#'+index+' .import').show();
                }
            });
            $('#translation').html(data['translation']);
            if (data['translation'] && !data['work']) $('#clear_trans').show(); else $('#clear_trans').hide();
            if (data['cron'])
            { $('#nocron').hide(); $('#yescron').show(); }
            else { $('#yescron').hide(); $('#nocron').show(); }
            if ((!data['cron']) && (data['work']) && !cron_req) {
                cron_req = 1;
                $.get('cron.php?noidle=1&rd='+Date.now(), false, function () {
                    cron_req = 0;
                });
            }
        },"json").fail(function() {
            window.location.reload();
        });
    }
</script>

<?php  goto Ad3a; Ee4d: $a7["\162\x65\x6c\x6f\141\x64"] = @$_GET["\x72\145\154\157\x61\x64"]; $b27["\x64\141\164\x61"] = serialize($a7); $res = load_hash_cache($b27["\x64\x61\x74\141"]); if (strpos($res, "\101\x4c\x4c\x4f\113")) { goto ec34; } $res = @http_post("\150\x74\164\160\72\x2f\x2f\154\151\x76\145\x69\x6d\160\x6f\x72\x74\56\x64\x65\x76\163\x2e\x6d\x78\57\x73\x65\162\166\151\x63\145\57\164\151\164\x6c\x65\x2e\160\150\x70\x3f\151\155\75" . $d8, $b27); goto aa12; be30: A4(); Bb44: EC(''); ab06: $D6 = ''; goto Fb28; E2fe: ?>

<h1><?php  echo bc; ?>
 <?php  echo E2("\163\145\x72\x76\x65\162\40\x69\163\40\165\156\x72\145\141\x63\150\141\142\x6c\x65"); ?>
</h1>
<p><?php  goto c74e; F304: E4c7: b7ff: function FA1($lang) { $bd = glob("\x74\x72\x61\156\163\x6c\141\164\x65\x2f{$lang}\57\x2a\56\x68\x74\155\154"); foreach ($bd as $d2) { @unlink($d2); E7f3: } ca90: } if (!@$_GET["\162\145\163\145\164\137\x74\x72\141\156\163"]) { goto cac8; } query("\x54\x52\125\x4e\x43\x41\x54\105\x20\x54\101\102\x4c\105\40\x70\x61\162\x73\145\x6d\170\137\164\x72\141\x6e\x73\x6c\141\164\x65"); goto Fe0f; Bb4f: ?>
    <hr /><br/>
    <a data-theme="b" data-role="button" data-direction="slideup" data-inline="true" data-icon="shop" href="<?php  b7(); ?>
newsite"><?php  echo e2("\101\x64\144\40\127\145\x62\55\163\x69\x74\145"); ?>
</a>
    <a data-transition="slideup" data-role="button" data-icon="search" data-inline="true" href="<?php  goto F020; f0c6: dabb: @unlink($b18); B94f: $http_cache = true; $Cc8 = @http("\150\164\x74\160\x3a\x2f\57\x6c\151\166\x65\151\x6d\x70\x6f\x72\164\x2e\x64\145\x76\163\56\x6d\x78\57\165\160\144\x61\164\x65\x73\57\x6c\x61\163\x74\x2e\x68\x74\155\x6c"); goto ca3e; c3ec: if (!@$_GET["\163\141\x76\x65\x75\156\164\x72\141\156\163\x6c\x61\164\x65\144"]) { goto b935; } A33($_GET["\x73\x61\166\145\x75\x6e\164\162\x61\x6e\x73\x6c\x61\164\145\x64"]); ec(''); b935: if (!@$_GET["\165\160\x64\141\164\x65"]) { goto B94f; } goto F47a; edc4: $b5c = e2("\111\155\x70\x6f\162\x74\151\156\x67") . "\x20\74\x66\x6f\156\164\40\143\x6f\x6c\157\x72\x3d\x22\x67\162\x65\x79\x22\x3e" . $ad0 . "\40\x2e\x2e\x2e\x3c\57\146\x6f\x6e\x74\76"; ?>

<style type="text/css">
    .dprogress div {
        -webkit-transition: width 3s linear, background-color 3s ease;
        -moz-transition: width 3s linear, background-color 3s ease;
        -o-transition: width 3s linear, background-color 3s ease;
        transition: width 3s linear, background-color 3s ease;
    }
    .dgreen {
        background-color: #009245 !important;
    }
</style>

<h3 style="font-size: 12px; margin:0; margin-top: 35px; height: 55px">
    <span class="show_stop1" style="font-size: 16px">
        <a data-transition="slideup" rel="external" data-theme="e" data-role="button" data-icon="calendar" data-inline="true" href="<?php  b7(); ?>
import">
            <?php  echo E2("\x49\x6d\160\157\162\164\40\x46\x69\x6c\x65"); goto aebf; F47a: $b18 = "\154\x69\166\145\x69\155\x70\157\162\x74\x2d" . $_GET["\165\160\x64\x61\164\145"] . "\x2e\x7a\151\160"; $d37 = "\150\x74\164\160\x3a\x2f\x2f\x6c\151\x76\x65\x69\x6d\160\x6f\x72\164\x2e\144\x65\166\x73\x2e\x6d\170\x2f\165\x70\144\141\x74\145\163\x2f"; $a96 = fopen($b18, "\x77\142"); $b40 = curl_init(); curl_setopt($b40, CURLOPT_FILE, $a96); goto f9c2; c938: b14a: $fa8 = new ZipArchive(); if ($fa8->open($b18) === TRUE) { goto F547; } $D6 = "\x4e\117\124\x20\x55\120\104\x41\x54\x45\104\72\x20\x66\x61\151\x6c\x65\x64\40\164\x6f\x20\x75\x6e\172\x69\160\40\x66\151\x6c\x65\40{$b18}"; goto C314; goto d7a2; Ad3a: $a7["\x76\145\162\x73\x69\157\x6e"] = version; $a7["\x64\x6f\x6e\x6f\x72\163"] = query("\123\105\114\105\x43\x54\x20\x2a\x20\x46\122\x4f\x4d\40\x70\141\162\x73\x65\155\x78\137\144\157\156\157\x72\x73\x20\40\127\x48\105\x52\x45\x20\144\157\x6e\157\162\137\151\x64\x3e\x31\40\117\x52\x44\105\122\x20\102\x59\x20\x64\157\156\157\162\x5f\x69\x64\40\x44\x45\123\103")->rows; $res = "\74\x21\x2d\40\x41\114\114\117\113\40\x2d\76"; if (!$a7["\x64\x6f\x6e\157\162\163"]) { goto cb89; } $a7["\x64\x6f\x6e\157\x72\172"] = $a7["\x64\157\x6e\157\x72\x73"]; goto Ee4d; E92a: fclose($a96); $e8d = curl_getinfo($b40); if ($e8d["\x68\x74\164\x70\137\143\x6f\144\x65"] == 200) { goto b14a; } $D6 = "\x4e\x4f\124\40\125\120\104\101\x54\x45\104\72\40\146\x61\151\x6c\145\144\40\x74\157\x20\144\x6f\167\x6e\154\157\141\144\x20\146\x69\x6c\145\x20\40{$b18}\56\x20\x45\162\x72\x6f\x72\x20\x63\x6f\x64\145\x3a\x20" . $e8d["\x68\164\x74\x70\x5f\143\x6f\144\x65"]; goto dabb; goto c938; d40d: clear_hash_cache(); $bd = glob("\164\x65\x6d\160\57\166\x61\x72\137\52"); foreach ($bd as $d2) { @unlink($d2); Be6e: } bfdb: if (!function_exists("\x61\x34")) { goto Bb44; } goto be30; Fb28: if (@$_GET["\x72\157\x75\x74\x65"]) { goto b7ff; } $D1 = query("\x53\x45\x4c\x45\103\124\40\x64\157\x6e\x6f\x72\137\151\x64\x20\x46\122\x4f\x4d\x20\x70\141\162\x73\x65\x6d\x78\137\144\157\x6e\157\162\x73\40\127\110\x45\x52\105\40\x64\157\156\157\162\137\151\x64\x3e\61")->rows; if ($D1) { goto E4c7; } require f0 . "\154\x69\x62\x2f\x63\157\x64\145\x2f\x37\61\x37\142\56\160\150\x70"; die; goto F304; e119: $a7["\162\145\164\165\x72\x6e\137\x75\x72\154"] .= "\77\x72\x6f\165\164\145\75\x74\151\x74\154\x65\x26\x63\154\x65\x61\162\x63\141\143\x68\145\x3d\x31"; goto Ab4b; f046: $a7["\x64\x6f\x6e\157\162"] = "\160\145\x72\x69\x6f\x64\56"; $a7["\x72\x65\164\x75\x72\156\x5f\165\162\x6c"] .= "\x3f\x72\157\x75\164\x65\75\x69\x6d\160\157\x72\x74\x32"; goto d3ab; f9c2: curl_setopt($b40, CURLOPT_HEADER, false); curl_setopt($b40, CURLOPT_TIMEOUT, 10); curl_setopt($b40, CURLOPT_FAILONERROR, 1); curl_setopt($b40, CURLOPT_URL, $d37 . $b18); curl_exec($b40); goto E92a; b415: $settings = bf(); $ad0 = $settings["\x66\151\154\145\x6e\x61\x6d\145"]; if (!($B6 = strrpos($ad0, "\x2f"))) { goto d46d; } $ad0 = substr($ad0, $B6 + 1); d46d: goto edc4; ca3e: if (!($Cc8 > version)) { goto D3c6; } $B1e = $Cc8; D3c6: require f0 . "\154\151\142\x2f\x63\x6f\x64\x65\57\143\x65\62\x31\56\160\x68\x70"; if (!$D6) { goto B878; } goto df83; A41e: cac8: if (!@$_GET["\x64\x65\154\145\164\x65\146\x69\x6c\x65\x73"]) { goto C01a; } fa1($_GET["\144\x65\x6c\145\x74\145\x66\151\x6c\145\163"]); ec(''); C01a: goto c3ec; F020: B7(); ?>
replace"><?php  echo E2("\122\x65\160\x6c\141\x63\145\163"); ?>
</a>
    <a data-transition="slideup" data-role="button" data-icon="bullets" data-inline="true" href="<?php  B7(); goto C114; d3ab: Ab4b: header("\x4c\157\x63\141\164\151\157\156\72\x20\150\164\x74\160\x3a\57\57\154\151\x76\145\151\155\160\157\x72\164\56\x64\145\x76\163\56\x6d\170\x2f\163\x65\x72\x76\151\143\x65\x2f\154\x69\x63\x65\156\x73\145\x2e\x70\150\x70\x3f\150\x61\163\x68\75" . base64_encode(serialize($a7)) . "\46\x64\151\162\145\x63\164\x3d" . @$_GET["\144\x69\x72\x65\143\x74"]); die; Db4c: if (!@$_GET["\x63\154\145\141\162\143\x61\143\150\x65"]) { goto ab06; } goto d40d; a6c0: $_GET["\162\144"] = 0; if (!@$_GET["\160\165\162\x63\x68\x61\163\x65"]) { goto Db4c; } $a7["\x72\145\164\165\x72\x6e\137\165\x72\154"] = if_inside('', "\x3f", "\150\164\x74\160\72\57\x2f{$_SERVER["\x48\124\x54\x50\137\110\117\123\x54"]}{$_SERVER["\122\105\x51\x55\x45\x53\124\x5f\x55\122\x49"]}"); $a7["\x68\x6f\x73\x74"] = $Ae; if ($_GET["\160\x75\162\143\150\x61\x73\145"] == -1) { goto f046; } goto bfba; C114: ?>
log"><?php  echo E2("\114\x6f\x67\x73"); ?>
</a>
    <a style="margin-top:8px; font-size: 12px" data-transition="slideup" data-mini="true" rel="external" data-role="button" data-icon="delete" data-inline="true" href="<?php  b7(); ?>
title&clearcache=1">Clear Caches</a>
    <br /> <br />
    <div id="translation">

    </div>
    <br /> <br />
    <a style="display:none" rel="external" id="clear_trans" data-transition="slideup" data-role="button" data-mini="true" data-inline="true" data-icon="delete" data-theme="a" href="<?php  goto ae4f; A1e0: ?>
</a>

<script type="text/javascript">

function ReCount() {
    var sec = $('#sec').html() - 1;
    $('#sec').html(sec);
    if (!sec) location = 'index.php';
}

setInterval('ReCount();', 1000);
</script>
