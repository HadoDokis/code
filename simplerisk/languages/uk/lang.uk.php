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
    'Home'=>'Вдома',
    'RiskManagement'=>'Управління Ризиками',
    'Reporting'=>'Звітності',
    'Configure'=>'Налаштувати',
    'MyProfile'=>'Мій Профіль',
    'Logout'=>'Вихід',
    'LogInHere'=>'Увійти до SimpleRisk',
    'Username'=>'Ім\'я користувача',
    'Password'=>'Пароль',
    'ForgotYourPassword'=>'Забули пароль',
    'Login'=>'Логін',
    'Reset'=>'Скидання',
    'Send'=>'Відправити',
    'Update'=>'Оновлення',
    'SendPasswordResetEmail'=>'Відправити Скидання Пароля Електронної Пошти',
    'PasswordReset'=>'Скидання Пароля',
    'ResetToken'=>'Скидання Маркера',
    'RepeatPassword'=>'Повторіть Пароль',
    'Submit'=>'Подати',
    'ProfileDetails'=>'Профіль Деталі',
    'LastLogin'=>'Послід',
    'ChangePassword'=>'Зміна Пароля',
    'CurrentPassword'=>'Поточний Пароль',
    'NewPassword'=>'Новий Пароль',
    'ConfirmPassword'=>'Підтвердження Пароля',
    'ConfigureRiskFormula'=>'Налаштувати Формули Ризику',
    'ConfigureReviewSettings'=>'Налаштувати Параметри Огляду',
    'AddAndRemoveValues'=>'Додавання і видалення значень',
    'UserManagement'=>'Керівництво Користувача',
    'RedefineNamingConventions'=>'Переглянути Угоди Про Іменуванні',
    'AuditTrail'=>'Аудит',
    'Extras'=>'Додатка',
    'Announcements'=>'Оголошення',
    'About'=>'Про',
    'Impact'=>'Вплив',
    'Likelihood'=>'Ймовірність',
    'MitigationEffort'=>'Зусилля Щодо Пом\'якшення Наслідків',
    'Change'=>'Зміна',
    'to'=>'щоб',
    'AddANewUser'=>'Додати нового користувача',
    'Type'=>'Тип',
    'FullName'=>'Повна Назва',
    'EmailAddress'=>'Адреса електронної пошти',
    'Teams'=>'Пункт(и)',
    'ALL'=>'Всі',
    'NONE'=>'Ніхто',
    'UserResponsibilities'=>'Обов\'язки Користувача',
    'AbleToSubmitNewRisks'=>'Можливість представляти нові ризики',
    'AbleToModifyExistingRisks'=>'Можливість змінювати існуючі ризики',
    'AbleToCloseRisks'=>'Можливість закривати ризики',
    'AbleToPlanMitigations'=>'Можливість планувати способи',
    'AbleToReviewLowRisks'=>'Зможете ознайомитися низькі ризики',
    'AbleToReviewMediumRisks'=>'Зможете ознайомитися середніх ризики',
    'AbleToReviewHighRisks'=>'Зможете ознайомитися високих ризиків',
    'AllowAccessToConfigureMenu'=>'Дозволити доступ до Налаштування меню',
    'MultiFactorAuthentication'=>'Багатофакторна Автентифікація',
    'None'=>'Ніхто',
    'Add'=>'Додати',
    'ViewDetailsForUser'=>'Переглянути подробиці для користувача',
    'DetailsForUser'=>'Реквізити для користувача',
    'Select'=>'Виберіть',
    'EnableAndDisableUsers'=>'Включення і відключення користувачів',
    'EnableAndDisableUsersHelp'=>'Використовуйте цю функцію, щоб увімкнути або вимкнути логіни користувача при збереженні журналу аудиту дій користувача',
    'DisableUser'=>'Відключити користувача',
    'Disable'=>'Відключити',
    'EnableUser'=>'Дозволяють користувачеві',
    'Enable'=>'Включити',
    'DeleteAnExistingUser'=>'Видалення існуючого користувача',
    'DeleteCurrentUser'=>'Видалити поточного користувача',
    'Delete'=>'Видалити',
    'SendPasswordResetEmailForUser'=>'Відправити скидання пароля електронної пошти для користувача',
    'Category'=>'Категорія',
    'AddNewCategoryNamed'=>'Додавання нової категорії імені',
    'DeleteCurrentCategoryNamed'=>'Видалити поточну категорію імені',
    'Team'=>'Команда',
    'AddNewTeamNamed'=>'Додати нову команду за іменем',
    'DeleteCurrentTeamNamed'=>'Видалити поточну команду за іменем',
    'Technology'=>'Технологія',
    'AddNewTechnologyNamed'=>'Додати нові технології їм.',
    'DeleteCurrentTechnologyNamed'=>'Видалити поточну технології їм.',
    'SiteLocation'=>'Сайт/Розташування',
    'AddNewSiteLocationNamed'=>'Додавання нового сайту під назвою',
    'DeleteCurrentSiteLocationNamed'=>'Видалити поточний сайт/місце імені',
    'ControlRegulation'=>'Регулювання',
    'AddNewControlRegulationNamed'=>'Додати нові правила управління ним',
    'DeleteCurrentControlRegulationNamed'=>'Видалити поточне регулювання управління імені',
    'RiskPlanningStrategy'=>'Стратегії Планування Ризиків',
    'AddNewRiskPlanningStrategyNamed'=>'Додати нові стратегії планування ризиків за іменем',
    'DeleteCurrentRiskPlanningStrategyNamed'=>'Видалення поточної стратегії планування ризиків за іменем',
    'CloseReason'=>'Рядом Причин',
    'AddNewCloseReasonNamed'=>'Додати новий рядом причин назвав',
    'DeleteCurrentCloseReasonNamed'=>'Видалити поточну рядом причин назвав',
    'IWantToReviewHighRiskEvery'=>'Я хочу, щоб кожен відгук високий ризик',
    'IWantToReviewMediumRiskEvery'=>'Я хочу, щоб кожен коментар з середнім ризиком',
    'IWantToReviewLowRiskEvery'=>'Я хочу, щоб кожен відгук низький ризик',
    'days'=>'днів',
    'MyClassicRiskFormulaIs'=>'Моя Класична Формула Ризику',
    'RISK'=>'Ризик',
    'IConsiderHighRiskToBeAnythingGreaterThan'=>'Я вважаю великий ризик бути що-небудь більше, ніж',
    'IConsiderMediumRiskToBeLessThanAboveButGreaterThan'=>'Я вважаю середній ризик буде менше, ніж раніше, але більше',
    'IConsiderlowRiskToBeLessThanAboveButGreaterThan'=>'Я вважаю, низький ризик буде менше, ніж раніше, але більше',
    'HighRisk'=>'Високий Ризик',
    'MediumRisk'=>'Середній Ризик',
    'LowRisk'=>'Низький Ризик',
    'Irrelevant'=>'Неактуально',
    'SubmitYourRisks'=>'Представити ризик',
    'PlanYourMitigations'=>'План пом\'якшення',
    'PerformManagementReviews'=>'Виконувати були',
    'PrioritizeForProjectPlanning'=>'План проекти',
    'ReviewRisksRegularly'=>'Огляд регулярно',
    'DocumentANewRisk'=>'Новий Документ ризик',
    'UseThisFormHelp'=>'Використовуйте цю форму для нового документа ризику для розгляду в процесі управління ризиками',
    'Subject'=>'Тема',
    'ExternalReferenceId'=>'Зовнішня посилання ІД',
    'ControlNumber'=>'Контрольний Номер',
    'Owner'=>'Власник',
    'OwnersManager'=>'Власника менеджер',
    'RiskScoringMethod'=>'Метод Оцінки Ризику',
    'CurrentLikelihood'=>'Поточна Вірогідність',
    'CurrentImpact'=>'Поточне Вплив',
    'RiskAssessment'=>'Оцінка Ризиків',
    'AdditionalNotes'=>'Додаткові Примітки',
    'UNREVIEWED'=>'НЕРОЗГЛЯНУТИХ',
    'PASTDUE'=>'ПРОСТРОЧЕНІ',
    'ID'=>'Ідентифікатор',
    'Status'=>'Статус',
    'Risk'=>'Ризик',
    'DaysOpen'=>'Дні Відкритих',
    'CalculatedRisk'=>'Прорахований Ризик',
    'SubmittedBy'=>'Представлений',
    'NextReviewDate'=>'Наступна Дата Розгляду',
    'CVSSRiskScoring'=>'Ризик CVSS забив',
    'DREADRiskScoring'=>'Страх оцінки ризиків',
    'OWASPRiskScoring'=>'Ризик owasp це забив',
    'CustomRiskScoring'=>'Користувальницькі Оцінки Ризику',
    'MitigationPlanningHelp'=>'Нижче наведено список поданих ризики, які вимагають планування пом\'якшення',
    'ManagementReviewHelp'=>'Нижче наведено список поданих ризики, які вимагають перегляду управління',
    'Submitted'=>'Представлений',
    'MitigationPlanned'=>'Пом\'якшення Планованих',
    'ManagementReview'=>'Управління Коментар',
    'No'=>'Немає',
    'Yes'=>'Так',
    'AddAndRemoveProjects'=>'Додавати і видаляти проекти',
    'AddAndRemoveProjectsHelp'=>'Додавати і видаляти проекти, щоб зв\'язати кілька ризиків для визначення пріоритетів',
    'AddNewProjectNamed'=>'Додати новий проект під назвою',
    'DeleteCurrentProjectNamed'=>'Видалити поточний проект',
    'AddUnassignedRisksToProjects'=>'Додати Непризначені ризиків проектів',
    'AddUnassignedRisksToProjectsHelp'=>'Перетягніть непризначені ризики, зазначені для розгляду в якості проекту у відповідному розділі проекту',
    'PrioritizeProjects'=>'Пріоритети Проектів',
    'PrioritizeProjectsHelp'=>'Рухатися навколо проектів і змінити порядок пріоритетів. Після того, як закінчите, не забудьте натиснути кнопку "оновити", щоб зберегти зміни',
    'SaveRisksToProjects'=>'Збереження ризиків для проектів',
    'RiskId'=>'Ідентифікатор ризик',
    'RiskActions'=>'Дії',
    'ReopenRisk'=>'Відкрийте Ризику',
    'CloseRisk'=>'Закрити Ризику',
    'EditRisk'=>'Редагувати Ризику',
    'PlanAMitigation'=>'План пом\'якшення',
    'PerformAReview'=>'Виконати Огляд',
    'AddAComment'=>'Додати коментар',
    'ShowRiskScoringDetails'=>'Перегляд ризик скорингу подробиці',
    'HideRiskScoringDetails'=>'Приховати Ризиком Скоринг Деталі',
    'Details'=>'Деталі',
    'SubmissionDate'=>'Дата Подачі',
    'DateSubmitted'=>'Дата Подачі',
    'EditDetails'=>'Редагування Деталі',
    'Mitigation'=>'Пом\'якшення',
    'MitigationDate'=>'Дата подання статті пом\'якшення',
    'PlanningStrategy'=>'Стратегія Планування',
    'CurrentSolution'=>'Поточне Рішення',
    'SecurityRequirements'=>'Вимоги Безпеки',
    'SecurityRecommendations'=>'Рекомендації З Безпеки',
    'EditMitigation'=>'Редагувати Пом\'якшення',
    'LastReview'=>'Останній Коментар',
    'ReviewDate'=>'Дата Перевірки',
    'Reviewer'=>'Рецензент',
    'Review'=>'Коментар',
    'NextStep'=>'Наступний Крок',
    'Comments'=>'Коментарі',
    'ViewAllReviews'=>'Подивитися Всі Відгуки',
    'ReviewHistory'=>'Історія Огляд',
    'Comment'=>'Коментар',
    'ClassicRiskScoring'=>'Класичний Підрахунок Ризиків',
    'RiskScoringActions'=>'Забивши Дії Ризику',
    'UpdateClassicScore'=>'Оновлення Класичний Результат',
    'ScoreBy'=>'Рахунок',
    'RISKClassicExp1'=>'Ризик = ( ймовірність х вплив + 2(удар) )',
    'RISKClassicExp2'=>'Ризик = ( ймовірність х вплив + вплив )',
    'RISKClassicExp3'=>'Ризик = ( ймовірність х вплив )',
    'RISKClassicExp4'=>'Ризик = ( ймовірність х вплив + ймовірність )',
    'RISKClassicExp5'=>'Ризик = ( ймовірність х вплив + 2(ймовірність) )',
    'Reason'=>'Причина',
    'CloseOutInformation'=>'Закриття Інформації',
    'SubmitManagementReview'=>'Відправити Відгук Управління',
    'SubmitRiskMitigation'=>'Уявити Мінімізації Ризиків',
    'RiskDashboard'=>'Приладова Панель Ризик',
    'RiskTrend'=>'Тенденції Ризику',
    'AllOpenRisksAssignedToMeByRiskLevel'=>'Всі відкриті ризики доручена мені',
    'AllOpenRisksByRiskLevel'=>'Всі відкриті ризиків за рівнем ризику',
    'AllOpenRisksConsideredForProjectsByRiskLevel'=>'Всі відкриті ризиків вважається проектів за рівнем ризику',
    'AllOpenRisksAcceptedUntilNextReviewByRiskLevel'=>'Всі відкриті ризики приймаються до наступного огляду на рівні ризику,',
    'AllOpenRisksToSubmitAsAProductionIssueByRiskLevel'=>'Всі відкриті ризики представити у вигляді випуску продукції на рівень ризику',
    'AllOpenRisksByScoringMethod'=>'Всі відкриті метод оцінки ризиків',
    'AllClosedRisksByRiskLevel'=>'Всі закриті ризиків за рівнем ризику',
    'SubmittedRisksByDate'=>'Представлений Ризики По Даті',
    'MitigationsByDate'=>'Виправлення По Даті',
    'ManagementReviewsByDate'=>'Управління Коментарі По Даті',
    'ProjectsAndRisksAssigned'=>'Проекти і ризики призначений',
    'OpenRisks'=>'Відкриті Ризики',
    'ClosedRisks'=>'Закриті Ризики',
    'ReportMyOpenHelp'=>'Цей звіт показує всі відкриті ризики, що у поточного користувача в якості власника або керуючого, пов\'язані з ризиком впорядкованих за рівнем ризику',
    'ReportOpenHelp'=>'Цей звіт показує всі відкриті ризиків, упорядкований за ступенем ризику',
    'ReportProjectsHelp'=>'Цей звіт показує всі відкриті ризиків вважається проектів упорядкований за ступенем ризику',
    'ReportNextReviewHelp'=>'Цей звіт показує всі відкриті ризики приймаються до наступного огляду замовив за рівнем ризику',
    'ReportProductionIssuesHelp'=>'Цей звіт показує всі відкриті ризики представлені як виробничі питання, впорядковані за рівнем ризику',
    'ReportRiskScoringHelp'=>'Цей звіт показує всі методи оцінки ризиків та ризиків забив через кожен',
    'ReportClosedHelp'=>'Цей звіт показує всі закриті ризики впорядкованих за рівнем ризику',
    'ReportSubmittedByDateHelp'=>'Цей звіт показує всі ризики впорядковані по даті подачі',
    'ReportMitigationsByDateHelp'=>'Цей звіт показує всі способи планували впорядковані по даті пом\'якшення',
    'ReportMgmtReviewsByDateHelp'=>'Цей звіт показує все управління відгуки впорядковані по даті коментар',
    'ReportProjectsAndRisksHelp'=>'Цей звіт показує всі проекти і ризики, покладені на них',
    'Language'=>'Мова',
    'AllOpenRisksNeedingReview'=>'Всі відкриті ризики, які потребують коментар',
    'ReportReviewNeededHelp'=>'Цей звіт показує всі відкриті ризики необхідності управлінський',
    'CustomValue'=>'Власне Значення',
    'ClosedRisksByDate'=>'Закриті Ризики По Даті',
    'DateClosed'=>'Дата Закриття',
    'ClosedBy'=>'Закрито',
    'ReportClosedByDateHelp'=>'Цей звіт показує всі ризики впорядковані по даті закриття',
    'AllOpenRisksByTeam'=>'Всі відкриті ризики команда',
    'ReportRiskTeamsHelp'=>'Цей звіт показує всі команди і ризиків, присвоєних кожному',
    'Unassigned'=>'Непризначені',
    'AllOpenRisksByTechnology'=>'Всі Відкриті Ризики За Технологією',
    'ReportRiskTechnologiesHelp'=>'Цей звіт показує всі технології і ризики, присвоєних кожному',
    'RiskLevel'=>'Рівень Ризику',
    'BasedOnTheCurrentRiskScore'=>'На основі ваша оцінка ризику, ваш наступний огляд дата буде ',
    'WouldYouLikeToUseADifferentDate'=>'Хотіли б ви використовувати замість іншу дату?',
    'RisksOpenedAndClosedOverTime'=>'Відкритий ризики і закрито з часом',
    'AllRiskScoresAreAdjusted'=>'Всі оцінки ризику підігнати за шкалою 0-10.',
    'DetermineProjectStatus'=>'Визначити Статус Проекту',
    'ProjectStatusHelp'=>'Розмістити проекти на сегменти залежно від поточного стану.',
    'ActiveProjects'=>'Активні Проекти',
    'OnHoldProjects'=>'На Утримання Проектів',
    'CompletedProjects'=>'Завершені Проекти',
    'CancelledProjects'=>'Скасовані Проекти',
    'UpdateProjectStatuses'=>'Проект Оновлення Статусів',
    'HighRiskReport'=>'Доповідь Високий Ризик',
    'TotalOpenRisks'=>'Загальна Відкрита Ризики',
    'TotalHighRisks'=>'Загальна Високими Ризиками',
    'HighRiskPercentage'=>'Високий Відсоток Ризику',
    'UpdateClassicScore'=>'Оновлення Класичний Результат',
    'CurrentLikelihood'=>'Поточна Вірогідність',
    'CurrentImpact'=>'Поточне Вплив',   
    'UpdateCVSSScore'=>'Оновлення CVSS результат',
    'BaseScoreMetrics'=>'Базові Показники Результат',
    'AttackVector'=>'Вектор Атаки',
    'AttackComplexity'=>'Складність Атаки',
    'Authentication'=>'Автентифікація',
    'ConfidentialityImpact'=>'Вплив Конфіденційність',
    'IntegrityImpact'=>'Вплив Цілісності',
    'AvailabilityImpact'=>'Доступність',
    'TemporalScoreMetrics'=>'Тимчасові Показники Результат',
    'Exploitability'=>'Вичерпності',
    'RemediationLevel'=>'Рівень Відновлення',
    'ReportConfidence'=>'Впевненість Доповідь',
    'EnvironmentalScoreMetrics'=>'Показники Екологічна Оцінка',
    'CollateralDamagePotential'=>'Забезпечення Потенційного Збитку',
    'TargetDistribution'=>'Цілерозподіл',
    'ConfidentialityRequirement'=>'Вимога Конфіденційності',
    'IntegrityRequirement'=>'Вимога Цілісності',
    'AvailabilityRequirement'=>'Вимога Наявності',
    'UpdateDREADScore'=>'Боюся оновлювати результат',
    'DamagePotential'=>'Потенційного Збитку',
    'Reproducibility'=>'Відтворюваність',
    'AffectedUsers'=>'Постраждалі Користувачі',
    'Discoverability'=>'Обнаруживаемость',
    'UpdateOWASPScore'=>'Оновити список owasp результат',
    'ThreatAgentFactors'=>'Небезпечним Фактори Агент',
    'SkillLevel'=>'Рівень Кваліфікації',
    'Motive'=>'Мотив',
    'Opportunity'=>'Можливість',
    'Size'=>'Розмір',
    'VulnerabilityFactors'=>'Фактори Вразливості',
    'EaseOfDiscovery'=>'Легкість відкриття',
    'EaseOfExploit'=>'Простота використовувати',
    'Awareness'=>'Усвідомлення',
    'IntrusionDetection'=>'Виявлення Вторгнень',
    'TechnicalImpact'=>'Технічне Вплив',
    'LossOfConfidentiality'=>'Втрата конфіденційності',
    'LossOfIntegrity'=>'Втрата цілісності',
    'LossOfAvailability'=>'Втрати доступності',
    'LossOfAccountability'=>'Збитки у звітності',
    'BusinessImpact'=>'Вплив На Бізнес',
    'FinancialDamage'=>'Фінансовий Збиток',
    'ReputationDamage'=>'Збиток Репутації',
    'NonCompliance'=>'Недотримання',
    'PrivacyViolation'=>'Порушення Конфіденційності',
    'UpdateCustomScore'=>'Настроювані Результат',
    'ManuallyEnteredValue'=>'Введене Значення',
    'ScoreByClassic'=>'Результат класичний',
    'ScoreByCVSS'=>'Результат по CVSS',
    'ScoreByDREAD'=>'Результат страх',
    'ScoreByOWASP'=>'Рахунок фонду',
    'ScoreByCustom'=>'Результат користувача',
    'BaseVector'=>'Базовий Вектор',
    'TemporalVector'=>'Часовий Вектор',
    'EnvironmentalVector'=>'Екологічний Вектор',
    'SupportingDocumentation'=>'Супровідна Документація',
    'Import'=>'Імпорт',
    'Export'=>'Експорт',
    'ActivateTheImportExportExtra'=>'Активувати імпорт/експорт додаткових',
    'PrintableView'=>'Вид Для Друку',
    'GroupBy'=>'Група',
    'IncludedColumns'=>'Включені Стовпці',
    'AllRisks'=>'Всі Ризики',
    'DynamicRiskReport'=>'Динамічний Звіт Про Ризики',
    'ObsoleteReports'=>'Застарілі Звіти',
    'Project'=>'Проект',
    'SortBy'=>'Сортувати По',
    'MonthSubmitted'=>'Місяць Представив',
    'AssetManagement'=>'Управління Активами',
    'AutomatedDiscovery'=>'Автоматичне Виявлення',
    'BatchImport'=>'Пакетний Імпорт',
    'ManageAssets'=>'Управління Активами',
    'AssetValuation'=>'Оцінка Вартості Активів',
    'AllowAccessToAssetManagementMenu'=>'Дозволити доступ до меню "Управління активами" ',
    'AutomatedDiscoveryHelp'=>'Дізнайтеся про все, поточний IP-адрес при введенні IP-адрес. Поточний IP-адресу буде додано у список активів. Допустимі формати:',
    'IPRange'=>'Діапазон IP-адрес',
    'Search'=>'Пошук',
    'AddANewAsset'=>'Додати новий Актив',
    'DeleteAnExistingAsset'=>'Видалити існуючий Актив',
    'AssetName'=>'Найменування Активу',
    'IPAddress'=>'IP-адресу',
    'AssetWasAddedSuccessfully'=>'Актив було успішно додано.',
    'AssetWasDeletedSuccessfully'=>'Актив був успішно видалений.',
    'ThereWasAProblemAddingTheAsset'=>'Виникла проблема з додаванням актив.',
    'ThereWasAProblemDeletingTheAsset'=>'Виникла проблема видалення активу.',
    'ComingSoon'=>'Скоро',
    'ExportRisks'=>'Експортні Ризики',
    'ExportMitigations'=>'Експорт Виправлень',
    'ExportReviews'=>'Відгуки Експорт',
    'ExportCombined'=>'Експорт Змішана',
    'MitigatedBy'=>'Пом\'якшено',
    'MitigationId'=>'Ідентифікатор пом\'якшення',
    'ReviewId'=>'Коментар ІД',
    'AffectedAssets'=>'Порушених Активів',
    'Activate'=>'Активувати',
    'DeleteRisks'=>'Видалити Ризики',
    'DeletedRisksCannotBeRecovered'=>'Виключити Ризики Не Можуть Бути Відновлені',
    'RisksDeletedSuccessfully'=>'Ризик(и) успішно видалений',
    'ThereWasAProblemDeletingTheRisk'=>'Виникла проблема видалення ризику(ів)',
    'Activated'=>'Активоване',
    'IWantToReviewInsignificantRiskEvery'=>'Я хочу, щоб кожен огляд незначний ризик',
    'Insignificant'=>'Незначні',
    'IConsiderVeryHighRiskToBeAnythingGreaterThan'=>'Я вважаю, дуже високий ризик бути що-небудь більше, ніж',
    'IConsiderHighRiskToBeLessThanAboveButGreaterThan'=>'Я вважаю високий ризик менше, ніж раніше, але більше',
    'VeryHigh'=>'Дуже Висока',
    'VeryHighRisk'=>'Дуже Високий Ризик',
    'IWantToReviewVeryHighRiskEvery'=> 'Я хочу, щоб кожен відгук дуже високий ризик',
    'AbleToReviewVeryHighRisks'=>'Можливість огляду дуже високі ризики',
    'AbleToReviewInsignificantRisks'=>'Зможете ознайомитися незначні ризики',
    'TotalVeryHighRisks'=>'Все Дуже Високі Ризики',
    'VeryHighRiskPercentage'=>'Дуже Високий Відсоток Ризику',
    'AllTeams'=>'Всі Команди',
    'FileUploadSettings'=>'Файл Параметрів Завантаження',
    'AllowedFileTypes'=>'Дозволені Типи Файлів',
    'AddNewFileTypeOf'=>'Додати новий тип файла',
    'DeleteCurrentFileTypeOf'=>'Видалити поточну Тип файлу',
    'MaximumUploadFileSize'=>'Максимальний Розмір Завантажуваного Файлу',
    'Bytes'=>'Байт',
    'CheckAll'=>'Перевірити Всі',
    'CheckAllRiskMgmt'=>'Перевірити Все Управління Ризиками',
    'CheckAllAssetMgmt'=>'Перевірте ВСІ Управління Активами',
    'CheckAllConfigure'=>'Перевірте Всі Налаштування',
    'MitigationTeam'=>'Команда Пом\'якшення',
    'ImportRisks'=>'Імпорт Ризики',
    'ImportAssets'=>'Імпорт Активів',
    'AssetValue'=>'Вартість Активів',
    'Register'=>'Зареєструватися',
    'RegisterSimpleRisk'=>'Зареєструвати SimpleRisk',
    'RegistrationText'=>'Зареєструвавшись SimpleRisk ви зможете надати свою контактну інформацію, так що ви можете бути в курсі останньої інформації реліз та важливі попередження безпеки. Ваші дані ніколи не будуть продані третій стороні. Зареєстровані випадки також мають можливість бути збережені і оновлені з одним натисненням кнопки.',
    'RegistrationInformation'=>'Реєстраційні Відомості',
    'Company'=>'Компанія',
    'JobTitle'=>'Посаду',
    'Phone'=>'Телефон',
    'UpgradeSimpleRisk'=>'SimpleRisk Оновлення',
    'UpgradeInstructions'=>'Цей розділ використовує оновлення додаткових. Щоб переконатися, що у вас встановлена остання версія, виберіть "оновити", перереєструватися, і оновіть сторінку.',
    'NoUpgradeNeeded'=>'Оновлення не потрібно на цей раз.',
    'BackupDatabase'=>'Резервне копіювання бази даних',
    'UpgradeApplication'=>'Оновити Додаток',
    'UpgradeDatabase'=>'Оновити базу даних',
    'CustomExtras'=>'Користувальницькі Додатки',
    'CustomExtrasText'=>'Було б круто, якщо б все було безкоштовно, так? Сподіваюся базової платформи SimpleRisk здатний обслуговувати всі Ваші потреби в управлінні ризиками. Але, якщо ви опинитеся бажаючи ще більше функціональності, ми розробили серію "Екстра", які будуть робити саме це.',
    'Upgrade'=>'Оновлення',
    'Install'=>'Установіть',
    'Purchase'=>'Купити',
    'PasswordPolicy'=>'Політики Паролів',
    'MinimumNumberOfCharacters'=>'Мінімальна кількість символів',
    'RequireAlphaCharacter'=>'Вимагає Альфа-Символ',
    'RequireUpperCaseCharacter'=>'Потрібно Верхній Регістр Символів',
    'RequireLowerCaseCharacter'=>'Вимагають Нижнього Регістру',
    'RequireNumericCharacter'=>'Вимагають Числовий Символ',
    'RequireSpecialCharacter'=>'Вимагають Спеціального Символу',
    'Enabled'=>'Включено',
    'RiskPyramid'=>'Піраміда Ризиків',
    'RiskPyramidDescription'=>'Ризик вище піраміди дозволяє показати розподіл ризиків між різними рівнями ризику. Топ важкий піраміда може бути ознакою того, що ваша організація бере на себе занадто багато ризику.',
    'RiskAdvice'=>'Поради Ризик',
    'AddDeleteAssets'=>'Додавання І Видалення Активів',
    'EditAssets'=>'Зміна Активів',
    'AutomaticAssetValuation'=>'Автоматична Оцінка Вартості Активів',
    'ManualAssetValuation'=>'Керівництво По Оцінці Активів',
    'MinimumValue'=>'Мінімальне Значення',
    'MaximumValue'=>'Максимальне Значення',
    'ValueRange'=>'Діапазон Значень',
    'DefaultAssetValuation'=>'Оцінка Вартості Активу За Замовчуванням',
    'Default'=>'За замовчуванням',
    'RisksAndAssets'=>'Ризики та активи',
    'Report'=>'Звіт',
    'RisksByAsset'=>'Ризики активів',
    'AssetsByRisk'=>'Активів за ступенем ризику',
    'MaximumQuantitativeLoss'=>'Максимальні Кількісні Втрати',
    'MitigationOwner'=>'Власник Пом\'якшення',
    'MitigationCost'=>'Витрат По Пом\'якшенню Наслідків',
    'RiskColumns'=>'Стовпці Ризик',
    'MitigationColumns'=>'Колони Пом\'якшення',
    'ReviewColumns'=>'Колонки Огляд',
    'ChangeStatus'=>'Зміна Статусу',
    'SetRiskStatusTo'=>'Встановити Статус Ризику',
    'AddNewStatusNamed'=>'Додати новий статус імені',
    'DeleteStatusNamed'=>'Статус вилучення імені',
    'DefaultCurrencySymbol'=>'Символ Валюти За Замовчуванням',
    'DefaultValues'=>'Значення За Замовчуванням',
    'RiskSource'=>'Джерело Ризику',
    'AddNewSourceNamed'=>'Додати нове джерело з імені',
    'DeleteSourceNamed'=>'Видалити джерело імені',
    'CheckAllAssessments'=>'Перевірити Всі Оцінки',
    'AllowAccessToAssessmentsMenu'=>'Дозволити доступ до меню "оцінки" ',
    'Assessments'=>'Оцінок',
    'AvailableAssessments'=>'Наявні Оцінки',
    'PendingRisks'=>'Відстрочені Ризики',
    'CreateAssessment'=>'Створити Оцінки',
    'EditAssessment'=>'Редагувати Оцінки',
    'Overview'=>'Огляд',
    'OpenVsClosed'=>'Відкриті проти закритих',
    'MitigatedVsUnmitigated'=>'Пом\'якшити проти Неподслащенной',
    'ReviewedVsUnreviewed'=>'Розглянув проти Unreviewed',
    'OpenedRisks'=>'Відкритий Ризики',
    'MailSettings'=>'Налаштування Пошти',
    'TransportAgent'=>'Транспортний Агент',
    'FromName'=>'Від Імені',
    'FromEmail'=>'З Електронної Пошти',
    'ReplyToName'=>'Ім\'я Відправника',
    'ReplyToEmail'=>'Адреси Електронної Пошти',
    'Host'=>'Господар',
    'SMTPAuthentication'=>'Перевірку автентичності SMTP',
    'Encryption'=>'Шифрування',
    'Port'=>'Порт',
    'Next'=>'Далі',
    'NewAssessmentQuestion'=>'Новий Питання Оцінки',
    'Question'=>'Питання',
    'RiskScore'=>'Оцінка Ризику',
    'SubmitRisk'=>'Представляти Небезпеку',
    'Answer'=>'Відповідь',
    'AddQuestion'=>'Додати Питання',
    'SaveAssessment'=>'Зберегти Оцінки',
    'SendAssessment'=>'Відправити Оцінки',
    'DeleteAssessment'=>'Видалити Оцінки',
    'AssessmentName'=>'Ім\'я Оцінка',
    'SendTo'=>'Відправити',
    'ActiveAssessments'=>'Активний Оцінок',
    'SentTo'=>'Відправлено',
    'From'=>'З',
    'Key'=>'Ключ',
    'GoToSSOLoginPage'=>'Перейти на сторінку системи єдиного входу',
    'APIKey'=>'Ключ API',
    'GenerateAPIKey'=>'Згенерувати ключ API',
    'RotateAPIKey'=>'Ключ повернути за API',
    'InvalidateAPIKey'=>'Ключові недійсним за API',
    'Deactivate'=>'Відключити',
    'ImportExportExtra'=>'Імпорт-Експорт',
    'SaveDetails'=>'Зберегти Деталі',
    'ClearForm'=>'Чіткі Форми',
    'SaveMitigation'=>'Зберегти Пом\'якшення',
    'Cancel'=>'Скасувати',
    'SubmitReview'=>'Відправити Відгук',
    'UnassignedRisks'=>'Непризначені Ризики',
    'DisableRegistrationNotice'=>'Відключити Повідомлення Про Реєстрацію',
    'UserPolicy'=>'Політики Користувачів',
    'UseCaseSensitiveValidationOfUsername'=>'У разі використання конфіденційної перевірки імені користувача',
    'MitigationPlanning'=>'Планована Дата Пом\'якшення',
    'AssetDetails'=>'Відомості Про Актив',
    'RiskList'=>'Список Ризиків',
    'Are you sure you want to close the risk? All changes will be lost!'=>'Ви впевнені, що хочете закрити ризику? Всі зміни будуть втрачені!',
    'MinimumPasswordAge' => 'Мінімальний Термін Дії Пароля',
    'MaximumPasswordAge' => 'Максимальний Термін Дії Пароля',
    'MaximumAttemptsLockout' => 'Максимальне Число Спроб Блокування',
    'MaximumAttemptsLockoutTime' => 'Максимальне Число Спроб, Час Блокування',
    'attempts' => 'спроби',
    'minutes' => 'хвилин',
    'AccountLockedOut' => 'Обліковий Запис Заблокований',
    'AccountLockoutPolicy' => 'Політика Блокування Облікового Запису',
    'ImportExportIsDeactivated' => 'Імпорт-експорт відключені',
    'PurchaseTheExtra' => 'Придбати додаткову',
    'ExpandAll' => 'Розгорнути Все',
    'ConditionMessageForMinChar' => 'Пароль повинен містити мінімум $min_chars символів.',
    'ConditionMessageForAlpha' => 'Пароль повинен містити Альфа-символу.',
    'ConditionMessageForUppercase' => 'Пароль повинен містити символи прописні.',
    'ConditionMessageForLowercase' => 'Пароль повинен містити рядкові символи.',
    'ConditionMessageForDigit' => 'Пароль повинен містити цифри.',
    'ConditionMessageForSpecialchar' => 'Пароль повинен містити спеціальний символ.',
    'ConditionMessageForMinPasswordAge' => 'Пароль можна оновити час останнього оновлення мінімуму $min_password_age днів .',
    'TrustedDomains' => 'Довірених Доменів',
    'SimpleRiskColumnMapping' => 'Зіставлення Стовпців SimpleRisk',
    'Mapping' => 'Зіставлення',
    'Optional' => 'Необов\'язково',
    'SaveMappingAs' => 'Зберегти Відображення, Як',
    'EncryptionLevel' => 'Рівень Шифрування',
    'Level' => 'Рівень',
    'Description' => 'Опис',
    'ShowRiskScoreOverTime' => 'Показати Оцінки Ризику З Плином Часу',
    'HideRiskScoreOverTime' => 'Приховати Оцінка Ризику З Плином Часу',
    'ReviewRegularlyHelp' => 'Нижче представлений список всіх ризиків, відсортований за рукописом, прострочені, і наступна Дата перевірки',
    'RiskScoringHistory' => 'Історія Оцінки Ризиків',
    'RiskAddPermissionMessage' => 'Ви не маєте дозволу представити нові ризики. Будь-які ризики, які ви намагаєтеся уявити, не буде записаний. Будь ласка, зв\'яжіться з Адміністратором форуму, якщо ви відчуваєте, що ви досягли це повідомлення по помилку.',
    'SubjectRiskCannotBeEmpty' => 'Предметом ризику може бути порожнім',
    'InvalidRiskID' => 'Некоректний ідентифікатор ризик',
    'Success' => 'Успіх',
    'RiskUpdatePermissionMessage' => 'Ви не маєте дозволу на зміну ризиків. Будь-які ризики, які ви намагаєтеся змінювати не буде записаний. Будь ласка, зв\'яжіться з Адміністратором форуму, якщо ви відчуваєте, що ви досягли це повідомлення по помилку.',
    'RiskReviewPermission' => 'Ви не маєте дозволу для розгляду $risk_level рівня ризиків. Будь-які коментарі, ви намагаєтеся уявити, не буде записаний. Будь ласка, зв\'яжіться з адміністратором форуму, якщо ви відчуваєте, що ви досягли це повідомлення по помилку.',
    'DateAndTime' => 'Дата і час',
    'mCryptWarning' => 'Розширення "mcrypt" має бути встановлено для додаткового шифрування для належної роботи.  Будь ласка, встановіть його, щоб продовжити.',
    'APIInCompatibleWithEncryptionLevel' => 'API несумісний із рівень шифрування користувача з додаткових на зашифровані бази даних.',
    'UnauthenticatedAccessInAPI' => 'Неавтентифіковані доступу.  Будь ласка Увійдіть або надати ключ використовувати SimpleRisk API.',
    'ResetPasswordMessageInUserLevelEncryption' => 'Не можна скинути пароль, тому що цей користувач є у рівні користувача шифрування. Зверніться до адміністратора.',
    'YouNeedToSpecifyAnIdParameter' => 'Вам потрібно вказати ідентифікатор параметра.',
    'NoMitigation' => 'Немає немає вказаного пом\'якшення наслідків.',
    'NoReview' => 'Немає немає вказаного відгук.',
    'MysqldumpPathWasSavedSuccessfully' => 'Mysqldump шлях успішно збережено.',
    'UnavailableMysqldumpService' => 'Немає служби обмежуєте \'mysqldump\' на сервері. Будь ласка, встановіть абсолютної mysqldump служби шлях.',
    'AllOpenRisksByTeamByLevel' => 'Всі відкриті ризики команда за рівнем ризику',
    'Unknown' => 'Невідомо',
    'AllOwners' =>'Всі ризики',
    'AllOwnersManagers' => 'Все власник менеджерів',
    'AddNewReviewNamed' => 'Додати новий огляд названий',
    'DeleteCurrentReviewNamed' => 'Видалити з нинішнім оглядом названий',
    'AddNewNextstepNamed' => 'Додати новий наступного кроку',
    'DeleteCurrentNextstepNamed' => 'Видалити поточне наступного кроку названа',
    'Settings' => 'Параметри',
    'EnablePopupWindowsForTextBoxes' => 'Дозволити виринаючі вікна для текстових полів',
    'PasswordNoLongerUse' => 'Цей новий пароль обмежена, так що більше не використовується.  Будь ласка, спробуйте інший пароль',
    'RememberTheLast' => 'RememberTheLast',
    'Passwords' => 'Паролі',
    'NoOwner' => 'Ні власник',
    'NoOwnersManager' => 'Керівника не власників',
    'RiskAverageOverTime' => 'Ризик середнім часом',
    'AverageRiskScore' => 'Середня оцінка ризику',
    'Year' => 'Рік',
    'Month' => 'Місяць',
    'Day' => 'День',
    'FilterByAffectedAsset' => 'Фільтрувати за постраждалих активами',
    'RisksOpened' => 'Ризики на відкрив',
    'RisksClosed' => 'Ризики, закриті',
    'HealthCheck' => 'Перевіркою справності',
    'RequirePasswordChangeOnLogin' => 'Вимагати змінення пароля на вхід',
    'PasswordChangeRequired' => 'Необхідно змінити пароль перед Логін.',
    '' => '',
);

?>
