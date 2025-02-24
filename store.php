<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Order Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-4">
        <div class="text-center">
            <img src="Regional-Food-Bank-Logo-Stacked-Color-e1644958656502.png" alt="Regional Food Bank Logo" class="img-fluid" style="max-width: 300px;">
            <h4>Online Shopping Form</h4>
        </div>
        
        <form action="thankyou.php" method="POST" class="mt-4 p-4 bg-white rounded shadow">
            <div class="mb-3">
                <label class="form-check-label">
                    <input type="checkbox" required> Did you read the following instructions? Check the box when done.
                </label>
            </div>
            
            <h5> Location Operating Hours </h5>
            <p>Tuesday & Wednesday: 2:30 PM - 5:30 PM (Arrive 30 min before closing)</p>
            <p>Thursday & Friday: 11:00 AM - 2:00 PM (Arrive 30 min before closing)</p>
            
            <h5>Pantry Guidelines</h5>
            <p>Have an ID (physical card or mobile)—please check in at the desk first.</p>
            
            <div class="mb-3">
                <label for="name" class="form-label">Name (First & Last):</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required>
            </div>
            
            <h5>Household Information</h5>
            <label>How many people are in your household?</label>
            <select name="household_size" class="form-select mb-3" required>
                <option value="">Select</option>
                <option value="1">Individual (1)</option>
                <option value="2">Family (2 or more)</option>
            </select>
            
            <h5>Food Selection</h5>
            
            <h6>Grains & Pasta</h6>
            <div class="form-check"><input class="form-check-input" type="checkbox" name="food[]" value="Rice"> Rice</div>
            <div class="form-check"><input class="form-check-input" type="checkbox" name="food[]" value="Pasta"> Pasta</div>
            <div class="form-check"><input class="form-check-input" type="checkbox" name="food[]" value="Quinoa"> Quinoa</div>
            <div class="form-check"><input class="form-check-input" type="checkbox" name="food[]" value="Oats"> Oats</div>
            <div class="form-check"><input class="form-check-input" type="checkbox" name="food[]" value="Flour"> Flour</div>
            <div class="form-check"><input class="form-check-input" type="checkbox" name="food[]" value="Bread crumbs"> Bread crumbs</div>
            <div class="form-check"><input class="form-check-input" type="checkbox" name="food[]" value="Tortillas"> Tortillas</div>
            
            <h6>Canned & Jarred Goods</h6>
            <div class="form-check"><input class="form-check-input" type="checkbox" name="food[]" value="Canned beans"> Canned beans</div>
            <div class="form-check"><input class="form-check-input" type="checkbox" name="food[]" value="Canned vegetables"> Canned vegetables</div>
            <div class="form-check"><input class="form-check-input" type="checkbox" name="food[]" value="Canned soup"> Canned soup</div>
            <div class="form-check"><input class="form-check-input" type="checkbox" name="food[]" value="Canned tuna or salmon"> Canned tuna or salmon</div>
            <div class="form-check"><input class="form-check-input" type="checkbox" name="food[]" value="Peanut butter or almond butter"> Peanut butter or almond butter</div>
            <div class="form-check"><input class="form-check-input" type="checkbox" name="food[]" value="Jelly or jam"> Jelly or jam</div>
            <div class="form-check"><input class="form-check-input" type="checkbox" name="food[]" value="Pasta sauce"> Pasta sauce</div>
            <div class="form-check"><input class="form-check-input" type="checkbox" name="food[]" value="Coconut milk"> Coconut milk</div>
            
            <h6>Baking Essentials</h6>
            <div class="form-check"><input class="form-check-input" type="checkbox" name="food[]" value="Sugar"> Sugar</div>
            <div class="form-check"><input class="form-check-input" type="checkbox" name="food[]" value="Baking powder"> Baking powder</div>
            <div class="form-check"><input class="form-check-input" type="checkbox" name="food[]" value="Baking soda"> Baking soda</div>
            <div class="form-check"><input class="form-check-input" type="checkbox" name="food[]" value="Vanilla extract"> Vanilla extract</div>
            <div class="form-check"><input class="form-check-input" type="checkbox" name="food[]" value="Cocoa powder"> Cocoa powder</div>
            <div class="form-check"><input class="form-check-input" type="checkbox" name="food[]" value="Chocolate chips"> Chocolate chips</div>
            <div class="form-check"><input class="form-check-input" type="checkbox" name="food[]" value="Yeast"> Yeast</div>
            
            <h6>Toiletries</h6>
            <div class="form-check"><input class="form-check-input" type="checkbox" name="toiletries[]" value="Toothpaste"> Toothpaste</div>
            <div class="form-check"><input class="form-check-input" type="checkbox" name="toiletries[]" value="Toothbrush"> Toothbrush</div>
            <div class="form-check"><input class="form-check-input" type="checkbox" name="toiletries[]" value="Shampoo"> Shampoo</div>
            <div class="form-check"><input class="form-check-input" type="checkbox" name="toiletries[]" value="Conditioner"> Conditioner</div>
            <div class="form-check"><input class="form-check-input" type="checkbox" name="toiletries[]" value="Soap"> Soap</div>
            <div class="form-check"><input class="form-check-input" type="checkbox" name="toiletries[]" value="Body wash"> Body wash</div>
            <div class="form-check"><input class="form-check-input" type="checkbox" name="toiletries[]" value="Deodorant"> Deodorant</div>
            <div class="form-check"><input class="form-check-input" type="checkbox" name="toiletries[]" value="Razor"> Razor</div>
            <div class="form-check"><input class="form-check-input" type="checkbox" name="toiletries[]" value="Tissues"> Tissues</div>
            <div class="form-check"><input class="form-check-input" type="checkbox" name="toiletries[]" value="Toilet paper"> Toilet paper</div>
            <div class="form-check"><input class="form-check-input" type="checkbox" name="toiletries[]" value="Hand sanitizer"> Hand sanitizer</div>

            <button type="submit" class="btn btn-success w-100">Submit Order</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
