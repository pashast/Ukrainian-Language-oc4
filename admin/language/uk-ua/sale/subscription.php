<?php
//Заголовок
$_['heading_title'] = 'Підписки';

//Текст
$_['text_success'] = 'Успіх: Ви змінили підписки!';
$_['text_list']    = 'Список підписок';
$_['text_add']     = 'Додати підписку';
$_['text_edit']    = 'Підписка (#%s)';
$_['text_filter']  = 'Фільтр';

$_['text_date_added']        = 'Дата додавання';
$_['text_order']             = 'Ідентифікатор замовлення';
$_['text_customer']          = 'Клієнт';
$_['text_subscription_plan'] = 'План підписки';


$_['text_product']  = 'Деталі товару';
$_['text_quantity'] = 'Кількість';

$_['text_subscription']          = 'Підписка';
$_['text_trial']                 = 'Пробна версія';
$_['text_subscription']          = 'Підписка';
$_['text_subscription_trial']    = '%s кожні %d %s(s) для %d платежу(ів), потім ';
$_['text_subscription_duration'] = '%s кожні %d %s(s) для %d платежу(ів)';
$_['text_subscription_cancel']   = '%s кожні %d %s(s) до скасування';
$_['text_cancel']                = 'До скасування';


$_['text_day']        = 'День';
$_['text_week']       = 'Тиждень';
$_['text_semi_month'] = 'Півмісяця';
$_['text_month']      = 'Місяць';
$_['text_year']       = 'Рік';

$_['text_date_next'] = 'Наступна дата';
$_['text_remaining'] = 'Залишилося';


$_['text_payment_address']  = 'Платіжна адреса';
$_['text_payment_method']   = 'Метод оплати';
$_['text_shipping_address'] = 'Адреса доставки';
$_['text_shipping_method']  = 'Спосіб доставки';


$_['text_history']     = 'Історія';
$_['text_history_add'] = 'Додати історію';

// Колонка
$_['column_subscription_id'] = 'Ідентифікатор підписки';
$_['column_order_id']        = 'Ідентифікатор замовлення';
$_['column_customer']        = 'Клієнт';
$_['column_comment']         = 'Коментар';
$_['column_description']     = 'Опис';
$_['column_amount']          = 'Сума';
$_['column_notify']          = 'Повідомлення клієнта';
$_['column_status']          = 'Статус';
$_['column_date_added']      = 'Дата додавання';
$_['column_product']         = 'Деталі товару';
$_['column_quantity']        = 'Кількість';
$_['column_total']           = 'Усього';
$_['column_action']          = 'Дія';

// Вступ
$_['entry_customer']            = 'Клієнт';
$_['entry_subscription_id']     = 'Ідентифікатор підписки';
$_['entry_order_id']            = 'Ідентифікатор замовлення';
$_['entry_subscription_plan']   = 'План підписки';
$_['entry_trial_price']         = 'Пробна ціна';
$_['entry_trial_duration']      = 'Тривалість пробного періоду';
$_['entry_trial_remaining']     = 'Пробна версія залишилася';
$_['entry_trial_cycle']         = 'Пробний цикл';
$_['entry_trial_frequency']     = 'Частота випробувань';
$_['entry_trial_status']        = 'Пробний статус';
$_['entry_price']               = 'Ціна';
$_['entry_duration']            = 'Тривалість';
$_['entry_remaining']           = 'Залишилося';
$_['entry_cycle']               = 'Цикл';
$_['entry_frequency']           = 'Частота';
$_['entry_date_next']           = 'Наступна дата';
$_['entry_comment']             = 'Коментар';
$_['entry_amount']              = 'Сума';
$_['entry_notify']              = 'Повідомити клієнта';
$_['entry_override']            = 'Перевизначити';
$_['entry_date_from']           = 'Дата з';
$_['entry_date_to']             = 'Дата до';
$_['entry_subscription_status'] = 'Статус підписки';

// Довідка
$_['help_trial_duration']  = 'Тривалість - це кількість разів, які користувач здійснить платіж.';
$_['help_trial_cycle']     = 'Суми підписки розраховуються за частотою та циклами.';
$_['help_trial_frequency'] = 'Якщо ви використовуєте частоту «тиждень» і цикл «2», то користувачеві виставлятиметься рахунок кожні 2 тижні.';
$_['help_duration']        = 'Тривалість - це кількість разів, коли користувач здійснить платіж, встановіть значення 0, якщо ви хочете здійснювати платежі до їх скасування.';
$_['help_cycle']           = 'Суми підписки розраховуються за частотою та циклами.';
$_['help_frequency']       = 'Якщо ви використовуєте частоту «тиждень» і цикл «2», то користувачеві виставлятиметься рахунок кожні 2 тижні.';

// Tab
$_['tab_order'] = 'Замовлення';

// Помилка
$_['error_permission']          = 'Попередження: Ви не маєте дозволу змінювати підписки!';
$_['error_status']              = 'Помилка: статус підписки не збігається зі статусом магазину!';
$_['error_subscription']        = 'Попередження: підписки не існує!';
$_['error_subscription_plan']   = 'Попередження: плану підписки не існує!';
$_['error_subscription_status'] = 'Попередження: необхідно вибрати статус підписки!';
$_['error_payment_method']      = 'Попередження: спосіб оплати не існує!';
$_['error_service_type']        = 'Статус служби не включено до цієї транзакції. Якщо ви бачите це повідомлення про помилку, зверніться до свого розробника розширення, який обслуговує послуги підписки, щоб вирішити цю проблему!';