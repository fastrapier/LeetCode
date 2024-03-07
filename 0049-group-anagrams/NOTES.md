​
### Memory: O(n)
* n - слова пришедшие на вход нужно хранить
​
# Решение №2
```
class Solution:
def groupAnagrams(self, strs: List[str]) -> List[List[str]]:
anogramsMap = defaultdict(list)
for s in strs:
count = [0] * 26 # a...z
for c in s:
count[ord(c) - ord("a")] +=1
anogramsMap(tuple(count)).append(s)
return list(anogramsMap.values())
```
### Time: O(m \* n \* 26)
* цифра 26 по итогу не учитывается поэтому верная оцена будет O(m \* n)
* m - количество слов в массиве на входе
* n - количество символов в строке
​
### Memory: O(m)
​