-- HailHack schema, reconstructed from the application's queries (original dump was not kept).
CREATE DATABASE IF NOT EXISTS hailHACK CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE hailHACK;

CREATE TABLE admin_login (
  a_id      INT AUTO_INCREMENT PRIMARY KEY,
  a_name    VARCHAR(50)  NOT NULL UNIQUE,
  password  VARCHAR(255) NOT NULL
);

CREATE TABLE user (
  u_id      INT AUTO_INCREMENT PRIMARY KEY,
  name      VARCHAR(100) NOT NULL,
  email     VARCHAR(120) NOT NULL UNIQUE,
  password  VARCHAR(255) NOT NULL,
  Mobile    VARCHAR(15)  NOT NULL
);

CREATE TABLE driver_register (
  reg_id    INT AUTO_INCREMENT PRIMARY KEY,
  name      VARCHAR(100) NOT NULL,
  age       INT          NOT NULL,
  address   VARCHAR(255) NOT NULL,
  mobile    VARCHAR(15)  NOT NULL,
  email     VARCHAR(120) NOT NULL UNIQUE,
  password  VARCHAR(255) NOT NULL,
  lisence   VARCHAR(10)  NOT NULL, -- vehicle class the driver is licensed for: LMV / HMV
  charge    DECIMAL(8,2) NOT NULL,
  country   VARCHAR(60)  NOT NULL,
  state     VARCHAR(60)  NOT NULL,
  city      VARCHAR(60)  NOT NULL,
  image     VARCHAR(255) NULL      -- uploaded profile photo filename
);

CREATE TABLE booking (
  b_id      INT AUTO_INCREMENT PRIMARY KEY,
  uid       INT          NOT NULL,
  city      VARCHAR(60)  NOT NULL,
  date      DATE         NOT NULL,
  Time      TIME         NOT NULL,
  duration  INT          NOT NULL, -- hours
  name      VARCHAR(100) NOT NULL,
  mobile    VARCHAR(15)  NOT NULL,
  email     VARCHAR(120) NOT NULL,
  address   VARCHAR(255) NOT NULL,
  vehical   VARCHAR(10)  NOT NULL,
  driverid  INT          NOT NULL,
  status    TINYINT      NOT NULL DEFAULT 0, -- 0 pending · 1 confirmed · 2 completed
  FOREIGN KEY (uid) REFERENCES user(u_id),
  FOREIGN KEY (driverid) REFERENCES driver_register(reg_id)
);

CREATE TABLE payment (
  p_id      INT AUTO_INCREMENT PRIMARY KEY,
  uid       INT          NOT NULL,
  amt       DECIMAL(10,2) NOT NULL,
  status    TINYINT      NOT NULL DEFAULT 1,
  FOREIGN KEY (uid) REFERENCES user(u_id)
);

CREATE TABLE feedback (
  f_id      INT AUTO_INCREMENT PRIMARY KEY,
  uid       INT          NOT NULL,
  u_name    VARCHAR(100) NOT NULL,
  d_name    VARCHAR(100) NOT NULL,
  d_0_t     DATE         NULL,     -- date of trip
  msg       TEXT         NOT NULL,
  FOREIGN KEY (uid) REFERENCES user(u_id)
);

CREATE TABLE country_state_city (
  id        INT AUTO_INCREMENT PRIMARY KEY,
  country   VARCHAR(60) NOT NULL,
  state     VARCHAR(60) NOT NULL,
  city      VARCHAR(60) NOT NULL
);

-- Seed data for local development only.
INSERT INTO admin_login (a_name, password) VALUES ('admin', 'admin123');
INSERT INTO country_state_city (country, state, city) VALUES
  ('India', 'Karnataka', 'Bangalore'),
  ('India', 'Delhi', 'New Delhi'),
  ('India', 'Maharashtra', 'Mumbai'),
  ('India', 'Jharkhand', 'Ranchi');
