<?php

/**
 * This is the model class for table "turnover".
 *
 * The followings are the available columns in table 'turnover':
 * @property integer $id
 * @property integer $staff_id
 * @property string $date
 * @property integer $service_rev
 * @property integer $product_rev
 * @property integer $product_voucher
 *
 * The followings are the available model relations:
 * @property Staff $staff
 */
class Turnover extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Turnover the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'turnover';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date, service_rev, product_rev, product_voucher', 'required'),
			array('service_rev, product_rev, product_voucher', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, staff_id, date, service_rev, product_rev, product_voucher', 'safe', 'on'=>'search'),
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
			'staff' => array(self::BELONGS_TO, 'Staff', 'staff_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'staff_id' => 'Staff Member',
			'date' => 'Date',
			'service_rev' => 'Service Revenue',
			'product_rev' => 'Product Revenue',
			'product_voucher' => 'Product Voucher Deductions',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('staff_id',$this->staff_id);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('service_rev',$this->service_rev);
		$criteria->compare('product_rev',$this->product_rev);
		$criteria->compare('product_voucher',$this->product_voucher);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}