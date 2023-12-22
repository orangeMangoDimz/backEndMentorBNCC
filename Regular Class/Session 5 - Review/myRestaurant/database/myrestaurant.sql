-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 21, 2023 at 05:06 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `category_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1, 'Appetizer'),
(2, 'Main Course'),
(3, 'Desert'),
(4, 'Soup'),
(5, 'beverage');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int NOT NULL,
  `category_id` int NOT NULL,
  `food_name` varchar(250) NOT NULL,
  `price` int NOT NULL DEFAULT '0',
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `category_id`, `food_name`, `price`, `description`) VALUES
(1, 2, 'Ayam Goreng Saus Tiram', 39000, 'Hidangkan menu yang spesial untuk yang tersayang, menu Ayam Saus Tiram. Resep ayam yang dimasak secara praktis namun rasanya tidak bisa diremehkan, karena lezat sekali. Bunda bisa mendapatkan kemudahan dalam mengolah Ayam Saus Tiram dengan memasak pakai Saus Tiram Selera! Saus serbaguna yang terbuat dari tiram asli yang praktis dimasak untuk aneka jenis masakan. Di resep ini, cukup menggunakan bahan-bahan sederhana dengan cara pembuatannya yang mudah diterapkan oleh Bunda. Hasilnya, seporsi hidangan Ayam Saus Tiram dengan tampilan dan warna yang cantik siap memanjakan lidah keluarga. Sangat pas disajikan di berbagai waktu makan, karena rasanya yang tak membosankan. Segera cicipi kenikmatannya dan jangan lupa info ke Bunda lainnya ya! '),
(2, 3, 'Salad Cheese with Mayo', 23000, 'Salad Cheese with Mayo adalah salah satu menu salad yang lezat dan sehat. Salad ini terdiri dari sayuran segar seperti selada, tomat, wortel, dan timun yang dicampur dengan keju parut dan mayones. Salad ini memiliki tekstur yang renyah dan rasa yang gurih dan asam. Salad ini cocok untuk dijadikan sebagai makanan pembuka, makanan ringan, atau makanan penutup. Salad ini juga mudah dibuat dan bisa disesuaikan dengan selera Anda.'),
(3, 1, 'French Fries BBQ', 18000, 'French Fries BBQ adalah salah satu menu camilan yang populer dan nikmat. French Fries BBQ terbuat dari kentang yang dipotong tipis-tipis dan digoreng hingga renyah, kemudian disajikan dengan saus BBQ yang manis dan pedas. French Fries BBQ memiliki tekstur yang garing di luar dan lembut di dalam, serta rasa yang kaya dan menggugah selera. French Fries BBQ cocok untuk dinikmati bersama teman-teman, keluarga, atau pasangan.'),
(4, 4, 'Chicken Soup', 15000, 'Chicken Soup adalah salah satu menu sup yang hangat dan menyehatkan. Chicken Soup terbuat dari kaldu ayam yang diseduh dengan bumbu-bumbu seperti bawang putih, jahe, garam, merica, dan daun bawang. Chicken Soup juga ditambahkan dengan potongan-potongan daging ayam, wortel, kentang, dan seledri yang memberikan rasa dan nutrisi. Chicken Soup memiliki aroma yang harum dan rasa yang gurih dan segar. Chicken Soup cocok untuk dihidangkan saat cuaca dingin atau saat Anda sedang flu.'),
(5, 5, 'Lemon Tea', 18000, 'Lemon Tea adalah salah satu minuman yang menyegarkan dan menyehatkan. Lemon Tea terbuat dari teh yang dicampur dengan perasan lemon dan gula atau madu. Lemon Tea memiliki rasa yang asam dan manis, serta aroma yang harum dan menyenangkan. Lemon Tea cocok untuk diminum saat pagi, siang, atau sore hari. '),
(6, 2, 'Ayam Goreng Saus Tiram', 39000, 'Hidangkan menu yang spesial untuk yang tersayang, menu Ayam Saus Tiram. Resep ayam yang dimasak secara praktis namun rasanya tidak bisa diremehkan, karena lezat sekali. Bunda bisa mendapatkan kemudahan dalam mengolah Ayam Saus Tiram dengan memasak pakai Saus Tiram Selera! Saus serbaguna yang terbuat dari tiram asli yang praktis dimasak untuk aneka jenis masakan. Di resep ini, cukup menggunakan bahan-bahan sederhana dengan cara pembuatannya yang mudah diterapkan oleh Bunda. Hasilnya, seporsi hidangan Ayam Saus Tiram dengan tampilan dan warna yang cantik siap memanjakan lidah keluarga. Sangat pas disajikan di berbagai waktu makan, karena rasanya yang tak membosankan. Segera cicipi kenikmatannya dan jangan lupa info ke Bunda lainnya ya! '),
(7, 3, 'Salad Cheese with Mayo', 23000, 'Salad Cheese with Mayo adalah salah satu menu salad yang lezat dan sehat. Salad ini terdiri dari sayuran segar seperti selada, tomat, wortel, dan timun yang dicampur dengan keju parut dan mayones. Salad ini memiliki tekstur yang renyah dan rasa yang gurih dan asam. Salad ini cocok untuk dijadikan sebagai makanan pembuka, makanan ringan, atau makanan penutup. Salad ini juga mudah dibuat dan bisa disesuaikan dengan selera Anda.'),
(8, 1, 'French Fries BBQ', 18000, 'French Fries BBQ adalah salah satu menu camilan yang populer dan nikmat. French Fries BBQ terbuat dari kentang yang dipotong tipis-tipis dan digoreng hingga renyah, kemudian disajikan dengan saus BBQ yang manis dan pedas. French Fries BBQ memiliki tekstur yang garing di luar dan lembut di dalam, serta rasa yang kaya dan menggugah selera. French Fries BBQ cocok untuk dinikmati bersama teman-teman, keluarga, atau pasangan.'),
(9, 4, 'Chicken Soup', 15000, 'Chicken Soup adalah salah satu menu sup yang hangat dan menyehatkan. Chicken Soup terbuat dari kaldu ayam yang diseduh dengan bumbu-bumbu seperti bawang putih, jahe, garam, merica, dan daun bawang. Chicken Soup juga ditambahkan dengan potongan-potongan daging ayam, wortel, kentang, dan seledri yang memberikan rasa dan nutrisi. Chicken Soup memiliki aroma yang harum dan rasa yang gurih dan segar. Chicken Soup cocok untuk dihidangkan saat cuaca dingin atau saat Anda sedang flu.'),
(10, 5, 'Lemon Tea', 18000, 'Lemon Tea adalah salah satu minuman yang menyegarkan dan menyehatkan. Lemon Tea terbuat dari teh yang dicampur dengan perasan lemon dan gula atau madu. Lemon Tea memiliki rasa yang asam dan manis, serta aroma yang harum dan menyenangkan. Lemon Tea cocok untuk diminum saat pagi, siang, atau sore hari. '),
(11, 2, 'Ayam Goreng Saus Tiram', 39000, 'Hidangkan menu yang spesial untuk yang tersayang, menu Ayam Saus Tiram. Resep ayam yang dimasak secara praktis namun rasanya tidak bisa diremehkan, karena lezat sekali. Bunda bisa mendapatkan kemudahan dalam mengolah Ayam Saus Tiram dengan memasak pakai Saus Tiram Selera! Saus serbaguna yang terbuat dari tiram asli yang praktis dimasak untuk aneka jenis masakan. Di resep ini, cukup menggunakan bahan-bahan sederhana dengan cara pembuatannya yang mudah diterapkan oleh Bunda. Hasilnya, seporsi hidangan Ayam Saus Tiram dengan tampilan dan warna yang cantik siap memanjakan lidah keluarga. Sangat pas disajikan di berbagai waktu makan, karena rasanya yang tak membosankan. Segera cicipi kenikmatannya dan jangan lupa info ke Bunda lainnya ya! '),
(12, 3, 'Salad Cheese with Mayo', 23000, 'Salad Cheese with Mayo adalah salah satu menu salad yang lezat dan sehat. Salad ini terdiri dari sayuran segar seperti selada, tomat, wortel, dan timun yang dicampur dengan keju parut dan mayones. Salad ini memiliki tekstur yang renyah dan rasa yang gurih dan asam. Salad ini cocok untuk dijadikan sebagai makanan pembuka, makanan ringan, atau makanan penutup. Salad ini juga mudah dibuat dan bisa disesuaikan dengan selera Anda.'),
(13, 1, 'French Fries BBQ', 18000, 'French Fries BBQ adalah salah satu menu camilan yang populer dan nikmat. French Fries BBQ terbuat dari kentang yang dipotong tipis-tipis dan digoreng hingga renyah, kemudian disajikan dengan saus BBQ yang manis dan pedas. French Fries BBQ memiliki tekstur yang garing di luar dan lembut di dalam, serta rasa yang kaya dan menggugah selera. French Fries BBQ cocok untuk dinikmati bersama teman-teman, keluarga, atau pasangan.'),
(14, 4, 'Chicken Soup', 15000, 'Chicken Soup adalah salah satu menu sup yang hangat dan menyehatkan. Chicken Soup terbuat dari kaldu ayam yang diseduh dengan bumbu-bumbu seperti bawang putih, jahe, garam, merica, dan daun bawang. Chicken Soup juga ditambahkan dengan potongan-potongan daging ayam, wortel, kentang, dan seledri yang memberikan rasa dan nutrisi. Chicken Soup memiliki aroma yang harum dan rasa yang gurih dan segar. Chicken Soup cocok untuk dihidangkan saat cuaca dingin atau saat Anda sedang flu.'),
(15, 5, 'Lemon Tea', 18000, 'Lemon Tea adalah salah satu minuman yang menyegarkan dan menyehatkan. Lemon Tea terbuat dari teh yang dicampur dengan perasan lemon dan gula atau madu. Lemon Tea memiliki rasa yang asam dan manis, serta aroma yang harum dan menyenangkan. Lemon Tea cocok untuk diminum saat pagi, siang, atau sore hari. '),
(16, 2, 'Ayam Goreng Saus Tiram', 39000, 'Hidangkan menu yang spesial untuk yang tersayang, menu Ayam Saus Tiram. Resep ayam yang dimasak secara praktis namun rasanya tidak bisa diremehkan, karena lezat sekali. Bunda bisa mendapatkan kemudahan dalam mengolah Ayam Saus Tiram dengan memasak pakai Saus Tiram Selera! Saus serbaguna yang terbuat dari tiram asli yang praktis dimasak untuk aneka jenis masakan. Di resep ini, cukup menggunakan bahan-bahan sederhana dengan cara pembuatannya yang mudah diterapkan oleh Bunda. Hasilnya, seporsi hidangan Ayam Saus Tiram dengan tampilan dan warna yang cantik siap memanjakan lidah keluarga. Sangat pas disajikan di berbagai waktu makan, karena rasanya yang tak membosankan. Segera cicipi kenikmatannya dan jangan lupa info ke Bunda lainnya ya! '),
(17, 3, 'Salad Cheese with Mayo', 23000, 'Salad Cheese with Mayo adalah salah satu menu salad yang lezat dan sehat. Salad ini terdiri dari sayuran segar seperti selada, tomat, wortel, dan timun yang dicampur dengan keju parut dan mayones. Salad ini memiliki tekstur yang renyah dan rasa yang gurih dan asam. Salad ini cocok untuk dijadikan sebagai makanan pembuka, makanan ringan, atau makanan penutup. Salad ini juga mudah dibuat dan bisa disesuaikan dengan selera Anda.'),
(18, 1, 'French Fries BBQ', 18000, 'French Fries BBQ adalah salah satu menu camilan yang populer dan nikmat. French Fries BBQ terbuat dari kentang yang dipotong tipis-tipis dan digoreng hingga renyah, kemudian disajikan dengan saus BBQ yang manis dan pedas. French Fries BBQ memiliki tekstur yang garing di luar dan lembut di dalam, serta rasa yang kaya dan menggugah selera. French Fries BBQ cocok untuk dinikmati bersama teman-teman, keluarga, atau pasangan.'),
(19, 4, 'Chicken Soup', 15000, 'Chicken Soup adalah salah satu menu sup yang hangat dan menyehatkan. Chicken Soup terbuat dari kaldu ayam yang diseduh dengan bumbu-bumbu seperti bawang putih, jahe, garam, merica, dan daun bawang. Chicken Soup juga ditambahkan dengan potongan-potongan daging ayam, wortel, kentang, dan seledri yang memberikan rasa dan nutrisi. Chicken Soup memiliki aroma yang harum dan rasa yang gurih dan segar. Chicken Soup cocok untuk dihidangkan saat cuaca dingin atau saat Anda sedang flu.'),
(20, 5, 'Lemon Tea', 18000, 'Lemon Tea adalah salah satu minuman yang menyegarkan dan menyehatkan. Lemon Tea terbuat dari teh yang dicampur dengan perasan lemon dan gula atau madu. Lemon Tea memiliki rasa yang asam dan manis, serta aroma yang harum dan menyenangkan. Lemon Tea cocok untuk diminum saat pagi, siang, atau sore hari. '),
(21, 2, 'Ayam Goreng Saus Tiram', 39000, 'Hidangkan menu yang spesial untuk yang tersayang, menu Ayam Saus Tiram. Resep ayam yang dimasak secara praktis namun rasanya tidak bisa diremehkan, karena lezat sekali. Bunda bisa mendapatkan kemudahan dalam mengolah Ayam Saus Tiram dengan memasak pakai Saus Tiram Selera! Saus serbaguna yang terbuat dari tiram asli yang praktis dimasak untuk aneka jenis masakan. Di resep ini, cukup menggunakan bahan-bahan sederhana dengan cara pembuatannya yang mudah diterapkan oleh Bunda. Hasilnya, seporsi hidangan Ayam Saus Tiram dengan tampilan dan warna yang cantik siap memanjakan lidah keluarga. Sangat pas disajikan di berbagai waktu makan, karena rasanya yang tak membosankan. Segera cicipi kenikmatannya dan jangan lupa info ke Bunda lainnya ya! '),
(22, 3, 'Salad Cheese with Mayo', 23000, 'Salad Cheese with Mayo adalah salah satu menu salad yang lezat dan sehat. Salad ini terdiri dari sayuran segar seperti selada, tomat, wortel, dan timun yang dicampur dengan keju parut dan mayones. Salad ini memiliki tekstur yang renyah dan rasa yang gurih dan asam. Salad ini cocok untuk dijadikan sebagai makanan pembuka, makanan ringan, atau makanan penutup. Salad ini juga mudah dibuat dan bisa disesuaikan dengan selera Anda.'),
(23, 1, 'French Fries BBQ', 18000, 'French Fries BBQ adalah salah satu menu camilan yang populer dan nikmat. French Fries BBQ terbuat dari kentang yang dipotong tipis-tipis dan digoreng hingga renyah, kemudian disajikan dengan saus BBQ yang manis dan pedas. French Fries BBQ memiliki tekstur yang garing di luar dan lembut di dalam, serta rasa yang kaya dan menggugah selera. French Fries BBQ cocok untuk dinikmati bersama teman-teman, keluarga, atau pasangan.'),
(24, 4, 'Chicken Soup', 15000, 'Chicken Soup adalah salah satu menu sup yang hangat dan menyehatkan. Chicken Soup terbuat dari kaldu ayam yang diseduh dengan bumbu-bumbu seperti bawang putih, jahe, garam, merica, dan daun bawang. Chicken Soup juga ditambahkan dengan potongan-potongan daging ayam, wortel, kentang, dan seledri yang memberikan rasa dan nutrisi. Chicken Soup memiliki aroma yang harum dan rasa yang gurih dan segar. Chicken Soup cocok untuk dihidangkan saat cuaca dingin atau saat Anda sedang flu.'),
(25, 5, 'Lemon Tea', 18000, 'Lemon Tea adalah salah satu minuman yang menyegarkan dan menyehatkan. Lemon Tea terbuat dari teh yang dicampur dengan perasan lemon dan gula atau madu. Lemon Tea memiliki rasa yang asam dan manis, serta aroma yang harum dan menyenangkan. Lemon Tea cocok untuk diminum saat pagi, siang, atau sore hari. '),
(26, 2, 'Ayam Goreng Saus Tiram', 39000, 'Hidangkan menu yang spesial untuk yang tersayang, menu Ayam Saus Tiram. Resep ayam yang dimasak secara praktis namun rasanya tidak bisa diremehkan, karena lezat sekali. Bunda bisa mendapatkan kemudahan dalam mengolah Ayam Saus Tiram dengan memasak pakai Saus Tiram Selera! Saus serbaguna yang terbuat dari tiram asli yang praktis dimasak untuk aneka jenis masakan. Di resep ini, cukup menggunakan bahan-bahan sederhana dengan cara pembuatannya yang mudah diterapkan oleh Bunda. Hasilnya, seporsi hidangan Ayam Saus Tiram dengan tampilan dan warna yang cantik siap memanjakan lidah keluarga. Sangat pas disajikan di berbagai waktu makan, karena rasanya yang tak membosankan. Segera cicipi kenikmatannya dan jangan lupa info ke Bunda lainnya ya! '),
(27, 3, 'Salad Cheese with Mayo', 23000, 'Salad Cheese with Mayo adalah salah satu menu salad yang lezat dan sehat. Salad ini terdiri dari sayuran segar seperti selada, tomat, wortel, dan timun yang dicampur dengan keju parut dan mayones. Salad ini memiliki tekstur yang renyah dan rasa yang gurih dan asam. Salad ini cocok untuk dijadikan sebagai makanan pembuka, makanan ringan, atau makanan penutup. Salad ini juga mudah dibuat dan bisa disesuaikan dengan selera Anda.'),
(28, 1, 'French Fries BBQ', 18000, 'French Fries BBQ adalah salah satu menu camilan yang populer dan nikmat. French Fries BBQ terbuat dari kentang yang dipotong tipis-tipis dan digoreng hingga renyah, kemudian disajikan dengan saus BBQ yang manis dan pedas. French Fries BBQ memiliki tekstur yang garing di luar dan lembut di dalam, serta rasa yang kaya dan menggugah selera. French Fries BBQ cocok untuk dinikmati bersama teman-teman, keluarga, atau pasangan.'),
(29, 4, 'Chicken Soup', 15000, 'Chicken Soup adalah salah satu menu sup yang hangat dan menyehatkan. Chicken Soup terbuat dari kaldu ayam yang diseduh dengan bumbu-bumbu seperti bawang putih, jahe, garam, merica, dan daun bawang. Chicken Soup juga ditambahkan dengan potongan-potongan daging ayam, wortel, kentang, dan seledri yang memberikan rasa dan nutrisi. Chicken Soup memiliki aroma yang harum dan rasa yang gurih dan segar. Chicken Soup cocok untuk dihidangkan saat cuaca dingin atau saat Anda sedang flu.'),
(30, 5, 'Lemon Tea', 18000, 'Lemon Tea adalah salah satu minuman yang menyegarkan dan menyehatkan. Lemon Tea terbuat dari teh yang dicampur dengan perasan lemon dan gula atau madu. Lemon Tea memiliki rasa yang asam dan manis, serta aroma yang harum dan menyenangkan. Lemon Tea cocok untuk diminum saat pagi, siang, atau sore hari. ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(250) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `email`, `password`) VALUES
(1, 'username', 'Dummy User', 'user@gmail.com', '$2y$10$6MjN1vnE6P9Fn.2qBZ3z.uhYv7uUJgfp0pU0o7wLXGjKdhFiCSjya'),
(2, 'admin', 'Admin', 'admin@gmail.com', '$2y$10$f.tSFXq0K7AatWdlzTE4heRICDoQDKOFw4cfB0we4/0DT2G5sOzfW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `foods`
--
ALTER TABLE `foods`
  ADD CONSTRAINT `foods_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
