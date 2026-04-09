# Form Handling System

A PHP-based travel registration form built as part of my PHP learning journey. This project demonstrates how to handle HTML forms using PHP, connect to a MySQL database, and insert submitted data.

## Screenshot

![Form Preview](form.png)

## Features

- HTML form with input validation
- PHP form handling using `$_POST`
- MySQL database integration via `mysqli`
- Inserts user data (name, age, gender, email, phone, description) into a database table
- Success/error message feedback after form submission
- Responsive layout with custom CSS styling

## Tech Stack

- **PHP** — server-side form processing and database interaction
- **MySQL** — data storage (via `mysqli`)
- **HTML/CSS** — frontend form and styling
- **JavaScript** — included for future client-side enhancements

## How It Works

1. The user fills in the form fields: Name, Age, Gender, Email, Phone, and any additional info.
2. On submission, PHP validates that all fields are filled.
3. If valid, a `mysqli` connection is established to the local MySQL database.
4. The data is inserted into the `aiubtrip.trip` table with a timestamp.
5. A success message is displayed upon successful insertion.

## Database Setup

```sql
CREATE DATABASE aiubtrip;

CREATE TABLE trip (
    slno INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    age INT,
    gender VARCHAR(20),
    email VARCHAR(100),
    phone VARCHAR(20),
    other TEXT,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

## Running Locally

1. Install [XAMPP](https://www.apachefriends.org/) or any local PHP/MySQL server.
2. Place the project folder inside `htdocs/` (for XAMPP).
3. Create the database and table using the SQL above.
4. Open your browser and go to `http://localhost/form-handling-system/`.

## What I Learned

- How PHP handles form data via the `$_POST` superglobal
- Connecting to MySQL using `mysqli_connect()`
- Executing SQL INSERT queries from PHP
- Basic input validation on the server side
- Structuring a simple full-stack form application
