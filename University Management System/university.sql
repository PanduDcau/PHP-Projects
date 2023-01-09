-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2018 at 12:35 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `ISBN` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Year` year(4) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Publisher` varchar(30) NOT NULL,
  `Author` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`ISBN`, `Name`, `Year`, `Title`, `Publisher`, `Author`) VALUES
('131-43-1-55-1', 'Adventures of Chamith & Dulaj', 2018, 'Adventures of Chamith & Dulaj', 'Sarasavi Publishers', 'E001'),
('54-53-2-75-7', 'Dulaj the drunkard', 2017, 'Dulaj the drunkard', 'Sarasavi Publishers', 'E003');

-- --------------------------------------------------------

--
-- Table structure for table `book_burrow`
--

CREATE TABLE `book_burrow` (
  `Copy_No` varchar(5) NOT NULL,
  `ISBN` varchar(30) NOT NULL,
  `Student_ID` varchar(5) NOT NULL,
  `Burrow_Date` date NOT NULL,
  `Return_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book_burrow`
--

INSERT INTO `book_burrow` (`Copy_No`, `ISBN`, `Student_ID`, `Burrow_Date`, `Return_Date`) VALUES
('1', '131-43-1-55-1', 'S001', '0000-00-00', NULL),
('1', '54-53-2-75-7', 'S002', '0000-00-00', NULL),
('2', '54-53-2-75-7', 'E001', '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `book_copy`
--

CREATE TABLE `book_copy` (
  `Copy_No` varchar(5) NOT NULL,
  `ISBN` varchar(30) NOT NULL,
  `Is_Available` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book_copy`
--

INSERT INTO `book_copy` (`Copy_No`, `ISBN`, `Is_Available`) VALUES
('1', '131-43-1-55-1', 'Yes'),
('1', '54-53-2-75-7', 'Yes'),
('2', '54-53-2-75-7', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `Company_ID` varchar(5) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`Company_ID`, `Name`) VALUES
('', ''),
('221', 'WSO2'),
('444', 'Virtusa');

-- --------------------------------------------------------

--
-- Table structure for table `company_assesment`
--

CREATE TABLE `company_assesment` (
  `Student_ID` varchar(5) NOT NULL,
  `Company_ID` varchar(5) NOT NULL,
  `Year` year(4) NOT NULL,
  `Semester` varchar(3) NOT NULL,
  `Company_Assesment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company_assesment`
--

INSERT INTO `company_assesment` (`Student_ID`, `Company_ID`, `Year`, `Semester`, `Company_Assesment`) VALUES
('S001', '444', 2000, '2nd', 'hhhh');

-- --------------------------------------------------------

--
-- Table structure for table `company_session`
--

CREATE TABLE `company_session` (
  `SesID` varchar(5) NOT NULL,
  `Year` year(4) NOT NULL,
  `Semester` varchar(3) NOT NULL,
  `Session_Manager` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company_session`
--

INSERT INTO `company_session` (`SesID`, `Year`, `Semester`, `Session_Manager`) VALUES
('1', 2016, '3rd', 'Perera');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Course_Code` varchar(5) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Course` varchar(50) NOT NULL,
  `College` varchar(30) NOT NULL,
  `Credit_Hours` int(3) NOT NULL,
  `Dep_Code` varchar(4) NOT NULL,
  `Prerequisite` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Course_Code`, `Name`, `Course`, `College`, `Credit_Hours`, `Dep_Code`, `Prerequisite`) VALUES
('C001', 'Calculus', 'Calculus', 'Maths Department', 30, 'D001', ''),
('C101', 'Databases 1', 'Databases', 'UCSC', 50, 'D003', 'C102'),
('C102', 'DSA', 'DSA', 'UCSC', 30, 'D003', 'C001');

-- --------------------------------------------------------

--
-- Table structure for table `course_section`
--

CREATE TABLE `course_section` (
  `Semester` varchar(3) NOT NULL,
  `Year` varchar(4) NOT NULL,
  `Class_Size` varchar(4) NOT NULL,
  `Class_Type` varchar(15) NOT NULL,
  `Sec_ID` varchar(5) NOT NULL,
  `Course_Code` varchar(5) NOT NULL,
  `Emp_ID` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course_section`
--

INSERT INTO `course_section` (`Semester`, `Year`, `Class_Size`, `Class_Type`, `Sec_ID`, `Course_Code`, `Emp_ID`) VALUES
('3rd', '2016', '10', 'Group', '1', 'C101', 'E001'),
('1st', '2018', '50', 'Mass', '2', 'C001', 'E001');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Dep_Code` varchar(4) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Dep_Code`, `Name`, `Location`, `Phone`) VALUES
('D001', 'Maths Department', 'Colombo 5', '+94112849244'),
('D002', 'Physics Department', 'Colombo 5', '+94112849455'),
('D003', 'IT Department', 'Colombo 7', '+94112852566'),
('D004', 'Chemistry Department', 'Colombo 3', '+94112877376');

-- --------------------------------------------------------

--
-- Table structure for table `department_manager`
--

CREATE TABLE `department_manager` (
  `Dep_Code` varchar(4) NOT NULL,
  `Start_Date` date NOT NULL,
  `Emp_ID` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department_manager`
--

INSERT INTO `department_manager` (`Dep_Code`, `Start_Date`, `Emp_ID`) VALUES
('D001', '0000-00-00', 'E001'),
('D002', '2017-12-12', 'E002');

-- --------------------------------------------------------

--
-- Table structure for table `enroll_stu_course`
--

CREATE TABLE `enroll_stu_course` (
  `Course_Code` varchar(5) NOT NULL,
  `Sec_ID` varchar(5) NOT NULL,
  `Student_ID` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enroll_stu_course`
--

INSERT INTO `enroll_stu_course` (`Course_Code`, `Sec_ID`, `Student_ID`) VALUES
('C001', '2', 'S002');

-- --------------------------------------------------------

--
-- Table structure for table `grad_lab_session`
--

CREATE TABLE `grad_lab_session` (
  `Section_ID` varchar(5) NOT NULL,
  `Course_Code` varchar(5) NOT NULL,
  `Lab_Session_ID` varchar(5) NOT NULL,
  `Student_ID` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grad_lab_session`
--

INSERT INTO `grad_lab_session` (`Section_ID`, `Course_Code`, `Lab_Session_ID`, `Student_ID`) VALUES
('2', 'C001', 'L002', 'S001');

-- --------------------------------------------------------

--
-- Table structure for table `lab_session`
--

CREATE TABLE `lab_session` (
  `Section_ID` varchar(5) NOT NULL,
  `Course_Code` varchar(5) NOT NULL,
  `Lab_Session_ID` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lab_session`
--

INSERT INTO `lab_session` (`Section_ID`, `Course_Code`, `Lab_Session_ID`) VALUES
('1', 'C101', 'L001'),
('2', 'C001', 'L002');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin'),
('librarian', 'librarian'),
('professor', 'professor'),
('sessionmanager', 'sessionmanager'),
('student', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `professor`
--

CREATE TABLE `professor` (
  `Emp_ID` varchar(4) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Office` varchar(20) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `Role` varchar(15) NOT NULL,
  `Dep_Code` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `professor`
--

INSERT INTO `professor` (`Emp_ID`, `Name`, `Office`, `Phone`, `Role`, `Dep_Code`) VALUES
('E001', 'Dr Kasun Perera', 'Head Office', '+94775592441', 'Teacher', 'D001'),
('E002', 'Dr Nihal Silva', 'Administrator Office', '+94764246922', 'Administration', 'D002'),
('E003', 'Dr Malik Silva', 'Academic Office', '+94714995225', 'Resercher', 'D001');

-- --------------------------------------------------------

--
-- Table structure for table `prof_book_course`
--

CREATE TABLE `prof_book_course` (
  `Course_Code` varchar(5) NOT NULL,
  `Emp_ID` varchar(4) NOT NULL,
  `ISBN` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prof_book_course`
--

INSERT INTO `prof_book_course` (`Course_Code`, `Emp_ID`, `ISBN`) VALUES
('C001', 'E001', '54-53-2-75-7');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_ID` varchar(5) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `Undergraduate_Major` varchar(25) DEFAULT NULL,
  `Thesies_Option` varchar(25) DEFAULT NULL,
  `Type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_ID`, `Name`, `Address`, `Undergraduate_Major`, `Thesies_Option`, `Type`) VALUES
('S001', 'Binara Medawatta', 'Nugegoda', 'Computer Science', '3', 'Graduate'),
('S002', 'Chamith Mendis', 'Kollupitiya', '', '', 'Undergraduate'),
('S003', 'Dulaj Dhanushka', 'Gampaha', '', '', 'Non Matriculating'),
('S004', 'Mayurathan', 'Jaffna', '', '', 'Undergraduate');

-- --------------------------------------------------------

--
-- Table structure for table `student_course_section`
--

CREATE TABLE `student_course_section` (
  `Sec_ID` varchar(5) NOT NULL,
  `Student_ID` varchar(5) NOT NULL,
  `Course_Code` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `stud_course_grade`
--

CREATE TABLE `stud_course_grade` (
  `Student_ID` varchar(5) NOT NULL,
  `Course_Code` varchar(5) NOT NULL,
  `Grade` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stud_course_grade`
--

INSERT INTO `stud_course_grade` (`Student_ID`, `Course_Code`, `Grade`) VALUES
('S001', 'C102', 'A'),
('S002', 'C101', 'A'),
('S003', 'C001', 'B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`ISBN`),
  ADD KEY `Author` (`Author`);

--
-- Indexes for table `book_burrow`
--
ALTER TABLE `book_burrow`
  ADD PRIMARY KEY (`Copy_No`,`ISBN`,`Student_ID`),
  ADD KEY `ISBN` (`ISBN`);

--
-- Indexes for table `book_copy`
--
ALTER TABLE `book_copy`
  ADD PRIMARY KEY (`Copy_No`,`ISBN`),
  ADD KEY `ISBN` (`ISBN`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`Company_ID`);

--
-- Indexes for table `company_assesment`
--
ALTER TABLE `company_assesment`
  ADD PRIMARY KEY (`Student_ID`,`Company_ID`),
  ADD KEY `Company_ID` (`Company_ID`);

--
-- Indexes for table `company_session`
--
ALTER TABLE `company_session`
  ADD PRIMARY KEY (`SesID`,`Year`,`Session_Manager`),
  ADD UNIQUE KEY `SesID` (`SesID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Course_Code`),
  ADD KEY `Dep_Code` (`Dep_Code`);

--
-- Indexes for table `course_section`
--
ALTER TABLE `course_section`
  ADD PRIMARY KEY (`Sec_ID`,`Course_Code`),
  ADD UNIQUE KEY `Sec_ID` (`Sec_ID`),
  ADD KEY `Course_Code` (`Course_Code`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Dep_Code`);

--
-- Indexes for table `department_manager`
--
ALTER TABLE `department_manager`
  ADD PRIMARY KEY (`Dep_Code`,`Emp_ID`),
  ADD KEY `Emp_ID` (`Emp_ID`);

--
-- Indexes for table `enroll_stu_course`
--
ALTER TABLE `enroll_stu_course`
  ADD PRIMARY KEY (`Course_Code`,`Sec_ID`,`Student_ID`);

--
-- Indexes for table `grad_lab_session`
--
ALTER TABLE `grad_lab_session`
  ADD PRIMARY KEY (`Section_ID`,`Course_Code`,`Lab_Session_ID`,`Student_ID`);

--
-- Indexes for table `lab_session`
--
ALTER TABLE `lab_session`
  ADD PRIMARY KEY (`Section_ID`,`Course_Code`,`Lab_Session_ID`),
  ADD UNIQUE KEY `Section_Number` (`Section_ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`Emp_ID`,`Dep_Code`),
  ADD KEY `Dep_Code` (`Dep_Code`);

--
-- Indexes for table `prof_book_course`
--
ALTER TABLE `prof_book_course`
  ADD PRIMARY KEY (`Course_Code`,`ISBN`),
  ADD KEY `ISBN` (`ISBN`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_ID`);

--
-- Indexes for table `student_course_section`
--
ALTER TABLE `student_course_section`
  ADD PRIMARY KEY (`Sec_ID`,`Student_ID`,`Course_Code`),
  ADD KEY `Student_ID` (`Student_ID`);

--
-- Indexes for table `stud_course_grade`
--
ALTER TABLE `stud_course_grade`
  ADD PRIMARY KEY (`Student_ID`,`Course_Code`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `Author` FOREIGN KEY (`Author`) REFERENCES `professor` (`Emp_ID`);

--
-- Constraints for table `book_burrow`
--
ALTER TABLE `book_burrow`
  ADD CONSTRAINT `book_burrow_ibfk_1` FOREIGN KEY (`ISBN`) REFERENCES `book` (`ISBN`),
  ADD CONSTRAINT `book_burrow_ibfk_2` FOREIGN KEY (`Copy_No`) REFERENCES `book_copy` (`Copy_No`);

--
-- Constraints for table `book_copy`
--
ALTER TABLE `book_copy`
  ADD CONSTRAINT `book_copy_ibfk_1` FOREIGN KEY (`ISBN`) REFERENCES `book` (`ISBN`);

--
-- Constraints for table `company_assesment`
--
ALTER TABLE `company_assesment`
  ADD CONSTRAINT `Company_ID` FOREIGN KEY (`Company_ID`) REFERENCES `company` (`Company_ID`),
  ADD CONSTRAINT `company_assesment_ibfk_1` FOREIGN KEY (`Company_ID`) REFERENCES `company` (`Company_ID`),
  ADD CONSTRAINT `company_assesment_ibfk_2` FOREIGN KEY (`Student_ID`) REFERENCES `student` (`Student_ID`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`Dep_Code`) REFERENCES `department` (`Dep_Code`);

--
-- Constraints for table `course_section`
--
ALTER TABLE `course_section`
  ADD CONSTRAINT `Course_Code` FOREIGN KEY (`Course_Code`) REFERENCES `course` (`Course_Code`);

--
-- Constraints for table `department_manager`
--
ALTER TABLE `department_manager`
  ADD CONSTRAINT `Dep_Code` FOREIGN KEY (`Dep_Code`) REFERENCES `department` (`Dep_Code`),
  ADD CONSTRAINT `Emp_ID` FOREIGN KEY (`Emp_ID`) REFERENCES `professor` (`Emp_ID`),
  ADD CONSTRAINT `department_manager_ibfk_1` FOREIGN KEY (`Emp_ID`) REFERENCES `professor` (`Emp_ID`),
  ADD CONSTRAINT `department_manager_ibfk_2` FOREIGN KEY (`Dep_Code`) REFERENCES `department` (`Dep_Code`);

--
-- Constraints for table `grad_lab_session`
--
ALTER TABLE `grad_lab_session`
  ADD CONSTRAINT `Section_ID` FOREIGN KEY (`Section_ID`) REFERENCES `course_section` (`Sec_ID`);

--
-- Constraints for table `professor`
--
ALTER TABLE `professor`
  ADD CONSTRAINT `professor_ibfk_1` FOREIGN KEY (`Dep_Code`) REFERENCES `department` (`Dep_Code`);

--
-- Constraints for table `prof_book_course`
--
ALTER TABLE `prof_book_course`
  ADD CONSTRAINT `ISBN` FOREIGN KEY (`ISBN`) REFERENCES `book` (`ISBN`);

--
-- Constraints for table `student_course_section`
--
ALTER TABLE `student_course_section`
  ADD CONSTRAINT `Sec_ID` FOREIGN KEY (`Sec_ID`) REFERENCES `course_section` (`Sec_ID`),
  ADD CONSTRAINT `Student_ID` FOREIGN KEY (`Student_ID`) REFERENCES `student` (`Student_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
