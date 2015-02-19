<?php 
// using the same logic as the python code
function is_anagram($one, $two) 
{
  if (strlen($one) !== strlen($two))
    return false;
  
  $char_list_one = str_split($one);
  $char_list_two = str_split($two);
  sort($char_list_one);
  sort($char_list_two);
  for($i=0; $i < strlen($one); $i++) {
    if ($char_list_one[$i] !== $char_list_two[$i])
      return false;
  }
  return true;
}

function do_anagram($one, $two)
{
  //echo "here";
  $ret = is_anagram($one, $two);
  //echo $ret ? 'true': 'false';
  echo sprintf("Anagrams: %s %s %s\n", $one, $two, $ret ? 'true': 'false');
}
  
print "These should pass\n";
do_anagram("abel", "able");
do_anagram("skate", "steak");
do_anagram("large", "glare");
do_anagram("one", "eno");
  
print "These should fail\n";
do_anagram("true", "false");
do_anagram("true", "frue");
?>