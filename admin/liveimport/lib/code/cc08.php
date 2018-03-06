<?php
/*
LiveImport (c) MaxD, 2017. Write to liveimport@devs.mx for support and purchase.
*/
 goto D090; b453: ?>
">Back</a>
        <input type="submit" data-inline="true" data-icon="check" data-theme="b"
               value="Continue" onclick="$('#wait').show(500)"/>
    <?php  A654: ?>

<?php  if (!($C27 and !$Be0 and @$_GET["\151\154"] == 15)) { goto eddc; } ?>
    <a data-role="button" data-icon="plus" data-theme="d" data-inline="true"
       href="<?php  goto c64a; c881: eab6: $C27 = $B2d; C6("\x70\x72\x6f\144\165\143\164", $_GET["\141\144\144"]); f2d2: foreach ($C27 as $Ff => $Abe) { $_POST["\x70\x72\x6f\x64" . $Ff] = $Abe; F238: } goto a5ac; c33a: Ff5a: ?>
        <?php  goto Bfa8; a890: ?>
        Insert several products URLs (<a href="http://books.devs.mx/unlimited-energy" target="_blank" style="font-weight: normal; text-decoration: none">example</a>).
        <br/>Try to submit more different products.<br/><br/>
        <?php  goto C0c2; F3ec: echo "\160\162\157\144\x75\x63\164\x73"; goto E487; Fb8e: echo "\x70\x72\x6f\144\165\143\164\x73\40\x6c\151\163\x74\x73"; E487: goto Acdb; ddb6: global $F16; $F16 = true; foreach ($C27 as $Ff => $url) { goto aecf; E7fb: remove_hash_cache($url); $html = http($url); if (!find($login_check, $html)) { goto b64a; } xwarn("\x41\x75\x74\150\157\162\x69\x7a\x61\164\151\157\156\40\146\x61\151\154\x65\x64\41"); $C0b = 500; goto Cba3; e9e4: $Aa4 = "\x74\145\x6d\160\x2f" . $D0["\x68\x6f\163\164"] . "\x5f\144\x61\x74\141" . $Ff . "\56\164\x6d\x70"; $Fe3 = "\164\x65\155\160\x2f" . $D0["\150\157\163\x74"] . "\x5f\144\x61\x74\141\170" . $Ff . "\x2e\x74\155\x70"; @unlink($Aa4); @unlink($Fe3); if ($url) { goto ecbb; } goto ef15; Ec82: A2ba: Bd1a: if (!($http_code == 200)) { goto efd7; } file_put_contents($Aa4, $html); file_put_contents($Fe3, $http_ohtml); goto A306; ef15: goto B104; ecbb: $f1c = "\x63\157\156\x66\x69\147\x2f" . $D0["\150\x6f\163\x74"]; if (!file_exists("{$f1c}\57\163\x65\164\x74\x69\x6e\x67\163\56\x70\x68\160")) { goto e19b; } if (include "{$f1c}\x2f\163\145\x74\164\151\156\147\x73\56\x70\x68\160") { goto E8e5; } goto b879; Cd1f: E071: if (!(!$Ff and !$D0["\x63\x68\145\x63\153\137\165\162\x6c"])) { goto E879; } query("\125\x50\x44\101\x54\105\x20\x70\141\162\163\x65\155\170\x5f\144\157\x6e\157\x72\163\x20\123\105\124\x20\x63\x68\145\143\x6b\x5f\x75\x72\154\x3d\47{$url}\x27\x20\127\110\105\122\105\x20\x64\x6f\x6e\x6f\162\137\151\144\x3d" . $D0["\144\157\x6e\157\162\137\151\144"]); E879: f9bd: goto e9e4; fb57: if (!file_exists($d7d)) { goto Bd1a; } if (empty($E1)) { goto cde2; } echo "\x3c\142\162\x2f\76"; xlog("\x3c\x73\x70\x61\x6e\x20\x73\x74\x79\154\x65\x3d\x27\x66\x6f\156\x74\55\x73\151\x7a\145\72\x31\x38\x70\x78\x3b\40\143\x6f\154\x6f\x72\72\147\162\x65\x65\156\47\76\74\146\157\156\164\x20\143\157\x6c\157\162\75\x27\147\162\x65\171\47\76\105\x78\145\x63\x75\x74\151\x6e\147\x3c\x2f\x66\157\x6e\164\x3e\x20{$d7d}\74\x2f\163\x70\141\156\76"); cde2: goto a7b2; aecf: if (!$Be0) { goto E071; } if (!(!$Ff and !$D0["\143\x68\x65\143\x6b\137\x6c\x75\162\x6c"])) { goto bcd7; } query("\x55\120\104\x41\x54\x45\x20\160\141\x72\x73\145\155\x78\137\144\157\156\x6f\x72\163\x20\123\x45\124\40\x63\x68\x65\x63\153\137\x6c\x75\x72\x6c\75\47{$url}\x27\40\x57\110\x45\122\x45\40\x64\x6f\x6e\157\x72\137\151\x64\x3d" . $D0["\x64\x6f\156\157\x72\137\x69\144"]); bcd7: goto f9bd; goto Cd1f; b879: $Cd5 = true; E8e5: e19b: $html = http($url); $d7d = "{$f1c}\x2f\154\157\147\151\x6e\x2e\160\x68\x70"; goto fb57; a7b2: if (!(include $d7d)) { goto A2ba; } if (empty($login_check)) { goto ebc6; } if (!find($login_check, $html)) { goto Bbb8; } xlog("\x4e\157\x74\40\154\x6f\147\147\x65\x64\x20\151\156\40\144\145\x74\x65\143\x74\145\x64\40\141\x74\x20" . domain($url) . "\56\40\x41\x75\x74\x68\157\x72\x69\172\151\x6e\147\x2e\56\56"); http_post($login_url, $login_data); goto E7fb; A306: efd7: B104: goto b6ca; Cba3: $html = false; $http_proxy = false; b64a: Bbb8: ebc6: goto Ec82; b6ca: } A0ea: EC("\167\x69\172\141\162\144\x32\46\151\x64\75" . $D0["\x64\157\x6e\x6f\162\x5f\151\144"] . "\x26\x6c\x69\163\x74\x3d" . $Be0 . "\46\x69\x6c\x3d" . @$_GET["\x69\154"]); goto Ba82; Ffee: goto fb7b; B477: fclose($E74); global $F1d; $F1d = true; goto ddb6; b004: $Bdf = @replace("\133\52\135", '', $Bdf); $Bdf = trim($Bdf); $Be0 = @$_GET["\x6c\x69\163\164"]; if ($Be0) { goto e898; } $ccb = "\143\157\156\146\151\147\x2f" . $D0["\150\157\163\164"] . "\x2f\x77\x69\x7a\160\141\x67\145\163\56\x69\x6e\x66"; goto a696; D090: $_GET["\151\x6c"] = 15; if (!@$_GET["\141\x64\144\62"]) { goto Af00; } require f0 . "\154\x69\x62\57\x63\157\144\145\57\x63\145\62\61\56\x70\x68\160"; echo "\x3c\x68\x32\76\x50\154\145\141\163\145\x20\x77\141\151\x74\54\x20\x6c\x6f\141\144\151\156\147\40\x70\162\157\144\165\x63\x74\x20\160\141\x67\x65\163\x2e\x2e\56\74\57\150\x32\76"; echo "\xd\12\x20\x20\40\40\x3c\163\143\162\151\x70\164\40\x74\x79\160\145\x3d\47\164\145\170\x74\x2f\x6a\141\166\x61\x73\143\162\151\160\164\47\x3e\xd\12\40\x20\40\40\x24\x28\144\x6f\143\165\x6d\145\156\x74\x29\x2e\162\145\141\x64\x79\50\146\165\156\143\x74\151\x6f\156\x28\x29\x7b\x20\167\x69\156\x64\x6f\x77\56\154\x6f\143\x61\x74\x69\157\156\x2e\x68\x72\x65\146\x3d\x27\151\156\144\x65\170\x2e\160\x68\160\77\162\x6f\165\164\145\75\x77\x69\x7a\x61\162\x64\61\x26\151\x64\x3d" . $_GET["\151\x64"] . "\46\141\144\x64\x3d" . $_GET["\141\x64\144\x32"] . "\47\x7d\x29\73\15\xa\40\x20\x20\40\74\x2f\x73\143\x72\x69\160\x74\x3e"; goto Ef7c; C0c2: Bfa8: ?>
    <?php  goto dfa9; a5fa: ?>
        <?php  goto c27b; Cbb7: ?>
