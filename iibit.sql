-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2019 at 02:59 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iibit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`fname`, `lname`, `email`, `password`) VALUES
('john', 'doe', 'johndoe@gmail.com', 'abcd1234');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `jobNo` varchar(10) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `town` varchar(40) NOT NULL,
  `street` varchar(40) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `jobNo`, `fname`, `lname`, `town`, `street`, `file`) VALUES
(1, 'gr8140', 'samuel', 'kiarie', 'sydney', 'muks', '3383325_459065197_rbasne10assignment1.doc');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bookingId` int(11) NOT NULL,
  `roomNo` varchar(10) NOT NULL,
  `building` varchar(40) NOT NULL,
  `s_email` varchar(40) NOT NULL,
  `entrace_date` varchar(20) NOT NULL,
  `exit_date` varchar(20) NOT NULL,
  `b_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bookingId`, `roomNo`, `building`, `s_email`, `entrace_date`, `exit_date`, `b_date`) VALUES
(1, 'bl1001', 'block b', 'jcob@gmail.com', '12/12/12', '12/12/12', '2019-08-09 08:35:16'),
(2, 'bl1002', 'block b', 'jcob@gmail.com', '2019-08-09', '2019-08-15', '2019-08-10 07:46:50'),
(3, 'bl1002', 'block b', 'jcob@gmail.com', '2019-08-07', '2019-07-30', '2019-08-10 07:58:09'),
(4, 'bl1002', 'block b', 'jcob@gmail.com', '2019-08-13', '2019-08-20', '2019-08-10 07:59:48'),
(5, 'bl1002', 'block b', 'jcob@gmail.com', '2019-08-21', '2019-08-07', '2019-08-10 08:00:47'),
(6, 'bl1002', 'block b', 'jcob@gmail.com', '2019-08-06', '2019-07-30', '2019-08-10 08:01:08'),
(7, 'bl1002', 'block b', 'jcob@gmail.com', '2019-08-12', '2019-08-22', '2019-08-10 08:12:08'),
(8, 'bl1002', 'block b', 'jcob@gmail.com', '2019-08-12', '2019-08-14', '2019-08-10 08:12:22'),
(9, 'bl1002', 'block b', 'jcob@gmail.com', '2019-08-21', '2019-08-29', '2019-08-10 08:12:33'),
(10, 'bl1002', 'block b', 'jcob@gmail.com', '2019-08-07', '2019-08-21', '2019-08-10 08:14:05'),
(11, 'bl1002', 'block b', 'jcob@gmail.com', '2019-08-11', '2019-08-17', '2019-08-10 08:14:46'),
(12, 'bl1002', 'block b', 'jcob@gmail.com', '2019-08-14', '2019-08-30', '2019-08-11 23:51:53');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'Sports'),
(2, 'Politics'),
(3, 'social'),
(4, 'weather'),
(5, 'Education');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `msg` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `name`, `msg`, `time`) VALUES
(1, 'sam', 'hi', '2019-06-01 11:00:11'),
(2, 'stella', 'hi too', '2019-06-01 11:07:39'),
(3, 'sam', 'hi', '2019-06-01 11:14:01'),
(9, 'dd', 'dfd', '2019-06-01 11:20:41'),
(13, 'samuel', 'hi', '2019-06-01 11:29:55'),
(14, 'jane', 'am fine', '2019-06-01 11:35:12'),
(15, 'kiach', 'welcome', '2019-06-01 11:35:47'),
(16, 'sam', 'hi', '2019-06-01 20:24:16'),
(17, 'john', 'hi', '2019-08-09 08:03:52'),
(18, 'test', 'mambo', '2019-08-09 08:04:17'),
(19, 'sam', 'poa', '2019-08-09 08:04:25');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `eventName` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `eventDate` varchar(20) NOT NULL,
  `town` varchar(40) NOT NULL,
  `venue` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `eventName`, `description`, `eventDate`, `town`, `venue`, `price`, `image`) VALUES
(5, 'Culture and community events', 'With a jam-packed calendar of culture and community celebrations, thereâ€™s an Australian event around every corner. These events bring everyone together to celebrate the weird, the wonderful, and of course, the uniquely Australian. The  festival culminates in a colourful and happily chaotic street parade, while Alice Spring\'s  embraces outback fun with a quirky sailing regatta on a dry river bed. Aboriginal culture comes alive through the  of its people. Immerse yourself in the living cultural traditions of the Dreaming and experience the spirit and variety of Indigenous Australia at its celebrations. No matter when you visit, you can be sure to find Aussies celebrating culture and community.', '08/12/2019', 'sydney', 'National Museum', 0, 'voice.png'),
(7, 'Music festivals and live shows', 'Australian events are all about unforgettable experiences and easygoing atmospheres, and the countryâ€™s concerts and music festivals are no exception. Whether youâ€™re into indie, pop, bass, blues, rock or classical, thereâ€™s an Australian music festival to fit your fancy. Head to WOMADelaide in Adelaide for seven stages of world music performances, or sway along at the , Australiaâ€™s largest blues and roots festival. Come see whatâ€™s on at Australian music festivals all year round.', '2019-08-30', 'Sydney', 'University of Melbourne', 0, 'Female-adult-student-CE-30711295-Â©-Andres-Rodriguez.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `uploads` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `uploads`) VALUES
(1, 'Female-adult-student-CE-30711295-Â©-Andres-Rodriguez.jpg'),
(2, 'studentslibrary_al_2546171b.jpg'),
(3, '10066902-3x2-700x467.jpg'),
(4, '11343860-3x2-700x467.jpg'),
(5, 'slider1.jpg'),
(6, 'Hollywood-Hotel-Standard-Deluxe-Room-1-King-Bed-5a5634e85e465.jpg'),
(7, 'design.png'),
(8, 'master-bedroom-retreat-decor-pad.jpg'),
(9, 'maxresdefault.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobId` varchar(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `company` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL,
  `town` varchar(40) NOT NULL,
  `experience` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobId`, `title`, `position`, `description`, `company`, `link`, `town`, `experience`, `date_created`) VALUES
('De6534', 'Lecturer or Senior Lecturer, Strategy and/or Inter', 'Lecturer or Senior Lecturer', '			The Deakin Business School (DBS) comprises six academic departments that span the full range of business disciplines: Accounting, Economics, Finance, Information Systems & Business Analytics, Management, and Marketing. The Facultyâ€™s teaching aims to be innovative utilising face-to-face teaching and on-line technologies to ensure a high level of flexibility for the diverse learning needs of our students and to prepare our graduates for careers of the future. Our academic staff are engaged in both pure and applied research across the business and law disciplines and are focused on issues which are of relevance to government, business and community organisations.\r\n\r\nThe Department of Management within the DBS comprises 60 faculty with education and research strengths that span several core sub-disciplines including strategy, international business and entrepreneurship. An exciting opportunity now exists for an early or mid career academic to join the Department as Assistant Professor* (Lecturer or Senior Lecturer), where, as the successful candidate you will contribute to the Departmentâ€™s teaching programs at both the undergraduate and post-graduate levels whilst also undertaking research and publishing in an area relevant to Strategy and/or International Entrepreneurship.\r\n\r\nThis is a full-time, level B or level C continuing position to be based at either our Melbourne Burwood or Geelong Waterfront campus and salary is in the range $97,398-$136,559 p.a + 17% superannuation commensurate with experience, qualifications and research track record.\r\n\r\nAppropriate relocation and/or immigration support will be offered to interstate/international candidates.				\r\n						', 'Deakin University', 'https://uniroles.com.au/display-job/15712/', 'Sydney', '5', '2019-08-11 08:38:06');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `created_date`) VALUES
(4, 'MP Zuleikha Hassan impressed with Parliamentâ€™s â€˜new crecheâ€™', 'Lawmaker Zuleika Hassan, who was evicted from Parliament on Wednesday for taking her baby into the chamber, denies that a crÃ¨che had been made available for MPsâ€™ children.\r\n\r\nAfter the Kwale Woman Representativeâ€™s eviction, the deputy speaker had said there was a facility for mothers working at Parliament to nurse their babies across the road from the main building.\r\n\r\n\'\'I can tell you for free this place was not open to us female MPs before,â€ Ms Hassan told the BBC when she visited the nursery.\r\n\r\n\"I know that some leaders are trying to embarrass me in Parliament by saying that there was a room before, but why didn\'t I know about it?\r\n\r\n\"No other member of Parliament or the staff of Parliament who has had a baby knew about that room.\"', 'during-your-stay-at-women-and-infants.jpg', '2019-08-10 09:02:38'),
(5, 'Husband charged with murder of Australian United Nations worker Jennifer Downes in Fiji', 'The husband of an Australian woman killed in Fiji last month has been charged with her murder, according to local media reports.\r\nennifer Ann Downes, who had worked in the Fijian capital of Suva for the United Nations World Food Programme since 2017, was allegedly murdered in a domestic violence incident.\r\n\r\nLocal media reported that her husband Henry Lasuka John, an Australian national originally from Congo, was hospitalised for several weeks after allegedly attempting suicide following the incident.\r\n\r\nHe was subsequently questioned by police and has now been charged with one count of murder, after a post-mortem conducted on July 25 found murder to be the cause of Ms Downes\' death.\r\n\r\nHe will appear in the Suva Magistrates Court tomorrow.\r\n\"We are heartbroken at the loss of our daughter,\" her father Chris Downes told the Fiji Sun newspaper last month.\r\n\r\n\"She was a caring and vibrant logistician working in the South Pacific region. Through her humanitarian work over almost 20 years around the world, she made many friends who are all grieving at this loss.\"\r\n\r\nMs Downes and her husband have three children under the age of five and recently separated.\r\n\r\n\"Please be assured that our three lovely grandchildren are with us and safe,\" Mr Downes told the Fiji Sun.\r\n\r\n\"The Australian High Commission, the UN and the Fiji Police are being so helpful and giving us much assistance.\"\r\n\r\nDuring a July visit to Fiji, Australian Foreign Minister Marise Payne said: \"I am deeply saddened by the tragic death of Australian woman Jennifer Downes in Fiji\".\r\n\r\n\"The Australian Government has zero-tolerance for violence against women and their children, both at home and abroad.\"\r\n\r\n\"We are deeply committed to working with Pacific governments, women\'s organisations and communities to end violence against women and children.\"', '11343860-3x2-700x467.jpg', '2019-08-11 07:53:32'),
(6, 'Climate change to be the focus as Scott Morrison attends Pacific Islands Forum', 'Scott Morrison\'s pledge to \"step up\" relations with the Pacific will be put to the test this coming week, with the Prime Minister heading to Tuvalu for talks with Pacific leaders.\r\nThe Pacific Islands Forum (PIF) Leaders Meeting begins on Monday in the Tuvaluan capital Funafuti, a small atoll 4,000km north-east of Sydney, with Mr Morrison arriving on Wednesday.\r\n\r\nClimate change will be the central issue of the week-long meeting, along with economic development, maritime security and marine pollution.\r\n\r\nPacific nations have been increasingly vocal in the lead-up to the meeting in their demands for Australia to take stronger action on climate change.	', '10066902-3x2-700x467.jpg', '2019-08-11 08:00:08');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `phone` varchar(15) NOT NULL,
  `region` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `title`, `description`, `price`, `phone`, `region`, `place`, `image`) VALUES
(1, 'Electronics', 'Laptop, dell xp1234', '500 Gb HDD, 8GB RAM, 2gb nvidia Graphic cards, 3.0GHZ i5 processor', 230, '0729622978', 'sydney', 'oartlands', 'article.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `email`, `phone`, `password`) VALUES
(2, 'samuel', 'kiarie', 'ms@gmail.com', '', '2323132'),
(3, 'sam', 'kiach', 'ms@gmail.com', '123487878', '12323'),
(4, 'jacob', 'KImeu', 'jcob@gmail.com', '0729622978', 'abcd1234'),
(5, 'peter', 'gikaru', 'p@gmail.com', '074572345', ''),
(6, 'peter', 'gikaru', 'p@gmail.com', '074572345', '12345'),
(7, 'john', 'gichuki', 'john@gmail.com', '0729622978', ''),
(8, 'geish', 'mesh', 'jmugeka1@gmail.com', '0725084625', '12345'),
(9, 'geish', 'mesh', 'jmugeka1@gmail.com', '0725084625', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `roomNo` varchar(6) NOT NULL,
  `building` varchar(30) NOT NULL,
  `town` varchar(40) NOT NULL,
  `location` varchar(255) NOT NULL,
  `rentalPrice` int(11) NOT NULL,
  `roomType` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`roomNo`, `building`, `town`, `location`, `rentalPrice`, `roomType`, `description`, `image`, `status`) VALUES
('bl1002', 'block b', 'sydney', 'eagle vale', 300, 'single', '2 bedroom, 2 bathroom, status:finished', 'habitacion-doble-eibarrooms-570x470.jpg', 'booked'),
('bl2300', 'block b', 'sydney', '', 300, 'single', '', 'Hotels-Accommodations-11.jpg', 'available'),
('SP1350', 'SPRING VALLEY', 'sydney', 'Oatlands', 320, '3 bedrooms', 'wifi connection', 'rooms-101-charles-wirth-overview.jpg', 'available'),
('Su9742', 'Sunset Apartment', 'Sydney', 'southland', 2500, 'single', 'WIFI CONNECTION, Beach view', 'suitelife.jpg', 'available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bookingId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`roomNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
