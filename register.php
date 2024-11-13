<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data Collection Form</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>

<div class="form-container">
    <h2>User Data Collection Form</h2>
    <form action="config/handle_form.inc.php" method="POST">
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" required>

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" min="1" required>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>

        <label for="maritalStatus">Marital Status:</label>
        <select id="maritalStatus" name="maritalStatus" required>
            <option value="single" selcted>Single</option>
            <option value="married">Married</option>
            <option value="divorced">Divorced</option>
            <option value="widowed">Widowed</option>
        </select>

        <label for="educationLevel">Education Level:</label>
        <select id="educationLevel" name="educationLevel" required>
            <option value="highschool" selected>High School</option>
            <option value="bachelors">Bachelor's Degree</option>
            <option value="masters">Master's Degree</option>
            <option value="phd">PhD</option>
        </select>

        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>
