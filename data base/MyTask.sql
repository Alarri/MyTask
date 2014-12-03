-- Sequence: seq_persons

-- DROP SEQUENCE seq_persons;

CREATE SEQUENCE seq_persons
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 3
  CACHE 1;
ALTER TABLE seq_persons
  OWNER TO postgres;

-- Sequence: seq_status

-- DROP SEQUENCE seq_status;

CREATE SEQUENCE seq_status
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 4
  CACHE 1;
ALTER TABLE seq_status
  OWNER TO postgres;

-- Sequence: seq_tasks

-- DROP SEQUENCE seq_tasks;

CREATE SEQUENCE seq_tasks
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 5
  CACHE 1;
ALTER TABLE seq_tasks
  OWNER TO postgres;

-- Table: persons

-- DROP TABLE persons;

CREATE TABLE persons
(
  id integer NOT NULL DEFAULT nextval('seq_persons'::regclass),
  user_person character varying NOT NULL,
  password character varying NOT NULL,
  remember_token character varying,
  CONSTRAINT pk_persons_id PRIMARY KEY (id)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE persons
  OWNER TO postgres;

-- Table: status

-- DROP TABLE status;

CREATE TABLE status
(
  id integer NOT NULL DEFAULT nextval('seq_status'::regclass),
  descripcion character varying NOT NULL,
  CONSTRAINT pk_status_id PRIMARY KEY (id)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE status
  OWNER TO postgres;

-- Table: tasks

-- DROP TABLE tasks;

CREATE TABLE tasks
(
  id integer NOT NULL DEFAULT nextval('seq_tasks'::regclass),
  persons_id integer NOT NULL,
  status_id integer NOT NULL,
  description character varying(255) NOT NULL,
  CONSTRAINT pk_tasks_id PRIMARY KEY (id),
  CONSTRAINT fk_persons_id FOREIGN KEY (persons_id)
      REFERENCES persons (id) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT fk_status_id FOREIGN KEY (status_id)
      REFERENCES status (id) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);
ALTER TABLE tasks
  OWNER TO postgres;


select * from tasks


select * from persons