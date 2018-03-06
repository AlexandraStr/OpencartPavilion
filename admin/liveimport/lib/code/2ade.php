<?php
/*
LiveImport (c) MaxD, 2017. Write to liveimport@devs.mx for support and purchase.
*/
 goto efc; A16: ?>
        </ul>
        <br/>
        <div style="font-size:12px; margin-top:10px; margin-left: -5px">
            <a style="cursor:pointer" onclick="$('#operations').show(300); $('[type=checkbox]').prop('checked', true).checkboxradio('refresh')">Select All</a>
            <?php  if (!($Cf0 and $cdd)) { goto Ded; } ?>
                <a style="cursor:pointer"
                   onclick="$('#operations').show(300); $('[type=checkbox]').prop('checked', false).checkboxradio('refresh'); $('.ia').prop('checked', true).checkboxradio('refresh')">
                    / Active</a>
                <a style="cursor:pointer"
                   onclick="$('#operations').show(300); $('[type=checkbox]').prop('checked', false).checkboxradio('refresh'); $('.ip').prop('checked', true).checkboxradio('refresh')">/
                    Inactive</a>
            <?php  Ded: ?>
            <div id="operations" style="display: none; font-size:15px; margin-left:0px; margin-top:7px; zoom: 0.75; -moz-transform: scale(0.75)">
                Selected tasks
                <input  name="o_run" data-mini="true" type="submit" data-direction="reverse" data-inline="true" data-icon="play" data-theme="b" value="Start"/>
                <input name="o_on" data-mini="true" type="submit" data-direction="reverse" data-inline="true" data-icon="power" data-theme="e" value="On"/>
                <input name="o_off" data-mini="true" type="submit" data-direction="reverse" data-inline="true" data-icon="power" value="Off"/>
                <input name="o_del" onclick="return confirm('Delete selected tasks?')" data-mini="true" type="submit" data-direction="reverse" data-inline="true" data-icon="delete" data-theme="a" value="Delete"/>
                <input name="o_del_goods" onclick="return confirm('Delete products from selected tasks?')" data-mini="true" type="submit" data-direction="reverse" data-inline="true" data-icon="grid" data-theme="a" value="Delete products"/>
                <input name="o_formula" onclick="$(this).val(prompt('Enter price formula for selected tasks', 'X')); return $(this).val().length>0;" data-mini="true" type="submit" data-direction="reverse" data-inline="true" data-icon="edit" data-theme="c" value="Price formula..."/>
            </div>
        </div>
    </form>

    <br/><br/>

</div>

<script>
    $('[type=checkbox]').on('click', function() {$('#operations').show(300)});

</script>

