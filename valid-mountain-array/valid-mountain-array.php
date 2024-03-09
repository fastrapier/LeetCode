class Solution {

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function validMountainArray($arr) {
        $i = 0;
        $j = count($arr) - 1;
        $n = count($arr);

        if($n < 3) return false;
        
        while($i + 1 < $n && $arr[$i] < $arr[$i + 1]) $i++;

        while($j > 0 && $arr[$j] < $arr[$j - 1]) $j--;

        return 0 < $i && $j < $n - 1 && $i == $j;
    }
}