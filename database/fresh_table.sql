DROP TABLE IF EXISTS mtcars;
CREATE TABLE mtcars (
	id SERIAL PRIMARY KEY, 
	mpg numeric,
	cyl NUMERIC,
	disp NUMERIC,
	hp	NUMERIC,
	drat NUMERIC,
	wt NUMERIC,
	qsec NUMERIC,
	vs NUMERIC,
	am NUMERIC,
	gear NUMERIC,
	carb NUMERIC,
	makemodel TEXT
);