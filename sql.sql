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