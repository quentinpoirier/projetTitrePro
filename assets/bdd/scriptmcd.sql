#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: activity
#------------------------------------------------------------

CREATE TABLE activity(
        id_activity   Int  Auto_increment  NOT NULL ,
        activity_name Varchar (50) NOT NULL
	,CONSTRAINT activity_PK PRIMARY KEY (id_activity)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: usertype
#------------------------------------------------------------

CREATE TABLE usertype(
        id_usertypes   Int  Auto_increment  NOT NULL ,
        usertype_value Varchar (50) NOT NULL
	,CONSTRAINT usertype_PK PRIMARY KEY (id_usertypes)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: user
#------------------------------------------------------------

CREATE TABLE user(
        id_user             Int  Auto_increment  NOT NULL ,
        user_password       Varchar (50) NOT NULL ,
        user_mail           Varchar (50) NOT NULL ,
        volunteer_firstname Varchar (50) ,
        volunteer_lastname  Varchar (50) ,
        volunteer_age       Varchar (50) ,
        organization_name   Varchar (50) ,
        organization_adress Varchar (50) ,
        organization_phone  Varchar (50) ,
        organization_mail   Varchar (50) ,
        organization_siren  Varchar (50) ,
        organization_desc   Varchar (50) ,
        user_validation     TinyINT NOT NULL ,
        id_usertypes        Int NOT NULL
	,CONSTRAINT user_PK PRIMARY KEY (id_user)

	,CONSTRAINT user_usertype_FK FOREIGN KEY (id_usertypes) REFERENCES usertype(id_usertypes)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: advert
#------------------------------------------------------------

CREATE TABLE advert(
        id_advert          Int  Auto_increment  NOT NULL ,
        advert_title       Varchar (50) NOT NULL ,
        advert_date        Date NOT NULL ,
        advert_description Varchar (50) NOT NULL ,
        advert_object      Varchar (50) NOT NULL ,
        advert_validate    TinyINT NOT NULL ,
        id_user            Int NOT NULL
	,CONSTRAINT advert_PK PRIMARY KEY (id_advert)

	,CONSTRAINT advert_user_FK FOREIGN KEY (id_user) REFERENCES user(id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: photo
#------------------------------------------------------------

CREATE TABLE photo(
        id_photo              Int  Auto_increment  NOT NULL ,
        photo_name            Varchar (50) NOT NULL ,
        photo_nameindirectory Varchar (50) NOT NULL ,
        id_user               Int NOT NULL
	,CONSTRAINT photo_PK PRIMARY KEY (id_photo)

	,CONSTRAINT photo_user_FK FOREIGN KEY (id_user) REFERENCES user(id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: contact
#------------------------------------------------------------

CREATE TABLE contact(
        id             Int  Auto_increment  NOT NULL ,
        contact_object Varchar (50) NOT NULL ,
        contact_claim  Varchar (255) NOT NULL ,
        id_user        Int NOT NULL
	,CONSTRAINT contact_PK PRIMARY KEY (id)

	,CONSTRAINT contact_user_FK FOREIGN KEY (id_user) REFERENCES user(id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: haveactivity
#------------------------------------------------------------

CREATE TABLE haveactivity(
        id_user     Int NOT NULL ,
        id_activity Int NOT NULL
	,CONSTRAINT haveactivity_PK PRIMARY KEY (id_user,id_activity)

	,CONSTRAINT haveactivity_user_FK FOREIGN KEY (id_user) REFERENCES user(id_user)
	,CONSTRAINT haveactivity_activity0_FK FOREIGN KEY (id_activity) REFERENCES activity(id_activity)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: haveadvert
#------------------------------------------------------------

CREATE TABLE haveadvert(
        id_advert   Int NOT NULL ,
        id_activity Int NOT NULL
	,CONSTRAINT haveadvert_PK PRIMARY KEY (id_advert,id_activity)

	,CONSTRAINT haveadvert_advert_FK FOREIGN KEY (id_advert) REFERENCES advert(id_advert)
	,CONSTRAINT haveadvert_activity0_FK FOREIGN KEY (id_activity) REFERENCES activity(id_activity)
)ENGINE=InnoDB;

