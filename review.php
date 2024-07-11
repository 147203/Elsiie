<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Us</title>
    <link rel="stylesheet" href="review.css">
</head>
<body>
    <h1>Review Us</h1>
    <?php include_once("templates/nav.php");?>

    <div class="review-form-container">
        <h2>We value your feedback!</h2>
        <form action="submit_review.php" method="post" class="review-form">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="rating">Rating:</label>
            <select id="rating" name="rating" required>
                <option value="5">5 - Excellent</option>
                <option value="4">4 - Very Good</option>
                <option value="3">3 - Good</option>
                <option value="2">2 - Fair</option>
                <option value="1">1 - Poor</option>
            </select>

            <label for="comments">Comments:</label>
            <textarea id="comments" name="comments" rows="5" required></textarea>

            <button type="submit">Submit Review</button>
        </form>
    </div>
</body>
</html>
