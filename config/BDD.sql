CREATE TABLE OPTIONS(
    optID INT NOT NULL AUTO_INCREMENT,
    optPiscine TINYINT(1) DEFAULT 0,
    optBar TINYINT(1) DEFAULT 0,
    optRest TINYINT(1) DEFAULT 0,
    optCiner TINYINT(1) DEFAULT 0,
    optJardin TINYINT(1) DEFAULT 0,
    optPntHouse TINYINT(1) DEFAULT 0,
    PRIMARY KEY(optID)
); CREATE TABLE USER(
    userID INT NOT NULL AUTO_INCREMENT,
    userNom VARCHAR(20),
    userSurnom VARCHAR(30),
    userEmail VARCHAR(100),
    userMdp VARCHAR(30),
    userTel VARCHAR(14),
    userPerm VARCHAR(3),
    PRIMARY KEY(userID)
); CREATE TABLE chambres(
    chrID INT NOT NULL AUTO_INCREMENT,
    chrPlaces INT,
    chrTV TINYINT(1) DEFAULT 0,
    chrWifi TINYINT(1) DEFAULT 0,
    chrTaille INT,
    chrService TINYINT(1) DEFAULT 0,
    PRIMARY KEY(chrID)
); CREATE TABLE reservations(
    resID INT NOT NULL AUTO_INCREMENT,
    resDateDeb DATE,
    resDateFin DATE,
    userID INT,
    chrID INT,
    PRIMARY KEY(resID),
    FOREIGN KEY(userID) REFERENCES USER(userID),
    FOREIGN KEY(chrID) REFERENCES chambres(chrID)
); CREATE TABLE choixOpt(
    ChOpID INT NOT NULL AUTO_INCREMENT,
    resID INT,
    optID INT,
    PRIMARY KEY(ChOpID),
    FOREIGN KEY(resID) REFERENCES reservations(resID),
    FOREIGN KEY(optID) REFERENCES OPTIONS(optID)
);