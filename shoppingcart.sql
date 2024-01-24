-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 01:03 PM
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
-- Database: `shoppingcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(11, 'ali', 'ali@gmail.com', 'ali1');

-- --------------------------------------------------------

--
-- Table structure for table `adminpro`
--

CREATE TABLE `adminpro` (
  `fullname` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminpro`
--

INSERT INTO `adminpro` (`fullname`, `about`, `company`, `job`, `country`, `address`, `phone`, `email`) VALUES
('Kevin Anderson2', 'Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.', 'Lueilwitz, Wisoky and Leuschke', 'Web Designer', 'USA', 'A108 Adam Street, New York, NY 535022', '(436) 486-3538 x29071', 'email');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `Pro_price` int(255) NOT NULL,
  `pquantity` int(11) NOT NULL,
  `ptotal` int(255) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `pro_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `pro_name`, `Pro_price`, `pquantity`, `ptotal`, `subtotal`, `user_id`, `pro_id`) VALUES
(48, 'The Gifting Tree', 25, 2, 50, 0, 68, 33),
(49, 'Frozen', 50, 2, 100, 100, 68, 34),
(50, 'Stationery file', 12, 2, 24, 24, 68, 35),
(51, 'Hand bag', 100, 1, 100, 100, 68, 36),
(53, 'Invitation card', 44, 1, 44, 44, 68, 39);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catid` int(11) NOT NULL,
  `catname` varchar(255) NOT NULL,
  `catdes` varchar(255) NOT NULL,
  `catstatus` varchar(255) NOT NULL,
  `catdate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `catname`, `catdes`, `catstatus`, `catdate`) VALUES
(5, 'greeting cards', 'Some greeting cards are blank inside, and you write a personal message.', '1', '2024-01-11'),
(6, 'gift articles', 'a way of showing thoughtfulness, love and affection.', '1', '2024-01-11'),
(9, 'dolls', 'A doll is a toy that looks like a small person, often a baby.', '1', '2024-01-11'),
(14, 'files', 'A file is the common storage unit in a computer,', '1', '2024-01-11'),
(19, 'hand bags', 'a bag or box of leather', '1', '2024-01-11'),
(22, 'wallets', 'a flat, folding pocketbook', '1', '2024-01-11'),
(26, 'beauty products', 'The cosmetic industry describes the industry that manufactures and distributes cosmetic products.', '1', '2024-01-11');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `shipping` int(255) NOT NULL,
  `card` int(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `name`, `email`, `address`, `phone`, `city`, `shipping`, `card`, `user_id`, `status`) VALUES
(2, '', '', '', 0, '', 0, 0, 0, 1),
(3, 'umar choudry', 'umar@gmail.com', 'house no 148 sec 11', 2147483647, '2147483647', 2147483647, 2147483647, 0, 1),
(4, 'umar khan1a', 'umar@gmail.com', 'qfafae', 2147483647, '2147483647', 12345, 12345, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(1, 0, 'ahtesham@gmail.com', 33321611, 'sjlljaf', 'khJDBkvkXCHKW');

-- --------------------------------------------------------

--
-- Table structure for table `employeedata`
--

CREATE TABLE `employeedata` (
  `eid` int(11) NOT NULL,
  `efname` varchar(255) NOT NULL,
  `elname` varchar(255) NOT NULL,
  `eemail` varchar(255) NOT NULL,
  `epass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employeedata`
--

INSERT INTO `employeedata` (`eid`, `efname`, `elname`, `eemail`, `epass`) VALUES
(4, 'ahtesham1', 'arain', 'ahtesham12@gmail.com', '$2y$10$VsDfSrP175YcpZnhwQQM6uyg.3OB2e1WEasIwHARBdS/A2GLUp9Um'),
(5, 'umer', 'choudry', 'ahtesham1@gmail.com', '$2y$10$kCpNnA1gG12BRXgv30BdX.T435rEnZPUNMuGwX0z1tMlZ6x2ay4y6');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(10) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pdes` varchar(255) NOT NULL,
  `pprice` varchar(255) NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `pnumber` varchar(255) NOT NULL,
  `pcategory` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `pdes`, `pprice`, `pimage`, `pnumber`, `pcategory`) VALUES
