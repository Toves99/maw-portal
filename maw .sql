-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2023 at 09:35 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maw`
--

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `jobId` int(11) NOT NULL,
  `jobName` varchar(255) NOT NULL,
  `location` varchar(100) NOT NULL,
  `postedDate` varchar(100) NOT NULL,
  `jobType` varchar(100) NOT NULL,
  `closingDate` varchar(100) NOT NULL,
  `jobDes` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`jobId`, `jobName`, `location`, `postedDate`, `jobType`, `closingDate`, `jobDes`, `skills`, `education`) VALUES
(1, 'IT Support Intern', 'Nairobi', '02/07/2023', 'fulltime', '07/10/2023', 'As an IT Support Intern you are responsible for providing technical assistance and support to users within Maw Institute. You will work closely with the IT team to troubleshoot and resolve hardware, software, and network issues. Your tasks include respond', '1 Must have a solid understanding of computer hardware, operating systems, and networking, along with troubleshooting abilities\r\n\r\n2 Should have a good communication and customer service skills\r\n\r\n3 Attention to detail, adaptability, and a willingness to ', '1 Should have atleast a diploma certficate in IT, computer science or relevant professional certficate. (Bachelors degree is an added advantage)\r\n\r\n2 Must be a graduate in the above (1) mentioned certficate.\r\n\r\n3 Must have passed exemplary.'),
(2, 'secretary', 'Nairobi', '02/07/2023', 'fulltime', '10/10/2023', 'As an IT Support Intern you are responsible for providing technical assistance and support to users within Maw Institute. You will work closely with the IT team to troubleshoot and resolve hardware, software, and network issues. Your tasks include respond', '1 Must have a solid understanding of computer hardware, operating systems, and networking, along with troubleshooting abilities\r\n\r\n2 Should have a good communication and customer service skills\r\n\r\n3 Attention to detail, adaptability, and a willingness to ', '1 Should have atleast a diploma certficate in IT, computer science or relevant professional certficate. (Bachelors degree is an added advantage)\r\n\r\n2 Must be a graduate in the above (1) mentioned certficate.\r\n\r\n3 Must have passed exemplary.');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_descrip` varchar(255) NOT NULL,
  `moreinfo` varchar(255) NOT NULL,
  `course_fee` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_descrip`, `moreinfo`, `course_fee`, `duration`, `image`) VALUES
(1, 'Full Stack Android App Mobile Development', 'With Kotlin,Java and MYSQl', 'Become a full stack Certified Android developer | No prior experience in programming is required', 'KSH 100,000', '3 month', 'android.png'),
(2, 'Full Stack Web Application development', 'With Angular,Java and MYSQL', 'Become a full stack Certified Web developer | No prior experience in programming is required', 'KSH 100,000', '3 month', 'web1.jpeg'),
(3, 'Database Programming', 'With MYSQL', 'Become a full stack Certified database developer | No prior experience in programming is required', 'KSH 50,000', '2 month', 'data.png'),
(4, 'Full Stack IOS mobile Development', 'With Swift,Java and MYSQL', 'Become a Certified IOs mobile Application developer | No prior experience in programming is required', 'KSH 100,000', '3 month', 'ios1.png'),
(5, 'Full Stack Hybrid Mobile Application Development', 'With Flutter,Java and MYSQL', 'Become a Certified Android and IOS mobile App developer | No prior experience in programming is required', 'KSH 100,000', '3 month', 'hy.png'),
(6, 'Full Stack Web Application Development', 'With HTML5,JavaScript,Java and MYSQL', 'Become a Certified Web Application developer | No prior experience in programming is required', 'KSH 100,000', '3 month', 'web1.jpg'),
(7, 'Full Stack Web Application Development', 'With Angular,NodeJs and MYSQL', 'Become a Certified Web Application developer | No prior experience in programming is required', 'KSH 100,000', '3 month', 'web3.png'),
(8, 'Fundamentals of HTML5 and JavaScript', 'This is a detailed foundation course', 'In this course you will learn basic principles of what is needed to develop a website | No prior experience in programming is required', 'KSH 40,000', '4 Weeks Course', 'hjc.webp'),
(9, 'Fundamentals of Java Programming', 'This is a detailed foundation course', 'Here we train you on the functionalities of Java in programming | No prior experience in programming is required', 'KSH 40,000', '4 Weeks Course', 'java.webp'),
(10, 'Fundamentals of Android Programming with Kotlin', 'This is a detailed foundation course', 'Kotlin is the future of mobile application development therefore we train you on the syntax and functionality of kotlin language | No prior experience in programming is required', 'KSH 40,000', '4 Weeks Course', 'kot1.png'),
(11, 'Fundamentals of Angular Programming', 'This is a detailed foundation course', 'Angular is one of the best web development language and therefore in this course we train all what you need to know about angular | No prior experience in programming is required', 'KSH 40,000', '4 Weeks Course', 'angular.png'),
(12, 'Fundamentals of NodeJs Programming', 'This is a detailed foundation course', 'In this course we train you on the functionality and the use case of NodeJs in mobile and web application development | No prior experience in programming is required', 'KSH 40,000', '4 Weeks Course', 'nod.png'),
(13, 'Fundamentals of SQL using MYSQL', 'This is a detailed foundation course', 'SQL is the most used database management system and in this course we give a clear and detailed training on data and database management using MYSQL | No prior experience in programming is required', 'KSH 25,000', '4 Weeks Course', 'data2.jpeg'),
(14, 'Fundamentals of Javascript Programming', 'This is a detailed foundation course', 'In this course we train you on the functionality and the use case of Javascript in mobile and web application development | No prior experience in programming is required', 'KSH 40,000', '4 Weeks Course', 'js.jpeg'),
(15, 'Fundamentals of Flutter Programming', 'This is a detailed foundation course', 'In this course we train you on the functionality and the use of Flutter in hybrid mobile application development | No prior experience in programming is required', 'KSH 40,000', '4 Weeks Course', 'flut.png'),
(17, 'Fundamental of swift programming', 'This is a detailed foundation course', 'In this course we train you on the functionality a..', 'KSH 50,000', '4 weeks', 'sw.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `uname`, `email`, `password`) VALUES
(87, 'Clinton ', 'clintonekesa90@gmail.com', '$2y$10$2lpiAv9RDu2YXc9505/HyOzYNAtPmdCPhVA63upw6HHi8n3JE5/da'),
(88, 'Mary', 'mary@gamil.com', '$2y$10$PdQJpBtPs9UFV3sMCzwm3uvkTSK6XLgmleY0.GqPiVS00jDpg7L9m'),
(89, 'Walu', 'walu@gmail.com', '$2y$10$qC/QqrE0oLM.4dnN7QQFHuT4Oqk.t03LI1G8FVnx2txoO0BpN1qOS'),
(91, 'Rose', 'rose@gmail.com', '$2y$10$vRnJtUqb.LAzYAkeHgBSw.eDx6FZLBuJcCQ49QEBlqWdJju76innO'),
(92, 'abiud', 'abiud@gmail.com', '$2y$10$P54WX.XlY1dPZKPnkxqUMu9.qYfB4tDb/6gKzCgA4hw8WasoLIAy6');

-- --------------------------------------------------------

--
-- Table structure for table `user_course_application`
--

CREATE TABLE `user_course_application` (
  `id` int(11) NOT NULL,
  `course_name` varchar(255) DEFAULT NULL,
  `course_descrip` varchar(255) DEFAULT NULL,
  `course_fee` varchar(255) DEFAULT NULL,
  `enroll_date` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `statu` varchar(255) DEFAULT 'pending',
  `application_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `course_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_course_application`
