<?php
//this is class called databasetable class which ins to the database
class DatabaseTableClass{
      public $table;
    function __construct($table){//table is constructed
        $this->table = $table; 
    }

    public function save($record, $pk = ''){//the function save the record which gets the pk
    try{
        $this->insert($record);//insert the record 
    }
    catch(Exception $e){
        $this->update($record, $pk);//catches the updated value
    }

}
//function to insert the record
function insert($record) {//parameter passed in function insert
    global $pdo;//global variable
    $keys = array_keys($record);//returns the array

    $values = implode(', ', $keys);//join the element of array to string
    $valuesWithColon = implode(', :', $keys);

    $query = 'INSERT INTO ' . $this->table . ' (' . $values . ') VALUES (:' . $valuesWithColon . ')';//insert the values in table specified

    $stmt = $pdo->prepare($query);//prepare the statement to executr=e

    $stmt->execute($record);//execute the record
}
//function to update the record
function update($record, $pk) {//parameter passed in function update
    global $pdo;//global variable
    $parameters = [];//variable name is passed
    foreach($record as $key => $value){//function foreach passed the record key and values
        $parameters[] = $key. '= :' .$key;
    }
    $parametersWithComma = implode(',', $parameters);//the imploed function join the element of array to string
    $query = "UPDATE $this->table SET $parametersWithComma WHERE $pk =:pk";//update the values of table
    $record['pk'] = $record[$pk];//passes the primary key
    $stmt = $pdo->prepare($query);//prepare the query
    $stmt->execute($record);//execute the record
}
//function to upload image
public function image(){
    global $pdo;//global variable
    return $pdo->lastInsertId();//insert the id
  }
//function to delete the values
public function delete($field, $value) {//parameter passed in function delete
        global $pdo;//global variable
        $stmt = $pdo->prepare('DELETE FROM ' . $this->table . ' WHERE ' . $field . ' = :pk');//gets the id and delete the value
        $criteria = [
                'pk' => $value
        ];//passed the primary key
        $stmt->execute($criteria);//execute the criteria

        return $stmt;//return the variable
}


//function Findall
 public function findAll() {
      global $pdo;//global variable
      $stmt = $pdo->prepare('SELECT * FROM ' . $this->table );//selects the table

      $stmt->execute();//execute the statement

      return $stmt;
  }
   
//function find  
  public function find($field, $value) {//parameters passed in function find
      global $pdo;//global variable
        $stmt = $pdo->prepare('SELECT * FROM ' . $this->table . ' WHERE ' . $field . ' = :value');//select the value from table
        $criteria = [
                'value' => $value
        ];//pass the value 
        $stmt->execute($criteria);//execute the criteria

        return $stmt;
  }
//function findtwo
   public function findTwo($field,$field1, $value,$value1) {//parameters passed in function findtwo
    global $pdo;//global variable
      $stmt = $pdo->prepare('SELECT * FROM ' . $this->table . ' WHERE ' . $field . ' = :value AND '.$field1. '= :value1');//selects the value from the table
      $criteria = [
              'value' => $value,
              'value1' => $value1
      ];//pass the value
      $stmt->execute($criteria);//execute the criteria

      return $stmt;
  }
  //function display
 function display($ab, $bc){//passes the parameter
    global $pdo;//global variable
    $key=intval($ab);//returns the integer value
    $value=(string)$bc;//returns the string value
    $stmt = $pdo->prepare('SELECT * FROM `furniture`  WHERE `item_type` = "'.$value.'" AND `categoryId` ='.$key);//selects the item type and category id from furniture
     $stmt->execute();//execute the value

    return $stmt;    
}
  }
?>