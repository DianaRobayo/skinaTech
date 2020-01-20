<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $name
 * @property int $id_category
 * @property int $id_subcategory
 * @property string $image
 * @property string $brand
 * @property string|null $quantity
 * @property string|null $description
 * @property string $price
 *
 * @property Category $category
 * @property Subcategory $subcategory
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'id_category', 'id_subcategory', 'image', 'brand', 'price'], 'required'],
            [['id_category', 'id_subcategory'], 'integer'],
            [['name', 'quantity'], 'string', 'max' => 45],
            [['image', 'brand'], 'string', 'max' => 100],
            [['description', 'price'], 'string', 'max' => 255],
            [['id_category'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['id_category' => 'id']],
            [['id_subcategory'], 'exist', 'skipOnError' => true, 'targetClass' => Subcategory::className(), 'targetAttribute' => ['id_subcategory' => 'id']],
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
            'id_category' => 'Id Category',
            'id_subcategory' => 'Id Subcategory',
            'image' => 'Image',
            'brand' => 'Brand',
            'quantity' => 'Quantity',
            'description' => 'Description',
            'price' => 'Price',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'id_category']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubcategory()
    {
        return $this->hasOne(Subcategory::className(), ['id' => 'id_subcategory']);
    }
}
