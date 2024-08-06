<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Razorpay</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <div class="container mt-3" style="width: 50%;">
    <h2>Razorpay Payment Integration in PHP</h2>
    <form action="#">
      <div class="mb-3 mt-3">
        <label for="email">Payee Name:</label>
        <input type="email" class="form-control" id="name" placeholder="Enter Payee Name" name="payee_name">
      </div>
      <div class="mb-3">
        <label for="pwd">Amount:</label>
        <input type="number" class="form-control" id="amount" placeholder="Enter Amount" name="amount">
      </div>
      <div class="mb-3">
        <label for="pwd">Item Description:</label>
        <input type="text" class="form-control" id="description" placeholder="Enter Description" name="description">
      </div>
      <button type="button" class="btn btn-primary" id="rzp-button1" onclick="pay_now()">Pay</button>
    </form>
    <!-- <button type="button" class="btn btn-primary" id="rzp-button1" onclick="pay_now()">Pay</button> -->
  </div>

</body>

</html>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script type="text/javascript">
  function pay_now() {

    //get the input from the form
    //var name = $("#payee_name").val();
    var amount = $("#amount").val();
    var actual_amount = amount * 100;
    //var description = $('#description').val();
    //var actual_amount = amount;
    var options = {
      "key": "rzp_test_Rb3NpMlsXQMQ3k", // Enter the Key ID generated from the Dashboard
      "amount": '100', // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
      "currency": "INR",
      "name": "Mojouri",
      "description": "Payment to Mojouri",
      "image": "razorpay.png",
      "order_id": 'RRR', //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
      "handler": function(response) {
        console.log(response);
        //alert(response);
        $.ajax({

          url: 'process_payment.php',
          'type': 'POST',
          'data': {
            'payment_id': response.razorpay_payment_id,
            'amount': actual_amount,
            'name': name
          },
          success: function(data) {
            console.log(data);
            // alert(data);
            window.location.href = 'thank_you.php';
          }

        });
        //alert(response.razorpay_payment_id);
        //alert(response.razorpay_order_id);
        //alert(response.razorpay_signature)
      },

    };
    var rzp1 = new Razorpay(options);
    rzp1.on('payment.failed', function(response) {
      alert(response.error.code);
      alert(response.error.description);
      alert(response.error.source);
      alert(response.error.step);
      alert(response.error.reason);
      alert(response.error.metadata.order_id);
      alert(response.error.metadata.payment_id);
    });
    document.getElementById('rzp-button1').onclick = function(e) {
      rzp1.open();
      e.preventDefault();
    }
  }
</script>