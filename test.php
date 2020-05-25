<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
use Bitrix\Iblock\IblockTable;
use Bitrix\Main\ORM\Data\DataManager;
use Bitrix\Main\ORM\Entity;
use Bitrix\Main\ORM\Query\Query;


?>
<?

Bitrix\Main\Loader::includeModule('iblock');

$customEntity = Entity::compileEntity(
    'CustomEntity',
    [
        (new Bitrix\Main\ORM\Fields\IntegerField('ID'))
        ->configurePrimary(),
        (new Bitrix\Main\ORM\Fields\StringField('NAME'))
    ],
    [
        'namespace' => 'Evgen',
        'table_name' => 'b_iblock'

    ]
);
/**
 * @var Bitrix\Main\ORM\Entity $obj
 * @var Bitrix\Main\ORM\Entity $obj2
 */
$obj = $customEntity->wakeUpObject(3);
$obj->setName(date('H:i:s'));
$obj->save();
$obj2 = $customEntity->createObject();
$obj2->setName(date('H:i:s'));
$obj2->save();




/**
 * Class for testing
 */

// class EvgenIblockTable extends DataManager{
    
//     public static function getTableName()
//     {
//         return 'b_iblock';
//     }
    
//     public static function getMap()
//     {
//         return [
//             'ID' => [
//                 'data_type' => 'integer',
//                 'primary' => 'integer'
//             ],
//             'NAME' => [
//                 'data_type' => 'string'
//                 ]
//             ];
//         }
//     }

// $result = EvgenIblockTable::update(3, 
//     [
//         'NAME' => date('H:i:s')
//     ]);


// $elemetnEntety = \Bitrix\Iblock\IblockTable::compileEntity('newsapi');
// $res = (new Query($elemetnEntety))
//     ->addFilter('ID', 3)
//     ->setSelect([   
//         'ID', 'NAME', 'PR_' => 'TEST'
//     ])
//     ->exec();

// /**
//  * @var Bitrix\Main\ORM\Objectify\EntityObject $obj
//  */    
// $obj = $res->fetchObject();
// $obj->get('TEST');
// $obj->set('NAME', date('H:i:s'))->save();


// $customEntity = Entity::compileEntity(
//     'CustomEntity',
//     [
//         (new Bitrix\Main\ORM\Fields\IntegerField('ID'))
//         ->configurePrimary(),
//         (new Bitrix\Main\ORM\Fields\StringField('NAME'))
//     ],
//     [
//         'namespace' => 'Evgen',
//         'table_name' => 'b_iblock'

//     ]
// );


// $res = $query
//     ->setFilter([
//         '<=ID' => 3
//     ])
//     ->setSelect([
//         'TITLE' => 'NAME', 
//         'ID'       
//     ])
//     ->exec();

// $obj = EvgenIblockTable::getList([
//     'filter' => [
//         '<ID' => 3
//     ],
//     'select' => [
//         'TITLE' => 'NAME', 
//         'ID'
//     ]
// ]);
// while ($arResult = $res->fetch()) {
//     echo '<pre>'; print_r($arResult); echo '</pre>';
// }

?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>