(32, 'Birthday card', 'A birthday card is a heartfelt expression of joy and good wishes, often accompanied by a thoughtful message, sent to celebrate someones special day.', '5', 'himg.jpg', 'hb-53801-68437', 5),
(33, 'The Gifting Tree', 'The Gifting Tree article unveils a heartwarming holiday tradition where a communal tree becomes a symbol of generosity, adorned with heartfelt gifts and goodwill.', '25', 'ga.jpg', 'ga-43395-98578', 6),
(34, 'Frozen doll', 'The Frozen doll, inspired by the beloved movie, captures the magic of Elsa or Anna with intricate details and enchanting outfits for endless imaginative play.', '50', 'fd.jpg', 'FD-42934-38209', 9),
(35, 'Stationery file', 'A stationary file typically refers to a set of office supplies, such as paper, envelopes, and pens, used for writing and correspondence.', '12', 'fl.jpg', 'fl-42632-48348', 14),
(36, 'Hand bag', 'A handbag is a stylish and functional accessory designed for carrying personal items, adding both practicality and fashion to ones ensemble', '350', 'handbag.jpg', 'hb-72801-16368', 19),
(37, 'Men wallet', 'A mens wallet, a functional accessory with various styles, combines practicality and sophistication for organizing cards and cash in daily essentials.', '5', 'wallet.jpg', 'mw-49841-34897-69105', 22),
(38, 'Business card', 'A business card is a compact, personalized card containing contact information, serving as a professional introduction and networking tool.', '20', 'bcard.jpg', 'bc-74289-86001-16109', 5),
(39, 'Invitation card', 'An invitation card is a stylish and informative note inviting individuals to a specific event or occasion, often reflecting the theme and details of the celebration.', '44', 'i.jpg', 'ic-93905-59856-89328', 5),
(40, 'Christmas card', 'A Christmas card is a festive greeting card exchanged during the holiday season, conveying warm wishes and often featuring seasonal designs or imagery.', '85', 'c.jpg', 'CC-77576-33092', 5),
(41, 'Congratulations card', 'A congratulation card is a thoughtful expression of joy and well-wishing, typically sent to celebrate someones achievements, milestones, or special occasions.', '45', 'cc.jpg', 'cc-45570-61824', 5),
(42, 'Easter card', 'An Easter card is a cheerful greeting, often adorned with springtime imagery, sent to convey joy and best wishes during the Easter celebration.', '15', 'ec.jpg', 'ec-74169-93025', 5),
(43, 'Celebrating Milestones', 'Celebrating Milestones article explores the significance and joy of marking lifes achievements, creating a tapestry of memories and inspiration for personal growth.', '15', 'gif.jpg', 'CM-93074-92340', 6),
(44, 'The Language of Gifts', 'The Language of Gifts article delves into the art of thoughtful giving, exploring how gifts transcend materiality, communicating emotions, love, and meaningful connections.', '20', 'lg.jpg', 'lg-79678-37479', 6),
(45, 'The Gift of Time', 'The Gift of Time article delves into the profound value of gifting moments and experiences, emphasizing the richness of shared memories over material possessions.', '25', 'gl.jpg', 'gt-15441-26693', 6),
(46, 'Sustainable Surprises', 'Sustainable Surprises article explores eco-friendly and thoughtful gift options, shedding light on sustainable practices that contribute to a greener and more meaningful gift-giving experience.', '30', 'ss.jpg', 'ss-19508-21158', 6),
(47, 'The Science of Surprise', 'The Science of Surprise article delves into the psychology and joy behind surprising gifts, unraveling the secrets of how unexpected gestures stimulate happiness and strengthen connections.', '35', 'sp.jpg', 'sf-89218-21997', 6),
(48, 'Sleeping beauty doll', 'The Sleeping Beauty doll, a regal and enchanting creation, brings the classic fairy tale to life with exquisite details and a touch of royal elegance.', '50', 'sb.jpg', 'bb-35558-52855', 9),
(49, 'Cinderella dolls', 'The Cinderella doll, a timeless beauty in a ballgown, enchants with her fairy-tale grace and captures the essence of elegance and dreams.', '20', 'cn.jpg', 'cd-69230-92352', 9),
(50, 'Bella dolls', ' The Bella doll radiates beauty and charm, capturing the essence of a modern-day princess with her stylish attire and captivating presence.', '120', 'bp.jpg', 'bd-23224-42301-26546', 9),
(51, 'Emily doll', 'The Emily doll exudes charm and uniqueness, featuring delightful details that make her a special companion for imaginative play.', '130', 'lc.jpg', 'ed-70929-93097', 9),
(52, 'Logan doll', 'The Logan doll embodies cool style and adventure, offering a fun companion for play with his trendy outfits and distinctive personality', '150', 'cm.jpg', 'ld-75751-55651', 9),
(54, 'Transparent file', 'A transparent file is an image or graphic file format that supports an alpha channel, allowing for the preservation of background transparency.', '70', 'tp.jpg', 'TP-22436', 14),
(55, 'Cardboard file', 'A cardboard file refers to a durable, stiff paperboard material often used for packaging, construction, or creating folders.', '50', 'Cb.JPEG', 'CB-83973-23414', 14),
(56, 'Document file', 'A document file is a digital container that stores text, images, or data in various formats, facilitating information organization and sharing.', '65', 'df.jpeg', 'DF-42455-60285', 14),
(57, 'Paper file', 'A paper file is a physical document or folder made of paper used for storing and organizing information in a tangible form.', '20', 'pf.jpg', 'PF-83510', 14),
(58, 'Slide bar file', 'A slide bar file is a graphical user interface element that allows users to navigate through content by dragging a slider along a track, commonly used in applications for adjusting settings or scrolling through data.', '95', 'sb.jpg', 'SB-60886-99467', 14),
(59, 'Hair Care', 'Hair care elevate your locks to new heights with our premium hair care, designed for nourished strands and effortless brilliance.', '100', 'hc.jpg', 'HC-28656', 26),
(60, 'Body care ', 'body care nourish and pamper your skin with our indulgent body care, a luxurious ritual for a soft, radiant glow.', '150', 'BC.jpg', 'BC-65745-18224', 26),
(61, 'Mani-Pedi care', 'Manicure-pedicure is a beauty treatment for the hands and feet, involving nail shaping, cuticle care, moisturizing, and nail polish application, enhancing overall nail health and appearance.', '200', 'mp.jpg', 'MP-23559-28228', 26),
(62, 'Skin care', 'Skincare involves a regimen of practices and products designed to maintain and enhance the health, appearance, and texture of the skin.', '170', 'SC.JPG', 'SC-33168-44448', 26),
(63, 'Nail care', 'nail care elevate your nail game with our comprehensive nail care essentials for healthy, polished perfection.', '100', 'nc.jpg', 'NC-44239-96974', 26),
(64, 'Sun care', 'Sun care encompasses protective measures, such as sunscreen application and sun-protective clothing, to shield the skin from harmful UV rays and prevent sun damage.', '90', 'sunc.jpg', 'SC-17468-54825', 26),
(65, 'Hobo bag', 'Hobo bags are characterized by their crescent shape and slouchy design, offering a casual and bohemian style for a laid-back yet fashionable look.', '150', 'hb.jpg', 'HB-87007-29009', 19),
(66, 'Messenger bag', 'Messenger bag, known for their crossbody design and single shoulder strap, provide a practical and versatile solution for carrying essentials with a casual urban style.', '100', 'mb.jpg', 'MB-94123-68825', 19),
(67, 'Duffle bag', 'Duffle bag, with their cylindrical shape and spacious interior, offer a practical and versatile solution for travel or gym use.', '250', 'df.jpg', 'DB-69603', 19),
(68, 'Beach bag', 'Beach bag, designed for seaside outings, feature spacious compartments and durable materials, combining style and functionality for a day by the shore.', '160', 'bb.jpeg', 'BB-61277', 19),
(69, 'Bucket Bag', 'Bucket bag, characterized by their cylindrical shape and drawstring closure, blend fashion and functionality, making them a stylish and versatile accessory.', '130', 'bb.jpg', 'BB-19137', 19),
(70, 'Leather wallet', 'A leather wallet, a classic accessory, combines durability and timeless style, providing a sophisticated and functional way to organize essentials.', '20', 'lw.jpeg', 'LW-63814', 22),
(71, 'Bifold wallet', ' A bifold wallet, featuring a simple fold-over design, offers a compact and organized solution for carrying essential cards and cash in a sleek profile.', '30', 'bw.jpg', 'BW-54023', 22),
(72, 'Mini wallet', 'A mini wallet, compact and minimalist, offers a sleek and efficient solution for carrying essential cards and cash in a smaller, pocket-friendly size.', '45', 'mini.jpeg', 'MW-53270', 22),
(73, 'Trifold wallet', 'A trifold wallet is a compact and versatile accessory with three sections that fold into one another, providing organized storage for cards, cash, and other essentials.', '65', 'tw.jpeg', 'TW-42650', 22),
(74, 'Women wallet', 'A women wallet is a stylish and functional accessory designed to hold essentials like cards, cash, and coins, often featuring various compartments and fashionable designs.', '75', 'ww.jpeg', 'WW-72881', 22),
(75, 'Pencile', 'Unleash creativity with our precision-crafted pencils, perfect for effortless writing and sketching.', '15', 'ps.jpg', 'PS-80517', 33),
(76, 'Marker', 'Vibrant and versatile, our markers bring life to your ideas with bold colors and smooth precision.', '25', 'ms.jpg', 'MS-69501', 33),
(77, 'Eraser', 'Effortless corrections await with our erasers, ensuring a clean slate for every idea.', '15', 'es.jpeg', 'ES-50037', 33),
(78, 'Stapler', 'Seamless organization at your fingertips – our staplers deliver precision and efficiency with every click.', '65', 'ss.jpg', 'SS-14268', 33),
(79, 'Notebook', 'Capture your thoughts in style with our notebooks – where every page becomes a canvas for your imagination.', '30', 'nb.jpg', 'NS-78522', 33),
(80, 'Scotch tape', 'Seal with precision and simplicity – our Scotch tape ensures clean, reliable adhesion for all your needs.', '50', 'st.jpeg', 'ST-93128', 33);

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`id`, `email`) VALUES
(3, 'ali@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `fname`, `lname`, `email`, `phone`, `password`) VALUES
(68, 'umar', 'khan', 'umar@gmail.com', 2147483647, '$2y$10$6G04uMbgnEs8iejRRuW5feUbPIdt9IXycEbCsfoxjE/mf/Bh7vcti'),
(69, 'ahtesham', 'arain', 'ahtesham@gmail.com', 2147483647, '$2y$10$nxhng8y5a/H/UHcn9EyWzuz.m8aYkYS8FO7ZPRlQ4.xohEC2dwF3u'),
(70, 'Muhammad', 'zaid', 'zaid@gmail.com', 342525, '$2y$10$8lRXrA7TCktNxfutlM1hpe6FoJ8/F9y7xWthYq7IaZpR.T/zNeu2m'),
(71, 'ahtesham', 'arain', 'ahteshamarain3@gmail.com', 2147483647, '$2y$10$MSfvDRHDrN1XwJ6sbHiDB.4GwyfMtaI.lB/Wt49WL8Pi1JkpGMKOy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `email` (`admin_email`,`admin_password`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employeedata`
--
ALTER TABLE `employeedata`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `cat fk` (`pcategory`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employeedata`
--
ALTER TABLE `employeedata`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
