$(document).ready(function() {


    
    //hide the loading aread
    $("#kuebix_cost").hide();

    //set the get shipping function
    $("#get_kuebix").click(function() {
        $("#kuebix_cost").fadeIn();
        getKuebix();
    });

    function getKuebix() {

        var username = 'flooring@kuebix.com';
        var password = '0a1fb819-2f1b-4106-9ede-a057d6';

        //set the form data that we are sending
        var formData = {
            "origin": {
              "companyName": "Origin Sample Company",
              "country": "United States",
              "stateProvince": "MA",
              "city": "Acton",
              "streetAddress": "8 Post Office Square",
              "streetAddress2": "Suite 200",
              "postalCode": "01720",
              "contact": {
                "name": "Sample User",
                "phone": "978-555-5555",
                "email": "sampleuser@kuebix.com"
              },
              "notes": "Example note"
            },
            "destination": {
              "companyName": "Destination Sample Company",
              "country": "United States",
              "stateProvince": "PA",
              "city": "Warminster",
              "streetAddress": "273 N. Scott Drive",
              "postalCode": "18974",
              "contact": {
                "name": "Sample User",
                "phone": "978-555-5555",
                "email": "sampleuser@kuebix.com"
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
                "inPackages": 63,
                "description": "Sample lineItem Description",
                "weight": 3700,
                "freightClass": "70",
                "nmfc": "144250-02",
                "sku": "Pickles",
                "soNumber": "Sample-SO-Number",
                "poNumber": "Sample-PO-Number"
              }
            ],
            "handlingUnits": [
              {
                "length": 48,
                "width": 40,
                "height": 48,
                "weight": 1850,
                "stackable": true,
                "huType": "Pallet(s)"
              },
              {
                "length": 48,
                "width": 40,
                "height": 48,
                "weight": 1850,
                "huType": "Pallet(s)",
                "stackable": true
              }
            ],
            "client": {
              "id": "0013b00001pUiDj"
            },
            "weightUnit": "LB",
            "lengthUnit": "IN",
            "shipmentType": "LTL",
            "totalSkids": 2,
            "totalPackages": 64,
            "shipmentMode": "Dry Van",
            "paymentType": "Outbound Prepaid",
            "pickupReady": "2019-06-06T08:00:00.00Z",
            "pickupClose": "2019-06-06T11:00:00.00Z",
            "customerSpecificFields": {
              "boolean1": true,
              "date1": "2020-01-28",
              "integer1": 15,
              "text1": "Sample Reference Text String"
            }
          };
        

        //url
        var url = "https://shipment.kuebix.com/api/action/quickRate";

        //make an ajax call passing in the url, the rest type, and the data
        $.ajax({
            url : url,
            dataType: "json",
            type: "POST",
            data : formData,
            
            beforeSend: function (xhr) {
                /* Authorization header */
                xhr.setRequestHeader ("Authorization", "Basic " + btoa(username + ":" + password));
            },

            //the success function
            success: function(data, textStatus, jqXHR)
            {
                //if we are successfull set the shipping informaiton
                //$('#shipping_cost').html("Name: " + data.name + "<br>Job: " + data.job + "<br>id: " + data.id + "<br>Created: " + data.createdAt);

                console.log(data);
            },

            error: function (jqXHR, status, error)
            {
                //we failed
                console.log('There has been an error ' . status + ' ' + error);
            }
        });
    }   
    
    //hide the button
    $('#get_proxy_quote_spinner').hide();

    //set the get shipping function
    $("#get_proxy_quote").click(function() {
      $("#get_proxy_quote_spinner").fadeIn();

        console.log('Loading...');
        getProxyQuote();
  });

  function getProxyQuote() {

          var username = 'flooring@kuebix.com';
          var password = '0a1fb819-2f1b-4106-9ede-a057d6';
  
          //set the form data that we are sending
          var formData = {
              "origin": {
                "companyName": "Origin Sample Company",
                "country": "United States",
                "stateProvince": "MA",
                "city": "Acton",
                "streetAddress": "8 Post Office Square",
                "streetAddress2": "Suite 200",
                "postalCode": "01720",
                "contact": {
                  "name": "Sample User",
                  "phone": "978-555-5555",
                  "email": "sampleuser@kuebix.com"
                },
                "notes": "Example note"
              },
              "destination": {
                "companyName": "Destination Sample Company",
                "country": "United States",
                "stateProvince": "PA",
                "city": "Warminster",
                "streetAddress": "273 N. Scott Drive",
                "postalCode": "18974",
                "contact": {
                  "name": "Sample User",
                  "phone": "978-555-5555",
                  "email": "sampleuser@kuebix.com"
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
                  "inPackages": 63,
                  "description": "Sample lineItem Description",
                  "weight": 3700,
                  "freightClass": "70",
                  "nmfc": "144250-02",
                  "sku": "Pickles",
                  "soNumber": "Sample-SO-Number",
                  "poNumber": "Sample-PO-Number"
                }
              ],
              "handlingUnits": [
                {
                  "length": 48,
                  "width": 40,
                  "height": 48,
                  "weight": 1850,
                  "stackable": true,
                  "huType": "Pallet(s)"
                },
                {
                  "length": 48,
                  "width": 40,
                  "height": 48,
                  "weight": 1850,
                  "huType": "Pallet(s)",
                  "stackable": true
                }
              ],
              "client": {
                "id": "0013b00001pUiDj"
              },
              "weightUnit": "LB",
              "lengthUnit": "IN",
              "shipmentType": "LTL",
              "totalSkids": 2,
              "totalPackages": 64,
              "shipmentMode": "Dry Van",
              "paymentType": "Outbound Prepaid",
              "pickupReady": "2019-06-06T08:00:00.00Z",
              "pickupClose": "2019-06-06T11:00:00.00Z",
              "customerSpecificFields": {
                "boolean1": true,
                "date1": "2020-01-28",
                "integer1": 15,
                "text1": "Sample Reference Text String"
              }
            };

    //make an ajax call passing in the url, the rest type, and the data
          $.ajax({
            url : 'proxy.php',
            dataType: "json",
            type: "POST",
            data : formData,

            //the success function
            success: function(data, textStatus, jqXHR)
            {
                //if we are successfull set the shipping informaiton
                //$('#shipping_cost').html("Name: " + data.name + "<br>Job: " + data.job + "<br>id: " + data.id + "<br>Created: " + data.createdAt);
                $('#shipping_cost').text(data);

                console.log(data);

                $('#get_proxy_quote_spinner').fadeOut();
            },

            error: function (jqXHR, status, error)
            {
                //we failed
                console.log(status + ' ' + error);
            }
        });
      }
});


