<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "petopia_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);

    $sql = "INSERT INTO leads (name, email) VALUES ('$name', '$email')";
    if ($conn->query($sql) === TRUE) {
        header("Location: public/html/thank_you.html");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petopia - Adopt, Love, Cherish</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../PET/public/css/styles.css">

</head>
<body class="loaded">

<section id="hero" class="hero relative flex items-center justify-center text-center text-white min-h-screen bg-cover bg-center" 
    style="background-image: url('public/images/hero_image.jpg'); background-size:contain;">

    <!-- Dark Overlay for Better Readability -->
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

    <div class="relative z-10 max-w-2xl p-8">
        <h1 class="text-5xl font-bold">Welcome to <span class="text-pink-400">Petopia</span> 🐾</h1>
        <p class="text-lg mt-3">Every Pet Deserves a Loving Home! Join our community and help us to give pets the love they need.</p>
        <a href="#lead-form" class="mt-6 inline-block bg-pink-500 text-white px-6 py-3 rounded-lg text-lg hover:bg-pink-600 transition-all">
        Be a Pet Hero!
        </a>
    </div>
</section>





    <!-- Why Petopia Section (Updated) -->
    <section id="why-petopia" class="section">
        <h2 class="text-4xl font-bold text-gray-700">Why Choose Petopia?</h2>
        <p class="mt-4 text-lg">We are passionate about helping animals find loving homes. Here’s why families trust us:</p>
        <div class="mt-8 grid md:grid-cols-3 gap-6">
            <div class="feature-box">
                <i class="fas fa-heart text-pink-500 text-5xl"></i>
                <h3 class="text-2xl font-semibold mt-4">Trusted Network</h3>
                <p>We work with reputable shelters and rescue organizations.</p>
            </div>
            <div class="feature-box">
                <i class="fas fa-paw text-pink-500 text-5xl"></i>
                <h3 class="text-2xl font-semibold mt-4">Health & Safety</h3>
                <p>All pets are vaccinated, checked, and ready for adoption.</p>
            </div>
            <div class="feature-box">
                <i class="fas fa-users text-pink-500 text-5xl"></i>
                <h3 class="text-2xl font-semibold mt-4">Community Support</h3>
                <p>Get access to our network of pet trainers and vet support.</p>
            </div>
        </div>
        <a href="#lead-form" class="mt-6 inline-block btn-pink">Find Your Furry Friend</a>

    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="section bg-gray-100">
        <h2 class="text-4xl font-bold text-gray-700">Happy Adopters</h2>
        <div class="mt-8 grid md:grid-cols-2 gap-6">
            <div class="testimonial">
                <p>"Best decision ever! Our new puppy is amazing."</p>
                <strong>- Sarah & Max</strong>
            </div>
            <div class="testimonial">
                <p>"Smooth process and a perfect match for our family!"</p>
                <strong>- Jason & Bella</strong>
            </div>
            <div class="testimonial">
                <p>"Petopia helped us find the best companion for our home!"</p>
                <strong>- Emma & Oliver</strong>
            </div>
            <div class="testimonial">
                <p>"The process was seamless, and we love our new kitten!"</p>
                <strong>- Lucas & Anna</strong>
            </div>
        </div>
        <a href="#lead-form" class="mt-6 inline-block btn-pink">Start Your Adoption!</a>
    </section>

    <!-- Contact Form -->
    <section id="lead-form" class="section bg-pink-100">
        <h2 class="text-4xl font-bold text-gray-700">Join Our Adoption Program</h2> <br>
        <div class="form-container">

            <form method="POST">
                <input type="text" name="name" class="w-full p-3 my-2 border rounded" placeholder="Your Name" required>
                <input type="email" name="email" class="w-full p-3 my-2 border rounded" placeholder="Your Email" required>
                <button type="submit" class="btn-pink w-full mt-3">Sign Up</button>
            </form>
        </div>
        <a href="#hero" class="mt-6 inline-block btn-pink">Back to Love!</a>
    </section>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.body.classList.add("loaded");
    });
</script>

</body>
</html>
