<?php

    class Receveur
    {

        private ?string $nomClub;
        public function getNomClub(){return $this->nomClub;}
        public function setNomClub(?string $var){$this->nomClub = $var;}

        private ?string $numMatch;
        public function getNumMatch(){return $this->numMatch;}
        public function setNumMatch(?string $var){$this->numMatch = $var;}

        private ?string $categorie;
        public function getCategorie(){return $this->categorie;}
        public function setCategorie(?string $var){$this->categorie = $var;}

        private ?string $date;
        public function getDate(){return $this->date;}
        public function setDate(?string $var){$this->date = $var;}

        private ?string $lieu;
        public function getLieu(){return $this->lieu;}
        public function setLieu(?string $var){$this->lieu = $var;}

        private ?string $horaires;
        public function getHoraires(){return $this->horaires;}
        public function setHoraires(?string $var){$this->horaires = $var;}

        private ?string $nomDelegue;
        public function getNomDelegue(){return $this->nomDelegue;}
        public function setNomDelegue(?string $var){$this->nomDelegue = $var;}

        private ?string $telDelegue;
        public function getTelDelegue(){return $this->telDelegue;}
        public function setTelDelegue(?string $var){$this->telDelegue = $var;}

        private ?string $nbArbitre;
        public function getNbArbitre(){return $this->nbArbitre;}
        public function setNbArbitre(?string $var){$this->nbArbitre = $var;}

        private ?string $adresseTerrain;
        public function getAdresseTerrain(){return $this->adresseTerrain;}
        public function setAdresseTerrain(?string $var){$this->adresseTerrain = $var;}

        private ?string $dateRencontre;
        public function getDateRencontre(){return $this->dateRencontre;}
        public function setDateRencontre(?string $var){$this->dateRencontre = $var;}

        private ?string $heureRencontre;
        public function getHeureRencontre(){return $this->heureRencontre;}
        public function setHeureRencontre(?string $var){$this->heureRencontre = $var;}

        private ?string $contactDisctrict;
        public function getContactDisctrict(){return $this->contactDisctrict;}
        public function setContactDisctrict(?string $var){$this->contactDisctrict = $var;}

        private ?string $contactPolice;
        public function getContactPolice(){return $this->contactPolice;}
        public function setContactPolice(?string $var){$this->contactPolice = $var;}


        //Type d'incivilité :
        private ?string $violencePersonnesJoueurs;  
        public function getViolencePersonnesJoueurs(){return $this->violencePersonnesJoueurs;}
        public function setViolencePersonnesJoueurs(?string $var){$this->violencePersonnesJoueurs = $var;}

        private ?string $violencePersonnesArbitres;
        public function getViolencePersonnesArbitres(){return $this->violencePersonnesArbitres;}
        public function setViolencePersonnesArbitres(?string $var){$this->violencePersonnesArbitres = $var;}

        private ?string $violencePersonnesDelegue;
        public function getViolencePersonnesDelegue(){return $this->violencePersonnesDelegue;}
        public function setViolencePersonnesDelegue(?string $var){$this->violencePersonnesDelegue = $var;}

        private ?string $violencePersonnesDirigeants;
        public function getViolencePersonnesDirigeants(){return $this->violencePersonnesDirigeants;}
        public function setViolencePersonnesDirigeants(?string $var){$this->violencePersonnesDirigeants = $var;}

        private ?string $violencePersonnesSpectateurs;
        public function getviolencePersonnesSpectateurs(){return $this->violencePersonnesSpectateurs;}
        public function setviolencePersonnesSpectateurs(?string $var){$this->violencePersonnesSpectateurs = $var;}


        //Atteinte au biens
        private ?string $atteinteBiensJoueurs;
        public function getAtteinteBiensJoueurs(){return $this->atteinteBiensJoueurs ;}
        public function setAtteinteBiensJoueurs(?string $var){$this->atteinteBiensJoueurs = $var;}

        private ?string $atteinteBiensArbitres;
        public function getAtteinteBiensArbitres(){return $this->atteinteBiensArbitres ;}
        public function setAtteinteBiensArbitres(?string $var){$this->atteinteBiensArbitres = $var;}

        private ?string $atteinteBiensDelegue;
        public function getAtteinteBiensDelegue(){return $this->atteinteBiensDelegue ;}
        public function setAtteinteBiensDelegue(?string $var){$this->atteinteBiensDelegue = $var;}

        private ?string $atteinteBiensDirigeants;
        public function getAtteinteBiensDirigeants(){return $this->atteinteBiensDirigeants ;}
        public function setAtteinteBiensDirigeants(?string $var){$this->atteinteBiensDirigeants = $var;}

        private ?string $atteinteBiensSpectateurs;
        public function getAtteinteBiensSpectateurs(){return $this->atteinteBiensSpectateurs ;}
        public function setAtteinteBiensSpectateurs(?string $var){$this->atteinteBiensSpectateurs = $var;}


        //Agression verbale
        private ?string $agressionVerbaleJoueurs; 
        public function getAgressionVerbaleJoueurs(){return $this->agressionVerbaleJoueurs ;}
        public function setAgressionVerbaleJoueurs(?string $var){$this->agressionVerbaleJoueurs = $var;}

        private ?string $agressionVerbaleArbitres;
        public function getAgressionVerbaleArbitres(){return $this->agressionVerbaleArbitres ;}
        public function setAgressionVerbaleArbitres(?string $var){$this->agressionVerbaleArbitres = $var;}

        private ?string $agressionVerbaleDelegue;
        public function getAgressionVerbaleDelegue(){return $this->agressionVerbaleDelegue ;}
        public function setAgressionVerbaleDelegue(?string $var){$this->agressionVerbaleDelegue = $var;}

        private ?string $agressionVerbaleDirigeants;
        public function getAgressionVerbaleDirigeants(){return $this->agressionVerbaleDirigeants ;}
        public function setAgressionVerbaleDirigeants(?string $var){$this->agressionVerbaleDirigeants = $var;}

        private ?string $agressionVerbaleSpectateurs;
        public function getAgressionVerbaleSpectateurs(){return $this->agressionVerbaleSpectateurs ;}
        public function setAgressionVerbaleSpectateurs(?string $var){$this->agressionVerbaleSpectateurs = $var;}


        //Envahissement de terrain avec violence
        private ?string $envahissementTerrainViolence;
        public function getEnvahissementTerrainViolence(){return $this->envahissementTerrainViolence ;}
        public function setEnvahissementTerrainViolence(?string $var){$this->envahissementTerrainViolence = $var;}



        //Victimes concernées 
        private ?string $victimeConcerneJoueurs;  
        public function getVictimeConcerneJoueurs(){return $this->victimeConcerneJoueurs ;}
        public function setVictimeConcerneJoueurs(?string $var){$this->victimeConcerneJoueurs = $var;}

        private ?string $victimeConcerneArbitres;
        public function getVictimeConcerneArbitres(){return $this->victimeConcerneArbitres ;}
        public function setVictimeConcerneArbitres(?string $var){$this->victimeConcerneArbitres = $var;}

        private ?string $victimeConcerneDelegue;
        public function getVictimeConcerneDelegue(){return $this->victimeConcerneDelegue ;}
        public function setVictimeConcerneDelegue(?string $var){$this->victimeConcerneDelegue = $var;}

        private ?string $victimeConcerneDirigeants;
        public function getVictimeConcerneDirigeants(){return $this->victimeConcerneDirigeants ;}
        public function setVictimeConcerneDirigeants(?string $var){$this->victimeConcerneDirigeants = $var;}

        private ?string $victimeConcerneSpectateurs;
        public function getVictimeConcerneSpectateurs(){return $this->victimeConcerneSpectateurs ;}
        public function setVictimeConcerneSpectateurs(?string $var){$this->victimeConcerneSpectateurs = $var;}

        private ?string $victimeConcerneEducateur;
        public function getVictimeConcerneEducateur(){return $this->victimeConcerneEducateur ;}
        public function setVictimeConcerneEducateur(?string $var){$this->victimeConcerneEducateur = $var;}

        private ?string $victimeConcerneAutre;
        public function getVictimeConcerneAutre(){return $this->victimeConcerneAutre ;}
        public function setVictimeConcerneAutre(?string $var){$this->victimeConcerneAutre = $var;}



        //Auteurs présumés
        private ?string $auteurPresumeNbMajeurs;
        public function getAuteurPresumeNbMajeurs(){return $this->auteurPresumeNbMajeurs ;}
        public function setAuteurPresumeNbMajeurs(?string $var){$this->auteurPresumeNbMajeurs = $var;}


        private ?string $auteurPresumeMajeurConnu;  
        public function getAuteurPresumeMajeurConnu(){return $this->auteurPresumeMajeurConnu ;}
        public function setAuteurPresumeMajeurConnu(?string $var){$this->auteurPresumeMajeurConnu = $var;}

        private ?string $auteurPresumeMajeurMembreClub;
        public function getAuteurPresumeMajeurMembreClub(){return $this->auteurPresumeMajeurMembreClub ;}
        public function setAuteurPresumeMajeurMembreClub(?string $var){$this->auteurPresumeMajeurMembreClub = $var;}

        private ?string $auteurPresumeMajeurJoueur;
        public function getAuteurPresumeMajeurJoueur(){return $this->auteurPresumeMajeurJoueur ;}
        public function setAuteurPresumeMajeurJoueur(?string $var){$this->auteurPresumeMajeurJoueur = $var;}

        private ?string $auteurPresumeMajeurEducateur;
        public function getAuteurPresumeMajeurEducateur(){return $this->auteurPresumeMajeurEducateur ;}
        public function setAuteurPresumeMajeurEducateur(?string $var){$this->auteurPresumeMajeurEducateur = $var;}

        private ?string $auteurPresumeMajeurDirigeant;
        public function getAuteurPresumeMajeurDirigeant(){return $this->auteurPresumeMajeurDirigeant ;}
        public function setAuteurPresumeMajeurDirigeant(?string $var){$this->auteurPresumeMajeurDirigeant = $var;}

        private ?string $auteurPresumeMajeurAutre;
        public function getAuteurPresumeMajeurAutre(){return $this->auteurPresumeMajeurAutre ;}
        public function setAuteurPresumeMajeurAutre(?string $var){$this->auteurPresumeMajeurAutre = $var;}


        private ?string $auteurPresumeNbMineurs;
        public function getAuteurPresumeNbMineurs(){return $this->auteurPresumeNbMineurs ;}
        public function setAuteurPresumeNbMineurs(?string $var){$this->auteurPresumeNbMineurs = $var;}


        private ?string $auteurPresumeMineurConnu;  
        public function getAuteurPresumeMineurConnu(){return $this->auteurPresumeMineurConnu ;}
        public function setAuteurPresumeMineurConnu(?string $var){$this-> auteurPresumeMineurConnu= $var;}

        private ?string $auteurPresumeMineurMembreClub;
        public function getAuteurPresumeMineurMembreClub(){return $this->auteurPresumeMineurMembreClub ;}
        public function setAuteurPresumeMineurMembreClub(?string $var){$this->auteurPresumeMineurMembreClub = $var;}

        private ?string $auteurPresumeMineurJoueur;
        public function getAuteurPresumeMineurJoueur(){return $this->auteurPresumeMineurJoueur ;}
        public function setAuteurPresumeMineurJoueur(?string $var){$this->auteurPresumeMineurJoueur = $var;}

        private ?string $auteurPresumeMineurEducateur;
        public function getAuteurPresumeMineurEducateur(){return $this->auteurPresumeMineurEducateur ;}
        public function setAuteurPresumeMineurEducateur(?string $var){$this->auteurPresumeMineurEducateur = $var;}

        private ?string $auteurPresumeMineurDirigeant;
        public function getAuteurPresumeMineurDirigeant(){return $this->auteurPresumeMineurDirigeant ;}
        public function setAuteurPresumeMineurDirigeant(?string $var){$this->auteurPresumeMineurDirigeant = $var;}

        private ?string $auteurPresumeMineurAutre;
        public function getAuteurPresumeMineurAutre(){return $this->auteurPresumeMineurAutre ;}
        public function setAuteurPresumeMineurAutre(?string $var){$this->auteurPresumeMineurAutre = $var;}



        //Mesures immédiates
        private ?string $mesuresImediatesPolice;
        public function getMesuresImediatesPolice(){return $this->mesuresImediatesPolice ;}
        public function setMesuresImediatesPolice(?string $var){$this->mesuresImediatesPolice = $var;}

        private ?string $mesuresImediatesGendarmerie;
        public function getMesuresImediatesGendarmerie(){return $this->mesuresImediatesGendarmerie ;}
        public function setMesuresImediatesGendarmerie(?string $var){$this->mesuresImediatesGendarmerie = $var;}

        private ?string $mesuresImediatesPoliceMunicipale;
        public function getMesuresImediatesPoliceMunicipale(){return $this->mesuresImediatesPoliceMunicipale ;}
        public function setMesuresImediatesPoliceMunicipale(?string $var){$this->mesuresImediatesPoliceMunicipale = $var;}

        private ?string $mesuresImediatesMairie;    
        public function getMesuresImediatesMairie(){return $this->mesuresImediatesMairie ;}
        public function setMesuresImediatesMairie(?string $var){$this->mesuresImediatesMairie = $var;}

        private ?string $mesuresImediatesPompiers;
        public function getMesuresImediatesPompiers(){return $this->mesuresImediatesPompiers ;}
        public function setMesuresImediatesPompiers(?string $var){$this->mesuresImediatesPompiers = $var;}

        private ?string $mesuresImediatesSamu;
        public function getMesuresImediatesSamu(){return $this->mesuresImediatesSamu ;}
        public function setMesuresImediatesSamu(?string $var){$this->mesuresImediatesSamu = $var;}

        private ?string $mesuresImediatesAutres;
        public function getMesuresImediatesAutres(){return $this->mesuresImediatesAutres ;}
        public function setMesuresImediatesAutres(?string $var){$this->mesuresImediatesAutres = $var;}


        //Mesures ultérieures
        private ?string $mesuresUlterieursExamMedical;
        public function getMesuresUlterieursExamMedical(){return $this->mesuresUlterieursExamMedical ;}
        public function setMesuresUlterieursExamMedical(?string $var){$this->mesuresUlterieursExamMedical = $var;}

        private ?string $mesuresUlterieursHospitalisation;
        public function getMesuresUlterieursHospitalisation(){return $this->mesuresUlterieursHospitalisation ;}
        public function setMesuresUlterieursHospitalisation(?string $var){$this->mesuresUlterieursHospitalisation = $var;}

        private ?string $mesuresUlterieursMainCourante;
        public function getMesuresUlterieursMainCourante(){return $this->mesuresUlterieursMainCourante ;}
        public function setMesuresUlterieursMainCourante(?string $var){$this->mesuresUlterieursMainCourante = $var;}

        private ?string $mesuresUlterieursDepoPlainte;
        public function getMesuresUlterieursDepoPlainte(){return $this-> mesuresUlterieursDepoPlainte;}
        public function setMesuresUlterieursDepoPlainte(?string $var){$this->mesuresUlterieursDepoPlainte = $var;}

        __construct(
            $a,
            $b,
            $c,
            $d,
            $e,
            $f,
            $g,
            $h,
            $i,
            $j,
            $k,
            $l,
            $m,
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
            $this->setnumMatch($a);

            $this->setcategorie($b);

            $this->setdate($c);

            $this->setlieu($d);

            $this->sethoraires($e);

            $this->setnomDelegue($f);

            $this->settelDelegue($g);

            $this->setnbArbitre($h);

            $this->setadresseTerrain($i);

            $this->setdateRencontre($j);

            $this->setheureRencontre($k);

            $this->setcontactDistrict($l);

            $this->setcontactPolice($m);


            $this->setviolencePersonnesJoueurs($n);
            $this->setviolencePersonnesArbitres($o);
            $this->setviolencePersonnesDelegue($p);
            $this->setviolencePersonnesDirigeants($q);
            $this->setviolencePersonnesSpectateurs($r);


            $this->setAtteinteBiensJoueurs($s);
            $this->setAtteinteBiensArbitres($t);
            $this->setAtteinteBiensDelegue($u);
            $this->setAtteinteBiensDirigeants($v);
            $this->setAtteinteBiensSpectateurs($w);


            $this->setAgressionVerbaleJoueurs($x);
            $this->setAgressionVerbaleArbitres($y);
            $this->setAgressionVerbaleDelegue($z);
            $this->setAgressionVerbaleDirigeants($aa);
            $this->setAgressionVerbaleSpectateurs($ab);

            $this->setenvahissementTerrainViolence($ac);


            $this->setvictimeConcerneJoueurs($ad);
            $this->setvictimeConcerneArbitres($ae);
            $this->setvictimeConcerneDelegue($af);
            $this->setvictimeConcerneDirigeants($ag);
            $this->setvictimeConcerneSpectateurs($ah);
            $this->setvictimeConcerneEducateur($ai);
            $this->setvictimeConcerneAutre($aj);


            $this->setauteurPresumeNbMajeurs($ak);

            $this->setauteurPresumeMajeurConnu($al);
            $this->setauteurPresumeMajeurMembreClub($am);
            $this->setauteurPresumeMajeurJoueur($an);
            $this->setauteurPresumeMajeurEducateur($ao);
            $this->setauteurPresumeMajeurDirigeant($ap);
            $this->setauteurPresumeMajeurAutre($aq);


            $this->setauteurPresumeNbMineurs($ar);

            $this->setauteurPresumeMineurConnu($as);
            $this->setauteurPresumeMineurMembreClub($at);
            $this->setauteurPresumeMineurJoueur($au);
            $this->setauteurPresumeMineurEducateur($av);
            $this->setauteurPresumeMineurDirigeant($aw);
            $this->setauteurPresumeMineurAutre($ax);


            $this->setmesuresImediatesPolice($ay);
            $this->setmesuresImediatesGendarmerie($az);
            $this->setmesuresImediatesPoliceMunicipale($ba);
            $this->setmesuresImediatesMarie($bb);
            $this->setmesuresImediatesPompiers($bc);
            $this->setmesuresImediatesSamu($bd);
            $this->setmesuresImediatesAutres($be);


            $this->setmesuresUlterieursExamMedical($bf);
            $this->setmesuresUlterieursHospitalisation($bg);
            $this->setmesuresUlterieursMainCourante($bh);
            $this->setmesuresUlterieursDepoPlainte($bi);
        }

    }
?>