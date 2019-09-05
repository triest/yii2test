<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "events".
 *
 * @property int $id
 * @property int $name
 * @property int $description
 * @property int $city_id
 * @property string $begin
 * @property int $max_people
 * @property int $region_id
 * @property int $country_ud
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'events';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'required'],
            [['name', 'description', 'city_id', 'max_people', 'region_id', 'country_ud'], 'integer'],
            [['begin'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'city_id' => 'City ID',
            'begin' => 'Begin',
            'max_people' => 'Max People',
            'region_id' => 'Region ID',
            'country_ud' => 'Country Ud',
        ];
    }
}
