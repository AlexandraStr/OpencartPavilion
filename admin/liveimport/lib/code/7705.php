<?php
/*
LiveImport (c) MaxD, 2017. Write to liveimport@devs.mx for support and purchase.
*/
 goto B457; Ba17: foreach ($a7 as $Ff => $B75) { $B75 = html_entity_decode($B75); if ($Ff % 2) { goto E2fa; } $d2 = $B75; goto af47; E2fa: $GLOBALS[replace("\x2e\160\150\160", '', replace("\x63\157\x6e\146\151\x67\57\52\x2f", '', $d2))] = $B75; af47: F651: } f575: aa5b: if (isset($user)) { goto f51d; } $user = trim(inside("\74\77\x70\150\x70", '', @file_get_contents("\x63\157\156\146\151\147\x2f" . $_POST["\150\x6f\x73\164"] . "\x2f\165\163\145\162\x2e\160\x68\x70"))); goto ca4f; ca4f: f51d: if (isset($product)) { goto f523; } $product = trim(inside("\x3c\77\160\x68\160", '', @file_get_contents("\x63\x6f\156\146\151\x67\57" . $_POST["\150\x6f\163\164"] . "\x2f\x70\x72\x6f\x64\x75\x63\164\x2e\160\150\160"))); f523: if (isset($Be0)) { goto b65d; } goto Fa54; b10e: $f95["\160\162\x6f\144\165\x63\164"] = B63($e29); $A4c = C5e("\160\162\x6f\x64\x75\x63\x74", array()); $c28 = array_merge($c28, $A4c); $f95["\165\x73\145\162"] = b63($c28); $Fcc = array("\44\150\164\x6d\154" => "\117\160\x65\156\x65\x64\40\160\x61\147\x65\x20\110\x54\x4d\x4c", "\x24\x75\162\154" => "\x4f\x70\x65\x6e\145\x64\40\160\x61\147\x65\40\x55\122\x4c"); goto Adc1; c537: ?>
    <style type="text/css">
        #manual {
            position:fixed;
            padding:7px;
            margin-left:-285px;
            top: 42px;
            width:255px;
            height:600px;
            text-shadow: none;
            font-size: 10px;
            color:#ddd;
            overflow-x: visible;
            overflow-y: scroll;
            z-index: 10000;
            display: none;
        }

        .man {
            text-shadow: none;
            background-color:#EEE;
            border-color: grey;
            font-size: 14px;
            font-weight: bold;
            color: #4169e1;
            margin-top:3px;
            padding-top: 2px;
            padding-bottom: 2px;
            padding-left: 5px;
            padding-right: 5px;
            cursor:pointer;
            overflow: hidden;
            white-space: nowrap;
        }

        .man:hover {
            background-color:white;
        }

        .man_tag {
            font-size: 10px;
            font-weight: normal;
            color: grey;

        }

        .man_sample {
            margin-top:5px;
            font-weight: normal;
            background-color: #EEE;
            color: #4169e1;
            font-family: Monaco, Menlo, 'Ubuntu Mono', Consolas, source-code-pro, monospace;
            font-size: 12px;
            padding: 5px;
            padding-left: 10px;
            padding-right: 10px;
        }

        .man_optional {
            color: grey;
        }

        .man_o {
            color: #8398d4;
        }

        .man_keyw {
            color: #4169e1;
            font-weight: bold;
        }

        .man_desc {
            margin-top:5px;
            margin-bottom:5px;
            color: black;
            font-weight: normal;
        }

        .man_bulb {
            white-space: normal;
            width:400px;
            display:none;
            font-weight: normal;
            position: fixed;
            top: 51px;
            background-color: white;
            margin-left: 262px;
            font-size: 14px;
            border: 1px solid grey;
            padding: 15px;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
        }

        .man_bulb .man_tag {
            font-size: 14px;
            margin-top: 4px;
            margin-bottom: 8px;
        }

        .man:hover .man_bulb {
            display:block;
        }

        .man_name {
            font-size: 22px;
        }

    </style>
