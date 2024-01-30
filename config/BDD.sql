CREATE TABLE options (
    optID int NOT null auto_increment,
    optPiscine bool,
    optBar bool,
    optRest bool,
    optCiner bool,
    optJardin bool,
    optPntHouse bool,
    primary key (optID)
);
CREATE TABLE user (
    userID int NOT null auto_increment,
    userNom varchar(20),
    userSurnom varchar(30),
    userEmail varchar(100),
    userMdp varchar(30),
    userTel varchar(14),
    userPerm varchar(3),
    primary key (userID)
);
CREATE TABLE chambres (
    chrID int NOT null auto_increment,
    chrPlaces int,
    chrTV bool,
    chrWifi bool,
    chrTaille int,
    chrService bool,
    primary key (chrID)
);
CREATE TABLE reservations (
    resID int NOT null auto_increment,
    resDateDeb date,
    resDateFin date,
    userID int,
    chrID int,
    primary key (resID),
    FOREIGN KEY (userID) REFERENCES user(userID),
    FOREIGN KEY (chrID) REFERENCES chambres(chrID)
);
CREATE TABLE choixOpt (
    ChOpID int NOT null auto_increment,
    resID int,
    optID int,
    primary key (ChOpID),
    FOREIGN KEY (resID) REFERENCES reservations(resID),
    FOREIGN KEY (optID) REFERENCES options(optID)
);