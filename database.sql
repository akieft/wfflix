DROP TABLE IF EXISTS comment;
DROP TABLE IF EXISTS videos;
DROP TABLE IF EXISTS category;
DROP TABLE IF EXISTS admin;
DROP TABLE IF EXISTS users;
CREATE TABLE admin
(
    medId           int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    voornaam        varchar(255)                       NOT NULL,
    tussenvoegsel   varchar(255)                       ,
    achternaam      varchar(255)                       NOT NULL,
    email           varchar(255)                       NOT NULL UNIQUE,
    createdAt       datetime default now()             ,
    gebruikersnaam  varchar(255)                       NOT NULL,
    wachtwoord      varchar(255)                       NOT NULL
);

INSERT INTO admin (voornaam, tussenvoegsel, achternaam, email, gebruikersnaam, wachtwoord)
VALUES('Rudy', '', 'Borgsted', 'Rudy@hotmail.nl', 'Rudy', 'Rudy');
INSERT INTO admin (voornaam, tussenvoegsel, achternaam, email, gebruikersnaam, wachtwoord)
VALUES('Stephan', '', 'Hoeksema', 'Stephan@hotmail.nl', 'Stephan', 'Stephan');
INSERT INTO admin (voornaam, tussenvoegsel, achternaam, email, gebruikersnaam, wachtwoord)
VALUES('Matthijs', 'de', 'Vos', 'Matthijs@hotmail.nl', 'Matthijs', 'Matthijs');

CREATE TABLE users
(
    klantId         int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    voornaam        varchar(255)                       NOT NULL,
    tussenvoegsel   varchar(255)                       ,
    achternaam      varchar(255)                       NOT NULL,
    email           varchar(255)                       NOT NULL UNIQUE,
    createdAt       datetime default now()             ,
    gebruikersnaam  varchar(255)                       NOT NULL,
    wachtwoord      varchar(255)                       NOT NULL
);

INSERT INTO users (voornaam, tussenvoegsel, achternaam, email, gebruikersnaam, wachtwoord)
VALUES('Edwin', '', 'Mulder', 'Edwin@hotmail.nl', 'Edwin', 'adsd');
INSERT INTO users (voornaam, tussenvoegsel, achternaam, email, gebruikersnaam, wachtwoord)
VALUES('Aman', '', 'Maksoedan', 'Aman@hotmail.nl', 'Aman', 'adsd');
INSERT INTO users (voornaam, tussenvoegsel, achternaam, email, gebruikersnaam, wachtwoord)
VALUES('Jamal', '', 'Arnhem', 'Jamal@hotmail.nl', 'Jamal', 'adsd');
INSERT INTO users (voornaam, tussenvoegsel, achternaam, email, gebruikersnaam, wachtwoord)
VALUES('Chelly', '', 'Somopawiro', 'Chelly@hotmail.nl', 'Chelly', 'adsd');
INSERT INTO users (voornaam, tussenvoegsel, achternaam, email, gebruikersnaam, wachtwoord)
VALUES('Hermijn', '', 'Verbaan', 'Hermijn@hotmail.nl', 'Hermijn', 'adsd');
INSERT INTO users (voornaam, tussenvoegsel, achternaam, email, gebruikersnaam, wachtwoord)
VALUES('Amy', '', 'Agterberg', 'Amy@hotmail.nl', 'Amy', 'adsd');
INSERT INTO users (voornaam, tussenvoegsel, achternaam, email, gebruikersnaam, wachtwoord)
VALUES('Annemieke', '', 'Kieft', 'Annemieke@hotmail.nl', 'Annemieke', 'adsd');
INSERT INTO users (voornaam, tussenvoegsel, achternaam, email, gebruikersnaam, wachtwoord)
VALUES('Daphne', '', 'Zwuup', 'Daphne@hotmail.nl', 'Daphne', 'adsd');


CREATE TABLE category
(
    catId           int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    naam            varchar(255)                       NOT NULL,
    Beschrijving    varchar(500)                       NOT NULL
);

INSERT INTO category (naam, Beschrijving)
VALUES( 'PHP', 'PHP is een veel gebruikte BACK-END taal.');
INSERT INTO category (naam, Beschrijving)
VALUES( 'HTML', 'HTML is een universaile gebruikte FRONT-END taal.');
INSERT INTO category (naam, Beschrijving)
VALUES( 'CSS', 'CSS is een veel gebruikte styling taal.');
INSERT INTO category (naam, Beschrijving)
VALUES( 'Javascript', 'Javascript is een veel gebruikte script taal.');

