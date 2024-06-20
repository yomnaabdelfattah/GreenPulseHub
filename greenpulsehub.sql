-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2024 at 02:31 AM
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
-- Database: `greenpulsehub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `pass`, `name`) VALUES
(2, 'yomna@gmail.com', '0000', 'yomna');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` mediumtext NOT NULL,
  `image` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `title`, `content`, `image`) VALUES
(13, 'Cultivating a Sustainable Future: Practical Steps for Everyday Change', 'Adopting sustainable methods has grown more and more important in recent years. In light of the obstacles presented by resource depletion, climate change, and environmental degradation, it is imperative that individuals and communities move towards a sustainable future. This blog explores useful and effective strategies for integrating sustainability into our everyday lives, proving that even tiny adjustments may have a big impact.', 'bloooog.jpg'),
(14, 'Dressing for the Future: Embracing Sustainable Fashion', 'Known for its quick trends and fast turnover, the fashion sector is one of the global leaders in pollution. The need for sustainable fashion has never been greater, with concerns ranging from the effects of textile production on the environment to the social repercussions of labour practices. This blog examines the idea of sustainable fashion, doable actions that customers can take, and how the market is changing to satisfy the need for ethical and environmentally responsible apparel.', 'bblog.jpg'),
(15, 'Nourishing the Planet: Embracing Sustainable Food Practices', 'Food production, consumption, and waste management practices have a significant impact on social justice, public health, and the environment.The main goals of sustainable food practices are to produce and consume food in a way that safeguards human health, the environment, and the humane treatment of animals and labourers. This strategy tackles a number of food system issues, such as farming practices, food processing, distribution, consumption, and waste management.\r\n \r\n', 'blog3.jpg'),
(16, 'Powering the Future: Exploring Sustainable Energy Solutions', 'To mitigate climate change, reduce pollution, and ensure long-term energy security, a shift to sustainable energy is imperative. Sustainable energy solutions support technology that lessen the environmental impact of energy production and use, increase energy efficiency, and make use of renewable resources. This blog looks at several sustainable energy sources, doable actions for people and companies, and the newest advancements accelerating the transition to cleaner energy.\r\n\r\n\r\nThe term \"sustainable energy\" describes energy produced from naturally replenishing resources with little negative influence on the environment. Solar, wind, hydro, geothermal, and biomass energy are important sources. These cleaner, renewable fossil fuel substitutes help lower greenhouse gas emissions and reliance on limited resources.', 'blog4.jpg'),
(17, 'Building Greener Cities: The Path to Sustainable Urban Development', 'Sustainable urban development is now essential to maintaining resilient, habitable, and healthy cities as the population of the world is growing at an unprecedented rate. This blog examines the fundamentals of sustainable urban development, doable actions that cities may take, and cutting-edge tactics being used globally to build greener urban environments.\r\n\r\nThe goal of sustainable urban development is to build communities with excellent living standards and the least possible negative effects on the environment. It entails incorporating social, cultural, and environmental factors into urban administration and planning. Resource efficiency, pollution reduction, improving green spaces, and social equity promotion are important tenets.', 'blog5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `botresponses`
--

CREATE TABLE `botresponses` (
  `id` int(11) NOT NULL,
  `user_input` varchar(255) DEFAULT NULL,
  `bot_response` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `botresponses`
--

INSERT INTO `botresponses` (`id`, `user_input`, `bot_response`) VALUES
(1, 'hello', 'hello,how can i assist you?'),
(2, 'who are you?', 'GreenPulseHub idea is generated as a result of statistics issued by global warming problems, as it a profit organization that try to help people having a healthy lifestyle as we face a lot of environmental issues that affects our health in a bad way. We know we could do better by providing an online portal that facilitate reaching their needs.'),
(3, 'what do you do?', 'We sell eco-friendly products,we have five categories so you\'ll definetely find what you\'re looking for here,Happy shopping!'),
(4, 'what is the return policy?', 'We want you to be completely satisfied with your purchase. If you’re not satisfied for any reason, you may return the item(s) within [30 days] of delivery for a full refund or exchange.'),
(5, 'how much is the shipping cost?', 'shipping cost in 50 EGP on every order.\r\nYou can subscribe to our plan to enjoy free delivery within a year for only 499 EGP.'),
(6, 'how can i contact you?', 'you can send us an email on GreenPulseHub@Gmail.Com or call us on 01589477271'),
(7, 'what is the estimated delivery time?', 'Orders shipped typically arrive within [5-7 business days] after processing.');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `price`, `productID`, `userID`, `quantity`) VALUES
(25, 350, 34, 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `name`) VALUES
(1, 'Furniture'),
(2, 'Beauty'),
(3, 'Clothes'),
(4, 'Home & Kitchen'),
(5, 'Hygiene');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` mediumtext NOT NULL,
  `region` varchar(50) NOT NULL,
  `location` mediumtext NOT NULL,
  `time` date NOT NULL,
  `imageOne` mediumtext NOT NULL,
  `imageTwo` mediumtext NOT NULL,
  `imageThree` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `name`, `details`, `region`, `location`, `time`, `imageOne`, `imageTwo`, `imageThree`) VALUES
(17, 'THE GLOBAL SUMMIT FOR  SUSTAINABILITY LEADERS', 'Introducing Sustainability LIVE London, a hybrid event dedicated to inspiring and empowering C/V/D Level Sustainability Executives in enterprise organisations. \r\n\r\n\r\nFor those seeking an immersive in-person experience, our London event cultivates a vibrant atmosphere where sustainability leaders from the UK and Europe can gather, forge connections, and delve deeper into the most pressing sustainability issues facing their organisations.  \r\n\r\nJoin Sustainability LIVE London to discover innovative strategies, gain valuable insights from industry experts, and foster meaningful collaborations to shape a sustainable future for your enterprise', 'BUSINESS DESIGN CENTRE, LONDON', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9927.134471213405!2d-0.1048018!3d51.5355285!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b42aca314f1%3A0x26e058fdce21434a!2sBusiness%20Design%20Centre!5e0!3m2!1sen!2seg!4v1718826273367!5m2!1sen!2seg\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2024-09-10', 'event2.jpg', 'eventt2.jpg', 'eventt3.jpg'),
(18, 'Sustainability LIVE Malta-2024', 'A leading ESG and sustainability strategy event in Malta Gather among \r\nC/V/D level sustainability executives at Sustainability LIVE Malta to forge connections and \r\ndelve deeper into the most pressing sustainability issues facing organisations today. \r\nAs well as networking with like-minded sustainability pioneers, \r\nthere will be the opportunity to take part in interactive workshops hosted by Europe’s \r\nsustainability leaders to accelerate your efforts in cutting emissions and enhancing your \r\nenvironmental footprint.', 'Mediterranean Conference Centre,Malta', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12927.71821130944!2d14.518268!3d35.899741!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x130e452a1b8f40f3%3A0xa794cd316ad426a7!2sMediterranean%20Conference%20Centre!5e0!3m2!1sen!2seg!4v1718826710353!5m2!1sen!2seg', '2024-10-17', 'event1.jpg', 'event1.jpg', 'event1.jpg'),
(19, 'International Conference on Environment and Life Science', '“Research Foundation” is an internationally recognized multidisciplinary professional research and development association that brings together researchers and academicians to discuss and share their knowledge in the “Engineering,Life-Sciences”.International Conference on Environment and Life Science aims to identify the challenges and provide scientific solutions to industries, corporates, communities, organizations, countries, and academics to combat the challenges.', 'Alexandria,Egypt.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3412.426624330433!2d29.906583775106945!3d31.20890776246498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c38a0562fe85%3A0xa34cc632ec23e7!2sAlexandria%20Bibliotheca!5e0!3m2!1sen!2seg!4v1718828247722!5m2!1sen!2seg', '2024-07-12', 'event3.jpg', 'event3.jpg', 'event3.jpg'),
(20, 'International Conference on Planning and Design for Sustainability in Built Environment', '“IARF” welcomes you to the world of innovation, experiments, and fantasies, where eminent leaders and scholars come together to share their knowledge and discuss the advancements in the “Physical and life sciences”.International Conference on Planning and Design for Sustainability in Built Environment aims to focus on the interface between the science system, recent innovations, practical challenges encountered, and solutions within the areas.', 'Giza,Egypt', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d442277.8433236327!2d31.176331000000005!3d29.999666!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145846edaf470f89%3A0xcc64293cc14097ef!2sBarcelo%20Cairo%20Pyramids!5e0!3m2!1sen!2sus!4v1718828391892!5m2!1sen!2sus', '2024-10-15', 'event4.jpg', 'event4.jpg', 'event4.jpg'),
(21, 'International Conference on Ecology and Environmental Biology', '“IITER” is a professional association that brings analysts, scholars, and public relations managers to discuss the technical revolution and sustainable development in the fields of “Physical and life sciences”.International Conference on Ecology and Environmental Biology aims to discuss and enhance the developments in the area and explain the technological revolution to students, scholars, and wizards.', 'Cairo,Egypt', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d55248.67064089925!2d31.227855!3d30.064333!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145840c293ff6133%3A0x5e34a3ef0681f0e7!2sHilton%20Cairo%20World%20Trade%20Center%20by%20DROP!5e0!3m2!1sen!2sus!4v1718828589945!5m2!1sen!2sus', '2024-12-23', 'event5.jpg', 'event5.jpg', 'event5.jpg'),
(22, 'Earth Day', 'People all over the world celebrate this day by raising awareness about keeping the earth clean', 'All over the world', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52887706.14540557!2d-161.74454347928352!3d35.99563672201457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2seg!4v1718828819300!5m2!1sen!2seg', '2025-04-22', 'event6.jpg', 'event6.jpg', 'event6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `price`, `userId`, `productId`, `quantity`) VALUES
(10, 240, 11, 29, 1),
(11, 380, 11, 28, 2);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `parent_post_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `details` varchar(500) NOT NULL,
  `price` varchar(10) NOT NULL,
  `imgOne` text NOT NULL,
  `imgTwo` mediumtext NOT NULL,
  `imgThree` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `categoryId`, `details`, `price`, `imgOne`, `imgTwo`, `imgThree`) VALUES
