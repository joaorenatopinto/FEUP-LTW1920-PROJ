CREATE TABLE users (
    username VARCHAR PRIMARY KEY,
    password VARCHAR,
    fullname VARCHAR,
    country VARCHAR,
    email VARCHAR,
    bio VARCHAR
);

CREATE TABLE property (
    id INTEGER PRIMARY KEY,
    owner VARCHAR REFERENCES users,
    country VARCHAR,
    location VARCHAR,
    adress VARCHAR,
    nbathrooms INTEGER,
    nbedrooms INTEGER,
    nkitchens INTEGER,
    nlivingrooms INTEGER,
    type INTEGER, -- 0: flat/apartment ; 1: house
    pricePerDay INTEGER,
    postdate DATETIME
);

CREATE TABLE reservation (
    id INTEGER PRIMARY KEY,
    owner_id INTEGER REFERENCES users,
    client_id INTEGER REFERENCES users,
    start_date DATE,
    end_date DATE
);

CREATE TABLE review (
    id INTEGER PRIMARY KEY,
    reservation_id INTEGER REFERENCES reservation,
    user_id INTEGER REFERENCES users,
    rating INTEGER,
    comment VARCHAR
);

INSERT INTO users VALUES( 
    'sonic',
    '1234',
    'Jacinto Leite Aquino Rego',
    'Portugal',
    'sonic@hotmail.com',
    '¯\_(ツ)_/¯'
);

INSERT INTO property VALUES(
    1,
    'sonic',
    'Portugal',
    'Porto',
    'Areosa City',
    2,
    4,
    1,
    1,
    1,
    300,
    '2007-05-08 12:35:29'
);

INSERT INTO property VALUES(
    2,
    'sonic',
    'Portugal',
    'Porto',
    'Penafiel',
    2,
    3,
    2,
    1,
    1,
    250,
    '2017-11-08 09:35:29'
);

INSERT INTO property VALUES(
    3,
    'sonic',
    'Portugal',
    'Porto',
    'Porto',
    1,
    2,
    1,
    1,
    1,
    150,
    '2015-05-07 12:50:29'
);
