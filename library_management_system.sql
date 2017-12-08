-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2017 at 12:36 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'MAK', 'abc123'),
(2, 'Hammy', 'xyz321');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `book_title` varchar(225) NOT NULL,
  `publisher_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_title`, `publisher_name`) VALUES
(5, 'Harry Potter (A History of Magic)', 'Bloomsbury Publishing'),
(6, 'Starting out with Visual C#', 'Pearson'),
(7, 'A Quantitative Approach', 'Pearson'),
(8, 'Complete Reference C', 'Pearson'),
(9, 'Fundamentals of database Systems', 'Pearson'),
(10, 'Complete Reference to Java', 'Mc Graw Hill'),
(11, 'Computing And Programming In Python', 'Pearson'),
(12, 'Computing Fundamentals Introduction to Computers', 'Wiley'),
(13, 'Our Digital World Introduction to Computing', 'Paradigm'),
(14, 'Digital Fundamentals', 'Pearson'),
(15, 'Introduction To Numerical Analysis and Scientific Computing', 'CRC Press');

-- --------------------------------------------------------

--
-- Table structure for table `book_authors`
--

CREATE TABLE `book_authors` (
  `book_id` int(11) NOT NULL,
  `author_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_authors`
--

INSERT INTO `book_authors` (`book_id`, `author_name`) VALUES
(5, 'J. K. Rowling'),
(6, 'Tony Gaddis'),
(7, 'John Hennessy'),
(8, 'Herbert Schildt'),
(9, 'Ramez Elmasri'),
(10, 'Herbert Schildt'),
(11, 'Mark Guzidal'),
(12, 'Faithe Wempen'),
(13, 'Jon Gordon'),
(14, 'Floyd'),
(15, 'Nabil Nassif');

-- --------------------------------------------------------

--
-- Table structure for table `book_copies`
--

CREATE TABLE `book_copies` (
  `book_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `no_of_copies` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_copies`
--

INSERT INTO `book_copies` (`book_id`, `branch_id`, `no_of_copies`) VALUES
(5, 1, 5),
(6, 2, 8),
(7, 2, 5),
(8, 2, 5),
(9, 2, 4),
(10, 1, 5),
(11, 1, 5),
(12, 2, 3),
(13, 1, 2),
(14, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `book_loans`
--

CREATE TABLE `book_loans` (
  `book_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `borrower_card_no` int(11) NOT NULL,
  `date_out` date NOT NULL,
  `due_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_loans`
--

INSERT INTO `book_loans` (`book_id`, `branch_id`, `borrower_card_no`, `date_out`, `due_date`) VALUES
(5, 1, 2, '2017-11-14', '2017-11-14'),
(6, 2, 1, '2017-11-14', '2017-11-15'),
(7, 1, 1, '2017-11-15', '2017-11-29'),
(11, 1, 6, '2017-11-15', '2017-11-29'),
(13, 1, 8, '2017-11-16', '2017-11-30'),
(14, 2, 4, '2017-11-15', '2017-11-29');

-- --------------------------------------------------------

--
-- Table structure for table `borrower`
--

CREATE TABLE `borrower` (
  `borrower_card_no` int(11) NOT NULL,
  `borrower_name` varchar(225) NOT NULL,
  `borrower_address` varchar(225) NOT NULL,
  `borrower_phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrower`
--

INSERT INTO `borrower` (`borrower_card_no`, `borrower_name`, `borrower_address`, `borrower_phone`) VALUES
(1, 'Ahmad', 'y2j, Airport', 345678),
(2, 'Hamza', 'House no. X , DHA', 123890),
(3, 'Ali', 'zxcv, Hadeed', 456123),
(4, 'Jaffer', 'Phase 1,Gulsha-e-Hadeed', 3457891),
(5, 'Hamza', 'Clifton', 2147483647),
(6, 'Athar', 'Malir Cant', 2147483647),
(7, 'Qadir', 'Malir Cant', 2147483647),
(8, 'Murtaza', 'Gulshan', 30445464);

-- --------------------------------------------------------

--
-- Table structure for table `library_branch`
--

CREATE TABLE `library_branch` (
  `branch_id` int(11) NOT NULL,
  `branch_name` varchar(225) NOT NULL,
  `branch_address` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library_branch`
--

INSERT INTO `library_branch` (`branch_id`, `branch_name`, `branch_address`) VALUES
(1, 'abc', 'National Highway. Karachi.'),
(2, 'xyz', 'Karsaz, Karachi.');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `publisher_name` varchar(225) NOT NULL,
  `publisher_address` varchar(225) NOT NULL,
  `publisher_phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisher_name`, `publisher_address`, `publisher_phone`) VALUES
('Bloomsbury Publishing', 'UK', 123456),
('CRC Press', 'Florida,USA', 1287944),
('Mc Graw Hill', 'London,UK', 34789512),
('Paradigm', 'London,UK', 4489456),
('Pearson', 'London,UK', 123789),
('Wellesley Cambridge Press', 'London', 3471158),
('Wiley', 'London,UK', 4445789);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `publisher_name` (`publisher_name`);

--
-- Indexes for table `book_authors`
--
ALTER TABLE `book_authors`
  ADD PRIMARY KEY (`book_id`,`author_name`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `book_copies`
--
ALTER TABLE `book_copies`
  ADD PRIMARY KEY (`book_id`,`branch_id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `branch_id` (`branch_id`);

--
-- Indexes for table `book_loans`
--
ALTER TABLE `book_loans`
  ADD PRIMARY KEY (`book_id`,`branch_id`,`borrower_card_no`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `branch_id` (`branch_id`),
  ADD KEY `borrower_card_no` (`borrower_card_no`);

--
-- Indexes for table `borrower`
--
ALTER TABLE `borrower`
  ADD PRIMARY KEY (`borrower_card_no`);

--
-- Indexes for table `library_branch`
--
ALTER TABLE `library_branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisher_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `borrower`
--
ALTER TABLE `borrower`
  MODIFY `borrower_card_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `library_branch`
--
ALTER TABLE `library_branch`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`publisher_name`) REFERENCES `publisher` (`publisher_name`);

--
-- Constraints for table `book_authors`
--
ALTER TABLE `book_authors`
  ADD CONSTRAINT `book_authors_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`);

--
-- Constraints for table `book_copies`
--
ALTER TABLE `book_copies`
  ADD CONSTRAINT `book_copies_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`),
  ADD CONSTRAINT `book_copies_ibfk_2` FOREIGN KEY (`branch_id`) REFERENCES `library_branch` (`branch_id`);

--
-- Constraints for table `book_loans`
--
ALTER TABLE `book_loans`
  ADD CONSTRAINT `book_loans_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`),
  ADD CONSTRAINT `book_loans_ibfk_2` FOREIGN KEY (`borrower_card_no`) REFERENCES `borrower` (`borrower_card_no`),
  ADD CONSTRAINT `book_loans_ibfk_3` FOREIGN KEY (`branch_id`) REFERENCES `library_branch` (`branch_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
