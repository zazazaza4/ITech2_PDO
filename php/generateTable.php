<?php
function generateTable($data)
{
    if (empty($data)) {
        return '';
    }

    $html = '<table>';
    $html .= '<tr>';
    foreach (array_keys($data[0]) as $column) {
        $html .= '<th>' . $column . '</th>';
    }
    $html .= '</tr>';

    foreach ($data as $row) {
        $html .= '<tr>';
        foreach ($row as $cell) {
            $html .= '<td>' . $cell . '</td>';
        }
        $html .= '</tr>';
    }

    $html .= '</table>';

    return $html;
}
