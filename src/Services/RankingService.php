<?php

namespace App\Services;

use App\Manager\RankingManager;

/**
 * @author Inopan <email@email.com>
 */
class RankingService{

    protected $rankingManager;

    public function __construct(RankingManager $rankingManager)
    {
        $this->rankingManager = $rankingManager;
    }

    /**
     * Boucle sur l'ensemble des monstrers trouvé dans le filtre
     * 
     */
    public function getRankingSubStats($monstersFilters, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour)
    {
        $ranking = [];
        foreach($monstersFilters as $valuesMonsters) {
            $ranking = $this->rankingManager->verifRankingMonstersBySubStat($valuesMonsters[0], $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour);
        }

        return $ranking;
    }
}
