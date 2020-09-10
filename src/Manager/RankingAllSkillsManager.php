<?php

namespace App\Manager;

/**
 * @Author Inopan
 */
class RankingAllSkillsManager
{
    public function filtersSubStats($skills, $value, $filterSubStats)
    {
        $rankingChangeSubStat = [];
        $monsterEpic = [295];

        switch($filterSubStats) {
            case 1:
                if ($skills->getSkill1critdmgmorepourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill1critdmgmorepourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill1critdmgmorepourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                break;
            case 2:
                if ($skills->getSkill2critdmgmorepourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill2critdmgmorepourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill2critdmgmorepourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                break;
            case 3:
                if ($skills->getSkill3critdmgmorepourcent() == 2) {
                    if (in_array($value->getId(), $monsterEpic)) {
                        $rankingChangeSubStat[] = [
                            "id" => $value->getId(),
                            "ranking" => 100 + floatval(str_replace(",", ".", $value->getRanking()))
                        ];
                    } else {
                        $rankingChangeSubStat[] = [
                            "id" => $value->getId(),
                            "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                        ];
                    }
                }
                if ($skills->getSkill3critdmgmorepourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill3critdmgmorepourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                break;
            case 4:
                if ($skills->getSkill4critdmgmorepourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill4critdmgmorepourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill4critdmgmorepourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                break;
            case 5:
                if ($skills->getSkill1recoverymorepourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill1recoverymorepourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill1recoverymorepourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                break;
            case 6:
                if ($skills->getSkill2recoverymorepourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill2recoverymorepourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill2recoverymorepourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                break;
            case 7:
                if ($skills->getSkill3recoverymorepourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill3recoverymorepourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill3recoverymorepourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 8:
                if ($skills->getSkill1accuracymorepourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill1accuracymorepourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill1accuracymorepourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 9:
                if ($skills->getSkill2accuracymorepourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill2accuracymorepourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill2accuracymorepourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 10:
                if ($skills->getSkill3accuracymorepourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill3accuracymorepourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill3accuracymorepourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 11:
                if ($skills->getDamagedealtonfiremorepourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagedealtonfiremorepourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagedealtonfiremorepourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 12:
                if ($skills->getDamagedealtonwatermorepourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagedealtonwatermorepourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagedealtonwatermorepourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 13:
                if ($skills->getDamagedealtonwindmorepourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagedealtonwindmorepourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagedealtonwindmorepourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 14:
                if ($skills->getDamagedealtonlightmorepourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagedealtonlightmorepourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagedealtonlightmorepourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 15:
                if ($skills->getDamagedealtondarkmorepourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagedealtondarkmorepourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagedealtondarkmorepourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 16:
                if ($skills->getDamagereceivedfromfirelesspourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagereceivedfromfirelesspourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagereceivedfromfirelesspourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 17:
                if ($skills->getDamagereceivedfromwaterlesspourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagereceivedfromwaterlesspourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagereceivedfromwaterlesspourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 18:
                if ($skills->getBombdamagemorepourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getBombdamagemorepourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getBombdamagemorepourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 19:
                if ($skills->getCritdmgreceivedlesspourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getCritdmgreceivedlesspourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getCritdmgreceivedlesspourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 20:
                if ($skills->getCritrateincreasingeffectmorepourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getCritrateincreasingeffectmorepourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getCritrateincreasingeffectmorepourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 21:
                if ($skills->getCrushinghitdmgmorepourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getCrushinghitdmgmorepourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getCrushinghitdmgmorepourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 22:
                if ($skills->getDamagedealtbyattackingtogethermorepourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagedealtbyattackingtogethermorepourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagedealtbyattackingtogethermorepourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 23:
                if ($skills->getDamagedealtbycounterattackmorepourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagedealtbycounterattackmorepourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagedealtbycounterattackmorepourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 24:
                if ($skills->getDamagedealtbyreflectdmgmorepourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagedealtbyreflectdmgmorepourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagedealtbyreflectdmgmorepourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 16:
                if ($skills->getSpdmoreproportionaltolosthpuptopourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSpdmoreproportionaltolosthpuptopourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSpdmoreproportionaltolosthpuptopourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 15:
                if ($skills->getAtkincreasingeffectmorepourcent() == 2) {
                    if (in_array($value->getId(), $monsterEpic)) {
                        $rankingChangeSubStat[] = [
                            "id" => $value->getId(),
                            "ranking" => 100 + floatval(str_replace(",", ".", $value->getRanking()))
                        ];
                    } else {
                        $rankingChangeSubStat[] = [
                            "id" => $value->getId(),
                            "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                        ];
                    }
                }
                if ($skills->getAtkincreasingeffectmorepourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getAtkincreasingeffectmorepourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 25:
                if ($skills->damagedealtondarkmorepourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->damagedealtondarkmorepourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->damagedealtondarkmorepourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 26:
                if ($skills->getDamagedealtonfiremorepourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagedealtonfiremorepourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagedealtonfiremorepourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 27:
                if ($skills->getDamagedealtonlightmorepourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagedealtonlightmorepourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagedealtonlightmorepourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 28:
                if ($skills->getDamagedealtonwatermorepourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagedealtonwatermorepourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagedealtonwatermorepourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 29:
                if ($skills->getDamagedealtonwindmorepourcent() == 2) {
                    if (in_array($value->getId(), $monsterEpic)) {
                        $rankingChangeSubStat[] = [
                            "id" => $value->getId(),
                            "ranking" => 100 + floatval(str_replace(",", ".", $value->getRanking()))
                        ];
                    } else {
                        $rankingChangeSubStat[] = [
                            "id" => $value->getId(),
                            "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                        ];
                    }
                }
                if ($skills->getDamagedealtonwindmorepourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagedealtonwindmorepourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 30:
                if ($skills->getDamagereceivedfromdarklesspourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagereceivedfromdarklesspourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagereceivedfromdarklesspourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 31:
                if ($skills->getDamagereceivedfromfirelesspourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagereceivedfromfirelesspourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagereceivedfromfirelesspourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 32:
                if ($skills->getDamagereceivedfromlightlesspourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagereceivedfromlightlesspourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagereceivedfromlightlesspourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 17:
                if ($skills->getAttackbarwhenrevivedmorepourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getAttackbarwhenrevivedmorepourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getAttackbarwhenrevivedmorepourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 33:
                if ($skills->getDamagereceivedfromwaterlesspourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagereceivedfromwaterlesspourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagereceivedfromwaterlesspourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 34:
                if ($skills->getDamagereceivedfromwindlesspourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagereceivedfromwindlesspourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagereceivedfromwindlesspourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 35:
                if ($skills->getDamagereceivedunderinabilityeffectslesspourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagereceivedunderinabilityeffectslesspourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDamagereceivedunderinabilityeffectslesspourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 36:
                if ($skills->getDefincreasingeffectmorepourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDefincreasingeffectmorepourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDefincreasingeffectmorepourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 37:
                if ($skills->getDefmoreproportionaltolosthpuptopourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDefmoreproportionaltolosthpuptopourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getDefmoreproportionaltolosthpuptopourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 38:
                if ($skills->getHpwhenrevivedmorepourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getHpwhenrevivedmorepourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getHpwhenrevivedmorepourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 39:
                if ($skills->getLifedrainmorepourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getLifedrainmorepourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getLifedrainmorepourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 13:
                if ($skills->getAdditionaldamagebypourcentofhp() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getAdditionaldamagebypourcentofhp() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getAdditionaldamagebypourcentofhp() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 11:
                if ($skills->getAdditionaldamagebypourcentofatk() == 2) {
                    if (in_array($value->getId(), $monsterEpic)) {
                        $rankingChangeSubStat[] = [
                            "id" => $value->getId(),
                            "ranking" => 100 + floatval(str_replace(",", ".", $value->getRanking()))
                        ];
                    } else {
                        $rankingChangeSubStat[] = [
                            "id" => $value->getId(),
                            "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                        ];
                    }
                }
                if ($skills->getAdditionaldamagebypourcentofatk() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getAdditionaldamagebypourcentofatk() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 12:
                if ($skills->getAdditionaldamagebypourcentofdef() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getAdditionaldamagebypourcentofdef() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getAdditionaldamagebypourcentofdef() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 14:
                if ($skills->getAdditionaldamagebypourcentofspd() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getAdditionaldamagebypourcentofspd() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getAdditionaldamagebypourcentofspd() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 40:
                if ($skills->getSpdincreasingeffectmorepourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSpdincreasingeffectmorepourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSpdincreasingeffectmorepourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 41:
                if ($skills->getSpdunderinabilityeffectsmorepourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSpdunderinabilityeffectsmorepourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSpdunderinabilityeffectsmorepourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 42:
                if ($skills->getSpdmoreproportionaltolosthpuptopourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSpdmoreproportionaltolosthpuptopourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSpdmoreproportionaltolosthpuptopourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
            case 43:
                if ($skills->getCritdmgreceivedlesspourcent() == 2) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getCritdmgreceivedlesspourcent() == 1) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getCritdmgreceivedlesspourcent() == 0) {
                    $rankingChangeSubStat[] = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
            break;
        }

        return $rankingChangeSubStat;
    }
}
