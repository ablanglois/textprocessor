<?php 
return array( 
  'word' => '/(?:["“«(]\s?)?\b[\w\'’-]+\b(?:\s?[\.?!:;"”»)])?/xu',
  'sentence' => '/
                (?(DEFINE)(?\'maj\'[A-ZÀÂÆÇÉÈÊÏŒÜ]))
                (?(DEFINE)(?\'phrase\'(?&maj).+?(?:\.{1,3}|[…?!]) (?!\s?:) (?=(\W+(?:(?&maj))|\Z)) ))
                «\ ?(?&phrase)\ ?» |
                "\ ?(?&phrase)\ ?" |
                “\ ?(?&phrase)\ ?” |
                (?&phrase)
              /xu',
  'syllable' => '/
                (?<![ei])a | [àä] | æ |
                (?<!ll|[ié])e(?!\b) | (?<!i)[éèê] | (?<!u)ë | (?<=\b[a-df-hj-np-tv-xz])e | (?<=qu)e |
                (?<![aeoœy])i | ï |
                (?<!ti|o)o | ô | œ |
                (?<![aeioœgq])u | (?<=g)u(?=ë) | û |
                (?<![aiueéèo])y(?![aiueéèo])
              /ixu'
  );
?>