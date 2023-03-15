<?php
declare(strict_types=1);
require_once('config.php');
require_once('Database.php');

/**
 * Manager class that provides work with the database
 */
final class Manager
{
	/**
	 * @var object
	 */
	private object $query;
    /**
     * @param Request $query
     */
    public function __construct(Request $query)
	{
        $this->query = $query;
    }
    /**
     * @return void
     */
    public function handle(): void
{
$db = new Database(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
$dbconn = $db->db_connect();	
$result = $this->query->getIP();
$data = $db->db_select($dbconn, $result);	
if( $data === false ) {
$db->db_insert($dbconn, $result);	
}
}
}
?>
