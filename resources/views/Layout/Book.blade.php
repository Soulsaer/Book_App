<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrawal Book Depot</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
            font-size: 28px; /* Adjust the font size as needed */
            font-weight: bold; /* Add font-weight for emphasis */
            text-transform: uppercase; /* Transform text to uppercase */
            text-decoration: underline; /* Add an underline to the text */
            margin-bottom: 20px; /* Increase the margin for spacing */
        }
        form {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 style="text-align: center;">Agrawal Book Depot</h1>
        <form action="{{route('searchbook')}}" method="get">
            <label for="book_code">Enter Book Code:</label>
            <input type="text" id="bookId" name="book_code" placeholder="Enter Code" required>
            <button type="submit">Search</button>
        </form>
    </div>
</body>
<script >
    let search_box = document.getElementById('bookId');

    
    // search_box.addEventListener('keydown',function(e)
    // {
    //     const value = e.key;
    //     search_box.value = value;
    // })
    window.addEventListener('load', function(e)
    {
        search_box.focus();
    });
</script>
</html>
