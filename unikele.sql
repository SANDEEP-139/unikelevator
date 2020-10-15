-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2019 at 11:55 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unikele`
--

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` int(11) NOT NULL,
  `pagename` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `m_keyword` text,
  `m_desc` text,
  `heading` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(150) DEFAULT NULL,
  `status` enum('Yes','No') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL,
  `type` varchar(10) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `message` text,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `type`, `name`, `email`, `phone`, `message`, `date`) VALUES
(1, 'Tiles', 'Test', 'test@gmail.com', '9879879878', 'Hello', '2019-07-25'),
(2, 'Tiles', 'Test', 'test2@gmail.com', '9875641328', 'Heloo', '2019-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `mst_client`
--

CREATE TABLE `mst_client` (
  `id` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `client` varchar(255) DEFAULT NULL,
  `priority` varchar(10) DEFAULT NULL,
  `status` enum('Yes','No') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_client`
--

INSERT INTO `mst_client` (`id`, `image`, `client`, `priority`, `status`) VALUES
(1, '3.jpg', 'Indian Oil', '1', 'Yes'),
(2, '5.jpg', '', '', 'Yes'),
(3, '7.jpg', '', '', 'Yes'),
(4, '6.jpg', '', '', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `mst_login`
--

CREATE TABLE `mst_login` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `user_pass` varchar(255) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_login`
--

INSERT INTO `mst_login` (`id`, `user_id`, `user_pass`, `type`) VALUES
(1, 'Admin', '827ccb0eea8a706c4c34a16891f84e7b', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mst_slider`
--

CREATE TABLE `mst_slider` (
  `id` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `priority` varchar(10) DEFAULT NULL,
  `status` enum('Yes','No') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_slider`
--

INSERT INTO `mst_slider` (`id`, `image`, `priority`, `status`) VALUES
(1, 'slide-1.jpg', '1', 'Yes'),
(2, 'slide-2.jpg', '2', 'Yes'),
(3, 'slide-3.jpg', '3', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `priority` varchar(10) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `metakeyword` text,
  `metadesc` text,
  `url` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `description` text,
  `status` enum('Yes','No') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `priority`, `title`, `metakeyword`, `metadesc`, `url`, `heading`, `description`, `status`) VALUES
(1, '1', 'Passenger Elevators', 'Passenger Elevators in lucknow', 'Passenger Elevators in lucknow', 'passenger-elevators-in-lucknow', 'Passenger Elevators ', '<p>Uniq elevators company passenger elevator employ advanced technology in vertical transportation. Passenger Lift is used to carry a maximum of 26 passengers. We provide geared, gearless and machine room less Elevator. The cabin, car door and landing door options are given below</p>', 'Yes'),
(2, '2', 'Stretcher Elevators\r\n', 'Stretcher Elevators\r\n', 'Stretcher Elevators\r\n', 'stretcher-elevators', 'Stretcher Elevators', '<p>The medical care infrastructure is increasing day by day. Hospitals are facing emergencies every now and then. Shifting of patients to operation theatres or post operative wards always demands less time for commutation. Techno Vertical transportation system for hospitals have special features such as smooth and jerk less traveling, economically low power consumption, smooth and comfortable travel, accurate stoppage, emergency control features and above all, reliability with safety. The car dimensions are as per the Indian Standard requirements for Hospital lifts. The sturdy floors and interiors ensure convenience and longevity. Vertical side panels, full height, are fabricated from steel and are externally bolted to provide full interior surface with ideal strength and rigidity.</p>', 'Yes'),
(4, '3', 'Car Elevators\r\n', 'Car Elevators\r\n', 'Car Elevators\r\n', 'car-elevators', 'Car Elevators', '<p>The Car-Lifts created by Harding Steel can be used in home garages, commercial parking lots, and office parking or any place where parking space is limited. The system hides cars entirely underground and allows independent car access without moving one car to access another. These inground, or subterranean parking systems are the original hydraulic scissor lift designed for parking and have been carefully engineered for independent access to vehicles in private homes or multi-family residences where space is valuable. This underground parking stacker is also used to store collector cars below ground for the best in security and independent access to each vehicle The Car-Lifts and SUV Lifts created by Harding Steel can be used in home garages, commercial parking lots, and office parking or any place where parking space is limited. The parking system hides cars entirely underground and allows independent car access without moving one car to access another. These inground, or subterranean parking systems are the original hydraulic scissor lift designed for parking and have been carefully engineered for independent access to vehicles in private homes or multi-family residences where space is valuable. This underground parking stacker is also used to store collector cars below ground for the best in security and independent access to each vehicle.</p>', 'Yes'),
(5, '4', 'Goods Elevators', 'Goods Elevators', 'Goods Elevators', 'goods-elevators', 'Goods Elevators', '<p>Uniq elevators company is well known manufacturer and supplier of Goods Lifting platforms which are absolutely safe and easier to use. These Goods Lifts are used among an uncountable number of reputed customers owing to their high performance and cost effectiveness. These Goods Lifts are designed and developed by highly qualified engineers and personnel who have complete knowledge of the latest industry requirements.</p>', 'Yes'),
(6, '5', 'Home Elevators', 'Home Elevators', 'Home Elevators', 'home-elevators', 'Home Elevators', '<p>Home elevators are often permitted to be of lower cost and complexity than full commercial elevators. Uniq elevators company elevators provide unique design characteristics suited for home furnishings, such as hinged wooden shaft-access doors or aluminum panel door rather than the typical metal sliding doors. A home elevator can change your life and it''s an added value for house.</p>\r\n<p>Uniq elevators company Elevator offers a variety of lifts for residential use. Our personalized approach to helping you find the best product for your needs ensures you receive best value and the satisfaction of knowing that you made the right choice.</p>\r\n<p>Improve your Class of Life with Uniq elevators company Home Elevators Our offering of strong, maintenance-free, home elevator is sure to improve your class of life and comfort of living. By choosing one from our many impressive home elevators, you can forget the hassle of going countless times up and down the floors. People with impaired mobility can easily and speedily move to and from floors.</p>\r\n<p>Home elevator from Uniq elevators company can make a new addition to your already existing or brand new home, and enhance the worth and uniqueness of your Dream home.</p>', 'Yes'),
(7, '6', 'Hospital Elevators', 'Hospital Elevators', 'Hospital Elevators', 'hospital-elevators', 'Hospital Elevators', '<p>Hospital elevators are used for simple transportation of a patient on wheelchair to wheeling away a critical patient on stretcher without disturbing his life support system with doctors and nurses, smoothly, silently and swiftly, without jerks and shocks. Elevators for medical purpose are vertical transport equipment used in hospital and other relevant places to move patients and surgical instruments. Beacon offers Hospital elevator in Auto Door and Manual door operation.</p>', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `cname` varchar(255) DEFAULT NULL,
  `phoneno` varchar(12) DEFAULT NULL,
  `whatsapp` varchar(12) DEFAULT NULL,
  `emailid` varchar(150) DEFAULT NULL,
  `semailid` varchar(150) DEFAULT NULL,
  `p_address` text,
  `o_address` text,
  `rss_link` text,
  `fb_link` text,
  `twitter_link` text,
  `linkedin_link` text,
  `logo` varchar(150) DEFAULT NULL,
  `ofiicetime` varchar(255) DEFAULT NULL,
  `status` enum('Yes','No') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `cname`, `phoneno`, `whatsapp`, `emailid`, `semailid`, `p_address`, `o_address`, `rss_link`, `fb_link`, `twitter_link`, `linkedin_link`, `logo`, `ofiicetime`, `status`) VALUES
(1, 'Admin', 'uniq Elevator Company in Lucknow', '9794 60 1673', '8726 22 6666', 'sales@uniqelevators.com', 'uniqelevators@gmail.com', '147, Lekhraj Market - 2 Faizabad Road, Indira Nagar Lucknow-226017', '147, Lekhraj Market - 2 Faizabad Road, Indira Nagar Lucknow-226017', 'https://www.google.com/', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.linkedin.com/', 'logo.png', '09:00 AM to 09:30 PM', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `s_id` varchar(15) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `status` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `s_id`, `image`, `status`) VALUES
(1, '4', 'car1.png', 'Yes'),
(2, '2', 'strech11.png', 'Yes'),
(3, '1', 'passeng1.png', 'Yes'),
(4, '5', 'good11.png', 'Yes'),
(5, '6', 'home11.png', 'Yes'),
(6, '7', 'hospt1.png', 'Yes'),
(8, '5', 'goods-elevators.jpg', 'Yes'),
(9, '5', 'goods-elevators-3.jpg', 'Yes'),
(10, '1', 'passenger-elevators-2.jpg', 'Yes'),
(11, '6', 'home-elevators.jpg', 'Yes'),
(12, '6', 'home-elevators-3.jpg', 'Yes'),
(13, '7', 'hospital-stretcher-31.jpg', 'Yes'),
(14, '7', 'hospital-stretcher-3.jpg', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `review` text,
  `image` varchar(150) DEFAULT NULL,
  `status` enum('Yes','No') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `review`, `image`, `status`) VALUES
(1, 'Yogesh Narula', 'I have worked with Kundan Traders for a number of years on projects of varying styles and budgets. We have formed a close relationship and they have become our go-to bathroom supplier on all of our projects. Their friendly and professional staff makes working with them an absolute pleasure.', 'default.png', 'Yes'),
(2, 'Yogesh Narula', 'I always enjoy working with Kundan Traders as they are professional, friendly and incredibly knowledgeable. The service from the sales consultants all the way through to the logistics team is excellent, you can be confident that your order will be handled efficiently and effectively.', 'default1.png', 'Yes'),
(3, 'Yogesh Narula', ' We have been a customer of Kundan Traders for a number of years. Kundan Traders has always provided timely service and trusted design service for several en-suites and cloakrooms together with value compared to their competitors. The sales teams are very willing to assist even when our contact may have been away from the office - thank you!!', 'default2.png', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_client`
--
ALTER TABLE `mst_client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_login`
--
ALTER TABLE `mst_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_slider`
--
ALTER TABLE `mst_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mst_client`
--
ALTER TABLE `mst_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mst_login`
--
ALTER TABLE `mst_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mst_slider`
--
ALTER TABLE `mst_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
