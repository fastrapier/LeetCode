# Definition for singly-linked list.
# class ListNode:
#     def __init__(self, val=0, next=None):
#         self.val = val
#         self.next = next
class Solution:
    def removeNthFromEnd(self, head: Optional[ListNode], n: int) -> Optional[ListNode]:
        curr = head
        
        nodes = []
        
        while curr is not None:
            nodes.append(curr)
            curr = curr.next
        
        
        
        indexToDelete = len(nodes) - n
        
        if indexToDelete == 0:
            if len(nodes) == 1:
                return None
            head = nodes[1]
        else:
            prev = nodes[indexToDelete - 1]
            
            if prev.next.next is not None:
                prev.next = prev.next.next
            else:
                prev.next = None
                
        return head
        