<?php

namespace App\Manager;

/**
 * @Author Inopan
 */
class ManagerMonstersByArtefacts
{
    /** @var string */
    private $skill1CritDmgMorePourcent = "Skill 1 CRIT DMG +%";
    /** @var string */
    private $skill2CritDmgMorePourcent = "Skill 2 CRIT DMG +%";
    /** @var string */
    private $skill3CritDmgMorePourcent = "Skill 3 CRIT DMG +%";
    /** @var string */
    private $skill4CritDmgMorePourcent = "Skill 4 CRIT DMG +%";
    /** @var string */
    private $skill1RecoveryMorePourcent = "Skill 1 Recovery +%";
    /** @var string */
    private $skill2RecoveryMorePourcent = "Skill 2 Recovery +%";
    /** @var string */
    private $skill3RecoveryMorePourcent = "Skill 3 Recovery +%";
    /** @var string */
    private $skill1AccuracyMorePourcent = "Skill 1 Accuracy +%";
    /** @var string */
    private $skill2AccuracyMorePourcent = "Skill 2 Accuracy +%";
    /** @var string */
    private $skill3AccuracyMorePourcent = "Skill 3 Accuracy +%";
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
    public function checkArtefactsByMonsters($subStats, $translatorInterface)
    {
        $subStatsArray = [];
        foreach($subStats as $values){
            $subStatsArray = [
                "skill1Dmg" => $this->getTranslateSubStats($values->getSkill1critdmgmorepourcent(), $this->skill1CritDmgMorePourcent, $translatorInterface),
                "skill2Dmg" => $this->getTranslateSubStats($values->getSkill2critdmgmorepourcent(), $this->skill2CritDmgMorePourcent, $translatorInterface),
                "skill3Dmg" => $this->getTranslateSubStats($values->getSkill3critdmgmorepourcent(), $this->skill3CritDmgMorePourcent, $translatorInterface),
                "skill4Dmg" => $this->getTranslateSubStats($values->getSkill4critdmgmorepourcent(), $this->skill4CritDmgMorePourcent, $translatorInterface),
                "skill1Recovery" => $this->getTranslateSubStats($values->getSkill1recoverymorepourcent(), $this->skill1RecoveryMorePourcent, $translatorInterface),
                "skill2Recovery" => $this->getTranslateSubStats($values->getSkill2recoverymorepourcent(), $this->skill2RecoveryMorePourcent, $translatorInterface),
                "skill3Recovery" => $this->getTranslateSubStats($values->getSkill3recoverymorepourcent(), $this->skill3RecoveryMorePourcent, $translatorInterface),
                "skill1Accuracy" => $this->getTranslateSubStats($values->getSkill1accuracymorepourcent(), $this->skill1AccuracyMorePourcent, $translatorInterface),
                "skill2Accuracy" => $this->getTranslateSubStats($values->getSkill2accuracymorepourcent(), $this->skill2AccuracyMorePourcent, $translatorInterface),
                "skill3Accuracy" => $this->getTranslateSubStats($values->getSkill3accuracymorepourcent(), $this->skill3AccuracyMorePourcent, $translatorInterface),
                "damageDealFire" => $this->getTranslateSubStats($values->getDamagedealtonfiremorepourcent(), $this->DamageDealtOnFireMorePourcent, $translatorInterface),
                "damageDealWater" => $this->getTranslateSubStats($values->getDamagedealtonwatermorepourcent(), $this->DamageDealtOnWaterMorePourcent, $translatorInterface),
                "damageDealWind" => $this->getTranslateSubStats($values->getDamagedealtonwindmorepourcent(), $this->DamageDealtOnWindMorePourcent, $translatorInterface),
                "damageDealLight" => $this->getTranslateSubStats($values->getDamagedealtonlightmorepourcent(), $this->DamageDealtOnLightMorePourcent, $translatorInterface),
                "damageDealDark" => $this->getTranslateSubStats($values->getDamagedealtondarkmorepourcent(), $this->DamageDealtOnDarkMorePourcent, $translatorInterface),
                "damageReceivedFire" => $this->getTranslateSubStats($values->getDamagereceivedfromfirelesspourcent(), $this->DamageReceivedFromFireLessPourcent, $translatorInterface),
                "damageReceivedWater" => $this->getTranslateSubStats($values->getDamagereceivedfromwaterlesspourcent(), $this->DamageReceivedFromWaterLessPourcent, $translatorInterface),
                "damageReceivedWind" => $this->getTranslateSubStats($values->getDamagereceivedfromwindlesspourcent(), $this->DamageReceivedFromWindLessPourcent, $translatorInterface),
                "damageReceivedLight" => $this->getTranslateSubStats($values->getDamagereceivedfromlightlesspourcent(), $this->DamageReceivedFromLightLessPourcent, $translatorInterface),
                "damageReceivedDark" => $this->getTranslateSubStats($values->getDamagereceivedfromdarklesspourcent(), $this->DamageReceivedFromDarkLessPourcent, $translatorInterface),
                "atkMoreProportionalToLost" => $this->getTranslateSubStats($values->getAtkmoreproportionaltolosthpuptopourcent(), $this->ATKMoreProportionaltoLostHPUpToPourcent, $translatorInterface),
                "defMoreProportionalToLost" => $this->getTranslateSubStats($values->getDefmoreproportionaltolosthpuptopourcent(), $this->DEFMoreProportionaltoLostHPUpToPourcent, $translatorInterface),
                "spdMoreProportionalToLost" => $this->getTranslateSubStats($values->getSpdmoreproportionaltolosthpuptopourcent(), $this->SPDMoreProportionaltoLostHPUpToPourcent, $translatorInterface),
                "atkIncreasingEffect" => $this->getTranslateSubStats($values->getAtkincreasingeffectmorepourcent(), $this->ATKIncreasingEffectMorePourcent, $translatorInterface),
                "defIncreasingEffect" => $this->getTranslateSubStats($values->getDefincreasingeffectmorepourcent(), $this->DEFIncreasingEffectMorePourcent, $translatorInterface),
                "spdIncreasingEffect" => $this->getTranslateSubStats($values->getSpdincreasingeffectmorepourcent(), $this->SPDIncreasingEffectMorePourcent, $translatorInterface),
                "critRateIncreasingEffect" => $this->getTranslateSubStats($values->getCritrateincreasingeffectmorepourcent(), $this->CRITRateIncreasingEffectMorePourcent, $translatorInterface),
                "damageDealByCounterAtk" => $this->getTranslateSubStats($values->getDamagedealtbycounterattackmorepourcent(), $this->DamageDealtbyCounterattackMorePourcent, $translatorInterface),
                "damageDealByAttackingTogether" => $this->getTranslateSubStats($values->getDamagedealtbyattackingtogethermorepourcent(), $this->DamageDealtbyAttackingTogetherMorePourcent, $translatorInterface),
                "bombDamage" => $this->getTranslateSubStats($values->getBombdamagemorepourcent(), $this->BombDamageMorePourcent, $translatorInterface),
                "lifeDrain" => $this->getTranslateSubStats($values->getLifedrainmorepourcent(), $this->LifeDrainMorePourcent, $translatorInterface),
                "hpWhenRevive" => $this->getTranslateSubStats($values->getHpwhenrevivedmorepourcent(), $this->HPwhenRevivedMorePourcent, $translatorInterface),
                "atkBarWhenRevive" => $this->getTranslateSubStats($values->getAttackbarwhenrevivedmorepourcent(), $this->AttackBarwhenRevivedMorePourcent, $translatorInterface),
                "damageDealByReflectDmg" => $this->getTranslateSubStats($values->getDamagedealtbyreflectdmgmorepourcent(), $this->DamageDealtbyReflectDMGMorePourcent, $translatorInterface),
                "additionalDamageByHp" => $this->getTranslateSubStats($values->getAdditionaldamagebypourcentofhp(), $this->AdditionalDamagebyPourcentOfHP, $translatorInterface),
                "additionalDamageByAtk" => $this->getTranslateSubStats($values->getAdditionaldamagebypourcentofatk(), $this->AdditionalDamagebyPourcentOfATK, $translatorInterface),
                "additionalDamageByDef" => $this->getTranslateSubStats($values->getAdditionaldamagebypourcentofdef(), $this->AdditionalDamagebyPourcentOfDEF, $translatorInterface),
                "additionalDamageBySpd" => $this->getTranslateSubStats($values->getAdditionaldamagebypourcentofspd(), $this->AdditionalDamagebyPourcentOfSPD, $translatorInterface),
                "damageReceivedUnderInabilityEffect" => $this->getTranslateSubStats($values->getDamagereceivedunderinabilityeffectslesspourcent(), $this->DamageReceivedUnderInabilityEffectsLessPourcent, $translatorInterface),
                "spdUnderInabilityEffect" => $this->getTranslateSubStats($values->getSpdunderinabilityeffectsmorepourcent(), $this->SPDUnderInabilityEffectsMorePourcent, $translatorInterface),
                "critDmgReceived" => $this->getTranslateSubStats($values->getCritdmgreceivedlesspourcent(), $this->CRITDMGReceivedLessPourcent, $translatorInterface),
                "crushIngHitDmg" => $this->getTranslateSubStats($values->getCrushinghitdmgmorepourcent(), $this->CrushingHitDMGMorePourcent, $translatorInterface)
            ];
        }
        
        return $subStatsArray;
    }

    /**
     *
     * @param [type] $subStats
     * @param [type] $subsStatsSelect
     * @param [type] $translatorInterface
     * @return void
     */
    public function getTranslateSubStats($subStats, $subsStatsSelect, $translatorInterface)
    {
        if($subStats == 2) {
            $valueTranslate = $translatorInterface->trans($subsStatsSelect);
            return $valueTranslate;
        }
    }
}
