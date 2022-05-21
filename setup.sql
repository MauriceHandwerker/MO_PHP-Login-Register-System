## Create Database
CREATE DATABASE web_app;

CREATE TABLE users 
(
    uid             INT AUTO_INCREMENT=100000,
    username        VARCHAR(70) NOT NULL,
    password        VARCHAR(255) NOT NULL,
    email           VARCHAR(255) NOT NULL,
    group           VARCHAR(255) NOT NULL DEFAULT 'user',
    create_date     DATE DEFAULT GETDATE(),
    PRIMARY KEY (uid), UNIQUE(email)
);

ROLLEBACK;
-- CIMMIT;