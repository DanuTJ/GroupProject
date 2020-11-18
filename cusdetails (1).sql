-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 03:46 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cusdetails`
--

-- --------------------------------------------------------

--
-- Table structure for table `cusorder`
--

CREATE TABLE `cusorder` (
  `id` int(11) NOT NULL,
  `phoneno` int(11) NOT NULL,
  `customername` varchar(50) NOT NULL,
  `orderdes` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `date` date NOT NULL,
  `adminid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `customername` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `phoneno` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `adminid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `customername`, `type`, `phoneno`, `email`, `adminid`) VALUES
(3, 'Hiruni Wasana Malaviarachchi', 'Regular', 774070057, 'mail2hiruni@gmail.com', 56),
(4, 'Thilini', 'Regular', 702340567, 'thilini@gmail.com', 56),
(5, 'Salman Gamage', 'Regular', 774070057, 'salman@gmail.com', 56);

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `Employee_ID` int(11) NOT NULL,
  `Employee_Name` text NOT NULL,
  `NIC` varchar(50) NOT NULL,
  `Address` text NOT NULL,
  `Gender` text NOT NULL,
  `Telephone_No` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `adminid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`Employee_ID`, `Employee_Name`, `NIC`, `Address`, `Gender`, `Telephone_No`, `Email`, `adminid`) VALUES
(5, 'Hiruni', '977660106V', 'Galle', 'female', 774070057, 'mail2hiruni@gmail.com', 56);

-- --------------------------------------------------------

--
-- Table structure for table `finance`
--

CREATE TABLE `finance` (
  `id` int(11) NOT NULL,
  `type` text NOT NULL,
  `utilitydes` text NOT NULL,
  `date` date NOT NULL,
  `amount` int(11) NOT NULL,
  `adminid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finance`
--

INSERT INTO `finance` (`id`, `type`, `utilitydes`, `date`, `amount`, `adminid`) VALUES
(5, 'Water', 'water bill paid early', '2020-11-18', 12000, 56);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `itemname` text NOT NULL,
  `category` text NOT NULL,
  `manufacturer` text NOT NULL,
  `ides` text NOT NULL,
  `unit` text NOT NULL,
  `price` int(11) NOT NULL,
  `iquantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `invoice` text NOT NULL,
  `adminid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `itemname`, `category`, `manufacturer`, `ides`, `unit`, `price`, `iquantity`, `total`, `invoice`, `adminid`) VALUES
(3, 'Asprin', 'Medicine', 'lanka Manufacturers', 'used for cold', '', 2, 300, 600, '4', 56);

-- --------------------------------------------------------

--
-- Table structure for table `sorders`
--

CREATE TABLE `sorders` (
  `id` int(11) NOT NULL,
  `orderdate` date NOT NULL,
  `suppliername` varchar(50) NOT NULL,
  `numofunits` int(11) NOT NULL,
  `arrivingdate` date NOT NULL,
  `totalprice` int(11) NOT NULL,
  `adminid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sorders`
--

INSERT INTO `sorders` (`id`, `orderdate`, `suppliername`, `numofunits`, `arrivingdate`, `totalprice`, `adminid`) VALUES
(2, '2020-11-18', 'Tharindi Jayalath', 8, '2020-11-30', 300, 56);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `supplier` text NOT NULL,
  `manufdate` int(11) NOT NULL,
  `expdate` date NOT NULL,
  `receivedate` date NOT NULL,
  `adminid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `quantity`, `price`, `supplier`, `manufdate`, `expdate`, `receivedate`, `adminid`) VALUES
(5, 300, 3000, 'Tharindi Serasinghe', 2020, '2020-11-18', '2020-11-03', 56);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `suppliername` varchar(50) NOT NULL,
  `companyname` varchar(50) NOT NULL,
  `companyaddress` varchar(50) NOT NULL,
  `phoneno` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `adminid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `suppliername`, `companyname`, `companyaddress`, `phoneno`, `email`, `adminid`) VALUES
(1, 'Tharindi ', 'lanka pharmaceuticals', 'Colombo', 712340567, 'lanka@gmail.com', 56),
(2, 'Tharindi Jayalath', 'lanka pharmaceuticals', 'Rajagiriya', 702340567, 'thari@gmail.com', 56);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(1) NOT NULL,
  `contact` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `name`, `email`, `password`, `usertype`, `contact`) VALUES
(25, 'admin', 'admin@admin.com', 'admin123', 'a', 774070057),
(29, 'Sachini', 'mail2sachie@gmail.com', 'ca445ab9f713bc3fb136e505efa867b3075581b2', 'a', 774070057),
(30, 'Tharndi', 'thari@gmail.com', 'c7d66a9dc722178506918383a2c7da36079239ae', 's', 771231234),
(31, 'Hiruni Wasana', 'mail2hiruni@gmail.com', 'c7d66a9dc722178506918383a2c7da36079239ae', 's', 771231234),
(55, 'Malaviarachchi', 'mal@gmail.com', 'hiruni@123W', 's', 772345670),
(56, 'Thilini Kulathunge', 'thilini@gmail.com', '94a0cb1d819d49b2d4aa5db160224dc7d414a241', 'a', 773456799),
(57, 'sach', 'sach@gmail.com', 'c7d66a9dc722178506918383a2c7da36079239ae', 's', 775612347),
(60, 'Salman', 'salman@gmail.com', 'c7d66a9dc722178506918383a2c7da36079239ae', 'c', 712308900);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cusorder`
--
ALTER TABLE `cusorder`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adminid` (`adminid`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adminid` (`adminid`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`Employee_ID`),
  ADD KEY `foreign` (`adminid`);

--
-- Indexes for table `finance`
--
ALTER TABLE `finance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign` (`adminid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign` (`adminid`);

--
-- Indexes for table `sorders`
--
ALTER TABLE `sorders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign` (`adminid`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign` (`adminid`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign` (`adminid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cusorder`
--
ALTER TABLE `cusorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `Employee_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `finance`
--
ALTER TABLE `finance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sorders`
--
ALTER TABLE `sorders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cusorder`
--
ALTER TABLE `cusorder`
  ADD CONSTRAINT `cusorder_ibfk_1` FOREIGN KEY (`adminid`) REFERENCES `users` (`userID`);

--
-- Constraints for table `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `fk_` FOREIGN KEY (`adminid`) REFERENCES `users` (`userID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `emp`
--
ALTER TABLE `emp`
  ADD CONSTRAINT `emp_ibfk_1` FOREIGN KEY (`adminid`) REFERENCES `users` (`userID`);

--
-- Constraints for table `finance`
--
ALTER TABLE `finance`
  ADD CONSTRAINT `finance_ibfk_1` FOREIGN KEY (`adminid`) REFERENCES `users` (`userID`);

--
-- Constraints for table `sorders`
--
ALTER TABLE `sorders`
  ADD CONSTRAINT `sorders_ibfk_1` FOREIGN KEY (`adminid`) REFERENCES `users` (`userID`);

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`adminid`) REFERENCES `users` (`userID`);

--
-- Constraints for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD CONSTRAINT `suppliers_ibfk_1` FOREIGN KEY (`adminid`) REFERENCES `users` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
