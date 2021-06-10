CREATE TABLE IF NOT EXISTS `customers`(
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `current_balance` int(55) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

ALTER TABLE `customers`
 ADD `id` varchar(11);

ALTER TABLE `customers`
 ADD PRIMARY KEY (`id`);

INSERT INTO `customers` (`name`, `email`, `current_balance`,`id`) VALUES ('Arya Suresh', 'aryasuresh9876@gmail.com', '9000','1');
INSERT INTO `customers` (`name`, `email`, `current_balance`,`id`) VALUES ('Anju Suresh', 'anjusuresh2001@gmail.com', '20000','2');
INSERT INTO `customers` (`name`, `email`, `current_balance`,`id`) VALUES ('Arjun Suresh', 'arjunsuresh9876@gmail.com', '2000','3');
INSERT INTO `customers` (`name`, `email`, `current_balance`,`id`) VALUES ('Anjali Umesh', 'anjaliumesh9876@gmail.com', '19000','4');
INSERT INTO `customers` (`name`, `email`, `current_balance`,`id`) VALUES ('Aswathi Thoonoli', 'aswathithoonoli9876@gmail.com', '20000','5');
INSERT INTO `customers` (`name`, `email`, `current_balance`,`id`) VALUES ('Akshay Thoonoli', 'akshaythoonoli9876@gmail.com', '9000','6');
INSERT INTO `customers` (`name`, `email`, `current_balance`,`id`) VALUES ('Suresh Babu', 'sujaishbtv1968@gmail.com', '700000','7');
INSERT INTO `customers` (`name`, `email`, `current_balance`,`id`) VALUES ('Jaisha C', 'jaishac9876@gmail.com', '19000','8');
INSERT INTO `customers` (`name`, `email`, `current_balance`,`id`) VALUES ('Shyba Umesh', 'shybaumesh9876@gmail.com', '18000','9');
INSERT INTO `customers` (`name`, `email`, `current_balance`,`id`) VALUES ('Nadiya Khanam', 'nadiyakhanam9876@gmail.com', '9000','10');

CREATE TABLE IF NOT EXISTS `transaction`(
  `name` varchar(55) NOT NULL,
  `transfer_to` varchar(55) NOT NULL,
  `amount` varchar(55) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
