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
     * @param Integer $val
     * @return ListNode
     */
    function removeElements($head, $val) {
        while ($head != null) {
            if ($head->val == $val) {
                $head = $head->next;
            } else {
                break;
            }
        }
        $prev = $head;
        $curr = $head;

        while ($curr != null) {
            if ($curr->next == null && $curr->val == $val) {
                $prev->next = null;
                $curr = null;
            } elseif ($curr->val == $val) {
                $prev->next = $curr->next;
                $curr = $curr->next;
            } else {
                $prev = $curr;
                $curr = $curr->next;
            }

        }

        return $head;
    }
}