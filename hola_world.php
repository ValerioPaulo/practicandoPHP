
<?php
   $name = "paulo";
   $age = 37;
   $address = "28 julio";
   $city = "Lima";
   const gravity = 9.8;
    /*
   echo $name."\n";
   echo $age."\n";
   echo $address."\n";
   echo $city."\n";
   echo gravity."\n";   
    */        
   $data_array = [$name, $age, $address, $city];
   echo "data type: ";  echo gettype($data_array)."\n";
   //print_r($data_array)."\n";
   echo "name: ".$data_array[0]."\n";
   echo "age: ".$data_array[1]."\n";
   echo "address: ".$data_array[2]."\n";
   echo "city: ".$data_array[3]."\n";   
   //echo $data_array;
   //$data_array[1] = 16.6;
   //print_r($data_array)."\n";
   
   $people_information = array(
        "name" => "paulo",
        "age"=> 36,
        "address"=> "Lima"
   );
   $people_information2 = [ 
    "name" => "paulo",
    "age"=> 36,
    "address"=> "Lima",
    ];    

  // echo "The data type: ".gettype($people_information);

   // print_r($people_information)."\n";
    var_dump($people_information)."\n";

    for ($x=0; $x<= 5; $x++){
        echo $x."\n";
    };
    echo "\n";

    foreach($people_information as $i){
        echo $i."\n";
    }
    echo "\n";
    foreach($data_array as $i){
        echo $i.", ";
    }

?>

