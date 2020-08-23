CREATE TABLE users(
    username TEXT NOT NULL,
    password TEXT NOT NULL,
    UNIQUE(username)
);

INSERT INTO users (username, password) VALUES ("admin", "Siol1000?");
