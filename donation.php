<?php
include "header.php"
?>


<?php
if (isset($_POST['submit'])) {
    $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
    $street = mysqli_real_escape_string($con, $_POST['street']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $state = mysqli_real_escape_string($con, $_POST['state']);
    $postalcode = mysqli_real_escape_string($con, $_POST['postalcode']);
    $country = mysqli_real_escape_string($con, $_POST['country']);
    $area_code = mysqli_real_escape_string($con, $_POST['area_code']);
    $number = mysqli_real_escape_string($con, $_POST['number']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $msg = mysqli_real_escape_string($con, $_POST['msg']);
    $donation_type = mysqli_real_escape_string($con, $_POST['donation_type']);
    $donation_item = mysqli_real_escape_string($con, $_POST['donation_item']);
    $quantity = mysqli_real_escape_string($con, $_POST['quantity']);

    $item_description = mysqli_real_escape_string($con, $_POST['item_description']);
    $delivery_method = mysqli_real_escape_string($con, $_POST['delivery_method']);
    $amount = mysqli_real_escape_string($con, $_POST['amount']);
    $payment_method = mysqli_real_escape_string($con, $_POST['payment_method']);

    if ($_FILES['item_image']['name'] == "") {
        $item_image = "";
    } else {
        $item_image = $_FILES['item_image']['name'];
        $temp_name = $_FILES['item_image']['tmp_name'];
        $location = "uploads/" . $_FILES['item_image']['name'];
        move_uploaded_file($temp_name, $location);
    }

    $query = "insert into donation(first_name,last_name,street,city,state,postalcode,country,area_code,number,email,msg,donation_type,donation_item,quantity,item_image,item_description,delivery_method,amount,payment_method,curdate) values('$first_name','$last_name','$street','$city','$state','$postalcode','$country','$area_code','$number','$email','$msg','$donation_type','$donation_item','$quantity','$item_image','$item_description','$delivery_method','$amount','$payment_method',now())";
    if (mysqli_query($con, $query)) {
        echo "<script>alert('Thank You for your support')</script>";
    } else {
        echo mysqli_error($con);
    }
}
?>

</div>
<form class="my-5" action="<?= $_SERVER['PHP_SELF']; ?> " method="post" enctype="multipart/form-data">
    <div class="row px-5 mt-2" id="contactform">
        <div class="col-md-3 text-center pt-2 ">
            <lable class="fw-bold">Full Name</lable>
        </div>
        <div class="col-md-4 mb-3 ">
            <input type="text" class="form-control rounded-0" name="first_name" placeholder="First Name" pattern="[A-Za-z ]*" required>
        </div>
        <div class="col-md-4 mb-3">
            <input type="text" class="form-control rounded-0" name="last_name" placeholder="Last Name" pattern="[A-Za-z ]*" required>
        </div>

        <div class="col-md-3 text-center pt-2">
            <lable class="fw-bold ">Address</lable>
        </div>
        <div class="col-md-8 mb-3">
            <input type="text" class="form-control rounded-0" name="street" placeholder="Street address" required>
        </div>

        <div class="col-md-3"></div>
        <div class="col-md-4 mb-3 ">
            <input type="text" class="form-control rounded-0" name="city" placeholder="City" required>
        </div>
        <div class="col-md-4 mb-3">
            <select class="form-control rounded-0" name="state" required>
                <option value="">-Select State-</option>
                <option>Punjab</option>
                <option>Haryana</option>
                <option>Jammu</option>
                <option>Bihar</option>
                <option>Goa</option>
                <option>Gujrat</option>
                <option>Rajasthan</option>
            </select>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-4 mb-3 ">
            <input type="text" class="form-control rounded-0" name="postalcode" placeholder="Postal/Zip code" required>
        </div>
        <div class="col-md-4 mb-3">
            <select class="form-control rounded-0" name="country" required>
                <option value="">-Select Country-</option>
                <option>India</option>
                <option>USA</option>
                <option>Japan</option>
                <option>Nepal</option>
                <option>Shri Lanka</option>
            </select>
        </div>
        <div class="col-md-3 text-center pt-2  ">
            <label class="fw-bold ">Phone Number</label>
        </div>
        <div class="col-md-4  mb-3">
            <input type="tel" class="form-control rounded-0" name="area_code" placeholder="Area code" pattern="[6|7|8|9][0-9]{6}" required>
        </div>
        <div class="col-md-4 mb-3">
            <input type="tel" class="form-control rounded-0" name="number" placeholder="Phone Number" pattern="[6|7|8|9][0-9]{9}" required>
        </div>

        <div class="col-md-3 text-center pt-2 ">
            <label class="fw-bold ">E-mail</label>
        </div>
        <div class="col-md-8 mb-3">
            <input type="email" class="form-control rounded-0" name="email" placeholder="example@example.com" required>
        </div>
        <div class="col-md-3 text-center pt-2">
            <label class="fw-bold ">Message</label>
        </div>
        <div class="col-md-8 mb-3   ">
            <textarea class="form-control rounded-0 fs-6 " name="msg" placeholder="Enter Message" rows="7"></textarea>
        </div>
        <div class="col-md-3 text-center pt-2">
            <label class="fw-bold">Donation type</label>
        </div>
        <!-- <script>
            function getdiv(val) {
                if (val == 'Item') {
                    document.getElementById('Itemdiv').style.display = 'block';
                } else  {
                    document.getElementById('Itemdiv').style.display = 'none';
                }
                if (val == 'Money') {
                    document.getElementById('Amountdiv').style.display = 'block';
                } else  {
                    document.getElementById('Amountdiv').style.display = 'none';
                }
            }
        </script> -->
        <div class="col-md-8 mb-3">
            <select class="form-control rounded-0 " id="selectdonationtype" name="donation_type" required>
                <option value="">-Select Donation type-</option>
                <option>Item</option>
                <option>Money</option>
            </select>
        </div>
        <div class="row" id="Itemdiv">
            <div class="col-md-3 text-center pt-2">
                <label class="fw-bold">Item type</label>
            </div>
            <div class="col-md-8 mb-3">
                <select class="form-control rounded-0 " name="donation_item">
                    <option value="">-Select Donation Item-</option>
                    <option>Clothes</option>
                    <option>Vegetables</option>
                    <option>Fruits</option>
                    <option>Bread</option>
                    <option>Books</option>
                    <option>Shoes</option>
                    <option>Stationery</option>

                </select>
            </div>
            <div class="col-md-3 text-center pt-2">
                <label class="fw-bold">Quantity</label>
            </div>
            <div class="col-md-8 mb-3">
                <select class="form-control rounded-0 " name="quantity">
                    <option value="">-Select quantity-</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                </select>
            </div>
            <div class="col-md-3 text-center pt-2">
                <label class="fw-bold ">Item Image</label>
            </div>
            <div class="col-md-8 mb-3   ">
                <input class="form-control rounded-0 fs-6" type="file" name="item_image" />
            </div>
            <div class="col-md-3 text-center pt-2">
                <label class="fw-bold ">Item description</label>
            </div>
            <div class="col-md-8 mb-3   ">
                <textarea class="form-control rounded-0 fs-6 " name="item_description" placeholder="Please Specify Size/Weight/Unit of measure" rows="5  required "></textarea>
            </div>
            <div class="col-md-3 text-center pt-2">
                <label class="fw-bold">Delivery Methods</label>
            </div>
            <div class="col-md-8 mb-3">
                <select class="form-control rounded-0 " name="delivery_method">
                    <option value="">-Select Delivery Methods-</option>
                    <option>Courier Yourself</option>
                    <option> Schedule a pick up</option>
                </select>
            </div>
        </div>
        <div class="row" id="Amountdiv">
            <div class="col-md-3 text-center pt-2 ">
                <label class="fw-bold ">Amount</label>
            </div>
            <div class="col-md-8 mb-3">
                <input type="amount" class="form-control rounded-0" name="amount" placeholder="Charity Donation">
            </div>
            <div class="col-md-3 text-center pt-2">
                <label class="fw-bold">Payment Methods</label>
            </div>
            <!-- <div class="col-md-8 mb-3">
                <select class="form-control rounded-0 " name="payment_method" >
                    <option value="">-Select Payment Methods-</option>
                    <option>Debit or Credit card</option>
                    <option>PayPal</option>
                    <option>UPI</option>
                </select>
            </div> -->
        </div>
        <div class="col-md-12"><button class="btn  rounded-0 px-5 py-3 " name="submit" id="Sendbtn" type="submit">Donate</button> </div>
    </div>
</form>






<div></div>

<button id="rzp-button1">Pay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    var options = {
        "key": "YOUR_KEY_ID", // Enter the Key ID generated from the Dashboard
        "amount": "50000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
        "currency": "INR",
        "name": "Acme Corp", //your business name
        "description": "Test Transaction",
        "image": "https://example.com/your_logo",
        "order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
        "callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",
        "prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information especially their phone number
            "name": "Gaurav Kumar", //your customer's name
            "email": "gaurav.kumar@example.com",
            "contact": "9000090000" //Provide the customer's phone number for better conversion rates 
        },
        "notes": {
            "address": "Razorpay Corporate Office"
        },
        "theme": {
            "color": "#3399cc"
        }
    };
    var rzp1 = new Razorpay(options);
    document.getElementById('rzp-button1').onclick = function(e) {
        rzp1.open();
        e.preventDefault();
    }
</script>


<?php
include "footer.php"
?>