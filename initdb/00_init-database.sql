CREATE USER admin WITH
    LOGIN
    INHERIT
    CREATEDB
    PASSWORD 'admin';

CREATE DATABASE "sample" WITH
    OWNER = admin
    TEMPLATE = template0 
    ENCODING = 'UTF8'
    LC_COLLATE = 'C'
    LC_CTYPE = 'C';