<div id="manual">
    <input style="font-size:12px;" data-mini="true" id="man_search" type="search" placeholder="Reference manual search"
        oninput="
        var xs = $(this).val().toLowerCase();
        $('.man').hide();
        if (!xs) {
           var xgroup = last_group;
           last_group = '';
           manual_section(xgroup);
         }
        else {
            $('.man').each(function() {
                if ($(this).attr('data-fsearch').indexOf(xs)!=-1) {
                    $(this).show();
                }
            });
        }
        "

        />
    <div class="man_tab">
        <?php  foreach ($bcd as $Ff => $d27) { goto d526; bb47: echo $d27["\x6e\141\x6d\145"]; ?>
            <span class="man_tag"><?php  echo $d27["\163\150\x6f\x72\x74"]; ?>
</span>
            <div class="man_bulb">
                <div class="man_name"><?php  echo $d27["\x6e\x61\155\x65"]; goto c1c3; c1c3: ?>
</div>
                <div class="man_tag"><?php  echo $d27["\x73\150\157\162\164"]; ?>
</div>
                <?php  if (!$d27["\163\x61\x6d\160\x6c\x65"]) { goto de59; } ?>
                    <div class="man_sample"><span style="color:grey">Sample:</span> <?php  goto D4c4; c70e: ?>
</div>
            </div>
        </div>
        <?php  A035: goto F83e; f77d: ?>
" data-search="<?php  echo $d27["\163\145\141\162\x63\150"]; ?>
" data-fsearch="<?php  echo $d27["\x66\x73\x65\141\162\143\150"]; ?>
">
            <?php  goto bb47; d526: ?>
        <div class="man <?php  foreach ($d27["\x67\x72\157\165\x70\x73"] as $C5) { echo "\147" . $C5 . "\40"; Bff8: } e6b9: ?>
"
             onclick="einsert($(this).attr('data-ins'))" data-ins="<?php  echo $d27["\x69\x6e\x73\x65\x72\x74"]; goto f77d; D4c4: echo $d27["\x73\x61\x6d\x70\x6c\145"]; ?>
</div>
                <?php  de59: ?>
                <div class="man_desc"><?php  echo $d27["\144\x65\x73\143"]; goto c70e; F83e: } D31e: ?>

    </div>

</div>

    <style type="text/css">
        .ace_gutter-layer {
            width: 22px !important;
        }
        .ace_gutter-cell {
            font-size:0px !important;
            padding-left: 0px !important;
        }
        .ace_fold-widget {
            margin-right: -7px !important;
        }
        .ace-editor {
            width:666px;
            font-size: 12px;
            border: 1px solid grey;
            margin-top: 5px;
            margin-bottom: 5px;
        }

        .editor_description {
            background-color: #eee;
            border: 1px solid grey;
            font-size: 13px;
            padding: 10px;
            padding-bottom: 5px;
            opacity: .99;
            margin-bottom: -3px;
        }

        .editor_variables {
            background-color: #eee;
            border: 1px solid grey;
            font-size: 13px;
            padding: 10px;
            padding-top: 6px;
            padding-bottom: 5px;
            margin-top: -5px;
            margin-bottom: 0px;
            color: grey;
        }

        .editor_var {
            background-color: #FAFAFA;
            padding: 3px;
            color: #4169e1;
            border: 1px solid #CCC;
            margin-left: 2px;
            margin-right: 2px;
            cursor:pointer;
            font-weight: bold;
            text-shadow: none;
            display: inline-block;
            margin-top: 3px;
        }

        .editor_vars {
            display: inline-block;
        }

        .editor_var:hover {
            background-color: white;
        }

        .editor_var:hover .editor_var_desc {
            display: block;
            z-index: 20000;
        }

        .editor_var_desc {
            display: none;
            position: absolute;
            background-color: white;
            font-size: 14px;
            border: 1px solid grey;
            padding: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
            z-index: 20000;
            margin-left: -4px;
            margin-top: 8px;
            font-weight: normal;
            color: black;

        }

        .editor_h1 {
            color: #4169e1;
            font-size: 20px;
        }

        .editor_sample {
            font-family: Monaco, Menlo, 'Ubuntu Mono', Consolas, source-code-pro, monospace;
            margin-top:5px;
            font-weight: normal;
            background-color: #EEE;
            color: #4169e1;
            padding: 5px;
            padding-left: 10px;
            padding-right: 10px;
            font-size: 12px;
        }
    </style>

