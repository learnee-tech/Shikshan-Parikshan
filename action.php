<?php
include 'dbcon.php';

class Examination{
	var $host;
	var $username;
	var $password;
	var $database;
	var $connect;
	var $home_page;
	var $query;
	var $data;
	var $statement;
    var $filedata;
    
    
    function __construct()
	{
		$this->host = 'localhost';
		$this->username = 'root';
		$this->password = '';
		$this->database = 'online_exam';
		
		$this->connect = new PDO("mysql:host=$this->host; dbname=$this->database", "$this->username", "$this->password");

		
	}


    function execute_query()
	{
		$this->statement = $this->connect->prepare($this->query);
		$this->statement->execute($this->data);
	}

    function query_result()
	{
		$this->execute_query();
		return $this->statement->fetchAll();
    }

    
    
    function total_row()
	{
		$this->execute_query();
		return $this->statement->rowCount();
	}


	function Is_allowed_add_question($exam_id)
	{
		$exam_question_limit = $this->Get_exam_question_limit($exam_id);

		$exam_total_question = $this->Get_exam_total_question($exam_id);

		if($exam_total_question >= $exam_question_limit)
		{
			return false;
		}
		return true;
    }
    
    function Get_exam_total_question($exam_id)
	{
		$this->query = "
		SELECT `question_id` FROM `question_table` WHERE `online_exam_id`= '$exam_id'
		";

		return $this->total_row();
    }
    

    function Get_exam_question_limit($exam_id)
	{
		$this->query = "
		SELECT  `total_question` FROM `online_exam_table` WHERE `online_exam_id` = '$exam_id'
		";

		$result = $this->query_result();

		foreach($result as $row)
		{
			return $row['total_question'];
		}
	}

	function Fill_exam_list()
	{
		$this->query = "
			SELECT `online_exam_id`, `online_exam_title` FROM `online_exam_table` WHERE `online_exam_status` = 'Pending' ORDER BY `online_exam_title` ASC
		";
		$result = $this->query_result();
		$output = '';
		foreach($result as $row)
		{
			$output .= '<option value="'.$row["online_exam_id"].'">'.$row["online_exam_title"].'</option>';
		}
		return $output;
	}

}

	
?>