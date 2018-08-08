CREATE DATABASE test
  WITH OWNER = postgres
       ENCODING = 'UTF8'
       TABLESPACE = pg_default
       LC_COLLATE = 'es_AR.UTF-8'
       LC_CTYPE = 'es_AR.UTF-8'
       CONNECTION LIMIT = -1;


CREATE TABLE public.pelicula
(
  idpelicula integer NOT NULL DEFAULT nextval('pelicula_idpelicula_seq'::regclass),
  nombre text
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.pelicula
  OWNER TO postgres;
