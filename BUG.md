[RANKING]
SQL=> 
public function searchMonstersByElementsFlatStatsPreferedStats($idElements, $idFlatsStats, $idPreferedStats)
    {
        $filterByPreferedStats = "";

        if (!empty($idElements) && !empty($idFlatsStats) && !empty($idPreferedStats)) {
            $filterByPreferedStats = ' SELECT m.monster, m.awake, m.type, m.ranking, ps.name AS "PREFEREDSTAT", et.name AS "ELEMENT" , (CASE id_prefered_stats WHEN '.$idPreferedStats.' THEN "stat_prefered" END ) FROM monsters m 
                                    LEFT JOIN element_type et ON et.id = m.id_element_type
                                    LEFT JOIN prefered_stats ps ON ps.id = m.id_prefered_stats
                                    WHERE id_element_type = '.$idElements.'
                                    AND id_flat_stats = '.$idFlatsStats.'
                                    ORDER BY id_prefered_stats = '.$idPreferedStats.' DESC, ranking DESC';
        }

        $stmt = $this->getEntityManager()->getConnection()->executeQuery($filterByPreferedStats);
        return $stmt->fetchAll();
    }


    /** TEST A LHEURE ACTUELLE  */
    public function searchMonstersByTypeOfMonsters($idFlatsStats, $idPreferedStats)
    {
        $filterByPreferedStats = "";

        if (!empty($idFlatsStats) && !empty($idPreferedStats)) {
            $filterByPreferedStats = ' SELECT *, ps.name AS "PREFEREDSTAT", fs.name AS "flat_stat", et.name AS "ELEMENT", (CASE id_prefered_stats WHEN '.$idPreferedStats.' THEN "stat_prefered" END ) FROM monsters m 
                                    LEFT JOIN element_type et ON et.id = m.id_element_type
                                    LEFT JOIN flat_stats fs ON fs.id = m.id_flat_stats
                                    LEFT JOIN prefered_stats ps ON ps.id = m.id_prefered_stats
                                    LEFT JOIN substats_artefact_by_monsters sabm ON sabm.id = m.id_substats_artefact_by_monsters
                                    WHERE id_flat_stats = '.$idFlatsStats.'
                                    ORDER BY id_prefered_stats = '.$idPreferedStats.' DESC';
        }

        $stmt = $this->getEntityManager()->getConnection()->executeQuery($filterByPreferedStats);
        return $stmt->fetchAll();
    }


[FILTRES]

[FRONT]
=> [GRAPHISME]
1) Attention ce n'est pas responsive à 100% => Regarder pourquoi !
