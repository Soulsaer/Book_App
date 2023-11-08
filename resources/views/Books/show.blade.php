<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<h1>Book Details</h1>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Publications</th>
                <th>Author</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Published Date</th>
                <!-- Add more table headers for other book attributes -->
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->publication }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->price }}</td>
                <td>{{ $book->discount }}</td>
                <td>{{ $book->published_date }}</td>
                <!-- Add more table cells for other book attributes -->
            </tr>
        </tbody>
        
    </table>
    <h1 id="rs">00</h1>
</body>
<script>
    // document.addEventListener('DOMContentLoaded', function () {
    //     // Parse the price and discount from the HTML content and convert them to numbers
    //     let price = parseFloat("{{ $book->price }}");
    //     let discount = parseFloat("{{ $book->discount }}");

    //     // Calculate the final price
    //     let finalPrice = price - discount;

    //     // Update the <h1> tag with the final price and currency symbol
    //     let value = document.getElementById('rs');
    //     value.innerHTML = '₹' + finalPrice.toFixed(2); // Display the price with two decimal places
    // });
    // Go back to the previous page after 5 seconds and reload it
setTimeout(function () {
  history.back(); // Go back to the previous page
}, 5000); // Wait for 5 seconds

// You can also add a reload after going back
setTimeout(function () {
  history.back(); // Go back to the previous page
  setTimeout(function () {
    location.reload(); // Reload the page
  }, 1000); // Wait for an additional 1 second
}, 5000); // Wait for 5 seconds to go back

</script>
</html>
