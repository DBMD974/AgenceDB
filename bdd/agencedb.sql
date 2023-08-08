CREATE TABLE `bien_immobilier` (
	`id_propriete` INT NOT NULL AUTO_INCREMENT,
	`titre_bien` varchar(10000) NOT NULL,
	`description` TEXT(1000000) NOT NULL,
	`prix_bien` DECIMAL NOT NULL,
	`localisation_bien` varchar(10000) NOT NULL,
	`type_bien` varchar(10000) NOT NULL,
	`status` varchar(10000) NOT NULL,
	`image` varchar(10000) NOT NULL,
	PRIMARY KEY (`id_propriete`)
);

CREATE TABLE `agents` (
	`id_agents` INT NOT NULL AUTO_INCREMENT,
	`nom` varchar(250) NOT NULL,
	`prenom` varchar(250) NOT NULL,
	`contact_telephone` varchar(205) NOT NULL,
	`email` varchar(250) NOT NULL,
	`biographie` varchar(10000) NOT NULL,
	PRIMARY KEY (`id_agents`)
);

CREATE TABLE `utilisateur` (
	`id_utilisateur` INT NOT NULL AUTO_INCREMENT,
	`nom` varchar(250) NOT NULL,
	`prenom` varchar(250) NOT NULL,
	`email` varchar(500) NOT NULL,
	`mdp` varchar(500) NOT NULL,
	`role` varchar(1000) NOT NULL,
	PRIMARY KEY (`id_utilisateur`)
);

CREATE TABLE `favoris` (
	`id_favoris` INT NOT NULL AUTO_INCREMENT,
	`id_untilisateur` INT NOT NULL,
	`id_propriete` INT NOT NULL,
	PRIMARY KEY (`id_favoris`)
);

CREATE TABLE `form_contact` (
	`id_contact` INT NOT NULL AUTO_INCREMENT,
	`id_utilisateur` INT NOT NULL,
	`id_propriete` INT NOT NULL,
	`message` TEXT(1000000) NOT NULL,
	PRIMARY KEY (`id_contact`)
);

ALTER TABLE `favoris` ADD CONSTRAINT `favoris_fk0` FOREIGN KEY (`id_untilisateur`) REFERENCES `utilisateur`(`id_utilisateur`);

ALTER TABLE `favoris` ADD CONSTRAINT `favoris_fk1` FOREIGN KEY (`id_propriete`) REFERENCES `bien_immobilier`(`id_propriete`);

ALTER TABLE `form_contact` ADD CONSTRAINT `form_contact_fk0` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur`(`id_utilisateur`);

ALTER TABLE `form_contact` ADD CONSTRAINT `form_contact_fk1` FOREIGN KEY (`id_propriete`) REFERENCES `bien_immobilier`(`id_propriete`);






