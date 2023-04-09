-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2023 at 07:03 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eco_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `product_id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` varchar(255) NOT NULL,
  `Qt` varchar(100) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`product_id`, `user_id`, `image`, `title`, `price`, `Qt`, `total_price`, `username`) VALUES
(160, '1', 'cd0b2ce8b28b85887a6d7952e4e96a00.jpeg', 'sapatos', '5816', '0', '0', 'lene'),
(161, '1', '120826480_818321115610408_2439740593238944927_n.jpg', 'hahhaa', '3132', '0', '0', 'lene'),
(162, '1', '1 - Copy.jpeg', 'sadas', '545', '0', '0', 'lene');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` varchar(255) NOT NULL,
  `Qt` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `user_id`, `username`, `image`, `title`, `price`, `Qt`, `total_price`) VALUES
(32, '175', '1', 'lene', 'R (1).jpeg', 'Eco chair', '2000', '', '0'),
(33, '175', '1', 'lene', 'R (1).jpeg', 'Eco chair', '2000', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_title`, `image`) VALUES
(1, 'Eco Friendly Cleansing Products', 'cleansing.jpg'),
(2, 'Eco Friendly Shoes', 'adidas-ultraboost-ocean-plastic_resize_md.jpg'),
(3, 'Eco Friendly Beauty Products', 'shampoo.jpeg'),
(4, 'Eco Friendly Packaging Products', 'packaging.jpeg'),
(5, 'Eco Friendly Bag', 'bag.jpg'),
(6, 'Eco Friendly Basket', 'basket.jpeg'),
(7, 'Eco Friendly Bottles', 'bottles.jpg'),
(8, 'Handmade Products', 'handmade.jpeg'),
(9, 'Furniture', 'furniture.jpeg'),
(10, 'backgroud', 'background.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `c_order`
--

CREATE TABLE `c_order` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `total_price` int(255) NOT NULL,
  `Qt` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `D_ordered` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `D_deliver` date NOT NULL,
  `P_method` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`) VALUES
(63, '589196997ee9d7c9378a3d5d5cb891b9.jpeg'),
(64, '983130823c3333a49c38ef413d288635.jpeg'),
(65, 'cd0b2ce8b28b85887a6d7952e4e96a00.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `my_order`
--

CREATE TABLE `my_order` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `Qt` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `d_ordered` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `d_delivered` date NOT NULL DEFAULT current_timestamp(),
  `p_method` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` int(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image_1` text NOT NULL,
  `image_2` text NOT NULL,
  `image_3` text NOT NULL,
  `imgs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `user_id`, `title`, `price`, `category`, `description`, `status`, `date`, `image_1`, `image_2`, `image_3`, `imgs`) VALUES
(171, '', 'Eco Tote bag', 1500, '5', 'Good quality.', 'true', '2023-03-29 16:00:15', '177545314_max.jpg', '177545298_max.jpg', '177545388_max.jpg', ''),
(173, '', 'Grocery tote bag', 500, '5', 'Good for those who love to shopping or groceries but dont want \r\nto use plastics, this tote bag is for you.\r\n\r\nsize : 35x30x14cm  \r\nAccept all customized size for different style of jute bag\r\n\r\nWeight : 0.2 kg jute hand bags \r\n\r\n\r\n', 'true', '2023-03-29 16:14:46', '4-4.jpg', '2-6.jpg', '6-3.jpg', ''),
(174, '', 'solid wood chair', 2000, '9', 'nice kaayo lingkuran kay naay pukot. presko kaayo ni sya nga bangko maong palit na ayaw na pag dugay dugay aron maka pasar nami sa capstone heheeh.', 'true', '2023-03-29 16:21:14', 'eco-furniture-waste-notwaste-offer-an-environmentally-friendly-alternative-4-566.jpeg', 'd13f4f810266c7af67092de7c452dc1a.jpg', 'e0765d35c748b9f61be5f07ff781c4f8.jpg', ''),
(175, '', 'Eco chair', 2000, '9', 'wala ko kahibaw unsa ning bangkoa, pero nice man sya comportable sya tan.awon, murag dili dayon dali ma bungkag bisag tambok pa ang mag lingkod ani, kayanon....ge kaya man gani nimo sya kana paba bleee.', 'true', '2023-03-29 16:28:56', 'R (1).jpeg', 'OIP.jpeg', 'R.jpeg', ''),
(176, '', 'square basket', 50, '6', 'cute square basket para sa managbo og isda nya walay ikabayad sakto ni kaayo...pwede ni sudlag bulinaw nya isabit sa babaw kay kabuton sa iring...grabe ba ', 'true', '2023-03-29 16:33:19', 'R (2).jpeg', 'R (3).jpeg', 'eco-friendly-rectangle-baskets-7.jpg', ''),
(177, '', 'Wicker baskets', 1000, '6', 'para ni sa mga hilig manago og sud.an bisan dili gyud pangayuan, pwede sad ni sya butangan og mga lamas or bisan unsay imong gusto e butang.', 'true', '2023-03-29 16:38:32', '2601c9b347983bf9f9133d876b284ed6.jpg', 'OIP (1).jpeg', 'OIP (2).jpeg', ''),
(178, '', 'Packaging(karton)', 25, '4', 'karon tag 25 isa good ni sya sudlan og mga sinina kong dili ka afford palit og parador, pwede pud ni sya e banig depende unsay gsuto nimo bahala ka.\r\n\r\nSize : 45cm', 'true', '2023-03-30 00:36:08', '114028432_m.jpg', 'OIP (3).jpeg', 'package.jpeg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(10012) NOT NULL,
  `password` varchar(12) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'user',
  `counterlock` int(3) NOT NULL,
  `status` int(10) NOT NULL,
  `d_c` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `d_u` varchar(100) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `fname`, `lname`, `email`, `username`, `password`, `phone`, `address`, `role`, `counterlock`, `status`, `d_c`, `d_u`, `image`) VALUES
(1, 'lene', 'lene', 'lene@gmail.com', 'lene', '123', '', '', '', 0, 0, '2023-03-30 06:18:10', '', ''),
(11, 'Wylene ', 'Sy', 'Sy@gmail.com', 'lene', '123', '0932645656', 'llc', 'user', 5, 0, '2023-03-30 12:15:23', '', ''),
(12, 'dre', 'iconcut', 'cute@gmail.com', 'cute', 'drTS5L4OYe3H', '123456789', 'samal', 'user', 2, 0, '2023-03-30 09:29:02', '', ''),
(13, 'Wylene', 'buang', 'buangon@gmail.com', 'buang', 'drTS5L4OYe3H', '09565641656', 'lapulapu city', 'user', 2, 0, '2023-03-30 12:15:52', '', ''),
(14, 'boding', 'ding', 'boding@gmail.com', 'ding', 'drTS5L4OYe3H', '32656565656', 'llc', 'user', 4, 0, '2023-03-30 16:30:53', '', ''),
(15, 'haha', 'haha', 'haha@gmail.com', 'haha', 'drTS5L4OYe3H', '36565656', 'llc', 'user', 1, 0, '2023-04-01 06:10:44', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_order`
--
ALTER TABLE `c_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_order`
--
ALTER TABLE `my_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `c_order`
--
ALTER TABLE `c_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `my_order`
--
ALTER TABLE `my_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
