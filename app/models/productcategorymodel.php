<?php
namespace PHPMVC\Models;

class ProductCategoryModel extends AbstractModel
{

    public $CategoryId;
    public $CategoryName;
    public $CategoryDesc;
    public $CategoryImage;
    public $ParentCategory;

    protected static $tableName = 'app_products_categories';

    protected static $tableSchema = array(
        'CategoryName'          => self::DATA_TYPE_STR,
        'CategoryDesc'          => self::DATA_TYPE_STR,
        'CategoryImage'         => self::DATA_TYPE_STR,
        'ParentCategory'        => self::DATA_TYPE_INT

    );

    protected static $primaryKey = 'CategoryId';

//    public static function getAll()
//    {
//        $sql = 'SELECT '.self::$tableName.'*, app_products_categories.CategoryName FROM ' . self::$tableName;
//        $sql .= ' INNER JOIN ' . ProductCategoryModel::getModelTableName();
//        $sql .= ' ON '. self::$tableName.'.ParentCategory = '. self::$tableName.'.CategoryID';
//        return self::get($sql);
//    }
}