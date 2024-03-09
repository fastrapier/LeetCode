class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $currentIndex = 0;

        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] != 0) {
                $number = $nums[$i];
                $nums[$i] = 0;
                $nums[$currentIndex] = $number;
                $currentIndex++;
            }
        }
    }
}