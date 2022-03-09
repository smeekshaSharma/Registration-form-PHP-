<?php
class Students
{
    var $name;
    var $id;
    function setData($n,$rno)
    {
        $this->name=$n;
        $this->id=$rno;
    }
    function printData()
    {
        echo "Name=".$this->name ."<br>"."Id=".$this->id;
    }
}
$s1=new Students();
$s1->setData("Roshni",22);
$s1->printData();
?>