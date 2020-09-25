CREATE OR REPLACE DATABASE credentials;

USE credentials;

CREATE OR REPLACE TABLE users (
    rowid INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(10) NOT NULL,
    password VARCHAR(20) NOT NULL,
    UNIQUE (username),
    PRIMARY KEY (rowid)
);

INSERT INTO users (username, password) VALUES ("test", "test");

