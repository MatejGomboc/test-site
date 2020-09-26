CREATE OR REPLACE DATABASE credentials;

GRANT ALL PRIVILEGES ON credentials.* To 'testuser'@'localhost' IDENTIFIED BY 'testpwd';

USE credentials;

CREATE OR REPLACE TABLE users (
    rowid INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(10) NOT NULL,
    password VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL,
    UNIQUE (username),
    UNIQUE (email),
    PRIMARY KEY (rowid)
);

INSERT INTO users (username, password, email) VALUES ("test", "test", "test@localhost");
