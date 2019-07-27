<?php

$phpArray = array("nguyen van a", "nguyen van b", "nguyen van c");


class Student{
    public $name;

    public $age;

    public $location;

    /**
     * Student constructor.
     * @param $name
     */
    //dùng hỗ trợ chuột phải Generate...
    public function __construct($name,$age,$location)
    {
        $this->name = $name;
        $this->age = $age;
        $this->location = $location;
    }

    //tự viết tay
   /*public function __construct($name,$age,$location)
   {
       $this -> name = $name;
       $this -> age = $age;
       $this -> location = $location;
   }*/


}
$an = new Student("nguyen van a", 21, "Bac Ninh");

echo "<pre>";
print_r($phpArray);
echo "</pre>";
echo "<br>";
echo "<pre>";
print_r($an);
echo "</pre>";


/*Chuyển đổi từ một mảng hay 1 đối tượng trong PHP sang json
Câu lệnh thì giống nhau: json_encode
khác nhau: trong mảng thì ra [] . Còn object thì ra {}

*/

$phpJSON1 = json_encode($phpArray);
echo "<pre>";
print_r($phpJSON1);
echo "</pre>";

$phpJSON2 = json_encode($an);
echo "<pre>";
print_r($phpJSON2);
echo "</pre>";


