<?php

require_once "./DB_PDO.php";

class MeraniaController
{
    protected DB_PDO $pdo;

    public function __construct()
    {
        $this->pdo = new DB_PDO();
    }

    public function createMeranie(string $NodeId, float $tmp, float $alt, float $pressure)
    {
        try {



            $now = new DateTime();
            $now->setTimezone(new DateTimeZone('Europe/Bratislava'));
            $phpDate = $now->format('d-m-Y h:i:sa');


            $phpTimestamp = strtotime($phpDate);
            $javaScriptTimestamp = $phpTimestamp * 1000;

            $this->pdo->run("INSERT INTO `merania` (`temp`, `alt`,`pressure`, `date`,`node_id`) VALUES (?, ?,?,?,?)", [$tmp, $alt,$pressure,$javaScriptTimestamp,$NodeId]);
//            if($this->pdo->lastInsertId() > 10 ){
//                $this->pdo->run("TRUNCATE TABLE `merania`");
//            }
            return $this->findMeranie($this->pdo->lastInsertId());
        }
        catch (Exception $e) {
            return null;
        }



    }

    public function findMeranie($id)
    {
        try {
            $meranie = $this->pdo->run("SELECT * FROM `merania` WHERE id=?", [$id])->fetch();
            return $meranie;


        } catch (Exception $e) {
            return null;
        }
    }

    public function getMeraniaForUser($id)
    {
        try {

            $merania = $this->pdo->run("SELECT * FROM `merania` WHERE node_id=?", [$id])->fetchAll();
            return $merania;
        } catch (Exception $e) {
            return null;
        }
    }


    public function deleteMeranie($id): bool
    {
        try {
            $this->pdo->run("DELETE FROM `merania` WHERE `id`=?", [$id]);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}