<?php  goto ecc; efc: $b9d = @$_GET["\x69\x6c"]; if (!@$_GET["\144\x65\154\145\164\145\x5f\x65\x6e\x74\151\x74\x69\145\x73"]) { goto b3d; } if (!(ini_get("\x6d\x61\x78\x5f\x65\x78\145\x63\165\164\x69\x6f\x6e\137\164\x69\x6d\145") < 600)) { goto Ecf; } if (ini_get("\163\x61\146\145\x5f\155\157\144\x65")) { goto E17; } set_time_limit(600); goto b90; e06: set_time_limit(600); Fa6: ead: foreach ($_POST as $id => $Ca9) { goto c25; c25: if (is_numeric($id)) { goto a92; } goto a8f; a92: if (!empty($_POST["\157\x5f\x72\165\156"])) { goto E15; } if (!empty($_POST["\x6f\x5f\x6f\156"])) { goto d8f; } goto f4e; d2d: E15: ef($_GET["\151\144"], $id); $ins = query("\x53\105\x4c\x45\103\124\x20\52\40\x46\122\117\x4d\40\160\141\x72\163\x65\x6d\x78\x5f\151\156\x73\x20\127\110\105\122\x45\40\x69\x6e\x73\x5f\151\144\x3d" . $id)->row; xlog("\x4e\117\124\x49\103\105\x3a\x20\124\141\163\x6b\40\74\x62\x3e" . $ins["\164\x69\164\154\x65"] . "\74\57\142\76\40\x73\164\x61\162\164\x65\144\x2e"); goto B6b; goto E4c; f25: goto B6b; e12: query("\x44\x45\114\105\x54\x45\x20\106\x52\x4f\x4d\x20\160\x61\162\163\145\155\170\x5f\151\156\163\x20\x57\110\105\x52\x45\x20\x69\x6e\163\x5f\151\144\75" . $id); goto B6b; F00: goto ab4; f4e: if (!empty($_POST["\157\137\157\146\x66"])) { goto a3f; } if (!empty($_POST["\157\x5f\x64\145\154"])) { goto e12; } if (!empty($_POST["\157\137\144\145\154\137\x67\x6f\157\144\x73"])) { goto F00; } if (!empty($_POST["\x6f\137\x66\157\x72\x6d\165\x6c\x61"])) { goto bb2; } goto B6b; goto d2d; E4c: d8f: query("\125\x50\x44\101\x54\x45\40\x70\141\162\x73\145\155\170\137\151\x6e\163\x20\123\x45\x54\x20\x73\164\x61\164\x75\163\x3d\x27\x31\47\x20\127\110\105\122\105\40\151\156\x73\137\x69\x64\x3d" . $id); goto B6b; a3f: query("\125\120\x44\101\x54\105\x20\160\x61\162\x73\145\155\170\x5f\x69\x6e\163\x20\x53\x45\x54\40\163\x74\141\164\165\x73\x3d\47\x30\47\40\x57\x48\x45\122\x45\x20\151\156\x73\137\151\144\x3d" . $id); goto f25; Aa7: a8f: goto Df8; ab4: A5($_GET["\x69\144"], $id); goto B6b; bb2: query("\125\120\x44\101\x54\x45\x20\160\x61\x72\163\145\x6d\170\x5f\151\x6e\163\x20\123\x45\x54\40\x70\x72\x69\143\x65\75\x27" . escape($_POST["\157\x5f\x66\157\162\x6d\165\154\141"]) . "\47\x20\x57\110\105\122\x45\x20\x69\156\x73\137\151\144\75" . $id); B6b: goto Aa7; Df8: } be7: goto B86; b90: E17: Ecf: A5($_GET["\151\x64"], $_GET["\x64\145\154\145\164\x65\x5f\145\156\x74\151\x74\151\145\x73"]); EC("\x74\x61\x73\x6b\163\x26\151\x64\75" . $_GET["\x69\x64"] . "\x26\x69\154\x3d" . $b9d); b3d: goto Cd3; A48: echo $D0["\144\157\156\x6f\x72\x5f\151\144"]; ?>
&il=<?php  echo $b9d; ?>
">Category Tree</a>


    <h2>Tasks <font color="grey">for <?php  echo $D0["\150\x6f\x73\x74"]; goto c50; D9b: echo $b9d; ?>
