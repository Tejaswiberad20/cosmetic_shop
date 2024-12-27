-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2024 at 04:31 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cosmeticproductdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `mobno` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `username`, `mobno`, `message`) VALUES
(7, 'kanchan', '7865432109', 'i like your product');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `like_yes_no` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `username`, `email`, `like_yes_no`, `message`) VALUES
(7, 'kanchan', 'kanchanberad2000@gmail.com', 'yes', 'i like your product');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `creditcardno` text NOT NULL,
  `card` text NOT NULL,
  `cvv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `username`, `creditcardno`, `card`, `cvv`) VALUES
(8, 'kanchan', '0987654321', 'Credit Card', '121213467'),
(9, 'kanchan', '', 'Credit Card', ''),
(10, '', '', 'Credit Card', ''),
(11, 'kanchan', '765465', 'Credit Card', '898976'),
(12, 'Tejaswi', '0987654321', 'Credit Card', '121333334'),
(13, 'Tejaswi', '3333333333', 'Credit Card', '8990'),
(14, 'Tejaswi', '', 'Credit Card', ''),
(15, 'Tejaswi', '', 'Credit Card', ''),
(16, 'Tejaswi', '', 'Credit Card', ''),
(17, 'Tejaswi', '', 'Credit Card', ''),
(18, 'Tejaswi', '', 'Credit Card', ''),
(19, 'Tejaswi', '', 'Credit Card', ''),
(20, 'Tejaswi', '3333333333', 'Credit Card', '344444444'),
(21, 'Tejaswi', '0987374672', 'Credit Card', '094782679112'),
(22, 'Tejaswi', '0987654321', 'Credit Card', '333333333323'),
(23, 'Tejaswi', '', 'Credit Card', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `productname` text NOT NULL,
  `price` text NOT NULL,
  `productimg` text NOT NULL,
  `qauntity` text NOT NULL,
  `productdesc` text NOT NULL,
  `productcategory` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productname`, `price`, `productimg`, `qauntity`, `productdesc`, `productcategory`) VALUES
(17, 'Lakme Sun Expert Tinted Sunscreen', '300', 'face1.webp', '5', ' MRP inclusive of all taxes on all products Net Quantity: 100 g ', 'Face'),
(18, 'Mamaearth Multani Mitti Face wash', '299', 'face2.webp', '5', ' Multani Mitti Face Wash with Bulgarian Rose For Oil Control & Acne - 100 ml ', 'Face'),
(19, 'Mars High Coverage Liquid Foundation', '149', 'face3.webp', '5', ' High Coverage Formula Foundation - 40ml - 06 ', 'Face'),
(20, 'MAKE UP FOR HD Skin All-In-One Face Palette', '159', 'face4.webp', '5', ' HD Skin All-In-One Face Palette ', 'Face'),
(21, 'High colour payoff Vegan & cruelty-free', '229', 'face5.webp', '5', ' High colour payoff, Lightweight, Easy to blend, Long-lasting, Enriched with shea butter, Travel-friendly, Vegan & cruelty-free ', 'Face'),
(22, 'Bollywood Filter Primer', '149', 'face6.webp', '5', ' RENEE Bollywood Filter Face Primer 15gm | for a Flawless & Smooth Skin | Blurs Fine Lines ', 'Face'),
(23, 'Lakme Illuminating Loose Powder', '399', 'face7.webp', '5', ' Face It Loose Finishing Powder with Niacinamide ', 'Face'),
(24, 'liquid lipsticks Shades Set 6', '99', 'lip1.webp', '5', ' NANCY AJRAM X HANDAIYAN 6Pcs Matte Liquid Lipstick Makeup Set ', 'Lips'),
(25, 'Elle 18 Color Pops matte lipstick', '149', 'lip2.webp', '5', ' The brand for every teenage girl who wants to have fun and look good at the same time is here ', 'Lips'),
(26, 'Faces Canada Weightless Matte Finish Lipstick', '189', 'lip6.jpg', '5', ' The FACES CANADA Weightless Matte Finish Lipstick is formulated with rich colour and ultra lightweight pigments. ', 'Lips'),
(27, 'Swiss Beauty Non-Transfer Lipstick', '199', 'b2.webp', '5', ' Matte Finish, Lightweight, Smudge-Proof, Rich Colour Payoff, Non-Drying ', 'Lips'),
(29, 'BLUE HEAVEN Kiss & Blush Lip & Cheek Tint', '399', 'lips.jpeg', '5', ' Kiss & Blush Lip & Cheek Tint with Avocado Oil 8.5 g - Roasted Berry ', 'Lips'),
(33, 'RENEE Matte Lock Lipstick', '350', 'lipss.webp', '1', ' Rich color with matte finish & SPF 15 Enriched  ', 'Lips'),
(35, 'Swiss Beauty Professional Uv ', '99', 'nail1.webp', '2', ' Swiss Beauty Professional UV Gel Nail Polish promises 21 days of high shine nails ', 'Nails'),
(36, '	 Nykaa Creme Nail Enamel', '199', 'nails2.webp', '2', ' Are you a self-confessed sweater girl who loves those magical cold ', 'Nails'),
(38, '	 Swiss Beauty Stunning Nail Lacquer', '59', 'n3.webp', '2', ' Swiss Beauty Nail Polish has extraordinary shine, ', 'Nails'),
(39, '	 Faces Canada Ultime Pro Splash ', '99', 'n4.webp', '4', ' The all new FACES CANADA Ultime Pro Splash Luxe nail enamel ', 'Nails'),
(40, 'Elle 18 Nail Pops Nail Colour, 5 ml Shade 46', '299', 'n5.webp', '3', ' Now get One Stroke Bold Color with the new Nail Pops.  ', 'Nails'),
(41, '	 Gifty Nail Polish Set Women ', '399', 'n6.webp', '5', ' A Superior No Toxin French Nail Polish Formula That Gives Your Nail ', 'Nails'),
(42, 'Dot & Key Watermelon Cooling Hydrogel', '199', 'e1.jpg', '4', ' Dot & Key Watermelon Cooling Hydrogel ', 'Eyes'),
(43, '	 INSIGHT COSMETICS NO SMUDGE EYELINER', '99', 'e2.webp', '3', ' Introducing our revolutionary Insight Cosmetics No Smudge Eyeliner, where precision meets perfections. ', 'Eyes'),
(44, '	 Rayne Smudge proof Liquid Shimmery Gel Eyeliners Combo S', '299', 'e3.webp', '5', ' Smooth brush which gives you a perfect stroke Smudge-proof, water-proof liquid eyeline ', 'Eyes'),
(45, ' Himalaya Herbals Kajal', '99', 'e4.webp', '5', ' Enhance your eyes with Himalaya Herbals Kajal in Black, a 2.7 gm stick designed for stunning definition.  ', 'Eyes'),
(46, 'MY TYA Color Icon 18 Colors ', '359', 'e5.webp', '2', ' Packed With A Selection Of Long Lasting And High Pigmented Mattes And Striking Shimmers ', 'Eyes'),
(47, '	 NYKAA Eyes On Me! 10-in-1 Eyeshadow Palette ', '199', 'e6.webp', '5', ' Discover the magic of endless eye makeup looks with the Eyes On Me 10-in-1 Eyeshadow Palette ', 'Eyes'),
(48, 'NailPaint Remover', '166', 'lakme.jpg', '12', ' NailPaint Remover ', 'Nails');

