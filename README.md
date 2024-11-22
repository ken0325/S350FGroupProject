

## Features
### User Features
1. **Browse Menu**
   - Users can browse various menu items categorized neatly.
   - Menu items are dynamically loaded from the database.

2. **Add to Cart**
   - Users can add items to their cart for review before placing an order.
   - JavaScript handles cart operations and stores items in local storage.

3. **Checkout**
   - Users can review their cart and proceed to checkout.
   - Securely collects payment information and validates input.

4. **Order History**
   - Users can view their past orders.
   - Order history is dynamically loaded from the database.

### Admin Features
1. **Manage Menu Items**
   - Admins can add, edit, and delete menu items.
   - Provides forms for CRUD operations on menu items.

2. **View Orders**
   - Admins can view all orders placed by users.
   - Orders are displayed with details like order ID, user, and status.

3. **Manage Users**
   - Admins can see user information and permissions.(Can Manage users from databse)
   - Allows viewing user information.

### Security Features
1. **Password Hashing**
   - Ensures user passwords are stored securely using PHP’s password_hash() function.

2. **Prepared Statements**
   - Prevents SQL injection attacks by using prepared statements in database queries.

3. **Session Management**
   - Securely manages user sessions using PHP sessions.

## Technologies Used
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **Server Environment**: XAMPP
- **Version Control**: Git and GitHub

## Installation
To get a local copy up and running, follow these simple steps:

### Prerequisites
- XAMPP installed on your machine
- Composer installed for PHP dependencies
- Node.js and npm installed for any frontend dependencies

### Installation Steps
1. **Clone the repository**
    
2. **Install PHP dependencies**
    
    composer install

3. **Install Node.js dependencies**
    
    npm install

## Important Note : 
- Ensure the `myproject` folder is placed inside the `htdocs` directory of your XAMPP installation.(xampp > htdocs > myproject).

4. **Start the server**
    - Open XAMPP (Run as administrator) and start Apache and MySQL services.

5. **Setup Database**
    - Open your web browser and go to `http://localhost/phpmyadmin`.
    - Click on the "Databases" tab and create a new database named `myprojectdb` or any name you want.
    - Click on the newly created database `myprojectdb`.
    - Go to the "Import" tab.
    - Click on "Choose File" and select the `schema.sql` file from the cloned repository.
    - Click on "Go" to import the database schema.

## Usage
- **Visit** `http://localhost/myproject` to access the application.
- **Admin Panel Login details**: Accessible by logging in as an admin user.
- **Database Login Information**: Default username - admin, password - adminpass (change the hashed password in `schema.sql` if necessary).

## Contributing
Interested in contributing? Great! Please follow the next steps:

Fork the repository. Create your feature branch (git checkout -b feature/AmazingFeature). Commit your changes (git commit -m 'Add some AmazingFeature'). Push to the branch (git push origin feature/AmazingFeature). Open a Pull Request.

## Acknowledgements
- The contributors and maintainers of all used open-source software. 
15): 722-727.
