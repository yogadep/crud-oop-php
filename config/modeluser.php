<?php
    include('dbclass.php');

class admin extends dbclass 
{

    function __construct()
    {
        parent:: __construct();
    }

    public function read($table,$id, $id_value)
    {
        $sql = "SELECT * FROM $table";
		if($id!=null)
		{
			$sql .= " WHERE $id='".$id_value."'";
		}

        $statm = $this->connection->query($sql);

        if(!$statm)
        {
            return "terjadi kesalahan";
        }

        $rows = array();
        while($row = $statm->fetch_assoc())
        {
            $rows[] = $row;
        }
        return $rows;
    }
    
    public function create($table,$param)
    {
        $column = implode(',', array_keys($param));

        $value = implode("','", $param);

        $sql = "INSERT INTO $table($column) VALUES ('$value')";

        $statm = $this->connection->query($sql);
        if($statm)
        {
            return "sukses";
        }
        else
        {
            return "gagal";
        }

    }

    public function update($table,$param,$id, $id_value)
	{
		
		$sql = "UPDATE $table SET ";
        $sql .= implode(',', $param);
        $sql .= " WHERE $id='".$id_value."'";
        $statm = $this->connection->query($sql);
        if($statm)
        {
        	return true;
        }
        else
        {
        	return false;
        }
	}

    
    public function delete($table,$id)
	{
		$query = "DELETE FROM $table WHERE id=$id";
		$hasil = $this->connection->query($query);
		if($hasil)
        {
        	return true;
        }
        else
        {
        	return false;
        }
	}
}    
?>
