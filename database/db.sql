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
    type TEXT, -- 'house' or 'flat'
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
    'prof_ltw',
    '$2y$12$0scYkZBDMWCLGjhNkXLhUubwXDhje9wx1nIjEPjcX0Kc8yO/o0eQm',
    'Prof LTW',
    'Portugal',
    'prof_ltw@ltw.com',
    'Bio do professor. Bio do professor.Bio do professor.Bio do professor.Bio do professor.Bio do professor.Bio do professor.Bio do professor.Bio do professor.Bio do professor.Bio do professor.',
    strftime('%Y/%m/%d',date('now'))
);

INSERT INTO property VALUES(
    1,
    'FEUP',
    'prof_ltw',
    'A Faculdade de Engenharia da Universidade do Porto (FEUP), é um estabelecimento de Ensino Superior da Universidade do Porto dedicado ao ensino da Engenharia. nauguradas em 2001, concebidas pelos arquitectos Pedro Ramalho e Luis Ramalho, a FEUP conta com novas instalações no pólo II da Universidade do Porto, junto do Hospital de S.João/Faculdade de Medicina da Universidade do Porto.',
    'Portugal',
    'Asprela, Porto',
    'R. Dr Roberto Frias',
    50,
    1,
    10,
    10,
    'house',
    500000,
    93918,
    '2020-01-01',
    '2020-07-15'
);

INSERT INTO users VALUES(
    'bruno_aleixo',
    '$2y$12$0scYkZBDMWCLGjhNkXLhUubwXDhje9wx1nIjEPjcX0Kc8yO/o0eQm',
    'Bruno Aleixo',
    'Portugal',
    'bruno_aleixo@antena3.com',
    'Bruno Aleixo é uma figura pública que reside na cidade de Coimbra. Além do talk-show que apresentou em 2008/09 e 2012/13 (SIC Radical), poucos se sabe da sua ocupação profissional e muito menos de onde advêm os seus rendimentos. Vive sozinho num prédio com porteiro.',
    strftime('%Y/%m/%d',date('now'))
);

INSERT INTO property VALUES(
    3,
    'Apartamento junto ao bar do Fabio Coentrão',
    'bruno_aleixo',
    'Apartamento T1 junto à praia em Vila do Conde. Moderno e com muito boa localização, tanto para apanhar sol como para, quando já se pôs o mesmo, ir para a vadice no bar louco do Fábio Coentrão.',
    'Portugal',
    'Vila do Conde',
    'Rua Conde da Vila 1234',
    1,
    1,
    1,
    1,
    'flat',
    120,
    100,
    '2020-01-15',
    '2020-05-20'
);

INSERT INTO users VALUES(
    'afonso99m',
    '$2y$12$0scYkZBDMWCLGjhNkXLhUubwXDhje9wx1nIjEPjcX0Kc8yO/o0eQm',
    'Afonso Mendonça',
    'Portugal',
    'afonsomendonca92@gmail.com',
    'Sou apenas um estudante sem talento para absolutamente coisa nenhuma. No entanto, apreciador de vida boémia e de uma boa cadeira de Linguagens e Tecnologias Web.',
    strftime('%Y/%m/%d',date('now'))
);

INSERT INTO property VALUES(
    2,
    'Luxury boat-house for four for summer',
    'afonso99m',
    'Boat-house situated in the Amstel river, Amsterdam. Suited for four and very spacious and confortable. Perfect for those who want to experience life floating in the river but without sacrificing any confort.',
    'Netherlands',
    'Amstel River',
    'Rua na Holanda',
    2,
    4,
    1,
    1,
    'house',
    400,
    200,
    '2020-06-16',
    '2020-09-01'
);

INSERT INTO users VALUES(
    'jonynato',
    '$2y$12$0scYkZBDMWCLGjhNkXLhUubwXDhje9wx1nIjEPjcX0Kc8yO/o0eQm',
    'João Renato',
    'Portugal',
    'jonynato@gmail.com',
    'As armas e os barões assinalados \ Que da ocidental praia Lusitana \ Por mares nunca de antes navegados \ Passaram ainda além da Taprobana \ Em perigos e guerras esforçados \ Mais do que prometia a força humana \ E entre gente remota edificaram \ Novo Reino, que tanto sublimaram;',
    strftime('%Y/%m/%d',date('now'))
);

INSERT INTO reservations VALUES(
    1,
    'prof_ltw',
    'afonso99m',
    1,
    '2020-01-15',
    '2020-02-01'
);

INSERT INTO reservations VALUES(
    2,
    'prof_ltw',
    'jonynato',
    1,
    '2020-02-05',
    '2020-02-20'
);

INSERT INTO reservations VALUES(
    3,
    'bruno_aleixo',
    'prof_ltw',
    3,
    '2020-04-10',
    '2020-04-25'
);