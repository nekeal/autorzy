CREATE TABLE `autorzy` (
	`idautora` INT NOT NULL AUTO_INCREMENT,
	`imie` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
	`nazwisko` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
	`data_ur` DATE NOT NULL,
	`miejsce_ur` VARCHAR(100) NOT NULL,
	PRIMARY KEY (`idautora`)
);