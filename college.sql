college.sql
CREATE DATABASE IF NOT EXISTS college_chatbot CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE college_chatbot;

CREATE TABLE admin_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);
INSERT INTO admin_users (username, password) VALUES ('admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    phone VARCHAR(15),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE faqs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    keyword VARCHAR(100) NOT NULL,
    answer TEXT NOT NULL CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO faqs (keyword, answer) VALUES 
('Hello', 'Hi! I am CollegeBot. Select a question from the dropdown below to get started.'),
('Admission procedures and requirements', 'Class 12 with 45% aggregate (Maths and Physics as compulsory subjects)'),
('Accepted payment options for fees', 'Candidate can go to NIET website and select the online fee payment option. <a href="https://feepal.org" target="_blank">Click Here</a>'),
('Availability and activities of clubs or student organizations', 'We have 15+ clubs: Tech, Cultural, Sports, Literary, NSS, NCC. Activities every weekend.'),
('Academic calendar', 'Odd Sem: Aug-Dec, Even Sem: Jan-May. Download full calendar <a href="#" target="_blank">Click Here</a>'),
('Description of the campus', '45-acre green campus with smart classrooms, central library, hostels, sports complex, cafeteria.');

CREATE TABLE chats (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT DEFAULT NULL,
    session_id VARCHAR(255) NOT NULL,
    sender ENUM('user', 'bot') NOT NULL,
    message TEXT NOT NULL CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES students(id) ON DELETE SET NULL
);

CREATE TABLE contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    subject VARCHAR(200),
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);