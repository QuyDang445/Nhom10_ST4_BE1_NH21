<?php
class Product extends Db
{
public function getAllProducts()
{
$sql = self::$connection->prepare("SELECT * FROM products");
$sql->execute();
$item=array();
$item=array();$item=$sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $item;
}
public function getProductById($id)
{
$sql = self::$connection->prepare("SELECT * FROM products WHERE id = ?");
$sql->bind_param("i",$id);
$sql->execute();
$item=array();$item=$sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $item;
}
public function getNew10Products(){
    $sql=self::$connection->prepare("SELECT * FROM products ORDER BY id desc limit 10");
    $sql->execute();
    $item=array();
    $item=array();$item=$sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items;
}
public function search($keyword)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE `name` LIKE ?");
        $keyword = "%$keyword%";
        $sql->bind_param("s", $keyword);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
public function getProductByType($type_id)
{
$sql = self::$connection->prepare("SELECT * FROM products WHERE type_id = ?");
$sql->bind_param("i",$type_id);
$sql->execute();
$item=array();
$item=$sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $item;
}
public function get3ProductByType($type_id,$page,$perPage)
{
    //Tính Số thứ tự trang bắt đầu
    $firstLink = ($page - 1) * $perPage;

$sql = self::$connection->prepare("SELECT * FROM products WHERE type_id = ? 
LIMIT ?,?");
$sql->bind_param("iii",$type_id,$firstLink,$perPage);
$sql->execute();
$item=array();
$item=$sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $item;
}  
function paginate($url, $total, $perPage)
{
    $totalLinks = ceil($total/$perPage);
 	$link ="";
    	for($j=1; $j <= $totalLinks ; $j++)
     	{
      		$link = $link."<li><a href='$url&page=$j'> $j </a></li>";
     	}
     	return $link;
}

}
