<?php

namespace kouosl\tag\models;

use Yii;

/**
 * This is the model class for table "tag".
 *
 * @property int $id
 * @property string $tag_name
 * @property string $tag_cat
 * @property string $content
 */
class Tag extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tag';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'tag_name', 'tag_cat', 'content'], 'required'],
            [['id'], 'integer'],
            [['tag_name', 'tag_cat', 'content'], 'string'],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tag_name' => 'Tag Name',
            'tag_cat' => 'Tag Cat',
            'content' => 'Content',
        ];
    }
}
