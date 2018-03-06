<?php
/*
LiveImport (c) MaxD, 2017. Write to liveimport@devs.mx for support and purchase.
*/
 goto e9f4; dc6e: $a7 = @file_get_contents($Aff, false, f8, filesize($Aff) - 10000); fc76: if ($a7) { goto C6eb; } $a7 = ''; C6eb: goto E474; e9f4: $Aff = "\x74\145\x6d\x70\x2f\146\x65\x65\144\x2e\x6c\x6f\x67"; if (@filesize($Aff) > 50000) { goto ec05; } $a7 = @file_get_contents($Aff); goto fc76; ec05: goto dc6e; E474: @unlink($Aff); goto f8ec; f8ec: echo json_encode($a7);
