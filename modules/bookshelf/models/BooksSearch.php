<?php

namespace app\modules\bookshelf\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\bookshelf\models\Books;

/**
 * BooksSearch represents the model behind the search form of `app\modules\bookshelf\models\Books`.
 */
class BooksSearch extends Books
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Isbn', 'Title', 'Author', 'Genre', 'Summary', 'Title_page', 'date_published'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Books::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'date_published' => $this->date_published,
        ]);

        $query->andFilterWhere(['like', 'Isbn', $this->Isbn])
            ->andFilterWhere(['like', 'Title', $this->Title])
            ->andFilterWhere(['like', 'Author', $this->Author])
            ->andFilterWhere(['like', 'Genre', $this->Genre])
            ->andFilterWhere(['like', 'Summary', $this->Summary])
            ->andFilterWhere(['like', 'Title_page', $this->Title_page]);

        return $dataProvider;
    }
}
