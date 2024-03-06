Решение #1
* Time: O(n) так как есть цикл в котором исследуем все элементы массива.
* Space: O(n) так как можем заполнить set() всеми элементами массива
Решение #2
```
class Solution:
def containsDuplicate(self, nums: List[int]) -> bool:
nums.sort()
​
for i in range(1, len(nums)):
if nums[i - 1] == nums[i]:
return True
return False
```
* Time: O(NlogN) так как цикл + сортировка(logN)
* Space: O(1) не используем никак память