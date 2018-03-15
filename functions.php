<?php

function task1($file)
{
    $info = file_get_contents($file);
    $xml = new SimpleXMLElement($info);
    echo "Order Number: ";
    print_r($xml->attributes()->PurchaseOrderNumber->__toString());
    echo "<br>";
    echo "Order Date: ";
    print_r($xml->attributes()->OrderDate->__toString());
    echo "<br><br>Shipping Address:<br>";
    echo "Name: ";
    print_r($xml->Address[0]->Name->__toString());
    echo "<br>";
    echo "Street: ";
    print_r($xml->Address[0]->Street->__toString());
    echo "<br>";
    echo "City: ";
    print_r($xml->Address[0]->City->__toString());
    echo "<br>";
    echo "State: ";
    print_r($xml->Address[0]->State->__toString());
    echo "<br>";
    echo "Zip: ";
    print_r($xml->Address[0]->Zip->__toString());
    echo "<br>";
    echo "Country: ";
    print_r($xml->Address[0]->Country->__toString());
    echo "<br><br>Billing Address:<br>";
    echo "Name: ";
    print_r($xml->Address[1]->Name->__toString());
    echo "<br>";
    echo "Street: ";
    print_r($xml->Address[1]->Street->__toString());
    echo "<br>";
    echo "City: ";
    print_r($xml->Address[1]->City->__toString());
    echo "<br>";
    echo "State: ";
    print_r($xml->Address[1]->State->__toString());
    echo "<br>";
    echo "Zip: ";
    print_r($xml->Address[1]->Zip->__toString());
    echo "<br>";
    echo "Country: ";
    print_r($xml->Address[1]->Country->__toString());
    echo "<br><br>";
    echo "Delivery Notes: ";
    print_r($xml->DeliveryNotes->__toString());
    echo "<br>";
    echo "Item 1: ";
    echo "<br>";
    echo "Part Number: ";
    print_r($xml->Items->Item[0]->attributes()->PartNumber->__toString());
    echo "<br>";
    echo "Product Name: ";
    print_r($xml->Items->Item[0]->ProductName->__toString());
    echo "<br>";
    echo "Quantity: ";
    print_r($xml->Items->Item[0]->Quantity->__toString());
    echo "<br>";
    echo "US Price: ";
    print_r($xml->Items->Item[0]->USPrice->__toString());
    echo "<br>";
    echo "Comment: ";
    print_r($xml->Items->Item[0]->Comment->__toString());
    echo "<br>";
    echo "<br>";
    echo "Item 2: ";
    echo "<br>";
    echo "Part Number: ";
    print_r($xml->Items->Item[1]->attributes()->PartNumber->__toString());
    echo "<br>";
    echo "Product Name: ";
    print_r($xml->Items->Item[1]->ProductName->__toString());
    echo "<br>";
    echo "Quantity: ";
    print_r($xml->Items->Item[1]->Quantity->__toString());
    echo "<br>";
    echo "US Price: ";
    print_r($xml->Items->Item[1]->USPrice->__toString());
    echo "<br>";
    echo "Comment: ";
    print_r($xml->Items->Item[1]->Comment->__toString());
    echo "<br>";
}

function task2()
{
    $array = [
      "Student1" => [
          "Name" => "Anthony",
          "Lastname" => "Robbins"
      ],
      "Student2" => [
          "Name" => "Thomas",
          "Lastname" => "Dunn"
      ]
    ];

    $data = json_encode($array);
    echo "output.json: " . $data . "<br>";
    file_put_contents('output.json',$data, FILE_APPEND);
    $data2 = file_get_contents('output2.json');
    echo "output2.json: " . $data2 . "<br>";
    $newJson = json_decode($data2,true);
    $result1 = array_diff_assoc($array[key($array)], $newJson[key($newJson)]);
    $result2 = array_diff_assoc($newJson[key($newJson)], $array[key($array)]);
    echo "Difference: ";
    $totalResult = [
      "output.json" => $result1,
      "output2.json" => $result2
    ];
    echo "<br>";
    echo "<pre>";
    print_r($totalResult);
    echo "</pre>";

}


function task3()
{
    echo "CSV";
    $numbArray = [];
    for ($i = 0; $i < 50; $i++) {
        $number = rand(1,100);
        $numbArray[] = $number;
    }
    echo "<pre>";
    print_r($numbArray);
    echo "</pre>";


}