--

INSERT INTO `user_course_application` (`id`, `course_name`, `course_descrip`, `course_fee`, `enroll_date`, `user_id`, `duration`, `statu`, `application_date`, `course_id`) VALUES
(104, 'Full Stack Android App Mobile Development', 'With Kotlin,Java and MYSQl', 'KSH 100,000', NULL, 87, '3 month', 'pending', '2023-07-14 16:45:17', 1),
(105, 'Fundamentals of Android Programming with Kotlin', 'This is a detailed foundation course', 'KSH 40,000', NULL, 87, '4 Weeks Course', 'pending', '2023-07-14 16:46:57', 10),
(106, 'Fundamentals of Flutter Programming', 'This is a detailed foundation course', 'KSH 40,000', NULL, 87, '4 Weeks Course', 'pending', '2023-07-14 17:00:52', 15),
(107, 'Full Stack Android App Mobile Development', 'With Kotlin,Java and MYSQl', 'KSH 100,000', NULL, 91, '3 month', 'pending', '2023-07-14 22:33:31', 1),
(109, 'Full Stack Android App Mobile Devopment', 'With Kotlin,Java and MYSQl', 'KSH 100,000', NULL, 92, '3 month', 'pending', '2023-07-29 21:05:10', 1),
(110, 'Fundamentals of NodeJs Programming', 'This is a detailed foundation course', 'KSH 40,000', NULL, 92, '4 Weeks Course', 'pending', '2023-07-29 21:06:49', 12),
(111, 'Full Stack Web Application Development', 'With Angular,NodeJs and MYSQL', 'KSH 100,000', NULL, 92, '3 month', 'pending', '2023-07-29 21:07:48', 7),
(113, 'Full Stack Web Application development', 'With Angular,Java and MYSQL', 'KSH 100,000', NULL, 87, '3 month', 'pending', '2023-07-30 09:30:38', 2),
(114, 'Full Stack Web Application Development', 'With HTML5,JavaScript,Java and MYSQL', 'KSH 100,000', NULL, 87, '3 month', 'pending', '2023-07-31 09:53:52', 6);

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `userId` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `school` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `laptop` varchar(255) DEFAULT NULL,
  `programming` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`userId`, `fullname`, `phone`, `day`, `month`, `year`, `gender`, `country`, `level`, `school`, `grade`, `laptop`, `programming`, `image`) VALUES
