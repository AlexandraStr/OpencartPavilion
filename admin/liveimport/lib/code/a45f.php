<?php
/*
LiveImport (c) MaxD, 2017. Write to liveimport@devs.mx for support and purchase.
*/
 goto Fc1f; a86e: ?>
        <a style="float:right; font-size:12px" target="_blank" onclick="SaveGo()" href="<?php  echo b7(); ?>
script&id=<?php  echo $_GET["\151\x64"]; ?>
&export=1">Export scripts</a>
    </div>
    <?php  goto e597; f68e: goto cb00; d5f2: query("\x55\x50\x44\101\124\105\x20\160\141\x72\x73\145\x6d\170\x5f\144\157\x6e\157\162\x73\x20\123\x45\x54\x20\x61\144\166\141\x6e\x63\x65\144\x3d\47" . $_GET["\x61\144\x76\141\156\143\145\x64"] . "\x27\40\127\110\x45\x52\x45\40\x64\x6f\x6e\x6f\162\137\x69\144\75" . $_GET["\x69\x64"]); $f82 = $_GET["\x61\144\166\x61\x6e\x63\x65\x64"]; cb00: goto C100; Fc1f: $D0 = query("\123\105\x4c\105\103\x54\x20\52\40\x46\122\117\115\x20\160\141\x72\x73\145\x6d\170\137\144\x6f\156\157\162\163\x20\127\110\x45\122\x45\x20\144\x6f\156\157\x72\x5f\x69\144\75" . $_GET["\151\144"])->row; if (!@$_GET["\145\170\160\x6f\162\x74"]) { goto B87c; } $C5b = BaB($D0["\150\157\163\164"]); $C5b = htmlentities($C5b); require f0 . "\154\151\x62\x2f\143\157\x64\x65\x2f\143\145\x32\x31\56\x70\150\160"; goto af1e; C100: if ($f82) { goto be8b; } $B67 = "\x75\x73\145\x72"; be8b: require f0 . "\154\x69\142\x2f\143\157\144\145\x2f\x63\x65\62\61\56\x70\x68\x70"; require f0 . "\154\x69\x62\x2f\143\157\x64\x65\57\x37\x37\60\65\x2e\x70\150\160"; goto Be3d; da3e: A69b: goto Da3d; Bcc7: ?>
")'><?php  if ($f82) { goto C258; } echo "\120\162\157\147\162\x61\x6d\x6d\145\162"; goto c7ff; C258: goto f20c; af1e: ?>
    <h1>Scripts <font color="grey">for <?php  echo $D0["\x68\157\163\164"]; ?>
</font></h1>
    <textarea readonly onclick="$(this).select()"><?php  echo $C5b; ?>
</textarea>
    <?php  goto d79f; Ed0d: B7(); ?>
ins&donor_id=<?php  echo $D0["\x64\x6f\156\x6f\x72\x5f\x69\144"]; ?>
&id=-1&back=script')"
   class="ui-btn ui-icon-gear ui-btn-icon-notext ui-corner-all ui-btn-inline ui-shadow"
   title="Task Settings">Task Settings</a>
<select data-mini="true" data-inline="true" onchange="
    if ($(this).val()=='product') {
      $('#test_product').show();
      $('#test_list').hide();
    } else {
      $('#test_product').hide();
      $('#test_list').show();
    }
    ">
    <option value="product">Test product URL</option>
    <option value="list">Test list URL</option>
