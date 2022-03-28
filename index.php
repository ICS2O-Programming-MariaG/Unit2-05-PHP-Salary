<DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Maria's Currency Webpage">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="MariaG">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Maria's PHP Currency Webpage</title>
  </head>
  <body>
    <?php 
      echo "<h1>Calculating Pay and Tax in PHP Based on Hours Worked and Hourly Rate</h1>";
      echo "<p>Welcome! Input your hours worked and hourly rate below to calculate the amount of money you make and the amount of money that goes to taxes:</p>";
      echo "<h3>Your Input:</h3>";
    ?>
    <!-- Form for user input -->
    <form action="./calculations.php" method="post" target="result">
      <label for="hours">Number of hours worked</label>
      <input type="number" id="hours-worked" placeholder="Hours worked..." name="hours-worked"><br><br>
      <label for="rate">Hourly rate</label>
      <input type="number" id="hourly-rate" placeholder="Your hourly rate..." name="hourly-rate"><br><br>
      <input type="submit" value="Calculate">
    </form>
    <!-- Div for calculations -->
    <iframe id="result">
    </iframe>
  </body>
</html>