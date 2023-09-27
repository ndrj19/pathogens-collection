CREATE DATABASE IF NOT EXISTS pathogens_collection;

USE pathogens_collection;

DROP TABLE IF EXISTS `pathogens`;
DROP TABLE IF EXISTS `pathogen_classifications`;

CREATE TABLE `pathogen_classifications` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pathogen_classification` varchar(255) DEFAULT NULL,
   PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

INSERT INTO `pathogen_classifications` (`pathogen_classification`) VALUES ('Bacteria');
INSERT INTO `pathogen_classifications` (`pathogen_classification`) VALUES ('Virus');
INSERT INTO `pathogen_classifications` (`pathogen_classification`) VALUES ('Parasite');
INSERT INTO `pathogen_classifications` (`pathogen_classification`) VALUES ('Fungi');

CREATE TABLE `pathogens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pathogen_classification` int(11) unsigned DEFAULT NULL,
  `species` varchar(255) DEFAULT NULL,
  `aka` varchar(255) DEFAULT NULL,
  `mortality_rate` varchar(255) DEFAULT NULL,
  `deaths_per_year` int(4) DEFAULT NULL,
  `year` int(3) DEFAULT NULL,
  `good_to_know` varchar(512) DEFAULT NULL,
  `image_link` varchar(1024) DEFAULT NULL,
  CONSTRAINT `fk_pathogen_classification` FOREIGN KEY (`pathogen_classification`) REFERENCES `pathogen_classifications`(`id`),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

INSERT INTO `pathogens` (`pathogen_classification`,`species`,`aka`,`mortality_rate`,`deaths_per_year`,`year`,`good_to_know`,`image_link`) VALUES (1,"Staphylococcus aureus","MRSA","25%",100000,2019,"Becoming one of the most deadly pathogens due to resistance.","https://i.ibb.co/KLJDvTX/625px-Staphylococcus-aureus-VISA-2.jpg");
INSERT INTO `pathogens` (`pathogen_classification`,`species`,`aka`,`mortality_rate`,`deaths_per_year`,`year`,`good_to_know`,`image_link`) VALUES (1,"Bacillus anthracis","Anthrax","20-100%",3,2020,"Usable as bio weapon.","https://i.ibb.co/YdFTG7y/524px-Bacillus-anthracis.png");
INSERT INTO `pathogens` (`pathogen_classification`,`species`,`aka`,`mortality_rate`,`deaths_per_year`,`year`,`good_to_know`,`image_link`) VALUES (1,"Yersinia pestis","Black death & Plague","22-100%",150000000,1317,"About 60% of the European population were killed in the middle ages.","https://i.ibb.co/jwYN0KS/640px-Yersinia-pestis.jpg");
INSERT INTO `pathogens` (`pathogen_classification`,`species`,`aka`,`mortality_rate`,`deaths_per_year`,`year`,`good_to_know`,`image_link`) VALUES (1,"Vibrio cholerae","Cholera","0-50%",121000,2021,"John Snow established the disease as water-borne.","https://i.ibb.co/VN7qt4Z/614px-Cholera-bacteria-SEM.jpg");
INSERT INTO `pathogens` (`pathogen_classification`,`species`,`aka`,`mortality_rate`,`deaths_per_year`,`year`,`good_to_know`,`image_link`) VALUES (1,"Mycobacterium tuberculosis","TBE","30%",1600000,2021,"TBE ranks among the most frequent complications of AIDS.","https://i.ibb.co/pnb32f4/tuberculosis.webp");
INSERT INTO `pathogens` (`pathogen_classification`,`species`,`aka`,`mortality_rate`,`deaths_per_year`,`year`,`good_to_know`,`image_link`) VALUES (2,"Human immunodeficiency virus","HIV","10 deaths per 100,000",6300000,2022,"Has a cat version: FIV (Feline immunodeficiency virus).","https://i.ibb.co/NTXbFtb/640px-HIV-budding-Color.jpg");
INSERT INTO `pathogens` (`pathogen_classification`,`species`,`aka`,`mortality_rate`,`deaths_per_year`,`year`,`good_to_know`,`image_link`) VALUES (2,"SARS-CoV-2","COVID-19","1-2%",3000000,2020,"SARS-CoV-1 occurred between 2002-2004.","https://i.ibb.co/Fbf8y7L/Coronavirus-09.jpg");
INSERT INTO `pathogens` (`pathogen_classification`,`species`,`aka`,`mortality_rate`,`deaths_per_year`,`year`,`good_to_know`,`image_link`) VALUES (2,"Ebolaviruses","Ebola","25-90%",4000,2016,"Spreads from body fluids.","https://i.ibb.co/9nM9t7y/ebola.webp");
INSERT INTO `pathogens` (`pathogen_classification`,`species`,`aka`,`mortality_rate`,`deaths_per_year`,`year`,`good_to_know`,`image_link`) VALUES (2,"Influenza A (H1N1)","Spanish Flu","2-25%",15000000,1920,"Killed around 50 million people between 1918-20.","https://i.ibb.co/SrKc2md/SARS-Co-V-2-viruses.jpg");
INSERT INTO `pathogens` (`pathogen_classification`,`species`,`aka`,`mortality_rate`,`deaths_per_year`,`year`,`good_to_know`,`image_link`) VALUES (3,"Plasmodium falciparum","Malaria","0.1-50%",625000,2020,"The mosquitoes prefer cows over humans.","https://i.ibb.co/KKhDTK4/640px-Plasmodium-falciparum-01.png");
INSERT INTO `pathogens` (`pathogen_classification`,`species`,`aka`,`mortality_rate`,`deaths_per_year`,`year`,`good_to_know`,`image_link`) VALUES (3,"Trichinella spiralis","Trichinella","0.20%",15,1950,"The worms can infect the brain. Making them Brain worms.","https://i.ibb.co/pQS1Rxy/Trichinella-larv1-DPDx.jpg");
INSERT INTO `pathogens` (`pathogen_classification`,`species`,`aka`,`mortality_rate`,`deaths_per_year`,`year`,`good_to_know`,`image_link`) VALUES (3,"Toxoplasma gondii","Toxoplasmosis","0.08-0.8%",750,2017,"Do not play with your cat's poo.","https://i.ibb.co/0hqG4CC/Toxoplasma-gondii-tachy.jpg");
INSERT INTO `pathogens` (`pathogen_classification`,`species`,`aka`,`mortality_rate`,`deaths_per_year`,`year`,`good_to_know`,`image_link`) VALUES (3,"Naegleria fowleri","Brain-eating amoeba",">97%",8,2020,"Do not take a bath in The Roman Baths.","https://i.ibb.co/VH37Q1J/brain-amoeba.jpg");
INSERT INTO `pathogens` (`pathogen_classification`,`species`,`aka`,`mortality_rate`,`deaths_per_year`,`year`,`good_to_know`,`image_link`) VALUES (4,"Candida Albicans","Candida","5-71% in immunosuppressed",200000,2018,"Candida Albicans is the number one cause of thrush.","https://i.ibb.co/HBLk83H/lossy-page1-640px-SEM-of-C-albicans-tif.jpg");
INSERT INTO `pathogens` (`pathogen_classification`,`species`,`aka`,`mortality_rate`,`deaths_per_year`,`year`,`good_to_know`,`image_link`) VALUES (4,"Aspergillus fumigatus","Aspergillus","25-90% in immunosuppressed",600,2017,"A. fumigatus only reproduces asexually.","https://i.ibb.co/qFcWjSt/Aspergillus.jpg");