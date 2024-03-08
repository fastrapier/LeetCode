class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMaxConsecutiveOnes($nums) {
        $max = 0;

        $consecutive = 0;

        foreach($nums as $num) {
            if($num == 1) {
                $consecutive++;
            } else {

            $max = max($consecutive, $max);

            $consecutive = 0;
            }
        }
        return max($consecutive, $max);
    }
}