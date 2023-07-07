<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Email</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.3);
        }

        input[type="email"], input[type="text"], textarea {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: none;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        textarea {
            height: 200px;
        }

        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #0062cc;
        }
    </style>
</head>
<body>
    <form action="send.php" method="post">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="">
        <label for="subject">Subject</label>
        <input type="text" id="subject" name="subject" value="">
        <label for="message">Message</label>
        <textarea id="message" name="message"></textarea>
        <button type="submit" name="send">Send</button>
    </form>
</body>
</html>