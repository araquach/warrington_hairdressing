<?php

/**
 * This is the model class for table "feedback_input".
 *
 * The followings are the available columns in table 'feedback_input':
 * @property integer $id
 * @property integer $date
 * @property string $client_first
 * @property string $client_second
 * @property string $mobile
 * @property integer $intro
 * @property integer $consultation
 * @property integer $styling_area
 * @property integer $stylist_appearance
 * @property integer $prod_advice
 * @property integer $styling_advice
 * @property integer $internal_marketing
 * @property integer $value_for_money
 * @property integer $whole_experience
 * @property integer $end_result
 * @property string $extra
 * @property integer $stylist_id
 */
class Feedback extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Feedback the static model class
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
		return 'feedback';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('client_first, client_second, mobile, intro, consultation, styling_area, stylist_appearance, prod_advice, styling_advice, internal_marketing, value_for_money, whole_experience, end_result, stylist_id', 'required'),
			array('intro, consultation, styling_area, stylist_appearance, prod_advice, styling_advice, internal_marketing, value_for_money, whole_experience, end_result, stylist_id', 'numerical', 'integerOnly'=>true),
			array('date','default','value'=>new CDbExpression('NOW()'),'setOnEmpty'=>false,'on'=>'insert'),
			array('client_first, client_second', 'length', 'max'=>50),
			array('mobile', 'length', 'max'=>25),
			array('mobile', 'unique'),
			array('mobile', 'filter', 'filter'=>'trim'),
			array('extra', 'length', 'max'=>300),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, date, client_first, client_second, mobile, intro, consultation, styling_area, stylist_appearance, prod_advice, styling_advice, internal_marketing, value_for_money, whole_experience, end_result, extra, stylist_id', 'safe', 'on'=>'search'),
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
			'FeedbackStylist' => array(self::BELONGS_TO, 'FeedbackStylist', 'stylist_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'date'=> 'Date Submitted',
			'client_first' => 'First Name',
			'client_second' => 'Second Name',
			'mobile' => 'Mobile Number (no spaces)',
			'intro' => '1. How was the introduction to your stylist? Did they make you feel welcome and comfortable?',
			'consultation' => '2. Rate the consultation on these factors: Did the stylist listen to you?  Were they understanding?  Did they offer you professional advice and differering ideas? Did you feel comfortable with them?  Did you both come to a decision on what to go for?',
			'styling_area' => '3. Rate the cleanliness of the styling station you were sat on. Use these factors to make your judgement:  Clean and clear from other peoples hair cuttings, clean shelving unit, clean mirrors, clear of clutter and tools, general cleanliness',
			'stylist_appearance' => '4. How do you rate your stylists appearance',
			'prod_advice' => '5. Rate the level of product advice given to you by your stylist.',
			'styling_advice' => '6. Rate the level of styling advice given to you by your stylist.',
			'internal_marketing' => '7. We have 3 schemes in place to save you money on your visits to the salon? We have a Recommend a friend scheme, 10 percent pre-booking discount and a reward points system. How many of these were you informed about?',
			'value_for_money' => '8. How do you rate the your stylists pricing and value for money?',
			'whole_experience' => '9. How do you rate the experience as a whole on your last visit?',
			'end_result' => '10. How happy were you with the end result of your hair?',
			'extra' => 'Do you have any extra comments you would like to make?',
			'stylist_id' => 'Your Last Stylist',
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
		$criteria->compare('date',$this->date);
		$criteria->compare('client_first',$this->client_first,true);
		$criteria->compare('client_second',$this->client_second,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('intro',$this->intro);
		$criteria->compare('consultation',$this->consultation);
		$criteria->compare('styling_area',$this->styling_area);
		$criteria->compare('stylist_appearance',$this->stylist_appearance);
		$criteria->compare('prod_advice',$this->prod_advice);
		$criteria->compare('styling_advice',$this->styling_advice);
		$criteria->compare('internal_marketing',$this->internal_marketing);
		$criteria->compare('value_for_money',$this->value_for_money);
		$criteria->compare('whole_experience',$this->whole_experience);
		$criteria->compare('end_result',$this->end_result);
		$criteria->compare('extra',$this->extra,true);
		$criteria->compare('stylist_id',$this->stylist_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function score()
	{
		$a = $this->intro;
		$b = $this->consultation;
		$c = $this->styling_area;
		$d = $this->stylist_appearance;
		$e = $this->prod_advice;
		$f = $this->styling_advice;
		$g = $this->internal_marketing;
		$h = $this->value_for_money;
		$i = $this->whole_experience;
		$j = $this->end_result;
		
		$score = $a+$b+$c+$d+$e+$f+$g+$h+$i+$j;
		
		return $score;
	}
	
	
	
}