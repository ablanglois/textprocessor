Text processor
==============

Quick and dirty text analysis library, using PHP and regular expressions. So far it can tokenize sentences and words and count syllables… in French. Adding languages is fairly trivial, just create a new file in /languages using the French one as a template.

This is a side-project devloped for [jdqhaiku](https://github.com/ablanglois/jdqhaiku)

Usage
-----

    $tp = new TextProcessor($language);

    $sentences = $tp->sentences($string); // array containing the individual sentences
    sentencesCount = $tp->sentenceCount($string); // number of sentences

    $words = $tp->words($string); // array containing the individual words
    $wordCount = $tp->wordCount($string); // word count

    $tokens = $tp->tokenize($regEx, $string); // use a custom regular expression to tokenize the string

    // alternately
    $tp->loadString($string);
    $sentences = $tp->sentences();
    sentencesCount = $tp->sentenceCount();
    $words = $tp->words();
    $wordCount = $tp->wordCount();
    $tokens = $tp->tokenize($regEx);