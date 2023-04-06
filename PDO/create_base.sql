CREATE TABLE 'characters' (
'id' INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
'name' TEXT NOT NULL,
'strength' INTEGER NOT NULL,
'agility' INTEGER NOT NULL,
'intelligence' INTEGER NOT NULL,
'tribe' TEXT,
'class' TEXT NOT NULL DEFAULT 'warrior'
);

INSERT INTO characters (name, strength, agility, intelligence, tribe, class) VALUES ("Jérémy",9,10,5,"Viking du Sud","warrior");
INSERT INTO characters (name, strength, agility, intelligence, tribe, class) VALUES ("Robin",8,10,10,null,"magician");
INSERT INTO characters (name, strength, agility, intelligence, tribe, class) VALUES ("Loïs",8,10,5,"Viking du Nord","warrior");
INSERT INTO characters (name, strength, agility, intelligence, tribe, class) VALUES ("Lucas",7,9,5,"Viking de l'Est","warrior");
INSERT INTO characters (name, strength, agility, intelligence, tribe, class) VALUES ("Antoine",9,10,5,null,"magician");
INSERT INTO characters (name, strength, agility, intelligence, tribe, class) VALUES ("Landry",5,10,10,"Viking de l'Est","warrior");
INSERT INTO characters (name, strength, agility, intelligence, tribe, class) VALUES ("Eloi",7,9,7,"Viking du Nord","warrior");
INSERT INTO characters (name, strength, agility, intelligence, tribe, class) VALUES ("Franck",6,10,8,null,"magician");
INSERT INTO characters (name, strength, agility, intelligence, tribe, class) VALUES ("Adrien",6,9,5,null,"magician");
INSERT INTO characters (name, strength, agility, intelligence, tribe, class) VALUES ("Jordan",9,9,10,"Viking de l'Ouest","warrior");
INSERT INTO characters (name, strength, agility, intelligence, tribe, class) VALUES ("Sorenza",5,6,8,null,"magician");
INSERT INTO characters (name, strength, agility, intelligence, tribe, class) VALUES ("Tom",7,5,7,null,"magician");
INSERT INTO characters (name, strength, agility, intelligence, tribe, class) VALUES ("Thibault",8,8,6,"Viking de l'Est","warrior");
INSERT INTO characters (name, strength, agility, intelligence, tribe, class) VALUES ("Victor",10,8,6,null,"magician");
INSERT INTO characters (name, strength, agility, intelligence, tribe, class) VALUES ("Ugo",7,6,7,"Viking de l'Est","warrior");
INSERT INTO characters (name, strength, agility, intelligence, tribe, class) VALUES ("Asseel",7,8,5,null,"magician");
INSERT INTO characters (name, strength, agility, intelligence, tribe, class) VALUES ("Rémi",5,6,6,"Viking du Sud","warrior");
INSERT INTO characters (name, strength, agility, intelligence, tribe, class) VALUES ("Thomas",8,7,5,"Viking du Sud","warrior");
INSERT INTO characters (name, strength, agility, intelligence, tribe, class) VALUES ("Geoffrey",7,5,8,"Viking du Nord","warrior");
INSERT INTO characters (name, strength, agility, intelligence, tribe, class) VALUES ("Issam",10,5,7,null,"magician");
INSERT INTO characters (name, strength, agility, intelligence, tribe, class) VALUES ("Gaëtan",7,5,8,"Viking du Nord","warrior");
INSERT INTO characters (name, strength, agility, intelligence, tribe, class) VALUES ("Kévin",5,9,7,null,"magician");
