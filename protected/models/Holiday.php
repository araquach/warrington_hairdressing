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

	const APPROVED_Y = 2;
	const APPROVED_N = 1;
	const APPROVED_P = 0;
	
	const PREBOOKED_Y = 1;
	const PREBOOKED_N = 0;
	

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
			array('approved','numerical', 'integerOnly'=>true),
			array('prebooked','numerical', 'integerOnly'=>true),
			
			array('prebooked', 'filter', 'filter'=>array( $this, 'filterPreBooked')),
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
			'staff_id' => 'Staff',
			'hours_requested' => 'Days Requested',
			'prebooked' => 'Prebooked',
			'request_date_from' => 'From',
			'request_date_to' => 'To',
			'approved' => 'Approved',
			'requested_on_date' => 'Requested On',
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
			self::APPROVED_P => 'Pending',
		);
	} 
	
	public function getApprovedText() {
			$approvedOptions=$this->approvedOptions;
			return isset($approvedOptions[$this->approved]) ? $approvedOptions[$this->approved] : "unknown ({$this->approved})";
	}
	
	public function getPrebookedOptions() {
		return array(
			self::PREBOOKED_Y => 'Yes',
			self::PREBOOKED_N => 'No',
		);
	}
	
	public function getPrebookedText() {
			$prebookedOptions=$this->prebookedOptions;
			return isset($prebookedOptions[$this->prebooked]) ? $prebookedOptions[$this->prebooked] : "unknown ({$this->prebooked})";
	}
	
	
	public function beforeSave()
	{
		if($this->isNewRecord)
		
		$this->hours_requested=$this->hours_requested * 8;
		
		return parent::beforeSave();
	}
	
	public function hourConverter()
	{
	
		$conversion = $this->hours_requested;
		$conversion = $conversion / 8;
		
		return $conversion;
	}
	
	public function totalHoliday()
	{
		$cmd = Yii::app()->db->createCommand();
		$cmd->select = ('sum(hours_requested)');
		$cmd->from = 'holiday';
		$cmd->where = 'staff_id=' . Yii::app()->user->id;
		$total = $cmd->queryScalar();
		
		$total =$total / 8;
		
		return $total;

	}
	
	public function filterPreBooked()
	{
		
		$prebooked = $this->prebooked;
		$request = $this->request_date_from;
		$date = date('Y-m-d', strtotime('+2 week'));		
		if ($date < $request) {
			$prebooked = 1;
		}
		
		return $prebooked;
	}
	
}