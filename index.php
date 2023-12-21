<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css"> <!-- Your custom CSS file -->
</head>
<body>
  <div class="container mt-5">
    <div class="card">
      <div class="card-header bg-primary text-white">
        <h3>Registration Form</h3>
      </div>
      <div class="card-body">

  <form action="add.php" method="post" class="form">
    
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
    </div>
    <div class="form-group">
        <label for="dob">Date of Birth:</label>
        <input type="date" class="form-control" id="dob" name="dob" required>
    </div>
    <div class="form-group">
        <label for="mobile">Mobile Number:</label>
        <input type="text" class="form-control" id="mobile" name="mobile" maxlength="10" required>
    </div>
    <div class="form-group">
        <label for="address">Address:</label>
        <textarea class="form-control" id="address" name="address" rows="3" placeholder="Write your Address"></textarea>
    </div>
    <div class="form-group">
        <label for="empID">Employee ID:</label>
        <input type="text" class="form-control" id="empID" name="empID" maxlength="10" required disabled>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-success mr-3">Save</button>
        <button type="button" class="btn btn-secondary">Cancel</button>
    </div>
</form>


      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
