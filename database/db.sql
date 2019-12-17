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

INSERT INTO users VALUES(
    'user',
    'password',
    'User Exemplo',
    'Portugal',
    'email_do_user@email.com',
    'Bio do user. Bio do user. Bio do user. Bio do user. Bio do user. Bio do user. Bio do user. Bio do user. Bio do user. Bio do user.',
    strftime('%Y/%m/%d',date('now'))
);

INSERT INTO property VALUES(
    1,
    'Casa do User 1',
    'user',
    'Descrição mais detalhada da casa dada pelo dono. Descrição mais detalhada da casa dada pelo dono. Descrição mais detalhada da casa dada pelo dono. Descrição mais detalhada da casa dada pelo dono. Descrição mais detalhada da casa dada pelo dono. ',
    'Portugal',
    'Localização da Casa',
    'Rua dos Mortos 123',
    2,
    4,
    1,
    1,
    1,
    300,
    700,
    '2020-06-01',
    '2020-09-01'
);