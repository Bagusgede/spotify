
CREATE TABLE categories (
  id SERIAL PRIMARY KEY,
  nama varchar NOT NULL
) ;



CREATE TABLE playlists (
  id SERIAL PRIMARY KEY,
  user_id smallint NOT NULL,
  name varchar NOT NULL
) ;



CREATE TABLE playlist_data (
  id SERIAL PRIMARY KEY,
  playlist_id smallint NOT NULL,
  song_id smallint NOT NULL
) ;



CREATE TABLE songs (
  id SERIAL PRIMARY KEY,
  name varchar NOT NULL,
  file varchar NOT NULL,
  cover varchar NOT NULL,
  artist varchar NOT NULL,
  category_id smallint NOT NULL
) ;



CREATE TABLE users (
  id SERIAL PRIMARY KEY,
  username varchar NOT NULL,
  password varchar NOT NULL,
  password2 varchar NOT NULL,
  name varchar NOT NULL,
  email varchar NOT NULL
) ;

