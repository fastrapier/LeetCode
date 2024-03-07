class Solution:
    def findIntersectionValues(self, nums1: List[int], nums2: List[int]) -> List[int]:        
        answer = [0, 0]
        
        for n in nums1:
            if n in nums2:
                answer[0]+=1
        
        for m in nums2:
            if m in nums1:
                answer[1]+=1
                
        return answer
            