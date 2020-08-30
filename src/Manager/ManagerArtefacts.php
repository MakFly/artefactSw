<?php

namespace App\Manager;

/**
 * @Author Inopan
 */
class ManagerArtefacts
{
    /** @var string */
    private $skill1CritDmgMorePourcent = "[Skill 1] CRIT DMG +%";
    /** @var string */
    private $skill2CritDmgMorePourcent = "[Skill 2] CRIT DMG +%";
    /** @var string */
    private $skill3CritDmgMorePourcent = "[Skill 3] CRIT DMG +%";
    /** @var string */
    private $skill4CritDmgMorePourcent = "[Skill 4] CRIT DMG +%";
    /** @var string */
    private $skill1RecoveryMorePourcent = "[Skill 1] Recovery +%";
    /** @var string */
    private $skill2RecoveryMorePourcent = "[Skill 2] Recovery +%";
    /** @var string */
    private $skill3RecoveryMorePourcent = "[Skill 3] Recovery +%";
    /** @var string */
    private $skill1AccuracyMorePourcent = "[Skill 1] Accuracy +%";
    /** @var string */
    private $skill2AccuracyMorePourcent = "[Skill 2] Accuracy +%";
    /** @var string */
    private $skill3AccuracyMorePourcent = "[Skill 3] Accuracy +%";
    /** @var string */
    private $DamageDealtOnFireMorePourcent = "Damage Dealt on Fire +%";
    /** @var string */
    private $DamageDealtOnWaterMorePourcent = "Damage Dealt on Water +%";
    /** @var string */
    private $DamageDealtOnWindMorePourcent = "Damage Dealt on Wind +%";
    /** @var string */
    private $DamageDealtOnLightMorePourcent = "Damage Dealt on Light +%";
    /** @var string */
    private $DamageDealtOnDarkMorePourcent = "Damage Dealt on Dark +%";
    /** @var string */
    private $DamageReceivedFromFireLessPourcent = "Damage Received from Fire -%";
    /** @var string */
    private $DamageReceivedFromWaterLessPourcent = "Damage Received from Water -%";
    /** @var string */
    private $DamageReceivedFromWindLessPourcent = "Damage Received from Wind -%";
    /** @var string */
    private $DamageReceivedFromLightLessPourcent = "Damage Received from Light -%";
    /** @var string */
    private $DamageReceivedFromDarkLessPourcent = "Damage Received from Dark -%";
    /** @var string */
    private $ATKMoreProportionaltoLostHPUpToPourcent = "ATK+ Proportional to Lost HP up to %";
    /** @var string */
    private $DEFMoreProportionaltoLostHPUpToPourcent = "DEF+ Proportional to Lost HP up to %";
    /** @var string */
    private $SPDMoreProportionaltoLostHPUpToPourcent = "SPD+ Proportional to Lost HP up to %";
    /** @var string */
    private $ATKIncreasingEffectMorePourcent = "ATK Increasing Effect +%";
    /** @var string */
    private $DEFIncreasingEffectMorePourcent = "DEF Increasing Effect +%";
    /** @var string */
    private $SPDIncreasingEffectMorePourcent = "SPD Increasing Effect +%";
    /** @var string */
    private $CRITRateIncreasingEffectMorePourcent = "CRIT Rate Increasing Effect +%";
    /** @var string */
    private $DamageDealtbyCounterattackMorePourcent = "Damage Dealt by Counterattack +%";
    /** @var string */
    private $DamageDealtbyAttackingTogetherMorePourcent = "Damage Dealt by Attacking Together +%";
    /** @var string */
    private $BombDamageMorePourcent = "Bomb Damage +%";
    /** @var string */
    private $LifeDrainMorePourcent = "Life Drain +%";
    /** @var string */
    private $HPwhenRevivedMorePourcent = "HP when Revived +%";
    /** @var string */
    private $AttackBarwhenRevivedMorePourcent = "Attack Bar when Revived +%";
    /** @var string */
    private $DamageDealtbyReflectDMGMorePourcent = "Damage Dealt by Reflect DMG +%";
    /** @var string */
    private $AdditionalDamagebyPourcentOfHP = "Additional Damage by % of HP";
    /** @var string */
    private $AdditionalDamagebyPourcentOfATK = "Additional Damage by % of ATK";
    /** @var string */
    private $AdditionalDamagebyPourcentOfDEF = "Additional Damage by % of DEF";
    /** @var string */
    private $AdditionalDamagebyPourcentOfSPD = "Additional Damage by % of SPD";
    /** @var string */
    private $DamageReceivedUnderInabilityEffectsLessPourcent = "Damage Received Under Inability Effects -%";
    /** @var string */
    private $SPDUnderInabilityEffectsMorePourcent = "SPD Under Inability Effects +%";
    /** @var string */
    private $CRITDMGReceivedLessPourcent = "CRIT DMG Received -%";
    /** @var string */
    private $CrushingHitDMGMorePourcent = "Crushing Hit DMG +%";