CREATE TABLE videos
(
    videoId         int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    link            varchar(255)                       NOT NULL,
    titel           varchar(255)                       NOT NULL,
    beschrijving    varchar(500)                       NOT NULL,
    createdAt       datetime default now()                     ,
    catId           int,
    FOREIGN KEY (catId) REFERENCES category(catId)
);

INSERT INTO videos (link, titel, beschrijving, catId)
VALUES('test.mp4', 'Basis van PHP', 'In deze video zal ik jullie leren over de basis gebruik van php.', '1');
INSERT INTO videos (link, titel, beschrijving, catId)
VALUES('test.mp4', 'Variabelen', 'In deze video zal ik jullie de vele gebruiken van variabelen laten zien.', '1');
INSERT INTO videos (link, titel, beschrijving, catId)
VALUES('test.mp4', 'Database connectie', 'In deze video zal ik jullie leren over hoe jij een database kan maken en connecten aan jouw php code.', '1');
INSERT INTO videos (link, titel, beschrijving, catId)
VALUES('test.mp4', 'Loops', 'In deze video zal ik jullie laten zien hoe je while, loop en foreach gebruikt in php.', '1');
INSERT INTO videos (link, titel, beschrijving, catId)
VALUES('test.mp4', 'Basis van HTML', 'In deze video zal ik jullie de basis van de FRONT-END taal "HTML" laten zien.', '2');
INSERT INTO videos (link, titel, beschrijving, catId)
VALUES('test.mp4', 'Tags', 'In deze video zal ik jullie veel bekende tags laten zien zoals div, p, a en br.', '2');
INSERT INTO videos (link, titel, beschrijving, catId)
VALUES('test.mp4', 'Form', 'In deze video zal ik jullie laten zien hoe jullie en form moeten maken en welke attributen erbij horen.', '2');
INSERT INTO videos (link, titel, beschrijving, catId)
VALUES('test.mp4', 'META', 'In deze video zal ik het punt van de meta gegevens uitleggen.', '2');
INSERT INTO videos (link, titel, beschrijving, catId)
VALUES('test.mp4', 'Basis van CSS', 'In deze video zal ik jullie de basis van CSS uitleggen.', '3');
INSERT INTO videos (link, titel, beschrijving, catId)
VALUES('test.mp4', 'Classen en Ids', 'In deze video zal ik jullie het verschil uitleggen tussen een "class" en een "id".', '3');
INSERT INTO videos (link, titel, beschrijving, catId)
VALUES('test.mp4', 'Border', 'In deze video zal ik jullie het border attribuut van CSS uitleggen.', '3');
INSERT INTO videos (link, titel, beschrijving, catId)
VALUES('test.mp4', 'Responsive', 'In deze video zal ik jullie laten zien hoe je jouw website responsive kan maken doormiddel van @media.', '3');
INSERT INTO videos (link, titel, beschrijving, catId)
VALUES('test.mp4', 'Basis van Javascript', 'In deze video zal ik jullie de basis van Javascript uitleggen.', '4');
INSERT INTO videos (link, titel, beschrijving, catId)
VALUES('test.mp4', 'Integratie', 'In deze video zal ik jullie laten zien hoe je javascript in jouw project can integreren.', '4');
INSERT INTO videos (link, titel, beschrijving, catId)
VALUES('test.mp4', 'Functions', 'In deze video zal ik jullie laten zien hoe jullie "functions" gebruikt in javascript.', '4');
INSERT INTO videos (link, titel, beschrijving, catId)
VALUES('test.mp4', 'Inline javascript', 'In deze video zal ik jullie laten zien hoe jullie inline javascript gebruikt in jullie projecten.', '4');

CREATE TABLE comment
(
    commentId       int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    beschrijving    varchar(500)                       NOT NULL,
    createdAt       datetime default now()                     ,
    klantId         int,
    FOREIGN KEY (klantId) REFERENCES users(klantID),
    videoId         int,
    FOREIGN KEY (videoId) REFERENCES videos(videoId)
);

INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Top PHP Basis video :).', '1', '1');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Top PHP Basis video dankje.', '2', '1');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Helemaal begrepen thx :).', '3', '1');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Hierna op naar Front-end haha.', '4', '1');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Top PHP video :).', '1', '2');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Oh dus dat is hoe variabelen werken.', '5', '2');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Dus dat is waar het $ teken voor dient.', '6', '2');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Ik vraag me af hoeveel data ik in 1 variabel kan zetten.', '7', '2');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Top php video :).', '1', '3');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Ik kies denk ik mariaDB.', '8', '3');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Ik hou het vanilla met MySQL.', '2', '3');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Ik wist niet dat float bestond.', '3', '3');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Top php video :).', '1', '4');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('While loops lijken mij zeer handig.', '4', '4');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Nu snap ik de "as" bij een foreach.', '5', '4');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Ah dus dat is wat er met loops wordt bedoelt.', '6', '4');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Top html video :).', '1', '5');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('This is where it all begins.', '7', '5');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Nu op naar css haha.', '8', '5');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('En nu op naar back-end.', '1', '5');

INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Dankje nu kan ik eindelijk een basic website maken!', '1', '6');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Ik heb een goed jaar willen leren programmeren, maar bleef wachten op het begin.', '2', '6');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Bedankt voor de korte en simple uitleg!', '3', '6');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Ik begin net codering te begrijpen. Dank je.', '4', '6');

INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Ik zweer het je, school is tegenwoordig nutteloos. Nu kan ik eindelijk een goede formulier maken!', '1', '7');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Fantastische uitleg en makkelijk om te begrijpen. Wat een held!', '5', '7');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Net wanneer ik het nodig had! Ik had altijd moeite met het maken van formulieren.', '6', '7');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Bedankt voor de uitleg.', '7', '7');

INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Slechts 1 minuut van de video van deze man leerde me meer dan 3 maanden van mijn school.', '1', '8');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Wie is die vent? Geweldige onderwijsvaardigheden', '8', '8');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Dit ziet er altijd zo eenvoudig uit totdat je het zelf moet doen.', '2', '8');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Ik kon het hele concept door de hele video heen begrijpen', '3', '8');

INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Welke software kan je gebruiken om CSS te coderen.', '1', '9');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Echt nuttig, ik heb een constante strijd met CSS om alles te onthouden, en ik wil niet naar JS gaan voordat ik het onder de knie heb. Bedankt hiervoor!', '4', '9');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('uitstekende cursus - ik raad het ten zeerste aan :)', '5', '9');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Een perfecte zelfstudie voor CSS-beginners. Goed gedaan dankje wel!!!', '6', '9');

INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('nu zal ik het verschil in class en id nooit vergeten. Bedankt meneer :)', '1', '10');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Bedankt voor het uitleggen van het verschil.', '7', '10');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('kan ik alleen id''s gebruiken in plaats van class?', '8', '10');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Welke coderingseditor is dat?', '2', '10');

INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Dankje wel voor de video. De eerste opmerking die je maakte over het definiëren van een border-style voordat een eigenschap kan worden toegepast, was  wat ik zocht.', '1', '11');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Kort en informatief dankje wel!', '3', '11');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Cool veel nieuwe dingen bij geleerd over borders. ', '4', '11');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Voor diegene die het willen weten de volgende border-style die je kunt gebruiken:
Dotted, dashed, solid, double, groove, ridge, inset, outset, none, hidden', '5', '11');

INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Bedankt man, je bent de beste. De enige die deze dingen weet uit te leggen', '1', '12');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('20:50 Ik begrijp het niet, als ik mijn scherm uitrek, word de tekst en het beeld steeds meer en verder van elkaar verwijderd, in plaats  aan elkaar te kleven.', '6', '12');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Voor het eerst heb ik een responsive webdesign geleerd, zelfs nadat ik veel tutorials heb doorlopen. ', '7', '12');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Bedankt voor de beknopte uitleg. Het was gemakkelijk te begrijpen!', '8', '12');

INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Top Javascript video :).', '1', '13');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Ah dus je kan het ook zo activeren.', '2', '13');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Ik had javascript altijd veer moeilijker ingebeeld.', '3', '13');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Ik wist nooit dat Java en Javascript niet hetzelfde zijn.', '4', '13');

INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Top Javascript video :).', '1', '14');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Ah dus je laad het meestal onder aan de head in.', '5', '14');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Ik wist niet dat je het inlaadde zoals een css file.', '6', '14');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Das snel.', '7', '14');

INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Top javascript video :).', '1', '15');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Dus een beetje zoals bij php.', '8', '15');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Leuk om te zien dat je hier ook mee kan calculeren.', '2', '15');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Ah dus dat is hoe je die gegevens onthoud.', '3', '15');

INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Top Javascript video :).', '1', '16');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Oh dus je kan het ook in een "a" tag gebruiken.', '4', '16');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Het eerste voorbeeld lijkt mij juist onnodig. Kun je niet gewoon een form gebruiken?', '5', '16');
INSERT INTO comment (beschrijving, klantId, videoId)
VALUES('Dit is heel anders dan Java.', '6', '16');