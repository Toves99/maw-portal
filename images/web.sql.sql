-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 07:38 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerdebit`
--

CREATE TABLE `customerdebit` (
  `id` int(11) NOT NULL,
  `transactionid` int(11) DEFAULT NULL,
  `serviceid` varchar(255) DEFAULT NULL,
  `accountnumber` varchar(255) DEFAULT NULL,
  `businessnumber` int(11) DEFAULT NULL,
  `debitamount` double DEFAULT NULL,
  `creditamount` double DEFAULT NULL,
  `phonenumber` varchar(255) DEFAULT NULL,
  `debitdatetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `creditdateTime` date DEFAULT NULL,
  `paymentstatus` int(11) DEFAULT 0,
  `checkoutid` varchar(255) NOT NULL,
  `merchantrequestid` varchar(255) NOT NULL,
  `userId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customerdebit`
--

INSERT INTO `customerdebit` (`id`, `transactionid`, `serviceid`, `accountnumber`, `businessnumber`, `debitamount`, `creditamount`, `phonenumber`, `debitdatetime`, `creditdateTime`, `paymentstatus`, `checkoutid`, `merchantrequestid`, `userId`) VALUES
(48, 2147483647, 'SE001', '66656', 174379, 5, 0, '254757561782', '2023-11-18 06:53:10', NULL, 0, 'ws_CO_18112023095614903757561782', '18153-109050830-1', 15),
(49, 2147483647, 'SE001', '66656', 174379, 5, 0, '254757561782', '2023-11-18 06:55:20', NULL, 0, 'ws_CO_18112023095717109757561782', '42478-43615956-1', 15),
(50, 2147483647, 'SE001', '66656', 174379, 4, 0, '254757561782', '2023-11-18 07:47:50', NULL, 0, 'ws_CO_18112023105054795757561782', '9040-8264026-1', 15),
(51, 2147483647, 'SE001', '66656', 174379, 5, 0, '254757337544', '2023-11-18 18:32:20', NULL, 0, 'ws_CO_18112023213522237757337544', '18137-110586227-1', 15),
(52, 2147483647, 'SE001', '66656', 174379, 5, 0, '254757561782', '2023-11-18 20:48:33', NULL, 0, 'ws_CO_18112023235027694757561782', '9470-39044687-1', 15),
(53, 2147483647, 'SE001', '66656', 174379, 5, 0, '254757561782', '2023-11-18 20:53:00', NULL, 0, 'ws_CO_18112023235602665757561782', '11044-15113682-1', 15),
(54, 2147483647, 'SE001', '66656', 174379, 7, 0, '254757561782', '2023-11-19 08:39:16', NULL, 0, 'ws_CO_19112023114219295757561782', '12621-10432070-1', 15),
(55, 2147483647, 'SE001', '66656', 174379, 6, 0, '254757561782', '2023-11-19 10:01:35', NULL, 0, 'ws_CO_19112023130439214757561782', '18154-111767362-1', 15),
(56, 2147483647, 'SE001', '66656', 174379, 6, 0, '254757561782', '2023-11-19 10:09:19', NULL, 0, 'ws_CO_19112023131222618757561782', '18148-111780696-1', 15),
(57, 2147483647, 'SE001', '66656', 174379, 6, 0, '254757561782', '2023-11-19 10:44:59', NULL, 0, 'ws_CO_19112023134803008757561782', '12621-10656192-1', 15),
(58, 2147483647, 'SE001', '66656', 174379, 6, 0, '254757561782', '2023-11-19 12:14:25', NULL, 0, 'ws_CO_19112023151620647757561782', '11041-16312713-1', 15),
(59, 2147483647, 'SE001', '66656', 174379, 6, 0, '254757561782', '2023-11-19 13:04:23', NULL, 0, 'ws_CO_19112023160619311757561782', '84114-41208324-1', 15),
(60, 2147483647, 'SE001', '66656', 174379, 6, 0, '254757561782', '2023-11-19 16:01:18', NULL, 0, 'ws_CO_19112023190422801757561782', '9465-40670001-1', 15),
(61, 2147483647, 'SE001', '66656', 174379, 5, 0, '254757561782', '2023-11-19 17:32:16', NULL, 0, 'ws_CO_19112023203520229757561782', '9039-11980431-1', 15),
(62, 2147483647, 'SE001', '66656', 174379, 1, 0, '254757561782', '2023-11-20 07:05:28', NULL, 0, 'ws_CO_20112023100723031757561782', '42466-48432641-1', 15),
(63, 2147483647, 'SE001', '66656', 174379, 7, 0, '254757561782', '2023-11-20 07:11:11', NULL, 0, 'ws_CO_20112023101306054757561782', '9030-13030987-1', 15),
(64, 2147483647, 'SE001', '66656', 174379, 5, 0, '254757337544', '2023-11-20 07:17:35', NULL, 0, 'ws_CO_20112023102038644757337544', '82184-116969775-1', 15),
(65, 2147483647, 'SE001', '66656', 174379, 40, 0, '254757337544', '2023-11-20 07:33:05', NULL, 0, 'ws_CO_20112023103500015757337544', '84132-42868646-1', 15),
(66, 2147483647, 'SE001', '66656', 174379, 7, 0, '254757561782', '2023-11-20 13:39:38', NULL, 0, 'ws_CO_20112023164133987757561782', '9033-13799367-1', 15);

-- --------------------------------------------------------

--
-- Table structure for table `debttb`
--

CREATE TABLE `debttb` (
  `Id` int(11) NOT NULL,
  `paymentAmount` varchar(255) DEFAULT NULL,
  `transaction_id` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `currentTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `debttb`
--

INSERT INTO `debttb` (`Id`, `paymentAmount`, `transaction_id`, `status`, `currentTime`) VALUES
(102, '20', 2147483647, 'paid', '2023-11-02 10:26:36'),
(103, '20', 2147483647, 'paid', '2023-11-02 10:29:57'),
(104, '20', 2147483647, 'paid', '2023-11-02 10:30:30'),
(105, '20', 2147483647, 'paid', '2023-11-02 10:39:17'),
(106, '20', 2147483647, 'paid', '2023-11-02 11:03:06'),
(107, '20', 2147483647, 'paid', '2023-11-02 11:03:42'),
(108, '20', 2147483647, 'paid', '2023-11-02 11:06:53');

-- --------------------------------------------------------

--
-- Table structure for table `excelcalculatortb`
--

CREATE TABLE `excelcalculatortb` (
  `producttId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `monthvalue` varchar(255) NOT NULL,
  `costperunit` varchar(255) NOT NULL,
  `totalCost` varchar(255) NOT NULL,
  `userId` int(11) NOT NULL,
  `productid` varchar(255) NOT NULL,
  `productCategory` varchar(255) NOT NULL,
  `expiryDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `uploadfile` text NOT NULL,
  `id` int(11) DEFAULT NULL,
  `companyid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `excelcalculatortb`
--

INSERT INTO `excelcalculatortb` (`producttId`, `productName`, `monthvalue`, `costperunit`, `totalCost`, `userId`, `productid`, `productCategory`, `expiryDate`, `uploadfile`, `id`, `companyid`) VALUES
(67, 'insurance', '12', '200', '7', 15, '97348063164', 'loan calculator', '2024-11-20 11:51:15', 'ilamcalculator.xls', 156, 902352),
(68, 'loan', '12', '200', '7', 15, '97998292842', 'loan calculator', '2024-11-20 15:48:49', 'ilamcalculator2.xls', 156, 0);

-- --------------------------------------------------------

--
-- Table structure for table `excelproductvariables`
--

CREATE TABLE `excelproductvariables` (
  `id` int(11) NOT NULL,
  `productid` int(11) DEFAULT NULL,
  `serviceid` varchar(255) DEFAULT NULL,
  `orderid` int(11) DEFAULT NULL,
  `variablename` varchar(255) DEFAULT NULL,
  `cellrefid` varchar(11) DEFAULT NULL,
  `variabletype` varchar(20) DEFAULT NULL,
  `variablesrequiresuseinput` int(1) DEFAULT 0,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `userid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `freetrial`
--

CREATE TABLE `freetrial` (
  `Id` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `calcId` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `messageid` int(11) NOT NULL,
  `messagehead` varchar(255) NOT NULL,
  `messagebody` varchar(1000) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `month`
--

CREATE TABLE `month` (
  `Id` int(11) NOT NULL,
  `count1` int(255) NOT NULL,
  `totalCost1` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `month`
--

INSERT INTO `month` (`Id`, `count1`, `totalCost1`) VALUES
(1, 1, 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `myorder`
--

CREATE TABLE `myorder` (
  `Id` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `calcId` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `selectedValue` varchar(255) DEFAULT NULL,
  `totalAmount` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `servicename` varchar(255) DEFAULT NULL,
  `service` varchar(255) DEFAULT NULL,
  `count` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `validityperiod` int(2) DEFAULT NULL,
  `expirydate` timestamp NOT NULL DEFAULT current_timestamp(),
  `paidamount` double NOT NULL,
  `paymentstatus` int(11) NOT NULL,
  `paymentmessage` varchar(255) NOT NULL,
  `transactiontime` timestamp NOT NULL DEFAULT current_timestamp(),
  `orderprice` double NOT NULL,
  `serviceid` varchar(10) NOT NULL,
  `subscriptionstatus` int(1) NOT NULL,
  `costperunit` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `servicename`, `service`, `count`, `userId`, `validityperiod`, `expirydate`, `paidamount`, `paymentstatus`, `paymentmessage`, `transactiontime`, `orderprice`, `serviceid`, `subscriptionstatus`, `costperunit`) VALUES
(156, 'Excel2codeAPI', 'Excel calculator', 7, 15, 12, '2024-11-20 11:39:48', 7, 1, 'paid', '2023-11-20 13:39:48', 7, 'SE001', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `paymentreceipt`
--

CREATE TABLE `paymentreceipt` (
  `id` int(11) NOT NULL,
  `phonenumber` varchar(255) DEFAULT NULL,
  `accountnumber` varchar(255) DEFAULT NULL,
  `receiptnumber` varchar(255) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `resultcode` int(11) DEFAULT NULL,
  `transactionid` varchar(255) NOT NULL,
  `businessnumber` varchar(255) NOT NULL,
  `checkoutid` varchar(255) NOT NULL,
  `merchantrequestid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paymenttb`
--

CREATE TABLE `paymenttb` (
  `CheckoutRequestID` varchar(255) DEFAULT NULL,
  `ResultCode` int(11) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `MpesaReceiptNumber` varchar(255) DEFAULT NULL,
  `PhoneNumber` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paymenttb`
--

INSERT INTO `paymenttb` (`CheckoutRequestID`, `ResultCode`, `amount`, `MpesaReceiptNumber`, `PhoneNumber`) VALUES
('ws_CO_02112023124929680715185271', 0, 30.00, 'RK217OZLNV', '254715185271'),
('ws_CO_02112023130935608715185271', 0, 20.00, 'RK287R842U', '254715185271'),
('ws_CO_02112023132825446715185271', 0, 20.00, 'RK267TDSKO', '254715185271'),
('ws_CO_02112023140602890715185271', 0, 20.00, 'RK267XNK1W', '254715185271'),
('', 0, 0.00, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productId` int(11) NOT NULL,
  `serviceName` varchar(255) DEFAULT NULL,
  `individualService` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `serviceName`, `individualService`) VALUES
(1, 'Excel2code', 'Excelform'),
(2, 'Insurance', 'Excelform');

-- --------------------------------------------------------

--
-- Table structure for table `producttb`
--

CREATE TABLE `producttb` (
  `Id` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `monthvalue` varchar(255) NOT NULL,
  `costperunit` varchar(255) NOT NULL,
  `totalCost` varchar(255) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `orderId` int(11) DEFAULT NULL,
  `productid` int(11) NOT NULL,
  `expiryDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `productCategory` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testtb`
--

CREATE TABLE `testtb` (
  `Id` int(11) NOT NULL,
  `inputVar` varchar(255) NOT NULL,
  `outputVar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testtb`
--

INSERT INTO `testtb` (`Id`, `inputVar`, `outputVar`) VALUES
(1, 'Age', '40'),
(2, 'rate', '3%'),
(3, 'cost', '1000,000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `companyname` varchar(255) NOT NULL,
  `companyid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `email`, `password`, `companyname`, `companyid`) VALUES
(15, 'Clinton', 'clintonekesa90@gmail.com', '$2y$10$.nrsPNmn0qek4DhhhOemWuhoeIoDxQlpMCLV8rMKDQuFSe1JxwXbO', 'iceleone', 902352);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerdebit`
--
ALTER TABLE `customerdebit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `debttb`
--
ALTER TABLE `debttb`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `excelcalculatortb`
--
ALTER TABLE `excelcalculatortb`
  ADD PRIMARY KEY (`producttId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `excelproductvariables`
--
ALTER TABLE `excelproductvariables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `freetrial`
--
ALTER TABLE `freetrial`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`messageid`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `month`
--
ALTER TABLE `month`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `myorder`
--
ALTER TABLE `myorder`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `paymentreceipt`
--
ALTER TABLE `paymentreceipt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `producttb`
--
ALTER TABLE `producttb`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `orderId` (`orderId`);

--
-- Indexes for table `testtb`
--
ALTER TABLE `testtb`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `unique_constraint_company` (`companyname`),
  ADD UNIQUE KEY `unique_username` (`username`),
  ADD UNIQUE KEY `unique_constraint_name` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customerdebit`
--
ALTER TABLE `customerdebit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `debttb`
--
ALTER TABLE `debttb`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `excelcalculatortb`
--
ALTER TABLE `excelcalculatortb`
  MODIFY `producttId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `excelproductvariables`
--
ALTER TABLE `excelproductvariables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `freetrial`
--
ALTER TABLE `freetrial`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `messageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `month`
--
ALTER TABLE `month`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `myorder`
--
ALTER TABLE `myorder`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `paymentreceipt`
--
ALTER TABLE `paymentreceipt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `producttb`
--
ALTER TABLE `producttb`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `testtb`
--
ALTER TABLE `testtb`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customerdebit`
--
ALTER TABLE `customerdebit`
  ADD CONSTRAINT `customerdebit_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`);

--
-- Constraints for table `excelcalculatortb`
--
ALTER TABLE `excelcalculatortb`
  ADD CONSTRAINT `excelcalculatortb_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`),
  ADD CONSTRAINT `excelcalculatortb_ibfk_2` FOREIGN KEY (`id`) REFERENCES `orders` (`Id`);

--
-- Constraints for table `excelproductvariables`
--
ALTER TABLE `excelproductvariables`
  ADD CONSTRAINT `excelproductvariables_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userId`),
  ADD CONSTRAINT `excelproductvariables_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `producttb` (`Id`);

--
-- Constraints for table `freetrial`
--
ALTER TABLE `freetrial`
  ADD CONSTRAINT `freetrial_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`);

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`);

--
-- Constraints for table `producttb`
--
ALTER TABLE `producttb`
  ADD CONSTRAINT `producttb_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`),
  ADD CONSTRAINT `producttb_ibfk_2` FOREIGN KEY (`orderId`) REFERENCES `orders` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
