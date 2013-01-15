<?php

/**
 * This is the model class for table "holiday".
 *
 * The followings are the available columns in table 'holiday':
 * @property integer $id
 * @property integer $staff_id
 * @property integer $hours_requested
 * @property integer $prebooked
 * @property integer $request_date_from
 * @property integer $request_date_to
 * @property integer $approved
 * @property integer $requested_on_date
 *
 * The followings are the available model relations:
 * @property Staff $staff
 */
class Holiday extends SalonActiveRecord
{

	const APPROVED_Y = 1;
	const APPROVED_N = 0;

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Holiday the static model class
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
		return 'holiday';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('hours_requested, request_date_from, request_date_to', 'required'),
			array('prebooked',  'numerical', 'integerOnly'=>true),
			array('hours_requested',  'numerical'),
			//array('request_date_from, request_date_to', 'date'),
			array('requested_on_date','default','value'=>new CDbExpression('NOW()'),'setOnEmpty'=>false,'on'=>'insert'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, staff_id, hours_requested, prebooked, request_date_from, request_date_to, approved, requested_on_date', 'safe', 'on'=>'search'),
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
			'hours_requested' => 'Days Requested',
			'prebooked' => 'Prebooked',
			'request_date_from' => 'Request Date From',
			'request_date_to' => 'Request Date To',
			'approved' => 'Approved',
			'requested_on_date' => 'Requested On Date',
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
		$criteria->compare('hours_requested',$this->hours_requested);
		$criteria->compare('prebooked',$this->prebooked);
		$criteria->compare('request_date_from',$this->request_date_from);
		$criteria->compare('request_date_to',$this->request_date_to);
		$criteria->compare('approved',$this->approved);
		$criteria->compare('requested_on_date',$this->requested_on_date);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getApprovedOptions() {
		return array(
			self::APPROVED_Y => 'Yes',
			self::APPROVED_N => 'No',
		);
	}
	
	public function getApprovedText() {
			$approvedOptions=$this->approvedOptions;
			return isset($approvedOptions[$this->approved]) ? $approvedOptions[$this->approved] : "unknown position ({$this->approved})";
	}
	
	
	public function afterValidate()
	{
		$this->hours_requested=$this->hours_requested * 8;
		
		return parent::afterValidate();
	}
	
	public function hourConverter()
	{
		$conversion = $this->hours_requested;
		
		$conversion = $conversion / 8;
		
		return $conversion;
	}
	
	
}