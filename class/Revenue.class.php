<?php
require_once 'Db.class.php';
class Revenue{
    public function incRevenue(){
        $db = new Db();
        
        $db->query("SELECT * from revenue");
        $resulst = $db->fetchAll();
        
        
        
        $rev = $resulst[0]['revenue'];
        $newRev = rand(1,10);

        $rev = $newRev + $rev;

        $db->query("UPDATE revenue set revenue = $rev where id = 1");
        
        
        $db->close();
        
        
        return $rev;

    }
}



