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

    public function verifRankingMonstersBySubStat($value, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour) 
    {
        $skills = $value->getIdSubstatsArtefactByMonsters();
        return $this->rankings($skills, $value, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour);
    }

    /**
     * Test rankings
     */
    public function rankings($skills, $value, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour)
    {   
        $rankingChangeOne = $this->rankingAllSkillsManager->filtersSubStats($skills, $value, $filterSubStatOne);
        $rankingChangeTwo = $this->rankingAllSkillsManager->filtersSubStats($skills, $value, $filterSubStatTwo);
        $rankingChangeThree = $this->rankingAllSkillsManager->filtersSubStats($skills, $value, $filterSubStatThree);
        $rankingChangeFour = $this->rankingAllSkillsManager->filtersSubStats($skills, $value, $filterSubStatFour);

        if(!empty($filterSubStatOne) && empty($filterSubStatTwo) ) {
            $tmpRank = [];

            foreach($rankingChangeOne as $idRank => $rankingOne){
                $rank = $rankingOne['ranking'];
                $tmpRank = [
                    "id" => $rankingOne['id'],
                    "ranking" => $rank
                ];
            }

            return $this->sortDescRanking($tmpRank, $value);
        }

        if(!empty($filterSubStatOne) && !empty($filterSubStatTwo) && empty($filterSubStatThree) ) {
            
            $tmpRank = [];

            foreach($rankingChangeOne as $idRank => $rankingOne){
                foreach($rankingChangeTwo as $idTwo => $rankingTwo){
                    $rank = ($rankingOne['ranking'] + $rankingTwo['ranking']);
                    $tmpRank = [
                        "id" => $rankingOne['id'],
                        "ranking" => $rank
                    ];
                }
            }

            return $this->sortDescRanking($tmpRank, $value);
        }

        if(!empty($filterSubStatOne) && !empty($filterSubStatTwo) && !empty($filterSubStatThree) && empty($filterSubStatFour)) {
            
            $tmpRank = [];

            foreach($rankingChangeOne as $idRank => $rankingOne){
                foreach($rankingChangeTwo as $idTwo => $rankingTwo){
                    foreach($rankingChangeThree as $idThree => $rankingThree){
                        $rank = ($rankingOne['ranking'] + $rankingTwo['ranking'] + $rankingThree['ranking']);
                        $tmpRank = [
                            "id" => $rankingOne['id'],
                            "ranking" => $rank
                        ];
                    }
                }
            }

            return $this->sortDescRanking($tmpRank, $value);
        }

        if(!empty($filterSubStatOne) && !empty($filterSubStatTwo) && !empty($filterSubStatThree) && !empty($filterSubStatFour) ) {
            
            $tmpRank = [];
            foreach($rankingChangeOne as $idRank => $rankingOne){
                foreach($rankingChangeTwo as $idTwo => $rankingTwo){
                    foreach($rankingChangeThree as $idThree => $rankingThree){
                        foreach($rankingChangeFour as $idFour => $rankingFour){
                            $rank = ($rankingOne['ranking'] + $rankingTwo['ranking'] + $rankingThree['ranking'] + $rankingFour['ranking']);
                            $tmpRank = [
                                "id" => $rankingOne['id'],
                                "ranking" => $rank
                            ];
                        }    
                    }
                }
            }
           
            return $this->sortDescRanking($tmpRank, $value);
        }
    }

    /**
     * real Ranking by filters tri DESC
     */
    public function sortDescRanking($rankFinal, $value)
    {
        return $this->getTmpRankingValuesMonsters(
            $value->getId(), 
            $value->getAwake(), 
            $value->getIdElementType()->getName(), 
            $value->getType(), 
            $value->getMonster(), 
            $value->getIdPreferedStats()->getName(),
            number_format($rankFinal['ranking'], 19, ',', ' ')
        );
    }

    /**
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

        if(!empty($this->tmpRankingValuesMonsters)) {
            usort($this->tmpRankingValuesMonsters, array($this, 'fonctionComparaisonRanking'));
        }

        return $this->tmpRankingValuesMonsters;
    }

    /**
     * tri par ordre décroissant
     */
    public function fonctionComparaisonRanking($a, $b) 
    {
        if($a['ranking'] != $b['ranking']) {
            return $a['ranking'] < $b['ranking'];
        }

        return $a['family'] > $b['family'];
    }
}
