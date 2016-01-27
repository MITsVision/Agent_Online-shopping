<html>
<head></head>
<body>
<?php
class item_search 
{
	$link=mysqli_connect("localhost","root","","db1");
	$qry="select * from collect where id='$idnum' ";
	$result=mysqli_query($link,$qry);
	$b=".jpg";
	while($res=mysqli_fetch_row($result))
	{
    protected $_len = 0;
    protected $_g = array();
    protected $_visited = array();
	$_visited=$res;
    public function __construct()
    {
        $this->_g = array(
            array(0, 1, 1, 0, 0, 0),
            array(1, 0, 0, 1, 0, 0),
            array(1, 0, 0, 1, 1, 1),
            array(0, 1, 1, 0, 1, 0),
            array(0, 0, 1, 1, 0, 1),
            array(0, 0, 1, 0, 1, 0),
        );
        $this->_len = count($this->_g);
 
        $this->_initVisited();
    }
 
    protected function _initVisited()
    {
        for ($i = 0; $i < $this->_len; $i++) {
            $this->_visited[$i] = 0;
        }
    }
    public function depthFirst($res[3])
    {
        $this->_visited[$res[3]] = 1;
 
        echo $res[3] . "\n";
 
        for ($i = 0; $i < $this->_len; $i++) {
            if ($this->_g[$res[3]][$i] == 1 && !$this->_visited[$i]) {
                $this->depthFirst($i);
            }
        }
    }
}
$g = new Graph();
$g->depthFirst(2);
}
?>
</body>
</html>