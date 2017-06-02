-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2017 at 04:47 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finance_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `finance_booklist`
--

CREATE TABLE `finance_booklist` (
  `F_ID` int(10) NOT NULL,
  `F_Num_AC` int(3) NOT NULL,
  `F_Detail` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `F_Amount` int(50) NOT NULL,
  `F_Status` int(1) NOT NULL,
  `F_Type` int(1) NOT NULL,
  `F_Date` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `M_ID` char(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `finance_booklist`
--

INSERT INTO `finance_booklist` (`F_ID`, `F_Num_AC`, `F_Detail`, `F_Amount`, `F_Status`, `F_Type`, `F_Date`, `M_ID`) VALUES
(1, 101, 'จ่ายค่าอุปกรณ์การซักรีดด้วยเงินสด 40,000 บาท', 40000, 0, 1, '2017-01-05', 'phiyawat9597'),
(2, 101, 'จ่ายเงินปันผลให้ผู้ถือหุ้นเป็นเงินสด 2,000 บาท', 2000, 0, 1, '2017-01-31', 'phiyawat9597'),
(3, 101, 'จ่ายเงินเดือนให้พนักง่านเป็นเงินสด 10,000 บาท', 10000, 0, 1, '2017-01-15', 'phiyawat9597'),
(4, 101, 'ชำระหนี้ด้วยเงินสด 20,000 บาท', 20000, 0, 1, '2017-01-20', 'phiyawat9597'),
(5, 101, 'ซื้อวัสดุในการซักรีด', 5000, 0, 1, '2017-01-07', 'phiyawat9597'),
(6, 101, 'บริษัทขายหุ้นทั้งหมดได้เป็นเงินสด จำนวน 200,000 บาท', 200000, 1, 1, '2017-01-02', 'phiyawat9597'),
(7, 101, 'บริษัทจ่ายค่าน้ำและค่าไฟฟ้าด้วยเงินสดเป็นจำนวน 2,000 บาท', 2000, 0, 1, '2017-01-15', 'phiyawat9597'),
(8, 101, 'บริษัทจ่ายค่าเช่าด้วยเงินสด 6,000 บาท', 6000, 0, 1, '2017-01-15', 'phiyawat9597'),
(9, 101, 'บริษัทได้เงินสดจากการให้บริการ จำนวน 15,000 บาท', 15000, 1, 1, '2017-01-10', 'phiyawat9597'),
(10, 101, 'ได้รับเงินสดจากลูกหนี้การค้า 5,000 บาท', 5000, 1, 1, '2017-01-25', 'phiyawat9597'),
(11, 102, 'อุปกรณ์การรีด ได้แก่ เครื่องซักผ้าและเครื่องรีดผ้า', 80000, 1, 1, '2017-01-05', 'phiyawat9597'),
(12, 103, 'วัสดุในการซักรีด ได้แก่ ผงซักฟอก น้ำยาปรับผ้านุ่มและน้ำยารีดผ้าเรียบ', 5000, 1, 1, '2017-01-07', 'phiyawat9597'),
(13, 104, 'ชำระหนี้ค่าบริการที่ลูกค้าค้างชำระ', 5000, 0, 1, '2017-01-25', 'phiyawat9597'),
(14, 104, 'ลูกค้าจะชำระให้ภายใน 30 วัน', 10000, 1, 1, '2017-01-12', 'phiyawat9597'),
(15, 201, 'บริษัทชำระหนี้บริษัท อาณาจักรอุปกรณ์ จำกัด', 20000, 1, 2, '2017-01-20', 'phiyawat9597'),
(16, 201, 'ยังไม่ได้จ่ายเงินอุปกรณ์การซักรีด 40,000 บาท', 40000, 0, 2, '2017-01-05', 'phiyawat9597'),
(17, 301, 'บริษัทจดทะเบียนและออกขายหุ้นสามัญมูลค่าหุ้นละ 100 บาทจำนวน 2,000 หุ้น', 200000, 0, 3, '2017-01-02', 'phiyawat9597'),
(18, 401, 'บริษัทได้รับรายได้จากการให้บริการซักรีดผ้า', 15000, 0, 4, '2017-01-10', 'phiyawat9597'),
(19, 401, 'ยังไม่ได้รับเงิน 10,000 บาทจากการให้บริการซักรีดผ้า', 10000, 0, 4, '2017-01-12', 'phiyawat9597'),
(21, 501, 'ได้รับเงินเดือนพนักงาน', 10000, 1, 5, '2017-01-15', 'phiyawat9597'),
(22, 502, 'ได้รับค่าเช่า 6,000 บาท', 6000, 1, 5, '2017-01-15', 'phiyawat9597'),
(29, 302, 'ได้รับเงินปันผลจ่าย 2,000 บาท', 2000, 1, 3, '2017-01-31', 'phiyawat9597'),
(33, 503, 'ได้รับค่าน้ำ ค่าไฟฟ้า จำนวน 2,000 บาท', 2000, 1, 5, '2017-01-15', 'phiyawat9597');

-- --------------------------------------------------------

--
-- Table structure for table `finance_book_num`
--

CREATE TABLE `finance_book_num` (
  `M_ID` char(30) COLLATE utf8_unicode_ci NOT NULL,
  `F_Num_AC` int(3) NOT NULL,
  `F_Name_AC` char(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `finance_book_num`
--

INSERT INTO `finance_book_num` (`M_ID`, `F_Num_AC`, `F_Name_AC`) VALUES
('phiyawat9597', 101, 'บัญชีเงินสด'),
('phiyawat9597', 102, 'บัญชีอุปกรณ์การซักรีด'),
('phiyawat9597', 103, 'บัญชีวัสดุการซักรีด'),
('phiyawat9597', 104, 'บัญชีลูกหนี้การค้า'),
('phiyawat9597', 201, 'บัญชีเจ้าหนี้'),
('phiyawat9597', 301, 'บัญชีทุนหุ้นสามัญ'),
('phiyawat9597', 302, 'บัญชีเงินปันผลจ่าย'),
('phiyawat9597', 401, 'บัญชีรายได้จากการให้บริการ'),
('phiyawat9597', 501, 'บัญชีเงินเดือนพนักงาน'),
('phiyawat9597', 502, 'บัญชีค่าเช่า'),
('phiyawat9597', 503, 'บัญชีค่าสาธารณูปโภค'),
('phiyawat9597', 505, 'บัญชีประหลาด');

-- --------------------------------------------------------

--
-- Table structure for table `login_member`
--

CREATE TABLE `login_member` (
  `M_ID` char(30) COLLATE utf8_unicode_ci NOT NULL,
  `M_Pass` char(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login_member`
--

INSERT INTO `login_member` (`M_ID`, `M_Pass`) VALUES
('phiyawat9597', '180340'),
('wandee9597', '180340');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `M_ID` char(30) COLLATE utf8_unicode_ci NOT NULL,
  `M_fName` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `M_lName` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `S_Name` char(225) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`M_ID`, `M_fName`, `M_lName`, `S_Name`) VALUES
('phiyawat9597', 'ปิยวัฒน์', 'วงศ์สวัสดิ์', 'ร้านอุ่นใจ'),
('wandee9597', 'วันดี', 'วงศ์สวัสดิ์', 'ขายของชำ');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `M_ID` char(30) COLLATE utf8_unicode_ci NOT NULL,
  `S_Name` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `S_Address` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `S_Owner` char(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`M_ID`, `S_Name`, `S_Address`, `S_Owner`) VALUES
('phiyawat9597', 'ร้านอุ่นใจ', '400/411 ถ.พหลโยธิน ต.คูคต อ.ลำลููกกา จ.ปทุมธานี 12130', 'Richard Tomson'),
('wandee9597', 'ขายของชำ', 'ซักที่นึง', 'Dark Mark');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `finance_booklist`
--
ALTER TABLE `finance_booklist`
  ADD PRIMARY KEY (`F_ID`,`F_Num_AC`,`F_Detail`,`M_ID`),
  ADD KEY `fk_Num_AC` (`F_Num_AC`),
  ADD KEY `M_ID` (`M_ID`);

--
-- Indexes for table `finance_book_num`
--
ALTER TABLE `finance_book_num`
  ADD PRIMARY KEY (`M_ID`,`F_Num_AC`),
  ADD KEY `F_Num_AC` (`F_Num_AC`),
  ADD KEY `M_ID` (`M_ID`);

--
-- Indexes for table `login_member`
--
ALTER TABLE `login_member`
  ADD PRIMARY KEY (`M_ID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`M_ID`),
  ADD KEY `member_ibfk_3` (`S_Name`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`M_ID`,`S_Name`),
  ADD KEY `store_ibfk_3` (`S_Name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `finance_booklist`
--
ALTER TABLE `finance_booklist`
  MODIFY `F_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `finance_booklist`
--
ALTER TABLE `finance_booklist`
  ADD CONSTRAINT `finance_booklist_ibfk_1` FOREIGN KEY (`M_ID`) REFERENCES `member` (`M_ID`),
  ADD CONSTRAINT `fk_Num_AC` FOREIGN KEY (`F_Num_AC`) REFERENCES `finance_book_num` (`F_Num_AC`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `finance_book_num`
--
ALTER TABLE `finance_book_num`
  ADD CONSTRAINT `fk_M_ID` FOREIGN KEY (`M_ID`) REFERENCES `member` (`M_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_2` FOREIGN KEY (`M_ID`) REFERENCES `login_member` (`M_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `member_ibfk_3` FOREIGN KEY (`S_Name`) REFERENCES `store` (`S_Name`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `store`
--
ALTER TABLE `store`
  ADD CONSTRAINT `fk_S_Name` FOREIGN KEY (`M_ID`) REFERENCES `member` (`M_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
