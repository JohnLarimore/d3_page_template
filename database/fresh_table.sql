DROP TABLE IF EXISTS testtable;
CREATE TABLE testtable (
	id SERIAL PRIMARY KEY, 
	category TEXT NOT NULL, 
	value text NOT NULL
);
INSERT INTO testtable VALUES (1, 'Start', 'Now is the time for all good men ');
INSERT INTO testtable VALUES (2, 'End', 'to come to the aid of their country.');