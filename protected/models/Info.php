<?php

/**
 * This is the model class for table "{{info}}".
 *
 * The followings are the available columns in table '{{info}}':
 * @property integer $id
 * @property string $lang
 * @property string $fio
 * @property string $telephone
 * @property string $jabber
 * @property string $email
 * @property string $skype
 * @property string $icq
 * @property string $university
 * @property string $study_per
 * @property string $diploma
 * @property string $urluni
 * @property string $unicountry
 * @property string $maintitle
 * @property string $namepage
 * @property string $profession
 * @property string $quality
 * @property string $exp
 */
class Info extends CActiveRecord
{

    public function defaultScope() {
        return array(
            'condition' => "lang='".Yii::app()->language."'",
        );
    }
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Info the static model class
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
		return '{{info}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lang, fio, telephone', 'required'),
			array('lang', 'length', 'max'=>2),
			array('fio, university, study_per, diploma, urluni, unicountry, maintitle, namepage, profession', 'length', 'max'=>100),
			array('telephone', 'length', 'max'=>15),
			array('jabber, email, skype, icq', 'length', 'max'=>30),
			array('quality, exp', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, lang, fio, telephone, jabber, email, skype, icq, linkedin, university, study_per, diploma, urluni, unicountry, maintitle, namepage, profession, quality, exp', 'safe', 'on'=>'search'),
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
			'lang' => 'Lang',
			'fio' => 'Fio',
			'telephone' => 'Telephone',
			'jabber' => 'Jabber',
			'email' => 'Email',
			'skype' => 'Skype',
			'icq' => 'Icq',
			'linkedin' => 'Linkedin',
			'university' => 'University',
			'study_per' => 'Study Per',
			'diploma' => 'Diploma',
			'urluni' => 'Urluni',
			'unicountry' => 'Unicountry',
			'maintitle' => 'Maintitle',
			'namepage' => 'Namepage',
			'profession' => 'Profession',
			'quality' => 'Quality',
			'exp' => 'Exp',
		);
	}

    public function language($lang){
        $this->getDbCriteria()->mergeWith(array(
            'condition' => "language='$lang'",
        ));
        return $this;
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
		$criteria->compare('language',$this->language,true);
		$criteria->compare('fio',$this->fio,true);
		$criteria->compare('telephone',$this->telephone,true);
		$criteria->compare('jabber',$this->jabber,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('skype',$this->skype,true);
		$criteria->compare('icq',$this->icq,true);
		$criteria->compare('linkedin',$this->linkedin,true);
		$criteria->compare('university',$this->university,true);
		$criteria->compare('study_per',$this->study_per,true);
		$criteria->compare('diploma',$this->diploma,true);
		$criteria->compare('urluni',$this->urluni,true);
		$criteria->compare('unicountry',$this->unicountry,true);
		$criteria->compare('maintitle',$this->maintitle,true);
		$criteria->compare('namepage',$this->namepage,true);
		$criteria->compare('profession',$this->profession,true);
		$criteria->compare('quality',$this->quality,true);
		$criteria->compare('exp',$this->exp,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}