">
        </div>
    <?php  E3c4: $Ff++; goto F946; aea7: goto fd37; C2db: if (!$D1) { goto f2d2; } $D1["\x6f\165\x72\154"] = url_path_encode($D1["\157\165\162\154"]); $C27 = array_merge(array($D1["\157\x75\x72\x6c"]), $C27); $B2d = array(); foreach ($C27 as $Ff => $Abe) { if (!($Ff > 9)) { goto dd4d; } goto eab6; dd4d: if (!($Abe == $D1["\x6f\x75\162\154"] and $Ff)) { goto A7f9; } goto C460; A7f9: $B2d[] = $Abe; C460: } goto c881; Ef7c: require f0 . "\154\151\142\x2f\143\157\144\145\x2f\x35\x37\x30\x36\x2e\160\150\x70"; die; Af00: $D0 = query("\x53\x45\x4c\105\x43\x54\40\52\x20\x46\122\x4f\x4d\40\160\x61\162\163\x65\155\170\x5f\144\x6f\156\157\x72\x73\x20\127\110\105\122\105\40\x64\157\x6e\157\x72\x5f\x69\x64\x3d" . $_GET["\151\144"])->row; $Bdf = @file_get_contents($D0["\150\157\x73\164"] . "\56\164\170\x74"); goto b004; f162: ?>
    <a target='_blank' href='https://www.youtube.com/watch?v=W_yPVZsj62E' class="video">
        <img src="lib/static/video.png" /> <span>Video:</span> Scheme Wizard Tutorial
    </a>
