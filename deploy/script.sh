/etc/init.d/mariadb start

#mysql -u root -e "CREATE DATABASE users" || echo 'test'
mysqladmin -u root password 'secret' || echo 'test'

mysql -u root -psecret < ./SQL/CREATE.SQL || echo 'test'
mysql -u sky -p4CLBrbBw?EmR38u7Mb.pSOg**C!!Rl95p1K_+g9mo^3cr#x ecw_qualifications < ./SQL/TABLE.SQL || echo 'test'
mysql -u sky -p4CLBrbBw?EmR38u7Mb.pSOg**C!!Rl95p1K_+g9mo^3cr#x ecw_qualifications < ./SQL/ADD_USER.SQL || echo 'test'
