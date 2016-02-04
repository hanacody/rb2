<?php
db_query('ALTER TABLE '.$table['s_seo'].' CHANGE `description` `description` TEXT NOT NULL',$DB_CONNECT);
db_query('ALTER TABLE '.$table['s_page'].' ADD `member` INT default 0 NOT NULL ',$DB_CONNECT);
db_query('ALTER TABLE '.$table['s_page'].' ADD `extra` TEXT NOT NULL ',$DB_CONNECT);

DirDelete($g['path_switch'].'end/visitercheck');
?>