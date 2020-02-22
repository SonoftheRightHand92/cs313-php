DROP TABLE IF EXISTS renters;

CREATE TABLE renters
(id                  SERIAL          NOT NULL PRIMARY KEY
, first_name         VARCHAR(100)    NOT NULL
, last_name          VARCHAR(100)    NOT NULL
, email              VARCHAR(400)    NOT NULL
, street_address     VARCHAR(400)    NOT NULL
, city               VARCHAR(100)    NOT NULL
, state_name         VARCHAR(100)    NOT NULL
, zip                INT             NOT NULL
, area_code_home     INT             NOT NULL
, first_three_home   INT             NOT NULL
, last_four_home     INT             NOT NULL
, area_code_cell     INT             NOT NULL
, first_three_cell   INT             NOT NULL
, last_four_cell     INT             NOT NULL
, b_month            INT             NOT NULL
, b_day              INT             NOT NULL
, b_year             INT             NOT NULL
, housing_contract   VARCHAR(400)    NOT NULL);

INSERT INTO renters (first_name
                    , last_name
                    , email
                    , street_address
                    , city
                    , state_name
                    , zip
                    , area_code_home
                    , first_three_home
                    , last_four_home
                    , area_code_cell
                    , first_three_cell
                    , last_four_cell
                    , b_month
                    , b_day
                    , b_year
                    , housing_contract)
            VALUES  ('Joe'
                    , 'Momma'
                    , 'jmomma@hotmail.com'
                    , '200th W. Street'
                    , 'Denver'
                    , 'CO'
                    , 98989
                    , 222
                    , 222
                    , 2222
                    , 333
                    , 333
                    , 3333
                    , 3
                    , 23
                    , 1993
                    , 'Fall');


