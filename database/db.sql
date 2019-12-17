CREATE TABLE users (
    username VARCHAR PRIMARY KEY,
    password VARCHAR,
    fullname VARCHAR,
    country VARCHAR,
    email VARCHAR,
    bio VARCHAR,
    joindate TEXT
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
    startAvailablePeriod TEXT,
    endAvailablePeriod TEXT
);

CREATE TABLE reservations (
    id INTEGER PRIMARY KEY,
    owner_id INTEGER REFERENCES users,
    client_id INTEGER REFERENCES users,
    property_id INTEGER REFERENCES property,
    start_date TEXT,
    end_date TEXT,
    CONSTRAINT fk_property
        FOREIGN KEY (property_id)
        REFERENCES property (id)
        ON DELETE CASCADE
);

CREATE TABLE review (
    id INTEGER PRIMARY KEY,
    reservation_id INTEGER REFERENCES reservation,
    user_id INTEGER REFERENCES users,
    rating INTEGER,
    comment VARCHAR
);
/*
INSERT INTO users VALUES(
    'user',
    '$2y$12$rNprhBIjM0tck6N4Bi2Y0u9kSbrOl.PFXKcoOjxM9c34N3KLSzZse',
    'Nome do User',
    'Portugal',
    'email_do_user@gmail.com',
    'Bio do User. Bio do User. Bio do User. Bio do User. Bio do User. Bio do User. Bio do User. Bio do User. Bio do User. Bio do User. Bio do User.',
    '2019-12-11'
);

INSERT INTO property VALUES(
    1,
    'Casa do User 1',
    'user',
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
    '2020-01-01',
    '2020-01-30'
);

INSERT INTO property VALUES(
    2,
    'Casa férias do estrondo varanda do estrondo',
    'user',
    'Disponível de 01 a 20 de Fev. Descrição mais detalhada da casa dada pelo dono. Descrição mais detalhada da casa dada pelo dono. Descrição mais detalhada da casa dada pelo dono. Descrição mais detalhada da casa dada pelo dono. Descrição mais detalhada da casa dada pelo dono. ',
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
    '2020-02-01',
    '2020-02-20'
);
*/