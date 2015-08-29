<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-13 11:13:28 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':id ORDER BY contest_works.views DESC' at line 6 [ SELECT contest_works.*,CONCAT(users.first_name, ' ', users.last_name, ' ',users.middle_name) as `user`, `c`.`cnt` as `comments`, `l`.`cnt` as `likes`
            FROM `contest_works`
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            WHERE contest_id = :id ORDER BY contest_works.views DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 11:13:28 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(59): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 11:26:26 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'contest_works.likes' in 'order clause' [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`
            FROM `contest_works`
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
           ORDER BY contest_works.likes DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 11:26:26 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(71): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 15:21:48 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'l.cnt' in 'field list' [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`
            FROM `contest_works`
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*)  FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
           ORDER BY contest_works.datePost DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 15:21:48 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(59): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 15:21:58 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_' at line 5 [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`
            FROM `contest_works`
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`,  FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
           ORDER BY contest_works.datePost DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 15:21:58 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(59): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 15:49:37 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 7 [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`
            FROM `contest_works`
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            LEFT JOIN (SELECT `work_id` FROM `contest_works_likes` WHERE `work_id`=31
ORDER BY contest_works.datePost DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 15:49:37 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(60): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 16:28:53 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ON `user_id`=
ORDER BY contest_works.datePost DESC limit 4' at line 6 [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`
            FROM `contest_works`
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            LEFT JOIN (SELECT `user_id` FROM `contest_works_likes` ON `user_id`=
ORDER BY contest_works.datePost DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 16:28:53 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(60): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 16:31:03 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ON `user_id`=48
ORDER BY contest_works.datePost DESC limit 4' at line 6 [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`
            FROM `contest_works`
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            LEFT JOIN (SELECT `user_id` FROM `contest_works_likes` ON `user_id`=48
ORDER BY contest_works.datePost DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 16:31:03 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(61): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 16:31:29 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ON `user_id`=48
ORDER BY contest_works.datePost DESC limit 4' at line 6 [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`
            FROM `contest_works`
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            LEFT JOIN (SELECT `user_id` FROM `contest_works_likes` ON `user_id`=48
ORDER BY contest_works.datePost DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 16:31:29 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(61): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 16:31:31 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ON `user_id`=48
ORDER BY contest_works.datePost DESC limit 4' at line 6 [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`
            FROM `contest_works`
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            LEFT JOIN (SELECT `user_id` FROM `contest_works_likes` ON `user_id`=48
ORDER BY contest_works.datePost DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 16:31:31 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(61): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 16:31:37 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ON `user_id`=`48`
ORDER BY contest_works.datePost DESC limit 4' at line 6 [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`
            FROM `contest_works`
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            LEFT JOIN (SELECT `user_id` FROM `contest_works_likes` ON `user_id`=`48`
ORDER BY contest_works.datePost DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 16:31:37 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(61): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 16:31:38 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ON `user_id`=`48`
ORDER BY contest_works.datePost DESC limit 4' at line 6 [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`
            FROM `contest_works`
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            LEFT JOIN (SELECT `user_id` FROM `contest_works_likes` ON `user_id`=`48`
ORDER BY contest_works.datePost DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 16:31:38 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(61): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 16:31:54 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ON `user_id`=`48`
ORDER BY contest_works.datePost DESC limit 4' at line 6 [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`
            FROM `contest_works`
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            INNER JOIN (SELECT `user_id` FROM `contest_works_likes` ON `user_id`=`48`
ORDER BY contest_works.datePost DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 16:31:54 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(61): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 16:35:05 --- CRITICAL: Database_Exception [ 1066 ]: Not unique table/alias: 'l' [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`, `cm`.`cnt` as `us_id`
            FROM `contest_works`
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            LEFT JOIN (SELECT `cm.user_id` `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.user_id = 48
ORDER BY contest_works.datePost DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 16:35:05 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(61): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 16:35:23 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'cm.user_id' in 'field list' [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`, `cm`.`cnt` as `us_id`
            FROM `contest_works`
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            LEFT JOIN (SELECT `cm.user_id` `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as cm  ON contest_works.user_id = 48
ORDER BY contest_works.datePost DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 16:35:23 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(61): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 16:39:33 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'contest_works_likes.user_id' in 'on clause' [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`, `cm`.`cnt` as `us_id`
            FROM `contest_works`
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            LEFT JOIN (SELECT `user_id` `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as cm  ON contest_works_likes.user_id = 48
ORDER BY contest_works.datePost DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 16:39:33 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(61): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 16:40:08 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'cm.user_id' in 'on clause' [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`, `cm`.`cnt` as `us_id`
            FROM `contest_works`
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            LEFT JOIN (SELECT `user_id` `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as cm  ON cm.user_id = 48
ORDER BY contest_works.datePost DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 16:40:08 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(61): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 16:41:16 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'contest_works_likes.user_id' in 'on clause' [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`, `cm`.`cnt` as `us_id`
            FROM `contest_works`
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            LEFT JOIN (SELECT `user_id` `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as cm  ON contest_works_likes.user_id = 48
ORDER BY contest_works.datePost DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 16:41:16 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(61): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 16:42:16 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '48' in 'on clause' [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`, `cm`.`cnt` as `us_id`
            FROM `contest_works`
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            LEFT JOIN (SELECT `user_id` `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as cm  ON `user_id` = `48`
ORDER BY contest_works.datePost DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 16:42:16 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(61): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 16:42:58 --- CRITICAL: Database_Exception [ 1052 ]: Column 'user_id' in on clause is ambiguous [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`, `cm`.`cnt` as `us_id`
            FROM `contest_works`
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            LEFT JOIN (SELECT `user_id` `cnt`, `user_id` FROM `contest_works_likes` GROUP BY work_id) as cm  ON `user_id` = 48
ORDER BY contest_works.datePost DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 16:42:58 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(61): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 16:45:30 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'cm.cnt' in 'field list' [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`, `cm`.`cnt` as `us_id`
            FROM `contest_works`
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            LEFT JOIN (SELECT `user_id` FROM `contest_works_likes`) as cm  ON `user_id` = 48
ORDER BY contest_works.datePost DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 16:45:30 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(61): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 16:46:12 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ON `user_id` = 48
ORDER BY contest_works.datePost DESC limit 4' at line 6 [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`, `cm`.`cnt` as `us_id`
            FROM `contest_works`
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            LEFT JOIN (SELECT `user_id` FROM `contest_works_likes` ON `user_id` = 48
ORDER BY contest_works.datePost DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 16:46:12 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(61): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 16:46:32 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 7 [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`, `cm`.`cnt` as `us_id`
            FROM `contest_works`
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            LEFT JOIN (SELECT `user_id` FROM `contest_works_likes` WHERE `user_id` = 48
ORDER BY contest_works.datePost DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 16:46:32 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(61): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 17:22:15 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '48' in 'on clause' [ SELECT `contest_works`.`id`, `contest_works`.`user_id`, `contest_works`.`title`, `contest_works`.`data`, `contest_works`.`views`, `contest_works`.`description`, `contest_works`.`datePost`, `users`.`first_name`, `users`.`last_name`, `users`.`middle_name`, `contest_works_likes`.`user_id`, `contest_works_likes`.`work_id`, `users`.`photo` FROM `contest_works` INNER JOIN `users` ON (`contest_works`.`user_id` = `users`.`id`) LEFT JOIN `contest_works_likes` ON (`contest_works`.`user_id` = `48`) WHERE `contest_works`.`id` = '16' GROUP BY `contest_works`.`datePost` LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 17:22:15 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `contest...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(230): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_work()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 17:22:33 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '' in 'on clause' [ SELECT `contest_works`.`id`, `contest_works`.`user_id`, `contest_works`.`title`, `contest_works`.`data`, `contest_works`.`views`, `contest_works`.`description`, `contest_works`.`datePost`, `users`.`first_name`, `users`.`last_name`, `users`.`middle_name`, `contest_works_likes`.`user_id`, `contest_works_likes`.`work_id`, `users`.`photo` FROM `contest_works` INNER JOIN `users` ON (`contest_works`.`user_id` = `users`.`id`) LEFT JOIN `contest_works_likes` ON (`contest_works`.`user_id` = ``) WHERE `contest_works`.`id` = '16' GROUP BY `contest_works`.`datePost` LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 17:22:33 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `contest...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(230): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_work()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 17:22:53 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '48' in 'on clause' [ SELECT `contest_works`.`id`, `contest_works`.`user_id`, `contest_works`.`title`, `contest_works`.`data`, `contest_works`.`views`, `contest_works`.`description`, `contest_works`.`datePost`, `users`.`first_name`, `users`.`last_name`, `users`.`middle_name`, `contest_works_likes`.`user_id`, `contest_works_likes`.`work_id`, `users`.`photo` FROM `contest_works` INNER JOIN `users` ON (`contest_works`.`user_id` = `users`.`id`) LEFT JOIN `contest_works_likes` ON (`contest_works`.`user_id` = `48`) WHERE `contest_works`.`id` = '16' GROUP BY `contest_works`.`datePost` LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 17:22:53 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `contest...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(230): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_work()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 17:23:57 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '48' in 'on clause' [ SELECT `contest_works`.`id`, `contest_works`.`user_id`, `contest_works`.`title`, `contest_works`.`data`, `contest_works`.`views`, `contest_works`.`description`, `contest_works`.`datePost`, `users`.`first_name`, `users`.`last_name`, `users`.`middle_name`, `contest_works_likes`.`user_id`, `contest_works_likes`.`work_id`, `users`.`photo` FROM `contest_works` INNER JOIN `users` ON (`contest_works`.`user_id` = `users`.`id`) LEFT JOIN `contest_works_likes` ON (`contest_works`.`id` = `48`) WHERE `contest_works`.`id` = '16' GROUP BY `contest_works`.`datePost` LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 17:23:57 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `contest...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(230): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_work()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 17:24:05 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '48' in 'on clause' [ SELECT `contest_works`.`id`, `contest_works`.`user_id`, `contest_works`.`title`, `contest_works`.`data`, `contest_works`.`views`, `contest_works`.`description`, `contest_works`.`datePost`, `users`.`first_name`, `users`.`last_name`, `users`.`middle_name`, `contest_works_likes`.`user_id`, `contest_works_likes`.`work_id`, `users`.`photo` FROM `contest_works` INNER JOIN `users` ON (`contest_works`.`user_id` = `users`.`id`) LEFT JOIN `contest_works_likes` ON (`contest_works`.`id` = `48`) WHERE `contest_works`.`id` = '16' GROUP BY `contest_works`.`datePost` LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 17:24:05 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `contest...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(230): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_work()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 17:24:06 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '48' in 'on clause' [ SELECT `contest_works`.`id`, `contest_works`.`user_id`, `contest_works`.`title`, `contest_works`.`data`, `contest_works`.`views`, `contest_works`.`description`, `contest_works`.`datePost`, `users`.`first_name`, `users`.`last_name`, `users`.`middle_name`, `contest_works_likes`.`user_id`, `contest_works_likes`.`work_id`, `users`.`photo` FROM `contest_works` INNER JOIN `users` ON (`contest_works`.`user_id` = `users`.`id`) LEFT JOIN `contest_works_likes` ON (`contest_works`.`id` = `48`) WHERE `contest_works`.`id` = '16' GROUP BY `contest_works`.`datePost` LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 17:24:06 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `contest...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(230): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_work()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 17:24:07 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '48' in 'on clause' [ SELECT `contest_works`.`id`, `contest_works`.`user_id`, `contest_works`.`title`, `contest_works`.`data`, `contest_works`.`views`, `contest_works`.`description`, `contest_works`.`datePost`, `users`.`first_name`, `users`.`last_name`, `users`.`middle_name`, `contest_works_likes`.`user_id`, `contest_works_likes`.`work_id`, `users`.`photo` FROM `contest_works` INNER JOIN `users` ON (`contest_works`.`user_id` = `users`.`id`) LEFT JOIN `contest_works_likes` ON (`contest_works`.`id` = `48`) WHERE `contest_works`.`id` = '16' GROUP BY `contest_works`.`datePost` LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 17:24:07 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `contest...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(230): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_work()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 17:24:08 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '48' in 'on clause' [ SELECT `contest_works`.`id`, `contest_works`.`user_id`, `contest_works`.`title`, `contest_works`.`data`, `contest_works`.`views`, `contest_works`.`description`, `contest_works`.`datePost`, `users`.`first_name`, `users`.`last_name`, `users`.`middle_name`, `contest_works_likes`.`user_id`, `contest_works_likes`.`work_id`, `users`.`photo` FROM `contest_works` INNER JOIN `users` ON (`contest_works`.`user_id` = `users`.`id`) LEFT JOIN `contest_works_likes` ON (`contest_works`.`id` = `48`) WHERE `contest_works`.`id` = '16' GROUP BY `contest_works`.`datePost` LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 17:24:08 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `contest...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(230): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_work()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 17:24:08 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '48' in 'on clause' [ SELECT `contest_works`.`id`, `contest_works`.`user_id`, `contest_works`.`title`, `contest_works`.`data`, `contest_works`.`views`, `contest_works`.`description`, `contest_works`.`datePost`, `users`.`first_name`, `users`.`last_name`, `users`.`middle_name`, `contest_works_likes`.`user_id`, `contest_works_likes`.`work_id`, `users`.`photo` FROM `contest_works` INNER JOIN `users` ON (`contest_works`.`user_id` = `users`.`id`) LEFT JOIN `contest_works_likes` ON (`contest_works`.`id` = `48`) WHERE `contest_works`.`id` = '16' GROUP BY `contest_works`.`datePost` LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 17:24:08 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `contest...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(230): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_work()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 18:01:15 --- CRITICAL: Database_Exception [ 1048 ]: Column 'title' cannot be null [ INSERT INTO `contest_works` (`user_id`, `contest_id`, `title`, `data`, `description`, `views`, `datePost`) VALUES ('48', '1', NULL, '', NULL, '0', '2013-12-13 [18:01:15]') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 18:01:15 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(383): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_downloadWork()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 18:02:16 --- CRITICAL: Database_Exception [ 1048 ]: Column 'title' cannot be null [ INSERT INTO `contest_works` (`user_id`, `contest_id`, `title`, `data`, `description`, `views`, `datePost`) VALUES ('48', '1', NULL, '', NULL, '0', '2013-12-13 [18:02:15]') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 18:02:16 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(383): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_downloadWork()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 19:52:30 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'cm.cnt' in 'field list' [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`, `cm`.`cnt` as `us_id`
            FROM `contest_works`
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            
ORDER BY contest_works.datePost DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 19:52:30 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(61): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 19:55:16 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'cm.cnt' in 'field list' [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`, `cm`.`cnt` as `us_id`
            FROM `contest_works`
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            
ORDER BY contest_works.datePost DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 19:55:16 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(61): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 19:58:58 --- CRITICAL: Database_Exception [ 1052 ]: Column 'user_id' in on clause is ambiguous [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`
            FROM `contest_works`
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            JOIN `contest_works_likes` ON `user_id` = 48
ORDER BY contest_works.datePost DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 19:58:58 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(61): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 19:59:49 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'contest_works_likes.user_id' in 'on clause' [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`
            FROM `contest_works`
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            JOIN `contest_works_likes` ON `contest_works_likes.user_id` = 48
ORDER BY contest_works.datePost DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 19:59:49 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(61): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 20:00:14 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'contest_works_likes.user_id' in 'on clause' [ SELECT contest_works.*,contest_works_likes.user_id, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`
            FROM `contest_works`
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            JOIN `contest_works_likes` ON `contest_works_likes.user_id` = 48
ORDER BY contest_works.datePost DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 20:00:14 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(61): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 20:00:37 --- CRITICAL: Database_Exception [ 1052 ]: Column 'user_id' in on clause is ambiguous [ SELECT contest_works.*,contest_works_likes.user_id, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`
            FROM `contest_works`
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            JOIN `contest_works_likes` ON `user_id` = 48
ORDER BY contest_works.datePost DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 20:00:37 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(61): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 20:01:47 --- CRITICAL: Database_Exception [ 1248 ]: Every derived table must have its own alias [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`
            FROM `contest_works`
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            JOIN (SELECT `user_id` FROM `contest_works_likes`) ON `user_id` = 48
ORDER BY contest_works.datePost DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 20:01:47 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(61): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 20:02:31 --- CRITICAL: Database_Exception [ 1052 ]: Column 'user_id' in on clause is ambiguous [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`
            FROM `contest_works`
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            JOIN `contest_works_likes` ON `user_id` = 48
ORDER BY contest_works.datePost DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 20:02:31 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(61): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 20:03:17 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'contest_works_likes.user_id' in 'on clause' [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`
            FROM `contest_works`
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            JOIN `contest_works_likes` ON `contest_works_likes.user_id` = 48
ORDER BY contest_works.datePost DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 20:03:17 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(61): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 20:06:46 --- CRITICAL: Database_Exception [ 1052 ]: Column 'id' in on clause is ambiguous [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`
            FROM `contest_works`
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            JOIN `contest_works_likes` ON `id` = 6
ORDER BY contest_works.datePost DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 20:06:46 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(61): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 20:13:58 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'cm.cnt' in 'field list' [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`, `cm`.`cnt` as `us_id`
            FROM `contest_works`
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            JOIN `contest_works_likes` as cm  ON `contest_works.user_id` = 48
ORDER BY contest_works.datePost DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 20:13:58 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(61): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 20:14:46 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'contest_works_likes' in 'field list' [ SELECT contest_works.*,contest_works_likes,user_id, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`
            FROM `contest_works`
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            JOIN `contest_works_likes` ON `contest_works.user_id` = 48
ORDER BY contest_works.datePost DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 20:14:46 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(61): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 20:15:02 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'contest_works_likes' in 'field list' [ SELECT contest_works.*,contest_works_likes,user_id, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`
            FROM `contest_works`
            JOIN `contest_works_likes` ON `contest_works.user_id` = 48
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            
ORDER BY contest_works.datePost DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 20:15:02 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(62): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 20:15:28 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'contest_works.user_id' in 'on clause' [ SELECT contest_works.*,contest_works_likes.user_id, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`
            FROM `contest_works`
            JOIN `contest_works_likes` ON `contest_works.user_id` = 48
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            
ORDER BY contest_works.datePost DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 20:15:28 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(62): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 20:17:07 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'contest_works_likes.user_id' in 'field list' [ SELECT contest_works.*,contest_works_likes.user_id, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`
            FROM `contest_works`
            
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            
ORDER BY contest_works.id DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 20:17:07 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(62): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 20:17:38 --- CRITICAL: Database_Exception [ 1052 ]: Column 'user_id' in on clause is ambiguous [ SELECT contest_works.*,contest_works_likes.user_id, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`
            FROM `contest_works`
            JOIN `contest_works_likes` ON `user_id` = 48
            JOIN `users` ON contest_works.user_id = users.id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            
ORDER BY contest_works.id DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 20:17:38 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(62): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 20:24:11 --- CRITICAL: Database_Exception [ 1052 ]: Column 'user_id' in on clause is ambiguous [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , contest_works_likes.user_id,`c`.`cnt` as `comments`, `l`.`cnt` as `likes`
            FROM `contest_works`
            
            JOIN `users` ON contest_works.user_id = users.id
            JOIN `contest_works_likes` ON `user_id` = 48
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            
ORDER BY contest_works.id DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 20:24:11 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(63): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 20:33:37 --- CRITICAL: Database_Exception [ 1052 ]: Column 'work_id' in group statement is ambiguous [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , contest_works_likes.user_id,`c`.`cnt` as `comments`, `l`.`cnt` as `likes`
            FROM `contest_works`
            
            JOIN `users` ON contest_works.user_id = users.id
           
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
            LEFT JOIN `contest_works_likes` ON contest_works_likes.user_id =102 GROUP BY work_id
ORDER BY contest_works.id DESC limit 4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 20:33:37 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(63): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:13:43 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`cardlab_contest`.`contest_works_likes`, CONSTRAINT `contest_works_likes_ibfk_1` FOREIGN KEY (`work_id`) REFERENCES `contest_works` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `contest_works_likes` (`user_id`, `work_id`, `datePost`) VALUES ('49', '', '2013-12-13 [21:13:43]') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:13:43 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(441): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_like()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:13:50 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`cardlab_contest`.`contest_works_likes`, CONSTRAINT `contest_works_likes_ibfk_1` FOREIGN KEY (`work_id`) REFERENCES `contest_works` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `contest_works_likes` (`user_id`, `work_id`, `datePost`) VALUES ('49', '', '2013-12-13 [21:13:50]') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:13:50 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(441): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_like()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:13:58 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`cardlab_contest`.`contest_works_likes`, CONSTRAINT `contest_works_likes_ibfk_1` FOREIGN KEY (`work_id`) REFERENCES `contest_works` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `contest_works_likes` (`user_id`, `work_id`, `datePost`) VALUES ('49', '', '2013-12-13 [21:13:58]') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:13:58 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(441): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_like()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:14:01 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`cardlab_contest`.`contest_works_likes`, CONSTRAINT `contest_works_likes_ibfk_1` FOREIGN KEY (`work_id`) REFERENCES `contest_works` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `contest_works_likes` (`user_id`, `work_id`, `datePost`) VALUES ('49', '', '2013-12-13 [21:14:01]') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:14:01 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(441): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_like()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:14:11 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') WHERE `contest_works`.`id` = '' GROUP BY `contest_works`.`datePost` LIMIT 1' at line 1 [ SELECT `contest_works`.`id`, `contest_works`.`user_id`, `contest_works`.`title`, `contest_works`.`data`, `contest_works`.`views`, `contest_works`.`description`, `contest_works`.`datePost`, `users`.`first_name`, `users`.`last_name`, `users`.`middle_name`, `contest_works_likes`.`user_id`, `contest_works_likes`.`work_id`, `users`.`photo` FROM `contest_works` INNER JOIN `users` ON (`contest_works`.`user_id` = `users`.`id`) LEFT JOIN `contest_works_likes` ON (`contest_works_likes`.`user_id` = 49 AND `contest_works_likes`.`work_id` = ) WHERE `contest_works`.`id` = '' GROUP BY `contest_works`.`datePost` LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:14:11 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `contest...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(247): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_work()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:32:18 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'l2.work_id' in 'on clause' [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`, `l`.`cnt` as `likes`
            FROM `contest_works`
            
            JOIN `users` ON contest_works.user_id = users.id
           
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
       
LEFT JOIN (SELECT `user_id` FROM `contest_works_likes` WHERE `user_id` =31) as l2 ON contest_works.id = l2.work_id
ORDER BY contest_works.datePost DESC limit 10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:32:18 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(64): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:33:59 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'contest_works_likes.work_id' in 'on clause' [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`,  `l`.`cnt` as `likes`
            FROM `contest_works`
            
            JOIN `users` ON contest_works.user_id = users.id
           
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
       
LEFT JOIN (SELECT `user_id` FROM `contest_works_likes` WHERE `user_id` =31) as l2 ON contest_works.id = contest_works_likes.work_id
ORDER BY contest_works.datePost DESC limit 10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:33:59 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(64): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:34:22 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'l2.cnt' in 'field list' [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`,  `l`.`cnt` as `likes` ,`l2`.`cnt` as `likes2`
            FROM `contest_works`
            
            JOIN `users` ON contest_works.user_id = users.id
           
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
       
LEFT JOIN (SELECT `user_id` FROM `contest_works_likes` WHERE `user_id` =31) as l2 ON contest_works.id = l2.work_id
ORDER BY contest_works.datePost DESC limit 10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:34:22 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(64): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:35:12 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'lo.work_id' in 'on clause' [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`,  `l`.`cnt` as `likes`
            FROM `contest_works`
            
            JOIN `users` ON contest_works.user_id = users.id
           
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
       
LEFT JOIN (SELECT `user_id` FROM `contest_works_likes` WHERE `user_id` =31) as lo ON contest_works.id = lo.work_id
ORDER BY contest_works.datePost DESC limit 10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:35:12 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(64): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:35:14 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'lo.work_id' in 'on clause' [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`,  `l`.`cnt` as `likes`
            FROM `contest_works`
            
            JOIN `users` ON contest_works.user_id = users.id
           
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
       
LEFT JOIN (SELECT `user_id` FROM `contest_works_likes` WHERE `user_id` =31) as lo ON contest_works.id = lo.work_id
ORDER BY contest_works.datePost DESC limit 10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:35:14 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(64): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:35:48 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'l2.work_id' in 'on clause' [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`,  `l`.`cnt` as `likes`
            FROM `contest_works`
            
            JOIN `users` ON contest_works.user_id = users.id
           
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
       
LEFT JOIN (SELECT `user_id` FROM `contest_works_likes` WHERE `user_id` =31) as l2 ON contest_works.id = `l2.work_id`
ORDER BY contest_works.datePost DESC limit 10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:35:48 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(64): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:35:50 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'l2.work_id' in 'on clause' [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`,  `l`.`cnt` as `likes`
            FROM `contest_works`
            
            JOIN `users` ON contest_works.user_id = users.id
           
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
       
LEFT JOIN (SELECT `user_id` FROM `contest_works_likes` WHERE `user_id` =31) as l2 ON contest_works.id = `l2.work_id`
ORDER BY contest_works.datePost DESC limit 10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:35:50 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(64): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:38:37 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM `contest_works`
            
            JOIN `users` ON contest_works.user' at line 2 [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`,  `l`.`cnt` as `likes`,l2,
            FROM `contest_works`
            
            JOIN `users` ON contest_works.user_id = users.id
           
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
       
LEFT JOIN (SELECT `user_id` FROM `contest_works_likes` WHERE `user_id` =31) as l2 ON contest_works.id = l2.work_id
ORDER BY contest_works.datePost DESC limit 10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:38:37 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(64): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:39:11 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'l2' in 'field list' [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`,  `l`.`cnt` as `likes`,l2
            FROM `contest_works`
            
            JOIN `users` ON contest_works.user_id = users.id
           
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
       
LEFT JOIN (SELECT `user_id` FROM `contest_works_likes` WHERE `user_id` =31) as l2 ON contest_works.id = l2.work_id
ORDER BY contest_works.datePost DESC limit 10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:39:11 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(64): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:41:33 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`user_id` FROM `contest_works_likes` WHERE `user_id` =31) as l2 ON contest_works' at line 9 [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`,  `l`.`cnt` as `likes`,`l2`.`cnt` as `likes2`
            FROM `contest_works`
            
            JOIN `users` ON contest_works.user_id = users.id
           
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
       
LEFT JOIN (SELECT `cnt`s `user_id` FROM `contest_works_likes` WHERE `user_id` =31) as l2 ON contest_works.id = l2.work_id
ORDER BY contest_works.datePost DESC limit 10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:41:33 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(64): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:42:02 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'cnt' in 'field list' [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`,  `l`.`cnt` as `likes`,`l2`.`cnt` as `likes2`
            FROM `contest_works`
            
            JOIN `users` ON contest_works.user_id = users.id
           
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
       
LEFT JOIN (SELECT `cnt` `user_id` FROM `contest_works_likes` WHERE `user_id` =31) as l2 ON contest_works.id = l2.work_id
ORDER BY contest_works.datePost DESC limit 10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:42:02 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(64): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:42:13 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'cnt' in 'field list' [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`,  `l`.`cnt` as `likes`,`l2`.`cnt` as `likes2`
            FROM `contest_works`
            
            JOIN `users` ON contest_works.user_id = users.id
           
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
       
LEFT JOIN (SELECT `cnt`, `user_id` FROM `contest_works_likes` WHERE `user_id` =31) as l2 ON contest_works.id = l2.work_id
ORDER BY contest_works.datePost DESC limit 10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:42:13 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(64): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:43:38 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'cnt' in 'field list' [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`,  `l`.`cnt` as `likes`,`l2`.`cnt` as `likes2`
            FROM `contest_works`
            
            JOIN `users` ON contest_works.user_id = users.id
           
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
       
LEFT JOIN (SELECT `cnt`, `user_id` FROM `contest_works_likes` WHERE `user_id` =31) as l2 ON contest_works.id = l2.work_id
ORDER BY contest_works.datePost DESC limit 10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:43:38 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(64): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:43:39 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'cnt' in 'field list' [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`,  `l`.`cnt` as `likes`,`l2`.`cnt` as `likes2`
            FROM `contest_works`
            
            JOIN `users` ON contest_works.user_id = users.id
           
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
       
LEFT JOIN (SELECT `cnt`, `user_id` FROM `contest_works_likes` WHERE `user_id` =31) as l2 ON contest_works.id = l2.work_id
ORDER BY contest_works.datePost DESC limit 10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:43:39 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(64): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:44:00 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'l2.cnt' in 'field list' [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`,  `l`.`cnt` as `likes`,`l2`.`cnt` as `likes2`
            FROM `contest_works`
            
            JOIN `users` ON contest_works.user_id = users.id
           
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
       
LEFT JOIN (SELECT  `user_id` FROM `contest_works_likes` WHERE `user_id` =31) as l2 ON contest_works.id = l2.work_id
ORDER BY contest_works.datePost DESC limit 10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:44:00 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(64): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:44:12 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'l2' in 'field list' [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`,  `l`.`cnt` as `likes`,`l2` as `likes2`
            FROM `contest_works`
            
            JOIN `users` ON contest_works.user_id = users.id
           
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
       
LEFT JOIN (SELECT  `user_id` FROM `contest_works_likes` WHERE `user_id` =31) as l2 ON contest_works.id = l2.work_id
ORDER BY contest_works.datePost DESC limit 10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:44:12 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(64): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:44:28 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'l2.work_id' in 'on clause' [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`,  `l`.`cnt` as `likes`
            FROM `contest_works`
            
            JOIN `users` ON contest_works.user_id = users.id
           
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
       
LEFT JOIN (SELECT  `user_id` FROM `contest_works_likes` WHERE `user_id` =31) as l2 ON contest_works.id = l2.work_id
ORDER BY contest_works.datePost DESC limit 10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:44:28 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(64): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:44:30 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'l2.work_id' in 'on clause' [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`,  `l`.`cnt` as `likes`
            FROM `contest_works`
            
            JOIN `users` ON contest_works.user_id = users.id
           
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
       
LEFT JOIN (SELECT  `user_id` FROM `contest_works_likes` WHERE `user_id` =31) as l2 ON contest_works.id = l2.work_id
ORDER BY contest_works.datePost DESC limit 10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:44:30 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(64): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:53:57 --- CRITICAL: Database_Exception [ 1248 ]: Every derived table must have its own alias [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`,  `l`.`cnt` as `likes`
            FROM `contest_works`
            
            JOIN `users` ON contest_works.user_id = users.id
           
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
       
LEFT JOIN (SELECT  `user_id` FROM `contest_works_likes` WHERE `user_id` =31) ON contest_works.id = l.work_id
ORDER BY contest_works.datePost DESC limit 10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:53:57 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(64): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:54:12 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'l2.work_id' in 'on clause' [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`,  `l`.`cnt` as `likes`
            FROM `contest_works`
            
            JOIN `users` ON contest_works.user_id = users.id
           
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
       
LEFT JOIN (SELECT  `user_id` FROM `contest_works_likes` WHERE `user_id` =31) as l2 ON contest_works.id = l2.work_id
ORDER BY contest_works.datePost DESC limit 10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:54:12 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(64): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:54:23 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'l2.id' in 'on clause' [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`,  `l`.`cnt` as `likes`
            FROM `contest_works`
            
            JOIN `users` ON contest_works.user_id = users.id
           
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
       
LEFT JOIN (SELECT  `user_id` FROM `contest_works_likes` WHERE `user_id` =31) as l2 ON contest_works.id = l2.id
ORDER BY contest_works.datePost DESC limit 10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 21:54:23 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(64): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 23:08:42 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'l2.work_id' in 'on clause' [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`,  `l`.`cnt` as `likes`
            FROM `contest_works`
            
            JOIN `users` ON contest_works.user_id = users.id
           
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
       
LEFT JOIN (SELECT  `user_id` FROM `contest_works_likes` WHERE `user_id` =31) as l2 ON contest_works.id = l2.work_id
ORDER BY contest_works.datePost DESC limit 10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 23:08:42 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(64): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 23:09:09 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY contest_works.datePost DESC limit 10' at line 10 [ SELECT contest_works.*, users.first_name, users.last_name, users.middle_name , `c`.`cnt` as `comments`,  `l`.`cnt` as `likes`
            FROM `contest_works`
            
            JOIN `users` ON contest_works.user_id = users.id
           
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_comments` GROUP BY work_id) as c  ON contest_works.id = c.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `contest_works_likes` GROUP BY work_id) as l  ON contest_works.id = l.work_id
       
LEFT JOIN (SELECT  `user_id` FROM `contest_works_likes` WHERE `user_id` =31) as l2 
ORDER BY contest_works.datePost DESC limit 10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 23:09:09 --- DEBUG: #0 C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT contest_...', false, Array)
#1 C:\OpenServer\domains\konkurs\modules\contest\classes\Controller\Contest.php(64): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\konkurs\system\classes\Kohana\Controller.php(84): Controller_Contest->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#5 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\konkurs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\konkurs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\konkurs\modules\database\classes\Kohana\Database\Query.php:251