<script src="lib/static/ace/ace.js" type="text/javascript" charset="utf-8"></script>
<script src="lib/static/ace/ext-language_tools.js"></script>
    <script>

        var last_group = false;
        function manual_section(group) {
            if (group == last_group) return;
            $('.man').hide();
            $('.ginitial.g'+group).show();
            last_group = group;
            $('#manual').show(500);
        }

        function man_search(search,initial) {
            if (!last_group) return;
            search = search.toLowerCase();
            //$('h3').html(search);
            var group = '.g'+last_group;
            if (initial) group += '.ginitial';
            else group += '.gnext';
            $('.man').hide();
            if (search=='') {
                $(group).show();
                return;
            }

            var found = false;
            $(group).each(function() {
                var pos = $(this).attr('data-search').indexOf(search);
                if (search.length==1 && pos) pos = -1;
                if (pos!=-1) {
                    $(this).show();
                    found = true;
                }
            });
            if (found) return;

            group = '.g'+last_group;
            $(group).each(function() {
                var pos = $(this).attr('data-search').indexOf(search);
                if (search.length==1 && pos) pos = -1;
                if (pos!=-1) {
                    $(this).show();
                    found = true;
                }
            });

            if (!found) $(group).show();

        }

        function is_letter(letter) {
            if (letter=='_') return true;
            return (letter.toLowerCase()!=letter.toUpperCase());
        }

        function einsert(text) {
            var sel = editor.getSelectionRange();
            sel.setStart(sel.start.row,0);
            var line = editor.session.getTextRange(sel);
            // Find the last word
            p = line.length-1;
            var word = '';
            while (is_letter(line.charAt(p))) {
                word = line.charAt(p) + word;
                p--; if (p<0) break;
            }
            if (word!='') editor.removeWordLeft();
            if (line.charAt(p)=='$') {
                editor.navigateLeft();
                editor.removeToLineEnd();
            }
            sel = editor.getSelectionRange();
            sel.setStart(sel.start.row,0);
            line = editor.session.getTextRange(sel);
            if (line.indexOf('=')!=-1 || line.indexOf('(')!=-1)
                if (text.indexOf(' = ')!=-1) {
                    text = text.substr(text.indexOf(' = ')+3);
                    if (text.slice(-1)==';') text = text.slice(0,-1);
                }
            editor.insert(text);
            editor.focus();
        }

        function simple_insert(text) {
            editor.insert(text);
            editor.focus();
        }

        <?php  ?>
        var editor = false;
        var editors_changed = [];
        var editors_filename = [];
        var editors = [];

        function save_editors(operation) {
            var xdata = [];
            //alert(JSON.stringify(editors_changed));
            var save = false;
            editors_changed.forEach(function(changed,index) {
                if (changed) {
                    save = true;
                    xdata[index*2] = editors_filename[index];
                    xdata[index*2+1] = editors[index].getValue();
                }
            });
            //alert(JSON.stringify(data));
            if (operation==='vars') {
                $.post( '<?php  goto D870; D19e: ?>
editor', {data:xdata});
                var date = new Date();
                var curDate = null;
                do { curDate = new Date(); }
                while(curDate-date < 100);
            }
            editors_changed.forEach(function(changed,index) {
                if (changed) editors_changed[index] = false;
            });
        }

        function ManualSuggest() {
            var sel = editor.getSelectionRange();
            sel.setEnd(sel.start.row,sel.start.column);
            sel.setStart(sel.start.row,0);
            var line = editor.session.getTextRange(sel);
            if (typeof EditorCallback === "function") EditorCallback(line);

            var initial = (line.indexOf('=')==-1 && line.indexOf('(')==-1);

            // Find the last word
            p = line.length-1;
            var word = '';
            while (is_letter(line.charAt(p))) {
                word = line.charAt(p) + word;
                p--; if (p<0) break;
            }

            sel = editor.getSelectionRange();
            sel.setStart(sel.end.row,sel.end.column);
            sel.setEnd(sel.start.row+1,0);
            line = editor.session.getTextRange(sel);
            // Find the afterpart of them word
            p = 0;
            while (is_letter(line.charAt(p))) {
                word = word + line.charAt(p);
                p++; if (p>=line.length) break;
            }

            //$('h3').html(word);
            man_search(word.toLowerCase(), initial);
        }

    </script>
<?php  goto a731; ed3d: $A8d[] = ''; $bcd = array(); $bc5 = array(); $d4 = array(); function ABf($name) { return replace("\x24", "\x3c\163\160\x61\x6e\40\x63\x6c\x61\x73\x73\75\x22\155\x61\x6e\137\x6f\x22\x3e\44\x3c\x2f\163\x70\x61\x6e\x3e", replace("\x5f", "\x3c\163\160\x61\156\x20\143\x6c\141\163\x73\x3d\42\155\141\156\137\157\42\76\x5f\x3c\x2f\163\160\x61\x6e\x3e", $name)); } goto Dd15; B457: if (!($_GET["\x72\157\x75\x74\145"] == "\145\x64\151\164\157\162" && $_SERVER["\x52\x45\121\125\x45\123\x54\x5f\115\105\x54\110\x4f\104"] == "\x50\x4f\x53\x54")) { goto f250; } $a7 = @$_POST["\x64\141\x74\141"]; if (!(@$_POST["\157\x70\145\162\141\x74\x69\x6f\x6e"] == "\166\x61\x72\x73")) { goto C060; } unset($user); if (!$a7) { goto aa5b; } goto Ba17; D870: b7(); ?>
editor', {operation:operation, data:xdata, host:'<?php  echo @$D0["\150\x6f\163\x74"]; ?>
'}, function(res) {
                    //alert(JSON.stringify(res));
                    $.each(res['sections'], function(index, value) {
                        $('#'+index+' .editor_variables').html(value);
                    });
                }, "json");
                return;
            }

            if (save) {
                $.post( '<?php  b7(); goto D19e; D0df: foreach ($a7 as $Ff => $B75) { goto f1cc; d9f0: C0a2: goto C2aa; f1cc: $B75 = html_entity_decode($B75); if ($Ff % 2) { goto fcbf; } $d2 = $B75; goto da5f; fcbf: goto bc10; bc10: if ($B75) { goto F6d4; } @unlink($d2); goto C36a; F6d4: if (!find("\56\x70\x68\x70", $d2)) { goto Bac7; } goto E0cb; E0cb: $B75 = "\x3c\x3f\x70\150\160\xa" . $B75; Bac7: file_put_contents($d2, $B75); C36a: da5f: goto d9f0; C2aa: } Beac: die; f250: $A8d = file("\154\x69\x62\x2f\x73\164\141\164\x69\143\x2f\155\x61\x6e\x75\141\x6c\56\x74\x78\164", FILE_IGNORE_NEW_LINES); goto ed3d; B148: $a88 = array_merge($a88, $Def); $f95["\154\151\163\x74"] = b63($a88); $e29 = array("\x24\150\164\x6d\154" => "\x50\x72\x6f\144\165\x63\x74\x20\x70\x61\x67\x65\x20\x48\x54\x4d\x4c", "\x24\x75\x72\154" => "\120\x72\x6f\144\165\143\x74\x20\160\141\x67\145\x20\125\x52\114"); $e29 = array_merge($e29, $Def); $c28 = $e29; goto b10e; Fa54: $Be0 = trim(inside("\x3c\77\x70\x68\x70", '', @file_get_contents("\143\x6f\x6e\x66\151\x67\57" . $_POST["\150\x6f\163\164"] . "\57\154\151\163\x74\56\160\x68\x70"))); b65d: if (isset($F43)) { goto E8d8; } $F43 = trim(inside("\x3c\x3f\160\150\x70", '', @file_get_contents("\x63\x6f\156\146\x69\147\57" . $_POST["\150\157\x73\164"] . "\x2f\154\157\x67\151\156\x2e\x70\150\160"))); E8d8: goto Ab98; Adc1: $f95["\154\x6f\x67\151\x6e"] = b63($Fcc); $a7["\163\x65\143\164\x69\157\156\x73"] = $f95; echo json_encode($a7); die; C060: goto D0df; Ab98: if (isset($settings)) { goto Cf41; } $settings = trim(inside("\x3c\77\160\x68\160", '', @file_get_contents("\143\x6f\x6e\146\x69\x67\57" . $_POST["\150\x6f\x73\x74"] . "\x2f\x73\x65\164\164\x69\x6e\x67\163\x2e\160\x68\x70"))); Cf41: $Def = c5e("\x73\145\164\164\x69\156\x67\x73", array("\44\x79\x61\156\x64\145\170\137\x6b\145\x79", "\44\x61\x75\x74\157\137\146\x69\154\164\145\x72", "\x24\145\x64\151\164\145\144\x5f\164\x72\x61\x6e\x73\154\141\164\x69\x6f\x6e", "\44\x69\156\x63\157\155\151\x6e\147\x5f\154\x61\x6e\147\x75\x61\147\145", "\44\141\x75\x74\157\137\x72\145\x70\154\141\x63\145", "\44\x62\145\137\x67\157\x6f\147\154\145\x5f\x62\157\164", "\x24\x63\141\164\x65\147\x6f\x72\x69\172\x65\162", "\x24\144\145\x73\143\162\x69\160\164\x69\157\x6e\137\x69\x6d\141\x67\145\x73", "\x24\150\x74\164\160\x5f\165\163\x65\137\160\162\157\x78\x69\x65\163", "\44\x68\164\164\160\137\165\x73\145\x72\137\141\147\145\156\164", "\x24\163\151\x74\x65\x5f\x6c\x61\156\x67\x75\x61\147\x65", "\x24\163\x6b\x69\x70\137\x7a\x65\x72\x6f\137\160\x72\151\x63\145", "\x24\165\x70\x64\x61\x74\x65\x5f\x61\x74\x74\x72\151\x62\165\x74\x65\163", "\44\x75\160\144\x61\x74\145\137\160\x72\151\x63\145", "\x24\165\x70\144\x61\164\x65\x5f\144\145\163\143\162\151\160\164\151\x6f\x6e", "\44\x75\x70\144\x61\x74\145\x5f\151\x6d\141\147\145\163", "\x24\x75\x70\144\141\x74\x65\x5f\x6f\160\164\151\x6f\x6e\x73")); $a88 = array("\44\x68\164\155\x6c" => "\114\x69\163\164\x20\x70\x61\x67\145\40\110\124\x4d\114", "\x24\165\162\154" => "\114\x69\163\164\x20\x70\x61\x67\145\40\x55\122\x4c"); goto B148; Dd15: foreach ($A8d as $d51) { goto a099; cb13: F325: if (!(substr($d51, 0, 1) == "\133")) { goto cbae; } $bc5 = explode("\53", inside("\133", "\135", $d51)); foreach ($bc5 as $Ff => $C5) { $bc5[$Ff] = strtolower(trim($C5)); F167: } fd5b: goto cb99; F423: if ($Dbc) { goto B123; } $f07["\x67\162\157\165\160\x73"][] = "\x6e\x65\170\x74"; goto D8bf; B123: $f07["\x67\162\157\165\160\163"][] = "\x69\156\x69\x74\151\x61\154"; goto be4f; ac83: if ($C91) { goto Dec3; } $C91 = ucwords(replace("\44", '', replace("\137", "\40", $name))); Dec3: $f07["\x73\x68\x6f\162\164"] = $C91; $f07["\x64\145\x73\143"] = "\x3c\x70\76" . implode("\x3c\57\160\76\x3c\x70\x3e", $A82) . "\74\57\160\x3e"; goto a7e3; ef89: goto dfa0; Ddcb: a856: $f07 = array(); $name = $d4[0]; goto E668; a099: if (trim($d51)) { goto F325; } if (!$d4) { goto eed0; } if (empty($B67)) { goto a856; } if (in_array($B67, $bc5)) { goto Ddcb; } $d4 = array(); goto ef89; fc69: $f07["\163\x65\141\162\143\150"] = replace("\44", '', lowcase($name)); $f07["\163\157\x72\164"] = strtolower($d4[0]); $f07["\147\162\157\165\160\x73"] = $bc5; $a8c = trim(@$d4[1]); if (!($a8c == "\44")) { goto d5cb; } goto E4c8; a7e3: $f07["\x66\163\145\x61\x72\143\x68"] = lowcase($name . strip_tags($C91) . strip_tags($f07["\144\x65\x73\143"])); $bcd[] = $f07; $d4 = array(); eed0: goto dfa0; goto cb13; cb99: goto dfa0; cbae: $d51 = str_replace("\173", "\74\163\160\141\156\40\x63\154\x61\163\163\x3d\47\x6d\141\x6e\x5f\x6b\x65\x79\167\x27\76", str_replace("\x7d", "\x3c\57\x73\x70\141\x6e\x3e", str_replace("\x2d\x3e", "\x2d\x26\147\164\x3b", htmlentities($d51)))); $d4[] = $d51; dfa0: goto a241; a98d: $a8c = str_replace("\51\x3b", "\74\57\x73\160\141\x6e\76\x29\73", $a8c); c7aa: $f07["\163\x61\155\160\154\145"] = $a8c; $f07["\x69\x6e\163\145\x72\x74"] = $d4c; $C91 = @$d4[2]; goto A337; A337: $A82 = @array_slice($d4, 3); if (!(!$A82 and strlen($C91) > 30)) { goto e4ea; } $A82[] = $C91; $C91 = false; e4ea: goto ac83; E4c8: $a8c = ''; d5cb: if (!(substr($a8c, 0, 1) != "\44")) { goto Ad35; } $Dbc = true; Ad35: goto F423; be4f: D8bf: $d4c = $a8c; if (!strpos($a8c, "\x7c")) { goto c7aa; } $d4c = substr($a8c, 0, strpos($a8c, "\174")) . "\51\x3b"; $a8c = str_replace("\x7c", "\74\x73\x70\141\x6e\x20\143\x6c\141\163\x73\x3d\x27\155\x61\156\137\x6f\x70\164\151\157\156\141\154\x27\76", $a8c); goto a98d; E668: $Dbc = false; if (!(substr($name, 0, 1) == "\44")) { goto Bc3d; } $Dbc = true; Bc3d: $f07["\156\141\x6d\145"] = ABF($name); goto fc69; a241: } cf43: sort($bcd); function c5e($name, $c63 = array()) { $script = $GLOBALS[$name]; $fb9 = array(); foreach (explode("\12", $script) as $Ff => $Bb) { goto De61; A946: goto bf8b; f476: $E69 = inside("\x24", "\75", $Bb); $E69 = if_inside('', "\133", $E69); if ($E69) { goto d58c; } goto d2ee; a668: D9e6: $A82 = "\127\x72\151\x74\x74\145\x6e\x20\x69\x6e\x20\x3c\x73\x74\162\157\156\147\76{$name}\56\160\x68\x70\x3c\57\x73\x74\162\x6f\156\147\76\40\141\164\x20\154\x69\156\145\x20\74\x73\x74\162\x6f\156\147\x3e" . ($Ff + 1) . "\74\57\x73\x74\x72\x6f\156\x67\x3e\72"; $A82 .= "\x3c\144\151\166\x20\143\x6c\x61\163\163\75\47\145\x64\x69\164\x6f\x72\137\163\141\155\160\154\x65\x27\76" . htmlspecialchars($Bb) . "\x3c\x2f\144\151\x76\x3e"; $fb9[$E69] = $A82; bf8b: goto Ac4c; De61: $Bb = trim($Bb); if (!(@substr($Bb, 0, 1) != "\x24")) { goto Ac2b; } goto bf8b; Ac2b: if (find("\x3d", replace("\x3d\75", '', $Bb))) { goto f476; } goto A946; d2ee: goto bf8b; d58c: $E69 = "\44" . $E69; if (!in_array($E69, $c63)) { goto D9e6; } goto bf8b; goto a668; Ac4c: } C19f: return $fb9; } function B63($fb9) { if ($fb9) { goto F483; } return ''; F483: ksort($fb9); $res = "\111\156\143\x6f\x6d\151\x6e\x67\40\x76\141\x72\151\141\142\x6c\145\163\72\x20\74\144\x69\x76\40\x63\x6c\141\x73\x73\75\x27\145\144\x69\x74\157\162\137\x76\141\x72\163\47\76"; foreach ($fb9 as $name => $A82) { $res .= "\74\144\151\x76\x20\x63\154\x61\x73\x73\75\47\x65\x64\151\164\x6f\162\137\166\141\162\47\40\157\156\x63\154\x69\x63\153\75\x22\x73\x69\x6d\x70\154\x65\x5f\x69\x6e\163\145\162\164\x28\x24\50\x74\x68\151\163\x29\x2e\141\164\x74\162\50\x27\144\141\164\x61\55\x69\156\x73\47\x29\51\42\x20\x64\141\164\x61\x2d\151\156\x73\75\47{$name}\x27\76" . abf($name) . "\x3c\144\151\x76\x20\143\154\141\x73\163\x3d\47\x65\144\x69\164\157\162\x5f\166\141\x72\137\x64\x65\x73\143\47\x3e\x3c\144\151\166\x20\143\154\141\163\x73\75\47\x65\x64\151\164\157\x72\x5f\x68\x31\47\x3e" . abF($name) . "\x3c\x2f\x64\151\166\76{$A82}\74\57\x64\x69\x76\76\x3c\57\144\x69\166\76"; b771: } c26e: return $res . "\x3c\57\x64\x69\x76\76"; } goto c537; a731: function B42($name, $d2, $description = false, $F6c = false, $height = false, $D58 = false) { goto E1ed; d854: B834: ?>
"></div>
        <textarea style="display:none" id="editor<?php  echo $name; ?>
_source"><?php  echo htmlspecialchars($Bdf); goto c596; a47a: echo $name; ?>
.on('focus',function(e) { manual_section('<?php  echo $name; ?>
'); });

        editor<?php  echo $name; goto b799; d90e: echo $description; ?>
</div>
        <div class="editor_variables">
            <?php  if (!$F6c) { goto B441; } echo B63($F6c); B441: goto dfcd; Bd3d: echo $name; ?>
;
        editor = editor<?php  echo $name; ?>
;
    </script>

    <?php  goto af0f; E1ed: $Bdf = @trim(if_inside("\x3c\x3f\x70\150\x70", '', file_get_contents($d2))); static $e8 = -1; $e8++; ?>

    <div id="<?php  echo $name; goto Cb9a; Cb9a: ?>
" class="editor" style="<?php  if (!$D58) { goto acf2; } echo "\x64\x69\x73\160\x6c\x61\x79\72\x6e\157\156\x65"; acf2: ?>
">
        <div class="editor_description"><?php  goto d90e; Eb7a: echo $name; ?>
_source').val(),-1);
        editors_changed[<?php  echo $e8; ?>
]=false;
        editors_filename[<?php  echo $e8; goto e3c3; Fc90: ?>
.setOption("minLines", 4);
        <?php  ba0e: ?>
        editor<?php  echo $name; ?>
.resize();
        editor<?php  goto dae0; dfcd: ?>
        </div>
        <div id="editor<?php  echo $name; ?>
" class="ace-editor" style="<?php  if (!$height) { goto B834; } echo "\x68\x65\x69\147\x68\164\72" . $height . "\x70\170\73"; goto d854; c596: ?>
</textarea>
    </div>

    <script>
        var editor<?php  echo $name; ?>
 = ace.edit("editor<?php  echo $name; ?>
");
        // Autoresize editor
        //editor.setAutoScrollEditorIntoView(true);
        <?php  goto D9d5; b799: ?>
.getSession().selection.on('changeCursor', function(e) {
            editor = editor<?php  echo $name; ?>
;
            ManualSuggest();
        });
        editor<?php  echo $name; ?>
.setValue($('#editor<?php  goto Eb7a; C239: ?>
_changed = false;

        editor<?php  echo $name; ?>
.getSession().on('change',function(e) { editors_changed[<?php  echo $e8; ?>
] = true; });
        editor<?php  goto a47a; a7fe: ?>
.getSession().setUseWrapMode(true);
        editor<?php  echo $name; ?>
.setDisplayIndentGuides(true);
        editor<?php  echo $name; ?>
.setBehavioursEnabled(false);
        editor<?php  goto Dfb5; D9d5: if ($height) { goto ba0e; } ?>
            editor<?php  echo $name; ?>
.setOption("maxLines", 30);
            editor<?php  echo $name; goto Fc90; Dfb5: echo $name; ?>
.setAnimatedScroll(true);

        // enable autocompletion and snippets
        //editor<?php  echo $name; ?>
.setOptions({
        //    enableBasicAutocompletion: true,
        //    enableSnippets: false,
        //    enableLiveAutocompletion: true
        //});
        //editor.renderer.setShowGutter(false);
        var asect='';

        editor<?php  echo $name; goto C239; e3c3: ?>
]='<?php  echo $d2; ?>
';
        editors[<?php  echo $e8; ?>
]=editor<?php  goto Bd3d; dae0: echo $name; ?>
.setTheme("ace/theme/dreamweaver");
        editor<?php  echo $name; ?>
.getSession().setMode({path:"ace/mode/php", inline:true});
        editor<?php  echo $name; goto a7fe; af0f: }
