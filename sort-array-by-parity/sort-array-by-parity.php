class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortArrayByParity($nums) {
        $arr = array_fill(0, count($nums), 0);
        
        $oddIndex = count($nums) - 1;
        $evenIndex = 0;
        
        for($i = 0; $i < count($nums); $i++) {
            if($nums[$i] % 2 == 0) {
                $arr[$evenIndex] = $nums[$i];
                $evenIndex++;
            } else {
                $arr[$oddIndex] = $nums[$i];
                $oddIndex--;
            }
        }
        return $arr;
    }
}