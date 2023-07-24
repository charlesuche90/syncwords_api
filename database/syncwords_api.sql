-- Create the database
CREATE DATABASE syncwords_api;

-- Use the database
USE syncwords_api;

-- Create the authorization table
CREATE TABLE authorization (
    id SERIAL PRIMARY KEY,
    account_name VARCHAR(200) NOT NULL,
    account_token VARCHAR(255) NOT NULL
);

-- Create the events table
CREATE TABLE events (
    id BIGINT PRIMARY KEY,
    event_title VARCHAR(200) NOT NULL,
    event_start_date TIMESTAMP WITHOUT TIME ZONE NOT NULL,
    event_end_date TIMESTAMP WITHOUT TIME ZONE NOT NULL,
    organization_id BIGINT NOT NULL,
    FOREIGN KEY (organization_id) REFERENCES authorization(id)
);
