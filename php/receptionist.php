<?php
session_start();

$cfg = __DIR__ . '/../config.php';
$dbf = __DIR__ . '/../db.php';
if (file_exists($cfg)) { require_once $cfg; }
if (file_exists($dbf)) { require_once $dbf; }

$today = date('Y-m-d');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Receptionist Dashboard</title>
  <link rel="stylesheet" href="/Summer-wbt-2025/Hotel_Reservation_System/css/receptionist.css">
</head>
<body>
  <div class="container">
    <nav>
      <ul class="nav-links">
        <li><a href="/Summer-wbt-2025/Hotel_Reservation_System/php/index.php">Home</a></li>
        <li><a href="/Summer-wbt-2025/Hotel_Reservation_System/php/admin.php">Admin</a></li>
        <li><a href="/Summer-wbt-2025/Hotel_Reservation_System/php/loginreceptionist.php">Login</a></li>
        <li><a class="active" href="/Summer-wbt-2025/Hotel_Reservation_System/php/receptionist.php">Receptionist</a></li>
        <li><a href="/Summer-wbt-2025/Hotel_Reservation_System/php/services.php">Services</a></li>
        <li><a class="logout-button" href="/Summer-wbt-2025/Hotel_Reservation_System/php/loginreceptionist.php">Log Out</a></li>
      </ul>
    </nav>

    <header>
      <h1>Receptionist Dashboard</h1>
      <p>Today: <?php echo htmlspecialchars($today, ENT_QUOTES); ?></p>
      <div class="actions">
        <button onclick="window.location.href='/Summer-wbt-2025/Hotel_Reservation_System/php/rooms.php'">
          Add Walk-in Booking
        </button>
        <button onclick="window.location.href='/Summer-wbt-2025/Hotel_Reservation_System/php/reservation_view.php'">
          Find Reservation
        </button>
      </div>
    </header>


     </header>

        <section id="today-activity">
            <h2>Today's Activity</h2>
            <p>12 Arrivals | 8 Departures | 4 Stayovers</p>
        </section>

        <section id="room-status">
            <h2>Room Status Grid</h2>
            <table>
                <thead>
                    <tr>
                        <th>Room Number</th>
                        <th>Room Type</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>101</td>
                        <td>Deluxe Double</td>
                        <td><span class="status available">Available</span></td>
                        <td><button class="create-booking" onclick="window.location.href='../html/rooms.html'">Create
                                Booking</button></td>
                    </tr>
                    <tr>
                        <td>102</td>
                        <td>Deluxe Double</td>
                        <td><span class="status occupied">Occupied</span></td>
                        <td><button class="view-details" onclick="viewGuestDetails(102)">View Details</button></td>
                    </tr>
                    <tr>
                        <td>103</td>
                        <td>Standard Single</td>
                        <td><span class="status needs-cleaning"> Cleaning</span></td>
                        <td><button class="clean-room" onclick="requestCleaning(103)">Request Cleaning</button></td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section id="pending-check-in">
            <h2>Arrivals Pending Check-in</h2>
            <ul>
                <li>Osman Goni, Booking #1145, Suite</li>
                <li>Jane Doe, Booking #1146, Standard King</li>
            </ul>
        </section>

    <main>
      <section class="cards">
      </section>
    </main>
  </div>
</body>
</html>
