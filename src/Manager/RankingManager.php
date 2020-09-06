<?php

namespace App\Manager;

/**
 * @Author Inopan
 */
class RankingManager
{
    /** @var array */
    private $tmpRankingValuesMonsters = [];

    /** @var RankingAllSkillsManager */
    private $rankingAllSkillsManager;

    public function __construct(RankingAllSkillsManager $rankingAllSkillsManager)
    {
        $this->rankingAllSkillsManager = $rankingAllSkillsManager;
    }

    public function verifRankingMonstersBySubStat($value, $filterSubStatOne, $filterSubStatTwo) 
    {
        $skills = $value->getIdSubstatsArtefactByMonsters();
        return $this->rankings($skills, $value, $filterSubStatOne, $filterSubStatTwo);
    }

    /**
     * Test rankings
     */
    public function rankings($skills, $value, $filterSubStatOne, $filterSubStatTwo)
    {   
        if (!empty($filterSubStatOne)) {
            $rankingChangeOne = $this->rankingAllSkillsManager->filterOne($skills, $value, $filterSubStatOne);
            $rankingChangeTwo = $this->rankingAllSkillsManager->filterTwo($skills, $value, $filterSubStatTwo);
        
            return $this->sortDescRanking($rankingChangeOne, $rankingChangeTwo, $value); 
        }
    }

    /**
     * real Ranking by filters
     */
    public function sortDescRanking($rankingChangeOne, $rankingChangeTwo, $value)
    {
        $rankFinal = 0;
        if(!empty($rankingChangeTwo)) {

            if($rankingChangeOne['ranking'] != $rankingChangeTwo['ranking']) {
                $rankFinal = $rankingChangeTwo['ranking'];
            } else {
                $rankFinal = $rankingChangeOne['ranking'];
            }

            return $this->getTmpRankingValuesMonsters(
                $value->getId(), 
                $value->getAwake(), 
                $value->getIdElementType()->getName(), 
                $value->getType(), 
                $value->getMonster(), 
                $value->getIdPreferedStats()->getName(),
                number_format($rankFinal, 19, ',', ' ')
            );

        } else {
            
            $rankFinal = $rankingChangeOne['ranking'];

            return $this->getTmpRankingValuesMonsters(
                $value->getId(), 
                $value->getAwake(), 
                $value->getIdElementType()->getName(), 
                $value->getType(), 
                $value->getMonster(), 
                $value->getIdPreferedStats()->getName(),
                number_format($rankFinal, 19, ',', ' ')
            );
        }
    }

    /**
     * Undocumented function
     *
     * @param int $id
     * @param string $awake
     * @param string $elementName
     * @param string $type
     * @param string $family
     * @param string $preferedStatName
     * @param [type] $rank
     * @return void
     */
    public function getTmpRankingValuesMonsters($id, $awake, $elementName, $type, $family, $preferedStatName, $rank)
    {
        $this->tmpRankingValuesMonsters[] = [
            "id" => $id,
            "awake" => $awake,
            "element" => $elementName,
            "type" => $type,
            "family" => $family,
            "prefered_flat_stats" => $preferedStatName,
            "ranking" => $rank
        ];
        
        usort($this->tmpRankingValuesMonsters, array($this, 'fonctionComparaison'));

        return $this->tmpRankingValuesMonsters;
    }

    /**
     * tri par ordre décroissant
     */
    public function fonctionComparaison($a, $b) 
    {
        return $a['ranking'] < $b['ranking'];
    }
}
