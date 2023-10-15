<?php

/**
 * validation.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


declare(strict_types=1);

return [
    'missing_where'                  => 'Array saknar "var"-klausul',
    'missing_update'                 => 'Array saknar "updaterings"-klausul',
    'invalid_where_key'              => 'JSON innehåller en ogiltig nyckel för "var"-klausulen',
    'invalid_update_key'             => 'JSON innehåller en ogiltig nyckel för "update"-klausulen',
    'invalid_query_data'             => 'Det finns ogiltig data i %s:%s fältet i din fråga.',
    'invalid_query_account_type'     => 'Din fråga innehåller konton av olika typer, vilket inte är tillåtet.',
    'invalid_query_currency'         => 'Din fråga innehåller konton som har olika valutainställningar, vilket inte är tillåtet.',
    'iban'                           => 'Detta är inte ett giltigt IBAN.',
    'zero_or_more'                   => 'Värdet får inte vara negativt.',
    'date_or_time'                   => 'Värdet måste vara ett giltigt datum eller tid (ISO 8601).',
    'source_equals_destination'      => 'Källkontot motsvarar mottagarkontot.',
    'unique_account_number_for_user' => 'Det ser ut som att detta kontonummer redan används.',
    'unique_iban_for_user'           => 'Det ser ut som att detta IBAN redan används.',
    'deleted_user'                   => 'På grund av säkerhetsbegränsningar går det inte att registrera sig med denna e-postadress.',
    'rule_trigger_value'             => 'Detta värde är ogiltigt för vald trigger.',
    'rule_action_value'              => 'Detta värde är ogiltigt för den valda åtgärden.',
    'file_already_attached'          => 'Den uppladdade filen ”:name” är redan kopplad till detta objekt.',
    'file_attached'                  => 'Filen ”:name” har laddats upp.',
    'must_exist'                     => 'ID i fältet :attribute finns inte i databasen.',
    'all_accounts_equal'             => 'Alla konton i detta fält måste vara lika.',
    'group_title_mandatory'          => 'En grupptitel är obligatorisk vid mer än en transaktion.',
    'transaction_types_equal'        => 'All delade transaktioner måste vara av samma typ.',
    'invalid_transaction_type'       => 'Ogiltig transaktionstyp.',
    'invalid_selection'              => 'Ditt val är ogiltigt.',
    'belongs_user'                   => 'This value is linked to an object that does not seem to exist.',
    'belongs_user_or_user_group'     => 'This value is linked to an object that does not seem to exist in your current financial administration.',
    'at_least_one_transaction'       => 'Krävs minst en transaktion.',
    'recurring_transaction_id'       => 'Need at least one transaction.',
    'need_id_to_match'               => 'You need to submit this entry with an ID for the API to be able to match it.',
    'too_many_unmatched'             => 'Too many submitted transactions cannot be matched to their respective database entries. Make sure existing entries have a valid ID.',
    'id_does_not_match'              => 'Submitted ID #:id does not match expected ID. Make sure it matches or omit the field.',
    'at_least_one_repetition'        => 'Krävs minst en upprepning.',
    'require_repeat_until'           => 'Kräver ett antal repetitioner eller ett slutdatum (repeat_until). Inte båda.',
    'require_currency_info'          => 'Innehållet i det här fältet är ogiltigt utan valutainformation.',
    'not_transfer_account'           => 'Detta är inte ett konto som kan användas för transaktioner.',
    'require_currency_amount'        => 'Innehållet i det här fältet är ogiltigt utan utländskt belopp.',
    'require_foreign_currency'       => 'Detta fält kräver ett nummer',
    'require_foreign_dest'           => 'Detta fältvärde måste matcha valutan för målkontot.',
    'require_foreign_src'            => 'Detta fältvärde måste matcha valutan för källkontot.',
    'equal_description'              => 'Transaktions beskrivning bör inte vara samma som den globala beskrivningen.',
    'file_invalid_mime'              => 'Filen ”:name” är av typ ”:mime” som inte accepteras som en ny uppladdning.',
    'file_too_large'                 => 'Filen ”:name” är för stor.',
    'belongs_to_user'                => 'Värdet av :attribute är okänt.',
    'accepted'                       => ':attribute måste godkännas.',
    'bic'                            => 'Detta är inte en giltig BIC.',
    'at_least_one_trigger'           => 'Regeln måste ha minst en utlösare.',
    'at_least_one_active_trigger'    => 'Regeln måste ha minst en utlösare.',
    'at_least_one_action'            => 'Regel måste ha minst en åtgärd.',
    'at_least_one_active_action'     => 'Regeln måste ha minst en aktiv åtgärd.',
    'base64'                         => 'Detta är inte giltigt bas64 data.',
    'model_id_invalid'               => 'Angivet ID verkar ogiltig för denna modell.',
    'less'                           => ':attribute måste vara mindre än 10 000 000',
    'active_url'                     => ':attribute är inte en giltig URL.',
    'after'                          => ':attribute måste vara ett datum efter :date.',
    'date_after'                     => 'Startdatum måste vara före slutdatum.',
    'alpha'                          => ':attribute får enbart innehålla bokstäver.',
    'alpha_dash'                     => ':attribute får endast innehålla bokstäver, siffror och bindestreck.',
    'alpha_num'                      => ':attribute får endast innehålla bokstäver och siffror.',
    'array'                          => ':attribute måste vara en array.',
    'unique_for_user'                => 'Det finns redan en post med detta :attribute.',
    'before'                         => ':attribute måste vara ett datum före :date.',
    'unique_object_for_user'         => 'Namnet är redan upptaget.',
    'unique_account_for_user'        => 'Kontonamnet är redan upptaget.',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    'between.numeric'            => ':attribute måste vara mellan :min och :max.',
    'between.file'               => ':attribute måste vara mellan :min och :max kilobytes.',
    'between.string'             => ':attribute måste vara mellan :min och :max tecken.',
    'between.array'              => ':attribute måste innehålla :min till :max artiklar.',
    'boolean'                    => ':attribute fältet måste vara sant eller falskt.',
    'confirmed'                  => ':attribute bekräftelsen matchar inte.',
    'date'                       => ':attribute är inte ett giltigt datum.',
    'date_format'                => ':attribute matchar inte formatet :format.',
    'different'                  => ':attribute och :other måste vara olika.',
    'digits'                     => ':attribute måste vara :digits siffror.',
    'digits_between'             => ':attribute måste innehålla :min till :max siffror.',
    'email'                      => ':attribute måste vara en giltig e-postadress.',
    'filled'                     => ':attribute fältet är obligatoriskt.',
    'exists'                     => 'Det valda :attribute är ogiltigt.',
    'image'                      => ':attribute måste vara en bild.',
    'in'                         => 'Det valda :attribute är ogitligt.',
    'integer'                    => ':attribute måste vara ett heltal.',
    'ip'                         => ':attribute måste vara en giltig IP-adress.',
    'json'                       => ':attribute måste vara en giltig JSON sträng.',
    'max.numeric'                => ':attribute får inte vara större än :max.',
    'max.file'                   => ':attribute får inte vara större än :max kilobytes.',
    'max.string'                 => ':attribute får inte vara större än :max tecken.',
    'max.array'                  => ':attribute får inte innehålla fler artiklar än :max.',
    'mimes'                      => ':attribute måste vara av filtypen :values.',
    'min.numeric'                => ':attribute måste vara minst :min.',
    'lte.numeric'                => ':attribute måste vara mindre än eller lika med :value.',
    'min.file'                   => ':attribute måste vara minst :min kilobytes.',
    'min.string'                 => ':attribute måste minst vara :min tecken.',
    'min.array'                  => ':attribute måste innehålla minst :min artiklar.',
    'not_in'                     => 'Det valda :attribute är ogiltigt.',
    'numeric'                    => ':attribute måste vara ett nummer.',
    'numeric_native'             => 'Ursprungsvärdet måste vara ett nummer.',
    'numeric_destination'        => 'Mottagarkontot måste vara ett nummer.',
    'numeric_source'             => 'Källvärdet måste vara ett nummer.',
    'regex'                      => ':attribute format är ogiltigt.',
    'required'                   => ':attribute fältet är obligatoriskt.',
    'required_if'                => ':attribute fältet är obligatoriskt när :other är :value.',
    'required_unless'            => ':attribute fältet är obligatoriskt så vida inte :other är i :values.',
    'required_with'              => ':attribute fältet är obligatoriskt när :values är synligt.',
    'required_with_all'          => ':attribute fältet är obligatoriskt när :values är synligt.',
    'required_without'           => ':attribute fältet är obligatoriskt när :values inte är synligt.',
    'required_without_all'       => ':attribute fältet är obligatoriskt när ingen av :values är synligt.',
    'same'                       => ':attribute och :other måste matcha.',
    'size.numeric'               => ':attribute måste vara :size.',
    'amount_min_over_max'        => 'Det minimala värdet kan inte vara större än det maximala värdet.',
    'size.file'                  => ':attribute måste vara :size kilobytes.',
    'size.string'                => ':attribute måste vara :size tecken.',
    'size.array'                 => ':attribute måste innehålla :size artiklar.',
    'unique'                     => ':attribute är redan upptaget.',
    'string'                     => ':attribute måste vara en sträng.',
    'url'                        => ':attribute formatet är ogiltigt.',
    'timezone'                   => ':attribute måste vara en giltig zon.',
    '2fa_code'                   => ':attribute fältet är ogiltigt.',
    'dimensions'                 => ':attribute har ogiltiga bilddimensioner.',
    'distinct'                   => ':attribute fältet har ett dubbelt värde.',
    'file'                       => ':attribute måste vara en fil.',
    'in_array'                   => ':attribute fältet existerar inte i :other.',
    'present'                    => ':attribute fältet måste vara synligt.',
    'amount_zero'                => 'Totala värdet kan inte vara noll.',
    'current_target_amount'      => 'Det nuvarande beloppet måste vara mindre än målbeloppet.',
    'unique_piggy_bank_for_user' => 'Namnet på spargrisen måste vara unikt.',
    'unique_object_group'        => 'Gruppnamnet måste vara unikt',
    'starts_with'                => 'Värdet måste börja med :values.',
    'unique_webhook'             => 'You already have a webhook with this combination of URL, trigger, response and delivery.',
    'unique_existing_webhook'    => 'You already have another webhook with this combination of URL, trigger, response and delivery.',
    'same_account_type'          => 'Båda kontona måste vara samma kontotyp',
    'same_account_currency'      => 'Båda kontona måste ha samma valutainställning',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    'secure_password'             => 'Detta lösenord är inte säkert. Vänligen försök igen. För mer info se https://bit.ly/FF3-password-security',
    'valid_recurrence_rep_type'   => 'Ogiltig repetitionstyp får återkommande transaktioner.',
    'valid_recurrence_rep_moment' => 'Ogiltig repetitionsmoment för denna typ av repetition.',
    'invalid_account_info'        => 'Ogiltig kontoinformation.',
    'attributes'                  => [
        'email'                   => 'e-postadress',
        'description'             => 'beskrivning',
        'amount'                  => 'belopp',
        'transactions.*.amount'   => 'transaktionens belopp',
        'name'                    => 'namn',
        'piggy_bank_id'           => 'spargris ID',
        'targetamount'            => 'mål belopp',
        'opening_balance_date'    => 'ingående balans datum',
        'opening_balance'         => 'ingående balans',
        'match'                   => 'träff',
        'amount_min'              => 'minsta belopp',
        'amount_max'              => 'högsta belopp',
        'title'                   => 'titel',
        'tag'                     => 'etikett',
        'transaction_description' => 'transaktionsbeskrivning',
        'rule-action-value.1'     => 'regelåtgärd värde #1',
        'rule-action-value.2'     => 'regelåtgärd värde #2',
        'rule-action-value.3'     => 'regelåtgärd värde #3',
        'rule-action-value.4'     => 'regelåtgärd värde #4',
        'rule-action-value.5'     => 'regelåtgärd värde #5',
        'rule-action.1'           => 'regelåtgärd #1',
        'rule-action.2'           => 'regelåtgärd #2',
        'rule-action.3'           => 'regelåtgärd #3',
        'rule-action.4'           => 'regelåtgärd #4',
        'rule-action.5'           => 'regelåtgärd #5',
        'rule-trigger-value.1'    => 'regel utlösare värde #1',
        'rule-trigger-value.2'    => 'regel utlösare värde #2',
        'rule-trigger-value.3'    => 'regel utlösare värde #3',
        'rule-trigger-value.4'    => 'regel utlösare värde #4',
        'rule-trigger-value.5'    => 'regel trigger värde #regel utlösare värde #5',
        'rule-trigger.1'          => 'regel utlösare #1',
        'rule-trigger.2'          => 'regel utlösare #2',
        'rule-trigger.3'          => 'regel utlösare #3',
        'rule-trigger.4'          => 'regel utlösare #4',
        'rule-trigger.5'          => 'regel utlösare #5',
    ],

    // validation of accounts:
    'withdrawal_source_need_data' => 'Ett giltigt källkonto-ID och/eller ett giltigt källkontonamn behövs för att gå vidare.',
    'withdrawal_source_bad_data'  => '[a] Could not find a valid source account when searching for ID ":id" or name ":name".',
    'withdrawal_dest_need_data'   => '[a] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'withdrawal_dest_bad_data'    => 'Det gick inte att hitta ett giltigt mottagarkonto med ID ":id" eller namn ":name".',

    'withdrawal_dest_iban_exists' => 'This destination account IBAN is already in use by an asset account or a liability and cannot be used as a withdrawal destination.',
    'deposit_src_iban_exists'     => 'This source account IBAN is already in use by an asset account or a liability and cannot be used as a deposit source.',

    'reconciliation_source_bad_data' => 'Could not find a valid reconciliation account when searching for ID ":id" or name ":name".',

    'generic_source_bad_data' => '[e] Could not find a valid source account when searching for ID ":id" or name ":name".',

    'deposit_source_need_data' => 'Ett giltigt källkonto-ID och/eller ett giltigt källkontonamn behövs för att gå vidare.',
    'deposit_source_bad_data'  => '[b] Could not find a valid source account when searching for ID ":id" or name ":name".',
    'deposit_dest_need_data'   => '[b] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'deposit_dest_bad_data'    => 'Det gick inte att hitta ett giltigt mottagarkonto med ID ":id" eller namn ":name".',
    'deposit_dest_wrong_type'  => 'Det inskickade destinationskontot är inte av rätt typ.',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    'transfer_source_need_data' => 'Ett giltigt källkonto-ID och/eller ett giltigt källkontonamn behövs för att gå vidare.',
    'transfer_source_bad_data'  => '[c] Could not find a valid source account when searching for ID ":id" or name ":name".',
    'transfer_dest_need_data'   => '[c] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'transfer_dest_bad_data'    => 'Det gick inte att hitta ett giltigt mottagarkonto med ID ":id" eller namn ":name".',
    'need_id_in_edit'           => 'Varje delad transaktion kräver transaction_journal_id (giltigt ID eller 0).',

    'ob_source_need_data'           => 'Ett giltigt källkonto-ID och/eller ett giltigt källkontonamn behövs för att gå vidare.',
    'lc_source_need_data'           => 'Behöver få ett giltigt källkontonummer för att fortsätta.',
    'ob_dest_need_data'             => '[d] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'ob_dest_bad_data'              => 'Det gick inte att hitta ett giltigt mottagarkonto med ID ":id" eller namn ":name".',
    'reconciliation_either_account' => 'To submit a reconciliation, you must submit either a source or a destination account. Not both, not neither.',

    'generic_invalid_source'      => 'Det går inte att använda detta konto som källkonto.',
    'generic_invalid_destination' => 'Det går inte att använda detta konto som mottagarkonto.',

    'generic_no_source'      => 'You must submit source account information or submit a transaction journal ID.',
    'generic_no_destination' => 'You must submit destination account information or submit a transaction journal ID.',

    'gte.numeric' => ':attribute måste vara större än eller lika med :value.',
    'gt.numeric'  => ':attribute måste vara större än :value.',
    'gte.file'    => ':attribute måste vara större än eller lika med :value kilobyte.',
    'gte.string'  => ':attribute måste vara större än eller lika med :value tecken.',
    'gte.array'   => ':attribute måste ha :value objekt eller mer.',

    'amount_required_for_auto_budget' => 'Beloppet är obligatoriskt.',
    'auto_budget_amount_positive'     => 'Beloppet måste vara mer än noll.',
    'auto_budget_period_mandatory'    => 'Den automatiska budgetperioden är ett obligatoriskt fält.',

    // no access to administration:
    'no_access_user_group'            => 'You do not have the correct access rights for this administration.',
];

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */
