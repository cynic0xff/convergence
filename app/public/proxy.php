<?php

//header('Access-Control-Allow-Origin: *');
//header('Content-type: application/json');

//$url = 'https://jsonplaceholder.typicode.com/posts/1';
//$delivery_date = date("Y-m-d\TH:i:sP");

$date = new DateTime();
$date->setTimezone(new DateTimeZone('America/New_York'));
$delivery_date = $date->format('Y-m-d\TH:i:sP');


$url = 'https://shipment.kuebix.com/api/action/quickRate';
$username = 'flooring@kuebix.com';
$password = '0a1fb819-2f1b-4106-9ede-a057d6';
$data = '{
    "origin": {
      "companyName": "Flooring.org",
      "country": "United States",
      "stateProvince": "FL",
      "city": "Odessa",
      "streetAddress": "2426 Success Dr",
      "streetAddress2": "",
      "postalCode": "32246",
      "contact": {
        "name": "Eric Hurst",
        "phone": "1-800-689-9006",
        "email": "eric@flooring.org"
      },
      "notes": "N/A"
    },
    "destination": {
      "companyName": "St Johns Town Center",
      "country": "United States",
      "stateProvince": "FL",
      "city": "Jacksonville",
      "streetAddress": "8 Post Office Square",
      "postalCode": "32246",
      "contact": {
        "name": "Will Hay",
        "phone": "978-555-5555",
        "email": "test@aol.com"
      },
      "notes": "Example note"
    },
    "billTo": {
      "companyName": "BillTo Sample Company",
      "country": "United States",
      "stateProvince": "TX",
      "city": "Arlington",
      "streetAddress": "8 Post Office Square",
      "streetAddress2": "Suite 200",
      "postalCode": "76001",
      "contact": {
        "name": "Sample User",
        "phone": "978-555-5555",
        "email": "sampleuser@kuebix.com"
      },
      "notes": "Example note"
    },
    "lineItems": [
      {
        "packageType": "Case(s)",
        "description": "Sample lineItem Description",
        "weight": 1000,
        "freightClass": "55",
        "sku": "DH354P"
      }
    ],
    "handlingUnits": [
      {
        "length": 48,
        "width": 40,
        "height": 48,
        "weight": 200,
        "stackable": true,
        "huType": "Box(es)"
      }
    ],
    "client": {
      "id": "0013b00001pUiDj"
    },
    "weightUnit": "LB",
    "lengthUnit": "IN",
    "shipmentType": "LTL",
    "totalSkids": 1,
    "shipmentMode": "Dry Van",
    "paymentType": "Outbound Prepaid",
    "pickupReady": "' . $delivery_date . '",
    "pickupClose": "' . $delivery_date . '"
  }';

  //    "pickupReady": "2019-06-06T08:00:00.00Z",
  //"pickupClose": "2019-06-06T11:00:00.00Z"

//echo "Delivery date set - Timezone: " . $delivery_date . "\n";
//echo "Getting quote...\n";

//start curl request
$curl = curl_init();  
$remote_url = $url;
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_USERPWD, $username . ":" . $password); //Your credentials goes here
curl_setopt($curl, CURLOPT_URL, $remote_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

//SSL
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$requestResult = curl_exec($curl);  
if ($requestResult === false) {
    throw new Exception('cURL error: ' . curl_error($curl));
    print_r('Failed to get data from URL. Failed with error : ' . curl_error($curl));
    return;
}  

$response = json_decode($requestResult,true);
echo json_encode($requestResult);

?>