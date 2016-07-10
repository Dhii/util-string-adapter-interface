<?php

namespace Dhii\Util\String\Adapter;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Something that contains string utility methods.
 *
 * @since [*next-version*]
 *
 * @author xedinunknown
 */
interface AdapterInterface
{
    const D_TRIM_CHARS     = "\t\n\r\0\x0B";
    const D_WORD_SEPARATOR = ' ';
    const D_WORD_GLUE      = ' ';

    /**
     * Produces an array of strings from a string, each element of which is a substring that was delimited by a separator.
     *
     * @since [*next-version*]
     *
     * @param string|Stringable $separator The boundary string.
     * @param string|Stringable $string    The input string.
     *
     * @return array An array of pieces, delimited by separator, which is itself excluded.
     */
    public function split($separator, $string);

    /**
     * Produces a string from an array of strings by concatenating them with a delimiter.
     *
     * @since [*next-version*]
     *
     * @param string|Stringable  $glue   The boundary string to but between pieces.
     * @param array|\Traversable $pieces The array of strings to join.
     *
     * @return string The string, which is all the pieces joined with the glue.
     */
    public function join($glue, $pieces);

    /**
     * Removes characters from the both sides of a string.
     *
     * @since [*next-version*]
     *
     * @param string|Stringable $string The string to trim.
     * @param string|Stringable $chars  A string of characters, all of which will be trimmed, regardless of position in the string.
     *
     * @return string The trimmed string.
     */
    public function trim($string, $chars = null);

    /**
     * Removes characters from the right side of a string.
     *
     * @since [*next-version*]
     *
     * @param string|Stringable $string The string to trim.
     * @param string|Stringable $chars  A string of characters, all of which will be trimmed, regardless of position in the string.
     *
     * @return string The trimmed string.
     */
    public function rightTrim($string, $chars = null);

    /**
     * Removes characters from the left side of a string.
     *
     * @since [*next-version*]
     *
     * @param string|Stringable $string The string to trim.
     * @param string|Stringable $chars  A string of characters, all of which will be trimmed, regardless of position in the string.
     *
     * @return string The trimmed string.
     */
    public function leftTrim($string, $chars = null);

    /**
     * Formats strings according to format.
     *
     * Works similarly to {@see sprintf()}, but accepts an array of strings instead of list.
     *
     * @since [*next-version*]
     *
     * @param string|Stringable $format The format string.
     * @param string|Stringable $string Array of strings to include in format.
     *
     * @return string The formattet string.
     */
    public function format($format, $string);

    /**
     * Changes the case of first letter of the given string to upper.
     *
     * @since [*next-version*]
     * @see ucfirst()
     *
     * @param string|Stringable $string The string to capitalize.
     *
     * @return string The capitalized string.
     */
    public function capitalize($string);

    /**
     * Changes the case of the first letter of every word of the given string to upper.
     *
     * @since [*next-version*]
     *
     * @param string|Stringable $string The string, the words in which to capitalize.
     *
     * @return string The string with every word capitalized.
     */
    public function capitalizeWords($string);

    /**
     * Convert the case of each letter in a string to upper.
     *
     * @since [*next-version*]
     *
     * @param string|Stringable $string The string, the letter case of which to convert.
     *
     * @return The string with all letters converted.
     */
    public function uppercase($string);

    /**
     * Convert the case of each letter in a string to upper.
     *
     * @since [*next-version*]
     *
     * @param string|Stringable $string The string, the letter case of which to convert.
     *
     * @return The string with all letters converted.
     */
    public function lowercase($string);

    /**
     * Converts a string to camel-case.
     *
     * Camel-case is a way of writing strings where each subsequent word begins with an upper-case letter, instead of
     * being separated by a space. The first letter is lower-case.
     *
     * @since [*next-version*]
     *
     * @param string|Stringable $string The string to camelize.
     * @result string A string converted to camelCase.
     */
    public function camelize($string);

    /**
     * Converts a string to underscore.
     * 
     * Underscore is a way of writing strings where words are separated by underscores, and all characters are
     * lower-case.
     *
     * @since [*next-version*]
     *
     * @param string|Stringable $string The string to underscore.
     * @result string A string converted to under_score.
     */
    public function underscore($string);
}
