<?php

class DB {
  
    private $mysqli;

    public function connectt($servername, $username,$password,$dbname) 
    {
        
        $this->mysqli=new mysqli();
        $this->mysqli->connect($servername,$username,$password,$dbname);

        if ($this->mysqli->connect_error)
         {
            return false;
            die("Connection failed: " . $this->mysqli->connect_error);
         }
         else
         {
            return true;
         }
    }

    public function insert($table, $columns, $values) 
    {
        $sql = "INSERT INTO $table ($columns) VALUES ($values)";
        if ($this->mysqli->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function select($table)
    {
        $stmt = $this->mysqli->prepare("SELECT * FROM $table");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }

    
    public function select2($table,$namee)
    {
        $stmt = $this->mysqli->prepare("SELECT * FROM $table WHERE Name ='$namee'");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
    
    public function update($table, $name, $columns, $values)
    {
        $sql = "UPDATE $table SET ";
        for ($i = 0; $i < count($columns); $i++) 
        {
            if($columns[$i]=('image'))
            {
               
                  $imgName =$_FILES['image']['name'];
                  $imgTmpName =$_FILES['image']['tmp_name'];
     
                   $ext = pathinfo($imgName)['extension'];
     
                   $imgNewName = "images/".time().".".$ext;
     
                   if(in_array($ext, array('png', 'jpg','jpeg')))
                   {
             
                    move_uploaded_file($imgTmpName, $imgNewName);
                    $sql .= "$columns[$i] = '$imgNewName'";
                  }
             }
             else
             {
                $sql .= "$columns[$i] = '$values[$i]'";
             } 
            if ($i < count($columns) - 1) 
            {
                $sql .= ", ";
            }
        }
        $sql .= " WHERE name = '$name'";
    
        if ($this->mysqli->query($sql) === TRUE) 
        {
            return true;
        } 
        else 
        {
            return false;
        }
    }

    public function delete($table, $name) 
    {
        $sql = "DELETE FROM $table WHERE Name = '$name'";
        if ($this->mysqli->query($sql) === TRUE) 
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