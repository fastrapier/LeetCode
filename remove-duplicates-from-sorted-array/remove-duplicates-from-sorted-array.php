class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums)
    {

        $lastDistinct = count($nums) - 1;

        $index = count($nums) - 1;

        while ($index > 0) {

            if ($nums[$index] == $nums[$index - 1]) {
                $nums[$index] = "_";
                for ($i = $index; $i < $lastDistinct; $i++) {
                    $tmp = $nums[$i + 1];
                    $nums[$i + 1] = $nums[$i];
                    $nums[$i] = $tmp;
                }
                unset($nums[$lastDistinct]);
                $lastDistinct--;
            }

            $index--;
        }

        return count($nums);
    }
}