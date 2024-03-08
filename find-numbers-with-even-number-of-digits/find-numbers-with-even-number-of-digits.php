class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findNumbers($nums) {
        $evenCount = 0;
        
        foreach($nums as $num) {
            if(strlen($num) % 2 == 0) {
                $evenCount++;
            }
        }
        
        return $evenCount;
    }
}