import mariadb
dbname = "test_db"
username = "testtable_admin"
password = "testtable_admin"
host = "localhost"
try:
    conn = mariadb.connect(
        host=host,
        user=username,
        password=password,
        port=3306,
        database=dbname,
    )
except mariadb.Error as e:
    print(f"Error connecting to Mariadb: {e}")
    sys.exit(1)    
cur = conn.cursor()
sql = "SHOW tables"
cur.execute(sql)
