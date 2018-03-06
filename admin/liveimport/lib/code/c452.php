<?php
/*
LiveImport (c) MaxD, 2017. Write to liveimport@devs.mx for support and purchase.
*/
 goto aa3f; aff0: fd4("\114\x49\x5f\104\x42\x5f\x50\x41\123\123", $LI_DB_PASS); Ec(''); ae1d: e933: if (isset($LI_DB)) { goto a29e; } goto E7ba; F81a: echo $LI_DB_USER; ?>
"></p>
    <p>Password: <input type="text" name="pass" value="<?php  echo $LI_DB_PASS; ?>
"></p>
    <p>Database: <input type="text" name="database" value="<?php  echo $LI_DB; goto Da7d; a711: if (isset($LI_DB_USER)) { goto Ed33; } $LI_DB_USER = "\x72\157\x6f\164"; Ed33: if (isset($LI_DB_PASS)) { goto A084; } $LI_DB_PASS = "\x72\x6f\157\164"; goto d038; E7ba: $LI_DB = "\x6c\151\166\x65\x69\155\160\x6f\x72\x74"; a29e: if (isset($LI_DB_SERV)) { goto df46; } $LI_DB_SERV = "\x6c\157\143\x61\x6c\x68\x6f\163\164"; df46: goto a711; Ec83: if (!$F06) { goto e156; } ?>
        <h3 style="color: red"><?php  echo $F06; ?>
</h3>
    <?php  e156: goto bf96; e486: $LI_DB_PASS = $_POST["\160\141\x73\163"]; if (!li_db_connect()) { goto ae1d; } fD4("\x4c\111\x5f\104\x42", $LI_DB); FD4("\114\111\137\x44\102\x5f\123\105\x52\126", $LI_DB_SERV); Fd4("\x4c\111\x5f\104\x42\x5f\125\x53\105\122", $LI_DB_USER); goto aff0; d038: A084: require f0 . "\x6c\151\x62\57\x63\x6f\x64\145\57\143\145\x32\61\x2e\160\150\160"; ?>

<form data-ajax="false" action="<?php  B7(); ?>
db" method="post">

    <?php  goto Ec83; bf96: ?>

    <h2> MySQL Database Details </h2>

    <p><?php  echo bc; ?>
 requires database to keep data.</p>

    <p>Server: <input type="text" name="serv" value="<?php  echo $LI_DB_SERV; ?>
"></p>
    <p>User: <input type="text" name="user" value="<?php  goto F81a; aa3f: $F06 = false; if (!($_SERVER["\122\105\121\x55\x45\x53\124\137\x4d\x45\124\110\117\x44"] == "\x50\117\123\x54")) { goto e933; } $LI_DB = $_POST["\x64\141\164\141\142\141\x73\x65"]; $LI_DB_SERV = $_POST["\x73\x65\x72\x76"]; $LI_DB_USER = $_POST["\x75\163\x65\x72"]; goto e486; Da7d: ?>
"></p>

    <input type="submit" data-direction="reverse" data-inline="true" data-icon="check" data-theme="b" value="Connect"/>


</form>
