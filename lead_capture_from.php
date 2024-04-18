<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lead Capture Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column; /* Adjust to column layout */
        }
        #leadForm {
            width: 400px;
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        input[type="text"], select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #218838;
        }
        /* Message div styles */
        #message {
            margin-top: 10px; /* Add some margin */
            padding: 10px;
            border-radius: 5px;
            display: none;
            width: 100%;
            text-align: center; /* Center the message */
        }
        .success {
            background-color: #28a745;
            color: #fff;
        }
        .error {
            background-color: #dc3545;
            color: #fff;
        }
    </style>
</head>
<body>
    <div id="leadForm">
        <h2>Lead Capture Form - PHP CRM 13</h2>
        <form id="leadCaptureForm" method="POST" action="lead_submit.php">
            <label for="company">Company:</label>
            <input type="text" id="company" name="company" required>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>

            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required>

            <!-- Additional fields -->
            <label for="additional_field1">Additional Field 1:</label>
            <input type="text" id="additional_field1" name="additional_field1">

            <label for="additional_field2">Additional Field 2:</label>
            <input type="text" id="additional_field2" name="additional_field2">

            <button type="submit">Submit</button>
        </form>
        <div id="message"></div> <!-- Place message div below the form -->
    </div>

</body>
</html>
