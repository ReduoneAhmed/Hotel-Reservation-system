<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Walk-in Booking – Rooms</title>
  <link rel="stylesheet" href="/Summer-wbt-2025/Hotel_Reservation_System/css/rooms.css">
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
      <h1>Our Rooms</h1>
    </header>

    <!-- Room Selection Section -->
    <section id="room-selection">
      <h2>Room Selection</h2>

      <div class="room-options">
        <!-- Each "Select Room" link sends room + price to addbooking.php via GET -->
        <div class="room-card">
          <img src="/Summer-wbt-2025/Hotel_Reservation_System/images/room1.jpg" alt="Luxury Suite">
          <div class="room-details">
            <p class="room-name">Luxury Suite</p>
            <p class="room-price">$199</p>
            <a class="select-room"
               href="/Summer-wbt-2025/Hotel_Reservation_System/php/addbooking.php?room=Luxury%20Suite&price=199">Select Room</a>
          </div>
        </div>

        <div class="room-card">
          <img src="/Summer-wbt-2025/Hotel_Reservation_System/images/room2.jpg" alt="Deluxe Room">
          <div class="room-details">
            <p class="room-name">Deluxe Room</p>
            <p class="room-price">$149</p>
            <a class="select-room"
               href="/Summer-wbt-2025/Hotel_Reservation_System/php/addbooking.php?room=Deluxe%20Room&price=149">Select Room</a>
          </div>
        </div>

        <div class="room-card">
          <img src="/Summer-wbt-2025/Hotel_Reservation_System/images/room3.jpg" alt="Standard Room">
          <div class="room-details">
            <p class="room-name">Standard Room</p>
            <p class="room-price">$99</p>
            <a class="select-room"
               href="/Summer-wbt-2025/Hotel_Reservation_System/php/addbooking.php?room=Standard%20Room&price=99">Select Room</a>
          </div>
        </div>

        <div class="room-card">
          <img src="/Summer-wbt-2025/Hotel_Reservation_System/images/room4.jpeg" alt="Executive Suite">
          <div class="room-details">
            <p class="room-name">Executive Suite</p>
            <p class="room-price">$299</p>
            <a class="select-room"
               href="/Summer-wbt-2025/Hotel_Reservation_System/php/addbooking.php?room=Executive%20Suite&price=299">Select Room</a>
          </div>
        </div>

        <div class="room-card">
          <img src="/Summer-wbt-2025/Hotel_Reservation_System/images/room7.jpeg" alt="Penthouse">
          <div class="room-details">
            <p class="room-name">Penthouse</p>
            <p class="room-price">$399</p>
            <a class="select-room"
               href="/Summer-wbt-2025/Hotel_Reservation_System/php/addbooking.php?room=Penthouse&price=399">Select Room</a>
          </div>
        </div>

        <div class="room-card">
          <img src="/Summer-wbt-2025/Hotel_Reservation_System/images/room6.jpeg" alt="Ocean View Room">
          <div class="room-details">
            <p class="room-name">Ocean View Room</p>
            <p class="room-price">$249</p>
            <a class="select-room"
               href="/Summer-wbt-2025/Hotel_Reservation_System/php/addbooking.php?room=Ocean%20View%20Room&price=249">Select Room</a>
          </div>
        </div>

        <div class="room-card">
          <img src="/Summer-wbt-2025/Hotel_Reservation_System/images/room7.jpeg" alt="Garden Suite">
          <div class="room-details">
            <p class="room-name">Garden Suite</p>
            <p class="room-price">$179</p>
            <a class="select-room"
               href="/Summer-wbt-2025/Hotel_Reservation_System/php/addbooking.php?room=Garden%20Suite&price=179">Select Room</a>
          </div>
        </div>

        <div class="room-card">
          <img src="/Summer-wbt-2025/Hotel_Reservation_System/images/room1.jpg" alt="King Suite">
          <div class="room-details">
            <p class="room-name">King Suite</p>
            <p class="room-price">$299</p>
            <a class="select-room"
               href="/Summer-wbt-2025/Hotel_Reservation_System/php/addbooking.php?room=King%20Suite&price=299">Select Room</a>
          </div>
        </div>

        <div class="room-card">
          <img src="/Summer-wbt-2025/Hotel_Reservation_System/images/room9.jpeg" alt="Poolside Room">
          <div class="room-details">
            <p class="room-name">Poolside Room</p>
            <p class="room-price">$229</p>
            <a class="select-room"
               href="/Summer-wbt-2025/Hotel_Reservation_System/php/addbooking.php?room=Poolside%20Room&price=229">Select Room</a>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>
</html>
