create database projekt;
CREATE TABLE `izvodac` (
  `id` int(11) NOT NULL,
  `ime` varchar(255) DEFAULT NULL,
  `datum` varchar(255) DEFAULT NULL,
  `pjesma` varchar(255) DEFAULT NULL,
  `slika` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `izvodac` (`id`, `ime`, `datum`, `pjesma`, `slika`) VALUES
(12, 'Richie Havens', '15.-16.8.', 'From the Prison', 'rich.jpg'),
(13, 'Sweetwater', '15.-16.8', 'Oh Happy Day', 'sweet.jpg'),
(14, 'Bert Sommer', '15.-16.8', 'A Note That Read',  'bert.jpg'),
(15, 'Tim Hardin', '15.-16.8', 'Speak Like a Child', 'tim.jpg'),
(16, 'Ravi Shankar', '15.-16.8', 'Tabla Solo In Jhaptal', 'ravi.jpg'),
(17, 'Melanie Safka', '15.-16.8', 'Beautiful People', 'melanie.jpg'),
(18, 'Arlo Guthrie', '15.-16.8', 'Wheel of Fortune', 'arlo.jpg'),
(19, 'Joan Baez', '15.-16.8', 'No Expectations', 'joan.jpg'),
(20, 'Country Joe McDonald', '16.-17.8', ' Seen a Rocket', 'country.jpg'),
(21, 'Santana', '16.-17.8', 'Waiting', 'santana.jpg'),
(22, 'John B. Sebastian', '16.-17.8', 'I Had a Dream', 'john.jpg'),
(23, 'Canned Heat', '16.-17.8', 'Woodstock Boogie', 'canned.jpg'),
(24, 'Grateful Dead', '16.-17.8', 'Dark Star', 'grateful.jpg'),
(25, 'Janis Joplin', '16.-17.8', 'Summertime', 'janis.jpg');

drop database projekt;

create database projekt;
CREATE TABLE `izvodac` (
  `id` int(11) NOT NULL,
  `ime` varchar(255) DEFAULT NULL,
  `datum` varchar(255) DEFAULT NULL,
  `pjesma` varchar(255) DEFAULT NULL,
  `slika` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `izvodac` (`id`, `ime`, `datum`, `pjesma`, `slika`) VALUES
(12, 'Richie Havens', '15.-16.8.', 'From the Prison', 'rich.jpg'),
(13, 'Sweetwater', '15.-16.8', 'Oh Happy Day', 'sweet.jpg'),
(14, 'Bert Sommer', '15.-16.8', 'A Note That Read',  'bert.jpg'),
(15, 'Tim Hardin', '15.-16.8', 'Speak Like a Child', 'tim.jpg'),
(16, 'Ravi Shankar', '15.-16.8', 'Tabla Solo In Jhaptal', 'ravi.jpg'),
(17, 'Melanie Safka', '15.-16.8', 'Beautiful People', 'melanie.jpg'),
(18, 'Arlo Guthrie', '15.-16.8', 'Wheel of Fortune', 'arlo.jpg'),
(19, 'Joan Baez', '15.-16.8', 'No Expectations', 'joan.jpg'),
(20, 'Country Joe McDonald', '16.-17.8', ' Seen a Rocket', 'country.jpg'),
(21, 'Santana', '16.-17.8', 'Waiting', 'santana.jpg'),
(22, 'John B. Sebastian', '16.-17.8', 'I Had a Dream', 'john.jpg'),
(23, 'Canned Heat', '16.-17.8', 'Woodstock Boogie', 'canned.jpg'),
(24, 'Grateful Dead', '16.-17.8', 'Dark Star', 'grateful.jpg'),
(25, 'Janis Joplin', '16.-17.8', 'Summertime', 'janis.jpg');