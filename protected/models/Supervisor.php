<?php

/**
 * This is the model class for table "{{item}}".
 *
 * The followings are the available columns in table '{{item}}':
 * @property integer $Item_Number
 * @property string $Item_Name
 * @property string $ItemDescription
 * @property string $Demension
 * @property integer $Price
 * @property integer $Quantity
 */
class Supervisor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{item}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Item_Name, ItemDescription, Demension, Price, Quantity', 'required'),
			array('Price, Quantity', 'numerical', 'integerOnly'=>true),
			array('Item_Name', 'length', 'max'=>30),
			array('Demension', 'length', 'max'=>7),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Item_Number, Item_Name, ItemDescription, Demension, Price, Quantity', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Item_Number' => 'Item Number',
			'Item_Name' => 'Item Name',
			'ItemDescription' => 'Item Description',
			'Demension' => 'Dimension',
			'Price' => 'Price',
			'Quantity' => 'Quantity',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('Item_Number',$this->Item_Number);
		$criteria->compare('Item_Name',$this->Item_Name,true);
		$criteria->compare('ItemDescription',$this->ItemDescription,true);
		$criteria->compare('Demension',$this->Demension,true);
		$criteria->compare('Price',$this->Price);
		$criteria->compare('Quantity',$this->Quantity);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ItemSupervizor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
