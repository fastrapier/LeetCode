# Definition for singly-linked list.
# class ListNode:
#     def __init__(self, val=0, next=None):
#         self.val = val
#         self.next = next
class Solution:
    def reverseList(self, head: Optional[ListNode]) -> Optional[ListNode]:
        
        newHead = None
    
        while head is not None:
            nextNode = head.next
            head.next = newHead
            newHead = head
            head = nextNode
        return newHead
