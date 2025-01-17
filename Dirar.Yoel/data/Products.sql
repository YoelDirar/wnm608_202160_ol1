-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 11, 2021 at 10:42 PM
-- Server version: 5.6.51-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wnm608Dirar_Yoel`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(64) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `botanical_name` varchar(64) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `url`, `price`, `category`, `botanical_name`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`, `quantity`) VALUES
(2, 'Red Prayer Plant ', 'https://yoeldirar.com/aau/WnM608/Dirar.Yoel/admin/users.php?id=2', 55.00, 'pet friendly   ', 'Maranta Leuconeura ', '2021-07-31 13:46:53', '2021-08-11 21:54:05', 'The Maranta Red Prayer Plant has soft dark green leaves with feathered, painterly-like centers of light green and red veins. The colorful foliage and slow growth make this a perfect plant for window sills, mantles, or shelves that need a splash of color.', 'img/red_prayer_plant_thumbnail.jpg', 'red_prayer_plant.png', 10),
(4, 'Date Palm ', 'https://yoeldirar.com/aau/WnM608/Dirar.Yoel/admin/users.php?id=4', 149.00, 'indoor', 'Phoenix robellini ', '2021-07-31 13:58:27', '2021-07-31 13:58:27', 'Date Palm, also known as the Robellini Palm, is an easy-going and adaptable Palm that features dramatic fanning fronds. This Palm is tolerant to many conditions, making it a great option for both indoors and on patios during warm months.', 'img/date_palm_thumbnail.jpeg', 'img/date_palm.jpeg', 10),
(5, 'Money Tree', 'https://yoeldirar.com/aau/WnM608/Dirar.Yoel/product_list.php\r\n\r\n', 169.00, 'low maintenance ', 'Pachira aquatica', '2021-07-31 14:01:08', '2021-08-11 10:45:50', 'Popular for its use in Feng Shui, the Money Tree is a pet-friendly and air-purifying plant with large star-shaped leaves and a braided trunk to give your home a tropical feel.', 'img/money_tree_thumbnail.jpeg', 'img/money_tree_thumbnail.jpeg', 10),
(6, 'zz plant', 'https://yoeldirar.com/aau/WnM608/Dirar.Yoel/admin/users.php?id=6', 69.00, 'indoor', 'Zamioculcas zamiifolia\r\n', '2021-07-31 14:17:35', '2021-07-31 14:17:35', 'Nearly indestructible, the ZZ Plant is ideal for beginner plant owners and those who don’t have the time for an extensive plant care routine. The ZZ is adaptable to many indoor environments, and is tolerant of low light and less than frequent waterings.', 'img/zz_plant_thumbnail.jpeg', 'img/zz plant.jpeg', 10),
(7, 'Variegated Scheffleara Arboricola ', 'https://yoeldirar.com/aau/WnM608/Dirar.Yoel/admin/users.php?id=7', 69.00, 'indoor', 'Heptapleurum arboricola ‘variegata’', '2021-07-31 14:20:06', '2021-07-31 14:20:06', 'An undemanding houseplant, the Variegated Schefflera Arboricola is a graceful tabletop version of the larger Schefflera Arboricola Tree. With small, oval-shaped leaves spotted with cream coloring, the Arboricola is known as the Octopus plant due to its leaves arranged in a circular fashion in groups of five to nine offshoots.', 'img/Schefflera_arboricola_thumbnail.jpg\r\n\r\n\r\n\r\n', 'img/Schefflera_arboricola.jpg\r\n', 10),
(8, 'Hedgehog Aloe\r\n', 'https://yoeldirar.com/aau/WnM608/Dirar.Yoel/admin/users.php?id=8', 39.00, 'indoor', 'Aloe humilis ‘hedgehog’\r\n', '2021-07-31 14:24:25', '2021-07-31 14:24:25', 'Hedgehog Aloe is a very forgiving succulent, making it a perfect plant for hectic households or for first-time owners. This plant makes quite an impression with its blue-green leaves and will often produce unique spikes of coral-red flowers in the spring and late summer.\r\n\r\n', 'img/hedgehog_aloe_thumbnail.png\r\n\r\n', 'img/bamboo_palm_thumbnail.png', 10),
(9, 'Ponytail Palm', 'https://yoeldirar.com/aau/WnM608/Dirar.Yoel/admin/users.php?id=9', 79.00, 'low maintenance', 'Beaucarnea recurvata\r\n', '2021-07-31 14:26:46', '2021-08-11 10:41:23', 'The Ponytail Palm is drought tolerant, slow-growing, and requires very little care. This plant is ideal for people with very little time or who travel regularly. The Ponytail Palm will be perfectly happy being watered every couple of weeks and left alone to soak up the sunlight. This distinct plant brings a little fun to any room in your home.', 'img/ponytail_palm_thumbnail.png', 'img/ponytail_palm.png', 10),
(10, 'Tradescantia Zebrina', 'https://yoeldirar.com/aau/WnM608/Dirar.Yoel/admin/users.php?id=10', 39.00, 'low maintenance', 'Tradescantia zebrina\r\n', '2021-07-31 14:29:03', '2021-08-11 10:41:57', 'The Tradescantia Zebrina is an easy and fast-growing plant that is loved for its boldly colored leaves and vining growth.\r\n\r\n', 'img/tradescantia-zebrina_thumbnail.jpeg', 'img/tradescantia-zebrina.jpeg', 10),
(11, 'Sansevieria Moonshine\r\n', 'https://yoeldirar.com/aau/WnM608/Dirar.Yoel/admin/users.php?id=11', 69.00, 'indoor', 'Sansevieria robusta ‘moonshine’\r\n', '2021-07-31 14:30:50', '2021-07-31 14:30:50', 'This unique silver-leafed form of the familiar and foolproof Sansevieria makes an unusual addition to your plant family. Its succulent 3-4” wide leaves store water making it a very drought tolerant plant.', 'img/sansevieria_moonshine_thumbnail.png', 'img/sansevieria_moonshine.png', 10),
(12, 'Marble Queen Pothos', 'https://yoeldirar.com/aau/WnM608/Dirar.Yoel/admin/users.php?id=12', 69.00, 'pet friendly', 'Epipremnum aureum ‘marble queen’\r\n', '2021-07-31 14:33:48', '2021-08-11 10:49:41', 'Sporting bright green glossy leaves painted with white, the Marble Queen Pothos is known for being a low-maintenance and durable plant. When placed in a bright, well-lit area, this Pothos will grow brilliantly contrasting white and green leaves, but it can also tolerate lower light environments with less distinctive patterning.', 'img/marble_queen_pothos_thumbnail.jpg', 'img/marble_queen_pothos.jpg', 10),
(13, 'Kimberly Queen Fern', 'https://yoeldirar.com/aau/WnM608/Dirar.Yoel/admin/users.php?id=13', 79.00, 'pet friendly', 'Nephrolepis obliterata\r\n', '2021-07-31 14:35:25', '2021-08-11 10:38:34', 'The Kimberly Queen Fern is more compact, neater, and easier to care for than its familiar cousins, the Boston or Dallas Fern. This plant grows upright, making it perfect for hanging baskets, and its long, vertical, sword-shaped fronds never leave a mess. This makes the Kimberly Queen Fern a low-maintenance choice to soften classic lines and complements mid-century decor.', 'img/kimberly_queen_fern_thumbnail.jpeg', 'img/kimberly_queen_fern.jpeg', 10),
(19, 'corn plant', '', 15.99, 'indoor', '', '2021-08-11 22:03:36', '2021-08-11 22:03:40', 'well known indoor plant', 'img/corn_plant_thumbnail.jpg', 'img/corn_plant_thumbnail.jpg', 10);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
