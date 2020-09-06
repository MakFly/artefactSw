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
    public function rankingSubStats($monsterFilterByTwoParameters, $filterSubStatOne, $filterSubStatTwo)
    {
        $ranking = [];
        foreach($monsterFilterByTwoParameters as $valuesMonsters) {
            if(!empty($filterSubStatOne) || !empty($filterSubStatTwo)) {
                $ranking = $this->sortRankingBySubStatMonster($valuesMonsters, $filterSubStatOne, $filterSubStatTwo);
            }
        }

        return $ranking;
    }

    /**
     * Retourn un tableau de monstres trié en fonction des subs stats sélectionné
     * Exemple : la value retourne les monstres récupéré au préalable
     * en fonction de la valeur de chaque substats =>
     * si elle est égale à 2 elle gagne 2 points , si c'est 1 elle gagne 1 point si c'est 0 elle a 0.5 point
     */
    public function sortRankingBySubStatMonster($MonsterSubStatsValues, $filterSubStatOne, $filterSubStatTwo)
    {
        return $this->rankingManager->verifRankingMonstersBySubStat($MonsterSubStatsValues, $filterSubStatOne, $filterSubStatTwo);
    }
}
