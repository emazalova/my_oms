<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>By_Supervisor</title> 
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/superCreate.css" />

	<!-- <?php Yii::app()->bootstrap->register(); ?>-->
</head>
<body>
    <div class="container">
        <div class="row ">
            <div class='span10 offset1'>
                <fieldset>
                    <legend>Item Create</legend>
                   
                        <?php /** @var BootActiveForm $form */
                          $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
                            'id'=>'horizontalForm',
                            'type'=>'horizontal',
                          )); 
                        ?>
                    <div class="row">
                      <?php echo $form->textFieldRow($model, 'Item_Number', array('hint'=>'')); ?>
                    </div>
                    <div class="row">
                        <?php echo $form->textFieldRow($model, 'Item_Name', array('hint'=>'')); ?>
                    </div>
                     <div class="row">
                        <?php echo $form->textFieldRow($model, 'ItemDescription', array('hint'=>'')); ?>
                    </div>
                    <div class="row">
                      <?php echo $form->dropDownListRow($model, 'Demension', array('item','box','package')); ?>
                    </div>
                    <div class="row">
                        <?php echo $form->textFieldRow($model, 'Price', array('hint'=>'')); ?>
                    </div>
                    <div class="row">
                        <?php echo $form->textFieldRow($model, 'Quantity',array('hint'=>'')); ?>
                    </div>

                    <div class="row">
                        <div class=" offset1">
                             <?php $this->widget('bootstrap.widgets.TbButton', 
                                  array('buttonType'  => 'submit', 
                                      'type'  => 'info', 
                                                'label' => 'Create',
                                        'size'=> 'large',)); 
                               ?>
                              <?php $this->widget('bootstrap.widgets.TbButton', 
                                    array('buttonType'  => 'reset', 
                                      'type'  => 'primary', 
                                      'label' => 'Reset ',
                                        'size'=> 'large',
                                           )); 
                                 ?>
                                <?php $this->endWidget(); ?>
                        </div>
                    </div>
               
                </fieldset>
            </div>
         </div> 
    </div>
</body>
</html>   

	
