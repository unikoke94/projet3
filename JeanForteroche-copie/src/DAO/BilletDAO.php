<?php

namespace JeanForteroche\DAO;

use Doctrine\DBAL\Connection;
use JeanForteroche\Domain\Billet;

class BilletDAO extends DAO
{


	/**
     * Returns an article matching the supplied id.
     *
     * @param integer $id
     *
     * @return \MicroCMS\Domain\Article|throws an exception if no matching article is found
     */
	public function read($id) {
        $sql = "select * from billets where id_billet=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("Pas de billet correspondant " . $id);
    }




    /**
     * Renvoie une liste de billets triés par id
     *
     * @return array Liste de tous les billets.
     */
    public function readAll() {
        $sql = "SELECT * FROM billets ORDER BY id_billet DESC";
        $res = $this->getDb()->fetchAll($sql);

        // Converti un résultat query en tableau d'objet
        $billets = array();
        foreach ($res as $row) {
            $billetId = $row['id_billet'];
            $billets[$billetId] = $this->buildDomainObject($row);
        }

        return $billets;
    }

    /**
     * Crée un objet billet.
     *
     * @param array $row Infos du billets.
     * @return \JeanForteroche\Domain\Billet
     */
    protected function buildDomainObject(array $row) {
        $billet = new Billet();
        $billet->setId($row['id_billet']);
        $billet->setTitre($row['titre_billet']);
        $billet->setContenu($row['contenu_billet']);
        return $billet;
    }
}