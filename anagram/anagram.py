'''Checks to see if two words are anagrams: Fails fast'''
def is_anagram(one, two):
  char_list_one = list(one)
  char_list_two = list(two)
  if len(char_list_one) != len(char_list_two):
    return False
  char_list_one.sort()
  char_list_two.sort()
  for i in xrange(len(char_list_one)-1):
    if char_list_one[i] != char_list_two[i]:
      return False
  return True

'''Just a pretty printer of the method call'''
def do_anagram(one, two):
  print "Anagrams: ", one, two, is_anagram(one, two)

if __name__ == "__main__":
  print "These should pass"
  do_anagram("abel", "able")
  do_anagram("skate", "steak")
  do_anagram("large", "glare")
  do_anagram("one", "eno")
  
  print "These should fail"
  do_anagram("true", "false")
  do_anagram("true", "frue")