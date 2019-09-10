//для фильтрации по нескольким значениям множественного свойства, нужно использовать подзапросы. 
CModule::IncludeModule('iblock');

$rs = CIBlockElement::GetList(
   array(), 
   array(
   "IBLOCK_ID" => 21, 
   array("ID" => CIBlockElement::SubQuery("ID", array("IBLOCK_ID" => 21, "PROPERTY_PKE" => 7405))),
   array("ID" => CIBlockElement::SubQuery("ID", array("IBLOCK_ID" => 21, "PROPERTY_PKE" => 7410))),
   array("ID" => CIBlockElement::SubQuery("ID", array("IBLOCK_ID" => 21, "PROPERTY_PKE" => 7417)))
   ),
   false, 
   false,
   array("ID")
);

while($ar = $rs->GetNext()) {
    echo '<pre>';
    print_r($ar);
    echo '</pre>';
}
