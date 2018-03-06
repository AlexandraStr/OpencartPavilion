<?php echo $header; ?>
<div class="container">
  <ul class="breadcrumb bread">
    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
    <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
    <?php } ?>
  </ul>
  <?php if ($error_warning) { ?>
  <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
  </div>
  <?php } ?>
  <div class="row"><?php echo $column_left; ?>
    <?php if ($column_left && $column_right) { ?>
    <?php $class = 'col-sm-6'; ?>
    <?php } elseif ($column_left || $column_right) { ?>
    <?php $class = 'col-sm-9'; ?>
    <?php } else { ?>
    <?php $class = 'col-sm-12'; ?>
    <?php } ?>
    <div id="content" class="<?php echo $class; ?>"><?php echo $content_top; ?>
      <h1><?php echo $heading_title; ?></h1>
		<div class="confirm-wrapper row">
			<div class="client-info col-sm-6"></div>
			<div class="s-p col-sm-6">
				<div class="ship-pay"></div>
			</div>
			<div class="coment col-sm-12 clearfix"></div>
			  
		</div>
		<div class="row">
		<div class="col-sm-12" style="text-align: right;"><input type="button" value="<?php echo $button_check; ?>" id="button-prover" data-loading-text="<?php echo $text_waiting; ?>" class="btn btn-primary" /></div>
			<br><br>
		</div>
		<div class="row">
		<div class="confirm-all col-sm-12"></div>
		</div>
      <?php echo $content_bottom; ?></div>
    <?php echo $column_right; ?></div>
