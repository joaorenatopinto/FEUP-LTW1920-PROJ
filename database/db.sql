CREATE TABLE users (
    username VARCHAR PRIMARY KEY,
    password VARCHAR,
    fullname VARCHAR,
    country VARCHAR,
    email VARCHAR,
    bio VARCHAR,
    joindate DATE
);

CREATE TABLE property (
    id INTEGER PRIMARY KEY,
    title VARCHAR,
    owner VARCHAR REFERENCES users,
    description VARCHAR,
    country VARCHAR,
    location VARCHAR,
    adress VARCHAR,
    nbathrooms INTEGER,
    nbedrooms INTEGER,
    nkitchens INTEGER,
    nlivingrooms INTEGER,
    type INTEGER, -- 0: flat/apartment ; 1: house
    price INTEGER,
    area INTEGER,
    postdate DATETIME--,
    --startAvailablePeriod DATE,
    --endAvailablePeriod DATE
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
    '7110eda4d09e062aa5e4a390b0a572ac0d2c0220',
    'Jacinto Leite Aquino Rego',
    'Portugal',
    'sonic@hotmail.com',
    '¯\_(ツ)_/¯',
    '2019-20-11'
);

INSERT INTO property VALUES(
    1,
    'Casa férias do estrondo varanda do estrondo',
    'sonic',
    'Descrição mais detalhada da casa dada pelo dono. Descrição mais detalhada da casa dada pelo dono. Descrição mais detalhada da casa dada pelo dono. Descrição mais detalhada da casa dada pelo dono. Descrição mais detalhada da casa dada pelo dono. ',
    'Portugal',
    'Vila Real',
    'Rua dos Mortos 123',
    2,
    4,
    1,
    1,
    1,
    800,
    249,
    '2007-05-08 12:35:29'
);

INSERT INTO property VALUES(
    2,
    'Casa férias do estrondo varanda do estrondo',
    'sonic',
    'Descrição mais detalhada da casa dada pelo dono. Descrição mais detalhada da casa dada pelo dono. Descrição mais detalhada da casa dada pelo dono. Descrição mais detalhada da casa dada pelo dono. Descrição mais detalhada da casa dada pelo dono. ',
    'Portugal',
    'Aveiro',
    'Rua Venesa 123',
    2,
    3,
    2,
    1,
    1,
    250,
    194,
    '2017-11-08 09:35:29'
);

INSERT INTO property VALUES(
    3,
    'Casa férias do estrondo varanda do estrondo',
    'sonic',
    'Descrição mais detalhada da casa dada pelo dono. Descrição mais detalhada da casa dada pelo dono. Descrição mais detalhada da casa dada pelo dono. Descrição mais detalhada da casa dada pelo dono. Descrição mais detalhada da casa dada pelo dono. ',
    'Portugal',
    'Penafiel',
    'Sameiro nº42',
    1,
    2, 
    1,
    1,
    1,
    120,
    200,
    '2015-05-07 12:50:29'
);


INSERT INTO property VALUES(
    4,
    'MANSÃO YURI ARAUJO CRAQUE PENAFIEL INCLUI ROUPA INTERIOR',
    'sonic',
    'Descrição mais detalhada da casa dada pelo dono. Descrição mais detalhada da casa dada pelo dono. Descrição mais detalhada da casa dada pelo dono. Descrição mais detalhada da casa dada pelo dono. Descrição mais detalhada da casa dada pelo dono. ',
    'Portugal',
    'Penafiel',
    'Sameiro nº42',
    1,
    2, 
    1,
    1,
    1,
    80,
    200,
    '2015-05-07 12:50:29'
);

INSERT INTO property VALUES(
    5,
    'Mansão do Papá Cris',
    'sonic',
    'Descrição mais detalhada da casa dada pelo dono. Descrição mais detalhada da casa dada pelo dono. Descrição mais detalhada da casa dada pelo dono. Descrição mais detalhada da casa dada pelo dono. Descrição mais detalhada da casa dada pelo dono. ',
    'Itália',
    'Turim',
    'Rua Messi 6969',
    10,
    10, 
    10,
    10,
    1,
    1000,
    1000,
    '2015-05-07 12:50:29'
);