(8, 'Clinton tovesi', '+254757561782', '02', '03', '1999', '', 'Kenya', '', 'Chuka University ', 'A', 'Yes', 'yes', 'IMG_20230528_165431_807.jpgIMG_20230528_165431_807.jpg'),
(9, 'mary wambui', '0715185272', '20', '03', '2006', '', 'Kenya', '', 'Chuka University ', 'A', 'Yes', 'yes', 'IMG_20230709_145925_517.jpgIMG_20230709_145925_517.jpg'),
(10, 'Walu', '0715185272', '02', '08', '2006', '', 'Kenya', '', 'Chuka University ', 'A', 'Yes', 'yes', 'IMG_20230709_145933_241.jpgIMG_20230528_165431_807.jpg'),
(11, 'Rose sakwa', '0715185272', '20', '03', '2006', '', 'Kenya', '', 'Chuka University ', 'A', 'Yes', 'yes', 'IMG_20230714_231742_884.jpgIMG_20230714_231742_884.jpg'),
(12, 'Abiud mulongo', '+254757561782', '02', '08', '2006', '', 'Kenya', '', 'Chuka University ', 'Upper class ', 'Yes', 'yes', 'IMG_20230726_223354_593.jpgbad-relationship-quotes-23.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`jobId`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `unique_email` (`email`),
  ADD UNIQUE KEY `unique_uname` (`uname`);

--
-- Indexes for table `user_course_application`
--
ALTER TABLE `user_course_application`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE_index` (`user_id`,`course_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `jobId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `user_course_application`
--
ALTER TABLE `user_course_application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_course_application`
--
ALTER TABLE `user_course_application`
  ADD CONSTRAINT `user_course_application_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `user_course_application_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
