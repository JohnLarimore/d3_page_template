library(RMariaDB)
dbname <- "postgres"
username <- "testtable_admin"
password <- "testtable_admin"
host <- "localhost"
con <- dbConnect(dbDriver("PostgreSQL"), 
	dbname=dbname, 
	user=username, 
	password=password, 
	host=host)
sql <- "SELECT * FROM testtable;"
res <- dbSendQuery(con, sql)
tables <- dbFetch(res)
dbClearResult(res)
dbDisconnect(con)
print(tables)
print(paste0(tables[1,3], tables[2,3]))