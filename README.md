# Task Manager Web Application

## Overview
This is a Task Manager web application built with PHP, JavaScript, and CSS. It provides user authentication (sign up, sign in), task management, notifications, and a dashboard with analytics and widgets. The application uses Bootstrap for responsive design and integrates Chart.js and ApexCharts for data visualization.

## Features
- User authentication with sign up and sign in functionality
- Google sign-in integration
- Task creation, update, and deletion
- Dashboard with widgets and productivity charts
- Notifications and alerts
- Responsive design with sidebar and bottom navigation for mobile
- Loading spinners for better user experience
- Client-side form validation

## Technologies Used
- PHP for backend and server-side rendering
- JavaScript (ES6 modules) for frontend interactivity
- CSS for styling, including custom styles and Bootstrap 5.3
- Chart.js and ApexCharts for charts and data visualization
- Firebase integration (for authentication or notifications)
- Font Awesome for icons

## Project Structure
```
/css/               # CSS stylesheets for various components and pages
/js/                # JavaScript modules for functionality and UI interactions
/php/               # PHP files for backend logic, templates, and includes
index.php           # Sign-in page (entry point)
/php/signup.php     # Sign-up page
/php/dashboard.php  # Main dashboard page after login
```

## Setup and Usage
1. Ensure you have a web server with PHP support (e.g., Apache, Nginx).
2. Place the project files in your web server's root directory or a subdirectory.
3. Configure your web server to serve the PHP files.
4. Access the application via your browser at the server URL (e.g., http://localhost/ or http://localhost/task-manager/).
5. Use the sign-up page to create a new account or sign in with existing credentials.
6. Manage tasks and view dashboard analytics after logging in.

## Free Account Access
The project provides a free account accessible to anyone:
- Username: User_19
- Password: Useroot

You can use these credentials to sign in without creating a new account.

## Notes
- Google sign-in requires proper configuration of OAuth credentials.
- Firebase integration requires setup of Firebase project and configuration in the JS files.
- The project uses Bootstrap CDN and Font Awesome CDN for styling and icons.

## License
This project is open source and free to use.
