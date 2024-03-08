class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $last_index = count($nums) - 1;
        
        $left = 0;
        
        while ($left <= $last_index) {
            if ($nums[$last_index] == $val) {
                unset($nums[$last_index]);
                $last_index--;
                continue;
            }

            if ($nums[$left] == $val) {
                $nums[$left] = $nums[$last_index];
                $nums[$last_index] = $val;
            }
            $left++;
        }
    }
}