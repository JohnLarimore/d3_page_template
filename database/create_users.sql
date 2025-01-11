DROP USER IF EXISTS mtcars_user;
DROP USER IF EXISTS mtcars_admin;
CREATE USER mtcars_admin WITH PASSWORD 'mtcars_admin';
GRANT pg_read_all_data TO mtcars_admin;
GRANT pg_write_all_data TO mtcars_admin;
CREATE USER mtcars_user WITH PASSWORD 'mtcars_user';
GRANT pg_read_all_data TO mtcars_user;