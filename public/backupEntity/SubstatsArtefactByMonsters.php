<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubstatsArtefactByMonsters
 *
 * @ORM\Table(name="substats_artefact_by_monsters", indexes={@ORM\Index(name="fk_id_monsters", columns={"id_monsters"})})
 * @ORM\Entity(repositoryClass="App\Repository\SubstatsArtefactByMonstersRepository")
 */
class SubstatsArtefactByMonsters
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_monsters", type="integer", nullable=false)
     */
    private $idMonsters;

    /**
     * @var int
     *
     * @ORM\Column(name="skill1CritDmgMorePourcent", type="integer", nullable=false)
     */
    private $skill1critdmgmorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="skill2CritDmgMorePourcent", type="integer", nullable=false)
     */
    private $skill2critdmgmorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="skill3CritDmgMorePourcent", type="integer", nullable=false)
     */
    private $skill3critdmgmorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="skill4CritDmgMorePourcent", type="integer", nullable=false)
     */
    private $skill4critdmgmorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="skill1RecoveryMorePourcent", type="integer", nullable=false)
     */
    private $skill1recoverymorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="skill2RecoveryMorePourcent", type="integer", nullable=false)
     */
    private $skill2recoverymorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="skill3RecoveryMorePourcent", type="integer", nullable=false)
     */
    private $skill3recoverymorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="skill1AccuracyMorePourcent", type="integer", nullable=false)
     */
    private $skill1accuracymorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="skill2AccuracyMorePourcent", type="integer", nullable=false)
     */
    private $skill2accuracymorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="skill3AccuracyMorePourcent", type="integer", nullable=false)
     */
    private $skill3accuracymorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="DamageDealtOnFireMorePourcent", type="integer", nullable=false)
     */
    private $damagedealtonfiremorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="DamageDealtOnWaterMorePourcent", type="integer", nullable=false)
     */
    private $damagedealtonwatermorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="DamageDealtOnWindMorePourcent", type="integer", nullable=false)
     */
    private $damagedealtonwindmorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="DamageDealtOnLightMorePourcent", type="integer", nullable=false)
     */
    private $damagedealtonlightmorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="DamageDealtOnDarkMorePourcent", type="integer", nullable=false)
     */
    private $damagedealtondarkmorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="DamageReceivedFromFireLessPourcent", type="integer", nullable=false)
     */
    private $damagereceivedfromfirelesspourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="DamageReceivedFromWaterLessPourcent", type="integer", nullable=false)
     */
    private $damagereceivedfromwaterlesspourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="DamageReceivedFromWindLessPourcent", type="integer", nullable=false)
     */
    private $damagereceivedfromwindlesspourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="DamageReceivedFromLightLessPourcent", type="integer", nullable=false)
     */
    private $damagereceivedfromlightlesspourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="DamageReceivedFromDarkLessPourcent", type="integer", nullable=false)
     */
    private $damagereceivedfromdarklesspourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="ATKMoreProportionaltoLostHPUpToPourcent", type="integer", nullable=false)
     */
    private $atkmoreproportionaltolosthpuptopourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="DEFMoreProportionaltoLostHPUpToPourcent", type="integer", nullable=false)
     */
    private $defmoreproportionaltolosthpuptopourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="SPDMoreProportionaltoLostHPUpToPourcent", type="integer", nullable=false)
     */
    private $spdmoreproportionaltolosthpuptopourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="ATKIncreasingEffectMorePourcent", type="integer", nullable=false)
     */
    private $atkincreasingeffectmorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="DEFIncreasingEffectMorePourcent", type="integer", nullable=false)
     */
    private $defincreasingeffectmorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="SPDIncreasingEffectMorePourcent", type="integer", nullable=false)
     */
    private $spdincreasingeffectmorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="CRITRateIncreasingEffectMorePourcent", type="integer", nullable=false)
     */
    private $critrateincreasingeffectmorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="DamageDealtbyCounterattackMorePourcent", type="integer", nullable=false)
     */
    private $damagedealtbycounterattackmorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="DamageDealtbyAttackingTogetherMorePourcent", type="integer", nullable=false)
     */
    private $damagedealtbyattackingtogethermorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="BombDamageMorePourcent", type="integer", nullable=false)
     */
    private $bombdamagemorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="LifeDrainMorePourcent", type="integer", nullable=false)
     */
    private $lifedrainmorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="HPwhenRevivedMorePourcent", type="integer", nullable=false)
     */
    private $hpwhenrevivedmorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="AttackBarwhenRevivedMorePourcent", type="integer", nullable=false)
     */
    private $attackbarwhenrevivedmorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="DamageDealtbyReflectDMGMorePourcent", type="integer", nullable=false)
     */
    private $damagedealtbyreflectdmgmorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="AdditionalDamagebyPourcentOfHP", type="integer", nullable=false)
     */
    private $additionaldamagebypourcentofhp;

    /**
     * @var int
     *
     * @ORM\Column(name="AdditionalDamagebyPourcentOfATK", type="integer", nullable=false)
     */
    private $additionaldamagebypourcentofatk;

    /**
     * @var int
     *
     * @ORM\Column(name="AdditionalDamagebyPourcentOfDEF", type="integer", nullable=false)
     */
    private $additionaldamagebypourcentofdef;

    /**
     * @var int
     *
     * @ORM\Column(name="AdditionalDamagebyPourcentOfSPD", type="integer", nullable=false)
     */
    private $additionaldamagebypourcentofspd;

    /**
     * @var int
     *
     * @ORM\Column(name="DamageReceivedUnderInabilityEffectsLessPourcent", type="integer", nullable=false)
     */
    private $damagereceivedunderinabilityeffectslesspourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="SPDUnderInabilityEffectsMorePourcent", type="integer", nullable=false)
     */
    private $spdunderinabilityeffectsmorepourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="CRITDMGReceivedLessPourcent", type="integer", nullable=false)
     */
    private $critdmgreceivedlesspourcent;

    /**
     * @var int
     *
     * @ORM\Column(name="CrushingHitDMGMorePourcent", type="integer", nullable=false)
     */
    private $crushinghitdmgmorepourcent;

    /**
     * Get the value of skill1critdmgmorepourcent
     *
     * @return  int
     */ 
    public function getSkill1critdmgmorepourcent()
    {
        return $this->skill1critdmgmorepourcent;
    }

    /**
     * Set the value of skill1critdmgmorepourcent
     *
     * @param  int  $skill1critdmgmorepourcent
     *
     * @return  self
     */ 
    public function setSkill1critdmgmorepourcent(int $skill1critdmgmorepourcent)
    {
        $this->skill1critdmgmorepourcent = $skill1critdmgmorepourcent;

        return $this;
    }

    /**
     * Get the value of skill2critdmgmorepourcent
     *
     * @return  int
     */ 
    public function getSkill2critdmgmorepourcent()
    {
        return $this->skill2critdmgmorepourcent;
    }

    /**
     * Set the value of skill2critdmgmorepourcent
     *
     * @param  int  $skill2critdmgmorepourcent
     *
     * @return  self
     */ 
    public function setSkill2critdmgmorepourcent(int $skill2critdmgmorepourcent)
    {
        $this->skill2critdmgmorepourcent = $skill2critdmgmorepourcent;

        return $this;
    }

    /**
     * Get the value of skill3critdmgmorepourcent
     *
     * @return  int
     */ 
    public function getSkill3critdmgmorepourcent()
    {
        return $this->skill3critdmgmorepourcent;
    }

    /**
     * Set the value of skill3critdmgmorepourcent
     *
     * @param  int  $skill3critdmgmorepourcent
     *
     * @return  self
     */ 
    public function setSkill3critdmgmorepourcent(int $skill3critdmgmorepourcent)
    {
        $this->skill3critdmgmorepourcent = $skill3critdmgmorepourcent;

        return $this;
    }

    /**
     * Get the value of skill4critdmgmorepourcent
     *
     * @return  int
     */ 
    public function getSkill4critdmgmorepourcent()
    {
        return $this->skill4critdmgmorepourcent;
    }

    /**
     * Set the value of skill4critdmgmorepourcent
     *
     * @param  int  $skill4critdmgmorepourcent
     *
     * @return  self
     */ 
    public function setSkill4critdmgmorepourcent(int $skill4critdmgmorepourcent)
    {
        $this->skill4critdmgmorepourcent = $skill4critdmgmorepourcent;

        return $this;
    }

    /**
     * Get the value of skill1recoverymorepourcent
     *
     * @return  int
     */ 
    public function getSkill1recoverymorepourcent()
    {
        return $this->skill1recoverymorepourcent;
    }

    /**
     * Set the value of skill1recoverymorepourcent
     *
     * @param  int  $skill1recoverymorepourcent
     *
     * @return  self
     */ 
    public function setSkill1recoverymorepourcent(int $skill1recoverymorepourcent)
    {
        $this->skill1recoverymorepourcent = $skill1recoverymorepourcent;

        return $this;
    }

    /**
     * Get the value of skill2recoverymorepourcent
     *
     * @return  int
     */ 
    public function getSkill2recoverymorepourcent()
    {
        return $this->skill2recoverymorepourcent;
    }

    /**
     * Set the value of skill2recoverymorepourcent
     *
     * @param  int  $skill2recoverymorepourcent
     *
     * @return  self
     */ 
    public function setSkill2recoverymorepourcent(int $skill2recoverymorepourcent)
    {
        $this->skill2recoverymorepourcent = $skill2recoverymorepourcent;

        return $this;
    }

    /**
     * Get the value of skill3recoverymorepourcent
     *
     * @return  int
     */ 
    public function getSkill3recoverymorepourcent()
    {
        return $this->skill3recoverymorepourcent;
    }

    /**
     * Set the value of skill3recoverymorepourcent
     *
     * @param  int  $skill3recoverymorepourcent
     *
     * @return  self
     */ 
    public function setSkill3recoverymorepourcent(int $skill3recoverymorepourcent)
    {
        $this->skill3recoverymorepourcent = $skill3recoverymorepourcent;

        return $this;
    }

    /**
     * Get the value of skill1accuracymorepourcent
     *
     * @return  int
     */ 
    public function getSkill1accuracymorepourcent()
    {
        return $this->skill1accuracymorepourcent;
    }

    /**
     * Set the value of skill1accuracymorepourcent
     *
     * @param  int  $skill1accuracymorepourcent
     *
     * @return  self
     */ 
    public function setSkill1accuracymorepourcent(int $skill1accuracymorepourcent)
    {
        $this->skill1accuracymorepourcent = $skill1accuracymorepourcent;

        return $this;
    }

    /**
     * Get the value of skill2accuracymorepourcent
     *
     * @return  int
     */ 
    public function getSkill2accuracymorepourcent()
    {
        return $this->skill2accuracymorepourcent;
    }

    /**
     * Set the value of skill2accuracymorepourcent
     *
     * @param  int  $skill2accuracymorepourcent
     *
     * @return  self
     */ 
    public function setSkill2accuracymorepourcent(int $skill2accuracymorepourcent)
    {
        $this->skill2accuracymorepourcent = $skill2accuracymorepourcent;

        return $this;
    }

    /**
     * Get the value of skill3accuracymorepourcent
     *
     * @return  int
     */ 
    public function getSkill3accuracymorepourcent()
    {
        return $this->skill3accuracymorepourcent;
    }

    /**
     * Set the value of skill3accuracymorepourcent
     *
     * @param  int  $skill3accuracymorepourcent
     *
     * @return  self
     */ 
    public function setSkill3accuracymorepourcent(int $skill3accuracymorepourcent)
    {
        $this->skill3accuracymorepourcent = $skill3accuracymorepourcent;

        return $this;
    }

    /**
     * Get the value of damagedealtonfiremorepourcent
     *
     * @return  int
     */ 
    public function getDamagedealtonfiremorepourcent()
    {
        return $this->damagedealtonfiremorepourcent;
    }

    /**
     * Set the value of damagedealtonfiremorepourcent
     *
     * @param  int  $damagedealtonfiremorepourcent
     *
     * @return  self
     */ 
    public function setDamagedealtonfiremorepourcent(int $damagedealtonfiremorepourcent)
    {
        $this->damagedealtonfiremorepourcent = $damagedealtonfiremorepourcent;

        return $this;
    }

    /**
     * Get the value of damagedealtonwatermorepourcent
     *
     * @return  int
     */ 
    public function getDamagedealtonwatermorepourcent()
    {
        return $this->damagedealtonwatermorepourcent;
    }

    /**
     * Set the value of damagedealtonwatermorepourcent
     *
     * @param  int  $damagedealtonwatermorepourcent
     *
     * @return  self
     */ 
    public function setDamagedealtonwatermorepourcent(int $damagedealtonwatermorepourcent)
    {
        $this->damagedealtonwatermorepourcent = $damagedealtonwatermorepourcent;

        return $this;
    }

    /**
     * Get the value of damagedealtonwindmorepourcent
     *
     * @return  int
     */ 
    public function getDamagedealtonwindmorepourcent()
    {
        return $this->damagedealtonwindmorepourcent;
    }

    /**
     * Set the value of damagedealtonwindmorepourcent
     *
     * @param  int  $damagedealtonwindmorepourcent
     *
     * @return  self
     */ 
    public function setDamagedealtonwindmorepourcent(int $damagedealtonwindmorepourcent)
    {
        $this->damagedealtonwindmorepourcent = $damagedealtonwindmorepourcent;

        return $this;
    }

    /**
     * Get the value of damagedealtonlightmorepourcent
     *
     * @return  int
     */ 
    public function getDamagedealtonlightmorepourcent()
    {
        return $this->damagedealtonlightmorepourcent;
    }

    /**
     * Set the value of damagedealtonlightmorepourcent
     *
     * @param  int  $damagedealtonlightmorepourcent
     *
     * @return  self
     */ 
    public function setDamagedealtonlightmorepourcent(int $damagedealtonlightmorepourcent)
    {
        $this->damagedealtonlightmorepourcent = $damagedealtonlightmorepourcent;

        return $this;
    }

    /**
     * Get the value of damagedealtondarkmorepourcent
     *
     * @return  int
     */ 
    public function getDamagedealtondarkmorepourcent()
    {
        return $this->damagedealtondarkmorepourcent;
    }

    /**
     * Set the value of damagedealtondarkmorepourcent
     *
     * @param  int  $damagedealtondarkmorepourcent
     *
     * @return  self
     */ 
    public function setDamagedealtondarkmorepourcent(int $damagedealtondarkmorepourcent)
    {
        $this->damagedealtondarkmorepourcent = $damagedealtondarkmorepourcent;

        return $this;
    }

    /**
     * Get the value of damagereceivedfromfirelesspourcent
     *
     * @return  int
     */ 
    public function getDamagereceivedfromfirelesspourcent()
    {
        return $this->damagereceivedfromfirelesspourcent;
    }

    /**
     * Set the value of damagereceivedfromfirelesspourcent
     *
     * @param  int  $damagereceivedfromfirelesspourcent
     *
     * @return  self
     */ 
    public function setDamagereceivedfromfirelesspourcent(int $damagereceivedfromfirelesspourcent)
    {
        $this->damagereceivedfromfirelesspourcent = $damagereceivedfromfirelesspourcent;

        return $this;
    }

    /**
     * Get the value of damagereceivedfromwaterlesspourcent
     *
     * @return  int
     */ 
    public function getDamagereceivedfromwaterlesspourcent()
    {
        return $this->damagereceivedfromwaterlesspourcent;
    }

    /**
     * Set the value of damagereceivedfromwaterlesspourcent
     *
     * @param  int  $damagereceivedfromwaterlesspourcent
     *
     * @return  self
     */ 
    public function setDamagereceivedfromwaterlesspourcent(int $damagereceivedfromwaterlesspourcent)
    {
        $this->damagereceivedfromwaterlesspourcent = $damagereceivedfromwaterlesspourcent;

        return $this;
    }

    /**
     * Get the value of damagereceivedfromwindlesspourcent
     *
     * @return  int
     */ 
    public function getDamagereceivedfromwindlesspourcent()
    {
        return $this->damagereceivedfromwindlesspourcent;
    }

    /**
     * Set the value of damagereceivedfromwindlesspourcent
     *
     * @param  int  $damagereceivedfromwindlesspourcent
     *
     * @return  self
     */ 
    public function setDamagereceivedfromwindlesspourcent(int $damagereceivedfromwindlesspourcent)
    {
        $this->damagereceivedfromwindlesspourcent = $damagereceivedfromwindlesspourcent;

        return $this;
    }

    /**
     * Get the value of damagereceivedfromlightlesspourcent
     *
     * @return  int
     */ 
    public function getDamagereceivedfromlightlesspourcent()
    {
        return $this->damagereceivedfromlightlesspourcent;
    }

    /**
     * Set the value of damagereceivedfromlightlesspourcent
     *
     * @param  int  $damagereceivedfromlightlesspourcent
     *
     * @return  self
     */ 
    public function setDamagereceivedfromlightlesspourcent(int $damagereceivedfromlightlesspourcent)
    {
        $this->damagereceivedfromlightlesspourcent = $damagereceivedfromlightlesspourcent;

        return $this;
    }

    /**
     * Get the value of damagereceivedfromdarklesspourcent
     *
     * @return  int
     */ 
    public function getDamagereceivedfromdarklesspourcent()
    {
        return $this->damagereceivedfromdarklesspourcent;
    }

    /**
     * Set the value of damagereceivedfromdarklesspourcent
     *
     * @param  int  $damagereceivedfromdarklesspourcent
     *
     * @return  self
     */ 
    public function setDamagereceivedfromdarklesspourcent(int $damagereceivedfromdarklesspourcent)
    {
        $this->damagereceivedfromdarklesspourcent = $damagereceivedfromdarklesspourcent;

        return $this;
    }

    /**
     * Get the value of atkmoreproportionaltolosthpuptopourcent
     *
     * @return  int
     */ 
    public function getAtkmoreproportionaltolosthpuptopourcent()
    {
        return $this->atkmoreproportionaltolosthpuptopourcent;
    }

    /**
     * Set the value of atkmoreproportionaltolosthpuptopourcent
     *
     * @param  int  $atkmoreproportionaltolosthpuptopourcent
     *
     * @return  self
     */ 
    public function setAtkmoreproportionaltolosthpuptopourcent(int $atkmoreproportionaltolosthpuptopourcent)
    {
        $this->atkmoreproportionaltolosthpuptopourcent = $atkmoreproportionaltolosthpuptopourcent;

        return $this;
    }

    /**
     * Get the value of defmoreproportionaltolosthpuptopourcent
     *
     * @return  int
     */ 
    public function getDefmoreproportionaltolosthpuptopourcent()
    {
        return $this->defmoreproportionaltolosthpuptopourcent;
    }

    /**
     * Set the value of defmoreproportionaltolosthpuptopourcent
     *
     * @param  int  $defmoreproportionaltolosthpuptopourcent
     *
     * @return  self
     */ 
    public function setDefmoreproportionaltolosthpuptopourcent(int $defmoreproportionaltolosthpuptopourcent)
    {
        $this->defmoreproportionaltolosthpuptopourcent = $defmoreproportionaltolosthpuptopourcent;

        return $this;
    }

    /**
     * Get the value of spdmoreproportionaltolosthpuptopourcent
     *
     * @return  int
     */ 
    public function getSpdmoreproportionaltolosthpuptopourcent()
    {
        return $this->spdmoreproportionaltolosthpuptopourcent;
    }

    /**
     * Set the value of spdmoreproportionaltolosthpuptopourcent
     *
     * @param  int  $spdmoreproportionaltolosthpuptopourcent
     *
     * @return  self
     */ 
    public function setSpdmoreproportionaltolosthpuptopourcent(int $spdmoreproportionaltolosthpuptopourcent)
    {
        $this->spdmoreproportionaltolosthpuptopourcent = $spdmoreproportionaltolosthpuptopourcent;

        return $this;
    }

    /**
     * Get the value of atkincreasingeffectmorepourcent
     *
     * @return  int
     */ 
    public function getAtkincreasingeffectmorepourcent()
    {
        return $this->atkincreasingeffectmorepourcent;
    }

    /**
     * Set the value of atkincreasingeffectmorepourcent
     *
     * @param  int  $atkincreasingeffectmorepourcent
     *
     * @return  self
     */ 
    public function setAtkincreasingeffectmorepourcent(int $atkincreasingeffectmorepourcent)
    {
        $this->atkincreasingeffectmorepourcent = $atkincreasingeffectmorepourcent;

        return $this;
    }

    /**
     * Get the value of defincreasingeffectmorepourcent
     *
     * @return  int
     */ 
    public function getDefincreasingeffectmorepourcent()
    {
        return $this->defincreasingeffectmorepourcent;
    }

    /**
     * Set the value of defincreasingeffectmorepourcent
     *
     * @param  int  $defincreasingeffectmorepourcent
     *
     * @return  self
     */ 
    public function setDefincreasingeffectmorepourcent(int $defincreasingeffectmorepourcent)
    {
        $this->defincreasingeffectmorepourcent = $defincreasingeffectmorepourcent;

        return $this;
    }

    /**
     * Get the value of spdincreasingeffectmorepourcent
     *
     * @return  int
     */ 
    public function getSpdincreasingeffectmorepourcent()
    {
        return $this->spdincreasingeffectmorepourcent;
    }

    /**
     * Set the value of spdincreasingeffectmorepourcent
     *
     * @param  int  $spdincreasingeffectmorepourcent
     *
     * @return  self
     */ 
    public function setSpdincreasingeffectmorepourcent(int $spdincreasingeffectmorepourcent)
    {
        $this->spdincreasingeffectmorepourcent = $spdincreasingeffectmorepourcent;

        return $this;
    }

    /**
     * Get the value of critrateincreasingeffectmorepourcent
     *
     * @return  int
     */ 
    public function getCritrateincreasingeffectmorepourcent()
    {
        return $this->critrateincreasingeffectmorepourcent;
    }

    /**
     * Set the value of critrateincreasingeffectmorepourcent
     *
     * @param  int  $critrateincreasingeffectmorepourcent
     *
     * @return  self
     */ 
    public function setCritrateincreasingeffectmorepourcent(int $critrateincreasingeffectmorepourcent)
    {
        $this->critrateincreasingeffectmorepourcent = $critrateincreasingeffectmorepourcent;

        return $this;
    }

    /**
     * Get the value of damagedealtbycounterattackmorepourcent
     *
     * @return  int
     */ 
    public function getDamagedealtbycounterattackmorepourcent()
    {
        return $this->damagedealtbycounterattackmorepourcent;
    }

    /**
     * Set the value of damagedealtbycounterattackmorepourcent
     *
     * @param  int  $damagedealtbycounterattackmorepourcent
     *
     * @return  self
     */ 
    public function setDamagedealtbycounterattackmorepourcent(int $damagedealtbycounterattackmorepourcent)
    {
        $this->damagedealtbycounterattackmorepourcent = $damagedealtbycounterattackmorepourcent;

        return $this;
    }

    /**
     * Get the value of damagedealtbyattackingtogethermorepourcent
     *
     * @return  int
     */ 
    public function getDamagedealtbyattackingtogethermorepourcent()
    {
        return $this->damagedealtbyattackingtogethermorepourcent;
    }

    /**
     * Set the value of damagedealtbyattackingtogethermorepourcent
     *
     * @param  int  $damagedealtbyattackingtogethermorepourcent
     *
     * @return  self
     */ 
    public function setDamagedealtbyattackingtogethermorepourcent(int $damagedealtbyattackingtogethermorepourcent)
    {
        $this->damagedealtbyattackingtogethermorepourcent = $damagedealtbyattackingtogethermorepourcent;

        return $this;
    }

    /**
     * Get the value of bombdamagemorepourcent
     *
     * @return  int
     */ 
    public function getBombdamagemorepourcent()
    {
        return $this->bombdamagemorepourcent;
    }

    /**
     * Set the value of bombdamagemorepourcent
     *
     * @param  int  $bombdamagemorepourcent
     *
     * @return  self
     */ 
    public function setBombdamagemorepourcent(int $bombdamagemorepourcent)
    {
        $this->bombdamagemorepourcent = $bombdamagemorepourcent;

        return $this;
    }

    /**
     * Get the value of lifedrainmorepourcent
     *
     * @return  int
     */ 
    public function getLifedrainmorepourcent()
    {
        return $this->lifedrainmorepourcent;
    }

    /**
     * Set the value of lifedrainmorepourcent
     *
     * @param  int  $lifedrainmorepourcent
     *
     * @return  self
     */ 
    public function setLifedrainmorepourcent(int $lifedrainmorepourcent)
    {
        $this->lifedrainmorepourcent = $lifedrainmorepourcent;

        return $this;
    }

    /**
     * Get the value of hpwhenrevivedmorepourcent
     *
     * @return  int
     */ 
    public function getHpwhenrevivedmorepourcent()
    {
        return $this->hpwhenrevivedmorepourcent;
    }

    /**
     * Set the value of hpwhenrevivedmorepourcent
     *
     * @param  int  $hpwhenrevivedmorepourcent
     *
     * @return  self
     */ 
    public function setHpwhenrevivedmorepourcent(int $hpwhenrevivedmorepourcent)
    {
        $this->hpwhenrevivedmorepourcent = $hpwhenrevivedmorepourcent;

        return $this;
    }

    /**
     * Get the value of attackbarwhenrevivedmorepourcent
     *
     * @return  int
     */ 
    public function getAttackbarwhenrevivedmorepourcent()
    {
        return $this->attackbarwhenrevivedmorepourcent;
    }

    /**
     * Set the value of attackbarwhenrevivedmorepourcent
     *
     * @param  int  $attackbarwhenrevivedmorepourcent
     *
     * @return  self
     */ 
    public function setAttackbarwhenrevivedmorepourcent(int $attackbarwhenrevivedmorepourcent)
    {
        $this->attackbarwhenrevivedmorepourcent = $attackbarwhenrevivedmorepourcent;

        return $this;
    }

    /**
     * Get the value of damagedealtbyreflectdmgmorepourcent
     *
     * @return  int
     */ 
    public function getDamagedealtbyreflectdmgmorepourcent()
    {
        return $this->damagedealtbyreflectdmgmorepourcent;
    }

    /**
     * Set the value of damagedealtbyreflectdmgmorepourcent
     *
     * @param  int  $damagedealtbyreflectdmgmorepourcent
     *
     * @return  self
     */ 
    public function setDamagedealtbyreflectdmgmorepourcent(int $damagedealtbyreflectdmgmorepourcent)
    {
        $this->damagedealtbyreflectdmgmorepourcent = $damagedealtbyreflectdmgmorepourcent;

        return $this;
    }

    /**
     * Get the value of additionaldamagebypourcentofhp
     *
     * @return  int
     */ 
    public function getAdditionaldamagebypourcentofhp()
    {
        return $this->additionaldamagebypourcentofhp;
    }

    /**
     * Set the value of additionaldamagebypourcentofhp
     *
     * @param  int  $additionaldamagebypourcentofhp
     *
     * @return  self
     */ 
    public function setAdditionaldamagebypourcentofhp(int $additionaldamagebypourcentofhp)
    {
        $this->additionaldamagebypourcentofhp = $additionaldamagebypourcentofhp;

        return $this;
    }

    /**
     * Get the value of additionaldamagebypourcentofatk
     *
     * @return  int
     */ 
    public function getAdditionaldamagebypourcentofatk()
    {
        return $this->additionaldamagebypourcentofatk;
    }

    /**
     * Set the value of additionaldamagebypourcentofatk
     *
     * @param  int  $additionaldamagebypourcentofatk
     *
     * @return  self
     */ 
    public function setAdditionaldamagebypourcentofatk(int $additionaldamagebypourcentofatk)
    {
        $this->additionaldamagebypourcentofatk = $additionaldamagebypourcentofatk;

        return $this;
    }

    /**
     * Get the value of additionaldamagebypourcentofdef
     *
     * @return  int
     */ 
    public function getAdditionaldamagebypourcentofdef()
    {
        return $this->additionaldamagebypourcentofdef;
    }

    /**
     * Set the value of additionaldamagebypourcentofdef
     *
     * @param  int  $additionaldamagebypourcentofdef
     *
     * @return  self
     */ 
    public function setAdditionaldamagebypourcentofdef(int $additionaldamagebypourcentofdef)
    {
        $this->additionaldamagebypourcentofdef = $additionaldamagebypourcentofdef;

        return $this;
    }

    /**
     * Get the value of additionaldamagebypourcentofspd
     *
     * @return  int
     */ 
    public function getAdditionaldamagebypourcentofspd()
    {
        return $this->additionaldamagebypourcentofspd;
    }

    /**
     * Set the value of additionaldamagebypourcentofspd
     *
     * @param  int  $additionaldamagebypourcentofspd
     *
     * @return  self
     */ 
    public function setAdditionaldamagebypourcentofspd(int $additionaldamagebypourcentofspd)
    {
        $this->additionaldamagebypourcentofspd = $additionaldamagebypourcentofspd;

        return $this;
    }

    /**
     * Get the value of crushinghitdmgmorepourcent
     *
     * @return  int
     */ 
    public function getCrushinghitdmgmorepourcent()
    {
        return $this->crushinghitdmgmorepourcent;
    }

    /**
     * Set the value of crushinghitdmgmorepourcent
     *
     * @param  int  $crushinghitdmgmorepourcent
     *
     * @return  self
     */ 
    public function setCrushinghitdmgmorepourcent(int $crushinghitdmgmorepourcent)
    {
        $this->crushinghitdmgmorepourcent = $crushinghitdmgmorepourcent;

        return $this;
    }

    /**
     * Get the value of critdmgreceivedlesspourcent
     *
     * @return  int
     */ 
    public function getCritdmgreceivedlesspourcent()
    {
        return $this->critdmgreceivedlesspourcent;
    }

    /**
     * Set the value of critdmgreceivedlesspourcent
     *
     * @param  int  $critdmgreceivedlesspourcent
     *
     * @return  self
     */ 
    public function setCritdmgreceivedlesspourcent(int $critdmgreceivedlesspourcent)
    {
        $this->critdmgreceivedlesspourcent = $critdmgreceivedlesspourcent;

        return $this;
    }

    /**
     * Get the value of spdunderinabilityeffectsmorepourcent
     *
     * @return  int
     */ 
    public function getSpdunderinabilityeffectsmorepourcent()
    {
        return $this->spdunderinabilityeffectsmorepourcent;
    }

    /**
     * Set the value of spdunderinabilityeffectsmorepourcent
     *
     * @param  int  $spdunderinabilityeffectsmorepourcent
     *
     * @return  self
     */ 
    public function setSpdunderinabilityeffectsmorepourcent(int $spdunderinabilityeffectsmorepourcent)
    {
        $this->spdunderinabilityeffectsmorepourcent = $spdunderinabilityeffectsmorepourcent;

        return $this;
    }

    /**
     * Get the value of damagereceivedunderinabilityeffectslesspourcent
     *
     * @return  int
     */ 
    public function getDamagereceivedunderinabilityeffectslesspourcent()
    {
        return $this->damagereceivedunderinabilityeffectslesspourcent;
    }

    /**
     * Set the value of damagereceivedunderinabilityeffectslesspourcent
     *
     * @param  int  $damagereceivedunderinabilityeffectslesspourcent
     *
     * @return  self
     */ 
    public function setDamagereceivedunderinabilityeffectslesspourcent(int $damagereceivedunderinabilityeffectslesspourcent)
    {
        $this->damagereceivedunderinabilityeffectslesspourcent = $damagereceivedunderinabilityeffectslesspourcent;

        return $this;
    }

    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of idMonsters
     *
     * @return  int
     */ 
    public function getIdMonsters()
    {
        return $this->idMonsters;
    }
}
