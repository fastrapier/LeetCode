class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortedSquares($nums) {
        $res = [];

        $l = 0;

        $r = count($nums) - 1;

        while($l <= $r) {
            if(abs($nums[$l]) < abs($nums[$r])) {
                $res[] = pow($nums[$r], 2);
                $r--;
            } else {
                $res[] = pow($nums[$l], 2);
                $l++;
            }
        }

        return array_reverse($res);
    }
}