<?php  goto cf6b; B961: ?>
    <a target='_blank' href='https://www.youtube.com/watch?v=8GAXaDsQHzw' class="video">
        <img src="lib/static/video.png" /> <span>Video:</span> Products Lists Tutorial
    </a>
<?php  cf6b: goto Ee8b; Ba82: ac9f: $C27 = array(); if (!file_exists($ccb)) { goto Cad1; } $C27 = file($ccb, FILE_IGNORE_NEW_LINES); Cad1: goto D9b3; A554: ?>
        <?php  if (!$C27) { goto a890; } ?>
                Add more product URLs to improve the accuracy.
                If there are wrongly processed products - add them to the list.

                <?php  if (!($C27 and !$Be0 and @$_GET["\x69\x6c"] == 15)) { goto Ff5a; } ?>
                    <br/><br/>
                Press "Product Lists" to configure mass processing.
                <?php  goto c33a; c64a: echo $_SERVER["\x52\x45\x51\x55\105\x53\x54\137\x55\122\x49"]; ?>
&list=1">Product Lists</a>
    <?php  eddc: ?>

    <p id="wait" style="display:none; color:green">
        Please wait, loading <?php  if ($Be0) { goto Fb8e; } goto F3ec; c27b: if (!$C27) { goto Eb4f; } ?>
            Add more URLs to improve the accuracy.
            If there are wrongly processed pages - add them to the list.
            <?php  goto e906; Eb4f: ?>
            Insert products list URL (<a href="http://books.devs.mx/internet" target="_blank" style="font-weight: normal; text-decoration: none">example</a>).
            <?php  goto B527; a78e: echo $D0["\144\x6f\x6e\157\x72\x5f\151\144"] . "\46\x69\154\75" . @$_GET["\x69\154"]; ?>
">Back</a>
        <input type="submit" data-inline="true" data-icon="check" data-theme="b"
               value="Continue" onclick="$('#wait').show(500)"/>
    <?php  bc6c: ?>

</form>

    <style type="text/css">
        .video {
            display: block;
            font-size:18px;
            background: #DDD;
            padding: 5px;
            text-decoration: none;
            text-shadow: none;
            font-weight: normal !important;
        }
        .video:hover {
            background: #EDEF7D;
        }
        .video img {
            vertical-align: middle;
            margin-right: 7px;
        }
        .video span {
            color: grey !important;
        }
    </style>
