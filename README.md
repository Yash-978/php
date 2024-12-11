
 # Registration Form with Form Validation and Bootstrap UI

This project is a PHP-based registration form that utilizes Bootstrap for a modern and visually appealing user interface. It supports form validation and includes CRUD (Create, Read, Update, Delete) functionalities for managing user data.

---

## Features

1. **Form Validation**:
   - Validates inputs such as name, age, phone number, and course.
   - Displays feedback for invalid inputs.

2. **CRUD Operations**:
   - Add new users (Create).
   - View a list of users in a styled table (Read).
   - Update existing user information (Update).
   - Delete users (Delete).

3. **Responsive Design**:
   - Designed using Bootstrap 5.3 for mobile-friendly layouts.

4. **Stylish UI**:
   - Enhanced with shadows, rounded corners, and hover effects for better user experience.

---

## Prerequisites

- **PHP 7.4+**
- **MySQL Database**
- **Apache Server** (e.g., XAMPP, WAMP, LAMP)
- Bootstrap CDN for styling

---

## Installation Steps

1. **Clone the Repository**
   ```bash
   git clone https://github.com/yourusername/registration-form.git
   cd registration-form
   ```

2. **Set Up the Database**
   - Create a MySQL database (e.g., `registration_db`).
   - Use the following table schema:
     ```sql
     CREATE TABLE users (
         id INT AUTO_INCREMENT PRIMARY KEY,
         name VARCHAR(255) NOT NULL,
         age INT NOT NULL,
         phone VARCHAR(15) NOT NULL,
         course VARCHAR(255) NOT NULL
     );
     ```

3. **Configure the Database Connection**
   - Edit `config.php` and update the database credentials:
     ```php
     <?php
     class Config {
         private $host = 'localhost';
         private $user = 'root';
         private $pass = ''; // Set your MySQL password
         private $dbname = 'registration_db';

         protected $conn;

         public function __construct() {
             $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
             if ($this->conn->connect_error) {
                 die("Connection failed: " . $this->conn->connect_error);
             }
         }

         public function fetch() {
             $sql = "SELECT * FROM users";
             return $this->conn->query($sql);
         }

         public function insert($name, $age, $course, $phone) {
             $stmt = $this->conn->prepare("INSERT INTO users (name, age, course, phone) VALUES (?, ?, ?, ?)");
             $stmt->bind_param("siss", $name, $age, $course, $phone);
             $stmt->execute();
         }

         public function delete($id) {
             $stmt = $this->conn->prepare("DELETE FROM users WHERE id = ?");
             $stmt->bind_param("i", $id);
             $stmt->execute();
         }
     }
     ?>
     ```

4. **Run the Project**
   - Start your Apache server.
   - Open the project in your browser:
     ```
     http://localhost/registration-form
     ```




## Usage

### Adding a New User
1. Fill out the form fields (Name, Age, Phone, Course).
2. Click **Submit**.

### Updating a User
1. Click the **Update** button in the user table.
2. Modify the fields and submit the changes.

### Deleting a User
1. Click the **Delete** button in the user table.
2. Confirm the action.

---

## Screenshots

### Registration Form
![Registration Form Screenshot](https://github.com/user-attachments/assets/978087ee-01f4-492e-b068-858bca6637ab)

### User Table
![User Table Screenshot](https://github.com/user-attachments/assets/b7d1a5ff-6668-4b25-8021-e1c92a2c03da)

---

## Technologies Used

- **PHP**: Backend logic.
- **MySQL**: Database for storing user data.
- **Bootstrap 5.3**: Styling and responsive design.

---

## License

This project is licensed under the MIT License. Feel free to use and modify it for your own purposes.

---

## Contributions

Contributions are welcome! If you'd like to enhance this project, please fork the repository and submit a pull request.

---

## Contact

For questions or suggestions, contact [Yash Jain](mailto:your.yashjain557915@gmail.com).

 <img src = "https://github.com/user-attachments/assets/978087ee-01f4-492e-b068-858bca6637ab"  height=20% width=100%  />
 <img src = "https://github.com/user-attachments/assets/32af7f65-cd60-4dd5-b3ce-3845767b8ee3"  height=20% width=100%  />

 <video src= "https://github.com/user-attachments/assets/bf3e03ce-171f-43ad-adda-29c3ac93736e" width=100%
height=22% >   
    