    /**
     * Send a array with data for placing into the ajax twig
     *  37 à rajouter en plus de ce déjà mis dans le tableau
     * @var $subStats
     */
    public function checkArtefactsByMonsters($subStats)
    {
        $subStatsArray = [];
        foreach($subStats as $values){
            $subStatsArray = [
                "skill1Dmg" => $this->getSubsStatsSkill1critdmgmorepourcent($values),
                "skill2Dmg" => $this->getSubsStatsSkill2critdmgmorepourcent($values),
                "skill3Dmg" => $this->getSubsStatsSkill3critdmgmorepourcent($values),
                "skill4Dmg" => $this->getSubsStatsSkill4critdmgmorepourcent($values),
                "skill1Recovery" => $this->getSubsStatsSkill1RecoveryMorePourcent($values),
                "skill2Recovery" => $this->getSubsStatsSkill2RecoveryMorePourcent($values),
                "skill3Recovery" => $this->getSubsStatsSkill3RecoveryMorePourcent($values),
                "skill1Accuracy" => $this->getSubsStatsSkill1accuracymorepourcent($values),
                "skill2Accuracy" => $this->getSubsStatsSkill2accuracymorepourcent($values),
                "skill3Accuracy" => $this->getSubsStatsSkill3accuracymorepourcent($values),
                "damageDealFire" => $this->getSubsStatsDamagedealtonfiremorepourcent($values),
                "damageDealWater" => $this->getSubsStatsDamagedealtonwatermorepourcent($values),
                "damageDealWind" => $this->getSubsStatsDamagedealtonwindmorepourcent($values),
                "damageDealLight" => $this->getSubsStatsDamagedealtonlightmorepourcent($values),
                "damageDealDark" => $this->getSubsStatsDamagedealtondarkmorepourcent($values),
                "damageReceivedFire" => $this->getSubsStatsDamagereceivedfromfirelesspourcent($values),
                "damageReceivedWater" => $this->getSubsStatsDamagereceivedfromwaterlesspourcent($values),
                "damageReceivedWind" => $this->getSubsStatsDamagereceivedfromwindlesspourcent($values),
                "damageReceivedLight" => $this->getSubsStatsDamagereceivedfromlightlesspourcent($values),
                "damageReceivedDark" => $this->getSubsStatsDamagereceivedfromdarklesspourcent($values),
                "atkMoreProportionalToLost" => $this->getSubsStatsAtkmoreproportionaltolosthpuptopourcent($values),
                "defMoreProportionalToLost" => $this->getSubsStatsDefmoreproportionaltolosthpuptopourcent($values),
                "spdMoreProportionalToLost" => $this->getSubsStatsSpdmoreproportionaltolosthpuptopourcent($values),
                "atkIncreasingEffect" => $this->getSubsStatsAtkincreasingeffectmorepourcent($values),
                "defIncreasingEffect" => $this->getSubsStatsDefincreasingeffectmorepourcent($values),
                "spdIncreasingEffect" => $this->getSubsStatsSpdincreasingeffectmorepourcent($values),
                "critRateIncreasingEffect" => $this->getSubsStatsCritrateincreasingeffectmorepourcent($values),
                "damageDealByCounterAtk" => $this->getSubsStatsDamagedealtbycounterattackmorepourcent($values),
                "damageDealByAttackingTogether" => $this->getSubsStatsDamagedealtbyattackingtogethermorepourcent($values),
                "bombDamage" => $this->getSubsStatsBombdamagemorepourcent($values),
                "lifeDrain" => $this->getSubsStatsLifedrainmorepourcent($values),
                "hpWhenRevive" => $this->getSubsStatsHpwhenrevivedmorepourcent($values),
                "atkBarWhenRevive" => $this->getSubsStatsAttackbarwhenrevivedmorepourcent($values),
                "damageDealByReflectDmg" => $this->getSubsStatsDamagedealtbyreflectdmgmorepourcent($values),
                "additionalDamageByHp" => $this->getSubsStatsAdditionaldamagebypourcentofhp($values),
                "additionalDamageByAtk" => $this->getSubsStatsAdditionaldamagebypourcentofatk($values),
                "additionalDamageByDef" => $this->getSubsStatsAdditionaldamagebypourcentofdef($values),
                "additionalDamageBySpd" => $this->getSubsStatsAdditionaldamagebypourcentofspd($values),
                "damageReceivedUnderInabilityEffect" => $this->getSubsStatsDamagereceivedunderinabilityeffectslesspourcent($values),
                "spdUnderInabilityEffect" => $this->getSubsStatsSpdunderinabilityeffectsmorepourcent($values),
                "critDmgReceived" => $this->getSubsStatsCritdmgreceivedlesspourcent($values),
                "crushIngHitDmg" => $this->getSubsStatsCrushinghitdmgmorepourcent($values),
            ];
        }
        
        return $subStatsArray;
    }