(10, 'MID-CENTURY MODERN DRESSER', 1, 'Mid-Century Modern Dresser with solid walnut or maple wood. The elegant mid-century design features sturdy, angular legs that provide stable support for this timeless heirloom. Available in tall and horizontal options', '3999', 'f1.jpg', 'f2.jpg', 'f3.jpg'),
(11, 'NATURAL WOOD BED FRAME', 1, 'Made from solid reclaimed wood with a \"rustic raw\" stain, zero-VOC sealant, and solid pine slats. Assembly is tool-free.', '7500', 'z11.jpg', 'f13.jpg', 'f14.jpg'),
(12, 'NATURAL WOOD END TABLE', 1, 'Reclaimed wood with a \"rustic raw\" finish and a zero-VOC sealant. Part of our Natural Wood Furniture Collection, the Natural Wood End Table pairs perfectly with our Natural Wood Bed Frame and Natural Wood Dresser.', '1450', 'f21.jpg', 'f22.jpg', 'f21.jpg'),
(13, 'ZERO WASTE table', 1, 'Elegant, durable, and responsible. We craft our Zero Waste table exclusively with upcycled wood. It’s low-impact luxury. This unique statement piece will lend a story of eco-consciousness wherever you place it.', '1300', 'f31.jpg', 'f33.jpg', 'f32.jpg'),
(14, 'ZERO WASTE WOOD VASES', 1, 'Elegant, durable, and responsible with upcycled wood. It’s a low-impact luxury. This unique statement piece will lend a story of eco-consciousness to your shelves.', '650', 'f41.jpg', 'f42.jpg', 'f43.jpg'),
(15, 'Modular Bondi Latte 2-Seater Sofa in Ocean | Classic Blend', 1, 'Reconfigurable modules, made to move and adapt with your ever-changing lifestyle. Designed to fit anywhere—great for small & large spaces alike.', '3400', 'f53.jpg', 'f52.jpg', 'f53.jpg'),
(16, 'Square Accent Pillow 20 x 20 | Flax', 1, ' Each pillow is filled with cloud-like recycled cosmetic-down. This featherless down alternative is hypoallergenic and requires no fluffing.', '220', 'f61.jpg', 'f63.jpg', 'f61.jpg'),
(17, 'Quilted Vermont Cherry Rocking Chair', 1, 'The most comfortable rocker you will ever sit in! Our eco-friendly, Quilted Vermont Rocker is the perfect gift for the mother-to-be, or for anyone who needs a little soothing, luxury and comfort at the end of a long day. Your back will love it!', '1950', 'f71.jpg', 'f72.jpg', 'f73.jpg'),
(18, 'POLYWOOD Braxton 4-Piece Deep Seating Set', 1, 'Made from genuine POLYWOOD® recycled plastic lumber, this 4-piece outdoor furniture set provides sustainability and luxury for your outdoor space.', '3590', 'f81.jpg', 'f82.jpg', 'f81.jpg'),
(19, 'Classic Shaker Flare Leg Oval Top Coffee Table', 1, 'Our Classic Shaker Flare Leg Oval Coffee Tables are genuinely made in Vermont using sustainably harvested hardwoods. Eco-friendly, and perfect for putting your feet up while you relax. These designer solid wood coffee tables are perfect for any style living room.', '1180', 'f91.jpg', 'f92.jpg', 'f93.jpg'),
(20, 'Shaker Bookcase', 1, 'The New England Shaker Custom Open Bookcases are custom made to fit in any space in your home where a beautiful luxury bookshelf is needed. Our bookcases are hand made Vermont Wood furniture makers, using sustainably harvested solid woods. Each of our bookcases can be customized online, in the showroom or by phone to best fit your space.', '1479', 'f10.jpg', 'f11.jpg', 'f12.jpg'),
(27, 'Rosewater Face Cream', 2, 'You do like that baby face look, don’t you?\r\nLovett Sundries rosewater face cream is lightweight and gentle cream that will leave your face feeling soft and soothing like a baby’s skin!\r\n\r\nIt will hydrate and tone your skin without clogging your pores.', '350', 'b01.jpg', 'b03.jpg', 'b02.jpg'),
(28, 'Ahoy Love Nourishing Cream Cleanser', 2, 'Keep your skin at it’s best with this amazing, cruelty-free cleanser!\r\nIt gently purifies and nourishes leaving the skin soft, renewed and brightened!\r\nDesigned to be an essential cleanser for all skin types.', '380', 'b11.jpg', 'b22.jpg', 'b33.jpg'),
(29, 'Collagen Boosting Face Serum with Coffee Oil', 2, 'Keep your skin bright and well-rested with this certified organic face serum made with repurposed coffee extract.\r\n\r\nUse UpCircle Face Serum morning and night to help boost collagen and keep skin firm.\r\n\r\nRich in Vitamin C, antioxidant-rich coffee and rosehip oils fade dark spots and brighten complexion!', '240', 'zh.jpg', 'b2.jpg', 'b3.jpg'),
(31, 'Cold Pressed Soap - Ylang Ylang', 2, 'Crafted to be gentle yet effective, this substantial soap block is a sustainable choice, boasting 100% vegan ingredients and plastic-free packaging that can be easily recycled or composted.', '95', 'b1.jpg', 'b1.jpg', 'b1.jpg'),
(32, 'Aloe Vera Vegan Soap Bar', 2, 'Perfect for Autumn skin care and a fantastic Christmas stocking filler gift. This invigorating soap bar uses soothing Ylang Ylang essential oils to give it its wonderful scent. The tropical yellow flower is native to countries surrounding the Indian Ocean and is favoured for its rich and fruity top notes, making it a popular ingredient in high-end perfumes. Now, you can enjoy this refreshing scent within a stimulating, all-natural soap.', '110', 'aa1.jpg', 'aa2.jpg', 'aa.jpg'),
(33, 'Organic Quarter Zip Fleece', 3, 'Our organic cotton quarter zip fleece, chosen by you. Made with a custom developed, premium fabric by Mihir and his team at their solar powered and Fair Trade factory in India.', '650', 'cc.jpg', 'cc1.jpg', 'cc2.jpg'),
(34, 'Ribbed Athletic Organic Tank Top', 3, 'Please note: The sizing differs on our tank tops to our original Yes Friends T-shirt, please see the size chart above to pick your perfect size!', '350', 'dd.jpg', 'dd1.jpg', 'dd2.jpg'),
(35, 'Organic Double Layered Beanie', 3, 'Our doubled layered organic cotton beanie,ready for winter', '150', 'gg.jpg', 'gg1.jpg', 'gg2.jpg'),
(36, 'Girls organic cotton dress', 3, 'with classic style and timeless design, the girls organic cotton dress with a blue gingham print is the perfect choice for your child wardrobe.', '640', 'rr.jpg', 'rr1.jpg', 'rr2.jpg'),
(37, 'Mattock II Short Sleeve Shirt', 3, ' 100% organic cotton Standard fit with button down collar and drop tail, 29.5\" length', '330', 'vv.jpg', 'vv.jpg', 'vv.jpg'),
(38, 'Embroided t-shirt', 3, 'A wardrobe staple that keeps basic at bay made with dyed organic cotton.', '280', 'ee.jpg', 'ee.jpg', 'ee.jpg'),
(39, 'Ridge short ', 3, 'Made of tough, moisture wicking twill.', '420', 'll.jpg', 'll.jpg', 'll.jpg'),
(40, 'Cotton Mesh Reusable Produce Bags - 10 Pack', 4, 'These reusable produce bags are made without unnecessary plastic that is harming our planet and entering our food system. The breathable cotton mesh stretches to the shape of your fruits and vegetables without any tears.', '200', 'zx.jpg', 'zx1.jpg', 'zx2.jpg'),
(41, 'Beeswax Food Wraps - 3 Pack Reusable Wraps | Net Zero Co.', 4, 'Make the switch from traditional single-use plastic wrap, foil, and other common food wrappers!these reusable beeswax food wraps keep contents fresh! Organic cotton and antifungal beeswax slow decomposition while allowing food to breathe.v', '130', 'za.jpg', 'za1.jpg', 'za2.jpg'),
(42, 'Silicone Zip Sealers - 4 Pack Reusable Food Storage Bags', 4, 'These 100% food-grade slilicon food storage bags are non-toxic,durable and reusable alternatives to plastic bags.', '135', 'zz.jpg', 'zz1.jpg', 'zz2.jpg'),
(43, 'Snack Town Triad - 3 Pack Reusable Food Containers', 4, 'Available in 3 convenient sizes – these round stainless steel containers with lids are plastic-free and perfect for on-the-go nibbles.', '220', 'sa.jpg', 'sa1.jpg', 'sa2.jpg'),
(44, 'The Munchie Box - Small Stainless Steel Bento Box', 4, 'With an airtight seal and inner silicone ring to prevent leaks, you’ll love how this leakproof stainless steel bento box securely holds liquid or sold food items. The', '250', 'xx.jpg', 'xx1.jpg', 'xx2.jpg'),
(45, 'Handmade Ceramic Juice Cup', 4, 'Bring natural elegance to any table with Handmade Ceramic Juice Cup from Lafayette Avenue.', '160', 'sd.jpg', 'sd1.jpg', 'sd2.jpg'),
(46, 'Handmade Ceramic Bowl', 4, 'Bring natural elegance to the dinner table with the Handmade Ceramic Bowl from Lafayette Avenue', '195', 'qq.jpg', 'qq2.jpg', 'qq1.jpg'),
(47, 'Aloe Vera Mascara – Black 090', 2, 'The aloe vera mascara is perfect for building length and volumising your lashes, with it’s incredible staying power, this mascara is perfect for wearing daily and in the evening.\r\n', '290', 'qw.jpg', 'qw1.jpg', 'qw.jpg'),
(48, '20 Cotton Facial Rounds – Mixed Prints', 2, 'Reusable 100% cotton facial rounds from Marley’s Monsters, designed to replace disposable cotton balls and cotton wool pads.', '220', 'aw.jpg', 'aw1.jpg', 'aw.jpg'),
(49, 'Zao Nail Polish Top Coat ', 2, 'The top coat is the most important step for a clean and lasting manicure. This Zao top coat range are the perfect finishers.Made using 100% vegan friendly and cruelty free ingredients Vegan Nail Polish Top Coat', '110', 'zs.jpg', 'z1.jpg', 'z2.jpg'),
(50, 'Unisex Quarter Zip Sweater', 3, 'A comfy, relaxed fit with versatile zip styling.\r\nDesigned with a convenient pouch pocket for on-the-go essentials and drop shoulder detail.\r\nRevel in the buttery soft double knit fabric, ensuring ultimate comfort with every wear.\r\nEmbrace versatility with unisex sizing - check the size guide for measurements. This sweater is designed to be oversized; for a slimmer fit, size down.', '599', 'cx.jpg', 'cx1.jpg', 'cx2.jpg'),
(51, 'Handmade Ceramic Salad Plate 4pk', 4, 'Made from non-toxic,lead-free glazes', '200', 'vv (1).jpg', 'vv (1).jpg', 'vv (1).jpg'),
(52, 'Bamboo Hair Brush - Zero Waste Hair Brush, Plastic Free, 100% Bamboo, Compostable', 5, 'Our Plastic-Free Bamboo Hair Brush works overtime to keep your hair knot-free, frizz-free, and static-free. Bamboo bristles stimulate your scalp (great for sensitive heads) leaving you with healthy, shiny hair.', '170', 'nn.jpg', 'nn2.jpg', 'nn1.jpg'),
(53, 'Long Handle Dish Brush - Agave Dish Brush, Plastic Free, Replaceable Heads', 5, 'Our Long-Handled Dish Brushes come with a replaceable head made from sturdy agave fibers and a bamboo wood handle that can tackle any mess you throw at it.', '150', 'mm (1).jpg', 'mm1.jpg', 'mm2.jpg'),
(54, 'Loofah Sponge - Zero Waste Loofah, Plastic Free, Compostable', 5, 'Loofah Sponges come from the dried loofah plant, a cousin to cucumbers! While you can’t scrub with a cucumber, a loofah sponge makes an amazing plastic replacement for bath, dish, and cleaning sponges.', '170', 'bb.webp', 'bb1.webp', 'bb2.webp'),
(56, 'Bamboo Cotton Buds', 5, 'Tree-t your skin and the earth a little nicer with these sustainably-grown bamboo cotton swabs. Bamboo is soft and gentle on your skin and the packaging is made from 100% recyclable or compostable kraft paper. Each pack contains 200 swabs.', '145', 'xz1.jpg', 'xz1.jpg', 'xz1.jpg'),
(57, 'Silk Floss - Zero Waste Dental Floss, 30m, Biodegradable, Refillable', 5, 'Next time the dentist asks if you’ve been flossing, say yes! And rest comfortably knowing you used sustainable Silk Floss that didn’t come at the expense of the planet.', '60', 'ee1.jpg', 'ee2.jpg', 'ee3.jpg'),
(58, 'Shampoo Bar - Zero Waste Shampoo, 3oz, 12 Scent Options, Vegan, SLS Free', 5, 'Our Zero Waste Shampoo Bars are made with salon-grade, vegan ingredients that cleanse, nourish, and replenish hair with shine, body, and bounce.', '75', 'll1.jpg', 'll2.jpg', 'll3.jpg'),
(59, 'Conditioner Bar - Zero Waste Conditioner, 1.7oz, 12 Scent Options, Vegan, Sulfate Free,', 5, 'Our Zero Waste Conditioner Bars are made with salon-grade, lightweight formulas that strengthen, hydrate, and replenish hair with shine, volume, and less frizz.', '85', 'ff.jpg', 'ff2.jpg', 'ff3.jpg'),
(60, 'Toothpaste Tablets - Zero Waste Toothpaste - All-Natural, Plastic Free, Refillable, 62 ct.', 5, 'Chew into fresh breath and a more sustainable planet with our toothpaste tablets containing nano-hydroxyapatite, a non-toxic fluoride alternative, and recyclable aluminum case. Made with clean ingredients like peppermint oil, coconut oil, aloe vera extract, and xylitol, for a healthier and plastic free smile!', '70', 'hh.jpg', 'hh1.jpg', 'hh2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `qreplies`
--

CREATE TABLE `qreplies` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `post_id` int(11) NOT NULL,
  `content` mediumtext NOT NULL,
  `user_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qreplies`
--

INSERT INTO `qreplies` (`id`, `name`, `post_id`, `content`, `user_name`) VALUES
(1, '', 1, 'ok\n', 'lj'),
(2, '', 2, 'lmlmlm', 'lm'),
(3, '', 2, 'amananan', 'bbb');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content` mediumtext NOT NULL,
  `user_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `name`, `content`, `user_name`) VALUES
