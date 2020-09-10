<?php

namespace App\Manager;

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
     * @param array $monsterFilterByTwoParameters
     * @param int $selectFormsubStatsType1
     */
    public function getRankingSubStats($monstersFilters, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour)
    {
        $ranking = [];
        foreach($monstersFilters as $valuesMonsters) {
            if(!empty($filterSubStatOne) || !empty($filterSubStatTwo)) {
                $ranking = $this->rankingManager->verifRankingMonstersBySubStat($valuesMonsters, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour);
            }
        }

        return $ranking;
    }
}
