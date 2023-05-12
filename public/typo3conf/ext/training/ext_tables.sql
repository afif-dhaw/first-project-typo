#
# Add SQL definition of database tables
#
-- add columnns
CREATE TABLE tt_content (
    startdate text  DEFAULT NULL ,
    enddate text  DEFAULT NULL ,
    training_teaser varchar(255) default '' 

);
CREATE TABLE training_teaser (
    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,
    tstamp int(11) DEFAULT '0' NOT NULL,
    crdate int(11) DEFAULT '0' NOT NULL,
    cruser_id int(11) DEFAULT '0' NOT NULL,
    sys_language_uid int(11) DEFAULT '0' NOT NULL,
    image int(11) default '0',
    text varchar(255) default '',
    color varchar(255) default '',
    link varchar(255) default '',
    parent_uid int(11) DEFAULT '0' NOT NULL,
    PRIMARY KEY (uid)
);
