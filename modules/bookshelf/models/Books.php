<?php

namespace app\modules\bookshelf\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property string $Isbn
 * @property string $Title
 * @property string $Author
 * @property string $Genre
 * @property string $Summary
 * @property string $Title_page
 * @property string $date_published
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     * 
     * 
     */
    public $file;
    public function rules()
    {
        return [
            [['Isbn', 'Title', 'Author', 'Genre', 'Summary',  ], 'required'],
            [['Genre', 'Summary'], 'string'],
            [['date_published'], 'safe'],
            [['Isbn'], 'string', 'max' => 10],
            [['Title','Title_page'], 'string', 'max' => 200],
        [['file'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
            [['Author'], 'string', 'max' => 100],
            [['Isbn'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Isbn' => 'Isbn',
            'Title' => 'Title',
            'Author' => 'Author',
            'Genre' => 'Genre',
            'Summary' => 'Summary',
            'Title_page' => 'Title Page',
            'date_published' => 'Date Published',
        ];
    }
}
