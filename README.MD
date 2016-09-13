SPECS:
Confirm if single word is anagram
  input: "dad", "add"
  outut: "Is an anagram"
Check one word against list of words and return anagrams
  input: "dad", ["add", "dda", "bat", "fruitcake"]
  output: ["add", "dda"]
If the target word is longer than the input, check if an anagram of the input exists in the target
  input: "dad", "adder"
  output: "Is an anagram"
Check one word against list of words which contains a "nested anagram" and return all anagrams
  input: "dad", ["add", "dda", "bat", "fruitcake", "badder"]
  output: ["add", "dda", "badder"]
