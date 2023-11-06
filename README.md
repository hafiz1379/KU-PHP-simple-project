# User Information Management System

This is a simple User Information Management System built using PHP and PostgreSQL. It allows you to perform basic CRUD (Create, Read, Update, Delete) operations on user records stored in a PostgreSQL database. The system provides a web interface for adding, viewing, updating, and deleting user information.

## Table of Contents
- [Getting Started](#getting-started)
- [Features](#features)
- [Folder Structure](#folder-structure)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Getting Started

To set up and run this User Information Management System on your local machine, follow these steps:

1. **Database Configuration**: Update the database connection details in the `db_connection.php` file to match your PostgreSQL database configuration. Replace the following variables with your own values:
   - `$host`: the database host (e.g., "localhost")
   - `$port`: the database port (e.g., "5432")
   - `$dbname`: the name of the database
   - `$user`: your PostgreSQL username
   - `$password`: your PostgreSQL password

2. **Database Setup**: Create a PostgreSQL database named `user_information` and a table named `users` with columns: `id`, `name`, `age`, and `phone_number`.

3. **Web Server**: You can run this system on a local web server like Apache or Nginx. Ensure that PHP is installed and configured on your server.

4. **Clone the Repository**: Clone this repository to your local machine using Git:

   ```
   git clone https://github.com/hafiz1379/KU-PHP-simple-project
   ```

5. **Start the Web Server**: Start your web server and ensure that PHP is enabled.

6. **Access the Application**: Open your web browser and navigate to the project directory, where you should see the main page `index.php`. You can start adding, updating, and deleting user information from this interface.

## Features

- **Add User**: You can add a new user by providing their name, age, and phone number.

- **View Users**: The system displays a list of all users with options to update or delete each user's information.

- **Update User**: You can edit user information, including name, age, and phone number.

- **Delete User**: Users can be removed from the database.

## 👥 Authors <a name="author"></a>

👤 **Hafizullah Rasa**
- GitHub: [Hafiz Rasa](https://https://github.com/hafiz1379)
- LinkedIn: [Hafiz Rasa](https://www.linkedin.com/in/hafiz1379)

👤 **Mahram Hossain🔭**

- GitHub: [@Mahram Hossain](https://github.com/mhnazary)
- LinkedIn: [@LinkedIn](https://www.linkedin.com/in/mahram-hossain-nazary-515686204/)


## Folder Structure

The project's folder structure is as follows:

- `index.php`: The main page that displays the list of users and provides options to add, update, and delete user information.

- `user_form.html`: The form for adding a new user.

- `db_connection.php`: Contains the database connection settings.

- `styles.css`: CSS file for styling the web pages.


## Usage

1. Access the application through your web browser.
2. Use the "Add User" link to add new user information.
3. The "View Users" link will display a list of all users with options to update or delete each user's information.
4. Update or delete user records as needed.


## Contributing

Contributions are welcome! Feel free to open issues or pull requests to improve the system or fix any bugs you encounter.

## License

This User Information Management System is open-source and available under the [MIT License](LICENSE). You are free to use and modify it for your needs.
