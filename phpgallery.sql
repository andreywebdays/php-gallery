SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `phpgallery` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `phpgallery`;

CREATE TABLE `gallery` (
  `file_id` int(11) NOT NULL,
  `file_title` varchar(100) NOT NULL,
  `file_desc` longtext NOT NULL,
  `file_unique_name` longtext NOT NULL,
  `file_order` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `gallery` (`file_id`, `file_title`, `file_desc`, `file_unique_name`, `file_order`) VALUES
(1, 'Andrey', 'This is me', 'just-a-pic-of-me.62329b6d845535.37451612.jpg', '1'),
(2, 'Andrey again', 'real colors', 'andrey-in-color.62329bebcbe3e1.04915801.jpg', '2');


ALTER TABLE `gallery`
  ADD PRIMARY KEY (`file_id`);


ALTER TABLE `gallery`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
