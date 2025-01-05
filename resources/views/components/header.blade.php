<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/header_style.css">
  <!-- Font Awesome for icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
  <title>{{$title}}</title>
</head>
<body>
  <header class="header">
    <div class="header-row">
      <div class="logo">YourLogo</div>
      <div class="search-bar">
        <input type="text" placeholder="Search...">
        <button><i class="fas fa-search"></i></button>
      </div>
    </div>
    <nav class="nav-bar">
      <ul>
        <li><a href="custom_orders.php" style="justify-content: left;">Custom Orders</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="artists.php">Artists</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="login">Sign In</a></li>
      </ul>
    </nav>
  </header>
  <div>
    {{$main}}
  </div>
  
  <footer class="footer">
    <div class="footer-section">
      <p>© 2025 YourWebsite. All rights reserved.</p>
    </div>
    <div class="footer-section">
      <h4>Contact</h4>
      <p>Phone: +123-456-7890</p>
      <p>Email: info@yourwebsite.com</p>
      <p>Address: 123 Main Street, YourCity</p>
    </div>
    <div class="footer-section">
      <h4>Important Links</h4>
      <ul>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="artists.php">Artists</a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h4>Follow Us</h4>
      <a href="#"><i class="fab fa-facebook"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-linkedin"></i></a>
    </div>
  </footer>
</body>
</html>
