<?php
/*
LiveImport (c) MaxD, 2017. Write to liveimport@devs.mx for support and purchase.
*/
 goto f089; C757: if ($B15 == sha1($_POST["\160\141\163\x73\x77\x6f\x72\x64"])) { goto c2d7; } $F06 = "\111\156\x76\x61\154\151\x64\40\x70\x61\163\163\x77\x6f\x72\x64\41"; goto df81; c2d7: c1E(); goto Babd; E73a: $Cab = true; b440: $F06 = false; if (!($_SERVER["\x52\105\121\125\x45\x53\124\x5f\115\x45\124\110\x4f\x44"] == "\120\117\123\x54")) { goto c202; } if ($Cab) { goto d99e; } goto C757; d127: $F06 = "\x50\x61\163\163\x77\x6f\x72\144\x73\40\144\157\145\163\x6e\x27\164\x20\x6d\141\164\143\x68\x2c\x20\x74\162\171\40\141\147\141\x69\x6e\x2e"; c5d6: FD4("\x4c\x49\x5f\x50\x41\x53\x53", sha1($_POST["\160\x61\163\163\167\157\162\x64"])); C1e(); EC(''); goto baab; baab: C1ca: c202: require f0 . "\x6c\151\142\57\143\157\x64\x65\57\x63\x65\x32\x31\56\160\150\x70"; ?>

<form data-ajax="false" action="<?php  b7(); goto d90c; Babd: Ec(''); df81: goto C1ca; d99e: if (!($_POST["\x70\141\x73\x73\x77\157\x72\144"] != $_POST["\x70\x61\x73\x73\x77\x6f\x72\x64\62"])) { goto c5d6; } goto d127; b699: ?>
 Login </h2>

        <p>Password: <input type="password" name="password"></p>

    <?php  goto Ec7d; cb3b: ?>

        <h2> Access Protection </h2>

        <p>Welcome to LiveImport! Lets record access password.</p>

        <p>Password: <input type="password" name="password"></p>
        <p>Once again: <input type="password" name="password2"></p>

    <?php  Ec7d: goto d752; f089: $Cab = @$_GET["\143\150\x61\156\147\145"]; if (!isset($_POST["\x70\141\x73\163\167\157\x72\x64\62"])) { goto Db7c; } $Cab = true; Db7c: if (AB()) { goto C0f6; } goto d6f3; d6f3: if (!$Cab) { goto D189; } $Cab = false; D189: goto ca22; C0f6: goto c808; f8aa: B697: ?>

    <?php  if ($Cab) { goto cb3b; } ?>

        <h2> <?php  echo bc; goto b699; d90c: ?>
login" method="post">

    <?php  if (!$F06) { goto B697; } ?>
        <h3 style="color: red"><?php  echo $F06; ?>
</h3>
    <?php  goto f8aa; c808: if ($Cab) { goto Bc04; } eC(''); Bc04: ca22: if (!empty($B15)) { goto b440; } goto E73a; d752: ?>

    <input type="submit" data-direction="reverse" data-inline="true" data-icon="check" data-theme="b" value="OK"/>


</form>
