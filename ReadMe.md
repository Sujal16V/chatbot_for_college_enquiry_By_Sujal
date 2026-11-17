# 🎓 College Enquiry Chatbot

\<p align="center">   \<b>An Interactive Web-Based College Enquiry Management System\</b>   \<br/>   A simple and convenient platform that helps students access important college information through a chatbot. \</p>

\<p align="center">   \<img src="[https://img.shields.io/badge/PHP-Backend-777BB4?style=for-the-badge&logo=php&logoColor=white](https://img.shields.io/badge/PHP-Backend-777BB4?style=for-the-badge\&logo=php\&logoColor=white)" />   \<img src="[https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white](https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge\&logo=mysql\&logoColor=white)" />   \<img src="[https://img.shields.io/badge/HTML5-Frontend-E34F26?style=for-the-badge&logo=html5&logoColor=white](https://img.shields.io/badge/HTML5-Frontend-E34F26?style=for-the-badge\&logo=html5\&logoColor=white)" />   \<img src="[https://img.shields.io/badge/CSS3-Styling-1572B6?style=for-the-badge&logo=css3&logoColor=white](https://img.shields.io/badge/CSS3-Styling-1572B6?style=for-the-badge\&logo=css3\&logoColor=white)" />   \<img src="[https://img.shields.io/badge/JavaScript-Interactive-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black](https://img.shields.io/badge/JavaScript-Interactive-F7DF1E?style=for-the-badge\&logo=javascript\&logoColor=black)" /> \</p>

---

## 📌 About The Project

**College Enquiry Chatbot** is a PHP and MySQL-based web application designed to simplify the process of accessing college-related information.

Students can interact with the chatbot to get answers to frequently asked questions regarding admissions, fee payment options, academic calendars, campus facilities, clubs, and other college-related information.

The application also includes student registration, login authentication, an administrative dashboard, and a contact enquiry system.

## ✨ Features

- 🤖 **Interactive Chatbot:** Provides automated responses to predefined college-related questions.
- 🎓 **Admission Information:** Helps students understand admission procedures and eligibility requirements.
- 💳 **Fee Information:** Provides information about available fee payment options.
- 📅 **Academic Calendar:** Displays academic schedule-related information.
- 🏫 **Campus Information:** Provides details about campus facilities and student activities.
- 👤 **Student Registration:** Allows students to create accounts.
- 🔐 **Login Authentication:** Supports student login and session management.
- 📊 **Admin Dashboard:** Provides an administrative interface.
- 📩 **Contact Enquiry:** Allows visitors to submit enquiries through a contact form.
- 💾 **Chat History:** Stores chatbot conversations in the MySQL database.

## 🛠️ Technologies Used

| Technology | Purpose                          |
| ---------- | -------------------------------- |
| HTML5      | Web page structure               |
| CSS3       | Styling and responsive interface |
| JavaScript | Interactive functionality        |
| PHP        | Backend development              |
| MySQL      | Database management              |
| XAMPP      | Local development environment    |
| Apache     | Local web server                 |

## 📂 Project Structure

```text
chatbot_for_college_enquiry_By_Sujal/
│
├── chatbot.php
├── college.sql
├── config.php
├── contact.php
├── contact_submit.php
├── dashboard.php
├── footer.php
├── header.php
├── index.php
├── login.php
├── logout.php
├── register.php
├── style.css
│
└── README.md
```

## ⚙️ Installation & Setup

Follow these steps to run the project locally.

### 1. Install XAMPP

Download and install [XAMPP](https://www.apachefriends.org/).

Start the following services:

- Apache
- MySQL

### 2. Clone the Repository

Open your terminal or command prompt and execute:

```bash
git clone https://github.com/Sujal16V/chatbot_for_college_enquiry_By_Sujal.git
```

### 3. Move the Project

Copy the downloaded project folder into:

```text
C:\xampp\htdocs\
```

### 4. Create the Database

1. Open your browser.
2. Visit `http://localhost/phpmyadmin`.
3. Select the **Import** option.
4. Choose the `college.sql` file from the project folder.
5. Click **Import** or **Go**.

The SQL file creates the `college_chatbot` database and the required tables.

### 5. Configure Database Connection

Open `config.php` and verify your database settings:

```php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "college_chatbot";
```

Update these values if your local MySQL configuration is different.

### 6. Run the Application

Open your browser and visit:

```text
http://localhost/chatbot_for_college_enquiry_By_Sujal/
```

The application should now be accessible locally.

## 🗄️ Database Structure

The project uses a MySQL database named `college_chatbot`.

Main database tables:

| Table              | Description                           |
| ------------------ | ------------------------------------- |
| `admin_users`      | Stores administrator login details    |
| `students`         | Stores registered student information |
| `faqs`             | Stores chatbot questions and answers  |
| `chats`            | Stores user and chatbot conversations |
| `contact_messages` | Stores submitted contact enquiries    |

## 🤖 How the Chatbot Works

1. A student selects or enters a college-related question.
2. The frontend sends the question to the PHP chatbot endpoint.
3. PHP checks the FAQ database for a matching keyword.
4. If a matching FAQ exists, its stored answer is returned.
5. The conversation is saved in the database.

The current implementation uses predefined FAQ keyword matching rather than an external AI model.

## 🎯 Project Objectives

- Simplify access to college-related information.
- Reduce repetitive manual enquiry handling.
- Provide students with a convenient information platform.
- Maintain student registrations and enquiry records.
- Demonstrate practical implementation of PHP and MySQL.

## 🚀 Future Enhancements

- Integration with AI-powered conversational models.
- Improved natural language understanding.
- Voice-based chatbot interaction.
- More comprehensive administrative controls.
- Real-time chat support.
- Enhanced analytics and reporting.
- Mobile-friendly user experience.

## 👨‍💻 Developer

**Sujal Soans**

- GitHub: [@Sujal16V](https://github.com/Sujal16V)
- Portfolio: [Visit My Portfolio](https://contactsujalsoans.netlify.app/)

## 📄 License

This project is available for educational and learning purposes. Please contact the developer before redistributing or using it commercially.

---

\<p align="center">
&#x20; ⭐ If you find this project useful, consider giving it a star!
&#x20; \<br/>\<br/>
&#x20; \<b>Designed & Developed by Sujal Soans\</b>
\</p>
