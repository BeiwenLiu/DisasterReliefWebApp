<!DOCTYPE html>

<?php 
#include('include/session.php');
#$array = array('1','2','3','4','5','6','7');

include('include/indexData.php');

if (isset($_POST['Submit'])) {
    insert($_POST['identity'], $_POST['phonenumber'], $_POST['email'], $_POST['street'], $_POST['city'], $_POST['state']);
}

?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link href="newpost.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">

    <body background="bg.png">
        <div id='title'>
            <ul class='tab'>
                <li><a href="index.php">Home</a></li>
                <li><a href="s2.php">Volunteer</a></li>
                <li><a href="#">Request Help</a></li>
            </ul>
        </div>
    	<div class="spacer"></div>
        <form id="newpost" method="POST">
            <div id="headerdiv"> 
                <label id="withinHeaderDiv"> Request Help here </label>
            </div>

            <div class="row"> <div class="circle"> 1 </div> <label class="indicator"> Please Fill in the Details Below </label> </div>

            <div class="innerForm"> 

                <label class="block"> Give us a way of contacting you! </label>

                <input class="inputName" placeholder="First and Last Name" name="identity" required> 
                <input class="inputName" placeholder="Phone Number" name="phonenumber" required> 
                <input class="inputName" placeholder="Email" name="email" required> 

                <div class="block"> <label> Where are you? </label> </div>

                <input class="inputName" placeholder="Street" name="street" required> 
                <input class="inputName" placeholder="City" name="city" required>
                <select class="inputName" name="state" required>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                </select>               

            </div>

            <div class="row"> <div class="circle"> 2 </div> <label class="indicator"> What are your needs? </label> </div>

            <div class="innerForm1"> 

                <div class="container" required>
                            <label class="block1"> Food </label>
                            <input class="inputNameDiv3" type="checkbox">
                            <label class="block1"> Water </label>
                            <input class="inputNameDiv3" type="checkbox">
                            <label class="block1"> First Aid </label>
                            <input class="inputNameDiv3" type="checkbox">
                            <label class="block1"> Destruction of Property </label>
                            <input class="inputNameDiv4" type="checkbox">
                        </div>

                <label class="block"> How many people are with you today? </label>

                <input type="number" required>


            </div>

                    <input class="inputNameDiv6" type="Submit" value="Submit" name="Submit" required>

                </form>

            </body>
            </html>