<br/><br/>
<?php  if ($Be0) { goto B961; } goto f162; e6e8: echo "\x50\x72\157\x64\165\x63\164\x20"; goto cfd9; e835: echo "\114\x69\163\x74\40"; cfd9: goto fc28; Acdb: ?>
 pages...
    </p>

    <?php  $Ff = 0; F946: if (!($Ff < 10)) { goto aea7; } ?>
        <div data-role="fieldcontain" <?php  goto bc92; De34: $C27 = array(); if (!file_exists($ccb)) { goto B464; } $C27 = file($ccb, FILE_IGNORE_NEW_LINES); B464: $D1 = query("\123\105\x4c\x45\103\x54\40\52\40\x46\122\x4f\115\40\x70\x61\x72\x73\145\155\x78\x5f\145\156\164\x69\164\x69\145\163\40\x57\110\x45\x52\x45\x20\x70\154\x61\164\146\157\x72\x6d\137\151\x64\75" . $_GET["\141\144\x64"])->row; goto C2db; a696: goto B1bb; e898: $ccb = "\x63\x6f\156\146\151\147\x2f" . $D0["\x68\157\x73\x74"] . "\57\154\x69\x73\164\x5f\167\151\172\x70\141\x67\x65\x73\x2e\151\x6e\146"; B1bb: if (!($_SERVER["\122\105\x51\125\x45\x53\x54\x5f\x4d\x45\x54\110\117\x44"] == "\120\117\123\x54" or @$_GET["\x61\144\x64"])) { goto ac9f; } goto B803; Fd21: cd5e: if (ini_get("\x73\x61\146\x65\137\x6d\x6f\144\145")) { goto A20f; } @set_time_limit(300); A20f: if (!@$_GET["\141\x64\144"]) { goto Cca0; } goto De34; bc92: if (!(!$C27 and ($Ff > 2 or $Be0 and $Ff))) { goto dd5d; } echo "\163\164\x79\x6c\145\75\42\x64\x69\x73\x70\154\x61\x79\72\x6e\x6f\156\145\x22"; dd5d: ?>
 >
            <label><?php  if ($Be0) { goto e835; } goto e6e8; d813: if (!($Ff < 10)) { goto B477; } $C27[$Ff] = @$_POST["\160\162\x6f\144" . $Ff]; fwrite($E74, $C27[$Ff] . "\xa"); E8be: $Ff++; goto Ffee; cc0b: if (!$C27) { goto A654; } ?>
        <br />
        <a rel="external" data-role="button" data-icon="arrow-l" data-inline="true" href="<?php  b7(); ?>
script&id=<?php  echo $D0["\144\x6f\x6e\157\162\x5f\151\x64"] . "\46\151\x6c\75" . @$_GET["\151\x6c"]; goto b453; D9b3: require f0 . "\154\151\x62\57\143\157\144\145\x2f\x63\x65\x32\61\x2e\x70\x68\160"; ?>

<h2>Scheme Wizard <font color="grey">for <?php  echo $D0["\150\x6f\163\164"]; ?>
</font></h2>

    <p><?php  if ($Be0) { goto a5fa; } goto A554; B527: e906: ?>
        <?php  dfa9: ?>
    </p>

<form rel="external" data-ajax="false" action="<?php  b7(); goto abd8; abd8: ?>
wizard1&id=<?php  echo $D0["\x64\157\156\x6f\162\x5f\151\x64"]; ?>
&list=<?php  echo $Be0 . "\46\151\x6c\x3d" . @$_GET["\x69\154"]; ?>
" method="post">

    <?php  goto cc0b; fc28: echo $Ff + 1; ?>
:

            </label><input data-inline="true" data-mini="true" type="text" name="prod<?php  echo $Ff; ?>
" value="<?php  echo @$C27[$Ff]; goto Cbb7; fd37: ?>

    <?php  if ($C27) { goto bc6c; } ?>
        <br />
        <a rel="external" data-role="button" data-icon="arrow-l" data-inline="true" href="<?php  B7(); ?>
script&id=<?php  goto a78e; a5ac: fd64: Cca0: $E74 = fopen($ccb, "\167"); $Ff = 0; fb7b: goto d813; B803: if (file_exists("\x63\157\156\x66\151\x67\57" . $D0["\150\x6f\163\x74"])) { goto Bd62; } mkdir("\143\x6f\x6e\146\151\147\57" . $D0["\x68\x6f\x73\164"]); Bd62: if (!$Be0) { goto cd5e; } $D0["\x68\157\x73\164"] = $D0["\150\157\x73\x74"] . "\114"; goto Fd21; Ee8b: ?>
