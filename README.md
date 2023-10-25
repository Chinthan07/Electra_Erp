# Electra_Erp

Step 1: Login Form (login.html)
---
This HTML file represents a login form where users can enter their credentials to log in.
Users can enter their mobile number (phone) and password.
Upon clicking the "Login" button, the form data is sent to "login.php" for processing.
There's also a link to the sign-up page for new users.

Step 2: Processing Login Data (login.php)
---
When the user clicks the "Login" button, the PHP script in "login.php" is executed.
It first unsets any existing session variables to start with a clean session.
The user input, including phone and password, is retrieved using $_POST.
It connects to the database (assuming the database connection details are defined in "database.php").
It checks if the phone and password exist in the database and match. If they do, the user is logged in, and they are redirected to "home.php" (not shown).
If the login fails, a session variable $_SESSION['login'] is set to 1, and the user is redirected back to the login page ("index.html").

Step 3: Logging Out (logout.php)
---
If the "Sign Out" button is clicked on the website, the user is logged out.
The session is unset and destroyed.
The user is redirected to the login page ("index.html").

Step 4: Signup Form (signup.html)
---
This HTML file represents a sign-up form for new users.
Users enter their first name, last name, phone number, email, password, confirm password, and select their position (User or Admin).
The form data is sent to "signup.php" for processing.

Step 5: Processing Signup Data (signup.php)
---
When the user submits the sign-up form, the PHP script in "signup.php" is executed.
It first checks if the form was submitted (if "submit" is set in $_POST).
It connects to the database.
It retrieves user information from the form data, such as first name, last name, phone, email, password, and position.
It ensures that the passwords match and that all required fields are filled out.
If the data is valid, it inserts the user's information into the database table "users."
If the insertion is successful, the user is redirected to "index.html" (the login page) with a success message.
If there is an issue with insertion, an error message is displayed.

Step 6: Check Availability and Process Sales (sales.php)
---
The "sales.php" page allows users to check the availability of items for sale and proceed with the sales process.
It retrieves data from the inventory database to check the availability of items based on PID, brand, and model.
Users can choose items, specify the invoice number, date, customer name, and quantity for sales.
The available stock is checked, and if available, users proceed to the bill generation page.

Step 7: Printing a Sales Bill (bill.php)
---
The "bill.php" page calculates and displays a sales bill.
It retrieves data on the selected item (PID, brand, model) from the inventory database.
It calculates the total price with taxes (GST) based on the selected quantity.
The bill details are displayed, and users have the option to print the bill.

Step 8: Updating Inventory and Recording Sales (saleshandler.php)
---
After printing the bill, the "saleshandler.php" page updates the inventory and records the sale.
It adjusts the quantity in the inventory based on the sold quantity.
It inserts a sales record with invoice details into the sales database.

Step 9: Purchase Details (purchase.php)
---
The "purchase.php" page allows users to enter purchase details.
Users specify the invoice number, date, distributor name, brand, model, base price, and quantity.
Users can also check PID availability to ensure the item exists in the inventory.

Step 10: Processing Purchase Data (purchase.php)
---
The PHP script in "purchase.php" processes the purchase details.
It checks the availability of the item in the inventory based on the PID, brand, and model.
If the item is available, the purchase record is added to the database, and the inventory quantity is updated.
If the item is not available, the user is redirected to the purchase page with a notification.
This summarizes the steps and flow of the combined HTML and PHP code snippets you provided for user authentication, sign-up, and sales/purchase processes.

------------------------------------------Thank You---------------------------------------------------------------------
