<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
	  <img src="<?php echo $logo; ?>" alt="Новая почта" title="Новая почта" style="height: 36px; margin-right: 20px; ">
        <button type="submit" form="form-city" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo $heading_title; ?></h1>
      <ul class="breadcrumb">
        <?php foreach ($breadcrumbs as $breadcrumb) { ?>
        <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="container-fluid">
   <?php if ($error_warning) { ?>
    <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $text_form; ?></h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-city" class="form-horizontal">

        <div class="tab-content">
          <ul class="nav nav-tabs" id="language">
            <?php foreach ($languages as $language) { ?>
            <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>
            <?php } ?>
          </ul>
         <div class="tab-content">
           <?php foreach ($languages as $language) { ?>
           <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-name<?php echo $language['language_id']; ?>"><?php echo $entry_name; ?></label>
            <div class="col-sm-10">
              <input type="text" name="name[<?php echo $language['language_id']; ?>]" value="<?php echo $city[$language['language_id']]['name']; ?>" placeholder="<?php echo $entry_name; ?>" id="input-name<?php echo $language['language_id']; ?>" class="form-control" />
              <?php if ($error_name) { ?>
              <div class="text-danger"><?php echo $error_name; ?></div>
              <?php } ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-entry-zone<?php echo $language['language_id']; ?>"><?php echo $entry_zone; ?></label>
            <div class="col-sm-10">
              <select name="zone[<?php echo $language['language_id']; ?>]" id="input-entry-zone<?php echo $language['language_id']; ?>" class="form-control">
                <?php foreach ($zones[$language['language_id']] as $value) { ?>
                <?php if ($value['code']==$zone) { ?>
                <option value="<?php echo $value['code']; ?>" selected="selected"><?php echo $value['name']; ?></option>
                <?php } else { ?>
                <option value="<?php echo $value['code']; ?>"><?php echo $value[$language['language_id']]['name']; ?></option>
                <?php } ?>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-status<?php echo $language['language_id']; ?>"><?php echo $entry_status; ?></label>
            <div class="col-sm-10">
              <select name="status[<?php echo $language['language_id']; ?>]" id="input-status<?php echo $language['language_id']; ?>" class="form-control">
                <?php if ($status) { ?>
                <option value="1" selected="selected"><?php echo $text_enabled; ?></option>
                <option value="0"><?php echo $text_disabled; ?></option>
                <?php } else { ?>
                <option value="1"><?php echo $text_enabled; ?></option>
                <option value="0" selected="selected"><?php echo $text_disabled; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
           </div>
           <?php } ?>
         </div>
        </div>

        </form>

    </div>
  </div>
</div>
</div>
<script type="text/javascript"><!--
function country(element, area) {
  if (element.value != '') {
		$.ajax({
			url: 'index.php?route=localisation/city/country&token=<?php echo $token; ?>&country_id=' + element.value,
			dataType: 'json',
			beforeSend: function() {
				$('select[name=\'country_id\']').after(' <i class="fa fa-circle-o-notch fa-spin"></i>');
			},
			complete: function() {
				$('.fa-spin').remove();
			},
			success: function(json) {
                $('.fa-spin').remove();
				html = '<option value=""><?php echo $text_select; ?></option>';

				if (json['zone'] != '') {
					for (i = 0; i < json['zone'].length; i++) {
						html += '<option value="' + json['zone'][i]['zone_id'] + '"';

						if (json['zone'][i]['zone_id'] == zone_id) {
							html += ' selected="selected"';
						}

						html += '>' + json['zone'][i]['name'] + '</option>';
					}
				} else {
					html += '<option value="0"><?php echo $text_none; ?></option>';
				}

				$('select[name=\'zone_id\']').html(html);
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	}
}

$('select[name$=\'country_id\']').trigger('change');
//--></script>
<?php echo $footer; ?>
