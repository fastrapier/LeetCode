class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums)
    {

        $res = [];
        
        foreach($nums as $num) {
            if(!in_array($num, $res)) {
                $res[] = $num;
            }
        }
        
        $nums = $res;
        
        return count($res);
    }
}