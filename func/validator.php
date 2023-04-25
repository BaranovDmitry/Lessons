<?php
function validate(array $fields, array $validationData)
{
    $errors = [];
    /**
     * Checks Validation Data on empty
     */
    if(!$validationData)
        return false;


    $fieldRulesData = processingRules($validationData);

    /**
     * Check rule and set message
     */
    foreach ($fieldRulesData as $fieldName => $rules) {
        foreach ($rules as $rule) {
            preg_match(getPattern("rule_param"), $rule, $matches);

            if ($rule === 'required' && !required($fields[$fieldName])) {
                $errors[$fieldName][] = getMsg('required', $fieldName);
            }

            if (mb_stripos($rule, 'min_length') !== false) {
                $pattern = getPattern('rule_param');
                $minLength = $matches[1];
                if (!minLength($fields[$fieldName], $minLength)) {
                    $errors[$fieldName][] = getMsg('min_length', $fieldName, $minLength);
                }
            }

            if (mb_stripos($rule, 'max_length') !== false) {
                $pattern = getPattern('rule_param');
                $maxLength = $matches[1];
                if (!maxLength($fields[$fieldName], $maxLength)) {
                    $errors[$fieldName][] = getMsg('max_length', $fieldName, $maxLength);
                }
            }

            if (mb_stripos($rule, 'password') !== false) {
                $pattern = getPattern('rule_param');
                $minLength = $matches[1];
                if (!minLength($fields[$fieldName], $minLength)) {
                    $errors[$fieldName][] = getMsg('password', $fieldName, $minLength);
                }
            }

            if (mb_stripos($rule, 'password_confirm') !== false) {
                $pattern = getPattern('rule_param');
                $minLength = $matches[1];
                if (!minLength($fields[$fieldName], $minLength)) {
                    $errors[$fieldName][] = getMsg('min_length', $fieldName, $minLength);
                }
            }
        }
    }

    if (isset($fieldRulesData['password']) && isset($fieldRulesData['password_confirm'])) {
        if (!checkPasswordAndConfirm($fields['password'], $fields['password_confirm'])) {
            $errors['password_confirm'][] = getMsg('password_confirm_match', 'Password Confirm');
        }
    }
        return $errors;
}

/**
 * Creates arrays with rules for each name
 * @param array $rules
 * @return array
 */
function processingRules(array $validationData) :array
{

    $fieldRulesData = [];
    foreach ($validationData as $fieldName => $rules) {
        $fieldRulesData[$fieldName] = explode('|', $rules);

    }
    return $fieldRulesData;
}
function required(string $value) : bool
{
    if($value && mb_strlen($value) > 0){
//        print_r(mb_strlen($value));
        return true;
    } elseif(!$value){
        return false;
    }
}

/**Check min length.
 * @param string $string
 * @param int $length
 * @return bool
 */
function minLength(string $string = null, int $length) : bool
{

    if(mb_strlen($string) > 0 && mb_strlen($string) > $length) {

        return true;
    } elseif(mb_strlen($string) == 0) {
        return true;
    } else {
        return false;
    }

}
function maxLength(string $string, int $length) : bool
{
    if(mb_strlen($string) > 0 && mb_strlen($string) < $length) {
        return true;
    } elseif(mb_strlen($string) == 0) {
        return true;
    } else {
        return false;
    }

}

function checkPasswordAndConfirm(string $password, string $confirm) : bool
{
    if($password && $confirm)
        return $password === $confirm;
    elseif(!$password && $confirm)
        return false;
    elseif($password && !$confirm)
        return false;
    else
        return false;
}




