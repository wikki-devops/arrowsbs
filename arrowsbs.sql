-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2023 at 11:47 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arrowsbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `faq` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL,
  `faq-content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `faq`, `ans`, `faq-content`) VALUES
(1, 'What is TallyPrime?', 'TallyPrime is a complete business management software for small and medium businesses. TallyPrime helps you manage accounting, inventory, banking, taxation, banking, payroll, and much more to get rid of complexities, and in turn, focus on business growth.', 'faq-content-1'),
(2, 'How to set up TallyPrime?', 'You can start using the TallyPrime in a matter of minutes. All you need to do is download the setup file, install TallyPrime, and activate the license. If you are a new user, create a company, and start recording your transactions.', 'faq-content-2'),
(3, 'Which is the latest version of Tally software?', 'The latest version and release of Tally software is TallyPrime. Take a look at new things in TallyPrime and how you can upgrade.', 'faq-content-3'),
(4, 'How to try a demo version of TallyPrime?', 'To help you experience the product, TallyPrime comes with a 7-day free trial. Get your 7-day free pack of TallyPrime today!!', 'faq-content-4'),
(5, 'How to upgrade TallyPrime from Tally.ERP 9?', 'If you are an existing user of Tally.ERP 9 and if your TSS is active, you can upgrade to TallyPrime for free. All you need to do is just download, install, and reactivate your license.', 'faq-content-5'),
(6, 'How to migrate data from Tally.ERP 9 to TallyPrime?', 'Load the company in TallyPrime and you will be prompted to migrate. Click on migrate and you are ready to use the company data in TallyPrime. Migrating data from Tally.ERP 9 to TallyPrime is that simple.', 'faq-content-6'),
(7, 'How to download & install TallyPrime?', 'Download the set-up file from the download centre and run the file to install TallyPrime. To know more, watch the short videos to get started with TallyPrime.', 'faq-content-7');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `product` text NOT NULL,
  `content` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `img`, `product`, `content`, `link`) VALUES
(1, 'tally-prime.jpg', 'TallyPrime', 'TallyPrime is a complete business management software for small and medium business. TallyPrime helps you manage accounting, inventory, banking, taxation, banking, payroll and much more to get rid of complexities, and in turn, focus on business growth.', 'products/tally-prime'),
(2, 'ERPNext.jpg', 'ERPNext', 'ERPNext is a free and open-source integrated Enterprise Resource Planning (ERP) software developed by Frappe Technologies Pvt. Ltd. ERPNext is a generic ERP software used by manufacturers, distributors and services companies. ', 'products/ERPnext'),
(3, 'mobile-apps.jpg', 'Mobile Apps', 'Business to Business (B2B) applications to streamline business operations, simplify complex business processes or fulfill specific industry needs. These are used by businesses to connect with other businesses, clients and employees as well as other stakeholders.', 'products/mobile-apps'),
(4, 'biz-analyst.jpg', 'Biz Analyst', 'Business Dashboard,<br>Automatic outstanding reminder,<br>Payment Collection,<br>WhatsApp, email, SMS sharing,<br>Works offline,<br>7 layers of data security', 'products/biz-analyst'),
(5, 'greythr.jpg', 'greytHR - HR payroll software', 'The greytHR Platform automates HR processes & empowers employee self-service. Get all-around productivity and engaged employees—the crucial ingredients for growth.', 'products/greytHR'),
(6, 'web.jpg?updatedAt=1691524753213', 'Website Development', 'Transform your ideas into a stunning online presence with our expert website development services. We create user-friendly, responsive sites tailored to your unique needs. Get started today!', 'products/websitedevelopment');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
