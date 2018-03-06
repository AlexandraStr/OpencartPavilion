<?php if ($error_warning) { ?>
<div class="alert alert-warning"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?></div>
<?php } ?>
<fieldset id="shipping">
<?php if ($shipping_methods) { ?>
  <p><strong><?php echo $text_shipping_method; ?></strong></p>
<?php foreach ($shipping_methods as $shipping_method) { ?>
<p><strong><?php echo $shipping_method['title']; ?></strong></p>
<?php if (!$shipping_method['error']) { ?>
<?php foreach ($shipping_method['quote'] as $quote) { ?>

<div class="radio">
  <label>
    <?php if ($quote['code'] == $code || !$code) { ?>
    <?php $code = $quote['code']; ?>
    <input type="radio" name="shipping_method" value="<?php echo $quote['code']; ?>" checked="checked" />
    <?php } else { ?>
    <input type="radio" name="shipping_method" value="<?php echo $quote['code']; ?>" />
    <?php } ?>
    <?php echo $quote['title']; ?> -
    <span class="<?php echo substr($quote['code'],0,strpos($quote['code'],'.')); ?>" ><?php echo $quote['text']; ?></span>
    <?php if (isset($quote['description'])) { ?>
    <br /><small><?php echo $quote['description']; ?></small>
    <?php } ?>
  </label>
</div>
<?php } ?>
<?php } else { ?>
<div class="alert alert-danger"><?php echo $shipping_method['error']; ?></div>
<?php } ?>
<?php } ?>
<?php } ?>
</fieldset>
<script type="text/javascript"><!--
    $('#shipping input[type="radio"] ').on('change', function () {

        if ($('#shipping input[type="radio"]:checked').val() == 'novaposhta.novaposhta') {
            $('#address .payment-address-1').addClass('hide');
            $('#address .shipping-city').removeClass('hide');
            $('#address .shipping-zone').removeClass('hide');
            $('#address .shipping-address-1').removeClass('hide');
            $.ajax({
                url: 'index.php?route=checkout/checkout/country&country_id=220',
                dataType: 'json',
                success: function(json) {

                    html = '<option value=""><?php echo $text_select; ?></option>';

                    if (json['zone'] && json['zone'] != '') {
                        for (i = 0; i < json['zone'].length; i++) {
                            html += '<option value="' + json['zone'][i]['code'] + '"';

                            if (json['zone'][i]['code'] == '<?php echo $zone_id; ?>') {
                                html += ' selected="selected"';
                            }

                            html += '>' + json['zone'][i]['name'] + '</option>';
                        }
                    } else {
                        html += '<option value="0" selected="selected"><?php echo $text_none; ?></option>';
                    }

                    $('#address select[name=\'zone_id\']').html(html);
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
            });

        } else {
            $('#address .payment-address-1').removeClass('hide');
            $('#address .shipping-city').addClass('hide');
            $('#address .shipping-zone').addClass('hide');
            $('#address .shipping-address-1').addClass('hide');
        }

    });

    //--></script>

