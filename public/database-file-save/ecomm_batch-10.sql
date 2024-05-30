-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 03:59 PM
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
-- Database: `ecomm_batch-10`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'RFL Furniture', 'RFL Furniture', 'upload/brand-images/1712084090.webp', 1, '2024-04-02 12:53:42', '2024-04-02 12:54:50'),
(3, 'STYLEE', 'STYLEE', 'upload/brand-images/1712084071.jpeg', 1, '2024-04-02 12:54:31', '2024-04-02 12:54:31'),
(4, 'Gazi', 'Gazi', 'upload/brand-images/1712084202.webp', 1, '2024-04-02 12:56:42', '2024-04-02 12:56:42'),
(5, 'Vivo', 'Vivo', 'upload/brand-images/1712084302.jpeg', 1, '2024-04-02 12:58:22', '2024-04-02 12:58:22'),
(6, 'Oppo', 'Oppo', 'upload/brand-images/1712084359.jpeg', 1, '2024-04-02 12:59:19', '2024-04-02 12:59:19'),
(7, 'ROKOMARI FOOD Fresh', 'ROKOMARI FOOD Fresh', 'upload/brand-images/1712084447.jpg', 1, '2024-04-02 13:00:47', '2024-04-02 13:00:47'),
(8, 'Mithai', 'Mithai', 'upload/brand-images/1712084493.jpg', 1, '2024-04-02 13:01:33', '2024-04-02 13:01:33'),
(9, 'Playtime Toys', 'Playtime Toys', 'upload/brand-images/1712084556.jpeg', 1, '2024-04-02 13:02:36', '2024-04-02 13:02:36'),
(10, 'Nestle', 'Nestle', 'upload/brand-images/1712084612.jpg', 1, '2024-04-02 13:03:32', '2024-04-02 13:03:32'),
(11, 'Nan Xiang', 'Nan Xiang', 'upload/brand-images/1712084822.jpeg', 1, '2024-04-02 13:07:02', '2024-04-02 13:07:02'),
(13, 'alk2 Orginal BP Machine', 'alk2 Orginal BP Machine', 'upload/brand-images/1712085051.jpeg', 1, '2024-04-02 13:09:15', '2024-04-02 13:10:51'),
(15, 'Vaseline', 'Vaseline', 'upload/brand-images/1712084994.jpg', 1, '2024-04-02 13:09:54', '2024-04-02 13:09:54');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('c525a5357e97fef8d3db25841c86da1a', 'i:1;', 1716657976),
('c525a5357e97fef8d3db25841c86da1a:timer', 'i:1716657976;', 1716657976);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Home & LIving', 'HOME FURNITURE: Chair, Tables, Wardrobe, Bed, Bed Side Cabinets, Dressing Table, Sofa, Show Case, Almirah, Cupboard, Multipurpose Shelf, TV Trolley, Closet, Mattresses, Shoe Rack, Wall Shelves, Stool, Kitchen Cabinets, Cloth Hanger Stand, Cradles, Craft, Alna, HOME DECOR: Bed Sheet, Cushion & Pillow Cover, Cushion & Pillow, Nakshi Kantha, Curtains & Accessories, Blankets, Quilts & Duvets, Decorative Lightings, Candles & Lamps, Wall Decor, Art Frames, Clock, Air Freshener, Mosquito Nets, Bean Bags, OFFICE FURNITURE: Sofa, Office Chair, Swivel Chair, Executive Table, Side Table, Conference Table, Drawer Unit, Benches, HOUSEHOLD:Hanger & Cloth Clip, Hand Moving Fan, Bucket, Dust Pan & Bin, Bath Mug, Baskets, Storage & Organiser, Household Supplies, Umbrella, Ladder, Weights & Measures,  KITCHEN & DINING: Tableware, Cutlery, Hotpot & Casserole, Tiffin Box, Lunch Boxs & Bags, Spice Box, Net & Basket, Rack & Stand, Pressure Cooker, Storage & Containers, Kitchen Tools, Strainers & Colanders, Stoves, Hobs & LPG Cylinder, Pans & Tawas, Stainless Steel, Water Pot, Single-Use Disposable Items, HARDWARE & SANITARY FITTINGS:Cable Casing, Toothpaste Dispenser, Grating Net, Binder & Adhesives, Tissue Holder, Towel Hanger, Soap Case, Wall Tap, Basin & Sink Tap, Faucet & Hand Shower, Wall Shower Door Accessories, Mats, Commode, Cleaning Brushes & Scourer, Mop & Mop Sets, Broom Brush, Toilet Brush , Cleaner & Accessories, Kitchen Sink, Brush, Ceiling Panel, HOME SAFETY: Insect Repellents, LUGGAGE & TRAVEL GEAR: Luggage, Travel Bags, BATH LINEN: Bath Robe, Napkin & Towel', 'upload/category-images/1712079756.jpg', 1, '2024-04-02 11:42:36', '2024-04-02 11:42:36'),
(5, 'Electronics', 'At E-Shopping, We continuously seek and select premier electronics that not only unite practical use and stylish high-tech novelty, but redefine your world of technology. Explore a curated array of cutting-edge electronic devices and intuitively progressive gadgets, each aimed at revolutionizing everyday lifestyle and future trends. With our electronic store, experience technology at its peak.', 'upload/category-images/1712079969.jpg', 1, '2024-04-02 11:46:09', '2024-04-02 11:46:09'),
(6, 'Food & Grocery', 'No man can live without food, and for our daily food, buying grocery items is a must. Buying fish, vegetables, eggs, meat, beef, etc. is a must for cooking regular food. We all have to go to local markets to buy these food and grocery items. Some people go to super shops to buy these. Buying food and grocery in local markets is troublesome, and wastes a lot of time. In this age of business people do not find enough time to buy foods and groceries from local markets. So either they choose their servants or go for super shops. Servants often fail to purchase quality products and shopping in super shops is very expensive.\r\n\r\nIf we think about quality then we know that rotten fish, vegetables, and expired groceries are sold in the local market, and if we do not buy with care then we will surely be cheated. On the other hand, most of the super shops sell frozen foods and groceries, this decrease the taste of food.\r\n\r\nThe latest addition to food and grocery shopping is online shopping. In Bangladesh, E-Shopping.com, online shopping website Bangladesh, offers online food and grocery shopping. People can buy any food and grocery item online at home.', 'upload/category-images/1712080132.jpg', 1, '2024-04-02 11:48:52', '2024-04-02 11:48:52'),
(7, 'Fashion', 'Fashion photography is a genre of photography that portrays clothing and other fashion items. This sometimes includes haute couture garments. It typically consists of a fashion photographer taking pictures of a dressed model in a photographic studio or an outside setting.', 'upload/category-images/1712080286.jpg', 1, '2024-04-02 11:51:26', '2024-04-02 11:51:26'),
(8, 'Baby & Kids', 'Welcome to Babycare – Your Ultimate Destination for Baby Essentials!\r\n\r\n\r\n\r\nDiscover a world of comfort and care for your little one at Babycare. From keeping them dry with our diverse range of diapers to nourishing their growth with curated baby foods, we offer everything you need. Explore high-quality feeding, safety, school, skincare, mothercare, fashion, and accessories collections, ensuring your journey through parenthood is filled with joy and ease. Shop confidently, knowing that at Babycare, we understand the unique needs of parents and babies, providing a one-stop solution for all your baby care essentials.\r\n\r\n \r\n\r\nWhy Choose Us?\r\n\r\nExtensive Range: Explore our comprehensive collection of baby essentials, handpicked from trusted brands, covering all your needs from infancy to school years. \r\n\r\nQuality Assurance: We prioritize your baby\'s safety. Our products adhere to the highest standards, providing you with peace of mind. \r\n\r\nTrusted Partners: Join our community of parents and caregivers who trust babycare.com.bd for expert advice, reliable products, and a supportive network. \r\n\r\nUser-Friendly Experience: Enjoy a seamless shopping experience with our easy-to-navigate platform, ensuring you find what you need quickly and efficiently. \r\n\r\nNationwide Delivery: We deliver smiles across Bangladesh! Benefit from our reliable nationwide delivery service, bringing the best baby care products to your doorstep.\r\n\r\n \r\n\r\nYour Journey, Our Priority:\r\n\r\nAt Babycare, we understand that every parenting journey is unique. Our commitment is to be your companion, providing not just products but a community that shares the joys and challenges of raising happy, healthy children.\r\n\r\nShop with confidence, explore with joy, and nurture every precious moment with babycare.com.bd – Your Partner in Parenthood.', 'upload/category-images/1712080569.jpg', 1, '2024-04-02 11:56:09', '2024-04-02 11:56:09'),
(9, 'Bags and Travel', 'Whenever we go on a journey, our heart leaps up with joy and pleasure, but your journey can be turned into a nightmare if you do not have the exact luggage and travel gear with you. Luggage and travel bags are very much necessary while we do traveling. We need to take a lot of things with us during a tour. A perfect luggage or travel bag can help us in this regard. These are used to carry clothes while traveling. These things are convenient and very much strong so that you can bring any number of clothes and other essential items.  \r\n\r\nLuggage or travel bag consist many pockets so you can keep big and smaller things separately. These also have strong lock facility, so things are safe inside it while making the journey in public transport. Carrying clothes while traveling can be a work of irritation but with luggage or travel bag, it can be an easy thing. Whenever you go on a tour, you need to carry a lot of clothes. Without luggage or a travel bag, it is quite impossible to carry this huge number of clothes. Again, these clothes cannot be kept safe if we carry them in a low-quality bag. So, buying a quality bag is very much necessary. It is also essential to buy a suitable model and size for your family.', 'upload/category-images/1712080767.jpg', 1, '2024-04-02 11:59:27', '2024-04-02 11:59:27'),
(10, 'Health & Beauty', 'Explore a wide range of health & beauty care products covering hair, skin, and personal care to get an improved and well-developed healthy glow and beauty.', 'upload/category-images/1712080959.jpg', 1, '2024-04-02 12:02:39', '2024-04-02 12:02:39');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_of_birth` text DEFAULT NULL,
  `blood_group` text DEFAULT NULL,
  `nid` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `mobile`, `password`, `date_of_birth`, `blood_group`, `nid`, `address`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'MST AFSANA NASRIN', 'afsana@gmail.com', '01750949777', '$2y$12$EIvoGLUAp0eEbP0dzKBdfurCJqbuCYhbxHiM96g1zy8KAntt9Wdae', NULL, NULL, NULL, NULL, NULL, 1, '2024-04-18 05:14:38', '2024-04-18 05:14:38'),
(3, 'Md.Shakirul Islam', 'sakirulislameee@gmail.com', '0101', '$2y$12$IXFPTB6QCdx4aW2jdW2/Pe/nHgp8KOJr3100lhvhHJLxIdEbrrPYm', NULL, NULL, NULL, 'dangapara, shaboil, birol', NULL, 1, '2024-04-18 06:10:15', '2024-04-18 06:10:15'),
(4, 'Banana', 'banana@gmail.com', '147', '$2y$12$e6sAeRyHaZpnYYc9vTCVh.awrIzm.b4lMGteDYoxogOHTtgd61qTy', NULL, NULL, NULL, 'dangapara, shaboil', NULL, 1, '2024-04-18 06:17:03', '2024-04-18 06:17:03'),
(5, 'Sanah', 'sanah@gmail.com', '013018', '$2y$12$yZIzL3ZusAyXSJzwICmU7.6Gsd6qFR0vERkKYQ/XHPCZurTLIhVgO', NULL, NULL, NULL, NULL, NULL, 1, '2024-04-18 06:21:41', '2024-04-18 06:21:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_03_23_090525_add_two_factor_columns_to_users_table', 1),
(5, '2024_03_23_090624_create_personal_access_tokens_table', 1),
(6, '2024_03_25_210527_create_categories_table', 2),
(7, '2024_03_27_095127_create_sub_categories_table', 3),
(12, '2024_03_29_131658_create_brands_table', 4),
(13, '2024_03_29_135938_create_units_table', 5),
(14, '2024_03_29_160709_create_products_table', 6),
(15, '2024_03_30_041641_create_product_images_table', 7),
(16, '2024_04_17_154822_create_customers_table', 8),
(18, '2024_04_17_155714_create_order_details_table', 10),
(19, '2024_04_17_155220_create_orders_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `courier_id` int(11) NOT NULL DEFAULT 0,
  `order_total` double NOT NULL,
  `tax_total` double NOT NULL,
  `shipping_total` double NOT NULL,
  `order_date` text NOT NULL,
  `order_timestamp` text NOT NULL,
  `order_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `delivery_address` text NOT NULL,
  `delivery_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `delivery_date` text DEFAULT NULL,
  `delivery_timestamp` text DEFAULT NULL,
  `payment_method` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `payment_date` text DEFAULT NULL,
  `payment_timestamp` text DEFAULT NULL,
  `transaction_id` text DEFAULT NULL,
  `currency` varchar(255) NOT NULL DEFAULT 'BDT',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `courier_id`, `order_total`, `tax_total`, `shipping_total`, `order_date`, `order_timestamp`, `order_status`, `delivery_address`, `delivery_status`, `delivery_date`, `delivery_timestamp`, `payment_method`, `payment_status`, `payment_date`, `payment_timestamp`, `transaction_id`, `currency`, `created_at`, `updated_at`) VALUES
(1, 2, 0, 2544, 319, 100, '2024-04-18', '1713398400', 'Cancel', 'dangapara, shaboil, birol', 'Cancel', NULL, NULL, 'cash', 'Cancel', NULL, NULL, NULL, 'BDT', '2024-04-18 06:01:16', '2024-04-19 06:27:29'),
(2, 2, 0, 2544, 319, 100, '2024-04-18', '1713398400', 'Pending', 'dangapara, shaboil, birol', 'Pending', NULL, NULL, 'cash', 'Pending', NULL, NULL, NULL, 'BDT', '2024-04-18 06:02:32', '2024-04-18 06:02:32'),
(3, 3, 0, 2343, 293, 100, '2024-04-18', '1713398400', 'Cancel', 'dangapara, shaboil, birol', 'Cancel', NULL, NULL, 'cash', 'Cancel', NULL, NULL, NULL, 'BDT', '2024-04-18 06:10:15', '2024-04-19 06:28:11'),
(4, 4, 0, 987, 116, 100, '2024-04-18', '1713398400', 'Complete', 'dangapara, shaboil', 'Complete', '2024-04-19', '1713484800', 'online', 'Complete', '2024-04-19', '1713484800', NULL, 'BDT', '2024-04-18 06:17:03', '2024-04-19 07:32:55'),
(5, 5, 0, 503, 53, 100, '2024-04-18', '1713398400', 'Pending', 'dangapara, shaboil, birol,dinajpur', 'Pending', NULL, NULL, 'cash', 'Pending', NULL, NULL, NULL, 'BDT', '2024-04-18 06:23:48', '2024-04-18 06:23:48'),
(6, 4, 0, 7880, 1015, 100, '2024-04-18', '1713398400', 'Pending', 'dhaka', 'Pending', NULL, NULL, 'cash', 'Pending', NULL, NULL, NULL, 'BDT', '2024-04-18 11:17:08', '2024-04-18 11:17:08'),
(7, 4, 0, 100, 0, 100, '2024-04-18', '1713398400', 'Pending', 'dinajpur', 'Pending', NULL, NULL, 'cash', 'Pending', NULL, NULL, NULL, 'BDT', '2024-04-18 11:17:37', '2024-04-18 11:17:37'),
(8, 4, 0, 100, 0, 100, '2024-04-18', '1713398400', 'Pending', 'chili', 'Pending', NULL, NULL, 'cash', 'Pending', NULL, NULL, NULL, 'BDT', '2024-04-18 11:23:33', '2024-04-18 11:23:33'),
(9, 4, 0, 100, 0, 100, '2024-04-18', '1713398400', 'Pending', 'bankok', 'Pending', NULL, NULL, 'cash', 'Pending', NULL, NULL, NULL, 'BDT', '2024-04-18 11:30:36', '2024-04-18 11:30:36'),
(10, 4, 0, 396, 39, 100, '2024-04-18', '1713398400', 'Pending', 'omjji', 'Pending', NULL, NULL, 'cash', 'Pending', NULL, NULL, NULL, 'BDT', '2024-04-18 11:39:12', '2024-04-18 11:39:12'),
(11, 2, 0, 2544, 319, 100, '2024-05-23', '1716422400', 'Pending', 'dhaka', 'Pending', NULL, NULL, 'cash', 'Pending', NULL, NULL, NULL, 'BDT', '2024-05-23 01:04:43', '2024-05-23 01:04:43'),
(12, 2, 0, 2544, 319, 100, '2024-05-23', '1716422400', 'Pending', 'dhaka', 'Pending', NULL, NULL, 'online', 'Pending', NULL, NULL, NULL, 'BDT', '2024-05-23 01:05:03', '2024-05-23 01:05:03'),
(13, 2, 0, 1811, 223, 100, '2024-05-23', '1716422400', 'Pending', 'dhaka', 'Pending', NULL, NULL, 'online', 'Pending', NULL, NULL, NULL, 'BDT', '2024-05-23 01:10:58', '2024-05-23 01:10:58'),
(14, 3, 0, 32289, 4199, 100, '2024-05-25', '1716595200', 'Pending', 'dhaka', 'Pending', NULL, NULL, 'cash', 'Pending', NULL, NULL, NULL, 'BDT', '2024-05-25 11:47:32', '2024-05-25 11:47:32');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_price` double NOT NULL,
  `product_qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_code`, `product_price`, `product_qty`, `created_at`, `updated_at`) VALUES