-- --------------------------------------------------------

--
-- Table structure for table `productorder`
--

CREATE TABLE `productorder` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `mobno` text NOT NULL,
  `address` text NOT NULL,
  `productname` text NOT NULL,
  `price` text NOT NULL,
  `totprice` text NOT NULL,
  `qauntity` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productorder`
--

INSERT INTO `productorder` (`id`, `username`, `mobno`, `address`, `productname`, `price`, `totprice`, `qauntity`) VALUES
(1, 'Tejaswi', '976630721', 'Pimpalgoav malvi', 'BLUE HEAVEN Kiss & Blush Lip & Cheek Tint', '', '1197', '3'),
(2, 'Tejaswi', '976630721', 'Pimpalgoav malvi', 'liquid lipsticks Shades Set 6', '99', '297', '3'),
(3, 'Tejaswi', '976630721', 'Pimpalgoav malvi', 'Lakme Illuminating Loose Powder', '399', '1197', '3'),
(4, 'Tejaswi', '976630721', 'Pimpalgoav malvi', ' Himalaya Herbals Kajal', '99', '198', '2'),
(5, 'Tejaswi', '9766307112', 'Pimpalgoav malvi', 'Dot & Key Watermelon Cooling Hydrogel', '199', '398', '2'),
(6, 'Tejaswi', '9766307112', 'Pimpalgoav malvi', '	 NYKAA Eyes On Me! 10-in-1 Eyeshadow Palette ', '199', '398', '2'),
(7, 'Tejaswi', '9766307112', 'Pimpalgoav malvi', 'Lakme Illuminating Loose Powder', '399', '', ''),
(8, 'Tejaswi', '9766307112', 'Pimpalgoav malvi', 'Elle 18 Color Pops matte lipstick', '149', '745', '5');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `mobno` text NOT NULL,
  `address` text NOT NULL,
  `pincode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`, `mobno`, `address`, `pincode`) VALUES
(8, 'Priya', 'priya@gamil.com', 'priya12', '90876532', 'nagar', '414601'),
(13, 'kanchan', 'kanchanberad2000@gmail.com', 'k1234', '7865432109', 'pune', '414601'),
(14, 'Tejaswi', 'tejaswiberad2004@gmail.com', 't1234', '9766307112', 'Pimpalgoav malvi', '414601');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productorder`
--
ALTER TABLE `productorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `productorder`
--
ALTER TABLE `productorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
