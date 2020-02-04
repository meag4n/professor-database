-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2020 at 06:32 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `professors`
--

-- --------------------------------------------------------

--
-- Table structure for table `professors`
--

CREATE TABLE `professors` (
  `id` int(11) NOT NULL,
  `professor` varchar(50) NOT NULL,
  `class` varchar(60) NOT NULL,
  `why` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professors`
--

INSERT INTO `professors` (`id`, `professor`, `class`, `why`) VALUES
(3, 'Mindy McAdams', 'Advanced Web Apps for Communicators', 'She is both very knowledgable and passionate about what she teaches. She teaches one of the most valuable classes I\'ve ever taken (and is also the reason I can code this form).'),
(5, 'Natalie Asorey', 'Social Media Management', 'She is engaging and enthusiastic about social media. She had great anecdotes that showed us what managing the social media for a big corporation is like.'),
(6, 'Cynthia Barnett', 'Environmental and Sustainability Leadership', 'Professor Barnett is one of the best professors I\'ve ever had. She has so much knowledge and experience in both environmental studies and in journalism. She cares a lot for her students and is always willing to help them!'),
(8, 'Peter Licari', 'Political Behavior', 'He makes politics fun and relatable to students, something very hard to do. I\'ve never been so excited to go to a political science class!'),
(9, 'Michael McDonald', 'Political Parties and Elections', 'Professor McDonald made class really interesting by incorporating his own lengthy and diverse experience in politics into discussion.'),
(10, 'Marcia DiStaso', 'Principles of Public Relations', 'Professor DiStaso is one of the most infamous PR practioners in the nation. She has ample experience in multiple PR fields, and she is heavily involved with industry leaders. I felt much more confident in PR after taking her class!'),
(11, 'Ophir Lehavy', 'International Public Relations', 'Online classes are tough, but she made my experience in International PR online very enjoyable. Her lectures were very informative with plenty of resources to better understand regional PR. Very reasonable with students.'),
(12, 'Mike Foley', 'Reporting', 'He is infamous at UF for how much you\'ll learn in his reporting class. He taught me so much about AP style and bettered my journalism skills.'),
(13, 'Cen Yue', 'Public Relations Research', 'She was very helpful and provided many resources for her students. I knew that if I ever struggled with something in her class, she would be willing to help me in office hours.'),
(14, 'Thomas Knight', 'Microeconomics', 'He took a very difficult topic — economics — and made an enjoyable class out of it. He made it easy to understand when I didn\'t know anything about economics previously.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `professors`
--
ALTER TABLE `professors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `professors`
--
ALTER TABLE `professors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