" method="post">
        <br/>
        <ul data-role="listview">
            <?php  $A15 = query("\x53\105\114\x45\x43\x54\40\52\54\x20\x28\x53\x45\114\x45\103\124\40\103\117\x55\116\124\50\x2a\x29\40\x46\122\x4f\x4d\40\160\141\162\x73\x65\155\x78\137\145\x6e\x74\x69\164\151\145\163\x20\x57\110\x45\122\x45\40\151\x6e\163\x5f\x69\144\75\x69\x2e\151\156\x73\x5f\151\x64\x29\40\x61\163\40\156\x20\106\x52\x4f\x4d\40\160\x61\x72\x73\145\155\170\137\x69\x6e\163\x20\151\x20\127\110\x45\122\105\40\144\157\x6e\157\x72\x5f\151\x64\75" . $D0["\144\x6f\156\x6f\x72\x5f\x69\x64"] . "\40\117\x52\x44\105\122\x20\102\131\40\x74\x69\x74\154\x65")->rows; foreach ($A15 as $ins) { goto B43; B43: if (!($ins["\x74\x69\x74\x6c\x65"] == "\x44\x65\146\x61\165\154\x74")) { goto f50; } goto d50; f50: if ($ins["\163\x74\x61\164\165\163"]) { goto deb; } $cdd++; goto D5e; ffd: ?>
" name="<?php  echo $ins["\x69\156\x73\137\x69\x64"]; ?>
"/><a href="index.php?route=ins&id=<?php  echo $ins["\x69\x6e\163\x5f\151\x64"]; ?>
&il=<?php  goto f95; D5e: goto E39; deb: $Cf0++; E39: ?>
                <li<?php  goto Fe3; Fe3: if (!$ins["\163\164\141\164\165\x73"]) { goto df7; } echo "\x20\x64\x61\164\x61\x2d\x74\x68\145\155\x65\x3d\42\145\x22"; df7: ?>
><input type="checkbox" class="<?php  if ($ins["\x73\x74\141\x74\x75\163"]) { goto a81; } goto Faa; d7f: bec: ?>
                    <?php  if (!$ins["\x6e"]) { goto A79; } ?>
<span class="ui-li-count"><?php  echo $ins["\x6e"]; goto eac; Faa: echo "\x69\160"; goto C69; a81: echo "\151\141"; C69: goto ffd; eac: ?>
 products</span><?php  A79: ?>
</li>
            <?php  d50: goto E84; f95: echo $b9d; ?>
"><?php  echo $ins["\x74\x69\x74\154\145"]; ?>
</a>
                    <?php  if (!@$_GET["\151\154"]) { goto bec; } goto F2c; F2c: ?>
                        <a data-icon='play' data-theme='b'
                           href="<?php  echo b7() . "\x74\141\x73\153\x73\x26\x69\144\75" . $_GET["\x69\x64"] . "\x26\x72\x75\x6e\x3d" . $ins["\x69\x6e\x73\x5f\151\144"]; ?>
&il=<?php  echo $b9d; ?>
">Start Task</a>
                    <?php  goto d7f; E84: } Fee: goto A16; ecc: if (!$b9d) { goto E16; } ?>
    <style type="text/css">
        .video {
            display: block;
            font-size: 18px;
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
    <a target='_blank' href='https://www.youtube.com/watch?v=ZikSxm1p6mo' class="video">
        <img src="lib/static/video.png"/> <span>Video:</span> Automated Processing Setup
    </a>
<?php  E16: goto Fa5; Af8: ?>
&il=<?php  echo $b9d; ?>
">Add Task</a>
    <a rel="external" data-role="button" data-icon="grid" data-inline="true"
       href="<?php  b7(); ?>
tree&id=<?php  goto A48; B86: B2a: $Cf0 = 0; $cdd = 0; require f0 . "\154\x69\x62\x2f\143\157\x64\x65\x2f\x63\145\x32\61\56\160\x68\160"; ?>

    <style type="text/css">
        [type=checkbox] {
            margin-left: 2px !important;
            margin-top: 6px !important;
            width: 30px !important;
            height: 30px !important;
        }

        .ui-dialog-contain {
            width: 700px !important;
            max-width: 700px !important;
        }

        .ui-listview .ui-btn {
            font-size: 14px !important;
            padding-left: 40px;
        }

        .ui-li .ui-btn-text a.ui-link-inherit {
            text-overflow: clip !important;
            overflow: visible !important;
            white-space: normal !important;
        }

        .ui-li-count {
            margin-right: 60px;
        }

        .ui-btn-icon-right {
            padding-left: 40px !important;
        }
    </style>

<div data-ajax="false">

    <a rel="external" data-role="button" data-icon="arrow-l" data-inline="true" href="<?php  goto c78; c78: B7(); ?>
">Back</a>
    <a rel="external" data-role="button" data-theme="b" data-icon="plus" data-inline="true"
       href="<?php  B7(); ?>
ins&donor_id=<?php  echo $D0["\144\x6f\156\x6f\x72\x5f\x69\144"]; goto Af8; B32: B09: $D0 = query("\123\105\x4c\x45\103\124\40\52\40\x46\122\x4f\x4d\x20\160\x61\162\163\145\x6d\170\137\144\157\156\157\162\x73\40\x57\110\x45\122\x45\40\x64\x6f\156\157\x72\x5f\151\144\x3d" . $_GET["\x69\144"])->row; if (empty($_POST)) { goto B2a; } if (!(ini_get("\x6d\x61\x78\x5f\x65\x78\145\x63\x75\164\151\157\156\137\x74\151\155\x65") < 600)) { goto ead; } if (ini_get("\x73\x61\x66\145\137\x6d\157\144\x65")) { goto Fa6; } goto e06; c50: ?>
</font></h2>
    <form rel="external" data-ajax="false"
          action="<?php  B7(); ?>
tasks&id=<?php  echo $D0["\x64\x6f\156\157\x72\137\x69\144"]; ?>
&il=<?php  goto D9b; Cd3: if (!@$_GET["\162\x75\156"]) { goto B09; } EF($_GET["\151\x64"], $_GET["\162\165\x6e"]); $ins = query("\123\x45\x4c\105\103\x54\40\x2a\40\x46\122\117\x4d\x20\160\x61\162\163\145\x6d\x78\137\151\x6e\163\x20\x57\x48\105\122\x45\x20\x69\156\163\x5f\x69\144\x3d" . $_GET["\162\165\x6e"])->row; xlog("\x4e\117\x54\x49\x43\x45\72\x20\x54\x61\163\153\x20\74\x62\x3e" . $ins["\164\x69\x74\x6c\145"] . "\x3c\x2f\142\76\40\x73\x74\x61\x72\164\145\144\56"); EC("\164\141\163\153\163\x26\151\x64\75" . $_GET["\151\x64"] . "\x26\151\154\x3d" . $b9d); goto B32; Fa5: ?>
