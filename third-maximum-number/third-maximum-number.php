class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function thirdMax($nums) {
        $firstMax = PHP_INT_MIN;
        $secondMax = PHP_INT_MIN;
        $thirdMax = PHP_INT_MIN;

        foreach($nums as $num) {
            if($firstMax == $num || $secondMax == $num || $thirdMax == $num) {
                continue;
            }

            if($firstMax <= $num) {
                $thirdMax = $secondMax;
                $secondMax = $firstMax;
                $firstMax = $num;
            } else if($secondMax <= $num) {
                $thirdMax = $secondMax;
                $secondMax = $num;
            } else if($thirdMax <= $num) {
                $thirdMax = $num;
            }
        }

        if($thirdMax == PHP_INT_MIN) {
            return $firstMax;
        }

        return $thirdMax;
    }
}