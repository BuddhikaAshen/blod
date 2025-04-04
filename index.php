<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LifeShare - Home</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
  
<style>
/* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8f9fa;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #fff;
    padding: 15px 50px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}

.logo {
    font-size: 24px;
    font-weight: bold;
    color: #e63946;
}

nav ul {
    list-style: none;
    display: flex;
    gap: 20px;
}

nav ul li a {
    text-decoration: none;
    color: #333;
    font-weight: bold;
}

.register-btn {
    background: #e63946;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
}

/* Hero Section */
.hero {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 50px;
    background: #ffe5e5;
    flex-wrap: wrap;
}

.hero-text {
    max-width: 50%;
}

.hero-text h1 {
    font-size: 36px;
    color: #333;
}

.donate-btn {
    background: #e63946;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
}

/* Stats Section */
.stats {
    display: flex;
    justify-content: center;
    text-align: center;
    padding: 50px;
    background: #fff;
    flex-wrap: wrap;
    gap: 20px; /* Adds spacing between stat items */
}

.stat-item {
    padding: 20px;
    background: #e0e3e6;
    border-radius: 10px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    min-width: 150px; /* Ensures consistent sizing */
}


/* How to Donate */
.how-to-donate {
    text-align: center;
    padding: 50px;
    background: #dce6f0;
}

.steps {
    display: flex;
    justify-content: center;
    gap: 30px;
}

.step {
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}


/* Emergency Requests */
.emergency {
    text-align: center;
    padding: 50px;
    background: #fff;
}

.requests {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.request {
    background: #ffe5e5;
    padding: 20px;
    border-radius: 10px;
}

.urgent {
    color: #e63946;
    font-weight: bold;
}

.respond-btn {
    background: #e63946;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
}



</style>

</head>
<body>
    <div><?php include('navbar.php');?></div>
    <section class="hero">
        <div class="hero-text">
            <h1>Your Donation Can Save Lives</h1>
            <p>Every drop counts. Join our community of life-savers and make a difference today. One donation can save up to three lives.</p>
            <button class="donate-btn">Donate Now</button>
        </div>
        <div class="hero-image">
            <img src="img/nguy-n-hi-p-maYeMl3xCrY-unsplash.jpg" alt="Blood Donation">
        </div>
    </section>
    
    <section class="stats">
        <div class="stat-item"><h2>10K+</h2><p>Donors</p></div>
        <div class="stat-item"><h2>30K+</h2><p>Lives Saved</p></div>
        <div class="stat-item"><h2>50+</h2><p>Blood Banks</p></div>
        <div class="stat-item"><h2>24/7</h2><p>Support</p></div>
    </section>
    

    <section class="how-to-donate">
        <h2>How to Donate</h2>
        <div class="steps">
            <div class="step"><i class="fas fa-user-plus"></i><h3>Register</h3><p>Sign up as a donor in our system</p></div>
            <div class="step"><i class="fas fa-notes-medical"></i><h3>Screening</h3><p>Quick health check-up</p></div>
            <div class="step"><i class="fas fa-hand-holding-medical"></i><h3>Donation</h3><p>Safe and easy donation process</p></div>
            <div class="step"><i class="fas fa-clock"></i><h3>Recovery</h3><p>Short rest and refreshments</p></div>
        </div>
    </section>
    

    
    <section class="emergency">
        <h2>Emergency Requests</h2>
        <div class="requests">
            <div class="request"><h3>Blood Type: A+</h3><span class="urgent">Urgent</span><p>Needed for surgery at Colombo Hospital. Required within 24 hours.</p><button class="respond-btn">Respond</button></div>
            <div class="request"><h3>Blood Type: B+</h3><span class="urgent">Urgent</span><p>Needed for surgery at Galle Hospital. Required within 24 hours.</p><button class="respond-btn">Respond</button></div>
            <div class="request"><h3>Blood Type: AB-</h3><span class="urgent">Urgent</span><p>Needed for surgery at City Hospital. Required within 24 hours.</p><button class="respond-btn">Respond</button></div>
        </div>
    </section>
    
    
    <div id="footer"></div>
    
</body>
</html>