/*
Code to initialize small test database.
*/
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sensors` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `sensors`;

DROP TABLE IF EXISTS sensordata;

CREATE TABLE sensordata (
	Date_Time varchar(50) NOT NULL,
    Glennan INT NOT NULL,
    Nord INT NOT NULL,
    Olin_480 INT NOT NULL,
    Olin_208 INT NOT NULL,
    Rock_480 INT NOT NULL,
    Sears_480 INT NOT NULL,
    Sears_208 INT NOT NULL,
    Tomlinson INT NOT NULL,
    White INT NOT NULL,
    Wick_208 INT NOT NULL,
    Wick_480 INT NOT NULL,
    Yost INT NOT NULL,
    Olin_Sum INT NOT NULL,
    Sears_Sum INT NOT NULL,
    Wick_Sum INT NOT NULL
);


/* MySQL server by default runs with --secure-file-priv, only allowing user to use files in the Uploads directory. */
LOAD DATA INFILE '/Applications/MAMP/htdocs/395project-masterv4/csv-files/week1frinoteless.csv’ INTO TABLE sensordata FIELDS TERMINATED BY ',' ENCLOSED BY '"' LINES TERMINATED BY ‘\r’ IGNORE 1 ROWS;