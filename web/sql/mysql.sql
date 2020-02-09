-- DROP TABLE IF EXISTS family_members;
-- DROP TABLE IF EXISTS relationships;

-- CREATE TABLE relationships
-- ( id          SERIAL       NOT NULL PRIMARY KEY
-- , description VARCHAR(100) NOT NULL);

-- CREATE TABLE family_members
-- ( id              SERIAL        NOT NULL PRIMARY KEY
-- , first_name      VARCHAR(100)  NOT NULL
-- , last_name       VARCHAR(100)  NOT NULL
-- , relationship_id INT           NOT NULL REFERENCES relationships(id));

-- INSERT INTO relationships (description) VALUES ('Mother');
-- INSERT INTO relationships (description) VALUES ('Father');
-- INSERT INTO relationships (description) VALUES ('Wife');
-- INSERT INTO relationships (description) VALUES ('Husband');
-- INSERT INTO relationships (description) VALUES ('Son');
-- INSERT INTO relationships (description) VALUES ('Daughter');
-- INSERT INTO family_members ( first_name
--                               , last_name
--                               , relationship_id)
--                        VALUES ( 'Sarah'
--                               , 'Birch'
--                               , 3);
-- INSERT INTO family_members ( first_name
--                               , last_name
--                               , relationship_id)
--                        VALUES ( 'Teresa'
--                               , 'Birch'
--                               , 1);
-- INSERT INTO family_members ( first_name
--                               , last_name
--                               , relationship_id)
--                        VALUES ( 'Hannah'
--                               , 'Birch'
--                               , 6);

DROP TABLE IF EXISTS comments;

CREATE TABLE comments
(id                  SERIAL          NOT NULL PRIMARY KEY
, custom_name        VARCHAR(100)    NOT NULL
, user_comment       VARCHAR(400)    NOT NULL
, user_description   VARCHAR(400)    NOT NULL);

INSERT INTO comments (custom_name
                     , user_comment
                     , user_description)
            VALUES   ('Batman'
                     , 'You''re going down Joker'
                     , 'I am the night!' );

INSERT INTO comments (custom_name
                     , user_comment
                     , user_description)
            VALUES   ('Robin'
                     , 'Why are our suits so tight batman?'
                     , 'Just a teenager fighting crime' );

INSERT INTO comments (custom_name
                     , user_comment
                     , user_description)
            VALUES   ('Joker'
                     , 'Mark Hamill has a great voice, I like him'
                     , 'I enjoy making people smile' );

INSERT INTO comments (custom_name
                     , user_comment
                     , user_description)
            VALUES   ('360 No Scope'
                     , 'Yo, I just hit a 5 on today!'
                     , 'Headshots 4 dayz' );

INSERT INTO comments (custom_name
                     , user_comment
                     , user_description)
            VALUES   ('Orange'
                     , 'I did not betray britanya!'
                     , 'No the mask is not there to hide my beautiful face' );

INSERT INTO comments (custom_name
                     , user_comment
                     , user_description)
            VALUES   ('Heero Yuy'
                     , 'Confrim, your blast shields are secure?'
                     , 'I seek peace and security for the earth and the colonies' );

INSERT INTO comments (custom_name
                     , user_comment
                     , user_description)
            VALUES   ('Darth Vader'
                     , '*Breathing noises*'
                     , 'Dark Lord of the Sith' );

INSERT INTO comments (custom_name
                     , user_comment
                     , user_description)
            VALUES   ('George'
                     , 'I can''t believe I can''t get soup for a whole year!'
                     , 'My wallet makes me lean to one side' );

INSERT INTO comments (custom_name
                     , user_comment
                     , user_description)
            VALUES   ('Homer'
                     , 'Doh!'
                     , 'Mmmmmm I like donuts' );

INSERT INTO comments (custom_name
                     , user_comment
                     , user_description)
            VALUES   ('Stewie'
                     , 'I say, no one liked new Brain'
                     , 'I enjoy broadway musicals and fine dining' );
