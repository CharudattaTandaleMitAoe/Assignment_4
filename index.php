<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fusionrestaurant.com</title>
</head>
<body>
    <script src="jquery-3.5.1.min.js"></script>
    <script>
        let base_url = "controller.php";

        function PopulateDropDownListByname(){
          let url = base_url + "?req=name_list";
          $.get(url,function(data,success){
              console.log(data.length);
              console.log(data);

              for (var i = 0; i < data.length; i++) {
                  var option = document.createElement("OPTION");
                  option.innerHTML = data[i].name;
                  option.value = data[i].id;
                  ddlCustomersname.options.add(option);
              }
            });
        }

        function PopulateDropDownListByid(){
          let url = base_url + "?req=name_list";
          $.get(url,function(data,success){
              console.log(data.length);
              console.log(data);
              for (var i = 0; i < data.length; i++) {
                  var option = document.createElement("OPTION");
                  option.innerHTML = data[i].id;
                  option.value = data[i].name;
                  ddlCustomersid.options.add(option);
              }
            });
        }
        function callme() {
              alert("Order Placed!!!");
       }
    </script>
    <?php
    include("Data.php");
    ?>
    <h2><big><big>FUSION RESTAURANT</big></big></h1>
    <h2>Book Your Order Right Away</h2><br/>
    NAME:<input type="text" class="input"><br/><br/>
    EMAIL:<input type="text" class="input"><br/><br/>
    PHONE:<input type="text" class="input"><br/><br/>
    ADDRESS:<input type="text" class="input"><br/><br/>
    <button onclick="PopulateDropDownListByname()">GET MENU BY NAME</button>
    <select id="ddlCustomersname">
    </select>
    <br/><button onclick="PopulateDropDownListByid()">GET MENU BY__ID__</button>
    <select id="ddlCustomersid">
    </select><br/>
    <br/><button onclick="callme()">CONFIRM ORDER</button>
</body>
</html>
