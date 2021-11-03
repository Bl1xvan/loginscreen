SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION
SET time_zone = "+00:00";

CREATE TABLE `users`(
    `id` int(11) NOT NULL,
    `username` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL
);

INSERT_INTO `users` (`id`, `username`, `email`, `password`) VALUES (8, 'Pure Coding', 'purecodinoffical@gmail.com', '01234!!A');

ALTER TABLE `users` 
ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL
AUTO_INCREMENT = 9;

COMMIT