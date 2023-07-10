

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `tailNumber` varchar(100) NOT NULL,
  `flightID` varchar(100) NOT NULL,
  `takeoff` varchar(100) NOT NULL,
  `landing` varchar(100) NOT NULL,
  `Duration` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
);