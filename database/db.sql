CREATE TABLE users (
    username VARCHAR PRIMARY KEY,
    password VARCHAR,
    firstname VARCHAR,
    lastname VARCHAR
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