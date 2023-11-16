<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // You can add additional validation and processing logic here

    // For demonstration purposes, let's just print the submitted data
    echo "<p>Submitted Information:</p>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Message: $message</p>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help and Support</title>
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
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <div class="navbar">
        <div class="text-2xl font-semibold">HELP AND SUPPORT</div>
    </div>

    <!-- Frequently Asked Questions -->
    <div class="faq-container">
        <h4 class="text-md font-semibold"><u>Frequently Asked Questions</u></h4>

        <!-- FAQ Accordion -->
        <div class="accordion mt-2">
            <!-- Question 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="question1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#answer1"
                        aria-expanded="true" aria-controls="answer1">
                        <b>How can I reset my password?</b>
                    </button>
                </h2>
                <div id="answer1" class="accordion-collapse collapse show" aria-labelledby="question1">
                    <div class="accordion-body">
                        <b>Answer:</b> To reset your password, go to the login page and click on the "Forgot Password"
                        link. Follow the instructions sent to your email.
                    </div>
                </div>
                <br>
                <br>
                <!-- Question 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="question2">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#answer2" aria-expanded="true" aria-controls="answer2">
                        <b> my data secure on this platform?</b>
                        </button>
                    </h2>
                    <br>
                    <div id="answer2" class="accordion-collapse collapse" aria-labelledby="question2">
                        <div class="accordion-body">
                        <b>Answer:</b> Yes, we take the security of your data seriously. We implement advanced encryption and security measures to protect your information.
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <!--Question 3-->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="question3">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#answer2" aria-expanded="true" aria-controls="answer3">
                        <b>How do I upload files to my account?</b>
                        </button>
                    </h2>
                    <br>
                    <div id="answer3" class="accordion-collapse collapse" aria-labelledby="question3">
                        <div class="accordion-body">
                        <b>Answer:</b> To upload files, log in to your account and navigate to the File Management section. You can use the file upload form to add new files.
                        </div>
                    </div>
                </div>
                <br>
                <br>
                 <!--Question 4-->
                 <div class="accordion-item">
                    <h2 class="accordion-header" id="question2">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#answer2" aria-expanded="true" aria-controls="answer2">
                        <b> What privacy options are available for my uploaded files?</b>
                        </button>
                    </h2>
                    <br>
                    <div id="answer2" class="accordion-collapse collapse" aria-labelledby="question2">
                        <div class="accordion-body">
                        <b>Answer:</b> You can set the privacy status of your files to Public, Private, or Shared. This allows you to control who can access your files.
                    </div>
                </div> 
                <br>
                <br>
                <!--Question 3-->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="question2">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#answer2" aria-expanded="true" aria-controls="answer2">
                        <b>How can I contact customer support?</b>

                        </button>
                    </h2>
                    <br>
                    <div id="answer2" class="accordion-collapse collapse" aria-labelledby="question2">
                        <div class="accordion-body">
                        <b>Answer:</b> If you need assistance, please visit the Help and Support section or contact our support team through the provided contact form.
                        </div>
                    </div>
                </div> 
                <br>
                <br>
                <!--Question 3-->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="question2">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#answer2" aria-expanded="true" aria-controls="answer2">
                        <b>Can I access my account from multiple devices?</b>
                        </button>
                    </h2>
                    <br>
                    <div id="answer2" class="accordion-collapse collapse" aria-labelledby="question2">
                        <div class="accordion-body">
                        <b>Answer:</b> Yes, you can access your account from multiple devices. Ensure that you use secure and trusted devices to log in.
                        </div>
                    </div>
                </div> 
                <br>
                <br>
                <!--Question 3-->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="question2">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#answer2" aria-expanded="true" aria-controls="answer2">
                        <b>What are the accepted file formats for upload?</b>
                        </button>
                    </h2>
                    <br>
                    <div id="answer2" class="accordion-collapse collapse" aria-labelledby="question2">
                        <div class="accordion-body">
                        
                        <b>Answer:</b> We support a variety of file formats, including but not limited to PDF, DOCX, JPG, and PNG. Refer to the documentation for a comprehensive list.
                        </div>
                    </div>
                </div> 
                <br>
                <br>
                <!--Question 3-->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="question2">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#answer2" aria-expanded="true" aria-controls="answer2">
                        <b>What types of data can the system protect?</b>
                        </button>
                    </h2>
                    <br>
                    <div id="answer2" class="accordion-collapse collapse" aria-labelledby="question2">
                        <div class="accordion-body">
                        <b>Answer:</b> A comprehensive Data Leakage Detection System can protect various types of data, including intellectual property, customer information, financial data, and other sensitive information critical to the organization.
                        </div>
                    </div>
                </div> 
                <br>
                <br>
                <!--Question 3-->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="question2">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#answer2" aria-expanded="true" aria-controls="answer2">
                        <b>What measures are in place to ensure user privacy during data monitoring?</b>
                        </button>
                    </h2>
                    <br>
                    <div id="answer2" class="accordion-collapse collapse" aria-labelledby="question2">
                        <div class="accordion-body">
                        <b>Answer:</b>  is a top concern. Modern systems often employ techniques like data anonymization and encryption to protect user privacy while still effectively monitoring and preventing data leaks.
                        </div>
                    </div>
                </div>
                <!-- Add more questions and answers as needed -->
            </div>
        </div>
    
    <br>
    <br>
    <br>
            </div>

            <!-- Add more questions and answers as needed -->
        </div>
    </div>

    <!-- Contact support or customer service -->
    <div class="contact-container">
        <h1 class="contact-title"><b><u>Contact Support</u></b></h1>

        <p class="contact-text">
            If you need further assistance, please feel free to contact our support team. We are here to help you!
            <br>
            Kindly visit this link and fill the <a href="https://forms.gle/DSVgVRf62NhrHQGJ6" target="_blank"
                class="contact-link" title="This takes you to a Google form">Hermes Security Google Form</a>.
        </p>
    </div>

    <!-- Add Bootstrap JS for the accordion functionality -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
