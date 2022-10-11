<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/Arsha/assets/css/style_hu.css">
    <title>Video-2</title>
</head>

<body class="main_bg">
    <div class="form">
        <div class="form-text">
            <h1>Book Now</h1>
            <p>Tes.</p>
        </div>
        <div class="main-form">
            <form action="index.php" method="get">
                <div>
                    <span>Full Name</span>
                    <input type="text" name="name" id="name" placeholder="Write your name here..." required>
                </div>
                <div>
                    <span>Email Address</span>
                    <input type="email" name="name" id="name" placeholder="Write your email here..." required> 
                </div>
                <div>
                    <!-- <---this is the select option--->
                    <span>Number of People</span>
                    <select name="people" id="people" required>
                        <option value=""><---People---></option>
                        <option value="1">1 People</option>
                        <option value="2">2 People</option>
                        <option value="3">3 People</option>
                        <option value="4">4 People</option>
                    </select>
                    <!-- <---this is the select option--->
                </div>
                <div>
                    <span>Time</span>
                    <input type="text" name="time" id="time" placeholder="Time" required>
                </div>
                <div>
                    <span>Date</span>
                    <input type="date" name="date" id="date" placeholder="date" required>
                </div>
                <div>
                    <span>Phone Number</span>
                    <input type="number" name="number" id="number" placeholder="Write your number here..." required>
                </div>
                <div id="submit">
                    <input type="submit" value="SUBMIT" id="submit">
                </div>


            </form>
        </div>
    </div>
</body>

</html>