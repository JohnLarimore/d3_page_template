library(RMariaDB)
dbname <- "test_db"
username <- "testtable_admin"
password <- "testtable_admin"
host <- "localhost"
con <- dbConnect(RMariaDB::MariaDB(), dbname=dbname, username=username, password=password, host=host)
sql <- "SHOW TABLES"
res <- dbSendQuery(con, sql)
tables <- dbFetch(res)
dbClearResult(res)
print(tables)
dbDisconnect(con)