<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TIK TIK - Gulammohyuddin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/storeform.css">
  <?php
  // echo "<style type='text/css'> I learned this from PHP Tutorials
    echo "<link rel='stylesheet' type='text/css' href='css/storeform.css' />";
   ?>
</head>

<body>
  <!-- Store name (TIK TIK) -->
  <h1 class="tw">Tik Tik</h1>
  <form name="Storeform" method="post">
    <h1 class="mh">My Cart</h1>

    <!-- This is the user input for Name -->
    <label class="lac" for="name">Name</label>
    <input id="name" placeholder="Name" class="textInput" type="text" name="name"><br />

    <!-- This is the user input for Phone -->
    <label class="lac" for="phone">Phone</label>
    <input id="phone" placeholder="123-123-1234" class="textInput" type="text" name="phone"><br />

    <!-- This is the user input for Post-Code -->
    <label class="lac" for="postcode">Post Code</label>
    <input id="postcode" placeholder="X9X 9X9" class="textInput" type="text" name="postcode"><br />

    <!-- This is the user input for Address -->
    <label class="lac" for="address">Address</label>
    <input id="address" placeholder="Address" class="textInput" type="text" name="address"><br />

    <!-- This is the user input for City -->
    <label class="lac" for="city">City</label>
    <input id="city" placeholder="City" class="textInput" type="text" name="city"><br />

    <!-- This is the user input for Province -->
    <label class="lac" for="">Province</label>
    <select name="province" id="province" class="textInput">
      <option value="">----- Select -----</option>
      <option value="Ontario">Ontario</option>
      <option value="Alberta">Alberta</option>
      <option value="British Columbia">British Columbia</option>
      <option value="Nova Skotia">Nova Skotia</option>
      <option value="Quebec">Quebec</option>
      <option value="Saskatchewan">Saskatchewan</option>
      <option value="Yukon">Yukon</option>
      <option value="New Brunswick">New Brunswick</option>
      <option value="Newfoundland and Labrador">Newfoundland and Labrador</option>
      <option value="Northwest Territories">Northwest Territories</option>
      <option value="Nunavut">Nunavut</option>
      <option value="Prince Edward Island">Prince Edward Island</option>
      <option value="Manitoba">Manitoba</option>
    </select>

    <!-- This is the user input for Credit Card number -->
    <label class="lac" for="ccard">Credit Card</label>
    <input id="ccard" placeholder="1234-1234-1234-1234" class="textInput" type="text" name="ccard" style ="font-size: 16px;
    font-family: 'Audiowide', cursive;
    padding: 5px 10px;
    width: 170px;
    height: 30px;
    margin-bottom: 10px;"><br />

    <!-- This is the user input for Enter the Credit Card Expiry Month -->
    <label class="lac" for="cardem">Credit Card Expiry Month</label>
    <input id="cardem" placeholder="YYY" class="textInput" type="text" name="cardem"><br />

    <!-- This is the user input for Enter the Credit Card Expiry Year -->
    <label class="lac" for="cardey">Credit Card Expiry Year</label>
    <input id="cardey" placeholder="1234" class="textInput" type="text" name="cardey"><br />

    <!-- This is the user input for Email -->
    <label class="lac" for="email">Email</label>
    <input id="email" placeholder="test@test.com" class="textInput" type="text" name="email"><br />

    <!-- This is the user input for Enter the Password -->
    <label class="lac" for="password">Password</label>
    <input id="password" placeholder="Password" class="textInput" type="password" name="password"><br />

    <!-- This is the user input for Confirm the Password -->
    <label class="lac" for="cpassword">Confirm Password</label>
    <input id="cpassword" placeholder="Confirm Password" class="textInput" type="password" name="cpassword"><br />

    <!-- This is the user input for product1 (Sonata) -->
    <label class="lac" for="product1">Sonata</label>
    <input id="product1" placeholder="Sonata" class="textInput" type="product1" name="product1"><br />

    <!-- This is the user input for product2 (Fastrack) -->
    <label class="lac" for="product2">Fastrack</label>
    <input id="product2" placeholder="Fastrack" class="textInput" type="product2" name="product2"><br />

    <br /><br />
    <!-- This is the user input for click on Submit button and the Store Reciept will be Generate the Invoice -->
    <input type="submit" value="Submit" class="btn" name="submit">
    <h3 class="mh">Store Reciept</h3>
    <p id="errors">

        <?php
        // Called Veriables
        $product1 = '';
        $product2 = '';
        $province = '';
        $finalCost = '';
        $total1Amount = '';
        $total2Amount = '';
        $name = '';
        $grandTotal = '';

        // Conditon for an error for the Name field 
        if(isset($_POST['submit'])){
          $product1 = $_POST['product1'];
          $product2 = $_POST['product2'];
                $name = $_POST['name'];
                if(empty($name))
                {
                  $errors = 1;
                  echo "Please enter a name<br/>";
                }

               // Conditon for an error for the Phone field with proper Regex 
                $phone=$_POST['phone'];
                $phoneregex = "/^[2-9]{3}\-[0-9]{3}\-[0-9]{4}$/";
                if(!preg_match($phoneregex, $phone)){
                  $errors = 2;
                  echo "Please enter a valid phone number<br/>";
                }
              
                // Conditon for an error for the Post-Code field with proper Regex 
                $postCode=$_POST['postcode'];
                $postCodeRegex =  "/^[A-Z][0-9][A-Z]\s[0-9][A-Z][0-9]$/";
                if(!preg_match($postCodeRegex, $postCode)){
                $errors = 3; 
                echo "Please enter a valid post Code<br/>";
                }

                // Conditon for an error for the Address field 
                $address = $_POST['address'];
                if(empty($address))
                {
                  $errors = 4;
                  echo "Please enter Address<br/>";
                }
              
                // Conditon for an error for the City field 
                $city = $_POST['city'];
                if(empty($city))
                {
                  $errors = 5;
                  echo "Please enter City<br/>";
                }

                // Conditon for an error for the Province field 
                $province = $_POST['province'];
                if(empty($province))
                {
                  $errors = 6;
                  echo "Please enter Province<br/>";
                }
               
                // Conditon for an error for the Credit Card field with proper Regex 
                $ccard =$_POST['ccard'];
                $creditCardRegex =  "/^[0-9]{4}[\-][0-9]{4}[\-][0-9]{4}[\-][0-9]{4}$/";
                if(!preg_match($creditCardRegex, $ccard)){
                $errors = 7; 
                echo "Please enter a valid credit card Number<br />";
                }
                
                // Conditon for an error for the Credit Card Expity Month field with proper Regex 
                $cardem= $_POST['cardem'];
                $expiryMonthRegex = "/^[A-Z]{3}$/";
                if (!preg_match($expiryMonthRegex, $cardem)) {
                    $errors = 8;
                    echo "Please enter a valid credit card expiry month in the format MMM<br/>";
                }
                
                // Conditon for an error for the Credit Card Expiry Year field with proper Regex 
                $cardey  = $_POST['cardey'];
                $expiryYearRegex = "/^[0-9]{4}$/";
                if (!preg_match($expiryYearRegex, $cardey)) {
                    $errors = 9;
                    echo "Please enter a valid credit card expiry year in the format yyyy<br/>";
                }
                
                // Conditon for an error for the Email field with proper Regex 
                $email = $_POST['email'];
                $emailRegex="/^[A-z]+[\@][A-z]+[\.][A-z]+$/";
                if(!preg_match($emailRegex, $email))
                {
                  $errors = 10;
                  echo "Please enter a valid E-mail Address<br />";
                }
                
                // Conditon for an error for the Password field 
                $password = $_POST['password'];
                if($password == '')
                {
                    $errors = 11;
                    echo "Please enter a valid password<br />";
                }
               
                // Conditon for an error for Confirm Password field with matching Password condition
                $cpassword = $_POST['cpassword'];
                if($password != $cpassword) 
                {           
                    $errors = 12;
                    echo "Password does not match with confirm password <br />";
                }

                // Calculating the cost and total with GST as per provice 
                $gstTax = 0;
                $product1Cost = 5;
                $product2Cost = 20;
                $total1Amount = (Int)$product1 * $product1Cost; 
                $total2Amount = (Int)$product2 * $product2Cost;
                $finalCost = $total1Amount + $total2Amount;
                
                // adding tax for each province
                    if ($province == 'Ontario') {
                    $gstTax = $finalCost * 13 / 100;
                    }

                    else if ($province == 'Alberta') {
                    $gstTax = $finalCost * 5 / 100;
                    }

                    else if ($province == 'British Columbia') {
                    $gstTax = $finalCost * 12 / 100;
                    }

                    else if ($province == 'Nova Skotia') {
                    $gstTax = $finalCost * 15 / 100;
                    }

                    else if ($province == 'Quebec') {
                    $gstTax = $finalCost * 15 / 100;
                    }

                    else if ($province == 'Saskatchewan') {
                    $gstTax = $finalCost * 11 / 100;
                    }

                    else if ($province == 'Yukon') {
                    $gstTax = $finalCost * 5 / 100;
                    }

                    else if ($province == 'New Brunswick') {
                    $gstTax = $finalCost * 15 / 100;
                    }

                    else if ($province == 'Newfoundland and Labrador') {
                    $gstTax = $finalCost * 15 / 100;
                    }

                    else if ($province == 'Northwest Territories') {
                    $gstTax = $finalCost * 5 / 100;
                    }

                    else if ($province == 'Nunavut') {
                    $gstTax = $finalCost * 5 / 100;
                    }

                    else if ($province == 'Prince Edward Island') {
                    $gstTax = $finalCost * 15 / 100;
                    }

                    else if ($province == 'Manitoba') {
                    $gstTax = $finalCost * 5 / 100;
                    }
                    
                    // Calculate the grand total cost
                    $grandTotal = $finalCost + $gstTax;

                    // Condition to user should purchase minimum 10$ and above product
                    if($grandTotal<10){
                      $errors=13;
                      echo "Please purchase minimum 10$";
                      }

                      // Condition if user put proper information in all the fields then show the Store reciept(Invoice)
                      if(empty($errors)){
                        echo "Name: $name<br>";
                        echo "Phone: $phone<br>";
                        echo "Postcode: $postCode<br>";
                        echo "Address: $address<br>";
                        echo "City: $city<br>";
                        echo "Province: $province<br>";
                        echo "E-mail: $email<br>";
                        echo "Product 1: $product1<br>";
                        echo "Product 2: $product2<br>";
                        echo "Credit Card: $ccard<br>";
                        echo "Credit Card ExpiryMonth: $cardem<br>";
                        echo "Credit Card ExpireYear:$cardey<br>";
                        echo "Cost of Product 1: $product1Cost<br>"; 
                        echo "Cost of Product 2: $product2Cost<br>"; 
                        echo "Sub Total: $finalCost<br>";
                        echo "GST: $gstTax<br>";
                        echo "Total: $grandTotal<br>";
                      }
                    }        
        ?>
    </p>
  </form>
</body>

</html>