<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$mod_strings = array (
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',

    //END DON'T CONVERT

    // Dashboard Names
    'LBL_LEADS_LIST_DASHBOARD' => 'Інформаційна панель списку інтересів',
    'LBL_LEADS_RECORD_DASHBOARD' => 'Інформаційна панель записів інтересів',

    'ERR_DELETE_RECORD' => 'Необхідно вказати номер запису, щоб видалити інтерес.<br />.',
    'LBL_ACCOUNT_DESCRIPTION'=> 'Опис контрагента',
    'LBL_ACCOUNT_ID'=>'Контрагент (ID)',
    'LBL_ACCOUNT_NAME' => 'Назва контрагента:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Активності',
    'LBL_ADD_BUSINESSCARD' => 'Додати візитну картку',
    'LBL_ADDRESS_INFORMATION' => 'Відомості адреси',
    'LBL_ALT_ADDRESS_CITY' => 'Альтернативна адреса - Місто',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Альтернативна адреса - Країна',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Альтернативна адреса - Поштовий індекс',
    'LBL_ALT_ADDRESS_STATE' => 'Альтернативна адреса - Область',
    'LBL_ALT_ADDRESS_STREET_2' => 'Альтернативна адреса - Вулиця 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Альтернативна адреса - Вулиця 3',
    'LBL_ALT_ADDRESS_STREET' => 'Альтернативна адреса - Вулиця',
    'LBL_ALTERNATE_ADDRESS' => 'Інша адреса:',
    'LBL_ANY_ADDRESS' => 'Адреса:',
    'LBL_ANY_EMAIL' => 'Email:',
    'LBL_ANY_PHONE' => 'Телефон:',
    'LBL_ASSIGNED_TO_NAME' => 'Відповідальний (-а)',
    'LBL_ASSIGNED_TO_ID' => 'Відповідальний (-а):',
    'LBL_BACKTOLEADS' => 'Назад до інтересів',
    'LBL_BUSINESSCARD' => 'Конвертувати інтерес',
    'LBL_CITY' => 'Місто:',
    'LBL_CONTACT_ID' => 'Контакт (ID)',
    'LBL_CONTACT_INFORMATION' => 'Огляд',
    'LBL_CONTACT_NAME' => 'Назва інтересу:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Інтерес - Угода:',
    'LBL_CONTACT_ROLE' => 'Роль:',
    'LBL_CONTACT' => 'Інтерес:',
    'LBL_CONVERT_BUTTON_LABEL' => 'Конвертувати',
    'LBL_SAVE_CONVERT_BUTTON_LABEL' => 'Зберегти й конвертувати',
    'LBL_CONVERT_PANEL_OPTIONAL' => '(необов&#39;язково)',
    'LBL_CONVERT_ACCESS_DENIED' => 'У вас немає прав для редагування модулів необхідних для конвертації попереднього контакту: {{requiredModulesMissing}}',
    'LBL_CONVERT_FINDING_DUPLICATES' => 'Пошук дублікатів...',
    'LBL_CONVERT_IGNORE_DUPLICATES' => 'Ігнорувати і створити новий',
    'LBL_CONVERT_BACK_TO_DUPLICATES' => 'Повернутися до дублікатів',
    'LBL_CONVERT_SWITCH_TO_CREATE' => 'Створити новий',
    'LBL_CONVERT_SWITCH_TO_SEARCH' => 'Пошук',
    'LBL_CONVERT_DUPLICATES_FOUND' => 'знайдено {{duplicateCount}} дублікатів',
    'LBL_CONVERT_CREATE_NEW' => 'Новий {{moduleName}}',
    'LBL_CONVERT_SELECT_MODULE' => 'Select {{moduleName}}',
    'LBL_CONVERT_SELECTED_MODULE' => 'Selecting {{moduleName}}',
    'LBL_CONVERT_CREATE_MODULE' => 'Create {{moduleName}}',
    'LBL_CONVERT_CREATED_MODULE' => 'Creating {{moduleName}}',
    'LBL_CONVERT_RESET_PANEL' => 'Скинути',
    'LBL_CONVERT_COPY_RELATED_ACTIVITIES' => 'Copy related activities to',
    'LBL_CONVERT_MOVE_RELATED_ACTIVITIES' => 'Move related activities to',
    'LBL_CONVERT_MOVE_ACTIVITIES_TO_CONTACT' => 'Перемістити пов’язану активність у запис контакта',
    'LBL_CONVERTED_ACCOUNT'=>'Конвертований контрагент:',
    'LBL_CONVERTED_CONTACT' => 'Конвертований контакт:',
    'LBL_CONVERTED_OPP'=>'Конвертована угода:',
    'LBL_CONVERTED'=> 'Конвертований',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Конвертувати інтерес',
    'LBL_CONVERTLEAD' => 'Конвертувати інтерес',
    'LBL_CONVERTLEAD_WARNING' => 'Попередження: Статус даного попереднього контакту встановлений в значення "Перетворений". Можливо, відповідний контакт і / або контрагент вже були створені. Якщо ви хочете продовжити перетворення, натисніть на кнопку "Зберегти", в іншому випадку натисніть на кнопку "Скасувати".',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Можливий контакт:',
    'LBL_CONVERTLEAD_ERROR' => 'Неможливо конвертувати інтерес',
    'LBL_CONVERTLEAD_FILE_WARN' => 'Ви успішно конвертували лід {{leadName}}, але виникла проблема при вивантаженні вкладень в одну або більше записів',
    'LBL_CONVERTLEAD_SUCCESS' => 'Ви успішно конвертували інтерес {{leadName}}',
    'LBL_COUNTRY' => 'Країна:',
    'LBL_CREATED_NEW' => 'Створити новий',
	'LBL_CREATED_ACCOUNT' => 'Створений новий контрагент',
    'LBL_CREATED_CALL' => 'Створений новий дзвінок',
    'LBL_CREATED_CONTACT' => 'Створений новий контакт',
    'LBL_CREATED_MEETING' => 'Створена нова зустріч',
    'LBL_CREATED_OPPORTUNITY' => 'Створена нова угода',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Інтереси',
    'LBL_DEPARTMENT' => 'Відділення:',
    'LBL_DESCRIPTION_INFORMATION' => 'Опис інформації',
    'LBL_DESCRIPTION' => 'Опис:',
    'LBL_DO_NOT_CALL' => 'Не дзвонити:',
    'LBL_DUPLICATE' => 'Можливо, цей інтерес є дублікатом',
    'LBL_EMAIL_ADDRESS' => 'Адреса Email:',
    'LBL_EMAIL_OPT_OUT' => 'Відмова від отримання Email-повідомлень:',
    'LBL_EXISTING_ACCOUNT' => 'Використаний існуючий контрагент',
    'LBL_EXISTING_CONTACT' => 'Використаний існуючий контакт',
    'LBL_EXISTING_OPPORTUNITY' => 'Використана існуюча угода',
    'LBL_FAX_PHONE' => 'Факс:',
    'LBL_FIRST_NAME' => 'Ім&#39;я:',
    'LBL_FULL_NAME' => 'Повне ім&#39;я:',
    'LBL_HISTORY_SUBPANEL_TITLE'=>'Історія',
    'LBL_HOME_PHONE' => 'Телефон (дом.)',
    'LBL_IMPORT_VCARD' => 'Імпорт візитної картки',
    'LBL_IMPORT_VCARD_SUCCESS' => 'Інтерес з візитної картки створений успішно',
    'LBL_VCARD' => 'Візитна картка',
    'LBL_IMPORT_VCARDTEXT' => 'Автоматично створити новий інтерес, імпортуючи візитну картку з файлової системи.',
    'LBL_INVALID_EMAIL'=>'Недійсний Email:',
    'LBL_INVITEE' => 'Прямі звіти',
    'LBL_LAST_NAME' => 'Прізвище:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Опис джерела інтереса:',
    'LBL_LEAD_SOURCE' => 'Джерело попереднього контакту:',
    'LBL_LIST_ACCEPT_STATUS' => 'Прийняти статус',
    'LBL_LIST_ACCOUNT_NAME' => 'Контрагент',
    'LBL_LIST_CONTACT_NAME' => 'Назва інтересу',
    'LBL_LIST_CONTACT_ROLE' => 'Роль',
    'LBL_LIST_DATE_ENTERED' => 'Дата створення',
    'LBL_LIST_EMAIL_ADDRESS' => 'Ел. пошта',
    'LBL_LIST_FIRST_NAME' => 'Ім&#39;я',
    'LBL_VIEW_FORM_TITLE' => 'Переглянути інтерес',
    'LBL_LIST_FORM_TITLE' => 'Список інтересів',
    'LBL_LIST_LAST_NAME' => 'Прізвище',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Опис джерела інтереса',
    'LBL_LIST_LEAD_SOURCE' => 'Джерело інтереса',
    'LBL_LIST_MY_LEADS' => 'Мої інтереси',
    'LBL_LIST_NAME' => 'Назва',
    'LBL_LIST_PHONE' => 'Телефон (роб.)',
    'LBL_LIST_REFERED_BY' => 'Запропонований:',
    'LBL_LIST_STATUS' => 'Статус',
    'LBL_LIST_TITLE' => 'Посада',
    'LBL_MOBILE_PHONE' => 'Телефон (моб.):',
    'LBL_MODULE_NAME' => 'інтереси',
    'LBL_MODULE_NAME_SINGULAR' => 'Інтерес',
    'LBL_MODULE_TITLE' => 'Інтереси: Головна',
    'LBL_NAME' => 'Назва:',
    'LBL_NEW_FORM_TITLE' => 'Новий інтерес',
    'LBL_NEW_PORTAL_PASSWORD' => 'Новий пароль до порталу:',
    'LBL_OFFICE_PHONE' => 'Телефон (роб.):',
    'LBL_OPP_NAME' => 'Назва угоди',
    'LBL_OPPORTUNITY_AMOUNT' => 'Сума угоди:',
    'LBL_OPPORTUNITY_ID'=>'Угода (ID)',
    'LBL_OPPORTUNITY_NAME' => 'Назва угоди',
    'LBL_CONVERTED_OPPORTUNITY_NAME' => 'Назва реалізованої угоди',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Інший Email:',
    'LBL_OTHER_PHONE' => 'Інший телефон:',
    'LBL_PHONE' => 'Телефон:',
    'LBL_PORTAL_ACTIVE' => 'Портал активний:',
    'LBL_PORTAL_APP'=> 'Додаток порталу',
    'LBL_PORTAL_INFORMATION' => 'Інформація на порталі',
    'LBL_PORTAL_NAME' => 'Назва порталу:',
    'LBL_PORTAL_PASSWORD_ISSET' => 'Встановлений пароль до порталу:',
    'LBL_POSTAL_CODE' => 'Поштовий індекс:',
    'LBL_STREET' => 'Вулиця',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Основна адреса - Місто',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Основна адреса - Країна',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Основна адреса - Поштовий індекс',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Основна адреса - Область',
    'LBL_PRIMARY_ADDRESS_STREET_2'=>'Основна адреса - Вулиця 2',
    'LBL_PRIMARY_ADDRESS_STREET_3'=>'Основна адреса - Вулиця 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Основна адреса - Вулиця',
    'LBL_PRIMARY_ADDRESS' => 'Основна адреса:',
    'LBL_RECORD_SAVED_SUCCESS' => 'Ви успішно створили {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{full_name}}</a>.',
    'LBL_REFERED_BY' => 'Запропонований:',
    'LBL_REPORTS_TO_ID'=>'Керівник (ID)',
    'LBL_REPORTS_TO' => 'Керівник:',
    'LBL_REPORTS_FROM' => 'Звіти від:',
    'LBL_SALUTATION' => 'Вітання',
    'LBL_MODIFIED'=>'Змінено:',
	'LBL_MODIFIED_ID'=>'Змінено (Id)',
	'LBL_CREATED'=>'Створено',
	'LBL_CREATED_ID'=>'Створено (Id)',
    'LBL_SEARCH_FORM_TITLE' => 'Пошук інтересів',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Обрати перевірені інтереси',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Обрати перевірені інтереси',
    'LBL_STATE' => 'Область:',
    'LBL_STATUS_DESCRIPTION' => 'Опис статуса:',
    'LBL_STATUS' => 'Статус:',
    'LBL_TITLE' => 'Посада:',
    'LBL_UNCONVERTED'=> 'неконвертований',
    'LNK_IMPORT_VCARD' => 'Створити інтерес з візитної картки',
    'LNK_LEAD_LIST' => 'Переглянути інтереси',
    'LNK_NEW_ACCOUNT' => 'Створити контрагент',
    'LNK_NEW_APPOINTMENT' => 'Створити домовленість про зустріч',
    'LNK_NEW_CONTACT' => 'Створити контакт',
    'LNK_NEW_LEAD' => 'Створити інтерес',
    'LNK_NEW_NOTE' => 'Створити примітку',
    'LNK_NEW_TASK' => 'Створити задачу',
    'LNK_NEW_CASE' => 'Створити звернення',
    'LNK_NEW_CALL' => 'Зареєструвати дзвінок',
    'LNK_NEW_MEETING' => 'Запланувати зустріч',
    'LNK_NEW_OPPORTUNITY' => 'Створити угоду',
	'LNK_SELECT_ACCOUNTS' => '<b>АБО</b> Виберіть контрагент',
    'LNK_SELECT_CONTACTS' => '<b>АБО</b> Виберіть контакт',
    'NTC_COPY_ALTERNATE_ADDRESS' => 'Копіювати альтернативну адресу до основної адреси',
    'NTC_COPY_PRIMARY_ADDRESS' => 'Копіювати основну адресу до альтернативної адреси',
    'NTC_DELETE_CONFIRMATION' => 'Ви дійсно бажаєте видалити цей запис?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Для створення угоди необхідний контрагент. \N Будь ласка, або створіть нового контрагента або виберіть одиного з вже існуючих.',
    'NTC_REMOVE_CONFIRMATION' => 'Ви дійсно бажаєте видалити цей інтерес зі звернення?',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Ви впевнені, що хочете видалити цей запис з прямих звітів?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE'=>'Журнал маркетингової кампанії',
    'LBL_TARGET_OF_CAMPAIGNS'=>'Кспішна маркетингова кампанія:',
    'LBL_TARGET_BUTTON_LABEL'=>'Відзначений як потенційний клієнт',
    'LBL_TARGET_BUTTON_TITLE'=>'Відзначений як потенційний клієнт',
    'LBL_TARGET_BUTTON_KEY'=>'T',
    'LBL_CAMPAIGN' => 'Маркетингова кампанія:',
  	'LBL_LIST_ASSIGNED_TO_NAME' => 'Відповідальний (-а)',
    'LBL_PROSPECT_LIST' => 'Список імовірних клієнтів',
    'LBL_PROSPECT' => 'Цільова аудиторія споживачів',
    'LBL_CAMPAIGN_LEAD' => 'Маркетингові кампанії',
	'LNK_LEAD_REPORTS' => 'Переглянути звіти по інтересах',
    'LBL_BIRTHDATE' => 'Дата народження:',
    'LBL_THANKS_FOR_SUBMITTING_LEAD' =>'Дякуємо за Ваш попередній контакт.',
    'LBL_SERVER_IS_CURRENTLY_UNAVAILABLE' =>'Вибачте, наразі сервер недоступний, спробуйте ще раз пізніше.',
    'LBL_ASSISTANT_PHONE' => 'Телефон асистента',
    'LBL_ASSISTANT' => 'Асистент',
    'LBL_REGISTRATION' => 'Реєєстрація',
    'LBL_MESSAGE' => 'Будь ласка введіть Вашу інформацію. Інформація та / або обліковий запис буде створений при підтвердженні.',
    'LBL_SAVED' => 'Дякуємо Вам за реєстрацію. Ваш обліковий запис буде створено',
    'LBL_CLICK_TO_RETURN' => 'Повернутись на портал',
    'LBL_CREATED_USER' => 'Створенено користувачем',
    'LBL_MODIFIED_USER' => 'Змінено користувачем',
    'LBL_CAMPAIGNS' => 'Маркетингові кампанії',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Маркетингові кампанії',
    'LBL_CONVERT_MODULE_NAME' => 'Модуль',
    'LBL_CONVERT_MODULE_NAME_SINGULAR' => 'Модуль',
    'LBL_CONVERT_REQUIRED' => 'Обов&#39;язкові',
    'LBL_CONVERT_SELECT' => 'Дозволити вибір',
    'LBL_CONVERT_COPY' => 'Копіювати дані',
    'LBL_CONVERT_EDIT' => 'Редагувати',
    'LBL_CONVERT_DELETE' => 'Видалити',
    'LBL_CONVERT_ADD_MODULE' => 'Додати модуль',
    'LBL_CONVERT_EDIT_LAYOUT' => 'Редагувати розміщення',
    'LBL_CREATE' => 'Створити',
    'LBL_SELECT' => '<b>АБО</b> Вибрати',
	'LBL_WEBSITE' => 'Веб-сторінка',
	'LNK_IMPORT_LEADS' => 'Імпорт інтересів',
	'LBL_NOTICE_OLD_LEAD_CONVERT_OVERRIDE' => 'Увага: поточна сторінка перетворення попереднього контакту містить індивідуальні поля. Під час сторінки перетворення попереднього контакту користувачем в Studio в перший раз, необхідно додати індивідуальні поля в макет. Ці поля будуть автоматично відображатися в макеті, як колись.',
//Convert lead tooltips
	'LBL_MODULE_TIP' 	=> 'Модуль, в якому буде створено нова запис.',
	'LBL_REQUIRED_TIP' 	=> 'Необхідні модулі мають бути створені або обрані до процесу конвертації попереднього контакту.',
	'LBL_COPY_TIP'		=> 'Якщо опція відзначена, то дані з полів попереднього контакту будуть скопійовані у відповідні поля створюваних записів.',
	'LBL_SELECTION_TIP' => 'Записи інших модулів, пов&#39;язані з модулем "Контакти", можуть бути або створені в процесі конвертації, або обрані зі списку вже існуючих записів.',
	'LBL_EDIT_TIP'		=> 'Правка макета сторінки конвертації для даного модуля.',
	'LBL_DELETE_TIP'	=> 'Видалення даного модуля з макета сторінки конвертації.',

    'LBL_ACTIVITIES_MOVE'   => 'Перемістити дії в:',
    'LBL_ACTIVITIES_COPY'   => 'Скопіювати дії в:',
    'LBL_ACTIVITIES_MOVE_HELP'   => "Виберіть запис(и), в який необхідно перемістити дії по Попередньому контакту. Завдання, дзвінки, зустрічі, замітки, Email-повідомлення будуть переміщені в обраний запис.",
    'LBL_ACTIVITIES_COPY_HELP'   => "Виберіть запис(и), для яких необхідно зробити копії дій попередніх контактів. Завдання, дзвінки, зустрічі, замітки, Email-повідомлення будуть переміщені в обраний  запис.",
    //For export labels
    'LBL_PHONE_HOME' => 'Телефон (дом.)',
    'LBL_PHONE_MOBILE' => 'Телефон (моб.)',
    'LBL_PHONE_WORK' => 'Телефон (роб.)',
    'LBL_PHONE_OTHER' => 'Додатковий телефон',
    'LBL_PHONE_FAX' => 'Телефон (факс)',
    'LBL_CAMPAIGN_ID' => 'Маркетингова кампанія (ID)',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Відповідальний користувач',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Відповідальний (-а) (ID)',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Змінено (ID)',
    'LBL_EXPORT_CREATED_BY' => 'Створено (ID)',
    'LBL_EXPORT_PHONE_MOBILE' => 'Телефон (моб.)',
    'LBL_EXPORT_EMAIL2'=>'Інша Email адреса',
	'LBL_EDITLAYOUT' => 'Редагувати розташування' /*for 508 compliance fix*/,
	'LBL_ENTERDATE' => 'Ввести дату' /*for 508 compliance fix*/,
	'LBL_LOADING' => 'Завантаження' /*for 508 compliance fix*/,
	'LBL_EDIT_INLINE' => 'Редагувати' /*for 508 compliance fix*/,
    //D&B Principal Identification
    'LBL_DNB_PRINCIPAL_ID' => 'D&B Основний Id',
    //Dashlet
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Угоди',

    //Document title
    'TPL_BROWSER_SUGAR7_RECORDS_TITLE' => '{{module}} &raquo; {{appId}}',
    'TPL_BROWSER_SUGAR7_RECORD_TITLE' => '{{#if last_name}}{{#if first_name}}{{first_name}} {{/if}}{{last_name}} &raquo; {{/if}}{{module}} &raquo; {{appId}}',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Примітки',

    'LBL_HELP_CONVERT_TITLE' => 'Конвертувати {{module_name}}',

    // Help Text
    // List View Help Text
    'LBL_HELP_RECORDS' => 'Модуль {{plural_module_name}} містить потенційних клієнтів, які можуть бути зацікавлені в продукті або послузі, що надаються Вашою компанією. Як тільки {{module_name}} кваліфіковано як {{opportunities_singular_module}} продажу, {{plural_module_name}} можна конвертувати в {{contacts_module}}, {{opportunities_module}} і {{accounts_module}}. Існує декілька способів створення запису {{plural_module_name}} в Sugar, наприклад за допомогою модуля {{plural_module_name}}, дублювання, імпорту даних модуля {{plural_module_name}} і т. д. Після створення запису {{module_name}} можна переглядати та редагувати інформацію, що стосується запису {{module_name}}, використовуючи режим перегляду запису {{plural_module_name}}.',

    // Record View Help Text
    'LBL_HELP_RECORD' => '{{plural_module_name}} модуль містить потенційних клієнтів, які можуть бути зацікавлені в продукт або послугу, що надаються Вашою компанією.

- Щоб редагувати поля цього запису, клікніть на самому полі або натисніть кнопку Редагувати.
- Щоб переглянути або змінити посилання, що ведуть до інших записів, на субпанелі, перейдіть на ліву нижню панель на "Перегляд даних".
- Щоб залишати і переглядати користувальницькі коментарі і змінювати історію в рамках одного запису в {{activitystream_singular_module}}, переведіть ліву нижню панель на "Стрічка активності".
- Щоб підписатися або додати у Вибране цей запис, використовуйте іконку праворуч від запису.
- Додаткові дії доступні у випадаючому меню Дій праворуч від кнопки Редагувати.',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'Модуль {{plural_module_name}} містить список потенційних клієнтів, які можуть бути зацікавлені в продукті чи послузі, які надає Ваша компанія. Щойно {{module_name}} буде кваліфіковано як продаж {{opportunities_singular_module}}, його можна перетворити на {{contacts_singular_module}}, {{accounts_singular_module}}, {{opportunities_singular_module}} чи інший запис.

Щоб створити {{module_name}}, виконайте такі дії:
1. Вкажіть потрібні значення полів.
  - Перед збереженням потрібно заповнити поля з позначкою "Обов&#39;язково".
 - Щоб переглянути додаткові поля, натисніть "Показати більше".
2. Натисніть кнопку "Зберегти", щоб завершити створення нового запису й повернутися до попередньої сторінки.',

    // Convert View Help Text
    'LBL_HELP_CONVERT' => 'Sugar  надає Вам можливість конвертувати {{plural_module_name}} в {{contacts_module}}, {{accounts_module}}, і інші модулі у випадку, якщо {{module_name}} відповідає Вашим критеріям кваліфікації.

У кожному модулі Ви можете модифікувати поля, підтверджуючи значення нового запису при натисканні на кнопку Зв&#39;язати.

Якщо Sugar  виявляє існуючий запис, який відповідає інформації в {{module_name}}, у Вас буде можливість вибрати дублікат і підтвердити вибір, натиснувши на кнопку Зв&#39;язати, або натиснути "Ігнорувати і створити нову" і продовжувати роботу далі.

Після затвердження обов&#39;язкового і бажаного модуля, натисніть Зберегти і Конвертувати, щоб завершити перетворення.',

    //Marketo
    'LBL_MKTO_SYNC' => 'Синхронізувати з Marketo&reg;',
    'LBL_MKTO_ID' => 'Marketo Lead (ID)',
    'LBL_MKTO_LEAD_SCORE' => 'Lead Score',

    'LBL_FILTER_LEADS_REPORTS' => 'Звіти по інтересам',
    'LBL_DATAPRIVACY_BUSINESS_PURPOSE' => 'Узгоджені бізнес-цілі',
    'LBL_DATAPRIVACY_CONSENT_LAST_UPDATED' => 'Останнє оновлення погодження',
);
