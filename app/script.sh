/etc/init.d/mariadb start

mysql -u root -e "CREATE DATABASE users"
mysqladmin -u root password 'secret'

mysql -u root -psecret < ./SQL/CREATE.SQL
mysql -u sky -p4CLBrbBw?EmR38u7Mb.pSOg**C!!Rl95p1K_+g9mo^3cr#x ecw_qualifications < ./SQL/TABLE.SQL
mysql -u sky -p4CLBrbBw?EmR38u7Mb.pSOg**C!!Rl95p1K_+g9mo^3cr#x ecw_qualifications < ./SQL/ADD_USER.SQL
