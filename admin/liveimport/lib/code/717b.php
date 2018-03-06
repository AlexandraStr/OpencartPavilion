<?php
/*
LiveImport (c) MaxD, 2017. Write to liveimport@devs.mx for support and purchase.
*/
 goto f2fc; f075: $settings["\x66\x69\x6c\145\x5f\151\x64"] = $ad0; E7($settings); ec("\x69\155\160\x6f\x72\x74\x32\x26\x75\x70\x64\141\164\x65\75\x31\46\x69\x64\75" . $donor_id); C801: require f0 . "\154\151\142\57\143\x6f\144\x65\57\143\x65\62\61\x2e\x70\150\x70"; goto e14c; f642: ?>
</h1>


<br/>
<form rel="external" data-ajax="false" action="<?php  B7(); ?>
import&id=<?php  echo $donor_id; ?>
" method="post">
<div style="padding-left:132px; color: #AAA; font-size: 14px">
    <?php  goto C526; B73e: if (!@$settings["\145\162\x72\x6f\162"]) { goto D128; } ?>
<div id="error" style="background-color: #ffd5c2; padding: 5px; color: red">
    <?php  echo $settings["\145\162\162\157\x72"]; ?>
</div>
<?php  D128: goto debe; E688: ?>
</a>
    <div style="width:527px; display: inline-block">
        <input oninput="FilenameChange()" onchange="FilenameChange()" data-inline="true" data-mini="true" type="text" name="filename" id="filename" value="<?php  echo @$settings["\146\x69\154\x65\156\x61\155\x65"]; ?>
" />
    </div>
<br/>

<div id="mxprogress" style="display:none; color: green"><br/><?php  echo E2("\120\154\x65\x61\163\x65\40\x77\x61\x69\x74\x2c\x20\x75\160\154\x6f\141\144\151\x6e\147"); ?>
...<br/><br/>

<div id="progressbar" className="progressbar" style="background-color: #ccc; height:24px; width:100%">
    <div id="pdone" style="background-color: green; height:24px; width:0"></div>
</div>

</div>

<div style="display:none">
    <input type="file" id="filepicker" onchange="mxUpload();"/>
</div>

<?php  goto B73e; c278: $ad0 = $cb5; if (!($B6 = strrpos($ad0, "\x2f"))) { goto ea07; } $ad0 = substr($ad0, $B6 + 1); ea07: $settings["\x73\150\x6f\162\x74\x5f\x66\151\154\145\156\x61\x6d\x65"] = $ad0; goto f075; a96b: echo e2("\103\x61\x6e\x63\145\154"); ?>
</a>
<?php  bcf6: ?>
<span id="continue" <?php  if (!(@(!$settings["\x66\x69\154\145\x6e\141\155\x65"]) or @$settings["\145\x72\x72\157\x72"])) { goto ea39; } goto e7d6; f2fc: ini_set("\144\151\x73\160\154\x61\x79\x5f\x73\164\141\x72\x74\165\160\137\145\162\162\157\162\163", 1); ini_set("\x64\x69\x73\x70\x6c\x61\171\137\x65\x72\162\157\162\x73", 1); error_reporting(-1); $donor_id = @$_GET["\151\x64"]; if ($donor_id) { goto dc85; } goto Bb5d; c6b4: f87c: @($settings = BF()); if (!($_SERVER["\122\x45\121\x55\105\x53\124\137\x4d\105\x54\x48\117\x44"] == "\120\x4f\x53\x54")) { goto C801; } $cb5 = $_POST["\146\151\x6c\145\x6e\x61\155\x65"]; $settings["\146\x69\154\145\156\141\155\145"] = $cb5; goto c278; df3e: echo e2("\x53\165\160\x70\157\162\164\x65\144\x20\x66\x69\154\x65\40\x74\x79\160\145\163"); ?>
: <img style="margin-bottom: -2px; margin-left:10px; margin-top: 7px; margin-right: 13px" src="lib/static/formats.png" />
    </div>

