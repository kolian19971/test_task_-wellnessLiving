<?php
/*
 * There is a `t` table with 3 fields:
 * `uid` - user ID
 * `dt` - date and time of message
 * `s` - text of the message
 * Each message gets its own row in the database.
 * Write an SQL query to retrieve date and text of the latest messages of every user.
 */

$sql = "
SELECT t.uid, t.s, t.dt 
FROM t, (SELECT uid, max(dt) as dt
         FROM t
         GROUP BY uid) max_t
WHERE t.uid = max_t.uid AND t.dt = max_t.dt;
";