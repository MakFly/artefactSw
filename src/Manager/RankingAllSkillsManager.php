<?php

namespace App\Manager;

/**
 * @Author Inopan
 */
class RankingAllSkillsManager
{
    public function filterOne($skills, $value, $filterSubStatOne)
    {
        $rankingChangeSubStatOne = [];

        switch($filterSubStatOne) {
            case 1:
                if ($skills->getSkill1critdmgmorepourcent() == 2) {
                    $rankingChangeSubStatOne = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill1critdmgmorepourcent() == 1) {
                    $rankingChangeSubStatOne = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill1critdmgmorepourcent() == 0) {
                    $rankingChangeSubStatOne = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                break;
            case 2:
                if ($skills->getSkill2critdmgmorepourcent() == 2) {
                    $rankingChangeSubStatOne = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill2critdmgmorepourcent() == 1) {
                    $rankingChangeSubStatOne = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill2critdmgmorepourcent() == 0) {
                    $rankingChangeSubStatOne = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                break;
            case 3:
                if ($skills->getSkill3critdmgmorepourcent() == 2) {
                    $rankingChangeSubStatOne = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill3critdmgmorepourcent() == 1) {
                    $rankingChangeSubStatOne = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill3critdmgmorepourcent() == 0) {
                    $rankingChangeSubStatOne = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                break;
            case 4:
                if ($skills->getSkill4critdmgmorepourcent() == 2) {
                    $rankingChangeSubStatOne = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill4critdmgmorepourcent() == 1) {
                    $rankingChangeSubStatOne = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill4critdmgmorepourcent() == 0) {
                    $rankingChangeSubStatOne = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                break;
        }

        return $rankingChangeSubStatOne;
    }

    public function filterTwo($skills, $value, $filterSubStatTwo)
    {
        $rankingChangeSubStatTwo = [];

        switch($filterSubStatTwo) {
            case 1:
                if ($skills->getSkill1critdmgmorepourcent() == 2) {
                    $rankingChangeSubStatTwo = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill1critdmgmorepourcent() == 1) {
                    $rankingChangeSubStatTwo = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill1critdmgmorepourcent() == 0) {
                    $rankingChangeSubStatTwo = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                break;
            case 2:
                if ($skills->getSkill2critdmgmorepourcent() == 2) {
                    $rankingChangeSubStatTwo = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill2critdmgmorepourcent() == 1) {
                    $rankingChangeSubStatTwo = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill2critdmgmorepourcent() == 0) {
                    $rankingChangeSubStatTwo = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                break;
            case 3:
                if ($skills->getSkill3critdmgmorepourcent() == 2) {
                    $rankingChangeSubStatTwo = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill3critdmgmorepourcent() == 1) {
                    $rankingChangeSubStatTwo = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill3critdmgmorepourcent() == 0) {
                    $rankingChangeSubStatTwo = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                break;
            case 4:
                if ($skills->getSkill4critdmgmorepourcent() == 2) {
                    $rankingChangeSubStatTwo = [
                        "id" => $value->getId(),
                        "ranking" => 2 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill4critdmgmorepourcent() == 1) {
                    $rankingChangeSubStatTwo = [
                        "id" => $value->getId(),
                        "ranking" => 1 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                if ($skills->getSkill4critdmgmorepourcent() == 0) {
                    $rankingChangeSubStatTwo = [
                        "id" => $value->getId(),
                        "ranking" => 0.5 + floatval(str_replace(",", ".", $value->getRanking()))
                    ];
                }
                break;
        }

        return $rankingChangeSubStatTwo;
    }

    public function filterThree()
    {

    }

    public function filterFour()
    {

    }
}