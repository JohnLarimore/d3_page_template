DROP USER IF EXISTS testtable_user;
DROP USER IF EXISTS testtable_admin;
CREATE USER testtable_admin WITH PASSWORD 'testtable_admin';
GRANT pg_read_all_data TO testtable_admin;
GRANT pg_write_all_data TO testtable_admin;
CREATE USER testtable_user WITH PASSWORD 'testtable_user';
GRANT pg_read_all_data TO testtable_user;