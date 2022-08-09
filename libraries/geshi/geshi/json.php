<?php
/*************************************************************************************
 * json.php
 * --------------
 * Author: Matt Kopla
 * Copyright: (c) 2022 Matt Kopala (mkopala@gmail.com)
 * Release Version: 0.1
 *
 * JSON language file for GeSHi.
 *
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'JSON',
    'COMMENT_SINGLE' => array(1 => '//'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    //Regular Expressions
    'COMMENT_REGEXP' => array(2 => "/(?<=[\\s^])s\\/(?:\\\\.|(?!\n)[^\\/\\\\])+\\/(?:\\\\.|(?!\n)[^\\/\\\\])+\\/[gimsu]*(?=[\\s$\\.\\;])|(?<=[\\s^(=])m?\\/(?:\\\\.|(?!\n)[^\\/\\\\])+\\/[gimsu]*(?=[\\s$\\.\\,\\;\\)])/iU"),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(),
    'SYMBOLS' => array('[', ']', '{', '}' ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #000066; font-weight: bold;',
            2 => 'color: #003366; font-weight: bold;',
            3 => 'color: #000066;'
            ),
        'COMMENTS' => array(
            1 => 'color: #006600; font-style: italic;',
            2 => 'color: #009966; font-style: italic;',
            'MULTI' => 'color: #006600; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #009900;'
            ),
        'STRINGS' => array(
            0 => 'color: #3366CC;'
            ),
        'NUMBERS' => array(
            0 => 'color: #CC0000;'
            ),
        'METHODS' => array(
            1 => 'color: #660066;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #339933;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            0 => '',
            1 => '',
            2 => '',
            3 => ''
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => ''
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.'
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_MAYBE,
    'SCRIPT_DELIMITERS' => array(
        0 => array(
            '<script type="text/javascript">' => '</script>'
            ),
        1 => array(
            '<script language="javascript">' => '</script>'
            )
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        0 => true,
        1 => true
        )
);

?>
