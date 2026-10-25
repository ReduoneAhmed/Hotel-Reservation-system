<?php
// addbooking.php
session_start();

// Get and sanitize the incoming room data
$room  = isset($_GET['room'])  ? trim($_GET['room'])  : '';
$price = isset($_GET['price']) ? trim($_GET['price']) : '';

// Ensure price is numeric (fallback to empty if not)
if ($price !== '' && !is_numeric($price)) {
  $price = '';
}

// For display safety
$room_display  = htmlspecialchars($room,  ENT_QUOTES);
$price_display = htmlspecialchars($price, ENT_QUOTES);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Walk-in Booking</title>
  <link rel="stylesheet" href="/Summer-wbt-2025/Hotel_Reservation_System/css/addbooking.css">
</head>
<body>
  <div class="container">
    <nav>
      <ul class="nav-links">
        <li><a href="/Summer-wbt-2025/Hotel_Reservation_System/php/index.php">Home</a></li>
        <li><a href="/Summer-wbt-2025/Hotel_Reservation_System/php/admin.php">Admin</a></li>
        <li><a href="/Summer-wbt-2025/Hotel_Reservation_System/php/loginreceptionist.php">Login</a></li>
        <li><a href="/Summer-wbt-2025/Hotel_Reservation_System/php/receptionist.php" class="active">Receptionist</a></li>
        <li><a href="/Summer-wbt-2025/Hotel_Reservation_System/php/services.php">Services</a></li>
        <li><a class="logout-button" href="/Summer-wbt-2025/Hotel_Reservation_System/php/loginreceptionist.php">Log Out</a></li>
      </ul>
    </nav>

    <header>
      <h1>Booking Form</h1>
    </header>

    <!-- Use POST so details don't sit in the URL -->
    <form action="/Summer-wbt-2025/Hotel_Reservation_System/php/bookingdetails.php" method="POST">
      <div class="container">

        <label for="guest-name">Full Name:</label>
        <input type="text" id="guest-name" name="guest_name" required placeholder="Enter Full Name">

        <label for="guest-email">Email Address:</label>
        <input type="email" id="guest-email" name="guest_email" required placeholder="Enter Email Address">

        <label for="guest-phone">Phone Number:</label>
        <input type="tel" id="guest-phone" name="guest_phone" required placeholder="Enter Phone Number">

        <label for="check-in">Check-in Date:</label>
        <input type="date" id="check-in" name="check_in" required>

        <label for="check-out">Check-out Date:</label>
        <input type="date" id="check-out" name="check_out" required>

        <!-- Room Details Section (Displayed on the page) -->
        <h2>Room Details</h2>
        <p><strong>Room Type:</strong> <span><?php echo $room_display !== '' ? $room_display : 'Not selected'; ?></span></p>
        <p><strong>Price Per Night:</strong> <span><?php echo $price_display !== '' ? '$' . $price_display : '—'; ?></span></p>

        <!-- Hidden fields to pass along -->
        <input type="hidden" name="room"  value="<?php echo $room_display; ?>">
        <input type="hidden" name="price" value="<?php echo $price_display; ?>">

        <div class="confirmation">
          <button type="button" class="back-btn"
                  onclick="window.location.href='/Summer-wbt-2025/Hotel_Reservation_System/php/rooms.php'">
            Back
          </button>
          <button type="submit" class="next-btn">Next</button>
        </div>

      </div>
    </form>
  </div>
</body>
</html>
