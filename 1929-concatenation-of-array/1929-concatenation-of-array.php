class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function getConcatenation($nums) {
        $ans = array();

        $ansIndex = 0;

        $currentNumsIndex = 0;

        $maxIndex = count($nums);

        while($ansIndex < $maxIndex * 2) {
            $ans[$ansIndex] = $nums[$currentNumsIndex];
            $currentNumsIndex++;
            $ansIndex++;
            if($currentNumsIndex == $maxIndex) {
                $currentNumsIndex = 0;
            } 
        }

        return $ans;
    }
}