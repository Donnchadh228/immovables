<?php
function formatPhoneNumber($number)
{
    // Видаляємо всі нецифрові символи з номеру
    $cleanNumber = preg_replace('/\D/', '', $number);

    // Видаляємо зайвий "+" з початку номеру
    $cleanNumber = ltrim($cleanNumber, '+');

    // Перевіряємо, чи номер валідний
    if (preg_match('/^[0-9]{9,12}$/', $cleanNumber)) {
        // Витягуємо код країни (три цифри)
        $countryCode = substr($cleanNumber, 0, 3);

        // Витягуємо код оператора (дві цифри)
        $operatorCode = substr($cleanNumber, 3, 2);

        // Витягуємо основну частину номера (решта цифр)
        $mainNumber = substr($cleanNumber, 5);

        // Збираємо номер у вигляді "+380 (XX) XXX-XXXX"
        $formattedNumber = "+$countryCode ($operatorCode) " . chunk_split($mainNumber, 3, '-');
        $formattedNumber = rtrim($formattedNumber, '-');

        return $formattedNumber;
    }

    return $number;
}
