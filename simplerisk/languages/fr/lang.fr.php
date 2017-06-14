<?php
/***********************************************************************
 * This Source Code Form is subject to the terms of the Mozilla Public *
 * License, v. 2.0. If a copy of the MPL was not distributed with this *
 * file, You can obtain one at http://mozilla.org/MPL/2.0/.            *
 ***********************************************************************/

ini_set('default_charset', 'utf-8');
define('DATETIME', 'Y-m-d g:i A T');
define('DATETIMESIMPLE', 'Y-m-d H:i');
define('DATESIMPLE', 'Y-m-d');

$lang = array(
    'Home'=>'La maison',
    'RiskManagement'=>'La Gestion Des Risques',
    'Reporting'=>'Établissement de rapports',
    'Configure'=>'Configurer',
    'MyProfile'=>'Mon Profil',
    'Logout'=>'Déconnexion',
    'LogInHere'=>'Se connecter sur SimpleRisk',
    'Username'=>'Nom d\'utilisateur',
    'Password'=>'Mot de passe',
    'ForgotYourPassword'=>'Vous avez oublié votre mot de passe',
    'Login'=>'Connexion',
    'Reset'=>'Réinitialiser',
    'Send'=>'Envoyer',
    'Update'=>'Mise à jour',
    'SendPasswordResetEmail'=>'Envoyer Des E-Mail De Réinitialisation De Mot De Passe',
    'PasswordReset'=>'Réinitialisation De Mot De Passe',
    'ResetToken'=>'Token',
    'RepeatPassword'=>'Répétez Le Mot De Passe',
    'Submit'=>'Soumettre',
    'ProfileDetails'=>'Profil De Détails',
    'LastLogin'=>'Dernière Connexion',
    'ChangePassword'=>'Changer De Mot De Passe',
    'CurrentPassword'=>'Mot De Passe Actuel',
    'NewPassword'=>'Nouveau Mot De Passe',
    'ConfirmPassword'=>'Confirmer Le Mot De Passe',
    'ConfigureRiskFormula'=>'Configurer Le Risque De Formule',
    'ConfigureReviewSettings'=>'Configurer Les Paramètres De Révision',
    'AddAndRemoveValues'=>'Ajouter et Supprimer des Valeurs',
    'UserManagement'=>'Gestion Des Utilisateurs',
    'RedefineNamingConventions'=>'Redéfinir Les Conventions De Nommage',
    'AuditTrail'=>'La Piste D\'Audit',
    'Extras'=>'Extras',
    'Announcements'=>'Annonces',
    'About'=>'Sur',
    'Impact'=>'Impact',
    'Likelihood'=>'Probabilité',
    'MitigationEffort'=>'Efforts D\'Atténuation',
    'Change'=>'Changement',
    'to'=>'pour',
    'AddANewUser'=>'Ajouter un Nouvel Utilisateur',
    'Type'=>'Type de',
    'FullName'=>'Nom Complet',
    'EmailAddress'=>'E-mail',
    'Teams'=>'Équipe(s)',
    'ALL'=>'TOUS',
    'NONE'=>'AUCUN',
    'UserResponsibilities'=>'Responsabilités De L\'Utilisateur',
    'AbleToSubmitNewRisks'=>'En mesure de Présenter de Nouveaux Risques',
    'AbleToModifyExistingRisks'=>'En mesure de Modifier les Risques Existants',
    'AbleToCloseRisks'=>'En mesure de Fermer les Risques',
    'AbleToPlanMitigations'=>'En mesure de Plan de mesures d\'Atténuation',
    'AbleToReviewLowRisks'=>'En mesure d\'Examiner les Risques Faibles',
    'AbleToReviewMediumRisks'=>'Mesure d\'Examiner les Risques de niveau Moyen',
    'AbleToReviewHighRisks'=>'Mesure de l\'Examen des Risques Élevés',
    'AllowAccessToConfigureMenu'=>'Permettre l\'Accès à la "Configuration" du Menu',
    'MultiFactorAuthentication'=>'Authentification Multi-Facteurs',
    'None'=>'Aucun',
    'Add'=>'Ajouter',
    'ViewDetailsForUser'=>'Afficher les Détails d\'Utilisateur',
    'DetailsForUser'=>'Détails pour l\'Utilisateur',
    'Select'=>'Sélectionnez',
    'EnableAndDisableUsers'=>'Activer et Désactiver des Utilisateurs',
    'EnableAndDisableUsersHelp'=>'Utilisez cette fonction pour activer ou désactiver les connexions de l\'utilisateur tout en conservant la piste d\'audit des activités de l\'utilisateur',
    'DisableUser'=>'Désactiver l\'utilisateur',
    'Disable'=>'Désactiver',
    'EnableUser'=>'Permettre à l\'utilisateur',
    'Enable'=>'Activer',
    'DeleteAnExistingUser'=>'Supprimer un Utilisateur Existant',
    'DeleteCurrentUser'=>'Supprimer l\'utilisateur courant',
    'Delete'=>'Supprimer',
    'SendPasswordResetEmailForUser'=>'Envoyer des e-mail de réinitialisation de mot de passe pour l\'utilisateur',
    'Category'=>'Catégorie',
    'AddNewCategoryNamed'=>'Ajouter une nouvelle catégorie nommée',
    'DeleteCurrentCategoryNamed'=>'Supprimer l\'actuelle catégorie nommée',
    'Team'=>'L\'équipe',
    'AddNewTeamNamed'=>'Ajouter nouvelle équipe nommée',
    'DeleteCurrentTeamNamed'=>'Supprimer l\'actuelle équipe nommée',
    'Technology'=>'La technologie',
    'AddNewTechnologyNamed'=>'Ajouter une nouvelle technologie nommée',
    'DeleteCurrentTechnologyNamed'=>'Supprimer l\'actuelle technologie nommée',
    'SiteLocation'=>'Site/Emplacement',
    'AddNewSiteLocationNamed'=>'Ajouter un nouveau site/emplacement nommé',
    'DeleteCurrentSiteLocationNamed'=>'Supprimer l\'actuel site/emplacement nommé',
    'ControlRegulation'=>'Règlement Sur Le Contrôle Des',
    'AddNewControlRegulationNamed'=>'Ajouter un nouveau règlement de contrôle nommé',
    'DeleteCurrentControlRegulationNamed'=>'Supprimer l\'actuel règlement de contrôle nommé',
    'RiskPlanningStrategy'=>'Le Risque D\'Une Stratégie De Planification',
    'AddNewRiskPlanningStrategyNamed'=>'Ajouter de nouveaux risques d\'une stratégie de planification nommé',
    'DeleteCurrentRiskPlanningStrategyNamed'=>'Supprimer le risque d\'une stratégie de planification nommé',
    'CloseReason'=>'Près De Raison',
    'AddNewCloseReasonNamed'=>'Ajouter la nouvelle raison nommé',
    'DeleteCurrentCloseReasonNamed'=>'Supprimer l\'actuelle près de raison nommé',
    'IWantToReviewHighRiskEvery'=>'Je veux revoir à HAUT risque, tous les',
    'IWantToReviewMediumRiskEvery'=>'Je veux revoir à risque MOYEN chaque',
    'IWantToReviewLowRiskEvery'=>'Je veux revoir à FAIBLE risque, tous les',
    'days'=>'jours',
    'MyClassicRiskFormulaIs'=>'Mon Classique Formule Est',
    'RISK'=>'RISQUE',
    'IConsiderHighRiskToBeAnythingGreaterThan'=>'Je considère risque ÉLEVÉ de faire quelque chose de plus grand que',
    'IConsiderMediumRiskToBeLessThanAboveButGreaterThan'=>'Je considère à risque MOYEN à moins que ci-dessus, mais plus grande que',
    'IConsiderlowRiskToBeLessThanAboveButGreaterThan'=>'Je considère le FAIBLE risque d\'être moins que ci-dessus, mais plus grande que',
    'HighRisk'=>'Risque Élevé',
    'MediumRisk'=>'Risque Moyen',
    'LowRisk'=>'Faible Risque',
    'Irrelevant'=>'Hors de propos',
    'SubmitYourRisks'=>'Présenter des risques',
    'PlanYourMitigations'=>'Plan des mesures d’atténuation',
    'PerformManagementReviews'=>'Effectuer des examens',
    'PrioritizeForProjectPlanning'=>'Planifier des projets',
    'ReviewRisksRegularly'=>'Examiner régulièrement',
    'DocumentANewRisk'=>'Document un Nouveau Risque',
    'UseThisFormHelp'=>'Utilisez ce formulaire pour documenter un nouveau risque de contrepartie dans le Processus de Gestion des Risques',
    'Subject'=>'Sujet',
    'ExternalReferenceId'=>'Référence externe ID',
    'ControlNumber'=>'Numéro De Contrôle',
    'Owner'=>'Propriétaire',
    'OwnersManager'=>'Gestionnaire du propriétaire',
    'RiskScoringMethod'=>'Méthode De Notation Du Risque',
    'CurrentLikelihood'=>'Courant De Probabilité',
    'CurrentImpact'=>'L\'Impact Actuel',
    'RiskAssessment'=>'L\'Évaluation Des Risques',
    'AdditionalNotes'=>'Notes Supplémentaires',
    'UNREVIEWED'=>'Les sites en attente',
    'PASTDUE'=>'EN SOUFFRANCE',
    'ID'=>'ID',
    'Status'=>'Statut',
    'Risk'=>'Risque',
    'DaysOpen'=>'De Jours Ouverts',
    'CalculatedRisk'=>'Risque Calculé',
    'SubmittedBy'=>'Soumis Par',
    'NextReviewDate'=>'Prochaine Date De Révision De',
    'CVSSRiskScoring'=>'CVSS de cotation des Risques',
    'DREADRiskScoring'=>'L\'EFFROI de la cotation des Risques',
    'OWASPRiskScoring'=>'OWASP de cotation des Risques',
    'CustomRiskScoring'=>'La Coutume De Cotation Des Risques',
    'MitigationPlanningHelp'=>'Ci-dessous la liste des risques qui nécessitent une planification des mesures d\'atténuation',
    'ManagementReviewHelp'=>'Ci-dessous la liste des risques qui nécessitent un examen de la gestion de',
    'Submitted'=>'Soumis',
    'MitigationPlanned'=>'D\'Atténuation Prévues',
    'ManagementReview'=>'Examen De La Gestion De',
    'No'=>'Pas de',
    'Yes'=>'Oui',
    'AddAndRemoveProjects'=>'Ajouter et Supprimer des Projets',
    'AddAndRemoveProjectsHelp'=>'Ajouter et supprimer des projets afin d\'associer de multiples risques pour la priorisation',
    'AddNewProjectNamed'=>'Ajouter un nouveau projet nommé',
    'DeleteCurrentProjectNamed'=>'Supprimer l\'actuel projet nommé',
    'AddUnassignedRisksToProjects'=>'Ajouter Unassigned des Risques pour les Projets',
    'AddUnassignedRisksToProjectsHelp'=>'Faites glisser et déposez non affecté risques marqué pour examen en tant que projet dans l\'onglet projet',
    'PrioritizeProjects'=>'Prioriser Les Projets',
    'PrioritizeProjectsHelp'=>'Déplacer des projets autour de vous et changer l\'ordre de priorité. Une fois terminé, n\'oubliez pas d\'appuyer sur le bouton "Update" pour enregistrer vos modifications',
    'SaveRisksToProjects'=>'Enregistrer des Risques pour les Projets',
    'RiskId'=>'Risques ID',
    'RiskActions'=>'Actions',
    'ReopenRisk'=>'Rouvrir Des Risques',
    'CloseRisk'=>'Proche De Risque',
    'EditRisk'=>'Edit Risque',
    'PlanAMitigation'=>'Plan d\'Atténuation',
    'PerformAReview'=>'Effectuer un Examen',
    'AddAComment'=>'Ajouter un Commentaire',
    'ShowRiskScoringDetails'=>'Détails de cotation des risques de voir',
    'HideRiskScoringDetails'=>'Masquer Le Score De Risque De Détails',
    'Details'=>'Détails',
    'SubmissionDate'=>'Date De Soumission',
    'DateSubmitted'=>'Date De Soumission',
    'EditDetails'=>'Modifier Les Détails',
    'Mitigation'=>'Atténuation',
    'MitigationDate'=>'Date de présentation des mesures d’atténuation',
    'PlanningStrategy'=>'Stratégie De Planification',
    'CurrentSolution'=>'Solution Actuelle',
    'SecurityRequirements'=>'Exigences En Matière De Sécurité',
    'SecurityRecommendations'=>'Recommandations De Sécurité',
    'EditMitigation'=>'Modifier L\'Atténuation',
    'LastReview'=>'La Dernière Révision',
    'ReviewDate'=>'Date De Révision',
    'Reviewer'=>'Examinateur',
    'Review'=>'Examen',
    'NextStep'=>'Prochaine Étape',
    'Comments'=>'Commentaires',
    'ViewAllReviews'=>'Voir Tous Les Commentaires',
    'ReviewHistory'=>'Revue De L\'Histoire',
    'Comment'=>'Commentaire',
    'ClassicRiskScoring'=>'Classique De Cotation Des Risques',
    'RiskScoringActions'=>'Le Score De Risque Des Actions',
    'UpdateClassicScore'=>'Mise À Jour Classique Score',
    'ScoreBy'=>'Score en',
    'RISKClassicExp1'=>'RISQUE = Probabilité x Impact + 2(Impact) )',
    'RISKClassicExp2'=>'RISQUE = Probabilité x Impact + Impact )',
    'RISKClassicExp3'=>'RISQUE = Probabilité x Impact )',
    'RISKClassicExp4'=>'RISQUE = Probabilité x Impact + Probabilité )',
    'RISKClassicExp5'=>'RISQUE = Probabilité x Impact + 2(Probabilité) )',
    'Reason'=>'Raison',
    'CloseOutInformation'=>'La Clôture De L\'Information',
    'SubmitManagementReview'=>'Soumettre L\'Examen De La Gestion',
    'SubmitRiskMitigation'=>'Soumettre L\'Atténuation Des Risques',
    'RiskDashboard'=>'Risque De Tableau De Bord',
    'RiskTrend'=>'Tendances En Matière De Risque',
    'AllOpenRisksAssignedToMeByRiskLevel'=>'Ouverts tous les risques assignés à moi',
    'AllOpenRisksByRiskLevel'=>'Ouvert tous les Risques par Niveau de Risque',
    'AllOpenRisksConsideredForProjectsByRiskLevel'=>'Ouvert tous les Risques pris en compte pour les Projets par Niveau de Risque',
    'AllOpenRisksAcceptedUntilNextReviewByRiskLevel'=>'Ouvert tous les Risques Acceptés Jusqu\'à la Prochaine Révision par Niveau de Risque',
    'AllOpenRisksToSubmitAsAProductionIssueByRiskLevel'=>'Ouvert tous les Risques à Présenter comme un Problème de Production par Niveau de Risque',
    'AllOpenRisksByScoringMethod'=>'Ouvert tous les Risques par la Méthode de Notation',
    'AllClosedRisksByRiskLevel'=>'Tous Fermé les Risques par Niveau de Risque',
    'SubmittedRisksByDate'=>'Soumis Risques Par Date',
    'MitigationsByDate'=>'Mesures D\'Atténuation Par Date',
    'ManagementReviewsByDate'=>'Examens De La Gestion Par Date',
    'ProjectsAndRisksAssigned'=>'Les projets et les Risques Attribués',
    'OpenRisks'=>'Ouvrir Les Risques',
    'ClosedRisks'=>'Fermé Les Risques',
    'ReportMyOpenHelp'=>'Ce rapport montre ouvert tous les risques de l\'utilisateur actuel en tant que propriétaire ou gestionnaire associés avec le risque commandé par le niveau de risque',
    'ReportOpenHelp'=>'Ce rapport montre ouvert tous les risques commandé par le niveau de risque',
    'ReportProjectsHelp'=>'Ce rapport montre ouvert tous les risques pris en compte pour les projets commandés par niveau de risque',
    'ReportNextReviewHelp'=>'Ce rapport montre ouvert tous les risques acceptés jusqu\'à la prochaine révision commandé par le niveau de risque',
    'ReportProductionIssuesHelp'=>'Ce rapport affiche tous ouvert des risques soumis que les questions de production commandés par niveau de risque',
    'ReportRiskScoringHelp'=>'Ce rapport affiche tous les risques des méthodes de notation et les risques marqué à l\'aide de chaque',
    'ReportClosedHelp'=>'Ce rapport affiche tous fermé les risques commandé par le niveau de risque',
    'ReportSubmittedByDateHelp'=>'Ce rapport affiche tous les risques ordonnée par date de soumission',
    'ReportMitigationsByDateHelp'=>'Ce rapport affiche toutes les mesures d\'atténuation prévues commandé par l\'atténuation de la date',
    'ReportMgmtReviewsByDateHelp'=>'Ce rapport affiche tous les examens de la gestion ordonnée par date d\'examen',
    'ReportProjectsAndRisksHelp'=>'Ce rapport affiche tous les projets et les risques attribués à eux',
    'Language'=>'Langue',
    'AllOpenRisksNeedingReview'=>'Ouvert tous les Risques Nécessitant un Examen',
    'ReportReviewNeededHelp'=>'Ce rapport affiche tous les ouvrir risques d\'avoir besoin d\'un examen de la gestion de',
    'CustomValue'=>'Valeur Personnalisée',
    'ClosedRisksByDate'=>'Fermé Les Risques Par Date',
    'DateClosed'=>'Date De Fermeture',
    'ClosedBy'=>'Fermé Par',
    'ReportClosedByDateHelp'=>'Ce rapport affiche tous les risques ordonnée par date de fermeture',
    'AllOpenRisksByTeam'=>'Ouvert tous les Risques en Équipe',
    'ReportRiskTeamsHelp'=>'Ce rapport montre toutes les équipes et les risques attribués à chaque',
    'Unassigned'=>'Non attribuées',
    'AllOpenRisksByTechnology'=>'Ouvert Tous Les Risques Par La Technologie',
    'ReportRiskTechnologiesHelp'=>'Ce rapport montre toutes les technologies et les risques attribués à chaque',
    'RiskLevel'=>'Le Niveau De Risque',
    'BasedOnTheCurrentRiskScore'=>'Selon votre Score de risque, votre prochaine date d’examen sera ',
    'WouldYouLikeToUseADifferentDate'=>'Vous souhaitez utiliser une autre date à la place?',
    'RisksOpenedAndClosedOverTime'=>'Risques Ouvert et Fermé dans le Temps',
    'AllRiskScoresAreAdjusted'=>'Tous les scores de risque sont ajustés pour tenir sur une échelle de 0 à 10.',
    'DetermineProjectStatus'=>'Déterminer L\'État Du Projet',
    'ProjectStatusHelp'=>'Place des projets dans des compartiments en fonction de leur état actuel.',
    'ActiveProjects'=>'Projets Actifs',
    'OnHoldProjects'=>'En Attente De Projets',
    'CompletedProjects'=>'Projets Terminés',
    'CancelledProjects'=>'Annulation De Projets',
    'UpdateProjectStatuses'=>'Projet De Mise À Jour Des Statuts',
    'HighRiskReport'=>'À Haut Risque Rapport',
    'TotalOpenRisks'=>'Total Ouvrir Les Risques',
    'TotalHighRisks'=>'Total Des Risques Élevés',
    'HighRiskPercentage'=>'Risque Élevé De Pourcentage',
    'UpdateClassicScore'=>'Mise à jour classique Score',
    'CurrentLikelihood'=>'Probabilité actuelle',
    'CurrentImpact'=>'Impact actuel',   
    'UpdateCVSSScore'=>'Mise à jour de Score CVSS',
    'BaseScoreMetrics'=>'Le Score De Base De Métriques',
    'AttackVector'=>'Vecteur D\'Attaque',
    'AttackComplexity'=>'L\'Attaque De La Complexité',
    'Authentication'=>'L\'authentification',
    'ConfidentialityImpact'=>'La Confidentialité De L\'Impact',
    'IntegrityImpact'=>'L\'Intégrité De L\'Impact',
    'AvailabilityImpact'=>'La Disponibilité De L\'Impact',
    'TemporalScoreMetrics'=>'Temporelle Score Métriques',
    'Exploitability'=>'D\'exploitabilité',
    'RemediationLevel'=>'D\'Assainissement De Niveau',
    'ReportConfidence'=>'Rapport De Confiance',
    'EnvironmentalScoreMetrics'=>'Note Environnementale Métriques',
    'CollateralDamagePotential'=>'Les Dommages Collatéraux Potentiels',
    'TargetDistribution'=>'Distribution Cible',
    'ConfidentialityRequirement'=>'Exigence De Confidentialité',
    'IntegrityRequirement'=>'L\'Intégrité Exigence',
    'AvailabilityRequirement'=>'Exigences De Disponibilité',
    'UpdateDREADScore'=>'Mise à jour de l\'EFFROI Score',
    'DamagePotential'=>'Les Dommages Potentiels',
    'Reproducibility'=>'La reproductibilité',
    'AffectedUsers'=>'Les Utilisateurs Concernés',
    'Discoverability'=>'L\'identification de l\'',
    'UpdateOWASPScore'=>'Mise à jour de l\'OWASP Score',
    'ThreatAgentFactors'=>'Agent De Menace Facteurs De',
    'SkillLevel'=>'Niveau De Compétence',
    'Motive'=>'Motif',
    'Opportunity'=>'Occasion',
    'Size'=>'Taille',
    'VulnerabilityFactors'=>'Les Facteurs De Vulnérabilité',
    'EaseOfDiscovery'=>'La facilité de la Découverte',
    'EaseOfExploit'=>'La facilité d\'Exploiter',
    'Awareness'=>'Sensibilisation',
    'IntrusionDetection'=>'La Détection D\'Intrusion',
    'TechnicalImpact'=>'Impact Technique',
    'LossOfConfidentiality'=>'La perte de Confidentialité',
    'LossOfIntegrity'=>'La perte de l\'Intégrité',
    'LossOfAvailability'=>'Les pertes de Disponibilité',
    'LossOfAccountability'=>'La perte de la reddition de comptes',
    'BusinessImpact'=>'L\'Impact Sur Les Entreprises',
    'FinancialDamage'=>'Dommages Financiers',
    'ReputationDamage'=>'D\'Atteinte À La Réputation',
    'NonCompliance'=>'Le Non-Respect',
    'PrivacyViolation'=>'Violation De La Vie Privée',
    'UpdateCustomScore'=>'Mise À Jour Personnalisées Score',
    'ManuallyEnteredValue'=>'Entré Manuellement La Valeur',
    'ScoreByClassic'=>'Score en Classique',
    'ScoreByCVSS'=>'Score en CVSS',
    'ScoreByDREAD'=>'Score par l\'EFFROI',
    'ScoreByOWASP'=>'Score par l\'OWASP',
    'ScoreByCustom'=>'Score par la Coutume',
    'BaseVector'=>'Vecteur De Base',
    'TemporalVector'=>'Temporelle Du Vecteur',
    'EnvironmentalVector'=>'L\'Environnement De Vecteur',
    'SupportingDocumentation'=>'La Documentation À L\'Appui',
    'Import'=>'L\'importation',
    'Export'=>'L\'exportation',
    'ActivateTheImportExportExtra'=>'Activer l\'Importation/Exportation Supplémentaire',
    'PrintableView'=>'Vue Imprimable',
    'GroupBy'=>'Groupe Par',
    'IncludedColumns'=>'Des Colonnes Incluses',
    'AllRisks'=>'Tous Les Risques',
    'DynamicRiskReport'=>'Dynamique Des Risques Rapport',
    'ObsoleteReports'=>'Obsolète Rapports',
    'Project'=>'Projet',
    'SortBy'=>'Trier Par',
    'MonthSubmitted'=>'Mois Soumis',
    'AssetManagement'=>'De La Gestion D\'Actifs',
    'AutomatedDiscovery'=>'Détection Automatisée',
    'BatchImport'=>'L\'Importation Du Lot',
    'ManageAssets'=>'La Gestion De L\'Actif',
    'AssetValuation'=>'L\'Évaluation De L\'Actif',
    'AllowAccessToAssetManagementMenu'=>'Permettre l\'Accès à la "Gestion d\'Actifs" Menu',
    'AutomatedDiscoveryHelp'=>'Découvrez tous vivent les adresses IP dans l\'entrée de gamme d\'adresses IP. Vivre les adresses IP seront ajoutés à la liste des actifs. Formats acceptés:',
    'IPRange'=>'Plage d\'adresses IP',
    'Search'=>'Recherche',
    'AddANewAsset'=>'Ajouter un Nouvel élément',
    'DeleteAnExistingAsset'=>'Supprimer un Actif Existant',
    'AssetName'=>'Nom De L\'Actif',
    'IPAddress'=>'Adresse IP',
    'AssetWasAddedSuccessfully'=>'L\'actif a été ajoutée avec succès.',
    'AssetWasDeletedSuccessfully'=>'L\'actif a été supprimé avec succès.',
    'ThereWasAProblemAddingTheAsset'=>'Il y avait un problème de l\'ajout de l\'actif.',
    'ThereWasAProblemDeletingTheAsset'=>'Il y avait un problème de suppression de l\'actif.',
    'ComingSoon'=>'Bientôt',
    'ExportRisks'=>'Les Risques À L\'Exportation',
    'ExportMitigations'=>'Exporter Des Mesures D\'Atténuation',
    'ExportReviews'=>'L\'Exportation Des Examens',
    'ExportCombined'=>'L\'Exportation Combinée',
    'MitigatedBy'=>'Atténué Par',
    'MitigationId'=>'Atténuation ID',
    'ReviewId'=>'ID de commentaire',
    'AffectedAssets'=>'Biens Affectés',
    'Activate'=>'Activer',
    'DeleteRisks'=>'Supprimer Les Risques',
    'DeletedRisksCannotBeRecovered'=>'Supprimé Les Risques Ne Peuvent Pas Être Récupérés',
    'RisksDeletedSuccessfully'=>'Risque(s) Supprimé avec Succès',
    'ThereWasAProblemDeletingTheRisk'=>'Il y Avait un Problème de Suppression du Risque(s)',
    'Activated'=>'ACTIVÉ',
    'IWantToReviewInsignificantRiskEvery'=>'Je veux revoir un risque NÉGLIGEABLE de chaque',
    'Insignificant'=>'Insignifiant',
    'IConsiderVeryHighRiskToBeAnythingGreaterThan'=>'Je considère TRÈS HAUT risque d\'être quelque chose de plus grand que',
    'IConsiderHighRiskToBeLessThanAboveButGreaterThan'=>'Je considère à risque ÉLEVÉ d\'être à moins de ci-dessus, mais plus grande que',
    'VeryHigh'=>'Très Haute',
    'VeryHighRisk'=>'Risque Très Élevé',
    'IWantToReviewVeryHighRiskEvery'=> 'Je veux revoir TRÈS HAUT risque, tous les',
    'AbleToReviewVeryHighRisks'=>'Mesure de l\'Examen des Risques Très Élevés',
    'AbleToReviewInsignificantRisks'=>'En mesure d\'Examiner Insignifiant Risques',
    'TotalVeryHighRisks'=>'Total Des Risques Très Élevés',
    'VeryHighRiskPercentage'=>'Risque Très Élevé De Pourcentage',
    'AllTeams'=>'Toutes Les Équipes',
    'FileUploadSettings'=>'Téléchargement De Fichier De Paramètres',
    'AllowedFileTypes'=>'Types De Fichiers Autorisés',
    'AddNewFileTypeOf'=>'Ajouter un nouveau type de fichier',
    'DeleteCurrentFileTypeOf'=>'Supprimer l\'actuel type de fichier',
    'MaximumUploadFileSize'=>'Téléchargement Maximale De La Taille Du Fichier',
    'Bytes'=>'Octets',
    'CheckAll'=>'Vérifiez Tous Les',
    'CheckAllRiskMgmt'=>'Vérifiez Tout De La Gestion Des Risques',
    'CheckAllAssetMgmt'=>'Vérifier L\'Ensemble Des Actifs De Gestion De',
    'CheckAllConfigure'=>'Vérifiez Toutes Les Configurer',
    'MitigationTeam'=>'L\'Atténuation De L\'Équipe',
    'ImportRisks'=>'Importer Des Risques',
    'ImportAssets'=>'Importer Des Ressources',
    'AssetValue'=>'La Valeur De L\'Actif',
    'Register'=>'Registre',
    'RegisterSimpleRisk'=>'Registre SimpleRisk',
    'RegistrationText'=>'En vous inscrivant SimpleRisk vous fournir vos informations de contact afin que vous pouvez être mis à jour avec la dernière version de l\'information importante et les notifications de sécurité. Vos informations ne seront jamais vendues à des tiers. Enregistré instances ont également la possibilité d\'être sauvegardés et mis à niveau avec le clic d\'un bouton.',
    'RegistrationInformation'=>'Les Informations D\'Enregistrement',
    'Company'=>'Société',
    'JobTitle'=>'Titre De L\'Emploi',
    'Phone'=>'Téléphone',
    'UpgradeSimpleRisk'=>'Mise À Niveau SimpleRisk',
    'UpgradeInstructions'=>'Cette section utilise la Mise à niveau Supplémentaire. Pour vous assurer d\'avoir la dernière version, sélectionnez "mise à Jour", ré-enregistrer et recharger cette page.',
    'NoUpgradeNeeded'=>'Pas de mise à jour est nécessaire en ce moment.',
    'BackupDatabase'=>'Sauvegarde de la Base de données',
    'UpgradeApplication'=>'Mise à niveau de l\'Application',
    'UpgradeDatabase'=>'Mise à niveau de la Base de données',
    'CustomExtras'=>'Mesure Extras',
    'CustomExtrasText'=>'Il serait génial si tout était gratuit, droit? J\'espère que le noyau SimpleRisk plate-forme est en mesure de desservir l\'ensemble de vos besoins de gestion des risques. Mais, si vous vous trouvez encore vouloir de plus en plus de fonctionnalités, nous avons développé une série de "Extras" qui va faire exactement cela.',
    'Upgrade'=>'Mise à niveau',
    'Install'=>'Installer',
    'Purchase'=>'Achat',
    'PasswordPolicy'=>'Stratégie De Mot De Passe',
    'MinimumNumberOfCharacters'=>'Nombre minimal de Caractères',
    'RequireAlphaCharacter'=>'Exiger Caractère Alpha',
    'RequireUpperCaseCharacter'=>'Exiger Caractère Majuscule',
    'RequireLowerCaseCharacter'=>'Besoin Minuscule',
    'RequireNumericCharacter'=>'Exiger Caractère Numérique',
    'RequireSpecialCharacter'=>'Exiger Caractère Spécial',
    'Enabled'=>'Activé',
    'RiskPyramid'=>'Risque Pyramide',
    'RiskPyramidDescription'=>'Le risque de la pyramide ci-dessus permet de montrer la répartition des risques entre les différents niveaux de risque. Un lourd en haut de la pyramide peut être un signe que votre organisation est prendre trop de risque.',
    'RiskAdvice'=>'Risque Conseils',
    'AddDeleteAssets'=>'Ajouter Et De Supprimer Des Actifs',
    'EditAssets'=>'Modifier Les Actifs',
    'AutomaticAssetValuation'=>'Automatique D\'Évaluation De L\'Actif',
    'ManualAssetValuation'=>'Manuel D\'Évaluation De L\'Actif',
    'MinimumValue'=>'Valeur Minimale',
    'MaximumValue'=>'Valeur Maximale',
    'ValueRange'=>'Plage De Valeurs',
    'DefaultAssetValuation'=>'Par Défaut L\'Évaluation De L\'Actif',
    'Default'=>'Par défaut',
    'RisksAndAssets'=>'Des risques et des Actifs',
    'Report'=>'Rapport',
    'RisksByAsset'=>'Les risques en Asset',
    'AssetsByRisk'=>'Les actifs du Risque',
    'MaximumQuantitativeLoss'=>'Maximum De Perte Quantitative',
    'MitigationOwner'=>'L\'Atténuation Du Propriétaire',
    'MitigationCost'=>'Coût D\'Atténuation',
    'RiskColumns'=>'Le Risque De Colonnes',
    'MitigationColumns'=>'L\'Atténuation Des Colonnes',
    'ReviewColumns'=>'L\'Examen Des Colonnes',
    'ChangeStatus'=>'De Changement De Statut',
    'SetRiskStatusTo'=>'Définir Le Statut De Risque De',
    'AddNewStatusNamed'=>'Ajouter un nouveau statut nommé',
    'DeleteStatusNamed'=>'Supprimer le statut nommé',
    'DefaultCurrencySymbol'=>'Par Défaut Le Symbole De La Monnaie',
    'DefaultValues'=>'Les Valeurs Par Défaut',
    'RiskSource'=>'Source De Risque',
    'AddNewSourceNamed'=>'Ajouter une nouvelle source de nommée',
    'DeleteSourceNamed'=>'Supprimer la source de nommée',
    'CheckAllAssessments'=>'Vérifiez Toutes Les Évaluations',
    'AllowAccessToAssessmentsMenu'=>'Permettre l\'Accès à des "Évaluations" Menu',
    'Assessments'=>'Évaluations',
    'AvailableAssessments'=>'Les Évaluations Disponibles',
    'PendingRisks'=>'Dans L\'Attente De Risques',
    'CreateAssessment'=>'Créer Évaluation',
    'EditAssessment'=>'Edit Évaluation',
    'Overview'=>'Vue d\'ensemble',
    'OpenVsClosed'=>'Ouvert vs Fermé',
    'MitigatedVsUnmitigated'=>'Atténué vs Absolu',
    'ReviewedVsUnreviewed'=>'Revue vs les sites en attente',
    'OpenedRisks'=>'Ouvert Risques',
    'MailSettings'=>'Paramètres De Messagerie',
    'TransportAgent'=>'L\'Agent De Transport',
    'FromName'=>'De Nom',
    'FromEmail'=>'À Partir D\'Un Courriel',
    'ReplyToName'=>'ReplyTo Nom',
    'ReplyToEmail'=>'ReplyTo E-Mail',
    'Host'=>'Accueil',
    'SMTPAuthentication'=>'L\'Authentification SMTP',
    'Encryption'=>'Le chiffrement',
    'Port'=>'Port',
    'Next'=>'Prochaine',
    'NewAssessmentQuestion'=>'Nouvelle Question De L\'Évaluation',
    'Question'=>'Question',
    'RiskScore'=>'Le Score De Risque',
    'SubmitRisk'=>'Présenter Des Risques',
    'Answer'=>'Réponse',
    'AddQuestion'=>'Ajout De La Question',
    'SaveAssessment'=>'Économiser De L\'Évaluation',
    'SendAssessment'=>'Envoyer Évaluation',
    'DeleteAssessment'=>'Supprimer Évaluation',
    'AssessmentName'=>'Évaluation De Nom',
    'SendTo'=>'Envoyer À',
    'ActiveAssessments'=>'Évaluations',
    'SentTo'=>'Envoyé À',
    'From'=>'À partir de',
    'Key'=>'Clé',
    'GoToSSOLoginPage'=>'Aller ã la Page de Login SSO',
    'APIKey'=>'Clé API',
    'GenerateAPIKey'=>'Générer la clé API',
    'RotateAPIKey'=>'Tourner la clé API',
    'InvalidateAPIKey'=>'Invalide clé API',
    'Deactivate'=>'Désactiver',
    'ImportExportExtra'=>'Importation-exportation Extra',
    'SaveDetails'=>'Sauvegarder les détails',
    'ClearForm'=>'Effacer le formulaire',
    'SaveMitigation'=>'Enregistrer des mesures d’atténuation',
    'Cancel'=>'Annuler',
    'SubmitReview'=>'Soumettre à examen',
    'UnassignedRisks'=>'Risques non assignés',
    'DisableRegistrationNotice'=>'Désactiver l’enregistrement avis',
    'UserPolicy'=>'Stratégie de l’utilisateur',
    'UseCaseSensitiveValidationOfUsername'=>'Utiliser la Validation sensible à la casse du nom d’utilisateur',
    'MitigationPlanning'=>'Date d’atténuation prévues',
    'AssetDetails'=>'Détails des actifs',
    'RiskList'=>'Liste des risques',
    'Are you sure you want to close the risk? All changes will be lost!'=>'Êtes-vous sûr de que vouloir fermer le risque ? Toutes les modifications seront perdues !',
    'MinimumPasswordAge' => 'Age minimal de mot de passe',
    'MaximumPasswordAge' => 'Âge maximal de mot de passe',
    'MaximumAttemptsLockout' => 'Verrouillage de tentatives maximum',
    'MaximumAttemptsLockoutTime' => 'Heure de verrouillage tentatives maximum',
    'attempts' => 'tente',
    'minutes' => 'minutes',
    'AccountLockedOut' => 'Compte verrouillé',
    'AccountLockoutPolicy' => 'Stratégie de verrouillage de compte',
    'ImportExportIsDeactivated' => 'Import-export est désactivé',
    'PurchaseTheExtra' => 'Le surcoût d’achat',
    'ExpandAll' => 'Développer tout',
    'ConditionMessageForMinChar' => 'Mot de passe doit contenir au minimum de caractères $min_chars.',
    'ConditionMessageForAlpha' => 'Mot de passe doit contenir un caractère alphabétique.',
    'ConditionMessageForUppercase' => 'Mot de passe doit contenir un caractère majuscule.',
    'ConditionMessageForLowercase' => 'Mot de passe doit contenir un caractère en minuscule.',
    'ConditionMessageForDigit' => 'Mot de passe doit contenir un chiffre.',
    'ConditionMessageForSpecialchar' => 'Mot de passe doit contenir un caractère spécial.',
    'ConditionMessageForMinPasswordAge' => 'Mot de passe peut être mises à jour de mise à jour le temps minimum de $min_password_age jours plus tard.',
    'TrustedDomains' => 'Domaines de confiance',
    'SimpleRiskColumnMapping' => 'Mappage des colonnes de SimpleRisk',
    'Mapping' => 'Cartographie',
    'Optional' => 'En option',
    'SaveMappingAs' => 'Enregistrer comme',
    'EncryptionLevel' => 'Niveau de cryptage',
    'Level' => 'Niveau',
    'Description' => 'Description',
    'ShowRiskScoreOverTime' => 'Voir la note de risque au fil du temps',
    'HideRiskScoreOverTime' => 'Masquer le Score de risque au fil du temps',
    'ReviewRegularlyHelp' => 'Voici la liste de tous les risques classés par Unreviewed, souffrance et prochaine Date d’examen',
    'RiskScoringHistory' => 'Histoire de cotation des risques',
    'RiskAddPermissionMessage' => 'Vous n’êtes pas autorisé à présenter de nouveaux risques.  Les risques que vous essayez de soumettre ne seront pas enregistrés.  Si vous sentez que vous avez atteint ce message par erreur, veuillez communiquer avec un administrateur.',
    'SubjectRiskCannotBeEmpty' => 'Le sujet d’un risque ne peut pas être vide',
    'InvalidRiskID' => 'ID risques non valide',
    'Success' => 'Succès',
    'RiskUpdatePermissionMessage' => 'Vous n’êtes pas autorisé à modifier les risques.  Les risques que vous essayez de modifier ne seront pas enregistrés.  Si vous sentez que vous avez atteint ce message par erreur, veuillez communiquer avec un administrateur.',
    'RiskReviewPermission' => 'Vous n’êtes pas autorisé à examiner les risques de niveau $risk_level.  Les commentaires que vous essayez de soumettre ne seront pas enregistrés.  Si vous sentez que vous avez atteint ce message par erreur, veuillez communiquer avec un administrateur.',
    'DateAndTime' => 'Date et heure',
    'mCryptWarning' => 'L’extension « mcrypt » doit être installé pour le cryptage supplémentaire travailler correctement.  Veuillez l’installer pour continuer.',
    'APIInCompatibleWithEncryptionLevel' => 'L’API n’est pas compatible avec le niveau de cryptage de l’utilisateur de la base de données cryptée Extra.',
    'UnauthenticatedAccessInAPI' => 'Accès non authentifié.  S’il vous plaît connectez-vous ou fournir une clé pour utiliser l’API SimpleRisk.',
    'ResetPasswordMessageInUserLevelEncryption' => 'Vous ne pouvez pas réinitialiser le mot de passe parce que cet utilisateur est dans le chiffrement de niveau utilisateur. Contactez l’administrateur.',
    'YouNeedToSpecifyAnIdParameter' => 'Vous devez spécifier un paramètre id.',
    'NoMitigation' => 'Il n’y a aucune atténuation spécifiée.',
    'NoReview' => 'Il n’y a aucun examen spécifié.',
    'MysqldumpPathWasSavedSuccessfully' => 'Chemin de mysqldump a été enregistré avec succès.',
    'UnavailableMysqldumpService' => 'Il n’y a aucun service de « mysqldump » avaiable sur serveur. S’il vous plaît définir chemin d’accès absolu mysqldump.',
    'AllOpenRisksByTeamByLevel' => 'Ouverts tous les risques par équipe par niveau de risque',
    'Unknown' => 'Inconnu',
    'AllOwners' =>'Tous les risques',
    'AllOwnersManagers' => 'Dirigeants de tous les propriétaires',
    'AddNewReviewNamed' => 'Ajouter votre avis nouveau nommé',
    'DeleteCurrentReviewNamed' => 'Supprimer l’examen actuel nommé',
    'AddNewNextstepNamed' => 'Ajouter nouvelle étape suivante',
    'DeleteCurrentNextstepNamed' => 'Supprimer l’actuelle étape suivante nommée',
    'Settings' => 'Paramètres',
    'EnablePopupWindowsForTextBoxes' => 'Activer les fenêtres pop-up pour les zones de texte',
    'PasswordNoLongerUse' => 'Ce nouveau mot de passe est limité, vous ne pouvez plus utiliser.  Veuillez essayer un autre mot de passe',
    'RememberTheLast' => 'RememberTheLast',
    'Passwords' => 'Mots de passe',
    'NoOwner' => 'Aucun propriétaire',
    'NoOwnersManager' => 'Aucun gérant de propriétaires',
    'RiskAverageOverTime' => 'Risque moyen au fil du temps',
    'AverageRiskScore' => 'Score de risque moyen',
    'Year' => 'Année',
    'Month' => 'Mois',
    'Day' => 'Journée',
    'FilterByAffectedAsset' => 'Filtrer par actif affecté',
    'RisksOpened' => 'Risques a ouverts',
    'RisksClosed' => 'Risques fermés',
    'HealthCheck' => 'Bilan de santé',
    'RequirePasswordChangeOnLogin' => 'Besoin de changement de mot de passe lors de la connexion',
    'PasswordChangeRequired' => 'Vous devrez modifier votre mot de passe avant la connexion.',
    '' => '',
);

?>
