<?php

/**
 * This is the model class for table "{{work}}".
 *
 * The followings are the available columns in table '{{work}}':
 * @property integer $id
 * @property string $namecompany
 * @property string $lang
 * @property string $urlcompany
 * @property string $countrycompany
 * @property string $position
 * @property string $respon
 * @property string $period
 * @property string $pub_date
 */
class Work extends CActiveRecord
{
    public function defaultScope() {
        return array(
            'condition' => "lang='".Yii::app()->language."'",
        );
    }
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Work the static model class
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
		return '{{work}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('namecompany, lang, user_id', 'required'),
			array('namecompany, urlcompany', 'length', 'max'=>128),
			array('lang', 'length', 'max'=>2),
			array('countrycompany, position, period', 'length', 'max'=>100),
			array('respon, pub_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, namecompany, lang, urlcompany, countrycompany, position, respon, period, pub_date', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'namecompany' => 'Namecompany',
			'lang' => 'Lang',
			'urlcompany' => 'Urlcompany',
			'countrycompany' => 'Countrycompany',
			'position' => 'Position',
			'respon' => 'Respon',
			'period' => 'Period',
			'pub_date' => 'Pub Date',
            'user_id' => 'Id пользователя',
		);
	}



     // public function lang($lang){
     //     $this->getDbCriteria()->mergeWith(array(
     //                    'condition' => "lang='$lang'",
     //      ));
     //    return $this;
     //   }

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
		$criteria->compare('namecompany',$this->namecompany,true);
		$criteria->compare('lang',$this->lang,true);
		$criteria->compare('urlcompany',$this->urlcompany,true);
		$criteria->compare('countrycompany',$this->countrycompany,true);
		$criteria->compare('position',$this->position,true);
		$criteria->compare('respon',$this->respon,true);
		$criteria->compare('period',$this->period,true);
		$criteria->compare('pub_date',$this->pub_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}