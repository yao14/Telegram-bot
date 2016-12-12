-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2016 at 11:31 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bot`
--
CREATE DATABASE IF NOT EXISTS `bot` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bot`;

-- --------------------------------------------------------

--
-- Table structure for table `array`
--

CREATE TABLE IF NOT EXISTS `array` (
  `arrayid` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  PRIMARY KEY (`arrayid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `array`
--

INSERT INTO `array` (`arrayid`, `count`) VALUES
(1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `bot_text`
--

CREATE TABLE IF NOT EXISTS `bot_text` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `msg` varchar(1000) NOT NULL,
  `source` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bot_text`
--

INSERT INTO `bot_text` (`id`, `msg`, `source`, `time`) VALUES
(1, 'The fees for the various programmes differ from schools, in order to get exact amount please contact the school you wish to apply to; or call: 233-307011878', 'bot', '2016-12-12 22:20:28');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `questions` varchar(10000) NOT NULL,
  `answers` varchar(10000) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `questions`, `answers`) VALUES
(1, 'Is the VVU affiliated with any Local or Foreign University?', 'VVU has affiliation with Andrews University and Grigs University (USA)'),
(2, ' What are the tuition fees for the various courses?', 'Our Tuition fees are moderate and the most affordable and depend on your choice of programme. Contact +233-307011878 for more information.'),
(3, 'What plan do you have for payment of tuition fees by installment?', 'The University has developed a flexible installment plan for payment of tuition fees.'),
(4, 'How committed and qualified are your lecturers?', 'Our lecturers are experienced professional and result-oriented Lecturers.'),
(5, ' Where is the location of the University?', 'VVU is located at Oyibi, Mile 19 off the Adentan - Dodowa road'),
(6, 'Has the Institute a prescribed uniform/attire?', ' We do not have any prescribed uniform or attire. We, however, as a tertiary institution, insist that our students dress decently.'),
(7, 'Do you provide counseling services for students?', 'Yes; the University has a Counseling Centre, manned by an experienced counselor and a chaplain.'),
(8, 'I am a student at one of the Schools – can I transfer to another School?', 'but transfer terms and conditions shall apply.'),
(9, 'As a student of the University, can I use the University’s accommodation services?', 'Yes – The University has accommodation for students’ utilization. More of them are being built to accommodate the increasing number of the student population.'),
(10, 'As a student of the University can I get any careers advice?', 'Yes – The there are experienced counselors that can assist students and prospective students with all their academic needs.'),
(11, 'I need to obtain a transcript – who do I contact?', 'You will need to come to the front desk of the admissions and records, fill a form, make payment then the transcript can be issued. If you are outside the country, identify someone to make payment on your behalf (give the person an authorization note) and the transcript will be sent to an address of your choice, or the person with the authorization not can collect it for you.'),
(12, 'I recently graduated and haven’t received my certificate – who can I contact about this?', 'The registry is responsible for issuing all students certificates. Contact the registry on +233 - 030711836'),
(13, 'What can I study?', 'The University currently offers undergraduate programs, postgraduate programs, as well as other short certificate courses; please visit our programs offered page for more information.'),
(14, 'Do you offer short courses?', ' Short Courses are available in a variety of subjects and levels through the University.'),
(15, 'Do you offer summer schools?', 'Yes. Contact the schools for relevant information and all enquiries.\r\n'),
(16, 'When do courses start?', 'Degrees and Diplomas at the University normally begin in August and January respectively.'),
(17, 'What are the University entry requirements?', 'Requirements vary from program to program. Information can be obtained from the Schools or please visit our website for more information. For more information see entry requirements'),
(18, 'How do I apply?', 'Information about how and when to apply should be sought from the School you wish to apply to. Students applying for undergraduate degrees should log on to our website or call our Admissions office (+233-307-011867) for more information. Also see how to apply'),
(19, 'What are the University fees?', 'The fees for the various programmes differ from schools, in order to get exact amount please contact the school you wish to apply to; or call: 233-307011878'),
(20, 'Are scholarships available?', 'Yes but terms and conditions apply.'),
(21, 'I want to study at Valley View University. What courses do you offer? How do I apply? Can you send me an application form?', 'For detailed information on studying for an undergraduate (or bachelors) degree, see our website for information on admission processes.'),
(22, 'How much is the cost of living for Valley View University?', 'For information on undergraduate or postgraduate fees and expenses, please call our Finance office (+233-307-011877) and they will be happy to answer all your queries. You can also download financial information for Valley View University.'),
(23, 'When was the Valley View University founded?', 'In the year 1979.'),
(24, 'How many Schools/Institutes are there at Valley View University?\r\n', 'currently VVU; has five schools but there are ongoing processes to get more schools accredited.'),
(25, 'When does the semester start? What are the term dates for the next academic year?', 'The academic year at Valley View University runs from August to May, and summer session runs from June 1, to July 30.'),
(26, 'Are there any IT related programs on Valley View University Campus?', 'Yes -There are a lot of IT related programs, an example is the annual ICT Expo: a platform for Institute of Computer Science (ICS) students to showcase their projects.'),
(27, 'Are there any sports activities on Campus?', 'Valley View University engages in a lot of Sports activities ranging from football, basketball, volley ball, and athletics; just to mention a few. There is an ultra modern gym on campus as well.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
