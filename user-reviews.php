<?php
// Array of testimonials
$testimonials = [
    [
        'avatar' => 'user_avatar.jpg',
        'content' => 'This platform has been a game-changer for me. The ease of use and powerful features have significantly improved my workflow.',
        'author' => 'John Doe',
    ],
    [
        'avatar' => 'another_user_avatar.jpg',
        'content' => 'I love the security features and the ability to control the privacy settings for my files. Highly recommended!',
        'author' => 'Jane Smith',
    ],
    // Add more testimonials as needed
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Reviews/Testimonials</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Add your additional stylesheets and scripts here -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .navbar {
            background-color: #e74c3c;
            color: #ffffff;
            padding: 1rem;
            text-align: center;
        }

        .faq-container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
        }

        .accordion-button {
            background-color: #3498db;
            color: #ffffff;
            padding: 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 10px;
            width: 100%;
            text-align: left;
        }

        .accordion-body {
            background-color: #ecf0f1;
            padding: 15px;
            border: 1px solid #bdc3c7;
            border-radius: 5px;
        }

        .contact-container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .contact-title {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
        }

        .contact-text {
            color: #555;
            margin-bottom: 15px;
        }

        .contact-link {
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
        }

        .contact-link:hover {
            text-decoration: underline;
        }

        .reviews-container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
        }

        .testimonial {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .testimonial p {
            color: #555;
        }

        .testimonial-author {
            color: #3498db;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <div class="navbar">
        <div class="text-2xl font-semibold" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">USER REVIEWS/TESTIMONIAL</div>
    </div>
    <!-- User Reviews/Testimonials -->
    <div class="reviews-container">
        <!-- Display positive user reviews to encourage trust and confidence -->
        <div class="mt-4">
            <div class="testimonial">
                <div class="flex space-x-4 items-center">
                    <!-- User Avatar (replace with actual avatar URL) -->
                    <img src="images/buttercup.jpeg" alt="User Avatar" class="w-12 h-12 rounded-full">
                    <!-- Testimonial Content -->
                    <div>
                        <p class="text-gray-700">"This platform has been a game-changer for me. The ease of use and powerful
                            features have significantly improved my workflow."</p>
                        <p class="testimonial-author">- John Doe</p>
                    </div>
                </div>
            </div>

            <div class="testimonial">
                <div class="flex space-x-4 items-center mt-4">
                    <!-- User Avatar (replace with actual avatar URL) -->
                    <img src="images/shinchan.jpeg" alt="User Avatar" class="w-12 h-12 rounded-full">
                    <!-- Testimonial Content -->
                    <div>
                        <p class="text-gray-700">"I love the security features and the ability to control the privacy
                            settings for my files. Highly recommended!"</p>
                        <p class="testimonial-author">- Jane Smith</p>
                    </div>
                </div>
            </div>

            <div class="testimonial">
                <div class="flex space-x-4 items-center mt-4">
                    <!-- User Avatar (replace with actual avatar URL) -->
                    <img src="images/boojack.jpeg" alt="User Avatar" class="w-12 h-12 rounded-full">
                    <!-- Testimonial Content -->
                    <div>
                        <p class="text-gray-700">"As a business owner concerned about data security, I've been using this 
                            data leakage detection system for several months now, and I'm impressed! The user-friendly 
                            interface makes it easy to navigate through potential risks. The system's accurate detection capabilities 
                            and real-time alerts provide peace of mind, ensuring that sensitive information remains confidential."</p>
                        <p class="testimonial-author">- Alex Rodriguez</p>
                    </div>
                </div>
            </div>

            <div class="testimonial">
                <div class="flex space-x-4 items-center mt-4">
                    <!-- User Avatar (replace with actual avatar URL) -->
                    <img src="images/simpson.jpeg" alt="User Avatar" class="w-12 h-12 rounded-full">
                    <!-- Testimonial Content -->
                    <div>
                        <p class="text-gray-700">"Hermes Security has been a game-changer for us. The data leakage detection system is highly effective, 
                            and the team's commitment to security is unparalleled."</p>
                        <p class="testimonial-author">- Sarah Johnson</p>
                    </div>
                </div>
            </div>

            <div class="testimonial">
                <div class="flex space-x-4 items-center mt-4">
                    <!-- User Avatar (replace with actual avatar URL) -->
                    <img src="images/Meme.jpeg" alt="User Avatar" class="w-12 h-12 rounded-full">
                    <!-- Testimonial Content -->
                    <div>
                        <p class="text-gray-700">Exceptional service! The team at Hermes is always responsive and ready to assist. Their data leakage detection 
                            system has become an integral part of our cybersecurity strategy."</p>
                        <p class="testimonial-author">-Mark Taylor</p>
                    </div>
                </div>
            </div>
            <!-- Add more testimonials as needed -->
        </div>
    </div>

    <!-- Add Bootstrap JS for the accordion functionality -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