(1, 2, 6, 'Flexo Chair Off White', 'SKU: DPD05222', 2125, 1, '2024-04-18 06:02:32', '2024-04-18 06:02:32'),
(2, 3, 17, 'Shiny Stonemasonry Premium Quality Shoulder Crossbody Sling Bag for Women', 'SKU: COB00071', 1950, 1, '2024-04-18 06:10:15', '2024-04-18 06:10:15'),
(3, 4, 14, 'Funny Cuctus Speak Talk Sound Record Repeat Toy', 'SKU: AIG000022', 257, 3, '2024-04-18 06:17:04', '2024-04-18 06:17:04'),
(4, 5, 10, 'Jhatpot Plain Paratha 1600gm', 'SKU: DSP01057', 350, 1, '2024-04-18 06:23:48', '2024-04-18 06:23:48'),
(5, 6, 16, 'Leaves King 17 Inch Cabin Crew Trolley Luggage Bag (Black)', 'SKU: ETC00211', 6765, 1, '2024-04-18 11:17:08', '2024-04-18 11:17:08'),
(6, 10, 14, 'Funny Cuctus Speak Talk Sound Record Repeat Toy', 'SKU: AIG000022', 257, 1, '2024-04-18 11:39:12', '2024-04-18 11:39:12'),
(7, 11, 6, 'Flexo Chair Off White', 'SKU: DPD05222', 2125, 1, '2024-05-23 01:04:43', '2024-05-23 01:04:43'),
(8, 13, 19, 'G/S Feather Soft Compact Powder G30 Soft Sand', 'SKU: GEN00194', 1488, 1, '2024-05-23 01:10:58', '2024-05-23 01:10:58'),
(9, 14, 9, 'Oppo A78 8GB RAM 256GB ROM', 'SKU: OPP00031', 27990, 1, '2024-05-25 11:47:32', '2024-05-25 11:47:32');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `short_description` text DEFAULT NULL,
  `long_description` longtext DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `regular_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `stock_amount` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `featured_status` tinyint(4) NOT NULL DEFAULT 0,
  `trending_status` tinyint(4) NOT NULL DEFAULT 0,
  `sales_count` int(11) NOT NULL DEFAULT 0,
  `hit_count` int(11) NOT NULL DEFAULT 0,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `brand_id`, `unit_id`, `name`, `code`, `short_description`, `long_description`, `meta_title`, `meta_description`, `regular_price`, `selling_price`, `stock_amount`, `status`, `featured_status`, `trending_status`, `sales_count`, `hit_count`, `image`, `created_at`, `updated_at`) VALUES
(6, 4, 6, 2, 6, 'Flexo Chair Off White', 'SKU: DPD05222', 'Flexo Chair Off White\r\nItem code: 82349\r\nBrand: RFL Furniture\r\nMaterial: Polypropylene', '<p>Flexo Chair Off White<br />\r\nItem code: 82349<br />\r\nBrand: RFL Furniture<br />\r\nMaterial: Polypropylene<br />\r\nDimension (LxWxH): 51X46.5X83 cm<br />\r\nAttractive design<br />\r\nHigh-quality product<br />\r\nDurable product<br />\r\nOrigin: Bangladesh<br />\r\nColor: Off White (As given picture)</p>\r\n\r\n<p>Note: Product delivery duration may vary due to product availability in stock.<br />\r\nDisclaimer: The color of the physical product may slightly vary due to the deviation of lighting sources, photography or your device display settings.</p>', 'Category: Chair', 'Category: Chair\r\nSKU: DPD05222\r\nManufacturer: RFL Furniture\r\nSeller: DPL Distribution', 2500, 2125, 50, 1, 0, 0, 0, 0, 'upload/product-images/1712085477.webp', '2024-04-02 13:17:57', '2024-04-02 13:17:57'),
(7, 4, 7, 4, 6, 'Gazi Smiss Gas Stove - High Quality Tempered Glass FFD - 248C (- Use by LPG Cylinder) (Best Price)', 'SKU: GHA00202', 'Gazi Smiss Gas Stove - High Quality Tempered Glass FFD - 248C\r\nItem code: FFD - 248C\r\nBrand: Gazi\r\nGas Type: LPG\r\nProduct Type: Gazi Smiss', '<p>Gazi Smiss Gas Stove - High Quality Tempered Glass FFD - 248C<br />\r\nItem code: FFD - 248C<br />\r\nBrand: Gazi<br />\r\nGas Type: LPG<br />\r\nProduct Type: Gazi Smiss<br />\r\nPanel Type: High-Quality Tempered Glass<br />\r\nBurner: 130+130mm Brass Burner Cap<br />\r\nSwitch: Touch<br />\r\nPanel Thickness: 08-10mm<br />\r\nHeating Output: 4.2KW<br />\r\nAuto Ignition: 50,000 Times<br />\r\n4 Ears Square Cast Iron Pan Support<br />\r\nHigh-Quality Ignition with FFD<br />\r\nStainless Steel Tray<br />\r\nSmoke-Free Blue Flame<br />\r\nLow Gas Consumption<br />\r\nEuropean Burner Design<br />\r\nMultiple Safety Device<br />\r\nSuper Energy Saving Technology<br />\r\nColor: As given picture.</p>\r\n\r\n<p><strong>Warranty:</strong>&nbsp;One-year service warranty</p>\r\n\r\n<p><strong>Advance payment requirement:&nbsp;<br />\r\nInside Dhaka City 100% COD<br />\r\nOutside Dhaka City 10% advance needed for COD</strong><br />\r\n<br />\r\nNote: Product delivery duration may vary due to product availability in stock.<br />\r\n<br />\r\nDisclaimer: The color of the physical product may slightly vary due to the deviation of lighting sources, photography or your device display settings.</p>', 'Category: Gas Stoves & Gas Burner', 'Category: Gas Stoves & Gas Burner\r\nSKU: GHA00202\r\nManufacturer: Gazi\r\nSeller: Gazi Home Appliance', 26400, 21120, 10, 1, 0, 0, 0, 0, 'upload/product-images/1712085717.webp', '2024-04-02 13:21:57', '2024-04-02 13:21:57'),
(8, 5, 8, 5, 6, 'Vivo V30 5G 12GB/256GB', 'SKU: VVO00046', 'Category: Smartphone\r\nSKU: VVO00046\r\nManufacturer: vivo\r\nSeller: vivo', '<p>Vivo V30 5G 12GB/256GB<br />\r\nBrand: Vivo&nbsp;<br />\r\nItem code: V30<br />\r\nOperating System: Funtouch OS 13 (Global)<br />\r\nProcessor: Qualcomm Snapdragon&reg; 7 Gen 3 (4nm)<br />\r\nRAM: 12GB LPDDR4X<br />\r\nROM: 256GB UFS 2.2<br />\r\nSIM: 2G/3G/4G/5G<br />\r\nSIM: 2 nano SIMs | (Dual SIM Dual Standby)<br />\r\nScreen: 6.78 inch AMOLED 120Hz Display | Capacitive Multi-touch Screen<br />\r\nResolution: 2800&times;1260 | 2800 nits Local Peak Brightness<br />\r\nRear Camera: 50MP OIS + 50MP<br />\r\nCamera Front: 50MP AF<br />\r\nAperture: Front f/2.0 (50 MP), Rear f/1.88 (50 MP OIS), Rear f/2.0 (50 MP)<br />\r\nFlash: Rear flash with Aura Light<br />\r\nScene Modes: Front: High resolution, Live Photo, Night, Portrait, Photo, Video, Micro Movie, Dual View | Rear: High resolution, Live Photo, Night, Portrait, Photo, Video, Micro Movie, Dual View, Pano, Slo-mo, Time-lapse, Supermoon, Astro, Pro<br />\r\nBattery: 5000 mAh (TYP) | 80W Fast Charging<br />\r\nConnectivity: Wi-Fi Support 2.4GHz/5GHz| Bluetooth 5.4 | USB 2.0| GPS | OTG<br />\r\nSensors: Accelerometer | Ambient light sensor | Proximity Sensor | E-compass | Gyroscope sensor<br />\r\nSecurity: Fingerprint: In-Display Fingerprint Scanning<br />\r\nBox Content: Device | USB Cable | Power Adapter | Eject Tool | Phone Case | Protective Film (applied)<br />\r\nColor: (Noble Black, Peacock Green) As given picture.</p>\r\n\r\n<p><strong>Warranty: 1-Year Brand Warranty</strong></p>\r\n\r\n<p><strong>Advance payment requirement: 700 tk advance payment required to confirm COD order</strong></p>\r\n\r\n<p>For stock out issue if we fail to deliver then we will ensure 48-hour delivery</p>\r\n\r\n<p><strong>Note:<br />\r\n*Product delivery duration may vary due to product availability in stock.</strong><br />\r\nDisclaimer: The actual color of the physical product may slightly vary due to the deviation of lighting sources, photography or your device display settings.</p>\r\n\r\n<p>&nbsp;</p>', 'Vivo V30 5G 12GB/256GB Brand: Vivo', 'Vivo V30 5G 12GB/256GB\r\nBrand: Vivo \r\nItem code: V30\r\nOperating System: Funtouch OS 13 (Global)\r\nProcessor: Qualcomm Snapdragon® 7 Gen 3 (4nm)\r\nRAM: 12GB LPDDR4X\r\nROM: 256GB UFS 2.2', 69999, 59999, 1000, 1, 0, 0, 0, 0, 'upload/product-images/1713241375.jpg', '2024-04-15 22:22:55', '2024-04-15 22:22:55'),
(9, 5, 8, 6, 6, 'Oppo A78 8GB RAM 256GB ROM', 'SKU: OPP00031', 'Category: Smartphone\r\nSKU: OPP00031\r\nManufacturer: Oppo\r\nSeller: Oppo', '<p>Oppo A78 8GB RAM 256GB ROM<br />\r\nBrand: OPPO<br />\r\nModel:&nbsp;A78&nbsp;<br />\r\nOS: ColorOS 13 Based on Android 13<br />\r\nProcessor: Qualcomm&reg; Snapdragon&trade; 680 | 6 nm Processor<br />\r\nCPU: 8 Cores | Up To 2.2GHz<br />\r\nGPU: Adreno&trade; 610 @ 1115MHz<br />\r\nRAM: 8GB<br />\r\nRAM Type: LPDDR4X @ 2133MHz 2 x 16-bit<br />\r\nExtended RAM: Up to 8GB Ram Expansion<br />\r\nROM: 128GB<br />\r\nROM Specifications: UFS2.2 @ 2 Lanes Gear3<br />\r\nPhone Storage Card: Supported<br />\r\nSIM Card: Dual Nano SIM Card<br />\r\nNetwork: 2G/3G/4G<br />\r\nRear Camera: 50MP+2MP<br />\r\nFront Camera: 8MP<br />\r\nDisplay Size: 6.43&quot; AMOLED Punch Hole Display | 90Hz Refresh Rate<br />\r\nDisplay Resolution: 1080 x 2400 pixels (FHD+)<br />\r\nBattery: 5000mAh, non-removable | 67W SUPERVOOC Fast Charge<br />\r\nSpeaker: Dual Stereo Speaker<br />\r\nConnectivity: WLAN: Wi-Fi 5 (802.11ac), 802.11a/b/g/n, 2.4GHz, 5.1GHz, and 5.8GHz | Bluetooth 5.0 | GPS | USB Type-C | OTG Supported | 3.5mm Earphone Jack<br />\r\nDesign: Diamon Matrix Design with OPPO Glow<br />\r\nBiometrics: In-Display Fingerprint | Facial Recognition<br />\r\nSensors: Geomagnetic sensor | Proximity sensor | In-display proximity sensor | Accelerometer | Gravity sensor | Gyroscope | Step counting<br />\r\nColor: Black, Green (As given picture)</p>\r\n\r\n<p><strong>Warranty: 1 Year Brand Warranty</strong></p>\r\n\r\n<p><strong>Advance Payment Requirement: 10% advance payment required to confirm COD order</strong></p>', 'Category: Smartphone SKU: OPP00031 Manufacturer: Oppo Seller: Oppo', 'Oppo A78 8GB RAM 256GB ROM\r\nBrand: OPPO\r\nModel: A78 \r\nOS: ColorOS 13 Based on Android 13', 28990, 27990, 10000, 1, 0, 0, 0, 0, 'upload/product-images/1713242225.jpg', '2024-04-15 22:37:05', '2024-04-15 22:37:05'),
(10, 6, 10, 7, 2, 'Jhatpot Plain Paratha 1600gm', 'SKU: DSP01057', 'Category: Groceries\r\nSKU: DSP01057\r\nManufacturer: Jhatpot\r\nSeller: Daily Shopping', '<p><strong>Product details:</strong></p>\r\n\r\n<p>Jhatpot Plain Paratha 1600gm<br />\r\nBrand: Jhatpot<br />\r\nProduct type: Plain Paratha<br />\r\nItem code: 5500001584<br />\r\nNet Weight: 1600gm<br />\r\nQuantity: 20 pcs.</p>\r\n\r\n<p><strong>Product Delivery Conditions:</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<ul>\r\n		<li><strong>To add more items of&nbsp;<strong>Daily Shopping</strong>&nbsp;to your cart, please&nbsp;<strong><a href=\"https://www.othoba.com/daily-shopping\" target=\"_blank\">Click here.</a></strong></strong></li>\r\n		<li><strong>Return/cancellation</strong>: No change will be applicable which are already delivered to customer. If product quality or quantity problem found then customer can return/cancel their order on delivery time with presence of delivery person.</li>\r\n		<li><strong>Note:</strong>&nbsp;Product delivery duration may vary due to product availability in stock.</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><strong>Out of coverage area:&nbsp;</strong>Dhaka Cantonment Area ( ECB Chattar, Vashantec, Matikata), Uttara Sector 18, Khilkhet, Nikunjo, Sher E bangla Agriculture university, Sher-E-Bangla Nagar, Dhaka.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><strong>Rajshahi City Coverage Area:&nbsp;</strong>Rajshahi Sadar, Bowalia Thana</li>\r\n</ul>', 'Category: Groceries', 'Product details:\r\n\r\nJhatpot Plain Paratha 1600gm\r\nBrand: Jhatpot\r\nProduct type: Plain Paratha\r\nItem code: 5500001584\r\nNet Weight: 1600gm\r\nQuantity: 20 pcs.\r\n\r\nProduct Delivery Co', 370, 350, 100, 1, 0, 0, 0, 0, 'upload/product-images/1713242599.jpeg', '2024-04-15 22:43:19', '2024-04-15 22:43:19'),
(11, 6, 11, 8, 2, 'Mithai Platinum Box', 'SKU: TST00150', 'Category: Sweetmeat\r\nSKU: TST00150\r\nManufacturer: Mithai\r\nSeller: Mithai', '<p>Mithai Platinum Box<br />\r\nWeight:&nbsp;1200gm&plusmn;<br />\r\n<br />\r\n<strong>Item includes:</strong><br />\r\nHafsi Sondesh-4pcs<br />\r\nRoshgolla-4pcs<br />\r\nDry Lalmohone-4pcs<br />\r\nChocobarfi-5pcs<br />\r\nOrange Laddu-4pcs<br />\r\nKaju Barfi-5pcs</p>\r\n\r\n<p><strong><strong>Note:</strong></strong></p>\r\n\r\n<p><strong><strong><strong>*If customer orders more than 4 pcs of same product in an order, customer has to pay 50% amount in advance.</strong></strong><br />\r\n&nbsp;<strong><strong>*Any types of complaint regarding products, the customer has to inform within 2 hours after receiving the product.</strong></strong></strong></p>\r\n\r\n<p><strong>*Product delivery duration may vary due to product availability in stock.</strong></p>\r\n\r\n<p>N.B: To add other food items of Mithai to your cart, please&nbsp;<a href=\"https://www.othoba.com/mithai\">click here.</a></p>', 'Category: Sweetmeat', 'Item includes:\r\nHafsi Sondesh-4pcs\r\nRoshgolla-4pcs\r\nDry Lalmohone-4pcs\r\nChocobarfi-5pcs\r\nOrange Laddu-4pcs\r\nKaju Barfi-5pcs', 900, 720, 100, 1, 0, 0, 0, 0, 'upload/product-images/1713242832.jpeg', '2024-04-15 22:47:12', '2024-04-15 22:47:12'),
(12, 7, 12, 3, 6, 'SaRa Men\'s Regular Fit Panjabi', 'SKU: SLL01991', 'Category: Men\'s Clothing\r\nSKU: SLL01991\r\nManufacturer: SaRa Lifestyle\r\nSeller: SaRa Lifestyle Ltd', '<p>SaRa Men&#39;s Regular Fit Panjabi<br />\r\nItem code: MPJ323FMA<br />\r\nBrand : SaRa<br />\r\nFabric: Cotton<br />\r\nGender: Men&#39;s<br />\r\nType: Regular Fit<br />\r\nAuthentic Product, 100% Export Quality, Fashionable &amp; Comfortable<br />\r\nKeep your body always comfortable<br />\r\nUnique design, Best Production quality<br />\r\nFor an effortlessly trendy look<br />\r\nColor: Printed (As given picture)<br />\r\nSize: S, M, L, XL</p>\r\n\r\n<p><strong>Size Chart:</strong></p>\r\n\r\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td rowspan=\"2\"><strong>Size Chart:</strong></td>\r\n			<td colspan=\"2\"><strong>Measurement (Inch.)</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Length</td>\r\n			<td>Chest</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>S</strong></td>\r\n			<td>40</td>\r\n			<td>41</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>M</strong></td>\r\n			<td>41</td>\r\n			<td>43</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>L</strong></td>\r\n			<td>43</td>\r\n			<td>44</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>XL</strong></td>\r\n			<td>45</td>\r\n			<td>46</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>XXL</strong></td>\r\n			<td>46</td>\r\n			<td>47</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>N.B: Please check the size chart and select a size before placing order.<br />\r\n<strong>Product delivery duration may vary due to product availability in stock.</strong></p>\r\n\r\n<p>Disclaimer: The actual color of the physical product may slightly vary due to the deviation of lighting sources, photography or your device display settings.</p>', 'SaRa Men\'s Regular Fit Panjabi', 'SaRa Men\'s Regular Fit Panjabi\r\nItem code: MPJ323FMA\r\nBrand : SaRa\r\nFabric: Cotton\r\nGender: Men\'s\r\nType: Regular Fit', 2550, 2490, 100, 1, 0, 0, 0, 0, 'upload/product-images/1713243222.jpg', '2024-04-15 22:53:42', '2024-04-15 22:53:42'),
(13, 7, 13, 3, 6, 'Sadabahar Ready To Wear Kurti And Shalwar Comfortable Luxury Co-ords Set For Women', 'SKU: SIG00002', 'Category: Salwar Kameez\r\nSKU: SIG00002\r\nSeller: Signature Style', '<p>Sadabahar Ready To Wear Kurti And Shalwar Comfortable Luxury Co-ords Set For Women<br />\r\nSadabahar Kurti and Shalwar set for women<br />\r\nMade with comfortable and luxurious cotton material<br />\r\nReady to wear, no hassle of stitching required<br />\r\nPerfect for traditional occasions and daily wear<br />\r\nIncludes both Kurti and Shalwar for a complete look<br />\r\nOccasion: casual, party,&amp; festive<br />\r\nPerfect wear for formal occasions<br />\r\nEasy to wash<br />\r\nColor: (Mixed) As given picture.<br />\r\nSize: 38, 40, 42, 44.</p>\r\n\r\n<p>Note:&nbsp;<br />\r\n*&nbsp;Full delivery charge must be paid in advance via payment gateway to process the order.<br />\r\n* Product delivery duration may vary due to product availability in stock.</p>\r\n\r\n<p>Disclaimer: The actual color of the physical product may slightly vary due to the deviation of lighting sources, photography or your device display settings.</p>', 'Category: Salwar Kameez', 'Sadabahar Ready To Wear Kurti And Shalwar Comfortable Luxury Co-ords Set For Women\r\nSadabahar Kurti and Shalwar set for women\r\nMade with comfortable and luxurious cotton material\r\nReady to wear, no hassle of stitching required\r\nPerfect for traditional occasions and daily wear\r\nIncludes both Kurti and Shalwar for a complete look', 1620, 1037, 100, 1, 0, 0, 0, 0, 'upload/product-images/1713244712.jpg', '2024-04-15 23:18:32', '2024-04-15 23:18:32'),
(14, 8, 14, 9, 6, 'Funny Cuctus Speak Talk Sound Record Repeat Toy', 'SKU: AIG000022', 'Category: Indoor Toys\r\nSKU: AIG000022\r\nSeller: Aiguille Power Solution', '<p>This Funny Electric Cuctus &nbsp;Toy has different shapes , plus cute and funny expressions, which can decorate your desktop and relive &nbsp;your stress.</p>\r\n\r\n<p>Size : 32CM .<br />\r\nFilling Material : PP Cotton .<br />\r\nLighting +recording + Learning to speak (without Battery)</p>\r\n\r\n<p><strong>Advance payment requirement: Delivery Charge advance is required to process the order.</strong></p>\r\n\r\n<p><strong>Note:&nbsp;Product delivery duration may vary due to product availability in stock.</strong></p>\r\n\r\n<p>Disclaimer: The actual color of the physical product may slightly vary due to the deviation of lighting sources, photography or your device display settings.</p>\r\n\r\n<p>&nbsp;</p>', 'Category: Indoor Toys', 'This Funny Electric Cuctus  Toy has different shapes , plus cute and funny expressions, which can decorate your desktop and relive  your stress.\r\n\r\nSize : 32CM .\r\nFilling Material : PP Cotton .\r\nLighting +recording + Learning to speak (without Battery)', 300, 257, 100, 1, 0, 0, 0, 0, 'upload/product-images/1713245228.jpg', '2024-04-15 23:27:08', '2024-04-15 23:27:08'),
(15, 8, 15, 10, 5, 'Nestle Cerelac Rice & Mixed Vegetables From 6 Months 250g', 'SKU: BKC00061', 'Category: Baby Food\r\nSKU: BKC00061\r\nSeller: BacchaKaccha.com', '<ul>\r\n	<li>For Whom:&nbsp;From 6+ Months</li>\r\n	<li>Preparation:&nbsp;Pour 150ml lukewarm water into baby&#39;s bowl. Add 50g or 5 tablespoons of nestle cerelac. Stir until the cereal is smooth and feed with a clean spoon.</li>\r\n	<li>Weight:&nbsp;250g</li>\r\n	<li>Made In:&nbsp;Malaysia</li>\r\n	<li>Storage:&nbsp;Store in a cool dry place before the open. Do not keep the unfinished portion. Close the pack tightly after each use and store in a cool dry place.</li>\r\n	<li>PAO:&nbsp;Use&nbsp;within 30 days after opening.</li>\r\n</ul>\r\n\r\n<p><strong>Note:&nbsp;Product delivery duration may vary due to product availability in stock.</strong></p>\r\n\r\n<p>Disclaimer: The actual color of the physical product may slightly vary due to the deviation of lighting sources, photography or your device display settings.</p>\r\n\r\n<p><strong>Note:</strong><br />\r\nFor Outside Dhaka orders need to take full advance payment.</p>', 'Category: Baby Food', 'For Whom: From 6+ Months\r\nPreparation: Pour 150ml lukewarm water into baby\'s bowl. Add 50g or 5 tablespoons of nestle cerelac. Stir until the cereal is smooth and feed with a clean spoon.\r\nWeight: 250g\r\nMade In: Malaysia\r\nStorage: Store in a cool dry place before the open. Do not keep the unfinished portion. Close the pack tightly after each use and store in a cool dry place.\r\nPAO: Use within 30 days after opening.', 900, 630, 100, 1, 0, 0, 0, 0, 'upload/product-images/1713245594.jpeg', '2024-04-15 23:33:14', '2024-04-15 23:33:14'),
(16, 9, 16, 11, 6, 'Leaves King 17 Inch Cabin Crew Trolley Luggage Bag (Black)', 'SKU: ETC00211', 'Category: Luggage & Trolley\r\nSKU: ETC00211\r\nSeller: ETCT', '<p>Information<br />\r\nMaterial: Oxford Fabrics<br />\r\nCompartment Closure: Zipper<br />\r\nZipper Type: Polyester<br />\r\nPrint Or Pattern Type: Solid&nbsp;<br />\r\nHardness: Soft<br />\r\nDust Resistant: Yes<br />\r\nLockable: Yes<br />\r\nBack: Non-padded<br />\r\nExpandable: Yes<br />\r\nTrolley: 100% Interior</p>\r\n\r\n<p>Compartment<br />\r\nMain Chambers: 1<br />\r\nFront Chambers: 2<br />\r\nNumber Of Handles: 2<br />\r\nNumber Of Wheels: 4</p>\r\n\r\n<p>Dimension:<br />\r\nExternal Length: 17&quot;<br />\r\nExternal Height: 16&quot;<br />\r\nExternal Depth: 8&quot;</p>\r\n\r\n<p><strong>Note: Product delivery duration may vary due to product availability in stock.</strong></p>\r\n\r\n<p>Disclaimer: The actual color of the physical product may slightly vary due to the deviation of lighting sources, photography or your device display settings.</p>', 'Category: Luggage & Trolley', 'Information\r\nMaterial: Oxford Fabrics\r\nCompartment Closure: Zipper\r\nZipper Type: Polyester\r\nPrint Or Pattern Type: Solid \r\nHardness: Soft\r\nDust Resistant: Yes\r\nLockable: Yes\r\nBack: Non-padded\r\nExpandable: Yes\r\nTrolley: 100% Interior\r\n\r\nCompartment\r\nMain Chambers: 1\r\nFront Chambers: 2\r\nNumber Of Handles: 2\r\nNumber Of Wheels: 4\r\n\r\nDimension:\r\nExternal Length: 17\"\r\nExternal Height: 16\"\r\nExternal Depth: 8\"', 13530, 6765, 14000, 1, 0, 0, 0, 0, 'upload/product-images/1713245946.jpg', '2024-04-15 23:39:06', '2024-04-15 23:39:06'),
(17, 9, 17, 11, 6, 'Shiny Stonemasonry Premium Quality Shoulder Crossbody Sling Bag for Women', 'SKU: COB00071', 'Category: Handbags\r\nSKU: COB00071\r\nSeller: Cosmic Bags', '<p>Shiny Stonemasonry Premium Quality Shoulder Crossbody Sling Bag for Women<br />\r\nSize: 9/5 Inches<br />\r\nMaterial: PU Leather<br />\r\nCompartment: 2<br />\r\nOuter Pocket- 1&nbsp;<br />\r\nInbuilt Zipper Pocket- 1&nbsp;<br />\r\nItem Name : Shoulder/Crossbody Bag<br />\r\nGender: Girls&nbsp;<br />\r\nExcellent Quality Products&nbsp;<br />\r\nImported from China<br />\r\nColor : As Given Picture&nbsp;</p>\r\n\r\n<p><strong>Note: Product delivery duration may vary due to product availability in stock.</strong></p>\r\n\r\n<p>Disclaimer: The actual color of the physical product may slightly vary due to the deviation of lighting sources, photography or your device display settings.</p>', 'Category: Handbags', 'Shiny Stonemasonry Premium Quality Shoulder Crossbody Sling Bag for Women\r\nSize: 9/5 Inches\r\nMaterial: PU Leather\r\nCompartment: 2\r\nOuter Pocket- 1 \r\nInbuilt Zipper Pocket- 1 \r\nItem Name : Shoulder/Crossbody Bag\r\nGender: Girls \r\nExcellent Quality Products \r\nImported from China\r\nColor : As Given Picture', 2786, 1950, 10, 1, 0, 0, 0, 0, 'upload/product-images/1713246258.jpg', '2024-04-15 23:44:18', '2024-04-15 23:44:18'),
(18, 10, 18, 13, 6, 'Omron Hem 7121', 'SKU: AYS00012', 'Category: Personal Care Kits & Accessories\r\nSKU: AYS00012\r\nSeller: Ayesha surgical', '<p>Omron Hem 7121<br />\r\nItem code: 112<br />\r\nSimple one touch operation<br />\r\nLCD size (LxW) 59mm x 43mm<br />\r\nWeight (without battery): approx. 250g<br />\r\nBattery life: 1000 times (4 x AA batteries)<br />\r\nArm Cuff: Fit arm circumference (22-32cm)<br />\r\nDisplay: Systolic Blood Pressure, Diastolic Blood Pressure, Pulse Display<br />\r\n5 Years Official Warranty from Manufacturer (Omron)Fully automatic<br />\r\nPersonalized inflation for maximum comfort<br />\r\nQuick deflation releases valve for speedy measurement<br />\r\nStores Measurement | Omron Healthcare<br />\r\nStores 30 Measurements in Memory<br />\r\n5 years warranty<br />\r\nColor: (Mixed) As given picture.</p>\r\n\r\n<p><strong>Note:&nbsp;Product delivery duration may vary due to product availability in stock.</strong></p>\r\n\r\n<p>Disclaimer: The actual color of the physical product may slightly vary due to the deviation of lighting sources, photography or your device display settings.</p>', 'Category: Personal Care Kits & Accessories', 'Omron Hem 7121\r\nItem code: 112\r\nSimple one touch operation\r\nLCD size (LxW) 59mm x 43mm\r\nWeight (without battery): approx. 250g\r\nBattery life: 1000 times (4 x AA batteries)', 5000, 4499, 10, 1, 0, 0, 0, 0, 'upload/product-images/1713246475.jpeg', '2024-04-15 23:47:55', '2024-04-15 23:47:55'),
(19, 10, 19, 15, 6, 'G/S Feather Soft Compact Powder G30 Soft Sand', 'SKU: GEN00194', 'Category: Health & Beauty\r\nSKU: GEN00194\r\nManufacturer: Guerniss\r\nSeller: Guerniss', '<p>G/S Feather Soft Compact Powder G30 Soft Sand<br />\r\nBrand: Guerniss<br />\r\nItem code: G30 Soft Sand<br />\r\nProduct type: Face Powder<br />\r\nNet weight: 10gm<br />\r\nCountry of Origin: Hong Kong</p>\r\n\r\n<p>G/S Feather Soft Compact Powder holds makeup and doesn&rsquo;t stick to powder one second peeling matte. It gives a silky smooth all coverage with 3 shades. Key Claims &amp; Benefits: 1. Creating a matte finish flawless makeup is great. 2. Gives full coverage and long-lasting effect. 3. waterproof. 4. (Nylon-12) used as a bulking agent and opacifying agent. 5.(Alumina) prevent information and irritation. 6. Controls oils.</p>\r\n\r\n<p><strong>How To Use:</strong><br />\r\nLightly press the puff, take a small amount of powder, after taking the powder, lightly press the puff on the back of your hand, adjust the amount and apply makeup in a small amount by pressing.</p>\r\n\r\n<p><strong>Ingredients:</strong><br />\r\nMica, C177891, Synthetic wax, Dimethicone, Hydrogenated Sunflower oil, C177491, C177492, Teflon, C177499, Silica, Alumina, Methyl paraben, Propyl Paraben.</p>\r\n\r\n<p><strong>Note:&nbsp;Product delivery duration may vary due to product availability in stock.</strong></p>\r\n\r\n<p>Disclaimer: The actual color of the physical product may slightly vary due to the deviation of lighting sources, photography or your device display settings.</p>', 'Category: Health & Beauty', 'G/S Feather Soft Compact Powder G30 Soft Sand\r\nBrand: Guerniss\r\nItem code: G30 Soft Sand\r\nProduct type: Face Powder\r\nNet weight: 10gm\r\nCountry of Origin: Hong Kong', 2200, 1488, 40, 1, 0, 0, 0, 0, 'upload/product-images/1713246672.jpeg', '2024-04-15 23:51:12', '2024-04-17 01:42:47');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(14, 6, 'upload/product-other-images/380601.webp', '2024-04-02 13:17:57', '2024-04-02 13:17:57'),
(15, 7, 'upload/product-other-images/78561.jpeg', '2024-04-02 13:21:57', '2024-04-02 13:21:57'),
(16, 7, 'upload/product-other-images/224769.webp', '2024-04-02 13:21:57', '2024-04-02 13:21:57'),
(17, 8, 'upload/product-other-images/463862.jpg', '2024-04-15 22:22:55', '2024-04-15 22:22:55'),
(18, 8, 'upload/product-other-images/232306.jpg', '2024-04-15 22:22:55', '2024-04-15 22:22:55'),
(19, 8, 'upload/product-other-images/316620.jpg', '2024-04-15 22:22:55', '2024-04-15 22:22:55'),
(20, 8, 'upload/product-other-images/29101.jpg', '2024-04-15 22:22:55', '2024-04-15 22:22:55'),
(21, 9, 'upload/product-other-images/409059.jpg', '2024-04-15 22:37:05', '2024-04-15 22:37:05'),
(22, 9, 'upload/product-other-images/201513.jpg', '2024-04-15 22:37:05', '2024-04-15 22:37:05'),
(23, 9, 'upload/product-other-images/59779.jpg', '2024-04-15 22:37:05', '2024-04-15 22:37:05'),
(24, 9, 'upload/product-other-images/126575.jpg', '2024-04-15 22:37:05', '2024-04-15 22:37:05'),
(25, 9, 'upload/product-other-images/408504.jpg', '2024-04-15 22:37:05', '2024-04-15 22:37:05'),
(26, 10, 'upload/product-other-images/209450.jpeg', '2024-04-15 22:43:19', '2024-04-15 22:43:19'),
(27, 11, 'upload/product-other-images/15472.jpeg', '2024-04-15 22:47:12', '2024-04-15 22:47:12'),
(28, 11, 'upload/product-other-images/410143.jpeg', '2024-04-15 22:47:12', '2024-04-15 22:47:12'),
(29, 12, 'upload/product-other-images/473420.jpg', '2024-04-15 22:53:42', '2024-04-15 22:53:42'),
(30, 12, 'upload/product-other-images/389966.jpg', '2024-04-15 22:53:42', '2024-04-15 22:53:42'),
(31, 12, 'upload/product-other-images/469035.jpg', '2024-04-15 22:53:43', '2024-04-15 22:53:43'),
(32, 13, 'upload/product-other-images/218785.jpg', '2024-04-15 23:18:32', '2024-04-15 23:18:32'),
(33, 13, 'upload/product-other-images/115556.jpg', '2024-04-15 23:18:32', '2024-04-15 23:18:32'),
(34, 13, 'upload/product-other-images/342373.jpg', '2024-04-15 23:18:32', '2024-04-15 23:18:32'),
(35, 13, 'upload/product-other-images/485721.jpg', '2024-04-15 23:18:32', '2024-04-15 23:18:32'),
(36, 13, 'upload/product-other-images/420724.jpg', '2024-04-15 23:18:32', '2024-04-15 23:18:32'),
(37, 14, 'upload/product-other-images/499632.jpg', '2024-04-15 23:27:08', '2024-04-15 23:27:08'),
(38, 14, 'upload/product-other-images/417371.jpg', '2024-04-15 23:27:08', '2024-04-15 23:27:08'),
(39, 14, 'upload/product-other-images/242736.jpg', '2024-04-15 23:27:08', '2024-04-15 23:27:08'),
(40, 15, 'upload/product-other-images/37599.jpeg', '2024-04-15 23:33:14', '2024-04-15 23:33:14'),
(41, 16, 'upload/product-other-images/345841.jpg', '2024-04-15 23:39:06', '2024-04-15 23:39:06'),
(42, 16, 'upload/product-other-images/219039.jpg', '2024-04-15 23:39:06', '2024-04-15 23:39:06'),
(43, 16, 'upload/product-other-images/311969.jpg', '2024-04-15 23:39:06', '2024-04-15 23:39:06'),
(44, 17, 'upload/product-other-images/480649.jpg', '2024-04-15 23:44:18', '2024-04-15 23:44:18'),
(45, 17, 'upload/product-other-images/498719.jpg', '2024-04-15 23:44:18', '2024-04-15 23:44:18'),
(46, 17, 'upload/product-other-images/275627.jpg', '2024-04-15 23:44:18', '2024-04-15 23:44:18'),
(47, 17, 'upload/product-other-images/75689.jpg', '2024-04-15 23:44:18', '2024-04-15 23:44:18'),
(48, 18, 'upload/product-other-images/148303.jpeg', '2024-04-15 23:47:55', '2024-04-15 23:47:55'),
(49, 19, 'upload/product-other-images/318705.jpeg', '2024-04-15 23:51:12', '2024-04-15 23:51:12');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('28OwmdVyA4dH2CmSRak4ZmUwYyyYuoRpMfbry3HF', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo5OntzOjY6Il90b2tlbiI7czo0MDoiblZSVkRmM2s3dGI2MDYwUmxFR1FQZHREQXhNME9WeGhEMzB0NThKRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9vcmRlci9pbnZvaWNlLzMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjQ6ImNhcnQiO2E6MTp7czo3OiJkZWZhdWx0IjtPOjI5OiJJbGx1bWluYXRlXFN1cHBvcnRcQ29sbGVjdGlvbiI6Mjp7czo4OiIAKgBpdGVtcyI7YTowOnt9czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO319czozOiJzdW0iO2Q6Mjc5OTA7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMiRBeElXOHl0RHBMVFIveGhUZjU4U2lldXZyTEhGQ0hUZDJ5c0FiU0xRam1KSVFNOGpkcmQyRyI7czoxMToiY3VzdG9tZXJfaWQiO2k6MztzOjEzOiJjdXN0b21lcl9uYW1lIjtzOjE3OiJNZC5TaGFraXJ1bCBJc2xhbSI7fQ==', 1716659332),
('2X31U6UREvqzEdpfHWRP95oLuadWLSny5gumrwTd', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiazdPZXhXejI1TGdTcjJUWEN2RzhoY2pON3l2OFJYZUpIY2s3Mm15USI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTMxOiJodHRwOi8vbG9jYWxob3N0L3Byb2R1Y3QlMjBzYXZlJTIwU3VjY2Vzc2Z1bGx5L1Byb2plY3QlMjBjb21wbGV0ZSUyMHRpbGwlMjBwcm9kdWN0JTIwc3VjY2Vzc2Z1bGx5JTIwb3JkZXIvZW9tbS1iYXRjaC0xMC10YXNrL3B1YmxpYyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1716657681);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(6, 4, 'Home Furniture', 'Furniture includes objects such as tables, chairs, beds, desks, dressers, and cupboards. These objects are usually kept in a house or other building to make it suitable or comfortable for living or working in.', 'upload/sub-category-images/1712081432.jpg', 1, '2024-04-02 12:10:32', '2024-04-02 12:10:32'),
(7, 4, 'Kitchen & Dining', 'বাংলায়\r\nIn English\r\nThe Kitchen & Dining Furniture segment covers diferent movable objects designed for kitchen and dining rooms. These objects mainly meet people\'s needs for eating, preparing food, or food storage and includes dining tables, baker\'s racks, kitchen islands/carts, pantry storage, and various types of kitchenware.', 'upload/sub-category-images/1712081689.jpg', 1, '2024-04-02 12:14:49', '2024-04-02 12:14:49'),
(8, 5, 'Smartphone', 'A smartphone is a mobile device that combines the functionality of a traditional mobile phone with advanced computing capabilities.', 'upload/sub-category-images/1712081890.jpg', 1, '2024-04-02 12:18:10', '2024-04-02 12:18:10'),
(9, 5, 'Home-Appliances', 'Refrigerator: used for preserving food and beverages by maintaining a cool temperature.\r\nOven: used for cooking and baking food.\r\nAir fryer: used to bake food rapidly with high-temp forced air.\r\nMicrowave: used for heating and cooking food quickly.', 'upload/sub-category-images/1712082004.jpg', 1, '2024-04-02 12:20:04', '2024-04-02 12:20:04'),
(10, 6, 'Groceries', 'Major appliances, also known as white goods, comprise major household appliances and may include: air conditioners, dishwashers, clothes dryers, drying cabinets, freezers, refrigerators, kitchen stoves, water heaters, washing machines, trash compactors, microwave ovens, and induction cookers.', 'upload/sub-category-images/1712082171.jpg', 1, '2024-04-02 12:22:51', '2024-04-02 12:22:51'),
(11, 6, 'BREAD & BAKERY', 'Bread bakery businesses are bakeries that specialize in making and selling different breads. Most offer a variety of artisanal and/or sandwich breads, which respectively account for 30.2 and 17.8 percent of bread sales in the country.', 'upload/sub-category-images/1712082369.jpg', 1, '2024-04-02 12:26:09', '2024-04-02 12:26:09'),
(12, 7, 'BOY\'S CLOTHING', 'Choose High-Quality, Durable Materials. ...\r\nReach For 100% Cotton Or 100% Organic Cotton. ...\r\nSearch For Clothes That Offer Simplicity In Fit. ...\r\nThink Quality Over Quantity. ...\r\nRemember That Hand-Me-Downs Are Awesome.', 'upload/sub-category-images/1712082634.jpg', 1, '2024-04-02 12:30:34', '2024-04-02 12:30:34'),
(13, 7, 'GIRL\'S CLOTHING', 'People tend to associate bright colors with kids and more subdued colors with adults. If you\'re not ready to completely give up bright colors, try pairing them with browns, blacks, greys or whites. No need to toss out the bright colored tees from your youth just yet.', 'upload/sub-category-images/1712082844.jpg', 1, '2024-04-02 12:34:04', '2024-04-02 12:34:04'),
(14, 7, 'Toys', 'They have been written about in some of the oldest literature. Toys excavated from the Indus valley civilization (3000-1500 BCE) include small carts, whistles shaped like birds, and toy monkeys, which could slide down a string. The earliest toys are made from materials found in nature, such as rocks, sticks, and clay.', 'upload/sub-category-images/1712083025.jpg', 1, '2024-04-02 12:37:05', '2024-04-02 12:37:05'),
(15, 8, 'BABY FOOD', 'During your baby\'s first 3 months, breast milk or formula will provide all the nutrition needed. Doctors recommend waiting until your baby is about 6 months old to start solid foods. Some babies may be ready for solids sooner than 6 months, but wait until your baby is at least 4 months old.', 'upload/sub-category-images/1712083150.jpg', 1, '2024-04-02 12:39:10', '2024-04-02 12:39:10'),
(16, 9, 'LUGGAGE & TROLLEY', 'oft-sided suitcases usually have an additional zipper which makes them expandable. is that trolley is (australian|new zealand|british) a cart or shopping cart while suitcase is large (usually rectangular) piece of luggage used for carrying clothes, and sometimes suits, when travelling.', 'upload/sub-category-images/1712083275.jpg', 1, '2024-04-02 12:41:15', '2024-04-02 12:41:15'),
(17, 9, 'Women\'s Bag', 'Explore the Burberry bag collection for women. Shop signature styles, from leather totes and backpacks to crossbody bags. Free delivery is available.', 'upload/sub-category-images/1712083424.jpg', 1, '2024-04-02 12:43:44', '2024-04-02 12:43:44'),
(18, 10, 'Personal Care Kits & Accessories', 'Personal Care Kits & Accessories', 'upload/sub-category-images/1712083595.jpeg', 1, '2024-04-02 12:46:35', '2024-04-02 12:46:35'),
(19, 10, 'Skin Care', 'Skin Care', 'upload/sub-category-images/1712083850.jpg', 1, '2024-04-02 12:50:50', '2024-04-02 12:50:50');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` text NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `code`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, '1 Box', '001B', '1 Box = 20 Piece', 1, '2024-04-02 13:12:26', '2024-04-02 13:12:26'),
(4, '1 Dozen', '0012D', '1 Dozen = 12 Piece', 1, '2024-04-02 13:13:07', '2024-04-02 13:13:07'),
(5, '1 Pound', '0013P', '1 Pound = 500Gm', 1, '2024-04-02 13:13:33', '2024-04-02 13:13:33'),
(6, 'Piece', '0014P', 'Piece = 1', 1, '2024-04-02 13:14:07', '2024-04-02 13:14:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin@gmail.com', NULL, '$2y$12$AxIW8ytDpLTR/xhTf58SieuvrLHFCHTd2ysAbSLQjmJIQM8jdrd2G', NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-23 03:47:49', '2024-03-23 03:47:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`),
  ADD UNIQUE KEY `customers_mobile_unique` (`mobile`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
