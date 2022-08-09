-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2019 at 10:53 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `falcon`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `about_title` varchar(100) NOT NULL,
  `about_desp` text NOT NULL,
  `about_sub_title` varchar(100) NOT NULL,
  `feature` varchar(100) NOT NULL,
  `about_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `about_title`, `about_desp`, `about_sub_title`, `feature`, `about_img`) VALUES
(1, 'this is a title', ' dfsda sdf sdf sdfa sdf ds sd ds sdfsadrtsear tat a ofoisrioa iower ier yr iowyreiwejhriwyefi e weri w9iruiowe uewrhiw 8e sierie heour ierhoi ire io', 'This is a sub title', 'amra valo, amra onk valo, valor ses nai, sob sese amrai valo', '1.jpg'),
(2, 'this is a title', 'Years of Experience\r\nFully Insured\r\nCost Control Experts\r\n100% Satisfaction Guarantee', 'This is a sub title', 'Years of Experience Fully Insured Cost Control Experts 100% Satisfaction Guarantee', '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `banner_title` varchar(200) NOT NULL,
  `banner_desp` text NOT NULL,
  `banner_btn` varchar(50) NOT NULL,
  `banner_img` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_title`, `banner_desp`, `banner_btn`, `banner_img`, `status`) VALUES
(1, 'shamim', 'adsf ad sdf sf   ', 'aaaaaaaa', '1.png', 0),
(2, 'shamim dewan', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium minima quisquam quaerat velit possimus. Numquam consectetur corporis recusandae, voluptatum, praesentium perferendis veritatis molestias asperiores dolores excepturi aperiam magnam a, repellendus.', 'Read More', '2.jpg', 1),
(3, 'The first banner', 'The first banner is the most mopuler  dlf ld sdjfld lsdfj sjf sf lslf sflsdflsd ljf lsjf lsdjfoeif slfjoej s oejsr ', 'More & More', '3.jpg', 0),
(4, 'qqqqqqq', 'qqqqqqq   qqqqqqqqqqqqqqqqqq qqqqqqqqqqqqqqqqqqqq qqqqqqqqqqqqqqqqqqqq', 'qqqqq', '4.jpg', 0),
(5, 'shamim&#039;s demo', 'adg  as df ', 'Read More', '5.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` int(11) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `logo`, `status`) VALUES
(1, '1.jpg', 0),
(2, '2.jpg', 0),
(3, '3.png', 0),
(4, '4.gif', 1),
(5, '5.png', 0),
(6, '6.png', 0),
(7, '7.png', 0),
(8, '8.png', 0),
(9, '9.png', 0),
(10, '10.png', 0),
(11, '11.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `msg_name` varchar(100) NOT NULL,
  `msg_email` varchar(100) NOT NULL,
  `msg_desp` text NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `msg_name`, `msg_email`, `msg_desp`, `post_time`, `status`) VALUES
(16, 'shamim', 'shamimdewan343@gmail.com', 'Delete All Selected Items Delete All Selected ItemsDelete All Selected ItemsDelete All Selected ItemsDelete All Selected ItemsDelete All Selected ItemsDelete All Selected ItemsDelete All Selected ItemsDelete All Selected ItemsDelete All Selected Items', '2019-09-12 05:48:41', 0),
(17, 'aaaaaaaaaa', 'sohel88@live.com', 'Delete All Selected ItemsDelete All Selected ItemsDelete All Selected ItemsDelete All Selected ItemsDelete All Selected ItemsDelete All Selected ItemsDelete All Selected ItemsDelete All Selected ItemsDelete All Selected Items', '2019-09-12 05:48:48', 1),
(18, 'eratfgaer', 'moskhara390@gmail.com', 'Delete All Selected ItemsDelete All Selected ItemsDelete All Selected ItemsDelete All Selected ItemsDelete All Selected ItemsDelete All Selected ItemsDelete All Selected Items', '2019-09-12 05:48:55', 0),
(19, 'shamim', 'shamimdewan343@gmail.com', '\r\n		&lt;?php } ?&gt;\r\n		&lt;?php } ?&gt;\r\n		&lt;?php } ?&gt;\r\n		&lt;?php } ?&gt;\r\n		&lt;?php } ?&gt;\r\n		&lt;?php } ?&gt;\r\n		&lt;?php } ?&gt;\r\n		&lt;?php } ?&gt;\r\n		&lt;?php } ?&gt;\r\n		&lt;?php } ?&gt;\r\n		&lt;?php } ?&gt;\r\n		&lt;?php } ?&gt;', '2019-09-12 13:45:06', 0),
(20, 'aaaaaaaaaa', 'shamimdewan343@gmail.com', 'http://localhost/My%20Practice/falcon/users.phphttp://localhost/My%20Practice/falcon/users.phphttp://localhost/My%20Practice/falcon/users.phphttp://localhost/My%20Practice/falcon/users.phphttp://localhost/My%20Practice/falcon/users.phphttp://localhost/My%20Practice/falcon/users.phphttp://localhost/My%20Practice/falcon/users.phphttp://localhost/My%20Practice/falcon/users.phphttp://localhost/My%20Practice/falcon/users.phphttp://localhost/My%20Practice/falcon/users.php', '2019-09-12 15:53:37', 0),
(21, 'aaaaaaaaaa', 'shamimdewan343@gmail.com', 'http://result.iau.edu.bd/http://result.iau.edu.bd/http://result.iau.edu.bd/http://result.iau.edu.bd/http://result.iau.edu.bd/http://result.iau.edu.bd/http://result.iau.edu.bd/http://result.iau.edu.bd/http://result.iau.edu.bd/http://result.iau.edu.bd/', '2019-09-12 17:31:38', 0),
(22, 'shamim', 'shamimdewan343@gmail.com', 'shamimdewan343@gmail.comshamimdewan343@gmail.comshamimdewan343@gmail.comshamimdewan343@gmail.comshamimdewan343@gmail.comshamimdewan343@gmail.comshamimdewan343@gmail.comshamimdewan343@gmail.comshamimdewan343@gmail.comshamimdewan343@gmail.com', '2019-09-13 01:13:50', 0);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_title` varchar(100) NOT NULL,
  `service_desp` text NOT NULL,
  `service_img` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_title`, `service_desp`, `service_img`, `status`) VALUES
(1, 'Home Additions', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at', '1.jpg', 0),
(2, 'tyetry rtrty ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at', '2.jpg', 1),
(3, 'rwetwert wert ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at', '3.png', 1),
(4, 'aaaaaaaaaaaaaa', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at', '4.jpg', 1),
(5, 'eeeeeeee', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at', '5.jpg', 1),
(6, 'kkkkkkkkkkkkk', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at', '6.jpg', 1),
(7, 'tyetry&#039;fasd rtrty ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at', '7.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `social1` varchar(50) NOT NULL,
  `social2` varchar(50) NOT NULL,
  `social3` varchar(50) NOT NULL,
  `social4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `social1`, `social2`, `social3`, `social4`) VALUES
(2, 'fa fa-facebook-official', 'fa fa-twitter', 'fa fa-instagram', 'fa fa-youtube');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `testi_name` varchar(100) NOT NULL,
  `testi_desp` text NOT NULL,
  `testi_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `testi_name`, `testi_desp`, `testi_img`) VALUES
(1, 'shamim dewan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at', '1.jpg'),
(2, 'shamim dewan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at', '2.jpg'),
(3, 'shamim dewan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at', '3.jpg'),
(4, 'shamim dewan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at', '4.jpg'),
(5, 'shamim dewan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at', '5.jpg'),
(6, 'shamim dewan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at', '6.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `about` text NOT NULL,
  `phone` int(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `uname`, `email`, `about`, `phone`, `password`, `dob`, `gender`, `skill`, `position`, `role`, `photo`, `register_date`) VALUES
(2, 'joenal', 'bbb', 'aaaaaaaaaaa', 'aaaaaaaaa@gamil.com', 'dfgsdf', 2147483647, '$2y$10$TLyTPy29znaZEVeuznvmyeXRrG8KTNQpxNPY5J356xG0O0att./7u', '04/09/2019', 'Male', 'CSS, Java, Python', 'New', '2', '2.jpg', '2019-09-12 14:44:08'),
(3, 'asdfasdf aartg ret ert', 'fsgdfg', 'sohel dewan', 'sohel88@live.com', 'sgdfg', 1928976747, '$2y$10$zrAFpIz7TJH66bsEMRq6BeVPBRd0LpmVQ6r7RoecFFto0ybb43iEG', '04/09/2019', 'Other', 'CSS, Java, C++', 'New', '3', '3.jpg', '2019-09-12 14:44:39'),
(8, 'shamim', 'dewan', 'shamimdewan', 'shamimdewan343@gmail.com', 'dfhgsdf', 2147483647, '$2y$10$ht8lLAwnOvCPYJ/.hlxfAeBsfbbEfPqEBWvZKaW5z0KxRxSR7/gdO', '17/09/2019', 'Male', 'HTML, CSS, Java, C++', 'Medium', '1', '8.jpg', '2019-09-13 04:06:07'),
(9, 'shamim', 'aaaaaaaaaaaa', 'shamimdewan', 'ochenapothik390@gmail.com', 'ghf', 2147483647, '$2y$10$cFopdyFJ5BZWIQuU95ktQ.zAzf3S5XXq2RlqLnFJBsGHWifN7rKUK', '04/09/2019', 'Other', 'C++, PHP, C#', 'New', '1', '9.jpg', '2019-09-13 04:06:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
