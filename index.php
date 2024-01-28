<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width">
        <title>Form Validation</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/7b01594302.js" crossorigin="anonymous"></script>
    </head>
<body>
    
<div class="container">
    <form method="post" action="register.php">
<i class="fas fa-paper-plane"></i>

<div class="input-group">
    <label>Full Name:</label>
    <input type="text" name="full_name" placeholder="Enter your name" id="contact-name" onkeyup="validateName()">
    <span id="name-error"></span>
</div>
<div class="input-group">
    <label>Phone No:</label>
    <input type="tel" name="ph_no" placeholder="123 456 7890" id="contact-phone" onkeyup="validatePhone()">
    <span id="phone-error"></span>
</div>
<div class="input-group">
    <label>Email ID</label>
    <input type="email" name="email" placeholder="Enter email" id="contact-email" onkeyup="validateEmail()">
    <span id="email-error"></span>
</div>
<div class="input-group">
    <label>Your Message</label>
    <textarea rows="3" name="sms" placeholder="Enter your message" id="contact-message" onkeyup="validateMessage()"></textarea>
    <span id="message-error"></span>
</div>

<button onclick="return validateForm()">Submit</button>
<span id="submit-error"></span>


    </form>
</div>
<script src="script.js">

</script>

</body>

</html>