library(RPostgreSQL)
library(DBI)	
dbname <- "postgres"
username <- "mtcars_admin"
password <- "mtcars_admin"
host <- "localhost"
con <- dbConnect(dbDriver("PostgreSQL"), 
	dbname=dbname, 
	user=username, 
	password=password, 
	host=host)
clean_mtcars <- cbind(mtcars, rownames(mtcars))
len <- length(clean_mtcars[,1])
for(i in 1:len){
	sql <- paste0("INSERT INTO mtcars VALUES (", i)
	for(j in 1:12){
		if(j==12){
			sql <- paste0(sql, ", '", clean_mtcars[i, j], "')")
		} else {
			sql <- paste0(sql, ", ", clean_mtcars[i, j])
		}
		
	}
	dbExecute(con, sql)
	}
dbDisconnect(con)