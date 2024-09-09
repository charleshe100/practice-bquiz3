CREATE TABLE poster
(
    id INT(10) NOT NULL AUTO_INCREMENT,
    name text NOT NULL,
    img text NOT NULL,
    sh INT(1) NOT NULL DEFAULT '1',
    rank INT(5) NOT NULL,
    ani INT(1) NOT NULL DEFAULT '1',
    PRIMARY KEY (id)
);
CREATE TABLE movie
(
    id INT(10) NOT NULL AUTO_INCREMENT,
    name text NOT NULL,
    level tinyint(1) NOT NULL,
    length INT(5) NOT NULL,
    ondate text NOT NULL,
    publish text NOT NULL,
    director text NOT NULL,
    trailer text NOT NULL,
    poster text NOT NULL,
    intro text NOT NULL,
    rank INT(5) NOT NULL,
    sh INT(1) NOT NULL DEFAULT '1',
    PRIMARY KEY (id)
);
CREATE TABLE orders
(
    id INT(10) NOT NULL AUTO_INCREMENT,
    no text NOT NULL,
    movie text NOT NULL,
    date text NOT NULL,
    session text NOT NULL,
    qt INT(1) NOT NULL,
    seats text NOT NULL,
    PRIMARY KEY (id)
);

-- 預告片海報
INSERT INTO `posters` (`id`, `img`, `name`, `rank`, `sh`, `ani`) VALUES (NULL, '03A01.jpg', '預告片01', '1', '1', '1');
INSERT INTO `posters` (`id`, `img`, `name`, `rank`, `sh`, `ani`) VALUES (NULL, '03A02.jpg', '預告片02', '2', '1', '2');
INSERT INTO `posters` (`id`, `img`, `name`, `rank`, `sh`, `ani`) VALUES (NULL, '03A03.jpg', '預告片03', '3', '1', '3');
INSERT INTO `posters` (`id`, `img`, `name`, `rank`, `sh`, `ani`) VALUES (NULL, '03A04.jpg', '預告片04', '4', '1', '1');
INSERT INTO `posters` (`id`, `img`, `name`, `rank`, `sh`, `ani`) VALUES (NULL, '03A05.jpg', '預告片05', '5', '1', '2');
INSERT INTO `posters` (`id`, `img`, `name`, `rank`, `sh`, `ani`) VALUES (NULL, '03A06.jpg', '預告片06', '6', '1', '3');
INSERT INTO `posters` (`id`, `img`, `name`, `rank`, `sh`, `ani`) VALUES (NULL, '03A07.jpg', '預告片07', '7', '1', '1');
INSERT INTO `posters` (`id`, `img`, `name`, `rank`, `sh`, `ani`) VALUES (NULL, '03A08.jpg', '預告片08', '8', '1', '2');
INSERT INTO `posters` (`id`, `img`, `name`, `rank`, `sh`, `ani`) VALUES (NULL, '03A09.jpg', '預告片09', '9', '1', '3');

-- 院線片
INSERT INTO `movies` (`id`, `name`, `level`, `length`, `ondate`, `publish`, `director`, `trailer`, `poster`, `intro`, `sh`, `rank`) 
              VALUES (NULL, '院線片01', '1', '120', '2023-07-29', '發行商01', '導演01', '03B01v.mp4', '03B01.png', '院線片01簡介', '1', '1');
INSERT INTO `movies` (`id`, `name`, `level`, `length`, `ondate`, `publish`, `director`, `trailer`, `poster`, `intro`, `sh`, `rank`) 
              VALUES (NULL, '院線片02', '2', '120', '2023-07-30', '發行商02', '導演02', '03B02v.mp4', '03B02.png', '院線片01簡介', '1', '2');
INSERT INTO `movies` (`id`, `name`, `level`, `length`, `ondate`, `publish`, `director`, `trailer`, `poster`, `intro`, `sh`, `rank`) 
              VALUES (NULL, '院線片03', '3', '120', '2023-07-31', '發行商03', '導演03', '03B03v.mp4', '03B03.png', '院線片01簡介', '1', '3');
INSERT INTO `movies` (`id`, `name`, `level`, `length`, `ondate`, `publish`, `director`, `trailer`, `poster`, `intro`, `sh`, `rank`) 
              VALUES (NULL, '院線片04', '4', '120', '2023-08-01', '發行商04', '導演04', '03B04v.mp4', '03B04.png', '院線片01簡介', '1', '4');
INSERT INTO `movies` (`id`, `name`, `level`, `length`, `ondate`, `publish`, `director`, `trailer`, `poster`, `intro`, `sh`, `rank`) 
              VALUES (NULL, '院線片05', '1', '120', '2023-08-02', '發行商05', '導演05', '03B05v.mp4', '03B05.png', '院線片01簡介', '1', '5');
INSERT INTO `movies` (`id`, `name`, `level`, `length`, `ondate`, `publish`, `director`, `trailer`, `poster`, `intro`, `sh`, `rank`) 
              VALUES (NULL, '院線片06', '2', '120', '2023-07-29', '發行商06', '導演06', '03B06v.mp4', '03B06.png', '院線片01簡介', '1', '6');
