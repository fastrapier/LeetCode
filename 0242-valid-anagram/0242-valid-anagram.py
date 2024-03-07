class Solution:
    def isAnagram(self, s: str, t: str) -> bool:
        sHashMap = dict()
        tHashMap = dict()
        for elem in s:
            sHashMap[elem] = sHashMap.setdefault(elem, 0) + 1
        for elem in t:
            tHashMap[elem] = tHashMap.setdefault(elem, 0) + 1
        
        return sHashMap == tHashMap