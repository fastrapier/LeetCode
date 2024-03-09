class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer[]
     */
    function replaceElements($arr) {
        $max = $arr[count($arr) - 1];

        for($i = count($arr) - 2; $i >= 0; $i--) {
            $tmp = $arr[$i];
            $arr[$i] = $max;
            $max = max($max, $tmp);
        }

        $arr[count($arr) - 1] = -1;
        return $arr;
    }
}