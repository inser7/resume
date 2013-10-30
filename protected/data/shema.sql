CREATE TABLE tbl_user
(
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	username VARCHAR(128) NOT NULL,
	password VARCHAR(128) NOT NULL,
	salt VARCHAR(128) NOT NULL,
	email VARCHAR(128) NOT NULL,
	profile TEXT,
  info_id INT(10) UNSIGNED,
  work_id INT(10) UNSIGNED
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE tbl_info (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    lang char(2) NOT NULL,
   	fio varchar(100) NOT NULL,
   	telephone varchar(15) NOT NULL,
   	jabber varchar(30),
   	email varchar(30),
   	skype varchar(30),
   	icq varchar(30),
   	university varchar(100),
   	study_per varchar(100),
   	diploma  varchar(100),
    urluni  varchar(100),
    unicountry  varchar(100),
    maintitle  varchar(100),
    namepage  varchar(100),
    profession  varchar(100),
    quality  text,
    exp text
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;


CREATE TABLE tbl_work (
 	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	namecompany VARCHAR(128) NOT NULL,
	lang char(2) NOT NULL,
	urlcompany	VARCHAR(128),
	countrycompany varchar(100),
	position	varchar(100),
	respon text,
	period varchar(100),
	pub_date date
 ) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
