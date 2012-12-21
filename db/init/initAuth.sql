DROP DATABASE IF EXISTS paramo10_auth;
CREATE DATABASE paramo10_auth;
USE paramo10_auth;
CREATE TABLE users
(
  u_id INT AUTO_INCREMENT NOT NULL,
  username VARCHAR(30) UNIQUE NOT NULL,
  pass BINARY(60) NOT NULL,
  PRIMARY KEY(u_id)
);

GRANT SELECT, INSERT, UPDATE, DELETE ON paramo10_auth.users TO 'paramo10_web'@'localhost';
