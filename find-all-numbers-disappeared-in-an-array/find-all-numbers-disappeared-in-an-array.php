class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function findDisappearedNumbers($nums) {
        
        $map = [];
        
        foreach($nums as $num) {
            if(isset($map[$num])) {
                $map[$num]++;
            } else {
                $map[$num] = 1;
            }
        }
        
        $res = [];
        
        for($i = 1; $i <= count($nums); $i++) {
            if(!isset($map[$i])) {
                $res[] = $i;
            }
        }
        
        
        return $res;
    }
}