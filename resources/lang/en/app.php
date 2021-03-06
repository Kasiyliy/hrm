<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used throughout the application for various
    | texts that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'add_record' => 'Добавить запись',
    'id' => 'ID',
    'submit' => 'Отправить',
    'cancel' => 'Отменить',
    'edit' => 'Редактировать',
    'delete' => 'Удалить',
    'show' => 'Подробности',
    'confirm' => 'Подтвердить',
    'filter' => 'Фильтр',
    'close' => 'Закрыть',
    'no_data' => 'Нет данных',
    'confirm_action' => 'Подтвердите действие',
    'proceed_question' => 'Вы уверены, что хотите продолжить это действие?',
    'yes' => 'Да',
    'no' => 'Нет',
    'toggle_nav' => 'Toggle navigation',
    'current' => 'текущий',
    'login' => 'Вход',
    'logout' => 'Выход',
    'home' => 'Главная',
    'download' => 'Скачать',
    'status' => 'Статус',
    'approve' => 'Утвердить',

    'profile' => [
        'main' => 'Профиль',
        'update' => 'Обновить данные профиля',
        'update_success' => 'Детали профиля были успешно обновлены.',
    ],

    'settings' => [
        'main' => 'Настройки',
        'companies' => [
            'main' => 'Компании',
            'add_new' => 'Добавить компанию',
            'edit_details' => 'Изменить данные компании',
            'name' => 'Name',
            'store_success' => 'Компания была успешно добавлена.',
            'update_success' => 'Компания была успешно обновлена.',
            'delete_success' => 'Компания была успешно удалена.',
        ],
        'contract_types' => [
            'main' => 'Типы контрактов',
            'add_new' => 'Добавить тип контракта',
            'edit_details' => 'Изменить данные типа контракта',
            'name' => 'Имя',
            'store_success' => 'Тип контракта был успешно добавлен.',
            'update_success' => 'Тип контракта был успешно обновлен.',
            'delete_success' => 'Тип контракта был успешно удален.',
        ],
        'document_templates' => [
            'main' => 'Шаблоны документов',
            'add_new' => 'Добавить шаблон документа',
            'edit_details' => 'Изменить шаблон документа',
            'name' => 'Имя',
            'template' => 'Шаблон',
            'type' => 'Тип',
            'types' => [
                'pim' => 'PIM',
                'leave' => 'Покидать',
                'recruitment' => 'Прием на работу',
                'discipline' => 'Дисциплина'
            ],
            'store_success' => 'Шаблон документа был успешно добавлен.',
            'update_success' => 'Шаблон документа был успешно обновлен.',
            'delete_success' => 'Шаблон документа был успешно удален.',
        ],
        'education_institutions' => [
            'main' => 'Учебные заведения',
            'add_new' => 'Добавить учебное заведение',
            'edit_details' => 'Изменить данные учебного заведения',
            'name' => 'Имя',
            'store_success' => 'Учебное заведение успешно добавлено.',
            'update_success' => 'Учебное заведение было успешно обновлено.',
            'delete_success' => 'Учебное заведение было успешно удалено.',
        ],
        'job_positions' => [
            'main' => 'Должности',
            'add_new' => 'Добавить вакансию',
            'edit_details' => 'Изменить сведения о вакансии',
            'name' => 'Имя',
            'description' => 'Описание',
            'attachment' => 'Прикрепление',
            'store_success' => 'Должность была успешно добавлена.',
            'update_success' => 'Должность была успешно обновлена.',
            'delete_success' => 'Должность была успешно удалена.',
        ],
        'languages' => [
            'main' => 'Языки',
            'add_new' => 'Добавить язык',
            'edit_details' => 'Изменить детали языка',
            'name' => 'Имя',
            'store_success' => 'Язык был успешно добавлен.',
            'update_success' => 'Язык был успешно обновлен.',
            'delete_success' => 'Язык был успешно удален.',
        ],
        'salary_components' => [
            'main' => 'Компоненты зарплаты',
            'add_new' => 'Добавить компоненты зарплаты',
            'edit_details' => 'Редактировать детали зарплаты',
            'name' => 'Имя',
            'contract_type' => 'Форма контракта',
            'type' => 'Тип',
            'is_cost' => 'Стоимость для компании?',
            'store_success' => 'Компонент заработной платы был успешно добавлен.',
            'update_success' => 'Компонент заработной платы был успешно обновлен.',
            'delete_success' => 'Компонент заработной платы был успешно удален.',
            'types' => [
                'earning' => 'Начисление',
                'deduction' => 'Дедукция'
            ]
        ]
    ],
    'pim' => [
        'main' => 'PIM',
        'birthdays' => 'Дни рождения',
        'employees' => [
            'main' => 'Сотрудники',
            'add_new' => 'Добавить сотрудника',
            'edit_details' => 'Изменить данные сотрудника',
            'first_name' => 'Имя',
            'last_name' => 'Фамилия',
            'email' => 'Email',
            'job_title' => 'Должность',
            'contract_type' => 'Статус занятости',
            'gender' => 'Пол',
            'gender_male' => 'Мужской',
            'gender_female' => 'Женский',
            'birth_date' => 'Дата рождения',
            'notes' => 'Заметки',
            'how_did_they_hear' => 'Как они узнали о нас?',
            'store_success' => 'Сотрудник был успешно добавлен.',
            'update_success' => 'Данные сотрудника были успешно обновлены.',
            'delete_success' => 'Сотрудник был успешно удален.',
            'pass_success' => 'Пароль был успешно отправлен.',
            'additional' => 'Дополнительные детали',
            'resend_password' => 'Переслать пароль',
            'external_accounts' => [
                'main' => 'Внешние аккаунты',
                'add_new' => 'Добавить внешний аккаунт',
                'edit_details' => 'Изменить внешний аккаунт',
                'account' => 'Учетная запись',
                'account_type' => 'Тип аккаунта',
                'url' => 'URL',
                'store_success' => 'Внешний аккаунт был успешно добавлен.',
                'update_success' => 'Данные внешнего аккаунта были успешно обновлены.',
                'delete_success' => 'Внешняя учетная запись была успешно удалена.',
            ],
            'documents' => [
                'main' => 'Документы',
                'add_new' => 'Добавить новый документ',
                'edit_details' => 'Редактировать документ',
                'name' => 'Имя',
                'description' => 'Описание',
                'attachment' => 'Прикрепление',
                'generate' => 'Создать из шаблона',
                'templates' => [
                    'document' => 'Документ',
                ],
                'btn_generate' => 'Сгенерировать',
                'store_success' => 'Документ был успешно добавлен.',
                'update_success' => 'Документ был успешно добавлен.',
                'delete_success' => 'Документ был успешно добавлен.',
            ],
            'contact_details' => [
                'main' => 'Контактная информация',
                'add_new' => 'Добавить контактную информацию',
                'edit_details' => 'Изменить контактную информацию',
                'address' => 'Адрес',
                'phone_numbers' => 'Телефонные номера',
                'address1' => 'Улица 1',
                'address2' => 'Улица 2',
                'city' => 'Город',
                'state' => 'Государство',
                'zip' => 'Почтовый индекс',
                'country' => 'Страна',
                'phone1' => 'Телефон 1',
                'phone2' => 'Телефон 2',
                'phone3' => 'Телефон 3',
                'store_success' => 'Контактная информация была успешно добавлена.',
                'update_success' => 'Контактная информация была успешно обновлена.',
            ],
            'qualifications' => [
                'main' => 'Квалификация',
                'skills' => 'Навыки',
                'work_experience' => [
                    'main' => 'Рабочий стаж',
                    'add_new' => 'Добавить опыт работы',
                    'edit_details' => 'Изменить опыт работы',
                    'job_title' => 'Должность',
                    'start_date' => 'Дата начала',
                    'end_date' => 'Дата окончания',
                    'company_name' => 'Название компании',
                    'comments' => 'Комментарии',
                    'store_success' => 'Опыт работы был успешно добавлен.',
                    'update_success' => 'Детали опыта работы были успешно обновлены.',
                    'delete_success' => 'Опыт работы был успешно удален.',
                ],
                'education' => [
                    'main' => 'Образование',
                    'add_new' => 'Добавить образование',
                    'edit_details' => 'Изменить детали обучения',
                    'type' => 'Тип',
                    'institution' => 'Учреждение',
                    'major' => 'Основной',
                    'year' => 'Год',
                    'grade' => 'класс',
                    'start_date' => 'Дата начала',
                    'end_date' => 'Дата окончания',    
                    'store_success' => 'Детали образования были успешно добавлены.',
                    'update_success' => 'Детали образования были успешно обновлены.',
                    'delete_success' => 'Детали образования были успешно удалены.',
                    'education_types' => [
                        'bachelor' => "Степень бакалавра",
                        'master' => "Степень магистра",
                        'academy' => "Сертификат Академии",
                        'undergrad' => "Студент"
                    ]
                ],
                'languages' => [
                    
                    'main' => 'Языки',
                    'add_new' => 'Добавить язык',
                    'edit_details' => 'Изменить язык',
                    'language' => 'Язык',
                    'level' => 'Уровень',
                    'skill' => 'Навыки',
                    'store_success' => 'Язык был успешно добавлен.',
                    'update_success' => 'Язык был успешно обновлен.',
                    'delete_success' => 'Язык был успешно удален.',
                    'skills' => [
                        'write' => 'Написан',
                        'speak' => 'Рассказан',
                        'both' => 'Написан и рассказан',
                    ],
                    'levels' => [
                        'beginner' => 'Начинающий',
                        'intermediate' => 'Интермедиат',
                        'fluent' => 'Флуент',
                        'native' => 'Натив',
                    ]
                ]
            ],
            'salaries' => [
                'main' => 'Зарплаты',
                'add_new' => 'Добавить запись о зарплате',
                'edit_details' => 'Изменить запись зарплаты',
                'salary_history' => 'Зарплатная история',
                'gross_total' => 'Брутто всего',
                'nett_total' => 'Всего',
                'payment_date' => 'Payment date',
                'attachment' => 'Прикрепление',
                'attachmed_file' => 'Прикрепленный файл',
                'salary_setup' => 'Установить текущую зарплату',
                'salary_report' => 'Отчет о зарплате',
                'store_success' => 'Запись о зарплате была успешно добавлена.',
                'update_success' => 'Детали зарплаты были успешно обновлены.',
                'delete_success' => 'Запись о зарплате была успешно удалена.',
                'config' => [
                    'amount' => 'Количество',
                    'type' => 'Тип',
                    'currency' => 'Валюта',
                    'type_full' => 'Flat',
                    'type_hour' => 'Почасовой',
                    'bank_account' => 'Банковский счет',
                    'id_number' => 'ID',
                ],
            ]
        ],
        'candidates' => [
            'main' => 'Кандидаты',
            'add_new' => 'Добавить кандидата',
            'edit_details' => 'Изменить данные кандидата',
            'store_success' => 'Кандидат был успешно добавлен.',
            'update_success' => 'Данные кандидата были успешно обновлены.',
            'delete_success' => 'Кандидат был успешно удален.',
            'additional' => 'Дополнительные детали',
            'mark_featured_title' => 'Отметить как важное, чтобы кандидат был размещен на приборной панели',
            'preferences' => [
                'main' => 'Предпочтения и ожидания',
                'add_new' => 'Добавить настройки',
                'edit_details' => 'Изменить настройки',
                'salary' => 'Минимальная зарплата',
                'contract_type' => 'Форма контракта',
                'comments' => 'Комментарии',
                'location' => [
                    'main' => 'В офисе',
                    'remote' => 'Удаленно',
                    'inhouse' => 'Дома'
                ],
                'store_success' => 'Предпочтения кандидата были успешно добавлены.',
                'update_success' => 'Предпочтения кандидата были успешно обновлены.',
                'delete_success' => 'Предпочтения кандидата были успешно удалены.',
            ]
        ]
    ],
    'leave' => [
        'main' => 'Отпуск',
        'weekly_summary' => 'Еженедельная сводка',
        'leave_types' => [
            'main' => 'Виды отпуска',
            'add_new' => 'Добавить тип отпуска',
            'edit_details' => 'Редактировать тип отпуска',
            'name' => 'Отпуск',
            'available_days' => 'Доступные дни',
            'start_date' => 'Дата начала',
            'end_date' => 'Дата окончания',
            'store_success' => 'Тип отпуска был успешно добавлен.',
            'update_success' => 'Тип отпуска был успешно обновлен.',
            'delete_success' => 'Тип выхода был успешно удален.',
        ],
        'employee_leaves' => [
            'main' => 'Отпуск соотрудника',
            'add_new' => 'Назначить новый отпуск',
            'edit_details' => 'Редактировать отпуск',
            'employee' => 'Работник',
            'leave' => 'Отпуск',
            'start_date' => 'Дата начала',
            'end_date' => 'Дата окончания',
            'store_success' => 'Отпуск был успешно назначен.',
            'update_success' => 'Отпуск был успешно обновлен.',
            'delete_success' => 'Отпуск был успешно удален.',
            'approve_success' => 'Отпуск был успешно одобрен.',
            'attachment' => 'Прикрепление',
            'error_no_available_days' => 'Запрос на отпуск превышает общее количество дней. Осталось :days дней',
            'approve_email' => [
                'subject' => 'Ваши выходные утверждены.',
                'body' => [
                    'request_approved' => 'Ваш запрос на выходные дни одобрен.',
                    'date_from' => 'Дата начала',
                    'date_to' => 'Дата окончания',
                    'review_request' => 'Просмотрите запрос:',
                ],
            ],
        ],
        'holidays' => [
            'main' => 'Каникулы',
            'add_new' => 'Добавить каникул',
            'edit_details' => 'Изменить детали каникула',
            'name' => 'Каникул',
            'date' => 'Дата',
            'store_success' => 'Каникул успешно добавлен.',
            'update_success' => 'Каникул успешно обновлен.',
            'delete_success' => 'Каникул успешно удален.',
        ],
        'calendar' => [
            'main' => 'Календарь праздников',
        ]
    ],
    'recruitment' => [
        'main' => 'Прием на работу',
        'reports' => [
            'main' => 'Отчеты',
            'first_name' => 'Имя',
            'last_name' => 'Фамилия',
            'email' => 'Email',
            'phone' => 'Телефон',
            'skills' => 'Навыки',
            'languages' => 'Языки',
            'experience' => 'Опыт',
            'education' => 'Образование',
            'salary' => 'Ожидаемая заработная плата',
            'contract_type' => 'Предпочтительный тип контракта',
            'location' => 'Предпочтительное местоположение',
            'comments' => 'Комментарии',
            'min_salary' => 'Минимальная зарплата',
            'max_salary' => 'Максимальная Зарплата',
            'salary_range' => 'Диапазон зарплаты',
            'how_did_they_hear' => 'Источник',
            'featured_candidates' => 'Избранные кандидаты',
            'show' => [
                'personal_details' => 'Персональные данные',
            ]
        ]
    ],
    'discipline' => [
        'main' => 'Наказание',
        'disciplinary_cases' => [
            'main' => 'Типы Наказании',
            'name' => 'Имя',
            'description' => 'Описание',
            'employee' => 'Соотрудник',
            'add_new' => 'Добавить случай наказании',
            'edit_details' => 'Редактировать случай наказании',
            'store_success' => 'Случай наказании успешно добавлен.',
            'update_success' => 'Случай наказании успешно обновлен.',
            'delete_success' => 'Случай наказании успешно удален.',
        ]
    ],
    'time' => [
        'main' => 'Время',
        'clients' => [
            'main' => 'Клиенты',
            'name' => 'Имя',
            'description' => 'Описание',
            'add_new' => 'Добавить клиента',
            'edit_details' => 'Изменить клиент',
            'store_success' => 'Клиент был успешно добавлен.',
            'update_success' => 'Клиент был успешно обновлен.',
            'delete_success' => 'Клиент был успешно удален.',
        ],
        'projects' => [
            'main' => 'Проекты',
            'name' => 'Имя',
            'description' => 'Описание',
            'client' => 'Клиенты',
            'add_new' => 'Добавить проект',
            'assignees' => 'Assignees',
            'edit_details' => 'Редактировать проект',
            'store_success' => 'Проект был успешно добавлен.',
            'update_success' => 'Проект был успешно обновлен.',
            'delete_success' => 'Проект был успешно удален.',
        ],
        'time_logs' => [
            'main' => 'Журналы времени',
            'task_name' => 'Название задачи',
            'task_description' => 'Описание задания',
            'project' => 'Проект',
            'employee' => 'Соотрудник',
            'time' => 'Зарегистрированное время',
            'report' => 'Отчет',
            'date' => 'Дата',
            'start_date' => 'Дата начала',
            'end_date' => 'Дата окончания',
            'add_new' => 'Добавить журнал времени',
            'edit_details' => 'Изменить журнал времени',
            'monthly_summary' => 'Ежемесячная сводка',
            'total_time' => 'Общее время',
            'store_success' => 'Журнал времени был успешно добавлен.',
            'update_success' => 'Журнал времени был успешно обновлен.',
            'delete_success' => 'Журнал времени был успешно удален.',
        ]
    ],
    'dashboard' => [
        'main' => 'Панель управление',
        'documents' => [
            'main' => 'Документы',
            'name' => 'Имя',
            'description' => 'Описание',
            'attachment' => 'Attachment',
            'add_new' => 'Добавить новый документ',
            'edit_details' => 'Изменить данные документа',
            'store_success' => 'Документ был успешно добавлен.',
            'update_success' => 'Документ был успешно добавлен.',
            'delete_success' => 'Документ был успешно добавлен.',
        ],
    ],
    'employee' => [
        'leaves' => [
            'main' => 'Листья',
            'details' => 'Оставьте детали',
            'approved' => 'Одобренный',
            'pending' => 'В ожидании',
            'request' => 'Запросить отпуск',
            'store_success' => 'Запрос успешно добавлен.',
            'update_success' => 'Запрос успешно обновлен.',
            'delete_success' => 'Запрос успешно удален.',
            'request_leave_email' => [
                'subject' => 'Оставьте заявку по :employeeName',
                'body' => [
                    'new_request' => 'Новый запрос на отпуск от :employeeName',
                    'date_from' => 'От',
                    'date_to' => 'к',
                    'review_request' => 'Просмотрите запрос:',
                ],
            ],
        ],
        'salary' => [
            'main' => 'Зарплата'
        ]
    ]
];
