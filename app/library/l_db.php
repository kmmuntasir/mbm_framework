<?php

	function query($q) {
		return mysqli_query($_SESSION['dbcon'], $q);
	}

	function get($table, $limit=null) {
		$q = "SELECT * FROM `$table`";
		if($limit) $q .= " limit $limit";
		$result = query($q);



		$final_array = array();

		while($row = mysqli_fetch_array($result)) {
			foreach ($row as $key => $value) 
			    if (is_int($key)) unset($row[$key]);
			array_push($final_array, $row);
		}
		return $final_array;
	}

	function insert($arr, $table) {
		$q = "INSERT INTO `$table` (";
		$delimiter = '';
		$keys = $values = "";
		foreach ($arr as $key => $value) {
			$keys .= $delimiter."`$key`";

			if(is_string($value)) $values .= $delimiter."'$value'";
			else $values .= $delimiter.$value;

			$delimiter = ', ';
		}
		$q .= "$keys) VALUES $values";

		return query($q);
	}

	function update($arr, $table) {

	}

	function delete($fieldname, $value, $table) {

	}

?>