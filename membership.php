<?php
    include_once 'dbConnection.php';
    $ref=@$_GET['q'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $email = $_POST['email'];
    $home_number = $_POST['home_number'];
    $personal_number = $_POST['personal_number'];
    $email = $_POST['email'];
    $vehicle_make = $_POST['vehicle_make'];
    $vehicle_model = $_POST['vehicle_model'];
    $atu = $_POST['atu'];
    $utv = $_POST['utv'];
    $individual_Family = $_POST['individual_Family'];
    $Business_Member = $_POST['Business_Member'];
    $Double_Map = $_POST['Double_Map'];
    $Donation = $_POST['Donation'];
    $Signature = $_POST['Signature'];
    $Date = $_POST['Date'];
    $id=uniqid();
    $query= "INSERT INTO membership (name, address, city, state,  email, home_number, personal_number, vehicle_make, vehicle_model, atu, utv, individual_Family, Business_Member, Double_Map; Donation, Signature, Date) VALUES ('$name', '$address', '$city', '$state', '$email', '$home_number', '$personal_number', '$vehicle_make', '$vehicle_model', '$atu', '$utv', '$individual_Family', '$Business_Member', '$Double_Map', '$Donation', '$Signature', '$Date')";
    $q=mysqli_query($con,$query);
    if ($q){
    // echo "saved"
        $_SESSION['success'] = "contact store successfully";
        header('Location: home.html');
        
        }
        else 
        {
        // echo "not saved"
        $_SESSION['status'] = "contact store successfully";
        header('Location: home.html');
        }
   
?>




