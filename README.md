# Student Attendance Management System (SAMS)

Welcome to the Student Attendance Management System (SAMS) repository! This system provides a seamless solution for managing student attendance records efficiently.

## Overview

SAMS is designed to simplify the process of recording and monitoring student attendance in educational institutions. It offers an intuitive interface for administrators and instructors to manage attendance records and generate reports effortlessly.

## Features

- **User Authentication:** Secure login system for administrators and instructors.
- **Attendance Management:** Record daily attendance for students.
- **Course and Class Management:** Add, edit, and delete courses and classes.
- **Student Management:** Maintain student profiles and enrollment details.
- **Reports:** Generate attendance reports for individual students and classes.
- **Responsive Design:** Accessible and user-friendly interface across devices.

## Technologies Used

- **Frontend:** HTML5, CSS3, JavaScript (ES6+)
- **Backend:** PHP (Version 4.5.4), MySQL (Version 5.5.1)
- **Database:** MySQL for storing attendance and student data
- **Authentication:** Sessions for maintaining user login state

## Installation

To set up the Student Attendance Management System locally, follow these steps:

1. **Clone the repository:**
   ```
   git clone https://github.com/yourusername/sams.git
   cd sams
   ```

2. **Import Database:**
   - Create a MySQL database named `sams`.
   - Import the database schema from `database/sams.sql`.
   - Update database connection settings in `config/config.php` if necessary.

3. **Start the PHP Development Server:**
   - Ensure PHP is installed and configured on your local machine.
   - Start the PHP development server:
     ```
     php -S localhost:8000
     ```

4. **Access the Application:**
   - Open your web browser and go to `http://localhost:8000` to access SAMS.

## Screenshots

![Login Page]

![Screenshot (30)](https://github.com/AbhishekBhat123/Student-Attendence-Management-System/assets/144084687/951b492a-87ba-4216-913d-ca3e7befb74d)

*Secure login page for administrators and instructors.*

![Dashboard]

![Screenshot (31)](https://github.com/AbhishekBhat123/Student-Attendence-Management-System/assets/144084687/43c45ba2-9402-49d9-9662-7a6e3330eae5)

*Dashboard displaying attendance summary and options for managing attendance.*


## Usage

- **Administrator:** Log in with admin credentials to manage courses, classes, and view reports.
- **Instructor:** Log in with instructor credentials to record attendance for assigned classes.

## Contribution

Contributions to enhance and improve SAMS are welcome! Fork the repository, make your changes, and submit a pull request. Feel free to suggest new features or report issues using GitHub issues.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Contact

For questions or inquiries about SAMS, please contact [your email address]. We value your feedback and suggestions!

---

With SAMS, managing student attendance becomes streamlined and efficient, ensuring educational institutions can focus more on education and less on administrative tasks. Start using SAMS and experience hassle-free attendance management today! 📚🎓
