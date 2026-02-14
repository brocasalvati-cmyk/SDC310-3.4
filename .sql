-- Create the database if it doesn't exist
CREATE DATABASE IF NOT EXISTS sdc310_wk3pa;
USE sdc310_wk3pa;

-- Create the personal_info table
CREATE TABLE IF NOT EXISTS personal_info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    dob DATE NOT NULL,
    favorite_color VARCHAR(50),
    favorite_place VARCHAR(100),
    nickname VARCHAR(50)
);

-- Optional: Insert a sample record for testing
INSERT INTO personal_info (name, dob, favorite_color, favorite_place, nickname)
VALUES ('Broc Salvati', '1990-01-01', 'Blue', 'Mountains', 'Broc');
