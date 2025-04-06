CREATE DATABASE testprojet;
USE testprojet;

CREATE TABLE users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
)

INSERT INTO users VALUES(
    ('testuser','testpassword'),
    ('kone','ma')

);

-- CREATE TABLE categories (
--     id_categorie INT PRIMARY KEY AUTO_INCREMENT,
--     nom VARCHAR(100) NOT NULL
-- );

-- CREATE TABLE recettes (
--     id_recette INT PRIMARY KEY AUTO_INCREMENT,
--     nom VARCHAR(255) NOT NULL,
--     description TEXT NOT NULL,
--     id_categorie INT,
--     FOREIGN KEY (id_categorie) REFERENCES categories(id_categorie)
-- );

-- CREATE TABLE ingredients (
--     id_ingredient INT PRIMARY KEY AUTO_INCREMENT,
--     nom VARCHAR(100) NOT NULL
-- );

-- CREATE TABLE recette_ingredient (
--     id_recette INT,
--     id_ingredient INT,
--     PRIMARY KEY (id_recette, id_ingredient),
--     FOREIGN KEY (id_recette) REFERENCES recettes(id_recette),
--     FOREIGN KEY (id_ingredient) REFERENCES ingredients(id_ingredient)
-- );


-- INSERT INTO categories (nom) VALUES
-- ('Entrée'),
-- ('Plat principal'),
-- ('Dessert');


-- INSERT INTO ingredients (nom) VALUES
-- ('Œuf'),
-- ('Farine'),
-- ('Lait'),
-- ('Sucre'),
-- ('Beurre'),
-- ('Sel'),
-- ('Yaourt');

-- INSERT INTO recettes (nom, description, id_categorie) VALUES
-- ('Crêpes', 'Mélanger les œufs, la farine, le lait et une pincée de sel. Cuire à la poêle.', 2),
-- ('Gâteau au yaourt', 'Mélanger les œufs, le sucre, le yaourt et la farine. Enfourner 30 min.', 3);

-- INSERT INTO recette_ingredient (id_recette, id_ingredient) VALUES
-- (1, 1),  -- Œuf
-- (1, 2),  -- Farine
-- (1, 3),  -- Lait
-- (1, 6);  -- Sel

-- INSERT INTO recette_ingredient (id_recette, id_ingredient) VALUES
-- (2, 1),  -- Œuf
-- (2, 2),  -- Farine
-- (2, 4),  -- Sucre
-- (2, 7); -- Yaourt
