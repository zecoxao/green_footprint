<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
<script>
var geocoder = new google.maps.Geocoder();
jQuery(document).ready(function($) {
// Calculate sub-sums on any form changes
    $("#empresa-form").change(function() {
	  var lat = document.getElementById('Empresa_latitude').value;
	  var lng = document.getElementById('Empresa_longitude').value;
	  var latlng = new google.maps.LatLng(lat, lng);
	  var loc = document.getElementById('Empresa_localidade');
	  geocoder.geocode({'latLng': latlng}, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
		  if (results[1]) {
			
			loc.value = results[1].formatted_address;
			
		  } else {
			alert('No results found');
		  }
		} else {
		  alert('Geocoder failed due to: ' + status);
		}
	  });
	});
});
</script>
<div class="form">
    <?php
    /** @var EmpresaController $this */
    /** @var Empresa $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'empresa-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> false,
    )); ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>

                            <?php echo $form->textFieldRow($model, 'nome', array('class' => 'span5', 'maxlength' => 50)) ?>
                        <?php echo $form->textFieldRow($model, 'latitude', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'longitude', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'localidade', array('class' => 'span5', 'maxlength' => 50)) ?>
                        <?php echo $form->dropDownListRow($model, 'cae', CHtml::listData(Cae::model()->findAll(), 'id', Cae::representingColumn())) ?>
                <div class="form-actions">
                <?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? Yii::t('AweCrud.app', 'Create') : Yii::t('AweCrud.app', 'Save'),
		)); ?>
        <?php $this->widget('bootstrap.widgets.TbButton', array(
			//'buttonType'=>'submit',
			'label'=> Yii::t('AweCrud.app', 'Cancel'),
			'htmlOptions' => array('onclick' => 'javascript:history.go(-1)')
		)); ?>
    </div>

    <?php $this->endWidget(); ?>
</div>