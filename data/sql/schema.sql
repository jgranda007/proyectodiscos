CREATE TABLE album (id BIGINT AUTO_INCREMENT, artista_id BIGINT NOT NULL, nombre VARCHAR(255) NOT NULL, urlcomprar VARCHAR(255), urlspotify VARCHAR(255), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX artista_id_idx (artista_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE artista (id BIGINT AUTO_INCREMENT, genero_id BIGINT NOT NULL, nombre VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX genero_id_idx (genero_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE genero (id BIGINT AUTO_INCREMENT, nombre VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE album ADD CONSTRAINT album_artista_id_artista_id FOREIGN KEY (artista_id) REFERENCES artista(id);
ALTER TABLE artista ADD CONSTRAINT artista_genero_id_genero_id FOREIGN KEY (genero_id) REFERENCES genero(id);
