CREATE TABLE EMAIL(
   EMAILID        INT                PRIMARY KEY     NOT NULL,
   CONTACTID      INT                                NOT NULL,
   EMAILADDRESS   CHAR(256)                          NOT NULL,
   ISSUBSRIBER    BOOLEAN                            NOT NULL,
   ISCUSTOMER     BOOLEAN                            NOT NULL,
   ISCONSULTANT   BOOLEAN                            NOT NULL
);

CREATE TABLE CONTACT(
   CONTACTID           INT            PRIMARY KEY    NOT NULL,
   FIRSTNAME           CHAR(256)			         NOT NULL,
   LASTNAME            CHAR(256)     	             NOT NULL,
   PHONENUMBER         NUMERIC(10,1)		         NOT NULL,
   CONTACTDATE         DATE				             NOT NULL,
   PARTYHOST	       BOOLEAN				         NOT NULL,	
   BECOMEACONSULTANT   BOOLEAN				         NOT NULL,                                     
);

CREATE TABLE CUSTOMER(
   CUSTOMERID         INT             PRIMARY KEY    NOT NULL,
   CONTACTID          INT                            NOT NULL   references CONTACT(CONTACTID),
   EMAILID            INT                            NOT NULL   references EMAIL(EMAILID),
   ONHOMEDELIVERIES   BOOLEAN		                 NOT NULL,
   LASTORDERDATE      DATE                           NOT NULL
);

