<?php 

    class Visiteur
    {
        private ?string $nomClubVisiteur;
        public function getNomClubVisiteur(){return $this->nomClubVisiteur;}
        public function setNomClubVisiteur(?string $var){$this->nomClubVisiteur = $var;}

        //Type d'incivilité :
        private ?string $violencePersonnesJoueursVisiteur;  
        public function getViolencePersonnesJoueursVisiteur(){return $this->violencePersonnesJoueursVisiteur;}
        public function setViolencePersonnesJoueursVisiteur(?string $var){$this->violencePersonnesJoueursVisiteur = $var;}

        private ?string $violencePersonnesArbitresVisiteur;
        public function getViolencePersonnesArbitresVisiteur(){return $this->violencePersonnesArbitresVisiteur;}
        public function setViolencePersonnesArbitresVisiteur(?string $var){$this->violencePersonnesArbitresVisiteur = $var;}

        private ?string $violencePersonnesDelegueVisiteur;
        public function getViolencePersonnesDelegueVisiteur(){return $this->violencePersonnesDelegueVisiteur;}
        public function setViolencePersonnesDelegueVisiteur(?string $var){$this->violencePersonnesDelegueVisiteur = $var;}

        private ?string $violencePersonnesDirigeantsVisiteur;
        public function getViolencePersonnesDirigeantsVisiteur(){return $this->violencePersonnesDirigeantVisiteurs;}
        public function setViolencePersonnesDirigeantsVisiteur(?string $var){$this->violencePersonnesDirigeantsVisiteur = $var;}

        private ?string $violencePersonnesSpectateursVisiteur;
        public function getviolencePersonnesSpectateursVisiteur(){return $this->violencePersonnesSpectateursVisiteur;}
        public function setviolencePersonnesSpectateursVisiteur(?string $var){$this->violencePersonnesSpectateursVisiteur = $var;}


        //Atteinte au biens
        private ?string $atteinteBiensJoueursVisiteur;
        public function getAtteinteBiensJoueursVisiteur(){return $this->atteinteBiensJoueursVisiteur ;}
        public function setAtteinteBiensJoueursVisiteur(?string $var){$this->atteinteBiensJoueursVisiteur = $var;}

        private ?string $atteinteBiensArbitresVisiteur;
        public function getAtteinteBiensArbitresVisiteur(){return $this->atteinteBiensArbitresVisiteur ;}
        public function setAtteinteBiensArbitresVisiteur(?string $var){$this->atteinteBiensArbitresVisiteur = $var;}

        private ?string $atteinteBiensDirigeantsVisiteur;
        public function getAtteinteBiensDirigeantsVisiteur(){return $this->atteinteBiensDirigeantsVisiteur ;}
        public function setAtteinteBiensDirigeantsVisiteur(?string $var){$this->atteinteBiensDirigeantsVisiteur = $var;}

        private ?string $atteinteBiensSpectateursVisiteur;
        public function getAtteinteBiensSpectateursVisiteur(){return $this->atteinteBiensSpectateursVisiteur ;}
        public function setAtteinteBiensSpectateursVisiteur(?string $var){$this->atteinteBiensSpectateursVisiteur = $var;}


        //Agression verbale
        private ?string $agressionVerbaleJoueursVisiteur; 
        public function getAgressionVerbaleJoueursVisiteur(){return $this->agressionVerbaleJoueursVisiteur ;}
        public function setAgressionVerbaleJoueursVisiteur(?string $var){$this->agressionVerbaleJoueursVisiteur = $var;}

        private ?string $agressionVerbaleArbitresVisiteur;
        public function getAgressionVerbaleArbitresVisiteur(){return $this->agressionVerbaleArbitresVisiteur ;}
        public function setAgressionVerbaleArbitresVisiteur(?string $var){$this->agressionVerbaleArbitresVisiteur = $var;}


        private ?string $agressionVerbaleDirigeantsVisiteur;
        public function getAgressionVerbaleDirigeantsVisiteur(){return $this->agressionVerbaleDirigeantsVisiteur ;}
        public function setAgressionVerbaleDirigeantsVisiteur(?string $var){$this->agressionVerbaleDirigeantsVisiteur = $var;}

        
        private ?string $agressionVerbaleSpectateursVisiteur;
        public function getAgressionVerbaleSpectateursVisiteur(){return $this->agressionVerbaleSpectateursVisiteur ;}
        public function setAgressionVerbaleSpectateursVisiteur(?string $var){$this->agressionVerbaleSpectateursVisiteur = $var;}


        //Envahissement de terrain avec violence
        private ?string $envahissementTerrainViolenceVisiteur;
        public function getEnvahissementTerrainViolenceVisiteur(){return $this->envahissementTerrainViolenceVisiteur ;}
        public function setEnvahissementTerrainViolenceVisiteur(?string $var){$this->envahissementTerrainViolenceVisiteur = $var;}



        //Victimes concernées 
        private ?string $victimeConcerneJoueursVisiteur;  
        public function getVictimeConcerneJoueursVisiteur(){return $this->victimeConcerneJoueursVisiteur ;}
        public function setVictimeConcerneJoueursVisiteur(?string $var){$this->victimeConcerneJoueursVisiteur = $var;}

        private ?string $victimeConcerneArbitresVisiteur;
        public function getVictimeConcerneArbitresVisiteur(){return $this->victimeConcerneArbitresVisiteur ;}
        public function setVictimeConcerneArbitresVisiteur(?string $var){$this->victimeConcerneArbitresVisiteur = $var;}

        private ?string $victimeConcerneDelegueVisiteur;
        public function getVictimeConcerneDelegueVisiteur(){return $this->victimeConcerneDelegueVisiteur ;}
        public function setVictimeConcerneDelegueVisiteur(?string $var){$this->victimeConcerneDelegueVisiteur = $var;}

        private ?string $victimeConcerneDirigeantsVisiteur;
        public function getVictimeConcerneDirigeantsVisiteur(){return $this->victimeConcerneDirigeantsVisiteur ;}
        public function setVictimeConcerneDirigeantsVisiteur(?string $var){$this->victimeConcerneDirigeantsVisiteur = $var;}

        private ?string $victimeConcerneSpectateursVisiteur;
        public function getVictimeConcerneSpectateursVisiteur(){return $this->victimeConcerneSpectateursVisiteur ;}
        public function setVictimeConcerneSpectateursVisiteur(?string $var){$this->victimeConcerneSpectateursVisiteur = $var;}

        private ?string $victimeConcerneEducateurVisiteur;
        public function getVictimeConcerneEducateurVisiteur(){return $this->victimeConcerneEducateurVisiteur ;}
        public function setVictimeConcerneEducateurVisiteur(?string $var){$this->victimeConcerneEducateurVisiteur = $var;}

        private ?string $victimeConcerneAutreVisiteur;
        public function getVictimeConcerneAutreVisiteur(){return $this->victimeConcerneAutreVisiteur ;}
        public function setVictimeConcerneAutreVisiteur(?string $var){$this->victimeConcerneAutreVisiteur = $var;}



        //Auteurs présumés
        private ?string $auteurPresumeNbMajeursVisiteur;
        public function getAuteurPresumeNbMajeursVisiteur(){return $this->auteurPresumeNbMajeursVisiteur ;}
        public function setAuteurPresumeNbMajeursVisiteur(?string $var){$this->auteurPresumeNbMajeursVisiteur = $var;}


        private ?string $auteurPresumeMajeurConnuVisiteur;  
        public function getAuteurPresumeMajeurConnuVisiteur(){return $this->auteurPresumeMajeurConnuVisiteur ;}
        public function setAuteurPresumeMajeurConnuVisiteur(?string $var){$this->auteurPresumeMajeurConnuVisiteur = $var;}

        private ?string $auteurPresumeMajeurMembreClubVisiteur;
        public function getAuteurPresumeMajeurMembreClubVisiteur(){return $this->auteurPresumeMajeurMembreClubVisiteur ;}
        public function setAuteurPresumeMajeurMembreClubVisiteur(?string $var){$this->auteurPresumeMajeurMembreClubVisiteur = $var;}

        private ?string $auteurPresumeMajeurJoueurVisiteur;
        public function getAuteurPresumeMajeurJoueurVisiteur(){return $this->auteurPresumeMajeurJoueurVisiteur ;}
        public function setAuteurPresumeMajeurJoueurVisiteur(?string $var){$this->auteurPresumeMajeurJoueurVisiteur = $var;}

        private ?string $auteurPresumeMajeurEducateurVisiteur;
        public function getAuteurPresumeMajeurEducateurVisiteur(){return $this->auteurPresumeMajeurEducateurVisiteur ;}
        public function setAuteurPresumeMajeurEducateurVisiteur(?string $var){$this->auteurPresumeMajeurEducateurVisiteur = $var;}

        private ?string $auteurPresumeMajeurDirigeantVisiteur;
        public function getAuteurPresumeMajeurDirigeantVisiteur(){return $this->auteurPresumeMajeurDirigeantVisiteur ;}
        public function setAuteurPresumeMajeurDirigeantVisiteur(?string $var){$this->auteurPresumeMajeurDirigeantVisiteur = $var;}

        private ?string $auteurPresumeMajeurAutreVisiteur;
        public function getAuteurPresumeMajeurAutreVisiteur(){return $this->auteurPresumeMajeurAutreVisiteur ;}
        public function setAuteurPresumeMajeurAutreVisiteur(?string $var){$this->auteurPresumeMajeurAutreVisiteur = $var;}


        private ?string $auteurPresumeNbMineursVisiteur;
        public function getAuteurPresumeNbMineursVisiteur(){return $this->auteurPresumeNbMineursVisiteur ;}
        public function setAuteurPresumeNbMineursVisiteur(?string $var){$this->auteurPresumeNbMineursVisiteur = $var;}


        private ?string $auteurPresumeMineurConnuVisiteur;  
        public function getAuteurPresumeMineurConnuVisiteur(){return $this->auteurPresumeMineurConnuVisiteur ;}
        public function setAuteurPresumeMineurConnuVisiteur(?string $var){$this-> auteurPresumeMineurConnuVisiteur= $var;}

        private ?string $auteurPresumeMineurMembreClubVisiteur;
        public function getAuteurPresumeMineurMembreClubVisiteur(){return $this->auteurPresumeMineurMembreClubVisiteur ;}
        public function setAuteurPresumeMineurMembreClubVisiteur(?string $var){$this->auteurPresumeMineurMembreClubVisiteur = $var;}

        private ?string $auteurPresumeMineurJoueurVisiteur;
        public function getAuteurPresumeMineurJoueurVisiteur(){return $this->auteurPresumeMineurJoueurVisiteur ;}
        public function setAuteurPresumeMineurJoueurVisiteur(?string $var){$this->auteurPresumeMineurJoueurVisiteur = $var;}

        private ?string $auteurPresumeMineurEducateurVisiteur;
        public function getAuteurPresumeMineurEducateurVisiteur(){return $this->auteurPresumeMineurEducateurVisiteur ;}
        public function setAuteurPresumeMineurEducateurVisiteur(?string $var){$this->auteurPresumeMineurEducateurVisiteur = $var;}

        private ?string $auteurPresumeMineurDirigeantVisiteur;
        public function getAuteurPresumeMineurDirigeantVisiteur(){return $this->auteurPresumeMineurDirigeantVisiteur ;}
        public function setAuteurPresumeMineurDirigeantVisiteur(?string $var){$this->auteurPresumeMineurDirigeantVisiteur = $var;}

        private ?string $auteurPresumeMineurAutreVisiteur;
        public function getAuteurPresumeMineurAutreVisiteur(){return $this->auteurPresumeMineurAutreVisiteur ;}
        public function setAuteurPresumeMineurAutreVisiteur(?string $var){$this->auteurPresumeMineurAutreVisiteur = $var;}



        //Mesures immédiates
        private ?string $mesuresImediatesPoliceVisiteur;
        public function getMesuresImediatesPoliceVisiteur(){return $this->mesuresImediatesPoliceVisiteur ;}
        public function setMesuresImediatesPoliceVisiteur(?string $var){$this->mesuresImediatesPoliceVisiteur = $var;}

        private ?string $mesuresImediatesGendarmerieVisiteur;
        public function getMesuresImediatesGendarmerieVisiteur(){return $this->mesuresImediatesGendarmerieVisiteur ;}
        public function setMesuresImediatesGendarmerieVisiteur(?string $var){$this->mesuresImediatesGendarmerieVisiteur = $var;}

        private ?string $mesuresImediatesPoliceMunicipaleVisiteur;
        public function getMesuresImediatesPoliceMunicipaleVisiteur(){return $this->mesuresImediatesPoliceMunicipaleVisiteur ;}
        public function setMesuresImediatesPoliceMunicipaleVisiteur(?string $var){$this->mesuresImediatesPoliceMunicipaleVisiteur = $var;}

        private ?string $mesuresImediatesMairieVisiteur;    
        public function getMesuresImediatesMairieVisiteur(){return $this->mesuresImediatesMairieVisiteur ;}
        public function setMesuresImediatesMairieVisiteur(?string $var){$this->mesuresImediatesMairieVisiteur = $var;}

        private ?string $mesuresImediatesPompiersVisiteur;
        public function getMesuresImediatesPompiersVisiteur(){return $this->mesuresImediatesPompiersVisiteur ;}
        public function setMesuresImediatesPompiersVisiteur(?string $var){$this->mesuresImediatesPompiersVisiteur = $var;}

        private ?string $mesuresImediatesSamuVisiteur;
        public function getMesuresImediatesSamuVisiteur(){return $this->mesuresImediatesSamuVisiteur ;}
        public function setMesuresImediatesSamuVisiteur(?string $var){$this->mesuresImediatesSamuVisiteur = $var;}

        private ?string $mesuresImediatesAutresVisiteur;
        public function getMesuresImediatesAutresVisiteur(){return $this->mesuresImediatesAutresVisiteur ;}
        public function setMesuresImediatesAutresVisiteur(?string $var){$this->mesuresImediatesAutresVisiteur = $var;}


        //Mesures ultérieures
        private ?string $mesuresUlterieursExamMedicalVisiteur;
        public function getMesuresUlterieursExamMedicalVisiteur(){return $this->mesuresUlterieursExamMedicalVisiteur ;}
        public function setMesuresUlterieursExamMedicalVisiteur(?string $var){$this->mesuresUlterieursExamMedicalVisiteur = $var;}

        private ?string $mesuresUlterieursHospitalisationVisiteur;
        public function getMesuresUlterieursHospitalisationVisiteur(){return $this->mesuresUlterieursHospitalisationVisiteur ;}
        public function setMesuresUlterieursHospitalisationVisiteur(?string $var){$this->mesuresUlterieursHospitalisationVisiteur = $var;}

        private ?string $mesuresUlterieursMainCouranteVisiteur;
        public function getMesuresUlterieursMainCouranteVisiteur(){return $this->mesuresUlterieursMainCouranteVisiteur ;}
        public function setMesuresUlterieursMainCouranteVisiteur(?string $var){$this->mesuresUlterieursMainCouranteVisiteur = $var;}

        private ?string $mesuresUlterieursDepoPlainteVisiteur;
        public function getMesuresUlterieursDepoPlainteVisiteur(){return $this-> mesuresUlterieursDepoPlainteVisiteur;}
        public function setMesuresUlterieursDepoPlainteVisiteur(?string $var){$this->mesuresUlterieursDepoPlainteVisiteur = $var;}

        __construct(
            $a,
            $n,
            $o,
            $p,
            $q,
            $r,
            $s,
            $t,
            $u,
            $v,
            $w,
            $x,
            $y,
            $z,
            $aa,
            $ab,
            $ac,
            $ad,
            $ae,
            $af,
            $ag,
            $ah,
            $ai,
            $aj,
            $ak,
            $al,
            $am,
            $an,
            $ao,
            $ap,
            $aq,
            $ar,
            $as,
            $at,
            $au,
            $av,
            $aw,
            $ax,
            $ay,
            $az,
            $ba,
            $bb,
            $bc,
            $bd,
            $be,
            $bf,
            $bg,
            $bh,
            $bi,
        )
        {
            $this->setnumMatchVisiteur($a);


            $this->setviolencePersonnesJoueursVisiteur($n);
            $this->setviolencePersonnesArbitresVisiteur($o);
            $this->setviolencePersonnesDelegueVisiteur($p);
            $this->setviolencePersonnesDirigeantsVisiteur($q);
            $this->setviolencePersonnesSpectateursVisiteur($r);


            $this->setAtteinteBiensJoueursVisiteur($s);
            $this->setAtteinteBiensArbitresVisiteur($t);
            $this->setAtteinteBiensDelegueVisiteur($u);
            $this->setAtteinteBiensDirigeantsVisiteur($v);
            $this->setAtteinteBiensSpectateursVisiteur($w);


            $this->setAgressionVerbaleJoueursVisiteur($x);
            $this->setAgressionVerbaleArbitresVisiteur($y);
            $this->setAgressionVerbaleDelegueVisiteur($z);
            $this->setAgressionVerbaleDirigeantsVisiteur($aa);
            $this->setAgressionVerbaleSpectateursVisiteur($ab);

            $this->setenvahissementTerrainViolenceVisiteur($ac);


            $this->setvictimeConcerneJoueursVisiteur($ad);
            $this->setvictimeConcerneArbitresVisiteur($ae);
            $this->setvictimeConcerneDelegueVisiteur($af);
            $this->setvictimeConcerneDirigeantsVisiteur($ag);
            $this->setvictimeConcerneSpectateursVisiteur($ah);
            $this->setvictimeConcerneEducateurVisiteur($ai);
            $this->setvictimeConcerneAutreVisiteur($aj);


            $this->setauteurPresumeNbMajeursVisiteur($ak);

            $this->setauteurPresumeMajeurConnuVisiteur($al);
            $this->setauteurPresumeMajeurMembreClubVisiteur($am);
            $this->setauteurPresumeMajeurJoueurVisiteur($an);
            $this->setauteurPresumeMajeurEducateurVisiteur($ao);
            $this->setauteurPresumeMajeurDirigeantVisiteur($ap);
            $this->setauteurPresumeMajeurAutreVisiteur($aq);


            $this->setauteurPresumeNbMineursVisiteur($ar);

            $this->setauteurPresumeMineurConnuVisiteur($as);
            $this->setauteurPresumeMineurMembreClubVisiteur($at);
            $this->setauteurPresumeMineurJoueurVisiteur($au);
            $this->setauteurPresumeMineurEducateurVisiteur($av);
            $this->setauteurPresumeMineurDirigeantVisiteur($aw);
            $this->setauteurPresumeMineurAutreVisiteur($ax);


            $this->setmesuresImediatesPoliceVisiteur($ay);
            $this->setmesuresImediatesGendarmerieVisiteur($az);
            $this->setmesuresImediatesPoliceMunicipaleVisiteur($ba);
            $this->setmesuresImediatesMarieVisiteur($bb);
            $this->setmesuresImediatesPompiersVisiteur($bc);
            $this->setmesuresImediatesSamuVisiteur($bd);
            $this->setmesuresImediatesAutresVisiteur($be);


            $this->setmesuresUlterieursExamMedicalVisiteur($bf);
            $this->setmesuresUlterieursHospitalisationVisiteur($bg);
            $this->setmesuresUlterieursMainCouranteVisiteur($bh);
            $this->setmesuresUlterieursDepoPlainteVisiteur($bi);
        }
    }




?>