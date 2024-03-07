class Solution:
    def groupAnagrams(self, strs: List[str]) -> List[List[str]]:
        anogramsMap = {}
        
        for word in strs:
            sortedWord = str(sorted(word))
            if sortedWord not in anogramsMap:
                anogramsMap[sortedWord] = [word]
            else:
                anogramsMap[sortedWord].append(word)
        
        return list(anogramsMap.values())