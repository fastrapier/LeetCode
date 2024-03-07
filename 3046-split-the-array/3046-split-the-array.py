class Solution:
    def isPossibleToSplit(self, nums: List[int]) -> bool:
        numbers = {}
        
        for num in nums:
            numbers[num] = numbers.get(num, 0) + 1
            
        for i in numbers.values():
            if i > 2:
                return False
        return True