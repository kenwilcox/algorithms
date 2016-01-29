function anagram(one, two) {
  if (one.length !== two.length) {return false;}
  
  var oneArray = [...one]; //one.split(''); - doesn't work with non ascii very well
  var twoArray = [...two]; //two.split(''); - doesn't work with non ascii very well
  oneArray.sort();
  twoArray.sort();
  
  for(var i = 0; i < oneArray.length; i++) {
    if (oneArray[i] != twoArray[i]) {
      return false;
    }
  }
  return true;
}

function calcAnagram(id) {
  var node = document.getElementById(id);
  var text = node.textContent;
  var parts = text.split(" - ");
  var result = anagram(parts[0], parts[1]);
  node.textContent += ` = ${result}`;
}