</select>
<span id="test_product" style="margin-left: -5px">
    <div style="display:inline-block; width:385px">
        <input class="check_url" type="text" data-mini="true" data-inline="true" placeholder="Insert product URL here" oninput="UpdateTestURL('test_product')" onclick="$(this).select();" value="<?php  echo $D0["\143\x68\x65\143\153\137\x75\162\x6c"]; goto A906; f2ce: goto Afc0; E550: ?>
    <div style="margin-bottom: -6px">
    <?php  foreach ($C00 as $F19) { goto f467; c967: echo $F19; ?>
.focus();
            save_editors('vars');
        "><?php  echo $F19 . "\x2e\160\150\x70"; ?>
</div>
    <?php  A1fc: goto ba7e; f467: $F19 = strtolower($F19); ?>
        <div class="script_tab" id="tab<?php  echo $F19; ?>
" onclick="
        $('.script_tab').removeClass('script_active');
        $(this).addClass('script_active');
        $('.editor').hide();
            editor = editor<?php  echo $F19; goto a5aa; a5aa: ?>
;
            editor_id = '#<?php  echo $F19; ?>
';
        $('#<?php  echo $F19; ?>
').show();
            editor<?php  goto c967; ba7e: } cd0d: goto a86e; f20c: echo "\x55\163\x65\x72"; c7ff: ?>
 Mode</a>

<script type="text/javascript">

    var url_changed = false;

    function SetSelector(selector) {
        if (selector)
            editor.insert("'"+selector+"'");
        editor.focus();
    }

    function SaveGo(url) {
        save_editors();
        if (url) location = url;
    }

    function UpdateTestURL(sel) {
        url_changed = true;
        var go = $("#"+sel+" .test_check").attr('href');
        var url = $.trim( $("#"+sel+" input").val() ).replace(/\//g,"_sxs_").replace(/:/g,"_dxd_").replace(/&/g,"_dad_");
        //url = escape(url);
        if (url) $("#"+sel+" .test_check").removeClass("ui-disabled");
        else $("#"+sel+" .test_check").addClass("ui-disabled");
        if (sel=='test_list') url = "*" + url;
        go = go.substr(0,go.indexOf("&url=")+5) + url + "#result";
        $("#"+sel+" .test_check").attr('href',go);
    }

    $("html, body").animate({ scrollTop: $(document).height()+50000 }, 1000);

    $(document).ready(function(){
        <?php  if (!$f82) { goto A69b; } ?>
            $('#tabuser').addClass('script_active');
            $('#user').show();
            editor = editoruser;
        <?php  goto da3e; ca26: echo c7($D0["\143\150\x65\143\153\137\165\x72\154"]); ?>
" onclick="SaveGo('')">Check</a>
</span>
<span id="test_list" style="display:none; margin-left: -5px">
    <div style="display:inline-block; width:413px">
        <input class="check_url" type="text" data-mini="true" data-inline="true" placeholder="Insert list URL here" oninput="UpdateTestURL('test_list')" onclick="$(this).select();" value="<?php  echo $D0["\x63\150\x65\x63\x6b\x5f\154\x75\x72\x6c"]; ?>
">
    </div>
    <a class="test_check <?php  if ($D0["\x63\150\145\x63\x6b\x5f\154\165\x72\154"]) { goto C8fc; } goto b03a; A160: B7(); ?>
script&advanced=<?php  echo !$f82; ?>
&id=<?php  echo $D0["\144\157\x6e\x6f\x72\x5f\151\144"]; goto Bcc7; ae34: $url = $_POST["\x75\162\x6c"]; if (!@$_POST["\x70\154\151\x73\x74"]) { goto d718; } $url = "\52" . $url; d718: query("\x55\120\x44\x41\x54\105\x20\x70\x61\162\163\145\x6d\x78\137\x64\157\156\x6f\162\x73\x20\x53\x45\124\x20\143\150\145\x63\153\x5f\x75\162\154\75\47{$url}\x27\x20\127\110\105\x52\x45\x20\144\157\156\157\162\137\151\144\75" . $_GET["\151\x64"]); goto E698; E698: $D0["\x63\x68\145\x63\x6b\x5f\x75\162\x6c"] = $url; die; E555: if (isset($_GET["\141\144\166\141\x6e\x63\145\144"])) { goto d5f2; } $f82 = $D0["\x61\144\166\141\156\143\x65\x64"]; goto f68e; A906: ?>
">
    </div>
    <a class="test_check <?php  if ($D0["\x63\150\145\143\153\x5f\165\162\x6c"]) { goto f677; } echo "\x75\151\55\x64\151\x73\x61\x62\154\x65\x64"; f677: ?>
"
       style="font-size: 11px; margin-right: -20px"
       data-role="button" data-mini="true" data-icon="check" data-theme="e" data-inline="true" target="_blank"
       href="<?php  goto ca26; Be3d: ?>

<h3>
    Import Scheme

    <font color="grey">for <?php  echo $D0["\x68\157\x73\x74"]; ?>
</font>
</h3>

<?php  if ($f82) { goto E550; } b42("\165\163\145\x72", "\x63\x6f\x6e\x66\x69\147\x2f" . $D0["\x68\157\x73\164"] . "\x2f\165\x73\145\162\56\x70\x68\160", "\125\163\x65\x72\x20\x73\x63\x72\x69\160\164\54\40\164\150\x61\164\x20\x69\x73\40\x65\170\145\x63\x75\x74\x65\144\x20\141\146\x74\x65\x72\x20\x70\x72\x6f\x64\165\143\x74\40\141\x6e\141\x6c\x79\163\x69\x73\x2e\x20\127\162\151\x74\145\40\141\154\154\x20\x79\x6f\165\162\x20\143\165\163\x74\157\x6d\x20\x6c\x6f\x67\x69\143\163\40\x68\x65\x72\x65\56", false, 350); goto f2ce; Ecdc: b7(); ?>
')">Back</a>
<?php  if ($D0["\x61\165\x74\157\x5f\x75\160\144\x61\164\x65"]) { goto ac8c; } ?>
<a id="wiz" data-role="button" data-transition="slidedown"
   data-inline="true" data-icon="star" data-theme="e"
   onclick='SaveGo("<?php  b7(); goto F13b; F13b: ?>
wizard1&id=<?php  echo $D0["\144\157\156\x6f\162\137\x69\144"]; ?>
")'>Scheme Wizard</a>
<?php  ac8c: ?>
<a id="wiz" data-role="button" data-icon="user" data-theme="a"
   data-inline="true"
   onclick='SaveGo("<?php  goto A160; d79f: die; B87c: if (!($_SERVER["\122\105\121\125\105\123\124\x5f\x4d\105\x54\x48\117\x44"] == "\120\117\x53\124")) { goto E555; } $script = str_replace("\134\42", "\x22", @html_entity_decode($_POST["\x63\157\144\x65"])); EC3($D0["\150\x6f\x73\164"], $script); goto ae34; e597: foreach ($C00 as $Ff => $F19) { $F19 = strtolower($F19); b42($F19, "\143\157\156\x66\151\147\57" . $D0["\150\x6f\x73\x74"] . "\x2f" . $F19 . "\56\160\150\160", $c87[$Ff], false, 300, true); F5c6: } Ee59: ?>

    <style type="text/css">
        .script_tab {
            display: inline-block;
            background-color: #DDD;
            font-size: 14px;
            border: 1px solid grey;
            padding: 10px;
            padding-top: 5px;
            color: grey;
            font-weight: bold;
            cursor:pointer;
            z-index: 0;
        }

        .script_tab:hover {
            background-color: #EEEEEE;
        }

        .script_active {
            background-color: white;
        }
        .script_active:hover {
            background-color: white !important;
        }
    </style>
<?php  Afc0: ?>

<div style="text-align: center; margin-top:-29px; margin-bottom: -17px">
        <a type="button" data-iconpos="notext" data-mini="true" data-theme="e" data-role="button" data-icon="lightning" data-mini="true" title="Single element selector" data-inline="true" onclick="
        // Get line and pos
        editor.focus();
        var sel = editor.getSelectionRange();
        if (sel.start.column==sel.end.column) {
            var pos = sel.start.column;
            sel.setStart(sel.start.row,0);
            sel.setEnd(sel.start.row+1,0);
            var line = editor.session.getTextRange(sel);
            var m = [];
            var quo = 0;
            var doit = false;
            for (var i=0;i<line.length;i++)
                if (line[i]=='\'') {
                    doit = true;
                    quo = 1-quo;
                    m[i]=quo+2;
                   }
                else m[i] = quo;
        }
        if (doit) {
            if (!m[pos]) // Find it near
                for (i=0;i<line.length;i++)
                    if (m[i] && (Math.abs(pos-i) <5))   pos = i;

            if (m[pos]) while (m[pos]!=3) pos--;
            else doit = false;
            if (doit) {
                sel = editor.getSelectionRange();
                sel.start.column = pos;
                while (m[pos]!=2) pos++;
                sel.end.column = pos+1;
                editor.getSelection().setSelectionRange(sel);
            }
        }

        GetSelector($('.check_url:visible').val(),editor.session.getTextRange(editor.getSelectionRange()).replace('\'','').replace('\'',''),1);
        " >Single element selector</a>
            <a type="button" data-iconpos="notext"  data-theme="e" data-mini="true" data-role="button" data-icon="android" data-mini="true" data-inline="true" title="Multiply elements selector"
                   onclick="
        // Get line and pos
        editor.focus();
        var sel = editor.getSelectionRange();
        if (sel.start.column==sel.end.column) {
            var pos = sel.start.column;
            sel.setStart(sel.start.row,0);
            sel.setEnd(sel.start.row+1,0);
            var line = editor.session.getTextRange(sel);
            var m = [];
            var quo = 0;
            var doit = false;
            for (var i=0;i<line.length;i++)
                if (line[i]=='\'') {
                    doit = true;
                    quo = 1-quo;
                    m[i]=quo+2;
                   }
                else m[i] = quo;
        }
        if (doit) {
            if (!m[pos]) // Find it near
                for (i=0;i<line.length;i++)
                    if (m[i] && (Math.abs(pos-i) <5))   pos = i;

            if (m[pos]) while (m[pos]!=3) pos--;
            else doit = false;
            if (doit) {
                sel = editor.getSelectionRange();
                sel.start.column = pos;
                while (m[pos]!=2) pos++;
                sel.end.column = pos+1;
                editor.getSelection().setSelectionRange(sel);
            }
        }

        GetSelector($('.check_url:visible').val(),editor.session.getTextRange(editor.getSelectionRange()).replace('\'','').replace('\'',''),0);
        ">Multiply elements selector</a>
</div>

<div style="background: #DDD; padding-left:4px; margin-top:15px; margin-bottom: 20px">
<a style="font-size:16px; margin-right: 4px" data-mini="true"
   onclick="SaveGo('<?php  goto Ed0d; b03a: echo "\x75\x69\x2d\x64\x69\x73\x61\142\x6c\x65\x64"; C8fc: ?>
"
       style="font-size: 11px; margin-right: -20px"
       data-role="button" data-mini="true" data-icon="check" data-theme="e" data-inline="true" target="_blank"
       href="<?php  echo c7("\52" . $D0["\143\150\145\143\x6b\137\x6c\165\162\154"]); ?>
" onclick="SaveGo('')">Check</a>
</span>
</div>

<a data-transition="reverse" rel="external" data-role="button" data-icon="arrow-l" data-inline="true"
   onclick="SaveGo('<?php  goto Ecdc; Da3d: ?>
        editoruser.focus();
        save_editors('vars');
    });

    editor_id = '#user';

</script>