INSERT INTO `movies` (`id`, `name`, `level`, `length`, `ondate`, `publish`, `director`, `trailer`, `poster`, `intro`, `sh`, `rank`) 
              VALUES (NULL, '院線片07', '3', '120', '2023-07-30', '發行商07', '導演07', '03B07v.mp4', '03B07.png', '院線片01簡介', '1', '7');
INSERT INTO `movies` (`id`, `name`, `level`, `length`, `ondate`, `publish`, `director`, `trailer`, `poster`, `intro`, `sh`, `rank`) 
              VALUES (NULL, '院線片08', '4', '120', '2023-07-31', '發行商08', '導演08', '03B08v.mp4', '03B08.png', '院線片01簡介', '1', '8');
INSERT INTO `movies` (`id`, `name`, `level`, `length`, `ondate`, `publish`, `director`, `trailer`, `poster`, `intro`, `sh`, `rank`) 
              VALUES (NULL, '院線片09', '1', '120', '2023-08-01', '發行商09', '導演09', '03B09v.mp4', '03B09.png', '院線片01簡介', '1', '9');
INSERT INTO `movies` (`id`, `name`, `level`, `length`, `ondate`, `publish`, `director`, `trailer`, `poster`, `intro`, `sh`, `rank`) 
              VALUES (NULL, '院線片10', '2', '120', '2023-08-02', '發行商10', '導演10', '03B10v.mp4', '03B10.png', '院線片01簡介', '1', '10');
INSERT INTO `movies` (`id`, `name`, `level`, `length`, `ondate`, `publish`, `director`, `trailer`, `poster`, `intro`, `sh`, `rank`) 
              VALUES (NULL, '院線片11', '3', '120', '2023-07-30', '發行商11', '導演11', '03B11v.mp4', '03B11.png', '院線片01簡介', '1', '11');
INSERT INTO `movies` (`id`, `name`, `level`, `length`, `ondate`, `publish`, `director`, `trailer`, `poster`, `intro`, `sh`, `rank`) 
              VALUES (NULL, '院線片12', '4', '120', '2023-07-31', '發行商12', '導演12', '03B12v.mp4', '03B12.png', '院線片01簡介', '1', '12');
INSERT INTO `movies` (`id`, `name`, `level`, `length`, `ondate`, `publish`, `director`, `trailer`, `poster`, `intro`, `sh`, `rank`) 
              VALUES (NULL, '院線片13', '1', '120', '2023-08-01', '發行商13', '導演13', '03B13v.mp4', '03B13.png', '院線片01簡介', '1', '13');


-- 訂單
INSERT INTO `orders` (`id`, `no`, `movie`, `date`, `session`, `qt`, `seats`) VALUES (NULL, '202309110000', '院線片00', '2023-09-10', '14:00~16:00', '2', 'a:2:{i:0;i:0;i:1;i:1;}');
INSERT INTO `orders` (`id`, `no`, `movie`, `date`, `session`, `qt`, `seats`) VALUES (NULL, '202309110001', '院線片01', '2023-09-10', '14:00~16:00', '2', 'a:2:{i:0;i:2;i:1;i:3;}');
INSERT INTO `orders` (`id`, `no`, `movie`, `date`, `session`, `qt`, `seats`) VALUES (NULL, '202309110002', '院線片02', '2023-09-10', '14:00~16:00', '2', 'a:2:{i:0;i:4;i:1;i:5;}');
INSERT INTO `orders` (`id`, `no`, `movie`, `date`, `session`, `qt`, `seats`) VALUES (NULL, '202309110003', '院線片03', '2023-09-10', '14:00~16:00', '2', 'a:2:{i:0;i:6;i:1;i:7;}');
INSERT INTO `orders` (`id`, `no`, `movie`, `date`, `session`, `qt`, `seats`) VALUES (NULL, '202309110004', '院線片04', '2023-09-10', '14:00~16:00', '2', 'a:2:{i:0;i:8;i:1;i:9;}');
INSERT INTO `orders` (`id`, `no`, `movie`, `date`, `session`, `qt`, `seats`) VALUES (NULL, '202309110005', '院線片05', '2023-09-10', '14:00~16:00', '2', 'a:2:{i:0;i:10;i:1;i:11;}');
INSERT INTO `orders` (`id`, `no`, `movie`, `date`, `session`, `qt`, `seats`) VALUES (NULL, '202309110006', '院線片06', '2023-09-10', '14:00~16:00', '2', 'a:2:{i:0;i:12;i:1;i:13;}');
INSERT INTO `orders` (`id`, `no`, `movie`, `date`, `session`, `qt`, `seats`) VALUES (NULL, '202309110007', '院線片07', '2023-09-10', '14:00~16:00', '2', 'a:2:{i:0;i:14;i:1;i:15;}');
INSERT INTO `orders` (`id`, `no`, `movie`, `date`, `session`, `qt`, `seats`) VALUES (NULL, '202309110008', '院線片08', '2023-09-10', '14:00~16:00', '2', 'a:2:{i:0;i:16;i:1;i:17;}');