class Solution:
    def groupAnagrams(self, strs: List[str]) -> List[List[str]]:
        anogramsMap = defaultdict(list)
        
        for s in strs:
            
            count = [0] * 26 # a...z
            
            for c in s:
                count[ord(c) - ord("a")] +=1
            
            anogramsMap[tuple(count)].append(s)
        
        return anogramsMap.values()          