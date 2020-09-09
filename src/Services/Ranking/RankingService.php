<?php

namespace App\Service;

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
    public function rankingSubStats($monsterFilterByTwoParameters, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour)
    {
        $ranking = [];
        foreach($monsterFilterByTwoParameters as $valuesMonsters) {
            if(!empty($filterSubStatOne) || !empty($filterSubStatTwo)) {
                $ranking = $this->rankingManager->verifRankingMonstersBySubStat($valuesMonsters, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour);
            }
        }

        return $ranking;
    }
}
