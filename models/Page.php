<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "page".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property int|null $count_view
 * @property string $status
 * @property string $created_at
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'page';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content', 'status'], 'required'],
            [['content', 'status'], 'string'],
            [['count_view'], 'integer'],
            [['created_at'], 'safe'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'count_view' => 'Count View',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }
}
