<?php
/*
LiveImport (c) MaxD, 2017. Write to liveimport@devs.mx for support and purchase.
*/
 goto Fd; F5: die; fa: $c7 = @disk_free_space("\x2e"); if (!($c7 > 1)) { goto b4; } if (!(($c7 = round(disk_free_space("\56") / 1024 / 1024)) < 50)) { goto E7; } goto ee; E8: if (empty($_POST)) { goto c8; } foreach ($_POST as &$f2) { $f2 = str_replace("\x2e\57\57", "\x3a\x2f\57", $f2); Cc: } b7: c8: if (@$_GET["\x72\157\165\x74\145"]) { goto b6; } goto c2; c2: require f0 . "\x6c\151\x62\x2f\x63\x6f\x64\145\57\x63\67\x61\x61\56\160\x68\x70"; goto F4; b6: require "\x6c\151\x62\57\x63\x6f\x64\145\x2f" . $Ef[$_GET["\162\157\x75\x74\x65"]]; F4: goto db; E6: Ea(); c1: $d8 = @$Ae; function B7() { echo FA(); } function fA() { return "\x69\156\144\145\170\56\160\150\x70\77\x72\144\x3d" . (rand(1, 10000000) * 2 + @$_GET["\x72\x64"] % 2) . "\46\x72\x6f\165\x74\x65\75"; } goto E8; db: require f0 . "\x6c\x69\x62\57\x63\x6f\x64\x65\57\65\67\60\x36\56\x70\150\160"; function d3($name) { goto e8; A8: $F8 = "\x3c\x40\x23\x26"; $a7 = str_replace("\x3c\x3f\x70\150\x70", $F8, $a7); $a7 = str_replace("\x3c\x3f", "\x3c\x3f\160\x68\x70\40\145\x63\x68\x6f\x20", $a7); $a7 = str_replace("\74\77\160\150\160\x20\145\143\150\x6f\40\40", "\x3c\x3f\160\x68\160\40\x65\x63\x68\x6f\x20", $a7); $a7 = str_replace($F8, "\x3c\x3f\x70\x68\x70", $a7); goto ea; F9: $a7 = substr($a7, 0, $B6) . $b6 . substr($a7, $B6 + 1); $aa = !$aa; goto e0; Fc: file_put_contents(Cd . $name, $a7); goto cf; E4: $b6 = "\x27\51\40\77\x3e"; goto Cb; D0: $b6 = "\74\x3f\x70\150\x70\x20\x65\x63\x68\157\x20\x74\50\x27"; Cb: goto F9; ea: $aa = false; $B6 = 0; e0: if (!($B6 = strpos($a7, "\140", $B6))) { goto Fc; } if (!$aa) { goto D0; } goto E4; e8: if (!(substr($name, -4) != "\x2e\x74\x70\154")) { goto fb; } $name .= "\x2e\x74\160\154"; fb: if (!(file_exists($name) and filemtime($name) > @filemtime(Cd . $name))) { goto C1; } $a7 = file_get_contents($name); goto A8; cf: C1: return Cd . $name; goto e2; e2: } goto d9; Fd: define("\103\144", "\x6c\151\x62\57\x74\160\x6c\x2f"); define("\146\60", getcwd() . "\x2f"); $Ef = array("\x61\152\x61\170" => "\x37\141\64\71\x2e\160\x68\x70", "\146\x65\x65\x64" => "\x66\x35\63\x36\56\160\150\x70", "\165\x70\x6c\x6f\x61\144" => "\142\x63\x38\61\x2e\x70\x68\160", "\143\163\163" => "\65\x35\x34\x32\x2e\160\150\x70", "\x6c\x74\x72\145\x65" => "\67\142\x39\x64\56\160\150\160", "\x77\x69\172" => "\66\x38\143\62\56\160\x68\160", "\x74\145\163\x74" => "\x61\x35\x38\x36\x2e\x70\x68\x70", "\x77\151\144\x67\x65\x74" => "\x65\x36\71\x61\56\x70\150\x70", "\144\x62" => "\x63\x34\x35\62\56\x70\x68\160", "\x65\144\151\164\x6f\162" => "\67\x37\60\x35\56\x70\x68\160", "\x68\157\167\143\162\x6f\x6e" => "\70\60\142\66\56\160\x68\x70", "\x69\155\160\x6f\x72\164" => "\67\61\x37\x62\x2e\160\150\x70", "\151\x6d\160\157\x72\164\62" => "\x35\62\x36\x37\56\x70\150\160", "\151\x6e\163" => "\144\60\x32\70\56\x70\x68\160", "\x6c\157\147" => "\x33\x64\x32\141\56\x70\150\x70", "\x6c\x6f\147\151\156" => "\x65\x66\x38\65\56\160\150\160", "\156\145\x77\x73\x69\164\x65" => "\71\61\61\61\56\160\150\x70", "\x72\145\160\x6c\x61\x63\x65" => "\x35\71\x36\146\x2e\160\x68\160", "\163\x63\x72\x69\x70\164" => "\x61\x34\65\146\x2e\160\150\160", "\163\x65\x74\x74\x69\x6e\x67\x73" => "\x62\x35\62\143\56\160\150\160", "\164\141\163\x6b\163" => "\x32\141\x64\145\56\x70\150\x70", "\164\151\x74\154\x65" => "\143\x37\141\x61\56\x70\x68\x70", "\164\x72\x65\x65" => "\71\71\146\64\x2e\x70\150\160", "\167\x69\x7a\x61\x72\x64\61" => "\x63\x63\60\x38\x2e\x70\x68\x70", "\167\x69\172\141\x72\x64\x32" => "\141\x66\71\x34\56\160\x68\x70"); if (!($Cf = @$_GET["\x6f\x70"])) { goto fa; } require "\x6c\151\x62\x2f\x63\157\x64\x65\57" . $Ef[$Cf]; goto F5; D7: die("\101\103\103\x45\x53\x53\40\x44\x45\x4e\x49\x45\x44\x2e\40\x4c\x6f\x67\x20\151\x6e\164\x6f\x20\171\157\x75\x72\x20\x73\171\163\x74\145\x6d\x20\x61\163\x20\x41\x64\x6d\x69\156"); a1: EC("\x6c\157\x67\151\x6e"); eb: if (empty($_GET["\x76\151\145\167\137\146\x69\x6c\x65"])) { goto B1; } goto E3; E3: E5($_GET["\x76\x69\145\x77\x5f\x66\x69\154\x65"]); B1: $http_cache = true; $hash_cache_maxtime = 30 * 60; if (!@(!$_GET["\x72\x6f\x75\x74\145"])) { goto c1; } goto E6; ee: die("\x44\x69\x73\153\x20\146\x72\x65\145\x20\163\x70\x61\x63\145\x20\x74\157\157\x20\154\x6f\x77\x20\x28{$c7}\40\x4d\142\x29"); E7: b4: function eC($e7) { header("\x4c\x6f\143\141\x74\x69\157\156\x3a\x20" . fa() . $e7); die; } if (!(@$_GET["\162\x6f\165\164\x65"] == "\164\x61\x73\x6b\x73" || @$_GET["\162\157\x75\164\145"] == "\151\156\x73" || @$_GET["\162\157\x75\164\x65"] == "\x74\162\145\145" || @$_GET["\144\145\x6c\145\164\x65\x5f\145\156\x74\151\164\151\145\x73"] || @$_GET["\141\144\144"] || !a6())) { goto D5; } goto d8; d8: define("\146\165\154\x6c\x5f\160\154\141\x74\x66\x6f\x72\x6d\x5f\154\157\x61\144", true); D5: require_once "\x6c\x69\x62\x2f\x63\x6f\144\145\57\x63\60\x39\141\56\x70\x68\x70"; if (!(@$_GET["\x72\157\165\164\145"] != "\154\x6f\147\x69\156" && !Ab())) { goto eb; } if (!function_exists("\110\141\x76\145\101\144\155\151\x6e\101\x63\x63\x65\163\x73")) { goto a1; } goto D7; d9: function A6() { $B5 = sha1(PHP_VERSION_ID . filemtime("\151\156\144\x65\x78\56\160\x68\160")); return @$_COOKIE["\x6c\151\151\x64"] == $B5; }
