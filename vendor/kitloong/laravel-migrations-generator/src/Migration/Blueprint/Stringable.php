<?php

namespace KitLoong\MigrationsGenerator\Migration\Blueprint;

use Illuminate\Support\Collection;
use KitLoong\MigrationsGenerator\Migration\Enum\Space;

trait Stringable
{
    /**
     * Implodes lines with tab.
     *
     * @param  string[]  $lines
     * @param  int  $numberOfPrefixTab  Number of tabs to prepend to each line.
     * @return string
     */
    public function flattenLines(array $lines, int $numberOfPrefixTab): string
    {
        $content = '';
        foreach ($lines as $i => $line) {
            // Skip tab if the line is first line or line break.
            if ($i === 0 || $line === Space::LINE_BREAK()->getValue()) {
                $content .= $line;
                continue;
            }

            $content .= Space::LINE_BREAK() . str_repeat(Space::TAB(), $numberOfPrefixTab) . $line;
        }
        return $content;
    }

    /**
     * Convert $value to printable string.
     *
     * @param  mixed  $value
     * @return string
     */
    public function convertFromAnyTypeToString($value): string
    {
        if ($value === Space::LINE_BREAK()->getValue()) {
            return $value;
        }

        switch (gettype($value)) {
            case 'array':
                return '[' . implode(', ', $this->mapArrayItemsToString($value)) . ']';
            case 'boolean':
                return $value ? 'true' : 'false';
            case 'NULL':
                return 'null';
            case 'string':
                return "'" . $this->escapeSingleQuote($value) . "'";
            default:
                return $value;
        }
    }

    /**
     * Escapes single quotes by adding backslash.
     *
     * @param  string  $string
     * @return string
     */
    public function escapeSingleQuote(string $string): string
    {
        return addcslashes($string, "'");
    }

    /**
     * Escapes double quotes by adding backslash.
     *
     * @param  string  $string
     * @return string
     */
    public function escapeDoubleQuote(string $string): string
    {
        return addcslashes($string, '"');
    }

    /**
     * Convert $list items to printable string.
     *
     * @param  array  $list
     * @return array
     */
    public function mapArrayItemsToString(array $list): array
    {
        return (new Collection($list))->map(function ($v) {
            return $this->convertFromAnyTypeToString($v);
        })->toArray();
    }
}