    /**
     * @var $subStats
     */
    public function getSubsStatsSkill1critdmgmorepourcent($subStats)
    {
        if($subStats->getSkill1critdmgmorepourcent() === 2) {
            return $this->skill1CritDmgMorePourcent;
        }
    }

    /**
     * @var $subStats
     */
    public function getSubsStatsSkill2critdmgmorepourcent($subStats)
    {
        if($subStats->getSkill2critdmgmorepourcent() === 2) {
            return $this->skill2CritDmgMorePourcent;
        }
    }

    /**
     * @var $subStats
     */
    public function getSubsStatsSkill3critdmgmorepourcent($subStats)
    {
        if($subStats->getSkill3critdmgmorepourcent() === 2) {
            return $this->skill3CritDmgMorePourcent;
        }
    }

    /**
     * @var $subStats
     */
    public function getSubsStatsSkill4critdmgmorepourcent($subStats)
    {
        if($subStats->getSkill4critdmgmorepourcent() === 2) {
            return $this->skill4CritDmgMorePourcent;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsSkill1RecoveryMorePourcent($subStats)
    {
        if($subStats->getSkill1recoverymorepourcent() === 2) {
            return $this->skill1RecoveryMorePourcent;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsSkill2RecoveryMorePourcent($subStats)
    {
        if($subStats->getSkill2recoverymorepourcent() === 2) {
            return $this->skill2RecoveryMorePourcent;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsSkill3RecoveryMorePourcent($subStats)
    {
        if($subStats->getSkill3recoverymorepourcent() === 2) {
            return $this->skill3RecoveryMorePourcent;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsSkill1accuracymorepourcent($subStats)
    {
        if($subStats->getSkill1accuracymorepourcent() === 2) {
            return $this->skill1AccuracyMorePourcent;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsSkill2accuracymorepourcent($subStats)
    {
        if($subStats->getSkill2accuracymorepourcent() === 2) {
            return $this->skill2AccuracyMorePourcent;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsSkill3accuracymorepourcent($subStats)
    {
        if($subStats->getSkill3accuracymorepourcent() === 2) {
            return $this->skill3AccuracyMorePourcent;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsDamagedealtonfiremorepourcent($subStats)
    {
        if($subStats->getDamagedealtonfiremorepourcent() === 2) {
            return $this->DamageDealtOnFireMorePourcent;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsDamagedealtonwatermorepourcent($subStats)
    {
        if($subStats->getDamagedealtonwatermorepourcent() === 2) {
            return $this->DamageDealtOnWaterMorePourcent;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsDamagedealtonwindmorepourcent($subStats)
    {
        if($subStats->getDamagedealtonwindmorepourcent() === 2) {
            return $this->DamageDealtOnWindMorePourcent;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsDamagedealtonlightmorepourcent($subStats)
    {
        if($subStats->getDamagedealtonlightmorepourcent() === 2) {
            return $this->DamageDealtOnLightMorePourcent;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsDamagedealtondarkmorepourcent($subStats)
    {
        if($subStats->getDamagedealtondarkmorepourcent() === 2) {
            return $this->DamageDealtOnDarkMorePourcent;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsDamagereceivedfromfirelesspourcent($subStats)
    {
        if($subStats->getDamagereceivedfromfirelesspourcent() === 2) {
            return $this->DamageReceivedFromFireLessPourcent;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsDamagereceivedfromwaterlesspourcent($subStats)
    {
        if($subStats->getDamagereceivedfromwaterlesspourcent() === 2) {
            return $this->DamageReceivedFromWaterLessPourcent;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsDamagereceivedfromwindlesspourcent($subStats)
    {
        if($subStats->getDamagereceivedfromwindlesspourcent() === 2) {
            return $this->DamageReceivedFromWindLessPourcent;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsDamagereceivedfromlightlesspourcent($subStats)
    {
        if($subStats->getDamagereceivedfromlightlesspourcent() === 2) {
            return $this->DamageReceivedFromLightLessPourcent;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsDamagereceivedfromdarklesspourcent($subStats)
    {
        if($subStats->getDamagereceivedfromdarklesspourcent() === 2) {
            return $this->DamageReceivedFromDarkLessPourcent;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsAtkmoreproportionaltolosthpuptopourcent($subStats)
    {
        if($subStats->getAtkmoreproportionaltolosthpuptopourcent() === 2) {
            return $this->ATKMoreProportionaltoLostHPUpToPourcent;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsDefmoreproportionaltolosthpuptopourcent($subStats)
    {
        if($subStats->getDefmoreproportionaltolosthpuptopourcent() === 2) {
            return $this->DEFMoreProportionaltoLostHPUpToPourcent;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsSpdmoreproportionaltolosthpuptopourcent($subStats)
    {
        if($subStats->getSpdmoreproportionaltolosthpuptopourcent() === 2) {
            return $this->SPDMoreProportionaltoLostHPUpToPourcent;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsAtkincreasingeffectmorepourcent($subStats)
    {
        if($subStats->getAtkincreasingeffectmorepourcent() === 2) {
            return $this->ATKIncreasingEffectMorePourcent;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsDefincreasingeffectmorepourcent($subStats)
    {
        if($subStats->getDefincreasingeffectmorepourcent() === 2) {
            return $this->DEFIncreasingEffectMorePourcent;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsSpdincreasingeffectmorepourcent($subStats)
    {
        if($subStats->getSpdincreasingeffectmorepourcent() === 2) {
            return $this->SPDIncreasingEffectMorePourcent;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsCritrateincreasingeffectmorepourcent($subStats)
    {
        if($subStats->getCritrateincreasingeffectmorepourcent() === 2) {
            return $this->CRITRateIncreasingEffectMorePourcent;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsDamagedealtbycounterattackmorepourcent($subStats)
    {
        if($subStats->getDamagedealtbycounterattackmorepourcent() === 2) {
            return $this->DamageDealtbyCounterattackMorePourcent;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsDamagedealtbyattackingtogethermorepourcent($subStats)
    {
        if($subStats->getDamagedealtbyattackingtogethermorepourcent() === 2) {
            return $this->DamageDealtbyAttackingTogetherMorePourcent;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsBombdamagemorepourcent($subStats)
    {
        if($subStats->getBombdamagemorepourcent() === 2) {
            return $this->BombDamageMorePourcent;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsLifedrainmorepourcent($subStats)
    {
        if($subStats->getLifedrainmorepourcent() === 2) {
            return $this->LifeDrainMorePourcent;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsHpwhenrevivedmorepourcent($subStats)
    {
        if($subStats->getHpwhenrevivedmorepourcent() === 2) {
            return $this->HPwhenRevivedMorePourcent;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsAttackbarwhenrevivedmorepourcent($subStats)
    {
        if($subStats->getAttackbarwhenrevivedmorepourcent() === 2) {
            return $this->AttackBarwhenRevivedMorePourcent;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsDamagedealtbyreflectdmgmorepourcent($subStats)
    {
        if($subStats->getDamagedealtbyreflectdmgmorepourcent() === 2) {
            return $this->DamageDealtbyReflectDMGMorePourcent;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsAdditionaldamagebypourcentofhp($subStats)
    {
        if($subStats->getAdditionaldamagebypourcentofhp() === 2) {
            return $this->AdditionalDamagebyPourcentOfHP;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsAdditionaldamagebypourcentofatk($subStats)
    {
        if($subStats->getAdditionaldamagebypourcentofatk() === 2) {
            return $this->AdditionalDamagebyPourcentOfATK;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsAdditionaldamagebypourcentofdef($subStats)
    {
        if($subStats->getAdditionaldamagebypourcentofdef() === 2) {
            return $this->AdditionalDamagebyPourcentOfDEF;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsAdditionaldamagebypourcentofspd($subStats)
    {
        if($subStats->getAdditionaldamagebypourcentofspd() === 2) {
            return $this->AdditionalDamagebyPourcentOfSPD;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsDamagereceivedunderinabilityeffectslesspourcent($subStats)
    {
        if($subStats->getDamagereceivedunderinabilityeffectslesspourcent() === 2) {
            return $this->DamageReceivedUnderInabilityEffectsLessPourcent;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsSpdunderinabilityeffectsmorepourcent($subStats)
    {
        if($subStats->getSpdunderinabilityeffectsmorepourcent() === 2) {
            return $this->SPDUnderInabilityEffectsMorePourcent;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsCritdmgreceivedlesspourcent($subStats)
    {
        if($subStats->getCritdmgreceivedlesspourcent() === 2) {
            return $this->CRITDMGReceivedLessPourcent;
        }
    }

    /**
     *
     * @param [type] $subStats
     */
    public function getSubsStatsCrushinghitdmgmorepourcent($subStats)
    {
        if($subStats->getCrushinghitdmgmorepourcent() === 2) {
            return $this->CrushingHitDMGMorePourcent;
        }
    }

}