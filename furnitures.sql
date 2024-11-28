-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2024 at 02:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furnitures`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'mina', 'mina111@gmail.com', 'mina111'),
(2, 'umi', 'umi123@gmail.com', 'uni123'),
(3, 'tina', 'tina123@gmail.com', 'passwer234'),
(4, 'meena', 'meena123@gmail.com', 'meena123');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(50) NOT NULL,
  `categories` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `categories`) VALUES
(1, 'bedroom'),
(2, 'living'),
(3, 'dining'),
(4, 'office');

-- --------------------------------------------------------

--
-- Table structure for table `orders_pending`
--

CREATE TABLE `orders_pending` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(255) NOT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders_pending`
--

INSERT INTO `orders_pending` (`order_id`, `user_id`, `invoice_number`, `product_id`, `quantity`, `order_status`) VALUES
(1, 2, 710125970, 2, 1, 'pending'),
(2, 2, 190251084, 6, 1, 'pending'),
(3, 2, 433008436, 7, 2, 'pending'),
(4, 2, 572224118, 3, 1, 'pending'),
(5, 2, 653933220, 4, 1, 'pending'),
(13, 2, 1192481218, 3, 1, 'pending'),
(14, 2, 65620701, 3, 2, 'pending'),
(15, 2, 1757701917, 3, 2, 'pending'),
(16, 2, 110491002, 3, 2, 'pending'),
(17, 2, 1774584579, 3, 1, 'pending'),
(18, 2, 946663722, 3, 2, 'pending'),
(19, 2, 1288043107, 7, 1, 'pending'),
(20, 2, 1862937707, 1, 1, 'pending'),
(21, 2, 834874774, 3, 1, 'pending'),
(22, 2, 2100851563, 1, 1, 'pending'),
(23, 2, 743689045, 3, 1, 'pending'),
(24, 2, 1991155898, 3, 2, 'pending'),
(25, 2, 1306025644, 8, 1, 'pending'),
(26, 2, 237993997, 1, 1, 'pending'),
(27, 2, 1238962640, 3, 1, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `producttable`
--

CREATE TABLE `producttable` (
  `product_id` int(60) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `product_categories` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `producttable`
--

INSERT INTO `producttable` (`product_id`, `product_title`, `product_description`, `product_keywords`, `product_categories`, `product_image`, `product_price`, `date`) VALUES
(1, 'CO-SPENCER BED', 'Material :- PB with foil finished. Size :- 190 X 220.8 X 90 CM', 'bed, co-spencer bed', 'Bedroom', 'bed1.jpeg', '64900', '2024-02-20 04:42:50'),
(2, 'CO-SPENCER WARDROBE', 'Material :- PB with foil finished.  Size :- 120 X 57 X 190 CM', 'wardrobe, co-spencer wardrobe', 'Bedroom', '0028077_co-spencer-wardrobe-3dr-tbntgy_360.jpeg', '75900', '2024-02-20 04:42:56'),
(3, 'L-SHAPE SOFA', 'Material :- Fabric upholstery Plastic leg.  Size :- 185 x 128 x 78 CM', 'sofa, L-shape sofa', 'Living', '0030920_luther-fabric-l-shape-sofa-gy_360.jpeg', '98900', '2024-02-20 04:43:02'),
(4, 'COFFEE TABLE', 'Material :- MDF with paper foil finish,à¸ºSteel leg.  Size :- 90 x 90 x 45 CM', 'coffee table, table', 'Living', '0032022_skibby-coffee-table-90-cm-na_360.jpeg', '17900', '2024-02-20 04:43:06'),
(6, 'MICHELL WOOD DINING', 'Material :- MDF with veneer.  Size :- 110.0 x 70.0 x 73.5', 'dining table, dining, dining set', 'Dining', '0031565_michell-wood-dining-set1t4c-wngy.jpeg', '89000', '2024-02-23 19:25:49'),
(7, ' WOOD DINING SET', 'Material :- Russian pine wood  Size :- 118 x 75 x 73 CM', 'dining, dining set, dining table', 'Dining', '0030914_liorap-wood-dining-set-1t4c-nt.jpeg', '84900', '2024-02-23 19:27:01'),
(8, 'OFFICE CHAIR', 'Material :-Nylon Base. PP Arm  Size :- 59 X 61 X 92.5-102.5 CM', 'office, office chair, chair', 'Office', '0018255_wollard-office-chair-mb-wtgy_360.jpeg', '28000', '2024-02-23 19:28:59'),
(10, 'dexter chair', '57*58.5*90cm,nylon base', 'office, office chair, chair', 'Office', '0031939_dexter-office-chair-bk_360.jpeg', '19900', '2024-06-03 17:10:15'),
(12, 'DRESSING TABLE', '60*40*160cm wood', 'dressing table, table, bedroom', 'Bedroom', '0018504_nb-plus-dressing-tablestool-bkbn_360.jpeg', '29900', '2024-06-03 17:25:38');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `user_id` int(60) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `user_phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`user_id`, `username`, `user_email`, `user_password`, `user_image`, `user_ip`, `user_address`, `user_phone`) VALUES
(2, 'riya ', 'riya123@gmail.com', '$2y$10$SuiyQ8LC7oSgXUfvYiJ0EeBA6E43PdMj6.KbVi5BXjzkkgOvge4RS', 'mushhhh.jpg', '::1', 'pokhara', '9825362543'),
(3, 'priya ', 'priya123@gmail.com', '$2y$10$VL4mfG4f1TOUqurpgRYj8uD28zLLYUOMQXrvfz7pQ3jce5EiGHrI6', 'download.jpg', '::1', 'Kamaladi', '9852364124'),
(4, 'umi ', 'umi123@gmail.com', 'passwer123', 'downloadd.png', '::1', 'dhalko', '9852364175'),
(5, 'yaami ', 'yaami234@gmailcom', '$2y$10$V.mDT7BJz2Oqb7J2Jcn3f.Qlb5WSlNx9xPgugH64Gc/7KBICKrjy6', '4K-Chamomile-Flowers-Bloom-Wallpaper-3840x2160.jpg', '::1', 'hetauda', '9852364528'),
(6, 'hima ', 'hima@gmail.com', '$2y$10$J4gp2WIX4mqcSaaJj.rKku9FIRSF1RNpNLWb1zXsVqPzHNjbhJ..K', 'mushhhh.jpg', '::1', 'dallu', '9852364125'),
(13, 'umani ', 'umani', 'oioip', 'nvhjgh.jpg', '::1', 'Jhapa', '9852364215');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount_due` int(255) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `total_products` int(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`order_id`, `user_id`, `amount_due`, `invoice_number`, `total_products`, `order_date`, `order_status`) VALUES
(1, 2, 75900, 710125970, 1, '2024-02-24 00:23:32', 'pending'),
(3, 2, 299600, 433008436, 2, '2024-02-24 00:27:10', 'Complete'),
(13, 2, 163800, 1192481218, 2, '2024-02-21 15:31:03', 'Complete'),
(15, 2, 327600, 1757701917, 2, '2024-04-09 23:19:06', 'Complete'),
(24, 2, 327600, 1991155898, 2, '2024-06-03 15:30:24', 'Complete'),
(25, 2, 199800, 1306025644, 4, '2024-06-03 16:52:09', 'pending'),
(26, 2, 64900, 237993997, 1, '2024-06-03 16:52:39', 'pending'),
(27, 2, 98900, 1238962640, 1, '2024-06-03 16:52:49', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `user_payments`
--

CREATE TABLE `user_payments` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `invoice_number` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_payments`
--

INSERT INTO `user_payments` (`payment_id`, `order_id`, `invoice_number`, `amount`, `payment_mode`, `date`) VALUES
(1, 3, 433008436, 299600, 'Cash on delivery', '2024-02-24 00:27:10'),
(2, 2, 190251084, 89000, 'Cash on delivery', '2024-02-26 15:55:03'),
(3, 15, 1757701917, 327600, 'Cash on delivery', '2024-06-01 23:19:06'),
(4, 14, 65620701, 327600, 'Cash on delivery', '2024-06-01 23:26:58'),
(5, 16, 110491002, 327600, 'Cash on delivery', '2024-06-01 23:29:35'),
(6, 17, 1774584579, 98900, 'Khalti', '2024-06-03 09:55:07'),
(7, 18, 946663722, 327600, 'Khalti', '2024-06-03 09:55:36'),
(8, 19, 1288043107, 84900, 'Khalti', '2024-06-03 10:11:24'),
(9, 22, 2100851563, 64900, 'Khalti', '2024-06-03 11:11:22'),
(10, 24, 1991155898, 327600, 'Khalti', '2024-06-03 15:30:24'),
(11, 13, 1192481218, 163800, 'Cash on delivery', '2024-06-03 15:31:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `orders_pending`
--
ALTER TABLE `orders_pending`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `producttable`
--
ALTER TABLE `producttable`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user_payments`
--
ALTER TABLE `user_payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders_pending`
--
ALTER TABLE `orders_pending`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `producttable`
--
ALTER TABLE `producttable`
  MODIFY `product_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `user_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user_payments`
--
ALTER TABLE `user_payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