(1, '', 'hi', 'kj'),
(2, '', 'awww', 'aw');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `content` mediumtext NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `sub_id` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `conpass` varchar(50) NOT NULL,
  `phone` int(13) NOT NULL,
  `address` varchar(255) NOT NULL,
  `is_subscribed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fname`, `lname`, `email`, `pass`, `conpass`, `phone`, `address`, `is_subscribed`) VALUES
(10, 'a', 'aa', 'a@g.com', '1', '1', 111, 'qwe', 0),
(11, 'Molly', 'James', 'mo@gmail.com', '88', '88', 11111, 'Cairo,Egypt', 0),
(12, 'ad', 'add', 'ad@gmail.com', '12', '12', 11, 'cairooo', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `botresponses`
--
ALTER TABLE `botresponses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `userID` (`userID`),
  ADD KEY `productID` (`productID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `productId` (`productId`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `parent_post_id` (`parent_post_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Indexes for table `qreplies`
--
ALTER TABLE `qreplies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`sub_id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `botresponses`
--
ALTER TABLE `botresponses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `qreplies`
--
ALTER TABLE `qreplies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `product` (`product_id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `product` (`product_id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`parent_post_id`) REFERENCES `posts` (`post_id`) ON DELETE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE;

--
-- Constraints for table `qreplies`
--
ALTER TABLE `qreplies`
  ADD CONSTRAINT `qreplies_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
