<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
        body{font-family: Arial, Helvetica, sans-serif;}
        *{box-sizing: border-box;}
        input[type=text],select,textarea{
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }
        input[[text=submit]:hover]{
            background-color:#45a049;
        }
        .cantainer{
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
</head>
<body>
    <h2>Contact From</h2>
    <div class="container">
        <form action="/action_page.php">
            <label for="fname">First Name</label>
             <input type="text" name="firstname" id="fname" placeholder="Your name..."/>
            <label>Last Name</label>
             <input type="text" name="lastname" placeholder="Your last name..."/>
            <label for="country">Country</label>
                <select id="country" name="country">
                    <option value="australia">Australia</option>
                    <option value="canada">Canada</option>
                    <option value="india">India</option>
                </select>
            <label for="subject">subject</label>
              <textarea name="subject" id="subject" placeholder="Write something.." style="height: 200px;"></textarea>
              <input type="submit" value="submit"/>    
        </form>
    </div>
</body>
</html>