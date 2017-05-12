 <?php 
  
    function readAll() {
    	$db = new PDO('mysql:dbname=projet3;host=localhost', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	    $req = $db->query('SELECT * FROM billets ORDER BY id_billet DESC');
	    $res = $req->fetchAll();
	    return $res;
	}