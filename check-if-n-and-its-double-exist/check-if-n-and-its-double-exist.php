class Solution {

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function checkIfExist($arr) {
        $length = count($arr);
        for($i = 0; $i < $length; $i++) {
            for($j = $i + 1; $j < $length; $j++) {
                if($arr[$i] == 2 * $arr[$j] || $arr[$i] * 2 == $arr[$j]) return true;
            }
        }
        return false;
    }
}