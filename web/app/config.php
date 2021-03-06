<?

/**
 * Copyright 2014 Micc (Media Integration and Communication Center) http://www.micc.unifi.it
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *     http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 * @author      Media Integration and Communication Center http://www.micc.unifi.it (Micc) <info@micc.unifi.it>
 * @license     Apache License https://github.com/miccunifi/Loki/LICENSE.txt
 * @link        Official page and description: http://www.micc.unifi.it/vim/opensource/loki-a-cross-media-search-engine/
 *              GitHub Repository: https://github.com/miccunifi/Loki
 * 
*/



?><?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'root';
$db_name = 'loki';

$miccDirectory = "/Users/giuseppebecchi/Documents/htdocs/Loki/web/";
$absolutePath = "http://localhost/Loki/web/";
$solrCoreUrl = 'http://localhost:8080/solr_471/loki/';



$interfacePath = $absolutePath."app/";

$uploadDir = '/media/';


// for executing pdfinfo by php exec from localhost
putenv('PATH=' . getenv('PATH') . ':/usr/local/bin');

// connect to db
$db_connect = mysql_connect($db_host, $db_user , $db_pass);
if (!$db_connect) {
    die('Not connected : ' . mysql_error());
}

if (! mysql_select_db($db_name) ) {
    die ('Can\'t conntect to database : ' . mysql_error());
}


?>
