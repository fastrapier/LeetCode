/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function oddEvenList($head) {
        
        if($head == null) {
            return $head;
        }
        
        $firstOdd = null;
        $lastOdd = null;
        $firstEven = null;
        $lastEven = null;
        
        $curr = $head;
        
        $i = 0;
        
        while ($curr != null) {
            $next = $curr->next;
            if($i % 2 != 0) {
                if($lastEven == null) {
                    $firstEven = new ListNode($curr->val);
                    $lastEven = $firstEven;
                } else {
                    $lastEven->next = $curr;
                    $lastEven = $lastEven->next;
                    $lastEven->next = null;
                }
            } else {
                if($lastOdd == null) {
                    $firstOdd = new ListNode($curr->val);
                    $lastOdd = $firstOdd;
                } else {
                    $lastOdd->next = $curr;
                    $lastOdd = $lastOdd->next;
                    $lastOdd->next = null;
                }
            }
            
            $curr = $next;
            $i++;
        }
        
        $lastOdd->next = $firstEven;
        return $firstOdd;
    }
}