</div>
<script>
<?php if (1) { ?>
console.log('not logged, checkout/guest');
 $.ajax({
        url: 'index.php?route=checkout/guest2',
        dataType: 'html',
        success: function(html) {
            $('.client-info').html(html);		
			 $.ajax({
        url: 'index.php?route=checkout/guest2/save',
        type: 'post',
        data: $('.confirm-wrapper input[type=\'text\'], .confirm-wrapper input[type=\'date\'], .confirm-wrapper input[type=\'datetime-local\'], .confirm-wrapper input[type=\'time\'], .confirm-wrapper input[type=\'checkbox\']:checked, .confirm-wrapper input[type=\'radio\']:checked, .confirm-wrapper input[type=\'hidden\'], .confirm-wrapper textarea, .confirm-wrapper select'),
        dataType: 'json',
        beforeSend: function() {
       		$('#button-prover').button('loading');
	    },
        success: function(json) {
            $('.alert, .text-danger').remove();
			//console.log(json);
			$('.has-error').removeClass('has-error');
			$('#button-prover').button('reset');
            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                if (json['error']['warning']) {
                    $('.confirm-wrapper').prepend('<div class="alert alert-warning">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
                }

				for (i in json['error']) {
					var element = $('#input-payment-' + i.replace('_', '-'));

					if ($(element).parent().hasClass('input-group')) {
						$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');
					} else {
						$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');
					}
				}

				// Highlight any found errors
				$('.text-danger').parent().addClass('has-error');
            } else {
				//console.log('checkout/guest2/save ok');       							
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    });
			shipping();
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    });
<?php } else { ?>
console.log('error');
<?php } ?>
function shipping() {
//console.log('checkout/shipping_method');
 $.ajax({
        url: 'index.php?route=checkout/shipping_method2',
        dataType: 'html',
        success: function(html) {
            $('.ship-pay').html(html);	
			
			payment();			
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    });	
}
function payment() {
//console.log('checkout/payment_method');
 $.ajax({
        url: 'index.php?route=checkout/payment_method2',
        dataType: 'html',
        success: function(html) {
            $('.ship-pay').append(html);			
			var comments = $('#comments');
			comments.detach();
			comments.appendTo('.coment');			
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    });	
}

$('#button-prover').click(function(){
	    $.ajax({
        url: 'index.php?route=checkout/guest2/save',
        type: 'post',
        data: $('.confirm-wrapper input[type=\'text\'], .confirm-wrapper input[type=\'date\'], .confirm-wrapper input[type=\'datetime-local\'], .confirm-wrapper input[type=\'time\'], .confirm-wrapper input[type=\'checkbox\']:checked, .confirm-wrapper input[type=\'radio\']:checked, .confirm-wrapper input[type=\'hidden\'], .confirm-wrapper textarea, .confirm-wrapper select'),
        dataType: 'json',
        beforeSend: function() {
       		$('#button-prover').button('loading');
	    },
        success: function(json) {
            $('.alert, .text-danger').remove();
			//console.log(json);
			$('.has-error').removeClass('has-error');
			$('#button-prover').button('reset');
            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                if (json['error']['warning']) {
                    $('.confirm-wrapper').prepend('<div class="alert alert-warning">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
                }

				for (i in json['error']) {
					var element = $('#input-payment-' + i.replace('_', '-'));

					if ($(element).parent().hasClass('input-group')) {
						$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');
					} else {
						$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');
					}
				}

				// Highlight any found errors
				$('.text-danger').parent().addClass('has-error');
            } else {
			//	console.log('checkout/guest/save ok');
			
			/// next level of check
				    $.ajax({
						url: 'index.php?route=checkout/guest_shipping2/save',
						type: 'post',
						data: $('.confirm-wrapper input[type=\'text\'], .confirm-wrapper input[type=\'date\'], .confirm-wrapper input[type=\'datetime-local\'], .confirm-wrapper input[type=\'time\'], .confirm-wrapper input[type=\'password\'], .confirm-wrapper input[type=\'checkbox\']:checked, .confirm-wrapper input[type=\'radio\']:checked, .confirm-wrapper textarea, .confirm-wrapper select'),
						dataType: 'json',
						beforeSend: function() {
							$('#button-prover').button('loading');
						},
						success: function(json) {
							$('.alert, .text-danger').remove();
						//	console.log(json);
							$('.has-error').removeClass('has-error');
							$('#button-prover').button('reset');
							if (json['redirect']) {
								location = json['redirect'];
							} else if (json['error']) {
								$('#button-prover').button('reset');

								if (json['error']['warning']) {
									$('.confirm-wrapper').prepend('<div class="alert alert-danger">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
								}
							} else {
							//	console.log('checkout/guest_shipping/save ok');
									// need deeper =)
									 $.ajax({
										url: 'index.php?route=checkout/shipping_method2/save',
										type: 'post',
										data: $('.confirm-wrapper input[type=\'radio\']:checked, .confirm-wrapper textarea'),
										dataType: 'json',
										beforeSend: function() {
											$('#button-prover').button('loading');
										},
										success: function(json) {
											$('.alert, .text-danger').remove();
										//	console.log(json);
											$('.has-error').removeClass('has-error');
											$('#button-prover').button('reset');
											if (json['redirect']) {
												location = json['redirect'];
											} else if (json['error']) {
												$('#button-prover').button('reset');

												if (json['error']['warning']) {
													$('.confirm-wrapper').prepend('<div class="alert alert-danger">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
												}
											} else {
											//	console.log('checkout/shipping_method/save ok');
													// need deeper2 =) psyment check 
													    $.ajax({
															url: 'index.php?route=checkout/payment_method2/save',
															type: 'post',
															data: $('.confirm-wrapper input[type=\'radio\']:checked, .confirm-wrapper input[type=\'checkbox\']:checked, .confirm-wrapper textarea'),
															dataType: 'json',
															beforeSend: function() {
																$('#button-prover').button('loading');
															},
															success: function(json) {
																$('.alert, .text-danger').remove();
													//			console.log(json);
																
																$('.has-error').removeClass('has-error');
																$('#button-prover').button('reset');
																if (json['redirect']) {
																	location = json['redirect'];
																} else if (json['error']) {
																	$('#button-prover').button('reset');

																	$('#button-prover').button('reset');
																	if (json['error']['warning']) {
																		$('.confirm-wrapper').prepend('<div class="alert alert-danger">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
																	}
																} else {
																//	console.log('checkout/payment_method/save ok');
																	// more! more! load confirm
																	$.ajax({
																		url: 'index.php?route=checkout/confirm2',
																		dataType: 'html',
																		complete: function() {
																			$('#button-prover').button('reset');
																		},
																		success: function(html) {
																			$('.confirm-all').html(html);
																		},
																		error: function(xhr, ajaxOptions, thrownError) {
																			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
																		}
																	});
																}
															},
															error: function(xhr, ajaxOptions, thrownError) {
																alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
															}
														});
											}
										},
										error: function(xhr, ajaxOptions, thrownError) {
											alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
										}
									});
							}
						},
						error: function(xhr, ajaxOptions, thrownError) {
							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
						}
					});
				
				
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    });
});
</script>
<?php echo $footer; ?>
