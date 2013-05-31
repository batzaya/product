-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 31, 2013 at 07:25 PM
-- Server version: 5.5.31
-- PHP Version: 5.3.10-1ubuntu3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Zaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`, `id`) VALUES
('zaya2', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `product_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_name`, `address`, `product_id`, `date`) VALUES
(9, 'zaya', 'dskjf', 95, '2013-05-31 19:13:18'),
(10, 'bata', 'djgkdf', 92, '2013-05-31 19:14:27'),
(11, 'bulgaa', 'jdfkg', 88, '2013-05-31 19:14:42');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `name` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=96 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`name`, `type`, `price`, `content`, `date`, `id`) VALUES
('Mauris', 'velit', 15200, 'Mauris id diam in augue eleifend fermentum. Morbi lectus justo, gravida vitae placerat et, venenatis sed nisl. Vestibulum leo justo, blandit blandit scelerisque ut, rutrum sed urna.', '2013-05-31 16:57:35', 81),
('Fusce', 'neque', 2000, 'ue malesuada sodales, facilisis sed ipsum. Vestibulum rhoncus malesuada dapibus. Praesent vitae ligula eget mauris rutrum porttitor. Praesent nec sem sed justo commodo congue eget eget lectus. Nullam molestie, augue et malesuada ullamcorper, sapien elit fringilla nunc, vel eleifend nibh elit at enim', '2013-05-31 16:58:11', 82),
('Class', 'Phasellus', 5000, 'Phasellus mi augue, vulputate eget lobortis vitae, laoreet elementum quam. Proin nec facilisis mauris. Fusce aliquam massa odio. Fusce ligula sapien, ullamcorper viverra elementum eget, pharetra quis enim. Suspendisse consequat sollicitudin nisi.', '2013-05-31 16:59:33', 83),
('Contrary', ' Lorem', 15500, 'Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Goo', '2013-05-31 17:00:33', 84),
('Lorem Ipsum', 'dummy', 18000, 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2013-05-31 17:03:04', 86),
('Extremes', ' Good ', 600, 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable', '2013-05-31 17:03:49', 87),
('Finibus ', 'Malorum', 9000, 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2013-05-31 17:05:14', 88),
('The generated', 'Internet ', 13000, 'psum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2013-05-31 17:06:00', 89),
('But I', 'Explain', 75200, 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness', '2013-05-31 17:09:34', 91),
('Et harum', ' Nam libero', 6500, 'Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.', '2013-05-31 17:13:02', 92),
('At vero', 'dignissimos ', 78000, '"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. ', '2013-05-31 17:13:30', 93),
('On the', 'denounce', 69300, '"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue;', '2013-05-31 17:14:04', 94),
('These', 'cases', 8500, 'These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations', '2013-05-31 17:14:34', 95);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
