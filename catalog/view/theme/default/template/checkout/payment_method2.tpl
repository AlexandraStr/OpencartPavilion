<?php if ($error_warning) { ?>
<div class="alert alert-warning"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?></div>
<?php } ?>
<fieldset id="payment">
<?php if ($payment_methods) { ?>
  <p><strong><?php echo $text_payment_method; ?></strong></p>
<?php foreach ($payment_methods as $payment_method) { ?>
<div class="radio">
  <label>
    <?php if ($payment_method['code'] == $code || !$code) { ?>
    <?php $code = $payment_method['code']; ?>
    <input type="radio" name="payment_method" value="<?php echo $payment_method['code']; ?>" checked="checked" />
    <?php } else { ?>
    <input type="radio" name="payment_method" value="<?php echo $payment_method['code']; ?>" />
    <?php } ?>
    <?php echo $payment_method['title']; ?>
    <?php if ($payment_method['terms']) { ?>
    (<?php echo $payment_method['terms']; ?>)
    <?php } ?>
    <?php if (isset($payment_method['description'])) { ?>
    <br /><small><?php echo $payment_method['description']; ?></small>
    <?php } ?>
  </label>
</div>
<?php } ?>
<?php } ?>
</fieldset>
<div  id="comments">
<p><strong><?php echo $text_comments; ?></strong></p>
<p>
  <textarea name="comment" rows="8" class="form-control"><?php echo $comment; ?></textarea>
</p>
</div>
<?php if ($text_agree) { ?>
<div class="buttons hide">
  <div class="pull-right"><?php echo $text_agree; ?>
    <?php if ($agree) { ?>
    <input type="checkbox" name="agree" value="1" checked="checked" />
    <?php } else { ?>
    <input type="checkbox" name="agree" value="1" checked="checked" />
    <?php } ?>   
  </div>
</div>
<?php } else { ?>

<?php } ?>
