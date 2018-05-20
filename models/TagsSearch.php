<?php

namespace kouosl\tag\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\tag\models\Tag;

/**
 * TagsSearch represents the model behind the search form of `kouosl\tag\models\Tag`.
 */
class TagsSearch extends Tag
{
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
        $query = Tag::find();

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
            'id' => $this->id,
            'tag_name' => $this->tag_name,
            'tag_cat' => $this->tag_cat,
            'content' => $this->content,
        ]);

        $query->andFilterWhere(['like', 'tag_name', $this->tag_name]);

        return $dataProvider;
    }
}
