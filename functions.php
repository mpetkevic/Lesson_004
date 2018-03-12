<?php

/**
 * @param array $arrayString
 * @param bool $flag
 * @return string
 */
function task1(array $arrayString, $flag = false)
{
    foreach ($arrayString as $value) {
        echo "<p>" . $value . "</p>";
    }

    if ($flag == true) {
        return implode($arrayString);
    }
}

/**
 * @param array $data
 * @param string $operator
 * @return null
 */
function task2(array $data, string $operator)
{
    $result = array_shift($data);

    foreach ($data as $value) {
        switch ($operator) {
            case "-":
                $result -= $value;
                break;
            case "+":
                $result += $value;
                break;
            case "*":
                $result *= $value;
                break;
            case "/":
                $result /= $value;
                break;
            default:
                echo "Поддерживаются толко операции +, -, *, /";
                return null;
        }
    }

    echo $result;
}

/**
 *
 */
function task3()
{
    $data = func_get_args();
    $operator = array_shift($data);
    task2($data, $operator);
}

/**
 * @param integer $rowCount
 * @param integer $colCount
 * @return null
 */
function task4($rowCount, $colCount)
{
    if ($rowCount < 1 || $colCount < 1) {
        return null;
    }

    $content = "";

    for ($i = 1; $i <= $rowCount; $i++) {
        $content .= "<tr>";

        for ($j = 1; $j <= $colCount; $j++) {
            $content .= sprintf("<td>%d</td>", $i * $j);
        }

        $content .= "</tr>";
    }

    echo "<table>", $content, "</table>";

    task4(--$rowCount, --$colCount);
}

/**
 * @param string $str
 * @return bool
 */
function isPalindrome($str)
{
    $str = strtoupper(str_replace(" ", "", $str));

    $length = strlen($str);

    if ($length < 2) {
        return true;
    }

    if ($str[0] !== $str[$length - 1]) {
        return false;
    }

    return isPalindrome(mb_substr($str, 1, -1));
}

/**
 * @param string $str
 */
function task5($str)
{
    echo $str, " - ", (isPalindrome($str)) ? "Палиндром!" : "Не палиндром";
}

function task6()
{
    // TODO:
}

function task7()
{
    // TODO:
}

function task8()
{
    // TODO:
}

function task9()
{
    // TODO:
}
