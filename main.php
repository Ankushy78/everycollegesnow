<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore College Now</title>
    <style>
        /* General reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
        
    font-family: Arial, sans-serif;
    color: black;  /* This should be #FFF5E1 */
    background-color: #FFF5E1; /* Cream */
    height: 100%;
    overflow-x: hidden;
    scroll-behavior: smooth;}


        /* Header Navigation */
        header {
    background-color: #D4A7A1;  /* Dusty Rose */
    color: white;
    padding: 15px;
    position: fixed;
    width: 100%;
    top: 0;
    justify-content: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}


        header nav {
            display: flex;
            height: 80px;
            justify-content: center;
            gap: 20px;
        }
        header img{
            top:0px;
            bottom: 2px;
        position: absolute;
            left:15px;
            width:110px;
            height:100%;
        }

        header a {
            color: white;
            text-decoration: none;
            font-size: 25px;
            font-weight: bolder;
            padding: 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        header a:hover {
            background-color: #D4A7A1;
        }

        /* Scrollable Content */
        .content {
            margin-top: 80px; /* Prevent content from hiding behind the fixed header */
            padding: 20px;
            color: black;
        }

        .section-title {
            font-size: 36px;
            text-align: center;
            margin-bottom: 20px;
            color: black;
        }

        .section-content {
            font-size: 18px;
            line-height: 1.6;
            color: black;
            max-width: 800px;
            margin: 0 auto;
            text-align: justify;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 70px;
        }

        .form-group input,
        .form-group select,
        .form-group button {
            padding: 10px;
            font-size: 16px;
            margin: 10px;
            width: 300px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form-group button {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            border: none;
        }
        

        .form-group button:hover {
            background-color: #45a049;
        }

        /* Results Table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            color: black;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        .results-section {
            margin-top: 40px;
        }

        /* About Us and Team Sections */
        .about-us, .team {
            margin-top: 60px;
            padding: 40px 20px;
            background-color: #D4A7A1;
            color: black;
        }

        .about-us h2, .team h2 {
            font-size: 30px;
            text-align: center;
            margin-bottom: 20px;
        }

        .about-us p, .team p {
            font-size: 18px;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
            text-align: justify;
        }

        /* Contact Us Form */
        .contact-us form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        .contact-us input, .contact-us textarea {
            padding: 10px;
            font-size: 16px;
            margin: 10px;
            width: 300px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .contact-us button {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            margin-top: 10px;
        }

        .contact-us button:hover {
            background-color: #45a049;
        }

        /* Footer Styling */
        footer {
            background-color: #6A4E3D;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 60px;
            font-size: 16px;
        }

        footer a {
            color: #4CAF50;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .form-group input,
            .form-group select,
            .form-group button {
                width: 100%;
                padding: 12px;
            }

            .about-us p, .team p {
                font-size: 16px;
            }
        }


        /* Team Section */
        .team {
            padding: 60px 20px;
            text-align: center;
            background-color: #D4A7A1;
        }

        .team h2 {
            font-size: 36px;
            margin-bottom: 30px;
            color: #FFF5E1;
        }

        .team p {
            font-size: 18px;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto 40px;
            color: black;
        }

        /* Team Cards Container */
        .team-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        /* Card Styles */
        .card {
            position: relative;
            width: 250px;
            height: 350px;
            overflow: hidden;
            border-radius: 8px;
            background-color: #FFF5E1;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        .card:hover {
            transform: translateY(-30px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.5);
        }

        /* Image Style - Max size but doesn't stretch */
        .card img {
            width: 100%;
            height: auto;
            max-height: 200px;  /* Image size limit */
            object-fit: cover;
            margin-bottom: 15px;
        }

        /* Card Content */
        .card-content {
            padding: 10px;
        }

        .card h3 {
            font-size: 22px;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 16px;
            margin-bottom: 10px;
        }

        /* Social Media Icons Container */
        .social-links {
            margin-top: 15px;
        }

        .social-links a {
            text-decoration: none;
            margin: 0 10px;
            color: #bbb;
            font-size: 20px;
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: #4CAF50; /* Highlight color */
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .team-cards {
                flex-direction: column;
                align-items: center;
            }

            .card {
                width: 80%;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <nav>
            <a href="#search">Home</a>
            <a href="#about">About</a>
            <a href="#team">Team</a>  <!-- Changed Contact to Team -->
            <img src="logo.jpeg">
        </nav>
    </header>
    

    <!-- Main Content Section -->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Search</title>
    <style>
        /* Global Body Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #FFF5E1;
        }

        /* Carousel Styles */
        .carousel-container {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            margin-top: 120px; /* Adds space between the header and carousel */
            overflow: hidden; /* Ensures only one image is visible at a time */
        }

        .carousel {
            display: flex;
            transition: transform 0.5s ease; /* Smooth sliding transition */
        }

        .carousel img {
            width: 100vw; /* Each image takes 100% of the viewport width */
            height: 400px; /* Set height of each image */
            object-fit: cover; /* Ensures the image covers the area without stretching */
        }

        .arrow {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            font-size: 2rem;
            padding: 10px;
            cursor: pointer;
            border-radius: 50%;
            z-index: 10;
        }

        .arrow.left {
            position: absolute;
            left: 10px;
        }

        .arrow.right {
            position: absolute;
            right: 10px;
        }

        .arrow:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Search Form Styles */
        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        .form-group {
            text-align: center;
        }

        h1.section-title {
            font-size: 2rem;
            font-weight: bold;
        }

        p.section-content {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
        }

        input, select, button {
            padding: 8px;
            font-size: 1rem;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px 20px;
            border-radius: 5px;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <!-- Image Carousel Section -->
    <div class="carousel-container">
        <button class="arrow left" onclick="moveLeft()">&#10094;</button>
        <div class="carousel">
            <!-- Add your images here -->
            <img src="amar.jpeg" alt="College 1">
            <img src="ankush.jpg" alt="College 2">
            <img src="tanisha.jpeg" alt="College 3">
            <img src="seema.jpeg" alt="College 4">
            <img src="dheeraj.jpeg" alt="College 5">
            <img src="k.jpeg" alt="College 6">
            <img src="5.jpg" alt="College 7">
        </div>
        <button class="arrow right" onclick="moveRight()">&#10095;</button>
    </div>

    <!-- Search Form Section -->
    <div class="content" id="search">
        <div class="form-group">
            <h1 class="section-title">Explore Colleges Now</h1>
            <p class="section-content">Search for colleges by region and branch below:</p>

            <form action="" method="POST">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required><br><br>

                <label for="Region">Choose a Region:</label>
                <select name="value_filter" required>
                    <option value="none">None</option>
                    <option value="Thane">Thane</option>
                    <option value="Navi Mumbai">Navi Mumbai</option>
                    <option value="Mumbai">Mumbai</option>
                </select><br><br>

                <label for="course">Choose a Course:</label>
                <select id="course-select" name="course" required>
                    <option value="none">None</option>
                    <option value="pcm">PCM (Physics, Chemistry, Maths)</option>
                    <option value="pcb">PCB (Physics, Chemistry, Biology)</option>
                </select><br><br>

                <button type="submit">Search</button>
            </form>
        </div>
    </div>

    <script>
        let currentIndex = 0;

        // Move carousel to the left
        function moveLeft() {
            const images = document.querySelectorAll('.carousel img');
            const totalImages = images.length;

            if (currentIndex > 0) {
                currentIndex--;
            } else {
                currentIndex = totalImages - 1; // Loop to the last image
            }

            updateCarousel();
        }

        // Move carousel to the right
        function moveRight() {
            const images = document.querySelectorAll('.carousel img');
            const totalImages = images.length;

            if (currentIndex < totalImages - 1) {
                currentIndex++;
            } else {
                currentIndex = 0; // Loop to the first image
            }

            updateCarousel();
        }

        // Update carousel position
        function updateCarousel() {
            const carousel = document.querySelector('.carousel');
            const width = window.innerWidth; // Get the width of the viewport
            carousel.style.transform = `translateX(-${currentIndex * width}px)`;  // Move the carousel by one full image width
        }
    </script>

</body>
</html>

    <!-- Results Table -->
    <div class="results-section">
        <h2 class="section-title">College Directory</h2>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Region</th>
                        <th>College Name</th>
                        <th>Branch</th>
                        <th>PDF</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Results will be displayed here -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    // Get the necessary elements
    const courseSelect = document.getElementById('course-select');
    const branchSelect = document.getElementById('branch-select');

    // Function to update the branch options based on course selection
    courseSelect.addEventListener('change', function() {
        const selectedCourse = courseSelect.value;

        // Clear previous branch options
        branchSelect.innerHTML = '<option value="none">None</option>';

        // Show relevant branch options based on PCM or PCB selection
        if (selectedCourse === 'pcm') {
            branchSelect.innerHTML += '<option value="engineering">CS</option>';
            branchSelect.innerHTML += '<option value="pure-science">IT</option>';
            branchSelect.innerHTML += '<option value="pure-science">CSE(AIML)</option>';
            branchSelect.innerHTML += '<option value="pure-science">CSE(DS)</option>';
            branchSelect.innerHTML += '<option value="pure-science">CSE(IOT)</option>';
        } else if (selectedCourse === 'pcb') {
            branchSelect.innerHTML += '<option value="medical">Medical</option>';
            branchSelect.innerHTML += '<option value="biotechnology">Biotechnology</option>';
        }
    });
</script>

                        <?php
                            $connection = mysqli_connect("localhost:3306", "root", "", "ankush");

                            if (isset($_POST['Submit'])) {
                                $Region = $_POST['value_filter'];
                                $Branch = $_POST['filter_value'];

                                $query = "SELECT Region, Branch, CollegeName, PDF FROM data WHERE Region='$Region' AND Branch='$Branch'";
                                $mysqli_result = mysqli_query($connection, $query);

                                if (mysqli_num_rows($mysqli_result) > 0) {
                                    while ($row = mysqli_fetch_assoc($mysqli_result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['Region']; ?></td>
                            <td><?php echo $row['CollegeName']; ?></td>
                            <td><?php echo $row['Branch']; ?></td>
                            <td><a href="<?php echo $row['PDF']; ?>" target="_blank">Click Here</a></td>
                        </tr>
                        <?php
                                    }
                                } else {
                                    echo "<tr><td colspan='4'>No records found</td></tr>";
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- About Us Section -->
    <div class="about-us" id="about">
        <h2>About Us</h2>
        <p>At College Resolver, our mission is to provide students with all the information they need to make informed decisions about their future education. We aim to help students find the right college, course, and location, making the process of choosing higher education easier and more accessible.</p><br>
    <p>Mission:
    At College Resolver, our mission is to empower students with the knowledge and resources they need to make informed decisions about their higher education journey. We aim to simplify the process of selecting the right college, course, and location by providing up-to-date, accurate, and comprehensive information. Our goal is to ensure every student finds a path that aligns with their career aspirations, personal goals, and academic interests, helping them to achieve success both in their studies and beyond.</p>
    
    </div>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meet Our Team</title>
    <style>
        /* General reset */


        /* Team Section */
        .team {
            padding: 60px 20px;
            text-align: center;
            background-color: #D4A7A1;
        }

        .team h2 {
            font-size: 36px;
            margin-bottom: 30px;
            color: #FFF5E1;
        }

        .team p {
            font-size: 18px;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto 40px;
            color: #FFF5E1;
        }

        /* Team Cards Container */
        .team-cards {
            display: flex;
            flex-wrap: wrap;
            
            gap: 20px;
        }

        /* Card Styles */
        .card {
            position: relative;
            width: 250px;
            height: 400px;
            overflow: hidden;
            border-radius: 8px;
            background-color: #FFF5E1;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            text-align: center;
            perspective: 1000px; /* Perspective for 3D flip */
        }

        /* Card Content (for the flip effect) */
        .card-content {
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
            transition: transform 0.6s;
            position: relative;
        }

        /* Flip effect */
        .card-content.flipped {
            transform: rotateY(180deg); /* Flips the card */
        }

        /* Front of the card */
        .card .front {
            position: relative;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            display: flex;
            flex-direction: column;
            padding: 20px;
        }

        .card .front img {
            width: 100%;
            height: 350px;
           
          
        }

        /* Back of the card */
        .card .back {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #FFF5E1; /* Back background color */
            color: white;
            backface-visibility: hidden;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            text-align: center;
            transform: rotateY(180deg); /* Initially rotate back 180 degrees */
        }

        /* Front and Back Name Styling */
        .card h3 {
            font-size: 22px;
            margin-bottom: 15px;
            color: black;
        }

        /* Social Media Icons Container */
        .social-links {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        /* Social Media Links */
        .social-links a {
            text-decoration: none;
            margin: 0 10px;
            color: #bbb;
            font-size: 20px;
            transition: color 0.3s ease;
        }

        /* Social Media Icons on Front - Smaller */
        .front .social-links a img {
            width: 35px; /* Smaller size for front icons */
            height: 35px;
        }

        .social-links a:hover {
            color: #4CAF50; /* Highlight color */
        }

        /* Social Media Icons on Back - Regular size */
        .back .social-links a img {
            width: 20px; /* Regular size for back icons */
            height: 20px;
        }

        /* Hover effect for social media icons */
        .social-links a:hover img {
            transform: scale(1.3); /* Slightly enlarge on hover */
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .team-cards {
                flex-direction: column;
                align-items: center;
            }

            .card {
                width: 80%;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>

    <!-- Team Section -->
    <div class="team" id="team">
        <h2>Meet Our Team</h2>
        <p>We have a dedicated team of professionals who are passionate about education and helping students make the best choices. We work tirelessly to provide up-to-date and accurate information about colleges, branches, and courses.</p>

        <div class="team-cards">
            <!-- Card 1 -->
            <div class="card" onclick="flip(this)">
                <div class="card-content">
                    <div class="front">
                        <img src="amar.jpeg" alt="Team Member 1"> <!-- Replace with actual image -->
                        <h3>Amarnath Singh</h3>
                        <div class="social-links">
                            <a href="https://www.linkedin.com/in/amarnath-singh-9736a8250?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">
                                <img src="linkedin-icon.png" alt="LinkedIn">
                            </a>
                            <a href="amarsingh66871@gmail.com" target="_blank">
                                <img src="gmail-icon.png" alt="Gmail">
                            </a>
                        </div>
                    </div>
                    <div class="back">
                        <h3>Amarnath Singh</h3>
                        <p>Amarnath Singh is an experienced developer with a passion for technology and education.</p>
                        <div class="social-links">
                            <a href="https://www.linkedin.com/in/amarnath-singh-9736a8250?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">
                                <img src="linkedin-icon.png" alt="LinkedIn">
                            </a>
                            <a href="amarsingh66871@gmail.com" target="_blank">
                                <img src="gmail-icon.png" alt="Gmail">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card" onclick="flip(this)">
                <div class="card-content">
                    <div class="front">
                        <img src="ankush.jpg" alt="Team Member 2"> <!-- Replace with actual image -->
                        <h3>Ankush Yadav</h3>
                        <div class="social-links">
                            <a href="https://github.com/janesmith" target="_blank">
                                <img src="github-icon.png" alt="GitHub">
                            </a>
                            <a href="https://www.linkedin.com/in/janesmith/" target="_blank">
                                <img src="linkedin-icon.png" alt="LinkedIn">
                            </a>
                            <a href="mailto:janesmith@example.com" target="_blank">
                                <img src="gmail-icon.png" alt="Gmail">
                            </a>
                        </div>
                    </div>
                    <div class="back">
                        <h3>Ankush Yadav</h3>
                        <p>Ankush Yadav is a tech enthusiast with a focus on machine learning and artificial intelligence.</p>
                        <div class="social-links">
                            <a href="https://github.com/janesmith" target="_blank">
                                <img src="github-icon.png" alt="GitHub">
                            </a>
                            <a href="https://www.linkedin.com/in/janesmith/" target="_blank">
                                <img src="linkedin-icon.png" alt="LinkedIn">
                            </a>
                            <a href="mailto:janesmith@example.com" target="_blank">
                                <img src="gmail-icon.png" alt="Gmail">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card" onclick="flip(this)">
                <div class="card-content">
                    <div class="front">
                        <img src="tanisha.jpeg" alt="Team Member 3"> <!-- Replace with actual image -->
                        <h3>Tansiha</h3>
                        
                        <div class="social-links">
                            <a href="https://github.com/michaelbrown" target="_blank">
                                <img src="github-icon.png" alt="GitHub">
                            </a>
                            <a href="https://www.linkedin.com/in/michaelbrown/" target="_blank">
                                <img src="linkedin-icon.png" alt="LinkedIn">
                            </a>
                            <a href="mailto:michaelbrown@example.com" target="_blank">
                                <img src="gmail-icon.png" alt="Gmail">
                            </a>
                        </div>
                    </div>
                    <div class="back">
                        <h3>Tansiha</h3>
                        <p>Tansiha is a software engineer who specializes in web development and UX design.</p>
                        <div class="social-links">
                            <a href="https://github.com/michaelbrown" target="_blank">
                                <img src="github-icon.png" alt="GitHub">
                            </a>
                            <a href="https://www.linkedin.com/in/michaelbrown/" target="_blank">
                                <img src="linkedin-icon.png" alt="LinkedIn">
                            </a>
                            <a href="mailto:michaelbrown@example.com" target="_blank">
                                <img src="gmail-icon.png" alt="Gmail">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="card" onclick="flip(this)">
                <div class="card-content">
                    <div class="front">
                        <img src="seema.jpeg" alt="Team Member 4"> <!-- Replace with actual image -->
                        <h3>Seema Karki</h3>
                        <div class="social-links">
                            <a href="https://github.com/emmwilson" target="_blank">
                                <img src="github-icon.png" alt="GitHub">
                            </a>
                            <a href="https://www.linkedin.com/in/emmwilson/" target="_blank">
                                <img src="linkedin-icon.png" alt="LinkedIn">
                            </a>
                            <a href="mailto:emmwilson@example.com" target="_blank">
                                <img src="gmail-icon.png" alt="Gmail">
                            </a>
                        </div>
                    </div>
                    <div class="back">
                        <h3>Seema Karki</h3>
                        <p>Seema Karki is a developer passionate about data science and data analysis.</p>
                        <div class="social-links">
                            <a href="https://github.com/emmwilson" target="_blank">
                                <img src="github-icon.png" alt="GitHub">
                            </a>
                            <a href="https://www.linkedin.com/in/emmwilson/" target="_blank">
                                <img src="linkedin-icon.png" alt="LinkedIn">
                            </a>
                            <a href="mailto:emmwilson@example.com" target="_blank">
                                <img src="gmail-icon.png" alt="Gmail">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="card" onclick="flip(this)">
                <div class="card-content">
                    <div class="front">
                        <img src="dheeraj.jpeg" alt="Team Member 5"> <!-- Replace with actual image -->
                        <h3>Dheeraj</h3>
                        <div class="social-links">
                            <a href="https://github.com/olivialee" target="_blank">
                                <img src="github-icon.png" alt="GitHub">
                            </a>
                            <a href="https://www.linkedin.com/in/olivialee/" target="_blank">
                                <img src="linkedin-icon.png" alt="LinkedIn">
                            </a>
                            <a href="mailto:olivialee@example.com" target="_blank">
                                <img src="gmail-icon.png" alt="Gmail">
                            </a>
                        </div>
                    </div>
                    <div class="back">
                        <h3>Dheeraj</h3>
                        <p>Dheeraj is passionate about open-source contributions and software development.</p>
                        <div class="social-links">
                            <a href="https://github.com/olivialee" target="_blank">
                                <img src="github-icon.png" alt="GitHub">
                            </a>
                            <a href="https://www.linkedin.com/in/olivialee/" target="_blank">
                                <img src="linkedin-icon.png" alt="LinkedIn">
                            </a>
                            <a href="mailto:olivialee@example.com" target="_blank">
                                <img src="gmail-icon.png" alt="Gmail">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function flip(card) {
            card.querySelector('.card-content').classList.toggle('flipped');
        }
    </script>

</body>
</html>



    <!-- Footer Section -->
    <footer>
        <div class="contact-us">
            <h2>Contact Us</h2>
            <p>If you have any questions, feedback, or would like to get in touch with our team, feel free to reach out to us!</p>
            <form action="submit_form.php" method="POST">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Your Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit">Send Message</button>
            </form>
        </div>
        <p>&copy; 2024 College Resolver. All rights reserved.</p>
    </footer>

</body>
</html>