</form>
<br/>
<div id="wait" style="display:none; background-color: #d3d9cf; padding: 5px; color: green">
    <?php  echo e2("\x50\154\145\x61\x73\145\40\167\x61\x69\x74\x2c\x20\141\156\141\x6c\171\172\151\x6e\147"); goto fb24; Bf56: if (!$D0["\x74\x6f\164\141\154\137\145\156\x74\151\x74\x69\x65\x73"]) { goto D5c9; } ?>
    <a onclick="if (confirm('Do you want to delete <?php  echo $D0["\x74\157\164\x61\154\137\145\x6e\x74\151\164\x69\x65\163"]; ?>
 imported products?'))
        window.location = 'index.php?op=ajax&command=delete_products&amp;id=<?php  echo $donor_id; goto Bcd7; Bcd7: ?>
'" style="font-size:11px" class="ui-link ui-btn ui-btn-a ui-icon-delete ui-btn-icon-left ui-btn-inline ui-shadow ui-corner-all" role="button">
        Delete <?php  echo $D0["\164\x6f\x74\141\154\137\x65\x6e\x74\151\164\x69\x65\163"]; ?>
 imported products</a>
    <?php  D5c9: ?>
    <div style="float:right; font-size: 14px; margin-top: -5px; color:#AAA">
        <?php  goto df3e; e7d6: echo "\x73\164\x79\154\145\75\42\x64\151\163\x70\154\141\171\72\x20\156\x6f\x6e\145\x22"; ea39: ?>
><input type="submit" data-inline="true" data-icon="check" data-theme="b" value="<?php  echo e2("\103\157\156\x74\x69\156\x75\145"); ?>
" onclick="$('.ui-btn').addClass('ui-disabled'); $('#wait').show(300);"/></span>

    <?php  goto Bf56; Bb5d: $donor_id = 1; dc85: E6($donor_id); if (!($D0["\144\164\x79\160\145"] != "\146\151\154\145")) { goto f87c; } die("\x54\150\151\163\40\144\x6f\156\x6f\x72\40\x69\x73\40\156\157\x74\40\111\x6d\160\157\162\164\x2d\x74\x79\x70\145"); goto c6b4; f490: B7(); ?>
newsite"><?php  echo e2("\x49\x6d\x70\157\162\164\x20\146\x72\x6f\x6d\x20\x57\x65\x62\55\x73\151\x74\145"); ?>
</a>
    <?php  c239: goto f642; C526: echo e2("\x46\151\154\x65\x20\160\x61\164\150"); ?>
 (<?php  echo E2("\x73\145\x72\166\x65\x72\x20\160\141\164\150\40\157\x72\x20\x55\x52\x4c"); ?>
):
</div>

<a style="font-size:13px" id="ubutton" data-icon="arrow-u" data-theme="e" data-mini="true" data-inline="true" data-role="button" onclick="document.getElementById('filepicker').click();">
    <?php  echo E2("\x55\x70\x6c\x6f\x61\x64\x20\146\151\154\145"); goto E688; debe: ?>

<br/>

<?php  if (!@$_GET["\x72\157\x75\x74\145"]) { goto bcf6; } ?>
    <a data-role="button" data-direction="reverse" data-inline="true" data-icon="arrow-l" href="<?php  B7(); ?>
title"><?php  goto a96b; e14c: ?>

<script src="lib/static/mxUpload.js"></script>

<script type="text/javascript">
    function FilenameChange() {
     $('#error').hide(250);
     if ($('#filename').val()) $('#continue').show(250);
        else $('#continue').hide(250);
    }
</script>
<br/>
<h1><?php  echo E2("\111\x6d\x70\x6f\x72\x74\x20\x50\x72\157\144\x75\x63\x74\163\40\146\x72\157\155\x20\106\x69\154\145"); ?>

    <?php  if (!@(!$_GET["\x72\x6f\x75\x74\x65"])) { goto c239; } ?>
        &nbsp;<span style="color: #AAA; font-weight: normal">or</span>
        <a style="font-size:15px" data-role="button" data-direction="slideup" data-inline="true" data-icon="shop" href="<?php  goto f490; fb24: ?>
...
</div>
