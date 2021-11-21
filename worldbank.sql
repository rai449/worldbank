-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2021 at 04:50 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `worldbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `iso2Code` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `incomeLevel` varchar(255) NOT NULL,
  `capitalCity` varchar(50) NOT NULL,
  `latitude` varchar(30) NOT NULL,
  `longitude` varchar(30) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `iso2Code`, `name`, `region`, `incomeLevel`, `capitalCity`, `latitude`, `longitude`, `create_date`, `update_date`) VALUES
(1, 'AW', 'Aruba', 'Latin America & Caribbean ', 'High income', 'Oranjestad ', '12.5167', '-70.0167', '2021-11-20 21:17:29', '2021-11-20 21:17:55'),
(2, 'ZH', 'Africa Eastern and Southern', 'Aggregates', 'Aggregates', '', '', '', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(3, 'AF', 'Afghanistan', 'South Asia', 'Low income', 'Kabul', '34.5228', '69.1761', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(4, 'A9', 'Africa', 'Aggregates', 'Aggregates', '', '', '', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(5, 'ZI', 'Africa Western and Central', 'Aggregates', 'Aggregates', '', '', '', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(6, 'AO', 'Angola', 'Sub-Saharan Africa ', 'Lower middle income', 'Luanda', '-8.81155', '13.242', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(7, 'AL', 'Albania', 'Europe & Central Asia', 'Upper middle income', 'Tirane', '41.3317', '19.8172', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(8, 'AD', 'Andorra', 'Europe & Central Asia', 'High income', 'Andorra la Vella', '42.5075', '1.5218', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(9, '1A', 'Arab World', 'Aggregates', 'Aggregates', '', '', '', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(10, 'AE', 'United Arab Emirates', 'Middle East & North Africa', 'High income', 'Abu Dhabi', '24.4764', '54.3705', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(11, 'AR', 'Argentina', 'Latin America & Caribbean ', 'Upper middle income', 'Buenos Aires', '-34.6118', '-58.4173', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(12, 'AM', 'Armenia', 'Europe & Central Asia', 'Upper middle income', 'Yerevan', '40.1596', '44.509', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(13, 'AS', 'American Samoa', 'East Asia & Pacific', 'Upper middle income', 'Pago Pago', '-14.2846', '-170.691', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(14, 'AG', 'Antigua and Barbuda', 'Latin America & Caribbean ', 'High income', 'Saint John\'s', '17.1175', '-61.8456', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(15, 'AU', 'Australia', 'East Asia & Pacific', 'High income', 'Canberra', '-35.282', '149.129', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(16, 'AT', 'Austria', 'Europe & Central Asia', 'High income', 'Vienna', '48.2201', '16.3798', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(17, 'AZ', 'Azerbaijan', 'Europe & Central Asia', 'Upper middle income', 'Baku', '40.3834', '49.8932', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(18, 'BI', 'Burundi', 'Sub-Saharan Africa ', 'Low income', 'Bujumbura', '-3.3784', '29.3639', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(19, 'B4', 'East Asia & Pacific (IBRD-only countries)', 'Aggregates', 'Aggregates', '', '', '', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(20, 'B7', 'Europe & Central Asia (IBRD-only countries)', 'Aggregates', 'Aggregates', '', '', '', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(21, 'BE', 'Belgium', 'Europe & Central Asia', 'High income', 'Brussels', '50.8371', '4.36761', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(22, 'BJ', 'Benin', 'Sub-Saharan Africa ', 'Lower middle income', 'Porto-Novo', '6.4779', '2.6323', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(23, 'BF', 'Burkina Faso', 'Sub-Saharan Africa ', 'Low income', 'Ouagadougou', '12.3605', '-1.53395', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(24, 'BD', 'Bangladesh', 'South Asia', 'Lower middle income', 'Dhaka', '23.7055', '90.4113', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(25, 'BG', 'Bulgaria', 'Europe & Central Asia', 'Upper middle income', 'Sofia', '42.7105', '23.3238', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(26, 'B1', 'IBRD countries classified as high income', 'Aggregates', 'Aggregates', '', '', '', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(27, 'BH', 'Bahrain', 'Middle East & North Africa', 'High income', 'Manama', '26.1921', '50.5354', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(28, 'BS', 'Bahamas, The', 'Latin America & Caribbean ', 'High income', 'Nassau', '25.0661', '-77.339', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(29, 'BA', 'Bosnia and Herzegovina', 'Europe & Central Asia', 'Upper middle income', 'Sarajevo', '43.8607', '18.4214', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(30, 'B2', 'Latin America & the Caribbean (IBRD-only countries)', 'Aggregates', 'Aggregates', '', '', '', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(31, 'BY', 'Belarus', 'Europe & Central Asia', 'Upper middle income', 'Minsk', '53.9678', '27.5766', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(32, 'BZ', 'Belize', 'Latin America & Caribbean ', 'Lower middle income', 'Belmopan', '17.2534', '-88.7713', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(33, 'B3', 'Middle East & North Africa (IBRD-only countries)', 'Aggregates', 'Aggregates', '', '', '', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(34, 'BM', 'Bermuda', 'North America', 'High income', 'Hamilton', '32.3293', '-64.706', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(35, 'BO', 'Bolivia', 'Latin America & Caribbean ', 'Lower middle income', 'La Paz', '-13.9908', '-66.1936', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(36, 'BR', 'Brazil', 'Latin America & Caribbean ', 'Upper middle income', 'Brasilia', '-15.7801', '-47.9292', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(37, 'BB', 'Barbados', 'Latin America & Caribbean ', 'High income', 'Bridgetown', '13.0935', '-59.6105', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(38, 'BN', 'Brunei Darussalam', 'East Asia & Pacific', 'High income', 'Bandar Seri Begawan', '4.94199', '114.946', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(39, 'B6', 'Sub-Saharan Africa (IBRD-only countries)', 'Aggregates', 'Aggregates', '', '', '', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(40, 'BT', 'Bhutan', 'South Asia', 'Lower middle income', 'Thimphu', '27.5768', '89.6177', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(41, 'BW', 'Botswana', 'Sub-Saharan Africa ', 'Upper middle income', 'Gaborone', '-24.6544', '25.9201', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(42, 'C9', 'Sub-Saharan Africa (IFC classification)', 'Aggregates', 'Aggregates', '', '', '', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(43, 'CF', 'Central African Republic', 'Sub-Saharan Africa ', 'Low income', 'Bangui', '5.63056', '21.6407', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(44, 'CA', 'Canada', 'North America', 'High income', 'Ottawa', '45.4215', '-75.6919', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(45, 'C4', 'East Asia and the Pacific (IFC classification)', 'Aggregates', 'Aggregates', '', '', '', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(46, 'B8', 'Central Europe and the Baltics', 'Aggregates', 'Aggregates', '', '', '', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(47, 'C5', 'Europe and Central Asia (IFC classification)', 'Aggregates', 'Aggregates', '', '', '', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(48, 'CH', 'Switzerland', 'Europe & Central Asia', 'High income', 'Bern', '46.948', '7.44821', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(49, 'JG', 'Channel Islands', 'Europe & Central Asia', 'High income', '', '', '', '2021-11-20 21:17:29', '2021-11-20 21:17:29'),
(50, 'CL', 'Chile', 'Latin America & Caribbean ', 'High income', 'Santiago', '-33.475', '-70.6475', '2021-11-20 21:17:29', '2021-11-20 21:17:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
