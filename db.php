
<?php
//Database
class Databases{
 public $con;
 public $error;
 public function __construct()
 {
	 $this->con = mysqli_connect("localhost", "root", "", "iibit");
	 if(!$this->con)
	 {
	 echo 'Database Connection Error' . mysqli_connect_error($this->con);
	 }
 }
 
 public function insert($table_name, $data){
	 $string = "INSERT INTO ".$table_name." (";
	 $string .= implode(",", array_keys($data)) . ') VALUES (';
	 $string .= "'" . implode("','", array_values($data)) . "')";
	 if(mysqli_query($this->con, $string))
	 {
	 	return true;
	 }
	 else
	 {
	 	  echo mysqli_error($this->con);
	 }
 }


}
?>